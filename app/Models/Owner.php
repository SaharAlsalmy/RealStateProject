<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
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

    public function owenerDetails(){
        return $this->hasMany(OwnerDetail::class);
    }

}
