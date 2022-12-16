<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANALISA USAHA BUMDES</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <table width="100%">
        <tr>
            <td style="text-align: left; padding-left:0px" width="8%">
                <img src="{{ storage_path('app/public/images/logo/logo.png') }}" alt="" width="80">
            </td>
            <td style="text-align:center; padding:0px" width="33%">
                <p class="mb-0;" style="font-weight: bold; font-size: 16px; margin-bottom: 0; color: black">
                    PEMERINTAH KABUPATEN JEMBER</p>
                <p class="mb-0;" style="font-weight: bold; font-size: 18px; margin-bottom: 0; color:black">
                    DINAS PARIWISATA DAN KEBUDAYAAN</p>
                <p class="mb-0" style="font-size: 14px;color:black">Jl. Mh. Thamrin, AJung Kulon, Kecamatan Ajung, Jember 68175
                </p>
                <p class="mb-0" style="font-size: 14px;color:black">Telepon : (0331) 335244 | Fax : -
                </p>
                <p class="mb-0" style="font-size: 14px;color:black"> Website : http://www.jemberkab.go.id E-mail :
                    disparbud@jemberkab.go.id
                </p>
            </td>
            <td width="6%"></td>
        </tr>
    </table>
    <hr style="border: 1.0px solid black; margin-left: 70px;margin-right: 5px">
    <h5 style="font-weight: bold; font-size: 16px; margin-bottom: 0; text-align: center; margin-top: 30px;">Surat Permohonan Izin Promosi Ekraf
    </h5>
    <div style="margin-left: 30px; margin-right: 30px">
        <p style="font-size: 13px; margin-top: 60px;">Berikut dibawah ini merupakan Ekraf yang melakukan pendaftaran pada Website Promosi Ekraf Jember : </p>
        <table style="width: 100%; margin-top: 30px; font-size: 13px; margin-left: 30px">
            <tbody>
                <tr>
                    <td width="110px">Nama Ekraf</td>
                    <td width="10px">:</td>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <td width="110px">Kategori</td>
                    <td width="10px">:</td>
                    <td>{{ $data->category->name }}</td>
                </tr>
                <tr>
                    <td width="110px">Nomor HAKI</td>
                    <td width="10px">:</td>
                    <td>{{ $data->haki_number ?? '-' }}</td>
                </tr>
                <tr>
                    <td width="110px">NIK Pemilik</td>
                    <td width="10px">:</td>
                    <td>{{ $data->owner_identification_number }}</td>
                </tr>
                <tr>
                    <td width="110px">Nama Pemilik</td>
                    <td width="10px">:</td>
                    <td>{{ $data->owner_name }}</td>
                </tr>
                <tr>
                    <td width="110px">Alamat</td>
                    <td width="10px">:</td>
                    <td>{{ $data->address }}</td>
                </tr>
                <tr>
                    <td width="110px">Foto Ekraf</td>
                    <td width="10px">:</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        @if (count($data->attachment) > 0)
            <table style="width: 100%; margin-top: 30px;">
                <tbody>
                    <tr>
                        @foreach ($data->attachment as $item)
                            <td>
                                <img src="{{ storage_path('app/public/images/companies/attachment/' . $item->name) }}" width="180px" height="180px" alt="...">
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        @endif
        <table style="width: 100%; margin-top: 50px; font-size: 14px; text-align: center;">
            <thead>
                <tr>
                    <th>
                        Kepala<br />
                        Dinas Pariwisata Dan Kebudayaan <br/> Kab. Jember
                    </th>
                    <th>
                        Sekretaris<br />
                        Dinas Pariwisata Dan Kebudayaan <br/> Kab. Jember
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding-top: 90px;">
                        Harry Agustriono, ATD., MT
                    </td>
                    <td style="padding-top: 90px;">
                        Dhebora Krisnowati, S, S.Pd, M.Pd <br/>
                        NIP.196509252000122002
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
