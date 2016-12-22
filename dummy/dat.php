
<?

$time_in_12_hour_format  = DATE("g:i a", STRTOTIME("13:30"));
 echo $time_in_12_hour_format;
// 12-hour time to 24-hour time 
$time_in_24_hour_format  = DATE("H:i", STRTOTIME("1:30 pm"));
 echo $time_in_24_hour_format;
 

 
function BubbleSort($sort_array,$reverse) 
{ 
	for($i = 0; $i < sizeof($sort_array); $i++){ 
		for($j = $i + 1; $j < SIZEOF($sort_array); $j++){ 
			if($reverse){ 
				if($sort_array[$i] < $sort_array[$j]){ 
					$tmp = $sort_array[$i]; 
					$sort_array[$i] = $sort_array[$j]; 
					$sort_array[$j] = $tmp; 
				} 
			}
			else{ 
				if($sort_array[$i] > $sort_array[$j]){ 
					$tmp = $sort_array[$i]; 
					$sort_array[$i] = $sort_array[$j]; 
					$sort_array[$j] = $tmp; 
				} 
			} 
		} 
	} 
return $sort_array; 
}  
 
//Use like this :
$array = array(10,65,32,41,1,99); 
$sorted = BubbleSort($array,0);

echo "<pre>";
print_r($sorted);
?>