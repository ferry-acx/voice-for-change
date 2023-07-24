<?php
/* Smarty version 4.3.1, created on 2023-07-15 07:35:14
  from '/home/vfcacxhub/public_html/content/themes/default/templates/__feeds_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b24c32989fe7_24920218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1f78c70ade2a95525a8de706c0a6ca0685128c5' => 
    array (
      0 => '/home/vfcacxhub/public_html/content/themes/default/templates/__feeds_message.tpl',
      1 => 1689358234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b24c32989fe7_24920218 (Smarty_Internal_Template $_smarty_tpl) {
?><li>
  <div class="conversation clearfix <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>right<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
      <div class="conversation-user">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['user_name'];?>
">
          <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['user_picture'];?>
" alt="">
        </a>
      </div>
    <?php }?>
    <div class="conversation-body">
      <!-- message text -->
      <div class="text <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>js_chat-color-me<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

        <?php if ($_smarty_tpl->tpl_vars['message']->value['image']) {?>
          <span class="text-link js_lightbox-nodata <?php if ($_smarty_tpl->tpl_vars['message']->value['message'] != '') {?>mt5<?php }?>" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['image'];?>
">
            <img alt="" class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['image'];?>
">
          </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['message']->value['voice_note']) {?>
          <audio class="js_audio" id="audio-<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
" controls preload="auto" style="width: 100%; min-width: 120px;">
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['voice_note'];?>
" type="audio/mpeg">
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['voice_note'];?>
" type="audio/mp3">
            <?php echo __("Your browser does not support HTML5 audio");?>

          </audio>
        <?php }?>
      </div>
      <!-- message text -->

      <!-- message time -->
      <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>

      </div>
      <!-- message time -->

      <!-- seen status -->
      <?php if ($_smarty_tpl->tpl_vars['last_seen_message_id']->value == $_smarty_tpl->tpl_vars['message']->value['message_id']) {?>
        <div class="seen">
          <?php echo __("Seen by");?>
 <?php echo $_smarty_tpl->tpl_vars['conversation']->value['seen_name_list'];?>

        </div>
      <?php }?>
      <!-- seen status -->
    </div>
  </div>
</li><?php }
}
