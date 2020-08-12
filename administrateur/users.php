<?php
include_once('header.php');
?>
<div class="content">
  <div class="container-fluid">
     <div class="col-md-12">
       <div class="card" style="margin-top:5px; height:280px;">
         <div class="card-header" style="background-color: #6495ED;">
           <h4 class="card-title" style="color:black;font-weight:bold;">Panel de recherche</h4>
         </div>
         <div class="card-body">
           <form>
             <div class="row">
               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating">Nom</label>
                   <input type="text" class="form-control">
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating">Prénom</label>
                   <input type="datetime" class="form-control">
                 </div>
               </div>
              </div>

             <div class="row">
               <div class="col-md-4">
                 <div class="form-group">
                   <label class="bmd-label-floating">Institutions</label>

                   <select class="form-control" name="">
                     <option value="BAD">BAD</option>
                     <option value="BNDE">BNDE</option>
                   </select>
                 </div>
               </div>

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
                   <label class="bmd-label-floating">Profile</label>
                   <select type="text" class="form-control">
                     <option value="administrateur">Administrateur</option>
                     <option value="requerant">Candidat</option>
                     <option value="institution">Institution</option>
                   </select>
                 </div>
               </div>


             </div>
             <button type="submit" class="btn pull-right" style="background-color: #6495ED; color:black; font-weight:bold;">rechercher</button>
             <div class="clearfix"></div>
               </div>

           </form>
         </div>

         <div class="card">
              <div class="card-header" style="background-color: #6495ED;">
                <h4 class="card-title" style="color: black;font-weight:bold;">Liste des utilisateurs</h4>
                <button class="btn btn-warning nbtn pull-right" name="button">Ajouter compte</button>
              </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="dataTable">
                    <thead style="color:#87CEEB;font-weight:bold;">
                      <th>Login</th>
                      <th>Prénom</th>
                      <th>Nom</th>
                      <th>Profil</th>
                      <th>Actif</th>
                      <th>Actions</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Alyman</td>
                        <td>Jacqueline</td>
                        <td>Diouf</td>
                        <td>Candidat</td>
                        <td></td>
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
                        <td>Admin</td>
                        <td>François</td>
                        <td>Ndiaye</td>
                        <td>administrateur</td>
                        <td></td>
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


<div class="myForm">
        <form action="" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#6495ED">
                            <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">person</i> Enregistrer un nouvel utilisateur </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Nom</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Prénom</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Profile</label>
                                  <select class="form-control" name="">
                                    <option value="candidat">Candidat</option>
                                    <option value="administrateur">Administrateur</option>
                                    <option value="institution">Institution</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Institutions</label> <sup>*</sup>
                                 <select class="form-control" name="" id="">
                                  <option value="BAD">BAD</option>
                                  <option value="BNDE">BNDE</option>
                                  <option value="ICF">ICF</option>

                                 </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Téléphone</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Email</label>
                                 <input type="email" class="form-control" id="id" name="id" value="" required/>
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

var currentli = 4;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}
</script>
