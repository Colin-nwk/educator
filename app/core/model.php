<?php

/***
 * main model class
 */
class Model extends Database
{



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

        // show($data);
        $keys = array_keys($data);
        $values = array_values($data);
        $query = "INSERT INTO users ";
        $query .= "(" . implode(",", $keys) . ") values (:" . implode(",:", $keys) . ")";

        $db = new Database();
        $db->query($query, $data);
        // show($values);
        // show($keys);
    }
}