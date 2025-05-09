<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to employer',function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
    // Act and Assert
});

it('can have tags', function () {
    // AAA
    $job = Job::factory()->create();
    $job->tag('Frontend');
    
    expect($job->tags)->toHaveCount(1);
});
