<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第六段  受難前一週之事蹟</h2>
<hr>

<p><a href="SEC6-01.html">第一章  四月二日騎驢進京</a>
<p><a href="SEC6-02.html">第二章  在耶路撒冷的講論</a>
<p><a href="SEC6-03.html">第三章  耶穌論祂的權柄</a>
<p><a href="SEC6-04.html">第四章  耶穌論將要來的事</a>
<p><a href="SEC6-05.html">第五章  豫言受害</a>
<p><a href="SEC6-06.html">第六章  逾越節最後的晚餐</a>
<p><a href="SEC6-07.html">第七章  最後的講論與代禱</a>
<p><a href="SEC6-08.html">第八章  在客西馬尼園</a>
<p><a href="SEC6-09.html">第九章  被捉受審</a>
<p><a href="SEC6-10.html">第十章  被棄絕並受凌辱 </a>
<p><a href="SEC6-11.html">第十一章  各各他的十字架 </a>
<p><a href="SEC6-12.html">第十二章  十架七言</a>
<p><a href="SEC6-13.html">第十三章  斷氣前的光景</a>
<p><a href="SEC6-14.html">第十四章  被安葬</a>

<hr>

'));

$smarty->display('gospel.tpl');