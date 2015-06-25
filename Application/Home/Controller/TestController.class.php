<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
    	
	return $this->render(T('Index/index'),array(
    		'hello'=>"阿达1221"));
    }
}