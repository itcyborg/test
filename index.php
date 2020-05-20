<?php
    /*
     * FAITH (Putato) ;-))
     */

    /**
     *
     * MAKE A TODO-APP
     * create a simple app router
     * make a simple API
     */

    # capture the request method, either POST|GET|PUT|PATCH|OPTIONS
    # for now we are interested in POST AND GET ONLY
    $method=$_SERVER['REQUEST_METHOD'];

    # get the request path i.e [domain: test.com] [path: /list]
    $path=$_SERVER['REQUEST_URI'];  // this will return with the leading '/'

    $path=ltrim($path,'/'); // remove the / at the beginning
    //    $path=getPath();

    # check if the path matches the route provided and method
    if($method=='GET' && $path=='faith'){
        echo 'putato';
    }

    if($method=='POST' && $path=='faith'){
        echo 'is here';
    }

    function getPath(){
        # get the request path i.e [domain: test.com] [path: /list]
        return ltrim($_SERVER['REQUEST_URI'],'/'); // remove the / at the beginning
    }
