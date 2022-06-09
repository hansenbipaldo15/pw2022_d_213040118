<!-- =========================================================================================
  Name: Toko Obat V1 Website
  Author: Muhammad Fauzan
  Author URL: http://fauzanishere.my.id
  Repository: https://github.com/fauzan121002/toko-obat-v1
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>
	<style>
		.custom
		{
			color: #ef5350;
		}

        table
        {
            border-collapse: collapse;
            margin: 0px auto;
            width: 100%;
        }

        table tr th, table tr td
        {
            border: 1px solid black;
        }
	</style>
</head>
<body>
	<div class="custom" style="text-align: center;">Smartpharmacy</div>
    <div style="text-align: center;">Laporan Data Kategori Obat</div>
    <div style="text-align: center;">Tanggal : {{ date('d-m-Y h:i') }}</div>
    <hr>

    <table>
        <thead>
            <tr>    
                <th scope="col">Kode Jenis Obat</th>
                <th scope="col">Nama Jenis Obat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jenisobat as $data)
              <tr>
                <td>{{ $data->kode_jenisobat }}</td>
                <td>{{ $data->nama_jenisobat }}</td>
              </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>