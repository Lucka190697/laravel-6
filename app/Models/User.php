<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Scopes\Search as SearchScope;

class User extends Authenticatable
{
    use Notifiable, HasRoles, SearchScope;

    protected $searchBy = [
        'name', 'email',
    ];

    protected $fillable = [
        'name', 'email', 'password', 'thumbnail', 'farm_id'
    ];

    protected static $logAttributes = [
        'name', 'email'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }
}