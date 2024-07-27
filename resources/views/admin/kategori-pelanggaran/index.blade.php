@extends('layouts.main')


@section('title', 'Kategori Pelanggaran')

@push('custom-styles')
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.min.css " rel="stylesheet">
@endpush

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Kategori Pelanggaran</li>
                    </ol>
                </div>
                {{-- <h4 class="page-title">Kategori Pelanggaran</h4> --}}

            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">List Kategori Pelanggaran</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="kategori-pelanggaran-datatables"
                            class="table table-bordered table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 2%">#</th>
                                    <th>Kategori Pelanggaran</th>
                                    <th>Poin</th>
                                    <th>Last Update</th>
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
    @include('components.modal.kategori-pelanggaran.add')
    @include('components.modal.kategori-pelanggaran.edit')

@endsection

@push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.all.min.js"></script>

    <script>
        'use strict';

        // Datatbles server-side
        $(document).ready(function() {
            var d = new Date();
            var l = d.getDate() + '_' + (d.getMonth() + 1) + '_' + d
                .getFullYear();
            let table = $("#kategori-pelanggaran-datatables").DataTable({
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
                        data: 'kategori',
                        className: ''
                    },
                    {
                        data: 'poin',
                        className: 'dt-center'
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
                                'data-bs-target': '#addKategoriPelanggaran'
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
        });
        $('body').on('click', '#btn-edit', function() {
            let itemId = $(this).data('id');
            console.log(itemId);
            $.ajax({
                url: `/admin/kategori-pelanggaran/get/${itemId}/data`,
                type: "GET",
                cache: false,
                success: function(response) {
                    const id = response.data.id;

                    $('#kategori_pelanggaran_edit').val(response.data.kategori_pelanggaran);
                    $('#poin_edit').val(response.data.poin);

                    var form = document.getElementById("editKategoriPelanggaranForm");
                    form.action = `/admin/kategori-pelanggaran/${id}`

                    $('#editKategoriPelanggaran').modal('show');
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
                        url: `/admin/kategori-pelanggaran/${id}`,
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
                                        "{{ route('kategori-pelanggaran.index') }}"
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
