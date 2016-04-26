<?php

namespace App\Models;

use T4\Orm\Model;

class SendMail
    extends Model
{
    protected static $schema = [
        'table' => 'send_mail',
        'columns' => [
            '__user_id' => ['type' => 'link'],
            'nameTemplate' => ['type' => 'string'],
            'paramTitle' => ['type' => 'string'],
            'paramContent' => ['type' => 'string'],
        ],
        'relations' => [
            'user' => ['type' => self::BELONGS_TO, 'model' => User:: class]
        ]
    ];


}