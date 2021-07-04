<?php


namespace App\Repositories;

use App\Models\Animal;

class AnimalRepository extends Repository
{
    protected function getClass()
    {
        return Animal::class;
    }
}