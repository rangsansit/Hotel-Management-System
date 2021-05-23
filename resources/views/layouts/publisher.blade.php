<!DOCTYPE html>

<html lang="en" class="default-style">

<head>
  <title>Publisher - Dashboard</title>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/open-iconic.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/pe-icon-7-stroke.css') }}">

  <!-- Core stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/publisher/index.css') }}" class="theme-settings-bootstrap-css">
  <!-- Theme settings -->
  <script>document['documentMode']===10&&document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  @yield('multi-select-css')
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>

<body>
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-2">
    <div class="layout-inner">

      <!-- Layout sidenav -->
      <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

        <!-- Brand demo (see assets/css/demo/demo.css) -->
        <div class="app-brand demo">
          <span class="app-brand-logo demo bg-primary">
            <svg viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse"><stop stop-opacity=".25" offset="0"></stop><stop stop-opacity=".1" offset=".3"></stop><stop stop-opacity="0" offset=".9"></stop></linearGradient><linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient><linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a"></linearGradient></defs><path style="fill: #fff;" transform="translate(-.1)" d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z"></path><path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z" fill="url(#a)"></path><path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z" fill="url(#e)"></path><path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z" fill="url(#d)"></path></svg>
          </span>
          <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Wiser</a>
          <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
          </a>
        </div>

        <div class="sidenav-divider mt-0"></div>

        <!-- Links -->
        <ul class="sidenav-inner py-1">

          <!-- Dashboards -->
          <li class="sidenav-item open active">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-speedometer"></i>
              <div>Dashboards</div>
            </a>

            <ul class="sidenav-menu">
              <li class="sidenav-item active">
                <a href="{{ route('publisher.dashboard') }}" class="sidenav-link">
                  <div>Dashboard 1</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="dashboards_dashboard-2.html" class="sidenav-link">
                  <div>Dashboard 2</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="dashboards_dashboard-3.html" class="sidenav-link">
                  <div>Dashboard 3</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="dashboards_dashboard-4.html" class="sidenav-link">
                  <div>Dashboard 4</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="dashboards_dashboard-5.html" class="sidenav-link">
                  <div>Dashboard 5</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Layouts -->
          <li class="sidenav-item">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-albums"></i>
              <div>Layouts</div>
            </a>

            <ul class="sidenav-menu">
              <li class="sidenav-item">
                <a href="layouts_options.html" class="sidenav-link">
                  <div>Layout options</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="layouts_helpers.html" class="sidenav-link">
                  <div>Layout helpers</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidenav-divider mb-1"></li>
          <li class="sidenav-header small font-weight-semibold">ELEMENTS</li>

          <li class="sidenav-item">
            <a href="typography.html" class="sidenav-link"><i class="sidenav-icon ion ion-md-quote"></i>
              <div>Typography</div>
            </a>
          </li>

          <!-- UI elements -->
          <li class="sidenav-item">
          <a href="{{ route('listing.index') }}" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-cube"></i>
              <div>Listing</div>
            </a>
            <ul class="sidenav-menu">
              <li class="sidenav-item">
                <a href="{{ route('listing.create') }}" class="sidenav-link">
                  <div>Create Listing</div>
                </a>
              </li>

              <li class="sidenav-item">
                <a href="{{ route('listing.index') }}" class="sidenav-link">
                  <div>Existing Listing</div>
                </a>
              </li>

            </ul>
          </li>

          <!-- Forms -->
          <li class="sidenav-item">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-switch"></i>
              <div>Forms</div>
            </a>

            <ul class="sidenav-menu">
              <li class="sidenav-item">
                <a href="forms_layouts.html" class="sidenav-link">
                  <div>Layouts and elements</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_controls.html" class="sidenav-link">
                  <div>Controls</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_custom-controls.html" class="sidenav-link">
                  <div>Custom controls</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_input-groups.html" class="sidenav-link">
                  <div>Input groups</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_switchers.html" class="sidenav-link">
                  <div>Switchers</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_sliders.html" class="sidenav-link">
                  <div>Sliders</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_selects.html" class="sidenav-link">
                  <div>Selects and tags</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_pickers.html" class="sidenav-link">
                  <div>Pickers</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_editors.html" class="sidenav-link">
                  <div>Editors</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_file-upload.html" class="sidenav-link">
                  <div>File upload</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_validation.html" class="sidenav-link">
                  <div>jQuery Validation</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_wizard.html" class="sidenav-link">
                  <div>SmartWizard</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_typeahead.html" class="sidenav-link">
                  <div>Typeahead</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_dual-listbox.html" class="sidenav-link">
                  <div>Bootstrap Dual Listbox</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="forms_extras.html" class="sidenav-link">
                  <div>Extras</div>
                </a>
              </li>
            </ul>
          </li>

          <!--  Tables -->
          <li class="sidenav-item">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-grid"></i>
              <div>Tables</div>
            </a>

            <ul class="sidenav-menu">
              <li class="sidenav-item">
                <a href="tables_bootstrap.html" class="sidenav-link">
                  <div>Bootstrap</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="tables_datatables.html" class="sidenav-link">
                  <div>DataTables</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="tables_bootstrap-table.html" class="sidenav-link">
                  <div>Bootstrap table</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="tables_bootstrap-sortable.html" class="sidenav-link">
                  <div>Bootstrap Sortable</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Charts -->
          <li class="sidenav-item">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-pie"></i>
              <div>Charts</div>
            </a>

            <ul class="sidenav-menu">
              <li class="sidenav-item">
                <a href="charts_gmaps.html" class="sidenav-link">
                  <div>GMaps</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="charts_mapael.html" class="sidenav-link">
                  <div>Mapael</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="charts_flot.html" class="sidenav-link">
                  <div>Flot.js</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="charts_c3.html" class="sidenav-link">
                  <div>C3.js</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="charts_chartist.html" class="sidenav-link">
                  <div>Chartist</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="charts_chartjs.html" class="sidenav-link">
                  <div>Chart.js</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="charts_morrisjs.html" class="sidenav-link">
                  <div>Morris.js</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="charts_sparkline.html" class="sidenav-link">
                  <div>Sparkline</div>
                </a>
              </li>
            </ul>
          </li>

          <!--  Icons -->
          <li class="sidenav-item">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-heart"></i>
              <div>Icons</div>
            </a>

            <ul class="sidenav-menu">
              <li class="sidenav-item">
                <a href="icons_font-awesome.html" class="sidenav-link">
                  <div>Font Awesome 5</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="icons_ionicons.html" class="sidenav-link">
                  <div>Ionicons</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="icons_linearicons.html" class="sidenav-link">
                  <div>Linearicons</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="icons_openiconic.html" class="sidenav-link">
                  <div>Open Iconic</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="icons_stroke7.html" class="sidenav-link">
                  <div>Stroke Icons 7</div>
                </a>
              </li>
            </ul>
          </li>

          <!--  Miscellaneous -->
          <li class="sidenav-item">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-flask"></i>
              <div>Miscellaneous</div>
            </a>

            <ul class="sidenav-menu">
              <li class="sidenav-item">
                <a href="misc_brand-colors.html" class="sidenav-link">
                  <div>Brand colors</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_masonry.html" class="sidenav-link">
                  <div>Masonry</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_spinkit.html" class="sidenav-link">
                  <div>SpinKit</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_ladda.html" class="sidenav-link">
                  <div>Ladda</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_vegasjs.html" class="sidenav-link">
                  <div>Vegas.js</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_numeraljs.html" class="sidenav-link">
                  <div>Numeral.js</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_blockui.html" class="sidenav-link">
                  <div>BlockUI</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_idle-timer.html" class="sidenav-link">
                  <div>Idle Timer</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_perfect-scrollbar.html" class="sidenav-link">
                  <div>Perfect Scrollbar</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="misc_clipboardjs.html" class="sidenav-link">
                  <div>Clipboard.js</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidenav-divider mb-1"></li>
          <li class="sidenav-header small font-weight-semibold">EXTRAS</li>

          <!-- Pages -->
          <li class="sidenav-item">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
              <i class="sidenav-icon ion ion-md-document"></i>
              <div>Pages</div>
              <div class="pl-1 ml-auto">
                <div class="badge badge-primary">59</div>
              </div>
            </a>
            <ul class="sidenav-menu">

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Articles</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_articles_list.html" class="sidenav-link">
                      <div>List</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_articles_edit.html" class="sidenav-link">
                      <div>Edit</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Authentication</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_authentication_login-v1.html" class="sidenav-link">
                      <div>Login v1</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_register-v1.html" class="sidenav-link">
                      <div>Register v1</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_login-v2.html" class="sidenav-link">
                      <div>Login v2</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_register-v2.html" class="sidenav-link">
                      <div>Register v2</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_login-v3.html" class="sidenav-link">
                      <div>Login v3</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_register-v3.html" class="sidenav-link">
                      <div>Register v3</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_login-and-register.html" class="sidenav-link">
                      <div>Login + Register</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_lock-screen-v1.html" class="sidenav-link">
                      <div>Lock screen v1</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_lock-screen-v2.html" class="sidenav-link">
                      <div>Lock screen v2</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_password-reset.html" class="sidenav-link">
                      <div>Password reset</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_authentication_email-confirm.html" class="sidenav-link">
                      <div>Email confirm</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Education</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_education_courses-v1.html" class="sidenav-link">
                      <div>Courses v1</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_education_courses-v2.html" class="sidenav-link">
                      <div>Courses v2</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>E-commerce</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_e-commerce_product-list.html" class="sidenav-link">
                      <div>Product list</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_e-commerce_product-item.html" class="sidenav-link">
                      <div>Product item</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_e-commerce_product-edit.html" class="sidenav-link">
                      <div>Product edit</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_e-commerce_order-list.html" class="sidenav-link">
                      <div>Order list</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_e-commerce_order-detail.html" class="sidenav-link">
                      <div>Order detail</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Forums</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_forums_list.html" class="sidenav-link">
                      <div>List</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_forums_threads.html" class="sidenav-link">
                      <div>Threads</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_forums_discussion.html" class="sidenav-link">
                      <div>Discussion</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Messages v1</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_messages_v1_list.html" class="sidenav-link">
                      <div>List</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_messages_v1_item.html" class="sidenav-link">
                      <div>Item</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_messages_v1_compose.html" class="sidenav-link">
                      <div>Compose</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Messages v2</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_messages_v2_list.html" class="sidenav-link">
                      <div>List</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_messages_v2_item.html" class="sidenav-link">
                      <div>Item</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_messages_v2_compose.html" class="sidenav-link">
                      <div>Compose</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Messages v3</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_messages_v3_list.html" class="sidenav-link">
                      <div>List</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_messages_v3_item.html" class="sidenav-link">
                      <div>Item</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_messages_v3_compose.html" class="sidenav-link">
                      <div>Compose</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Projects</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_projects_list.html" class="sidenav-link">
                      <div>List</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_projects_item.html" class="sidenav-link">
                      <div>Item</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Tickets</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_tickets_list.html" class="sidenav-link">
                      <div>List</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_tickets_edit.html" class="sidenav-link">
                      <div>Edit</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                  <div>Users</div>
                </a>

                <ul class="sidenav-menu">
                  <li class="sidenav-item">
                    <a href="pages_users_list.html" class="sidenav-link">
                      <div>List</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_users_view.html" class="sidenav-link">
                      <div>View</div>
                    </a>
                  </li>
                  <li class="sidenav-item">
                    <a href="pages_users_edit.html" class="sidenav-link">
                      <div>Edit</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidenav-item">
                <a href="pages_account-settings.html" class="sidenav-link">
                  <div>Account settings</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_chat.html" class="sidenav-link">
                  <div>Chat</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_clients.html" class="sidenav-link">
                  <div>Clients</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_contacts.html" class="sidenav-link">
                  <div>Contacts</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_faq.html" class="sidenav-link">
                  <div>FAQ</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_file-manager.html" class="sidenav-link">
                  <div>File manager</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_gallery.html" class="sidenav-link">
                  <div>Gallery</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_help-center.html" class="sidenav-link">
                  <div>Help center</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_invoice.html" class="sidenav-link">
                  <div>Invoice</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_kanban-board.html" class="sidenav-link">
                  <div>Kanban board</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_pricing.html" class="sidenav-link">
                  <div>Pricing</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_profile-v1.html" class="sidenav-link">
                  <div>Profile v1</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_profile-v2.html" class="sidenav-link">
                  <div>Profile v2</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_search-results.html" class="sidenav-link">
                  <div>Search results</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_task-list.html" class="sidenav-link">
                  <div>Task list</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_teams.html" class="sidenav-link">
                  <div>Teams</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_vacancies.html" class="sidenav-link">
                  <div>Vacancies</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a href="pages_voting.html" class="sidenav-link">
                  <div>Voting</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidenav-item">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-logo-buffer"></i>
              <div>Complete UI</div>
            </a>

            <ul class="sidenav-menu">
              <li class="sidenav-item">
                <a target="_blank" href="complete-ui_base.html" class="sidenav-link">
                  <div>Base</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a target="_blank" href="complete-ui_plugins.html" class="sidenav-link">
                  <div>Plugins</div>
                </a>
              </li>
              <li class="sidenav-item">
                <a target="_blank" href="complete-ui_charts.html" class="sidenav-link">
                  <div>Charts</div>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </div>
      <!-- / Layout sidenav -->

      <!-- Layout container -->
      <div class="layout-container">
        <!-- Layout navbar -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

          <!-- Brand demo (see assets/css/demo/demo.css) -->
          <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
            <span class="app-brand-logo demo bg-primary">
              <svg viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse"><stop stop-opacity=".25" offset="0"></stop><stop stop-opacity=".1" offset=".3"></stop><stop stop-opacity="0" offset=".9"></stop></linearGradient><linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient><linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a"></linearGradient></defs><path style="fill: #fff;" transform="translate(-.1)" d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z"></path><path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z" fill="url(#a)"></path><path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z" fill="url(#e)"></path><path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z" fill="url(#d)"></path></svg>
            </span>
            <span class="app-brand-text demo font-weight-normal ml-2">Publisher</span>
          </a>

          <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
          <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
            <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:void(0)">
              <i class="ion ion-md-menu text-large align-middle"></i>
            </a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse" id="layout-navbar-collapse">
            <!-- Divider -->
            <hr class="d-lg-none w-100 my-2">

            <div class="navbar-nav align-items-lg-center">
              <!-- Search -->
              <label class="nav-item navbar-text navbar-search-box p-0 active">
                <i class="ion ion-ios-search navbar-icon align-middle"></i>
                <span class="navbar-search-input pl-2">
                  <input type="text" class="form-control navbar-text mx-2" placeholder="Search..." style="width:200px">
                </span>
              </label>
            </div>

            <div class="navbar-nav align-items-lg-center ml-auto">
              <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                  <i class="ion ion-md-notifications-outline navbar-icon align-middle"></i>
                  <span class="badge badge-primary badge-dot indicator"></span>
                  <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="bg-primary text-center text-white font-weight-bold p-3">
                    4 New Notifications
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <div class="ui-icon ui-icon-sm ion ion-md-home bg-secondary border-0 text-white"></div>
                      <div class="media-body line-height-condenced ml-3">
                        <div class="text-body">Login from 192.168.1.1</div>
                        <div class="text-light small mt-1">
                          Aliquam ex eros, imperdiet vulputate hendrerit et.
                        </div>
                        <div class="text-light small mt-1">12h ago</div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <div class="ui-icon ui-icon-sm ion ion-md-person-add bg-info border-0 text-white"></div>
                      <div class="media-body line-height-condenced ml-3">
                        <div class="text-body">You have <strong>4</strong> new followers</div>
                        <div class="text-light small mt-1">
                          Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <div class="ui-icon ui-icon-sm ion ion-md-power bg-danger border-0 text-white"></div>
                      <div class="media-body line-height-condenced ml-3">
                        <div class="text-body">Server restarted</div>
                        <div class="text-light small mt-1">
                          19h ago
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <div class="ui-icon ui-icon-sm ion ion-md-warning bg-warning border-0 text-body"></div>
                      <div class="media-body line-height-condenced ml-3">
                        <div class="text-body">99% server load</div>
                        <div class="text-light small mt-1">
                          Etiam nec fringilla magna. Donec mi metus.
                        </div>
                        <div class="text-light small mt-1">
                          20h ago
                        </div>
                      </div>
                    </a>
                  </div>

                  <a href="javascript:void(0)" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                </div>
              </div>

              <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                  <i class="ion ion-ios-mail navbar-icon align-middle"></i>
                  <span class="badge badge-primary badge-dot indicator"></span>
                  <span class="d-lg-none align-middle">&nbsp; Messages</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="bg-primary text-center text-white font-weight-bold p-3">
                    4 New Messages
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                    <img src="{{ asset('images/publisher/avatars/6-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                      <div class="media-body ml-3">
                        <div class="text-body line-height-condenced">Sit meis deleniti eu, pri vidit meliore docendi ut.</div>
                        <div class="text-light small mt-1">
                          Mae Gibson &nbsp;·&nbsp; 58m ago
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <img src="{{ asset('images/publisher/avatars/4-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                      <div class="media-body ml-3">
                        <div class="text-body line-height-condenced">Mea et legere fuisset, ius amet purto luptatum te.</div>
                        <div class="text-light small mt-1">
                          Kenneth Frazier &nbsp;·&nbsp; 1h ago
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <img src="{{ asset('images/publisher/avatars/5-small.png') }}" class="d-block ui-w-40 rounded-circle" alt="user logo">
                      <div class="media-body ml-3">
                        <div class="text-body line-height-condenced">Sit meis deleniti eu, pri vidit meliore docendi ut.</div>
                        <div class="text-light small mt-1">
                          Nelle Maxwell &nbsp;·&nbsp; 2h ago
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <img src="{{ asset('images/publisher/avatars/11-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                      <div class="media-body ml-3">
                        <div class="text-body line-height-condenced">Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.</div>
                        <div class="text-light small mt-1">
                          Belle Ross &nbsp;·&nbsp; 5h ago
                        </div>
                      </div>
                    </a>
                  </div>

                  <a href="javascript:void(0)" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                </div>
              </div>

              <!-- Divider -->
              <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>

              <div class="demo-navbar-user nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                  <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                    <img src="{{ asset('images/publisher/avatars/1.png') }}" alt class="d-block ui-w-30 rounded-circle">
                    <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Mike Greene</span>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="javascript:void(0)" class="dropdown-item"><i class="ion ion-ios-person text-lightest"></i> &nbsp; My profile</a>
                  <a href="javascript:void(0)" class="dropdown-item"><i class="ion ion-ios-mail text-lightest"></i> &nbsp; Messages</a>
                  <a href="javascript:void(0)" class="dropdown-item"><i class="ion ion-md-settings text-lightest"></i> &nbsp; Account settings</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:void(0)" class="dropdown-item"><i class="ion ion-ios-log-out text-danger"></i> &nbsp; Log Out</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">
            <!-- Content -->
            <div class="container-fluid flex-grow-1 container-p-y">
              @yield('content')
            </div>

        </div>
            <!-- / Content -->

            <!-- Layout footer -->
            <nav class="layout-footer footer bg-footer-theme">
              <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                <div class="pt-3">
                  <span class="footer-text font-weight-bolder">Wiser</span> ©
                </div>
                <div>
                  <a href="javascript:void(0)" class="footer-link pt-3">About Us</a>
                  <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Help</a>
                  <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Contact</a>
                  <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
                </div>
              </div>
            </nav>
            <!-- / Layout footer -->

          </div>
          <!-- Layout content -->





      </div>
      <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core scripts -->
  @yield('image-preview')
<script src="{{ asset('js/publisher/index.js') }}"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</body>

</html>
