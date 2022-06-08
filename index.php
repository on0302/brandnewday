<!DOCTYPE HTML>
<html>

<head>
    <title>Brand New Days</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="index.php">Brand New Days</a></h1>
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="index.php" class="active">Apple</a></li>
                <li><a href="samsung.php">Samsung</a></li>
                <li><a href="sony.php">Sony</a></li>
                <li><a href="microsoft.php">Microsoft</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">

		<?php $today = new DateTime('now', new DateTimeZone('Asia/Tokyo')); ?>

            <!-- Introduction -->
            <section id="intro" class="main">
                <div class="Apple">
                    <div class="content">
                        <header class="major">
                            <h2>Apple</h2>
                        </header>
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
                                        <th>発売周期</th>
                                        <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>現行モデル発売からの経過日数</th>
                                        <td><?php $day = new DateTime('2021-10-26'); $diff = $day->diff($today); echo $diff->days.("日"); ?>
                                        </td>
                                    </tr>
                                    <tr>
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
                                            <td><?php $release = new DateTime('2021-10-26'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2020-11-17'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2020(M1)</td>
                                            <td><?php $release = new DateTime('2020-11-17'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2020-05-04'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2020</td>
                                            <td><?php $release = new DateTime('2020-05-04'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2019-05-22'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2019</td>
                                            <td><?php $release = new DateTime('2019-05-22'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2018-07-11'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2018</td>
                                            <td><?php $release = new DateTime('2018-07-11'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2017-06-06'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2017</td>
                                            <td><?php $release = new DateTime('2017-06-06'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2016-10-28'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2016</td>
                                            <td><?php $release = new DateTime('2016-10-28'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2015-03-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2015</td>
                                            <td><?php $release = new DateTime('2015-03-10'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2014-07-29'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2014</td>
                                            <td><?php $release = new DateTime('2014-07-29'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2013-10-23'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2013</td>
                                            <td><?php $release = new DateTime('2013-10-23'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2012-06-12'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2012</td>
                                            <td><?php $release = new DateTime('2012-06-12'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2011-02-24'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Early2011</td>
                                            <td><?php $release = new DateTime('2011-02-24'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2010-04-13'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2010</td>
                                            <td><?php $release = new DateTime('2010-04-13'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2009-06-09'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2009</td>
                                            <td><?php $release = new DateTime('2009-06-09'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2008-10-14'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2008</td>
                                            <td><?php $release = new DateTime('2008-10-14'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2008-10-14'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <hr>

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
                                    <td><?php $day = new DateTime('2021-10-26'); $diff = $day->diff($today); echo $diff->days.("日"); ?>
                                    </td>
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
                                            <td><?php $release = new DateTime('2021-10-26'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2019-11-13'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2019</td>
                                            <td><?php $release = new DateTime('2019-11-13'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2018-07-11'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2018</td>
                                            <td><?php $release = new DateTime('2018-07-11'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2017-06-06'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2017</td>
                                            <td><?php $release = new DateTime('2017-06-06'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2016-10-28'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2016</td>
                                            <td><?php $release = new DateTime('2016-10-28'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2015-05-19'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2015</td>
                                            <td><?php $release = new DateTime('2015-05-19'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2014-07-29'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2014</td>
                                            <td><?php $release = new DateTime('2014-07-29'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2013-10-23'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2013</td>
                                            <td><?php $release = new DateTime('2013-10-23'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2012-06-12'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2012</td>
                                            <td><?php $release = new DateTime('2012-06-12'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2011-02-24'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Early2011</td>
                                            <td><?php $release = new DateTime('2011-02-24'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2010-04-13'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2010</td>
                                            <td><?php $release = new DateTime('2010-04-13'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2009-06-09'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2009</td>
                                            <td><?php $release = new DateTime('2009-06-09'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2008-10-14'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
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

                        <hr>

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
                                        <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>現行モデル発売からの経過日数</th>
                                        <td><?php $day = new DateTime('2020-11-17'); $diff = $day->diff($today); echo $diff->days.("日"); ?>
                                        </td>
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
                                            <td><?php $release = new DateTime('2020-11-17'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2020-03-18'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2020</td>
                                            <td><?php $release = new DateTime('2020-03-18'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2018-11-07'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2018</td>
                                            <td><?php $release = new DateTime('2018-11-07'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2017-06-06'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2017</td>
                                            <td><?php $release = new DateTime('2017-06-06'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2015-03-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2015</td>
                                            <td><?php $release = new DateTime('2015-03-10'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2014-04-29'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2014</td>
                                            <td><?php $release = new DateTime('2014-04-29'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2013-06-11'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2013</td>
                                            <td><?php $release = new DateTime('2013-06-11'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2012-06-12'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2012</td>
                                            <td><?php $release = new DateTime('2012-06-12'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2011-07-20'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2011</td>
                                            <td><?php $release = new DateTime('2011-07-20'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2010-10-20'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2010</td>
                                            <td><?php $release = new DateTime('2010-10-20'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2009-06-08'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mid2009</td>
                                            <td><?php $release = new DateTime('2009-06-08'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2008-10-14'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Late2008</td>
                                            <td><?php $release = new DateTime('2008-10-14'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2008-01-16'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Early2008</td>
                                            <td><?php $release = new DateTime('2008-01-16'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2008-01-16'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <hr>

                        <div id="macbook">
                            <?php $days = array('414','376'); ?>
                            <h2>MacBook</h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>これまでの発売周期</th>
                                        <td><?php echo min($days).("日~").max($days).("日"); ?></td>
                                    </tr>
                                    <tr>
                                        <th>平均周期</th>
                                        <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>現行モデル発売からの経過日数</th>
                                        <td><?php $day = new DateTime('2017-06-08'); $diff = $day->diff($today); echo $diff->days.("日"); ?>
                                        </td>
                                    </tr>
									<tr>
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
                                            <td><?php $release = new DateTime('2017-06-08'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2016-04-20'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Early2016</td>
                                            <td><?php $release = new DateTime('2016-04-20'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2015-04-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
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
                    </div>
                </div>
            </section>

        </div>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; Orita Naohiko</p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
