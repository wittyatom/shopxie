<?php

use yii\db\Migration;

/**
 * Handles adding longitude to table `country`.
 */
class m170626_091152_add_longitude_column_to_country_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('country', 'longitude', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('country', 'longitude');
    }
}
