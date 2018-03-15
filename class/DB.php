<?php

class DB
{
    protected $dbh;

    public function __construct()
    {
        $config = new Config(__DIR__ . '/../config/db.cfg');

        $this->dbh = new PDO($config->getParamValue('dsn'),
            $config->getParamValue('username'),
            $config->getParamValue('pass'));
    }

    public function execute(string $sql, array $data) :bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function query(string $sql, array $data, string $className = null)
    {
        $sth = $this->dbh->prepare($sql);
        if($sth->execute($data)){
            $n = [];
            if($className != null)
            {
                foreach($sth->fetchAll() as $row)
                {
                   $n[] = new $className($row['id'], $row['created'], $row['headline'],
                       $row['text'], $row['author']);
                }
            } else {
                $n = $sth->fetchAll();
            }

            return $n;

        } else {
            return false;
        }
    }
}