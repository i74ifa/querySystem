<?php


class Blueprint
{
    /**
     * - Data type: `INT`
     * - From : `-2,147,483,648`
     * - TO  :   `2,147,483,648`
     */
    public function Integer($name, $Auto_increment = null, $Unique = null, $primary_key = null)
    {
        $sql = "`$name` INT" . ($Auto_increment != null ? ' AUTO_INCREMENT' : null) . ($Unique != null ? ' UNIQUE' : null)
            . ($primary_key != null ? ' PRIMARY KEY' : NULL);
        return $sql;
    }
    /**
     * - Data type: `TEXT`
     * - TO  :  non-Unicode data with a maximum`2,147,483,647`
     */
    public function String($name, $Unique = null)
    {
        $sql = "`$name` TEXT" .  ($Unique != null ? ' UNIQUE' : null);
        return $sql;
    }
    /**
     * - Data type: `Varchar`
     * Maximum length of `2E + 31` characters, Variable-length non-Unicode data (SQL Server 2005 only).
     */
    public function Varchar($name, $count, $Unique = null)
    {
        $sql = "`$name` VARCHAR($count)" . ($Unique != null ? ' UNIQUE' : null);
        return $sql;
    }
    /**
     * Create Two Columns [created_at & updated_at]
     * - if You need Custom name Columns Enter Value to Like: 
     *    -- $names = 'nameOne, nameTwo'
     */
    public function Timestamps($names = null)
    {
        $One = "created_at";
        $Two = "updated_at";
        if ($names) {
            $names = explode(',', $names);
            $One = $names[0];
            $Two = $names[1];
        }
        $sql = "$One TIMESTAMP, $Two TIMESTAMP";
        return $sql;
    }
    /**
     * if you want Drop Table 
     *  - 
     */
    public function DropTables($name)
    {
        $sql = 'DROP TABLE ' . $name;
        return $sql;
    }
    /**
     * - Data type: `INT`
     * - From : `-2,147,483,648`
     * - TO  :   `2,147,483,648`
     */
    public function BigInteger($name, $Unique = null, $primary_key = null)
    {
        $sql = "";
    }
}
