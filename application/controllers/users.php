<?php
class Users_Controller extends Controller {
    public $restful=true;
    public function post_login(){
        $userdata = array(
            'username'=>Input::get('username'),
            'password'=>Input::get('password')
        );
        if ( Auth::attempt($userdata) )
            {
                // we are now logged in, go to home
                return Redirect::to('admin');
            }
        else
            {
                // auth failure! lets go back to the login
                return Redirect::to('login')
                    ->with('login_errors', true);
                // pass any error notification you want
                // i like to do it this way :)
            }

    }
}