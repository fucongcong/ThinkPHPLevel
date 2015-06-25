<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	 $User = D("User","Service"); 
    	 $user = $User->getUser(1);
    	 
    	return $this->render(T('Index/index'),array(
    		'hello'=>$user['username']));
     }

}