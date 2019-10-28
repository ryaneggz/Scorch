<?php

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
        // $this->call(UsersTableSeeder::class);

        $x = new App\User;
        $x->name = "John";
        $x->email = "John@test.com";
        $x->password = "changeme123";
        $x->save();

        $x = new App\User;
        $x->name = "Harry";
        $x->email = "Harry@test.com";
        $x->password = "changeme123";
        $x->save();

        $x = new App\User;
        $x->name = "Albert";
        $x->email = "Albert@test.com";
        $x->password = "changeme123";
        $x->save();

        $x = new App\Owner;
        $x->user_id = "1";
        $x->save();

        $x = new App\Ticket;
        $x->title = "This is Title ONE";
        $x->body = "This is BODY of Title ONE";
        $x->save();
    }
}
