<body>

    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky" class="uk-position-fixed">
        <nav class="uk-navbar-container" uk-navbar>

            <div class="nav-overlay uk-navbar-left">

                <a class="uk-navbar-item uk-logo" href="#">6mates.eu</a>

            </div>

            <div class="nav-overlay uk-navbar-center">
                <a href="?page=userProfile" uk-icon="user"></a>
            </div>

            <div class="nav-overlay uk-navbar-right">

                <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </div>

            <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

                <div class="uk-navbar-item uk-width-expand">
                    <form class="uk-search uk-search-navbar uk-width-1-1">
                        <input id="searchInput" class="uk-search-input" type="search" placeholder="Search" autofocus>
                    </form>
                </div>

                <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </div>

        </nav>
    </div>
</body>

<body>

    <!-- body -->
    <div class="uk-flex uk-margin-sides">

        <!-- left -->
        <div class="uk-width-small uk-position-relative side-nav">
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li><a></a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: home"></span> Home</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: bolt"></span> Trends</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Abos</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: bookmark"></span> Library</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: history"></span> History</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: play"></span> My Videos</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: clock"></span> Watch Later</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: heart"></span> Liked Videos</a></li>
                <li class="uk-nav-divider"></li>
                <li class="uk-nav-header">Abos</li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: user"></span> LiveTeXon</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: user"></span> ChrischiMc</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: user"></span> MegaGerissen</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: user"></span> Elon Musk</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: user"></span> Donald Trump</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: chevron-down"></span> 246 more</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: settings"></span> Settings</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: warning"></span> Reporthistory</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: question"></span> Help</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: commenting"></span> Send Feedbeck</a></li>
                <li class="uk-nav-divider"></li>
                <li>
                    <p>
                        <a class="uk-link-muted">About     </a>
                        <a class="uk-link-muted">Press    </a>
                        <a class="uk-link-muted">Copyright    </a>
                        <a class="uk-link-muted">Contact us   </a>
                        <a class="uk-link-muted">Creators     </a>
                        <a class="uk-link-muted">Advertise    </a>
                        <a class="uk-link-muted">Developers   </a>
                        <a class="uk-link-muted">Impressum    </a>
                    </p>
                </li>

                <li>
                    <p>
                        <a class="uk-link-muted">Terms     </a>
                        <a class="uk-link-muted">Privacy  </a>
                        <a class="uk-link-muted">Policy & Safety  </a>
                        <a class="uk-link-muted">How 6mates works     </a>
                        <a class="uk-link-muted">Test new features</a>
                    </p>
                </li>

                <li><p><a class="uk-link-muted">All prices include VAT</a></p></li>
                <li class="uk-nav-divider"></li>
                <li><p>© 2020 6mates</p></li>

            </ul>
        </div>

        <!-- right -->
        <div class="body uk-flex-right">
            <?php

            if(isset($_GET['page'])) {
                if(isset($page[$_GET['page']])) {
                    include($page[$_GET['page']]);
                }else{
                    include($page['404']);
                }
            }else{
                include($page['home']);
            }

            ?>
        </div>

    </div>

</body>