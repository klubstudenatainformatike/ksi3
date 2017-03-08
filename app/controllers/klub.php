<?php 

	class Klub extends Controller {

		public function index($name = '') {
			$this->view('klub/index');
		}


		public function create(){
			User::create(['username' => 'bob3', 'email' => 'bob444@mail.com','password' => '123']);
			echo  'User created!<br>';
		}

		public function aktivnosti($predlog=null) {
			if($predlog !== null && $_SERVER['REQUEST_METHOD'] === 'POST') {
				if(!empty($_POST['tema']) && !empty($_POST['opis'])) {
					$tema = htmlspecialchars($_POST['tema']);
					$opis = htmlspecialchars($_POST['opis']);
					Aktivnost::create(["tema" => $tema, "opis" => $opis]);
					echo "Aktivnosti sacuvana";
				}
			} else {
				$this->view('klub/aktivnosti');
			}
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