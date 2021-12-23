<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function PDFOrden($id)
    {
        $orden = Order::find($id);

        $items = json_decode($orden->content);

        $pdf = PDF::loadview('admin.reportes.orden',compact('orden','items'));
    return $pdf->stream('Orden.pdf');

    }
}