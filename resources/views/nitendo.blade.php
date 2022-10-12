<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');
*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   transition: all .2s linear;
   text-transform: capitalize;
}
html{
   font-size: 62.5%;
   overflow-x: hidden;
}
body{
   background: red;
}
.container{
   max-width: 1200px;
   margin:0 auto;
   padding:3rem 2rem;
}
.container .title{
   font-size: 3.5rem;
   color:#444;
   margin-bottom: 3rem;
   text-transform: uppercase;
   text-align: center;
}
.container .products-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}
.container .products-container .product{
   text-align: center;
   padding:3rem 2rem;
   background: #fff;
   box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
   outline: .1rem solid #ccc;
   outline-offset: -1.5rem;
   cursor: pointer;
}
.container .products-container .product:hover{
   outline: .2rem solid #222;
   outline-offset: 0;
}
.container .products-container .product img{
   height: 25rem;
}
.container .products-container .product:hover img{
   transform: scale(.9);
}
.container .products-container .product h3{
   padding:.5rem 0;
   font-size: 2rem;
   color:#444;
}
.container .products-container .product:hover h3{
   color:#27ae60;
}
.container .products-container .product .price{
   font-size: 2rem;
   color:#444;
}
@media (max-width:991px){
   html{
      font-size: 55%;
   }
}
@media (max-width:450px){
   html{
      font-size: 50%;
   }
}
    </style>
<div class="container">

   <h3 class="title">VIDEOJUEGOS</h3>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/ark.jpg')}}">
         <h3>Ark Survival Evolved Nintendo Switch Juego físico Nintendo Nintendo Switch</h3>
         <div class="price">$ 1,060.00</div>
       <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-2">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/futbol.jpg')}}">
         <h3>Mario Strikers: Battle League - Nintendo Switch - Standard Edition</h3>
         <div class="price">$ 1,199.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-3">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/kirby.jpg')}}">
         <h3>Kirby and the Forgotten Land - Standard Edition - Nintendo Switch</h3>
         <div class="price">$ 1,199.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-4">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/luigi.jpg')}}">
         <h3>Luigi’s Mansion 3 - Nintendo Switch - Standard Edition</h3>
         <div class="price">$ 1,299.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-5">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/mario.jpg')}}">
         <h3>Luigi’s Mansion 3 - Nintendo Switch - Standard Edition</h3>
         <div class="price">$ 1,349.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-6">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/mario_kar.jpg')}}">
         <h3>Mario Kart 8 Deluxe - Nintendo Switch - Standard Edition</h3>
         <div class="price">$ 1,900.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-7">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/mortal.jpg')}}">
         <h3>Mortal Kombat 11 Ultimate (Nintendo Switch) - STANDARD EDITION Edition</h3>
         <div class="price">$ 1,187.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-8">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/smash.jpg')}}">
         <h3>Super Smash Bros. Ultimate - Standard Edition - Nintendo Switch</h3>
         <div class="price">$ 1,124.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-9">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/street.jpg')}}">
         <h3>Street Fighter - 30th Anniversary Collection - Standard Edition - Nintendo Switch</h3>
         <div class="price">$ 670.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-10">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/zelda.jpg')}}">
         <h3>The Legend of Zelda: Breath of the Wild - Nintendo Switch - Standard Edition</h3>
         <div class="price">$ 1,185.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-11">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/metroid.jfif')}}">
         <h3>TMetroid Dread - Standard Edition - Nintendo Switch</h3>
         <div class="price">$ 1,099.00</div>
          <a href="">Comprar</a>
      </div>

      <div class="product" data-name="p-12">
         <img src="{{URL::asset('/resources/views/photo/Nitendo/mario3D.jpg')}}">
         <h3>Super Mario 3D World + Bowser’s Fury - Standard Edition - Nintendo Switch</h3>
         <div class="price">$ 1,124.00</div>
          <a href="">Comprar</a>
      </div>

   </div>

</div>

</body>
</html> 