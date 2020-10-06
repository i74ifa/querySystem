<?php


require_once getcwd() . '/config/app.php';
require config['path']['queryFunction'];

require_once config['path']['BluePrint'];
require config['path']['Connect'];
class Migrate
{
    // first enter Name table like $table->create('name_table')
    // if you want add the table copy the function users and editing
    public function tables()
    {
        $table = new Blueprint;
        return [
            0 => [
                $table->Integer('id', TRUE, null, true),
                $table->String('title'),
                $table->String('body'),
                $table->Timestamps()
            ],
            1 => [
                $table->Integer('id', TRUE, null, true),
                $table->String('title'),
                $table->String('body'),
                $table->Timestamps()
            ]
        ];
    }
}
$db = new Migrate;

Query('Us', $db->tables()[0]);
Query('you', $db->tables()[1]);
Query('Me', $db->tables()[1]);
