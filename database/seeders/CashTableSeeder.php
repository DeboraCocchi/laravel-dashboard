<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cash;

class CashTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=file_get_contents('https://api.sampleapis.com/fakebank/accounts');
        $data=json_decode($data);
        // dd($data);
        foreach($data as $cash_item){
            $new_cashflow=new Cash();
            $new_cashflow->transactionDate=$cash_item->transactionDate;
            $new_cashflow->description=$cash_item->description;
            $new_cashflow->category=$cash_item->category;
            $new_cashflow->debit=$cash_item->debit;
            $new_cashflow->credit=$cash_item->credit;
            $new_cashflow->save();

        }

    }
}
