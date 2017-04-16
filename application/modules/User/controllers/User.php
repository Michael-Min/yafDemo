<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 2017/4/16
 * Time: 下午4:36
 */

class UserController extends Yaf\Controller_Abstract{

    public function init(){
//        $this->getView()->setScriptPath(APPLICATION_PATH.'/application/views');
    }

    public function indexAction(){
        echo $_SERVER['REQUEST_URI'];
        return false;
    }

    //URL:http://demo.com/id/12
    public function showAction(){
        $request=$this->getRequest()->getParams();
        var_dump($request);
        $userId=$request['name'];
        $id=$userId=$request['num'];
        print_r($userId,$id);

        return false;
    }

    //URL:http://demo.com/user/user/show2
    public function show2Action(){

        header('content-type:text/js;charset=utf-8');
        $this->getView()->assign('title','我');

        //消息
        $message=$this->getView()->render('user/show.phtml');
        echo $message;

        //渲染视图
        $this->getView()->display('user/show.phtml');

        return false;
    }
}