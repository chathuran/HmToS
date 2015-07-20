<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getHome()
	{
		return View::make('home.home');
	}

	public function getLogin()
	{
		return View::make('home.login');
	}

	public function getRegister()
	{
		return View::make('home.register');
	}
	public function postLogin()
	{
		
		$username = Input::get('userName');
		//$password = Hash::make(Input::get('password'));
		$password=Input::get('password');
		//$user= DB::table('users')
		//->where('userName','=',$username)
		//->where('pwd','=',$password)
		//->first();


		$user = User::where('userName','=',$username)->first();
		
		if(isset($user)){
			
			$input =$user->pwd;

			if (Hash::check($password, $input)) {
				



				//$un=User::where('userName','=',$username);
			return Redirect::to('beaconStart')->with('userN',$user->userName);
					//return 'go';
			}
			return Redirect::to('login');
			
		}else{
			return Redirect::to('login');
		}
		
		
		
		//$username = Input::get('userName');

		//return Redirect::to('beaconStart')
		// ->with( 'userN', $un );
		
		//	 return Redirect::to('beaconStart')->with('userN',$username);
			 	//return Redirect::to('beaconStart');
		
	}

	public function postRegister()
	{
		$user = new User();

    	$user->userName = Input::get('userName');
    	$user->email = Input::get('email');
    	$user->pwd =Hash::make(Input::get('password'));
    	$user->marketName = Input::get('marketName');
    	$user->location = Input::get('location');
    	$user->save();
    	return Redirect::to('login');

	}
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
	public function getuser($userName)
	{
		$message= DB::table('users')->where('userName',$userName)->get();

		return Response::json(array('message'=> $message[0]));
	}



	

	
}
