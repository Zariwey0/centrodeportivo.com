<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
/*
use App\User;
use Illuminate\Support\Facades\Auth;
*/
class Front extends Controller {

    public function index() {
        return view('index-fitness', array('page' => 'index-fitness'));
    }

    public function agency() {
        return view('index-agency', array('page' => 'index-agency'));
    }

    public function about() {
        return view('about-us', array('page' => 'about-us'));
    }

/*
    public function authenticate() {
        if (Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')])) {
            return redirect()->intended('checkout');
        } else {
            return view('index-fitness', array('page' => 'index-fitness'));
            //return view('login', array('title' => 'Welcome', 'description' => '', 'page' => 'home'));
        }
    }

    public function logout() {
        Auth::logout();
    
        return Redirect::away('login');
    }
*/


/*
    public function product_details($id) {
        return view('product_details', array('page' => 'products'));
    }

    public function product_categories($name) {
        return view('products', array('page' => 'products'));
    }

    public function product_brands($name, $category = null) {
        return view('products', array('page' => 'products'));
    }

    public function blog() {
        return view('blog', array('page' => 'blog'));
    }

    public function blog_post($id) {
        return view('blog_post', array('page' => 'blog'));
    }

    public function contact_us() {
        return view('contact_us', array('page' => 'contact_us'));
    }

    public function login() {
        return view('login', array('page' => 'home'));
    }

    public function logout() {
        return view('login', array('page' => 'home'));
    }

    public function cart() {
        return view('cart', array('page' => 'home'));
    }

    public function checkout() {
        return view('checkout', array('page' => 'home'));
    }

    public function search($query) {
        return view('products', array('page' => 'products'));
    }*/

}