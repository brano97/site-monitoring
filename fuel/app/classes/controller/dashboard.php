<?php
/**
 * Created by PhpStorm.
 * User: Brano97
 * Date: 07/02/16
 * Time: 09:00
 */
class Controller_Dashboard extends Controller
{
    public function Action_Index ()
    {
        if(!Auth::check())
        {
            return Response::redirect('auth/login?url='.Input::uri());
        }
        $data["auth_username"] = "brano";
        echo Response::forge(View::Forge('dashboard/index',$data));
    }
}
