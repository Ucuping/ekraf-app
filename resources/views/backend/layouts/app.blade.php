@extends('backend.layouts.base')

@section('app')

<v-content-rendering></v-content-rendering>

{{-- JS --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> --}}
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/extensions/@fortawesome/fontawesome-free/js/all.min.js') }}"></script>
{{-- <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script> --}}
<script src="{{ @asset('vendor/larapex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/extensions/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/extensions/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<script src="{{ asset('assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/extensions/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('assets/extensions/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('assets/extensions/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/extensions/filepond/filepond.min.js') }}"></script>
<script src="{{ asset('assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ asset('assets/extensions/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/extensions/quill/quill.min.js') }}"></script>
{{-- <script src="{{ asset('assets/extensions/rater-js/lib/rater-js.js') }}"></script> --}}
<script src="{{ asset('assets/extensions/summernote/summernote.min.js') }}"></script>
<script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.all.js') }}"></script>
<script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/extensions/tinymce/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('assets/extensions/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
<script src="{{ asset('assets/extensions/waitme/waitMe.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/pages/horizontal-layout.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/mazer.js') }}"></script>
{{-- <script src="{{ asset('assets/js/initTheme.js') }}"></script> --}}
@endsection