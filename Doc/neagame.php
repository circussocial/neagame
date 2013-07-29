<?php

$mArr['neagame'] = array(
            'db' => array(
                'class'            => 'CDbConnection',
                'connectionString' => "mysql:host=localhost;dbname=" . $db_prefix . "neagame",
                'emulatePrepare'   => true,
                'username'         => $user,
                'password'         => $pass,
                'charset'          => 'utf8',
            )
        );

?>