@extends('master')
@section('content')

<div class="body body-s">		
			<form action="" id="sky-form" class="sky-form" method="post" >
				<header>Log in as {{$value = Session::get('userN');}} </header>
				<fieldset>	
						<label>Welcome  <h1>{{$value}} </h1> Select Edit button if you want to edit</label> 
    		    		<input type="hidden" name="userName" value="{{$value}}"/>
				</fieldset>
				<footer>						  		    			
    		   				<button type="submit" class="button button-update" name="edit" value="edit">Edit</button>
    		   				<button type="submit" class="button button-cancel" name="cancel" value="cancel">Cancel</button>
				</footer>
				
				
			</form>	
		</div>
@endsection