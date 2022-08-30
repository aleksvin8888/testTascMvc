<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'title' => 'CEO'
            ],
            [
                'title' => 'Deputy General Director'
            ],
            [
                'title' => 'Emergency Management Department'
            ],
            [
                'title' => 'Emergency Response Department'
            ],
            [
                'title' => 'Search service'
            ],
            [
                'title' => 'Volunteer development sector'
            ],
            [
                'title' => 'Department of First Aid'
            ],
            [
                'title' => 'Fundraiser'
            ],
            [
                'title' => 'Information and Public Relations Department'
            ],
            [
                'title' => 'Personnel development sector'
            ],
            [
                'title' => 'Legal sector'
            ],
            [
                'title' => 'Department of Cooperation and International Relations'
            ],
            [
                'title' => 'Logistics and Procurement Department'
            ],
            [
                'title' => 'Department of Health and Welfare'
            ],
            [
                'title' => 'Department of psychosocial support'
            ],
            [
                'title' => 'Information center'
            ],
        ];



        foreach($departments as $department) {
            Department::create($department);
        }
    }
}
