<?php
/* Smarty version 5.8.5, created on 2026-10-07 09:21:16
  from 'file:error.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac5e4dc3ccae2_60592019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0354cc94f1de634de86c1d19880942c7f10143c' => 
    array (
      0 => 'error.tpl',
      1 => 1791354074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac5e4dc3ccae2_60592019 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3894660246ac5e4dc253ef8_86367028', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_579629876ac5e4dc2ea596_22576811', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_3894660246ac5e4dc253ef8_86367028 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
echo $_smarty_tpl->getValue('code');?>
 <?php echo $_smarty_tpl->getValue('message');
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_579629876ac5e4dc2ea596_22576811 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>

	<h1><?php echo $_smarty_tpl->getValue('code');?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message'), ENT_QUOTES, 'UTF-8', true);?>
</h1>
<?php
}
}
/* {/block 'body'} */
}
