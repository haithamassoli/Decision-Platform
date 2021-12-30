<!DOCTYPE html>
<html lang="en-GB" data-dir="ltr" style="direction: ltr;">

<!-- Mirrored from forums.opera.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Dec 2021 19:12:13 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width&#x3D;device-width, initial-scale&#x3D;1.0" />
    <meta name="content-type" content="text/html; charset=UTF-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta property="og:site_name" content="Opera forums" />
    <meta name="msapplication-badge" content="frequency=30; polling-uri=https://forums.opera.com/sitemap.xml" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="title" content="Opera forums" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/uploads/system/og-image.png" />
    <meta property="og:image:url" content="assets/uploads/system/og-image.png" />
    <meta property="og:image:width" content="192" />
    <meta property="og:image:height" content="192" />
    <meta property="og:title" content="Opera forums" />
    <meta property="og:url" content="index.html" />
    <link rel="stylesheet" href="css/user-profile.css">



    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client0606.css?v=91djilae11a') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('black') }}/img/logo.png" />
    <link rel="search" type="application/opensearchdescription+xml" title="Opera forums" href="osd.xml" />
    <link rel="apple-touch-icon" href="{{ asset('assets/uploads/system/touchicon-orig.png') }}" />
    {{-- <link rel="icon" sizes="36x36" href="{{ asset('assets/uploads/system/touchicon-36.png') }}" />
    <link rel="icon" sizes="48x48" href="{{ asset('assets/uploads/system/touchicon-48.png') }}" />
    <link rel="icon" sizes="72x72" href="{{ asset('assets/uploads/system/touchicon-72.png') }}" />
    <link rel="icon" sizes="96x96" href="{{ asset('assets/uploads/system/touchicon-96.png') }}" />
    <link rel="icon" sizes="144x144" href="{{ asset('assets/uploads/system/touchicon-144.png') }}" />
    <link rel="icon" sizes="192x192" href="{{ asset('assets/uploads/system/touchicon-192.png') }}" /> --}}
    <link rel="prefetch" href="{{ asset('assets/src/modules/composer0606.js?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/src/modules/composer/uploads0606.js?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/src/modules/composer/drafts0606.js?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/src/modules/composer/tags0606.js?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/src/modules/composer/categoryList0606.js?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/src/modules/composer/resize0606.js?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/src/modules/composer/autocomplete0606.js?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/templates/composer0606.tpl?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/language/en-GB/topic0606.json?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/language/en-GB/modules0606.json?v=91djilae11a') }}" />
    <link rel="prefetch" href="{{ asset('assets/language/en-GB/tags0606.json?v=91djilae11a') }}" />
    <link rel="prefetch stylesheet" href="{{ asset('plugins/nodebb-plugin-markdown/styles/railscasts.css') }}" />
    <link rel="prefetch" href="assets/src/modules/highlight0606.js?v=91djilae11a" />
    <link rel="prefetch" href="assets/language/en-GB/markdown0606.json?v=91djilae11a" />
    <link rel="stylesheet" href="plugins/nodebb-plugin-emoji/emoji/styles0606.css?v=91djilae11a" />


    <script>
        var config = JSON.parse(
            '{"relative_path":"","upload_url":"/assets/uploads","assetBaseUrl":"/assets","siteTitle":"Opera forums","browserTitle":"Opera forums","titleLayout":"&#123;pageTitle&#125; | &#123;browserTitle&#125;","showSiteTitle":true,"maintenanceMode":false,"minimumTitleLength":4,"maximumTitleLength":255,"minimumPostLength":4,"maximumPostLength":32767,"minimumTagsPerTopic":0,"maximumTagsPerTopic":5,"minimumTagLength":3,"maximumTagLength":15,"undoTimeout":10000,"useOutgoingLinksPage":false,"allowGuestHandles":false,"allowTopicsThumbnail":false,"usePagination":false,"disableChat":false,"disableChatMessageEditing":false,"maximumChatMessageLength":1000,"socketioTransports":["polling","websocket"],"socketioOrigins":"https://forums.opera.com:*","websocketAddress":"","maxReconnectionAttempts":5,"reconnectionDelay":1500,"topicsPerPage":20,"postsPerPage":20,"maximumFileSize":2048,"theme:id":"nodebb-theme-opera","theme:src":"","defaultLang":"en-GB","userLang":"en-GB","loggedIn":false,"uid":0,"cache-buster":"v=91djilae11a","topicPostSort":"oldest_to_newest","categoryTopicSort":"newest_to_oldest","csrf_token":"ydN3NFa0-BcFyTstGkngSe4SI7mhSBnLwwH8","searchEnabled":true,"searchDefaultInQuick":"titles","bootswatchSkin":"","enablePostHistory":true,"timeagoCutoff":30,"timeagoCodes":["af","am","ar","az-short","az","be","bg","bs","ca","cs","cy","da","de-short","de","dv","el","en-short","en","es-short","es","et","eu","fa-short","fa","fi","fr-short","fr","gl","he","hr","hu","hy","id","is","it-short","it","ja","jv","ko","ky","lt","lv","mk","nl","no","pl","pt-br-short","pt-br","pt-short","pt","ro","rs","ru","rw","si","sk","sl","sq","sr","sv","th","tr-short","tr","uk","ur","uz","vi","zh-CN","zh-TW"],"cookies":{"enabled":false,"message":"[[global:cookies.message]]","dismiss":"[[global:cookies.accept]]","link":"[[global:cookies.learn_more]]","link_url":"https:&#x2F;&#x2F;www.cookiesandyou.com"},"thumbs":{"size":512},"iconBackgrounds":["#f44336","#e91e63","#9c27b0","#673ab7","#3f51b5","#2196f3","#009688","#1b5e20","#33691e","#827717","#e65100","#ff5722","#795548","#607d8b"],"emailPrompt":1,"acpLang":"en-GB","topicSearchEnabled":false,"hideSubCategories":false,"hideCategoryLastPost":false,"enableQuickReply":false,"composer-default":{},"markdown":{"highlight":1,"highlightLinesLanguageList":[""],"theme":"railscasts.css"},"opera":{"authValidateEmailURL":"https://auth.opera.com/account/edit-profile"},"google-analytics":{"id":"UA-4118503-39","displayFeatures":"off"},"emojiCustomFirst":false}'
        );
        var app = {
            user: JSON.parse(
                '{"uid":0,"username":"Guest","displayname":"Guest","userslug":"","fullname":"Guest","email":"","icon:text":"?","icon:bgColor":"#aaa","groupTitle":"","groupTitleArray":[],"status":"offline","reputation":0,"email:confirmed":false,"unreadData":{"":{},"new":{},"watched":{},"unreplied":{}},"isAdmin":false,"isGlobalMod":false,"isMod":false,"privileges":{"chat":false,"upload:post:image":false,"upload:post:file":false,"signature":false,"invite":false,"group:create":false,"search:content":true,"search:users":false,"search:tags":true,"view:users":true,"view:tags":true,"view:groups":true,"local:login":false,"ban":false,"view:users:info":false},"timeagoCode":"en","offline":true,"isEmailConfirmSent":false}'
            )
        };
    </script>



