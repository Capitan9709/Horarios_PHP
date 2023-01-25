<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Horas extends Model
{
    protected $table = 'horas';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['diaH', 'horaH', 'asignatura_id'];

    protected $fillable = ['diaH','horaH','asignatura_id'];

    protected $hidden = ['asignatura_id'];

    
    public function obtenerHoras(){
        return Horas::all()->where('user_id', '=', $this->asignatura_id);
    }

    public function obtenerHoraPorId($id){
        return Horas::find($id);
    }

}
