
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML5 Classic Snake Game</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <canvas id="canvas"></canvas>

    <div id="reMenu">
      <h1 id="snake2">Snake</h1>
      <p id="info2">Game Over</p>
      <a href="javascript: void(0)" id="restart" onclick="reset()" >Restart</a>
      <a href="#" id="tweet" target="_blank" rel="nofollow">Tweet My Score</a>
    </div>

    <div id="menu">
      <h1 id="snake">Snake</h1>
      <p id="info">by <a target="_blank" rel="nofollow" href="http://twitter.com/SolitaryDesigns">Kushagra Agarwal</a></p>
      <a href="javascript: void(0)" id="start" onclick="init()" >Start</a>
      <p id="loading">Loading...</p>
    </div>

    <p id="score">Score: 0</p>

    <!-- Audio -->
    <audio id="main_music" loop>
      <source src="http://dl.dropbox.com/u/26141789/canvas/snake/main.mp3" type="audio/mp3" />
      <source src="http://dl.dropbox.com/u/26141789/canvas/snake/main.ogg" type="audio/ogg"/>
    </audio>

    <audio id="gameOver">
      <source src="http://dl.dropbox.com/u/26141789/canvas/snake/go.mp3" type="audio/mp3" />
      <source src="http://dl.dropbox.com/u/26141789/canvas/snake/go.ogg" type="audio/ogg"/>
    </audio>

    <audio id="food">
      <source src="http://dl.dropbox.com/u/26141789/canvas/snake/food.mp3" type="audio/mp3" />
      <source src="http://dl.dropbox.com/u/26141789/canvas/snake/food.ogg" type="audio/ogg"/>
    </audio>

    <script src="main.js"></script>

  </body>
</html>
