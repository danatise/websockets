<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\School;
use App\Exports\ExportUsers;
use App\Imports\ImportUsers;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    //

    public function importExport()
    {
       return view('import');
    }

    public function export(Request $request)
    {
        $school = School::find($request->school_id);

        return Excel::download(new ExportUsers($school), 'users.xlsx');
    }

    public function import(Request $request) 
    {
        $school = School::find($request->school_id);
        
        Excel::import(new ImportUsers($school), request()->file('file'));
            
        return back();
    }
}
