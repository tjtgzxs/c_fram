<?php

if(!function_exists("dd")){
    function dd(...$args){
        http_response_code(500);
        foreach($args as $a){
            var_dump($a);
        }
        exit;
    }
}