<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
        ];
    }


    public function educations()
    {
        return $this->hasMany(Education::class);
    }

     public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
     public function skills()
    {
        return $this->hasMany(Skill::class);
    }
    public function awards()
    {
        return $this->hasMany(Award::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function clients()
        {
            return $this->hasMany(Client::class);
        }
    


}
