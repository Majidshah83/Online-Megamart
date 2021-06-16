<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //Property of Model
    protected $connction='mysql';   //for create connection mysql or sqllite
    protected $table='user'; // For name of table
    protected $primarykey='prd-id'; // creat primary key
    protected $keyType='string'; // Non numric and non incremental
    public $incrementing='false';
    public $timestamps='false';
}
