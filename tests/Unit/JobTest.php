<?php
use App\Models\Employer;
use App\Models\Job;

it('Belongs to an employer', function () { // can use 'test' instead of 'it' , will work the same

    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);


    expect($job->employer->is($employer))->toBeTrue();// toBeFalse return failed test case 
});
