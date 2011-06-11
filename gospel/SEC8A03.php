<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合--主耶穌基督微行錄</h1>
<h2 class=gospel>第捌段 附錄</h2>
<h3 class=gospel>附錄 A.主耶穌所行的神蹟之三</h3>
<h4>自然聽命之神蹟</h4>
<table class=gospel border=1>
<tr class=gospel>
	<th class=gospel>三、自然聽命
	<th class=gospel>時間
	<th class=gospel>馬太
	<th class=gospel>馬可      
	<th class=gospel>路加      
	<th class=gospel>約翰     
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:2:1-11>變水為酒</a>
	<th class=gospel>AD.27年3月
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:2:1-11>2:1-11</a>
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:5:4-11>下網得魚</a>
	<th class=gospel>AD.28年春
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:5:4-11>5:4-11</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:23-27&ranges=MAK:4:35-41&ranges=LUK:8:22-25>平靜風和海</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:23-27>8:23-27</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:4:35-41>4:35-41</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:22-25>8:22-25</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:25-27&ranges=MAK:6:48-51&ranges=JHN:6:19-21>水面行走</a>
	<th class=gospel>AD.29年春
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:25-27>14:25-27</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:48-51>6:48-51</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:6:19-21>6:19-21</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:15-21&ranges=MAK:6:35-44&ranges=LUK:9:12-17&ranges=JHN:6:5-13>五餅二魚</a>
	<th class=gospel>AD.29年春
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:15-21>14:15-21</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:35-44>6:35-44</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:12-17>9:12-17</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:6:5-13>6:5-13</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:15:32-38&ranges=MAK:8:1-9>四千人吃飽</a>
	<th class=gospel>AD.29年夏
	<td class=gospel><a href=../retrieve/?ranges=MAT:15:32-38>15:32-38</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:8:1-9>8:1-9</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:17:24-27>魚口得稅銀</a>
	<th class=gospel>AD.29年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:17:24-27>17:24-27</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:18-20&ranges=MAK:11:12-14&ranges=MAK:11:20-21>咒詛無花果</a>
	<th class=gospel>AD.30年4月3日
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:18-20>21:18-20</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:12-14>11:20-21</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:21:1-11>一百五十三條大魚</a>
	<th class=gospel>AD.30年4月
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:21:1-11>21:1-11</a>
</tr>
</table>
<hr>

'));

$smarty->display('gospel.tpl');