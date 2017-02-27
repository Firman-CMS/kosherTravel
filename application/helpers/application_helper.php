<?php

	function timeAgo($time)
	{
		/*
		$time = strtotime('2010-04-28 17:25:43');
		echo 'event happened '.timeAgo($time).' ago';
		*/
    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'min',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
      if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        if($numberOfUnits > 1){ $s = 's';}else{ $s = '';};
      #return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
      return $numberOfUnits.' '.$text.$s.' ago';
    }

	}

	function limitcharacter($x, $length)
	{
	  if(strlen($x)<=$length)
	  {
	    return $x;
	  }
	  else
	  {
	    $y=substr($x,0,$length) . '...';
	    return $y;
	  }
	}

	function menu_img(){
		return 'public/menu/';
	}

	function menu_img_thumb(){
		return 'public/menu/thumb/';
	}
