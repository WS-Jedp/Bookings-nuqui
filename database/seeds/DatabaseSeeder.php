<?php

use App\Activity;
use App\activity_has_category;
use App\Activity_state;
use App\Booking;
use App\Booking_has_plan;
use App\Booking_state;
use App\Cabin;
use App\Cabin_state;
use App\Category;
use App\Group;
use App\Group_has_person;
use App\Group_state;
use App\Person;
use App\Plan;
use App\Plan_has_activity;
use App\State_user;
use App\User;
use App\User_has_activity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\Category::class, 10)->create();

        factory(App\Activity_state::class, 5)->create();
        factory(App\Activity::class, 10)->create();
        factory(App\activity_has_category::class, 10)->create();

        App\Person::create([
            'name' => 'Juan Esteban',
            'last_name' => 'Deossa Pertuz',
            'birthdate' => new DateTime('2001-02-05'),
            'state' => 1
        ]);
        factory(App\Person::class, 10)->create();

        factory(App\Role::class, 10)->create();
        
        factory(App\State_user::class, 10)->create();
        App\User::create([
            'name' => 'Juanes',
            'email' => 'juanes@mail.com',
            'password' => bcrypt('123456789'),
            'identification_number' => 1158453,
            'account_number' => 5555555,
            'id_person' => 1,
            'id_role' => 1,
            'id_state' => 1,
        ]);
        factory(App\User::class, 10)->create();
        factory(App\User_has_activity::class, 10)->create();

        factory(App\Group_state::class, 10)->create();
        factory(App\Group::class, 10)->create();
        factory(App\Group_has_person::class, 10)->create();


        
        
        factory(App\Plan::class, 10)->create();
        factory(App\Plan_has_activity::class, 10)->create();

        factory(App\Cabin_state::class, 5)->create();
        factory(App\Cabin::class, 5)->create();

    

        factory(App\Booking_state::class, 10)->create();
        factory(App\Booking::class, 10)->create();
        factory(App\Booking_has_plan::class, 10)->create();





    }
}
