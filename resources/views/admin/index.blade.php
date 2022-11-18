<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ url('assets/image/logolci.png') }}" rel="shortcut icon">

    <title>Screening Indonesia</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('assets_BE/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('assets_BE/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    {{-- <link href="{{ url('assets_BE/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    <!-- css dropzone -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

   {{-- datatable --}}
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
   
   <style>
      .dz-image img {
         width: 120px;
         height: 120px;
      }
   </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> emot ketawa -->
                </div>
                <div class="sidebar-brand-text mx-3">Screening<sup>Indonesia</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
            
            <?php $status =  Session::get('status') ?>
            @if ($status == 'Admin')
                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="/user">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Users</span>
                    </a>
                </li>

                <!-- Nav Item - About -->
                <li class="nav-item">
                    <a class="nav-link" href="/about">
                        <i class="fas fa-fw fa-table"></i>
                        <span>About</span>
                    </a>
                </li>

                <!-- Nav Item - Ourteam -->
                <li class="nav-item">
                    <a class="nav-link" href="/ourteam">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Our Team</span>
                    </a>
                </li>

                <!-- Nav Item - Our Client -->
                <li class="nav-item">
                    <a class="nav-link" href="/our-clients">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Our Clients</span>
                    </a>
                </li>

                <!-- Nav Item - Company -->
                <li class="nav-item">
                    <a class="nav-link" href="/companies">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Company</span>
                    </a>
                </li>

                <!-- Nav Item - Jobs -->
                <li class="nav-item">
                    <a class="nav-link" href="/jobs">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Jobs</span>
                    </a>
                </li>

                <!-- Nav Item - Talents -->
                <li class="nav-item">
                    <a class="nav-link" href="/talents">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Talents</span>
                    </a>
                </li>

                <!-- Nav Item - Articles -->
                <li class="nav-item">
                    <a class="nav-link" href="/articles">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Articles</span>
                    </a>
                </li>

                <!-- Nav Item - Applied -->
                <li class="nav-item">
                    <a class="nav-link" href="/applied">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Applied</span>
                    </a>
                </li>

                <!-- Nav Item - Kategori -->
                <li class="nav-item">
                    <a class="nav-link" href="/kategori">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Kategori</span>
                    </a>
                </li>

                <!-- Nav Item - Banner -->
                <li class="nav-item">
                    <a class="nav-link" href="/banners">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Banner</span>
                    </a>
                </li>

                <!-- Nav Item - News -->
                <li class="nav-item">
                    <a class="nav-link" href="/news">
                        <i class="fas fa-fw fa-table"></i>
                        <span>News</span>
                    </a>
                </li>

                <!-- Nav Item - Events -->
                <li class="nav-item">
                    <a class="nav-link" href="/events">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Events</span>
                    </a>
                </li>
            @elseif ($status == 'Company')
                <!-- Nav Item - Company -->
                <li class="nav-item">
                    <a class="nav-link" href="/companies">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Company</span>
                    </a>
                </li>            
            @else
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ url('assets_BE/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main Content -->
          <div id="content">
              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                      <i class="fa fa-bars"></i>
                  </button>

                  <!-- Topbar Search -->
                  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                      {{-- <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                              aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                  <i class="fas fa-search fa-sm"></i>
                              </button>
                          </div>
                      </div> --}}
                  </form>

                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">

                      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                      <li class="nav-item dropdown no-arrow d-sm-none">
                          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-search fa-fw"></i>
                          </a>
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                              aria-labelledby="searchDropdown">
                              <form class="form-inline mr-auto w-100 navbar-search">
                                  <div class="input-group">
                                      <input type="text" class="form-control bg-light border-0 small"
                                          placeholder="Search for..." aria-label="Search"
                                          aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                          <button class="btn btn-primary" type="button">
                                              <i class="fas fa-search fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </li>

                      <!-- Nav Item - Alerts -->
                      <li class="nav-item dropdown no-arrow mx-1">
                          {{-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-bell fa-fw"></i>
                              <!-- Counter - Alerts -->
                              <span class="badge badge-danger badge-counter">3+</span>
                          </a> --}}
                          <!-- Dropdown - Alerts -->
                          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="alertsDropdown">
                              <h6 class="dropdown-header">
                                  Alerts Center
                              </h6>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="mr-3">
                                      <div class="icon-circle bg-primary">
                                          <i class="fas fa-file-alt text-white"></i>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="small text-gray-500">December 12, 2019</div>
                                      <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="mr-3">
                                      <div class="icon-circle bg-success">
                                          <i class="fas fa-donate text-white"></i>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="small text-gray-500">December 7, 2019</div>
                                      $290.29 has been deposited into your account!
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="mr-3">
                                      <div class="icon-circle bg-warning">
                                          <i class="fas fa-exclamation-triangle text-white"></i>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="small text-gray-500">December 2, 2019</div>
                                      Spending Alert: We've noticed unusually high spending for your account.
                                  </div>
                              </a>
                              <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                          </div>
                      </li>

                      <!-- Nav Item - Messages -->
                      <li class="nav-item dropdown no-arrow mx-1">
                          {{-- <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-envelope fa-fw"></i>
                              <!-- Counter - Messages -->
                              <span class="badge badge-danger badge-counter">7</span>
                          </a> --}}
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="messagesDropdown">
                              <h6 class="dropdown-header">
                                  Message Center
                              </h6>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src="{{ url('assets_BE/img/undraw_profile_1.svg') }}"
                                          alt="...">
                                      <div class="status-indicator bg-success"></div>
                                  </div>
                                  <div class="font-weight-bold">
                                      <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                          problem I've been having.</div>
                                      <div class="small text-gray-500">Emily Fowler · 58m</div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src="{{ url('assets_BE/img/undraw_profile_2.svg') }}"
                                          alt="...">
                                      <div class="status-indicator"></div>
                                  </div>
                                  <div>
                                      <div class="text-truncate">I have the photos that you ordered last month, how
                                          would you like them sent to you?</div>
                                      <div class="small text-gray-500">Jae Chun · 1d</div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src="{{ url('assets_BE/img/undraw_profile_3.svg') }}"
                                          alt="...">
                                      <div class="status-indicator bg-warning"></div>
                                  </div>
                                  <div>
                                      <div class="text-truncate">Last month's report looks great, I am very happy with
                                          the progress so far, keep up the good work!</div>
                                      <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                          alt="...">
                                      <div class="status-indicator bg-success"></div>
                                  </div>
                                  <div>
                                      <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                          told me that people say this to all dogs, even if they aren't good...</div>
                                      <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                  </div>
                              </a>
                              <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                          </div>
                      </li>

                      <div class="topbar-divider d-none d-sm-block"></div>

                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ Session::get('name') }}
                              </span>
                              <img class="img-profile rounded-circle"
                                  src="{{ url('assets_BE/img/undraw_profile.svg') }}">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="userDropdown">
                              {{-- <a class="dropdown-item" href="#">
                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Profile
                              </a>
                              <a class="dropdown-item" href="#">
                                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Settings
                              </a> --}}
                              <a class="dropdown-item" href="{{ url('/') }}">
                                  <i class="fas fa-arrow-left fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Back To Header
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Logout
                              </a>
                          </div>
                      </li>

                  </ul>

              </nav>
              <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                      @yield('content')
                    </div>

                </div>
                <!-- /.container-fluid -->
          </div>
          <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <!-- <a class="btn btn-primary" href="login.html">Logout</a> -->
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('assets_BE/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets_BE/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('assets_BE/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('assets_BE/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('assets_BE/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('assets_BE/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('assets_BE/js/demo/chart-pie-demo.js') }}"></script>
    <!-- Page level plugins -->
    {{-- <script src="{{ url('assets_BE/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets_BE/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script> --}}

    <!-- Page level custom scripts -->
    {{-- <script src="{{ url('assets_BE/js/demo/datatables-demo.js') }}"></script> --}}

    <script>
    // get data detail applied percompany
    $('body').on('click', '.pilih-appliedcompany', function() {
        var val = $(this).data('id');
        var APP_URL = {!! json_encode(url('/')) !!}
        $("#exampleid").empty();
        console.log(APP_URL);
        $.ajax({
        type: "get",
        url: "{{ route('DataAppliedCompany') }}",
        data: {
            id: val
        },
        dataType: "json",
            success: function (data) {
                var no = 0;
                console.log(data.data);
                $.each(data.data, function(index, element) {
                    no++;
                    $("#exampleid").append("<tr >" + "<td>" + no + "." + "</td>" + "<td>" + element.name + "</td>" + "<td>" + "<a href='" + APP_URL + element.cv + "' target='_blank'>View CV</a>" + "</td>" + "</tr>"); 
                    // $("#exampleid").append("<tr >" + "<td>" + no + "." + "</td>" + "<td>" + element.name_company + "</td>" + "<td>" + "<button class='btn btn-secondary pilih-jobfairdetail' data-user=" + element.id_user + " data-company=" + element.id_company + " type='button' data-toggle='modal' data-target='#getDataDetailApplied' data-dismiss='modal' style='background-color: rgb(33, 156, 189);'>Detail Applied</button>" + "</td>" + "</tr>"); 
                });
            }
        });
    })  
    // get data company detail
    $('body').on('click', '.pilih-companydetail', function() {
        var val = $(this).data('id');
        
        $("#exampleid").empty();
        console.log(val);
        $.ajax({
        type: "get",
        url: "{{ route('DataCompany') }}",
        data: {
            id: val
        },
        dataType: "json",
            success: function (data) {
                var no = 0;
                console.log(data.data);
                $.each(data.data, function(index, element) {
                    no++;
                    $("#exampleid").append("<tr >" + "<td>" + no + "." + "</td>" + "<td>" + element.nama_perusahaan + "</td>" + "<td>" + "<button class='btn btn-secondary pilih-jobfairdetail' data-user=" + element.id_user + " data-company=" + element.id_company + " type='button' data-toggle='modal' data-target='#getDataDetailApplied' data-dismiss='modal' style='background-color: rgb(33, 156, 189);'>Detail Applied</button>" + "</td>" + "</tr>"); 
                    // document.getElementById('result').append += '<td>'+ element.name_company +'</td>';
                });
            }
        });
    })  
    // get data company detail
    $('body').on('click', '.pilih-jobfairdetail', function() {
        var valuser = $(this).data('user');
        var valcompany = $(this).data('company');
        
        $("#detailjobfair").empty();
        console.log(valuser);
        console.log(valcompany);
        $.ajax({
        type: "get",
        url: "{{ route('DataJobfair') }}",
        data: {
            id_user: valuser,
            id_company: valcompany
        },
        dataType: "json",
            success: function (data) {
                console.log(data.data);
                var no = 0;
                $.each(data.data, function(index, element) {
                    no++;
                    $("#detailjobfair").append("<tr>" + "<td>" + no + "." + "</td>" + "<td>" + element.nama_perusahaan + "</td>" + "<td>" + element.position + "</td>" + "</tr>"); 
                    // document.getElementById('result').append += '<td>'+ element.name_company +'</td>';
                });
            }
        });
    })  
</script>
    <!-- Ajax get data pria dan wanita -->
    <script>
      $('body').on('click', '.pilih-pria', function() {
        var val = $(this).val();
        $.ajax({
          type: "get",
          url: "{{ route('DataPria') }}",
          data: {
            id: val
          },
          dataType: "json",
            success: function (response) {
                // $(`.salary`).text(`Gaji : ${response['data'].gaji} | NPWP : ${response['data'].upah_pokok}`);
                $("#pria_id").val(response['data'].id);
                $("#namapria").val(response['data'].nama);
            }
        });
      })
      $('body').on('click', '.pilih-wanita', function() {
        var val = $(this).val();
        $.ajax({
          type: "get",
          url: "{{ route('DataWanita') }}",
          data: {
            id: val
          },
          dataType: "json",
            success: function (response) {
                $("#wanita_id").val(response['data'].id);
                $("#namawanita").val(response['data'].nama);
            }
        });
      })
      $('body').on('click', '.pilih-tempatacara', function() {
        var val = $(this).val();
        $.ajax({
          type: "get",
          url: "{{ route('DataTempatAcara') }}",
          data: {
            id: val
          },
          dataType: "json",
            success: function (response) {
                $("#tempatacara_id").val(response['data'].id);
                $("#namatempatacara").val(response['data'].tempat);
            }
        });
      })
    </script>
    <!-- JS for dropzone -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
   <script>
      var uploadedDocumentMap = {}
      Dropzone.options.documentDropzone = {
         url: '{{ route('galeri.storeMedia') }}',
         maxFilesize: 2, // MB
         addRemoveLinks: true,
         acceptedFiles: ".jpeg,.jpg,.png,.gif",
         headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
         },
         success: function(file, response) {
            $('form').append('<input type="hidden" name="gambar[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
         },
         removedfile: function(file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
               name = file.file_name
            } else {
               name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="gambar[]"][value="' + name + '"]').remove()
         }
      }
   </script>
   {{-- datatable --}}
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
   <script>
        $('#dataTable').DataTable();
   </script>
   <script>
        $("#provinsi").change(function(){
            var val = $("#provinsi option:selected").val()
            $("#kota_kabupaten option").remove()
            
            $.ajax({
                url: "{{ route('get-cities-by-province') }}", 
                data: {id: val},
                success: function(result){
                    $('#kota_kabupaten').append(`<option value="">
                        -- Select one --
                    </option>`);
                    $.each(result, function( index, value ) {
                        $('#kota_kabupaten').append(`<option value="${value.id}">
                            ${value.name}
                        </option>`);
                    });
                }
            });
        })
   </script>
</body>

</html>