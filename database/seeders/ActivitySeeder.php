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
            // Sport activities
            ['Jogging', 'A 30-minute jog at a moderate pace around the neighborhood.', 'sport'],
            ['Swimming', 'Lap swimming for 45 minutes, alternating between freestyle and breaststroke.', 'sport'],
            ['Cycling', 'A 1-hour bike ride on local trails, mixing flat terrain and hills.', 'sport'],
            ['Yoga', 'A 60-minute Vinyasa flow yoga session focusing on flexibility and balance.', 'sport'],
            ['Pilates', '45-minute mat Pilates class emphasizing core strength and posture.', 'sport'],
            ['Weightlifting', 'Full-body strength training routine using free weights and machines.', 'sport'],
            ['High-Intensity Interval Training (HIIT)', '20-minute HIIT workout alternating between intense bursts of activity and rest.', 'sport'],
            ['Rock Climbing', 'Indoor rock climbing session focusing on bouldering and top rope climbing.', 'sport'],
            ['Basketball', 'Basketball training and tips.', 'sport'],
            ['Tennis', 'Tennis drills and strategies.', 'sport'],
            ['Running', 'Running exercises and tips.', 'sport'],
            ['CrossFit', 'High-intensity CrossFit workout.', 'sport'],
            ['Boxing', 'Boxing workout and techniques.', 'sport'],
            ['Soccer', 'Soccer training drills.', 'sport'],
            ['Baseball', 'Baseball practice routines.', 'sport'],
            ['Volleyball', 'Volleyball drills and strategies.', 'sport'],
            ['Hiking', 'Hiking trails and tips.', 'sport'],
            ['Skateboarding', 'Skateboarding tricks and practice.', 'sport'],
            ['Skiing', 'Skiing techniques and exercises.', 'sport'],
            ['Snowboarding', 'Snowboarding skills and drills.', 'sport'],
            ['Surfing', 'Surfing practice and techniques.', 'sport'],
            ['Golf', 'Golf swing practice and tips.', 'sport'],
            ['Rowing', 'Rowing machine workout.', 'sport'],
            ['Kayaking', 'Kayaking techniques and exercises.', 'sport'],
            ['Dancing', 'Dance workout and routines.', 'sport'],
            ['Martial Arts', 'Martial arts training and techniques.', 'sport'],
            ['Horseback Riding', 'Horseback riding practice and tips.', 'sport'],
            ['Ice Skating', 'Ice skating drills and practice.', 'sport'],
            ['Rollerblading', 'Rollerblading exercises and techniques.', 'sport'],
            ['Fencing', 'Fencing practice and drills.', 'sport'],
            ['Archery', 'Archery training and techniques.', 'sport'],
            ['Badminton', 'Badminton drills and tips.', 'sport'],
            ['Cricket', 'Cricket practice routines.', 'sport'],
            ['Rugby', 'Rugby training drills.', 'sport'],
            ['Field Hockey', 'Field hockey practice and tips.', 'sport'],
            ['Lacrosse', 'Lacrosse drills and strategies.', 'sport'],
            ['Table Tennis', 'Table tennis practice and tips.', 'sport'],
            ['Squash', 'Squash training drills.', 'sport'],
            ['Water Polo', 'Water polo practice and techniques.', 'sport'],
            ['Diving', 'Diving drills and techniques.', 'sport'],
            ['Judo', 'Judo training and practice.', 'sport'],
            ['Karate', 'Karate techniques and drills.', 'sport'],
            ['Taekwondo', 'Taekwondo training and practice.', 'sport'],
            ['Wrestling', 'Wrestling drills and techniques.', 'sport'],
            ['Gymnastics', 'Gymnastics practice and routines.', 'sport'],
            ['Powerlifting', 'Powerlifting workout routines.', 'sport'],
            ['Strongman Training', 'Strongman exercises and drills.', 'sport'],
            ['Bodybuilding', 'Bodybuilding workout and routines.', 'sport'],
            ['Cheerleading', 'Cheerleading practice and routines.', 'sport'],
            ['Ballet', 'Ballet exercises and techniques.', 'sport'],
            // Coder activities
            ['Neck Tilt Stretch', 'Tilting the head side to side to stretch the neck.', 'coder', 'Head & Eyes'],
            ['Chin Tucks', 'Pulling the chin back to align the neck with the spine.', 'coder', 'Head & Eyes'],
            ['Neck Rotation', 'Rotating the head side to side to improve flexibility.', 'coder', 'Head & Eyes'],
            ['Upper Trap Stretch', 'Stretching the upper trapezius muscles.', 'coder', 'Upper Body'],
            ['Palming', 'Covering the eyes with palms to relax the eyes.', 'coder', 'Head & Eyes'],
            ['20-20-20 Rule', 'Every 20 minutes, look at something 20 feet away for 20 seconds.', 'coder', 'Head & Eyes'],
            ['Eye Rolling', 'Rolling the eyes in a circular motion.', 'coder', 'Head & Eyes'],
            ['Blinking Exercise', 'Blinking rapidly to moisten the eyes.', 'coder', 'Head & Eyes'],
            ['Focusing Exercise', 'Shifting focus from a near object to a far object.', 'coder', 'Head & Eyes'],
            ['Figure Eight Eye Exercise', 'Tracing a figure eight with the eyes.', 'coder', 'Head & Eyes'],
            ['Temple Massage', 'Massaging the temples to relieve headache tension.', 'coder', 'Head & Eyes'],
            ['Forehead Massage', 'Massaging the forehead to relieve tension.', 'coder', 'Head & Eyes'],
            ['Scalp Massage', 'Massaging the scalp to improve circulation.', 'coder', 'Head & Eyes'],
            ['Shoulder Shrugs', 'Raising and lowering the shoulders to relieve tension.', 'coder', 'Upper Body'],
            ['Scapular Retractions', 'Squeezing the shoulder blades together.', 'coder', 'Upper Body'],
            ['Chest Stretch', 'Stretching the chest muscles to counteract hunching.', 'coder', 'Upper Body'],
            ['Seated Cat-Cow Stretch', 'Alternating between arching and rounding the back.', 'coder', 'Upper Body'],
            ['Arm Circles', 'Rotating the arms in circles to loosen the shoulders.', 'coder', 'Upper Body'],
            ['Desk Push-Ups', 'Using the desk to do push-ups for upper body strength.', 'coder', 'Upper Body'],
            ['Wrist Flexor Stretch', 'Stretching the wrist by pulling the fingers back.', 'coder', 'Hand & Wrist'],
            ['Wrist Extensor Stretch', 'Stretching the top of the wrist by pulling the hand down.', 'coder', 'Hand & Wrist'],
            ['Finger Stretches', 'Stretching each finger individually.', 'coder', 'Hand & Wrist'],
            ['Thumb Stretch', 'Stretching the thumb away from the hand.', 'coder', 'Hand & Wrist'],
            ['Grip Strengthening', 'Squeezing a stress ball or grip strengthener.', 'coder', 'Hand & Wrist'],
            ['Wrist Circles', 'Rotating the wrists in circles.', 'coder', 'Hand & Wrist'],
            ['Palm Presses', 'Pressing the palms together to stretch the wrists.', 'coder', 'Hand & Wrist'],
            ['Finger Taps', 'Tapping each finger to the thumb repeatedly.', 'coder', 'Hand & Wrist'],
            ['Finger Splits', 'Spreading the fingers apart and bringing them back together.', 'coder', 'Hand & Wrist'],
            ['Wrist Flexion and Extension', 'Bending the wrist up and down.', 'coder', 'Hand & Wrist'],
            ['Toe Taps', 'Tapping the toes on the floor while seated.', 'coder', 'Lower Body & General'],
            ['Heel Raises', 'Raising the heels while seated or standing.', 'coder', 'Lower Body & General'],
            ['Ankle Circles', 'Rotating the ankles in circles.', 'coder', 'Lower Body & General'],
            ['Seated Marching', 'Marching in place while seated.', 'coder', 'Lower Body & General'],
            ['Leg Extensions', 'Extending the legs out straight while seated.', 'coder', 'Lower Body & General'],
            ['Standing Quad Stretch', 'Stretching the quadriceps while standing.', 'coder', 'Lower Body & General'],
            ['Hamstring Stretch', 'Stretching the hamstrings while seated or standing.', 'coder', 'Lower Body & General'],
            ['Calf Stretch', 'Stretching the calves against a wall.', 'coder', 'Lower Body & General'],
            ['Short Walks', 'Taking short walks during breaks to improve circulation.', 'coder', 'Lower Body & General'],
            ['Ergonomic Chair Adjustment', 'Adjusting the chair to support the lower back.', 'coder', 'Posture & Sitting'],
            ['Sit-Stand Desk Usage', 'Alternating between sitting and standing while working.', 'coder', 'Posture & Sitting'],
            ['Lumbar Support Pillow Use', 'Using a pillow to support the lower back.', 'coder', 'Posture & Sitting'],
            ['Proper Monitor Height Adjustment', 'Ensuring the monitor is at eye level.', 'coder', 'Posture & Sitting'],
            ['Footrest Usage', 'Using a footrest to keep feet flat on the floor.', 'coder', 'Posture & Sitting'],
            ['Correct Sitting Posture', 'Sitting with feet flat, knees at a right angle, and back straight.', 'coder', 'Posture & Sitting'],
            ['Chair Stretch', 'Stretching while seated, such as reaching arms overhead.', 'coder', 'Posture & Sitting'],
            ['Seated Torso Twist', 'Twisting the torso while seated to stretch the back.', 'coder', 'Posture & Sitting'],
            ['Pelvic Tilt Exercise', 'Tilting the pelvis back and forth while seated.', 'coder', 'Posture & Sitting'],
            ['Seated Leg Raises', 'Lifting one leg at a time while seated.', 'coder', 'Posture & Sitting'],
            ['Desk Yoga', 'Incorporating yoga poses while seated at the desk.', 'coder', 'Posture & Sitting'],
            ['Deep Breathing', 'Practicing deep breathing to reduce stress.', 'coder', 'Posture & Sitting'],
        ];

        foreach ($activities as $activity) {
            DB::table('activities')->insert([
                'name' => $activity[0],
                'description' => $activity[1],
                'activity_type' => $activity[2],
                'photo_url' => 'ASSETS/activities/' . $activity[0] . '.jpg',
                'body_zone' => isset($activity[3]) ? $activity[3] : null,
                'created_at' => now(),
                'updated_at' => now(),
                'is_favorite' => 0,
                'user_id' => 1,
            ]);
        }
    }
}
