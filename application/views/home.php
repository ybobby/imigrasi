<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>KOSMO - Multi Purpose Bootstrap 4 Admin Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/line-awesome/css/line-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/open-sans/styles.css">-->

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/montserrat/styles.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/jscrollpane/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/common.min.css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/themes/primary.min.css">    <link class="ks-sidebar-dark-style" rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/themes/sidebar-black.min.css">
    <!-- END THEME STYLES -->

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/kosmo/styles.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/weather/css/weather-icons.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/c3js/c3.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/noty/noty.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/widgets/payment.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/widgets/panels.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/dashboard/tabbed-sidebar.min.css">
</head>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

<?php
    $this->load->view('menu')
?>

<div class="ks-page-container ks-dashboard-tabbed-sidebar-fixed-tabs">
    
    <!-- BEGIN DEFAULT SIDEBAR -->
<div class="ks-column ks-sidebar ks-info">
    <div class="ks-wrapper ks-sidebar-wrapper">
        <ul class="nav nav-pills nav-stacked">
            <li class="nav-item ks-user dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="<?=base_url()?>assets/img/avatars/satoto.jpg" width="36" height="36" class="ks-avatar rounded-circle">
                    <div class="ks-info">
                        <div class="ks-name">Arief Hazairin Satoto</div>
                        <div class="ks-text">Ka. Wasdakim</div>
                    </div>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile-social-profile.html">Profile</a>
                    <a class="dropdown-item" href="profile-settings-general.html">Settings</a>
                    <a class="dropdown-item" href="<?=base_url()?>auth/logout">Logout</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-dashboard"></span>
                    <span>Dashboard</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item ks-active" href="index.html">Default</a>
                    <a class="dropdown-item" href="dashboards-draggable-widgets.html">Draggable Widgets</a>
                    <a class="dropdown-item" href="dashboards-mail.html">Mail</a>
                    <a class="dropdown-item" href="dashboards-projects.html">Projects</a>
                    <a class="dropdown-item" href="dashboards-widgets-and-activity.html">Activity</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-cubes"></span>
                    <span>Layouts</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../default-primary/index.html">Default</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Sidebar</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../sidebar_sections-primary/index.html" target="_blank">Sections</a>
                            <a class="dropdown-item" href="../sidebar_compact-primary/index.html" target="_blank">Compact</a>
                            <a class="dropdown-item" href="../sidebar_iconbar-primary/index.html" target="_blank">Iconbar</a>
                            <a class="dropdown-item" href="../sidebar_iconbar_compact-primary/index.html" target="_blank">Iconbar Compact</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Navigation</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../horizontal_navbar-primary/index.html" target="_blank">Horizontal</a>
                            <a class="dropdown-item" href="../horizontal_navbar_iconbar-primary/index.html" target="_blank">Horizontal Iconbar</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-flask"></span>
                    <span>Apps</span>
                </a>
                <div class="dropdown-menu">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>CRM</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="crm-contacts.html">Contacts</a>
                            <a class="dropdown-item" href="crm-user-contact-view.html">Contact View</a>
                            <a class="dropdown-item" href="crm-users-list-view.html">Users List View</a>
                            <a class="dropdown-item" href="crm-users-grid-view.html">Users Grid View</a>
                            <a class="dropdown-item" href="crm-roles-and-permissions.html">Roles &amp; Permissions</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Projects</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="projects-kanban-board.html">Kanban Board</a>
                            <a class="dropdown-item" href="projects-grid-board.html">Grid Board</a>
                            <a class="dropdown-item" href="projects-tasks.html">Tasks</a>
                            <a class="dropdown-item" href="projects-task.html">Task</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Mail</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="mail-empty.html">Mail Empty</a>
                            <a class="dropdown-item" href="mail-view.html">Mail View</a>
                            <a class="dropdown-item" href="mail-create.html">Mail Create</a>
                            <a class="dropdown-item" href="mail-compact.html">Mail Compact</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Tickets</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="tickets-empty.html">Empty</a>
                            <a class="dropdown-item" href="tickets-list.html">List</a>
                            <a class="dropdown-item" href="tickets-create.html">Create</a>
                            <a class="dropdown-item" href="tickets-view.html">View</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Messenger</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="messenger.html">Default</a>
                            <a class="dropdown-item" href="messenger-group.html">Group</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>File Manager</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>Grid</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="filemanager-grid.html">Default</a>
                                    <a class="dropdown-item" href="filemanager-grid-selected-items.html">Selected Items</a>
                                    <a class="dropdown-item" href="filemanager-grid-image.html">Image</a>
                                    <a class="dropdown-item" href="filemanager-grid-audio.html">Audio</a>
                                    <a class="dropdown-item" href="filemanager-grid-recent.html">Recent</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>List</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="filemanager-list.html">Default</a>
                                    <a class="dropdown-item" href="filemanager-list-selected-items.html">Selected Items</a>
                                    <a class="dropdown-item" href="filemanager-list-recent.html">Recent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Document Viewer</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="document-viewer-image.html">Image Viewer</a>
                            <a class="dropdown-item" href="document-viewer-pdf.html">Pdf Viewer</a>
                            <a class="dropdown-item" href="document-viewer-presentation.html">Presentation Viewer</a>
                            <a class="dropdown-item" href="document-viewer-audio.html">Audio Viewer</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="music-app.html">Music</a>
                </div>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="calendar.html">Calendar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-toggle-off"></span>
                    <span>Form</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="form-basic-inputs.html">Basic Inputs</a>
                    <a class="dropdown-item" href="form-advanced-inputs.html">Extended Inputs</a>
                    <a class="dropdown-item" href="form-buttons.html">Buttons</a>
                    <a class="dropdown-item" href="form-validation.html">Validation</a>
                    <a class="dropdown-item" href="form-touchspin.html">Touchspin</a>
                    <a class="dropdown-item" href="form-flex-labels.html">Flex Labels</a>
                    <a class="dropdown-item" href="form-mask-input.html">Mask Input</a>
                    <a class="dropdown-item" href="form-autocomplete-and-tags.html">Autocomplete &amp; Tags</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Steps</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="form-steps-column.html">Column Steps</a>
                            <a class="dropdown-item" href="form-steps-progress.html">Progress Steps</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-desktop"></span>
                    <span>UI Kit</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="uikit-bootstrap-ui.html">Bootstrap UI</a>
                    <a class="dropdown-item" href="uikit-colors.html">Colors</a>
                    <a class="dropdown-item" href="uikit-typography.html">Typography</a>
                    <a class="dropdown-item" href="uikit-cards.html">Cards</a>
                    <a class="dropdown-item" href="uikit-panels.html">Panels</a>
                    <a class="dropdown-item" href="uikit-tables.html">Tables</a>
                    <a class="dropdown-item" href="uikit-tabs.html">Tabs</a>
                    <a class="dropdown-item" href="uikit-default-alerts.html">Alerts</a>
                    <a class="dropdown-item" href="uikit-pagination.html">Pagination</a>
                    <a class="dropdown-item" href="uikit-modal.html">Modal</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-sliders"></span>
                    <span>Components</span>
                </a>
                <div class="dropdown-menu">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>File Upload</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="components-file-upload-uppy.html">Uppy</a>
                            <a class="dropdown-item" href="components-file-upload-dropzone.html">DropZone</a>
                            <a class="dropdown-item" href="components-file-upload-jquery-file-upload.html">Jquery File Upload</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Select</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="components-select-select2.html">Select2</a>
                            <a class="dropdown-item" href="components-select-multi.html">Multi</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Wysiwyg Editors</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="components-wysiwyg-editors-bootstrap-markdown-editor.html">Bootstrap Markdown</a>
                            <a class="dropdown-item" href="components-wysiwyg-editors-simplemde-markdown-editor.html">SimpleMDE Markdown</a>
                            <a class="dropdown-item" href="components-wysiwyg-editors-trumbowyg-editor.html">Trumbowyg Editor</a>
                            <a class="dropdown-item" href="components-wysiwyg-editors-summernote-editor.html">Summernote Editor</a>
                        </div>
                    </div>
                    <a class="dropdown-item" href="components-alerts-and-confirm.html">Alerts &amp; Confirm</a>
                    <a class="dropdown-item" href="components-sweetalert.html">SweetAlert</a>
                    <a class="dropdown-item" href="components-bootstrap-notify.html">Bootstrap Notify</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>DatePicker</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="components-datepicker-flatpickr.html">Flatpickr</a>
                            <a class="dropdown-item" href="components-datepicker-bootstrap-date-range-picker.html">Range DatePicker</a>
                        </div>
                    </div>
                    <a class="dropdown-item" href="components-ion-range-slider-flat-skin-basic.html">Ion Range Slider</a>
                    <a class="dropdown-item" href="components-nestable.html">Nestable</a>
                    <a class="dropdown-item" href="components-colorpicker.html">Color Picker</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-user"></span>
                    <span>Profile</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile-social-profile.html">Social Profile</a>
                    <a class="dropdown-item" href="profile-customer-profile.html">Customer Profile</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Settings</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile-settings-general.html">General</a>
                            <a class="dropdown-item" href="profile-settings-contact-info.html">Contact Info</a>
                            <a class="dropdown-item" href="profile-settings-experience.html">Experience</a>
                            <a class="dropdown-item" href="profile-settings-education.html">Education</a>
                            <a class="dropdown-item" href="profile-settings-organizations.html">Organizations</a>
                            <a class="dropdown-item" href="profile-settings-notifications.html">Notifications</a>
                            <a class="dropdown-item" href="profile-settings-billing.html">Billing</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-th"></span>
                    <span>DataTables</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="datatables-datatables-net.html">DataTables.net</a>
                    <a class="dropdown-item" href="datatables-bootstrap-table.html">Bootstrap Table</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-puzzle-piece"><span class="badge badge-pill badge-pink ks-label">3</span></span>
                    <span>Widgets</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="widgets-panels.html">Panels</a>
                    <a class="dropdown-item" href="widgets-upload.html">Upload</a>
                    <a class="dropdown-item" href="widgets-tables.html">Tables</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-file-text-o"></span>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="pages-blank.html">Blank</a>
                    <a class="dropdown-item" href="pages-error404.html">Error 404</a>
                    <a class="dropdown-item" href="pages-error500.html">Error 500</a>
                    <a class="dropdown-item" href="pages-contacts.html">Contacts</a>
                    <a class="dropdown-item" href="pages-login.html" target="_blank">Login</a>
                    <a class="dropdown-item" href="pages-signup.html" target="_blank">Sign Up</a>
                    <a class="dropdown-item" href="pages-forgot-password.html" target="_blank">Forgot Password</a>
                    <a class="dropdown-item" href="pages-locked-account.html" target="_blank">Locked Account</a>
                    <a class="dropdown-item" href="pages-confirmation.html" target="_blank">Confirmation</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-credit-card"></span>
                    <span>Payment</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="payment-billing.html">Billing</a>
                    <a class="dropdown-item" href="payment-invoices.html">Invoices</a>
                    <a class="dropdown-item" href="payment-order.html">Order</a>
                    <a class="dropdown-item" href="payment-orders-history.html">Orders History</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-usd"></span>
                    <span>Pricing</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="pricing-plans.html">Plans</a>
                    <a class="dropdown-item" href="pricing-subscriptions.html">Subscriptions</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="email-templates.html">
                    <span class="ks-icon la la-envelope-o"></span>
                    <span>Email Templates</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="documentation.html">
                    <span class="ks-icon la la-book"></span>
                    <span>Documentation</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-question-circle"></span>
                    <span>FAQ</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="faq.html">Index</a>
                </div>
            </li>
        </ul>
        <div class="ks-sidebar-extras-block">
            <div class="ks-extras-block-item">
                <div class="ks-name">Monthly Badwidth Transfer</div>
                <div class="ks-progress">
                    <div class="progress ks-progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 84%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="ks-description">
                    <span class="ks-amount">84%</span>
                    <span class="ks-text">(8 400 MB of 10 000)</span>
                </div>
            </div>
            <div class="ks-extras-block-item">
                <div class="ks-name">Disk Space Usage</div>
                <div class="ks-progress">
                    <div class="progress ks-progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 36%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="ks-description">
                    <span class="ks-amount">36%</span>
                    <span class="ks-text">(3 600 MB of 10 000)</span>
                </div>
            </div>
            <div class="ks-sidebar-copyright">© 2016 Kosmo. All right reserved</div>
        </div>
    </div>
