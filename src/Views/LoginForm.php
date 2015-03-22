<?php

namespace Views;


class LoginForm extends View
{
    public function __construct()
    {
        $this->content = <<<LOGIN_FORM
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Example Login Form</title>
    </head>
    <body>
        <div align="center">
            <form method="POST" action="/auth">
                Username:
                <input type="text" name="username" size="15" /><br />
                Password: <input type="password" name="password" size="15" /><br />
                
                Authorization Choice: 
                <div class="radio">
                    <label>
                        <input type="radio" name="authSelect" value="InMemory" checked> In Memory
                        <input type="radio" name="authSelect" value="FileBased"> File Based
                        <input type="radio" name="authSelect" value="MySQL"> MySQL Based
                    </label>
                </div>
                <p><input type="submit" value="Login" /></p><br />
            </form>
        </div>
    </body>
</html>
LOGIN_FORM;
    }
}
