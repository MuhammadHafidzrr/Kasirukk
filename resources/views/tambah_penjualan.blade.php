<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/tambah_penjualan.css')}}">
    <title>Tambah Penjualan</title>
</head>

<body>
    @include('layouts.sidebar')
    <div class="container">
        <h1 class="text-center">Tambah Penjualan</h1>
        <div class="row" id="bungkus_pertama" >
            <form class="col" id="input_produk" action="proses_tambah_penjualan" method="post" enctype="multipart/form-data">
                @method('post')
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Data Produk</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="nama_produk">
                        @foreach($produk as $detail_penjualan)
                        <option value="{{ $detail_penjualan->produk_id }}">{{$detail_penjualan->nama_produk}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Data Harga</label>
                    <select name="nama_produk" class="form-control" id="exampleFormControlSelect1">
                        @foreach($produk as $detail_penjualan)
                        <option  value="{{ $detail_penjualan->produk_id }}">{{$detail_penjualan->harga}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Produk</label>
                    <input type="number" name="subtotal" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <a href="tambah_penjualan" class="btn btn-success">Tambah</a>
            </form>
            <table class="table col">
                <thead>
                    <tr>
                        <th scope="col" class="table-warning">Nama Produk</th>
                        <th scope="col" class="table-warning">Harga</th>
                        <th scope="col" class="table-warning">Quantity</th>
                        <th scope="col" class="table-warning">Subtotal</th>
                        <th scope="col" class="table-warning">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> @foreach($produk as $detail_penjualan)
                        <td>{{$detail_penjualan->produk_id}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-secondary">
                            <a href="" class="btn btn-danger">hapus</a>
                        </td>
                    </tr> @endforeach
                </tbody>
            </table>
        </div><br>
        <div class="container">
            <form class="row" id="input_pelanggan" action="tambah_penjualan" method="post" enctype="multipart/form-data">
                @method('post')
                @csrf
                <div class="form-group col">
                    <label for="exampleFormControlSelect1">Nama Pelanggan</label>
                    <select name="nama_pelanggan" class="form-control" id="exampleFormControlSelect1">
                    @foreach($pelanggan as $penjualan)
                        <option  value="{{ $detail_penjualan->produk_id }}">{{$penjualan ->nama_pelanggan}}</option>
                    @endforeach
                    </select>
                </div>
                    <h1 class="col" id="total">Total Harga : {{''}}</h1>
                    <a href="#" id="submit_pelanggan" class="btn btn-primary col">order</a>
            </form>

        </div>
    </div>
</body>

</html>