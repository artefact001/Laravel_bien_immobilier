<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION BIEN IMMOBILIER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>LISTE DES BIENS</h1>
                <hr>
                <a href="/bien/ajouter" class="btn btn-primary">Ajouter un bien</a>
                <hr>
                <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>
                <?php
                    $ide = 1;
                ?>
                <div class="row">
                <?php $__currentLoopData = $biens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-3">
                    <div class="card" style="width: 20rem;height:400px">
                    <img src="<?php echo e($bien->image); ?>" class="card-img-top" alt="..." width="20rem" height="200px"> <!--permet losqu'on met l'url de l'image on le verra-->
                    <div class="card-body">
                      <h5 class="card-title"><?php echo e($bien->nom); ?></h5>
                      <h6 class="card-text">Catégorie: <?php echo e($bien->categorie); ?></h6>

                      <!--<div class="form-group">-->
                        <p>
                            <div>
                                <?php if($bien->statut): ?>
                                <span class="badge rounded-pill text-bg-warning">Libre</span>
                                <?php else: ?>
                                <span class="badge rounded-pill text-bg-warning">Occupé</span>
                                <?php endif; ?>
                            </div>
                        </p>
                        <br>
                      <p class="d-inline-flex gap-3">  <!--C'est pour mettre des espacements entre les button-->
                      <a href="/detail-bien/<?php echo e($bien->id); ?>"  class="btn btn-outline-success btn-sm">Voir détails</a>
                      <a href="/modifier-bien/<?php echo e($bien->id); ?>"  class="btn btn-outline-primary btn-sm">Modifier</a>
                      <a href="/supprimer-bien/<?php echo e($bien->id); ?>"  class="btn btn-outline-danger btn-sm">Supprimer</a>
                      </p>
                    </div>
                    </div>
                </div>
                  <?php
                  $ide += 1;
                  ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
    </div>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>




<?php /**PATH C:\Users\cheikh\Desktop\projet\Laravel_bien_immobilier\resources\views/bien/index.blade.php ENDPATH**/ ?>