<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller {
	private $see = array('产品','衣服','事务');
	private $addSee = array( array('field' => '袜子' , 'type' => 'title' ),array('field' => '文件' , 'type' => 'text' ) );
    public function test()
	{
		A('List')->modifySee($this->addSee,array('m','s'));
	}
}