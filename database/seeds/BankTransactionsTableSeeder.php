<?php

use Illuminate\Database\Seeder;

class BankTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('bank_transactions')->delete();

        \DB::table('bank_transactions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'transaction_code' => 'LMLSDW002',
                'narration' => 'Test Credit',
                'amount' => 190.0,
                'user_id' => 1,
                'bank_account_id' => 1,
                'type' => 'credit',
                'status' => 'successful',
                'created_at' => '2020-08-25 08:19:21',
                'updated_at' => '2020-08-25 08:19:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'transaction_code' => 'LMLSDW0W323',
                'narration' => 'Debit',
                'amount' => 20.0,
                'user_id' => 1,
                'bank_account_id' => 1,
                'type' => 'debit',
                'status' => 'pending',
                'created_at' => '2020-08-25 04:07:12',
                'updated_at' => '2020-08-25 04:07:12',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'transaction_code' => 'LMLSDW013323',
                'narration' => 'Test Credit',
                'amount' => 10.0,
                'user_id' => 1,
                'bank_account_id' => 1,
                'type' => 'credit',
                'status' => 'failed',
                'created_at' => '2020-08-25 08:19:21',
                'updated_at' => '2020-08-25 08:19:21',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'transaction_code' => 'LMLSDW0WE02',
                'narration' => 'Debit',
                'amount' => 10.0,
                'user_id' => 1,
                'bank_account_id' => 1,
                'type' => 'debit',
                'status' => 'successful',
                'created_at' => '2020-08-25 04:07:12',
                'updated_at' => '2020-08-25 04:07:12',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'transaction_code' => 'LMLSDW023323',
                'narration' => 'Test Credit',
                'amount' => 118.0,
                'user_id' => 1,
                'bank_account_id' => 2,
                'type' => 'credit',
                'status' => 'successful',
                'created_at' => '2020-08-25 08:19:21',
                'updated_at' => '2020-08-25 08:19:21',
                'deleted_at' => NULL,
            ),
        ));


    }
}
