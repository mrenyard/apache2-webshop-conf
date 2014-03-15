<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <style>

* {
  margin: 0; padding: 0; border: 0;
  zoom: 1; /* FIX: IE hasLayout */
}
html { overflow-y: scroll; }
article, aside, footer, header, label, nav, pre, section { display: block; }
html { background-color: green; }
body {
  position: relative;
  margin: 0 auto;
  padding: 30px;
  max-width: 960px; height: 900px;
  background-color: #FFFFFF;
}

.bookmarklet {
  padding: .2em;
  border: dashed 1px #333;
  background-color: #999;
}

    </style>
  </head>
  <body id="[site-domain]" class="[this-page-type]">
    <header role="banner">
<!-- include header -->
    </header>
    <div id="main" role="main">
      <h1>Index of websites</h1>
<!--
if ($handle = opendir('/path/to/files')) {
    echo "Directory handle: $handle\n";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n";
    }

    /* This is the WRONG way to loop over the directory. */
    while ($entry = readdir($handle)) {
        echo "$entry\n";
    }

    closedir($handle);
}
-->
      <a class="bookmarklet" href="javascript:(function()%7Bdocument.body.innerHTML+='%3Cdiv%20style=%22z-index:9999;position:absolute;top:0;right:0;bottom:0;left:0;padding:inherit;margin:0;background-color:transparent;background-position:center;background-size:100%%20100%;background-repeat:no-repeat;background-image:url(//www.<?=getenv('HOSTNAME'); ?>/12bar-grid.svg);background-origin:content-box;%22%3E%3C/div%3E'%7D)();">Responsive Grid</a>
    </div>
    <footer role="contentinfo">
<!-- include footer -->
    </footer>
  </body>
</html>
