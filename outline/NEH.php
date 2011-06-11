<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">尼希米記簡介</h1>
<p>
尼希米記是聖經中的第十六卷經書，也是舊約歷史書中的第十一卷。本卷書是以色列人第二次歸國後十四年，尼布帶領一班人起來重新修造耶路撒冷城牆，其恢復失去的事奉和敬拜。本卷書是以色列人最後一卷歷史書，也是尼希米的自傳。</p>
<p>
尼希米藉著修造耶路撒冷城牆，帶進了以色列民的復興，城牆與復興是有密切關係的，因為：1.它是　神選民的保障；什麼時候他們有城牆，他們就有保障；什麼時候失去了城牆，就相對失去了安全，2.它是　神選民的見證，耶路撒冷是大君的城，遙指天上的耶路撒冷，耶路撒冷城的存在，就能見證　神是以色列的　神；城若被攻陷，就證明神不在他們中間了，3.它是分別的界線，什麼時候城牆倒塌或被毀，什麼時候就沒有城外、城內就沒有分別。</p>
<p>雖然實際城牆在歷史上幾度被毀，直到今日一無遺留，可是　神選民屬靈的城牆，是無法攻破的，因為它就是　神自己。</p>
<hr>
<h1 ALIGN="center">尼希米記大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 尼希米返耶路撒冷建造城垣</td>
<td>1:1-6:19</td>
</tr>
<tr>
<td>二、 第一次革新</td>
<td>7:1-10:39</td>
</tr>
<tr>
<td>三、 第二次革新</td>
<td>11:1-13:31</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">尼希米記表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center" COLSPAN="2">重建</td>
<td ALIGN="center">復興</td>
<td ALIGN="center">改革</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>建築城牆</p>
<p>1-2</p>
</td>
<td ALIGN="center">
<p>聖殿完竣</p>
<p>3-7</p>
</td>
<td ALIGN="center">
<p>城牆內的靈命復興</p>
<p>8-10</p>
</td>
<td ALIGN="center">
<p>城牆內的居所分配</p>
<p>11-13</p>
</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">主題</td>
<td ALIGN="center" COLSPAN="2">重築城牆</td>
<td ALIGN="center">聖約更新</td>
<td ALIGN="center">全國復興</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="2">社會改革</td>
<td ALIGN="center">宗教改革</td>
<td ALIGN="center">政治改革</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="4">耶路撒冷</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="4">約 25 年(主前 445-420 年)</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>