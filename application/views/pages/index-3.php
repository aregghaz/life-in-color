<style>
    #headerLogo {
        color: #ff7f00;
    }

    .page1 .text1 {
        padding-top: 42px;
        color: #ff7f00;
    }

    .btn-danger {
        background-color: #ff7f00;
    !important;
        background-image: -webkit-linear-gradient(top, #ff7f00 0, #ff7f00 100%);
    !important;
        border-color: #ff7f00;
    }

    .btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover, .btn-danger:active.focus, .btn-danger:active:focus, .btn-danger:active:hover, .open > .dropdown-toggle.btn-danger.focus, .open > .dropdown-toggle.btn-danger:focus, .open > .dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #ff7f00;
    !important;
        border-color: #ff7f00;
    !important;
    }

    .btn-danger:focus, .btn-danger:hover {
        background-color: #ff7f00;
    !important;
        background-position: 0 -15px;
    }

    #futterSrong {
        color: #ff7f00;
    !important;
    }

    .socials a {
        background-color: #ff7f00;
    !important;
    }

    p {
        text-indent: 25px;
    !important;
    }
</style>
<div class="main">
    <!--==============================Content=================================-->

    <div class="container_12">
        <div class="grid_8">
            <?php if ($video) { ?>
                <?php foreach ($video as $item): ?>
                    <div class="row">
                        <div class="col-sm-8 col-md-11">
                            <div class="thumbnail" style="border-color: #ff7f00">
                                <figure class="video">
                                    <iframe width="560" height="315" src="<?php echo $item['link'] ?>" frameborder="0"
                                            allowfullscreen></iframe>
                                </figure>
                                <span class="label label-default"
                                      style="background-color: #ff7f00"><?php echo $item['date'] ?></span>
                                <div class="caption">
                                    <h4 style="padding-top: 5px; color: #ff7f00"><?php echo $item['headAM'] ?></h4>
                                    <?php echo $item['textAM'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            <? }; ?>
        </div>
        <div class="grid_4 ">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/armeta/application/views/donation.php' ?>
        </div>
    </div>

