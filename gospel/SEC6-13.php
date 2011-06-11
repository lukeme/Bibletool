<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第陸段 受難前一週之事跡</h2>
<h3 class=gospel>第十三章 斷氣前的光景</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:45-49&ranges=MAK:15:33-36&ranges=LUK:23:44-46&ranges=PSM:22:1-1>受父神離棄之苦</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:45-49>27:45-49</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:33-36>15:33-36</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:44-46>23:44-46</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=PSM:22:1-1>詩22:1-1</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:28-30&ranges=PSM:19:21-21>主說成了</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:28-30>19:28-30</a>
	<td class=gospel><a href=../retrieve/?ranges=PSM:69:21-21>詩69:21</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:50-50&ranges=MAK:15:37-37&ranges=LUK:23:46-46&ranges=JHN:19:30-30>主將靈魂交與父</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:50-50>27:50</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:37-37>15:37</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:46-46>23:46</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:30-30>19:30</a>
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');