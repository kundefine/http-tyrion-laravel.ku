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
                    <li class="xn-openable active">
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
                            <li class="active"><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
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
                    <li><a href="#">Forms Stuff</a></li>
                    <li class="active">Form Elements</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Form Elements</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START DEFAULT FORM ELEMENTS -->
                            <div class="block">
                                <h4>Default From Inputs</h4>
                                <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Text</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="Some text value..."/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" value="password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Readonly</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly value="Readonly value"/>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Disabled</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly value="Disabled value"/>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Placeholder</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Fill this field please"/>
                                        </div>
                                    </div>                                                                        
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Text area</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Label</label>
                                        <div class="col-md-10">
                                            <p class="form-control-static">Static form control</p>
                                        </div>
                                    </div>                                    
                                </form>
                            </div>
                            <!-- END DEFAULT FORM ELEMENTS -->

                            <!-- START CHECKBOXES RADIO AND SELECT -->
                            <div class="block">
                                <h4>Checkbox, Radio and Select</h4>
                                <form role="form">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=""/>
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="checkbox" value="" disabled/>
                                            Option two is disabled
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked/>
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>
                                    <div class="radio disabled">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled/>
                                            Option three is disabled
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">                                        
                                        <select multiple class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>   
                                    </div>                                    
                                </form>                
                            </div>
                            <!-- END OF CHECKBOXES RADIO AND SELECT -->

                            <!-- FILE INPUT -->
                            <div class="block">
                                <h4>Input File</h4>
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Default</label>
                                        <div class="col-md-10">
                                            <input type="file"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Styled</label>
                                        <div class="col-md-10">
                                            <input type="file" class="fileinput" name="filename1" id="filename1"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"></label>
                                        <div class="col-md-10">
                                            <input type="file" class="fileinput btn-success" name="filename2" id="filename2" title="Custom text and background"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"></label>
                                        <div class="col-md-10">
                                            <input type="file" class="fileinput btn-danger" name="filename3" id="filename3" data-filename-placement="inside" title="File name goes inside"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END FILE INPUT -->

                            <!-- START FORM GROUP ELEMENTS -->
                            <div class="block">
                                <h4>Form Groups</h4>
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" class="form-control" placeholder="Left side addon"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Right side addon"/>
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">                                            
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control" placeholder="Both side addons"/>
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="push-up-20">Sizing</h5>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group input-group-lg">                                            
                                                <span class="input-group-addon">@</span>
                                                <input type="text" class="form-control" placeholder="Large"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">                                        
                                            <div class="input-group">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" class="form-control" placeholder="Default"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" class="form-control" placeholder="Small"/>
                                            </div>                 
                                        </div>
                                    </div>

                                    <h5 class="push-up-20">Checkbox and radio addons</h5>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox"/>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Checkbox addon"/>
                                            </div>                 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio"/>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Radio addon"/>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="push-up-20">Button addons</h5>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Go!</button>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Left side button addon"/>
                                            </div>                 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Right side button addon"/>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Left</button>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Both side button addon"/>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Right</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END FORM GROUP ELEMENTS -->

                        </div>
                        <div class="col-md-6">                        

                            <div class="block">
                                <h4>Styled Checkbox And Radio</h4>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="checkbox" class="icheckbox"/> Default</label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Checked</label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="checkbox" class="icheckbox" disabled/> Disabled</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" name="iradio"/> Default</label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" name="iradio" checked="checked"/> Checked</label>
                                        </div>
                                        <div class="col-md-4">                                    
                                            <label class="check"><input type="radio" class="iradio" name="iradio" disabled/> Disabled</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- START TAGSINPUT -->
                            <div class="block">
                                <h4>Tags Input</h4>
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" class="tagsinput" value="First,Second,Third"/>
                                        </div>
                                    </div> 
                                </form>
                            </div>                        
                            <!-- END OF TAGSINPUT -->                        

                            <!-- START CHECKBOXES RADIO AND SELECT -->
                            <div class="block">
                                <h4>Bootstrap Select</h4>
                                <form role="form" class="form-horizontal">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Default</label>
                                        <div class="col-md-9">                                        
                                            <select class="form-control select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">                                        
                                        <label class="col-md-3 control-label">Multiple</label>
                                        <div class="col-md-9">                                                                                
                                            <select multiple class="form-control select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>   
                                        </div>
                                    </div>
                                    <h5 class="push-up-20">Custom features</h5>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Styled</label>
                                        <div class="col-md-9">                                                                                
                                            <select class="form-control select" data-style="btn-success">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Search</label>
                                        <div class="col-md-9">                                                                                
                                            <select class="form-control select" data-live-search="true">
                                                <option>Lorem ipsum dolor</option>
                                                <option>Sit amet sicors</option>
                                                <option>Mostoly stofu tiro</option>
                                                <option>Vico sante fara</option>
                                                <option>Delomo ponto si</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>                                                                                        
                            </div>
                            <!-- END OF CHECKBOXES RADIO AND SELECT -->

                            <!-- START DATE AND TIME PICKER -->
                            <div class="block">
                                <h4>Date and time pickers</h4>                        
                                <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Default</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control datepicker" value="2014-08-04">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">As component</label>
                                        <div class="col-md-5">
                                            <div class="input-group date" id="dp-2" data-date="05-07-2014" data-date-format="dd-mm-yyyy">
                                                <input type="text" class="form-control" value="05-07-2014" disabled="disabled"/>
                                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Start with year</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input type="text" id="dp-3" class="form-control" value="06-06-2014" data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years"/>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Start with months</label>
                                        <div class="col-md-5">
                                            <div class="input-group" >
                                                <input type="text" class="form-control" value="07-07-2014" id="dp-4" data-date="07-07-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="months"/>
                                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="push-up-20">Timepickers</h5>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Default</label>
                                        <div class="col-md-5">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control timepicker"/>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">24 hour mode</label>
                                        <div class="col-md-5">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control timepicker24"/>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>                            
                            </div>      
                            <!-- END DATE AND TIME PICKER -->

                            <!-- START COLORPICKER -->
                            <div class="block">
                                <h4>Colorpickers</h4>
                                <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Default</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control colorpicker" value="#FF4400">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">RGBA mode</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control colorpicker_rgba" value="rgba(0,0,0,0.25)" data-color-format="rgba"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">As component</label>
                                        <div class="col-md-5">
                                            <div class="input-group color" data-color="rgb(255, 146, 180)" data-color-format="rgb" id="colorpicker">
                                                <input type="text" class="form-control" readonly/>
                                                <span class="input-group-addon"><i style="background-color: rgb(255, 146, 180)"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>                                                          
                            <!-- END COLORPICKER -->

                            <!-- START VERTICAL FORM SAMPLE -->
                            <div class="block">
                                <h4>Vertical Form Sample</h4>
                                <form role="form">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control"/>
                                    </div>
                                    <div class="checkbox pull-left">
                                        <label><input type="checkbox"> Check me out</label>
                                    </div>                                    
                                </form>                            
                            </div>                        
                            <!-- END VERTICAL FORM SAMPLE -->

                            <!-- START INLINE FORM SAMPLE -->
                            <div class="block">
                                <h4>Inline Form Sample</h4>                                
                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <label class="sr-only">Login</label>
                                        <input type="text" class="form-control" placeholder="Your login"/>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">                                            
                                            <label class="sr-only">Password</label>
                                            <input class="form-control" type="password" placeholder="Your password"/>
                                        </div>
                                    </div>                                    
                                    <button type="submit" class="btn btn-danger">Sign in</button>
                                </form>                                
                            </div>
                            <!-- END INLINE FORM SAMPLE -->

                            <!-- START HORIZONTAL FORM SAMPLE -->
                            <div class="block">
                                <h4>Horizontal Form</h4>                               
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-md-10">
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Text area</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>                                    
                                </form>                                                                                         
                            </div>
                            <!-- END HORIZONTAL FORM SAMPLE -->                        
                        </div>

                        <div class="col-md-12">

                            <!-- START FORM VALIDATION STATES -->
                            <div class="block">                            
                                <h4>Form Validation States</h4>                                
                                <div class="col-md-6">
                                    <div class="form-group has-success">
                                        <label class="control-label">Input with success</label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label">Input with warning</label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="control-label">Input with error</label>
                                        <input type="text" class="form-control"/>
                                    </div>       
                                </div>                                
                                <div class="col-md-6">
                                    <div class="form-group has-success has-feedback">
                                        <label class="control-label">Input with success</label>
                                        <input type="text" class="form-control"/>
                                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-warning has-feedback">
                                        <label class="control-label">Input with warning</label>
                                        <input type="text" class="form-control"/>
                                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-error has-feedback">
                                        <label class="control-label">Input with error</label>
                                        <input type="text" class="form-control"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    </div>  
                                </div>                                                                                
                            </div>
                            <!-- END FORM VALIDATION STATES -->                        

                        </div>

                        <div class="col-md-12">

                            <!-- START FORM GRID -->
                            <div class="block">                            
                                <h4>Form Grid</h4>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">                                        
                                        <div class="col-md-12">
                                            <input type="text" placeholder=".col-md-12" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">                                    
                                        <div class="col-md-8">
                                            <input type="text" placeholder=".col-md-8" class="form-control"/>
                                        </div>               
                                        <div class="col-md-4">
                                            <input type="text" placeholder=".col-md-4" class="form-control"/>
                                        </div>                                                                               
                                    </div>       
                                    <div class="form-group">                                    
                                        <div class="col-md-6">
                                            <input type="text" placeholder=".col-md-6" class="form-control"/>
                                        </div>               
                                        <div class="col-md-3">
                                            <input type="text" placeholder=".col-md-3" class="form-control"/>
                                        </div>                                                                               
                                        <div class="col-md-3">
                                            <input type="text" placeholder=".col-md-3" class="form-control"/>
                                        </div>                                        
                                    </div>                                      
                                    <div class="form-group">                                    
                                        <div class="col-md-4">
                                            <input type="text" placeholder=".col-md-4" class="form-control"/>
                                        </div>               
                                        <div class="col-md-4">
                                            <input type="text" placeholder=".col-md-4" class="form-control"/>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder=".col-md-4" class="form-control"/>
                                        </div>                                                        
                                    </div>                                                                                    
                                    <div class="form-group">                                    
                                        <div class="col-md-2">
                                            <input type="text" placeholder=".col-md-2" class="form-control"/>
                                        </div>                                         
                                        <div class="col-md-5">
                                            <input type="text" placeholder=".col-md-5" class="form-control"/>
                                        </div>   
                                        <div class="col-md-5">
                                            <input type="text" placeholder=".col-md-5" class="form-control"/>
                                        </div>                                                                                                                                   
                                    </div>                                           
                                </form>                                                                                           
                            </div>
                            <!-- END HORIZONTAL FORM SAMPLE -->                        

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
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-colorpicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






