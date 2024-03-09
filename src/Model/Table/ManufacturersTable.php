<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ManufacturersTable extends Table
{
    /**
     * Initialize
     * @param array $config
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('manufacturers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

}
