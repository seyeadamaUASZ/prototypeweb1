<?php
include_once('header.php');
?>


<div class="content">
<div class="container-fluid">
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">folder</i>
                  </div>
                  <p class="card-category">Dossiers traités</p>
                  <h3 class="card-title">50

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i> -->
                    <!-- <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">folder</i>
                  </div>
                  <p class="card-category">Dossiers acceptés</p>
                  <h3 class="card-title">30</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons">date_range</i> Last 24 Hours -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">folder</i>
                  </div>
                  <p class="card-category">Dossiers rejetés</p>
                  <h3 class="card-title">15</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   <!--  <i class="material-icons">local_offer</i> Tracked from Github -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">folder</i>
                  </div>
                  <p class="card-category">En traitement</p>
                  <h3 class="card-title">5</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <!--   <i class="material-icons">update</i> Just Updated -->
                  </div>
                </div>
              </div>
            </div>
          </div>



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

</div>

</div>
</div>
<br>


          <div class="card">
          <div class="card-header" style="background-color: #6495ED;">
            <h4 style="color: black; font-weight: bold;">Evolution des requêtes soumises par jour</h4>
          </div>
          <div class="card-body">
            <div class="card card-chart">
              <div class="card-header card-header-success">
                <div class="ct-chart" id="dailySalesChart" style="height:350px;"></div>
              </div>
            </div>
          </div>
            </div>

          </div>
</div>



<div class="fixed-plugin">
  <div class="dropdown show-dropdown">
    <a href="#" data-toggle="dropdown">
      <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="dropdown-menu">
      <li class="header-title"> Sidebar Filters</li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger active-color">
          <div class="badge-colors ml-auto mr-auto">
            <span class="badge filter badge-purple" data-color="purple"></span>
            <span class="badge filter badge-azure" data-color="azure"></span>
            <span class="badge filter badge-green" data-color="green"></span>
            <span class="badge filter badge-warning" data-color="orange"></span>
            <span class="badge filter badge-danger" data-color="danger"></span>
            <span class="badge filter badge-rose active" data-color="rose"></span>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>
      <li class="header-title">Images</li>
      <li class="active">
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="../assets/img/sidebar-1.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="../assets/img/sidebar-2.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="../assets/img/sidebar-3.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="../assets/img/sidebar-4.jpg" alt="">
        </a>
      </li>
      <li class="button-container">
        <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
      </li>
      <!-- <li class="header-title">Want more components?</li>
          <li class="button-container">
              <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                Get the pro version
              </a>
          </li> -->
      <li class="button-container">
        <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
          View Documentation
        </a>
      </li>
      <li class="button-container github-star">
        <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
      </li>
      <li class="header-title">Thank you for 95 shares!</li>
      <li class="button-container text-center">
        <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
        <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
        <br>
        <br>
      </li>
    </ul>
  </div>
</div>



<?php
include_once('footer.php');
?>

<script>
var currentli = 0;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}
</script>
