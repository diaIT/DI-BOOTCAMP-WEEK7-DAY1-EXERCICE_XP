<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice3</title>
</head>
<body>
 <?php 
 

 class Tab
 {
   
   public $arr=array(11, -2, 4, 35, 0, 8, -9);

   public function tab()
   {
      sort($this->arr);

      return $this->arr ;
   }
 }
 $tab= new Tab;
 
 
 //echo $tab->tab();

var_dump( $tab->tab());
  ?>
</body>
</html>