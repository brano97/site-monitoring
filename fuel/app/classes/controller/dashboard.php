<?php
/**
 * Created by PhpStorm.
 * User: Brano97
 * Date: 07/02/16
 * Time: 09:00
 */
class Controller_Dashboard extends Controller_Template
{

    public function Action_Index ()
    {
        if(! Auth::check())
        {
            return Response::redirect('auth/login?url='.Input::uri());
        }
        $data["auth_username"] = Auth::get('username', 'Unnamed');
        $this->template->title = "Fuck you!";
        $this->template->template_auth_username = $data["auth_username"];
        $this->template->content = View::Forge('dashboard/index',$data);
    }
}
