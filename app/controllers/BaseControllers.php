<?php


namespace controllers;


class BaseControllers
{
    protected $twig;
    protected $data=[];
    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__).'/views');
        $this->twig = new \Twig\Environment($loader, [
//            'cache' => '/path/to/compilation_cache',
        ]);


    }

    function success($url,$mess){
        echo "<script>";
        echo "alter('{$mess}')";
        echo "location.href='{$url}'";
        echo "</scipt>";
    }
    function fail($url,$mess){
        echo "<script>";
        echo "alter('error:{$mess}')";
        echo "location.href='{$url}'";
        echo "</scipt>";
    }

    protected function assign($key,$var=null){
        if(is_array($key)){
            $this->data=array_merge($this->data,$key);
        }else{
            $this->data[$key]=$var;
        }
    }

    protected function display($template,$suffix="html"){
        echo $this->twig->render($template.".".$suffix, $this->data);
    }

}