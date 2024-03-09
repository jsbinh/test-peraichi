<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\BadRequestException;
use Cake\Http\Response;
use Cake\ORM\TableRegistry;

class SmartphonesController extends AppController
{
    /**
     *
     */
    public function add()
    {
        $this->request->allowMethod(['get', 'post']);

        // Load manufacturers data
        $manufacturersTable = $this->getTableLocator()->get('Manufacturers');
        $manufacturers = $manufacturersTable->find('list', ['keyField' => 'id', 'valueField' => 'name']);


        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // Validation (you may add more robust validation as needed)
            if (empty($data['name']) || empty($data['price'])) {
                $this->Flash->error('Incomplete data. Please provide name, and price.');
            } else {
                $smartphonesTable = $this->getTableLocator()->get('Smartphones');
                $smartphone = $smartphonesTable->newEntity($data);

                if ($smartphonesTable->save($smartphone)) {
                    $this->Flash->success('Smartphone created successfully.');
                } else {
                    $this->Flash->error('Error saving smartphone.');
                }
            }
        }

        $this->set('manufacturers', $manufacturers);
        $this->render('add');
    }
}
