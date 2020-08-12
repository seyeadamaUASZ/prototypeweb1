<?php
include_once('layout.php');
?>
<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">
      <div class="card" style="margin-top:5px; height:285px;">
        <div class="card-header" style="background-color: #6495ED;">
          <h4 class="card-title" style="color:black;font-weight:bold;">Panel de recherche</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Nom Cabinet</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Nom contact</label>
                  <input type="datetime" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Prénom contact</label>
                  <input type="datetime" class="form-control">
                </div>
              </div>
             </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">pays</label>

                  <select class="form-control" name="">
                    <option value="Senegal">Senegal</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Niger">Niger</option>
                    <option value="Guinee Bissau">Guinee Bissau</option>
                    <option value="Mali">Mali</option>
                    <option value="Benin">Benin</option>
                    <option value="Togo">Togo</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Domaine</label>
                  <select type="text" class="form-control">
                  <option value="financement">Financement</option>
                  <option value="accompagnement">Accompagnement</option>
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn pull-right" style="background-color: #6495ED; color:black;font-weight: bold;">rechercher</button>
            <div class="clearfix"></div>
              </div>

          </form>
        </div>

        <div class="card">
             <div class="card-header" style="background-color: #6495ED;">
               <h4 class="card-title" style="color: black; font-weight:bold">Liste des institutions financières</h4>
               <button class="btn btn-warning pull-right bdt" name="button">Détails sur les possibilités</button>
             </div>
           <div class="card-body">
               <div class="table-responsive">
                 <table class="table" id="dataTable">
                   <thead style="color:#87CEEB;font-weight:bold;">
                     <th>Code</th>
                     <th>Nom institution</th>
                     <th>Pays institution</th>
                     <th>Adresse</th>
                     <th>Zone</th>
                   </thead>
                   <tbody>
                     <tr>
                       <td>BAD</td>
                       <td>Banque Africaine de Développement</td>
                       <td>Sénégal</td>
                       <td>12 Rue xxxx,tel:55O4OO33</td>
                       <td>Afrique</td>
                     </tr>

                     <tr>
                       <td>ARJ</td>
                       <td>Agence d'Appui à la réinsertion des détenus</td>
                       <td>USA</td>
                       <td>4ème étage immeuble FADH</td>
                       <td>Monde</td>
                     </tr>

                     <tr>
                       <td>ICF</td>
                       <td>Investment</td>
                       <td>ITALY</td>
                       <td>Immeuble KEBE</td>
                       <td>Monde</td>
                     </tr>

                     <tr>
                       <td>BNDE</td>
                       <td>Banque Nationale de Développement</td>
                       <td>FRANCE</td>
                       <td>AV Bougui</td>
                       <td>Nationale</td>
                     </tr>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>

      </div>
    </div>


  </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#6495ED">
                    <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color: black;font-weight: bold;">Détail sur les possibilités de financement offertes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead style="color:#87CEEB;">
                      <th>Type besoin</th>
                      <th>Secteur d'activité</th>
                      <th>Zone intervention</th>
                      <th>Catégorie projet</th>
                      <th>Minimum</th>
                      <th>Maximum</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Crédit Bail</td>
                        <td>Banque Africaine de développement</td>
                        <td>Afrique</td>
                        <td>PERSONNE</td>
                        <td>20</td>
                        <td>50</td>
                      </tr>
                      <tr>
                        <td>Epargne</td>
                        <td>Agence d'appui à la réinsertion des détenus</td>
                        <td>Monde</td>
                        <td>Organisation</td>
                        <td>20</td>
                        <td>100</td>
                      </tr>
                      <tr>
                        <td>Garantie</td>
                        <td>Investment</td>
                        <td>Monde</td>
                        <td>Organisation</td>
                        <td>50</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Placement</td>
                        <td>Banque nationale de développement</td>
                        <td>Nationale</td>
                        <td>PERSONNE</td>
                        <td>20</td>
                        <td>50</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>


        </div>

    </div>

</div>

<?php
include_once('footer.php');
?>
<script>
  $('document').ready(function(){
    console.log('hello world');
    $('.bdt').on('click',function(event){
         event.preventDefault();
         var href = $(this).attr('href');
         $('#myModal #delRef').attr('href',href);
         $('#myModal').modal();
     });
  });
  var currentli = 2;

      showActivate(currentli);

      function showActivate(n){
        var x = document.getElementsByClassName("active1");
        console.log(x[n]);
        x[n].style.backgroundColor="#6495ED";
      }
</script>
