<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Brand New Days</title>
<link rel="stylesheet" href="src/reset.css">
<link rel="stylesheet" href="src/style.css">
</head>
<body>
<div class="wrapper">
<header class="header">
    <h1><a href="index.php">Brand New Days</a></h1>
</header>
<div class="container">
<div class="double"><hr></div>
<h2>Apple</h2>
<div id="macbook_pro_14">
<?php
    $days = array('343','197','348','315','400','221','598','224','279','498','474','317','308','238');
?>
    <h2>MacBook Pro 14</h2>
    <table>
        <tbody>
            <tr>
                <th>これまでの発売周期</th>
                <td><?php echo min($days).("日~").max($days).("日"); ?></td>
            </tr>
            <tr>
                <th>平均周期</th>
                <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?></td>
            </tr>
            <tr>
                <th>現行モデル発売からの経過日数</th>
                <td><?php $day = new DateTime('2021-10-26'); $diff = $day->diff($today); echo $diff->days.("日"); ?></td>
                <th>現行モデルの発売日</th>
                <td>2021年10月26日</td>
            </tr>
        </tbody>
    </table>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>次期モデル</td>
                    <td>???</td>
                    <td><?php echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2021(M1 Pro / M1 Max)</td>
                    <td>2021年10月26日</td>
                    <td>343日</td>
                </tr>
                <tr>
                    <td>Late2020(M1)</td>
                    <td>2020年11月17日</td>
                    <td>197日</td>
                </tr>
                <tr>
                    <td>Mid2020</td>
                    <td>2020年05月04日</td>
                    <td>348日</td>
                </tr>
                <tr>
                    <td>Mid2019</td>
                    <td>2019年05月22日</td>
                    <td>315日</td>
                </tr>
                <tr>
                    <td>Mid2018</td>
                    <td>2018年07月11日</td>
                    <td>400日</td>
                </tr>
                <tr>
                    <td>Mid2017</td>
                    <td>2017年06月06日</td>
                    <td>221日</td>
                </tr>
                <tr>
                    <td>Mid2016</td>
                    <td>2016年10月28日</td>
                    <td>598日</td>
                </tr>
                <tr>
                    <td>Mid2015</td>
                    <td>2015年03月10日</td>
                    <td>224日</td>
                </tr>
                <tr>
                    <td>Mid2014</td>
                    <td>2014年07月29日</td>
                    <td>279日</td>
                </tr>
                <tr>
                    <td>Late2013</td>
                    <td>2013年10月23日</td>
                    <td>498日</td>
                </tr>
                <tr>
                    <td>Mid2012</td>
                    <td>2012年06月12日</td>
                    <td>474日</td>
                </tr>
                <tr>
                    <td>Early2011</td>
                    <td>2011年02月24日</td>
                    <td>317日</td>
                </tr>
                <tr>
                    <td>Mid2010</td>
                    <td>2010年04月13日</td>
                    <td>308日</td>
                </tr>
                <tr>
                    <td>Mid2009</td>
                    <td>2009年06月09日</td>
                    <td>238日</td>
                </tr>
                <tr>
                    <td>Late2008</td>
                    <td>2008年10月14日</td>
                    <td>0日</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="macbook_pro_16">
<?php
    $days = array('713','490','400','221','528','294','279','498','474','317','308','238');
