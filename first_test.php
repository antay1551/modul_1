<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */
    function my_sum( $arr ) {
        $sum = 0;
		foreach ( $arr as $value ){
			$sum += $value;
		}
		//for ( $i = 0; $i < count( $arr ); $i++ ){
		//	$sum += $arr[$i];
		//}
		return $sum;
    }


    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
    function shortener($shortMe) {
		$str = $shortMe;
		$arr = explode(" ", $str);
		$s='';
		for( $i = 0 ; $i < count( $arr );$i++){
			if ( strlen ( $arr[$i] ) > 6 ){
			$res = substr($arr[$i], 0 , 6);
			$s = $s.$res.'* ';
			} else {
			$s = $s . $arr[ $i ] . ' ';
			}	 
		}
		return substr( $s, 0, -1 );
    }

    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
    function compare_ends($arr) {
        /*$k = 0; 
		for ( $i = 0; $i < count( $arr ); $i++ ){
			if ( strlen($arr[ $i ]) >= 2 ){
				$first = substr($arr[ $i ], 0 , 1);
				$last = substr($arr[ $i ], strlen( $arr[ $i ] ) - 1  , strlen( $arr[ $i ] ));
				if (($first==$last ) ){
					$k++;
				}	
			} 
		}
		return ($k);
		*/
		$k = 0; 
		foreach ( $arr as $value ){
			if ( strlen( $value ) >= 2 ){
				$first = substr( $value, 0 , 1 );
				$last = substr( $value, strlen( $value ) - 1  , strlen( $value ) );
				if ( ( $first == $last ) ){
					$k++;
				}	
			} 
		}
		return ($k);
		
		
    }



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string($str) {
       return (strrev($str));
	}

test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();










