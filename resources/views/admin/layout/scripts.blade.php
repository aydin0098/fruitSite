<!-- Must needed plugins to the run this Template -->
<script src="{{asset('back/js/jquery.min.js')}}"></script>
<script src="{{asset('back/js/popper.min.js')}}"></script>
<script src="{{asset('back/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back/js/bundle.js')}}"></script>
<script src="{{asset('back/js/default-assets/date-time.js')}}"></script>
<script src="{{asset('back/js/default-assets/setting.js')}}"></script>
<script src="{{asset('back/js/default-assets/fullscreen.js')}}"></script>
<script src="{{asset('back/js/default-assets/bootstrap-growl.js')}}"></script>

<!-- Active JS -->
<script src="{{asset('back/js/default-assets/active.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('messages.success')
@yield('scripts')
