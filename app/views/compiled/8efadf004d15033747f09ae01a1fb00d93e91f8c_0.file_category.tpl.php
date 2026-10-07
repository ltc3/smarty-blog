<?php
/* Smarty version 5.8.5, created on 2026-10-07 12:51:40
  from 'file:category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6ac6162c022dd8_97375000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8efadf004d15033747f09ae01a1fb00d93e91f8c' => 
    array (
      0 => 'category.tpl',
      1 => 1791366694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6ac6162c022dd8_97375000 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10578999336ac6162ba585f5_74277264', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16392267636ac6162bae3346_67873431', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_10578999336ac6162ba585f5_74277264 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>
Category <?php echo $_smarty_tpl->getValue('category')->name;
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16392267636ac6162bae3346_67873431 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/mnt/c/Users/Дмитрий/workspace/smarty-blog/app/views/templates';
?>

	<h1>Category <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Category <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
		</ol>
	</nav>
	
	<p><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->description, ENT_QUOTES, 'UTF-8', true);?>
</p>
	<p>
		<h2>Articles:</h2>
		<form method="GET">
			<div class="row">
				<div class="col-auto">Sort by:</div>
				<div class="col-auto">
					<select name="sort" class="form-select">
					    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_options')->handle(array('options'=>array('views'=>'Views','published_at'=>'Publishing date'),'selected'=>$_smarty_tpl->getValue('sort')), $_smarty_tpl);?>

					</select>
				</div>
				<div class="col-auto">
					<select name="order" class="form-select">
					    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_options')->handle(array('options'=>array('asc'=>'Ascending','desc'=>'Descending'),'selected'=>$_smarty_tpl->getValue('order')), $_smarty_tpl);?>

					</select>
				</div>
				<div class="col-auto">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('category')->id;?>
" />
					<input type="hidden" name="page" value="1" />
					<button class="btn btn-primary" type="submit">Sort</button>
				</div>
			</div>
		</form>
		<div class="list-group">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles'), 'article');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
?>
			<a href="/article?id=<?php echo $_smarty_tpl->getValue('article')->id;?>
" class="list-group-item list-group-item-action"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('article')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php
}
if ($foreach0DoElse) {
?>
			No articles
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</div>
		
		<?php if ($_smarty_tpl->getValue('pages') > 1) {?>
			<strong>Pagination:</strong>
			<ul class="pagination">
			<?php
$_smarty_tpl->assign('p', []);$_smarty_tpl->getVariable('p')->step = 1;$_smarty_tpl->getVariable('p')->total = (int) ceil(($_smarty_tpl->getVariable('p')->step > 0 ? $_smarty_tpl->getValue('pages')+1 - (1) : 1-($_smarty_tpl->getValue('pages'))+1)/abs($_smarty_tpl->getVariable('p')->step));
if ($_smarty_tpl->getVariable('p')->total > 0) {
for ($_smarty_tpl->getVariable('p')->value = 1, $_smarty_tpl->getVariable('p')->iteration = 1;$_smarty_tpl->getVariable('p')->iteration <= $_smarty_tpl->getVariable('p')->total;$_smarty_tpl->getVariable('p')->value += $_smarty_tpl->getVariable('p')->step, $_smarty_tpl->getVariable('p')->iteration++) {
$_smarty_tpl->getVariable('p')->first = $_smarty_tpl->getVariable('p')->iteration === 1;$_smarty_tpl->getVariable('p')->last = $_smarty_tpl->getVariable('p')->iteration === $_smarty_tpl->getVariable('p')->total;?>
				<li class="page-item">
					<a class="page-link" href="?id=<?php echo $_smarty_tpl->getValue('category')->id;?>
&page=<?php echo $_smarty_tpl->getValue('p');?>
&sort=<?php echo $_smarty_tpl->getValue('sort');?>
&order=<?php echo $_smarty_tpl->getValue('order');?>
"><?php echo $_smarty_tpl->getValue('p');?>
</a>
				</li>
			<?php }
}
?>
			</ul>
		<?php }?>
	</p>
<?php
}
}
/* {/block 'body'} */
}
