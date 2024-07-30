<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('/') }}backend/assets/images/favicon.png">
    <!-- Page Title  -->
    <title>Login | LMS</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/') }}backend/assets/css/theme.css?ver=3.2.2">
    <style>
 



    </style>
</head>
<body class="nk-body npc-default pg-auth bg-gray-300">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        @php $web = DB::table('website_infos')->first(); @endphp
                        <div class="card border rounded-full">
                            <div class="brand-logo pb-2 text-center mt-5">
                                <a href="#" class="logo-link">
                                    <img class="logo-light logo-img logo-img-lg"
                                        src="{{ asset('uploaded_files/website/logo/' . $web->logo)}}"
                                        srcset="{{asset('uploaded_files/website/logo/' . $web->logo) }}" alt="logo">
                                    <img class="logo-dark logo-img logo-img-lg"
                                        src="{{asset('uploaded_files/website/logo/' . $web->logo) }}"
                                        srcset="{{ asset('uploaded_files/website/logo/' . $web->logo) }}"
                                        alt="logo-dark">
                                </a>
                            </div>
                            <div class="card-inner card-inner-lg ">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p>Hello there, Sign in and start managing your Admin Panel.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('admin.login.submit') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email or Username</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="email"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ old('email') }}"
                                                placeholder="Enter your email address or username">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                id="password" name="password" placeholder="Enter your password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="custom-control custom-control-xs custom-checkbox checked py-3">
                                        <input type="checkbox" class="custom-control-input" id="checkbox"
                                            id="remember" {{ old('remember') ? 'checked' : '' }} name="remember">
                                        <label class="custom-control-label" for="checkbox">Remember Me </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @include('backend.layouts.partials.footer')
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('/') }}backend/assets/js/bundle.js?ver=3.2.2"></script>
    <script src="{{ asset('/') }}backend/assets/js/scripts.js?ver=3.2.2"></script>
    <!-- select region modal -->
</html>