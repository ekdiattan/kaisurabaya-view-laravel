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
            font-family: Calibri, sans-serif;
            font-size: 11px;
        }
    </style>

    <h1> Nomor : {{$surat->SuratGenerate}}</h1>
    <h1> Sifat Surat : {{$surat->SuratSifat}}</h1>
    <h1> Lampiran : {{$surat->SuratLampiran}}</h1>

    <h1>Yth. {{$surat->SuratKepada}}</h1>
    <h1>di</h1>
    <h1>Tempat</h1>
    <h1> Perihal : {{$surat->SuratPerihal}}</h1>

</body>
</html>