</head>

<body class="page-categories page-status-200 user-guest skin-noskin">
    <nav id="menu" class="slideout-menu hidden">
        <div class="menu-profile">

        </div>

        <section class="menu-section" data-section="navigation">
            <h3 class="menu-section-title">Navigation</h3>
            <ul class="menu-section-list"></ul>
        </section>


    </nav>
    <nav id="chats-menu" class="slideout-menu hidden">

    </nav>

    <main id="panel" class="slideout-panel" style="margin: auto">
        <nav class="navbar navbar-default navbar-fixed-top header" id="header-menu" component="navbar">
            <div class="container" style="width: 80%;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle pull-left" id="mobile-menu">
                        <span component="notifications/icon" class="notification-icon fa fa-fw unread-count"
                            data-content="0"></span>
                        <i class="fa fa-lg fa-fw fa-bars"></i>
                    </button>
                    <button type="button" class="navbar-toggle hidden" id="mobile-chats">
                        <span component="chat/icon" class="notification-icon fa fa-fw fa-comments unread-count"
                            data-content="0"></span>
                        <i class="fa fa-lg fa-comment-o"></i>
                    </button>
                    <div style="display:flex">
                        <a href="/main"><img style='margin:10px' alt=""  src="{{ asset('black') }}/img/logo.png" width="60px" height="60px" /></a>
                        <a href="/main"><span><h1>DP</h1></span>,</a>
                    </div>
                    <div component="navbar/title" class="visible-xs hidden">
                        <span></span>
                    </div>
                </div>

                <div id="nav-dropdown" >

                    <ul id="logged-out-menu" class="nav navbar-nav navbar-right" style="margin:10px">
                        <li class="login" style="visibility:@auth() {{'hidden'}} @else {{'visible'}} @endauth">
                            <a class="operaLoginButton"
                                href="{{route('login')}}"
                                data-base-href="/auth/opera" rel="nofollow" target="_top">
                                <span class="btn" style="background-color: #46D2EB;color:white">Login</span>
                            </a>
                        </li>
                    </ul>

                    <div style="margin:10px" >
                    <ul id="logged-out-menu" class="nav navbar-nav navbar-right">
                      <li class="login" style="margin-right: 0px">
                        <a href="/user_profile" class="operaLoginButton" rel="nofollow" target="_top">
                            <span style="font-size: large;font-weight:bold;margin-right:0px" class="btn">@auth() {{Auth::user()->name}} @endauth</span>
                        </a>
                    </li>
                      <li class="login" style="margin-left: -20px">
                            <a class="operaLoginButton"
                                href="/user_profile"
                                data-base-href="/auth/opera" rel="nofollow" target="_top">
                                @auth()
                                <img src='{{asset("black/img/".Auth::user()->image)}}' width="40px" height="40px" alt="" style="margin-bottom: 5px">
                                @endauth

                            </a>
                        </li>
                        <li  class="login" style="margin-left: 70px;margin-top:5px; visibility: @auth() visible @else hidden @endauth">
                            <a class="operaLoginButton" rel="nofollow" target="_top">
                                <span class="btn" style="background-color: #46D2EB;color:white;width:80px">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                        @csrf
                                        <button style="background-color:#46D2EB;border:none;color:white" type="submit">Logout</button>
                                    </form>
                                </span>
                            </a>
                        </li>

                        {{-- <li class="login">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                @csrf
                                <a class="operaLoginButton"
                                href=""
                                data-base-href="/auth/opera" rel="nofollow" target="_top">
                                <button class="nav-item dropdown-item" type="submit">Logout</button>
                            </a>
                            </form>
                        </li> --}}
                    </ul>
                </div>

                    <ul class="nav navbar-nav navbar-right"  >
                      @if (Auth::user() !== null)
                        <li class="login">
                            <a href="{{route('add_post')}}" class="operaLoginButton" rel="nofollow" target="_top">
                                <span class="btn" style="background-color: #46D2EB;color:white">Add Post</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <form id="search-form" class="navbar-form clearfix hidden-xs"
                                action="{{ url('/search') }}" role="search" method="GET" style="margin-bottom:15px;margin-right:100px;">
                                <button id="search-button" type="button" class="btn btn-link"><i
                                        class="fa fa-search fa-fw" title="Search"></i></button>
                                <div class="" id="search-fields" >
                                    <div class="form-group" >
                                        <input autocomplete="off" type="search" class="form-control"
                                            placeholder="Search" name="query" value="" style="width:400px">
                                        <a href="#"><i class="fa fa-gears fa-fw advanced-search-link"></i></a>
                                    </div>
                                    <button type="submit" class="btn btn-default hide">Search</button>
                                </div>
                            </form>
                            <div id="quick-search-container" class="quick-search-container hidden">
                                <div class="checkbox filter-category">
                                    <label>
                                        <input type="checkbox" checked><span class="name"></span>
                                    </label>
                                </div>
                                <div class="text-center loading-indicator"><i class="fa fa-spinner fa-spin"></i></div>
                                <div class="quick-search-results-container"></div>
                            </div>
                        </li>
                        <li class="visible-xs" id="search-menu">
                            <a href="search.html">
                                <i class="fa fa-search fa-fw"></i> Search
                            </a>
                        </li>
                    </ul>

