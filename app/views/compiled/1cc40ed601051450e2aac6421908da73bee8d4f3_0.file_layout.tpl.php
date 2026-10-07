<?php
/* Smarty version 5.8.5, created on 2026-10-07 09:14:22
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac5e33ebfc2e7_69072104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc40ed601051450e2aac6421908da73bee8d4f3' => 
    array (
      0 => 'layout.tpl',
      1 => 1791352550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac5e33ebfc2e7_69072104 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<html>
<head>
  <title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7034619726ac5e33ebf9fb6_58343185', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7700324166ac5e33ebfb541_07209534', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_7034619726ac5e33ebf9fb6_58343185 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7700324166ac5e33ebfb541_07209534 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
}
}
/* {/block 'body'} */
}
