<?php
include_once('header.php');
?>
<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">
      <div class="card" style="margin-top:5px; height:280px;">
        <div class="card-header" style="background-color: #6495ED;">
          <h4 class="card-title" style="color: black;font-weight:bold;">Panel de recherche</h4>
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
                  <option value="industrie">Industrie</option>
                  <option value="fiscale">Fiscale</option>
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
            <button type="submit" class="btn pull-right" style="background-color: #6495ED;color:black;font-weight:bold;">rechercher</button>
            <div class="clearfix"></div>
              </div>

          </form>
        </div>

        <div class="card">
             <div class="card-header" style="background-color: #6495ED;">
               <h4 class="card-title" style="color: black; font-weight:bold;">Prestataires</h4>
               <button class="btn btn-warning nbtn pull-right" name="button"><i class="material-icons">add</i> Ajouter</button>
             </div>
           <div class="card-body">
               <div class="table-responsive">
                 <table class="table" id="dataTable">
                   <thead style="color: #87CEEB;font-weight:bold;">
                     <th>Code</th>
                     <th>Nom conseil</th>
                     <th>Pays conseil</th>
                     <th>Adresse conseil</th>
                     <th>Nom contact</th>
                     <th>Prénom contact</th>
                     <th>Actions</th>
                   </thead>
                   <tbody>
                     <tr>
                       <td>IDM</td>
                       <td>IDM conseil</td>
                       <td>Sénégal</td>
                       <td>12 Rue xxxx,tel:55O4OO33</td>
                       <td>Diop</td>
                       <td>Moustapha</td>
                       <td class="td-actions">
                         <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                           <i class="material-icons">edit</i>
                         </button>
                         <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                           <i class="material-icons">close</i>
                         </button>
                       </td>
                     </tr>

                     <tr>
                       <td>AAFP</td>
                       <td>Agence d'Appui aux financements de projets</td>
                       <td>Sénégal</td>
                       <td>4ème étage immeuble Fayçal</td>
                       <td>FALL</td>
                       <td>Cheikh</td>
                       <td class="td-actions">
                         <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                           <i class="material-icons">edit</i>
                         </button>
                         <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                           <i class="material-icons">close</i>
                         </button>
                       </td>
                     </tr>

                     <tr>
                       <td>IDACO</td>
                       <td>IDACO SARL</td>
                       <td>BENIN</td>
                       <td>4 blv independance</td>
                       <td>ADVI</td>
                       <td>Dieudonne</td>
                       <td class="td-actions">
                         <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                           <i class="material-icons">edit</i>
                         </button>
                         <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                           <i class="material-icons">close</i>
                         </button>
                       </td>
                     </tr>

                   </tbody>
                 </table>
               </div>
             </div>
           </div>

      </div>
    </div>


  </div>

</div>


<div class="myForm">
        <form action="" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#6495ED">
                            <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">supervisor_account</i> Enregistrer un nouveau prestataire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Code</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Désignation</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Pays</label>
                                <select type="text" class="form-control">
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

                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Adresse</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Site web</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Nom contact</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Prénom contact</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Tel contact</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Email contact</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="card">
                              <div class="card-header">
                                <h4>Détail sur les possibilités</h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead style="color:#87CEEB;font-weight:bold;">
                                      <th>Domaine d'expertise</th>
                                      <th>Depuis</th>
                                      <th>Actions</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Montage dossier de placement</td>
                                        <td>2000</td>
                                        <td class="td-actions">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>Conseil en assurance crédit bail</td>
                                        <td>1995</td>
                                        <td class="td-actions">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>Crédit à long terme</td>
                                        <td>2010</td>
                                        <td class="td-actions">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>Conseil en Assurance</td>
                                        <td>2010</td>
                                        <td class="td-actions">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                        </td>
                                      </tr>

                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Domaine d'expertise</label>
                                <select type="text" class="form-control">
                                  <option value="montage">Montage dossier</option>
                                  <option value="assurance">Montage en assurance crédit bail</option>
                                  <option value="crédit">crédit à long terme</option>
                                  <option value="fiscalite">Fiscalité</option>
                                  <option value="notaire">Notaire</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Depuis l'année</label>
                                <select type="text" class="form-control">
                                  <option value="2000">2000</option>
                                  <option value="2001">2001</option>
                                  <option value="2003">2003</option>
                                  <option value="2004">2004</option>
                                  <option value="2005">2005</option>
                                  <option value="2006">2006</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">

                          <div class="col-md-4">

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

                        <div class="modal-footer">
                            <input type="submit" value="Ajouter" class="btn btn-primary"/>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php
include_once('footer.php');
?>
<script>
$('document').ready(function(){
  $('.nbtn').on('click',function(event){
        event.preventDefault();
        $('.myForm #exampleModal').modal()
    });
})

var currentli = 2;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}
</script>
