<?php
namespace Admin\Controller;
use Think\Controller;
class ListController extends Controller {
	private $see = array('产品','衣服','事务');
	private $addSee = array( array('field' => '袜子' , 'type' => 'title' ),array('field' => '文件' , 'type' => 'file' ) );
	private $modifySee = array( array('field' => '袜子' , 'type' => 'title' ),array('field' => '文件' , 'type' => 'file' ) );
    public function see($see)
	{
		//----------------------//
		//----------------------//
		$this->assign('table', $see );
		$this->display("demo:list");
	}
	public function addSee($addSee)
	{
		//----------------------//
		//----------------------//
		$this->assign('table', $addSee );
		$this->display("demo:add");
	}	
	public function modifySee($modifySee,$content)
	{
		//----------------------//
		//----------------------//
		$this->assign('table', $modifySee );
		$this->assign('content', $content );
		$this->display("demo:modify");
	}
}