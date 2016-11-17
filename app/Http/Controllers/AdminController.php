<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\ActivitiesType;
use App\Activity;
use Validator;
use Auth;
use App\Schedule;
use Storage;


use App\Http\Controllers\Controller;
use Hash;
use App\Comments;

class AdminController extends Controller
{
	public function __construct(){
	    $this->middleware('auth', ['except' => 'createAdmin']);
	}

	private function isAdmin(){
	    if (Auth::user()->user == 1) return true;
	    else return false;
	}

	public function admin(){
	    if ($this->isAdmin()){
	        return View('admin.admin');
	    }else{
	        return redirect()->back();
	    }
	}

	public function getActivities(){
		/**********************************************/
		//$data = json_encode(['Example 1','Example 2','Example 3',]);
		//$data = Schedule::all()->pluck('activity_type','activity','monitor');
		$data = Schedule::all();
		//$data = DB::table('schedule')->select('activity_type', 'activity', 'monitor')->get();
		//$data = 'Oh yeah, madafaka.';
	  	//$fileName = time() . '_datafile.json';
	  	$fileName = "datos_basedatos.json";
	  	Storage::disk('ficheros')->put($fileName,$data);
	  	//Storage::disk('local')->put('file.txt', 'Contenido');
		/**********************************************/


		/*DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.id', 'contacts.phone', 'orders.price')
            ->get();*/

        /*$activities = DB::table('activities')
        	->join('activities_type', 'activities.id_type', '=', 'activities_type.id')
        	->orderBy('activities_type.name')
        	->pluck('activities.id_type', 'activities.name', 'activities_type.name');
		*/
	    //return json_encode($activities);
	    $activities = Activity::all()->pluck('id_type','name');
	    return response()->json(array('activities' => $activities));
	    ////////
		/*
	   	$types = ActivitiesType::all()->pluck('id','name');
	    $arr = array();
	    $arr[0] = $activities;
	    $arr[1] = $types;
	    return response()->json('arr' => $arr);
	    */
	}

	public function getMonitors(){
	    $monitors = User::all()->where('user', '2')->pluck('id','name');
	    //$activities = \DB::table('activities')->pluck('id', 'name');
	    //return \Response::json(array('activities' => $activities));
	    return response()->json(array('monitors' => $monitors));
	    //dd(\Response::json(array('activities' => $activities)));
	    //$data = $request->all(); // This will get all the request data.

        //dd($activities); // This will dump and die
	}

	public function schedule(){
	    if ($this->isAdmin()){
	        return View('schedule');
	    }else{
	        return redirect()->back();
	    }
	}

	public function updateSchedule(Request $request){
		//Cogemos solo números
		preg_match_all('!\d+!', $request->id, $id);
		\DB::table('schedule')->where('id', '=', $id)
            ->update(array('activity' => $request->activity, 'activity_type' => $request->activity_type, 'monitor' => $request->monitor));
	}

	public function crop($path){
        $img = Image::make($path)->crop(400, 400);

        return $img->response('jpg');
	}

	
    public function createAdmin(Request $request){
  
		if ($request->isMethod('post'))
	  	{
		   	//Roles de validación
		   	$rules = [
		    	'name' => 'required|min:3|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
		    	'email' => 'required|email|max:255|unique:users,email',
		    	'password' => 'required|min:6|max:18|confirmed',
		   	];
		   
		   	//Posibles mensajes de error de validación
		   	$messages = [
		    	'name.required' => 'El campo es requerido',
		    	'name.min' => 'El mínimo de caracteres permitidos son 3',
			    'name.max' => 'El máximo de caracteres permitidos son 16',
		    	'name.regex' => 'Sólo se aceptan letras',
		    	'email.required' => 'El campo es requerido',
		    	'email.email' => 'El formato de email es incorrecto',
		    	'email.max' => 'El máximo de caracteres permitidos son 255',
		    	'email.unique' => 'El email ya existe',
		    	'password.required' => 'El campo es requerido',
		    	'password.min' => 'El mínimo de caracteres permitidos son 6',
		    	'password.max' => 'El máximo de caracteres permitidos son 18',
		    	'password.confirmed' => 'Los passwords no coinciden',
		   	];
		   
		   	$validator = Validator::make($request->all(), $rules, $messages);
		   
		   	//Si la validación no es correcta redireccionar al formulario con los errores
		   	if ($validator->fails()){
		    	return redirect()->back()->withErrors($validator);
		   	}
		   	else{ // De los contrario guardar al usuario
		    	$user = new User;
		    	$user->name = $request->name;
		    	$user->email = $request->email;
		    	$user->password = bcrypt($request->password);
		    	$user->remember_token = str_random(100);
		    	$user->confirm_token = str_random(100);
		    	//Activar al administrador sin necesidad de enviar correo electrónico
		    	$user->active = 1;
		    	//El valor 1 en la columna determina si el usuario es administrador o no
		    	$user->user = 1;
			    
			    if ($user->save()){
		    		return redirect('admin')->with('message', 'Enhorabuena nuevo administrador creado correctamente');
		    	}else{
		     		return redirect()->back()->with('error', 'Ha ocurrido un error al guardar los datos');
		    	}
	   		}
		}
		return View('admin.createadmin');
	}

