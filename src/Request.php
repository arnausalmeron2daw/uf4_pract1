<?php

    namespace App;

    class Request{

        protected string $uri;
        protected string $method;

        function __construct(){
            $this->uri = parse_url($_SERVER['REQUEST_URI'])['path'];
            $this->method = $_SERVER['REQUEST_METHOD'];
        }

        function getUri(){
            return $this->uri;
        }

        function getMethod(){
            return $this->method;
        }

        function setUri($uri){
            $this->uri=$uri;
        }

        function setMethod($method){
            $this->method=$method;
        }

        

       
    }