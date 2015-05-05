<?php if ($edition): ?>
    <div class="editable-slot editable-html-slot" data-page-slug="<?php echo $page->getSlug(); ?>"
         data-page-slot="<?php echo $slot->getName(); ?>">
        <div class="editor"><?php echo $slot->getRawValue()->getValue(); ?></div>
        <div class="icons">
            <i class="hidden wait fa fa-spin fa-spinner"></i>
            <i class="hidden ok fa fa-check-circle"></i>
        </div>
    </div>
<?php else: ?>
    <?php echo $slot->getRawValue()->getValue(); ?>
<?php endif; ?>

<?php if ($edition): ?>
    <?php use_javascript('/js/ckeditor/ckeditor.js'); ?>
    <?php use_javascript('/js/ckeditor/lang/es.js'); ?>
    <?php use_javascript('/js/ckeditor/adapters/jquery.js'); ?>
    <?php use_javascript('/zeroSimpleCmsPlugin/js/editors.js'); ?>
    <?php use_stylesheet('font-awesome.css'); ?>
    <script type="text/javascript">
        window.cms = window.cms || {};
        window.cms.remoteSaveUrl = '<?php echo url_for('@zeroSimpleCMS_remote_save', true); ?>';
        window.cms.filebrowserUrl = '<?php echo url_for('@mediaManagerAdmin_browse_ckeditor'); ?>';
    </script>
<?php endif; ?>