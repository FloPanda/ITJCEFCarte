<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard - Stilearn Metro Admin Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="stilearn metro admin bootstrap">
        <meta name="author" content="stilearning">
        
        
        <!-- styles -->
        <link href="CSS/stilearn-metro/css/bootstrap.css" rel="stylesheet">
        <link href="CSS/stilearn-metro/css/bootstrap-responsive.css" rel="stylesheet">
        <!-- default theme -->
        <link href="CSS/stilearn-metro/css/metro-bootstrap.css" rel="stylesheet">
        <link href="CSS/stilearn-metro/css/metro.css" rel="stylesheet">
        <link href="CSS/stilearn-metro/css/metro-responsive.css" rel="stylesheet">
        <link href="CSS/stilearn-metro/css/metro-helper.css" rel="stylesheet">
        <link href="CSS/stilearn-metro/css/font-awesome.css" rel="stylesheet">
        <link href="CSS/stilearn-metro/css/m-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">
        
        <!-- other -->
        <link href="CSS/stilearn-metro/css/select2/select2-metro.css" rel="stylesheet">
        <link href="CSS/stilearn-metro/css/wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet">
        <link href="CSS/stilearn-metro/css/morrisjs/morris.css" rel="stylesheet">

        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/lte-ie7.js"></script>
        <![endif]-->
        
        <!-- fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="ico/favicon.png">
    </head>
    <body>
        <!-- start header-->
        <header class="header">
            <!-- start navbar, this navbar on top -->
            <div id="navbar-top" class="navbar navbar-cyan">
                <!-- navbar inner-->
                <div class="navbar-inner">
                    <!-- container-->
                    <div class="container">
                        
                        <!--this btn-navbar contains the menu on the side-left, will be seen on portrait tablet and less. -->
                        <a class="btn btn-navbar help-inline" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        
                        <!-- Your brand here, images or text -->
                        <a class="brand" href="index.html">
                            <!-- just a sample brand, replace with your own -->
                            <i class="aweso-th-large"></i> JCEF 
                        </a>
                        
                        <!-- Un-collapse nav -->
                        <div class="nav-uncollapse">
                            <!-- pull left menu-->
                            <ul class="nav pull-left hidden-phone">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="aweso-plus-sign aweso-large"></i> &nbsp;Create <i class="aweso-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a tabindex="-1" href="#">Page</a></li>
                                        <li><a tabindex="-1" href="#">Post</a></li>
                                        <li><a tabindex="-1" href="#">User</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="#">Task</a></li>
                                        <li><a tabindex="-1" href="#">Create Something</a></li>
                                    </ul>
                                </li>
                            </ul><!--/pull left menu-->

                            <!-- pull right menu-->
                            <ul class="nav pull-right">
                                <!-- notification -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="label">3</div>
                                        <i class="aweso-bell-alt"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-extend" role="menu" aria-labelledby="dropdownMenu">
                                        <li class="dropdown-header">You have 4 new notofications</li>
                                        <li>
                                            <a tabindex="-1" href="#">
                                                <div class="media">
                                                    <div class="pull-left">
                                                        <img class="media-object" data-src="holder.js/32x32">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><small class="pull-right">Just Now</small> Update version</h4>
                                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque...</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#">
                                                <div class="media">
                                                    <div class="pull-left">
                                                        <img class="media-object" data-src="holder.js/32x32">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><small class="pull-right">5 minutes</small> Jane Smith</h4>
                                                        <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit...</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#">
                                                <div class="media">
                                                    <div class="pull-left">
                                                        <img class="media-object" data-src="holder.js/32x32">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><small class="pull-right">3 hours</small> New comment</h4>
                                                        <p>Tellus ac cursus commodo, tortor mauris condimentum nibh...</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-footer">
                                            <a tabindex="-1" href="#"><i class="aweso-angle-right pull-right"></i> See all notifications</a>
                                        </li>
                                    </ul>
                                </li><!-- /notification -->
                                
                               
                                
                                <!-- settings -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="aweso-cog"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-extend" data-dropdown="no-propagation" role="menu" aria-labelledby="dropdownMenu">
                                        <li class="dropdown-header">General settings</li>
                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x aweso-columns"></i></div>
                                                <div class="content">Fluid Layout</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="checkbox" id="layout-mode" name="layout-mode" checked />
                                                        <label for="layout-mode"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="backgrounds hide">
                                            <div class="setting-list">
                                                <div class="background-label">Backgrounds</div>
                                                <div class="background-choice">
                                                    <a href="#" class="bg-item bg-black" data-bg="noimage"></a>
                                                    <a href="#" class="bg-item bg-1" data-bg="01.jpg"></a>
                                                    <a href="#" class="bg-item bg-2" data-bg="02.jpg"></a>
                                                    <a href="#" class="bg-item bg-3" data-bg="03.jpg"></a>
                                                    <a href="#" class="bg-item bg-4" data-bg="04.jpg"></a>
                                                    <a href="#" class="bg-item bg-5" data-bg="05.jpg"></a>
                                                    <a href="#" class="bg-item bg-6" data-bg="06.jpg"></a>
                                                    <a href="#" class="bg-item bg-7" data-bg="07.jpg"></a>
                                                    <a href="#" class="bg-item bg-8" data-bg="08.jpg"></a>
                                                    <a href="#" class="bg-item bg-9" data-bg="09.jpg"></a>
                                                    <a href="#" class="bg-item bg-10" data-bg="10.jpg"></a>
                                                    <a href="#" class="bg-item bg-11" data-bg="11.jpg"></a>
                                                    <a href="#" class="bg-item bg-12" data-bg="12.jpg"></a>
                                                    <a href="#" class="bg-item bg-13" data-bg="13.jpg"></a>
                                                    <a href="#" class="bg-item bg-14" data-bg="14.jpg"></a>
                                                    <a href="#" class="bg-item bg-15" data-bg="15.jpg"></a>
                                                    <a href="#" class="bg-item bg-16" data-bg="16.jpg"></a>
                                                    <a href="#" class="bg-item bg-17" data-bg="17.jpg"></a>
                                                    <a href="#" class="bg-item bg-18" data-bg="18.jpg"></a>
                                                    <a href="#" class="bg-item bg-19" data-bg="19.jpg"></a>
                                                    <a href="#" class="bg-item bg-20" data-bg="20.jpg"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x aweso-pushpin"></i></div>
                                                <div class="content">Fixed Header</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="checkbox" id="header-mode" name="header-mode" />
                                                        <label for="header-mode"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x aweso-pushpin"></i></div>
                                                <div class="content">Fixed Sidebar</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="checkbox" id="sidebar-mode" name="sidebar-mode" />
                                                        <label for="sidebar-mode"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x color-silver aweso-sign-blank"></i></div>
                                                <div class="content">Light theme</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="radio" value="light" id="theme-light" name="theme-mode" checked />
                                                        <label for="theme-light"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x aweso-sign-blank"></i></div>
                                                <div class="content">Dark theme</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="radio" value="dark" id="theme-dark" name="theme-mode" />
                                                        <label for="theme-dark"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="setting-list">
                                                <div class="icon"><i class="aweso-2x aweso-tint"></i></div>
                                                <div class="content">Syncronize</div>
                                                <div class="checker">
                                                    <div class="checkbox-slide bg-silver help-block">
                                                        <input class="input-fx" type="checkbox" id="syncronize-theme" name="syncronize-theme" checked />
                                                        <label for="syncronize-theme"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="syncronize">
                                            <div class="setting-list">
                                                <div class="themes-label">Theme colors</div>
                                                <div class="themes-choice">
                                                    <a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
                                                    <a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
                                                    <a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
                                                    <a href="#violet" data-theme="violet" class="bg-violet"></a>
                                                    <a href="#lime" data-theme="lime" class="bg-lime"></a>
                                                    <a href="#green" data-theme="green" class="bg-green"></a>
                                                    <a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
                                                    <a href="#teal" data-theme="teal" class="bg-teal"></a>
                                                    <a href="#pink" data-theme="pink" class="bg-pink"></a>
                                                    <a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
                                                    <a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
                                                    <a href="#red" data-theme="red" class="bg-red"></a>
                                                    <a href="#orange" data-theme="orange" class="bg-orange"></a>
                                                    <a href="#amber" data-theme="amber" class="bg-amber"></a>
                                                    <a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
                                                    <a href="#brown" data-theme="brown" class="bg-brown"></a>
                                                    <a href="#olive" data-theme="olive" class="bg-olive"></a>
                                                    <a href="#steel" data-theme="steel" class="bg-steel"></a>
                                                    <a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
                                                    <a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
                                                    <a href="#black" data-theme="inverse" class="bg-black"></a>
                                                    <a href="#silver" data-theme="silver" class="bg-silver"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="unsyncronize hide">
                                            <div class="setting-list">
                                                <div class="themes-label">Navbar colors</div>
                                                <div class="themes-choice themes-navbar">
                                                    <a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
                                                    <a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
                                                    <a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
                                                    <a href="#violet" data-theme="violet" class="bg-violet"></a>
                                                    <a href="#lime" data-theme="lime" class="bg-lime"></a>
                                                    <a href="#green" data-theme="green" class="bg-green"></a>
                                                    <a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
                                                    <a href="#teal" data-theme="teal" class="bg-teal"></a>
                                                    <a href="#pink" data-theme="pink" class="bg-pink"></a>
                                                    <a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
                                                    <a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
                                                    <a href="#red" data-theme="red" class="bg-red"></a>
                                                    <a href="#orange" data-theme="orange" class="bg-orange"></a>
                                                    <a href="#amber" data-theme="amber" class="bg-amber"></a>
                                                    <a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
                                                    <a href="#brown" data-theme="brown" class="bg-brown"></a>
                                                    <a href="#olive" data-theme="olive" class="bg-olive"></a>
                                                    <a href="#steel" data-theme="steel" class="bg-steel"></a>
                                                    <a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
                                                    <a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
                                                    <a href="#black" data-theme="inverse" class="bg-black"></a>
                                                    <a href="#silver" data-theme="silver" class="bg-silver"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="unsyncronize hide">
                                            <div class="setting-list">
                                                <div class="themes-label">Sidebar colors</div>
                                                <div class="themes-choice themes-sidebar">
                                                    <a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
                                                    <a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
                                                    <a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
                                                    <a href="#violet" data-theme="violet" class="bg-violet"></a>
                                                    <a href="#lime" data-theme="lime" class="bg-lime"></a>
                                                    <a href="#green" data-theme="green" class="bg-green"></a>
                                                    <a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
                                                    <a href="#teal" data-theme="teal" class="bg-teal"></a>
                                                    <a href="#pink" data-theme="pink" class="bg-pink"></a>
                                                    <a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
                                                    <a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
                                                    <a href="#red" data-theme="red" class="bg-red"></a>
                                                    <a href="#orange" data-theme="orange" class="bg-orange"></a>
                                                    <a href="#amber" data-theme="amber" class="bg-amber"></a>
                                                    <a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
                                                    <a href="#brown" data-theme="brown" class="bg-brown"></a>
                                                    <a href="#olive" data-theme="olive" class="bg-olive"></a>
                                                    <a href="#steel" data-theme="steel" class="bg-steel"></a>
                                                    <a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
                                                    <a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
                                                    <a href="#black" data-theme="inverse" class="bg-black"></a>
                                                    <a href="#silver" data-theme="silver" class="bg-silver"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown-footer">
                                            <a tabindex="-1" href="#"><i class="aweso-angle-right pull-right"></i> Settings page</a>
                                        </li>
                                    </ul>
                                </li><!-- /settings -->
                                
                                <!-- account -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        THOMAS UTSEUS <i class="aweso-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a tabindex="-1" href="#">Profil</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="page-login.html">Logout</a></li>
                                    </ul>
                                </li><!-- /account -->
                            </ul><!--/pull right menu-->
                        </div><!-- /uncollapse nav -->
                        
                        <!-- Everything you want hidden at 940px or less, leave it blank! (this use when side-left collapse) -->
                        <div id="navbar-collapse" class="nav-collapse collapse hidden-desktop"></div>
                        
                    </div><!--/container-->
                </div><!--/navbar-inner-->
                
            </div> <!--/ navbar-->
        </header> <!--/ end header-->
        
        <!-- start section content-->
        <section class="section-content">
            <!-- side left, its part to menu on left-->
            <div id="navside" class="side-left" data-collapse="navbar">
                <form class="form-inline search-module" action="?" method="post">
                    <div class="input-append input-append-inline">
                        <input name="search" class="input-block-level" type="text" placeholder="Type to search" />
                        <button class="btn bg-cyan" type="button">
                            <i class="aweso-search"></i>
                        </button>
                    </div>
                </form>
                <!--nav, this structure create with nav (find the bootstrap doc about .nav list) -->
                <ul class="nav nav-list">
				<li><a href="grids.html">Events JCEF</a></li>
                    <li class="dropdown-list">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown-list">Commissions</a>
                        <ul class="dropdown-menu">
                            <li><a href="layout-blank.html">Commission 1</a></li>
                            <li><a href="layout-full-width.html">Commission 2</a></li>
                            <li><a href="layout-top-menus.html">Commission 3</a></li>
                        </ul>
                    </li>
                    <li><a href="widgets.html">Trombinoscope</a></li>
                    
                </ul><!-- /nav -->
            </div><!-- /side left-->
            
            
            
            <!-- start content -->
            <div class="content">
                <!-- content header -->
                <header class="content-header">
                    <!-- content action (optional)-->
                    <ul class="content-action pull-right"></ul> <!-- /content action -->

                    <!-- content title-->
                    <div class="page-header"><h1>Dashboard</h1></div>

                    <!-- content breadcrumb -->
                    <ul class="breadcrumb breadcrumb-inline">
                        <li><a href="#">Home</a> <span class="divider"><i class="aweso-angle-right"></i></span></li>
                        <li class="active">Dashboard</li>
                    </ul>
                </header> <!--/ content header -->
                
                
                <!-- content page -->
                <article class="content-page">
                    <!-- main page, you're application here -->
                    <div class="main-page">
                        <div class="content-inner">
                           
                            
                            
                            <!-- CONTENT MANAGER & CHAT
                            ================================================== -->
                            <!-- row, content manager -->
                            <div class="row-fluid" id="row2">
                                <!-- content manager -->
                                <div class="span8">
                                    <!-- widget, content manager -->
                                    <div class="widget border-cyan" id="widget-cm">
                                        <div class="widget-header bg-cyan">
                                            <!-- widget icon -->
                                            <div class="widget-icon"><i class="aweso-comments"></i></div>
                                            <!-- widget title -->
                                            <h4 class="widget-title">Content Manager</h4>
                                            <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                                            <div class="widget-action color-cyan">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#posts">Posts</a></li>
                                                    <li><a data-toggle="tab" href="#comments">Comments</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="widget-content">
                                            <div class="tab-content">
                                                <!-- posts -->
                                                <div class="tab-pane fade in active" id="posts">
                                                    <table class="table" data-sorter="true"> 
                                                        <thead> 
                                                            <tr> 
                                                                <th>&nbsp;</th> 
                                                                <th>Category</th> 
																<th>Entry Name</th> 
                                                                <th>Created On</th> 
                                                                <th>Actions</th> 
                                                            </tr> 
                                                        </thead> 
                                                        <tbody> 
                                                            <tr> 
                                                                <td><input type="checkbox"></td> 
                                                                <td>TEST EVENEMENT</td> 
                                                                <td>test tes test</td> 
                                                                <td>02-07-2013</td> 
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a class="btn" href="#" title="edit"><i class="aweso-edit"></i></a>
                                                                        <a class="btn" href="#" title="trash"><i class="aweso-trash"></i></a>
                                                                    </div>
                                                                </td> 
                                                            </tr>
                                                        </tbody> 
                                                    </table>
                                                </div><!-- /posts -->
                                                
                                               
                                                
                                            </div><!-- /tab content -->
                                        </div><!-- /widget content -->
                                    </div><!-- /widget, content manager -->
                                </div><!-- /content manager -->
                                
                               
                            
                            
                            
                           
                        </div><!-- /content-inner -->
                    </div><!-- /main-page-->
                </article> <!-- /content page -->
                
                
            </div><!--/ end content -->
        </section> <!-- /end section content-->
        
        
        <!-- footer, I place the footer on here. -->
        <footer class="footer">
            <p>Copyright &copy; JCEF 2015. All Right Reserved.</p>
        </footer><!--/ footer -->
        
        
        
        <!-- javascript
        ================================================== -->
        <!-- required js -->
        <script type="text/javascript" src="CSS/stilearn-metro/js/jquery.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/m-scrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <!-- apps component js, optional -->
        <script type="text/javascript" src="CSS/stilearn-metro/js/morrisjs/raphael-min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/morrisjs/morris.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/select2/select2.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/wysihtml5/wysihtml5-0.3.0.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/jquery.tablesorter.min.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/jquery.equalHeight.js"></script>
        
        <!-- metro js, required! -->
        <script type="text/javascript" src="CSS/stilearn-metro/js/metro-base.js"></script>
        
        <!-- demo js -->
        <script type="text/javascript" src="CSS/stilearn-metro/js/holder/holder.js"></script>
        <script type="text/javascript" src="CSS/stilearn-metro/js/demo/dashboard.js"></script>
    </body>
</html>
