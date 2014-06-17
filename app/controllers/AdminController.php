<?php
/**
 * Description of AdminController
 *
 * @author jair
 */
class AdminController extends BaseController {
    
    public function admin(){
        if (Auth::check()){
            return View::make('admin.admin');
        }
        
        return View::make('login');
    }
}

?>
