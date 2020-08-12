<?php
include_once('layout.php');
?>
<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">

      <div class="card" style="margin-top:5px; height:285px;">
        <div class="card-header" style="background-color:#6495ED ;">
          <h4 class="card-title" style="color:black; font-weight:bold;">Panel de recherche</h4>
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
              <div class="col-md-3">
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

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Section</label>
                  <select type="text" class="form-control">
                  <option value="financement">Financement</option>
                  <option value="accompagnement">Accompagnement</option>
                  <option value="montage dossier">Montage dossier</option>
                  <option value="fiscalite">Fiscalité</option>
                  <option value="courtage">Courtage</option>
                  <option value="assurance">Assurance</option>
                  <option value="notaire">Notaire</option>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Catégorie prestataire</label>
                  <select type="text" class="form-control">
                  <option value="experts">Experts</option>
                  <option value="evaluateurs">Evaluateurs</option>
                  <option value="société">Sociétés expertises</option>
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn  pull-right search" style="background-color: #6495ED; color:black;font-weight:bold;">rechercher</button>
            <div class="clearfix"></div>
              </div>

          </form>
        </div>

        <div class="card">
             <div class="card-header"  style="background-color: #6495ED;">
               <h4 class="card-title" style="font-weight:bold; color:black;">Prestataires</h4>
             </div>
           <div class="card-body">
               <div class="table-responsive presta">
                 <table class="table" id="dataTable">
                   <thead style="color: #0080ff;font-weight:bold;">
                     <th>Prestataire</th>
                     <th>Pays</th>
                     <th>Adresse</th>
                     <th>Nom Contact</th>
                     <th>Prenom Contact</th>
                     <th>Tel contact</th>
                     <th>Email</th>
                     <th>Site</th>
                    <th>Détail</th>
                   </thead>
                   <tbody>
                     <tr>
                       <td>IDM Conseils</td>
                       <td>Sénégal</td>
                       <td>12 rue XXXX</td>
                       <td>Diop</td>
                       <td>Moustapha</td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
                     </tr>

                     <tr>
                       <td>Agence d'appui aux finances</td>
                       <td>Sénégal</td>
                       <td>4ème étage immeuble Faye Sall</td>
                       <td>FALL</td>
                       <td>Cheikh</td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
                     </tr>


                   </tbody>
                 </table>
               </div>


               <div class="table-responsive presta2">
                 <table class="table" id="dataTable1">
                   <thead style="color: #0080ff;font-weight:bold;">
                     <th>Prestataire</th>
                     <th>Pays</th>
                     <th>Adresse</th>
                     <th>Nom Contact</th>
                     <th>Prenom Contact</th>
                     <th>Tel contact</th>
                     <th>Email</th>
                     <th>Site</th>
                    <th>Détail</th>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Allianze Sénégal Assurance</td>
                       <td>Sénégal</td>
                       <td>12 rue XXXX</td>
                       <td>Diop</td>
                       <td>Moustapha</td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
                     </tr>

                     <tr>
                       <td>SONAM/société nationale d'assurances mutuelles</td>
                       <td>Sénégal</td>
                       <td>4ème étage immeuble Faye Sall</td>
                       <td>FALL</td>
                       <td>Cheikh</td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
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
                <div class="modal-header" style="background-color:#6495ED;">
                    <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color: black; font-weight:bold;">Détail sur les domaines d'expertise</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                  <table class="table">
                    <thead style="color:#0080ff;font-weight:bold;">
                      <th>Domaine d'expertise</th>
                      <th>Depuis</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Montage dossier de placement</td>
                        <td>2000</td>
                      </tr>

                      <tr>
                        <td>Conseil en assurance crédit bail</td>
                        <td>1995</td>
                      </tr>

                      <tr>
                        <td>Crédit à long terme</td>
                        <td>2010</td>
                      </tr>

                      <tr>
                        <td>Catégorie</td>
                        <td>Expert</td>
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
    $('.presta2').hide();
    $('.bdt').on('click',function(event){
         event.preventDefault();
         var href = $(this).attr('href');
         $('#myModal #delRef').attr('href',href);
         $('#myModal').modal();
     });
     $('.search').on('click',function(event){
       event.preventDefault();
       console.log("presta 2")
       $('.presta2').show();
       $('.presta').hide();
       $('#dataTable1').DataTable();
     })
  })

     var currentli = 3;

      showActivate(currentli);

      function showActivate(n){
        var x = document.getElementsByClassName("active1");
        console.log(x[n]);
        x[n].style.backgroundColor="#6495ED";
      }
</script>
