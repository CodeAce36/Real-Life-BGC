<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Announcement</title>

    @include('admin-partials.admin-header')
    <style>
        .table-responsive td {
            max-width: 750px;
            white-space: normal;
            margin-bottom: 10px;
            /* Adjust the value based on the amount of space you want */
            padding-bottom: 10px;
        }

        .dropdown-item:hover {
            background-color: #007bff;
            /* Primary color */
            color: #fff;
            /* Text color */
        }

        .text-gray {
            color: gray;
            font-size: 14px;

        }

        .published-unpublished {
            color: gray;
            font-size: 14px;
        }
    </style>
</head>

<body>
    @include('admin-partials.admin-sidebar', [
        'notifications' => app()->make(\App\Http\Controllers\Admin\AdminController::class)->showNotifications(),
    ])
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Announcement </h3>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <button type="button" class="btn custom-btn btn-fw" style="font-size: 12px; margin-bottom: 20px;"
                        onclick="location.href='{{ route('admin.announcement.add-announcement') }}'">Create</button>
                    @foreach ($announcements as $announcement)
                        <div class="col-md-12 mb-4">
                            <div class="card position-relative">
                                <div class="position-absolute top-4 end-0 margin-right-6 btn-group dropleft">
                                    <i class="bi bi-three-dots"
                                        style="cursor: pointer; margin-right: 10px; margin-top: 10px;"
                                        onclick="toggleDropdownMenu('dropdownMenu{{ $announcement->id }}')"></i>
                                    <span style="position: absolute; left: -98px; top: 10px;">
                                        @if ($announcement->published)
                                            <span class="published-unpublished ">Published</span>
                                        @else
                                            <span class="published-unpublished">Unpublished</span>
                                        @endif
                                    </span>
                                    <div id="dropdownMenu{{ $announcement->id }}" class="dropdown-menu drop-left"
                                        style="display: none; border: 1px solid black;">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.announcement.edit-announcement', ['id' => $announcement->id]) }}"><i
                                                class="fas fa-edit"></i> Edit</a>
                                        <form action="{{ route('delete.announcement', ['id' => $announcement->id]) }}"
                                            method="post" id="deleteForm_{{ $announcement->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete('{{ $announcement->id }}')"
                                                class="dropdown-item">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>

                                        </form>
                                        @if ($announcement->published)
                                            <a class="dropdown-item"
                                                href="{{ route('admin.announcement.unpublish', ['id' => $announcement->id]) }}"><i
                                                    class="fa fa-eye-slash" aria-hidden="true"></i> Unpublish</a>
                                        @else
                                            <a class="dropdown-item"
                                                href="{{ route('admin.announcement.publish', ['id' => $announcement->id]) }}"><i
                                                    class="fa fa-eye" aria-hidden="true"></i> Publish</a>
                                        @endif
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title mb-0">{{ $announcement->title }}</h5>
                                    <span class="widget-49-meeting-time text-gray">
                                        {{ \Carbon\Carbon::parse($announcement->created_at)->timezone('Asia/Manila')->isoFormat('MMMM D, YYYY, h:mm A') }}
                                        {{-- ({{ \Carbon\Carbon::parse($announcement->created_at)->timezone('Asia/Manila')->diffForHumans() }}) --}}
                                    </span>
                                    <p class="card-text announcement-caption mt-2">{!! $announcement->caption !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets-new-admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets-new-admin/js/off-canvas.js"></script>
    <script src="../assets-new-admin/js/misc.js"></script>
    <!-- Vendor JS Files -->
    <script src="../assets-admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets-admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets-admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets-admin/vendor/php-email-form/validate.js"></script>
    <script src="../assets-admin/tinymce/tinymce.min.js"></script>

    <script src="../assets-admin/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets-admin/vendor/echarts/echarts.min.js"></script>
    <script src="../assets-admin/vendor/quill/quill.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets-admin/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'Once deleted, you will not be able to recover.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Deleted!',
                        text: 'The announcement has been deleted.',
                        icon: 'success',
                        showConfirmButton: true
                    }).then(() => {
                        document.getElementById('deleteForm_' + id).submit();
                    });
                }
            });
        }

        /*************************/
        function toggleDropdownMenu(id) {
            var dropdownMenu = document.getElementById(id);
            if (dropdownMenu.style.display === "none") {
                dropdownMenu.style.display = "block";
            } else {
                dropdownMenu.style.display = "none";
            }
        }
        /********************************/
        setTimeout(function() {
            $('#successAlert').alert('close');
        }, 3000);
    </script>
</body>

</html>
