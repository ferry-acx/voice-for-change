<?php
/* Smarty version 4.3.1, created on 2023-07-15 06:43:16
  from '/home/vfcacxhub/public_html/content/themes/default/templates/settings.verification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b24004398681_22080845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1f5c01f3475213354ae25d75c8dd5639d9f5edc' => 
    array (
      0 => '/home/vfcacxhub/public_html/content/themes/default/templates/settings.verification.tpl',
      1 => 1689358234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
  ),
),false)) {
function content_64b24004398681_22080845 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verification",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
echo __("Verification");?>

</div>
<?php if ($_smarty_tpl->tpl_vars['case']->value == "verified") {?>
  <div class="card-body">
    <div class="text-center">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verification",'class'=>"main-icon mb10",'width'=>"60px",'height'=>"60px"), 0, true);
?>
      <h4><?php echo __("Congratulations");?>
</h4>
      <p class="mt20"><?php echo __("This account is verified");?>
</p>
    </div>
  </div>
<?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "request") {?>
  <form class="js_ajax-forms" data-url="users/verify.php?node=user">
    <div class="card-body">
      <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_docs_required']) {?>
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Verification Documents");?>

          </label>
          <div class="col-md-9">
            <div class="row">
              <div class="col-sm-6">
                <div class="section-title mb20">
                  <?php echo __("Your Photo");?>

                </div>
                <div class="x-image full">
                  <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>

                  </button>
                  <div class="x-image-loader">
                    <div class="progress x-progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                  <input type="hidden" class="js_x-image-input" name="photo" value="">
                </div>

              </div>
              <div class="col-sm-6">
                <div class="section-title mb20">
                  <?php echo __("Passport or National ID");?>

                </div>
                <div class="x-image full">
                  <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>

                  </button>
                  <div class="x-image-loader">
                    <div class="progress x-progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                  <input type="hidden" class="js_x-image-input" name="passport" value="">
                </div>
              </div>
            </div>
            <div class="form-text">
              <?php echo __("Please attach your photo and your Passport or National ID");?>

            </div>
          </div>
        </div>
      <?php }?>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo __("Additional Information");?>

        </label>
        <div class="col-md-9">
          <textarea class="form-control" name="message"></textarea>
          <div class="form-text">
            <?php echo __("Please share why your account should be verified");?>

          </div>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-primary">
        <?php echo __("Send");?>

      </button>
    </div>
  </form>
<?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "pending") {?>
  <div class="card-body">
    <div class="text-center">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pending",'class'=>"main-icon mb10",'width'=>"60px",'height'=>"60px"), 0, true);
?>
      <h4><?php echo __("Pending");?>
</h4>
      <p class="mt20"><?php echo __("Your verification request is still awaiting admin approval");?>
</p>
    </div>
  </div>
<?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "declined") {?>
  <div class="card-body">
    <div class="text-center">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"declined",'class'=>"main-icon mb10",'width'=>"60px",'height'=>"60px"), 0, true);
?>
      <h4><?php echo __("Sorry");?>
</h4>
      <p class="mt20"><?php echo __("Your verification request has been declined by the admin");?>
</p>
    </div>
  </div>
<?php }
}
}
