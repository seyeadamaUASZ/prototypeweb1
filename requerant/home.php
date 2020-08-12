<?php
include_once('layout.php');
?>

<div class="content">
<div class="container-fluid" >
  <div class="col-md-12">
    <div class="card" style="margin-top:5px; height:380px;">
      <div class="card-header" style="background-color: #6495ED;">
        <h4 class="card-title" style="font-weight: bold; color:black;">Panel de recherche</h4>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="bmd-label-floating">Secteur d'activité</label>
                <select type="text" class="form-control">
                <option value="pêche">Pêche</option>
                <option value="agriculture">Agriculture</option>
                <option value="elevage">Elevage</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating">Nature besoin</label>
                <select type="text" class="form-control">
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
                <input type="text" class="form-control">
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
          <button type="submit" class="btn  pull-right" style="background-color: #6495ED; color:black; font-weight:bold">rechercher</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>

  <div class="card" style="margin-top:50px;">
       <div class="card-header" style="background-color:#6495ED;">
         <h4 class="card-title" style="color: black;font-weight:bold;">Mes requêtes</h4>
       </div>
     <div class="card-body">
         <div class="table-responsive">
           <table class="table" id="dataTable">
             <thead style="color: #0080ff;font-weight:bold;">
               <th>
                 Date
               </th>
               <th>
                Intitulé projet
               </th>
               <th>
                 Statut
               </th>
               <th>
                institution
               </th>
               <th>
                contact
               </th>
               <th>
                Date de traitement
               </th>
               <th>
               </th>
             </thead>
             <tbody>
               <tr>
                 <td>
                   14/03/2020
                 </td>
                 <td>
                  Culture et vente de poisson marin
                 </td>
                 <td class="rep">En attente</td>
                 <td>
                  BAD
                 </td>
                 <td>
                   Denis Brown
                 </td>

                 <td>
                   14/05/2020
                 </td>
                 <td>
                   <button class="btn-default btn-just-icon">
                     <i class="material-icons">content_paste</i>
                   </button>
                 </td>
               </tr>

               <tr>
                 <td>
                   20/03/2020
                 </td>
                 <td>
                  Culture et vente de légumes au fruit
                 </td>
                 <td class="rep">Accordé</td>
                 <td>
                  BAD
                 </td>
                 <td>
                  Mamadou BAAl
                 </td>

                 <td>
                   29/05/2020
                 </td>
                 <td>
                   <button class="btn-default btn-just-icon">
                     <i class="material-icons">content_paste</i>
                   </button>
                 </td>
               </tr>

             </tbody>
           </table>
         </div>
       </div>


</div>

</div>

<?php
include_once('footer.php');
?>

<script>
$('document').ready(function() {
   console.log('hello wordl !!!');
   $('.nbtn').on('click', function(event) {
       event.preventDefault();
       $('.myForm #exampleModal').modal()
   });

 $("tr").each(function(i) {
     var nada = $(this).find('.rep').text();
     console.log(($(this).find('.rep').text() === 'En attente'));
     if ($(this).find('.rep').text() === 'En attente') {
      $(this).find('.rep').css('background-color', '#6495ED');
     }
     if ($(this).find('.rep').text() === 'Accordé') {
     $(this).find('.rep').css('background-color', '#0080ff');
     }
     if ($(this).find('.rep').text() === 'Rejeté') {
     $(this).find('.rep').css('background-color', 'red');

     }
    $(this).find('.rep').css('color', 'black');
    $(this).find('.rep').css('font-weight', 'bold');
    $(this).find('.rep').css('font-size', '16px');
 });

});
    var currentli = 0;

      showActivate(currentli);

      function showActivate(n){
        var x = document.getElementsByClassName("active1");
        console.log(x[n]);
        x[n].style.backgroundColor="#6495ED";
      }
</script>
