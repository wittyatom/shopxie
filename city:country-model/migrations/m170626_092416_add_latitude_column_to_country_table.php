<?php

use yii\db\Migration;

/**
 * Handles adding latitude to table `country`.
 */
class m170626_092416_add_latitude_column_to_country_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('country', 'latitude', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('country', 'latitude');
    }
}
