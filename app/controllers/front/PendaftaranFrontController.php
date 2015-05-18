<?php

	class PendaftaranFrontController extends BaseController {
	

			public function view_pendaftaran(){ 
				$all_paroki = ParokiController::get_all_paroki();
				return View::make('pages.front.pendaftaran.pendaftaran', compact('all_paroki'));
			}

			public function view_konfirmasi(){ 
				// $all_paroki = ParokiController::get_all_paroki();
				return View::make('pages.front.confirmation.confirmation');
			}			

			public function view_all_peserta(){ 
				// $all_paroki = ParokiController::get_all_paroki();
				return View::make('pages.front.confirmation.confirmation');
			}

	}

?>