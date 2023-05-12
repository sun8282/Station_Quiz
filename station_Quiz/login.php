<?php
session_start();
include "db.php";
include "lib.php";

// if( ss() ){
// 	echo "
// 		<script>
// 			location.href = 'main.php';
// 		</script>
// 	";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div id="login_box">
		<h1>로그인</h1>							
			<form method="post" action="loginAction.php">
				<table cellspacing="0" width="300">
        			<tr>
            			<td  colspan="1"> 
                			<input type="text" name="userid" placeholder="아이디 입력" class="inph">
            			</td>
            			
        			</tr>
        		<tr>
            		<td colspan="1"> 
               		<input type="password" name="userpw" placeholder="비밀번호 입력" id="pwinput"class="inph">
					<div class="pwview"> 비밀번호 보기 <input type="checkbox" class ="viewchk"></div>
            	</td>
        		</tr>
        	<tr>
           		<td colspan="3" class="mem"> 
              		<a href="register.php">회원가입</a>
           		</td>
        	</tr>
			<td rowspan="2"  width="100" > 
                <button type="submit" id="btn" >로그인</button>
            </td>
    </table>
  </form>
</div>
</body>
</html>