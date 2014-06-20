<?php

class Iglesia_OfrendasController extends \BaseController {

    public function __construct() {
        
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
             if(!Auth::check())return Redirect::to('/login');
             return View::make('iglesia/main');
	}
        
        public function ajax()
	{
            $data = Input::all();
             if (Request::ajax()){
                 
                 //$users = User::whereRaw('cedula = ? ', $data)->get();
                 $users = User::where('cedula', 'like', $data['ced']."%")->get();
                 if(count($users) == 0){
                     return Response::json(array (
                            'success' => false,
                            'msg'     => 'No existe'
                        ));
                 }else{ 
                     //die(print_r($users));
                     foreach($users as $user){
                         $result[] = array(
                             'cedula' => $user->cedula,
                             'name' => $user->name
                         );
                      }
                        return Response::json(array (
                            'success' => true,
                            'msg'     => 'Existe',
                            'users' => $result
                            ));
                     
                 }
             }
             
             return View::make('iglesia/main');
	}

}