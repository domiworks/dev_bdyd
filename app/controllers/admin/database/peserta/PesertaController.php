<?php

use Carbon\Carbon;

class PesertaController extends BaseController {


	
	public function create_user(){ 

		$nama_lengkap 		= Input::get('nama_lengkap');
		$nama_panggilan 	= Input::get('nama_panggilan');
		$jenis_kelamin 		= Input::get('jenis_kelamin');
		$tempat_lahir 		= Input::get('tempat_lahir');
		$tanggal_lahir 		= Input::get('tanggal_lahir');
		$alamat_tinggal 	= Input::get('alamat_tinggal'); 
		$kota_tinggal 		= Input::get('kota_tinggal'); //Bandung, bandung, BANDUNG
		$no_handphone 		= Input::get('no_handphone');
		$pekerjaan 			= Input::get('pekerjaan');
		$kegiatan_gereja 	= Input::get('kegiatan_gereja');
		$hobi_bakat 		= Input::get('hobi_bakat');
		$dekanat 			= Input::get('dekanat');
		$paroki 			= Input::get('paroki');
		$kesediaan_informasi	= Input::get('kesediaan_informasi');

		$jumlah_hari	= Input::get('jumlah_hari');

		$email		= Input::get('email');
		$password 	= Input::get('password');
 
		$birdtype			= '';
		$status_aktivasi	= '0';
		$status_peserta		= '0';
		$status_bayar		= '0';
		$days_count			= '0';
		$price 			= '';

		$current_time = Carbon::now(); 
		$kota_bandung = strtolower($kota_tinggal);
		

		// $time_bird_1 = Price::where('id','=','1')->where('earlybird','=','1')->first(); 
		// $time_bird_2 = Price::where('id','=','1')->where('earlybird','=','2')->first(); 
		// $time_bird_3 = Price::where('id','=','1')->where('earlybird','=','3')->first(); 

		$tb1_start = new DateTime('2015-05-10 00:00:00');
		$tb1_end 	= new DateTime('2015-06-30 23:59:59'); 
		$tb2_start = new DateTime('2015-07-01 00:00:00');
		$tb2_end 	= new DateTime('2015-08-31 23:59:59'); 
		$tb3_start = new DateTime('2015-09-01 00:00:00');
		$tb3_end 	= new DateTime('2015-09-30 23:59:59'); 

		//300 350 400 minggu

		if($jumlah_hari == 1){ //daytype
			if($kota_bandung == 'bandung'){ //dalam kota
				if(($tb1_start < $current_time) && ($current_time < $tb1_end)){ // bird 1
					$price = '20000';		
					$birdtype = '1'; 
				}elseif(($tb2_start < $current_time) && ($current_time < $tb2_end)){ //bird 2
					$price = '30000';
					$birdtype = '2';
				}elseif(($tb3_start < $current_time) && ($current_time < $tb3_end)){ //bird 3
					$price = '50000';
					$birdtype = '3';
				}else{
					$price = ' gak masuk bandung 1';
				}
				// $price = 'bandung 1';
			}else{ // luar kota
				if(($tb1_start < $current_time) && ($current_time < $tb1_end)){ // bird 1
					$price = '20000';	
					$birdtype = '1'; 
				}elseif(($tb2_start < $current_time) && ($current_time < $tb2_end)){ //bird 2
					$price = '30000';	
					$birdtype = '2'; 
				}elseif(($tb3_start < $current_time) && ($current_time < $tb3_end)){ //bird 3
					$price = '50000';	
					$birdtype = '3'; 
				}else{
					$price = ' gak masuk luar bandung 1';
				}
				// $price = 'luar bandung 1';
			} 
		}elseif($jumlah_hari == 2){ //daytype
			if($kota_bandung == 'bandung'){ //dalam kota
				if(($tb1_start < $current_time) && ($current_time < $tb1_end)){ // bird 1
					$price = '100000';	
					$birdtype = '1'; 
				}elseif(($tb2_start < $current_time) && ($current_time < $tb2_end)){ //bird 2
					$price = '125000';	
					$birdtype = '2'; 
				}elseif(($tb3_start < $current_time) && ($current_time < $tb3_end)){ //bird 3
					$price = '150000';	
					$birdtype = '3'; 
				}else{
					$price = ' gak masuk bandung 2';
				}
				// $price = 'bandung 2';
			}else{ // luar kota
				if(($tb1_start < $current_time) && ($current_time < $tb1_end)){ // bird 1
					$price = '75000';	
					$birdtype = '1'; 
				}elseif(($tb2_start < $current_time) && ($current_time < $tb2_end)){ //bird 2
					$price = '100000';	
					$birdtype = '2'; 
				}elseif(($tb3_start < $current_time) && ($current_time < $tb3_end)){ //bird 3
					$price = '150000';	
					$birdtype = '3'; 
				}else{
					$price = ' gak masuk luar bandung 2';
				}
				// $price = 'luar bandung 2';
			} 
		}
 

		$new_pendaftar = new Peserta();
 
		$new_pendaftar->nama_lengkap 		= $nama_lengkap;
		$new_pendaftar->nama_panggilan 		= $nama_panggilan;
		$new_pendaftar->jenis_kelamin 		= $jenis_kelamin;
		$new_pendaftar->tempat_lahir 		= $tempat_lahir;
		$new_pendaftar->tanggal_lahir 		= $tanggal_lahir;
		$new_pendaftar->alamat_tinggal 		= $alamat_tinggal;
		$new_pendaftar->kota_tinggal 		= $kota_tinggal;
		$new_pendaftar->no_handphone 		= '+62'.$no_handphone;
		$new_pendaftar->pekerjaan 			= $pekerjaan;
		$new_pendaftar->kegiatan_gereja 	= $kegiatan_gereja;
		$new_pendaftar->hobi_bakat 			= $hobi_bakat;
		$new_pendaftar->dekanat 			= $dekanat;
		$new_pendaftar->paroki 				= $paroki;
		$new_pendaftar->kesediaan_informasi	= $kesediaan_informasi;
		$new_pendaftar->jumlah_hari			= $jumlah_hari;


		$new_pendaftar->email				= $email;	
		$new_pendaftar->password 			= Hash::make($password);

		$new_pendaftar->birdtype			= $birdtype;
		$new_pendaftar->status_aktivasi		= $status_aktivasi;
		$new_pendaftar->status_peserta		= $status_peserta;
		$new_pendaftar->status_bayar		= $status_bayar;
		$new_pendaftar->days_count			= $days_count;

		$new_pendaftar->price 				= $price;


		$length = 10;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}

