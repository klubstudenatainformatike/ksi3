<?php 
use Illuminate\Database\Eloquent\Model as Model;
class Activity extends Model {
	public $tema;
	public $opis;

	protected $table = 'activities';
	protected $fillable = ['subject', 'description'];
}

 ?>