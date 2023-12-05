<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi Detail </title>


    <style>
        .title_pdf {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            padding-top: 1.25rem;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            background-color: #D5D6C6;
            width: 700px;
            max-width: 100%;
            height: auto;
            padding: 10px;
            border-radius: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        .margin {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div>
        <h1 class="title_pdf">
            INFORMASI NASABAH
        </h1>
        <hr style="height: 3px; color: black; background-color: black" />
    </div>
    <div class="container">
        <div class="content">
            <table>
                <tr class="margin">
                    <td>Nama</td>
                    <td>{{$data->nama}}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>{{$data->nik}}</td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>{{$data->umur}} tahun</td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td>{{$data->tujuan}}</td>
                </tr>
                <tr>
                    <td>Jumlah Pinjaman (Rp)</td>
                    <td>Rp. {{number_format($data->jlh_pinjam, 0, ',', '.')}}</td>
                </tr>
                <tr>
                    <td>Pendapatan (Rp)</td>
                    <td>Rp. {{number_format($data->pendapatan, 0, ',', '.')}}</td>
                </tr>
                <tr>
                    <td>Tenor</td>
                    <td>{{$data->tenor}} bulan</td>
                </tr>
                <tr>
                    <td>Status Pekerjaan</td>
                    <td>{{$data->pekerjaan}}</td>
                </tr>
                <tr>
                    <td>Jumlah Tanggungan</td>
                    <td>{{$data->tanggungan}}</td>
                </tr>
                <tr>
                    <td>Status Pernikahan</td>
                    <td>{{$data->pernikahan}}</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>