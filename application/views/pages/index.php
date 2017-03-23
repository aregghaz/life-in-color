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
                            <p class="header_slider">Խորհրդատվություն</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>/images/indexC/2.jpg" alt="Աջակցություն">
                        <div class="flex-caption c2">
                            <p class="header_slider">Աջակցություն</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>/images/indexC/3.jpg" alt="հարմարեցում">
                        <div class="flex-caption c3">
                            <p class="header_slider">հարմարեցում</p>
                        </div>
                    </li>
                </ul>
            </div>
            <span id="responsiveFlag"></span>
        </div>
        <!--==============================end Header slider=================================-->
        <div class="grid_4">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/armeta/application/views/donation.php' ?>

        </div>

        <div class="clear"></div>
        <!--==============================Thumbnail label ՄԵՐ ԱՌԱՔԵԼՈՒԹՅՈՒՆԸ================================-->
        <div class="grid_3">
            <div class="block2 maxheight">
                <div class="title">Մեր նպատակներն</div>
                <div class="pad" id="asdd">
                    Էրգոթերապիայի տարածումը և զարգացումը Հայաստանի Հանրապետության ողջ տարածքում:
                    <button type="button" class="alright btn btn-link" data-toggle="modal"
                            data-target=".bs-33-modal-lg">
                        Կարդալ ավելին
                    </button>
                </div>
            </div>
        </div>
        <!--==============================end Thumbnail label ՄԵՐ ԱՌԱՔԵԼՈՒԹՅՈՒՆԸ================================-->
        <!--==============================iframe ՄԵՐ ԱՌԱՔԵԼՈՒԹՅՈՒՆԸ================================-->
        <div class="modal fade bs-33-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="page-header"><strong class="read-more">Մեր կազմակերութան նպատակներն են՝</strong></div>
                    <p>
                        • էրգոթերապիայի տարածումը և զարգացումը Հայաստանի Հանրապետության ողջ տարածքում և
                        համագործակոություն հարակից մասնագիտությունների ոլորտներում /սոցիալ-առողջապահական և կրթական/<br>
                        • մասնագիտութան զարգացումն ու ընդլայնումը կրթական ոլորտներում<br>
                        • մասնագիտության էթիկական կոդեքսի հիմնադրումը և պահպանումը<br>
                        • Գիտա-հետազոտական աշխատանքների անցկացումը և նրանց կիռարման ապահովումը գործնականում<br>
                        • Կոնֆերանսների, սեմինարների, կլոր սեղանների, քարոզարշավների կազմակերպում<br>

                    </p>
                </div>
            </div>
        </div>
        <!--==============================end iframe ՄԵՐ ԱՌԱՔԵԼՈՒԹՅՈՒՆԸ================================-->


        <!--==============================Thumbnail label ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐՐ================================-->
        <div class="grid_3">
            <div class="block2 maxheight">
                <div class="title">ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐ</div>
                <div class="pad" id="asd">
                    <p style="margin-bottom: 16px;">Զարուհի Հարությունյան<br>
                        Մարիաննա Հարությունյան<br>
                        Լիլիա Օսիպովա<br>
                        Արև Բաբասյան<br>
                        Վարդինե Սահակյան<br>
                        Աննա Ստեփանյան<br>
                    </p>
                    <button type="button" class="alright btn btn-link" data-toggle="modal"
                            data-target=".bs-44-modal-lg">
                        Կարդալ ավելին
                    </button>
                </div>
            </div>
        </div>
        <!--==============================end Thumbnail label ՎԵՐՋԻՆ ԾՐԱԳՐԵՐ================================-->


        <!--==============================iframe ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐ================================-->
        <div class="modal fade bs-44-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content alert alert-success">
                    <div class="page-header"><strong class="read-more">ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐ</strong></div>
                    <div class="row">
                        <?php if ($members) { ?>
                            <?php foreach ($members as $item): ?>
                                <div class="col-sm-6 col-md-4 ">
                                    <div class="thumbnail alert alert-success">
                                        <img src="<?php echo $item['link'] ?>" class="img-circle" width="200"
                                             height="200"
                                             title="<?php echo $item['nameEN'] ?>">
                                        <div class="caption">
                                            <h3><?php echo $item['nameAM'] ?></h3>
                                            <p><?php echo $item['jobAM'] ?></p>
                                            <button class="alright btn btn-link" data-toggle="modal"
                                                    data-target=".bs-<?php echo $item['id'] ?>-modal-lg" role="button">
                                                Կարդալ ավելին
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
                <div class="modal fade bs-<?php echo $item['id'] ?>-modal-lg" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content ">
                            <div class="page-header"><strong class="read-more"><?php echo $item['nameAM'] ?></strong>
                            </div>

                            <div class="well well-lg"><?php echo $item['textAM'] ?></div>

                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        <? }; ?>
        <!--============================== end iframe ՀԻՄՆԱԴԻՐ ԱՆԴԱՄՆԵՐ rezumes================================-->


        <!--==============================Thumbnail label ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ================================-->
        <div class="grid_3">
            <div class="block2 maxheight">
                <div class="title">ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ</div>
                <div class="pad">
                    Boetosit amet est el,mmodo venenatis eros. Musce ng quam id risus sagittisnel monsequat lacusut tinn
                    sodales arcuisqut
                    <button type="button" class="alright btn btn-link" data-toggle="modal"
                            data-target=".bs-55-modal-lg">

                        Կարդալ ավելին
                    </button>
                </div>
            </div>
        </div>
        <!--==============================end Thumbnail label ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ================================-->
        <!--==============================iframe ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ=================================-->
        <div class="modal fade bs-55-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="page-header"><strong class="read-more">ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ</strong></div>
                    <p>արումը, ինչպես նաև կանխարգելելու հիվանդությունների զարգացումը, խթանելու հարմարվողականությունը
                        կյանքի փոփոխություններին: Մասնագիտությունը կոչված է կազմակերպելու վերականգնողական միջոցառումներ,
                        որոնք օգնում են անհատներին լինել առավել անկախ իրենց աշխատանքում, ժամանցում և հանգստում:
                        Էրգոթերապիան օգնում է ֆիզիկական, մտավոր և հոգեկան սահմանափակումներով անձանց ապրել անկախ և առավել
                        արդյունավետ կյանքով:</p>
                </div>
            </div>
        </div>
        <!--==============================end iframe ՀՐԱՊԱՐԱԿՈՒՄՆԵՐ=================================-->
        <!--==============================Thumbnail label ՄԱՍՆԱԿՑԵԼ================================-->
        <div class="grid_3">
            <div class="block2 maxheight">
                <div class="title">Պատվավոր անդամներ</div>
                <div class="pad">
                    <p>Հաննեկե վան Բրյուգգեն, պրոֆեսոր, էրգոթերապիստ, Մեծ Բրիտանիայի Բրայտոնի համալսարանի պատվավոր
                        դոկտոր,Էրգոթերապիայի Բարձրագույն ...</p>
                    <button type="button" class="alright btn btn-link" data-toggle="modal"
                            data-target=".bs-66-modal-lg">
                        Կարդալ ավելին
                    </button>
                </div>
            </div>
        </div>
        <!--==============================end Thumbnail label ՄԱՍՆԱԿՑԵԼ================================-->
        <!--==============================iframe ՄԱՍՆԱԿՑԵԼ=================================-->
        <div class="modal fade bs-66-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="page-header"><strong class="read-more">Պատվավոր անդամներ</strong></div>
                    <img src="<?php echo base_url() ?>/images/indexC/hen.JPG" style="float:left; margin-right: 15px"
                         alt="">
                    <p>Հաննեկե վան Բրյուգգեն, պրոֆեսոր, էրգոթերապիստ, Մեծ Բրիտանիայի Բրայտոնի համալսարանի պատվավոր
                        դոկտոր, Էրգոթերապիայի Բարձրագույն Կրթության Եվրոպական Ցանցի հիմնադիր և նախկին տնօրեն (ԷԲԿԵՑ):
                        Հաննեկե վան Բրյուգգենը 1969թ-ից աշխատել է որպես էրգոթերապիստ: 1975 թ-ին նա սկսել է դասավանդել
                        Էրգոթերապիա և 1980 թ-ին դարձել Ամստերդամում էրգոթերապիայի Կրթական ինստիտուտի ղեկավար: 1987 -
                        1994 թթ. եղել է այս ինստիտուտի էրգոթերապիայի բաժնի ղեկավար: 1994 թ-ին նա նշանակվել է Ամստերդամի
                        բարձրագույն դպրոցի առողջապահական բաժանմունքների միջազգային գործերի համակարգող:
                        Նա եղել է ինչպես Եվրոպական Երկրների Էրգոթերապիստների Խորհրդի (ԵԵԷԽ) այնպես էլ ԷԲԿԵՑ-ի հիմնադիր
                        անդամ: Որոշ ժամանակաշրջան խորհրդի անդամ լինելուց հետո, 2001 թ-ին նա դարձավ ԷԲԿԵՑ-ի գործադիր
                        տնօրեն: ԷԲԿԵՑ-ում տիկին վան Բրյուգգենը կյանքի կոչեց մի շարք հաջողված եվրոպական նախագծեր, որոնք
                        իրենց արծածումը գտան բազմաթիվ հրապարակումներում: Նա եղել է էրգոթերապիայի Tuning ծրագրի թիմի
                        ղեկավար:
                        Տիկին վան Բրյուգգենը զարգացրել է էրգոթերապիայի բազմաթիվ ծրագրեր արևելյան Եվրոպայի տարբեր
                        երկրներում և մեծ խթան հանդիսացել էրգոթերապիայի գործնական և կրթական ոլորտների զարգացման համար: Նա
                        հանդիսանում է Էրգոթերապիստների հոլլանդական ասոցիացիայի պատվավոր անդամ է, անդամակցում է
                        էրգոթերապիստների համաշխարհային ֆեդերացիային (ԷՀՖ) և Բրայտոնի համալսարանի կողմից ստացել է
                        գիտության պատվավոր դոկտորի կոչում:
                        2012 թ-ի հոկտեմբերի 26-ին պրոֆեսոր Հաննեկե վան Բրյուգգենը ստացել է էրգոթերապիայի ոսկե մեդալ
                        (2012), որը շնորհել է նրան Կորունյա համալսարանի բժշկական գիտությունների ֆակուլտետի և Իսպանիայի
                        Էրգոթերապիստների Գալիսերեն մասնագիտական ասոցիացիայի կողմից: 2014 թ-ին նրան շնորհվեց
                        Էրգոթերապիստների Հայկական Ասոցիացիա պատվավոր անդամի կոչում:
                        Շնորհիվ Հաննեկե վան Բրյուգգենի ջանքերի Էրգոթերապիան որպես մասնագիտություն՝ բարձրագույն կրթության
                        մակարդակով, հիմնադրվեց Հայաստանում, Վրաստանում և մի շարք այլ երկրներում: Այժմ, օրեցօր, այս
                        մասնագիտությունը դառնում է ավելի ու ավելի պահանջված: Նա մեծ ուսուցիչ է, անձ, ում օրինակը միշտ
                        ցույց է տալիս ուժեղ ոգու առկայություն, նպատակասլացություն և դժվարությունները հաղթահարելու
                        պատրաստակամություն: Աշխատել նրա հետ նշանակում է հասկանալ այն անհատների, խմբերի և համայնքների
                        ներուժը որոնց կողքին ենք մենք և ում օգնության ձեռք ենք մեկնում: Նա միշտ պատրաստ է օգնել և
                        աջակցել: Նրա ջանքերն անգնահատելի են:
                    </p>
                </div>
            </div>
        </div>
        <!--==============================end iframe ՄԱՍՆԱԿՑԵԼ=================================-->
        <div class="clear"></div>
        <!--==============================Footer slider=================================-->
        <div class="grid_12">
            <h2 id="carussel_header">Ասոցիացիայի անդամների աշխատանքային գործունեությունը</h2>
            <div id="owl">
                <div class="item">
                    <a href="#"><img src="images/people/ZaruhiHarutyunyan.jpg" width="190"
                                     height="183" alt="Զարուհի Հարությունյան">Զարուհի Հարությունյան<br>
                        Խարբերդի մասնագիտացված մանկատուն</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="images/people/MariannaHarutyunyan.JPG" width="190"
                                     height="183" alt="Մարիաննա Հարությունյան">Մարիաննա Հարությունյան<br>
                        ՀՀ բժշկասոցիալական փորձաքննության գործակալություն</a>
                </div>
                <div class="item it2" id="itT">
                    <a href="#"><img src="images/people/TatevGhazaryan.jpg" width="190"
                                     height="183" alt="Տաթև Ղազարյան">Տաթև Ղազարյան<br>
                        "Լիարժեք կյանք" ՀԿ</a>
                </div>
                <div class="item it3">
                    <a href="#"><img src="images/people/rimagalastyan.JPG" width="190"
                                     height="183" alt="Ռիմա Գալստյան">Ռիմա Գալստյան<br>
                        Իմ ուղին ուսումնա - վերականգնողական կենտրոն</a>
                </div>
                <div class="item">
                    <a href="#"><img src="images/people/AnahitSafaryan.JPG" width="190"
                                     height="183" alt="Անահիտ Սաֆարյան">Անահիտ Սաֆարյան<br>
                        ԱրԲԵՍ առողջության կենտրոն</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="images/people/ruzanXacikyan.jpg" width="190"
                                     height="183" alt="Ռուզան Խաչիկյան">Ռուզան Խաչիկյան<br>
                        Իմ ուղին ուսումնա - վերականգնողական կենտրոն</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="images/people/LilitNazayan.jpg" width="190"
                                     height="183" alt="Լիլիթ Նազարյան">Լիլիթ Նազարյան<br>
                        Խարբերդի մասնագիտացված մանկատուն</a>
                </div>
                <div class="item it3" id="itM">
                    <a href="#"><img src="images/people/MeriAvetisyan.jpg" width="190"
                                     height="183" alt="Մերի Ավետիսյան">Մերի Ավետիսյան<br>
                        "Լիարժեք կյանք" ՀԿ</a>
                </div>
                <div class="item">
                    <a href="#"><img src="images/people/MuradyanNarine.jpg" width="190"
                                     height="183" alt="Լիլիթ Նազարյան">Լիլիթ Մուրադյան<br>
                        TMM- Սովորեցրու ինձ ավելին -ուսուցման և զարգացման կենտրոն</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="images/people/MariamMargaryan.jpg" width="190"
                                     height="183" alt="Լիլիթ Նազարյան">Մարիամ Մարգարյան<br>
                        Արմենակ և Աննա Թադեոսեանների բժշկական կենտրոն</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="images/people/Maneabajanyan.jpg" width="190"
                                     height="183" alt="Մանե Աբաջյան">Մանե Աբաջյան<br>
                        Երևանի բժշկահոգեբանամանկավարժական գնահատման կենտրոն</a>
                </div>
                <div class="item it3">
                    <a href="#"><img src="images/people/ArevikManukyan.jpg" width="190"
                                     height="183" alt="Արևիկ Մանուկյան">Արևիկ Մանուկյան<br>
                        Արմենակ և Աննա Թադեոսեանների բժշկական կենտրոն</a>
                </div>
            </div>
        </div>
        <!--==============================end Footer slider=================================-->
        <div class="clear"></div>
        <!--==============================Footer slider=================================-->
        <div class="grid_12" id="owl2Carussel">
            <div id="owl2">
                <div class="item">
                    <a href="#"><img src="images/people/GayaneHovhannisyan.JPG" width="190"
                                     height="183" alt="Գայանե Հովհաննիսյան">Գայանե Հովհաննիսյան<br>
                        Խարբերդի մասնագիտացված մանկատուն</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="images/people/Elinamirzoyan.jpg" width="190"
                                     height="183" alt="Էլինա ՄԻրզոյան">Էլինա ՄԻրզոյան<br>
                        Մասնավոր ոլորտ Լյուքսենբուրգ</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="images/people/MeriPetrosyan.JPG" width="190"
                                     height="183" alt="Մերի Պետրոսյան">Մերի Պետրոսյան<br>
                        Իմ ուղին ուսումնա - վերականգնողական կենտրոն</a>
                </div>
                <div class="item it3">
                    <a href="#"><img src="images/people/InessaHautyunyan.JPG" width="190"
                                     height="183" alt="Ինեսսա Հարոթյունյան">Ինեսսա Հարությունյան<br>
                        Երեխաների զարգացման միջազգային կենտրոն</a>
                </div>
                <div class="item">
                    <a href="#"><img src="images/people/LilitAraqelyan.JPG" width="190"
                                     height="183" alt="Լիլիթ Առաքելյան">Լիլիթ Առաքելյան<br>
                        Արաբկիր բժշկական համալիր</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="images/people/TatevikNesisyan.JPG" width="190"
                                     height="183" alt="Տաթևիկ Ներսիսյան">Տաթևիկ Ներսիսյան<br>
                        ԱրԲԵՍ առողջության կենտրոն</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="images/people/ruzanhovhannisyan.JPG" width="190"
                                     height="183" alt="Ռուզան Հովհաննիսյան">Ռուզան Հովհաննիսյան<br>
                        Իմ ուղին ուսումնա - վերականգնողական կենտրոն</a>
                </div>
                <div class="item it3">
                    <a href="#"><img src="images/people/GayaneOhanyan.jpg" width="190"
                                     height="183" alt="Գայանե ՕՀանյան">Գայանե ՕՀանյան<br>
                        "Փրկություն" ՀԿ</a>
                </div>
                <div class="item">
                    <a href="#"><img src="images/people/SedaMIzoyan.jpg" width="190"
                                     height="183" alt="ՍԵդա Միրոյան">ՍԵդա Միրոյան<br>
                        Երևանի հ.9 մանկական պոլիկլինիկա</a>
                </div>
                <div class="item it1">
                    <a href="#"><img src="images/people/TatevSerobyan.jpg" width="190"
                                     height="183" alt="Տաթև Սերոբյան">Տաթևիկ Սերոբյան<br>
                        Երևանի հ.92 մանկական պոլիկլինիկա</a>
                </div>
                <div class="item it2">
                    <a href="#"><img src="images/people/LiliaOsipova.jpg" width="190"
                                     height="183" alt="Լիլիա Օսիպովա">Լիլիա Օսիպովա<br>
                        Մասնավոր վոլորտ Հայաստան</a>
                </div>
            </div>
        </div>
        <!--==============================end Footer slider=================================-->

    </div>
