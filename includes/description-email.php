<h2 class="featured-in text-uppercase text-center mt-3"><span><?= T('Featured In'); ?></span></h2>
<div class="logos mt-5">
    <img class="img-fluid" src="../resources/images/logos.jpg">
</div>
<div class="three-benefites three-benefited__count-four d-flex justify-content-between mt-5">
<h1>Thanks for opening our E-mail! look around</h1>
</div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <?php include 'faq.php' ?>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo"><?= T('Contact Us'); ?></button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <?php include 'contact-us.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>
