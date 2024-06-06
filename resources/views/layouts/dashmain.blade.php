<!DOCTYPE html>
<html lang="en">

<head>
 @include('dashincludes.head')
</head>
<body>
    @yield('upgrade')
    {{-- @include('dashincludes.upgrade') --}}
      <div class="container-scroller">
    @include('dashincludes.nav')
    @yield('subnav')
    {{-- @include('dashincludes.subnav') --}}
    <div class="container-fluid page-body-wrapper">
    @include('dashincludes.settingpanel')
    @include('dashincludes.sidebar')
      <div class="main-panel">
      <div class="content-wrapper">
        @yield('content')
    {{-- @include('dashincludes.panel') --}}
    @include('dashincludes.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@include('dashincludes.js')
  
</body>

</html>

