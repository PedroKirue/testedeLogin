<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Schoodle</title>
</head>
<body style="background-image: url(./imagens/background-schoodle.png);">
    <div id="area-log ">
        <div id="login">
            <form class ="card">
                <div class="card-content">
                    <img src="./imagens/logo.png" alt="" style="width: 200px; margin-left: 33px; margin-bottom: 30px;">
                    <div class="card-content-area">
                        <label for="name"></label>
                        <input type="name" id="usuario" autocomplete="on" placeholder="Curso">
                    </div>
                    <div class="card-content-area">
                        <label for="name"></label>
                        <input type="name" id="password" autocomplete="off" placeholder="Turma">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="calendario.html">
                    <button type="submit" value="login" class="submit">Login</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>