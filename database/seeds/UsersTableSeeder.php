<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'picture' => '',
                'first_name' => 'Vinicius',
                'middle_name' => 'Medeiros',
                'last_name' => 'Siqueira',
                'email' => 'vinicius@viniciusmedeiros.com',
                'alt_email' => 'hello@viniciusmedeiros.com',
                'username' => 'vinicius.medeiros',
                'phone_number' => '9549950000',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OvubWPB1L7wqfWHLL0P85OoCr51HNFLYZcKeRft/fIpXq6k3SmnOW',
                'country_id' => 231,
                'description' => NULL,
                'address' => '2681 N Flamingo Rd., Plantation, FL 33323',
                'remember_token' => NULL,
                'created_at' => '2020-08-25 19:43:36',
                'updated_at' => '2020-08-25 19:43:36',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'picture' => '',
                'first_name' => 'System',
                'middle_name' => NULL,
                'last_name' => 'Administrator',
                'email' => 'admin@viniciusmedeiros.com',
                'alt_email' => 'sys@viniciusmedeiros.com',
                'username' => 'admin.sys',
                'phone_number' => '9549950000',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OvubWPB1L7wqfWHLL0P85OoCr51HNFLYZcKeRft/fIpXq6k3SmnOW',
                'country_id' => 231,
                'description' => 'System Admin Account',
                'address' => '2681 N Flamingo Rd., Plantation, FL 33323',
                'remember_token' => NULL,
                'created_at' => '2020-08-25 19:43:36',
                'updated_at' => '2020-08-25 19:43:36',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'picture' => '',
                'first_name' => 'Customer',
                'middle_name' => NULL,
                'last_name' => 'Care',
                'email' => 'customer@viniciusmedeiros.com',
                'alt_email' => 'care@viniciusmedeiros.com',
                'username' => 'customer.care',
                'phone_number' => '9549950000',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OvubWPB1L7wqfWHLL0P85OoCr51HNFLYZcKeRft/fIpXq6k3SmnOW',
                'country_id' => 231,
                'description' => 'Customer Care Account',
                'address' => '2681 N Flamingo Rd., Plantation, FL 33323',
                'remember_token' => NULL,
                'created_at' => '2020-08-25 19:43:36',
                'updated_at' => '2020-08-25 19:43:36',
                'deleted_at' => NULL,
            ),
        ));


    }
}
