@extends('admin.layout.master2')

@section('content2')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<h4 class="page-title">tampil data pemesanan</h4>
			<div class="page-category"></div>
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">data pesanan</div>
						</div>
						<table border="1">
							<tr>
								<td>number</td>
								<td>invoice_id</td>
								<td>Nama</td>
								<td>Tanggal</td>
								<td>Jumlah</td>
								<td>Total Harga</td>
								<td>Tipe Bayar</td>
								<td>Aksi</td>
							</tr>

							@foreach ($orders as $order)
							<tr>
								<th>{{ $loop->index + 1 }}</th>
								<th>{{ $order->Invoice_id }}</th>
								<th>{{ $order->nama }}</th>
								<th>{{ $order->tanggal }}</th>
								<th>{{ $order->jumlah }}</th>
								<th>{{ $order->total_harga }}</th>
								<!-- <th>{{ $order->tipe_bayar }}</th> -->
								<th>
									@foreach ($order->payments as $payment)
									{{ $payment->payment_name }}
									@endforeach
								</th>
								<th>
									<!-- <a href="{{ route('editcloth', $order->id) }}">Edit</a>
									|
									<a href="{{ route('deletecloth', $order->id) }}">Hapus</a> -->
									<a href="{{ route('editcloth', $order->id) }}"><button>Edit</button></a>
									<form action="{{ route('deletecloth', $order->id) }}" method="POST">
										{{ @csrf_field() }}
										@method ('DELETE')
										{{-- <a type="submit" href="#">Delete</a> --}}
										<input type="submit" value="delete">
									</form>
								</th>

							</tr>
							@endforeach
						</table>
						<div class="card-body">
							<div class="chart-container">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection