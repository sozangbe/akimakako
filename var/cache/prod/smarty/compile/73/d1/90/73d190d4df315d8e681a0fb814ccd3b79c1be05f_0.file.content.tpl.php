<?php
/* Smarty version 4.3.1, created on 2024-07-15 09:42:26
  from 'C:\wamp64\www\prestashop\admin994qthmw5jghnbp6b0f\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6694ef025929f9_76232975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73d190d4df315d8e681a0fb814ccd3b79c1be05f' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin994qthmw5jghnbp6b0f\\themes\\default\\template\\content.tpl',
      1 => 1720436339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694ef025929f9_76232975 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
