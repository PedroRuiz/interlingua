<h1><?=$namelingua?></h1>
<?php if (!is_array($national['capite'])):?>
    <p><?=$capite?></p>
<?php else:?>
<?php foreach($national['capite'] as $capite):?>
    <p><?=$capite?></p>
<?php endforeach;?>
<?php endif;?>

<?php foreach($national['text'] as $text):?>
<h2><?=$text['title']?></h2>

<div class="row">
  <div class="col-md-3 col-md-push-3"><img class="img-responsive" src="<?=$text['image']?>"></div>
  <div class="col-md-6 col-md-pull-6"><p class="text-justify"><?=$text['paragrapho']?></p></div>
</div>

<?php endforeach;?>
<?php if(!is_array($national['final'])):?>
<p><strong><?=$national['final']?></strong></p>
<?php else:?>
<?php foreach($national['final'] as $final):?>
<p><strong><?=$final?></strong></p>
<?php endforeach;?>
<?php endif;?>