</div>
<!-- END DEFAULT SIDEBAR -->











    <div class="ks-column ks-page">
        <div class="ks-page-header">
            <section class="ks-title-and-subtitle">
                <div class="ks-title-block">
                    <h3 class="ks-main-title">Dashboard / Tabbed Sidebar</h3>
                    <div class="ks-sub-title">This is header sub title</div>
                </div>
                <button class="btn btn-secondary-outline ks-light ks-no-text ks-tabbed-sidebar-navigation-block-toggle" data-block-toggle=".ks-dashboard-tabbed-sidebar-sidebar">
                    <span class="ks-icon la la-bars"></span>
                </button>
            </section>
        </div>

        <div class="ks-page-content">
            <div class="ks-page-content-body">
                <div class="ks-dashboard-tabbed-sidebar">
                    <div class="ks-dashboard-tabbed-sidebar-widgets">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-purple">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="ks-icon-combo-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">$9.24</span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Total Profit <span class="ks-progress-type">(+$1.89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-green">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-pie-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">$2.190</span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Total Revenue <span class="ks-progress-type">(+$1.89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-pink">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="ks-icon-user ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">23</span>
                                            <span class="ks-amount-icon ks-icon-circled-down-left"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Active Clients <span class="ks-progress-type">(+$1.89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-area-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">$431.2</span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Average Profit <span class="ks-progress-type">(+$1.89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card ks-card-widget ks-widget-payment-card-rate-details">
                                    <h5 class="card-header">
                                        Card Rate Details

                                        <div class="dropdown ks-control">
                                            <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="ks-icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-card-widget-datetime">
                                            These rates are for the 24-hour period ending <span class="ks-text-bold">Wednesday, Feb 8, 2017</span>
                                            23:00 WAT
                                        </div>

                                        <table class="table ks-payment-card-rate-details-table">
                                            <tr>
                                                <td class="ks-currency">
                                                    <img src="<?=base_url()?>assets/img/flags/24/United-States.png" class="ks-flag">
                                                    US Dollar
                                                </td>
                                                <td class="ks-amount">320.00</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-currency">
                                                    <img src="<?=base_url()?>assets/img/flags/24/United-Kingdom.png" class="ks-flag">
                                                    Pounds Sterling
                                                </td>
                                                <td class="ks-amount">407.59</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-currency">
                                                    <img src="<?=base_url()?>assets/img/flags/24/European-Union.png" class="ks-flag">
                                                    Euro
                                                </td>
                                                <td class="ks-amount">347.83</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-currency">
                                                    <img src="<?=base_url()?>assets/img/flags/24/Canada.png" class="ks-flag">
                                                    Canadian Dollar
                                                </td>
                                                <td class="ks-amount">248.39</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-currency">
                                                    <img src="<?=base_url()?>assets/img/flags/24/United-Arab-Emirates.png" class="ks-flag">
                                                    U.A.E. Dirham
                                                </td>
                                                <td class="ks-amount">88.91</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card ks-card-widget ks-widget-payment-budget">
                                    <a href="#" class="ks-thumbnail">
                                        <img src="<?=base_url()?>assets/img/widgets/cover.png" class="embed-responsive">
                                    </a>
                                    <a class="card-header">Magazine Images</a>
                                    <div class="ks-card-widget-datetime">Last update <span class="ks-text-bold">Apr 17, 2017</span></div>
                                    <div class="card-block">
                                        <div class="ks-payment-budget-amount-block">
                                            <div class="ks-text-action">$44.99</div>
                                            <div class="ks-description">Budget</div>
                                        </div>
                                        <div class="ks-payment-budget-remaining-block">
                                            <div class="ks-text-action">Early Apr 2017</div>
                                            <div class="ks-description ks-color-purple">10 days Remaining</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card ks-card-widget ks-widget-payment-earnings">
                                    <h5 class="card-header">
                                        Next Payout

                                        <div class="dropdown ks-control">
                                            <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="ks-icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-card-widget-datetime">
                                            Activity from <span class="ks-text-bold">Jan 4, 2017</span> to <span class="ks-text-bold">Jan 10, 2017</span>
                                        </div>

                                        <div class="ks-payment-earnings-amount">$2.37</div>
                                        <div class="ks-payment-earnings-amount-description">
                                            You’ve made $230 today
                                        </div>

                                        <div id="ks-next-payout-chart" class="ks-payment-earnings-chart"></div>
                                    </div>
                                </div>
                                <div class="card ks-card-widget ks-widget-tasks-overview-progress">
                                    <h5 class="card-header">
                                        All Tasks Overview

                                        <div class="dropdown ks-control">
                                            <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="ks-icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-card-widget-datetime">
                                            Next <span class="ks-text-bold">4 weeks</span>
                                        </div>
                                        <div class="ks-tasks-progress-items">
                                            <div class="ks-tasks-progress-item">
                                                <div class="ks-label">Week 3</div>
                                                <div class="ks-progress">
                                                    <div class="progress ks-progress-xs">
                                                        <div class="progress-bar ks-task-progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-due-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-qa-bar" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-delegated-bar" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ks-tasks-progress-item">
                                                <div class="ks-label">Week 4</div>
                                                <div class="ks-progress">
                                                    <div class="progress ks-progress-xs">
                                                        <div class="progress-bar ks-task-progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-due-bar" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-qa-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-delegated-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ks-tasks-progress-item">
                                                <div class="ks-label">Week 5</div>
                                                <div class="ks-progress">
                                                    <div class="progress ks-progress-xs">
                                                        <div class="progress-bar ks-task-progress-bar" role="progressbar" style="width: 50%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-due-bar" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-qa-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-delegated-bar" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ks-tasks-progress-item">
                                                <div class="ks-label">Week 6</div>
                                                <div class="ks-progress">
                                                    <div class="progress ks-progress-xs">
                                                        <div class="progress-bar ks-task-progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-due-bar" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-qa-bar" role="progressbar" style="width: 50%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar ks-task-delegated-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="ks-tasks-progress-item-statuses">
                                            <li class="ks-task-progress-bar-status">Progress</li>
                                            <li class="ks-task-progress-due-status">Due</li>
                                            <li class="ks-task-progress-qa-status">QA</li>
                                            <li class="ks-task-progress-delegated-status">Delegated</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card ks-card-widget ks-widget-payment-earnings">
                                            <h5 class="card-header">
                                                Total Earnings

                                                <div class="dropdown ks-control">
                                                    <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="ks-icon la la-ellipsis-h"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Add Card</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="card-block">
                                                <div class="ks-card-widget-datetime">
                                                    In <span class="ks-text-bold">12 Months</span>
                                                </div>

                                                <div class="ks-payment-earnings-amount">$23.54</div>
                                                <div class="ks-payment-earnings-amount-description">
                                                    Last month you’ve made $230
                                                </div>

                                                <div id="ks-total-earning-chart" class="ks-payment-earnings-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card ks-widget-payment-price-ratio ks-green">
                                            <div class="ks-price-ratio-title">
                                                Share Price
                                            </div>
                                            <div class="ks-price-ratio-amount">23.82</div>
                                            <div class="ks-price-ratio-progress">
                                                <span class="ks-icon ks-icon-circled-up-right"></span>
                                                <div class="ks-text">0.32%</div>
                                            </div>
                                        </div>
                                        <div class="card ks-widget-payment-price-ratio ks-blue">
                                            <div class="ks-price-ratio-title">
                                                Share Price
                                            </div>
                                            <div class="ks-price-ratio-amount">23.82</div>
                                            <div class="ks-price-ratio-progress">
                                                <span class="ks-icon ks-icon-circled-up-right"></span>
                                                <div class="ks-text">0.32%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card ks-widget-payment-price-ratio ks-purple">
                                            <div class="ks-price-ratio-title">
                                                Share Price
                                            </div>
                                            <div class="ks-price-ratio-amount">0.23</div>
                                            <div class="ks-price-ratio-progress">
                                                <span class="ks-icon ks-icon-circled-down-left"></span>
                                                <div class="ks-text">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="card ks-widget-payment-price-ratio ks-yellow">
                                            <div class="ks-price-ratio-title">
                                                Share Price
                                            </div>
                                            <div class="ks-price-ratio-amount">0.23</div>
                                            <div class="ks-price-ratio-progress">
                                                <span class="ks-icon ks-icon-circled-down-left"></span>
                                                <div class="ks-text">1.56%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card ks-card-widget ks-widget-payment-table-invoicing">
                                    <h5 class="card-header">
                                        Invoicing

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">View All Invoices</a>
                                            <a href="#" class="ks-control-icon">
                                                <span class="la la-plus-circle ks-icon"></span>
                                            </a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table ks-payment-table-invoicing">
                                            <tr>
                                                <td class="ks-text-light" width="1">00451</td>
                                                <td>Design Works</td>
                                                <td class="ks-text-light">Twitter</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-cranberry">Delayed</span>
                                                </td>
                                                <td width="1">$2500.00</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-light" width="1">00452</td>
                                                <td class="ks-text-bold">Illustrations</td>
                                                <td class="ks-text-light">Twitter</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-crusta">Pending</span>
                                                </td>
                                                <td class="ks-text-bold" width="1">$460.00</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-light" width="1">00453</td>
                                                <td class="ks-text-bold">UX Study</td>
                                                <td class="ks-text-light">Twitter</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-mantis">Paid</span>
                                                </td>
                                                <td class="ks-text-bold" width="1">$1280.00</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-light" width="1">00454</td>
                                                <td class="ks-text-bold">UX Study</td>
                                                <td class="ks-text-light">Twitter</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-default">Out</span>
                                                </td>
                                                <td class="ks-text-bold" width="1">$1280.00</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-light" width="1">00455</td>
                                                <td class="ks-text-bold">Design Support</td>
                                                <td class="ks-text-light">Twitter</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-default">Out</span>
                                                </td>
                                                <td class="ks-text-bold" width="1">$350.00</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card ks-card-widget ks-widget-tasks-table">
                                    <h5 class="card-header">
                                        Important Upcoming Tasks

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">View All Tasks</a>
                                            <a href="#" class="ks-control-icon">
                                                <span class="la la-plus-circle ks-icon"></span>
                                            </a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table ks-table-tasks">
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <label class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>Create new prototype for the landing page</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-cranberry">Out today</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <label class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>Add new Google Analitics code to all files</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-default">Due in 3 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <label class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>Finish dashboard UI Kit</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-default">Due in 5 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <label class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>Update parallax scroll on team page</td>
                                                <td class="ks-text-right">
                                                    <span class="badge badge-default">Due in 7 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ks-cell-checkbox">
                                                    <label class="custom-control custom-checkbox ks-checkbox ks-no-description ks-checkbox-success">
                                                        <input type="checkbox" class="custom-control-input" checked>
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td class="ks-cell-checked" colspan="2">Add new Google Analitics code to all files</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card ks-card-widget ks-widget-payment-table">
                                    <h5 class="card-header">
                                        Recent Income

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">View all</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table ks-payment-table">
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-1.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-light">Easy One Page Dashboard</td>
                                                <td class="ks-text-bold">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap">3 days ago</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-8.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-light">Easy One Page Dashboard</td>
                                                <td class="ks-text-bold">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap">3 days ago</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-9.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-light">Easy One Page Dashboard</td>
                                                <td class="ks-text-bold">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap">3 days ago</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-10.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-light">Easy One Page Dashboard</td>
                                                <td class="ks-text-bold">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap">3 days ago</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-11.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-light">Easy One Page Dashboard</td>
                                                <td class="ks-text-bold">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap">3 days ago</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card ks-card-widget ks-widget-payment-table">
                                    <h5 class="card-header">
                                        Best Customers

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">View all</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table ks-payment-table">
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-1.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-bold ks-text-right" width="1">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-8.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-bold ks-text-right" width="1">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-9.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-bold ks-text-right" width="1">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-10.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-bold ks-text-right" width="1">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-text-bold ks-text-no-wrap">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-11.jpg" width="28" height="28" class="ks-avatar ks-img-circle"> John Doe
                                                </td>
                                                <td class="ks-text-bold ks-text-right" width="1">$150</td>
                                                <td class="ks-text-light ks-text-right ks-text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card ks-card-widget ks-widget-tasks-statuses-progress">
                                    <h5 class="card-header">
                                        Tasks

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">January 2017</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="tasks-statuses-progress-table">
                                            <tr>
                                                <td class="ks-progress-status">Completed</td>
                                                <td width="1" class="ks-text-light ks-text-right">95%</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-progress-status">Total</td>
                                                <td width="1" class="ks-text-light ks-text-right">95%</td>
                                            </tr>
                                            <tr>
                                                <td class="ks-progress-status">Monthle Average</td>
                                                <td width="1" class="ks-text-light ks-text-right">95%</td>
                                            </tr>
                                        </table>

                                        <hr>

                                        <div class="tasks-total-statuses-progress">
                                            <span class="ks-name">Progress</span>
                                            <div class="progress ks-progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 79%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="ks-amount">79%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card ks-card-widget ks-widget-payment-active-clients">
                                    <h5 class="card-header">Active Clients</h5>
                                    <div class="card-block">
                                        <div class="ks-card-widget-datetime">
                                            You’re currently in <span class="ks-text-bold">TOP 10</span>
                                            of platform your rating is <span class="ks-text-bold">4.85</span>.
                                            Keep up great work!
                                        </div>
                                        <div class="ks-active-clients-category-progress">
                                            <span class="ks-name">Rating</span>
                                            <div class="progress ks-progress-xs">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="ks-amount">95%</span>
                                        </div>
                                        <div class="ks-active-clients-category-progress">
                                            <span class="ks-name">Budget</span>
                                            <div class="progress ks-progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 68%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="ks-amount">68%</span>
                                        </div>
                                        <div class="ks-active-clients-category-progress">
                                            <span class="ks-name">Timing</span>
                                            <div class="progress ks-progress-xs">
                                                <div class="progress-bar bg-cranberry" role="progressbar" style="width: 36%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="ks-amount">36%</span>
                                        </div>

                                        <hr>

                                        <div class="ks-active-clients-category-progress">
                                            <span class="ks-name">Rating</span>
                                            <div class="progress ks-progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="ks-amount">55%</span>
                                        </div>
                                        <div class="ks-active-clients-category-progress">
                                            <span class="ks-name">Budget</span>
                                            <div class="progress ks-progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 18%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="ks-amount">18%</span>
                                        </div>
                                        <div class="ks-active-clients-category-progress">
                                            <span class="ks-name">Timing</span>
                                            <div class="progress ks-progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="ks-amount">76%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card ks-card-widget ks-widget-chart-orders">
                                    <h5 class="card-header">
                                        Orders

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">January 2017</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-chart-orders-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card ks-card-widget ks-widget-payment-total-amount ks-purple-light">
                                    <h5 class="card-header">
                                        Total Teachers

                                        <div class="dropdown ks-control">
                                            <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="ks-icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-payment-total-amount-item-icon-block">
                                            <span class="ks-icon-combo-chart ks-icon"></span>
                                        </div>

                                        <div class="ks-payment-total-amount-item-body">
                                            <div class="ks-payment-total-amount-item-amount">
                                                <span class="ks-amount">103</span>
                                            </div>
                                            <div class="ks-payment-total-amount-item-description">
                                                Today status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card ks-card-widget ks-widget-payment-total-amount ks-green-light">
                                    <h5 class="card-header">
                                        Total Students

                                        <div class="dropdown ks-control">
                                            <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="ks-icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-payment-total-amount-item-icon-block">
                                            <span class="la la-pie-chart ks-icon"></span>
                                        </div>

                                        <div class="ks-payment-total-amount-item-body">
                                            <div class="ks-payment-total-amount-item-amount">
                                                <span class="ks-amount">2612</span>
                                            </div>
                                            <div class="ks-payment-total-amount-item-description">
                                               Today status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card ks-card-widget ks-widget-payment-total-amount ks-pink-light">
                                    <h5 class="card-header">
                                        Total Admins

                                        <div class="dropdown ks-control">
                                            <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="ks-icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-payment-total-amount-item-icon-block">
                                            <span class="la la-user ks-icon"></span>
                                        </div>

                                        <div class="ks-payment-total-amount-item-body">
                                            <div class="ks-payment-total-amount-item-amount">
                                                <span class="ks-amount">23</span>
                                            </div>
                                            <div class="ks-payment-total-amount-item-description">
                                                Today status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card ks-card-widget ks-widget-payment-total-amount ks-orange-light">
                                    <h5 class="card-header">
                                        Others

                                        <div class="dropdown ks-control">
                                            <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="ks-icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-payment-total-amount-item-icon-block">
                                            <span class="la la-area-chart ks-icon"></span>
                                        </div>

                                        <div class="ks-payment-total-amount-item-body">
                                            <div class="ks-payment-total-amount-item-amount">
                                                <span class="ks-amount">67</span>
                                            </div>
                                            <div class="ks-payment-total-amount-item-description">
                                                Today status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card ks-card-widget ks-payment-widget-table-and-map">
                                    <h5 class="card-header">
                                        Global Sales by Top Locations

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">This year</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <table class="table ks-payment-widget-table-and-map-table">
                                                    <tr>
                                                        <td class="ks-flag" width="20">
                                                            <img src="<?=base_url()?>assets/img/flags/24/United-States.png" class="ks-flag">
                                                        </td>
                                                        <td>
                                                            The USA
                                                        </td>
                                                        <td class="text-right">
                                                            2.910
                                                        </td>
                                                        <td class="ks-amount">53.23%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ks-flag" width="20">
                                                            <img src="<?=base_url()?>assets/img/flags/24/United-Kingdom.png" class="ks-flag">
                                                        </td>
                                                        <td>
                                                            UK
                                                        </td>
                                                        <td class="text-right">
                                                            1.300
                                                        </td>
                                                        <td class="ks-amount">20.43%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ks-flag" width="20">
                                                            <img src="<?=base_url()?>assets/img/flags/24/Canada.png" class="ks-flag">
                                                        </td>
                                                        <td>
                                                            Canada
                                                        </td>
                                                        <td class="text-right">
                                                            760
                                                        </td>
                                                        <td class="ks-amount">10.35%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ks-flag" width="20">
                                                            <img src="<?=base_url()?>assets/img/flags/24/France.png" class="ks-flag">
                                                        </td>
                                                        <td>
                                                            France
                                                        </td>
                                                        <td class="text-right">
                                                            600
                                                        </td>
                                                        <td class="ks-amount">6.47%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ks-flag" width="20">
                                                            <img src="<?=base_url()?>assets/img/flags/24/Germany.png" class="ks-flag">
                                                        </td>
                                                        <td>
                                                            Germany
                                                        </td>
                                                        <td class="text-right">
                                                            530
                                                        </td>
                                                        <td class="ks-amount">4.91%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ks-flag" width="20">
                                                            <img src="<?=base_url()?>assets/img/flags/24/Spain.png" class="ks-flag">
                                                        </td>
                                                        <td>
                                                            Spain
                                                        </td>
                                                        <td class="text-right">
                                                            322
                                                        </td>
                                                        <td class="ks-amount">2.01%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ks-flag" width="20">
                                                            <img src="<?=base_url()?>assets/img/flags/24/Russia.png" class="ks-flag">
                                                        </td>
                                                        <td>
                                                            Russia
                                                        </td>
                                                        <td class="text-right">
                                                            210
                                                        </td>
                                                        <td class="ks-amount">0.66%</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-7">
                                                <div id="ks-payment-widget-table-and-map-map" data-height="284"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card ks-card-widget ks-widget-messages-inbox">
                                    <h5 class="card-header">
                                        Inbox

                                        <div class="dropdown ks-control">
                                            <a class="btn btn-link ks-no-text ks-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="ks-icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="ks-widget-messages-inbox-items">
                                            <a href="#" class="ks-widget-messages-inbox-item">
                                                <div class="ks-widget-messages-inbox-item-avatar ks-avatar ks-online">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-6.jpg" width="36" height="36">
                                                </div>
                                                <div class="ks-widget-messages-inbox-item-body">
                                                    <div class="ks-widget-messages-inbox-item-body-name-and-time">
                                                        <span class="ks-name">Konstantin Berezhski</span>
                                                        <span class="ks-time">12:55 pm</span>
                                                    </div>
                                                    <p class="ks-widget-messages-inbox-item-body-message">
                                                        This isn't just about you. It's about wha...
                                                    </p>
                                                </div>
                                            </a>
                                            <a href="#" class="ks-widget-messages-inbox-item">
                                                <div class="ks-widget-messages-inbox-item-avatar ks-avatar ks-online">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-4.jpg" width="36" height="36">
                                                </div>
                                                <div class="ks-widget-messages-inbox-item-body">
                                                    <div class="ks-widget-messages-inbox-item-body-name-and-time">
                                                        <span class="ks-name">Konstantin Berezhski</span>
                                                        <span class="ks-time">12:55 pm</span>
                                                    </div>
                                                    <p class="ks-widget-messages-inbox-item-body-message">
                                                        This isn't just about you. It's about wha...
                                                    </p>
                                                </div>
                                            </a>
                                            <a href="#" class="ks-widget-messages-inbox-item">
                                                <div class="ks-widget-messages-inbox-item-avatar ks-avatar ks-offline">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-2.jpg" width="36" height="36">
                                                </div>
                                                <div class="ks-widget-messages-inbox-item-body">
                                                    <div class="ks-widget-messages-inbox-item-body-name-and-time">
                                                        <span class="ks-name">Konstantin Berezhski</span>
                                                        <span class="ks-time">12:55 pm</span>
                                                    </div>
                                                    <p class="ks-widget-messages-inbox-item-body-message">
                                                        This isn't just about you. It's about wha...
                                                    </p>
                                                </div>
                                            </a>
                                            <a href="#" class="ks-widget-messages-inbox-item">
                                                <div class="ks-widget-messages-inbox-item-avatar ks-avatar ks-online">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-13.jpg" width="36" height="36">
                                                </div>
                                                <div class="ks-widget-messages-inbox-item-body">
                                                    <div class="ks-widget-messages-inbox-item-body-name-and-time">
                                                        <span class="ks-name">Konstantin Berezhski</span>
                                                        <span class="ks-time">12:55 pm</span>
                                                    </div>
                                                    <p class="ks-widget-messages-inbox-item-body-message">
                                                        This isn't just about you. It's about wha...
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card ks-card-widget ks-widget-table">
                                    <h5 class="card-header">
                                        Recent Activities

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">View All Invoices</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table ks-payment-table-invoicing">
                                            <tr>
                                                <th width="1">#</th>
                                                <th>Subject Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th width="1">Status</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-cranberry">Delayed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-crusta">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-crusta">Pnding</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card ks-widget-weather-and-datetime ks-sunny">
                                    <div class="ks-widget-weather-and-datetime-weather-block">
                                        <div class="ks-widget-weather-and-datetime-weather-block-amount">
                                            +24º
                                        </div>
                                        <div class="ks-widget-weather-and-datetime-weather-block-type">
                                            Sunny
                                        </div>
                                    </div>
                                    <div class="ks-widget-weather-and-datetime-datetime-block">
                                        <div class="ks-widget-weather-and-datetime-datetime-block-datetime">6:18 pm</div>
                                        <div class="ks-widget-weather-and-datetime-datetime-block-location">los angeles</div>
                                        <span class="ks-icon wi wi-day-cloudy"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card ks-widget-weather-and-datetime ks-cold">
                                    <div class="ks-widget-weather-and-datetime-weather-block">
                                        <div class="ks-widget-weather-and-datetime-weather-block-amount">
                                            -24º
                                        </div>
                                        <div class="ks-widget-weather-and-datetime-weather-block-type">
                                            Show
                                        </div>
                                    </div>
                                    <div class="ks-widget-weather-and-datetime-datetime-block">
                                        <div class="ks-widget-weather-and-datetime-datetime-block-datetime">6:18 pm</div>
                                        <div class="ks-widget-weather-and-datetime-datetime-block-location">los angeles</div>
                                        <span class="ks-icon wi wi-snow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="card ks-widget-simple-weather-only ks-sunny">
                                    <span class="ks-icon wi wi-day-cloudy"></span>
                                    <div class="ks-widget-simple-weather-only-body">
                                        <div class="ks-widget-simple-weather-only-block-amount">
                                            +10º
                                        </div>
                                        <div class="ks-widget-simple-weather-only-location">
                                            Los Angeles
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="card ks-widget-simple-weather-only ks-cold">
                                    <span class="ks-icon wi wi-snow"></span>
                                    <div class="ks-widget-simple-weather-only-body">
                                        <div class="ks-widget-simple-weather-only-block-amount">
                                            -2º
                                        </div>
                                        <div class="ks-widget-simple-weather-only-location">
                                            Los Angeles
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ks-dashboard-tabbed-sidebar-sidebar">
                        <div class="ks-tabs-container ks-tabs-default ks-tabs-with-separator ks-tabs-header-default ks-tabs-info">
                            <ul class="nav ks-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-toggle="tab" data-target="#tabbed-sidebar-activity">
                                        <span class="ks-icon la la-flash">
                                            <span class="ks-amount">3</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="tab" data-target="#tabbed-sidebar-comments">
                                        <span class="ks-icon la la-comments">
                                            <span class="ks-amount">1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="tab" data-target="#tabbed-sidebar-posts">
                                        <span class="ks-icon la la-book">
                                            <span class="ks-amount">6</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="tab" data-target="#tabbed-sidebar-favourites">
                                        <span class="ks-icon la la-star-o">
                                            <span class="ks-amount">4</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabbed-sidebar-activity" role="tabpanel">
                                    <div class="tab-pane-content">
                                        <div class="ks-tabbed-sidebar-activity">
                                            <div class="ks-tabbed-sidebar-tab-content-header">
                                                <h5>Activity</h5>
                                                <div class="input-icon icon-right icon icon-lg icon-color-primary">
                                                    <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search">
                                                    <span class="icon-addon">
                                                        <span class="la la-search"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="ks-tabbed-sidebar-activity-items ks-scrollable" data-auto-height>
                                                <div class="ks-tabbed-sidebar-activity-item ks-activity-item-status-active">
                                                    <div class="ks-action-wrapper">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-6.jpg" alt="" class="ks-avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="ks-action-message">Hi, What you think about new deal</a>
                                                    </div>
                                                    <span class="badge badge-primary ks-sm">New</span>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item ks-activity-item-status-active">
                                                    <div class="ks-action-wrapper">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-11.jpg" alt="" class="ks-avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="ks-action-message">Hi, What you think about new deal</a>
                                                    </div>
                                                    <span class="badge badge-success ks-sm">Completed</span>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item ks-activity-item-status-active">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-star ks-color-warning ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">GOOG:US, 300 @ 145.32 opportunity</a>
                                                    </div>
                                                    <span class="badge badge-danger ks-sm">Canceled</span>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-check ks-color-success ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Filled — Forson Inc. — 300 — $5,600</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-check ks-color-success ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Filled — Marta Skyson — 2000 — $34,600</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-5.jpg" alt="" class="ks-avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="ks-action-message">Hi, What you think about new deal</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-flash ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-star ks-color-warning ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Samsung Note 7 Users Urged to Turn Phone</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-plus-circle ks-color-info ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">New — Shell Inc. — 120 — $5600</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-2.jpg" alt="" class="ks-avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="ks-action-message">Hi Konstantin, Sent you quarter report</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-star ks-color-pink ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Asset Reporting Lored</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-archive ks-color-gray ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-calendar ks-color-info ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-plus-circle ks-color-info ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">New — Shell Inc. — 120 — $5600</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-3.jpg" alt="" class="ks-avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="ks-action-message">Hi Konstantin, Sent you quarter report</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-star ks-color-pink ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Asset Reporting Lored</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-archive ks-color-gray ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-calendar ks-color-info ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-plus-circle ks-color-success ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">New — Shell Inc. — 120 — $5600</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-8.jpg" alt="" class="ks-avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="ks-action-message">Hi Konstantin, Sent you quarter report</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-bookmark-o ks-color-danger ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Asset Reporting Lored</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-archive ks-color-gray ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-activity-item">
                                                    <div class="ks-action-wrapper">
                                                        <span class="ks-action-icon">
                                                            <span class="la la-calendar ks-color-info ks-icon"></span>
                                                        </span>
                                                        <a href="#" class="ks-action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabbed-sidebar-comments" role="tabpanel">
                                    <div class="tab-pane-content">
                                        <div class="ks-tabbed-sidebar-comments">
                                            <div class="ks-tabbed-sidebar-tab-content-header">
                                                <h5>Comments</h5>
                                                <div class="input-icon icon-right icon icon-lg icon-color-primary">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="icon-addon">
                                                        <span class="la la-search"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="ks-tabbed-sidebar-comment-items ks-scrollable" data-auto-height>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Matthew Arnold</a>
                                                            <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>

                                                            <div class="ks-datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-4.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Rachel Matthews</a>
                                                            <span class="ks-description">leave a comment <a href="#" class="ks-color-info">Lake Hall Beer and Pizza</a></span>

                                                            <div class="ks-datetime">
                                                                September 26, 2016 at 19:25 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        It had to end sometime. Apple’s incredible growth that saw the company report record quarterly earnings over a span of 13 years was untenable.
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-10.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Marilyn Fox</a>
                                                            <span class="ks-description">leave a comment <a href="#" class="ks-color-info">Sample Post</a></span>

                                                            <div class="ks-datetime">
                                                                September 17, 2016 at 11:00 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Matthew Arnold</a>
                                                            <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>

                                                            <div class="ks-datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Matthew Arnold</a>
                                                            <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>

                                                            <div class="ks-datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Matthew Arnold</a>
                                                            <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>

                                                            <div class="ks-datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Matthew Arnold</a>
                                                            <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>

                                                            <div class="ks-datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Matthew Arnold</a>
                                                            <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>

                                                            <div class="ks-datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="ks-tabbed-sidebar-comment-item">
                                                    <div class="ks-tabbed-sidebar-comment-action">
                                                        <img src="<?=base_url()?>assets/img/avatars/avatar-3.jpg" class="ks-avatar" width="25" height="25">
                                                        <div class="ks-action">
                                                            <a href="#" class="ks-name">Matthew Arnold</a>
                                                            <span class="ks-description">added a new task to the project <a href="#" class="ks-color-info">Website redesign</a></span>

                                                            <div class="ks-datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ks-tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tabbed-sidebar-posts" role="tabpanel">
                                    <div class="tab-pane-content">
                                        <div class="ks-tabbed-sidebar-posts">
                                            <div class="ks-tabbed-sidebar-tab-content-header">
                                                <h5>Posts</h5>
                                                <div class="input-icon icon-right icon icon-lg icon-color-primary">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="icon-addon">
                                                        <span class="la la-search"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="ks-tabbed-sidebar-post-items ks-scrollable" data-auto-height>
                                                <a href="#" class="ks-tabbed-sidebar-post-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-1.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-post-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-2.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-post-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-3.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-post-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-4.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-post-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-5.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-post-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-1.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-post-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-1.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-post-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-1.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabbed-sidebar-favourites" role="tabpanel">
                                    <div class="tab-pane-content">
                                        <div class="ks-tabbed-sidebar-favourites">
                                            <div class="ks-tabbed-sidebar-tab-content-header">
                                                <h5>Favourites</h5>
                                                <div class="input-icon icon-right icon icon-lg icon-color-primary">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="icon-addon">
                                                        <span class="la la-search"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="ks-tabbed-sidebar-favourites-items ks-scrollable" data-auto-height>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-1.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon ks-action-file">
                                                        <span class="la la-file-word-o ks-color-info ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">annual_report_2016.docx</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">156 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon ks-action-file">
                                                        <span class="la la-file-pdf-o ks-color-danger ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">certificate.pdf</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">88 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-7.jpg" alt="" class="ks-avatar" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Barbara Curtis</span>
                                                        <span class="ks-extra-info">Product Manager</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon">
                                                        <span class="la la-link ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">The Verge</span>
                                                        <span class="ks-extra-info ks-color-info">HTTP://www.theverge.com</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-3.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon ks-action-file">
                                                        <span class="la la-file-word-o ks-color-info ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">annual_report_2016.docx</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">156 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon ks-action-file">
                                                        <span class="la la-file-pdf-o ks-color-danger ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">certificate.pdf</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">88 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-7.jpg" alt="" class="ks-avatar" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Barbara Curtis</span>
                                                        <span class="ks-extra-info">Product Manager</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon">
                                                        <span class="la la-link ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">The Verge</span>
                                                        <span class="ks-extra-info ks-color-info">HTTP://www.theverge.com</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <img src="<?=base_url()?>assets/img/thumbs/ph-2.png" alt="" class="ks-thumb" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Road trip essentials</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">1200 views</span>
                                                            <span class="ks-amount-block">34 comments</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon ks-action-file">
                                                        <span class="la la-file-word-o ks-color-info ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">annual_report_2016.docx</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">156 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon ks-action-file">
                                                        <span class="la la-file-pdf-o ks-color-danger ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">certificate.pdf</span>
                                                        <span class="ks-extra-info">
                                                            <span class="ks-amount-block">88 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <img src="<?=base_url()?>assets/img/avatars/avatar-7.jpg" alt="" class="ks-avatar" width="36" height="36">
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">Barbara Curtis</span>
                                                        <span class="ks-extra-info">Product Manager</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="ks-tabbed-sidebar-favourite-item">
                                                    <span class="ks-action-icon">
                                                        <span class="la la-link ks-icon"></span>
                                                    </span>
                                                    <span href="#" class="ks-description">
                                                        <span class="ks-name">The Verge</span>
                                                        <span class="ks-extra-info ks-color-info">HTTP://www.theverge.com</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline ks-light ks-no-text ks-remove">
                                                        <span class="la la-trash-o ks-icon"></span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $this->load->view('main_lib');
?>
<script type="application/javascript">
(function ($) {
    $(document).ready(function () {
        c3.generate({
            bindto: '#ks-next-payout-chart',
            data: {
                columns: [
                    ['data1', 6, 5, 6, 5, 7, 8, 7]
                ],
                types: {
                    data1: 'area'
                },
                colors: {
                    data1: '#81c159'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                show: false
            },
            point: {
                show: false
            },
            axis: {
                x: {show:false},
                y: {show:false}
            }
        });

        c3.generate({
            bindto: '#ks-total-earning-chart',
            data: {
                columns: [
                    ['data1', 6, 5, 6, 5, 7, 8, 7]
                ],
                types: {
                    data1: 'area'
                },
                colors: {
                    data1: '#4e54a8'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                show: false
            },
            point: {
                show: false
            },
            axis: {
                x: {show:false},
                y: {show:false}
            }
        });

        c3.generate({
            bindto: '.ks-chart-orders-block',
            data: {
                columns: [
                    ['Revenue', 150, 200, 220, 280, 400, 160, 260, 400, 300, 400, 500, 420, 500, 300, 200, 100, 400, 600, 300, 360, 600],
                    ['Profit', 350, 300,  200, 140, 200, 30, 200, 100, 400, 600, 300, 200, 100, 50, 200, 600, 300, 500, 30, 200, 320]
                ],
                colors: {
                    'Revenue': '#f88528',
                    'Profit': '#81c159'
                }
            },
            point: {
                r: 5
            },
            grid: {
                y: {
                    show: true
                }
            }
        });

        setTimeout(function () {
            new Noty({
                text: '<strong>Versi Demo : Aplikasi Imigrasi Bogor</strong>! <br> Sedang dalam tahap pengembangan.',
                type   : 'information',
                theme  : 'mint',
                layout : 'topRight',
                timeout: 3000
            }).show();
        }, 1500);

        var maplace = new Maplace({
            map_div: '#ks-payment-widget-table-and-map-map',
            controls_on_map: false
        });
        maplace.Load();
    });
})(jQuery);
</script>

<div class="ks-mobile-overlay"></div>

<!-- BEGIN SETTINGS BLOCK -->
<div class="ks-settings-slide-block">
    <a class="ks-settings-slide-control">
        <span class="ks-icon la la-cog"></span>
    </a>

    <div class="ks-header">
        <span class="ks-text">Layout Options</span>
        <a class="ks-settings-slide-close-control">
            <span class="ks-icon la la-close"></span>
        </a>
    </div>

    <div class="ks-themes-list">
        <a href="../default-primary/index.html" class="ks-theme ks-primary ks-active"></a>
        <a href="../default-primary-dark/index.html" class="ks-theme ks-dark-primary"></a>
        <a href="../default-info/index.html" class="ks-theme ks-info"></a>
        <a href="../default-pink/index.html" class="ks-theme ks-blink-pink-san-marino"></a>
        <a href="../default-bermuda-gray/index.html" class="ks-theme ks-bermuda-gray-malachite"></a>
        <a href="../default-royal-blue/index.html" class="ks-theme ks-royal-blue-orchid"></a>
        <a href="../default-ebony-clay/index.html" class="ks-theme ks-ebony-clay-cerise-red"></a>
        <a href="../default-international-klein-blue/index.html" class="ks-theme ks-international-klein-blue-dixie"></a>
        <a href="../default-jungle-green/index.html" class="ks-theme ks-jungle-green-chambray"></a>
        <a href="../default-voodoo/index.html" class="ks-theme ks-voodoo-medium-purple"></a>
        <a href="../default-cornflower-blue/index.html" class="ks-theme ks-cornflower-blue-ecstasy"></a>
        <a href="../default-purple/index.html" class="ks-theme ks-purple-mandy"></a>
        <a href="../default-oslo-gray/index.html" class="ks-theme ks-oslo-gray-royal-blue"></a>
        <a href="../default-astronaut-blue/index.html" class="ks-theme ks-astronaut-blue-persian-green"></a>
        <a href="../default-old-brick/index.html" class="ks-theme ks-old-brick"></a>
        <a href="../default-white/index.html" class="ks-theme ks-white"></a>
    </div>

    <ul class="ks-settings-list">
        <li>
            <span class="ks-text">Collapsed Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-checkbox-toggle">
                <input type="checkbox" value="1">
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Fixed page header</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-page-header-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Dark/Light Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-style-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">White/Gray Content Background</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-content-bg-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
    </ul>
</div>
<!-- END SETTINGS BLOCK -->
</body>
</html>