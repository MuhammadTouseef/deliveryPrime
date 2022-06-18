<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
        'business_name',
        'city',
        'address',
        'proof',
        'is_Verified'

    ];

    public function user(){
        return $this->belongsTo(Users::class, 'user_id');
    }

    protected $table = 'business';
}
