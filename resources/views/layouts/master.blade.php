<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>第九区块链</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <img src="/images/logo.png" width="48" style="float: left;margin-right: 15px;" />
                <router-link to="/" class="navbar-brand">
                    第九区块链
                </router-link>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <router-link to="/videos" tag="li">
                        <a href="/">视频</a>
                    </router-link>
                    <router-link to="/books" tag="li">
                        <a href="/">书籍</a>
                    </router-link>
                    <router-link to="/blog" tag="li">
                        <a href="/">博客</a>
                    </router-link>
                    <router-link to="/win" tag="li">
                        <a href="/">合作</a>
                    </router-link>
                    <router-link to="/win" tag="li">
                        <a href="/">年费</a>
                    </router-link>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="/forums">社区</a>
                    </li>
                    <router-link to="/signup" tag="li">
                        <a href="/">登录</a>
                    </router-link>
                    <router-link to="/signup" tag="li">
                        <a href="/">注册</a>
                    </router-link>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <router-view></router-view>
</div>
<script src="/js/app.js"></script>
</body>
</html>
