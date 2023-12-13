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
        @if($surat->SuratSifat == 1)
            <h1> Sifat Surat : Surat Rahasia</h1>
        @elseif($surat->SuratSifat == 2)
            <h1> Sifat Surat : Surat Penting</h1>
        @elseif($surat->SuratSifat == 3)
            <h1> Sifat Surat : Surat Rutin</h1>
        @elseif($surat->SuratSifat == 4)
            <h1> Sifat Surat : Surat Terbatas</h1>
        @endif
    <h1> Lampiran : {{$surat->SuratLampiran}}</h1>

    <br>
    <h1>Yth. {{$surat->SuratKepada}}</h1>
    <h1>{{$surat->SuratDivisi}}</h1>
    <h1>di</h1>
    <h1>Tempat</h1>
    <h1> Perihal : {{$surat->SuratPerihal}}</h1>
    <h1> Tembusan Eksternal : {{$surat->SuratTembusanEksternal}}</h1>
    @if($surat->SuratTembusanInternal == $user->where('UserProfileId', $surat->SuratTembusanInternal)->first()->UserProfileId)
        <h1> Tembusan Internal :{{$user->where('UserProfileId', $surat->SuratTembusanInternal)->first()->UserName}} </h1> 
    @endif
    <h1>{{$surat->SuratIsi}}</h1>


</body>
</html>