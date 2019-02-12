<?php
define('hostname', '51.68.139.41');
define('user', 'kiitfest');
define('password', 'hi9jkH27Gb1sEkR');
define('db_name', 'kiitfest_5');

class DB_Connection {

    private $connect;
    function __construct() {
        $this->connect = mysqli_connect(hostname, user, password, db_name)
        or die("Could not connect to db");

    }

    public function getConnection()
    {
        return $this->connect;
    }
}

?>
