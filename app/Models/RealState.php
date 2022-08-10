<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealState extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'url_img',
        'description',

    ];

    protected $hidden=[
        'created_at',
        'updated_at',
    ];

    public function owner(){
       return  $this->belongsTo(Owner::class);

    }

    public function ubloading(){
       return $this->hasMany(Uploading::class);

    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function propertyRealState(){
        return $this->hasMany(PropertyRealState::class);
    }
}
