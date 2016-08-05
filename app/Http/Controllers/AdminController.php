<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\ActivitiesType;
use App\Activity;
use Validator;
use Auth;

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
	    $activities = Activity::all()->pluck('id','name');
	    //$activities = \DB::table('activities')->pluck('id', 'name');
	    //return \Response::json(array('activities' => $activities));
	    return response()->json(array('activities' => $activities));
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
		    	'description' => 'required|min:6|max:400',//|unique:users,email',
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
		    	'description.max' => 'El máximo de caracteres permitidos son 400',
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
		    	$activity = new Activity;
		    	$activity->name = $request->name;
		    	$activity->description = $request->description;
		    	$activity->id_type = $request->activitytype;
		    	/*$user->password = bcrypt($request->password);
		    	$user->remember_token = str_random(100);
		    	$user->confirm_token = str_random(100);
		    	//Activar al administrador sin necesidad de enviar correo electrónico
		    	$user->active = 1;
		    	//El valor 2 en la columna determina que el usuario es monitor
		    	$user->user = 2;
			    */
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
