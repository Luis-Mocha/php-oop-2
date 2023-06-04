<main class="">
    <div class="container">

        <!-- SEZIONE FOOD -->
        <div class="card-container">

            <?php foreach ($arrayFood as $elem) { ?>

                <div class="card">
                    <img src=" <?php echo $elem->img ?> " class="card-img-top" alt="<?php echo $elem->name . ' Immagine' ?>">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $elem->name ?> </h5>
                        <div class="card-text"> Tipo: <?php echo $elem->type ?> </div>
                        <div class="card-text"> Quantità: <?php echo $elem->quantity ?> g </div>
                        
                        <div class="card-text"> Categoria:
                            <?php foreach ($elem->category as $elemCategory) { 
                                if ($elemCategory->name == 'cane') { ?>
                                    <span class="ms-2"> <i class="fa-solid fa-dog"></i> </span>
                                <?php } 
                                if ($elemCategory->name == 'gatto') { ?>
                                    <span class="ms-2"> <i class="fa-solid fa-cat"></i> </span>
                                <?php }
                            } ?> 
                        </div>

                        <div class="card-text text-end fw-bold fst-italic"> <?php echo $elem->price ?> € </div>

                    </div>
                </div>

            <?php } ?>
        </div>

    </div>
</main>