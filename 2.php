<?php

 /*function shortener($shortMe) {
	$str = $shortMe;
		if ( strlen ($str) > 6 ){
			$res = substr($str, 0 , 6);
			echo "$res\n";
			$s = $res . '*';
			//for($i = 7 ; $i < strlen($str);$i++){ 
				//echo"$i\n";
			//	$s = $s . '*';
			//}
			echo "$s\n";
			$str = $s;
			return $str;
		}
			//echo "$str";
			return $str;//}
		
		//...wite your code here
    }*/
	 function shortener($shortMe) {
		$str = $shortMe;
		$arr = explode(" ", $str);
		print_r($arr);
		$s='';
		for($i = 0 ; $i < count( $arr );$i++){
			if ( strlen( $arr[$i] ) > 6 ){
			//	echo"1111111111111111111111";
			//$r = substr($s, 0 , -1);
			//echo"$r 111\n";
			$res = substr($arr[$i], 0 , 6);
			$s = $s.$res.'* ';
			//return $s;
		} else{
			//echo"$s\n";
			$s = $s . $arr[ $i ] . ' ';
		
		} 
			//echo"$i\n";	
		}
		return substr($s,0 ,-1);
	 }
	
	
	
	
	//$e = strlen('A very looooooong wooooord');
	//echo"$e 11111\n";
	$res = shortener('Loremia ipsumia dolaria sitia ameti');
	//$e = strlen($res);
	
	echo "Loremi* ipsumi* dolari* sitia ameti\n";
	echo "$res 9999999";
	

?>