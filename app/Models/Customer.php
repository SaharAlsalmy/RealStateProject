<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'username',
        'mail_id',
        'mobile_number',
        'password',
        'photo',


    ];

    protected $hidden=[
        'created_at',
        'updated_at',
    ];


    /** Relations */

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function favorites()
    {
        return $this->hasMany(FavoriteRealState::class, 'customer_id');

    }
    public function favorite()
    {
        return $this->belongsToMany(FavoriteVehicle::class, 'customer_id');

    }
}
