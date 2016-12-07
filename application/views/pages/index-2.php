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
    <!--==============================Content=================================-->

    <div class="container_12">
        <div class="grid_8">
            <div class="row">
                <?php if ($educations) { ?>
                    <?php foreach ($educations as $item): ?>
                        <div class="col-sm-12 col-md-12">
                            <div class="thumbnail">
                                <h3><?= $item['nameAM'] ?></h3>
                                <?php if ($item['img']) { ?>
                                    <img src="<?= $item['img'] ?>" alt="$item['nameAM']">
                                <?php } ?>
                                <div class="caption">

                                    <p><?= $item['textAM'] ?></p>

                                </div>
                                <button type="submit" class="btn" style="" data-toggle="modal"
                                        data-target=".bs-<?= $item['id'] ?>-modal-lg">Կարդալ
                                    ավելին
                                </button>
                            </div>

                        </div>
                    <? endforeach; ?>
                <? }; ?>
            </div>
            <?php if ($educations) { ?>
                <?php foreach ($educations as $item): ?>

                    <div class="modal fade bs-<?= $item['id'] ?>-modal-lg" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="page-header"><strong class="read-more"> <?= $item['nameAM'] ?></strong>
                                </div>
                                <p><?= $item['iframeAM'] ?></p>

                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            <? }; ?>

        </div>

        <div class="grid_4">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/life-in-color/application/views/donation.php' ?>

        </div>
    </div>

