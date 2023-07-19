<?php
$ap = new \Lca\Test\Mytest\Application(['page'=>1]);
$a = $ap->sendMessage();
print_r($a);
