<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SmartphonesTable extends Table
{
    /**
     * Initialize
     * @param array $config
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('smartphones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * ValidationDefault function
     * @param Validator $validator
     * @return Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('name', 'Model is required')
            ->numeric('price', 'Price must be a valid number');

        return $validator;
    }
}
