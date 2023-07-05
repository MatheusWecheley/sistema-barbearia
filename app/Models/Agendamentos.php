<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    use HasFactory;
    protected $table='agendamentos';
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $casts = ['data' => 'datetime:d-m-Y'];
    protected $guarded = [];

}
