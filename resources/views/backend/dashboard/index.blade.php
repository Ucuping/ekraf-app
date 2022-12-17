@extends('backend.layouts.ajax')

@section('content')
<div class="card shadow p-3 bg-body rounded">
  <div class="card-body">
    <section class="row">
      <div class="col-12 col-lg-12">
        <div class="row">
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon purple mb-2">
                      <i class="fas fa-store text-white"></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">
                      Total Ekraf
                    </h6>
                    <h6 class="font-extrabold mb-0">{{ $companyCount }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon blue mb-2">
                      <i class="fas fa-clock text-white"></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Belum Diverifikasi</h6>
                    <h6 class="font-extrabold mb-0">{{ $pendingCount }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon green mb-2">
                      <i class="fas fa-check text-white"></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Terverifikasi</h6>
                    <h6 class="font-extrabold mb-0">{{ $approvedCount }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon red mb-2">
                      <i class="fas fa-times text-white"></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Ditolak</h6>
                    <h6 class="font-extrabold mb-0">{{ $rejectedCount }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p><h5>Total Ekraf Berdasarkan Kategori</h5></p>
        <div class="row">
          @foreach ($categories as $item)
            <div class="col-6 col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="text-center">
                    <h6 class="text-muted font-semibold">
                      {{ $item->name }}
                    </h6>
                    <h6 class="font-extrabold mb-0">{{ $item->company()->count() }}</h6>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        {{-- <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Profile Visit</h4>
              </div>
              <div class="card-body">
                <div id="chart-profile-visit"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-xl-4">
            <div class="card">
              <div class="card-header">
                <h4>Profile Visit</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="d-flex align-items-center">
                      <svg
                        class="bi text-primary"
                        width="32"
                        height="32"
                        fill="blue"
                        style="width: 10px"
                      >
                        <use
                          xlink:href="{{ asset('assets/images/bootstrap-icons.svg') }}#circle-fill"
                        />
                      </svg>
                      <h5 class="mb-0 ms-3">Europe</h5>
                    </div>
                  </div>
                  <div class="col-6">
                    <h5 class="mb-0">862</h5>
                  </div>
                  <div class="col-12">
                    <div id="chart-europe"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="d-flex align-items-center">
                      <svg
                        class="bi text-success"
                        width="32"
                        height="32"
                        fill="blue"
                        style="width: 10px"
                      >
                        <use
                          xlink:href="{{ asset('assets/images/bootstrap-icons.svg') }}#circle-fill"
                        />
                      </svg>
                      <h5 class="mb-0 ms-3">America</h5>
                    </div>
                  </div>
                  <div class="col-6">
                    <h5 class="mb-0">375</h5>
                  </div>
                  <div class="col-12">
                    <div id="chart-america"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="d-flex align-items-center">
                      <svg
                        class="bi text-danger"
                        width="32"
                        height="32"
                        fill="blue"
                        style="width: 10px"
                      >
                        <use
                          xlink:href="{{ asset('assets/images/bootstrap-icons.svg') }}#circle-fill"
                        />
                      </svg>
                      <h5 class="mb-0 ms-3">Indonesia</h5>
                    </div>
                  </div>
                  <div class="col-6">
                    <h5 class="mb-0">1025</h5>
                  </div>
                  <div class="col-12">
                    <div id="chart-indonesia"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-8">
            <div class="card">
              <div class="card-header">
                <h4>Latest Comments</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-lg">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Comment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-3">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-md">
                              <img src="{{ asset('assets/images/faces/5.jpg') }}" />
                            </div>
                            <p class="font-bold ms-3 mb-0">Cantik</p>
                          </div>
                        </td>
                        <td class="col-auto">
                          <p class="mb-0">
                            Congratulations on your graduation!
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-3">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-md">
                              <img src="{{ asset('assets/images/faces/2.jpg') }}" />
                            </div>
                            <p class="font-bold ms-3 mb-0">Ganteng</p>
                          </div>
                        </td>
                        <td class="col-auto">
                          <p class="mb-0">
                            Wow amazing design! Can you make another
                            tutorial for this design?
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="col-12 col-lg-3">
        <div class="card">
          <div class="card-body py-4 px-5">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl">
                <img src="{{ asset('assets/images/faces/1.jpg') }}" alt="Face 1" />
              </div>
              <div class="ms-3 name">
                <h5 class="font-bold">John Duck</h5>
                <h6 class="text-muted mb-0">@johnducky</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Recent Messages</h4>
          </div>
          <div class="card-content pb-4">
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <img src="{{ asset('assets/images/faces/4.jpg') }}" />
              </div>
              <div class="name ms-4">
                <h5 class="mb-1">Hank Schrader</h5>
                <h6 class="text-muted mb-0">@johnducky</h6>
              </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <img src="{{ asset('assets/images/faces/5.jpg') }}" />
              </div>
              <div class="name ms-4">
                <h5 class="mb-1">Dean Winchester</h5>
                <h6 class="text-muted mb-0">@imdean</h6>
              </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <img src="{{ asset('assets/images/faces/1.jpg') }}" />
              </div>
              <div class="name ms-4">
                <h5 class="mb-1">John Dodol</h5>
                <h6 class="text-muted mb-0">@dodoljohn</h6>
              </div>
            </div>
            <div class="px-4">
              <button
                class="btn btn-block btn-xl btn-light-primary font-bold mt-3"
              >
                Start Conversation
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Visitors Profile</h4>
          </div>
          <div class="card-body">
            <div id="chart-visitors-profile"></div>
          </div>
        </div>
      </div> --}}
    </section>
  </div>
</div>
@endsection

@section('_js')
{{-- <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --}}
{{-- <script src="{{ $chart->cdn() }}"></script> --}}

{{-- {{ $chart->script() }} --}}
@endsection