@php 
$data = App\Models\Admin::find(1);
@endphp

@php
$route = Route::current()->getName();
@endphp

<section class="sidebar">	
	
    <div class="user-profile">
        <div class="ulogo">
             <a href="index.html">
              <!-- logo for regular state and mobile devices -->
                 <div class="d-flex align-items-center justify-content-center">					 	
                      <img style="width:100px; height:40px; border-radius:50%;" src="{{asset('upload/admin_images/logo2.png')}}" alt="">
                      <h3><b>{{$data->name}}</b></h3>
                 </div>
            </a>
        </div>
    </div>
  
  <!-- sidebar menu-->
  <ul class="sidebar-menu" data-widget="tree">  
      
    <li>
      <a href="{{route('dashboard')}}">
        <i data-feather="pie-chart"></i>
        <span>Dashboard</span>
      </a>
    </li>  
    
    <li class="treeview">
      <a href="#">
        <i data-feather="message-circle"></i>
        <span>Categories</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{($route == 'manage.categories') ?  'active' : '' }}"><a href="{{route('manage.categories')}}"><i class="ti-more"></i>Manage Categories</a></li>
        <li class="{{($route == 'manage.sub_cat') ?  'active' : '' }}"><a href="{{route('manage.sub_cat')}}"><i class="ti-more"></i>Manage SubCategories</a></li>
      </ul>
    </li> 



    <li class="treeview">
      <a href="#">
        <i data-feather="message-circle"></i>
        <span>Districts</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{($route == 'manage.dist') ?  'active' : '' }}"><a href="{{route('manage.dist')}}"><i class="ti-more"></i>Manage Districts</a></li>
      </ul>
    </li> 
      

    <li class="treeview">
      <a href="#">
        <i data-feather="message-circle"></i>
        <span>Sports Games</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{($route == 'manage.sports') ?  'active' : '' }}"><a href="{{route('manage.sports')}}"><i class="ti-more"></i>Manage Sports</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i data-feather="message-circle"></i>
        <span>Blood Group</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{($route == 'manage.blood') ?  'active' : '' }}"><a href="{{route('manage.blood')}}"><i class="ti-more"></i>Manage Blood Groups</a></li>
      </ul>
    </li>


    <li class="treeview">
      <a href="#">
        <i data-feather="message-circle"></i>
        <span>College Board</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{($route == 'manage.boards') ?  'active' : '' }}"><a href="{{route('manage.boards')}}"><i class="ti-more"></i>Manage College Boards</a></li>
      </ul>
    </li>


    <li class="treeview">
      <a href="#">
        <i data-feather="message-circle"></i>
        <span>Passing Years</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{($route == 'manage.passingyear') ?  'active' : '' }}"><a href="{{route('manage.passingyear')}}"><i class="ti-more"></i>Manage Passing Years</a></li>
      </ul>
    </li>


    <li class="treeview">
      <a href="#">
        <i data-feather="message-circle"></i>
        <span>Admin User</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{($route == 'manage.admin.user.role') ?  'active' : '' }}"><a href="{{route('manage.admin.user.role')}}"><i class="ti-more"></i>Manage Admin User Roles</a></li>
      </ul>
    </li>


    <li class="treeview">
      <a href="#">
        <i data-feather="mail"></i> <span>Category</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      {{-- <ul class="treeview-menu">
        <li class="{{($route == 'all.category') ?  'active' : '' }}"><a href="{{route('all.category')}}"><i class="ti-more"></i>All Category</a></li>
        <li class="{{($route == 'all.subcat') ?  'active' : '' }}"><a href="{{route('all.subcat')}}"><i class="ti-more"></i>All SubCategory</a></li>
        <li class="{{($route == 'all.sub_subcat') ?  'active' : '' }}"><a href="{{route('all.sub_subcat')}}"><i class="ti-more"></i>All Sub -> SubCategory</a></li>
      </ul> --}}
    </li>
    
    {{-- PRODUCT  --}}
    <li class="treeview">
      <a href="#">
        <i data-feather="file"></i>
        <span>Products</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      {{-- <ul class="treeview-menu">
        <li class="{{($route == 'all.products') ?  'active' : '' }}"><a href="{{route('all.products')}}"><i class="ti-more"></i>Add Products</a></li>
        <li class="{{($route == 'manage.products') ?  'active' : '' }}"><a href="{{route('manage.products')}}"><i class="ti-more"></i>Maange Products</a></li>
      </ul> --}}
    </li> 		  
     {{-- sLIDER  --}}

     <li class="treeview">
      <a href="#">
        <i data-feather="file"></i>
        <span>Slider</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      {{-- <ul class="treeview-menu">
        <li class="{{($route == 'manage.slider') ?  'active' : '' }}"><a href="{{route('manage.slider')}}"><i class="ti-more"></i>Manage Slider</a></li>
        </ul> --}}
    </li> 		  

    {{-- coupon code application  --}}
    <li class="treeview">
      <a href="#">
        <i data-feather="file"></i>
        <span>Coupon Code</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      {{-- <ul class="treeview-menu">
        <li class="{{($route == 'manage.coupon') ?  'active' : '' }}"><a href="{{route('manage.coupon')}}"><i class="ti-more"></i>Manage Coupen</a></li>
        </ul> --}}
    </li>


    {{-- area shipping application  --}}
    <li class="treeview">
      <a href="#">
        <i data-feather="file"></i>
        <span>Shipping Area</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      {{-- <ul class="treeview-menu">
        <li class="{{($route == 'manage.division') ?  'active' : '' }}"><a href="{{route('manage.division')}}"><i class="ti-more"></i>Manage Division area</a></li>

        <li class="{{($route == 'manage.district') ?  'active' : '' }}"><a href="{{route('manage.district')}}"><i class="ti-more"></i>Manage District area</a></li>

        <li class="{{($route == 'manage.state') ?  'active' : '' }}"><a href="{{route('manage.state')}}"><i class="ti-more"></i>Manage State area</a></li>
        </ul> --}}
    </li>



    <li class="header nav-small-cap">User Interface</li>
      
    <li class="treeview">
      <a href="#">
        <i data-feather="grid"></i>
        <span>Components</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
        <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
        <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
        <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
        <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
        <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
        <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
        <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
      </ul>
    </li>
    
    <li class="treeview">
      <a href="#">
        <i data-feather="credit-card"></i>
        <span>Cards</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
        <li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
        <li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
      </ul>
    </li>  
      
      
    		  
      
    <li class="header nav-small-cap">EXTRA</li>		  
      
    <li class="treeview">
      <a href="#">
        <i data-feather="layers"></i>
        <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#">Level One</a></li>
        <li class="treeview">
          <a href="#">Level One
            <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level Two</a></li>
            <li class="treeview">
              <a href="#">Level Two
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Three</a></li>
                <li><a href="#">Level Three</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Level One</a></li>
      </ul>
    </li>  
      
    <li>
      <a href="auth_login.html">
        <i data-feather="lock"></i>
        <span>Log Out</span>
      </a>
    </li> 
    
  </ul>
</section>

<div class="sidebar-footer">
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
    <!-- item-->
    <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
</div>