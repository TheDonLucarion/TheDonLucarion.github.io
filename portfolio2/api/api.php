<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->get('/search/:string',  'getCountries');
$app->run();

function getCountries($search) {
        getItems("SELECT * FROM Country WHERE Name LIKE'".$search."%'");//change the SQL statement for different search criteria
}

function getItems($sql){
    try {
        $db = getConnection();
        $stmt = $db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($results);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

function getConnection() {    
    $dbhost="localhost";
    $dbuser="karshend";//use your username
    $dbpass="Karsten5996";//enter your db password
    $dbname="karshend_db";//use your db name
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

?>

