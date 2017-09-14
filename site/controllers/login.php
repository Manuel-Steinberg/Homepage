<?php 

return function($site, $pages, $page) {
	
	$error = false;

  // don't show the login screen to already logged in users
  if($site->user()) go('/');

  // handle the form submission
  if(r::is('post') and get('login')) {

    // fetch the user by username and run the 
    // login method with the password
    if($user = $site->user(get('username')) and $user->login(get('password'))) {
			
			if (isset($_COOKIE['Lockr'])) {
				// Ajax Post!
				/*$jsons = str::split($_COOKIE['Lockr'], ',');
				
				
				foreach ($jsons as $i => $json) {
					$jsons[$i] = base64_decode($json);
				}*/

				go('apps/pilr/add');
			}
			
      // redirect to the homepage 
      // if the login was successful			
      go('/');
    } else {
      // make sure the alert is being 
      // displayed in the template
      $error = true;
    }

  } else {
    // nothing has been submitted
    // nothing has gone wrong
    $error = false;  
  }

  return array('error' => $error);

};