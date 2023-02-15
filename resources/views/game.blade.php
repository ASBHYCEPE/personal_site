<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/game.css">
    <script src="{{asset("/js/main.js")}}"></script>
    <title>Rock Paper Scissors</title>
</head>
<body>
    <div id="main-content">
        <div id="title-holder">
            <p id="title">
                ROCK, PAPER, SCISSOR
            </p>
            <p id="subtitle">
                Choose your weapon!
            </p>
        </div>

        <div class="option-block">
            <div class="form-item">
                <input type="submit" value="ROCK" onclick="executeGame(1)">
            </div>
            <div class="form-item">
                <input type="submit" value="PAPER" onclick="executeGame(2)">
            </div>
            <div class="form-item">
                <input type="submit" value="SCISSOR" onclick="executeGame(3)">
            </div>
        </div>

        <div class="block">
            <div class="block-item">
                <p>YOU</p>
            </div>
            <div class="block-item">
                <p>COMPUTER</p>
            </div>
        </div>
        <div class="block-result">
            <div class="result-item">
                <img id="user" src="/img/game/default.png" width="200px" height="200px">
            </div>
            <div class="result-item">
                <img id="computer" src="/img/game/default.png" width="200px" height="200px">
            </div>
        </div>
        <div id="display-block-result">
            <p id="display-result">
                Please choose your weapon
            </p>
        </div>
    </div>
</body>
</html>