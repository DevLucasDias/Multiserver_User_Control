<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerConnections extends Model
{
    use HasFactory;
    protected $fillable=[
        'course_name',
        'course_type',
        'course_area',
        'created_by'
     ];
}
