<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <img src="https://keretaapikita.com/wp-content/uploads/2020/09/Logo-Baru-PT-KAI.jpg" style="height: 70px; width: 70px; float: right;">

    <style>
        h1 
        {
            font-family: Calibri;
            font-size: 11px;
        }
    </style>
    <br>
    <br>
    <br>
    <br>
    <h1> Nomor : {{$surat->SuratGenerate}}</h1>
        @if($surat->JenisSurat == 1)
            <h1> Sifat Surat : Surat Rahasia</h1>
        @elseif($surat->JenisSurat == 2)
            <h1> Sifat Surat : Surat Penting</h1>
        @elseif($surat->JenisSurat == 3)
            <h1> Sifat Surat : Surat Rutin</h1>
        @elseif($surat->JenisSurat == 4)
            <h1> Sifat Surat : Surat Terbatas</h1>
        @endif
    
    <br>
    <br>
    <h1>Yth. {{$surat->DiteruskanKepada}}</h1>
    <h1>di</h1>
    <h1>Tempat</h1>
    <h1> Perihal : {{$surat->SuratPerihal}}</h1>
    

</body>
</html>