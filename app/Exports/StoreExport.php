<?php

namespace App\Exports;

use App\Deale;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
class StoreExport implements FromCollection, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Deale::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'category',
            'province',
            'bts',
            'BTS search',
            'Near MRT',
            'MRT search',
            'Near Shopping Mall',
            'shopping_mall_search',
            'road',
            'store_name',
            'address',
            'store_hours',
            'facebook',
            'contact_number',
            'map',
            'directions',
            'picture_1',
            'status',
            'created_at',
            'updated_at',

        ];
    }
}
