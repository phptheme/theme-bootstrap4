<?php $this->theme->beginLayout(['title' => $title]);?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

  <h5 class="my-0 mr-md-auto font-weight-normal"><?= $siteName;?></h5>

  <?= $mainMenu;?>
  
</div>

<div class="container">

<?= $this->theme->breadcrumbs($breadcrumbs);?>

<?= $actionMenu;?>

<h1 class="mb-3"><?= $this->title;?></h1>

<?php foreach($successMessages as $message):?>

    <?= $this->theme->message(['message' => $message, 'type' => 'success']);?>

<?php endforeach;?>

<?php foreach($errorMessages as $message):?>

    <?= $this->theme->message(['message' => $message, 'type' => 'error']);?>

<?php endforeach;?>

<?php foreach($infoMessages as $message):?>

    <?= $this->theme->message(['message' => $message, 'type' => 'info']);?>

<?php endforeach;?>

<?= $content;?>

</div>

<?php if($copyright):?>

<footer class="footer mt-auto py-3">
    <div class="container">
        <?= $footerMenu;?>
        <span class="text-muted"><?= $copyright;?></span>
    </div>
</footer>

<?php endif;?>

<?php $this->theme->endLayout();?>