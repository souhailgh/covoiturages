<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestion_trajet extends Model
{
    use HasFactory;
    protected $fillable = ['départ','arrivée', 'date' ,'heures','prix','chauffeur'];

    public $timestamps = true;
}
