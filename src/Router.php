<?php

    namespace App;

    class Router{

        protected $request;
        protected $routes;

        function __construct(Request $request,$routes){

            $this->request = $request;
            $this->routes = $routes;

            $this->route();
        } 


        function route(){
            var_dump($this->request->getUri());
        }

        
        

        
    }