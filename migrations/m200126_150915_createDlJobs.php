<?php

use yii\db\Migration;
use yii\helpers\ArrayHelper;
use phpload\core\helpers\MigrationHelper;

/**
 * Class m200126_150915_createDlJobs
 */
class m200126_150915_createDlJobs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'dl_jobs',
            ArrayHelper::merge(
                MigrationHelper::getSystemCols(), [
                    'procid' => $this->integer(11),
                    'source_url' => 'text',
                    'dest_file'  => 'text',
                    'size_bytes' => $this->integer(11)->notNull()->defaultValue(0),
                    'accountClass' => $this->text(),
                    'accountId' => $this->integer(11),
                    'decrypted_dlc' => $this->text(),
                ]
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('dl_jobs');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200126_150915_createDlJobs cannot be reverted.\n";

        return false;
    }
    */
}
