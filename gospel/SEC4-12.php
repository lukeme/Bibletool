<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第十二章  在加利利之其他事蹟</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:1-2&ranges=MAK:6:14-16&ranges=LUK:9:7-9>耶穌名聲傳至希律</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:1-2>14:1-2</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:14-16>6:14-16</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:7-9>9:7-9</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:6-12&ranges=MAK:6:14-29>復記施洗約翰被殺經過</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:6-12>14:6-12</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:14-16>6:14-29</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');