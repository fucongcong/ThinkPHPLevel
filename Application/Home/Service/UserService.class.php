<?php
namespace Home\Service;
use Think\Model;
class UserService extends Model{

	public function getUser($id)
	{
		return D('User')->getUser($id);
	}
}