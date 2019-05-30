<?php
/* Smarty version 3.1.33, created on 2019-04-23 16:59:55
  from '/Applications/MAMP/htdocs/prestashop_1.7.5.1/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbf6ebbe74009_19311741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '897e6811b5250fcb477942a19e1d8cec4c77b24e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.5.1/themes/classic/templates/page.tpl',
      1 => 1556048593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf6ebbe74009_19311741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8259529935cbf6ebbe4e102_87935353', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_11874791965cbf6ebbe52a63_64001648 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_12726889125cbf6ebbe502c9_27551584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11874791965cbf6ebbe52a63_64001648', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16530265615cbf6ebbe5fb96_84450606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18983681245cbf6ebbe64511_39515296 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17108794355cbf6ebbe5cf26_13482379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16530265615cbf6ebbe5fb96_84450606', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18983681245cbf6ebbe64511_39515296', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4181061155cbf6ebbe6e6c9_44214342 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_255749495cbf6ebbe69a87_06398547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4181061155cbf6ebbe6e6c9_44214342', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_8259529935cbf6ebbe4e102_87935353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8259529935cbf6ebbe4e102_87935353',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_12726889125cbf6ebbe502c9_27551584',
  ),
  'page_title' => 
  array (
    0 => 'Block_11874791965cbf6ebbe52a63_64001648',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17108794355cbf6ebbe5cf26_13482379',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16530265615cbf6ebbe5fb96_84450606',
  ),
  'page_content' => 
  array (
    0 => 'Block_18983681245cbf6ebbe64511_39515296',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_255749495cbf6ebbe69a87_06398547',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4181061155cbf6ebbe6e6c9_44214342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12726889125cbf6ebbe502c9_27551584', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17108794355cbf6ebbe5cf26_13482379', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_255749495cbf6ebbe69a87_06398547', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
