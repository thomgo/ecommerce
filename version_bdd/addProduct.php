<?php
require "Service/errorManager.php";
require "Service/loginManager.php";

restrictToAdmin();

include "Template/header.php";
//Si on a un message d'erreur ou de succès
displayMessages();
 ?>
 <div class="row mt-5">
    <section class="col-lg-9">
      <h2>Remplissez le formulaire  pour ajouter un produit</h2>
      <div class="container-fluide">
        <div class="row">
          <form class="w-75 mx-auto my-5" action="addProductTreatment.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="price">Prix</label>
              <input type="number" class="form-control" id="price" name="price" >
            </div>
            <div class="form-group">
                <label for="stock">Disponibilité immédiate</label>
                <select id="stock" class="form-control" name="stock">
                  <option value="1" selected>Disponible</option>
                  <option value="0">Indisponible</option>
                </select>
            </div>
            <div class="form-group">
              <label for="category">Catégorie</label>
              <input type="text" class="form-control" id="category" name="category">
            </div>
            <div class="form-group">
              <label for="made_in">Lieu de production</label>
              <select id="made_in" class="form-control" name="made_in">
                <option>USA</option>
                <option>CHINA</option>
                <option>JAPAN</option>
                <option>FRANCE</option>
                <option>GERMANY</option>
              </select>
            </div>
            <div class="form-group">
              <label for="description">Déscription</label>
              <textarea id="description" class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
              <label for="image">Image d'illustration</label>
              <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="text-center">
              <button type="submit" class="btn lightBg">Enregistrer</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Aside avec les informations utilisateur -->
    <?php include "Template/aside.php"; ?>
  </div>

 <?php
 include "Template/footer.php"
  ?>
