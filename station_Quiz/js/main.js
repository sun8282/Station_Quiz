const Lstation = document.querySelector('.L_station');
const Rstation = document.querySelector('.R_station');
const answerBar = document.querySelector('.answer_bar');
const timer = document.querySelector('.timer');
const station = document.querySelector('.station');
const subway = document.querySelector('.subway');
const startBtn = document.querySelector('.start_btn');
const gameplayInfo = document.querySelector('.gameplay_info');
const shadow = document.querySelector('.shadow');
const scoreText = document.querySelector('.score');
const stationSelecter = document.querySelectorAll('.stationSelecter');
let randomStationLineNum;
let randomStationLine;
let randomStationNum;
let selectorList = [];

const resultSelector = () => {
  stationSelecter.forEach((item) => {
    if (item.checked) {
      console.log(item.checked);
      console.log(item.value);
      let val;
      switch (item.value) {
        case 'stationList_6':
          val = stationList.data[0];
          break;
        case 'stationList_3':
          val = stationList.data[1];
          break;
        case 'stationList_8':
          val = stationList.data[2];
          break;
      }
      console.log(val);
      selectorList.push(val);
    }
  })
  console.log(selectorList);
}
const randomQuestion = () => {
  randomStationLineNum = Math.floor(Math.random() * (selectorList.length));
  selectorList.forEach((i, idx) => {
    if (idx === randomStationLineNum)
      randomStationLine = Object.values(i);
  });
  randomStationLine = randomStationLine[0];
  randomStationNum = Math.floor(Math.random() * (randomStationLine.length - 1));
  let text;
  switch (randomStationLine[randomStationLine.length - 1]) {
    case '3':
      text = '<img src="./img/station_3.png" width="50px">';
      break;
    case '6':
      text = '<img src="./img/station_6.png" width="50px">';
      break;
  }

  Lstation.innerHTML = `<div><p>${text}</p><p>${randomStationNum <= 0 ? ' ' : randomStationLine[randomStationNum - 1]}</p></div>`;
  Rstation.innerHTML = `<div><p>${text}</p><p>${(randomStationNum + 1) === (randomStationLine.length - 1) ? '' : randomStationLine[randomStationNum + 1]}</p></div>`;

}
startBtn.addEventListener('click', () => {
  subway.style.left = '-14000px';
  resultSelector();
  console.log('sfag');
  gameStart();
})
// 3초 후에 1분(60초) 카운트 시작
const gameStart = () => {
  setTimeout(() => {
    randomQuestion();
    gameplayInfo.style.display = 'block';
    let c = 120; // 초기 카운트 값
    let m = parseInt(c / 60);
    s = parseInt(c % 60);
    timer.textContent = `${m}:${s === 0 ? '00' : s}`;
    const timerCheck = setInterval(() => {
      c--; // 카운트 감소
      m = parseInt(c / 60);
      s = parseInt(c % 60);
      timer.textContent = `${m}:${s === 0 ? '00' : s}`;
      if (c <= 0) { // 카운트가 0보다 작아지면
        clearInterval(timerCheck); // 타이머 정지
        timer.textContent = 'TIMEOVER!'
        shadow.style.backgroundColor = 'black';
      }
    }, 1000); // 1초마다 실행
  }, 3000); // 3초 후에 실행
}
let score = 0;
document.addEventListener('keydown', (e) => {
  if (e.key === 'Enter') {
    if (answerBar.value.match(randomStationLine[randomStationNum])) {
      score++;
      scoreText.textContent = 'score: ' + score;
    } else {
      station.classList.add('shake');
      setTimeout(() => {
        if (e.key === 'Enter') {
          station.classList.remove('shake');
          return;
        }
        station.classList.remove('shake');
      }, 500);
    }
    answerBar.value = null;
    randomQuestion();
  }
})