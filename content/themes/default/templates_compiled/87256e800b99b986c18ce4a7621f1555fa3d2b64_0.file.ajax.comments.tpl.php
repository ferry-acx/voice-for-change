<?php
/* Smarty version 4.3.1, created on 2023-07-15 09:07:50
  from '/home/vfcacxhub/public_html/content/themes/default/templates/ajax.comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b261e6d4c1f6_53367013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87256e800b99b986c18ce4a7621f1555fa3d2b64' => 
    array (
      0 => '/home/vfcacxhub/public_html/content/themes/default/templates/ajax.comments.tpl',
      1 => 1689358232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.tpl' => 1,
  ),
),false)) {
function content_64b261e6d4c1f6_53367013 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
