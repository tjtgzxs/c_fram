<?php

namespace controllers;
class Test extends BaseControllers
{
    function index(){
        $this->assign("title",'aaaa');
        $this->assign("text",'asdasda');
        $this->assign(['lll'=>11111]); $this->assign('list',['name'=>'zxs','age'=>20,'gender'=>'male']);
       $this->display('index');
    }


}