		$quota_total = Quota::where('id','=','1')->first();
		$total_quota_sementara = $quota_total->jumlah + 1; 
		$quota_total->jumlah = $total_quota_sementara;

		//format id pendaftaran
		$dl_id = '';
		$coce_id ='';
		$paroki_id = $paroki;
		$kode_daftar =  $total_quota_sementara;
		if($kota_bandung == 'bandung' ){
			$dl_id = 'D';
		}else{
			$dl_id = 'L';
		};

		if($jenis_kelamin == '0'){
			$coce_id = 'ce';
		}else{
			$coce_id = 'co';
		};
		
		// $string = preg_replace('/\s+/', '', $string);
		$new_pendaftar->id_pendaftaran 		= preg_replace('/\s+/', '', $dl_id.$coce_id.$paroki_id.$kode_daftar);

		//cek nama
		// $known_name = Peserta::where('nama_lengkap','')
 

		// $tralala = 'admin';
		// $trilili = Hash::make('admin');
		// $trololo = '';

		// if(Hash::check($tralala,$trilili)){
		// 	$trololo = "1";
		// }

		try{

			$cek_email_db = Peserta::where('email','=',$email)->first(); 
			if(count($cek_email_db) > 0){
				//ada email sama
				// break;
			}

			$new_pendaftar->save(); 
			$quota_total->save();
 
 			//kirim ke pendaftar
			$email_address = $email; 
			$to = $email_address;
			$subject = "Pendaftaran BDYD";

			$headers = "From: registrasi.bdyd2014e\r\n";
			$headers .= "Reply-To: registrasi.bdyd2014@gmailr\n";
			$headers .= "Return-Path: ".$email_address."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			// $message = "Pendaftaran BDYD<br/>";  
			// $message .= "ID: ".$nama_lengkap."<br/>";
			// $message .= "ID: ".$nama_panggilan."<br/>";
			// $message .= "ID: ".$jenis_kelamin."<br/>";
			// $message .= "ID: ".$tempat_lahir."<br/>";
			// $message .= "ID: ".$tanggal_lahir."<br/>";
			// $message .= "ID: ".$alamat_tinggal."<br/>";
			// $message .= "ID: ".$kota_tinggal."<br/>";
			// $message .= "ID: ".$no_handphone."<br/>";
			// $message .= "ID: ".$pekerjaan."<br/>";
			// $message .= "ID: ".$kegiatan_gereja 	."<br/>";
			// $message .= "ID: ".$hobi_bakat."<br/>";
			// $message .= "ID: ".$dekanat."<br/>";
			// $message .= "ID: ".$paroki."<br/>";
			// $message .= "ID: ".$kesediaan_informasi."<br/>";

			$message = "<html><body>";
			$message .= "<table rules='all' cellpadding='20'>";
			$message .= "<tr>";
			$message .= "<td style='text-align: center;'>	"; 
			$message .= "</td></tr><tr><td>";
			$message .= "<h1 style='font-family: Open Sans, helvetica, arial, sans-serif; font-weight: 300; text-align: center; color: #228b22;'>Thank you!</h1>";
			$message .= "<h2 style='font-family: Open Sans, helvetica, arial, sans-serif; font-weight: 300; text-align: center;'>$nama_lengkap</h2>";
			$message .= "<h3 style='font-family: Open Sans, helvetica, arial, sans-serif; font-weight: 300; text-align: center;'>No. Pendaftaran Anda adalah ID SEKIAN</h3>";
			$message .= "<p style='font-family: Open Sans, helvetica, arial, sans-serif; text-align: center; width: 570px;'>";
			$message .= "Karena telah mendaftarkan diri di <a href='http://bdyd.info/'>BDYD 2015</a> <br/>yang akan diadakan pada Bulan Oktober 2015</p></td></tr>";
			$message .="</table></body></html>";
 
			mail($to,$subject,$message,$headers,'-f'.$email_address);	

			$email_admin= Admin::all();

			//kirim ke pantia
			$email_address = $email; 
			$to = "lief.johan@gmail.com";
			$subject = "Pendaftaran BDYD";

			$headers = "From: registrasi.bdyd2014@bdyd.info\r\n";
			$headers .= "Reply-To: registrasi.bdyd2014@gmail\r\n";
			$headers .= "Return-Path: ".$email_address."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$message = "<html><body>";
			$message .= "<table rules='all' cellpadding='20'>";
			$message .= "<tr>";
			$message .= "<td style='text-align: center;'>	"; 
			$message .= "</td></tr><tr><td>";
			$message .= "<h1 style='font-family: Open Sans, helvetica, arial, sans-serif; font-weight: 300; text-align: center; color: #228b22;'>Thank you!</h1>";
			$message .= "<h2 style='font-family: Open Sans, helvetica, arial, sans-serif; font-weight: 300; text-align: center;'>$nama_lengkap</h2>";
			$message .= "<h3 style='font-family: Open Sans, helvetica, arial, sans-serif; font-weight: 300; text-align: center;'>No. Pendaftaran Anda adalah ID SEKIAN</h3>";
			$message .= "<p style='font-family: Open Sans, helvetica, arial, sans-serif; text-align: center; width: 570px;'>";
			$message .= "Karena telah mendaftarkan diri di <a href='http://bdyd.info/'>BDYD 2015</a> <br/>yang akan diadakan pada Bulan Oktober 2015</p></td></tr>";
			$message .="</table></body></html>";

			mail($to,$subject,$message,$headers,'-flief.johan@gmail.com');	

 
			return $new_pendaftar->id_pendaftaran;
		}
		catch(Exception $e){
			return $e;
		}
 
	}

	public function confirm_registration() {
		return 'confirm registration';
	}	

	public function get_all(){
		return Peserta::all();
	}






	public static function get_user_list(){
		return User::select('id','username')->get();
	}





	
	public function update_password($id){
		$password = Input::get('password');
		$new_password = Input::get('new_password');
		
		$user = User::find($id);
		
		if(count($user)==1){
			if(Hash::check($password,$user->password)){
				$user->password = Hash::make($new_password);
				$user->save();
				return "1";//'Change Password Success';//1
			}
			else{
				return "0";//'Wrong Password. Please try it again';//0
			}
		}
		else{
			return 'User does not exist!';
		}
	}
	
	public function delete_user($id){
		$user = User::find($id);
		$name = $user->username;
		$result = $user->delete();
		if($result){
			return $name;
		}
		else{
			return "0";//'There are some error. Please contact webmaster!';
		}
	}
	
	// public function login(){
	// 	$username = Input::get('username');
	// 	$password = Input::get('password');
		
	// }
	
	// public function logout(){
		
	// }
	
}

?>