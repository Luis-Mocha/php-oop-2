<main class="">
    <div class="container">

        <!-- SEZIONE FOOD -->
        <div class="card-container">
            <?php foreach ($arrayFood as $elem) { ?>
                <div class="card">
                    <img src=" <?php echo $elem->img ?> " class="card-img-top" alt="<?php echo $elem->name . ' Immagine' ?>">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $elem->name ?> </h5>
                        <p class="card-text"> Tipo: <?php echo $elem->type ?> </p>
                        <p class="card-text"> Quantità: <?php echo $elem->quantity ?> g </p>

                    </div>
                    </div>
            <?php } ?>
        </div>


    </div>
</main>