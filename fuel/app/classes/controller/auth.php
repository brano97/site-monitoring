<?php
/**
 * Created by PhpStorm.
 * User: Brano97
 * Date: 31/01/16
 * Time: 21:10
 */
class Controller_Auth extends Controller
{
    /**
     * The logout controller
     *
     * @access  public
     * @return  Response
     */
    public function action_logout()
    {
        Auth::logout();
        $data = array();
        $data['login_error'] = '';
        $data['username'] = '';
        return Response::forge(View::forge('auth/login',$data));
    }


        public function action_login()
    {
        $data = array();
        $data['login_error'] = '';
        $data['username'] = '';
        // If so, you pressed the submit button. Let's go over the steps.
        if (Input::post())
        {
            // Check the credentials. This assumes that you have the previous table created and
            // you have used the table definition and configuration as mentioned above.
            if (Auth::login())
            {
                // Credentials ok, go right in.
                Response::redirect('welcome/index');
            }
            else
            {
                // Oops, no soup for you. Try to login again. Set some values to
                // repopulate the username field and give some error text back to the view.
                $data['username']    = Input::post('username');
                $data['login_error'] = 'Wrong username/password combo. Try again';
            }
        }

        // Show the login form.
        echo View::forge('auth/login',$data);
    }
}