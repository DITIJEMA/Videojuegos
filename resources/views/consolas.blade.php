<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="/resources/views/platform.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consolas</title>
    </head>
    <body>
        <style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto');

html, body{
    margin: 0;
    padding: 0;
}
body{
    background: white;
    width: 100%;
    height: 100%;
    font-family: sans-serif;
    letter-spacing: 0.03em;
    line-height: 1.6;
    font-family: 'Open Sans', sans-serif;
}
.title{
    text-align: center;
    font-size: 40px;
    color: #6a6a6a;
    margin-top: 100px;
    font-weight: 100;
    font-family: 'Roboto', sans-serif;
}
.container{
    width: 100%;
    max-width: 1200px;
    height: 430px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;
}
.container .card{
    width: 330px;
    height: 430px;
    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    margin: 20px;
    text-align: center;
    transition: all 0.25s;
}
.container .card:hover{
    transform: translateY(-15px);
    box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
}
.container .card img{
    width: 330px;
    height: 220px;
}
.container .card h4{
    font-weight: 600;
}
.container .card p{
    padding: 0 1rem;
    font-size: 16px;
    font-weight: 300;
}
.container .card a {
    font-weight: 500;
    text-decoration: none;
    color: #3498db;
}
        </style>       
    <h1 class="title">CONSOLAS</h1>

    <div class="container">

        <div class="card">
            <img src="{{URL::asset('/resources/views/photo/ps.jpg')}}">
            <h4>PLAY STATION</h4>
            <p>DESDE EL PLAY STATION 4 Y PLAY STATION 5</p>
            <a href="">VER VIDEOJUEGOS</a>
        </div>

        <div class="card">
            <img src="{{URL::asset('/resources/views/photo/xbox.png')}}">
            <h4>X-BOX</h4>
            <p>X-BOX 
        S Y X-BOX SERIES X</p>
            <a href="">VER VIDEOJUEGOS</a>
        </div>

        <div class="card">
            <img src="{{URL::asset('/resources/views/photo/nitendo.png')}}">
            <h4>NITENDO</h4>
            <p>NITENDO SWITCH</p>
            <a href="">VER VIDEOJUEGOS</a>
        </div>

    </div>

</body>
</html> 