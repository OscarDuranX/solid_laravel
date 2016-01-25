<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 18/01/16
 * Time: 18:01
 */
use App\Invoices;


/**
 * Class InvoiceRepository
 * @package App\Repositories
 */
class InvoiceRepository extends Repository
{


    function model()
    {
       return \App\Invoices::class;
    }
}