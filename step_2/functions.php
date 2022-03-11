<?php 
    
    function output($value) {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }

    function authenticate_user($email, $password) {
        if($email = USER_NAME && $password == PASSWORD) {
            return true;
        }
    }

    function redirect($url) {
        header("Location:$url");
    }


    //세션 email의 값이 있다면 트루
    function is_user_authenticated() {
        return isset($_SESSION['email']);
    }

    function ensure_user_is_authenticated() {
        if(!is_user_authenticated()) {
            redirect('login.php');
            die();
        }
    }
?>