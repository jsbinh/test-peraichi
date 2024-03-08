<h1>Check Palindrome</h1>

<?= $this->Form->create(null, ['url' => ['controller' => 'Palindrome', 'action' => 'checkPalindrome']]) ?>
    <?= $this->Form->control('input_string', ['label' => 'Input string']) ?>
    <?= $this->Form->button('Check') ?>
<?= $this->Form->end() ?>


<?php if (isset($input_string) && isset($result)): ?>
    <p>Input String: <?= h($input_string) ?></p>
    <?php if ($result): ?>
        <p>This is a palindrome string.</p>
    <?php else: ?>
        <p>This is not a palindrome string.</p>
    <?php endif; ?>
<?php endif; ?>
