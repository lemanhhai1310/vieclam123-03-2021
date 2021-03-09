<?php $data["title"] = "Home"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__block1">
    <div class="container">
        <div class="home__block1__header">
            <div class="row align-items-center">
                <div class="col">
                    <span class="text-uppercase home__block1__header__txt">Việc làm tuyển gấp</span>
                </div>
                <div class="col-auto">
                    <a href="" class="home__block1__header__link">Xem tất cả >></a>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block">
            <div class="slide1 owl-carousel owl-theme">
                <div class="item">
                    <?php
                    $data = array(
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBK3NuREE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ae5b57b9c24bd7e87579d1898a7bdc222b30a575/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/isobar-commerce-bluecom-solutions-logo.jpg',
                            'title' => '(HCM) Quality control/Tester',
                            'namecty' => 'Isobar Commerce (Bluecom Solutions)',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBeDRhRFE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--aabdb5c33966c4b0bdb81a27b6a3e4c3e1f5e686/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/global-insurance-corporation-logo.jpg',
                            'title' => 'Business Analyst (BA)',
                            'namecty' => 'Global Insurance Corporation',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOEk0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ad2a90a5339c2759d575b8fbf28d83758cddf4d6/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/pvcombank-logo.png',
                            'title' => 'Chuyên viên Phân tích dữ liệu và báo cáo',
                            'namecty' => 'PVcomBank',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNERRRmc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--accd0e1ff6fd4ae14c9225d02e7071b4ccc3bdf2/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/12.png',
                            'title' => 'AI Engineer (C/C++, Python) Up to $2500',
                            'namecty' => 'Techvico',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNERRRmc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--accd0e1ff6fd4ae14c9225d02e7071b4ccc3bdf2/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/12.png',
                            'title' => 'Embedded Dev (C/C++/ Python) Up to $2000',
                            'namecty' => 'Techvico',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBM2J2RlE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--b964572c3a0da82c53aa560c239a1798dbfda57b/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/logo%201.jpg',
                            'title' => 'IT System Admin (Cloud, AWS, SaaS)',
                            'namecty' => 'Vietjetair',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMU1NR1E9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--4190f2ea8a66ae47e5002da60682dc975040bf7b/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/MoMo%20Logo.png',
                            'title' => 'Mobile Dev (React Native - Android/iOS)',
                            'namecty' => 'M_Service (MoMo)',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBekYzR1E9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--d681b5445fb2b8fe2efae4e9c08483d4792ca1f5/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/logo%20VietED.png',
                            'title' => 'Senior Automation Tester (QA QC)',
                            'namecty' => 'VietED | Cty CP Công nghệ Giáo dục thông minh',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBemM1RHc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--a4461eacc5ccb701d3361d9ac38e6bf28f8b4303/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/3forcom-logo.png',
                            'title' => 'Front-end Developer (ReactJS)',
                            'namecty' => '3FORCOM',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMGdjRUE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--3ce98a0b200304373f643e46791110ab15b32726/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/dinovative-logo.png',
                            'title' => 'Backend NodeJS Developer (Junior/Middle)',
                            'namecty' => 'Dinovative',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div class="home__block1__item">
                            <div class="row home__block1__item__row">
                                <div class="col-auto">
                                    <div class="home__block1__item__bg" style="background-image: url(<?= $v['src'] ?>)"></div>
                                </div>
                                <div class="col">
                                    <div class="home__block1__item__txt1 line-clamp-1"><a href=""><?= $v['title'] ?></a></div>
                                    <div class="home__block1__item__txt2"><?= $v['namecty'] ?></div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="home__block1__item__txt3">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                <span>15 - 20 triệu</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="home__block1__item__txt3">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <span>Hồ Chí Minh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="item">
                    <?php
                    $data = array(
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBM0tFRUE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--32dfada14b55b97569bba5a3f774c778443d4f03/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/PP%20Colored%20Logo%2020190.png',
                            'title' => 'Backend Developer (Python)',
                            'namecty' => 'Parcel Perform',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBM3QzRWc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--2b3d221ab20c5a36a36de64d49a53df27aac02df/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/Logo-LOTUS-APP_email_v1.jpg',
                            'title' => 'Senior Backend Blockchain Developer',
                            'namecty' => 'LOTUS APP',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBN3dvREE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--945efb2631cdc42ca1eae527cc42c8e62a40695f/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/robert-bosch-engineering-and-business-solutions-logo.jpg',
                            'title' => 'Embedded Platform Development',
                            'namecty' => 'Robert Bosch Engineering And Business Solutions',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNFZ3RHc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--212b3472e55e3feae2d356ee8119e5659a3f527c/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/relia-systems-logo.png',
                            'title' => '3 .NET Developers (ASP.NET MVC, AWS)',
                            'namecty' => 'Relia Systems',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBd1VyREE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--4592716b93a93ff3ebdda785b7d8952d19d6198f/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJVUU1SEJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d14c81992e54b8fe39b4f22017b9c72f4b5e306b/dai-ichi-life-vi-t-nam-logo.PNG',
                            'title' => '08 Business Analyst (SQL, English)',
                            'namecty' => 'Dai-ichi Life Việt Nam',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBN28xREE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--8f513491454fe98433ddbe1bce5bfdec7d5a6595/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/maruweb-viet-nam-logo.jpg',
                            'title' => 'PHP Developers',
                            'namecty' => 'Maruweb Viet Nam',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNEU3RVE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--6d3ebb6f1e1634c2c91f4edec30a932012bd3ead/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/anh%201.png',
                            'title' => 'Mid/Sr Java Developer (Spring, MySQL)',
                            'namecty' => 'Ominext',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBd281RVE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--92221df03df2833de8f18c6dd8731ba5a0de1aba/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/67406510_510367626367240_6121114921276014592_n.jpg',
                            'title' => 'Jr/Sr Games Developer (Unity/JavaScript)',
                            'namecty' => 'Công Ty Cổ Phần Sundata',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBM0c5RFE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--eefa667eb1662a1b54e286b2f54509187155fd67/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/tomosia-logo.png',
                            'title' => 'Ruby on Rails Developers (Backend)',
                            'namecty' => 'TOMOSIA Việt Nam',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNUhRRUE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--1c5ddefd13b743aafa79f3bd6cd8148ae9727e9f/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/logoDSV.png',
                            'title' => 'Business Analyst Leader (Big data, SQL)',
                            'namecty' => 'DAC Data Science Vietnam',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div class="home__block1__item">
                            <div class="row home__block1__item__row">
                                <div class="col-auto">
                                    <div class="home__block1__item__bg" style="background-image: url(<?= $v['src'] ?>)"></div>
                                </div>
                                <div class="col">
                                    <div class="home__block1__item__txt1 line-clamp-1"><a href=""><?= $v['title'] ?></a></div>
                                    <div class="home__block1__item__txt2"><?= $v['namecty'] ?></div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="home__block1__item__txt3">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                <span>15 - 20 triệu</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="home__block1__item__txt3">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <span>Hồ Chí Minh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="item">
                    <?php
                    $data = array(
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNUhRRUE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--1c5ddefd13b743aafa79f3bd6cd8148ae9727e9f/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/logoDSV.png',
                            'title' => 'Business Analyst Leader (Big data, SQL)',
                            'namecty' => 'DAC Data Science Vietnam',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMmhqR1E9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--e65f2fcbfdb5a69f33d0be983b385a4f5573cbe3/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/logo%20crossian.png',
                            'title' => '.NET Developer (C#, .NET Core, ASP.NET)',
                            'namecty' => 'Crossian',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOEk0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ad2a90a5339c2759d575b8fbf28d83758cddf4d6/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/pvcombank-logo.png',
                            'title' => 'DevOps Engineer ~1200$',
                            'namecty' => 'PVcomBank',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOEk0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ad2a90a5339c2759d575b8fbf28d83758cddf4d6/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/pvcombank-logo.png',
                            'title' => 'Java,J2EE/Webservices/ESB/Mobile Banking',
                            'namecty' => 'PVcomBank',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOEk0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ad2a90a5339c2759d575b8fbf28d83758cddf4d6/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/pvcombank-logo.png',
                            'title' => 'Lập trình Viên Java/ReactJS/Spring',
                            'namecty' => 'PVcomBank',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMmhqR1E9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--e65f2fcbfdb5a69f33d0be983b385a4f5573cbe3/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/logo%20crossian.png',
                            'title' => 'Tester (QA QC)',
                            'namecty' => 'Crossian',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMmhqR1E9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--e65f2fcbfdb5a69f33d0be983b385a4f5573cbe3/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/logo%20crossian.png',
                            'title' => 'Business Analyst (Agile)',
                            'namecty' => 'Crossian',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBd2N0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--41002b25c9d8c9933493a8e28ea3d0cb469b3141/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/home-credit-vietnam-ppf-logo.png',
                            'title' => 'Test Engineer (Manual & Automation)',
                            'namecty' => 'Home Credit Vietnam',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBeC9jRkE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--6ddaf91b50a073f1b9e7c821b12cde05c831038f/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/Logo%20tuyển%20dụng.jpg',
                            'title' => 'Triển khai giải pháp & DV Bảo Mật (Java)',
                            'namecty' => 'SAVIS Vietnam',
                        ),
                        array(
                            'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBeC9jRkE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--6ddaf91b50a073f1b9e7c821b12cde05c831038f/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--e48ed52d99e56a5ff9747052d860ea1b318b2d76/Logo%20tuyển%20dụng.jpg',
                            'title' => 'TK Hạ tầng/ IT support (System Admin)',
                            'namecty' => 'SAVIS Vietnam',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div class="home__block1__item">
                            <div class="row home__block1__item__row">
                                <div class="col-auto">
                                    <div class="home__block1__item__bg" style="background-image: url(<?= $v['src'] ?>)"></div>
                                </div>
                                <div class="col">
                                    <div class="home__block1__item__txt1 line-clamp-1"><a href=""><?= $v['title'] ?></a></div>
                                    <div class="home__block1__item__txt2"><?= $v['namecty'] ?></div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="home__block1__item__txt3">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                <span>15 - 20 triệu</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="home__block1__item__txt3">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <span>Hồ Chí Minh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="d-block d-md-none">
            <?php
            $data = array(
                array(
                    'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNUhRRUE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--1c5ddefd13b743aafa79f3bd6cd8148ae9727e9f/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/logoDSV.png',
                    'title' => 'Business Analyst Leader (Big data, SQL)',
                    'namecty' => 'DAC Data Science Vietnam',
                ),
                array(
                    'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMmhqR1E9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--e65f2fcbfdb5a69f33d0be983b385a4f5573cbe3/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/logo%20crossian.png',
                    'title' => '.NET Developer (C#, .NET Core, ASP.NET)',
                    'namecty' => 'Crossian',
                ),
                array(
                    'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOEk0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ad2a90a5339c2759d575b8fbf28d83758cddf4d6/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/pvcombank-logo.png',
                    'title' => 'DevOps Engineer ~1200$',
                    'namecty' => 'PVcomBank',
                ),
                array(
                    'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOEk0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ad2a90a5339c2759d575b8fbf28d83758cddf4d6/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/pvcombank-logo.png',
                    'title' => 'Java,J2EE/Webservices/ESB/Mobile Banking',
                    'namecty' => 'PVcomBank',
                ),
                array(
                    'src' => 'https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBOEk0REE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ad2a90a5339c2759d575b8fbf28d83758cddf4d6/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RTNKbGMybDZaVjloYm1SZmNHRmtXd2RwUm1sRyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--d55b6722f71e82d147ad94b8445be27797820f9f/pvcombank-logo.png',
                    'title' => 'Lập trình Viên Java/ReactJS/Spring',
                    'namecty' => 'PVcomBank',
                ),
            );
            foreach ($data as $k => $v): ?>
                <div class="home__block1__item">
                    <div class="row home__block1__item__row">
                        <div class="col-auto">
                            <div class="home__block1__item__bg" style="background-image: url(<?= $v['src'] ?>)"></div>
                        </div>
                        <div class="col">
                            <div class="home__block1__item__txt1 line-clamp-1"><a href=""><?= $v['title'] ?></a></div>
                            <div class="home__block1__item__txt2"><?= $v['namecty'] ?></div>
                            <div class="row">
                                <div class="col">
                                    <div class="home__block1__item__txt3">
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                        <span>15 - 20 triệu</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="home__block1__item__txt3">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Hồ Chí Minh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="text-right"><a href="">Xem thêm >></a></div>
        </div>
        <script>
          $('.slide1').owlCarousel({
            loop:true,
            margin:57,
            nav:false,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:2
              },
              1000:{
                items:2
              }
            }
          })
        </script>
    </div>
</div>
<div class="home__block2 position-relative" style="background-image: url('images/bg_taocv.png')">
    <div class="home__block2__box1"></div>
    <div class="home__block2__box2 position-relative">
        <div class="container">
            <div class="text-center">
                <div class="text-uppercase home__block2__box2__txt1">TẠO CV CHỈ TRONG 3 BƯỚC</div>
                <div class="home__block2__box2__txt2">Giúp ứng viên tạo CV nhanh chóng và dễ dàng hơn !!!</div>
                <a href="" class="btn btn-secondary home__block2__box2__btn">Tạo CV Ngay</a>
            </div>
        </div>
    </div>
</div>
<div class="home__block3">
    <div class="container">
        <div class="home__block3__margin34">
            <div class="row home__block3__row15">
                <div class="col-md-6">
                    <div class="home__block1__header">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="text-uppercase home__block1__header__txt">Việc làm lương cao</span>
                            </div>
                        </div>
                    </div>
                    <div class="home__block3__body">
                        <?php for ($i=1;$i<=20;$i++): ?>
                            <div class="home__block1__item">
                                <div class="row home__block1__item__row">
                                    <div class="col-auto">
                                        <div class="home__block1__item__bg" style="background-image: url('https://cdn.itviec.com/employers/fpt-software/logo/s65/mir3HT3xtedbECJY5jVeRRgV/fpt-software-logo.png')"></div>
                                    </div>
                                    <div class="col">
                                        <div class="home__block1__item__txt1 line-clamp-1"><a href="">Microsoft Dynamics Technical Consultant</a></div>
                                        <div class="home__block1__item__txt2">Công ty CP Dịch vụ Bất động sản VietinHouse</div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="home__block1__item__txt3">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                    <span>15 - 20 triệu</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="home__block1__item__txt3">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <span>Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="home__block3__footer text-center">
                        <a href="" class="home__block3__btn btn btn-secondary">Xem tất cả</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="home__block1__header">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="text-uppercase home__block1__header__txt">Việc làm hấp dẫn</span>
                            </div>
                        </div>
                    </div>
                    <div class="home__block3__body">
                        <?php for ($i=1;$i<=20;$i++): ?>
                            <div class="home__block1__item">
                                <div class="row home__block1__item__row">
                                    <div class="col-auto">
                                        <div class="home__block1__item__bg" style="background-image: url('https://cdn.itviec.com/employers/fpt-software/logo/s65/mir3HT3xtedbECJY5jVeRRgV/fpt-software-logo.png')"></div>
                                    </div>
                                    <div class="col">
                                        <div class="home__block1__item__txt1 line-clamp-1"><a href="">Microsoft Dynamics Technical Consultant</a></div>
                                        <div class="home__block1__item__txt2">Công ty CP Dịch vụ Bất động sản VietinHouse</div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="home__block1__item__txt3">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                    <span>15 - 20 triệu</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="home__block1__item__txt3">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <span>Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="home__block3__footer text-center">
                        <a href="" class="home__block3__btn btn btn-secondary">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__block3__margin53">
            <div class="row home__block3__row23">
                <div class="col-md-6">
                    <a href=""><img class="w-100" src="images/Layer624.png" alt=""></a>
                </div>
                <div class="col-md-6">
                    <a href=""><img class="w-100" src="images/Layer624.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="home__block3__margin53">
            <div class="row home__block3__row14">
                <div class="col-md-6">
                    <div class="home__block1__header">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="text-uppercase home__block1__header__txt">Việc làm mới nhất</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php for ($i=1;$i<=5;$i++): ?>
                            <div class="home__block1__item">
                                <div class="row home__block1__item__row">
                                    <div class="col-auto">
                                        <div class="home__block1__item__bg" style="background-image: url('https://cdn.itviec.com/employers/fpt-software/logo/s65/mir3HT3xtedbECJY5jVeRRgV/fpt-software-logo.png')"></div>
                                    </div>
                                    <div class="col">
                                        <div class="home__block1__item__txt1 line-clamp-1"><a href="">Microsoft Dynamics Technical Consultant</a></div>
                                        <div class="home__block1__item__txt2">Công ty CP Dịch vụ Bất động sản VietinHouse</div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="home__block1__item__txt3">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                    <span>15 - 20 triệu</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="home__block1__item__txt3">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <span>Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="home__block3__footer text-center">
                        <a href="" class="home__block3__btn btn btn-secondary">Xem tất cả</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="home__block1__header">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="text-uppercase home__block1__header__txt">Việc làm online</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php for ($i=1;$i<=5;$i++): ?>
                            <div class="home__block1__item">
                                <div class="row home__block1__item__row">
                                    <div class="col-auto">
                                        <div class="home__block1__item__bg" style="background-image: url('https://cdn.itviec.com/employers/fpt-software/logo/s65/mir3HT3xtedbECJY5jVeRRgV/fpt-software-logo.png')"></div>
                                    </div>
                                    <div class="col">
                                        <div class="home__block1__item__txt1 line-clamp-1"><a href="">Microsoft Dynamics Technical Consultant</a></div>
                                        <div class="home__block1__item__txt2">Công ty CP Dịch vụ Bất động sản VietinHouse</div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="home__block1__item__txt3">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                    <span>15 - 20 triệu</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="home__block1__item__txt3">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <span>Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="home__block3__footer text-center">
                        <a href="" class="home__block3__btn btn btn-secondary">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__block3__margin53">
            <h2 class="home__title1 text-center"><span class="text-uppercase">Các Công Ty Hàng Đầu</span></h2>
            <div class="slide2 owl-carousel owl-theme">
                <?php for ($i=0;$i<=10;$i++): ?>
                <div class="item">
                    <div class="home__boxBrand">
                        <img src="https://cdn.itviec.com/employers/fpt-software/logo/s65/mir3HT3xtedbECJY5jVeRRgV/fpt-software-logo.png" alt="">
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            <script>
              $('.slide2').owlCarousel({
                loop:true,
                margin:20,
                nav:true,
                dots: false,
                responsive:{
                  0:{
                    items:3
                  },
                  600:{
                    items:3
                  },
                  1000:{
                    margin:50,
                    items:6
                  }
                }
              })
            </script>
        </div>
        <div class="home__block3__margin53 text-center">
            <h2 class="home__title1 text-center"><span class="text-uppercase">Liên hệ hỗ trợ</span></h2>
            <div class="home__boxHotline">Hotline: <span>0869.154.226</span> hoặc <span>0886.834.293</span></div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>