<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'code', 'name', 'born_date', 'age_classification', 'sex',
        'production_classification', 'breed', 'thumbnail',
        'mother_id', 'farm_id', 'responsible_id',
    ];

    protected $dates = ['deleted_at'];

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id', 'id');
    }

//    public function heats()
//    {
//        return $this->hasMany(AnimalHeat::class);
//    }

    public function responsible()
    {
        return $this->belongsTo(User::class, 'responsible_id', 'id');
    }


}
