<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'address',
        'email'
    ];

    public function locations(){

        return $this->hasMany(Location::class,'business_id','id');
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
