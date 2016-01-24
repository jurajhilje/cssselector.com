<?
$root = '/';
// $root = 'http://cssselector.com/';
// $root = 'http://cssselector-com.dev/public/';
$hash = 'e0ea334';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Eliminate manual mapping of CSS selectors for HTML code">
        <meta property="og:title" content="CSS Selector for Mac - Generate CSS selectors from HTML">
        <meta property="og:description" content="Eliminate manual mapping of CSS selectors for HTML code">
        <meta property="og:url" content="<?=$root?>">
        <meta property="og:site_name" content="CSS Selector">
        <meta property="article:author" content="Juraj Hilje">
        <meta property="og:image" content="<?=$root?>assets/img/css-selector-intro.png?v=<?=$hash?>">
        <title>CSS Selector for Mac - Generate CSS selectors from HTML</title>
        <link rel="icon" type="image/png" href="<?=$root?>assets/img/favicon.png">
        <link rel="stylesheet" href="<?=$root?>css/style.css?v=<?=$hash?>">
        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-45983209-2', 'auto');ga('send', 'pageview');</script>
    </head>
    <body>
        <div id="wrapper" class="container-fluid">
            <section id="home" class="row">
                <div class="col-lg-12">
                    <h1>
                        <strong>CSS Selector</strong><br>
                        Generate CSS selectors from HTML code
                    </h1>
                    <div class="download">
                        <a class="pull-left" href="https://itunes.apple.com/us/app/css-selector/id934600297?ls=1&amp;mt=12" target="_blank">
                            <img src="<?=$root?>assets/img/mac-app-store-badge.png?v=<?=$hash?>" alt="Download on the Mac App Store">
                        </a>
                        <a class="btn-demo center-block pull-right icon-download-cloud" href="<?=$root?>CSS-Selector-Demo.app.zip">Try Demo</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <img class="img-responsive screenshot" src="<?=$root?>assets/img/css-selector-intro.png?v=<?=$hash?>" alt="CSS Selector">
                </div>
            </section><!-- home -->
            <section id="features">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Skip Rules</h1>
                        <h2>Filter unwanted selectors with simple Id, Class and Tag skip rules</h2>
                        <hr>
                    </div>
                    <div class="col-sm-4">
                        <p>When using a CSS framework or any type of CSS blueprint classes, with skip rules simply <strong>filter framework specific class names</strong>.</p>
                        <p>For example with Bootstrap framework filter common class hooks with <strong>col-*</strong>, <strong>row</strong>, <strong>container*</strong> and similar skip rules.</p>
                    </div>
                    <div class="col-sm-8">
                        <ul class="bxslider">
                            <li>
                                <div>
                                    <img class="img-responsive" src="<?=$root?>assets/img/css-selector-skip-rules-1.png?v=<?=$hash?>" alt="CSS Selector - Skip Rules">
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img class="img-responsive" src="<?=$root?>assets/img/css-selector-skip-rules-2.png?v=<?=$hash?>" alt="CSS Selector - Skip Rules">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Settings</h1>
                        <h2>Customize CSS output</h2>
                        <hr>
                    </div>
                    <div class="col-sm-4">
                        <p>CSS Selector has several options for CSS output: <strong>tag prefix</strong> on Id and Class selectors, <strong>:hover</strong>, <strong>:link</strong>, <strong>:visited</strong> and <strong>:active</strong> pseudo classes for &lt;a&gt; tag, detect <strong>type attribute</strong> for &lt;input&gt; tag, indents, minified list, nested selectors, and more.</p>
                    </div>
                    <div class="col-sm-8">
                        <ul class="bxslider">
                            <li>
                                <div>
                                    <img class="img-responsive" src="<?=$root?>assets/img/css-selector-settings-1.png?v=<?=$hash?>" alt="CSS Selector - Settings">
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img class="img-responsive" src="<?=$root?>assets/img/css-selector-settings-2.png?v=<?=$hash?>" alt="CSS Selector - Indents">
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img class="img-responsive" src="<?=$root?>assets/img/css-selector-settings-3.png?v=<?=$hash?>" alt="CSS Selector - Minified">
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img class="img-responsive" src="<?=$root?>assets/img/css-selector-settings-4.png?v=<?=$hash?>" alt="CSS Selector - Input type">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section><!-- features -->
            <section id="contact">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Get in Touch</h1>
                        <h2>Info, support, bug report, wish list: info@cssselector.com</h2>
                    </div>
                    <div class="col-sm-12">
                        <div class="download">
                            <a class="pull-left" href="https://itunes.apple.com/us/app/css-selector/id934600297?ls=1&amp;mt=12" target="_blank">
                                <img src="<?=$root?>assets/img/mac-app-store-badge.png" alt="Download on the Mac App Store">
                            </a>
                            <a class="btn-demo center-block pull-right icon-download-cloud" href="<?=$root?>CSS-Selector-Demo.app.zip">Try Demo</a>
                        </div>
                        <p><?=date('Y', time())?> &copy; <a href="http://jurajhilje.com" target="_blank">Juraj Hilje</a>. All rights reserved.</p>
                    </div>
                </div>
            </section><!-- contact -->
        </div><!-- wrapper -->
        <script src="<?=$root?>js/dist.js?v=<?=$hash?>"></script>
    </body>
</html>