	public function createMonitor(Request $request){
  
		if ($request->isMethod('post'))
	  	{
		   	//Roles de validación
		   	$rules = [
		    	'name' => 'required|min:3|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
		    	'email' => 'required|email|max:255|unique:users,email',
		    	'password' => 'required|min:6|max:18|confirmed',
		    	'image' => 'required|image|max:1024*1024*1',
		   	];
		   
		   	//Posibles mensajes de error de validación
		   	$messages = [
		    	'name.required' => 'El campo es requerido',
		    	'name.min' => 'El mínimo de caracteres permitidos son 3',
			    'name.max' => 'El máximo de caracteres permitidos son 16',
		    	'name.regex' => 'Sólo se aceptan letras',
		    	'email.required' => 'El campo es requerido',
		    	'email.email' => 'El formato de email es incorrecto',
		    	'email.max' => 'El máximo de caracteres permitidos son 255',
		    	'email.unique' => 'El email ya existe',
		    	'password.required' => 'El campo es requerido',
		    	'password.min' => 'El mínimo de caracteres permitidos son 6',
		    	'password.max' => 'El máximo de caracteres permitidos son 18',
		    	'password.confirmed' => 'Los passwords no coinciden',
		    	'image.required' => 'Es obligatorio añadir una imagen de perfil',
            	'image.image' => 'La imagen no es válida',
            	'image.max' => 'El tamaño máximo permitido es de 1 MB',
		   	];
		   
		   	$validator = Validator::make($request->all(), $rules, $messages);
		   
		   	//Si la validación no es correcta redireccionar al formulario con los errores
		   	if ($validator->fails()){
		    	return redirect()->back()->withErrors($validator);
		   	}
		   	else{ // De los contrario guardar al usuario
		    	$user = new User;
		    	$user->name = $request->name;
		    	$user->email = $request->email;
		    	$user->password = bcrypt($request->password);
		    	$user->remember_token = str_random(100);
		    	$user->confirm_token = str_random(100);
		    	//Añadimos la imagen de perfil
		    	$imagename = str_random(30).'-'.$request->file('image')->getClientOriginalName();
            	$request->file('image')->move('profiles', $imagename);
		    	$user->profile = 'profiles/'.$imagename;
		    	//Activar al administrador sin necesidad de enviar correo electrónico
		    	$user->active = 1;
		    	//El valor 2 en la columna determina que el usuario es monitor
		    	$user->user = 2;
			    
			    if ($user->save()){
		    		return redirect('admin')->with('message', 'Enhorabuena nuevo administrador creado correctamente');
		    	}else{
		     		return redirect()->back()->with('error', 'Ha ocurrido un error al guardar los datos');
		    	}
	   		}
		}
		return View('admin.createmonitor');
	}

