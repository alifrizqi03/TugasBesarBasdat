@extends('admin.layout.master3')

@section('content3')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="{{ route('updatecloth', $id) }}">
        @csrf
        @method('PUT')
        <br>
        <br>
        <div class="form-group">
            <label>Invoice_id</label>
            {{$id}}
            <input type="text" value = "{{$order->Invoice_id}}" class="form-control" name="invoice" placeholder="hdxl1212">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" value = "{{$order->nama}}" class="form-control" name="nama" placeholder="samidi">
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date"  value = "{{$order->tanggal}}" class="form-control" name="tanggal" placeholder="03/04/2002">
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number"  value = "{{$order->jumlah}}" class="form-control" name="jumlah" placeholder="2">
        </div>
        <div class="form-group">
            <label>Total Harga</label>
            <input type="text"  value = "{{$order->total_harga}}" class="form-control" name="total_harga" placeholder="Rp250.000">
        </div>
        <div class="form-group">
            <label class="col-sm-12">Metode Pembayaran</label>
            <div class="col-sm-12">
                <select id='tipe_bayar' class="form-control form-control-line" name="payments[]" multiple="multiple">
                    @foreach ($payments as $payment)
                    <option value="{{ $payment->id }}"@foreach($order->payments as $order_payment){{$payment-> id == $order_payment->id ? 'selected': ''}}   @endforeach>{{ $payment->payment_name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
            <div class="form-group">
                <label>Save</label>
                <input type="submit" class="form-control btn btn-primary" value="Update">
            </div>
        </div>
</div>

</form>
@endsection
@section('tambah-script')
<script>
    $(document).ready(function() {
        $('#tipe_bayar').select2();
    });
</script>
@endsection