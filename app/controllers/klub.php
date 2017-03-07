<?php 

	class Klub extends Controller {

		public function index($name = '') {
			$this->view('klub/index');
		}


		/*public function create(){
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
			User::create(['username' => $name, 'email' => $email,'password' => $pass]);
			echo  'User created!<br>';
			echo  $name . '<br>';
			echo  $email . '<br>';
			echo  $pass . '<br>';
			} else {
				echo "Error!";
				die();
			}
		}*/

		public function aktivnosti() {
			$this->view('klub/aktivnosti');
		}

		public function projekti() {
			$this->view('klub/projekti');
		}

		public function register() {
			$this->view('klub/register');
		}

		public function login() {
			$this->view('klub/login');
		}

	}		
?>