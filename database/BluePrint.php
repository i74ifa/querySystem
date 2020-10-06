<?php


class Blueprint
{
    public function Integer($name, $Auto_increment = null, $Unique = null, $primary_key = null)
    {
        $sql = "`$name` INT" . ($Auto_increment != null ? ' AUTO_INCREMENT' : null) . ($Unique != null ? ' UNIQUE' : null)
            . ($primary_key != null ? ' PRIMARY KEY' : NULL);
        return $sql;
    }

    public function String($name, $Unique = null)
    {
        $sql = "`$name` TEXT" .  ($Unique != null ? ' UNIQUE' : null);
        return $sql;
    }
    public function Varchar($name, $count, $Unique = null)
    {
        $sql = "`$name` VARCHAR($count)" . ($Unique != null ? ' UNIQUE' : null);
        return $sql;
    }
    public function Timestamps()
    {
        $sql = "created_at TIMESTAMP, updated_at TIMESTAMP";
        return $sql;
    }
    public function DropTables($name)
    {
        $sql = 'DROP TABLE ' . $name;
        return $sql;
    }
}