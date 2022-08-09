<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploading extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'upload_name',
        'real_state_id',


    ];

    protected $hidden=[
        'created_at',
        'updated_at',
    ];

    public function realState(){
        return $this->belongsTo(RealState::class);

    }

    public function images (){
        return $this->hasMany(Image::class);

    }
}
