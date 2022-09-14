<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Accueil</h1>
            <?php foreach ($citations as $key => $citation) { ?>
                <?php include 'carte.php'; ?>
            <?php } ?>

            <?php echo $formCitation->create() ?>
        </div>
    </div>
</div>