@extends('master')
@section("content")
<div class="container ordernow-all">
    <div class="col-sm-12">
        <br>
        <h1>Pembelian</h1>
        <br><br>
        <table class="table">
            <tbody>
                <tr>
                    <td>Harga</td>
                    <td>Rp {{ number_format($total, 0, ',', '.') }},00</td>
                </tr>
                <tr>
                    <td>Biaya Pajak</td>
                    <td>Rp 0</td>
                </tr>
                <tr>
                    <td>Biaya Pengiriman </td>
                    <td>Rp 10.000,00</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>Rp {{ number_format($total + 10000, 0, ',', '.') }},00</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                    <br><br>
                    <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                    <br><br><br>
                </div>
                <div class="form-group payment-method">
                    @csrf
                  <h3 for="pwd">Payment Method</h3> <br> 
                  <input type="radio" value="Gopay" name="payment"> <span>GoPay</span>
                  <img src="https://pict-a.sindonews.net/dyn/850/pena/news/2021/04/20/207/402874/hadirkan-fitur-baru-investasi-emas-bisa-lewat-gopay-xuz.png" alt="">
                  <br> <br>
                  <input type="radio" value="Dana" name="payment"> <span>Dana</span>
                  <img src="https://www.linkqu.id/wp-content/uploads/2021/07/filedownload.png" alt="">
                  <br><br>
                  <input type="radio" value="QRIS" name="payment"> <span>QRIS</span>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/QRIS_logo.svg/2560px-QRIS_logo.svg.png" alt="">
                  <br> <br>
                </div>
                <br><br>
                <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
        </div>
    </div>
</div>
@endsection