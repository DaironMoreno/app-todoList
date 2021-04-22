<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table = "usuarios";
	protected $fillable = ['email','password'];
}   