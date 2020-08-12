<?php
include_once('header.php');
?>
<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">
      <div class="card" style="margin-top:5px; height:280px;">
        <div class="card-header" style="background-color:#6495ED;">
          <h4 class="card-title" style="color:black;font-weight:bold;">Panel de recherche</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Nom</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Code</label>
                  <input type="datetime" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">critère</label>
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

              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Type</label>
                  <select type="text" class="form-control">
                  <option value="banqueagri">Banque agrée</option>
                  <option value="fonds">Fonds</option>
                  <option value="crédit bail">Crédit bail</option>
                  <option value="microfinance">Microfinance</option>
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn pull-right" style="background-color:#6495ED;color:black; font-weight:bold;">rechercher</button>
            <div class="clearfix"></div>
              </div>

          </form>
        </div>

        <div class="card">
             <div class="card-header" style="background-color: #6495ED;">
               <h4 class="card-title" style="color: black; font-weight: bold;">Liste des institutions financières</h4>
               <button class="btn btn-warning nbtn pull-right" name="button"><i class="material-icons">add</i> Ajouter</button>
             </div>
           <div class="card-body">
               <div class="table-responsive">
                 <table class="table" id="dataTable">
                   <thead style="color: #87CEEB;">
                     <th>Code</th>
                     <th>Nom institution</th>
                     <th>Pays institution</th>
                     <th>Adresse</th>
                     <th>Type institution</th>
                     <th>Actions</th>
                   </thead>
                   <tbody>
                     <tr>
                       <td>BAD</td>
                       <td>Banque Africaine de Développement</td>
                       <td>Sénégal</td>
                       <td>12 Rue xxxx,tel:55O4OO33</td>
                       <td>Banque agrée</td>
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
                       <td>ARJ</td>
                       <td>Agence d'Appui à la réinsertion des détenus</td>
                       <td>USA</td>
                       <td>4ème étage immeuble FADH</td>
                       <td>Fonds</td>
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
                       <td>ICF</td>
                       <td>Investment</td>
                       <td>ITALY</td>
                       <td>Immeuble KEBE</td>
                       <td>Fonds</td>
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
                       <td>BNDE</td>
                       <td>Banque Nationale de Développement</td>
                       <td>FRANCE</td>
                       <td>AV Bougui</td>
                       <td>Banque agrée</td>
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
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">money</i> Enregistrer une nouvelle institution</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Sigle institution</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Nom institution</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
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

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Type institution</label>
                                <select type="text" class="form-control">
                                  <option value="banque agrée">Banque agrée</option>
                                  <option value="microfinance">Microfinance</option>
                                  <option value="fonds">Fonds</option>
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
                                 <label class="bmd-label-floating">Nom personne ressource</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Pren personne ressource</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Tél personne ressource</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Email personne ressource</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="card">
                              <div class="card-header">
                                <h4>Les secteurs d'activité d'intervention</h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead style="color:#87CEEB;font-weight:bold;">
                                      <th>Id</th>
                                      <th>Secteur d'activité</th>
                                      <th>Actions</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Agriculture</td>
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
                                        <td>2</td>
                                        <td>Pêche maritime</td>
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
                                        <td>3</td>
                                        <td>Activités maritimes</td>
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
                                        <td>4</td>
                                        <td>Biens et services</td>
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
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Secteurs activités</label>
                                <select type="text" class="form-control">
                                  <option value="agriculture">Agriculture</option>
                                  <option value="elevage">Elevage</option>
                                  <option value="pêche maritime">pêche maritime</option>
                                  <option value="Biens et services">Biens et services</option>
                                </select>
                              </div>                           
                            </div> 
                                      
                         </div>
                         <button>Ajouter</button> 

                         <hr>


                         <div class="row">
                            <div class="card">
                              <div class="card-header">
                                <h4>Profils clients/prospects recherchés</h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead style="color:#87CEEB;font-weight:bold;">
                                      <th>Id</th>
                                      <th>Profil de client ou prospect</th>
                                      <th>Actions</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Salarié</td>
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
                                        <td>2</td>
                                        <td>Association</td>
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
                                        <td>3</td>
                                        <td>Groupement</td>
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
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Profil client</label>
                                <select type="text" class="form-control">
                                  <option value="salarie">Salarié</option>
                                  <option value="groupement">Groupement</option>
                                  <option value="association">Association</option>
                                  <option value="organisme">Organisme</option>
                                </select>
                              </div>                           
                            </div> 
                                      
                         </div>
                         <button>Ajouter</button> 

                         <hr> 

                         <div class="row">
                            <div class="card">
                              <div class="card-header">
                                <h4>Documents exigés au requérant </h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead style="color:#87CEEB;font-weight:bold;">
                                      <th>Id</th>
                                      <th>Type de requérant</th>
                                      <th>Document</th>
                                      <th>Actions</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Particulier</td>
                                        <td>CNI</td>
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
                                        <td>2</td>
                                        <td>Particulier</td>
                                        <td>CASIER</td>
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
                                        <td>3</td>
                                        <td>Professionnel</td>
                                        <td>RCCM</td>
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
                                        <td>4</td>
                                        <td>Professionnel</td>
                                        <td>RELEVE</td>
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
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Type de requérant</label>
                                <select type="text" class="form-control">
                                  <option value="particulier">Particulier</option>
                                  <option value="professionnel">Professionnel</option>
                                 
                                </select>
                              </div>                           
                            </div> 
                                      
                         </div>

                         <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Document</label>
                                <select type="text" class="form-control">
                                  <option value="cni">CNI</option>
                                  <option value="ccrm">CCRM</option>
                                  <option value="releve">RELEVE</option>
                                  <option value="registre commerce">REGISTRE COMMERCE</option>
                                 
                                </select>
                              </div>                           
                            </div> 
                                      
                         </div>
                         <button>Ajouter</button>

                        <hr>

                         <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Fourchette montant</label>
                                <select type="text" class="form-control">
                                  <option value="0-50">0-50</option>
                                  <option value="50-100">50-100</option>
                                  <option value="100-200">100-200</option>
                                  <option value="200-500">200-500</option>
                                  <option value="500-1000">500-1000</option>
                                  <option value="1000-5000">1000-5000</option>
                                </select>
                              </div>                           
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
var currentli = 1;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}
</script>
