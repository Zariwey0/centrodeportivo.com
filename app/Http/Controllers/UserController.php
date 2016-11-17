<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Activity;
use Auth;
use Hash;
use App\Comments;

class UserController extends Controller{
	
	public function __construct(){
		$this->middleware('auth');
	}
	
	public function user(){
		return View('user.user');
	}

	public function profile(){
	    return View('profile');
	}

	public function schedule(){
		return View('schedule');
	}

	public function seeSchedule(){
		return View('seeschedule');
	}

	public function activities(){
		return View('activities');
	}

	public function updateProfile(Request $request){
        $rules = ['image' => 'required|image|max:1024*1024*1',];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1 MB',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()){
            //return redirect('user/profile')->withErrors($validator);
            return redirect()->back();
        }
        else{
            $name = str_random(30) . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('profiles', $name);
            $user = new User;
            $user->where('email', '=', Auth::user()->email)
                 ->update(['profile' => 'profiles/'.$name]);
            if (Auth::user()->user == 0){
            	return redirect('user')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
            }elseif (Auth::user()->user == 1){
            	return redirect('admin')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
            }else return redirect('monitor')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
            
        }
    }

    public function password(){
	    return View('password');
	}

	public function updatePassword(Request $request){
	    $rules = [
	        'mypassword' => 'required',
	        'password' => 'required|confirmed|min:6|max:18',
	    ];
	    
	    $messages = [
	        'mypassword.required' => 'El campo es requerido',
	        'password.required' => 'El campo es requerido',
	        'password.confirmed' => 'Los passwords no coinciden',
	        'password.min' => 'El mínimo permitido son 6 caracteres',
	        'password.max' => 'El máximo permitido son 18 caracteres',
	    ];
	    
	    $validator = Validator::make($request->all(), $rules, $messages);
	    if ($validator->fails()){
	        return redirect('password')->withErrors($validator);
	    }
	    else{
	        if (Hash::check($request->mypassword, Auth::user()->password)){
	            $user = new User;
	            $user->where('email', '=', Auth::user()->email)
	                 ->update(['password' => bcrypt($request->password)]);
	            if (Auth::user()->user == 0){
	            	return redirect('user')->with('status', 'Password cambiado con éxito');
	            }elseif (Auth::user()->user == 1){
	            	return redirect('admin')->with('status', 'Password cambiado con éxito');
	            }else return redirect('monitor')->with('status', 'Password cambiado con éxito');        
	        }
	        else
	        {
	            return redirect('password')->with('message', 'Credenciales incorrectas');
	        }
	    }
	}

	public function createComment(Request $request){
	    $comment = e($request->comment);
	    $id_section = $request->id_section;
	    $date = date('Y-m-d');
	    $time = date('H:m:s');
	    Comments::insert([
	        'comment' => $comment,
	        'id_user' => Auth::user()->id,
	        'id_section' => $id_section,
	        'date' => $date,
	        'time' => $time,
	    ]);
	    return redirect()->back()->with('status', 'Enhorabuena comentario publicado con éxito');
	}
	
	public function deleteComment(Request $request){
	    $rules = ['id_comment' => 'integer'];
	    $validator = Validator::make($request->only('id_comment'), $rules);
	    if ($validator->fails()){
	        return redirect()->back()->with('error', 'Ha ocurrido un error');
	    }
	    else
	    {
	        if(Comments::where('id', '=', $request->id_comment)
	                ->where('id_user', '=', Auth::user()->id)->delete()
	                ){
	            return redirect()->back()->with('status', 'Enhorabuena comentario eliminado con éxito');
	        }
	        else{
	            return redirect()->back()->with('error', 'Ha ocurrido un error');  
	        }
	    }
	}

	public function editComment(Request $request){
	    $rules = ['id_comment' => 'integer'];
	    $comment = e($request->comment);
	    $validator = Validator::make($request->all(), $rules);
	    if ($validator->fails()){
	        return redirect()->back()->with('error', 'Ha ocurrido un error');
	    } else{
	        if (Comments::where('id', '=', $request->id_comment)
	                ->where('id_user', '=', Auth::user()->id)
	                ->update(['comment' => $comment])){
	            return redirect()->back()->with('status', 'Enhorabuena comentario editado correctamente');
	        }else{
	            return redirect()->back()->with('error', 'Ha ocurrido un error');
	        }
	    }
	}

	public function public_profile($id){
	    $user = User::select()
	            ->where('id', '=', $id)
	            ->first();
	    if (count($user) == 0){
	        return redirect()->back();
	    }
	    else{
	        return View('user')->with('user', $user);
	    }
	}

	public function activity($id){
		$activity = Activity::select()
					//->where('id', '=', $id)
					->where('name', '=', $id)
					->first();
		if (count($activity) == 0){
			return redirect()->back();
		}else{
			return View('activity')->with('activity', $activity);
		}
	}
}