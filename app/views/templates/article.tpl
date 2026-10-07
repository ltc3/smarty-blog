{extends file="layout.tpl"}
{block name=title}Article {$article->name}{/block}
{block name=body}
	<h1>Article {$article->name|escape}</h1>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Article {$article->name|escape}</li>
		</ol>
	</nav>
	
	<p><img alt="{$article->name}" src="{$article->image}" /></p>
	<p>{$article->text|escape}</p>
	<p>
		Categories:
		{foreach from=$categories item=category}
			<a href="/category?id={$category->id}" class="btn btn-primary">{$category->name|escape}</a>
		{/foreach}
	</p>
	<p>Published at: {$article->published_at|date_format}</p>
	<p>Views: {$article->views}</p>
	<p>
		<h2>Similar articles:</h2>
		<div class="list-group">
		{foreach from=$articles item=article}
			<a href="/article?id={$article->id}" class="list-group-item list-group-item-action">{$article->name|escape}</a>
		{foreachelse}
			No articles
		{/foreach}
		</div>
	</p>
{/block}
