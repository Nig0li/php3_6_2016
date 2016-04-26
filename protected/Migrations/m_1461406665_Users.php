<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1461406665_Users
    extends Migration
{

    public function up()
    {
        $this->createTable('users', [
            'firstName' => ['type' => 'string'],
            'lastName' => ['type' => 'string'],
            'email' => ['type' => 'string'],
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }
    
}