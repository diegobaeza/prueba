<?php
/* Smarty version 3.1.33, created on 2019-04-23 17:01:25
  from '/Applications/MAMP/htdocs/prestashop_1.7.5.1/admin011ymyzqt/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbf6f15d4bff7_58420163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40aee41b4aa7e52cf4661d6b7c7780adbf61c817' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.5.1/admin011ymyzqt/themes/default/template/content.tpl',
      1 => 1556048581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf6f15d4bff7_58420163 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
