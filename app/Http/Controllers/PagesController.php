<?php

	namespace App\Http\Controllers;



	class PagesController extends Controller {

		public function getIndex() {

			#process variable data or parameters
			#talk to the model
			#recieve from the model
			#compile or process data from the model if needed
			# pass that data to the correct view
			return view('pages.welcome');

		}

		public function getAbout() {

			$first = 'Utsav';
			$last = 'Lama';

			$data = [];
			$data['email'] = 'uts.lama@gmail.com';
			$data['number'] = '9851001232';

			$full = $first . " " . $last;

			return view('pages.about')-> with("fullname", $full) -> withData($data);
		}

		public function getContact() {
			
			return view('pages.contact');
		}

	}


?>