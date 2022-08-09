<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteRealState extends Model
{
    use HasFactory;

    public $fillable=[
        'real_state_id',
        'customer_id'
    ];

    public function realState() {
        return $this->belongsTo(RealState::class , 'real_state_id');
    }
}
