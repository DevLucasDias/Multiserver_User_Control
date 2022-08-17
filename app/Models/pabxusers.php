<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pabxusers extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'user',
        'password',
        'created_by',
        'acess',
        'samu',
        'pj'
     ];

     public function scopeProcurar($query, $termo)
     {
        $termo =  "%$termo%";
        $query->where(function($query) use ($termo){
         $query->where('user', 'like', $termo)
         ->orWhere('id','like', $termo)
         ->orWhere('name','like', $termo);
        });
         
     }
}