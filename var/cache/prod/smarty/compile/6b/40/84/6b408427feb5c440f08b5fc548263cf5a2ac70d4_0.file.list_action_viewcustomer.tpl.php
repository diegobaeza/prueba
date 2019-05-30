<?php
/* Smarty version 3.1.33, created on 2019-04-23 18:28:51
  from '/Applications/MAMP/htdocs/prestashop_1.7.5.1/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbf83936c5d12_27645137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b408427feb5c440f08b5fc548263cf5a2ac70d4' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.5.1/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1556048591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf83936c5d12_27645137 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }
}
