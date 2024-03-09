<h1>Register Smartphone</h1>

<?= $this->Form->create(null, ['url' => ['action' => 'add'], 'type' => 'json']) ?>
<?= $this->Form->control('manufacturer_id', ['label' => 'Manufacturer', 'options' => $manufacturers]) ?>
<?= $this->Form->control('name', ['label' => 'Model']) ?>
<?= $this->Form->control('data_memory', ['label' => 'Data Memory']) ?>
<?= $this->Form->control('year_of_manufacture', ['label' => 'Year of Manufacture']) ?>
<?= $this->Form->control('os_version', ['label' => 'OS Version']) ?>
<?= $this->Form->control('body_color', ['label' => 'Body Color']) ?>
<?= $this->Form->control('price', ['label' => 'Price']) ?>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
