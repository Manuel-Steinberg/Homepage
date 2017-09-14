<?php

return function($site, $pages, $page) {
		
	$msg = null;
	$date = (new DateTime())->format('U');
	
	if ($site->user())	{
		if (!$site->user()->created()) {
			$site->user()->update(array(
				'created' => $date
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
				
		if (!empty($_POST["amount"]) && isset($_POST["submit"])) {
				
			$comment = '';
			if (isset($_POST["comment"])) {
				$comment = $_POST["comment"];
				$comment = mc_encrypt($comment, substr(String2Hex($hash),0,64));
			}
			
			if (isset($_POST["amount"])) {
				$amount = $_POST["amount"];
			}
			else {
				$amount = 0;
			}
			
			if ($_POST["submit"] == "plus") {
				if ($amount < 0) {
					$amount = abs($amount);
				}
			}
			elseif ($_POST["submit"] == "minus") {
				if ($amount > 0) {
					$amount =  '-' . $amount;
				}
			}
			
			$amount = mc_encrypt($amount, substr(String2Hex($hash),0,64));
			 	
			$db = new Database(array(
				'type'     => 'mysql',
				'host'     => '127.0.0.1',
				'database' => 'pilr',
				'user'     => 'web',
				'password' => 'web'
			));
			
			$users = $db->table('users');
			
			$results = $users->where(array('certificstion' => 'xxx'))
											 ->all();

			foreach($results as $user) {
				echo $user->id();
			}
			
			if($id = $users->insert(array(
				'id' => 'xxx'
			 ,'description'    => $comment
			 ,'amount'	=> $amount
			))) {
				echo 'User has been added and has the ID: ' . $id;
			}

			/*try {
							
				$site->user()->update(array(
					'comments' => $site->user()->comments() . ',' . $comment,
					'amounts'	 => $site->user()->amounts() . ',' . $amount,
					'dates'		 => $site->user()->dates() . ',' . $date,
				));

			} catch(Exception $e) {

				echo 'The user could not be updated';
				// optional reason: echo $e->getMessage();

			}*/
		}
		elseif (isset($_COOKIE['Lockr'])) {	
			$lockr = json_decode(base64_decode($_COOKIE['Lockr']));
			
			$comments; 
			$amounts; 
			$dates;
			
			foreach ($lockr as $pile) {
				$comments .= ',' . mc_encrypt($pile->comment, substr(String2Hex($hash),0,64));
				$amounts .= ',' . mc_encrypt($pile->amount, substr(String2Hex($hash),0,64));
				$dates .= ',' . (new DateTime("Sun Oct 18 2015 11:28:12 GMT+0200"))->format('U');
			}
			
			try {
							
				$site->user()->update(array(
					'comments' => $site->user()->comments() . ',' . $comments,
					'amounts'	 => $site->user()->amounts() . ',' . $amounts,
					'dates'		 => $site->user()->dates() . ',' . $dates,
				));
				
				setcookie ("Lockr", "", time() - 3600, "/", "", 1);

			} catch(Exception $e) {

				echo 'The user could not be updated';
				// optional reason: echo $e->getMessage();

			}
			
			// Localstorageflsuh()!!!
 		}
	}
	
	return array(
		'msg' => $msg
	);
	
}
?>