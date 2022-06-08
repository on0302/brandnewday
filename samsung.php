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
                <li><a href="index.php">Apple</a></li>
                <li><a href="samsung.php" class="active">Samsung</a></li>
                <li><a href="sony.php">Sony</a></li>
                <li><a href="microsoft.php">Microsoft</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">

            <?php $today = new DateTime('now', new DateTimeZone('Asia/Tokyo')); ?>

            <!-- Introduction -->
            <section id="intro" class="main">
                <div class="Samsung">
                    <div class="content">
                        <header class="major">
                            <h2>Samsung</h2>
                        </header>
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
                                        <th>発売周期</th>
                                        <td><?php $sum= array_sum($days); $ave = $sum/count($days); echo $ave.("日"); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>現行モデル発売からの経過日数</th>
                                        <td><?php $day = new DateTime('2022-02-25'); $diff = $day->diff($today); echo $diff->days.("日"); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>現行モデルの発売日</th>
                                        <td>2022年02月25日</td>
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
                                            <td>Galaxy S22</td>
                                            <td><?php $release = new DateTime('2022-02-25'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2021-04-22'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S21</td>
                                            <td><?php $release = new DateTime('2021-04-22'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2020-03-06'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S20</td>
                                            <td><?php $release = new DateTime('2020-03-06'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2019-03-08'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S10</td>
                                            <td><?php $release = new DateTime('2019-03-08'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2018-03-16'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S9</td>
                                            <td><?php $release = new DateTime('2018-03-16'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2017-04-21'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S8</td>
                                            <td><?php $release = new DateTime('2017-04-21'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2016-05-19'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S7</td>
                                            <td><?php $release = new DateTime('2016-03-11'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2015-04-10'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S6</td>
                                            <td><?php $release = new DateTime('2015-04-10'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2014-04-11'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S5</td>
                                            <td><?php $release = new DateTime('2014-04-11'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2013-04-26'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S4</td>
                                            <td><?php $release = new DateTime('2013-04-26'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2012-12-05'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S3 α</td>
                                            <td><?php $release = new DateTime('2012-12-05'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2012-06-28'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S3</td>
                                            <td><?php $release = new DateTime('2012-06-28'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2011-11-24'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S2 LTE</td>
                                            <td><?php $release = new DateTime('2011-11-24'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2011-06-23'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galaxy S2</td>
                                            <td><?php $release = new DateTime('2011-06-23'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2010-10-28'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
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
