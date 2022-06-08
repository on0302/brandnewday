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
                <li><a href="samsung.php">Samsung</a></li>
                <li><a href="sony.php">Sony</a></li>
                <li><a href="microsoft.php" class="active">Microsoft</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">

            <?php $today = new DateTime('now', new DateTimeZone('Asia/Tokyo')); ?>

            <!-- Introduction -->
            <section id="intro" class="main">
                <div class="Microsoft">
                    <div class="content">
                        <header class="major">
                            <h2>Microsoft</h2>
                        </header>
                        <div id="xbox">
                            <?php
                                    $days = array('1463','1091','2813','2443','1918');
                            ?>
                            <h2>Xboxシリーズ</h2>
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
                                        <td><?php $day = new DateTime('2020-11-10'); $diff = $day->diff($today); echo $diff->days.("日"); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>現行モデルの発売日</th>
                                        <td>2020年11月10日</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Xbox Series X/S</td>
                                            <td><?php $release = new DateTime('2020-11-10'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2013-11-22'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Xbox One</td>
                                            <td><?php $release = new DateTime('2013-11-22'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2006-11-22'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Xbox 360</td>
                                            <td><?php $release = new DateTime('2005-11-22'); echo $release->format('Y年m月d日'); ?>
                                            </td>
                                            <td><?php $day = new DateTime('2001-11-15'); $diff = $day->diff($release); echo $diff->days.("日"); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>初代Xbox</td>
                                            <td>2001年11月15日</td>
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
