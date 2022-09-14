<div class="col-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <?= $citation->getCitation() ?>
            </h5>
            <p class="card-text">
                <?= $citation->getAuteur()->getPrenom() .' '.$citation->getAuteur()->getNom() ?>
            </p>
        </div>
    </div>
</div>





