<!DOCTYPE HTML>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Halcyon</title>

  <link rel="shortcut icon" href="/assets/images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="/assets/css/fonts.css" media="all" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="/assets/js/halcyon/halcyonFunctions.js"></script>
  <script src="/assets/js/mastodon.js/mastodon.js"></script><!-- thx @kirschn -->
  <script src="/assets/js/jquery-cookie/src/jquery.cookie.js"></script>
  <script src="/assets/js/shortcut.js"></script>
  <script src="/assets/js/replace_emoji.js"></script>
  <script src="/assets/js/halcyon/halcyonUI.js"></script>
  <script src="https://twemoji.maxcdn.com/2/twemoji.min.js?2.2.3"></script>

  <script>
    if (
      !localStorage.getItem("current_id")       |
      !localStorage.getItem("current_instance") |
      !localStorage.getItem("current_authtoken")
    ){
      location.href = "/login";
    } else {
      if( $.cookie("session") === "true" ) {
        refreshApp();
      } else if ( $.cookie("session") === undefined ) {
        resetApp();
      }
    }
  </script>

</head>
<body>

<!-- HEADER -->
<header id="header">

    <div class="header_nav_wrap">

        <!-- HEADER LEFT -->
        <nav class="header_left_box">
            <ul class="header_nav_list">
                <!-- HOME -->
                <li id="header_nav_item_home" class="header_nav_item">
                    <a href="/" id="home_nav">
                        <i class="fa fa-fw fa-home"></i>
                        <span>Home</span>
                    </a>
                    <div class="home_badge nav_badge invisible"></div>
                </li>
                <!-- LOCAL -->
                <li id="header_nav_item_local" class="header_nav_item local_nav">
                    <a href="/local" id="local_nav">
                        <i class="fa fa-fw fa-users"></i>
                        <span>Local</span>
                    </a>
                    <div class="local_badge nav_badge invisible"></div>
                </li>
                <!-- FEDERATED -->
                <li id="header_nav_item_federated" class="header_nav_item federated_nav">
                    <a href="/federated" id="federated_nav">
                        <i class="fa fa-fw fa-globe"></i>
                        <span>Federated</span>
                    </a>
                    <div class="federated_badge nav_badge invisible"></div>
                </li>
                <!-- NOTIFICATIONS -->
                <li id="header_nav_item_notifications" class="header_nav_item notifications_nav">
                    <a href="/notifications" id="notifications_nav">
                        <i class="fa fa-fw fa-bell"></i>
                        <span>Notifications</span>
                    </a>
                    <div class="notification_badge nav_badge invisible"></div>
                </li>
            </ul>
        </nav>

        <!-- HEADER CENTER -->
        <div class="header_center_box">
            <h1 class="header_nav_item mastodon_logo logo_box">
                <a href="/">
                  <img src="/assets/images/logo-cybre.png" alt="cybrespace" />
                </a>
            </h1>
        </div>

        <!-- HEADER RIGHT -->
        <nav class="header_right_box">

            <ul class="header_nav_list">

                <!-- SEARCH -->
                <li class="header_nav_item serch_form_wrap">
                    <form class="search_form" action="/search" method="GET">
                        <input id="search_form" class="search_form_input" placeholder="Search Mastodon" type="text" name="q" accesskey="/"/>
                        <span class="search_form_submit">
                            <button type="submit">
                                <i class="fa fa-fw fa-search"></i>
                            </button>
                        </span>
                    </form>
                </li>

                <!-- ACCOUNT -->
                <li class="header_nav_item my_account_wrap">

                    <button class="header_account_avatar">
                        <div class="my_account">
                            <img class="js_current_profile_image" />
                        </div>
                    </button>

                    <nav class="header_my_account_nav invisible">
                        <ul>
                            <li>
                              <a class="js_current_profile_link emoji_poss">
                                <span class="js_current_profile_displayname display_name"></span>
                                <span>View profile</span>
                              </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                              <a class="header_settings_link" href="">Settings</a>
                            </li>
                            <li>
                              <a href="/logout">Log out</a>
                            </li>
                        </ul>
                    </nav>

                </li>

                <!-- TOOT -->
                <li class="header_nav_item toot_button_wrap">

                    <button id="creat_status" class="toot_button" accesskey="n">
                        <div class="toot_button_label">
                            <i class="fa fa-fw fa-pencil-square-o"></i>
                            <span>Toot</span>
                        </div>
                    </button>

                </li>

            </ul>

        </nav>

    </div>

</header>
