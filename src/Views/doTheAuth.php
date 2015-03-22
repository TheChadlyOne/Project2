<?php

echo 'hello there';

require_once('../Common/Authentication/user.php');
require_once('../Common/Authentication/InMemoryUser.php');
require_once('../Common/Authentication/FileBasedUser.php');
require_once('../Common/Authentication/MySQLUser.php');
require_once('../Common/Authentication/PostThang.php');

	$postthang = new PostThang($_POST);
	
	if($postthang->getCredauthSelect()=='FileBased') {
	    $filetxt='./FromFile.txt';
		$loggingUser = new UserThatsFileLoaded($filetxt);
	}
	if ($postthang->getCredauthSelect()=='InMemory'){
		$loggingUser = new UserStoredInMemory() ;
	}
	if ($postthang->getCredauthSelect()=='MySQL'){
		$loggingUser = new UserFromMySQL($postthang) ;
	}
    
	function AuthUser(aUser $loggingUser,PostThang $pstArray )
	{
		if ( strcmp( $loggingUser->getPassword(), $pstArray->getPassword() )=== 0 
		     && ($loggingUser->getUsername()===$pstArray->getUsername() ) )
		{			 
			 echo '<br><h1>'."You have successfully Logged IN. FINALLY!!! It worked!!!".'</h1>';		
		} else {
			 echo '<br><h1>'."No access! Please try again buddy!".'</h1>';		
		}		
	}
	
	if ($postthang->getCredauthSelect()=='MySQL'){
		if($loggingUser->authenticate()){
			echo '<br><h1>'."You have successfully Logged IN. FINALLY!!! It worked!!!".'</h1>';
		} else {
			 echo '<br><h1>'."No access! Please try again buddy!".'</h1>';		
		}
	}else{
		AuthUser($loggingUser, $postthang);
	}