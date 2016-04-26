<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1461327306_SendMail
    extends Migration
{

    public function up()
    {
        $this->createTable('send_mail', [
            '__user_id' => ['type' => 'link'],
            'nameTemplate' => ['type' => 'string'],
            'paramTitle' => ['type' => 'string'],
            'paramContent' => ['type' => 'string'],
        ]);
    }

    public function down()
    {
        $this->dropTable('send_mail');
    }
    
}