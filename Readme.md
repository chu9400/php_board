# PHP apache2 mysql 활용 게시판 만들기

### 초기 mysql workbench로 DB 연동시

Failed to Connect To MySQL at ~~~~3306 with user root
(SSL connection error: SSL is required but the server doesn't support it)
오류 해결법

MySQl Connections 옆에 "+" 클릭

중간에 SSL 탭 클릭
Use SSl 클릭 후 Require 선택.

중간에 Advanced 탭 클릭

하단 Others: 부분에
useSSL = 0
입력

## 해결.

### php에서 이메일 검증

#### filter_input() 함수

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(!$email) {
$status = '이메일 형식에 맞게 입력해주세요.';
}
