<?php
include_once ('includes/arrays.php');
include_once ('includes/header.php')
?>


    <main class="m-page">

        <!-- Home -->

        <section class="home" id="home">
            <div class="container-fluid">
                <h1> Free psd </br> template  </h1>
                <h2> A long time ago in a galaxy far far away... </h2>
                <a class="circle-mini icon-down-open" href="#news"> </a>
            </div>
        </section>

        <div class="info">
            <div class="container-fluid">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud. </p>
            </div>
        </div>

        <!-- About -->

        <section class="about" id="about">
            <div class="container-fluid">
                <div class="heading-wrap">
                    <h2> About Us </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
                </div>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </p>
                <div class="button-wrap">
                    <a class="button" href="#"> Read more </a>
                </div>
            </div>
        </section>

        <!-- News -->

        <section class="news" id="news">
            <div class="container-fluid">
                <h2> Check out last articles </h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>

                <div class="flexslider">
                    <ul class="slides">

                        <?php
                        foreach ($news as $item) {
                            echo '<li>';
                            echo "<a href=".$item['url'].">";
                            echo "<img src=".$item['src']." alt=".$item['alt']."/>";
                            echo '<h3>'.$item['title'].'</h3>';
                            echo '<p>'.$item['descript'].'</p>';
                            echo '</a></li>';
                        }
                        ?>

                    </ul>
                </div>

            </div>
        </section>

        <!-- Counter -->

        <section class="counter" id="counter">
            <div class="container-fluid">
                <h2> Lorem ipsum dolor sit amet, consectetur adipisicing elit </h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
                <div class="diagram-block clearfix">
                    <div class="counter-wrap">
                        <div class="counter-item" id="myStat" data-startdegree="140" data-dimension="295" data-text="70" data-info="Jedi"  data-percent="30"  data-bgcolor="#2f2f2f" data-fill="transparent"></div>
                    </div>
                    <div class="counter-wrap">
                        <div class="counter-item" id="myStat2" data-startdegree="140" data-dimension="295" data-text="400" data-info="Droids"  data-percent="80"  data-bgcolor="#2f2f2f" data-fill="transparent"></div>
                     </div>
                    <div class="counter-wrap">
                        <div class="counter-item" id="myStat3" data-startdegree="140" data-dimension="295" data-text="250" data-info="Battles"  data-percent="50"  data-bgcolor="#2f2f2f" data-fill="transparent"></div>
                     </div>
                </div>

                <!-- for mobile -->
                <div class="counter-block clearfix">
                    <div class="img-wrap">
                        <img src="img/counter1.png" alt="#"/>
                    </div>
                    <div class="img-wrap">
                        <img src="img/counter2.png" alt="#"/>
                    </div>
                    <div class="img-wrap">
                        <img src="img/counter3.png" alt="#"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- Opinions -->

        <section class="opinions" id="opinions">
            <div class="container-fluid">
                <h2> First impression about US </h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
                <div class="cites clearfix">

                    <?php
                    foreach ($cites as $item) {
                        echo '<div class="cites-item clearfix">';
                        echo "<img src=".$item['src']." alt=".$item['alt']."/>";
                        echo '<blockquote>"'.$item['cite'].'"</blockquote>';
                        echo '<p><span>'.$item['author'].'</span>, '.$item['place'].'</p>';
                        echo '</div>';
                    }
                    ?>

                </div>
            </div>
        </section>

        <!-- Path -->

        <section class="path" id="path">
            <div class="container-fluid">
                <h2> Choose Your path! </h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
                <div class="button-wrap  clearfix">
                    <a class="button light" href="#"> Join the light side </a>
                    <a class="button dark" href="#"> Join the dark side </a>
                </div>
            </div>
        </section>

    </main>
</div>

<?php
include ('includes/footer.php');
?>