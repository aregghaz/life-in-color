<style>
    #headerLogo {
        color: #92ce0a;
    }

    .page1 .text1 {
        padding-top: 42px;
        color: #92ce0a;
    }

    .btn-danger {
        background-color: #92ce0a;
    !important;
        background-image: -webkit-linear-gradient(top, #92ce0a 0, #92ce0a 100%);
    !important;
        border-color: #92ce0a;
    }

    .btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover, .btn-danger:active.focus, .btn-danger:active:focus, .btn-danger:active:hover, .open > .dropdown-toggle.btn-danger.focus, .open > .dropdown-toggle.btn-danger:focus, .open > .dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #92ce0a;
    !important;
        border-color: #92ce0a;
    !important;
    }

    .btn-danger:focus, .btn-danger:hover {
        background-color: #92ce0a;
    !important;
        background-position: 0 -15px;
    }

    .socials a {
        background-color: #92ce0a;
    !important;
    }

    #futterSrong {
        color: #92ce0a;
    !important;
    }

    #carussel_header {
        color: #92ce0a;
    !important;
    }

    .thumbnail {
        height: 330px;
    }

    .page-header {
        margin: 10px 0 10px;
    !important;
    }
</style>
<div class="main">
    <!--==============================Content=================================-->
    <div class="container_12">
        <!--==============================Header slider=================================-->
        <div class="grid_8">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php echo base_url() ?>/images/indexC/1.jpg" alt="Մասնակցություն">
                        <div class="flex-caption">
                            <p class="header_slider">Counseling</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>/images/indexC/2.jpg" alt="Աջակցություն">
                        <div class="flex-caption c2">
                            <p class="header_slider">Support</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>/images/indexC/3.jpg" alt="հարմարեցում">
                        <div class="flex-caption c3">
                            <p class="header_slider">Adaptation</p>
                        </div>
                    </li>
                </ul>
            </div>
            <span id="responsiveFlag"></span>
        </div>
        <!--==============================end Header slider=================================-->
        <div class="grid_4">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/life-in-color/application/views/donationEN.php' ?>

        </div>

        <div class="clear"></div>
        <!--==============================Thumbnail labelOUR MISSION================================-->
        <div class="grid_3">
            <div class="block2 maxheight">
                <div class="title">OUR MISSION</div>
                <div class="pad" id="asdd">
                    Occupational Therapy's dissemination and development on the whole territory of the Republic of
                    Armenia.
                    <button type="button" class="alright btn btn-link" data-toggle="modal"
                            data-target=".bs-111-modal-lg">
                        Read More
                    </button>
                </div>
            </div>
        </div>
        <!--==============================end Thumbnail labelOUR MISSION================================-->
        <!--==============================iframe OUR MISSION================================-->
        <div class="modal fade bs-111-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="page-header"><strong class="read-more">Organization's goals</strong></div>
                    <p>
                        • Occupational Therapy's dissemination and development on the whole territory of the Republic of
                        Armenia, and cooperation with related disciplines in the areas of social – health care and
                        education.<br>
                        • Development of the profession and its growth in the field of education.<br>
                        • Establishment and maintenance of a professional ethical code.<br>
                        • Conducting scientific research and ensuring their application in practice.<br>
                        • Organizing conferences, seminars, round tables, and camping.<br>

                    </p>
                </div>
            </div>
        </div>
        <!--==============================end iframe ՄԵՐ ԱՌԱՔԵԼՈՒԹՅՈՒՆԸ================================-->

        <!--==============================Thumbnail label ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐՐ================================-->
        <div class="grid_3">
            <div class="block2 maxheight">
                <div class="title">Founding members</div>
                <div class="pad" id="asd">
                    <p>
                        Zaruhi Harutyunyan<br>
                        Marianna Harutyunyan<br>
                        Liliya Osipova<br>
                        Arev Babasyan<br>
                        Vardine Sahakyan<br>
                        Anna Stepanyan<br>
                    </p>
                    <button type="button" class="alright btn btn-link" data-toggle="modal"
                            data-target=".bs-44-modal-lg">
                        Read More
                    </button>
                </div>
            </div>
        </div>
        <!--==============================end Thumbnail label ՎԵՐՋԻՆ ԾՐԱԳՐԵՐ================================-->


        <!--==============================iframe ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐ================================-->
        <div class="modal fade bs-44-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content alert alert-success">
                    <div class="page-header"><strong class="read-more">Founding members</strong></div>
                    <div class="row ">
                        <?php if ($members) { ?>
                            <?php foreach ($members as $item): ?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail alert alert-success">
                                        <img src="<?php echo base_url() ?>/<?= $item['link'] ?>"
                                             alt="<?= $item['nameEN'] ?>" class="img-circle" width="200" height="200"
                                             title="<?= $item['nameEN'] ?>">
                                        <div class="caption">
                                            <h3><?= $item['nameEN'] ?></h3>
                                            <p><?= $item['jobEN'] ?></p>
                                            <button class="alright btn btn-link" data-toggle="modal"
                                                    data-target=".bs-<?= $item['id'] ?>-modal-lg" role="button">
                                                Read More
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        <? }; ?>
                    </div>

                </div>
            </div>
        </div>
        <!--==============================end iframe ՎԵՐՋԻՆ ԾՐԱԳՐԵՐ================================-->
        <!--==============================iframe ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐ rezumes================================-->
        <?php if ($members) { ?>
            <?php foreach ($members as $item): ?>
                <div class="modal fade bs-<?= $item['id'] ?>-modal-lg" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="page-header"><strong class="read-more"><?= $item['nameEN'] ?></strong></div>

                            <p><?= $item['textEN'] ?></p>

                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        <? }; ?>
        <!--============================== end iframe ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐ rezumes================================-->


        <!--==============================Thumbnail label ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ================================-->
        <div class="grid_3">
            <div class="block2 maxheight">
                <div class="title">PUBLICATIONS</div>
                <div class="pad">
                    Boetosit amet est el,mmodo venenatis eros. Musce ng quam id risus sagittisnel monsequat lacusut tinn
                    sodales arcuisqut
                    <button type="button" class="alright btn btn-link" data-toggle="modal"
                            data-target=".bs-333-modal-lg">
                        Read More
                    </button>
                </div>
            </div>
        </div>
        <!--==============================end Thumbnail label ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ================================-->
        <!--==============================iframe PUBLICATIONS=================================-->
        <div class="modal fade bs-333-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="page-header"><strong class="read-more">PUBLICATIONS</strong></div>
                    <p>արումը, ինչպես նաև կանխարգելելու հիվանդությունների զարգացումը, խթանելու հարմարվողականությունը
                        կյանքի փոփոխություններին: Մասնագիտությունը կոչված է կազմակերպելու վերականգնողական միջոցառումներ,
                        որոնք օգնում են անհատներին լինել առավել անկախ իրենց աշխատանքում, ժամանցում և հանգստում:
                        Էրգոթերապիան օգնում է ֆիզիկական, մտավոր և հոգեկան սահմանափակումներով անձանց ապրել անկախ և առավել
                        արդյունավետ կյանքով:</p>
                </div>
            </div>
        </div>
        <!--==============================end iframe ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ=================================-->
        <!--==============================Thumbnail label PUBLICATIONS===============================-->
        <div class="grid_3">
            <div class="block2 maxheight">
                <div class="title">honorary members</div>
                <div class="pad">Hanneke van Bruggen, Professor, Occupational Therapist, Honored Doctor of the
                    University of Brighton UK, Creator and former director of the European ....
                    <button type="button" class="alright btn btn-link" data-toggle="modal"
                            data-target=".bs-444-modal-lg">
                        Read More
                    </button>
                </div>
            </div>
        </div>
        <!--==============================end Thumbnail label ՄԱՍՆԱԿՑԵԼ================================-->
        <!--==============================iframe ՄԱՍՆԱԿՑԵԼ=================================-->
        <div class="modal fade bs-444-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="page-header"><strong class="read-more">honorary members</strong></div>
                    <img src="<?php echo base_url() ?>/images/indexC/hen.JPG" style="float:left; margin-right: 15px"
                         alt="">
                    <p> Hanneke van Bruggen, Professor, Occupational Therapist, Honored Doctor of the University of
                        Brighton, UK, Creator and former director of the European Occupational Therapy Network in Higher
                        Education (ENOTHE).
                        Hanneke van Bruggen has been an occupational therapist since 1969. In 1975 she started her
                        career as a teacher of Occupational Therapy and in 1980 she became the manager of the OT
                        Educational Institute in Amsterdam. From 1987 - 1994 she was Head of the OT department of this
                        institute. In 1994 she became the co-ordinator of International Affairs for the Allied Health
                        departments of the Hogeschool van Amsterdam.
                        She was the co-founder of both COTEC (Council of Occupational Therapists for the European
                        Countries) and of ENOTHE (European Network of Occupational Therapists in Higher Education).
                        After her period as board member of ENOTHE she became executive director in 2001. In ENOTHE Mrs.
                        Van Bruggen initiated a great number of successful European projects, which resulted in many
                        publications. She was project leader of the OT Tuning Project team.
                        Mrs. Van Bruggen has developed many OT programmes in the eastern European countries and gave a
                        great boost to both Occupational Therapy practice and education. Mrs. Van Bruggen is an Honorary
                        Member of the Dutch OT Association EN (Ergotherapie Nederland), Fellow of the WFOT (World
                        Federation of Occupational Therapists) and was awarded an Honorary Doctor of Science by the
                        University of Brighton.
                        On October the 26th 2012, the Professor Hanneke van Bruggen received the Gold Medal of
                        Occupational Therapy (OT) 2012, awarded by the Faculty of Health Sciences of University of A
                        Coruña and the Galician Professional Association of Occupational Therapists, Spain. In 2014, she
                        was awarded the title of honorary member of Armenian Ergoterapist’s Association.
                        Thanks to Mrs. Hanneke’s effort Occupational Therapy was eastablished in Armenia, Georgia and
                        many other countries. Now it becomes more and more popular profession day by day. She is a great
                        teacher, a person whose sample always show strong spirituality, goal orientation and readiness
                        to overcome difficulties. Working with her is to understand the potential of the individuals,
                        groups and communities we are advantaged to go hand in hand to. She is always there for support.
                        Her efforts are priceless!

                    </p>
                </div>
            </div>
        </div>
        <!--==============================end iframe ՄԱՍՆԱԿՑԵԼ=================================-->
        <div class="clear"></div>
        <!--==============================Footer slider=================================-->
        <div class="grid_12">
            <h2 id="carussel_header">Activities of the Association members.</h2>
            <div id="owl">
                <div class="item">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/ZaruhiHarutyunyan.jpg" width="190"
                                     height="183" alt="Զարուհի Հարությունյան">Zaruhi Harutyunyan<br>
                        Specialized children's home of Kharberd</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/MariannaHarutyunyan.JPG" width="190"
                                     height="183" alt="Մարիաննա Հարությունյան">Marianna Harutyunyan<br>
                        Agency of Medical and Social Expertises of RA</a>
                </div>
                <div class="item it2" id="itT">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/TatevGhazaryan.jpg" width="190"
                                     height="183" alt="Տաթև Ղազարյան">Tatevik Ghazaryan<br>
                        Full life NGO</a>
                </div>
                <div class="item it3">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/rimagalastyan.JPG" width="190"
                                     height="183" alt="Ռիմա Գալստյան">Ռիմա Գալստյան<br>
                        My way NGO</a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/AnahitSafaryan.JPG" width="190"
                                     height="183" alt="Անահիտ Սաֆարյան">Anahit Safaryan<br>
                        ArBes health care center</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="<?php echo base_url() ?>images/people/ruzanXacikyan.jpg" width="190"
                                     height="183" alt="Ռուզան Խաչիկյան">Ռուզան Խաչիկյան<br>
                        My way NGO</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/LilitNazayan.jpg" width="190"
                                     height="183" alt="Լիլիթ Նազարյան">Lilit Nazaryan<br>
                        Specialized children's home of Kharberd</a>
                </div>
                <div class="item it3" id="itM">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/MeriAvetisyan.jpg" width="190"
                                     height="183" alt="Մերի Ավետիսյան">Meri Avetisyan<br>
                        Full life NGO</a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/MuradyanNarine.jpg" width="190"
                                     height="183" alt="Narine Muradyan">Narine Muradyan<br>
                        TMM teach me more</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="<?php echo base_url() ?>images/people/MariamMargaryan.jpg" width="190"
                                     height="183" alt="Mariam Margaryan">Mariam Margaryan<br>
                        Armenak and Anna Tadevossian's Medical Center</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="<?php echo base_url() ?>images/people/Maneabajanyan.jpg" width="190"
                                     height="183" alt="Մանե Աբաջյան">Mane Abagyan<br>
                        Yerevan medical-psychological-pedagogical assessment center</a>
                </div>
                <div class="item it3">
                    <a href="#"><img src="<?php echo base_url() ?>images/people/ArevikManukyan.jpg" width="190"
                                     height="183" alt="Արևիկ Մանուկյան">Arevik Manukyan<br>
                        Armenak and Anna Tadevossian's Medical Center </a>
                </div>
            </div>
        </div>
        <!--==============================end Footer slider=================================-->
        <div class="clear"></div>
        <!--==============================Footer slider=================================-->
        <div class="grid_12" id="owl2Carussel">
            <div id="owl2">
                <div class="item">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/GayaneHovhannisyan.JPG" width="190"
                                     height="183" alt="Գայանե Հովհաննիսյան">Gayane Hovhannisyan<br>
                        Specialized children's home of Kharberd</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/Elinamirzoyan.jpg" width="190"
                                     height="183" alt="Էլինա ՄԻրզոյան">Eliza Mirzoyan<br>
                        Private sector Luxembourg</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/MeriPetrosyan.JPG" width="190"
                                     height="183" alt="Մերի Պետրոսյան">Meri Petrosyan<br>
                        My way NGO</a>
                </div>
                <div class="item it3">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/InessaHautyunyan.JPG" width="190"
                                     height="183" alt="Ինեսսա Հարոթյունյան">Inessa Harutyunyan<br>
                        My way NGO</a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/LilitAraqelyan.JPG" width="190"
                                     height="183" alt="Լիլիթ Առաքելյան">Lilit Araqelyan<br>
                        Arabkir medical center</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/TatevikNesisyan.JPG" width="190"
                                     height="183" alt="Տաթևիկ Ներսիսյան">Tatevik Nersisyan<br>
                        ArBes health care center</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/ruzanhovhannisyan.JPG" width="190"
                                     height="183" alt="Ռուզան Հովհաննիսյան">Ռուզան Հովհաննիսյան<br>
                        My way NGO</a>
                </div>
                <div class="item it3">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/GayaneOhanyan.jpg" width="190"
                                     height="183" alt="Գայանե ՕՀանյան">Gayane Ohanyan<br>
                        Prkutyun NGO</a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/SedaMIzoyan.jpg" width="190"
                                     height="183" alt="ՍԵդա Միրոյան">Seda Miroyan<br>
                        9 child polyclinics</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/TatevSerobyan.jpg" width="190"
                                     height="183" alt="Տաթև Սերոբյան">Tatevik Serobyan<br>
                        92 Kindergarden</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="<?php echo base_url() ?>/images/people/LiliaOsipova.jpg" width="190"
                                     height="183" alt="Լիլիա Օսիպովա">Lilit Osipova<br>
                        Private sector Armenia</a>
                </div>
            </div>
        </div>
        <!--==============================end Footer slider=================================-->

    </div>
