<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class tareaModel extends Model
{
    protected $table = "tareas";
	protected $fillable = ['id_tarea','titulo','contenido','id_usuario'];
}