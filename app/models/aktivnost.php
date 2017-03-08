<?php 
use Illuminate\Database\Eloquent\Model as Model;
class Aktivnost extends Model {
	public $tema;
	public $opis;

	protected $table = "aktivnosti";
	protected $fillable = ["tema", "opis"];
}

 ?>