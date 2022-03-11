<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABC 게시판</title>
  </head>
  <body>
    <h1>게시판</h1>
    <h2>검색 결과</h2>
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
        $user_skey = $_POST['skey'];

        $sql = "SELECT * FROM msg_board WHERE message LIKE '%$user_skey%'";
        $result = mysqli_query($conn, $sql);

        print_r($result);
        die();
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
    <p><a href="index.php">메인화면으로 돌아가기</a></p>
  </body>
</html>
