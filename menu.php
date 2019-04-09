<?php

$activePage = str_replace('.php', '', basename($_SERVER['PHP_SELF']));

?>

<aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="assets/images/logo1-icon.png" width="50px" alt="elegant admin template"></span>
                <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li><a href="<?php echo $base_url ?>">Dashboard<i class="icon-speedometer"></i></a></li>    
                        <li><a href="<?php echo $base_url ?>">Input Data Anak<i class="ti-pencil-alt"></i></a></li>                 

                       <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Master Data</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Data Ortu<i class="ti-support"></i></a></li>
                                <li><a href="app-chat.html">Data Anak<i class="ti-support"></i></a></li>
                                <li><a href="app-ticket.html">Data Siswa<i class="ti-support"></i></a></li>
                                <li><a href="app-ticket.html">Data Saudara<i class="ti-support"></i></a></li>
                                <li><a href="app-ticket.html">Data Lain-lain<i class="ti-support"></i></a></li>
                            </ul>
                        </li>
                      
                        <li class="nav-small-cap"></li>
                        <li> <a class="waves-effect waves-dark" href="documentation/documentation.html" aria-expanded="false"><i class="far fa-circle text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
</aside>