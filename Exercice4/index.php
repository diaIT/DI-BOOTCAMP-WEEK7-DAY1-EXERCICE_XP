<?php 

class Diff
{
    

    public function difference($date1,$date2)
    {
        $diff=date_diff($date1,$date2);
        echo $diff->format("%y years %m month %d days");

    }
}

$diff = new Diff;
$date1=date_create("1981-11-03");
$date2=date_create("2013-09-04");
$diff ->difference($date1,$date2);

//echo $diff->format("%R%a days");

//var_dump($diff->difference());
 //echo $diff->difference();


 ?>