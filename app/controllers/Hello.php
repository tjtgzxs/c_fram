<?php


namespace controllers;

namespace controllers;
class Hello extends BaseControllers
{
    function hello(){
        $this->assign("kk",'aaaa');
        $this->assign("yyyy",'asdasda');
        $this->assign(['lll'=>11111]);
        $this->assign('list',['name'=>'zxs','age'=>20,'gender'=>'male']);
        dd($this->data);
    }

}