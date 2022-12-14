<?php require"layout/header.php" ?>
        <div class="slideshow container-fluid">
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="../upload/slider1.jpg" alt="slider 1">
                        </div>

                        <div class="item">
                            <img src="../upload/slider_2.jpg" alt="slider 2">
                        </div>

                        <div class="item">
                            <img src="../upload/slider_3.jpg" alt="slider 3">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- END SLIDESHOW -->
        <!-- SERVICES -->
        <div class="top-services container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 item item-1">
                    <div class="item-inner">
                        <a class="item-inline" title="7 NG??Y ?????I TR???" href="#">
                            <span class="title-sv">7 NG??Y ?????I TR???</span>
                            <span>Ch??m s??c kh??ch h??ng c???c t???t</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 item item-2">
                    <div class="item-inner">
                        <a class="item-inline" title="MI???N PH?? SHIP" href="#">
                            <span class="title-sv">MI???N PH?? SHIP</span>
                            <span>V???i d???ch v??? giao h??ng ti???t ki???m</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 item item-3">
                    <div class="item-inner">
                        <a class="item-inline" title="B??N BU??N NH?? B??N S???" href="#">
                            <span class="title-sv">B??N BU??N NH?? B??N S???</span>
                            <span>Gi?? h???p l?? nh???t qu??? ?????t</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 item item-4">
                    <div class="item-inner">
                        <a class="item-inline" title="CH???T L?????NG H??NG ?????U" href="#">
                            <span class="title-sv">CH???T L?????NG H??NG ?????U</span>
                            <span>Ch??m s??c b???n nh?? ng?????i th??n </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <main id="maincontent" class="page-main">
            <div class="container">
                <div class="row equal">
                    <div class="col-xs-12">
                        <h4 class="home-title">S???n ph???m n???i b???t</h4>
                    </div>
                    <?php foreach ($featuredProduct as $product): ?>
                    <div class="col-xs-6 col-sm-3">
                            <?php require"layout/product.php" ?>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="row equal">
                    <div class="col-xs-12">
                        <h4 class="home-title">S???n ph???m m???i nh???t</h4>
                    </div>
                    <?php foreach ($lastestProduct as $product): ?>
                    <div class="col-xs-6 col-sm-3">
                        <?php require"layout/product.php" ?>
                    </div>
                    <?php endforeach ?>
                </div>
                <?php foreach ($categoriesProduct as $categoryName => $products): ?>
                <div class="row equal">
                    <div class="col-xs-12">
                        <h4 class="home-title"><?=$categoryName ?></h4>
                    </div>
                    <?php foreach ($products as $product): ?>
                    <div class="col-xs-6 col-sm-3">
                        <?php require"layout/product.php" ?>
                    </div>
                    <?php endforeach ?>
                </div>
                <?php endforeach ?>
            </div>
        </main>
        <!-- FOOTER -->
<?php require"layout/footer.php" ?>
           