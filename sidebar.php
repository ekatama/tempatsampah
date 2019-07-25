<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          
<?php if($halaman!="admin"){ ?>

      <li class="">
            <a class="" href="dashboard.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>

          <li class="">
            <a class="" href="tempatsampah.php">
                          <i class="icon_trash_alt"></i>
                          <span>Tempat Sampah</span>
                      </a>
          </li>


          <li class="">
            <a class="" href="login.php">
                          <i class="icon_documents_alt"></i>
                          <span>Login</span>
                      </a>
          </li>
<?php } else {?>

      <li class="">
            <a class="" href="dashboard_admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>

          <li class="">
            <a class="" href="tempatsampah.php">
                          <i class="icon_trash_alt"></i>
                          <span>Tempat Sampah</span>
                      </a>
          </li>

          <li class="">
            <a class="" href="data.php">
                          <i class="icon_document_alt"></i>
                          <span>Data</span>
                      </a>
          </li>

<?php } ?>



          



        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>