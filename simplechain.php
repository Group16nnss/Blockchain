<?php

set_time_limit(0);
require_once('blockchain.php');
$rand=rand(0000,9999);
$date=$a."-".$c." - ".$f;
/*
Set up a simple chain and mine two blocks.
*/

$testCoin = new BlockChain();


		$testCoin->push(new Block("$rand", strtotime("now"),"$data"));


json_encode($testCoin, JSON_PRETTY_PRINT);

//echo json_encode;