<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">哈巴谷書簡介</h1>
<p>
哈巴谷書是全部聖經中第三十五卷書，本書的信息與其他的先知書不同，是哈巴谷能像約伯一樣，敢於把內心的疑問向　神提出，要求掌管人類歷史秩序的主解答。其他先知所注重的是傳　神的啟示，本書是先知與　神的對話，有質疑也有歡欣的讚美。</p>
<p>
哈巴谷要　神解答的是：猶大誠然犯了罪，但聖潔的　神，不能容忍罪惡的神，何以允誰野蠻無道的迦勒底人來刑嚴？為甚麼讓比猶大更壞更惡的人來懲罰猶大？(哈1:12-13)
從人看來，　神所伸張的似乎是不公不義。哈巴谷不像約伯，只在個人的善惡的層次上發問，他關心的是國與國之間的公理，這也是今日人類所關懷的問題。對這個問題，　神的答覆是：在人看來似乎不合理的的途徑，在全能者手中可以令正義得到最後的勝利。義人只要相信　神,生命是有保障的,「惟有義人因信得生」(哈2:4)。使徒保羅把這句話納入了他著名的信心教訓中(羅1:17;加3:11;來10:3)</p>
<hr>
<h1 ALIGN="center">哈巴谷書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 哈巴谷的詢問和神的答覆</td>
<td>1:1-1:11</td>
</tr>
<tr>
<td>二、 哈巴谷第二次的詢問和神的答覆</td>
<td>　1:12-2:4</td>
</tr>
<tr>
<td>三、 神宣佈巴比倫的五禍</td>
<td>2:5:2:20</td>
</tr>
<tr>
<td>四、 哈巴谷的祈禱和讚美</td>
<td>3:1-3:19</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">哈巴谷書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2 章</td>
<td ALIGN="center">第 3 章</td>
</tr>
<tr>
<td ALIGN="center">問題與解答</td>
<td ALIGN="center">哀痛與警告</td>
<td ALIGN="center">驚異與崇拜</td>
</tr>
<tr>
<td ALIGN="center">對話</td>
<td ALIGN="center">獨白</td>
<td ALIGN="center">敬虔</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>