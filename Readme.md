# Document

## Features

- SELECT DATA
- INSERT DATA
- File Config `define` - config/app.php
- how to make `Config` app and database
- functions `Query()`
- BluePrint Queries
  - INT
  - TEXT
  - VARCHAR
  - Timestamps [created_at & updated_at]

## How to Setup

- copy folders database & config to folders your `Project`

  - _database/_
    - _BluePrint.php_
    - _connect.php_
    - _Database.php_
    - _DB.php_
    - _migrate.php_
  - _config/_
    - _app.php_
    - _database.php_

- edit paths files in config/app.php [`paths`]

  - 'path' => [

    'queryFunction => 'where query.php',<br />
    'BluePrint => 'where Blueprint.php',<br />
    etc...

    ]

### if you use System file in URL

- require classes when you need

### if you use System .htaccess

- require all Classes in index.php

## `how to Use`

- You now var `$DB` is new DB

- SELECT DATA

      $result = $DB->table('nametable')->Select(['*'])->run();

- Insert Data

  - you have two method to insert INSERT() & INSERTCol()
  - `INSERT()`

    - this function to insert to all Columns

      - you don't need type name Column

        - like this

              ------------------------
              | id | name | username |

        - if you have this in Table type :

                $DB->table('users')->INSERT([1, 'anyName', 'username'])->run();

  - `INSERTCol()`
    - Use this Method if you don't need insert Columns NULL or id is AUTO_INCREMENT()

           $DB->table('users')->INSERTCol(['name', 'username'], ['value name', 'value username'])->run();
