<head>
  <style>
    span{
      font-size: 14px;
      font-weight: bold;
      font-family: sans-serif;
    }
  </style>
</head>

<?php
include_once('layout.php');
?>

<div class="content">
<div class="container-fluid" >
  <div class="col-md-12">
    <div class="card" style="margin-top:5px;">
      <div class="card-header" style="background-color: #6495ED;">
        <h4 class="card-title" style="color:black;font-weight:bold;">Panel de recherche</h4>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="bmd-label-floating">Secteur d'activité</label>
                <select type="text" class="form-control">
                <option value="peche">Pêche</option>
                <option value="Agriculture">agriculture</option>
                <option value="Elevage">Elevage</option>
                <option value="commerce">Commerce</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating">Nature besoin</label>
                <select type="text" class="form-control">
                <option value="garantie">Garantie</option>
                <option value="placement">Placement</option>
                <option value="financement">Financement</option>
                <option value="accompagnement">Accompagnement</option>

                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating">pays où se situe l'activité</label>
                <input type="text" class="form-control">
              </div>
            </div>
            </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Date de soumission</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Requêtes soumises entre</label>
                <input type="date" class="form-control">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>et le</label>
                <input type="date" class="form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="bmd-label-floating">Financement recherché</label>
                <select class="form-control" name="">
                  <option value="1000000FCFA">1000000FCFA</option>
                  <option value="3000000FCFA">3000000FCFA</option>
                  <option value="5000000FCFA">5000000FCFA</option>
                  <option value="7000000FCFA">7000000FCFA</option>
                </select>
              </div>
            </div>
          </div>

          <!--<div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>About Me</label>
                <div class="form-group">
                  <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                  <textarea class="form-control" rows="5"></textarea>
                </div>
              </div>
            </div>
          </div>-->
          <button type="submit" class="btn pull-right" style="background-color: #6495ED;color:black;font-weight:bold;">rechercher</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>

  <div class="card" style="margin-top:50px;">
       <div class="card-header" style="background-color: #6495ED;">
         <h4 class="card-title" style="color: black;font-weight:bold;">Liste des requêtes</h4>
       </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table" id="dataTable">
           <thead style="color:#87CEEB;font-weight:bold;">
             <th>
               Date
             </th>
             <th>
               Intitulé projet
             </th>
             <th>
               Activité
             </th>
             <th>
              Besoin
             </th>
             <th>
               Montant
             </th>
             <th>
             Statut
             </th>
             <th>
             Requèrant
             </th>
             <th>
             Pays Requèrant
             </th>
             <th>
             Pays activité
             </th>
             <th>
              Voir
             </th>
             <th>
             Options
             </th>
           </thead>
           <tbody>
             <tr>
               <td>
                 14/03/2020
               </td>
               <td>
                Culture vente de poissons marins
               </td>
               <td>
                 Pêche maritime
               </td>
               <td>
                 Garantie
               </td>
               <td>
                 20 à 30
               </td>
               <td>
                 Rejeté
               </td>
               <td>
                 Mor FALL
               </td>
               <td>
                 Sénégal
               </td>
               <td>
                 Sénégal
               </td>
               <td>
                 <button class="btn btn-default btn-just-icon">
                   <i class="material-icons">content_paste</i>
                 </button>
               </td>
               <td>
                 <button class="btn-primary btn-just-icon bdt">
                   <i class="material-icons">edit</i>
                 </button>
               </td>
             </tr>

             <tr>
               <td>
                 20/03/2020
               </td>
               <td>
                Culture et vente de légumes et fruits
               </td>
               <td>
                 maraîchage
               </td>
               <td>
                 placement
               </td>
               <td>
                30 à 50
               </td>
               <td>
                En cours
               </td>
               <td>
                 ESPI
               </td>
               <td>
                 Gambie
               </td>
               <td>
                 Sénégal
               </td>
               <td>
                 <button class="btn btn-default btn-just-icon">
                   <i class="material-icons">content_paste</i>
                 </button>
               </td>
               <td>
                 <button class="btn-primary btn-just-icon bdt">
                   <i class="material-icons">edit</i>
                 </button>
               </td>
             </tr>

           </tbody>
         </table>
       </div>
       </div>


       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab" aria-hidden="true">
             <div class="modal-dialog modal-lg" role="document">
                 <div class="modal-content">
                     <div class="modal-header" style="background-color:#6495ED">
                         <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                         <h5 class="modal-title" id="exampleModalCenterTitle" style="color: black;font-weight:bold;"><i class="material-icons">arrow_right_alt</i> Affectation de requête</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                   <form class=""  method="post">
                      <!--<div class="row" style="background-color:green;">
                          <div class="col-md-3">
                            <div class="form-group">
                                <input type="radio" value="oui" name=""> Accord
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Affecté pour traitement à</label>
                                <input type="text" name="">
                            </div>
                          </div>

                      </div>-->

                      <table>
                        <tr style="background-color:#90EE90;">
                          <td><div class="form-group">
                              <input type="radio" value="oui" name=""> <span>Accord</span>
                          </div></td>
                          <td></td>
                         <td> <span>Affecté pour traitement à</span></td>
                          <td>
                            <div class="form-group">
                                <input type="text"  name="" size="60">
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td style="background-color:red;"><div class="form-group">
                              <input type="radio" value="oui" name=""> <span>Reserve</span>
                          </div></td>
                        </tr>
                      </table>
                      <span>Annotations:</span>
                      <div class="form-group">
                     <textarea name="name" rows="8"  cols="95"></textarea>
                      </div>
                   </form>
                   </div>
                     <div class="modal-footer">
                         <input type="submit" class="btn btn-primary" name="" value="Envoyer">
                         <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                     </div>
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
  $('.bdt').on('click',function(event){
       event.preventDefault();
       var href = $(this).attr('href');
       $('#myModal #delRef').attr('href',href);
       $('#myModal').modal();
   });
})
var currentli = 0;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}
</script>
