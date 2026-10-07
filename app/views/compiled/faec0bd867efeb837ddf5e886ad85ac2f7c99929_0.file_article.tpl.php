<?php
/* Smarty version 5.8.5, created on 2026-10-07 12:52:57
  from 'file:article.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac61679d9a866_46014118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faec0bd867efeb837ddf5e886ad85ac2f7c99929' => 
    array (
      0 => 'article.tpl',
      1 => 1791366776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac61679d9a866_46014118 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1569232706ac61679a6dc09_72478091', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_877145486ac61679af7e25_01056099', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_1569232706ac61679a6dc09_72478091 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>
Article <?php echo $_smarty_tpl->getValue('article')->name;
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_877145486ac61679af7e25_01056099 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>

	<h1>Article <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('article')->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Article <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('article')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
		</ol>
	</nav>
	
	<p><img alt="<?php echo $_smarty_tpl->getValue('article')->name;?>
" src="<?php echo $_smarty_tpl->getValue('article')->image;?>
" /></p>
	<p><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('article')->text, ENT_QUOTES, 'UTF-8', true);?>
</p>
	<p>
		Categories:
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
			<a href="/category?id=<?php echo $_smarty_tpl->getValue('category')->id;?>
" class="btn btn-primary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</p>
	<p>Published at: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('article')->published_at);?>
</p>
	<p>Views: <?php echo $_smarty_tpl->getValue('article')->views;?>
</p>
	<p>
		<h2>Similar articles:</h2>
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
	</p>
<?php
}
}
/* {/block 'body'} */
}
