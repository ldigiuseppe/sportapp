<?php

namespace SportApp\DataObjects;

use SilverStripe\ORM\DataObject;

class Sportman extends DataObject
{

    private static $table_name = 'Sportman';

    private static $db = [
        'FirstName' => 'Varchar(255)',
        'LastName' => 'Varchar(255)',
    ];

    private static $belongs_many_many = [
        "Teams" => Team::class,
    ];
}
