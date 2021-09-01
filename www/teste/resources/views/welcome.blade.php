<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Teste</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="content">
                <form action="/teste/public/jogadores" method="POST">
                @csrf
                        <label>Jogador 1</label>
                        <input type="text" class="form-control" name="jog1" id="jog1">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel1" min="1" max="10" id="nivel1">

                        <label>Jogador 2</label>
                        <input type="text" class="form-control" name="jog2" id="jog2">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel2" min="1" max="10" id="nivel2">

                    <label>Jogador 3</label>
                        <input type="text" class="form-control" name="jog3" id="jog3">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel3" min="1" max="10" id="nivel3">

                    <label>Jogador 4</label>
                        <input type="text" class="form-control" name="jog4" id="jog4">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel4" min="1" max="10" id="nivel4">

                    <label>Jogador 5</label>
                        <input type="text" class="form-control" name="jog5" id="jog5">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel5" min="1" max="10" id="nivel5">

                    <label>Jogador 6</label>
                        <input type="text" class="form-control" name="jog6" id="jog6">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel6" min="1" max="10" id="nivel6">

                    <label>Jogador 7</label>
                        <input type="text" class="form-control" name="jog7" id="jog7">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel7" min="1" max="10" id="nivel7">
                   

                    <label>Jogador 8</label>
                        <input type="text" class="form-control" name="jog8" id="jog8">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel8" min="1" max="10" id="nivel8">

                    <label>Jogador 9</label>
                        <input type="text" class="form-control" name="jog9" id="jog9">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel9" min="1" max="10" id="nivel9">


                    <label>Jogador 10</label>
                        <input type="text" class="form-control" name="jog10" id="jog10">
                        <label>Nível</label>
                        <input type="number" class="form-control" name="nivel10" min="1" max="10" id="nivel10">


                    <div class="mb-3">
                        <label>Quantidade de Jogadores por Time</label>
                        <br>
                        <input type="number" class="form-control" name="quantidade" min="1" max="3" id="quantidade">
                    </div>
                    <button type="submit" class="btn btn-primary">Sortear</button>
                </form>
            </div>
        </div>
    </body>
</html>
