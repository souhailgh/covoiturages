<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class réserver extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','email','Téléphone','départ','arrivée', 'date' ,'heures','prix','chauffeur'];

    public $timestamps = true;
}
