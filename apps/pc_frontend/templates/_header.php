<h1><?php echo link_to($op_config['sns_name'], '@homepage') ?></h1>


<div id="globalNav">
<?php include_component('default', 'globalNav', array(sfContext::getInstance()->getUser()->getCulture())) ?>
</div><!-- globalNav -->

<div id="topBanner">
<?php if ($sf_user->getMember()): ?>
<?php echo op_banner('top_after') ?>
<?php else: ?>
<?php echo op_banner('top_before') ?>
<?php endif ?>
</div>
