<?php

namespace App\Imports;

use App\Models\User;
use App\Models\School;



use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\Importable;
//use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\ToModel;

class ImportUsers implements ToModel,  WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    use Importable;

    public function __construct( $school )
    {
        //
        
        $this->school = $school;
    

    }

    public function model(array $row)
    {
        
        return new User([
            //
               

            
                'fname' => $row['fname'],
                'lname' => $row['lname'],
                'email'=> strtolower($row['fname']).strtolower($row['lname']).$this->school->email_suffix,
                'password'=> $row['role']=='student' ? $this->school->password_root.rand(91,999) : $this->school->teacher_password_root.rand(90,900) ,
                'role'=> $row['role'],
                'school_id'=> $this->school->school_id,
                'plan_id'=> 4,
                'is_active'=> 1,
                'phone'=> '00000000',
                'username'=> $this->school->username_prefix.strtolower( substr($row['fname'],0,3)).strtolower(substr($row['lname'],0,3)).rand(10,99),
            
            
        ]);
    }
}
