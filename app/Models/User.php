<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use SoftDeletes;
    use HasFactory;
    use Notifiable;
    use AuthenticableTrait;

    public const TYPES = [
        'admin' => 1,
        'student' => 2,
    ];

    public $fillable =[
        'name',
        'username',
        'email',
        'password',
        'type',
        'verified_at',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function schools()
    {
        return $this->belongsTo(School::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function isAdmin()
    {
        return $this->type == self::TYPES['admin'];
    }

    public function isStudent()
    {
        return $this->type == self::TYPES['student'];
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function hasVerifiedEmail()
    {
        return !is_null($this->verified_at);
    }

    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'verified_at' => $this->freshTimestamp(),
        ])->save();
    }
}
