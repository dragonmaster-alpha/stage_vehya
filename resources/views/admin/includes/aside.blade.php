<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{env('APP_URL')}}admin/user-profile" class="brand-link">
      <img src="{{env('APP_URL')}}public/dist/img/logo.png" alt="Vehya Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{$user->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!--<li class="nav-item">-->
          <!--  <a href="{{env('APP_URL')}}admin/dashboard" class="nav-link @if($active == 'dashboard')active @endif">-->
          <!--    <i class="nav-icon fas fa-tachometer-alt"></i>-->
          <!--    <p>-->
          <!--      Dashboard-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
         <li class="nav-item">
            <a href="{{env('APP_URL')}}admin/vendor-list" class="nav-link @if($active == 'vendor')active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Vendor 
              </p>
            </a>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a href="{{env('APP_URL')}}admin/customer-list" class="nav-link @if($active == 'customer')active @endif">-->
          <!--    <i class="nav-icon fas fa-copy"></i>-->
          <!--    <p>-->
          <!--      Customer-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <li class="nav-item">
       <a href="#" class="nav-link @if($active == 'customer')active @endif">
        <i class="nav-icon fas fa-copy"></i>
        <p>
      Job
      <i class="fas fa-angle-left right"></i>

      </p>
       </a>
       
       <ul class="nav nav-treeview" >
              <li class="nav-item">
            <a href="{{env('APP_URL').'admin/'}}customer-list/pending" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pending
              </p>
            </a>
             </li>
              <li class="nav-item">
            <a href="{{env('APP_URL').'admin/'}}customer-list/assign" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Assign
              </p>
            </a>
             </li>
              <li class="nav-item">
            <a href="{{env('APP_URL').'admin/'}}customer-list/active" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Accepted
              </p>
            </a>
             </li>
              <li class="nav-item">
            <a href="{{env('APP_URL').'admin/'}}customer-list/complete" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Complete
              </p>
            </a>
             </li>
             
             
          </ul>
      </li>
      <!--    <li class="nav-item">-->
      <!--      <a href="{{env('APP_URL')}}admin/product-list" class="nav-link @if($active == 'product')active @endif">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          Products-->
      <!--        </p>-->
      <!--      </a>-->
      <!--    </li>-->
      <!--    <li class="nav-item">-->
      <!--      <a href="{{env('APP_URL')}}admin/industry-list" class="nav-link @if($active == 'industry')active @endif">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          Industry-->
      <!--        </p>-->
      <!--      </a>-->
      <!--    </li>-->
      <!--    <li class="nav-item">-->
      <!--      <a href="{{env('APP_URL')}}admin/testimonial-list" class="nav-link @if($active == 'testimonial')active @endif">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          Testimonial-->
      <!--        </p>-->
      <!--      </a>-->
      <!--    </li>-->
      <!--    <li class="nav-item">-->
      <!-- <a href="{{env('APP_URL').'admin/'}}reports" class="nav-link @if($active == 'cms')active @endif">-->
      <!--  <i class="nav-icon fas fa-copy"></i>-->
      <!--  <p>-->
      <!--CMS-->
      <!--<i class="fas fa-angle-left right"></i>-->

      <!--</p>-->
      <!-- </a>-->
       
      <!-- <ul class="nav nav-treeview" >-->
      <!--        <li class="nav-item">-->
      <!--      <a href="{{env('APP_URL').'admin/'}}about" class="nav-link">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          About Us-->
      <!--        </p>-->
      <!--      </a>-->
      <!--       </li>-->
      <!--       <li class="nav-item">-->
      <!--      <a href="{{env('APP_URL').'admin/'}}career" class="nav-link">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          Career-->
      <!--        </p>-->
      <!--      </a>-->
      <!--       </li>-->
      <!--       <li class="nav-item">-->
      <!--      <a href="{{env('APP_URL').'admin/'}}blog" class="nav-link">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          Blog-->
      <!--        </p>-->
      <!--      </a>-->
      <!--       </li>-->
      <!--       <li class="nav-item">-->
      <!--        <a href="{{env('APP_URL').'admin/'}}privacy-policy" class="nav-link ">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          Privacy Policy-->
      <!--        </p>-->
      <!--      </a>-->
      <!--    </li>-->
      <!--    <li class="nav-item">-->
      <!--      <a href="{{env('APP_URL').'admin/'}}term-condition" class="nav-link">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          Term Condition-->
      <!--        </p>-->
      <!--        </a>-->
      <!--      </li>-->
      <!--    <li class="nav-item">-->
      <!--      <a href="{{env('APP_URL').'admin/'}}return-refund" class="nav-link">-->
      <!--        <i class="nav-icon fas fa-copy"></i>-->
      <!--        <p>-->
      <!--          Return Refund-->
      <!--        </p>-->
      <!--        </a>-->
      <!--      </li>-->
      <!--    </ul>-->
      <!--</li>-->
      </nav>
    </div>
  </aside>