<?php

namespace App\Imports;

use App\Result;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentResult implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Result([
            'student_id'=> $row[0],
            'name'      => $row[1],
            'class'     => $row[2],
            'semester'  => $row[3],
            'bangla'    => $row[4],
            'english'   => $row[5],
            'math'      => $row[6],
            'physics'   => $row[7],
            'biology'   => $row[8],
            'chemistry' => $row[9]
        ]);
    }
}
