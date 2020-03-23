<?php

use App\User;
use App\Company;
use App\Project;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user) {
            factory(Company::class)->create(['user_id' => $user->id])->each(function ($company) {
                factory(Project::class)->create(['user_id' => $company->user_id, 'company_id' => $company->id]);
            });
        });
    }
}
