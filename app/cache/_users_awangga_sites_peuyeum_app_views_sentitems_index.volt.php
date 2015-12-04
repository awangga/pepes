<div class="page-header">
    <h1>Sent Items!</h1>
</div>

<p>List of successfull sms</p>
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
		        <td><?php echo $err->timestamp; ?></td>
		      </tr>
			<?php } ?>
			<?php } ?>
		</tbody>
</table>
</div>
