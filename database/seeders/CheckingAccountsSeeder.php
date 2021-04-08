<?php

namespace Database\Seeders;

use App\Models\CheckingAccounts;
use Illuminate\Database\Seeder;

class CheckingAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=1; $i < 10; $i++) { 
            
            $checkingAccount = new CheckingAccounts();

            $checkingAccount->account_name = $this->getRandomBank();
            $checkingAccount->agency = rand(1000, 9999);
            $checkingAccount->account_number = rand(100000000, 999999999);
            $checkingAccount->balance = $this->getRandomFloat();
            
            $checkingAccount->save();
        }
        
        
    }

    // retorna um nome de banco aleatório
    private function getRandomBank() 
    {
        $account_names = [
            'Bradesco',
            'Santander',
            'NuBank',
            'Banco do Brasil',
            'Original',
            'Itaú'
        ];
        
        $random_key = array_rand($account_names, 1);
        $value = $account_names[$random_key];
        
        return $value;
    }

    // Gera valor aleatório para o saldo
    private function getRandomFloat()
    {
        $note_value  = rand(0, 9999);
        $cents_value  = rand(0, 99);
        $value = (float)$note_value  . '.' . $cents_value;

        return $value;
    }
}
