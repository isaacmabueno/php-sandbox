<?php
class QueryBuilder {
    protected $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters) {
        $sql = sprintf(
            'insert into %s (%s) values ($s)',
            'one', 'two', 'three'
        );
        die(var_dump($sql));
        // insert into names (the_name) values (:name)
        // insert into names (the_name, the_email) values (:name, :email)

    }
}
