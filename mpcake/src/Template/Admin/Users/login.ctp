<style type="text/css">
    .users.form{
        display: inline-block;
    }
    legend{
        font-size: 17px;
    }
    .btn-primary{
        margin-top: 5px;
    }
</style>
<div class="col-md-3"></div>
<div class="users form">
<?= $this->Form->create(null, array('role' => 'form')) ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('email',['class' => 'form-control']) ?>
        <?= $this->Form->control('password',['class' => 'form-control']) ?>
    </fieldset>
<?= $this->Form->button(__('Login'),['class'=>"btn btn-primary"]); ?>
<?= $this->Form->end() ?>
</div>
<div class="col-md-3"></div>