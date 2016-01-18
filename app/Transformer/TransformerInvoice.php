<?php

namespace App\Transformer;
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 18/01/16
 * Time: 18:13
 */
/**
 * Class TransformerInvoice
 * @package App\Transformer
 */
class TransformerInvoice
{
    /**
     * @param $database_invoices
     * @return mixed
     */
    public function transform($database_invoices)
    {
        return $database_invoices;
    }

}