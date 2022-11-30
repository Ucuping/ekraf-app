@if (checkAuth())
<div id="id">
  <div id="main" class="layout-horizontal">
    <div class="content-wrapper container">
        {{-- <div class="page-heading">
        <h3>Horizontal Layout</h3>
        </div> --}}
        @include('backend.layouts.partials.top-bar')
        <div class="page-content">
        <v-rendering></v-rendering>
        </div>
    </div>
    <footer>
        <div class="container">
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>{{ date('Y') }} &copy; DINAS EKONOMI KREATIF KAB. JEMBER</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"><i class="bi bi-heart"></i></span>
                by <a href="https://seal.or.id">BWI-JBR 2 KELOMPOK B</a>
              </p>
            </div>
          </div>
        </div>
    </footer>
  </div>
</div>
@endif