<?php

namespace App\Http\Controllers;


use App\Models\order;
use App\Models\payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = order::with('payments')->get();
        return view('admin.dashboard', ['orders' => $orders]);
    }

    public function create()
    {
        $payments = payment::all();
        return view('admin.create', ['payments' => $payments]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'invoice' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'payments' => 'required',
        ]);

        $order = new order();
        $order->Invoice_id = request('invoice');
        $order->nama = request('nama');
        $order->tanggal = request('tanggal');
        $order->jumlah = request('jumlah');
        $order->total_harga = request('total_harga');
        $order->tipe_bayar = '';
        $order->save();

        foreach (request('payments') as $payment) {
            $order->payments()->attach($payment);
        }
        return redirect(route('indexcloth'));
    }

    public function edit($id)
    {
        $order = order::find($id);
        $payments = payment::all();
        return view('admin.edit', compact('order', 'id', 'payments'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'invoice' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'payments' => 'required',
        ]);
        $order = order::find($id);
        $order->Invoice_id = request('invoice');
        $order->nama = request('nama');
        $order->tanggal = request('tanggal');
        $order->jumlah = request('jumlah');
        $order->total_harga = request('total_harga');
        $order->tipe_bayar = '';
        $order->save();

        if (empty(request('payments'))) {
            $order->payments()->detach();
        } else {
            $order->payments()->sync(request('payments'));
        }

        return redirect(route('editcloth', $id));
    }

    public function delete($id){
        $obat = order::find($id);
        $obat->payments()->detach();
        $obat->delete();

        return redirect(route('indexcloth'));
    }
}
