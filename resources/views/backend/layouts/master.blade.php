
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="{{ asset('/') }}backend/">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('/') }}backend/assets/images/favicon.png">

    <!-- Page Title  -->
    <title> @yield('title') | LMS </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/') }}backend/assets/css/theme.css?ver=3.2.2">
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/toastr.min.css" />
    <!-- sweet alert -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/sweetalert2.min.css">
    @yield('styles')
    <style>
    </style>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @include('backend.layouts.partials.sidebar')
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('backend.layouts.partials.header')
                <!-- main header @e -->
                <!-- content @s -->
                @yield('admin-content')
                <!-- content @e -->
                <!-- footer @s -->
                @include('backend.layouts.partials.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->

    @yield('modals')
    <!-- JavaScript -->
    <script src="{{ asset('/') }}backend/assets/js/bundle.js?ver=3.2.2"></script>
    <script src="{{ asset('/') }}backend/assets/js/scripts.js?ver=3.2.2"></script>
    <script src="{{ asset('/') }}backend/assets/js/charts/chart-lms.js?ver=3.2.2"></script>
    <script src="{{ asset('/') }}backend/assets/js/charts/chart-lms.js?ver=3.2.2"></script>
    <script src="{{ asset('/') }}backend/assets/js/toastr.min.js"></script>
    <script src="{{ asset('/') }}backend/assets/js/sweetalert2.all.min.js"></script>
    <script>
        // toastr message
        function flashMessage(status, message) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            switch (status) {
                case 'success':
                    toastr.success(message, 'Success');
                    break;

                case 'error':
                    toastr.error(message, 'Error');
                    break;

                case 'warning':
                    toastr.warning(message, 'Warning');
                    break;

                case 'info':
                    toastr.info(message, 'Info');
                    break;
            }
        }

        // session toastr
        @if (session()->get('success'))
            flashMessage('success', "{{ session()->get('success') }}");
        @elseif (session()->get('error'))
            flashMessage('error', "{{ session()->get('error') }}");
        @elseif (session()->get('info'))
            flashMessage('info', "{{ session()->get('info') }}");
        @elseif (session()->get('warning'))
            flashMessage('warning', "{{ session()->get('warning') }}");
        @endif
    </script>
    @yield('script_js')

</body>

</html>

