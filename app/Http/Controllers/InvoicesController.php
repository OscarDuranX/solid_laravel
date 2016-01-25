<?php

namespace App\Http\Controllers;

use App\Invoices;
use App\Transformer\TransformerInvoice;
use Illuminate\Http\Request;
use App\Repositories\InvoiceRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InvoicesController extends Controller
{

    protected $repo;
    protected $transformInvoice;

    /**
     * InvoicesController constructor.
     * @param InvoiceRepository $invoiceRepo
     * @param TransformerInvoice $transformerInvoice
     */
    public function __construct(InvoiceRepository $repo, TransformerInvoice $transformerInvoice)
    {
        $this->repo = $repo;
        $this->transformInvoice = $transformerInvoice;
        $this->middleware('auth');
    }


    public function index()
    {

        $database_invoices = $this ->repo->getAllInvoicesFormDatabase();

        $invoices= $this->transformInvoice->transform($database_invoices);

        return view('invoices', compact('invoices'));

//        $data['invoices'] = $formatted_invoices;
//        return view('invoices');
    }




}
