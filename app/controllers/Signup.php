    <?php

    class Signup extends Controller
    {

        public function index()
        {
            // $db = new Database();
            // $db->create_tables();

            // return;
            show($_POST);
            $user = new User();

            if ($user->validate($_POST) === true) {

                $_POST['date'] = date("Y-m-d H:i:s");
                $_POST['role'] = "user";

                $user->insert($_POST);
                // $query = "INSERT INTO users (email,firstname,lastname,role,password,date) values(:email,:firstname,:lastname,:role,:password,:date)";

                // $arr['firstname'] = $_POST['firstname'];
                // $arr['lastname'] = $_POST['lastname'];
                // $arr['email'] = $_POST['email'];
                // $arr['password'] = $_POST['password'];
                // $arr['role'] = "user";
                // $arr['date'] = date("Y-m-d H:i:s");

                // $db = new Database();
                // $db->query($query, $arr);
            }

            show($user->errors);
            $data['title'] = "signup";
            $this->view('forms/signup', $data);
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