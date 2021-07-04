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
        'name', 'email', 'password', 'phone', 'thumbnail', 'farm_id'
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

    public function animals()
    {
        return $this->hasMany(Animal::class, 'responsible_id', 'id');
    }
}
