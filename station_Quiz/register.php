<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="post" action="registerAction.php">
        <h1>회원가입 폼</h1>
			<fieldset>
            
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>아이디</td>
							<td><input type="text" size="35" name="userid" placeholder="아이디"></td>
						</tr>
						<tr>
							<td>비밀번호</td>
							<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
						</tr>
					</table>

				
                <input type="submit" value="가입하기" class ="btn"/>
                <input type="reset" value="다시쓰기"class ="btn" />
			
		</fieldset>
	</form>  
</body>
</html>
