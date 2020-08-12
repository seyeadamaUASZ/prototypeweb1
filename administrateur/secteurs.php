<?php
include_once('header.php');
?>

<div class="content">
  <div class="container-fluid">

    <div class="card" style="margin-top:5px; height:210px;">
      <div class="card-header" style="background-color: #6495ED;">
        <h4 class="card-title" style="color:black; font-weight:bold;">Panel de recherche</h4>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Secteur d'activités</label>
                <select class="form-control" name="">
                  <option value="agriculture">Agriculture</option>
                  <option value="menuiserie">Menuiserie</option>
                  <option value="pêche">Pêche</option>
                </select>
              </div>
            </div>
           </div>

          <button type="submit" class="btn pull-right" style="background-color: #6495ED;color:black;font-weight:bold;">rechercher</button>
          <div class="clearfix"></div>
            </div>

        </form>
      </div>

    <div class="card" style="margin-top:100px;">
         <div class="card-header" style="background-color: #6495ED;">
           <h4 class="card-title" style="color: black;font-weight:bold;">Liste des Secteurs</h4>
           <button class="btn btn-warning nbtn pull-right" name="button"><i class="material-icons">add</i> Ajouter</button>
         </div>
       <div class="card-body">
           <div class="table-responsive">
             <table class="table" id="dataTable">
               <thead style="color:#87CEEB; font-weight:bold;">
                 <th>Code Secteur</th>
                 <th>Nom Secteur d'activités</th>
                 <th>Actions</th>
               </thead>
               <tbody>
                 <tr>
                   <td>SEC1</td>
                   <td>Agriculture fruitiere</td>
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
                   <td>SEC2</td>
                   <td>Menuiserie métallique,soudure,façonnage</td>

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
                   <td>SEC3</td>
                   <td>Menuiserie boie,tapisserie</td>

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


<div class="myForm">
        <form action="" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#6495ED">
                            <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">folder</i> Enregistrer un nouveau secteur </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Code secteur</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Nom secteur</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
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
include_once('footer.php')
?>
<script>
$('document').ready(function(){
  $('.nbtn').on('click',function(event){
        event.preventDefault();
        $('.myForm #exampleModal').modal()
    });
})

var currentli = 3;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}

</script>
