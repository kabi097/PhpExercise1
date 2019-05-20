<?php
class Menu {

    private $db;

    function __construct($mysql_host, $port, $username, $password, $database) {
        $this->db = new PDO('mysql:charset=utf8mb4;host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
    }

    function getMenu($parent_id = false) {
        $result = [];
        if ($parent_id) {
            $query = "SELECT * FROM menu WHERE parent_id = $parent_id";
        } else {
            $query = "SELECT * FROM menu WHERE parent_id IS NULL";
        }
        $menu = $this->db->query($query);
        
        foreach ($menu as $row) {
            array_push($result, ['name' => $row['name'], 'submenu' => $this->getMenu($row['id'])]);
        }
        return $result;
    }
}