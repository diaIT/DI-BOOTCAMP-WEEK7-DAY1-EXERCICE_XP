<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   /**
    * 
    */
   class Factorial
   {
     
      
     public function factorial($number)
      {
         if ($number<=1) {
            return 1;
         }else 
             return $number * $this->factorial($number - 1);
      }
   }
   $factorial= new Factorial;
   echo $factorial->factorial(5);
;


   ?>
</body>
</html>