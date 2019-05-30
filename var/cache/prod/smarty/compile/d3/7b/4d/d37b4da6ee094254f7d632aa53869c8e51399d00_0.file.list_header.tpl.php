<?php
/* Smarty version 3.1.33, created on 2019-04-23 18:25:21
  from '/Applications/MAMP/htdocs/prestashop_1.7.5.1/admin011ymyzqt/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbf82c13514a8_12888533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37b4da6ee094254f7d632aa53869c8e51399d00' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.5.1/admin011ymyzqt/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1556048581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf82c13514a8_12888533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20432497735cbf82c134e551_18643571', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_20432497735cbf82c134e551_18643571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_20432497735cbf82c134e551_18643571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
