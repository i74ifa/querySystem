<pre>
<?php

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
            'posts' => [
                $table->Integer('id', TRUE, null, true),
                $table->String('title'),
                $table->String('body'),
                $table->Timestamps()
            ],
            'tb' => [
                $table->Integer('id', TRUE, null, true),
                $table->String('title'),
                $table->String('body'),
                $table->Timestamps()
            ]
        ];
    }
}
