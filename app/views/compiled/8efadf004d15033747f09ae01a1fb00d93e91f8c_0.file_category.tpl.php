<?php
/* Smarty version 5.8.5, created on 2026-10-07 09:16:31
  from 'file:category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac5e3bfc7fd20_20557455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8efadf004d15033747f09ae01a1fb00d93e91f8c' => 
    array (
      0 => 'category.tpl',
      1 => 1791352595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac5e3bfc7fd20_20557455 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6994252586ac5e3bfbed2e9_81678817', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14748292696ac5e3bfc7e985_35235753', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_6994252586ac5e3bfbed2e9_81678817 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14748292696ac5e3bfc7e985_35235753 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>

	<h1>Category</h1>
<?php
}
}
/* {/block 'body'} */
}
