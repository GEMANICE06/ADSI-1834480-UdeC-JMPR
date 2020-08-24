<?php

<button class="search__del" type="button">
            <svg class="ico ico--del">
                <use xlink:href="/images/icons-sprite-hog.svg#ico-del"></use>
            </svg>
        </button>
        </form>        <div class="header__nav">
            <nav class="nav">
                <a id="video-upload-link" class="nav__link" href="/profile/upload">
                    <div class="nav__icon">
                        <svg class="ico ico--upload">
                            <use xlink:href="/images/icons-sprite-hog.svg#ico-upload"></use>
                        </svg>
                    </div>
                    <div class="nav__text">Upload</div>
                </a>
                    <a user class="nav__link" href="/profile">
                        <div class="nav__icon">
                            <svg class="ico ico--profile">
                                <use xlink:href="/images/icons-sprite-hog.svg#ico-profile"></use>
                            </svg>
                        </div>
                        <div class="nav__text" username></div>
                    </a>
                    <a user class="nav__link" href="/logout">
                        <div class="nav__icon">
                            <svg class="ico ico--login">
                                <use xlink:href="/images/icons-sprite-hog.svg#ico-logout"></use>
                            </svg>
                        </div>
                        <div class="nav__text">Logout</div>
                    </a>
                    <a isguest class="nav__link" href="/signup">
                        <div class="nav__icon">
                            <svg class="ico ico--sign-up">
                                <use xlink:href="/images/icons-sprite-hog.svg#ico-sign-up"></use>
                            </svg>
                        </div>
                        <div class="nav__text">Sign up</div>
                    </a>
                    <a isguest class="nav__link" href="/signin">
                        <div class="nav__icon">
                            <svg class="ico ico--login">
                                <use xlink:href="/images/icons-sprite-hog.svg#ico-login"></use>
                            </svg>
                        </div>
                        <div class="nav__text">Log in</div>
                    </a>                
            </nav>
        </div>
        <div class="header__nav header__nav--mobile">
            <nav class="nav">
                <a class="nav__link" href="/">
                    <div class="nav__icon">
                        <svg class="ico ico--home">
                            <use xlink:href="/images/icons-sprite-hog.svg#ico-home"></use>
                        </svg>
                    </div>
                    <div class="nav__text">Home</div>
                </a>
                <a class="nav__link" href="/trending">
                    <div class="nav__icon">
                        <svg class="ico ico--fire">
                            <use xlink:href="/images/icons-sprite-hog.svg#ico-fire"></use>
                        </svg>
                    </div>
                    <div class="nav__text tab_for_money">Trending</div>
                </a>
                <a class="nav__link" href="/categories">
                    <div class="nav__icon">
                        <svg class="ico ico--folder">
                            <use xlink:href="/images/icons-sprite-hog.svg#ico-folder"></use>
                        </svg>
                    </div>
                    <div class="nav__text">Categories</div>
                </a>
            </nav>
        </div>
    </div>
