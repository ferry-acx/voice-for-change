<?php
/* Smarty version 4.3.1, created on 2023-07-15 04:48:08
  from '/home/vfcacxhub/public_html/content/themes/default/templates/_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b22508487533_31393062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e32daffcbed6485171026e1ba009777091a847c' => 
    array (
      0 => '/home/vfcacxhub/public_html/content/themes/default/templates/_no_data.tpl',
      1 => 1689358236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_64b22508487533_31393062 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no data -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"80px",'height'=>"80px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo __("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
