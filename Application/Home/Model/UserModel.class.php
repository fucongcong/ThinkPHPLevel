<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{

	protected $User;

	public function __construct()
	{	
		if (!$this->User) {

    	 		$this->User = M("User");
		}
	}

	public function getUser($id)
	{	
		$where['id'] = ':id';
		$user =$this->User->where($where)->bind(':id', $id)->limit(1)->select();
		return $user[0];
	}
}