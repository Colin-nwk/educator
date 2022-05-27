<?php

class Login extends Controller
{

    public function index()
    {
        // $db = new Database();
        // $res = $db->query("SELECT * FROM users", [], 'array');
        // show($res);
        $data['title'] = "signup";
        $this->view('forms/login', $data);
    }
    // public function edit()
    // {
    //     echo "edit view";
    // }

    // public function delete()
    // {
    //     echo "delete ";
    // }
}