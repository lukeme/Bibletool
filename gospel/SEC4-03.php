<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第三章  在迦農之工作</h3>
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
	 <td class=gospel><a href=../retrieve/?ranges=MAT:12:9-14&ranges=MAK:3:1-6&ranges=LUK:6:6-11>在安息日醫治枯手</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:12:9-14>12:9-14</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAK:3:1-6>3:1-6</a>
	 <td class=gospel><a href=../retrieve/?ranges=LUK:6:6-11>6:6-11</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:12:15-21&ranges=MAK:3:7-12>退到海邊</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:12:15-21>12:15-21</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAK:3:7-12>3:7-12</a>
        <td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=MAK:3:13-19&ranges=LUK:6:12-19>設立十二使徒</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAK:3:13-19>3:13-19</a>
	 <td class=gospel><a href=../retrieve/?ranges=LUK:6:12-19>6:12-19</a>
        <td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=LUK:7:36-50>耶穌座席受膏</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	 <td class=gospel><a href=../retrieve/?ranges=LUK:7:36-50>7:36-50</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');