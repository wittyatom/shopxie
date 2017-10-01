<?php

use yii\db\Migration;

/**
 * Handles adding latitude to table `city`.
 */
class m170626_095019_add_latitude_column_to_city_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('city', 'latitude', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('city', 'latitude');
    }
}
