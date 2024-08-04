<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pelanggaran</title>
    <style>
        * {
            margin: 0px;
            padding: 5px;
        }

        .header {}

        .content {
            padding: 0px 40px
        }

        .kategori {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        .footer {
            padding: 0 40px;
        }

        .ttd {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    @foreach ($data['data'] as $item)
        <div class="header">
            <div class="img-header">
                <img src="{{ public_path('assets/images/kop.jpg') }}" alt="Kop Surat" width="100%">
            </div>
        </div>
        <div class="content">
            <h5 style="text-align: center; margin-bottom:20px">CATATAN PELANGGARAN SISWA</h5>

            <table>
                <tbody>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td>{{ $item->nisn }}</td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td>{{ $item->nama }}</td>
                    </tr>
                    <tr>
                        <td>KELAS</td>
                        <td>:</td>
                        <td>{{ $item->kelas->nama_kelas }}</td>
                    </tr>
                </tbody>
            </table>

            <h5 style="margin-top:20px; margin-left:7px; margin-bottom:20px">REKAP PELANGGARAN SISWA PER SEMESTER</h5>

            <table border="1" class="kategori" style="margin-left:7px">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>KATEGORI PELANGGARAN</th>
                        <th>JUMLAH POINT</th>
                        <th>KET</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($item->pelanggarans as $pelanggaran)
                        @php
                            $total += $pelanggaran->kategori->poin;
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ ucWords($pelanggaran->kategori->kategori_pelanggaran) }}</td>
                            <td style="text-align: center; font-weight:bold">{{ $pelanggaran->kategori->poin }} Poin
                            </td>
                            <td>{{ $pelanggaran->catatan }}</td>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">JUMLAH KESELURUHAN</th>
                        <th style="font-weight:bold">
                            {{ $total }} Poin
                        </th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>

            <p style="margin-top:20px; margin-left:7px">Jenis Tindakan/Sanksi Madrasah bagi siswa bila telah mencapai
                jumlah point tertentu</p>

            <table border="1" class="kategori" style="margin-left:7px">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>JUMLAH POINT</th>
                        <th>TINDAKAN & SANKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['jenis'] as $item)
                        <tr>
                            <td style="text-align: center">{{$loop->iteration}}.</td>
                            <td style="text-align: center">{{$item->total_poin}}</td>
                            <td>{{$item->tindakan_sanksi}}</td>
                        </tr>
                    @endforeach
                    {{-- <tr style="background-color:{{ $total >= 30 && $total < 50 ? '#e8e4e3' : '' }}; font-weight:{{ $total >= 30 && $total < 50 ? 'bold' : '' }}">
                        <td style="text-align: center">1.</td>
                        <td style="text-align: center">30</td>
                        <td>Dibina oleh wali kelas dan guru BK, orang tua diberi tahu dan tandatangan</td>
                    </tr>
                    <tr style="background-color:{{ $total >= 50 && $total < 70 ? '#e8e4e3' : '' }}; font-weight:{{ $total >= 50 && $total < 70 ? 'bold' : '' }}">
                        <td style="text-align: center">2.</td>
                        <td style="text-align: center">50</td>
                        <td>Surat peringatan pertama, orang tua diberitahu dan tandatangan</td>
                    </tr>
                    <tr style="background-color:{{ $total >= 70 && $total < 90 ? '#e8e4e3' : '' }}; font-weight:{{ $total >= 70 && $total < 90 ? 'bold' : '' }}">
                        <td style="text-align: center">3.</td>
                        <td style="text-align: center">70</td>
                        <td>Surat peringatan kedua, orang tua diberitahu dan tandatangan</td>
                    </tr>
                    <tr style="background-color:{{ $total >= 90 && $total < 100 ? '#e8e4e3' : '' }}; font-weight:{{ $total >= 90 && $total < 100 ? 'bold' : '' }}">
                        <td style="text-align: center">4.</td>
                        <td style="text-align: center">90</td>
                        <td>Surat peringatan ketiga, orang tua diberitahu dan tandatangan</td>
                    </tr>
                    <tr style="background-color:{{ $total >= 100 ? '#e8e4e3' : '' }}; font-weight:{{ $total >= 100 ? 'bold' : '' }}">
                        <td style="text-align: center">5.</td>
                        <td style="text-align: center">100</td>
                        <td>Dikembalikan pembinaannya kepada orang tua</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <div class="footer">
            <table style="width: 100%; margin-top:50px">
                <tbody>
                    <tr>
                        <td style="width: 65%">
                            <p>Mengetahui, <br> Waka Kesiswaan</p>
                            <p style="margin-top: 50px;">Dendra Okta Putra, A.Md <br> NIP. - </p>
                        </td>
                        <td style="width: 45%">
                            <div>Sekayu, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br> Kepala Madrasah</div>
                            <div style="margin-top: 50px;">Muhammad Yamin, S.Pd., M.P <br> NIP. 197805052005011008</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach
</body>

</html>