	public function createActivityType(Request $request){
  
		if ($request->isMethod('post'))
	  	{
		   	//Roles de validación
		   	$rules = [
		    	'name' => 'required|min:3|max:25|unique:activities_type,name|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
		    	'description' => 'required|min:6|max:500',//|unique:users,email',
		    	//'password' => 'required|min:6|max:18|confirmed',
		   	];
		   
		   	//Posibles mensajes de error de validación
		   	$messages = [
		    	'name.required' => 'El campo es requerido',
		    	'name.min' => 'El mínimo de caracteres permitidos son 3',
			    'name.max' => 'El máximo de caracteres permitidos son 25',
			    'name.unique' => 'El nombre ya existe',
		    	'name.regex' => 'Sólo se aceptan letras',
		    	//'email.email' => 'El formato de email es incorrecto',
		    	'description.required' => 'El campo es requerido',
		    	'description.min' => 'El mínimo de caracteres permitidos son 6',
		    	'description.max' => 'El máximo de caracteres permitidos son 500',
		    	//'email.unique' => 'El email ya existe',
		    	/*'password.required' => 'El campo es requerido',
		    	'password.min' => 'El mínimo de caracteres permitidos son 6',
		    	'password.max' => 'El máximo de caracteres permitidos son 18',
		    	'password.confirmed' => 'Los passwords no coinciden',*/
		   	];
		   
		   	$validator = Validator::make($request->all(), $rules, $messages);
		   
		   	//Si la validación no es correcta redireccionar al formulario con los errores
		   	if ($validator->fails()){
		    	return redirect()->back()->withErrors($validator);
		   	}
		   	else{ // De los contrario guardar al usuario
		    	$activity_type = new ActivitiesType;
		    	$activity_type->name = $request->name;
		    	$activity_type->description = $request->description;
		    	/*$user->password = bcrypt($request->password);
		    	$user->remember_token = str_random(100);
		    	$user->confirm_token = str_random(100);
		    	//Activar al administrador sin necesidad de enviar correo electrónico
		    	$user->active = 1;
		    	//El valor 2 en la columna determina que el usuario es monitor
		    	$user->user = 2;
			    */
			    if ($activity_type->save()){
		    		return redirect('admin')->with('message', 'Enhorabuena nuevo tipo de actividad creado correctamente');
		    	}else{
		     		return redirect()->back()->with('error', 'Ha ocurrido un error al guardar los datos');
		    	}
	   		}
		}
		return View('admin.createactivitytype');
	}

	public function createActivity(Request $request){
  
		if ($request->isMethod('post'))
	  	{
		   	//Roles de validación
		   	$rules = [
		    	'name' => 'required|min:3|max:25|unique:activities_type,name|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
		    	'description' => 'required|min:6|max:700',//|unique:users,email',
		    	'activitytype' => 'required|integer',
		    	'image' => 'required|image|max:1024*1024*1',
		    	//'password' => 'required|min:6|max:18|confirmed',
		   	];
		   
		   	//Posibles mensajes de error de validación
		   	$messages = [
		    	'name.required' => 'El campo es requerido',
		    	'name.min' => 'El mínimo de caracteres permitidos son 3',
			    'name.max' => 'El máximo de caracteres permitidos son 25',
			    'name.unique' => 'El nombre ya existe',
		    	'name.regex' => 'Sólo se aceptan letras',
		    	//'email.email' => 'El formato de email es incorrecto',
		    	'description.required' => 'El campo es requerido',
		    	'description.min' => 'El mínimo de caracteres permitidos son 6',
		    	'description.max' => 'El máximo de caracteres permitidos son 700',
		    	'activitytype.required' => 'El campo es requerido',
		    	'activitytype.integer' => 'El campo es requerido',

		    	'image.required' => 'Es obligatorio añadir una imagen',
            	'image.image' => 'Formato no permitido',
            	'image.max' => 'El tamaño máximo permitido es de 1 MB',
		    	//'email.unique' => 'El email ya existe',
		    	/*'password.required' => 'El campo es requerido',
		    	'password.min' => 'El mínimo de caracteres permitidos son 6',
		    	'password.max' => 'El máximo de caracteres permitidos son 18',
		    	'password.confirmed' => 'Los passwords no coinciden',*/
		   	];
		   
		   	$validator = Validator::make($request->all(), $rules, $messages);
		   
		   	//Si la validación no es correcta redireccionar al formulario con los errores
		   	if ($validator->fails()){
		    	return redirect()->back()->withErrors($validator);
		   	}
		   	else{ // De los contrario guardar la actividad
		    	$activity = new Activity;
		    	$activity->name = $request->name;
		    	$activity->description = $request->description;
		    	$activity->id_type = $request->activitytype;

		    	$imagename = str_random(30).'-'.$request->file('image')->getClientOriginalName();
            	$request->file('image')->move('activitiesimages', $imagename);
		    	$activity->image = 'activitiesimages/'.$imagename;

			    if ($activity->save()){
		    		return redirect('admin')->with('message', 'Enhorabuena nueva actividad creada correctamente');
		    	}else{
		     		return redirect()->back()->with('error', 'Ha ocurrido un error al guardar los datos');
		    	}
	   		}
		}
		return View('admin.createactivity');
	}
	
}
