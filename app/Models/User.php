<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @method bool isManager()
 * @method bool isAdmin()
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastname','firstname',
        'email',
        'password',
        'birthday',
        'image',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function Lessons(){
        return $this->belongsToMany(Lesson::class, 'lesson_user');
    }
    public function Subscription(){
        return $this->hasOne(Subscription::class);
    }

    public function Payment(){
        return $this->hasMany(Payment::class);
    }

    public static function getEmailChecked($email){
        return self::where('email', $email)->first();
    }

    public static function getTokenSingle($token){
        return self::where('remember_token', $token)->first();
    }


    public function roles(){
        return $this->belongsToMany(Role::class,'role_user', 'user_id', 'role_id');
    }

    public function Coach(){
        return $this->hasOne(Coach::class,'id');
    }

    public function isAdmin(){
        return $this->roles()->where('name', 'admin')->exists();
    }
    public function isManager(){
        return $this->roles()->where('name','manager')->exists();
    }
}
