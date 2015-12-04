<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> SMS Multi Group<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<?php echo $this->tag->form(array('', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post')); ?>
    <div class="form-group">
	    <label class="control-label col-sm-2" for="email">Group : </label>
	    <div class="col-sm-10">
			<select id="group" name="group[]" class="form-control" multiple="multiple">
					<?php foreach ($kel as $grup) { ?>
					<option value="<?php echo $grup['_id']; ?>"><?php echo $grup['_id']; ?></option>
					<?php } ?>
			</select>
		
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
    
<?php echo $this->tag->endform(); ?>
<!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#group').multiselect({
			includeSelectAllOption: true,
		    allSelectedText: 'All Selected...'
		});
    });
</script>


<p>
<?php echo $this->tag->linkTo(array('', 'Back')); ?>
</p>