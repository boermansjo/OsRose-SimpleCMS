<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SmartMenus jQuery Website Menu - Bootstrap 4 Addon - Navbar static top</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

    <!-- SmartMenus jQuery Bootstrap 4 Addon CSS -->
    <link href="bootstrap-4/jquery.smartmenus.bootstrap-4.css" rel="stylesheet">

  </head>

  <body style="padding-top:80px;">



	<?php include("navigator.php"); ?>



    <div class="container">

      <div class="jumbotron bg-light">
        <h1>SmartMenus Bootstrap 4 Addon (Navbar static top)</h1>
        <p class="lead">Zero config advanced Bootstrap navbars with SmartMenus jQuery and the SmartMenus jQuery Bootstrap 4 Addon.</p>
      </div>

      <p>You just need to include the JS/CSS files on your Bootstrap 4 powered pages and everything should work automatically including full support for your Bootstrap 4 theme. And you also have the power and flexibility of SmartMenus jQuery at hand should you need to tweak or customize anything.</p>

      <h2>Source Code</h2>

      <h3>CSS</h3>
      <p>In addition to Bootstrap's CSS just include the SmartMenus jQuery Bootstrap 4 Addon CSS. It's just static CSS code you don't need to edit at all (and probably shouldn't try to).</p>
      <pre class="border rounded p-3 bg-light">&lt;!-- Bootstrap core CSS -->
&lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<span class="text-success">&lt;!-- SmartMenus jQuery Bootstrap 4 Addon CSS -->
&lt;link href="../addons/bootstrap-4/jquery.smartmenus.bootstrap-4.css" rel="stylesheet"></span></pre>

      <h3>HTML</h3>
      <p><strong class="text-info">Note:</strong> Bootstrap 4 normally uses <code>&lt;div></code> elements as <code>.dropdown-menu</code> containers. But since we are building a multi-level menu tree, we need to replace them with nested <code>&lt;ul></code>/<code>&lt;li></code> elements.</p>
      <pre class="border rounded p-3 bg-light">&lt;!-- Navbar -->
&lt;nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  &lt;div class="container">
    &lt;a class="navbar-brand" href="#">Navbar&lt;/a>
    &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      &lt;span class="navbar-toggler-icon">&lt;/span>
    &lt;/button>

    &lt;div class="collapse navbar-collapse" id="navbarNavDropdown">
  <span class="text-success">
      &lt;!-- Left nav -->
      &lt;ul class="nav navbar-nav mr-auto">
        &lt;li class="nav-item">&lt;a class="nav-link" href="#">Link&lt;/a>&lt;/li>
        &lt;li class="nav-item">&lt;a class="nav-link" href="#">Link&lt;/a>&lt;/li>
        &lt;li class="nav-item">&lt;a class="nav-link" href="#">Link&lt;/a>&lt;/li>
        &lt;li class="nav-item dropdown">&lt;a class="nav-link dropdown-toggle" href="#">Dropdown&lt;/a>
          &lt;ul class="dropdown-menu">
            &lt;li>&lt;a class="dropdown-item" href="#">Action&lt;/a>&lt;/li>
            &lt;li>&lt;a class="dropdown-item disabled" href="#">Disabled link&lt;/a>&lt;/li>
            &lt;li>&lt;a class="dropdown-item" href="#">Something else here&lt;/a>&lt;/li>
            &lt;li class="dropdown-divider">&lt;/li>
            &lt;li class="dropdown-header">Nav header&lt;/li>
            &lt;li>&lt;a class="dropdown-item" href="#">Separated link&lt;/a>&lt;/li>
            &lt;li class="dropdown">&lt;a class="dropdown-item dropdown-toggle" href="#">One more separated link&lt;/a>
              &lt;ul class="dropdown-menu">
                &lt;li>&lt;a class="dropdown-item" href="#">Action&lt;/a>&lt;/li>
                &lt;li>&lt;a class="dropdown-item" href="#">Another action&lt;/a>&lt;/li>
                &lt;li class="dropdown">&lt;a class="dropdown-item dropdown-toggle" href="#">A long sub menu&lt;/a>
                  &lt;ul class="dropdown-menu">
                    &lt;li>&lt;a class="dropdown-item" href="#">Action&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Something else here&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">One more link&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 1&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 2&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 3&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 4&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 5&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 6&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 7&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 8&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 9&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 10&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 11&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 12&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 13&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 14&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 15&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 16&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 17&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 18&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 19&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 20&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 21&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 22&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 23&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 24&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 25&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 26&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 27&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 28&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 29&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 30&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 31&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 32&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 33&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 34&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 35&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 36&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 37&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 38&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 39&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 40&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 41&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 42&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 43&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 44&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 45&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 46&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 47&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 48&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 49&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 50&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 51&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 52&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 53&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 54&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 55&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 56&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 57&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 58&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 59&lt;/a>&lt;/li>
                    &lt;li>&lt;a class="dropdown-item" href="#">Menu item 60&lt;/a>&lt;/li>
                  &lt;/ul>
                &lt;/li>
                &lt;li>&lt;a class="dropdown-item" href="#">Another link&lt;/a>&lt;/li>
                &lt;li>&lt;a class="dropdown-item" href="#">One more link&lt;/a>&lt;/li>
              &lt;/ul>
            &lt;/li>
          &lt;/ul>
        &lt;/li>
      &lt;/ul>

      &lt;!-- Right nav -->
      &lt;ul class="nav navbar-nav">
        &lt;li class="nav-item">&lt;a class="nav-link" href="bootstrap-4-navbar.html">Default&lt;/a>&lt;/li>
        &lt;li class="nav-item active">&lt;a class="nav-link" href="bootstrap-4-navbar-static-top.html">Static top&lt;/a>&lt;/li>
        &lt;li class="nav-item">&lt;a class="nav-link" href="bootstrap-4-navbar-fixed-top.html">Fixed top&lt;/a>&lt;/li>
        &lt;li class="nav-item">&lt;a class="nav-link" href="bootstrap-4-navbar-fixed-bottom.html">Fixed bottom&lt;/a>&lt;/li>
        &lt;li class="nav-item dropdown">&lt;a class="nav-link dropdown-toggle" href="#">Dropdown&lt;/a>
          &lt;ul class="dropdown-menu">
            &lt;li>&lt;a class="dropdown-item" href="#">Action&lt;/a>&lt;/li>
            &lt;li>&lt;a class="dropdown-item" href="#">Another action&lt;/a>&lt;/li>
            &lt;li>&lt;a class="dropdown-item" href="#">Something else here&lt;/a>&lt;/li>
            &lt;li class="dropdown-divider">&lt;/li>
            &lt;li class="dropdown-header">Nav header&lt;/li>
            &lt;li class="dropdown">&lt;a class="dropdown-item dropdown-toggle" href="#">A sub menu&lt;/a>
              &lt;ul class="dropdown-menu">
                &lt;li>&lt;a class="dropdown-item" href="#">Action&lt;/a>&lt;/li>
                &lt;li>&lt;a class="dropdown-item" href="#">Another action&lt;/a>&lt;/li>
                &lt;li>&lt;a class="dropdown-item" href="#">Something else here&lt;/a>&lt;/li>
                &lt;li>&lt;a class="dropdown-item disabled" href="#">Disabled item&lt;/a>&lt;/li>
                &lt;li>&lt;a class="dropdown-item" href="#">One more link&lt;/a>&lt;/li>
              &lt;/ul>
            &lt;/li>
            &lt;li>&lt;a class="dropdown-item" href="#">A separated link&lt;/a>&lt;/li>
          &lt;/ul>
        &lt;/li>
      &lt;/ul>
  </span>
    &lt;/div>
  &lt;/div>
