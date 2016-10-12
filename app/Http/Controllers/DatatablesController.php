<?php

/**
 * Code responsible for Datatables
 * */
namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('admin.completedtrans');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Transaction::query())->make(true);
    }
}
