<!doctype html>
<html lang="<?= $this->theme->lang;?>" class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= $title;?></title>
<link href="<?= $this->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/js/bootstrap.bundle.min.js"></script>
<?= $this->theme->head;?>
<?php if($backgroundImage):?>
<style type="text/css">
    body
    {
        background-image: "<?= $backgroundImage;?>";
        background-repeat: repeat;
    }
</style>
<?php endif;?>
</head>
<body class="d-flex flex-column h-100">
<?= $this->theme->beginBody;?>
<?= $content;?>
<?= $this->theme->endBody;?>
</body>
</html>