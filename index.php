<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DODO</title>
  </head>
  <body>
    <div class="col-10 mx-auto">     
        <div class="row">   <!-- header -->
            <div class="col-2">
                <img src="img/logo.jpg" class="w-100">
            </div>
            <div class="col-7">
                
            </div>
            <div class="col-3 text-right">
                <button class="btn bg-btn-dodo mt-5 basket">Корзина</button>
            </div>

            <div class="bsk-box bg-white border rounded col-3 pt-3"> <!-- Корзина -->
                <?php 
                     $connect = mysqli_connect("127.0.0.1", "root", "", "DodoPizza");
                     $select_basket = "SELECT * FROM basket";
                     $query1 = mysqli_query($connect, $select_basket);
                     for ($i=0; $i < $query1->num_rows; $i++) { 
                         $basket = $query1->fetch_assoc();
                ?>
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo $basket["img"]; ?>" class="w-100">
                    </div>
                    <div class="col-4 mt-2">
                        <h5><?php echo $basket["name"]; ?></h5>                        
                    </div>
                    <div class="col-2 mt-2 px-0 text-center">
                        <h5><?php echo $basket["price"]; ?>  <span>₽</span></h5>                        
                    </div>
                    <div class="col-2 mt-2 pl-0 pr-0">

                    <form action="delete.php" method="GET">
                        <input type="hidden" name="id" value=" <?php echo $basket["id"]; ?> ">
                        <button style='border: none; background: none'> <img src="img/trash.png" class="w-100 trash"></button>
                    </form>  
                                           
                        
                    </div>
                </div>
   
                 <?php } ?>
                 <h5>Сумма заказа:<span>₽</span></h5>
                 <?php 
                    $sum = "SELECT SUM('price') FROM basket";
                    $querysum = mysqli_query($connect, $sum);
                    $summa = $querysum->fetch_assoc();
                    echo $summa;
                    ?>
                 <form action="delete.php" method="GET">
                    <button class="btn bg-btn-dodo my-3">Очистить корзину</button>
                 </form>
                <button class="btn bg-btn-dodo cls my-3">Закрыть</button>
            </div>
        </div>     

        <div class="col-12 rounded banner "> <!-- banner -->            
        </div>

        <h1 class="my-5">Пицца</h1>
        <div class="row  pb-5 d-flex">
             <?php
               
                $select = 'SELECT * FROM pizza';
                $query = mysqli_query($connect, $select);
                for ($i=0; $i < 4; $i++) { 
                    $stroka = $query->fetch_assoc();
                
            ?> 
            <div class="col-3">
                <img src="<?php echo $stroka["img"];?>" class="w-100">
                <div class="pizz">
                    <h3><?php echo $stroka["name"];?></h3>   
                    <p class="text-secondary"><?php echo $stroka["info"];?></p>
                </div>  
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo $stroka["price"];?><span> ₽</span></h3>                        
                    </div>
                    <div class="col-6">
                    <form action="insert.php" method="GET">
                        <input type="hidden" name="name" value="<?php echo $stroka["name"];?>">
                         <input type="hidden" name="img" value="<?php echo $stroka["img"];?>">
                          <input type="hidden" name="price" value="<?php echo $stroka["price"];?>">
                        <button class="btn bg-btn-dodo">Выбрать</button>  
                    </form>   
                                             
                    </div>
                </div>       
            </div>
            <?php 
                }
            ?>
                                
        </div>
    </div>

    <script type="text/javascript">
        let bsk = document.querySelector('.basket');
        let bsk_box = document.querySelector('.bsk-box');
        let close = document.querySelector('.cls');
        
        bsk.onclick = function() {
            bsk_box.style.display = "block";
        }

        close.onclick = function() {
            bsk_box.style.display = "none";
        }
        
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>