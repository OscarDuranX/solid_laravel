<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoicesController extends Controller
{
    public function index()
    {
        if ( !Auth::check() ) {

            return "Forbidden";
        }
        
        $invoices = $this->getAllInvoicesFormDatabase();

        return view('invoices');
    }

    public function getAllInvoicesFormDatabase()
    {
        
    }
}
