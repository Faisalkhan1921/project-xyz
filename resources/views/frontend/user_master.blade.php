
{{-- @php
$id = Auth::user()->id;
$adminData = App\Models\User::find($id);
@endphp --}}
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>UG Adm Portal</title>
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

      @include('frontend.body.style')
    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
           @include('frontend.body.header')

            <!-- ========== Left Sidebar Start ========== -->
           @include('frontend.body.sidebar')  
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

               @yield('user_content')
                <!-- End Page-content -->
               
           @include('frontend.body.footer')  
              
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('frontend.body.script')
    </body>

</html>