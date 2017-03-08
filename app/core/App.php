<?php 

class App {

	protected $controller = "klub";
	protected $method = "index";
	protected $params = [];



	public function __construct($u) {
		$url = $this->parseUrl($u);
		unset($url[0]);
		if(file_exists("../app/controllers/".$url[1].".php")) {
			$this->controller = $url[1];
			unset($url[1]);
		}

		require_once "../app/controllers/".$this->controller.".php";
		$this->controller = new $this->controller;
		

		if(isset($url[2])) {
			if(method_exists($this->controller, $url[2])) {
				$this->method = $url[2];
				unset($url[2]);
			}
		}
		$this->params = $url ? array_values($url) : []; // rebase paramateres
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseUrl($u) {
		if(isset($u)) {
			return $url =  explode('/', filter_var(rtrim($u, '/'), FILTER_SANITIZE_URL));
		}
	}
}
 ?>