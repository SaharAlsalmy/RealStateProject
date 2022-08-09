<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'company_name',
         'Agent_name',
         'mobile_number',
         'tel_number',
         'email_address',
         'office_address',
         'office_hours',
         'profile_photo_path',


   ];

   protected $hidden=[
       'created_at',
       'updated_at',
   ];

    /** Relations */

   public function owner(){

    return $this->belongsTo(Owner::class);
   }
}
