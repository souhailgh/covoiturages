<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['ville','commentaireclie'];

    public $timestamps = true;
}
