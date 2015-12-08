<!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">

         <div class="sidebar-toggler hidden-phone"></div>   

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li>
                  <a href="<?php echo base_url("index.php/dashboard");?>" class="">
                      <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                  </a>
              </li>
              <li>
                  <a href="<?php echo base_url("index.php/post");?>" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> Posts
                  </a>
              </li>
              <li>
                  <a href="#" class="">
                      <span class="icon-box"> <i class="icon-group"></i></span> Users
                  </a>
              </li>
              <li>
                  <a href="#" class="">
                      <span class="icon-box"> <i class="icon-comment"></i></span> Comments
                  </a>
              </li>
              <li>
                  <a href="#" class="">
                      <span class="icon-box"> <i class="icon-reorder"></i></span> Menus
                  </a>
              </li>
              
              <li><a class="" href="login.html"><span class="icon-box"><i class="icon-cogs"></i></span> Settings</a></li>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->