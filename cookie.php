<?php

    $cookie_name= 'user';
    $cookie_value= 'jono';

    setcookie($cookie_name, $cookie_value);


    $cookie_value= 'mail';

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE($cookie_name);

    setcookie("user","",time() -3600)

        echo '<br>';

        var_dump($_COOKIE);


?>