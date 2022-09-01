
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="/css/app.css">

  @livewireStyles
  @stack('styles')

</head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

      @include('layouts.partials.navbar')

      @include('layouts.partials.left-aside')

      <div class="content-wrapper" style="min-height: 1604.44px;">
        {{ $slot }}
      </div>


      @include('layouts.partials.right-aside')

      @include('layouts.partials.footer')
    </div>
  <!-- ./wrapper -->

  <script src="/js/app.js"></script>
  <script src="/js/helper/imask.js"></script>

  @stack('js')

  @livewireScripts
  </body>
</html>
