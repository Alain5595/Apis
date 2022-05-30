<?php
 
namespace App\Models\v1;
 
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;


class Paciente extends Model
{
    use HasUUID;

  
    protected $table = 'paciente';
    protected $primaryKey = 'dni';
    protected $keyType = 'string';
    protected $uuidFieldName = 'dni';
    
    
}