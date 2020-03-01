<?php

use yii\db\Migration;
use yii\helpers\ArrayHelper;
use phpload\core\helpers\MigrationHelper;

/**
 * Class m200126_105539_createOchAccountsTbl
 */
class m200126_105539_createOchAccountsTbl extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'och_accounts',
            ArrayHelper::merge(
                MigrationHelper::getSystemCols(), [
                    'username' => $this->string(250),
                    'password' => $this->string(250),
                    'authCookies' => $this->text(),
                    'authCookiesValidTill' => $this->dateTime()
                ]
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('och_accounts');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200126_105539_createOchAccountsTbl cannot be reverted.\n";

        return false;
    }
    */
}
