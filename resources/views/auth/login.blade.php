<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fendap - Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('asset/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('asset/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('asset/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('asset/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png')}}" />
</head>

<body class="sidebar-mini">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <!-- <img src="{{ asset('asset/images/logo.svg')}}" alt="logo"> -->
              </div>
              @if(session()->has('error'))
              <div class="alert alert-fill-danger" role="alert">
                <i class="mdi mdi-alert-circle"></i>
                {{ session()->get('error') }}
              </div>
              @endif
              <form class="pt-3" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg" value="{{ old('email') }}" placeholder="Email" autofocus>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg" placeholder="Password">
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >Masuk</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                      Ingat Saya
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('asset/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset('asset/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('asset/js/off-canvas.js')}}"></script>
  <script src="{{ asset('asset/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('asset/js/template.js')}}"></script>
  <script src="{{ asset('asset/js/settings.js')}}"></script>
  <script src="{{ asset('asset/js/todolist.js')}}"></script>
  <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
    $(this).remove();
  });
  }, 5000);
  </script>


  </body>
</html>
