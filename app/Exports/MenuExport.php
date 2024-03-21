<?php

namespace App\Exports;

use App\Models\Menu;
use Maatwebsite\Excel\Concerns\FromCollection;

class MenuExport implements FromCollection
{
    /**
     * @ return \Illuminate\Support\Colletion
     */
    public function collection()
    {
        return Menu::all();
    }
}