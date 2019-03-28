<?php
// this class's responsibility is to connect to the DB and return the results
class Connection {
    //method being passed in
    public static function make($config) {
        try {
            return new PDO(
                $config['connection'].';dbname=' .$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
