<?php
	include "DB.php";
  include "lib.php";
	$userid = $_POST['userid'];
	$userpw = $_POST['userpw'];




	$sql= execute("insert into member (id,pw) values('$userid','$userpw')");
  move('login.php',"회원가입이 완료되었습니다.");
?>
<!-- <meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/"> -->