<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> SMS sent!<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<p>SMS Was sent.</p>

<em><?php echo $response; ?></em>
<p>
<?php echo $this->tag->linkTo(array('.', 'Back')); ?>
</p>