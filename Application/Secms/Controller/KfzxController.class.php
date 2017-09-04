<?php
namespace Secms\Controller;
use Think\Controller;
class KfzxController extends Controller {
    public function add()
	{
		$data["field"] = $_POST["field"];
		//---------------------//
		$result = M("list")->add($data);
		//---------------------//
		if( $result ) $this->success('添加成功',U('Kfzx/see'),1);
	}
	public function drop()
	{
		$id = $_GET["id"];
		//---------------------//
		$result = M("Kfzx")->where("id='$id'")->delete();
		//---------------------//
		if( $result ) $this->success('删除成功',U('Kfzx/see'),3);
	}
		public function allDrop()
	{		
		//---------------------//
		$result = M("list")->truncate();
		//---------------------//
		if( $result ) $this->success('删除成功',U('Kfzx/see'),3);
	}
	public function modify()
	{
		$id = $_POST["id"];
		$data["cjwt"] = $_POST["cjwt"];
		$data["time"] = date('Y-m-d');
		//---------------------//
		$result = M("Kfzx")->where("id='$id'")->save($data);
		//---------------------//
		if( $result ) $this->success('修改成功',U('Kfzx/see'),3);
	}
	public function see()
	{
		//---------------------//
	    $this->assign("id",1);
		$this->assign("field", M("list")->getField('field',true) );
		//---------------------//
		$this->display("Kfzx:kfzx");
	}
}