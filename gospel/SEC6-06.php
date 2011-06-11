<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第陸段 受難前一週之事跡</h2>
<h3 class=gospel>第六章 逾越節最後的晚餐</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:17-20&ranges=MAK:14:12-17&ranges=LUK:22:7-18&ranges=EXO:12:14-28>最後的晚餐</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:17-20>26:17-20</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:14:12-17>14:12-17</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:7-18>22:7-18</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=EXO:12:14-28>出12:14-28</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:24-30>門徒爭論誰為大</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:24-30>22:24-30</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:13:1-20>耶穌為門徒洗腳</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:13:1-20>13:1-20</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:21-25&ranges=MAK:14:21-23&ranges=LUK:22:21-35&ranges=PSM:41:9-9>最後的晚餐</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:21-25>26:21-25</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:14:18-21>14:18-21</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:21-23>22:21-23</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:13:21-35>13:21-35</a>
	<td class=gospel><a href=../retrieve/?ranges=PSM:41:9-9>詩41:9</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:31-38&ranges=JHN:13:31-38&ranges=ZEC:13:7-7>耶穌預言門徒跌倒</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:31-38>22:31-38</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:13:31-38>13:31-38</a>
	<td class=gospel><a href=../retrieve/?ranges=ZEC:13:7-7>亞13:7</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:26-29&ranges=MAK:14:22-25&ranges=LUK:22:19-20&ranges=1CO:11:23-34>耶穌預言門徒跌倒</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:26-29>26:26-29</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:14:22-25>14:22-25</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:19-20>22:19-20</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=1CO:11:23-34>林前11:23-34</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');