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
                    <a class="dropdown-item" href="<?=base_url()?>/page/profile">Profil</a>
                    <!-- <a class="dropdown-item" href="profile-settings-general.html">Settings</a> -->
                    <a class="dropdown-item" href="<?=base_url()?>auth/logout">Logout</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-dashboard"></span>
                    <span>Dashboard</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item ks-active" href="index.html">Halaman Utama</a>
                    <!-- <a class="dropdown-item" href="dashboards-draggable-widgets.html">Draggable Widgets</a>
                    <a class="dropdown-item" href="dashboards-mail.html">Mail</a>
                    <a class="dropdown-item" href="dashboards-projects.html">Projects</a>
                    <a class="dropdown-item" href="dashboards-widgets-and-activity.html">Activity</a> -->
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-cubes"></span>
                    <span>Wilayah Kerja</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../default-primary/index.html">Peta Wilayah</a>
                    <!-- <div class="nav-item dropdown"> -->
                    <a class="dropdown-item" href="../default-primary/index.html">Data Administratif</a>
                        <!-- <div class="dropdown-menu">
                            <a class="dropdown-item" href="../sidebar_sections-primary/index.html" target="_blank">Sections</a>
                            <a class="dropdown-item" href="../sidebar_compact-primary/index.html" target="_blank">Compact</a>
                            <a class="dropdown-item" href="../sidebar_iconbar-primary/index.html" target="_blank">Iconbar</a>
                            <a class="dropdown-item" href="../sidebar_iconbar_compact-primary/index.html" target="_blank">Iconbar Compact</a>
                        </div> -->
                    <!-- </div> -->
                    <!-- <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>Navigation</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../horizontal_navbar-primary/index.html" target="_blank">Horizontal</a>
                            <a class="dropdown-item" href="../horizontal_navbar_iconbar-primary/index.html" target="_blank">Horizontal Iconbar</a>
                        </div>
                    </div> -->
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-th"></span>
                    <span>Tabel Data</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="datatables-datatables-net.html">Tabel Sponsor</a>
                    <a class="dropdown-item" href="datatables-bootstrap-table.html">Tabel WNA</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-flask"></span>
                    <span>Alat Bantu</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="music-app.html">Daftar Definisi</a>
                    <a class="dropdown-item" href="music-app.html">Import Data E-Office</a>
                </div>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="calendar.html">Export ke Excel</a>
                </div>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-toggle-off"></span>
                    <span></span>
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
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-question-circle"></span>
                    <span>Dokumentasi</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="faq.html">Cara Penggunaan</a>
                </div>
            </li>
        </ul>
        <!-- <div class="ks-sidebar-extras-block">
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
            <div class="ks-sidebar-copyright">© 2017 Kanim Bogor. All right reserved</div>
        </div> -->
    </div>
</div>
<!-- END DEFAULT SIDEBAR -->
