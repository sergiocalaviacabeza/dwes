<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de producto</h1>

    <form method="post" action="<?= PATH."/product/update"?>">
        <input type="hidden" name="id"
        value="<?php echo $product->id ?>">

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control"
        value="<?php echo $product->name ?>"
        >
    </div>
    <div class="form-group">
        <label for="Tipo de Producto">Tipo de Producto</label>
        <select class="custom-select"  name="type_id">
              <?php
              foreach($productsTypes  as $key => $type) { 
                $selected = $product->type_id == $type->id ? 'selected' : '';?>
                <option value="<? echo $type->id ?>" <?= $selected ?>> <?php echo $type->name?></option>
              <?php } ?>
        </select>
    <div class="form-group">
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="price" class="form-control"
        value="<?php echo $product->price ?>">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>

</body>
<?php require "app/views/parts/scripts.php" ?>

</html>