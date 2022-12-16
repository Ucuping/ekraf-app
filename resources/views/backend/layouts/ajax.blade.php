<div class="container-fluid">
    <div class="intro-y">
        <div class="page-title mb-3">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h4 class="mb-sm-0">{{ $title ?? 'Untitled Page' }}</h4>
                </div>
                @if (getInfoLogin()->roles[0]->name != 'Ekraf')
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        @yield('breadcrumb')
                        </nav>
                    </div>
                @endif
                </div>
            </div>
        <section class="section">
            @yield('content')
        </section>
    </div>
</div>

<script>
    document.title = "{{ $title . ' | SISTEM PROMOSI EKONOMI KREATIF KAB. JEMBER' }}"
    
    if (!window.jQuery) {
        document.body.innerHTML = ""
        window.location.reload()
    }
</script>

@if (isset($mods))
    @if (is_array($mods))
        @foreach ($mods as $mod)
            <script src="{{ asset('assets/mods/mod_' . $mod . '.js') }}"></script>
        @endforeach
    @else
        <script src="{{ asset('assets/mods/mod_' . $mods . '.js') }}"></script>
    @endif
@endif

@yield('_js')