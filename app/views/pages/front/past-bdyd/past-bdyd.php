@extends('layouts.layout')
@section('content')	

<form class="form-horizontal" role="form">
	<div class="form-group">
		<label class="g-sm-4 control-label">Product Name</label>
		<div class="g-sm-5">
			<input type="hidden" value="" id="hidProdName"/>
			<input id="f_input_prodname" type="text" class="form-control addProdName" value=""/>	
		</div>
		<div class="g-sm-3">
			<span id="cekProdName" class="btn btn-danger hidden">Nama product ini sudah ada</span>	
		</div>
		<div class="g-sm-3">
		</div>
	</div>
	pembayan group/single
	kode pendaftaran
	cara pembayaran (transfer/tunai via teller/atm) 
	nama bank pengirim
	nama rekening pengirim
	ammount
	tanngal pembayaran
	capthca
	[button]
</form>


@stop