<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第一章  在耶路撒冷過節</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=JHN:5:1-16&ranges=EXO:20:10-10>醫治三十八年的病人</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:5:1-16>5:1-16</a>
	<td class=gospel><a href=../retrieve/?ranges=EXO:20:10-10>出20:1-10</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:1-8&ranges=MAK:2:23-28&ranges=LUK:6:1-6&ranges=DEU:5:14-14>門徒搯麥穗引起辨論</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:1-8>12:1-8</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:2:23-28>2:23-28</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:1-6>6:1-6</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=DEU:5:14-14>申5:14</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');