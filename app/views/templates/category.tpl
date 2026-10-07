{extends file="layout.tpl"}
{block name=title}Category {$category->name}{/block}
{block name=body}
	<h1>Category {$category->name|escape}</h1>
	<p>{$category->description|escape}</p>
	<p>
		<h2>Articles:</h2>
		<form method="GET">
			<div class="row">
				<div class="col-auto">Sort by:</div>
				<div class="col-auto">
					<select name="sort" class="form-select">
					    {html_options options=['views' => 'Views', 'published_at' => 'Publishing date'] selected=$sort}
					</select>
				</div>
				<div class="col-auto">
					<select name="order" class="form-select">
					    {html_options options=['asc' => 'Ascending', 'desc' => 'Descending'] selected=$order}
					</select>
				</div>
				<div class="col-auto">
					<input type="hidden" name="id" value="{$category->id}" />
					<input type="hidden" name="page" value="1" />
					<button class="btn btn-primary" type="submit">Sort</button>
				</div>
			</div>
		</form>
		<ul class="list-group">
		{foreach from=$articles item=article}
				<li class="list-group-item">{$article->name|escape}</li>
		{foreachelse}
			<li class="list-group-item">No articles</li>
		{/foreach}
		</ul>
		
		{if $pages gt 1}
			<strong>Pagination:</strong>
			<ul class="pagination">
			{for $p=1 to $pages}
				<li class="page-item">
					<a class="page-link" href="?id={$category->id}&page={$p}&sort={$sort}&order={$order}">{$p}</a>
				</li>
			{/for}
			</ul>
		{/if}
	</p>
{/block}
