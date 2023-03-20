<?php include_once 'inc/header.php' ?>
<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Glossory</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#api" role="tab" aria-controls="v-pills-home" aria-selected="true">API</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#web-APIs" role="tab" aria-controls="v-pills-profile" aria-selected="false">web APIs</a>

        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active" id="api" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                API stands for Application Program Interface, which can be defined as a set of methods of communication between various software components. In other words, an API allows software to communicate with another software.
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
    </div>
</div>



<?php include_once 'inc/footer.php' ?>
