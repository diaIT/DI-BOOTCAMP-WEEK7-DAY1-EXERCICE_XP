<?php 

/**
 * 
 */
class Diff
{
	public $date1;
	public $date2;
	function __construct($date1,$date2)
	{
		$this->date1=date_create("1981-11-03");
	    $this->date2=date_create("1981-11-03");
	}

	 public function date($date1,$date2)
	{
		$diff=date_diff($date1,$date2);
        echo $diff->format("%y years %m month %d days");
	}
}
 $diff = new Diff;

 $diff->date($date1,$date2);
 ?>