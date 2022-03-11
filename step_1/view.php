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

        $view_num = $_GET['number'];
        $sql = "SELECT * FROM msg_board WHERE number = $view_num";
        $result = mysqli_query($conn, $sql);
    
    ?>
    </ul>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View 페이지</title>
  </head>
  <body>
    <h1>게시판</h1>
    <h2>글 내용</h2>
    <?php 
        if ($row = mysqli_fetch_array($result)) { ?>
            <h3>글번호: <?= $row['number'] ?>  /  글쓴이: <?= $row['name'] ?> </h3>
            <div>
                <?= $row['message'] ?>
            </div>
    <?php } ?>

    <p><a href="index.php">메인화면으로 돌아가기</a></p>
  </body>
</html>
