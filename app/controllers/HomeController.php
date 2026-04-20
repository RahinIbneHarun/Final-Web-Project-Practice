<?php

class HomeController {

    public function index() {
        $message = "Welcome to Filling Station MVC Project";

        include "../app/views/home/index.php";
    }
}