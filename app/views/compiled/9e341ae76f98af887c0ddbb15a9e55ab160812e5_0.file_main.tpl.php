<?php
/* Smarty version 5.8.5, created on 2026-10-07 12:51:43
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac6162f2a7b87_98701909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e341ae76f98af887c0ddbb15a9e55ab160812e5' => 
    array (
      0 => 'main.tpl',
      1 => 1791366683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac6162f2a7b87_98701909 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13269474656ac6162eee54b0_79207159', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3450733916ac6162f02eea2_71677742', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_13269474656ac6162eee54b0_79207159 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>
Smarty blog<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_3450733916ac6162f02eea2_71677742 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>

	<h1>Smarty blog</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">Home</li>
		</ol>
	</nav>	
	
	<h2>Categories</h2>
	<div class="list-group">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
		<a href="/category?id=<?php echo $_smarty_tpl->getValue('category')->id;?>
" class="list-group-item list-group-item-action"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php
}
if ($foreach0DoElse) {
?>
		No categories
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</div>
	
	<h2>Recent articles:</h2>
	<div class="list-group">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles'), 'article');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach1DoElse = false;
?>
		<a href="/article?id=<?php echo $_smarty_tpl->getValue('article')->id;?>
" class="list-group-item list-group-item-action"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('article')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php
}
if ($foreach1DoElse) {
?>
		No articles
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</div>	
<?php
}
}
/* {/block 'body'} */
}
