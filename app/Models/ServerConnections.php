<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serverconnections extends Model
{
    use HasFactory;
    protected $fillable=[
        'organization_name',
        'ipadress',
        'created_by'
     ];
}
