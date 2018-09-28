<?php
require_once("Db.php");

$db = Db::getInstance();
$req = $db->query("SELECT * FROM test");
$response = $req->fetchAll();

if (count($response) <= 0) {
    $db->query("INSERT INTO test VALUES ('test')");
}

print_r($response);

phpinfo();
?>
