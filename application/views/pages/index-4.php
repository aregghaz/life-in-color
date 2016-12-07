<style>
    #headerLogo {
        color: #04bacf;
    }
    .page1 .text1 {
        padding-top: 42px;
        color: #04bacf;
    }
    .btn-danger {
        background-color:#04bacf; !important;
        background-image: -webkit-linear-gradient(top,#04bacf 0,#04bacf 100%); !important;
        border-color:#04bacf;
    }
    .btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover, .btn-danger:active.focus, .btn-danger:active:focus, .btn-danger:active:hover, .open>.dropdown-toggle.btn-danger.focus, .open>.dropdown-toggle.btn-danger:focus, .open>.dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color:#04bacf; !important;
        border-color: #04bacf; !important;
    }
    .btn-danger:focus, .btn-danger:hover {
        background-color:#04bacf; !important;
        background-position: 0 -15px;
    }
    #futterSrong {
        color: #04bacf; !important;
    }
    .socials a {
        background-color: #04bacf; !important;
    }
    .grid_4 {
        margin-bottom: 15px;
    }
</style>
<!--=============================Գործընկերներ================================-->

<div class="main">
    <!--==============================Content=================================-->
    <div class="container_12">
        <div class="grid_8">
            <?php if ($partner) { ?>
                <?php foreach ($partner as $item): ?>
            <div class="panel " style="border: 1px solid #04bacf">
                <div class="panel-heading" id="partners" ><h3 class="panel-title"><a href="<?= $item['link']; ?>"><?= $item['nameAM']; ?></a></h3></div>
                <div class="panel-body"><?= $item['textAM']; ?></div>
            </div>
                    <? endforeach; ?>
            <? }; ?>
        </div>

        <div class="grid_4">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/life-in-color/application/views/donation.php' ?>
            <a href="http://enothe.eu/"><img class="logo_class" src="<?php echo base_url() ?>images/logos/enothe.jpg"  alt="enothe"></a>
            <a href="http://www.aota.org/"><img class="logo_class" src="<?php echo base_url() ?>images/logos/lota.png" alt="lota"></a>
            <a href="http://www.wfot.org/"><img class="logo_class" src="<?php echo base_url() ?>images/logos/wfot.png" alt="wfot"></a>
            <a href="http://www.who.int/en/"><img class="logo_class"  src="<?php echo base_url() ?>images/logos/who-logo-en.jpg" alt="who"></a>
        </div>
    </div>



