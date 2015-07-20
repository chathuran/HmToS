@extends('master')
@section('content')
<div class="body body-s">		
			<form action="" id="sky-form" class="sky-form" method="post" >
				<header> Select Beacon</header>
				<fieldset >					
					<section class="beaconset">
						@foreach(  $beacon as $be)
							@if( $be->beaconName == 'Icy Marshmallow')
										
    		    						<button type="submit" class="button button-beaconIcy" name="beaconName" value="{{$be->beaconName}}">{{$be->beaconName}}</button>
    		    			@endif	

    		    			@if( $be->beaconName == 'Mint Cocktail')
										
    		    						<button type="submit" class="button button-beaconMint" name="beaconName" value="{{$be->beaconName}}">{{$be->beaconName}}</button>
    		    			@endif	

    		    			@if( $be->beaconName == 'Blueberry Pie')
										
    		    						<button type="submit" class="button button-beaconBlue" name="beaconName" value="{{$be->beaconName}}">{{$be->beaconName}}</button>
    		    			@endif			
    		    						
    		    			@endforeach
    		    			
					</section>
					
					
					
					
				</fieldset>
				<footer>
							
								
    		    			
    		    						
					<button type="submit" class="button" name="goHome" value="goHome">Go Home</button>
					<button type="submit" class="button button-cancel" name="cancel" value="cancel">Cancel</button>
				
    		    			
    		    			
				</footer>
				
				
			</form>	
		</div>
		
	
@endsection