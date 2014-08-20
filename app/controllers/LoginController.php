<?php

class LoginController extends BaseController {

    public function index()
    {
        Auth::logout();
        
        return View::make('login');
    }

    public function process()
    {
        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]))
        {
            return Redirect::intended('admin');
        }

        return App::abort(401);
    }

}