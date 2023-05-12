<?php
session_start();
include "db.php";
include "lib.php";
$best = $_SESSION['bestscore'];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>지하철역 퀴즈</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="/img/logo.png" class="logo" width="300px" height="auto">
    <div>
      <?php
      
      if(ss()){
        echo "<span class ='userid'>".$_SESSION['id']."님 환영합니다.</span>";
        echo "<a href ='./logout.php'>로그아웃</a>";
      }else{
        echo "<button class='login_btn btn'> <a href='./login.php'>로그인</a></button>
        <button class='register_btn btn'>회원가입</button>";
      }
      ?>

      <img src="/img/option_icon.png" class="option_btn btn" width="40px">
    </div>
  </header>
  <main>   
    <div class="gameplay_info">
      <h1 class="timer">0:00</h1>
      <h3 class="score">SCORE: 0</h3>
      <h4 class="best_score">BEST SCORE: <?= $best->bestscore?></h4>
    </div>
    <section class="quiz_set">
      <div class="line">
        <div class="L_line"></div>
        <div class="R_line"></div>
      </div>
      <p>Press 'enter' to submit the correct<br>Press '=' to skip</p>
      <div class="station">
        <div class="L_station"></div>
        <input type="text" class="answer_bar">
        <div class="R_station"></div>
      </div>
      <div class="subway">
        <img src="./img/subway.png">
        <div>
          <table>
            <tr>
              <th><label>6호선<input type="checkbox" name="stationLine" value="stationList_6" class="stationSelecter" checked></label></th>
              <th><label>3호선<input type="checkbox" name="stationLine" value="stationList_3" class="stationSelecter" checked></label></th>
              <th><label>7호선<input type="checkbox" name="stationLine" value="stationList_7" class="stationSelecter" checked></label></th>
            </tr>
          </table>
          <button class="start_btn">도전</button>
        </div>
      </div>
      <div class="shadow">
      </div>
    </section>
  </main>
  <script src="/js/station.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>