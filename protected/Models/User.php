<?php

namespace App\Models;

use T4\Orm\Model;

class User
    extends Model
{
    protected static $schema = [
        'table' => 'users',
        'columns' => [
            'firstName' => ['type' => 'string'],
            'lastName' => ['type' => 'string'],
            'email' => ['type' => 'string'],
        ]
    ];

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}