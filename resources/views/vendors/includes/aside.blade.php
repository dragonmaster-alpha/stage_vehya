<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{env('APP_URL')}}vendors/user-profile" class="brand-link">
      <img src="{{env('APP_URL')}}public/dist/img/logo.png" alt="Vehya Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{$user->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
            <a href="{{env('APP_URL')}}vendors/vendor-list-show/{{$user->id}}" class="nav-link @if($active == 'user')active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               My Profile 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{env('APP_URL')}}vendors/electrician-list" class="nav-link @if($active == 'electrician')active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                My Electricians
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{env('APP_URL').'vendors/'}}job-list/assign" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                New Jobs
              </p>
            </a>
             </li>
             <li class="nav-item">
              <a href="{{env('APP_URL').'vendors/'}}job-list/active" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Active Jobs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{env('APP_URL').'vendors/'}}job-list/complete" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Completed Jobs
              </p>
              </a>
            </li>
          
          
       <!--   <li class="nav-item">-->
       <!--    <a href="{{env('APP_URL').'vendors/'}}job-list" class="nav-link @if($active == 'job')active @endif">-->
       <!--   <i class="nav-icon fas fa-copy"></i>-->
       <!--   <p>-->
       <!--       Job-->
       <!--       <i class="fas fa-angle-left right"></i>-->
       <!--   </p>-->
       <!--</a>-->
       
       <!--<ul class="nav nav-treeview" >-->
       <!--       <li class="nav-item">-->
       <!--     <a href="{{env('APP_URL').'vendors/'}}job-list/assign" class="nav-link">-->
       <!--       <i class="nav-icon fas fa-copy"></i>-->
       <!--       <p>-->
       <!--         New Job-->
       <!--       </p>-->
       <!--     </a>-->
       <!--      </li>-->
       <!--      <li class="nav-item">-->
       <!--       <a href="{{env('APP_URL').'vendors/'}}job-list/active" class="nav-link ">-->
       <!--       <i class="nav-icon fas fa-copy"></i>-->
       <!--       <p>-->
       <!--         Active Job-->
       <!--       </p>-->
       <!--     </a>-->
       <!--   </li>-->
       <!--   <li class="nav-item">-->
       <!--     <a href="{{env('APP_URL').'vendors/'}}job-list/complete" class="nav-link">-->
       <!--       <i class="nav-icon fas fa-copy"></i>-->
       <!--       <p>-->
       <!--         Complete Job-->
       <!--       </p>-->
       <!--       </a>-->
       <!--     </li>-->
          
          </ul>
      </li>
          
      </nav>
    </div>
  </aside>