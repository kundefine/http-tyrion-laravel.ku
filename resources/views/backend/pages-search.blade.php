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
                    <li class="xn-openable active">
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
                            <li class="active"><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
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
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>                        
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>                            
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
                    <li><a href="#">Pages</a></li>
                    <li class="active">Search</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Search</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START SEARCH -->                            
                            <div class="panel panel-default">
                                <div class="panel-body">                                    
                                    <div class="row stacked">
                                        <div class="col-md-6">
                                            <div class="input-group push-down-10">
                                                <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                                <input type="text" class="form-control" placeholder="Keywords..." value="Atlant admin template"/>
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary">Search</button>
                                                </div>
                                            </div>                                                                
                                            
                                            <span class="line-height-30">Search Results for <strong>Atlant admin template</strong> (3,877 results)</span>
                                            <div class="pull-right">
                                                <div class="btn-group">
                                                    <button class="btn btn-default active"><span class="fa fa-user"></span></button>
                                                    <button class="btn btn-default"><span class="fa fa-globe"></span></button>                                        
                                                </div>
                                                <button class="btn btn-default"><span class="fa fa-cog"></span></button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="pull-right push-down-10">
                                                <button class="btn btn-default active"><span class="fa fa-search"></span> Search</button>
                                                <button class="btn btn-default"><span class="fa fa-image"></span> Images</button>
                                                <button class="btn btn-default"><span class="fa fa-map-marker"></span> Maps</button>
                                                <button class="btn btn-default"><span class="fa fa-camera"></span> Video</button>
                                                <button class="btn btn-default"><span class="fa fa-file"></span> News</button>
                                            </div>
                                            
                                            <div class="line-height-30 pull-right text-right" style="width: 100%;">
                                                <a href="#">Support</a> - <a href="#">Contacts</a> - <a href="#">Terms of usage</a>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>                                                                
                            </div>
                            <!-- END SEARCH -->
                            
                            <!-- START SEARCH RESULT -->
                            <div class="search-results">

                                <div class="sr-item">
                                    <a href="#" class="sr-item-title">Atlant - Responsive Bootstrap Admin Template</a>
                                    <div class="sr-item-link">http://aqvatarius.com/themes/atlant/</div>
                                    <p>Atlant – is a powerful admin template based on Bootstrap 3.2. Template is fully responsive and retina ready. In downloaded package you will find .less files, documentation, clean and commented source code. Atlant is easy to use and customize, also you will find lots of ready to use elements.</p>
                                    <p class="sr-item-links"><a href="#">Translate this page</a> - <a href="#">View cache</a> - <a href="#">Remove from search</a></p>
                                </div>                                
                                
                                <div class="sr-item">
                                    <a href="#" class="sr-item-title">UI/UX Development</a>
                                    <div class="sr-item-link">http://aqvatarius.com/</div>
                                    <p>Duis aliquet condimentum aliquet. Morbi finibus nisi vitae volutpat interdum. Pellentesque sed nisi mauris. Donec <strong>Atlant</strong> mattis efficitur mi. Morbi mauris enim, cursus in elit in, facilisis imperdiet metus</p>
                                    <p class="sr-item-links"><a href="#">Translate this page</a> - <a href="#">View cache</a> - <a href="#">Remove from search</a></p>
                                </div>
                                
                                <div class="sr-item">
                                    <a href="#" class="sr-item-title">Top 100 Admin Templates</a>
                                    <div class="sr-item-link">http://aqvatarius.com/themes/atlant/</div>
                                    <p>1st place <strong>Atlant</strong> - Responsive Bootstrap Admin Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis a dui vel pretium. Duis nisi turpis, laoreet eu semper ut, eleifend sed dolor. Fusce dapibus dignissim velit vel pulvinar. Sed commodo arcu ac tortor hendrerit dapibus. Maecenas vehicula lacinia neque, quis venenatis dolor venenatis eu. Maecenas maximus est vel purus cursus suscipit. Nunc placerat arcu et ultricies faucibus.</p>
                                    <p class="sr-item-links"><a href="#">Translate this page</a> - <a href="#">View cache</a> - <a href="#">Remove from search</a></p>
                                </div>
                                
                                <div class="sr-item">
                                    <div class="sr-item-title">Files available on request</div>
                                    <div class="sr-item-link">http://somelink.com/path/to/file/</div>
                                    
                                    <div class="hidden" id="toggle_links">
                                        <div class="sr-item-link">http://otherlink.com/file/here/</div>
                                        <div class="sr-item-link">http://somelink.com/path/to/file/</div>
                                        <div class="sr-item-link">http://otherlink.com/file/here/</div>
                                        <div class="sr-item-link">http://newlink.com/file/here/</div>
                                    </div>                                    
                                    <a href="#" class="toggle" data-toggle="toggle_links"><span class="fa fa-angle-up"></span> Toggle All</a>
                                    
                                    <p>Search Results for <strong>Atlant admin template</strong> in Files Store: <strong>75</strong>.</p>
                                    
                                    <div class="table-responsive push-up-10">
                                        <table class="table table-actions table-striped">
                                            <thead>                                            
                                                <tr>
                                                    <th width="30">#</th>
                                                    <th>name</th>
                                                    <th width="100">size</th>
                                                    <th width="300">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">file_name_v1.1.zip</a></td>
                                                    <td>35.4 KB</td>
                                                    <td><button class="btn btn-info btn-sm"><span class="fa fa-floppy"></span> Download</button> <button class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Remove</button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="#">otherDocument.doc</a></td>
                                                    <td>13.5 KB</td>
                                                    <td><button class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> Preview</button> <button class="btn btn-info btn-sm"><span class="fa fa-floppy"></span> Download</button> <button class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Remove</button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><a href="#">pdf-document-presentation.pdf</a></td>
                                                    <td>535.4 KB</td>
                                                    <td><button class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> Preview</button> <button class="btn btn-info btn-sm"><span class="fa fa-floppy"></span> Download</button> <button class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Remove</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <ul class="list-tags">                                        
                                        <li><a href="#"><span class="fa fa-tag"></span> Files</a></li>
                                        <li><a href="#"><span class="fa fa-tag"></span> Attachments</a></li>
                                    </ul>
                                </div>

                                <div class="sr-item">
                                    <div class="sr-item-title">Images available on request <a href="pages-gallery.html" class="btn btn-primary btn-rounded pull-right"><span class="fa fa-image"></span> Open gallery</a></div>                                    
                                    <div class="sr-item-link">Dashboard <span class="fa fa-angle-right"></span> Pages <span class="fa fa-angle-right"></span> Gallery</div>
                                    <p>Search Results for <strong>Atlant admin template</strong> in Gallery: <strong>195</strong> jpeg images.</p>
                                    <div class="row push-up-10">
                                        <div class="col-md-2 col-xs-3">
                                            <img src="{{asset('backend/assets/images/gallery/nature-1.jpg')}}" class="img-responsive img-text"/>
                                        </div>
                                        <div class="col-md-2 col-xs-3">
                                            <img src="{{asset('backend/assets/images/gallery/nature-2.jpg')}}" class="img-responsive img-text"/>
                                        </div>
                                        <div class="col-md-2 col-xs-3">
                                            <img src="{{asset('backend/assets/images/gallery/nature-3.jpg')}}" class="img-responsive img-text"/>
                                        </div>
                                        <div class="col-md-2 col-xs-3">
                                            <img src="{{asset('backend/assets/images/gallery/nature-4.jpg')}}" class="img-responsive img-text"/>
                                        </div>
                                        <div class="col-md-2 col-xs-3">
                                            <img src="{{asset('backend/assets/images/gallery/nature-5.jpg')}}" class="img-responsive img-text"/>
                                        </div>
                                        <div class="col-md-2 col-xs-3">
                                            <img src="{{asset('backend/assets/images/gallery/nature-6.jpg')}}" class="img-responsive img-text"/>
                                        </div>                                        
                                    </div>
                                    <p class="sr-item-links"><a href="pages-gallery.html">More pictures on request <strong>Atlant admin template</strong></a></p>
                                </div>

                                <div class="sr-item">
                                    <div class="sr-item-title">People available on request</div>      
                                    <div class="sr-item-link">Dashboard <span class="fa fa-angle-right"></span> Pages <span class="fa fa-angle-right"></span> Address Book</div>
                                    <p>Search Results for <strong>Atlant admin template</strong> in Address Book: <strong>43</strong> contacts.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2 col-xs-2">
                                                    <a href="#" class="friend">
                                                        <img src="{{asset('backend/assets/images/users/user.jpg')}}">
                                                        <span>Dmitry Ivaniuk</span>
                                                    </a>                                            
                                                </div>
                                                <div class="col-md-2 col-xs-2">                                            
                                                    <a href="#" class="friend">
                                                        <img src="{{asset('backend/assets/images/users/user2.jpg')}}">
                                                        <span>John Doe</span>
                                                    </a>                                            
                                                </div>
                                                <div class="col-md-2 col-xs-2">                                            
                                                    <a href="#" class="friend">
                                                        <img src="{{asset('backend/assets/images/users/user4.jpg')}}">
                                                        <span>Brad Pit</span>
                                                    </a>                                            
                                                </div>
                                                <div class="col-md-2 col-xs-2">                                            
                                                    <a href="#" class="friend">
                                                        <img src="{{asset('backend/assets/images/users/user6.jpg')}}">
                                                        <span>Darth Vader</span>
                                                    </a>                       
                                                </div>
                                                <div class="col-md-2 col-xs-2">                                            
                                                    <a href="#" class="friend">
                                                        <img src="{{asset('backend/assets/images/users/user7.jpg')}}">
                                                        <span>Samuel Leroy Jackson</span>
                                                    </a>                                          
                                                </div>
                                                <div class="col-md-2 col-xs-2">                                            
                                                    <a href="#" class="friend">
                                                        <img src="{{asset('backend/assets/images/users/user5.jpg')}}">
                                                        <span>John Travolta</span>
                                                    </a>                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p><a href="pages-address-book.html" class="btn btn-primary btn-rounded"><span class="fa fa-book"></span> Open Address Book</a></p>
                                </div>                                
                                
                            </div>
                            <!-- END SEARCH RESULT -->
                            
                            <ul class="pagination pagination-sm pull-right push-down-20">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>                                    
                                <li><a href="#">»</a></li>
                            </ul>                            
                            
                        </div>                        
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
        
        
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->         
    </body>
</html>






