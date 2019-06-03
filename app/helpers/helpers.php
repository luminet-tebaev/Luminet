<?php

    function url() {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        $path = $url[1]; // Change here
        $path = ($path == "") ? "/" : "/".$path;
        return $path;
    }

    function controller($file) {
        $route = './app/controllers/'.$file.'.php';
        if (file_exists($route)) {
            include $route;
        } else {
            echo "Controller '$file' not found.";
        }
    }

    function view($file) {
        $route = './app/views/'.$file.'.php';
        if (file_exists($route)) {
            include $route;
        } else {
            echo "View '$file' not found.";
        }
    }

    function model($file) {
        $route = './app/models/'.$file.'.php';
        if (file_exists($route)) {
            include $route;
        } else {
            echo "Model '$file' not found.";
        }
    }

    function route($type, $url, $file) {
        $actualUrl = url();
        if ($_SERVER['REQUEST_METHOD'] == $type && $actualUrl == $url) {
            controller($file);
            exit();
        }
    }

    function notFound() {
        $actualUrl = url();
        echo "Url '$actualUrl' not found.";
        exit();
    }

    function getRandomFileName($extension)
    { 
        $num1 = rand(1000000000,99999999999);
        $num2 = rand(1000000000,99999999999);
        $letters = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',9)),0,9);
        $imgName = $num1."_".$num2."_".$letras;
        $route = $imgName.".".$extension;
        return $route;
    }

    function successResponse($data = "") {
        $array = array("data" => $data, "response" => "SUCCESS");
        echo json_encode($array);
    }

    function errorResponse($data = "") {
        $array = array("data" => $data, "response" => "ERROR");
        echo json_encode($array);
    }

    function JSONResponse($response = "SUCCESS", $data = "") {
        $array = array("data" => $data, "response" => $response);
        echo json_encode($array);
    }

    function uploadFile($mimeTypes, $path) {
        foreach ($_FILES as $key) {
            $extName = $key['name'];
            $position = strripos($extName, ".") === false ? 0 : strripos($extName, ".") + 1;
            $extName = substr($extName, $position, strlen($extName));
            $type = strtolower($extName);
            if( isset($mimeTypes[$type]) ) {           
                if($key['error'] == UPLOAD_ERR_OK ) {
                    $originalName = $key['name'];
                    $temporal = $key['tmp_name'];
                    $name = getRandomFileName($type);
                    $ruta = $path.$name;
                    if(file_exists($ruta)) {
                        $ruta = getRandomFileName($type);
                        $conta = 0;
                        while($conta == 0) {
                            if(file_exists($ruta)) {
                                $ruta = getRandomFileName($type);
                            } else {
                                $conta = 1;  
                            }
                        }
                        move_uploaded_file($temporal, $ruta);
                    } else {
                        move_uploaded_file($temporal, $ruta);
                    }	
                    successResponse($ruta);
                }
            } else {
                errorResponse();
            }
        }
    }
