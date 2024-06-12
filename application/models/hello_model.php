<?php
defined('BASEPATH') or exit('No direct scrip access allowed');

class Hello_model extends CI_Model
{

    public function hello_nim()
    {
        echo "Hello Perkenalkan Saya 21110020034";
    }


    public function hello_mvc()
    {
        return "ini menggunakan MVC buatan 21110020034";
    }
}
