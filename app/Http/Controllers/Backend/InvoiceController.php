<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function InvoiceList(){
        return view('backend.pages.invoice.invoice');
    }
     public function InvoiceDetails(){
        return view('backend.pages.invoice.invoice_details');
    }
        public function InvoicePrint(){
        return view('backend.pages.invoice.print');
    }
}