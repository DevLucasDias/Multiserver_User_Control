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
        'usernamesql',
        'passwordsql',
        'databasename',
        'typeofclient',
        'created_by'
     ];

     public function scopeProcurar($query, $termo)
     {
        $termo =  "%$termo%";
        $query->where(function($query) use ($termo){
         $query->where('organization_name', 'like', $termo)
         ->orWhere('ipadress','like', $termo);
        });
         
     }
}
