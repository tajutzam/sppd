<!DOCTYPE html>
<html>

<head>
    <title>SPPD SUNARYATI,A.Md.Keb</title>
</head>
<style>
    table td {
        vertical-align: top;
    }

    .head p {
        text-align: center;
        line-height: 1%;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }
</style>

<body style="margin: 20px;">
    <table style="width: 100%;;">
        <tbody>
            <tr>
                <td>
                    <img src="{{ public_path('/images/pacitan.jpeg') }}" alt="">
                </td>
                <td class="head" style="width: 500px;">
                    <p style="font-size: 14px;"><strong>PEMERINTAH KABUPATEN PACITAN</strong></p>
                    <p style="font-size: 16px;"><strong>DINAS KESEHATAN</strong></p>
                    <p style="font-size: 16px;"><strong>PUSKESMAS KETROWONOJOYO</strong></p>
                    <p style="font-size: 11px;">Jln. Pacitan – Lorok Km 16, Kode Pos 63561</p>
                    <p style="font-size: 11px;">e-mail :puskesmasketrowonojoyo@gmail.com </p>
                    <p style="font-size: 11px;">Telp. 085233190910</p>
                    <p style="font-size: 12px;"><strong>PACITAN</strong></p>

                </td>
                <td style="text-align: end;">
                    <img src="{{ public_path('/images/ketro.png') }}" alt="">
                </td>
            </tr>
        </tbody>
    </table>

    <hr style="border: 2px solid black; margin-bottom: 2px;">
    <hr style="border: 1px solid black; padding: 0; margin-top: 0px;">
    <div style="text-align: start; float: right; margin-right: 6%;">
        <p style="font-size: 11px;">Lembar Ke : 1</p>
        <p style="font-size: 11px;">Kode No. : </p>
        <p style="font-size: 11px;">Nomor : 090/ /408.36.6/2023</p>
    </div>
    <p style="font-size: 14px; clear:right; text-align: center;"><strong><u>SURAT PERJALANAN DINAS (SPD)</u></strong>
    </p>
    <table
        style="border-collapse: collapse; width: 100%; border: 1px solid black;   width: 90%; /* Lebar tabel */
        margin: 0 auto;">
        <tbody>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">1.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Kuasa Pengguna Anggaran

                </td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">{{ $head['name'] }}
                </td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">NIP.</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">{{ $head['nip'] }}
                </td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">2.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Nama Pegawai yang diperintah</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    {{ $data['user']['name'] }}
                </td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">NIP.</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    {{ $data['user']['nip'] }}
                </td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">3.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">a. Pangkat dan Golongan </td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">a.
                    {{ $data['user']['rank'] }}
                    {{ $data['user']['group'] }}
                </td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">b. Jabatan / Instansi</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">b.
                    {{ $data['user']['position'] }}</td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">c. Tingkat Biaya Perjalanan Dinas
                </td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">c. </td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">4.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Maksud Perjalanan Dinas</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    {{ $data['activity_name'] }}</td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">5.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Alat angkutan yang digunakan </td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    {{ $data['transportation']['name'] }}</td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">6.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">a. Tempat berangkat</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">a.
                    {{ $data['destination_from']['place']['name'] }}
                </td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">b. Tempat tujuan</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">b.
                    {{ $data['destination_to']['place']['name'] }}</td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">7.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">a. Lamanya Perjalanan Dinas</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">a.
                    {{ $data['travel_time'] }} hari</td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">b. Tanggal berangkat</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">b.
                    {{ Carbon\Carbon::parse($data['departure_date'])->format('Y-m-d') }}</td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">c. Tanggal harus kembali</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">c.
                    {{ Carbon\Carbon::parse($data['return_date'])->format('Y-m-d') }}</td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">8.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Pengikut : Nama</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Tanggal lahir</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Keterangan</td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">1.</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">9.</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Pembebanan Anggaran</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">a. Instansi</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">a. Dinas Kesehatan
                </td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;"></td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">b. Akun</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">b.
                    {{ $data['account']['name'] }}</td>

            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">10</td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">Keterangan lain-lain</td>
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">-</td>

            </tr>
        </tbody>
    </table>
    <div style="float: right;   text-align: center; padding: 0%; margin: 0px; margin-right: 20%; ">
        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">Mengetahui/ Menyetujui</p>
        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">Kuasa
            Pengguna Anggaran</p>
        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px; margin-top: 30px">
            <strong><u>{{ $head['name'] }}</u></strong>
        </p>

        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">NIP. {{ $head['nip'] }}
        </p>
        <p> </p>
        <p></p>
    </div>
    <p></p>

    <div style=" clear: right; text-align: start; float: right; margin-right: 6%;">
        <p style=" font-size:11px;"><strong>SPD Nomor : 090/ /408.36.6/2023</strong></p>
        <p style="font-size: 11px;"><strong>Lembar ke : 2</strong></p>
    </div>

    <table
        style="clear: right;  border-collapse: collapse; width: 100%; border: 1px solid black; width: 90%; /*
        Lebar tabel */ margin: 0 auto;">
        <tbody>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px; width: 50%;">

                </td>
                <td style="font-size: 11px; border: 1px solid black; padding: 8px; width: 50%;">

                    I. Berangkat dari :
                    (Tempat Kedudukan)
                    <div style="padding-inline-start: 10px; padding-bottom: 20px;">
                        Ke :
                        Pada Tanggal :

                    </div>
                    <div style=" text-align: center; padding-inline-start:10px; ; margin: 0px; ;">
                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">Kepala Puskesmas Ketrowonojoyo
                        </p>
                        <p>&nbsp;</p>
                        <p> &nbsp;</p>
                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">
                            <strong><u>{{ $head['name'] }}</u></strong>
                        </p>

                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">NIP. {{ $head['nip'] }}
                        </p>
                    </div>


                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    II. Tiba di :
                    <div style="padding-inline-start: 10px;">
                        Pada tanggal :

                    </div>
                </td>


                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">

                    <div style="padding-inline-start: 10px;">
                        Berangkat dari :
                    </div>
                    <div style="padding-inline-start: 10px;">
                        Ke &nbsp; &nbsp;:
                    </div>
                    <div style="padding-inline-start: 10px; padding-bottom: 10%;">
                        Pada Tanggal :
                    </div>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    III. Tiba di :
                    <div style="padding-inline-start: 10px;">
                        Pada tanggal :

                    </div>
                </td>


                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">

                    <div style="padding-inline-start: 10px;">
                        Berangkat dari :
                    </div>
                    <div style="padding-inline-start: 10px;">
                        Ke &nbsp; &nbsp;:
                    </div>
                    <div style="padding-inline-start: 10px; padding-bottom: 10%;">
                        Pada Tanggal :
                    </div>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    IV. Tiba di :
                    <div style="padding-inline-start: 10px;">
                        Pada tanggal :

                    </div>
                </td>


                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">

                    <div style="padding-inline-start: 10px;">
                        Berangkat dari :
                    </div>
                    <div style="padding-inline-start: 10px;">
                        Ke &nbsp; &nbsp;:
                    </div>
                    <div style="padding-inline-start: 10px; padding-bottom: 10%;">
                        Pada Tanggal :
                    </div>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    V. Tiba di : {{ $data['destination_from']['place']['name'] }}
                    <div style="padding-inline-start: 10px; padding-bottom: 20px;">
                        Pada tanggal : {{ Carbon\Carbon::parse($data['departure_date'])->format('Y-m-d') }}
                    </div>
                    <div style=" text-align: center; padding-inline-start:10px; ; margin: 0px; ;">
                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">Kepala Puskesmas Ketrowonojoyo
                        </p>
                        <p>&nbsp;</p>
                        <p> &nbsp;</p>
                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">
                            <strong><u>{{ $head['name'] }}</u></strong>
                        </p>

                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">NIP. {{ $head['nip'] }}
                        </p>
                    </div>
                </td>


                <td style="font-size: 11px; border: 1px solid black; padding: 8px;">

                    <div style=" padding-bottom: 20px;">
                        Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya dan semata-mata
                        untuk
                        kepentingan jabatan dalam waktu yang sesingkat-singkatnya
                    </div>
                    <div style=" text-align: center; padding-inline-start:10px; ; margin: 0px; ;">
                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">KUASA PENGGUNA ANGGARAN</p>
                        <p>&nbsp;</p>
                        <p> &nbsp;</p>
                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">
                            <strong><u>{{ $head['name'] }}</u></strong>
                        </p>

                        <p style="margin-bottom: 0%; margin-top: 0%; font-size:11px;">NIP. {{ $head['nip'] }}
                        </p>
                    </div>

                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    VI. Catatan lain-lain
                    <div style="padding-inline-start: 10px;">


                    </div>
                </td>


            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td colspan="2" style="font-size: 11px; border: 1px solid black; padding: 8px;">
                    VII. PERHATIAN :
                    <div style="padding-inline-start: 10px; font-size: 11px;">
                        Pejabat yang berwenang menerbitkan SPD, pegawai yang melakukan perjalanan dinas, para pejabat
                        yang
                        mengesahkan tanggal berangkat / tiba, serta bendahara pengeluaran bertanggungjawab berdasarkan
                        peraturan-peraturan Keuangan Daerah apabila Daerah menderita rugi akibat kesalahan, kelalaian
                        dan
                        kealpaannya.
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
</body>

</html>
