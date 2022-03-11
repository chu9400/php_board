<?php 

    session_start();

    $title = 'Login';
    include('header.php');
    require_once('functions.php');
/* 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo $_POST['email'];
        output($_POST);
    } */
if(isset($_POST['login'])){
    //output($_POST);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(!$email) {
        $status = '이메일 형식에 맞게 입력해주세요.';
    }
}

?>


<form action="" method="POST">
    <p>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" />
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
    </p>
    <p>
        <input type="submit" name="login" value="Login">
    </p>
</form>

<div class="error">
    <p>
        <?php 
            if(isset($status)){
                echo $status;
            }
        ?>
    </p>
</div>


<?php 
    include('footer.php');
?>