<?php
namespace Secms\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
	{
		$this->display("index:index");
	}
}