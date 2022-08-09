<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $appends =[
        'name',
    ];

    public function realStates(){
        return $this->hasMany(RealState::class);
    }
}
