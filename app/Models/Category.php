<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

class Category extends Model
{
    use HasFactory, HasHashid, HashidRouting;

    protected $guarded = [];
    protected $appends = ['hashid'];

    public function company()
    {
        return $this->hasMany(Company::class);
    }

    public function provision()
    {
        return $this->hasMany(Provision::class);
    }
}
