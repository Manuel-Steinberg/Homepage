<?php

return function($site, $pages, $page) {
	
	$msg = null;
	
	if($site->user()) {
	
		if (!$site->user()->created()) {
			$site->user()->update(array(
			'created' => (new DateTime())->format('U'),
		));
		}
		
		$options = [
			'salt' => hash('md5', $site->user()->created()), 
			'cost' => 12 // the default cost is 10
		];
		$hash = password_hash($site->user()->password(), PASSWORD_BCRYPT, $options);
		
		function String2Hex($string){
			$hex='';
			for ($i=0; $i < strlen($string); $i++){
					$hex .= dechex(ord($string[$i]));
			}
			return $hex;
		}
		
		// MySQL Request!!!
		/*
		$comments = str::split($site->user()->comments(), ',');
		foreach ($comments as $i => $comment) {
			$comments[$i] = mc_decrypt($comment, substr(String2Hex($hash),0,64));
		}
		
		$amounts = str::split($site->user()->amounts(), ',');
		foreach ($amounts as $i => $amount) {
			$amounts[$i] = mc_decrypt($amount, substr(String2Hex($hash),0,64));
		}
		
		$dates = str::split($site->user()->dates(), ',');
		*/
		$statistic = compact("comments", "amounts", "dates");
	}
	
	if (isset($statistic)) {
		return array(
			'msg' => $msg,
			'statistic' => $statistic
		);
	}
	else {		
		return array(
			'msg' => $msg
		);
	}

}
?>