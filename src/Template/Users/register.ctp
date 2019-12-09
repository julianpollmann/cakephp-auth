<?php
/**
 * @var AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */

use App\View\AppView;

?>
<h1>Registration</h1>
<?= $this->Form->create($user) ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button(__('Registrieren')) ?>
<?= $this->Form->end() ?>
