<?php
/**
 * test Request and Response
 */

class NetController extends Yaf\Controller_Abstract {

    //http://demo.com/index.html
    public function requestAction(){

        //获取get参数
        $get=$this->getRequest()->getQuery();
        //获取post参数
        $post=$this->getRequest()->getPost();
        //获取file参数
        $file=$this->getRequest()->getFiles();
        //只能通过路由（正则）指定
        $params=$this->getRequest()->getParams();


        var_dump($get);
        echo '<hr>';
        var_dump($post);
        echo '<hr>';
        var_dump($file);
        echo '<hr>';
        var_dump($params);
        echo '<hr>';

        //判断是否是get方法
//        $this->getRequest()->isGet()


        return false;
    }

    //http://demo.com/net/response
    public function responseAction(){

        //重定向，会多一次请求，forword只是多一次调度
        //$this->getResponse()->setRedirect('http://www.baidu.com');

        $this->getResponse()->setBody('test');

        //根据流程图可知，在调度完成时执行
        $this->getResponse()->response();

        //exit(),die()都会终止调度，return false则会完成调度
//        exit();
        return false;
    }

}