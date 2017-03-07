<?php 

use Illuminate\Database\Eloquent\Model;

class User extends Model{
	public $name;
	protected $table = 'users';
	protected $fillable = ['username', 'email'];
}

 ?>