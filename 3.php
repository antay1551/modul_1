<?php
    function compare_ends($arr) {
        //...wite your code here
		$k = 0; 
		for ( $i = 0; $i < count( $arr ); $i++ ){
			
			if ( strlen($arr[ $i ]) >= 2 ){
				$a  = $arr[ $i ];
				echo "$a\n";
				$first = substr($arr[ $i ], 0 , 1);
				$last = substr($arr[ $i ], strlen( $arr[ $i ] )-1  , strlen( $arr[ $i ] ));
				echo "$first 111\n";
				echo "$last 222\n";
			
				if (($first==$last ) ){
					$k++;
				}	
			} 
		}
		return $k;
    }

	$res = compare_ends(array('aaa', 'be', 'abc', 'hello'));
	echo"$res 9999999";

?>