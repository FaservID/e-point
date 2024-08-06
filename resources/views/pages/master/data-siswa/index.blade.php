@extends('layouts.main')


@section('title', 'Data Siswa')

@push('custom-styles')
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.min.css " rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Data Siswa</li>
                    </ol>
                </div>
                {{-- <h4 class="page-title">Data Siswa</h4> --}}

            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">List Data Siswa</h5>
                    </div>
                    @if (auth()->user()->is_guru_bk == 'true' || auth()->user()->type == 'admin' || auth()->user()->type == 'eksekutif')
                        <div class="d-flex justify-content-between align-items-center row py-2 gap-3 gap-md-0">
                            <div class="col-md-12 kelas_filter">
                                <!-- Dropdown untuk kategori proy   ek -->
                                <label for="kelasFilter" class="form-label">Filter by Kelas</label>
                                <select id="kelasFilter" name="kelas" class="form-select select2">
                                    <option value="">All</option>
                                    @foreach ($kelas as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data-siswa-datatables"
                            class="table table-bordered table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 2%">#</th>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>L/P</th>
                                    <th>TTL</th>
                                    <th>Latest Update</th>
                                    @if (auth()->user()->type == 'admin')
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.modal.data-siswa.add')
    @include('components.modal.data-siswa.edit')

@endsection

@push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        'use strict';


        // Datatbles server-side
        $(document).ready(function() {
            $('.select2').select2();

            var d = new Date();
            var l = d.getDate() + '_' + (d.getMonth() + 1) + '_' + d
                .getFullYear();
            let table = $("#data-siswa-datatables").DataTable({
                ajax: '{{ url()->current() }}',
                processing: true,
                ordering: true,
                scroller: true,
                serverSide: true,
                scrollY: '450px',
                scrollX: true,
                scrollCollapse: true,
                fixedColumns: true,
                stateSave: true,
                columns: [{
                        data: null,
                        orderable: false,
                        searchable: false,
                        className: 'dt-center dt-nowrap',
                        render: function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nis',
                        className: ''
                    },
                    {
                        data: 'nisn',
                        className: ''
                    },
                    {
                        data: 'student_name',
                        className: ''
                    },
                    {
                        data: 'kelas',
                        className: 'dt-center',
                    },
                    {
                        data: 'jenis_kelamin',
                        className: 'dt-center',
                    },
                    {
                        data: 'ttl',
                        className: 'dt-center',
                    },
                    {
                        data: 'latest',
                        className: 'dt-center',
                    },
                    @if (auth()->user()->type == 'admin')
                        {
                            data: null,
                            orderable: false,
                            searchable: false,
                            className: 'dt-center dt-nowrap'
                        }
                    @endif
                ],
                pageLength: 10,
                columnDefs: [
                    @if (auth()->user()->type == 'admin')
                        {
                            targets: -1,
                            searchable: false,
                            title: 'Actions',
                            className: 'dt-center',
                            orderable: false,
                            render: function(data, type, full) {
                                var id = full['id'];
                                var editButton =
                                    `<a href="javascript:void(0)" id="btn-edit" data-id="${id}" class="btn btn-warning btn-sm me-1"><i class="mdi mdi-application-edit"></i>`
                                var deleteButton =
                                    `<a href="javascript:void(0)" class="btn btn-danger btn-sm me-1" onclick="showDeleteConfirmation(${id})"><i class="mdi mdi-trash-can"></i>`
                                return (
                                    '<span class="text-nowrap text-center">' + editButton +
                                    deleteButton + '</span>'
                                );
                            }
                        },
                    @endif
                ],
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                dom: '<"row mx-1"' +
                    '<"col-sm-12 col-md-3" l>' +
                    '<"col-sm-12 col-md-9"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1"<"me-3"f>B>>' +
                    '>t' +
                    '<"row mx-2"' +
                    '<"col-sm-12 col-md-6"i>' +
                    '<"col-sm-12 col-md-6"p>' +
                    '>' +
                    '<"fli" r>',
                language: {
                    sLengthMenu: '_MENU_',
                    search: '_INPUT_',
                    searchPlaceholder: 'Search..'
                },
                buttons: [{
                        extend: 'collection',
                        className: 'btn btn-sm btn-label-secondary dropdown-toggle mb-3 mb-md-0',
                        text: '<i class="fa fa-file-export me-1"></i>Export',
                        buttons: [{
                                extend: 'print',
                                text: '<i class="bx bx-printer me-2" ></i>Print',
                                title: 'Laporan Harian Project (Update: ' + l + ')',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4],
                                },
                                filename: function() {
                                    return 'laporan_harian_project' + l;
                                },
                            },
                            {
                                extend: 'excel',
                                text: '<i class="bx bxs-file-export me-2"></i>Excel',
                                title: 'Laporan Harian Project (Update: ' + l + ')',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4],
                                },
                                filename: function() {
                                    return 'laporan_harian_project' + l;
                                },
                            }
                        ]
                    },
                    @if (auth()->user()->type == 'admin')
                        {
                            text: 'New Data',
                            className: 'btn btn-sm btn-primary mb-3 mb-md-0 ms-2',
                            attr: {
                                'data-bs-toggle': 'modal',
                                'data-bs-target': '#addDataSiswa'
                            },
                            init: function() {
                                $(this).removeClass('btn-secondary');
                            }
                        }
                    @endif
                ],
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api();
                    $(api.column(0).footer()).html('Total: ' + api.column(0).data().length +
                        ' records');
                },
            });
            $('.dt-buttons > .btn-group > button').removeClass('btn-secondary');
            $('#kelasFilter').change(function() {
                var kelasFilter = $('#kelasFilter').val();
                // Memperbarui parameter ajax untuk filtering
                table.ajax.url('{{ url()->current() }}?kelasFilter=' + kelasFilter).load();
            });
        });


        $('body').on('click', '#btn-edit', function() {
            let itemId = $(this).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: `/admin/data-siswa/get/${itemId}/data`,
                type: "GET",
                cache: false,
                success: function(response) {
                    console.log(response.data);

                    $('#nis_edit').val(response.data.nis);
                    $('#nisn_edit').val(response.data.nisn);
                    $('#nama_edit').val(response.data.nama);
                    $('#alamat_edit').val(response.data.alamat);
                    // Set the selected value for jenis_kelamin
                    $('#jenis_kelamin_edit').val(response.data.jenis_kelamin);

                    // Set the selected value for kelas_id
                    $('#kelas_id_edit').val(response.data.kelas_id);
                    // $('#no_wa_ortu_edit').val(response.data.no_wa_ortu);
                    $('#tempat_edit').val(response.data.tempat);
                    $('#tanggal_lahir_edit').val(response.data.tanggal_lahir);

                    var form = document.getElementById("editDataSiswaForm");
                    form.action = `/admin/data-siswa/${itemId}`

                    $('#editDataSiswa').modal('show');
                }
            });
        });

        function showDeleteConfirmation(id) {
            console.log(id);
            Swal.fire({
                title: 'Are You Sure?',
                text: 'Data yang terhapus akan hilang secara permanent?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, Hapus',
                cancelButtonText: 'Batal',
                focusConfirm: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: `/admin/data-siswa/${id}`,
                        type: 'DELETE',
                        cache: false,
                        success: function(response) {
                            if (response.status == 200) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Yeay 🥳',
                                    text: response.message,
                                    timerProgressBar: true,
                                    timer: 2000,
                                }).then((result) => {
                                    window.location.href =
                                        "{{ route('data-siswa.index') }}"
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oppss, Something went wrong',
                                    text: response.message,
                                    timerProgressBar: true,
                                    timer: 2000,
                                })
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Oppss, Something went wrong!',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    });
                }
            });
        }
    </script>
@endpush