{{--
                    <ul class="nav navbar-nav navbar-right hidden-xs">
                        <li>
                            <a href="#" id="reconnect" class="hide"
                                title="Looks like your connection to Opera forums was lost, please wait while we try to reconnect.">
                                <i class="fa fa-check"></i>
                            </a>
                        </li>
                    </ul>

                    <ul id="main-nav" class="nav navbar-nav">


                        <li class="">
                            <a title="Categories" class="navigation-link " href="categories/index.html">

                                <i class="fa fa-fw fa-list" data-content=""></i>


                                <span class="visible-xs-inline">Categories</span>


                            </a>

                        </li>



                        <li class="">
                            <a title="Recent" class="navigation-link " href="recent.html">

                                <i class="fa fa-fw fa-clock-o" data-content=""></i>


                                <span class="visible-xs-inline">Recent</span>


                            </a>

                        </li>



                        <li class="">
                            <a title="Tags" class="navigation-link " href="tags.html">

                                <i class="fa fa-fw fa-tags" data-content=""></i>


                                <span class="visible-xs-inline">Tags</span>


                            </a>

                        </li>



                        <li class="">
                            <a title="Users" class="navigation-link " href="users.html">

                                <i class="fa fa-fw fa-user" data-content=""></i>


                                <span class="visible-xs-inline">Users</span>


                            </a>

                        </li> --}}



                        {{-- <li class="">
                            <a title="Groups" class="navigation-link " href="groups.html">

                                <i class="fa fa-fw fa-group" data-content=""></i>


                                <span class="visible-xs-inline">Groups</span>


                            </a>

                        </li>



                        <li class="">
                            <a title="Rules" class="navigation-link " href="rules.html">

                                <i class="fa fa-fw fa-book" data-content=""></i>


                                <span class="visible-xs-inline">Rules</span>


                            </a>

                        </li>



                        <li class="">
                            <a title="Help" class="navigation-link " href="help.html">

                                <i class="fa fa-fw fa-question-circle" data-content=""></i>


                                <span class="visible-xs-inline">Help</span>


                            </a>

                        </li> --}}

{{--
                    </ul> --}}


                </div>

            </div>
        </nav>
