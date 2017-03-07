<?php 

class Controller {

	public function model($model) {
		require_once '/var/www/html/mvc/app/models/'.$model.'.php';
		return new $model();
	}

	public function view($view, $data = []) {
		require_once '/var/www/html/mvc/app/views/templates/header.php';
		require_once '/var/www/html/mvc/app/views/'.$view.'.php';
		require_once '/var/www/html/mvc/app/views/templates/footer.php';
	}
} 

?>
