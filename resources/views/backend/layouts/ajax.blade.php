<div class="container-fluid">
    {{-- start page title --}}
    <div class="row mb-3">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ $title ?? 'Untitled Page' }}</h4>

                <div class="page-title-right">
                    @yield('bradcrumb')
                </div>
            </div>
        </div>
    </div>

    @yield('content')
</div>

<script>
    document.title = "{{ $title . ' | SIM EKRAF KAB. JEMBER' }}"
    
    if (!window.jQuery) {
        document.body.innerHTML = ""
        window.location.reload()
    }
</script>

@if (isset($mods))
    @if (is_array($mods))
        @foreach ($mods as $mod)
            <script src="{{ asset('mods/mod_' . $mod . '.js') }}"></script>
        @endforeach
    @else
        <script src="{{ asset('mods/mod_' . $mod . '.js') }}"></script>
    @endif
@endif

@yield('_js')