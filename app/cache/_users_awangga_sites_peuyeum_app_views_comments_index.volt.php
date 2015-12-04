<div class="page-header">
    <h1>Comments!</h1>
</div>

<div class="table-responsive">  
<table class="table">
	<thead>
	      <tr>
	        <th>id</th>
	        <th>Number</th>
	        <th>Message</th>
	        <th>Date Time</th>
	      </tr>
	    </thead>
		<tbody>

			<?php foreach ($response as $outbox) { ?>
			<?php $out = json_decode($outbox); ?>
			<?php if ((!(empty($out)))) { ?>
		      <tr>
		        <td><?php 
				$acc = $out->_id;
				print_r($acc->{'$oid'}); ?>
			</td>
		        <td><?php echo $this->tag->linkTo(array('/send/personal/' . $out->from, $out->from)); ?></td>
		        <td><?php echo $out->msg; ?></td>
		        <td><?php 
				$acc = $out->timestamp;
				$date = date('M j', $acc->{'$date'});
				print_r($date); ?></td>
		      </tr>
			<?php } ?>
			<?php } ?>
			
		</tbody>
</table>
</div>

