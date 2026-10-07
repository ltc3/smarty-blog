<?php
/* Smarty version 5.8.5, created on 2026-10-07 09:16:25
  from 'file:article.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac5e3b9346387_89122231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faec0bd867efeb837ddf5e886ad85ac2f7c99929' => 
    array (
      0 => 'article.tpl',
      1 => 1791352587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac5e3b9346387_89122231 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3263907156ac5e3b92bab40_17254657', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9349560676ac5e3b9345223_99802164', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_3263907156ac5e3b92bab40_17254657 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9349560676ac5e3b9345223_99802164 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>

	<h1>Article</h1>
<?php
}
}
/* {/block 'body'} */
}
