<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str; // Import the Str facade for UUID generation

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    // Indicate that the primary key is not auto-incrementing
    public $incrementing = false;

    // Indicate that the primary key is a UUID string
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image',
        'about_me',
        'occupation',
        'location',
        'skills',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'skills' => 'array', 
        ];
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * The "booting" method of the model.
     *
     * This is where we will set up our UUID generation logic.
     */
    protected static function boot()
    {
        parent::boot();

        // Listen for the 'creating' event on the User model
        static::creating(function ($model) {
            // If the 'id' is not already set, generate a UUID
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
