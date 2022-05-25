<?php

class Home extends Controller
{

    public function index()
    {
        // $db = new Database();
        // $res = $db->query("SELECT * FROM users", [], 'array');
        // show($res);
        $data['title'] = "Home";
        $this->view('home', $data);
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