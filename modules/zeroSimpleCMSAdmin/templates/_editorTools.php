<?php 

	use_helper('I18N');

	$slug = $page->getSlug();
	$is_publisher = true;
	$culture = 'en';

?>

<div id="editor-box">
  <h1>
    <?php echo __('Edition Tools') ?>
    <?php // echo jq_link_to_function('&nbsp;&nbsp;&nbsp;&nbsp;', "toggle_pane('tools');jQuery('#toolbar_minifier').toggleClass('minimized')", 'id=toolbar_minifier title='.__('Toggle toolbar')); ?>
  </h1>

  <div id="cms_toolbox_mode">
    <div>
      Mode:
      <?php if ($sf_params->get('preview')): ?>
        <?php $query_string = 'edit=true&preview=true' ?>
        <span class="preview selected"><?php echo __('preview') ?></span>
        <span class="edit"><?php echo link_to( __('edit'), sfSimpleCMSTools::urlForPage($slug, 'edit=true')) ?></span>
      <?php else: ?>
        <?php $query_string = 'edit=true' ?>
        <span class="preview"><?php echo link_to(__('preview'), sfSimpleCMSTools::urlForPage($slug, 'edit=true&preview=true')) ?></span>
        <span class="edit selected"><?php echo __('edit') ?></span>
      <?php endif; ?>
      <span class="list"><?php echo link_to(__('list'), 'zeroSimpleCMSAdmin/list') ?></span>
    </div>
    <?php if ($is_publisher): ?>
    <div>
      Status:
      <?php if ($page->getIsPublished()): ?>
        <span class="published selected"><?php echo __('published') ?></span>
        <span class="unpublished">
			<?php echo link_to(__('unpublish'), '@zeroSimpleCMSAdmin_remote_publish?slug=' . $slug, array('class' => 'remote-action')); ?>
		</span>
      <?php else: ?>
        <span class="published">
			<?php echo link_to(__('publish'), '@zeroSimpleCMSAdmin_remote_publish?slug=' . $slug, array('class' => 'remote-action')); ?>
		</span>
        <span class="unpublished selected"><?php echo __('unpublished') ?></span>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>

  <div id="tools" class="open">

    <?php if (sfConfig::get('app_sfSimpleCMS_use_l10n', false)): ?>
    <h2><?php echo link_to_function(__('Localizations'), "toggle_pane('cms_page_localizations')") ?> </h2>

    <ul id="cms_page_localizations" style="display:none;">
      <?php foreach (sfConfig::get('app_sfSimpleCMS_localizations') as $localization): ?>
       <?php echo content_tag(
         'li',
         link_to_unless(
           $localization == $culture,
           format_language(substr($localization, 0, 2)),
           sfSimpleCMSTools::urlForPage($slug, $query_string, $localization)
          ),
          $page->hasLocalization($localization) ? 'class=localization_exists' : ''
        ) ?>
      <?php endforeach; ?>
    </ul>
	<?php endif; ?>

    <h2 class="toggle"><?php echo __('Page properties'); ?></h2>

	<div id="cms-tools-update-page" style="display:none;">

		<?php if ($sf_user->hasFlash('page.updated')): ?>
		<div class="notice" style="margin: 7px;"><?php echo __($sf_user->getFlash('page.updated')); ?></div>
		<?php endif; ?>
			
		<?php echo form_tag('@zeroSimpleCMSAdmin_remote_update', array("id" => "cms-update-page-form", 'class' => 'cms-update-remote-form')); ?>

		<?php echo $pageForm; ?>

		<br clear="all" />
		<div style="float:right;">
		<input type="submit" value="<?php echo __("Update Page"); ?>" />
		</div>
		<br clear="all" />

		<?php echo '</form>'; ?>
	</div>

    <h2 class="toggle"><?php echo __('Create new page'); ?></h2>
	<div id="cms-tools-create-page" style="display:none;">

		<?php if ($sf_user->hasFlash('page.created')): ?>
		<div class="notice" style="margin: 7px;"><?php echo __($sf_user->getFlash('page.created')); ?></div>
		<?php endif; ?>

		<?php echo form_tag('@zeroSimpleCMSAdmin_remote_create', array('id' => 'cms-create-page-form', 'class' => 'cms-update-remote-form')); ?>
		<?php echo $createForm; ?>
		<br clear="all" />
		<div style="float:right;">
		<input type="submit" value="<?php echo __("Create Page"); ?>" />
		</div>
		<br clear="all" />
		<input type="hidden" name="page_id" value="<?php echo $page->getId(); ?>" />
		<?php echo '</form>'; ?>
		
	</div>

    <h2 class="toggle"><?php echo __('Page list'); ?></h2>
	<div id="cms-tools-change-page" style="display:none;">

		<ul>
		<?php foreach($pagesTree as $pageLeaf ): ?>
			<li>
				<?php if($page->getSlug() == $pageLeaf->getSlug()): ?>
				<div class="current"><?php echo $pageLeaf->getSlugWithLevel(); ?></div>
				<?php else: ?>
				<?php echo link_to( $pageLeaf->getSlugWithLevel(), "zeroSimpleCMSAdmin/editPage?id=" . $pageLeaf->getId()); ?>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>

  </div>
</div>

<?php use_javascript('/zeroSimpleCMSPlugin/js/cookies_handler.js') ?>
<?php use_javascript('/zeroSimpleCMSPlugin/js/editorTools.js') ?>
<?php // jq_add_plugins_by_name(array('ui', 'autocomplete')) ?>
<?php // echo draggable_element('editor_box', array('revert' => 'save_toolbar_state')) ?>

<?php if(function_exists('init_media_library')) echo init_media_library(true); ?>