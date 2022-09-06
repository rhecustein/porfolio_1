@extends('layouts.be')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                            <div class="widget-stats-icon widget-stats-icon-primary">
                                <i class="material-icons-outlined">paid</i>
                            </div>
                            <div class="widget-stats-content flex-fill">
                                <span class="widget-stats-title">Today's Sales</span>
                                <span class="widget-stats-amount">$38,211</span>
                                <span class="widget-stats-info">471 Orders Total</span>
                            </div>
                            <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                                <i class="material-icons">keyboard_arrow_down</i> 4%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                            <div class="widget-stats-icon widget-stats-icon-warning">
                                <i class="material-icons-outlined">person</i>
                            </div>
                            <div class="widget-stats-content flex-fill">
                                <span class="widget-stats-title">Active Users</span>
                                <span class="widget-stats-amount">23,491</span>
                                <span class="widget-stats-info">790 unique this month</span>
                            </div>
                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                <i class="material-icons">keyboard_arrow_up</i> 12%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                            <div class="widget-stats-icon widget-stats-icon-danger">
                                <i class="material-icons-outlined">file_download</i>
                            </div>
                            <div class="widget-stats-content flex-fill">
                                <span class="widget-stats-title">Downloads</span>
                                <span class="widget-stats-amount">140,390</span>
                                <span class="widget-stats-info">87 items downloaded</span>
                            </div>
                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                <i class="material-icons">keyboard_arrow_up</i> 7%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card widget widget-list">
                    <div class="card-header">
                        <h5 class="card-title">Active Tasks<span class="badge badge-success badge-style-light">14
                                completed</span></h5>
                    </div>
                    <div class="card-body">
                        <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                        <ul class="widget-list-content list-unstyled">
                            <li class="widget-list-item widget-list-item-green">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">article</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Dashboard UI optimisations
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Oskar Hudson
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-blue">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">verified_user</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Mailbox cleanup
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Woodrow Hawkins
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-purple">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">watch_later</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Header scroll bugfix
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Sky Meyers
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-yellow">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">extension</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Localization for file manager
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Oskar Hudson
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-red">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">invert_colors</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        New E-commerce UX/UI design
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Oskar Hudson
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card widget widget-list">
                    <div class="card-header">
                        <h5 class="card-title">Todo<span class="badge badge-success badge-style-light">14
                                completed</span></h5>
                    </div>
                    <div class="card-body">
                        <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                        <ul class="widget-list-content list-unstyled">
                            <li class="widget-list-item widget-list-item-green">
                                <span class="widget-list-item-check">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Dashboard UI optimisations
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Oskar Hudson
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-blue">
                                <span class="widget-list-item-check">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                    </div>
                                </span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Mailbox cleanup
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Woodrow Hawkins
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-purple">
                                <span class="widget-list-item-check">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                    </div>
                                </span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Header scroll bugfix
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Sky Meyers
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-yellow">
                                <span class="widget-list-item-check">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Localization for file manager
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Oskar Hudson
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-red">
                                <span class="widget-list-item-check">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                    </div>
                                </span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        New E-commerce UX/UI design
                                    </a>
                                    <span class="widget-list-item-description-subtitle">
                                        Oskar Hudson
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card widget widget-payment-request">
                    <div class="card-header">
                        <h5 class="card-title">Payment Request<span class="badge badge-warning badge-style-light">8
                                June</span></h5>
                    </div>
                    <div class="card-body">
                        <div class="widget-payment-request-container">
                            <div class="widget-payment-request-author">
                                <div class="avatar m-r-sm">
                                    <img src="{{ asset('source/assets/images/avatars/avatar.png') }}" alt="">
                                </div>
                                <div class="widget-payment-request-author-info">
                                    <span class="widget-payment-request-author-name">Caio Yousuke</span>
                                    <span class="widget-payment-request-author-about">Customer Journey Expert</span>
                                </div>
                            </div>
                            <div class="widget-payment-request-product">
                                <div class="widget-payment-request-product-image m-r-sm">
                                    <img src="{{ asset('source/assets/images/other/facebook_logo.png') }}"
                                        class="mt-auto" alt="">
                                </div>
                                <div class="widget-payment-request-product-info d-flex">
                                    <div class="widget-payment-request-product-info-content">
                                        <span class="widget-payment-request-product-name">Google</span>
                                        <span class="widget-payment-request-product-about">Youtube Advertisments</span>
                                    </div>
                                    <span class="widget-payment-request-product-price">$2,399.99</span>
                                </div>
                            </div>
                            <div class="widget-payment-request-info m-t-md">
                                <div class="widget-payment-request-info-item">
                                    <span class="widget-payment-request-info-title d-block">
                                        Description
                                    </span>
                                    <span class="text-muted d-block">Advertisement for envato items</span>
                                </div>
                                <div class="widget-payment-request-info-item">
                                    <span class="widget-payment-request-info-title d-block">
                                        Due Date
                                    </span>
                                    <span class="text-muted d-block">14 June, 2021</span>
                                </div>
                            </div>
                            <div class="widget-payment-request-actions m-t-lg d-flex">
                                <a href="#" class="btn btn-light flex-grow-1 m-r-xxs">Reject</a>
                                <a href="#" class="btn btn-primary flex-grow-1 m-l-xxs">Approve</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card widget widget-list">
                    <div class="card-header">
                        <h5 class="card-title">In Progress Tasks<span class="badge badge-success badge-style-light">37%
                                total</span></h5>
                    </div>
                    <div class="card-body">
                        <span class="text-muted m-b-xs d-block">showing 5 out of 9 in progress tasks.</span>
                        <ul class="widget-list-content list-unstyled">
                            <li class="widget-list-item widget-list-item-green">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">article</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Dashboard UI optimisations
                                    </a>
                                    <span class="widget-list-item-description-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-blue">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">verified_user</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Mailbox cleanup
                                    </a>
                                    <span class="widget-list-item-description-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 57%;"
                                                aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-purple">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">watch_later</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Header scroll bugfix
                                    </a>
                                    <span class="widget-list-item-description-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 14%;"
                                                aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-yellow">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">extension</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        Localization for file manager
                                    </a>
                                    <span class="widget-list-item-description-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 79%;"
                                                aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </span>
                                </span>
                            </li>
                            <li class="widget-list-item widget-list-item-red">
                                <span class="widget-list-item-icon"><i
                                        class="material-icons-outlined">invert_colors</i></span>
                                <span class="widget-list-item-description">
                                    <a href="#" class="widget-list-item-description-title">
                                        New E-commerce UX/UI design
                                    </a>
                                    <span class="widget-list-item-description-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card widget widget-popular-product">
                    <div class="card-body">
                        <div class="widget-popular-product-container">
                            <div class="widget-popular-product-image">
                                <img src="{{ asset('source/assets/images/widgets/popular-product.jpeg') }}" alt="">
                                            </div>
                                            <div class="widget-popular-product-tags">
                                                <span class="badge rounded-pill badge-secondary badge-style-light">Science</span>
                                                <span class="badge rounded-pill badge-success badge-style-light">Lifestyle</span>
                                                <span class="badge rounded-pill badge-danger badge-style-light">People</span>
                                            </div>
                                            <div class="widget-popular-product-content">
                                                <a href="#" class="widget-popular-product-title">Banana Donut</a>
                                                <p class="widget-popular-product-text m-b-md">Quisque congue risus sit amet pellentesque fermentum. Etiam nibh erat, convallis ac dui nec, imperdiet dignissim nulla. Ut tincidunt tellus sit amet elit viverra porttitor. Mauris at tellus a nisl accumsan egestas suscipit..</p>
                                                <span class="widget-popular-product-rating">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <span class="widget-popular-product-rating-num">4.4</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-bank-card" style="height: 220px;">
                                    <div class="card-body">
                                        <div class="widget-bank-card-container widget-bank-card-visa d-flex flex-column">
                                            <div class="widget-bank-card-logo"></div>
                                            <span class="widget-bank-card-balance-title">
                                                BALANCE
                                            </span>
                                            <span class="widget-bank-card-balance">
                                                $5,688
                                            </span>
                                            <span class="widget-bank-card-number mt-auto">
                                                **** **** **** 4408
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card widget widget-bank-card" style="height: 220px;">
                                    <div class="card-body">
                                        <div class="widget-bank-card-container widget-bank-card-mastercard d-flex flex-column">
                                            <div class="widget-bank-card-logo"></div>
                                            <span class="widget-bank-card-balance-title">
                                                BALANCE
                                            </span>
                                            <span class="widget-bank-card-balance">
                                                $12,079
                                            </span>
                                            <span class="widget-bank-card-number mt-auto">
                                                **** **** **** 0999
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card widget widget-stats-large">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="widget-stats-large-chart-container">
                                                <div class="card-header">
                                                    <h5 class="card-title">Earnings<span class="badge badge-light badge-style-light">Last Year</span></h5>
                                                </div>
                                                <div class="card-body">
                                                    <div id="apex-earnings"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="widget-stats-large-info-container">
                                                <div class="card-header">
                                                    <h5 class="card-title">Report<span class="badge badge-info badge-style-light">Updated 5 min ago</span></h5>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-description">Duis fringilla eget velit sit amet lobortis. Donec rutrum, arcu auctor varius cursus. mi nulla dapibus justo, at volutpat libero</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Neptune - v1.0<span class="float-end text-success">14%<i class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                                        <li class="list-group-item">Space - v1.2<span class="float-end text-danger">7%<i class="material-icons align-middle">keyboard_arrow_down</i></span></li>
                                                        <li class="list-group-item">Lime - v1.0.3<span class="float-end text-success">21%<i class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                                        <li class="list-group-item">Circl - v2.3<span class="float-end text-success">17%<i class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                                        <li class="list-group-item">Connect - v1.7<span class="float-end text-danger">3%<i class="material-icons align-middle">keyboard_arrow_down</i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <img src="{{ asset('source/assets/images/widgets/blog5.jpeg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">The M1 Macbook Pro is Blazing Fast</h5>
                                      <p class="card-text">Pellentesque habitant morbi tristique senectus et. Curabitur molestie in tellus sed porttitor. Etiam eget erat erat. Nullam auctor a justo lacinia varius.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Small chip. Giant leap.</li>
                                      <li class="list-group-item">Creates beauty like a beast.</li>
                                      <li class="list-group-item">Make connections. Faster than ever.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">task_alt</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Tasks Completed</span>
                                                <span class="widget-stats-amount">1,871</span>
                                            </div>
                                            <div class="widget-stats-indicator align-self-start">
                                                <i class="material-icons">keyboard_arrow_down</i> 18%
                                            </div>
                                        </div>
                                        <div class="widget-stats-chart">
                                            <div id="widget-stats-chart1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-danger">
                                                <i class="material-icons-outlined">star_border_purple500</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Engagement</span>
                                                <span class="widget-stats-amount">45,661</span>
                                            </div>
                                            <div class="widget-stats-indicator align-self-start">
                                                <i class="material-icons">keyboard_arrow_up</i> 25%
                                            </div>
                                        </div>
                                        <div class="widget-stats-chart">
                                            <div id="widget-stats-chart2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-primary">
                                                <i class="material-icons-outlined">account_balance_wallet</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Balance</span>
                                                <span class="widget-stats-amount">$218,655</span>
                                            </div>
                                            <div class="widget-stats-indicator align-self-start">
                                                <i class="material-icons">keyboard_arrow_down</i> 9%
                                            </div>
                                        </div>
                                        <div class="widget-stats-chart">
                                            <div id="widget-stats-chart3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget">
                                    <div class="card-header">
                                        <h5 class="card-title">Share this Link</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted d-block">This link will be opened in a new window</p>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-solid-bordered" value="https://themeforest.net/user/stacks/portfolio" aria-label="https://themeforest.net/user/stacks/portfolio" aria-describedby="share-link1">
                                            <button class="btn btn-primary" type="button" id="share-link1"><i class="material-icons no-m fs-5">content_copy</i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card widget widget-info">
                                    <div class="card-body">
                                        <div class="widget-info-container">
                                            <div class="widget-info-image" style="background: url('../../assets/images/widgets/security.svg')"></div>
                                            <h5 class="widget-info-title">Advanced Security</h5>
                                            <p class="widget-info-text m-t-n-xs">Nunc cursus tempor sapien, et mattis libero dapibus ut. Ut a ante sit amet arcu imperdiet accumsan.</p>
                                            <a href="#" class="btn btn-primary widget-info-action">Upgrade Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card widget widget-popular-blog">
                                    <div class="card-body">
                                        <div class="widget-popular-blog-container">
                                            <div class="widget-popular-blog-image">
                                                <img src="{{ asset('source/assets/images/widgets/product2.jpeg') }}" alt=""> 
                                            </div>
                                            <div class="widget-popular-blog-content ps-4">
                                                <span class="widget-popular-blog-title">
                                                    Quisque congue risus sit amet pellentesque fermentum
                                                </span>
                                                <span class="widget-popular-blog-text">
                                                    Morbi blandit, mi at lacinia ornare, turpis justo viverra risus, at tristique tortor massa ut arcu. Suspendisse potenti. Suspendisse cursus aliquam dictum. Curabitur nec fringilla orci. Vivamus ut viverra elit. Pellentesque id interdum odio. Fusce finibus maximus egestas.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <span class="widget-popular-blog-date">
                                            Date: 6:38 PM
                                        </span>
                                        <a href="#" class="btn btn-primary float-end">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-connection-request">
                                    <div class="card-header">
                                        <h5 class="card-title">Connection Request<span class="badge badge-secondary badge-style-light">17 min ago</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-connection-request-container d-flex">
                                            <div class="widget-connection-request-avatar">
                                                <div class="avatar avatar-xl m-r-xs">
                                                    <img src="{{ asset('source/assets/images/avatars/avatar.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="widget-connection-request-info flex-grow-1">
                            <span class="widget-connection-request-info-name">
                                Woodrow Hawkins
                            </span>
                            <span class="widget-connection-request-info-count">
                                45 mutual connections
                            </span>
                            <span class="widget-connection-request-info-about">
                                Senior Go Developer at Google
                            </span>
                        </div>
                    </div>
                    <div class="widget-connection-request-actions d-flex">
                        <a href="#" class="btn btn-primary btn-style-light flex-grow-1 m-r-xxs"><i
                                class="material-icons">done</i>Accept</a>
                        <a href="#" class="btn btn-danger btn-style-light flex-grow-1 m-l-xxs"><i
                                class="material-icons">close</i>Ignore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection