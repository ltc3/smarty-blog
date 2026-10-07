{extends file="layout.tpl"}
{block name=title}{$code} {$message}{/block}
{block name=body}
	<h1>{$code} {$message|escape}</h1>
{/block}
