<?php 
 include_once('layout.php');
?>
<div class="content">
<div class="container-fluid" style="margin-top:5px;">

<div class="col-md-12">

<div class="card">

<div class="card-header" style="background-color:#6495ED;">
 <h4 style="font-weight: bold;">Reporting</h4>
</div>

<div class="card-body">
<div class="table-responsive">

<table class="table">
<thead style="color:#87CEEB;font-weight:bold;">
 <th>Intitulé</th>
 <th>Valeur</th>
</thead>

<tbody>
    <tr>
        <td>Nombre de projets soumis par des particuliers</td>
        <td><p class="card-title" style="font-weight:bold;">25</p></td>
    </tr>
    <tr>
        <td>Nombre de projets soumis par des professionnels</td>
        <td><p class="card-title" style="font-weight:bold;">50</p></td>
    </tr>

    <tr>
        <td>Nombre de projets acceptés</td>
        <td><p class="card-title" style="font-weight:bold;">30</p></td>
    </tr>


    <tr>
        <td>Nombre de projets rejetés</td>
        <td><p class="card-title" style="font-weight:bold;">20</p></td>
    </tr>

    <tr>
        <td>Nombre de projets rejetés pour dossier incomplets</td>
        <td><p class="card-title" style="font-weight:bold;">6</p></td>
    </tr>

    <tr>
        <td>Nombre de projets en cours</td>
        <td><p class="card-title" style="font-weight:bold;">15</p></td>
    </tr>

</tbody>

</table>

<hr>

<p class="card-title" style="font-weight:bold;">Evolution graphique par mois</p>

<div class="col-md-12">
    <div class="card card-chart">
        <div class="card-header" style="background-color:#6495ED">
            <div class="ct-chart" id="websiteViewsChart"></div>
        </div>
        <div class="card-body">
            <h4 class="card-title">Nombre projets soumis par mois</h4>
            <p class="card-category">Indicateurs de performance</p>
        </div>
        <!-- <div class="card-footer">
            <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
        </div> -->
    </div>
</div>

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
    var currentli = 1;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}
</script>