<?php
/**
 * Function finds nth occurance of needle in a haystack
 *
 * @author Krzysztof Jabłoński
 *
 * @param $haystack - The string to search in.
 * @param $needle - If needle is not a string, it is converted to an integer and applied as the ordinal value of a character.
 * @param $n - Number of occurance. For example if you are looking for 2nd occurance of ',' in given $haystack $n should be 2.
 *
 * @return string
 */

function strposX( $haystack, $needle, $n){
		$offset = 0;
		for($i = 0; $i < $n; $i++){
			$str = substr($haystack, $offset);
			$offset += strpos($str, $needle)+1;
		}
		return substr($haystack, 0, $offset);
}

?>
