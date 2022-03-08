<?php 
    //DB 연결
    $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");

    if (!$conn) {
        echo 'DB에 연결하지 못했습니다.'.mysqli_connect_error();
    }
    else {
        echo "DB 접속 성공!"."<br/><br/>";
    }
$user_name = $_POST['name'];
$user_msg = $_POST['message'];

print $user_name."<br/>";
print $user_msg."<br/>";

$sql = "INSERT INTO msg_board (name, message) VALUES ('$user_name', '$user_msg')";
$result = mysqli_query($conn, $sql);

if($result === false) {
    echo '저장하지 못했습니다.';
    error_log(mysqli_error($conn)).'<br /><br /><br /><br />';
} else {
    echo '저장 성공';
}

    //DB 연결 후 해제
    mysqli_close($conn);
    print "<hr /><a href='index.php'>메인 화면으로 이동하기</a> >"

?>