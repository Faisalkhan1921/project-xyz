<style>
    li, a
    {
        color: white;
    }
</style>
<div class="vertical-menu" style="color:white;background: rgba(3, 49, 31, 0.74);">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                {{-- <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle"> --}}
                <img class="rounded-circle avatar-xl" src="{{ (!empty($iddata->image))? url('upload/admin_images/'.$iddata->image):url('upload/no_image.jpg') }}" alt="Card image cap">

            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1 text-light">{{Auth::user()->name}}</h4>
                <span class="text-muted text-light"><i class="ri-record-circle-line align-middle font-size-14 text-success bg-light"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title text-light" style="font-size:14px;">Student Dashboard</li>

                <li>
                    <a href="{{url('/dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line text-light"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span class="text-light " style="font-size:19px;">Summary</span>
                    </a>
                </li>

{{-- ======================= candidate section starts ======================= --}}
                <li class="menu-title text-light" style="font-size:14px;">Candidate fillable Section</li>


                <li>
                    <a href="{{route('user.bank.chalan')}}" class="waves-effect">
                        <i class="ri-dashboard-line text-light"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span class="text-light" style="font-size:15px;"><strong>Step 2:</strong><br>Bank Chalan</span>
                    </a>
                </li>
                

                <li>
                    <a href="{{route('user.basic.info')}}" class="waves-effect">
                        <i class="ri-dashboard-line text-light"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span class="text-light" style="font-size:15px;"><strong>Step 2:</strong><br>Personal Information</span>
                    </a>
                </li>
         
                <li>
                    <a href="{{route('user.edu.info')}}" class="waves-effect">
                        <i class="ri-dashboard-line text-light"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span class="text-light" style="font-size:15px;"><strong>Step 3:</strong><br>Education Information</span>
                    </a>
                </li>

                
                <li>
                    <a href="{{route('user.profile.info')}}" class="waves-effect">
                        <i class="ri-dashboard-line text-light"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span class="text-light" style="font-size:15px;"><strong>Step 4:</strong><br>Upload Profile Information</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('user.documents.info')}}" class="waves-effect">
                        <i class="ri-dashboard-line text-light"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span class="text-light" style="font-size:15px;"><strong>Step 5:</strong><br>Upload Documents</span>
                    </a>


        




{{-- ======================= candidate section ends ======================= --}}



{{-- ======================= candidate self finance section starts ======================= --}}
{{-- 
                <li class="menu-title">Self Finance</li>

                <li>
                    <a href="{{url('/dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span><strong>Apply on Self Finance</strong></span>
                    </a>
                </li> --}}

{{-- ======================= candidate self finance section ends ======================= --}}


{{-- ======================= candidate Quota Section section starts ======================= --}}

{{-- <li class="menu-title">Quota Section</li>

<li>
    <a href="{{url('/dashboard')}}" class="waves-effect">
        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
        <span><strong>Apply on Quota</strong></span>
    </a>
</li> --}}

{{-- ======================= candidate Quota Section section ends ======================= --}}


{{-- ======================= candidate Quota Section section starts ======================= --}}

{{-- <li class="menu-title">Help Section</li>

<li>
    <a href="{{url('/dashboard')}}" class="waves-effect">
        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
        <span><strong>Help Desk</strong></span>
    </a>
</li> --}}
{{-- ======================= candidate Quota Section section ends ======================= --}}





                {{-- <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Calendar</span>
                    </a>
                </li> --}}
    
               
{{-- 
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                                <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                                <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                                <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

                {{-- <li class="menu-title">Blog Section</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> --}}
                        {{-- <li><a href="{{route('all.blog.category')}}">Display Blog Categories</a></li>
                        <li><a href="{{route('add.blog.category')}}">Add Blog Category</a></li> --}}
                        
                    {{-- </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Blog Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> --}}
                        {{-- <li><a href="{{route('display.blog.datas')}}">Display Blog Data</a></li>
                        <li><a href="{{route('add.blog.data')}}">Add Blog Data</a></li> --}}
                        
                    {{-- </ul>
                </li>


                <li class="menu-title">Footer Section</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Footer</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> --}}
                        {{-- <li><a href="{{route('display.footer.content')}}">Display Footer Content</a></li> --}}
                        {{-- <li><a href="{{route('edit.footer.content')}}">Update Footer Content</a></li> --}}
                        
                    {{-- </ul>
                </li>

                <li class="menu-title">Contact Section</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Contact us</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> --}}
                        {{-- <li><a href="{{route('display.quick.contact.message')}}">Quick Contact</a></li>
                        <li><a href="{{route('display.contact.message')}}">Display Contact Message</a></li> --}}
                        {{-- <li><a href="{{route('edit.footer.content')}}">Update Footer Content</a></li> --}}
                        
                    {{-- </ul>
                </li> --}}


                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html">Starter Page</a></li>
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-directory.html">Directory</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li> --}}

                {{-- <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-pencil-ruler-2-line"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                        <li><a href="ui-images.html">Images</a></li>
                        <li><a href="ui-lightbox.html">Lightbox</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-offcanvas.html">Offcavas</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-video.html">Video</a></li>
                        <li><a href="ui-general.html">General</a></li>
            
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-vip-crown-2-line"></i>
                        <span>Advanced UI</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="advance-rangeslider.html">Range Slider</a></li>
                        <li><a href="advance-roundslider.html">Round Slider</a></li>
                        <li><a href="advance-session-timeout.html">Session Timeout</a></li>
                        <li><a href="advance-sweet-alert.html">Sweetalert 2</a></li>
                        <li><a href="advance-rating.html">Rating</a></li>
                        <li><a href="advance-notifications.html">Notifications</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ri-eraser-fill"></i>
                        <span class="badge rounded-pill bg-danger float-end">8</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-advanced.html">Form Advanced Plugins</a></li>
                        <li><a href="form-editors.html">Form Editors</a></li>
                        <li><a href="form-uploads.html">Form File Upload</a></li>
                        <li><a href="form-xeditable.html">Form X-editable</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-table-2"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-bar-chart-line"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.html">Apex Charts</a></li>
                        <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                        <li><a href="charts-flot.html">Flot Charts</a></li>
                        <li><a href="charts-knob.html">Jquery Knob Charts</a></li>
                        <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-brush-line"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-remix.html">Remix Icons</a></li>
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome 5</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-map-pin-line"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-share-line"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>