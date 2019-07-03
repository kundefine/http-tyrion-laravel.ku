<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="{{asset('backend/favicon.ico')}}" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="{{asset('backend/css/theme-default.css')}}"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">ATLANT</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{asset('backend/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{asset('backend/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>                    
                    <li>
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                        <ul>
                            <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                            <li><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                                <ul>
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                                <ul>
                                    <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                                    <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                                    <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                            <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                            <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                            <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                            <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                            <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-file"></span> Blog</a>
                                
                                <ul>                                    
                                    <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                                    <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                                <ul>                                    
                                    <li><a href="pages-login.html">App Login</a></li>
                                    <li><a href="pages-login-website.html">Website Login</a></li>
                                    <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                                <ul>                                    
                                    <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                                    <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                                    <li><a href="pages-error-500.html"> Error 500</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
                        <ul>
                            <li><a href="layout-boxed.html">Boxed</a></li>
                            <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                            <li><a href="layout-nav-top.html">Navigation Top</a></li>
                            <li><a href="layout-nav-right.html">Navigation Right</a></li>
                            <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
                            <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                            <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                            <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                            <li><a href="layout-search-left.html">Search Left Side</a></li>                            
                            <li><a href="blank.html">Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="xn-title">Components</li>                    
                    <li class="xn-openable active">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>                        
                        <ul>
                            <li class="active"><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>
                            <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                            <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                            <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                            <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                            <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                            <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>
                            <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>        
                            <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                        </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li>
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                                <div class="informer informer-danger">New</div>
                                <ul>
                                    <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                                    <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                                    <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul> 
                            </li>
                            <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                            <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                        <ul>
                            <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                            <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                            <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                            <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
                        </ul>
                    </li>                  
                    <li>
                        <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                        <ul>                            
                            <li class="xn-openable">
                                <a href="#">Second Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Third Level</a>
                                        <ul>
                                            <li class="xn-openable">
                                                <a href="#">Fourth Level</a>
                                                <ul>
                                                    <li><a href="#">Fifth Level</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="{{asset('backend/assets/images/users/user2.jpg')}}" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="{{asset('backend/assets/images/users/user.jpg')}}" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="{{asset('backend/assets/images/users/user3.jpg')}}" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="{{asset('backend/assets/images/users/user6.jpg')}}" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">UI Kits</a></li>
                    <li class="active">Widgets</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Widgets</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <!-- TILES -->                
                    <div class="row">
                        <div class="col-md-2">                        
                            <a href="#" class="tile tile-danger tile-valign"><span class="fa fa-laptop"></span></a>                        
                        </div>                    
                        <div class="col-md-2">                        
                            <a href="#" class="tile tile-success tile-valign"><span class="fa fa-calendar"></span></a>
                        </div>                                        
                        <div class="col-md-2">                        
                            <a href="#" class="tile tile-warning tile-valign">New
                                <div class="informer informer-default dir-bl"><span class="fa fa-globe"></span> Lates Somethink</div>
                            </a>                        
                        </div>
                        <div class="col-md-2">                        
                            <a href="#" class="tile tile-info">
                                15
                                <p>September</p>                            
                                <div class="informer informer-default dir-tr"><span class="fa fa-calendar"></span></div>
                            </a>                        
                        </div>
                        <div class="col-md-2">                        
                            <a href="#" class="tile tile-default">
                                57%
                                <p>New Visitors</p>                            
                                <div class="informer informer-danger dir-tr"><span class="fa fa-caret-down"></span></div>
                            </a>                        
                        </div>
                        <div class="col-md-2">                        
                            <a href="#" class="tile tile-primary">
                                $25
                                <p>Buy It</p>                            
                                <div class="informer informer-default"><span class="fa fa-shopping-cart"></span></div>
                            </a>                        
                        </div>
                    </div>                       
                    <div class="row">
                        <div class="col-md-3">                        
                            <a href="#" class="tile tile-default">
                                254
                                <p>Sales today</p>
                                <div class="informer informer-primary">08.09.14</div>
                                <div class="informer informer-success dir-tr"><span class="fa fa-caret-up"></span></div>
                            </a>                        
                        </div>
                        <div class="col-md-3">                        
                            <a href="#" class="tile tile-primary">
                                6,432
                                <p>Visitors Today</p>
                                <div class="informer informer-warning"><span class="fa fa-caret-down"></span></div>
                                <div class="informer informer-default dir-tr">10.09.14</div>
                            </a>
                        </div>
                        <div class="col-md-3">                        
                            <a href="#" class="tile tile-success tile-valign">9.5gb
                                <div class="informer informer-default dir-tr"><span class="fa fa-cloud"></span></div>
                                <div class="informer informer-default dir-bl">Free Disk Space</div>
                            </a>                                                    
                        </div>
                        <div class="col-md-3">                        
                            <a href="#" class="tile tile-info tile-valign">
                                1,153
                                <div class="informer informer-default">Registred Users</div>
                                <div class="informer informer-default dir-br"><span class="fa fa-users"></span></div>
                            </a>                            
                        </div>
                    </div>         
                    <!-- END TILES -->


                    <!-- WIDGETS -->
                    <div class="row">
                        <div class="col-md-3">

                            <div class="widget widget-primary">
                                <div class="widget-title">TOTAL</div>
                                <div class="widget-subtitle">26/08/2014</div>
                                <div class="widget-int">$ <span data-toggle="counter" data-to="1564">1,564</span></div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-left"><span class="fa fa-upload"></span></a>
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="widget widget-success widget-no-subtitle">
                                <div class="widget-big-int">$ <span class="num-count">4,381</span></div>                            
                                <div class="widget-subtitle">Latest transaction</div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-left"><span class="fa fa-cloud"></span></a>
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                        

                        </div>
                        <div class="col-md-3">

                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        

                        </div>
                        <div class="col-md-3">

                            <div class="widget widget-info widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#d6f4ff" data-fgColor="#FFF" value="80%" data-readOnly="true" data-thickness=".2"/>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-big-int"><span class="num-count">80</span>%</div>
                                    <div class="widget-title">Disk Space</div>
                                    <div class="widget-subtitle">Total free space</div>                                
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                        

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">

                            <div class="widget widget-warning widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Visitors</div>                                                                        
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Returned</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,695</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">New</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,977</div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="widget widget-primary widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">599</div>
                                    <div class="widget-title">Registred users</div>
                                    <div class="widget-subtitle">On our website and app</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="widget widget-success widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">6,953</div>
                                    <div class="widget-title">Total visitors</div>
                                    <div class="widget-subtitle">That visited our site today</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="widget widget-warning widget-item-icon">
                                <div class="widget-item-right">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data-left">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">New messages</div>
                                    <div class="widget-subtitle">In your mailbox</div>
                                </div>                                     
                            </div>

                        </div>

                    </div>
                    <!-- END WIDGETS -->

                    <div class="row">

                        <!-- NEWS WIDGET -->
                        <div class="col-md-4">

                            <div class="panel panel-default">                            
                                <div class="panel-body panel-body-image">
                                    <img src="{{asset('backend/assets/images/ocean.jpg')}}" alt="Ocean"/>
                                    <a href="#" class="panel-body-inform">
                                        <span class="fa fa-heart-o"></span>
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <h3>Ocean &mdash; body of saline water</h3>
                                    <p>On Earth, an ocean is one of the major conventional divisions of the World Ocean, which occupies two-thirds of the planet's surface.</p>
                                </div>
                                <div class="panel-footer text-muted">
                                    <span class="fa fa-clock-o"></span> 3d ago &nbsp;&nbsp;&nbsp;
                                    <span class="fa fa-comment-o"></span> 36
                                </div>
                            </div>

                        </div>
                        <!-- END NEWS WIDGET -->

                        <!-- PROFILE WIDGET -->
                        <div class="col-md-4">

                            <div class="panel panel-default">
                                <div class="panel-body profile bg-info">

                                    <div class="profile-image">
                                        <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe">
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">John Doe</div>
                                        <div class="profile-data-title">UI/UX Designer</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left"><span class="fa fa-twitter"></span></a>
                                        <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                                    </div>

                                </div>
                                <div class="panel-body list-group">
                                    <a href="#" class="list-group-item"><span class="fa fa-user"></span> Profile</a>
                                    <a href="#" class="list-group-item"><span class="fa fa-cog"></span> Settings</a>
                                    <a href="#" class="list-group-item"><span class="fa fa-bar-chart-o"></span> Activity</a>
                                    <a href="#" class="list-group-item"><span class="fa fa-sign-out"></span> Logoff</a>
                                </div>                            
                            </div>

                        </div>
                        <!-- END PROFILE WIDGET -->

                        <!-- SETTINGS WIDGET -->
                        <div class="col-md-4">   

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-cogs"></span> Settings</h3>                                
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                   
                                </div>
                                <div class="panel-body">
                                    <form action="#" role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label text-left">Wi-Fi</label>
                                            <div class="col-md-3">
                                                <label class="switch">
                                                    <input type="checkbox" class="switch" value="1" checked/>
                                                    <span></span>
                                                </label>                                            
                                            </div>
                                            <div class="col-md-5">
                                                <span class="help-block">Wi-Fi networking</span>
                                            </div>
                                        </div>                                    
                                        <div class="form-group">
                                            <label class="col-md-4 control-label text-left">Location</label>
                                            <div class="col-md-3">
                                                <label class="switch">
                                                    <input type="checkbox" class="switch" value="1" checked/>
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-5">
                                                <span class="help-block">Access your location</span>
                                            </div>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label text-left">Celluar</label>
                                            <div class="col-md-3">
                                                <label class="switch">
                                                    <input type="checkbox" class="switch" value="1"/>
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-5">
                                                <span class="help-block">They steal money :(</span>
                                            </div>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label text-left">Find my Phone</label>
                                            <div class="col-md-3">
                                                <label class="switch">
                                                    <input type="checkbox" class="switch" value="1" checked/>
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-5">
                                                <span class="help-block">Nice feature</span>
                                            </div>                                                                                
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label text-left">Sounds</label>
                                            <div class="col-md-3">
                                                <label class="switch">
                                                    <input type="checkbox" class="switch" value="1"/>
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-5">
                                                <span class="help-block">Wanna mute?</span>
                                            </div>                                                                                
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- END SETTINGS WIDGET -->

                    </div>

                    <div class="row">
                        <!-- MAIL COMPOSE WIDGET -->
                        <div class="col-md-4">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe" class="panel-title-image"/>
                                    <h3 class="panel-title">John Doe <small>johndoe@domain.com</small></h3>                                      
                                </div>
                                <div class="panel-body">
                                    <button class="btn btn-danger btn-block"><span class="fa fa-edit"></span> COMPOSE</button>
                                </div>
                                <div class="panel-body list-group">
                                    <a href="#" class="list-group-item"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-danger">5</span></a>
                                    <a href="#" class="list-group-item"><span class="fa fa-star"></span> Starred</a>                                
                                    <a href="#" class="list-group-item"><span class="fa fa-envelope-o"></span> Sent Mail <span class="badge badge-default">21</span></a>
                                </div>
                            </div>

                        </div>
                        <!-- END MAIL COMPOSE WIDGET -->


                        <div class="col-md-4">

                            <!-- SEARCH WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-body panel-body-search">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                        <input type="text" class="form-control" placeholder="Search..."/>
                                    </div>                                                                
                                </div>
                            </div>
                            <!-- END SEARCH WIDGET -->

                            <!-- TABS WIDGET -->
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#tab1" data-toggle="tab">HTML</a></li>
                                    <li><a href="#tab2" data-toggle="tab">CSS</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Javascript</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <p>Curabitur porttitor, lacus et mattis consequat, <strong>lectus augue</strong> molestie enim, nec dignissim felis eros at nibh.</p>
                                        <p>Nulla vitae sodales est, eu imperdiet mauris <a href="#">click here</a>.</p>
                                        <p>Sed augue risus, tempor vitae metus ac, bibendum elementum erat. Mauris volutpat at nulla sit amet ullamcorper.</p>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <p><strong>Etiam eu augue</strong> &mdash; ac augue bibendum finibus. <i>Quisque aliquam mi eget consectetur finibus</i>. Duis ornare velit a diam auctor iaculis. Donec vitae rutrum est, nec convallis nulla.</p>
                                        <p>Nulla laoreet viverra nisi.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at finibus risus. Fusce suscipit, neque vel sodales suscipit.</p>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <p>Integer fringilla, augue in eleifend vehicula, sapien sem hendrerit sapien,</p>
                                        <p>Praesent a tincidunt nisi, eget placerat eros. Sed ullamcorper metus quis dui malesuada, vitae rutrum nibh feugiat.</p>
                                        <p>Vivamus lacinia, leo eu cursus commodo, diam nunc suscipit tellus, in viverra nulla magna ut enim. </p>
                                    </div>                        
                                </div>
                            </div>                        
                            <!-- END TABS WIDGET -->
                        </div>


                        <!-- MAP WIDGET -->
                        <div class="col-md-4">

                            <div class="panel panel-default">
                                <div class="panel-body panel-body-map">
                                    <iframe src="{{asset('backend/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13252.160485772056!2d151.2141455714465!3d-33.86285686723973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fa3c579dc15711e!2sSydney+Conservatorium+of+Music!5e0!3m2!1sru!2sua!4v1410197365574')}}" width="100%" height="200" frameborder="0" style="border:0"></iframe>
                                </div>
                                <div class="panel-body">
                                    <h3><span class="fa fa-map-marker"></span> Sydney Conservatorium of Music</h3>
                                    <p>Conservatorium Rd, Sydney NSW, Australia</p>
                                </div>
                            </div>

                        </div>
                        <!-- END MAP WIDGET -->

                    </div>

                    <div class="row">

                        <div class="col-md-4">

                            <!-- LOGIN WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>Log In</h2>
                                    <p>Please fill in your basic personal information in the folowing fields:</p>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Login or E-mail"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" placeholder="Your Password"/>
                                    </div>                                
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="1" checked> Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-success btn-block">Log In</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END LOGIN WIDGET -->

                        </div>

                        <div class="col-md-4">

                            <!-- CONTACT LIST WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Contacts</h3>         
                                    <ul class="panel-controls">
                                        <li><a href="#" class="control-primary"><span class="fa fa-plus"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body list-group list-group-contacts">                                
                                    <a href="#" class="list-group-item">                                 
                                        <div class="list-group-status status-online"></div>
                                        <img src="{{asset('backend/assets/images/users/user4.jpg')}}" class="pull-left" alt="Brad Pitt"/>
                                        <span class="contacts-title">Brad Pitt</span>
                                        <p>Actor and Film Producer</p>                                                                        
                                        <div class="list-group-controls">
                                            <button class="btn btn-success"><span class="fa fa-phone"></span></button>
                                        </div>                                    
                                    </a>
                                    <a href="#" class="list-group-item">                                 
                                        <div class="list-group-status status-online"></div>
                                        <img src="{{asset('backend/assets/images/users/user.jpg')}}" class="pull-left" alt="Dmitry Ivaniuk"/>
                                        <span class="contacts-title">Dmitry Ivaniuk</span>
                                        <p>Web Developer/Designer</p>                                                                        
                                        <div class="list-group-controls">
                                            <button class="btn btn-success"><span class="fa fa-phone"></span></button>
                                        </div>                                    
                                    </a>                                
                                    <a href="#" class="list-group-item">                                    
                                        <div class="list-group-status status-away"></div>
                                        <img src="{{asset('backend/assets/images/users/user3.jpg')}}" class="pull-left" alt="Nadia Ali"/>
                                        <span class="contacts-title">Nadia Ali</span>
                                        <p>Singer-Songwriter</p>                                    
                                        <div class="list-group-controls">
                                            <button class="btn btn-success"><span class="fa fa-phone"></span></button>
                                        </div>                                    
                                    </a>                                                                
                                    <a href="#" class="list-group-item">         
                                        <div class="list-group-status status-offline"></div>
                                        <img src="{{asset('backend/assets/images/users/user2.jpg')}}" class="pull-left" alt="John Doe"/>
                                        <span class="contacts-title">John Doe</span>
                                        <p>UI/UX Designer</p>                     
                                        <div class="list-group-controls">
                                            <button class="btn btn-success"><span class="fa fa-phone"></span></button>
                                        </div>                                    
                                    </a>                                
                                </div>
                            </div>
                            <!-- END CONTACT LIST WIDGET -->

                        </div>

                        <div class="col-md-4">

                            <!-- NEWS WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Latest News</h3>         
                                    <ul class="panel-controls">
                                        <li><a href="#" class="control-danger"><span class="fa fa-pencil"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body scroll" style="height: 230px;">                               
                                    <h6>Lorem ipsum dolor</h6>
                                    <p>
                                        Quisque ultricies turpis pulvinar lectus semper, eget fringilla purus tincidunt. 
                                        <span class="text-muted"><i class="fa fa-clock-o"></i> 14:15 Today</span>
                                    </p>
                                    <h6>Integer finibus orci vel</h6>
                                    <p>
                                        Nam luctus nulla molestie nisi fermentum, ac maximus elit bibendum. 
                                        <span class="text-muted"><i class="fa fa-clock-o"></i> 10:22 Today</span>
                                    </p>
                                    <h6>Morbi iaculis quam at eros</h6>
                                    <p>
                                        Fusce dictum mauris quis velit cursus, consectetur tempor justo volutpat. 
                                        <span class="text-muted"><i class="fa fa-clock-o"></i> 09:58 Today</span>
                                    </p>                                   
                                    <h6>Nam iaculis urna</h6>
                                    <p>
                                        Ut a est in est vulputate varius ac vitae quam, consectetur, eget fringilla purus tincidunt.
                                        <span class="text-muted"><i class="fa fa-clock-o"></i> 06:33 Today</span>
                                    </p>                                    
                                </div>
                            </div>
                            <!-- END NEWS WIDGET -->

                        </div>

                    </div>

                    <div class="row">

                        <!-- CONTACT FORM -->
                        <div class="col-md-4">

                            <div class="panel panel-colorful">
                                <div class="panel-body">
                                    <h2>Contact</h2>
                                    <p>Feel free to contact us for any issues you might have with our products.</p>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" placeholder="youremail@domain.com"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="email" class="form-control" placeholder="Message subject"/>
                                    </div>                                
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" placeholder="Your message" rows="3"></textarea>
                                    </div>                                
                                </div>
                                <div class="panel-footer"> 
                                    <button class="btn btn-success pull-right">Send</button>
                                </div>
                            </div>

                        </div>
                        <!-- END CONTACT FORM -->   

                        <!-- MESSAGES WIDGET -->
                        <div class="col-md-4">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                                    <div class="pull-right">
                                        <span class="label label-primary">Dmitry</span>, <span class="label label-primary">John</span>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="messages messages-img">
                                        <div class="item in">
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe">
                                            </div>
                                            <div class="text">
                                                <div class="heading">
                                                    <a href="#">John Doe</a>
                                                    <span class="date">08:33</span>
                                                </div>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/users/user.jpg')}}" alt="Dmitry Ivaniuk">
                                            </div>                                
                                            <div class="text">
                                                <div class="heading">
                                                    <a href="#">Dmitry Ivaniuk</a>
                                                    <span class="date">08:27</span>
                                                </div>                                    
                                                Quisque ultricies turpis pulvinar lectus semper, eget fringilla purus tincidunt.
                                            </div>
                                        </div>
                                        <div class="item in">
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe">
                                            </div>
                                            <div class="text">
                                                <div class="heading">
                                                    <a href="#">John Doe</a>
                                                    <span class="date">08:25</span>
                                                </div>
                                                Fusce dictum mauris quis velit cursus, consectetur tempor justo volutpat.
                                            </div>
                                        </div>                            
                                    </div>                                

                                </div>
                                <div class="panel-footer">
                                    <div class="input-group">                                    
                                        <input type="text" class="form-control" placeholder="Type a message..."/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><span class="fa fa-camera"></span></button>
                                            <button class="btn btn-default" type="button"><span class="fa fa-link"></span></button>
                                            <button class="btn btn-default" type="button">Send</button>
                                        </span>                                    
                                    </div>    
                                </div>
                            </div>

                        </div>
                        <!-- END MESSAGES WIDGET -->

                        <!-- CONTACT FORM -->
                        <div class="col-md-4">

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2><span class="fa fa-twitter"></span> Latest Tweets</h2>
                                    <div class="user">
                                        <img src="{{asset('backend/assets/images/users/user3.jpg')}}" alt="Nadia Ali"/>
                                        <a href="#" class="name">@NadiaAli</a>
                                        <div class="pull-right" style="width: 100px;">
                                            <button class="btn btn-info btn-block"><span class="fa fa-twitter"></span> Follow</button>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="panel-body list-group">
                                    <div class="list-group-item">
                                        Quisque lacinia sem ligula, eget <a href="#">#varius</a> massa vulputate at. Sed imperdiet congue enim.<br/>
                                        <span class="text-muted">1h ago</span>
                                    </div>
                                    <div class="list-group-item">
                                        Nam faucibus vulputate justo, id viverra orci porta vel.<br/>
                                        <span class="text-muted">1h ago</span>
                                    </div>
                                    <div class="list-group-item">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">@Donec</a> at tellus sed mauris.<br/>
                                        <span class="text-muted">1h ago</span>
                                    </div>
                                    <div class="list-group-item">
                                        Quisque lacinia sem ligula, eget varius massa vulputate at. Sed imperdiet congue enim.<br/>
                                        <span class="text-muted">1h ago</span>
                                    </div>                                
                                </div>
                            </div>

                        </div>
                        <!-- END CONTACT FORM --> 

                    </div>

                    <div class="row">
                        <!-- PRICING TABLE -->
                        <div class="col-md-4">

                            <div class="panel panel-success push-up-20">
                                <div class="panel-body panel-body-pricing">
                                    <h2>Starter<br/><small>$2/Per month</small></h2>                                
                                    <p><span class="fa fa-caret-right"></span> 2 domains</p>
                                    <p><span class="fa fa-caret-right"></span> 4 databases</p>
                                    <p><span class="fa fa-caret-right"></span> 5 e-mail Accounts</p>
                                    <p><span class="fa fa-caret-right"></span> 2GB amount of space</p>
                                    <p class="text-muted">For individuals</p>
                                </div>
                                <div class="panel-footer">                                 
                                    <button class="btn btn-success btn-block">Choose Plan</button>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="panel panel-danger">
                                <div class="panel-body panel-body-pricing">
                                    <h2>Pro<br/><small>$15/Per month</small></h2>                                
                                    <p><span class="fa fa-caret-right"></span> 10 domains</p>
                                    <p><span class="fa fa-caret-right"></span> 20 databases</p>
                                    <p><span class="fa fa-caret-right"></span> unlimited e-mails</p>
                                    <p><span class="fa fa-caret-right"></span> 50GB amount of space</p>
                                    <p><span class="fa fa-caret-right"></span> 5h of FREE support</p>                                
                                    <p class="text-muted">For business websites and corporate</p>
                                </div>
                                <div class="panel-footer"> 
                                    <button class="btn btn-danger btn-block">Choose Plan</button>
                                </div>
                            </div>

                        </div>                    

                        <div class="col-md-4">

                            <div class="panel panel-warning push-up-20">
                                <div class="panel-body panel-body-pricing">
                                    <h2>Basic<br/><small>$5/Per month</small></h2>                                
                                    <p><span class="fa fa-caret-right"></span> 4 domains</p>
                                    <p><span class="fa fa-caret-right"></span> 8 databases</p>
                                    <p><span class="fa fa-caret-right"></span> 10 e-mail Accounts</p>
                                    <p><span class="fa fa-caret-right"></span> 10GB amount of space</p>
                                    <p class="text-muted">For blogs and small business websites</p>
                                </div>
                                <div class="panel-footer"> 
                                    <button class="btn btn-warning btn-block">Choose Plan</button>
                                </div>
                            </div>

                        </div>                          
                        <!-- END PRICING TABLE-->
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="{{asset('backend/audio/alert.mp3')}}" preload="auto"></audio>
        <audio id="audio-fail" src="{{asset('backend/audio/fail.mp3')}}" preload="auto"></audio>
        <!-- END PRELOADS -->
                
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{asset('backend/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/knob/jquery.knob.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/owl/owl.carousel.min.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






