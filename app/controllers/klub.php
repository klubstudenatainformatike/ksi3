<?php 
require_once "/var/www/html/mvc/app/models/activities.php"; // ipsraviti da koristi autoloader
	class Klub extends Controller {

		public function index($name = '') {
			$this->view('klub/index');
		}


		public function create(){
			User::create(['username' => 'bob233', 'email' => 'bob44321314@mail.com','password' => '123']);
			echo  'User created!<br>';
		}

		public function aktivnosti($param=null) {
			if($param === 'predlozi' && $_SERVER['REQUEST_METHOD'] === 'POST') {
				if(!empty($_POST['subject']) && !empty($_POST['description'])) {
					$subject = htmlspecialchars($_POST['subject']);
					$description = htmlspecialchars($_POST['description']);
					Activity::create(["subject" => $subject, "description" => $description]);
					echo "Aktivnost sacuvana!"; // srediti redirect
				}
			} else if($param === null) {
				$posts = Activity::all();
				
				$this->view('klub/aktivnosti', ['posts' => $posts]);
			} else if(is_numeric($param)){
				$post = Activity::find((int)$param);	
				echo "<pre>" . $post . "</pre>";
				$this->view('klub/aktivnosti', ['post' => $post]);
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