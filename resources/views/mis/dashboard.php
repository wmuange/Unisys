<?php
session_start();
 include('assets/_config/config.php');
 include('assets/_config/checklogin.php');
 check_login();
 ?>

<!DOCTYPE html>
<html lang="en">
    
    <?php
        //include head partial
        include("assets/_partials/_head.php");
    ?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php
                include("assets/_partials/topbar.php");
            ?>
            <!-- end Topbar -->
            <?php
                include("assets/_partials/sidebar.php");
            ?>
            <!-- ========== Left Sidebar Start ========== -->
            
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-box bg-pattern">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-blue rounded">
                                                <i class="fe-layers avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">120</span></h3>
                                                <p class="text-muted mb-0 text-truncate">Active Deals</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="card-box bg-pattern">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-success rounded">
                                                <i class="fe-award avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">741</span></h3>
                                                <p class="text-muted mb-0 text-truncate">Won Deals</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                            <div class="col-md-4">
                                <div class="card-box bg-pattern">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-danger rounded">
                                                <i class="fe-delete avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">256</span></h3>
                                                <p class="text-muted mb-0 text-truncate">Lost Deals</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Deals Analytics</h4>

                                        <div id="cardCollpase1" class="collapse pt-3 show">
                                            <div id="deals-analytics" style="height: 350px;" class="morris-chart"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Average Time for Deal</h4>

                                        <div id="cardCollpase2" class="collapse pt-3 show">
                                            <div id="morris-bar-example" style="height: 350px;" class="morris-chart"></div>

                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Recent Contacts</h4>

                                        <div id="cardCollpase3" class="collapse pt-3 show">
                                            <div class="table-responsive">
                                                <table class="table table-centered table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Basic Info</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                            <th>Company</th>
                                                            <th>Created Date</th>
                                                            <th style="width: 82px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="table-user">
                                                                <img src="assets/images/users/user-4.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                                            </td>
                                                            <td>
                                                                937-330-1634
                                                            </td>
                                                            <td>
                                                                pauljfrnd@jourrapide.com
                                                            </td>
                                                            <td>
                                                                Vine Corporation
                                                            </td>
                                                            <td>
                                                                07/07/2018
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="table-user">
                                                                <img src="assets/images/users/user-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                                            </td>
                                                            <td>
                                                                215-302-3376
                                                            </td>
                                                            <td>
                                                                bryuellen@dayrep.com
                                                            </td>
                                                            <td>
                                                                Blue Motors
                                                            </td>
                                                            <td>
                                                                09/12/2018
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="table-user">
                                                                <img src="assets/images/users/user-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn S. Collier</a>
                                                            </td>
                                                            <td>
                                                                828-216-2190
                                                            </td>
                                                            <td>
                                                                collier@jourrapide.com
                                                            </td>
                                                            <td>
                                                                Arcanetworks
                                                            </td>
                                                            <td>
                                                                06/30/2018
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="table-user">
                                                                <img src="assets/images/users/user-1.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy Kauper</a>
                                                            </td>
                                                            <td>
                                                                (216) 75 612 706
                                                            </td>
                                                            <td>
                                                                thykauper@rhyta.com
                                                            </td>
                                                            <td>
                                                                Boar Records
                                                            </td>
                                                            <td>
                                                                09/08/2018
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="table-user">
                                                                <img src="assets/images/users/user-5.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara Raws</a>
                                                            </td>
                                                            <td>
                                                                (02) 75 150 655
                                                            </td>
                                                            <td>
                                                                austin@dayrep.com
                                                            </td>
                                                            <td>
                                                                Bearings
                                                            </td>
                                                            <td>
                                                                07/15/2018
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>

                                                        
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table-responsive-->

                                        </div> <!-- end .collapse-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Sales by Product Group</h4>

                                        <div id="cardCollpase4" class="collapse pt-3 show">
                                            <div id="morris-donut-example" style="height: 310px;" class="morris-chart"></div>
                                            <div class="text-center">
                                                <p class="text-muted font-15 font-family-secondary mb-0">
                                                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Group 1</span>
                                                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Group 2</span>
                                                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Group 3</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php
                include("assets/_partials/_footer2.php");
                ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox1" type="checkbox" checked>
                        <label for="Rcheckbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox2" type="checkbox" checked>
                        <label for="Rcheckbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox3" type="checkbox">
                        <label for="Rcheckbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox4" type="checkbox" checked>
                        <label for="Rcheckbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="Rcheckbox5" type="checkbox" checked>
                        <label for="Rcheckbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- CRM Dashboard init js-->
        <script src="assets/js/pages/crm-dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>