?>
    <h2>MacBook Pro 16</h2>
    <table>
        <tr>
            <th>これまでの発売周期</th>
            <td><?php echo min($days).("日~").max($days).("日"); ?></td>
        </tr>
        <tr>
            <th>平均周期</th>
            <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?></td>
        </tr>
        <tr>
            <th>現行モデル発売からの経過日数</th>
            <td><?php $day = new DateTime('2021-10-26'); $diff = $day->diff($today); echo $diff->days.("日"); ?></td>
        </tr>
        <tr>
            <th>現行モデルの発売日</th>
            <td>2021年10月26日</td>
        </tr>
    </table>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>次期モデル</td>
                    <td>???</td>
                    <td><?php echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2021</td>
                    <td><?php $release = new DateTime('2021-10-26'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2019-11-13'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2019</td>
                    <td><?php $release = new DateTime('2019-11-13'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2018-07-11'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2018</td>
                    <td><?php $release = new DateTime('2018-07-11'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2017-06-06'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2017</td>
                    <td><?php $release = new DateTime('2017-06-06'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2016-10-28'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2016</td>
                    <td><?php $release = new DateTime('2016-10-28'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2015-05-19'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2015</td>
                    <td><?php $release = new DateTime('2015-05-19'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2014-07-29'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2014</td>
                    <td><?php $release = new DateTime('2014-07-29'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2013-10-23'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2013</td>
                    <td><?php $release = new DateTime('2013-10-23'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2012-06-12'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2012</td>
                    <td><?php $release = new DateTime('2012-06-12'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2011-02-24'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Early2011</td>
                    <td><?php $release = new DateTime('2011-02-24'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2010-04-13'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2010</td>
                    <td><?php $release = new DateTime('2010-04-13'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2009-06-09'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2009</td>
                    <td><?php $release = new DateTime('2009-06-09'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2008-10-14'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2008</td>
                    <td>2008年10月14日</td>
                    <td>0日</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="macbook_pro">
<?php
    $days = array('244','497','519','819','315','322','364','328','273','499','237');
?>
    <h2>MacBook Air</h2>
    <table>
        <tbody>
        <tr>
                <th>これまでの発売周期</th>
                <td><?php echo min($days).("日~").max($days).("日"); ?></td>
            </tr>
            <tr>
                <th>平均周期</th>
                <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?></td>
            </tr>
            <tr>
                <th>現行モデル発売からの経過日数</th>
                <td><?php $day = new DateTime('2020-11-17'); $diff = $day->diff($today); echo $diff->days.("日"); ?></td>
            </tr>
            <tr>
                <th>現行モデルの発売日</th>
                <td>2020年11月17日</td>
            </tr>
        </tbody>
    </table>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>次期モデル</td>
                    <td>???</td>
                    <td><?php echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2020</td>
                    <td><?php $release = new DateTime('2020-11-17'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2020-03-18'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2020</td>
                    <td><?php $release = new DateTime('2020-03-18'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2018-11-07'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2018</td>
                    <td><?php $release = new DateTime('2018-11-07'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2017-06-06'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2017</td>
                    <td><?php $release = new DateTime('2017-06-06'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2015-03-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2015</td>
                    <td><?php $release = new DateTime('2015-03-10'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2014-04-29'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2014</td>
                    <td><?php $release = new DateTime('2014-04-29'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2013-06-11'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2013</td>
                    <td><?php $release = new DateTime('2013-06-11'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2012-06-12'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2012</td>
                    <td><?php $release = new DateTime('2012-06-12'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2011-07-20'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2011</td>
                    <td><?php $release = new DateTime('2011-07-20'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2010-10-20'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2010</td>
                    <td><?php $release = new DateTime('2010-10-20'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2009-06-08'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Mid2009</td>
                    <td><?php $release = new DateTime('2009-06-08'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2008-10-14'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Late2008</td>
                    <td><?php $release = new DateTime('2008-10-14'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2008-01-16'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Early2008</td>
                    <td><?php $release = new DateTime('2008-01-16'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2008-01-16'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="macbook">
<?php $days = array('414','376');
?>
    <h2>MacBook</h2>
    <table>
        <tbody>
            <tr>
                <th>これまでの発売周期</th>
                <td><?php echo min($days).("日~").max($days).("日"); ?></td>
            </tr>
            <tr>
                <th>平均周期</th>
                <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?></td>
            </tr>
            <tr>
                <th>現行モデル発売からの経過日数</th>
                <td><?php $day = new DateTime('2017-06-08'); $diff = $day->diff($today); echo $diff->days.("日"); ?></td>
                <th>現行モデルの発売日</th>
                <td>2017年06月08日</td>
            </tr>
        </tbody>
    </table>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>次期モデル</td>
                    <td>???</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Mid2017</td>
                    <td><?php $release = new DateTime('2017-06-08'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2016-04-20'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Early2016</td>
                    <td><?php $release = new DateTime('2016-04-20'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2015-04-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Early2015</td>
                    <td><?php $release = new DateTime('2015-04-10'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2015-04-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<h1>Samsung</h1>
<div id="galaxy_s">
<?php
    $days = array('309','412','364','357','329','337','336','364','350','142','160','217','154','238');
?>
    <h2>Galaxy Sシリーズ</h2>
    <table>
        <tbody>
            <tr>
                <th>これまでの発売周期</th>
                <td><?php echo min($days).("日~").max($days).("日"); ?></td>
            </tr>
            <tr>
                <th>平均周期</th>
                <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?></td>
            </tr>
            <tr>
                <th>現行モデル発売からの経過日数</th>
                <td><?php $day = new DateTime('2022-02-25'); $diff = $day->diff($today); echo $diff->days.("日"); ?></td>
                <th>現行モデルの発売日</th>
                <td>2022年02月25日</td>
            </tr>
        </tbody>
    </table>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Galaxy S22</td>
                    <td><?php $release = new DateTime('2022-02-25'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2021-04-22'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S21</td>
                    <td><?php $release = new DateTime('2021-04-22'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2020-03-06'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S20</td>
                    <td><?php $release = new DateTime('2020-03-06'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2019-03-08'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S10</td>
                    <td><?php $release = new DateTime('2019-03-08'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2018-03-16'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S9</td>
                    <td><?php $release = new DateTime('2018-03-16'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2017-04-21'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S8</td>
                    <td><?php $release = new DateTime('2017-04-21'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2016-05-19'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S7</td>
                    <td><?php $release = new DateTime('2016-03-11'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2015-04-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S6</td>
                    <td><?php $release = new DateTime('2015-04-10'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2014-04-11'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S5</td>
                    <td><?php $release = new DateTime('2014-04-11'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2013-04-26'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S4</td>
                    <td><?php $release = new DateTime('2013-04-26'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2012-12-05'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S3 α</td>
                    <td><?php $release = new DateTime('2012-12-05'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2012-06-28'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S3</td>
                    <td><?php $release = new DateTime('2012-06-28'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2011-11-24'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S2 LTE</td>
                    <td><?php $release = new DateTime('2011-11-24'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2011-06-23'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S2</td>
                    <td><?php $release = new DateTime('2011-06-23'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2010-10-28'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>Galaxy S</td>
                    <td>2010年10月28日</td>
                    <td>0日</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<h1>Sony</h1>
<div id="playstation">
<?php
    $days = array('1463','1091','2813','2443','1918');
?>
    <h2>PlayStation</h2>
    <table>
        <tbody>
            <tr>
                <th>これまでの発売周期</th>
                <td><?php echo min($days).("日~").max($days).("日"); ?></td>
            </tr>
            <tr>
                <th>平均周期</th>
                <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?></td>
            </tr>
            <tr>
                <th>現行モデル発売からの経過日数</th>
                <td><?php $day = new DateTime('2020-11-12'); $diff = $day->diff($today); echo $diff->days.("日"); ?></td>
            </tr>
            <tr>
                <th>現行モデルの発売日</th>
                <td>2020年11月12日</td>
            </tr>
        </tbody>
    </table>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>PlayStation 5</td>
                    <td><?php $release = new DateTime('2020-11-12'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2016-11-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>PlayStation 4 Pro</td>
                    <td><?php $release = new DateTime('2016-11-10'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2013-11-15'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>PlayStation 4</td>
                    <td><?php $release = new DateTime('2013-11-15'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2006-03-04'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>PlayStation 3</td>
                    <td><?php $release = new DateTime('2006-11-11'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('2000-03-04'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>PlayStation 2</td>
                    <td><?php $release = new DateTime('2000-03-04'); echo $release->format('Y年m月d日'); ?></td>
                    <td><?php $day = new DateTime('1994-12-03'); $diff = $day->diff($release); echo $diff->days.("日"); ?></td>
                </tr>
                <tr>
                    <td>PlayStation</td>
                    <td>1994-12-03</td>
                    <td>0日</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</body>
</html>
