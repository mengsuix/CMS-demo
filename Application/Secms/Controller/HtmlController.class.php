<?php
namespace Secms\Controller;
use Think\Controller;
class HtmlController extends Controller 
{
   public function html()
   {
	   switch($_GET["name"])
	   {
		   case "adminAdd" :  $this->display("Admin:adminAdd");
							  break;
           case "adminModify": $id = $_GET["id"];   
	                           $this->assign("vo",M("adminers")->where("id='$id'")->find());
	                           $this->display("Admin:adminModify");
                                break;
		   case "tzcpAdd":    $this->assign('type',$_GET['type']);   $this->display("Tzcp:tzcpAdd");  
		                      break;
  		   case "kfzxAdd":    $this->display("Kfzx:kfzxAdd");  
		                      break;	
		   case "lxwmAdd":    $this->display("Lxwm:lxwmAdd");  
		                      break;
		   case "cpAdd":      $this->display("Tzcp:cpAdd");  
		                      break;
		   case "cpModify":   $this->assign("vo", M("cp")->where("id='{$_GET['id']}'")->find() );     $this->display("Tzcp:cpModify");  
		                      break;
		   case "tzcpModify": $this->assign('type',$_GET['type']);
		                      $this->assign("vo", M("tzcp")->where("id='{$_GET['id']}'")->find() );    $this->display("Tzcp:tzcpModify");  
		                      break;
  		   case "kfzxModify": $this->assign("vo", M("kfzx")->where("id='{$_GET['id']}'")->find() );    $this->display("Kfzx:kfzxModify");  
		                      break;	
		   case "lxwmModify": $this->assign("vo", M("lxwm")->where("id='{$_GET['id']}'")->find() );    $this->display("Lxwm:lxwmModify");  
		                      break;	
           case 'adModify':   $this->assign('ad', M('ad')->where("id=1")->find() );                    $this->display("Lxwm:adModify");
                              break;	
           case 'bottomModify':   $this->assign('bottom', M('bottom')->where("id=1")->find() );        $this->display("Bottom:bottomModify");
                              break;							  
	   }
   }
}