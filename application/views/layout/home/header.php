<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if(!empty($meta)) :?>
        <?php foreach($meta as $met) : ?>
            <?php foreach ($met as $mt) : ?>
                <meta content="<?= $mt['content']; ?>" name="<?= $mt['keyword']; ?>"/>        
            <?php endforeach ?>
        <?php endforeach ?>
    <?php endif ?>    
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php if(!empty($css)) :?>
        <?php foreach($css as $cs) : ?>
            <link rel="stylesheet" href="<?= base_url('/assets/css/' .$cs.'.css'); ?>">
        <?php endforeach ?>
    <?php endif ?>    

    <title><?= $title; ?></title>
</head>
<body>