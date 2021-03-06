<?php $this->theme->beginLayout($layout);?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

  <h5 class="my-0 mr-md-auto font-weight-normal"><?= $siteName;?></h5>

  <?= $mainMenu;?>
  
</div>

<div class="container">

<?php if($backgroundImage):?>
<style type="text/css">
    #site-title
    {
        padding: 20px;
        background-image: url(<?= $backgroundImage;?>);
        background-color: #6c757d;
        background-repeat: repeat;
        color: #ffffff;
        margin-bottom: 20px;
        border-radius: 10px;
    }
</style>
<?php endif;?>    

<?php if($siteTitle || $siteDescription):?>
<div class="text-center" id="site-title">
    <?php if($siteTitle):?><h2><?= $siteTitle;?></h2><?php endif;?>
    <?php if($siteDescription):?><p class="lead"><?= $siteDescription;?></p><?php endif;?>
</div>
<?php endif;?>

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

<footer class="footer mt-auto py-3">
    <div class="container">
        <?= $socialMenu;?>
        <?= $footerMenu;?>
        <?php if($copyright):?>
            <span class="text-muted"><?= $copyright;?></span>
        <?php endif;?>
    </div>
</footer>

<?php $this->theme->endLayout();?>