<?php
/* Smarty version 3.1.33, created on 2019-04-23 18:13:21
  from '/Applications/MAMP/htdocs/prestashop_1.7.5.1/modules/ps_mbo/views/templates/admin/theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbf7ff1eaf799_83391530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9014d27c5b11ff6975fbfc84f6d0918939d408f7' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.5.1/modules/ps_mbo/views/templates/admin/theme.tpl',
      1 => 1556049209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf7ff1eaf799_83391530 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
