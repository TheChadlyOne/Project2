<?php
/**
 * File name: AuthController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;
use Common\Authentication\UserThatsFileLoaded;
use Common\Authentication\UserStoredInMemory;
use Common\Authentication\UserFromMySQL;

/**
 * Class AuthController
 */
class AuthController extends Controller
{
    
    public function action()
    {
        $postData = $this->request->getPost();


        if ($postData->authSelect =='FileBased') {
            $loggingUser = new UserThatsFileLoaded($postData);
        }
        else if ($postData->authSelect =='InMemory'){
            $loggingUser = new UserStoredInMemory($postData) ;
        }
        else if ($postData->authSelect =='MySQL'){
            $loggingUser = new UserFromMySQL($postData) ;
        }
        if ($loggingUser->authenticate()) {
             echo '<br><h1>'."You have successfully Logged IN. FINALLY!!! It worked!!!".'</h1>';       
        } else {
             echo '<br><h1>'."No access! Please try again buddy!".'</h1>';
        }



    }
}
