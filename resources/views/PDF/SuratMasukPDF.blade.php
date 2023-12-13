<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="https://keretaapikita.com/wp-content/uploads/2020/09/Logo-Baru-PT-KAI.jpg" style="height: 70px; width: 70px; float: right;">
    <br>

    <style>
        h1 {
            font-family: Calibri;
            font-size: 11px;
        }
    </style>
    <br>
    
    <h1> Nomor : {{$surat->SuratGenerate}}</h1>
    <h1> Sifat Surat : {{$surat->SuratSifat}}</h1>

    <h1> Nomor Surat Inputan : {{$surat->NomorSurat}}</h1>
    <h1> Tanggal Surat : {{$surat->SuratTanggal}}</h1>

    <h1> Surat Kepada : {{$surat->SuratTembusanInternal}}</h1>
    <h1> Perihal Surat : {{$surat->SuratPerihal}}</h1>
    <h1> Surat Status : {{$surat->SuratStatus}}</h1>
    <h1> Surat Tembusan : {{$surat->SuratTembusan}}</h1>


</body>
</html>