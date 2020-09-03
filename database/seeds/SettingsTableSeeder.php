<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 3,
                'sms_notification' => 1,
                'email_notification' => 1,
                'monthly_notification' => 0,
                'created_at' => '2020-08-25 19:43:36',
                'updated_at' => '2020-08-25 19:43:36',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 2,
                'sms_notification' => 1,
                'email_notification' => 1,
                'monthly_notification' => 0,
                'created_at' => '2020-08-26 10:08:44',
                'updated_at' => '2020-08-26 10:08:44',
            ),
        ));


    }
}