</header><div class="content">
   <div class="page">
        <div class="page__content">
            <aside class="content__sidebar sidebar" data-simplebar id="sidebar">
                <div class="sidebar__section sidebar__section--mobile">
                    <nav class="nav">
                            <a user class="nav__link" href="/profile/upload">
                                <div class="nav__icon">
                                    <svg class="ico ico--upload">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-upload"></use>
                                    </svg>
                                </div>
                                <div class="nav__text">Upload</div>
                            </a>
                            <a user class="nav__link" href="/logout">
                                <div class="nav__icon">
                                    <svg class="ico ico--login">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-login"></use>
                                    </svg>
                                </div>
                                <div class="nav__text">Logout</div>
                            </a>
                            <a isguest class="nav__link" href="/signup">
                                <div class="nav__icon">
                                    <svg class="ico ico--sign-up">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-sign-up"></use>
                                    </svg>
                                </div>
                                <div class="nav__text">Sign up</div>
                            </a>
                            <a isguest class="nav__link" href="/signin">
                                <div class="nav__icon">
                                    <svg class="ico ico--login">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-login"></use>
                                    </svg>
                                </div>
                                <div class="nav__text">Log in</div>
                            </a>
                    </nav>
                </div>
                <div class="sidebar__section">
                    <ul class="sidebar-nav">
                        <li class="sidebar-nav__item sidebar-nav__item--hid">
                            <a class="sidebar-nav__link" href="/">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--home">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-home"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Home</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item sidebar-nav__item--hid">
                            <a class="sidebar-nav__link" href="/new">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--bell">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-bell"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">New</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item sidebar-nav__item--hid">
                            <a class="sidebar-nav__link" href="/trending">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--fire">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-fire"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text tab_for_money">Trending</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item">
                            <a class="sidebar-nav__link" href="/all">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--fame">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-fame"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Hall of Fame</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item">
                            <a class="sidebar-nav__link" href="/engaging">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--flash">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-flash"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Engaging</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item sidebar-nav__item--hid">
                            <a class="sidebar-nav__link" href="/categories">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--folder">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-folder"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Categories</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item">
                            <a class="sidebar-nav__link" href="/pornstars">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--star">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-star"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Pornstars</div>
                            </a>
                        </li>
                        <!-- <li class="sidebar-nav__item ">
                            <a class="sidebar-nav__link" href="#" title="Channels">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--channel">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-channel"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Channels</div>
                            </a>
                        </li> -->
                    </ul>
                </div>

                
    <div user class="sidebar__section">
    <ul class="sidebar-nav">
        <li class="sidebar-nav__item">
            <a class="sidebar-nav__link" href="/profile">
                <div class="sidebar-nav__icon">
                    <svg class="ico ico--history">
                        <use xlink:href="/images/icons-sprite-hog.svg#ico-profile"></use>
                    </svg>
                </div>
                <div class="sidebar-nav__text">Profile</div>
            </a>
        </li>
        <li class="sidebar-nav__item">
            <a class="sidebar-nav__link" href="/profile/upload">
                <div class="sidebar-nav__icon">
                    <svg class="ico ico--history">
                        <use xlink:href="/images/icons-sprite-hog.svg#ico-upload"></use>
                    </svg>
                </div>
                <div class="sidebar-nav__text">Upload</div>
            </a>
        </li>
        <li class="sidebar-nav__item">
            <a class="sidebar-nav__link" href="/profile/videos">
                <div class="sidebar-nav__icon">
                    <svg class="ico ico--history">
                        <use xlink:href="/images/icons-sprite-hog.svg#ico-cinema"></use>
                    </svg>
                </div>
                <div class="sidebar-nav__text">Videos</div>
            </a>
        </li>
        <li class="sidebar-nav__item">
            <a class="sidebar-nav__link" href="/logout">
                <div class="sidebar-nav__icon">
                    <svg class="ico ico--history">
                        <use xlink:href="/images/icons-sprite-hog.svg#ico-logout"></use>
                    </svg>
                </div>
                <div class="sidebar-nav__text">Logout</div>
            </a>
        </li>
    </ul>
</div>
                <div class="sidebar__section">
                    <ul class="sidebar-nav">
                        <li class="sidebar-nav__item">
                            <a class="sidebar-nav__link" href="/history">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--history">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-history"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">History</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item">
                            <a class="sidebar-nav__link" href="/favorites">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--heart">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-heart"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Favorites</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item">
                            <a class="sidebar-nav__link" href="/watch-later">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--watch">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-watch"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Watch Later</div>
                            </a>
                        </li>
                        <li class="sidebar-nav__item">
                            <a class="sidebar-nav__link" href="/liked">
                                <div class="sidebar-nav__icon">
                                    <svg class="ico ico--thumb">
                                        <use xlink:href="/images/icons-sprite-hog.svg#ico-thumb"></use>
                                    </svg>
                                </div>
                                <div class="sidebar-nav__text">Liked Videos</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar__section">
                    
<div class="sidebar-search">
    <div class="sidebar-search__block">
        <input name="sidebar-tag-search-input" class="sidebar-search__field" type="search" placeholder="Search category">
        <button class="sidebar-search__submit" type="submit">
            <svg class="ico ico--magnifier">
                <use xlink:href="/images/icons-sprite-hog.svg#ico-magnifier"></use>
            </svg>
        </button>
        <button class="sidebar-search__del" style="display: none;" type="reset">
            <svg class="ico ico--del2">
                <use xlink:href="/images/icons-sprite-hog.svg#ico-del2"></use>
            </svg>
        </button>
    </div>
    
</div>
?>