<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;

    protected $fillable=[
        'status',
        'name',
        'img',
    ];

    protected $hidden=[
        'created_at',
        'updated_at',
    ];

    public function property(){
        return $this->belongsTo(Property::class);
    }
}
