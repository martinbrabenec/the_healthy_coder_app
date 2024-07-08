<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            [1, 'Jogging', 'A 30-minute jog at a moderate pace around the neighborhood.', true, 'sport'],
            [2, 'Swimming', 'Lap swimming for 45 minutes, alternating between freestyle and breaststroke.', true, 'sport'],
            [3, 'Cycling', 'A 1-hour bike ride on local trails, mixing flat terrain and hills.', false, 'sport'],
            [4, 'Yoga', 'A 60-minute Vinyasa flow yoga session focusing on flexibility and balance.', true, 'sport'],
            [5, 'Pilates', '45-minute mat Pilates class emphasizing core strength and posture.', false, 'sport'],
            [1, 'Weightlifting', 'Full-body strength training routine using free weights and machines.', true, 'sport'],
            [2, 'High-Intensity Interval Training (HIIT)', '20-minute HIIT workout alternating between intense bursts of exercise and short recovery periods.', true, 'sport'],
            [3, 'Rock Climbing', 'Indoor rock climbing session focusing on bouldering and top-rope climbing.', false, 'sport'],
            [4, 'Hiking', 'A 3-hour hike on moderate trails with elevation gains.', true, 'sport'],
            [5, 'Dance Classes', '1-hour dance class learning salsa or hip-hop routines.', false, 'sport'],
            [1, 'Kickboxing', '45-minute kickboxing class combining cardio and martial arts techniques.', true, 'sport'],
            [2, 'Tennis', 'Playing singles tennis for 1 hour, focusing on serves and volleys.', false, 'sport'],
            [3, 'Basketball', 'Full-court basketball game or practice drills for 1 hour.', true, 'sport'],
            [4, 'Soccer', '90-minute soccer practice or friendly match.', false, 'sport'],
            [5, 'Volleyball', 'Beach volleyball game or indoor court practice for 1 hour.', true, 'sport'],
            [1, 'Rowing', '30-minute session on a rowing machine, focusing on proper form and endurance.', false, 'sport'],
            [2, 'Tai Chi', '45-minute Tai Chi practice emphasizing slow, flowing movements and breathing.', true, 'sport'],
            [3, 'Zumba', '1-hour Zumba class combining Latin and international music with dance moves.', false, 'sport'],
            [4, 'CrossFit', 'Intense 1-hour CrossFit workout of the day (WOD).', true, 'sport'],
            [5, 'Barre Workout', '45-minute barre class focusing on small, isometric movements.', false, 'sport'],
            [1, 'Spinning', '45-minute high-intensity indoor cycling class.', true, 'sport'],
            [2, 'Martial Arts', '1-hour karate or judo training session.', false, 'sport'],
            [3, 'Skateboarding', 'Practicing skateboarding tricks and rides for 1 hour at a local skate park.', true, 'sport'],
            [4, 'Stand-Up Paddleboarding', '1-hour SUP session on a calm lake or ocean.', false, 'sport'],
            [5, 'Surfing', '2-hour surfing session catching waves and practicing techniques.', true, 'sport'],
            [1, 'Rollerblading', '45-minute rollerblading session in a park or on a trail.', false, 'sport'],
            [2, 'Kayaking', '2-hour kayaking trip on a nearby river or lake.', true, 'sport'],
            [3, 'Canoeing', '3-hour canoeing adventure exploring local waterways.', false, 'sport'],
            [4, 'Parkour', '1-hour parkour training session focusing on efficient movement through urban environments.', true, 'sport'],
            [5, 'Trampoline Workout', '30-minute high-intensity trampoline workout.', false, 'sport'],
            [1, 'Pole Fitness', '1-hour pole fitness class combining strength training and dance.', true, 'sport'],
            [2, 'Aerial Yoga', '75-minute aerial yoga class using silk hammocks for supported poses.', false, 'sport'],
            [3, 'Horseback Riding', '1-hour horseback riding lesson or trail ride.', true, 'sport'],
            [4, 'Archery', '45-minute archery practice session focusing on accuracy and technique.', false, 'sport'],
            [5, 'Fencing', '1-hour fencing class learning footwork, attacks, and parries.', true, 'sport'],
            [1, 'Golf', '18 holes of golf or 1-hour driving range practice.', false, 'sport'],
            [2, 'Badminton', '1-hour badminton match or practice session.', true, 'sport'],
            [3, 'Table Tennis', '45-minute table tennis game or drill practice.', false, 'sport'],
            [4, 'Squash', '1-hour squash match or solo practice.', true, 'sport'],
            [5, 'Beach Volleyball', '2-hour beach volleyball game or practice.', false, 'sport'],
            [1, 'Ultimate Frisbee', '90-minute Ultimate Frisbee game or team practice.', true, 'sport'],
            [2, 'Disc Golf', '18-hole disc golf round at a local course.', false, 'sport'],
            [3, 'Indoor Rock Climbing', '2-hour indoor rock climbing session with bouldering and top-rope climbing.', true, 'sport'],
            [4, 'Bouldering', '1-hour outdoor bouldering session on natural rock formations.', false, 'sport'],
            [5, 'Slacklining', '30-minute slacklining practice focusing on balance and core strength.', true, 'sport'],
            [1, 'Jump Rope', '20-minute high-intensity jump rope workout.', false, 'sport'],
            [2, 'Stair Climbing', '30-minute stair climbing workout in a tall building or stadium.', true, 'sport'],
            [3, 'Power Walking', '45-minute brisk walking session with arm movements for added intensity.', false, 'sport'],
            [4, 'Elliptical Training', '45-minute cardio workout on an elliptical machine.', true, 'sport'],
            [5, 'Aqua Aerobics', '1-hour water aerobics class in a pool.', false, 'sport'],
        ];

        foreach ($activities as $activity) {
            DB::table('activities')->insert([
                'user_id' => $activity[0],
                'name' => $activity[1],
                'description' => $activity[2],
                'is_public' => $activity[3],
                'activity_type' => $activity[4],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
