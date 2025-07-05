<?php
 
function home()  {
    echo "Welcome to the home function!";
}

function about()  {
    // echo "Welcome to the about function!";
}

function contact()  {
    echo "Welcome to the contact function!";
}

function services()   {
    echo "Welcome to the services function!";
}
function not_found()   {
    // echo "Welcome to the not_found function!";
    require_once "views/not_found.php";
}

function asset($filePath){
    $fileUrl = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    if ($filePath == "css/output.css" ) {
        $fileUrl .= "://".$_SERVER['HTTP_HOST']."/public/".$filePath;
    }else {
        $fileUrl .= "://".$_SERVER['HTTP_HOST']."/".$filePath;
    }
    $fileUrl = str_replace('\\', '/', $fileUrl); // Ensure URL uses forward
    echo "\n".$fileUrl;
    // return $fileUrl;
}
