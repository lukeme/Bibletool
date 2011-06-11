<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第伍段 第三年之傳道工作</h2>
<h3 class=gospel>第六章 往伯大尼</h3>
<table class=gospel border=1>
<tr class=gospel>
	<th class=gospel>分節標題
	<th class=gospel>馬太
	<th class=gospel>馬可
	<th class=gospel>路加
	<th class=gospel>約翰
	<th class=gospel>參考經文
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:19:1-2&ranges=MAK:10:1-1&ranges=LUK:9:51-56>定意面向耶路撒冷</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:19:1-2>19:1-2</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:10:1-1>10:1</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:51-56>9:51-56</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:57-62>作門徒的代價</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:57-62>9:57-62</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:10:1-24>差遣七十人</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:10:1-24>10:1-24</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:10:25-37>誰是好鄰舍﹖</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:10:25-37>10:25-37</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:10:38-42>上好福分</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:10:38-42>10:38-42</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');