<?php

foreach($variables['Info'] as $carte){

?>

<div class="col-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <?= $carte['citation'] ?>
            </h5>
            <p class="card-text">
                <?= $carte['prenom'].' '.$carte['nom'] ?>
            </p>
        </div>
    </div>
</div>

<?php
}
?>





