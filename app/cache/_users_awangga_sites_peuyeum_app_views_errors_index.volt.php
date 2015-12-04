<div class="page-header">
    <h1>Errors Log</h1>
</div>

<p>List of Failed to Send : </p>


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
			<?php foreach ($response as $error) { ?>
			<?php $err = json_decode($error); ?>
			<?php if ((!(empty($err)))) { ?>
		      <tr>
		        <td><?php 
				$acc = $err->_id;
				print_r($acc->{'$oid'}); ?>
			</td>
		        <td><?php echo $err->rcpt; ?></td>
		        <td><?php echo $err->msg; ?></td>
		        <td><?php 
				$acc = $err->timestamp;
				$date = date('M j', $acc->{'$date'});
				print_r($date); ?></td>
		      </tr>
		<?php } ?>
			<?php } ?>
		</tbody>
</table>
</div>