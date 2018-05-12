<?php

namespace proyectDs;

use Illuminate\Database\Eloquent\Model;

class Prerequisito extends Model
{
    protected $table='prerequisito';
    protected $primaryKey='id';
    //public $incrementing = false;
    public $timestamps=false;
    protected $fillable = [
    	'codigo_curso',
    	'codigo_pre',
    ];
    protected $guarded = [];
}
