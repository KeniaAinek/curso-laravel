<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = "notas"; //Override table to use

    protected $fillable = ["title",
    "description",
    "deadline",
    "done"
    ] ; //campos del objeto son manipulables a traves del modelo.

    // protected $guarded =  ; campos protegidos

    protected $casts = [
        "deadline" => "date"
    ]; //

    protected $hidden = [''] ; //ocultar datos cuando se serializan
}
