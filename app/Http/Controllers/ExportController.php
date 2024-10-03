<?php
namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\Exports\TasksExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\WithMultipleSheets; 

class ExportController extends Controller
{
    public function exportInExcel()
    {
        
        return Excel::download(new class implements WithMultipleSheets {
            
            public function sheets(): array
            {
                return [
                 
                    'users' => new UsersExport(), 
                    'tasks' => new TasksExport(), 
                ];
            }
        }, 'users and tasks sheet.xlsx'); 
    }
}
