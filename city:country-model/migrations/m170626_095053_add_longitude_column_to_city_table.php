<?php

use yii\db\Migration;

/**
 * Handles adding longitude to table `city`.
 */
class m170626_095053_add_longitude_column_to_city_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('city', 'longitude', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('city', 'longitude');
    }
}
