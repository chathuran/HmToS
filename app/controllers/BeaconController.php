<?php
class BeaconController extends BaseController{

	public function getRequest($id)
	{
		$message= DB::table('beacons')->where('minor',$id)->get();

		return Response::json(array('message'=> $message[0]));
	}


	public function getBeaconStart()
	{
		return View::make('beacon.userMain');
		//return 'gggg';
	}
	/*
	public function getBeaconHome()
	{
			$user=Input::get('userName');
			
			//return Redirect::to('beaconHome')->with('user',$user);
			//return Redirect::route('profile', array(1));

		//	return Redirect::action('BeaconController@getBeaconHome ', array('user' => $user));
			//return $user;
	}
	*/
	public function postBeaconHome()
	{
		$user=Input::get('userName');
		//$beaconList=Beacon::where('userName', '=', $user)->get();
		$beaconList = DB::table('beacons')
			->where('userName', '=', $user)
  			->get();

  		 
  		 Session::flash('beacons',$beaconList);
  		 return Redirect::to('beaconHome');
  		 //->with('beacon',$beacons);
		//return View::make('beacon.beaconHome')
		//		->with('beacon',$beacons);
		//return $beaconList;
	}

	
	public function getBeacons()
	{
		$beacons = Session::get('beacons');
		return View::make('beacon.beaconHome')
				->with('beacon',$beacons);
		//return $userName;
		/*
		$userName = Session::get('user');
		$beacons = DB::table('beacons')
  		->where('userName', '=', $userName)
  		->get();
  		 return Redirect::to('beacon.beaconHome')
  		 ->with('beacon',$beacons);
		
		*/
		
	}

	public function postBeaconDetails()
	{
		//return dd(Input::all());
		//return "fffff";
		//$email = Auth::user()-> email;
		//return $email;

		 $bName = Input::get('beaconName');
	
		

		 $beaconMe= DB::table('beacons')
  			->where('beaconName', '=', $bName)
	  		->get();
			// $d=Input::get('Icy Marshmallow');
  			// Session::flash('be',$beaconMe);
   		if(isset($bName) ){
   		 	 Session::flash('be',$beaconMe);
        	return Redirect::to('beaconEdit');
        	//return View::make('beacon.update')
        	//->with('beacon',$beaconMe);
   		 	//return $beaconMe;
   		 	
    	}
    	
    	
    	elseif (null !=(Input::get('goHome'))) {
    		return Redirect::to('/');

    	}elseif (null !=(Input::get('cancel'))) {
    		return Redirect::to('/login');
    	}
		
    	
		
	}

	public function getViewBeaconEdit(){
		$me = Session::get('be');

		return View::make('beacon.beaconUpdate')
			->with('beacon',$me);

		
		//return $me;
	}
	public function postUpdateBeacon(){
			
			
		//	$submitState=Input::get('update');
			$minor=Input::get('minor');
			$userName=Input::get('userName');
			$beaconName=Input::get('beaconName');
			$message1=Input::get('msg1');
			$message2=Input::get('msg2');
			
		
			/*
			  if(Input::get('update')) {
          		  return 'hhhhhhhhh';
        	  } elseif(Input::get('cancel')) {
            		 return 'bbbbbb';
        	  }
			return $submitState;
			//return 'fffffffffff';
			*/
			//$beacon=DB::table('beacons')->where('minor',$minor);
			//return $minor;
			if (Input::get('update')) {
				# code...
			
				$is=DB::table('beacons')
            		->where('minor', $minor)
            		->update(array('message1' => $message1,'message2'=> $message2));
            	$beaconMe= DB::table('beacons')
  						->where('beaconName', '=', $beaconName)
  						->get();

				if ($is) {
						
					return View::make('beacon.beaconUpdate')
						->with('beacon',$beaconMe);

					
				}else{
					return View::make('beacon.beaconUpdate')
						->with('beacon',$beaconMe);
				}	
			}elseif (Input::get('cancel') ){
				$beaconList = DB::table('beacons')
					->where('userName', '=', $userName)
  					->get();

  		 
  		 			Session::flash('beacons',$beaconList);
  		 			return Redirect::to('beaconHome');

			}
		}



			
			
			
            
	





	
	
	public function getBeacons1()
	{
		return Redirect::to('beaconHome1');
	}
	
	public function getView($id)
	{
		$beacon = DB::table('beacons')
  		->where('major', '=', $id)
  		->get();
		return View::make('beacon.beaconEdit')
		->with('title','Edit Beacon')
		->with('beacon',$beacon);
	}
	public function getUpdate($id)
	{
		$update = DB::table('beacons')
  		->where('major', '=', $id)
  		->get();
		return View::make('beacon.update')
		->with('title','Update Beacon')
		->with('update',$update);
	}

	public function postUpdate()
	{
		$id=Input::get('lblMajor');
		Beacon::update($id,array(
			'message1'=>Input::get('msg1'),
			'message2'=>Input::get('msg2')
			));
		return Redirect::to('beaconEdit',$id);
	}
}
