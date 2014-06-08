<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PowerAdmin :: Login</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/assets/css/normalize.css" rel="stylesheet" media="all" />
        <link href="/assets/css/styles.css" rel="stylesheet" media="all" />
        <!--[if lt IE 9]><script src="/assets/js/html5shiv-printshiv.js" media="all" /></script><![endif]-->
    </head>
    <body>
        <header role="banner"><h1>Login</h1></header>
        <main role="main">
            <form action="<?php echo site_url("/auth/login"); ?>" method="post">
                <label for="identity">Username</label><input type="text" placeholder="Username" name="identity" /><br />
                <label for="password">Password</label><input type="password" placeholder="Password" name="password" /><br />
                <button type="submit">Login</button>
            </form>
        </main>
        <footer role="contentinfo"><small>Copyright &copy; <time datetime="2014">2014</time></small></footer>
    </body>
</html>