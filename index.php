<?php include './partials/header.php' ?>
    <input type="text" value="home" id="navTrigger">
    <div class="topContainer">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/masthead.png" alt="First slide">
                    <div class="overlay">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="titleContainer">
                                <h1>M a y f l o w e r</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/manhattan.png" alt="First slide">
                    <div class="overlay">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="titleContainer">
                                <h1>M a y f l o w e r</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="img/1.png" alt="First slide">
                    <div class="overlay">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="titleContainer">
                                <h1>M a y f l o w e r</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Consequuntur architecto</p>
                                <p>Explicabo blanditiis aperiam est.voluptatibus qui!</p>
                                <p>, commodi neque unde quo fuga, minima fugit dignissimos tempora </p>
                                <a href=""><i class="material-icons">play_circle_filled</i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev cal-nav" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="material-icons ">chevron_left</i>
            </a>
            <a class="carousel-control-next cal-nav" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="material-icons ">chevron_right</i>
            </a>
        </div>
       
    </div>
    <div class="aboutContainer">
        <div class="aboutWrapper">
            <h1><span>ABOUT US</span></h1>
            <div class="aboutContent">
                <div class="aboutDetail">
                    <h2>Mayflowers<span></span></h2>
                    <h2>Corporate Overview</h2>
                    <p>
                     Established in 1994, one of famous brands, the Hubei Mayflower Commercial & Trading Industrial Holdings......
                    </p>
                   
                    <!-- <ul>
                        <li>
                            <i class="material-icons">check</i>
                            <span>全方位掌控</span>
                        </li>
                        <li>
                            <i class="material-icons">check</i>
                            <span>监管协议</span>
                        </li>
                        <li>
                            <i class="material-icons">check</i>
                            <span>实体企业</span>
                        </li>
                        <li>
                            <i class="material-icons">check</i>
                            <span>美国全球征税政策</span>
                        </li>
                    </ul> -->
                    <br>
                    <a href="" class="primaryBtn">Learn More <i class="material-icons">arrow_forward</i></a>
                </div>
                <div class="aboutImg">
                    <img id="aboutimg" src="img/about.png" alt="">
                </div>
            </div>
            <h1 class="yTitle"><span>OUR PROJECTS</span></h1>
        </div>
        <div class="projectSection">
            <!-- <div class="owl-carousel owl-theme">
                <div class="item howard">
                    <div class="overlay">
                        <h4>长岛市 <br>豪生酒店</h4>
                        <p class="verticalText">Howard Johnson</p>
                    </div>
                    <div class="search">
                        <i class="fa fa-search-plus"></i>
                    </div>
                </div>
                <div class="item meadow">
                    <div class="overlay">
                        <h4>新鲜草原 <br>温顿花园酒店</h4>
                        <p class="verticalText">Wyndam Garden</p>
                    </div>
                    <div class="search">
                        <i class="fa fa-search-plus"></i>
                    </div>
                </div>
                <div class="item boutique">
                    <div class="overlay">
                        <h4>五月花 <br>Boutique 酒店</h4>
                        <p class="verticalText">Mayflower Boutique</p>
                    </div>
                    <div class="search">
                        <i class="fa fa-search-plus"></i>
                    </div>
                </div>
                <div class="item manhattan">
                    <div class="overlay">
                        <h4>FIFTH AVENUE H HOTEL</h4>
                        <p class="verticalText">Mayflower Manhattan</p>
                    </div>
                    <div class="search">
                        <i class="fa fa-search-plus"></i>
                    </div>
                </div>
                <div class="item canopy">
                    <div class="overlay">
                        <h4>五月花 <br>Canopy by Hilton</h4>
                        <p class="verticalText">Canopy by Hilton</p>
                    </div>
                    <div class="search">
                        <i class="fa fa-search-plus"></i>
                    </div>
                </div>
            </div> -->
            <div class="hotelRow">
                <div onclick="location.href='manhattan.php'" class="hotel mr-3" style="background-image:url(./img/manhattan-sm.png)" "background-position-x:40%">
                    <div class="overlay">
                        <h1>MAYFLOWER H HOTEL</h1>
                    </div>
                </div>
                <div onclick="location.href='wuhan.php'" class="hotel mr-3" style="background-image:url(./img/wuhan.png)">
                    <div class="overlay">
                        <h1>MAYFLOWERS HOTEL WUHAN</h1>
                    </div>
                </div>
                <div onclick="location.href='grand.php'" class="hotel" style="background-image:url(./img/grand.jpg)">
                    <div class="overlay">
                        <h1>MAYFLOWER GRAND HOTEL</h1>
                    </div>
                </div>
            </div>

            <div class="hotelRow">
                <div onclick="location.href='meadow.php'" class="hotel mr-3" style="background-image:url(./img/meadow.png)">
                    <div class="overlay">
                        <h1>MAYFLOWER WYNDHAM HOTEL</h1>
                    </div>
                </div>
                <div onclick="location.href='boutique.php'" class="hotel mr-3"  style="background-image:url(./img/boutique.jpg)">
                    <div class="overlay">
                        <h1>MAYFLOWER BOUTIQUE HOTEL</h1>
                    </div>
                </div>
                <div onclick="location.href='howard.php'" class="hotel" style="background-image:url(./img/howard.png)">
                    <div class="overlay">
                        <h1>MAYFLOWER HOWARD JOHNSON HOTEL</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './partials/footer.php' ?>