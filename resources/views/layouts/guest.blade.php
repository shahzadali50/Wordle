<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ url('images/wordle.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/fonts/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/fonts/flag-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/fonts/remixicon.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/quill/editor.css') }}" />

    <link rel="stylesheet" href="{{ url('admin/assets/vendor/css/pages/cards-statistics.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/css/pages/cards-analytics.css') }}" />
    <!-- Page -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/css/pages/page-auth.css') }}" />
    <script src="{{ url('admin/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ url('admin/assets/js/config.js') }}"></script>
  <title>@yield('title')  | Wordle Game</title>
  <style>
    .bg-primary,
    .btn-primary {
        background-color: #D6561A !important;
        color: #ffffff;
    }

    .btn-primary {
        border-color: #D6561A !important;
    }

    body {
        /* background-color: #D6561A !important; */
    }

    .text-primary {
        color: #D6561A !important;
    }
</style>

</head>

<body>
   @yield('content')






    <script src="{{ url('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/js/menu.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/dropzone/dropzone.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/jquery-sticky/jquery-sticky.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ url('admin/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ url('admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ url('admin/assets/js/pages-auth.js') }}"></script>
    <script src="{{ url('admin/assets/js/dashboards-analytics.js') }}"></script>
    <script src="{{ url('admin/assets/js/forms-editors.js') }}"></script>

</body>

</html>
