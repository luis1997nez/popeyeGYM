<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'reservacion';
    
    protected $fillable = [
        'numero','fecha',
    ];
}
