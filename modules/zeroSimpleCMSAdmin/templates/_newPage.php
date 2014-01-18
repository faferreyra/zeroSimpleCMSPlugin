<?php use_helper('jQuery', 'I18N'); ?>

<div id="create-new-page-container" style="width: 400px;">

	<?php if($form->hasErrors()): ?>
	<div class="error">
	<?php echo __('The form has some errors you need to fix.'); ?>
	</div>
	<?php endif; ?>

	<?php
		$url = url_for('@default?module=zeroSimpleCMSAdmin&action=createNewPage');
		echo $form->renderFormTag($url); ?>

	<table cellspacing="0" width="400">
		<tfoot>
			<tr>
				<td colspan="2">
				<?php echo jq_submit_to_remote('btnCreateNewPage', __('Create Page'), array('url' => $url, 'update' => 'create-new-page-container' )); ?>
				</td>
			</tr>
		</tfoot>
		<thead>
			<tr>
			<th colspan="2"><?php echo __('Create new Page'); ?></th>
			</tr>
		</thead>
		<tbody>

			<?php

				$fields = array_keys($form->getWidgetSchema()->getFields());

				foreach( $fields as $key ) :
					if($key[0] != '_') :
						echo $form[$key]->renderRow();			
					endif;
				endforeach;
				
			?>
		</tbody>
	</table>
	<?php echo $form->renderHiddenFields(); ?>
	<?php echo '</form>'; ?>

</div>