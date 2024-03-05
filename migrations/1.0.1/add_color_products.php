<?php

use Phalcon\Db\Column;
use Phalcon\Db\Exception;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Migrations\Mvc\Model\Migration;

/**
 * Class ProductsMigration_101
 */
class AddColorProductsMigration_101 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     * @throws Exception
     */
    public function morph(): void
    {
       
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up(): void
    {
        $column = new Column('color', [
            'type'    => Column::TYPE_VARCHAR,
            'notNull' => true,
            'size'    => 70,
            'after'   => 'active'
        ]);

        $this->getConnection()->addColumn('products', '', $column);
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down(): void
    {
        $this->getConnection()->dropColumn('products', '', 'color');
    }
}
