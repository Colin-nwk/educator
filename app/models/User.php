<?php

class User extends Model
{

    public $errors = [];
    protected $table = "users";

    protected $allowedColumns = [
        'email', 'firstname', 'lastname', 'role', 'password', 'date'
    ];
    public function validate($data)
    {

        if (empty($data['firstname'])) {
            $this->errors['firstname'] = "A first name is required";
        }

        if (empty($data['lastname'])) {
            $this->errors['lastname'] = "A last name is required";
        }
        if (empty($data['email'])) {
            $this->errors['email'] = "An email is required";
        }
        if (empty($data['password'])) {
            $this->errors['password'] = "A password is required";
        }

        if ($data['password'] !== $data['confirm']) {
            $this->errors['confirm'] = "Password do not match ";
        }
        if (empty($data['terms'])) {
            $this->errors['terms'] = "Please accept the terms and conditions";
        }


        if (empty($this->errors)) {
            return true;
        }
        return false;
    }


    public function insert($data)
    {
        // remove unwanted column
        if (!empty($this->allowedColumns)) {
            foreach ($data as $key => $value) {

                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }


        $keys = array_keys($data);
        $values = array_values($data);
        $query = "INSERT INTO  " . $this->table;
        $query .= " (" . implode(",", $keys) . ") values (:" . implode(",:", $keys) . ")";

        $this->query($query, $data);
    }
}