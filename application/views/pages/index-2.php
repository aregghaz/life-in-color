<!--==============================Կրթություն================================-->
<style>

    .btn-danger {
        background-color: #0052da;
    !important;
        background-image: -webkit-linear-gradient(top, #0052da 0, #0052da 100%);
    !important;
        border-color: #0052da;
    }

    .btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover, .btn-danger:active.focus, .btn-danger:active:focus, .btn-danger:active:hover, .open > .dropdown-toggle.btn-danger.focus, .open > .dropdown-toggle.btn-danger:focus, .open > .dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #0052da;
    !important;
        border-color: #0052da;
    !important;
    }

    .btn-danger:focus, .btn-danger:hover {
        background-color: #0052da;
    !important;
        background-position: 0 -15px;
    }

    .socials a {
        background-color: #0052da;
    !important;
    }

    .btn {
        background-color: #0052da;
        margin-bottom: 10px;
        color: white;
    }
.text_education {
    color: #0052da;!important;
}
    .btn.focus, .btn:focus, .btn:hover {
        color: white;
    !important;
        text-decoration: none;
    }

    p {
        text-indent: 25px;
    !important;
    }

    @media (min-width: 992px)
        .col-md-4 {
            width: 100%;
        !important;
        }
</style>
<div class="main">
    <!--==============================educations=================================-->
    <div class="container_12">
        <div class="grid_8">
            <div class="row">
                <?php if ($educations) { ?>
                    <?php foreach ($educations as $item): ?>
                        <div class="col-sm-12 col-md-12">
                            <div class="thumbnail">
                                <h3 class="text_education"><?php echo $item['nameAM'] ?></h3>
                                <?php if ($item['img']) { ?>
                                    <img src="<?php  echo base_url();?>images/education/<?php echo  $item['img'] ?>" alt="<?php echo  $item['img'] ?>">
                                <?php } ?>
                                <div class="caption">
                                    <p><?php echo $item['textAM'] ?></p>
                                </div>
                                <button type="submit" class="btn" style="" data-toggle="modal"
                                        data-target=".bs-<?php echo $item['id'] ?>-modal-lg">
                                    Կարդալ ավելին
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <? }; ?>
            </div>
            <?php if ($educations) { ?>
                <?php foreach ($educations as $item): ?>
                    <div class="modal fade bs-<?php echo $item['id'] ?>-modal-lg" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="page-header"><strong
                                        class="read-more text_education"> <?php echo $item['nameAM'] ?></strong>
                                </div>
                                <p><?php echo $item['iframeAM'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <? }; ?>
        </div>
        <!--============================== end educations=================================-->
        <div class="grid_4">
            <!--============================== donation=================================-->
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/armeta/application/views/donation.php' ?>

        </div>
    </div>

