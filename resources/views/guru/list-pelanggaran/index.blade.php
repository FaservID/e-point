@extends('layouts.main')


@section('title', 'List Pelanggaran')

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
                        <li class="breadcrumb-item active">List Pelanggaran</li>
                    </ol>
                </div>
                {{-- <h4 class="page-title">Kategori Pelanggaran</h4> --}}

            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">List Pelanggaran</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="list-pelanggaran-datatables"
                            class="table table-bordered table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 2%">#</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Catatan</th>
                                    <th>Last Update</th>
                                    <th>Aksi</th>
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
    @include('components.modal.list-pelanggaran.add')
    @include('components.modal.list-pelanggaran.edit')

@endsection

@push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        'use strict';

        // Datatbles server-side
        $(document).ready(function() {
            $('.select2').select2({
                dropdownParent: $('#addListPelanggaran')
            });
            $('.select2Edit').select2({
                dropdownParent: $('#editListPelanggaran')
            });

            var d = new Date();
            var l = d.getDate() + '_' + (d.getMonth() + 1) + '_' + d
                .getFullYear();
            let table = $("#list-pelanggaran-datatables").DataTable({
                ajax: '{{ url()->current() }}',
                processing: true,
                ordering: false,
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
                        data: 'catatan',
                        className: '',
                    },
                    {
                        data: 'latest',
                        className: 'dt-center',
                    },
                    {
                        data: null,
                        className: 'dt-center',
                    },
                ],
                pageLength: 10,
                columnDefs: [{
                    targets: 6,
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
                        if (full['status'] == 'true') {
                            return '<button class="btn btn-sm btn-success"><i class="mdi mdi-check me-1"></i>Closed</button>';
                        } else {
                            return (
                                '<span class="text-nowrap text-center">' + editButton +
                                deleteButton + '</span>'
                            );

                        }
                    }
                }, ],
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
                    {
                        text: 'New Data',
                        className: 'btn btn-sm btn-primary mb-3 mb-md-0 ms-2',
                        attr: {
                            'data-bs-toggle': 'modal',
                            'data-bs-target': '#addListPelanggaran'
                        },
                        init: function() {
                            $(this).removeClass('btn-secondary');
                        }
                    }
                ],
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api();
                    $(api.column(0).footer()).html('Total: ' + api.column(0).data().length +
                        ' records');
                },

            });
            $('.dt-buttons > .btn-group > button').removeClass('btn-secondary');
        });
        $('body').on('click', '#btn-edit', function() {
            let itemId = $(this).data('id');
            console.log(itemId);
            $.ajax({
                url: `/list-pelanggaran/get/${itemId}/data`,
                type: "GET",
                cache: false,
                success: function(response) {
                    const id = response.data.id;

                    $('#student_id_edit').val(response.data.student_id);
                    $('#kategori_id_edit').val(response.data.kategori_id);
                    $('#catatan_edit').val(response.data.catatan);

                    var form = document.getElementById("editListPelanggaranForm");
                    form.action = `/list-pelanggaran/update/${id}`

                    $('#editListPelanggaran').modal('show');
                }
            });
        });

        function showDeleteConfirmation(id) {
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
                        url: `/list-pelanggaran/${id}`,
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
                                        "{{ route('guru.list-pelanggaran.index') }}"
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