<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第陸段 受難前一週之事跡</h2>
<h3 class=gospel>第十章 被棄絕並受審</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:1-14&ranges=MAK:15:1-5&ranges=LUK:23:1-7&ranges=JHN:18:28-38>被交彼拉多審問</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:1-14>27:1-14</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:1-5>15:1-5</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:1-7>23:1-7</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:18:28-38>18:28-38</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:8-12>再轉交巡撫希律</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:8-12>23:8-12</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:15-26&ranges=MAK:15:6-15&ranges=LUK:23:13-21&ranges=JHN:18:39-40>被眾人棄絕</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:15-26>27:15-26</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:6-15>15:6-15</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:13-21>23:13-21</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:18:39-40>18:39-40</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:27-31&ranges=MAK:15:16-20&ranges=JHN:19:1-3>受兵丁凌辱</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:27-31>27:27-31</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:16-20>15:16-20</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:1-3>19:1-3</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:22-25&ranges=JHN:19:4-15>被彼拉多定案</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:22-25>23:22-25</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:4-15>19:4-15</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:22-25&ranges=JHN:19:4-15>被彼拉多定案</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:22-25>23:22-25</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:4-15>19:4-15</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:3-10&ranges=ACT:27:3-10>猶大自盡</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:3-10>23:3-10</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=ACT:1:18-19>徒1:18-19</a>
</tr>

'));

$smarty->display('gospel.tpl');