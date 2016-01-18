<?php

namespace App\Http\Controllers;

use App\Invoices;
use Illuminate\Http\Request;
use App\Repositories\InvoiceRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InvoicesController extends Controller
{

    protected $invoiceRepo;

    /**
     * InvoicesController constructor.
     * @param $invoiceRepo
     */
    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepo = $invoiceRepo;
    }

    public function index()
    {
//        if ( !Auth::check() ) {
//
//            return "Forbidden!";
//        }


        $database_invoices = $this ->invoiceRepo->getAllInvoicesFormDatabase();

        $invoices= $this->transform($database_invoices);

        return view('invoices', compact('invoices'));

//        $data['invoices'] = $formatted_invoices;
//        return view('invoices');
    }



    private function transform($database_invoices)
    {
        return $database_invoices;
    }
}
