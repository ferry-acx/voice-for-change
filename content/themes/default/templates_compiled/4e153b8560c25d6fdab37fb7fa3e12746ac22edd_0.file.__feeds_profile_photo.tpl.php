<?php
/* Smarty version 4.3.1, created on 2023-07-15 08:39:45
  from '/home/vfcacxhub/public_html/content/themes/default/templates/__feeds_profile_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b25b51c563a0_55927932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e153b8560c25d6fdab37fb7fa3e12746ac22edd' => 
    array (
      0 => '/home/vfcacxhub/public_html/content/themes/default/templates/__feeds_profile_photo.tpl',
      1 => 1689358232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b25b51c563a0_55927932 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-4 mb10">
  <div class="pg_photo pointer js_profile-picture-change" data-id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 data-type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 data-image="<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
);">
  </div>
</div><?php }
}
