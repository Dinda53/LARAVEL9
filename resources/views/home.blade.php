<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>DOCUMENT</title>
</head>
<body>
    <h2> Adinda Widia Choirunnisa</h2>
    <h3>Nama saya Adinda saya bersekolah di SMKN 1 SAYUNG saya duduk dikelas XII PPLG 1  alamat rumah saya di Sriwulan RT06 RW 01</h3>
    <h3>{{$nama}}, {{$kelas}}</h3>

    @if($nama=='admin')
    <a href ="">Anda Bukan ADMIN dan USER</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman USER</a>
    @else
    <h2> Anda Bukan ADMIN dan USER </h2>
    @endif
@foreach ($buah as $nama)
  {{ $nama }}</br>

@endforeach



</body>
</html>