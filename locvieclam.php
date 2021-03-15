<?php $data["title"] = "Loc viec lam"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="locvieclam__section1">
    <div class="container">
        <div class="locvieclam__box3">
            <div class="row align-items-center mb-1 locvieclam__row3">
                <div class="col">
                    <h2 class="locvieclam__title"><span class="text-uppercase">Danh sách việc làm</span></h2>
                </div>
                <div class="col-md-auto d-none d-md-block">
                    <div class="row locvieclam__row25 align-items-center">
                        <div class="col-auto">
                            <h5 class="locvieclam__box3__txt">Sắp xếp theo</h5>
                        </div>
                        <div class="col-auto">
                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                    <option>Lương từ cao tới thấp</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <div class="locvieclam__card__body__btnBox locvieclam__card__body__btnBox--sapxep">
                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow2.png" alt="">
                                    <div class="row locvieclam__row14 align-items-center">
                                        <div class="col">
                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-md-none">
                <div class="row locvieclam__row2">
                    <div class="col-6">
                        <div class="menu locvieclam__card__body__btnBox locvieclam__card__body__btnBox--sapxep">
                            <img class="locvieclam__card__body__btnBox__arrow" src="images/icon_loc.png" alt="">
                            <div class="row locvieclam__row14 align-items-center">
                                <div class="col">
                                    <span class="txtSelect line-clamp-1 locvieclam__card__body__txt">Bộ Lọc</span>
                                </div>
                            </div>
                        </div>
                        <div class="boxFillter subnav" uk-height-viewport="offset-top: true">
                            <div class="boxFillter__bg">
                                <div class="container">
                                    <div class="text-right">
                                        <a href="javascript: void(0)" class="boxFillter__btnRemove"><img src="images/remove-button.png" alt=""></a>
                                    </div>
                                    <!--Lọc theo mức lương-->
                                    <div class="card locvieclam__card">
                                        <div class="card-header locvieclam__card__header">
                                            <span class="locvieclam__card__header__txt">Lọc theo mức lương</span>
                                        </div>
                                        <div class="card-body locvieclam__card__body">
                                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                                    <option>Chọn mức lương</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                <div class="locvieclam__card__body__btnBox">
                                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow1.png" alt="">
                                                    <div class="row locvieclam__row14 align-items-center">
                                                        <div class="col-auto">
                                                            <div class="locvieclam__card__body__btnBox__bg">
                                                                <img src="images/save-money.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Lọc theo mức lương-->

                                    <!--Lọc theo cấp bậc-->
                                    <div class="card locvieclam__card">
                                        <div class="card-header locvieclam__card__header">
                                            <span class="locvieclam__card__header__txt">Lọc theo cấp bậc</span>
                                        </div>
                                        <div class="card-body locvieclam__card__body">
                                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                                    <option>Chọn cấp bậc</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                <div class="locvieclam__card__body__btnBox">
                                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow1.png" alt="">
                                                    <div class="row locvieclam__row14 align-items-center">
                                                        <div class="col-auto">
                                                            <div class="locvieclam__card__body__btnBox__bg">
                                                                <img src="images/rank.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Lọc theo cấp bậc-->

                                    <!--Loại hình công việc-->
                                    <div class="card locvieclam__card">
                                        <div class="card-header locvieclam__card__header">
                                            <span class="locvieclam__card__header__txt">Loại hình công việc</span>
                                        </div>
                                        <div class="card-body locvieclam__card__body">
                                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                                    <option>Loại hình công việc</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                <div class="locvieclam__card__body__btnBox">
                                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow1.png" alt="">
                                                    <div class="row locvieclam__row14 align-items-center">
                                                        <div class="col-auto">
                                                            <div class="locvieclam__card__body__btnBox__bg">
                                                                <img src="images/portfolio.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Loại hình công việc-->

                                    <!--Kinh nghiệm làm việc-->
                                    <div class="card locvieclam__card">
                                        <div class="card-header locvieclam__card__header">
                                            <span class="locvieclam__card__header__txt">Kinh nghiệm làm việc</span>
                                        </div>
                                        <div class="card-body locvieclam__card__body">
                                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                                    <option>Kinh nghiệm làm việc</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                <div class="locvieclam__card__body__btnBox">
                                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow1.png" alt="">
                                                    <div class="row locvieclam__row14 align-items-center">
                                                        <div class="col-auto">
                                                            <div class="locvieclam__card__body__btnBox__bg">
                                                                <img src="images/candidate.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Kinh nghiệm làm việc-->
                                    <div class="text-center mt-3">
                                        <a href="" class="home__block3__btn btn btn-secondary">Lọc việc làm phù hợp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                      $( document ).ready(function() {
                        console.log( "ready!" );
                        $(".menu").on("click", function () {
                          UIkit.heightViewport('.subnav', {
                            offsetTop: true,
                          });
                          $(".subnav").slideToggle();
                          // $("body").toggleClass("overflow-hidden");
                        });
                        $(".boxFillter__btnRemove").click(function () {
                          $(".subnav").slideToggle();
                          // $("body").toggleClass("overflow-hidden");
                        });
                      });
                    </script>
                    <div class="col-6">
                        <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                            <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                <option>Sắp xếp</option>
                                <option>Lương từ cao tới thấp</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <div class="locvieclam__card__body__btnBox locvieclam__card__body__btnBox--sapxep">
                                <img class="locvieclam__card__body__btnBox__arrow" src="images/icon_sapxep.png" alt="">
                                <div class="row locvieclam__row14 align-items-center">
                                    <div class="col">
                                        <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="locvieclam__box4">
            <div class="row locvieclam__row8">
                <!--content-->
                <div class="col">
                    <div class="locvieclam__box2">
                        <?php
                        $data = array(
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOGZTR1E9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--1f66fec6cb5551448099cf7e1353b99557ac6212/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/57044345_328265154558102_4476655034074923008_n.jpg',
                                'title' => 'Lập trình Web (WordPress/PHP)',
                                'namecty' => 'Công ty TNHH Công Nghệ Boostify',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => 'Salary from $800 to $1500',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Hà Nội',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBK2duREE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--c58262198223ff77b3a31a4d33fe8600839c86c6/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/quantic-logo.jpg',
                                'title' => 'Web Developer (PHP, Java, NodeJS)',
                                'namecty' => 'Quantic',
                                'time' => false,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => '7 000 000 - 10 000 000',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Hà Nội',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBd3czRUE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--a36f69e03092abaadb28cca180ebf6322a9b0440/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/hachi-web-solutions-logo.png',
                                'title' => 'PHP Web Developer',
                                'namecty' => 'Hachi Web Solutions',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => '7 000 000 - 10 000 000',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Hà Nội',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBd1l0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--e969c475547841a5d4a7b6b4cf8c43e5c749bc1c/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/wvb-vietnam-logo.jpg',
                                'title' => 'Developer ( PHP, Python, .NET, Java )',
                                'namecty' => 'WVB Vietnam',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => '7 000 000 - 10 000 000',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Hà Nội',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMENzRVE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--7e0cd70b259aafb918bf952f2420d839c2340d7d/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/img-logo-square.jpg',
                                'title' => 'Fullstack Developers (ReactJS, NodeJS)',
                                'namecty' => 'KTcity',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => '7 000 000 - 10 000 000',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Ho Chi Minh',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBek1LSEE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--657b9b8727b3db395a030dac24a56ae790ab5b73/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/Copy%20of%20EH_Primary_Stacked_Full%20Colour_Regular.jpg',
                                'title' => 'Remote Junior Frontend Dev (ReactJS)',
                                'namecty' => 'Employment Hero',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => '7 000 000 - 10 000 000',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Ho Chi Minh',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBODE5R1E9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ab7671364532cc450d2e91c5af8ac244de27aa22/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/905%20-%20Tu%20Anh%20Vu.jpg',
                                'title' => 'VueJS Developer (AngularJS/ReactJS)',
                                'namecty' => 'Công ty 905',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => '7 000 000 - 10 000 000',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Ha Noi',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMXh3Rmc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--188a9cb1b8736adc1bcce05b938addfcceb4285b/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/Screen%20Shot%202020-07-03%20at%204.43.24%20PM.png',
                                'title' => 'Frontend Engineer (ReactJS, JavaScript)',
                                'namecty' => 'Viện Nghiên cứu Dữ liệu lớn - VinBigdata',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => 'Mức lương hấp dẫn',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Ha Noi',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOXZHRGc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--3839ac9530d218b071d9e616858a656dca0ca1cc/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/offspring-digital-viet-nam-logo.png',
                                'title' => 'NodeJS & ReactJS Developer (1100$-2000$)',
                                'namecty' => 'Offspring Digital Viet Nam',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => 'Mức lương hấp dẫn',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Ha Noi',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                            array(
                                'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBeFlLRHc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--052af4a4e0523ee7ed7e2765290754afdd91c28e/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/framgia-inc-logo.jpg',
                                'title' => 'Frontend Angular/ReactJS (All level)',
                                'namecty' => 'Sun* Inc.',
                                'time' => true,
                                'sub' => array(
                                    array(
                                        'src1' => 'images/coin.png',
                                        'title1' => 'Lương: $600-1800 (Gross)',
                                    ),
                                    array(
                                        'src1' => 'images/location-pin.png',
                                        'title1' => 'Ha Noi',
                                    ),
                                    array(
                                        'src1' => 'images/clock.png',
                                        'title1' => '24/12/2020',
                                    ),
                                ),
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <div class="locvieclam__box1__item">
                                <div class="row locvieclam__row8 align-items-center align-items-md-start">
                                    <div class="col-auto">
                                        <div class="locvieclam__box1__item__boxw">
                                            <div class="locvieclam__box1__item__boxw__bg" style="background-image: url(<?= $v['src'] ?>)">
                                                <img src="<?= $v['src'] ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h4 class="locvieclam__box1__item__title"><a href=""><?= $v['title'] ?></a></h4>
                                        <div class="locvieclam__box1__item__name"><?= $v['namecty'] ?></div>
                                        <div class="d-none d-md-block">
                                            <div class="row">
                                                <?php foreach ($v['sub'] as $k1 => $v1): ?>
                                                    <div class="<?= ($k1 == 1) ? 'col' : 'col-md-auto' ?>">
                                                        <div class="row locvieclam__row6 align-items-center">
                                                            <div class="col-auto align-items-center d-inline-flex">
                                                                <div class="locvieclam__box1__item__bg1">
                                                                    <img src="<?= $v1['src1'] ?>" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <span class="locvieclam__box1__item__txt1 <?= (($k1 == 2) && $v['time']) ? 'text-danger' : '' ?>"><?= (($k1 == 2) && $v['time']) ? 'Đang cập nhật' : $v1['title1'] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex d-md-none">
                                        <div class="row">
                                            <?php foreach ($v['sub'] as $k1 => $v1): ?>
                                                <div class="<?= ($k1 == 1) ? 'col-auto' : 'col-auto' ?>">
                                                    <div class="row locvieclam__row6 align-items-center">
                                                        <div class="col-auto align-items-center d-inline-flex">
                                                            <div class="locvieclam__box1__item__bg1">
                                                                <img src="<?= $v1['src1'] ?>" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <span class="locvieclam__box1__item__txt1 <?= (($k1 == 2) && $v['time']) ? 'text-danger' : '' ?>"><?= (($k1 == 2) && $v['time']) ? 'Đang cập nhật' : $v1['title1'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!--Pagination-->
                    <nav aria-label="Page navigation example">
                        <ul class="locvieclam__pagination pagination justify-content-center justify-content-md-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Sau</a>
                            </li>
                        </ul>
                    </nav>
                    <!--/Pagination-->
                </div>
                <!--/content-->

                <!--sidebar-->
                <div class="col-md-3 order-md-first d-none d-md-block">

                    <!--Lọc theo mức lương-->
                    <div class="card locvieclam__card">
                        <div class="card-header locvieclam__card__header">
                            <span class="locvieclam__card__header__txt">Lọc theo mức lương</span>
                        </div>
                        <div class="card-body locvieclam__card__body">
                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                    <option>Chọn mức lương</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <div class="locvieclam__card__body__btnBox">
                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow1.png" alt="">
                                    <div class="row locvieclam__row14 align-items-center">
                                        <div class="col-auto">
                                            <div class="locvieclam__card__body__btnBox__bg">
                                                <img src="images/save-money.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Lọc theo mức lương-->

                    <!--Lọc theo cấp bậc-->
                    <div class="card locvieclam__card">
                        <div class="card-header locvieclam__card__header">
                            <span class="locvieclam__card__header__txt">Lọc theo cấp bậc</span>
                        </div>
                        <div class="card-body locvieclam__card__body">
                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                    <option>Chọn cấp bậc</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <div class="locvieclam__card__body__btnBox">
                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow1.png" alt="">
                                    <div class="row locvieclam__row14 align-items-center">
                                        <div class="col-auto">
                                            <div class="locvieclam__card__body__btnBox__bg">
                                                <img src="images/rank.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Lọc theo cấp bậc-->

                    <!--Loại hình công việc-->
                    <div class="card locvieclam__card">
                        <div class="card-header locvieclam__card__header">
                            <span class="locvieclam__card__header__txt">Loại hình công việc</span>
                        </div>
                        <div class="card-body locvieclam__card__body">
                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                    <option>Loại hình công việc</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <div class="locvieclam__card__body__btnBox">
                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow1.png" alt="">
                                    <div class="row locvieclam__row14 align-items-center">
                                        <div class="col-auto">
                                            <div class="locvieclam__card__body__btnBox__bg">
                                                <img src="images/portfolio.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Loại hình công việc-->

                    <!--Kinh nghiệm làm việc-->
                    <div class="card locvieclam__card">
                        <div class="card-header locvieclam__card__header">
                            <span class="locvieclam__card__header__txt">Kinh nghiệm làm việc</span>
                        </div>
                        <div class="card-body locvieclam__card__body">
                            <div class="position-relative" uk-form-custom="target: > * > * > * > span;">
                                <select class="locvieclam__card__body__select form-control" id="exampleFormControlSelect1">
                                    <option>Kinh nghiệm làm việc</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <div class="locvieclam__card__body__btnBox">
                                    <img class="locvieclam__card__body__btnBox__arrow" src="images/arrow1.png" alt="">
                                    <div class="row locvieclam__row14 align-items-center">
                                        <div class="col-auto">
                                            <div class="locvieclam__card__body__btnBox__bg">
                                                <img src="images/candidate.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span class="txtSelect line-clamp-1 locvieclam__card__body__txt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Kinh nghiệm làm việc-->

                    <!--Việc làm hot-->
                    <div class="card locvieclam__card">
                        <div class="card-header locvieclam__card__header">
                            <span class="locvieclam__card__header__txt">Việc làm hot</span>
                        </div>
                        <div class="card-body locvieclam__card__body">
                            <div class="row locvieclam__row6">
                                <?php
                                $data = array(
                                    'Kế Toán',
                                    'Nhân viên kinh doanh',
                                    'Bán hàng parttime ',
                                    'Telesale',
                                    'Android App Developer',
                                    'AngularJS Web Developer',
                                    'Bridge Engineer',
                                    'C++ Developer',
                                );
                                foreach ($data as $k => $v): ?>
                                    <div class="col-auto">
                                        <a href="" class="locvieclam__card__body__tags btn btn-outline-secondary"><?= $v ?></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!--/Việc làm hot-->
                </div>
                <!--/sidebar-->
            </div>
        </div>
        <div>
            <div class="locvieclam__box5__item">
                <h5 class="locvieclam__box5__item__title">Chức danh:</h5>
                <p class="locvieclam__box5__item__desc">Nhân Viên Kinh Doanh  Nhân Viên Bán Hàng  Nhân Viên Phụ Bán Hàng  Chuyên Viên Tư Vấn  Nhân Viên Bán  Nhân Viên Tư Vấn  Chuyên Viên Kinh Doanh  Trưởng Phòng Kinh Doanh  Trưởng Nhóm Kinh Doanh  Nhân Viên Kế Toán</p>
            </div>
            <div class="locvieclam__box5__item">
                <h5 class="locvieclam__box5__item__title">Việc làm liên quan:</h5>
                <p class="locvieclam__box5__item__desc">Nhân viên kế toán  Nhân viên thị trường  Nhân viên bán hàng  Nhân viên văn phòng  Kinh doanh thức ăn chăn nuôi  Trang trại chăn nuôi  Lao động phổ thông  Nhân viên kinh doanh phân phối  Nhân viên hành chính  Thức ăn chăn nuôi  Nhân viên kinh doanh bất động sản  Nhân viên mua hàng  Nhân viên kinh doanh ô tô  Nhân viên kinh doanh thức ăn  Thực tập sinh marketing online</p>
            </div>
            <div class="locvieclam__box5__item">
                <h5 class="locvieclam__box5__item__title">Địa điểm:</h5>
                <p class="locvieclam__box5__item__desc">Hà Nội  Hồ Chí Minh  Đà Nẵng  Bình Dương  Hải Phòng  Đồng Nai  Bắc Ninh  Cần Thơ  Bà Rịa Vũng Tàu  Thái Nguyên</p>
            </div>
            <div class="locvieclam__box5__item">
                <h5 class="locvieclam__box5__item__title">Công ty:</h5>
                <p class="locvieclam__box5__item__desc">Công ty tnhh bảo hiểm nhân thọ prudential việt nam bộ phận hợp tác kinh  Công ty cổ phần bán lẻ kỹ thuật số FPT  Công ty tnhh bảo hiểm nhân thọ aia  Công ty tnhh manulife  Công ty tnhh bảo hiểm nhân thọ aviva việt nam  Công ty fpt telecom  Công ty tnhh bảo hiểm nhân thọ bidv metlife  Công ty cổ phần truyền thông kim cương  Công ty cổ phần anh ngữ apax  Công ty cổ phần giáo dục đại dương</p>
            </div>
            <div class="locvieclam__box5__item">
                <h5 class="locvieclam__box5__item__title">Phỏng vấn:</h5>
                <p class="locvieclam__box5__item__desc">Câu hỏi phỏng vấn hành vi; 10 câu hỏi phỏng vấn thông dụng; cách trả lời câu hỏi phỏng vấn mở, Phương pháp trả lời phỏng vấn STAR</p>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>