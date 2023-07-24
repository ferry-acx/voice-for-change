<?php
/* Smarty version 4.3.1, created on 2023-07-15 08:52:38
  from '/home/vfcacxhub/public_html/content/themes/default/templates/emails/forget_password_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b25e569503c7_91749271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '565c3a62287490232fd03fa828b30b75dc514af8' => 
    array (
      0 => '/home/vfcacxhub/public_html/content/themes/default/templates/emails/forget_password_email.txt',
      1 => 1689358236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b25e569503c7_91749271 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>


<?php echo __("To complete the reset password process, please copy this token");?>
:

<?php echo __("Token");?>
: <?php echo $_smarty_tpl->tpl_vars['reset_key']->value;?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
