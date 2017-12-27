<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<?php $this->load->view('header')?>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

<?php
    $this->load->view('menu')
?>

<div class="ks-page-container ks-dashboard-tabbed-sidebar-fixed-tabs">

<?php
    $this->load->view('sidebar')
?>
    <div class="ks-column ks-page">
        <div class="ks-page-header">
            <section class="ks-title-and-subtitle">
                <div class="ks-title-block">
                    <h3 class="ks-main-title">Aplikasi Pengawasan Orang Asing </h3>
                    <div class="ks-sub-title">Kantor Imigrasi Kelas I Bogor</div>
                </div>
                <!-- <button class="btn btn-secondary-outline ks-light ks-no-text ks-tabbed-sidebar-navigation-block-toggle" data-block-toggle=".ks-dashboard-tabbed-sidebar-sidebar">
                    <span class="ks-icon la la-bars"></span>
                </button> -->
            </section>
        </div>

        <div class="ks-page-content">
            <div class="ks-page-content-body">
                <div class="ks-dashboard-tabbed-sidebar">
                    <div class="ks-dashboard-tabbed-sidebar-widgets">
                        <div class="row">
                            <!-- <div class="col-lg-3 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-purple">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="ks-icon-combo-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">1.924</span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Jumlah WNA <span class="ks-progress-type">(+189)</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-green">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-pie-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">90</span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Sponsor Aktif <span class="ks-progress-type">(+18)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-pink">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="ks-icon-user ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">5467</span>
                                            <span class="ks-amount-icon ks-icon-circled-down-left"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Jumlah WNA <span class="ks-progress-type">(-89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-area-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">43</span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Kewarganegaraan <span class="ks-progress-type">(+2)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card ks-card-widget ks-payment-widget-table-and-map">
                                    <h5 class="card-header">
                                        Persebaran Domisili WNA di Wilayah Kota/Kab. Bogor  
                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">Real Time</a>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card ks-card-widget ks-payment-widget-table-and-map">
                                    <h5 class="card-header">
                                        Jumlah WNA Berdasar Asal Negara (TOP 7)

                                        <div class="ks-controls">
                                            <a href="#" class="ks-control-link">Real Time</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <table class="table ks-payment-widget-table-and-map-table">
                                                    <tr>
                                                        <td class="ks-flag" width="20">
                                                            <img src="<?=base_url()?>assets/img/flags/24/United-States.png" class="ks-flag">
                                                        </td>
                                                        <td>
                                                            USA
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
                            <div class="col-lg-6">
                                <div class="card ks-widget-weather-and-datetime ks-cold">
                                    <div class="ks-widget-weather-and-datetime-weather-block">
                                        <div class="ks-widget-weather-and-datetime-weather-block-amount">
                                            26º
                                        </div>
                                        <div class="ks-widget-weather-and-datetime-weather-block-type">
                                            Hujan
                                        </div>
                                    </div>
                                    <div class="ks-widget-weather-and-datetime-datetime-block">
                                        <div class="ks-widget-weather-and-datetime-datetime-block-datetime">
                                            <?php 
                                                date_default_timezone_set("Asia/Bangkok");
                                                echo date("h:i a") 
                                            ?>
                                        </div>
                                        <div class="ks-widget-weather-and-datetime-datetime-block-location">Bogor</div>
                                        <span class="ks-icon wi wi-rain"></span>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                                     
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="card ks-widget-weather-and-datetime ks-sunny">
                                    <div class="ks-widget-weather-and-datetime-weather-block">
                                        <div class="ks-widget-weather-and-datetime-weather-block-amount">
                                            +32º
                                        </div>
                                        <div class="ks-widget-weather-and-datetime-weather-block-type">
                                            Cerah
                                        </div>
                                    </div>
                                    <div class="ks-widget-weather-and-datetime-datetime-block">
                                        <div class="ks-widget-weather-and-datetime-datetime-block-datetime">
                                            <?php 
                                                date_default_timezone_set("Asia/Bangkok");
                                                echo date("h:i a") 
                                            ?>
                                        </div>
                                        <div class="ks-widget-weather-and-datetime-datetime-block-location">Jakarta</div>
                                        <span class="ks-icon wi wi-day-sunny"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card ks-widget-weather-and-datetime ks-cold">
                                    <div class="ks-widget-weather-and-datetime-weather-block">
                                        <div class="ks-widget-weather-and-datetime-weather-block-amount">
                                            26º
                                        </div>
                                        <div class="ks-widget-weather-and-datetime-weather-block-type">
                                            Hujan
                                        </div>
                                    </div>
                                    <div class="ks-widget-weather-and-datetime-datetime-block">
                                        <div class="ks-widget-weather-and-datetime-datetime-block-datetime">
                                            <?php 
                                                date_default_timezone_set("Asia/Bangkok");
                                                echo date("h:i a") 
                                            ?>
                                        </div>
                                        <div class="ks-widget-weather-and-datetime-datetime-block-location">Bogor</div>
                                        <span class="ks-icon wi wi-rain"></span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-2">
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
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="ks-dashboard-tabbed-sidebar-sidebar">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $this->load->view('main_lib');
?>

<script src="libs/bootstrap-table/bootstrap-table.min.js"></script>
<script src="libs/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
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
<!-- <div class="ks-settings-slide-block">
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
</div> -->
<!-- END SETTINGS BLOCK -->
</body>
</html>