<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="stilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Supermercado</title>
</head>
<body class="bg-dark">

<header>
<nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top">


            <a class="navbar-brand" href="index.php">
            <img src="img/cow.png" width="30" height="30" alt="imgicono" loading="lazy">
            Supermercados la vaquita SA
            
              </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="">logica<span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                  
                  
                </div>
              </nav>
            

            
          </nav>
</header>

<main class= "text-white">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/super1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/super2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/super3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     
        <div class="container bg-secondary" >
        
        <div class="row">
          <div class="col strow">
            <h1>BIENVENIDO a la tienda virtual.....</h1>
          <p >en esta pagina encontraras productos de la tienda</p>
          </div>
        </div>

        <div class="row fondo">
        <div class="col-12 col-md-6  ">
        <h2>todos los viernes del mes son locos...</h2>
        <img src="img/oferta.png" alt="img1" class="img-fluid">
        <br>
        <br>
        </div>
        <div class="col-12 col-md-6 fondo2 ">
          <p class="texto1 mt-3">aprovecha las grandes ofertas que se vienen</p>
          <p>para regalar el dia de la amistad, hay anchetas desde 10.000 hasta 100.000,
            los regalos que pase de 100.000 tendran un descuento especial porque siempre 
            pensamos en el cliente. </p>
            <p> estan tambien las ceverzas : coronitas, pilsen, aguila, garrafas de aguardiente, por la 
          compra de dos garrafas se lleva la tercera gratis  </p>
          <p>se veran muchos descuentos, no te quedes sin el tuyo, ademas puede hacer su compra 
            por via virtual, no tiene que salir de casa, todo se lo llevamos en muy buen estado
          </p>
          <img class="imgg" src="img/cerveza.png" alt="img2">
          <img class="imgg img-responsive" src="img/amor.png" alt="img3">

          
          

        </div>
        </div>
        <h1  class="titulo mt-4">CONOZCA NUESTROS PRODUCTOS</h1>
        <div class="row">
          <div class="col-12 col-md-4">


          </div>

        
        
       

        </div>




      <div class="conteiner">


    <div class="row justify-content-center mt-5">
        <div class="col-4 ">
        <h3> Factura compra</h3>

        <form action="index.php" method="POST">

           <div class="row mt-2 ">
             <div class="col">
                 <input type="text" class="form-control" placeholder="producto 1" name="producto1">
               </div>
             <div class="col">
                 <input type="text" class="form-control" placeholder="precio($)" name="precio1">
             </div>
           </div>
           <div class="row mt-2">
             <div class="col">
                 <input type="text" class="form-control" placeholder="producto 2 " name="producto2">
               </div>
             <div class="col">
                 <input type="text" class="form-control" placeholder="precio($)" name="precio2">
             </div>
           </div>
           <div class="row mt-2">
             <div class="col">
                 <input type="text" class="form-control" placeholder="producto 3" name="producto3">
               </div>
             <div class="col">
                 <input type="text" class="form-control" placeholder="precio($)">
             </div>
           </div>
           <div class="row mt-2">
             <div class="col">
                 <input type="text" class="form-control" placeholder="producto 4" name="producto4">
               </div>
             <div class="col">
                 <input type="text" class="form-control" placeholder="precio($)">
             </div>
           </div>
           <div class="row mt-2">
             <div class="col">
                 <input type="text" class="form-control" placeholder="producto 5" name="producto2">
               </div>
             <div class="col">
                 <input type="text" class="form-control" placeholder="precio($)">
             </div>
           </div>
           <button type="submit" class="btn btn-primary btn-block mt-2" name=botonCalcular>calcular</button>
         </form> 

        <?php
         if(isset($_POST["botonCalcular"])):
        ?>

      <div class="text-white bg-danger">

          <h5 class="mt-5"> 
          <?php
                   
                  $precio1=$_POST["precio1"];
                  $producto1=$_POST["producto1"];

                  $precio2=$_POST["precio2"];
                  $producto2=$_POST["producto2"];

                  $total=$precio1+$precio2;


                  echo("el producto 1 es : ".$producto1."------".$precio1);
                  echo("<br>");
                  echo("el producto 2 es : ".$producto2."------".$precio2);
                  echo("<br>");
                  echo("<br>");
                  echo("**************************");
                  echo("el total de la compra es".$total)

                  
                  
          ?>
          </h5>

       </div>   

        <?php endif ?>

 
     </div>

    </div>










</main>

<footer>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>