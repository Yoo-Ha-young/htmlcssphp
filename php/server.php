<html>
    <body>
            <p> 여기는 server.php 페이지로 이동한것 입니다.</p>
            전달받은 히든은 <?php echo $_POST['hidden']; ?> 입니다. <br>
            전달받은 아이디는 <?php echo $_POST['text']; ?> 입니다. <br>
            <!--html파일에서의 id 속성 : id="user_id", html에서 method를 get으로 받았다면 php에서도 $_GET으로 받는다-->
            전달받은 비밀번호는 <?php echo $_POST['password']; ?> 입니다. <br> 
            <!--html파일에서의 id 속성 : id="user_id"-->
            전달받은 텍스트는 <?php echo $_POST['text_2']; ?> 입니다. <br> 

            전달받은 검색창은 <?php echo $_POST['search']; ?> 입니다. <br> 
            전달받은 URL주소는 <?php echo $_POST['url']; ?> 입니다. <br> 
            전달받은 이메일은 <?php echo $_POST['email']; ?> 입니다. <br> 
            전달받은 전화번호는 <?php echo $_POST['tel']; ?> 입니다.  <br>
            전달받은 숫자는 <?php echo $_POST['number']; ?> 입니다.  <br>
            전달받은 범위는 <?php echo $_POST['range']; ?> 입니다. <br>
            전달받은 라디오는 <?php echo $_POST['radio']; ?> 입니다. <br>
            
            전달받은 체크박스는 <?php for($i = 0; $i < count($_POST['checkbox']); $i++) {
                echo $_POST['checkbox'][$i];
                echo ",";
            } ?> 입니다. <br>


            전달받은 색상은 <?php echo $_POST['color']; ?> 입니다. <br>
            
            전달받은 date은 <?php echo $_POST['date']; ?> 입니다. <br>
            전달받은 month은 <?php echo $_POST['month']; ?> 입니다. <br>
            전달받은 week은 <?php echo $_POST['week']; ?> 입니다. <br>
            전달받은 time은 <?php echo $_POST['time']; ?> 입니다. <br>
            전달받은 datetime은 <?php echo $_POST['datetime']; ?> 입니다. <br>
    </body>
</html>

<!-- get : http://localhost:3000/php/server.php?text=1&password=1 주소창에서 값을 모두 전달 받는다.(검색창)
 / post : http://localhost:3000/php/server.php 이건 보이지 않기 때문에 보안적인 측면에서 좋다(로그인창) -->