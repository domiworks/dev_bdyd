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
		$kota_tinggal 		= Input::get('kota_tinggal');
		$no_handphone 		= Input::get('no_handphone');
		$pekerjaan 			= Input::get('pekerjaan');
		$kegiatan_gereja 	= Input::get('kegiatan_gereja');
		$hobi_bakat 		= Input::get('hobi_bakat');
		$dekanat 			= Input::get('dekanat');
		$paroki 			= Input::get('parok');
		$kesediaan_informasi	= Input::get('kesediaan_informasi');


		$email		= Input::get('email');	
		$password 	= Input::get('password');

		birdtype
		status_aktivasi
		status_peserta
		status_bayar
		days_count


		// $username = Input::get('username');
		// $password = Input::get('password');
		
		// $user = User::where('username','=',$username)->first();
		
		// if(count($user)==0){
		// 	$new_user = new User();
			
		// 	$new_user->username = $username;
		// 	$new_user->password = Hash::make($password);
			
		// 	try{
		// 		$new_user->save();
		// 		return 'User '.$username.' is successfully created.';
		// 	}
		// 	catch(Exception $e){
		// 		return 'There are some error. Please contact web master.';
		// 	}
		// }
		// else{
		// 	return 'User '.$username.' has already existed.';
		// }
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