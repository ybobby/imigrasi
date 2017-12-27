<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<?php $this->load->view('header')?>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

    <!-- BEGIN HEADER -->
<?php
    $this->load->view('menu')
?>
<!-- END HEADER -->






<div class="ks-page-container">

    <!-- BEGIN DEFAULT SIDEBAR -->
<div class="ks-column ks-sidebar ks-info">
    <div class="ks-wrapper ks-sidebar-wrapper">
        <ul class="nav nav-pills nav-stacked">
            <li class="nav-item ks-user dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/avatars/avatar-12.jpg" width="36" height="36" class="ks-avatar rounded-circle">
                    <div class="ks-info">
                        <div class="ks-name">Peter Armstrong</div>
                        <div class="ks-text">Product Manager</div>
                    </div>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile-social-profile.html">Profile</a>
                    <a class="dropdown-item" href="profile-settings-general.html">Settings</a>
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
            <section class="ks-title">
                <h3>Bootstrap Table</h3>

                <div class="ks-controls">
                    <nav class="breadcrumb ks-default">
                        <a class="breadcrumb-item ks-breadcrumb-icon" href="index.html">
                            <span class="la la-home ks-icon"></span>
                        </a>
                        <a href="#" class="breadcrumb-item">DataTables</a>
                        <span class="breadcrumb-item active" href="#">Bootstrap Table</span>
                    </nav>

                    <button class="btn btn-primary-outline ks-light ks-content-nav-toggle" data-block-toggle=".ks-content-nav > .ks-nav">Menu</button>
                </div>
            </section>
        </div>

        <div class="ks-page-content">
            <div class="ks-page-content-body ks-content-nav">
                <div class="ks-nav ks-scrollable" data-auto-height data-fix-height="10" data-scrollable-if-has-class="ks-fixed">
    <div class="ks-scroll-wrapper">
        <div class="ks-separator">Base Options</div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table.html">
                    Basic Initialisation
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-sortable-columns.html">
                    Sortable Columns
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-large-columns.html">
                    Large Columns
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-disabled-checkbox.html">
                    Disabled Checkbox
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-detail-view.html">
                    Detail View
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-nested-tables.html">
                    Nested Tables
                </a>
            </li>
        </ul>

        <div class="ks-separator">Extensions</div>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-extensions-export.html">
                    Export
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-extensions-column-resizable.html">
                    Column Resizable
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-extensions-mobile.html">
                    Mobile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-extensions-reorder-columns.html">
                    Reorder Columns
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatables-bootstrap-table-extensions-fixed-columns.html">
                    Fixed Columns
                </a>
            </li>
        </ul>
    </div>
</div>

                <div class="ks-nav-body">
                    <div class="ks-nav-body-wrapper">
                        <div class="container-fluid">
                            <table id="ks-datatable" class="table table-striped table-bordered" width="100%"
                                   data-search="true"
                                   data-mobile-responsive="true"
                                   data-check-on-init="true"
                                   data-show-columns="true"
                            >
                                <thead>
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="name">Item Name</th>
                                        <th data-field="price">Item Price</th>
                                    </tr>
                                </thead>
                            </table>
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
    var data = [
        {
            "id": 0,
            "name": "Item 0",
            "price": "$0"
        },
        {
            "id": 1,
            "name": "Item 1",
            "price": "$1"
        },
        {
            "id": 2,
            "name": "Item 2",
            "price": "$2"
        },
        {
            "id": 3,
            "name": "Item 3",
            "price": "$3"
        },
        {
            "id": 4,
            "name": "Item 4",
            "price": "$4"
        },
        {
            "id": 5,
            "name": "Item 5",
            "price": "$5"
        },
        {
            "id": 6,
            "name": "Item 6",
            "price": "$6"
        },
        {
            "id": 7,
            "name": "Item 7",
            "price": "$7"
        },
        {
            "id": 8,
            "name": "Item 8",
            "price": "$8"
        },
        {
            "id": 9,
            "name": "Item 9",
            "price": "$9"
        },
        {
            "id": 10,
            "name": "Item 10",
            "price": "$10"
        },
        {
            "id": 11,
            "name": "Item 11",
            "price": "$11"
        },
        {
            "id": 12,
            "name": "Item 12",
            "price": "$12"
        },
        {
            "id": 13,
            "name": "Item 13",
            "price": "$13"
        },
        {
            "id": 14,
            "name": "Item 14",
            "price": "$14"
        },
        {
            "id": 15,
            "name": "Item 15",
            "price": "$15"
        },
        {
            "id": 16,
            "name": "Item 16",
            "price": "$16"
        },
        {
            "id": 17,
            "name": "Item 17",
            "price": "$17"
        },
        {
            "id": 18,
            "name": "Item 18",
            "price": "$18"
        },
        {
            "id": 19,
            "name": "Item 19",
            "price": "$19"
        },
        {
            "id": 20,
            "name": "Item 20",
            "price": "$20"
        }
    ];

    $(document).ready(function() {
        $('#ks-datatable').bootstrapTable({
            data: data,
            icons: {
                refresh: 'la la-refresh icon-refresh',
                toggle: 'la la-list-alt icon-list-alt',
                columns: 'la la-th icon-th',
                share: 'la la-download icon-share'
            }
        });
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