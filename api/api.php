<?php
require dirname(__FILE__).'/config.php';
require dirname(__FILE__).'/func.php';
require dirname(__FILE__).'/user.php';
require dirname(__FILE__).'/Shop.php';
require dirname(__FILE__).'/Redeem.php';
require dirname(__FILE__).'/rcon.php';
$api = (object) array(
  "sql" => new PDO("mysql:host=".$_config['db_host']."; dbname=".$_config['db_database'].";", $_config['db_user'], $_config['db_password']),
  "user" =>  new User,
    "rcon" => new Rcon($_config['mc_host'],$_config['mc_port'],$_config['mc_password'],$_config['mc_timeout']),
    "shop" => new Shop(),
    "redeem" => new Redeem(),
);
