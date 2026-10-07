<?php
/* Smarty version 5.8.5, created on 2026-10-07 09:15:45
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac5e39178bae1_79842136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e341ae76f98af887c0ddbb15a9e55ab160812e5' => 
    array (
      0 => 'main.tpl',
      1 => 1791353743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac5e39178bae1_79842136 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_4466201526ac5e3915f98f6_44976147', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20022095876ac5e391688ef1_67588663', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_4466201526ac5e3915f98f6_44976147 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
echo $_smarty_tpl->getValue('title');
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20022095876ac5e391688ef1_67588663 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>

	<h1><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('title'), ENT_QUOTES, 'UTF-8', true);?>
</h1>
<?php
}
}
/* {/block 'body'} */
}