&lt;/nav></pre>

      <h3>JavaScript</h3>
      <p>In addition to Bootstrap's JavaScript just include SmartMenus jQuery and the SmartMenus jQuery Bootstrap 4 Addon. The default options used in <code>jquery.smartmenus.bootstrap.js</code> should work well for all. However, you can, of course, tweak them if you like.</p>
      <pre class="border rounded p-3 bg-light">&lt;!-- jQuery first, then Popper.js, then Bootstrap JS -->
&lt;script src="http://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">&lt;/script>
&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">&lt;/script>
&lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">&lt;/script>

<span class="text-success">&lt;!-- SmartMenus jQuery plugin -->
&lt;script type="text/javascript" src="../jquery.smartmenus.js">&lt;/script>

&lt;!-- SmartMenus jQuery Bootstrap 4 Addon -->
&lt;script type="text/javascript" src="../addons/bootstrap-4/jquery.smartmenus.bootstrap-4.js">&lt;/script></span></pre>

      <h2>Quick customization</h2>

      <h3><code>data-*</code> attributes</h3>
      <p>The Bootstrap 4 addon introduces the following additional <code>data-*</code> attributes which can be set to any <code>.navbar-nav</code>:</p>
      <ul>
        <li><code>data-sm-skip</code> - this will tell the script to skip this navbar and not apply any SmartMenus features to it so it will behave like a regular Bootstrap navbar.</li>
        <li><code>data-sm-skip-collapsible-behavior</code> - this will tell the script to not apply SmartMenus' specific behavior to this navbar in collapsible mode (mobile view). Bootstrap's behavior for navbars in collapsible mode is to use the whole area of the parent items just as a toggle button for their sub menus and thus it's impossible to set a link to the parent items that can be followed on click/tap. SmartMenus' behavior is to add a separate +/- sub menus toggle button to parent items and thus allows the link of the parent items to be activated on the second click/tap (the first click/tap displays the sub menu if it's not visible). If you need even further control, you can check the <a href="https://www.smartmenus.org/docs/#collapsibleBehavior"><code>collapsibleBehavior</code></a> SmartMenus option which can be set in a <a href="https://www.smartmenus.org/docs/#data-sm-options"><code>data-sm-options</code></a> attribute.</li>
      </ul>

      <h3>Options</h3>
      <p>The following additional option can be set in a <a href="https://www.smartmenus.org/docs/#data-sm-options"><code>data-sm-options</code></a> attribute:</p>
      <ul>
        <li><code>bootstrapHighlightClasses: 'text-dark bg-light'</code> - CSS class(es) for highlighting expanded parent dropdown items.</li>
      </ul>
      <p><a href="https://www.smartmenus.org/docs/#options">Check the docs</a> for a complete list of all the available SmartMenus options.</p>

      <h3>API</h3>
      <p>The following methods are available:</p>
      <ul>
        <li><code>jQuery.SmartMenus.Bootstrap.init()</code> - reinit the addon. Useful if you add any navbars dynamically on your page and need to init them at any time (all navbars are normally initialized ondomready).</li>
      </ul>

      <hr />

      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="index.html">&laquo; Back to main demo</a></li>
      </ul>

    </div> <!-- /container -->




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="JS/jquery.smartmenus.js"></script>

    <!-- SmartMenus jQuery Bootstrap 4 Addon -->
    <script type="text/javascript" src="bootstrap-4/jquery.smartmenus.bootstrap-4.js"></script>




  </body>
</html>