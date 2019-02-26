<?php

class MyGreeter {
	function Client() {
		$return_str;
		$hours = date('H', time());
		if ($hours > 0 && $hours < 12) {
			$return_str = '早上好';
		} elseif ($hours > 12 && $hours < 18) {
			$return_str = '下午好';
		} elseif ($hours > 18 && $hours < 24) {
			$return_str = '晚上好';
		} else {
			$return_str = '稍后再试';
		}
		return $return_str;
	}
}