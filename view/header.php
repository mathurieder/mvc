<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title><?php echo $title;?></title>
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic">
        <link type="text/css" rel="stylesheet" href="/view/css/style.css" >
    </head>
    <body>
	    <div id="wrapper">
		<!--header-->
		<header>
			<nav>
				<ul>
					<li><a title="Home" rel="home" href="/">DefaultIndex</a></li>
					<li class="border"></li>
					<li class="selected"><a title="Users" href="/Users">Users</a></li>
				</ul>
				<a title="" href="index.html" id="logo">
					<img width="75" height="75" alt="Logo" src="/view/img/logo.png">
				</a>
				<h1><?php echo $heading;?></h1>
			</nav>
		</header>
		<!--/header-->
		<div class="clearfix" id="bookmarks">