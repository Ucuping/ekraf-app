@extends('backend.layouts.base')

@section('app')
{{-- <div style="z-index: 11111;position: fixed;top: 10px;right: 20px;">
    <div id="toastPrimary" class="toast toast-border-primary overflow-hidden mt-3" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-body">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                    <i class="ri-user-smile-line align-middle"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0 toast-message"></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="z-index: 11111;position: fixed;top: 10px;right: 20px;">
    <div id="toastSuccess" class="toast toast-border-success overflow-hidden mt-3" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                    <i class="ri-checkbox-circle-fill align-middle"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0 toast-message"></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="z-index: 11111;position: fixed;top: 10px;right: 20px;">
    <div id="toastWarning" class="toast toast-border-warning overflow-hidden mt-3" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-body">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                    <i class="ri-notification-off-line align-middle"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0 toast-message"></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="z-index: 11111;position: fixed;top: 10px;right: 20px;">
    <div id="toastDanger" class="toast toast-border-danger overflow-hidden mt-3" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-body">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                    <i class="ri-alert-line align-middle"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0 toast-message"></h6>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<v-content-render></v-content-render>

{{-- JS --}}
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/extensions/@fortawesome/fontawesome-free/js/all.min.js') }}"></script>
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/extensions/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/extensions/choices.js/public/assets/scripts/choices.min.js') }}"></script>
{{-- <script src="{{ asset('assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<script src="{{ asset('assets/extensions/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('assets/extensions/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('assets/extensions/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/extensions/filepond/filepond.min.js') }}"></script>
<script src="{{ asset('assets/extensions/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/extensions/quill/quill.min.js') }}"></script>
{{-- <script src="{{ asset('assets/extensions/rater-js/lib/rater-js.js') }}"></script> --}}
<script src="{{ asset('assets/extensions/summernote/summernote.min.js') }}"></script>
<script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/extensions/tinymce/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('assets/extensions/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
<script src="{{ asset('assets/extensions/waitme/waitMe.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/mazer.js') }}"></script>
{{-- <script src="{{ asset('assets/js/pages/horizontal-layout.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/js/initTheme.js') }}"></script> --}}
@endsection