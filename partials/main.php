<main class="">
    <div class="container">

        <div class="card-container">
            <?php for ($i=0; $i < count($arrayProducts); $i++) { 

                foreach ($arrayProducts[$i] as $elem) { ?>

                    <div class="card">
                        <img src=" <?php echo $elem->img ?> " class="card-img-top" alt="<?php echo $elem->name . ' Immagine' ?>">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $elem->name ?> </h5>

                            <!-- Tipo (food) -->
                            <?php if ($elem->type) { ?>
                                <div class="card-text"> Tipo: <?php echo $elem->type ?> </div>
                            <?php } ?>
                            <!-- Quantità (food) -->
                            <?php if ($elem->quantity) { ?>
                                <div class="card-text"> Quantità: <?php echo $elem->quantity ?> g </div>
                            <?php } ?>
                            
                            <!-- Materiale (toy) -->
                            <?php if ($elem->material) { ?>
                                <div class="card-text"> Materiale: <?php echo $elem->material ?> </div>
                            <?php } ?>

                            <!-- Colore (cucce) -->
                            <?php if ($elem->color) { ?>
                                <div class="card-text"> Colore: <?php echo $elem->color ?> </div>
                            <?php } ?>
                            
                            <!-- Categoria (all) -->
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

                            <!-- Dimensioni (toy/bed) -->
                            <?php if ($elem->dimension) { ?>
                                <div class="card-text"> Dimensioni:
                                    <span class="text-uppercase">
                                        <?php echo $elem->dimension ?>
                                    </span>
                                </div>
                            <?php } ?>

                            <!-- Prezzo(all) -->
                            <div class="card-text text-end fw-bold fst-italic"> <?php echo $elem->setPrice() ?> € </div>

                        </div>
                    </div>

                <?php } ?>
            <?php } ?>  

        </div>   
        
    <!-- 
        !-- SEZIONE FOOD --
        <h2 class="text-uppercase text-center fs-1">Food</h2>
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

        !-- SEZIONE TOYS --
        <h2 class="text-uppercase text-center fs-1">Giocattoli</h2>
        <div class="card-container">

            <?php foreach ($arrayToy as $elem) { ?>

                <div class="card">
                    <img src=" <?php echo $elem->img ?> " class="card-img-top" alt="<?php echo $elem->name . ' Immagine' ?>">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $elem->name ?> </h5>
                        <div class="card-text"> Materiale: <?php echo $elem->material ?> </div>
                        
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

                        <div class="card-text"> Dimensioni:
                            <span class="text-uppercase">
                                <?php echo $elem->dimension ?>
                            </span>
                        </div>

                        <div class="card-text text-end fw-bold fst-italic"> <?php echo $elem->price ?> € </div>

                    </div>
                </div>

            <?php } ?>
        </div>

                !-- SEZIONE CUCCE --
        <h2 class="text-uppercase text-center fs-1">Cucce</h2>
        <div class="card-container">

            <?php foreach ($arrayBed as $elem) { ?>

                <div class="card">
                    <img src=" <?php echo $elem->img ?> " class="card-img-top" alt="<?php echo $elem->name . ' Immagine' ?>">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $elem->name ?> </h5>
                        <div class="card-text"> Colore: <?php echo $elem->color ?> </div>
                        
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

                        <div class="card-text"> Dimensioni:
                            <span class="text-uppercase">
                                <?php echo $elem->dimension ?>
                            </span>
                        </div>

                        <div class="card-text text-end fw-bold fst-italic"> <?php echo $elem->price ?> € </div>

                    </div>
                </div>

            <?php } ?>
        </div>
    -->

    </div>
</main>