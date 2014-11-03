<?php include("menu.php") ?>
<div>
    <div class="header">
        <div><img class="home-image" src="/images/header_1.png"></div>
        <div><img class="home-image" src="/images/header_2.png"></div>
    </div>
</div>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="/index.php"><?php echo MSGmainPage ?></a></h1>
        </li>
    </ul>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span><?php echo MSGmenu ?></span></a></li>
    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <?php printHeaderMenu($menuAdditional, $activeLink, $activeSubLink); ?>
            <li class="has-form">
                <form id="search" method="get"  action="/pages/search.php">
                    <div class="row collapse">
                            <div class="large-8 small-9 columns">
                                <input name="searchRequest" type="text" placeholder=<?php echo "\"".MSGsiteSearch."\"" ?>>
                            </div>
                            <div class="large-4 small-3 columns">
                                <a onclick="document.getElementById('search').submit();return false;" class="alert button expand">
                                    <?php echo MSGsearch ?>
                                </a>
                            </div>

                    </div>
                </form>
            </li>
        </ul>
        <!-- Left Nav Section -->
        <ul class="left">
            <?php printHeaderMenu($menu, $activeLink, $activeSubLink); ?>
        </ul>
    </section>
</nav>