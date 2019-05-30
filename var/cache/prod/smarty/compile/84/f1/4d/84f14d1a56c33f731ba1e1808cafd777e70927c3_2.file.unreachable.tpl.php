<?php
/* Smarty version 3.1.33, created on 2019-04-23 17:00:44
  from '/Applications/MAMP/htdocs/prestashop_1.7.5.1/themes/classic/templates/checkout/_partials/steps/unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbf6eec0b36f7_25814331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84f14d1a56c33f731ba1e1808cafd777e70927c3' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.5.1/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1556048593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf6eec0b36f7_25814331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18245630645cbf6eec0ae5e1_76910382', 'step');
?>

<?php }
/* {block 'step'} */
class Block_18245630645cbf6eec0ae5e1_76910382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_18245630645cbf6eec0ae5e1_76910382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
