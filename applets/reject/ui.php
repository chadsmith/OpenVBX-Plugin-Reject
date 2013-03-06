<?php $reason = AppletInstance::getValue('reason', 'rejected'); ?>
<div class="vbx-applet">
	<div class="vbx-full-pane">
	  <h3>Reject the call</h3>
		<fieldset class="vbx-input-container">
				<select class="medium" name="reason">
					<option value="rejected"<?php echo $reason == 'rejected' ? ' selected="selected"' : ''; ?>>Not in service</option>
					<option value="busy"<?php echo $reason == 'busy' ? ' selected="selected"' : ''; ?>>Busy</option>
				</select>
		</fieldset>
	</div>
</div>