<?php 
session_start();
    require_once $_SERVER["DOCUMENT_ROOT"] .'/inc/session.php';
    require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/db.php';
?>
<!doctype html>
<html>
<head>
<title>DNF</title>
<link href="sy.css" rel="stylesheet"  type="text/css" />
<meta charset="utf-8">
<?php
echo display_error();   
if(!is_login()){
    set_error("你没有权限访问此页面");
    redirect_to('/session/new.php');
}
?>
</head>
<body>
<header> 
  <h1> 
    <?php if(is_login()) echo '当前用户: ' . current_user() ;?>
         </span>
  </h1>
</header>
<nav>
      <ul>
        <li><a href="" class="selected">DNF </a> </li>
        <li><a href="../DNF/post/index.php">管理后台 </a></li>
        <li><a href="GL.php">攻略区 </a></li>
       <!-- <li><a href="">同人创作区 </a></li>-->
        <li><a href="../../session/destory.php">登出 </a></li>
      </ul>
</nav> 
<div id="content">
    <section>
        <h1>游戏简介：</h1>
        <p> 《地下城与勇士》是一款韩国网络游戏公司NEOPLE开发的免费角色扮演2D游戏，由三星电子发行，并于2005年8月在韩国正式发布。中国则由腾讯游戏代理发行。该游戏是一款2D卷轴式横版格斗过关网络游戏，大量继承了众多家用机、街机2D格斗游戏的特色。以任务引导角色成长为中心，结合副本、PVP、PVE为辅，与其他网络游戏同样具有装备与等级的改变，并拥有共500多种装备道具。每个人物有13个道具装备位置，在游戏中可以允许最多4个玩家进行组队挑战关卡，20人团队合作，8人团队合作，同样也可以进行4对4的PK。
        </p>
<hr />
        <h1>故事背景：</h1>
        <p>在阿拉德大陆的文明之光闪耀之前，世界是一个无边的宇宙，孕育着各种形态的生命。这些生命分散在各种虚空异界和地下城堡里，用它们的勤劳和智慧，创建着世界的繁荣。 生存在完美大陆阿拉德的人类和精灵，也属于各种形态的生命之一。他们用诸神赋予的智慧，创造了被众多异界生命钦羡的阿拉德文明。相传，连接阿拉德大陆和其它虚空异界的天空之城，就是天族和魔族为方便往来阿拉德大陆而建造的。 在各种虚空异界里，存在一种叫做“生命之水”的物体，可以使获得者拥有无限的生命。生命之水的出现，引起了各异界生命的争夺。魔族使徒“爆龙王”巴卡尔为抢夺生命之水，率领其手下的龙人和以赫尔德为中心的魔族使徒们展开了被称为“龙之战争”的魔族大战。 那是一场天地变色、伤亡惨重的毁灭之战，鲜血染红了魔族的土地！战败的巴卡尔通过寂静城逃向了天界，并堵死了魔界通往天界的所有道路。逃向天界的巴卡尔，为了削弱天族的反抗，不仅下了封杀魔法令，还用强大的魔法制造了具有邪恶力量的光之战士，并命他们守卫着天空之城，完全阻断了天界和阿拉德大陆的连接。 天界进入了巴卡尔统治的黑暗期，而阿拉德大陆的繁荣和辉煌，似乎也随着天空之城的消失而开始毁灭。精灵和人类决裂，大部分精灵从阿拉德大陆消失，不知踪迹。缺失精灵庇护的阿拉德大陆，进入了文明的荒漠期，渐渐地在历史的洪流中隐退。 然而，千年后，突如其来的异变，让原本归于平静的阿拉德大陆再次卷入血雨腥风之中。 先是一场如瘟疫般的异变，让阿拉德大陆上的动植物在一夕之间纷纷魔化成邪恶的怪物，它们凶残嗜血，肆意吞噬着人类的生命，死亡和恐慌迅速在阿拉德大陆蔓延。 接着一场大火如流星般坠落在格兰之森，熊熊的烈焰烧毁了格兰之森的大部分植被，却无法摧毁异变的动植物。格兰之森陷入了一片妖异的火海中，成了死亡之林。精灵也从森林里彻底消失。 各种异变现象频繁的出现在阿拉德大陆各地，异变的动植物也越来越疯狂。即使出现了为铲除怪物而不畏艰辛的穿行在阿拉德大陆各地的冒险家们，也无法让异变得到一丝缓解，阿拉德大陆陷入无边的黑暗之中。 更让人忧心的是，原本消失的天空之城又重新出现在阿拉德大陆上。随着它的出现，各种邪恶势力蠢蠢欲动：黑色瘟疫笼罩着人类的村庄，村庄里的人全部死亡，无一幸免；暗精灵趁混乱向人类发动战争；贝尔玛尔公国的领土被相邻的帝国侵占。 远在斯特鲁山脉北部的冰龙斯卡萨也在这时候冬眠醒来，它强大的寒冰力量让斯特鲁地区陷入了一个漫天冰雪的世界。饱受寒冷、饥饿摧残的班图族翻越斯特鲁山脉，野蛮入侵了贝尔玛尔的帝国防线。 因异变带来的混乱，在阿拉德大陆蔓延，各种虚空异界的再次出现，让整个世界陷入了癫狂之中。故事从鬼剑士、格斗家、圣职者、神枪手、魔法师和暗夜使者等组成的英雄队伍开始
        </p>
    </section>
</div>
<footer>       
</footer>
</body>
</html>