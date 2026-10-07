<?php
/* Smarty version 5.8.5, created on 2026-10-07 11:47:11
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac6070f0c7a84_56261777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc40ed601051450e2aac6421908da73bee8d4f3' => 
    array (
      0 => 'layout.tpl',
      1 => 1791362828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac6070f0c7a84_56261777 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<html>
<head>
  <title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3649722886ac6070f00b129_67309898', 'title');
?>
</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
	<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17807996156ac6070f0c6a99_72528771', 'body');
?>

</div>
</body>
</html><?php }
/* {block 'title'} */
class Block_3649722886ac6070f00b129_67309898 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17807996156ac6070f0c6a99_72528771 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
}
}
/* {/block 'body'} */
}
