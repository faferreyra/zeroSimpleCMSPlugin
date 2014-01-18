<?php $is_secure = $sf_simple_cms_page->getIsSecure() ?>
<?php $publisher_credential = sfConfig::get('app_sfSimpleCMS_publisher_credential', false); ?>
<?php if($publisher_credential && !$sf_context->getUser()->hasCredential($publisher_credential)): ?>
  <?php if ($is_secure): ?>
    <?php echo image_tag('/sf/sf_admin/images/tick.png') ?>
  <?php endif; ?>  
<?php else: ?>
  <?php echo link_to(image_tag($is_secure ? '/sf/sf_admin/images/save.png' : '/sf/sf_admin/images/cancel.png'), 'zeroSimpleCMSAdmin/toggleSecure?id='.$sf_simple_cms_page->getId()) ?>
<?php endif; ?>
