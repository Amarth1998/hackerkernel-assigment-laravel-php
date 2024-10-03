<?php

namespace App\Exports;
use App\Models\Task;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TasksExport implements FromCollection, WithHeadings
{

    public function collection()
    {
        return Task::with('user')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'User_ID',
            'User Name',
            'Task Details',
            'Task Type',
            'Created At',
            'Updated At',
        ];
    }
}
