@extends('admin.layout.master')

@section('content')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="{{ route('storecloth') }}">
        @csrf
        <div class="form-group">
            <label>Invoice_id</label>
            <input type="text" class="form-control" name="invoice" placeholder="Invoice">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama">
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" placeholder="">
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="jumlah" placeholder="">
        </div>
        <div class="form-group">
            <label>Total Harga</label>
            <input type="text" class="form-control" name="total_harga" placeholder="Rp...">
        </div>
        <div class="form-group">
            <label class="col-sm-12">Metode Pembayaran</label>
            <div class="col-sm-12">
                <select id='tipe_bayar' class="form-control form-control-line" name="payments[]" multiple="multiple">
                    @foreach ($payments as $payment)
                    <option value="{{ $payment->id }}">{{ $payment->payment_name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <!-- <div class="form-group">
            <label>Deskripsi Artikel</label>
            <textarea class="form-control" name="deskripsi" rows="15"></textarea>
        </div> -->
        <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
            <div class="form-group">
                <label>Upload</label>
                <input type="submit" class="form-control btn btn-primary" value="Tambah">
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