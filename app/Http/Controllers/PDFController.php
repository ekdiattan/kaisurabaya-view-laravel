<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class PDFController extends Controller
{
    
    public function exportPdf(int $id)
    {
        $data = SuratMasuk::find($id);

        $dompdf = new Dompdf();
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf->setOptions($options);

        $html = '<h1>Isi dari PDF</h1>'; // Atur konten PDF di sini, sesuai kebutuhan dengan menggunakan data yang ada
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();
        return $dompdf->stream("file_name.pdf");
    }
}
