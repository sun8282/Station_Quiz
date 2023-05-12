<?php
session_start();
include "lib.php";
unset($_SESSION['user'],$_SESSION['id']);
move('index.php',"로그아웃이 완료되었습니다.");
?>