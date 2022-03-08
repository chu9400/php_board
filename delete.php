<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>게시판</h1>
    <h1>삭제 결과</h1>
    <ul>
    <?php 
        //DB 연결
        $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");

        if (!$conn) {
            echo 'DB에 연결하지 못했습니다.'.mysqli_connect_error();
        }
        else {
            echo "DB 접속 성공!"."<br/><br/>";
        }
        //테이블에서 글 조회
        // SELECT * FROM table_name
        $user_delnum = $_POST['delnum'];

        $sqlDEL = "DELETE FROM msg_board WHERE number = $user_delnum";
        $result_del = mysqli_query($conn, $sqlDEL);

        echo "<script>alert(\"삭제 되었습니다.\");</script>";

        $sql = "SELECT * FROM msg_board";
        $result = mysqli_query($conn, $sql);

        print_r($result);

        $list = '';
        while($row = mysqli_fetch_array($result)) {
            $list = 
                $list."
                    <li>{$row['number']}: 
                        <a href=\"view.php?number={$row['number']}\"> {$row['name']}  </a>
                    </li>    
                    "; 
        }
        echo $list; 
        mysqli_close($conn);
        
   

    ?>
    </ul>
    <p>
        <?php 
            echo $user_delnum.'번째 데이터가 삭제되었습니다.';
        ?>
    </p>
    <p><a href="index.php">메인화면으로 돌아가기</a></p>
</body>
</html>