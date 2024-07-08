<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $users = [
            ['John', 'Doe', 'john.doe@example.com', '01-01-1990'],
            ['Jane', 'Smith', 'jane.smith@example.com', '02-02-1985'],
            ['Michael', 'Johnson', 'michael.johnson@example.com', '03-03-1975'],
            ['Emily', 'Davis', 'emily.davis@example.com', '04-04-1982'],
            ['Daniel', 'Garcia', 'daniel.garcia@example.com', '05-05-1978'],
            ['Olivia', 'Martinez', 'olivia.martinez@example.com', '06-06-1995'],
            ['James', 'Rodriguez', 'james.rodriguez@example.com', '07-07-1989'],
            ['Sophia', 'Hernandez', 'sophia.hernandez@example.com', '08-08-1983'],
            ['Matthew', 'Lopez', 'matthew.lopez@example.com', '09-09-1992'],
            ['Isabella', 'Gonzalez', 'isabella.gonzalez@example.com', '10-10-1991'],
            ['David', 'Wilson', 'david.wilson@example.com', '11-11-1984'],
            ['Mia', 'Anderson', 'mia.anderson@example.com', '12-12-1988'],
            ['Christopher', 'Thomas', 'christopher.thomas@example.com', '13-01-1987'],
            ['Amelia', 'Taylor', 'amelia.taylor@example.com', '14-02-1981'],
            ['Joshua', 'Moore', 'joshua.moore@example.com', '15-03-1976'],
            ['Harper', 'Martin', 'harper.martin@example.com', '16-04-1986'],
            ['Andrew', 'Jackson', 'andrew.jackson@example.com', '17-05-1993'],
            ['Evelyn', 'Lee', 'evelyn.lee@example.com', '18-06-1980'],
            ['Joseph', 'Perez', 'joseph.perez@example.com', '19-07-1994'],
            ['Abigail', 'White', 'abigail.white@example.com', '20-08-1977'],
        ];

        foreach ($users as $user) {
            $firstName = $user[0];
            $lastName = $user[1];
            $email = $user[2];
            $dateOfBirth = $user[3];
            $profilePicture = 'ASSETS/userphotos/' . $firstName . '_' . $lastName . '.jpg';
            
            DB::table('users')->insert([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'password' => Hash::make('password'), // Dummy password, you can change it as needed
                'date_of_birth' => \Carbon\Carbon::createFromFormat('d-m-Y', $dateOfBirth),
                'profile_picture' => $profilePicture,
                'email_verified_at' => $faker->optional()->dateTime,
                'remember_token' => $faker->optional()->sha256,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
