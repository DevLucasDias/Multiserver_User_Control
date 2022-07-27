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
}