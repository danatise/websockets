<?php

namespace App\Exports;

use App\Models\User;




use App\Models\School;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUsers implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */



    public function __construct( $school )
    {
        //
        
        $this->school = $school;
    

    }


    public function collection()
    {
        return User::where('school_id', $this->school->school_id)->orderBy('fname','ASC')->orderBy('role','ASC')->get();
    }
}
