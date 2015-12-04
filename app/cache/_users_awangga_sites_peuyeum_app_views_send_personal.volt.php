<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> SMS Personal!<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Number(s) : </label>
    <div class="col-sm-10">
		<?php echo $this->tag->textField(array('rcpt', 'class' => 'form-control', 'placeholder' => '081100000,08880909121,089900000', 'value' => $number)); ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Message:</label>
    <div class="col-sm-10"> 
		<?php echo $this->tag->textArea(array('msg', 'class' => 'form-control', 'rows' => '5')); ?>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
		<?php echo $this->tag->submitButton(array('Send', 'class' => 'btn btn-default')); ?>
    </div>
  </div>
</form>

<p>
<?php echo $this->tag->linkTo(array('', 'Back')); ?>
</p>