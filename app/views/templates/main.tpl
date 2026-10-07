{extends file="layout.tpl"}
{block name=title}Smarty blog{/block}
{block name=body}
	<h1>Smarty blog</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">Home</li>
		</ol>
	</nav>	
	
	<h2>Categories</h2>
	<div class="list-group">
	{foreach from=$categories item=category}
		<a href="/category?id={$category->id}" class="list-group-item list-group-item-action">{$category->name|escape}</a>
	{foreachelse}
		No categories
	{/foreach}
	</div>
	
	<h2>Recent articles:</h2>
	<div class="list-group">
	{foreach from=$articles item=article}
		<a href="/article?id={$article->id}" class="list-group-item list-group-item-action">{$article->name|escape}</a>
	{foreachelse}
		No articles
	{/foreach}
	</div>	
{/block}
