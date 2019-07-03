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
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li class="active"><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>                            
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
                    <li class="active">Buttons</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Buttons</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START DEFAULT BUTTONS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Buttons</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">                            
                                    <p>Use any of the available button classes to quickly create a styled button.</p>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default">Default</button>
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-link">Link</button>                                                                
                                    </div>
                                    <h4>Rounded</h4>
                                    <p>Add class <code>.btn-rounded</code> to get buttons like this:</p>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default btn-rounded">Default</button>
                                        <button type="button" class="btn btn-primary btn-rounded">Primary</button>
                                        <button type="button" class="btn btn-success btn-rounded">Success</button>
                                        <button type="button" class="btn btn-info btn-rounded">Info</button>
                                        <button type="button" class="btn btn-warning btn-rounded">Warning</button>
                                        <button type="button" class="btn btn-danger btn-rounded">Danger</button>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-default pull-left">Left</button>
                                    <button type="button" class="btn btn-primary pull-right">Right</button>
                                </div>
                            </div>
                            <!-- END DEFAULT BUTTONS -->

                            <!-- START BUTTON STATES -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Button States</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">                            
                                    <p><code>disabled</code> state</p>
                                    <button type="button" class="btn btn-default" disabled="disabled">Default</button>
                                    <button type="button" class="btn btn-primary" disabled="disabled">Primary</button>
                                    <button type="button" class="btn btn-success" disabled="disabled">Success</button>
                                    <button type="button" class="btn btn-info" disabled="disabled">Info</button>
                                    <button type="button" class="btn btn-warning" disabled="disabled">Warning</button>
                                    <button type="button" class="btn btn-danger" disabled="disabled">Danger</button>
                                    <button type="button" class="btn btn-link" disabled="disabled">Link</button>                                                                
                                </div>
                                <div class="panel-body">                            
                                    <p><code>.active</code> state</p>
                                    <button type="button" class="btn btn-default active">Default</button>
                                    <button type="button" class="btn btn-primary active">Primary</button>
                                    <button type="button" class="btn btn-success active">Success</button>
                                    <button type="button" class="btn btn-info active">Info</button>
                                    <button type="button" class="btn btn-warning active">Warning</button>
                                    <button type="button" class="btn btn-danger active">Danger</button>
                                    <button type="button" class="btn btn-link active">Link</button>                                                                
                                </div>
                            </div>
                            <!-- END BUTTON STATES -->

                            <!-- START BUTTON SIZES -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Buttons Sizes</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">                  
                                    <p>Use classes <code>btn-lg, btn-sm, bt-xs</code> to get custom sizes</p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                        <button type="button" class="btn btn-default btn-lg">Large button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-info">Default button</button>
                                        <button type="button" class="btn btn-default">Default button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-warning btn-sm">Small button</button>
                                        <button type="button" class="btn btn-default btn-sm">Small button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-danger btn-xs">Extra small button</button>
                                        <button type="button" class="btn btn-default btn-xs">Extra small button</button>
                                    </p>                                                             
                                </div>                            
                            </div>
                            <!-- END BUTTON STATES -->

                            <!-- START GROUP BUTTONS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Button Groups</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <div class="col-md-12">                                                                                                                                                                                                               
                                                <div class="btn-group btn-group-lg">
                                                    <button class="btn btn-default">Large</button>
                                                    <button class="btn btn-default">Size</button>                                                
                                                    <button class="btn btn-default">Buttons</button>                                        
                                                </div>      
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">                                                                                    
                                                <div class="btn-group">
                                                    <button class="btn btn-default">Default</button>
                                                    <button class="btn btn-default">Size</button>                                                
                                                    <button class="btn btn-default">Buttons</button>                                        
                                                </div>
                                            </div>             
                                        </div>                                    
                                        <div class="form-group">
                                            <div class="col-md-12">                                                                                                                        
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-default">Small</button>
                                                    <button class="btn btn-default">Size</button>                                                
                                                    <button class="btn btn-default">Buttons</button>                                        
                                                </div>      
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-md-12">                                                                                                                        
                                                <div class="btn-group btn-group-xs">
                                                    <button class="btn btn-default">Extra Small</button>
                                                    <button class="btn btn-default">Size</button>                                                
                                                    <button class="btn btn-default">Buttons</button>                                        
                                                </div>      
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END BLOCK BUTTONS -->

                        </div>
                        <div class="col-md-6">

                            <!-- START SWITCH BUTTONS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Switch Button</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Checkbox</label>
                                            <div class="col-md-10">
                                                <label class="switch">
                                                    <input type="checkbox" checked value="0"/>
                                                    <span></span>
                                                </label>
                                                <label class="switch">
                                                    <input type="checkbox" value="1"/>
                                                    <span></span>
                                                </label>                                        
                                                <label class="switch">
                                                    <input type="checkbox" value="2"/>
                                                    <span></span>
                                                </label>
                                                <label class="switch">
                                                    <input type="checkbox" disabled value="2"/>
                                                    <span></span>
                                                </label>                                            
                                            </div>
                                        </div>                                    

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Radio</label>
                                            <div class="col-md-10">
                                                <label class="switch">
                                                    <input type="radio" name="switch-radio1" checked value="0"/>
                                                    <span></span>
                                                </label>
                                                <label class="switch">
                                                    <input type="radio" name="switch-radio1" value="1"/>
                                                    <span></span>
                                                </label>                                        
                                                <label class="switch">
                                                    <input type="radio" name="switch-radio1" value="2"/>
                                                    <span></span>
                                                </label>                                        
                                                <label class="switch">
                                                    <input type="radio" name="switch-radio1" disabled value="3"/>
                                                    <span></span>
                                                </label>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Custom size</label>
                                            <div class="col-md-10">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" checked value="0"/>
                                                    <span></span>
                                                </label>
                                                <label class="switch switch-small">
                                                    <input type="checkbox" value="1"/>
                                                    <span></span>
                                                </label>                                        
                                                <label class="switch switch-small">
                                                    <input type="checkbox" value="2"/>
                                                    <span></span>
                                                </label>
                                                <label class="switch switch-small">
                                                    <input type="checkbox" disabled value="2"/>
                                                    <span></span>
                                                </label>                                            
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>                            
                            </div>
                            <!-- END SWITCH BUTTONS -->

                            <!-- START BUTTONS WITH DROPDOWN -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title">Buttons With Dropdown</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">                                    
                                        <div class="form-group">                                        
                                            <div class="col-md-12">
                                                <div class="btn-group">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Dropdown <span class="caret"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="presentation" class="dropdown-header">Dropdown header</li>
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>                                                    
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success">Split Buttons</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="presentation" class="dropdown-header">Dropdown header</li>
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>                                                    
                                                    </ul>
                                                </div>
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Dropup <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li role="presentation" class="dropdown-header">Dropdown header</li>
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>                                                    
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                                                                                                                    
                                    </form>
                                </div>                            
                            </div>
                            <!-- END BUTTONS WITH DROPDOWN -->

                            <!-- START BLOCK BUTTONS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Block Level Buttons</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                Add <code>.btn-block</code> to use block button
                                            </div>
                                        </div>
                                        <div class="form-group">                                        
                                            <div class="col-md-12">
                                                <button class="btn btn-default btn-block">Default</button>
                                            </div>
                                        </div>                                    
                                        <div class="form-group">                                        
                                            <div class="col-md-6">
                                                <button class="btn btn-primary btn-block">Primary</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-info btn-block">Info</button>
                                            </div>                                        
                                        </div>                                                                        
                                        <div class="form-group">                                        
                                            <div class="col-md-4">
                                                <button class="btn btn-success btn-block">Success</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-warning btn-block">Warning</button>
                                            </div>              
                                            <div class="col-md-4">
                                                <button class="btn btn-danger btn-block">Danger</button>
                                            </div>              
                                        </div>                                             
                                    </form>
                                </div>                            
                            </div>
                            <!-- END BLOCK BUTTONS -->

                            <!-- START BUTTONS WITH ICONS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title">Buttons With Icons</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">                                    
                                        <div class="form-group">                                        
                                            <div class="col-md-12">
                                                <p>Glyphicon icons support</p>
                                                <button class="btn btn-default"><i class="glyphicon glyphicon-home"></i></button>
                                                <button class="btn btn-primary"><i class="glyphicon glyphicon-heart"></i></button>
                                                <button class="btn btn-info"><i class="glyphicon glyphicon-phone-alt"></i></button>
                                                <button class="btn btn-success"><i class="glyphicon glyphicon-user"></i></button>
                                                <button class="btn btn-warning"><i class="glyphicon glyphicon-tint"></i></button>
                                                <button class="btn btn-danger"><i class="glyphicon glyphicon-shopping-cart"></i></button>
                                            </div>
                                        </div>                                    
                                        <div class="form-group">                                        
                                            <div class="col-md-12">
                                                <p>Font Awesome icons support</p>
                                                <button class="btn btn-default"><i class="fa fa-coffee"></i></button>
                                                <button class="btn btn-primary"><i class="fa fa-cog"></i></button>
                                                <button class="btn btn-info"><i class="fa fa-bookmark"></i></button>
                                                <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                                                <button class="btn btn-warning"><i class="fa fa-cloud"></i></button>
                                                <button class="btn btn-danger"><i class="fa fa-globe"></i></button>
                                            </div>
                                        </div>                                    
                                        <div class="form-group">                                                                                
                                            <div class="col-md-12">
                                                <p>Button with text and icon</p>
                                                <button class="btn btn-default"><i class="fa fa-arrow-left"></i> Left</button>
                                                <button class="btn btn-default">Right <i class="fa fa-arrow-right"></i></button>
                                                <button class="btn btn-default"><i class="fa fa-arrow-up"></i> Up</button>
                                                <button class="btn btn-default">Bottom <i class="fa fa-arrow-down"></i></button>
                                            </div>                                        
                                        </div>                                                                        
                                        <div class="form-group">                                        
                                            <div class="col-md-12">
                                                <p>Button group with icons</p>
                                                <div class="btn-group">
                                                    <button class="btn btn-default"><i class="fa fa-backward"></i></button>
                                                    <button class="btn btn-default"><i class="fa fa-play"></i></button>                                                
                                                    <button class="btn btn-default"><i class="fa fa-pause"></i></button>
                                                    <button class="btn btn-default"><i class="fa fa-stop"></i></button>                                                
                                                    <button class="btn btn-default"><i class="fa fa-forward"></i></button>                                                                                                                                                
                                                </div>
                                            </div>                                                    
                                        </div>                                             
                                    </form>
                                </div>                            
                            </div>
                            <!-- END BUTTONS WITH ICONS -->

                        </div>
                    </div>
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
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

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-colorpicker.js')}}"></script>
        <!-- END THIS PAGE PLUGINS -->       

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
        
    </body>
</html>






