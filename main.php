 <?php  
   $Colors=$_POST["colors"] ;
   $Size= $_POST["size"];
   $QT=$_POST["quantity"];
   foreach($Colors as $color){
     echo " colors:  you choosed $color <br>";
   }
   foreach($Size as $size){
    echo "  Sizes: you choosed $size  <br> ";
  }
  echo" quantity: you choosed $QT ";

   ?>