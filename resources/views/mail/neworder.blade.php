<!DOCTYPE html>
<html>
<head>
    <title>Terimakasih - info@jinggacloud.com</title>
</head>
<body>
<p>Terimakasih telah memesan project website {{ $order->Product->title }}, berikut rincianya :</p>

<table cellpadding="5" cellspacing="0">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $order->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{ $order->email }}</td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td>:</td>
        <td>{{ $order->phone }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{ $order->address }}</td>
    </tr>
    <tr>
        <td>Waktu</td>
        <td>:</td>
        <td>{{ $order->created_at }}</td>
    </tr>
    <tr>
        <td>Project</td>
        <td>:</td>
        <td>{{ $order->Product->title }}</td>
    </tr>
    <tr>
        <td valign="top">Deskripsi</td>
        <td valign="top">:</td>
        <td>{!! $order->Product->fitur !!}</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td>
            <?php if($order->Product->priceup > 0){
                    $price = 'Mulai dari Rp '.number_format($order->Product->price,0,',','.');
                }else{
                    $price = 'Rp '.number_format($order->Product->price,0,',','.');
                }?>
                {{ $price }}
        </td>
    </tr>
</table>

<p>Anda akan kami kontak secepatnya.<br/>
<br/>
Salam,<br/>
{{ config('app.name') }}</p>
</body>
</html>
