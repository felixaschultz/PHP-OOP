<?php
    namespace Intastellar;
    require_once('IntastellarDB.class.php');
    require_once('IntastellarUser.class.php');
    require_once('IntastellarLogin.class.php');
    $user = new IntastellarUser();
    $user = $user->getUser(1);

    echo $user;