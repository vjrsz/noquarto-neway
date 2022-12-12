<?php 

namespace App\Http\Controllers;

use App\Models\Scheduling;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class PdfviewController extends Controller
{
    public function view(Scheduling $scheduling)
    {
        $pdf = Pdf::loadView('pdfs.scheduling', compact('scheduling'))->setOptions(['defaultFont' => 'sans-serif']);
        //return $pdf->download('invoice.pdf');

        return $pdf->stream();
    }
}