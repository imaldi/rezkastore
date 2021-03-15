<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			font-family: Arial, sans-serif;
		}

		.center{
			text-align: center;
		}

		.right{
			text-align: right;
		}

		.left{
			text-align: left;
		}

		p{
			font-size: 10px;
		}

		.top-min{
			margin-top: -10px;
		}

		.uppercase{
			text-transform: uppercase;
		}

		.bold{
			font-weight: bold;
		}

		.d-block{
			display: block;
		}

		hr{
			border: 0;
			border-top: 1px solid #000;
		}

		.hr-dash{
			border-style: dashed none none none;
		}

		table{
			font-size: 10px;
		}

		table thead tr td{
			padding: 5px;
		}

		.w-100{
			width: 100%;
		}

		.line{
			border: 0;
			border-top: 1px solid #000;
			border-style: dashed none none none;
		}

		.body{
			margin-top: -10px;
		}

		.b-p{
			font-size: 12px !important;
		}

		.w-long{
			width: 80px;
		}
	</style>
</head>
<body>
	<div class="header">
		<p class="uppercase bold d-block center b-p">{{ $toko->nama_toko }}</p>
		<p class="top-min d-block center">{{ $toko->alamat }}</p>
		<p class="top-min d-block center">{{ $toko->no_telp }}</p>
		<hr class="hr-dash">
		<table class="w-100">
			<tr>
				<td class="left w-long">Kode Transaksi : </td>
				<td class="left">{{ $transaksi->kode_transaksi }}</td>
				<td class="right">Kasir : </td>
				@php
				$nama_kasir = explode(' ', $transaksi->user->nama_user);
				$kasir = $nama_kasir[0];
				@endphp
				<td class="right">{{ $kasir }}</td>
			</tr>
			<tr>
				<td></td>
                <td class="left" colspan="3">{{ date('d M, Y', strtotime($transaksi->created_at)) }}</td>
                <td class="left" colspan="3">{{ $transaksi->daftar_pelanggan->nama_pelanggan}}</td>
			</tr>
		</table>
		<hr class="hr-dash">
	</div>
	<div class="body">
		<table class="w-100">
			<thead>
				<tr>
					<td>Nama Barang</td>
					<td>Qty</td>
					<td>Harga</td>
					<td>Jumlah</td>
				</tr>
				<tr>
					<td colspan="4" class="line"></td>
				</tr>
			</thead>
			<tbody>
			@php
			$totalbrg=0;
			@endphp
				@foreach($transaksis as $transaksiy)
				{{ $totalbrg += $transaksiy->total_barang}}
				<tr>
					<td>{{ $transaksiy->nama_barang }}</td>
					<td>{{ $transaksiy->total_barang }}</td>
					<td>{{ format_uang($transaksiy->harga) }}</td>
					<td>{{ format_uang($transaksiy->total_barang * $transaksiy->harga) }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<hr class="hr-dash">
		<table class="w-100">
			<tr>
				<td class="left">Subtotal (Jumlah : {{ $totalbrg }})</td>
				<td class="right">{{ format_uang($transaksi->subtotal) }}</td>
			</tr>
			<tr>
				<td class="left">Diskon ({{ $transaksi->daftar_pelanggan->diskon->diskon }}%)</td>
				<td class="right">{{ format_uang($diskon) }}</td>
			</tr>
			<tr>
				<td class="left">Total</td>
				<td class="right">{{ format_uang($totalbayar) }}</td>
			</tr>
		</table>
		<hr class="hr-dash">
		<table class="w-100">
			<tr>
				<td class="left">Bayar</td>
				<td class="right">{{ format_uang($transaksi->bayar) }}</td>
			</tr>
			<tr>
				<td class="left">Kembali</td>
				<td class="right">{{ format_uang($transaksi->kembali) }}</td>
			</tr>
		</table>
		<hr class="hr-dash">
	</div>
	<div class="footer">
		<p class="center">Terima Kasih Telah Berkunjung</p>
	</div>
</body>
</html>