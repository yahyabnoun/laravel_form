<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

use App\Models\StudentInterest;
use Illuminate\Support\Facades\DB;


class StudentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
            return DB::table('students')
            ->select('students.id' , 'students.fullname' , 'students.email' ,
            'students.teaching' , 'students.subjectTeaching','students.usedChatGPT' ,'students.aiTools', 'students.scheduling', 'students.trainingOnChatGPT',
            DB::raw("group_concat(name_interest SEPARATOR ' , ') as name_interest"))

            ->join('interest_students','interest_students.interest_studentid','=','students.id')

            ->join('interests','interests.id','=','interest_students.interest_id')

            ->where("interest_students.confirmed", "=", 1)

            // ->select('students.id', 'students.fullname', 'students.email', 'students.teaching', 'students.subjectTeaching', 'students.usedChatGPT', 'students.aiTools', 'students.scheduling', 'students.trainingOnChatGPT', 'interests.name_interest', 'interest_students.confirmed')
            ->groupBy('students.id' , 'students.fullname' , 'students.email' ,
              'students.teaching' , 'students.subjectTeaching','students.usedChatGPT' ,'students.aiTools' ,'students.scheduling', 'students.trainingOnChatGPT')
            ->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Full Name',
            'Email',
            'question 1',
            'question 2',
            'question 3',
            'question 4',
            'question 5',
            'question 6',
            'question 7',
            // 'Teaching',
            // 'Subject Teaching',
            // 'usedChatGPT',
            // 'aiTools',
            // 'scheduling',
            // 'trainingOnChatGPT',
            // 'name_interest',
            // 'confirmed'
            // ... add other columns
        ];
    }

}
