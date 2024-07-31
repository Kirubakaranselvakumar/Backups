<?php

$email = null;
var_dump($email);

$emails = 'webmaster@phptutorial.net';
unset($emails);

var_dump($emails);

$email1 = null;
$first_name = Null;
$last_name = NULL;
var_dump($email1);
var_dump($first_name);
var_dump($last_name);

$home = 'phptutorial.net';
var_dump(is_null($home));

$home1 = NULL;
var_dump(is_null($home1));

$email = null;
$result = ($email === null);
var_dump($result);

$email = "null";
$result = ($email === null);
var_dump($result);