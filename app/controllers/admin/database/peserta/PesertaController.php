<?php

use Carbon\Carbon;

class PesertaController extends BaseController {


	
	public function create_user(){

		// $nama_lengkap 		= Input::get('nama_lengkap');
		// $nama_panggilan 		= Input::get('nama_panggilan');
		// $jenis_kelamin 		= Input::get('jenis_kelamin');
		// $tempat_lahir 		= Input::get('tempat_lahir');
		// $tanggal_lahir 		= Input::get('tanggal_lahir');
		// $alamat_tinggal 		= Input::get('alamat_tinggal');
		// $kota_tinggal 		= Input::get('kota_tinggal');
		// $no_handphone 		= Input::get('no_handphone');
		// $pekerjaan 			= Input::get('pekerjaan');
		// $kegiatan_gereja 	= Input::get('kegiatan_gereja');
		// $hobi_bakat 			= Input::get('hobi_bakat');
		// $dekanat 			= Input::get('dekanat');
		// $paroki 				= Input::get('parok');
		// $kesediaan_informasi	= Input::get('kesediaan_informasi');


		// $email				= Input::get('email');	
		// $password 			= Input::get('password');

		// birdtype
		// status_aktivasi
		// status_peserta
		// status_bayar
		// days_count


		$nama_lengkap 		= '1';
		$nama_panggilan 	= '1';
		$jenis_kelamin 		= '1';
		$tempat_lahir 		= '1';
		$tanggal_lahir 		= '0000-00-00';
		$alamat_tinggal 	= '1';
		$kota_tinggal 		= '1';
		$no_handphone 		= '1';
		$pekerjaan 			= '1';
		$kegiatan_gereja 	= '1';
		$hobi_bakat 		= '1';
		$dekanat 			= '1';
		$paroki 			= '1';
		$kesediaan_informasi	= '1';


		$email		= '1';	
		$password 	= '1';

		$birdtype			= '1';
		$status_aktivasi	= '1';
		$status_peserta		= '1';
		$status_bayar		= '1';
		$days_count			= '1';


		
		
		// $user = Peserta::where('username','=',$username)->first();
		
		// if(count($user)==0){

		$new_pendaftar = new Peserta();

		// $new_pendaftar->username = $username;
		// $new_pendaftar->password = Hash::make($password);

		$new_pendaftar->nama_lengkap 		= $nama_lengkap;
		$new_pendaftar->nama_panggilan 		= $nama_panggilan;
		$new_pendaftar->jenis_kelamin 		= $jenis_kelamin;
		$new_pendaftar->tempat_lahir 		= $tempat_lahir;
		$new_pendaftar->tanggal_lahir 		= $tanggal_lahir;
		$new_pendaftar->alamat_tinggal 		= $alamat_tinggal;
		$new_pendaftar->kota_tinggal 		= $kota_tinggal;
		$new_pendaftar->no_handphone 		= $no_handphone;
		$new_pendaftar->pekerjaan 			= $pekerjaan;
		$new_pendaftar->kegiatan_gereja 	= $kegiatan_gereja;
		$new_pendaftar->hobi_bakat 			= $hobi_bakat;
		$new_pendaftar->dekanat 			= $dekanat;
		$new_pendaftar->paroki 				= $paroki;
		$new_pendaftar->kesediaan_informasi	= $kesediaan_informasi;


		$new_pendaftar->email				= $email;	
		$new_pendaftar->password 			= $password;

		$new_pendaftar->birdtype			= $birdtype;
		$new_pendaftar->status_aktivasi		= $status_aktivasi;
		$new_pendaftar->status_peserta		= $status_peserta;
		$new_pendaftar->status_bayar		= $status_bayar;
		$new_pendaftar->days_count			= $days_count;


		try{
			$new_pendaftar->save();
			return 'User is successfully created.';
		}
		catch(Exception $e){
			return $e;
		}

		// }
		// else{
		// 	return 'User '.$username.' has already existed.';
		// }

		// return "create_user can be accessed";
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