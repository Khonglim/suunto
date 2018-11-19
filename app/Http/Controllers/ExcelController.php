<?php

namespace App\Http\Controllers;

use App\Exports\StoreExport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExcelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function export() 
    {
        return Excel::download(new StoreExport(), 'store.xlsx');
    }
}
