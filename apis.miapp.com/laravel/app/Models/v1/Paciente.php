<?php
 
namespace App\Models\v1;
 
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use HasUUID;
    use SoftDeletes;
  
    protected $table = 'pacientes';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';
    
    
}