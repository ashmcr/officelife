<?php

namespace Tests\Unit\Models\Company;

use Tests\TestCase;
use App\Models\Company\ProjectIssue;
use App\Models\Company\ProjectLabel;
use App\Models\Company\ProjectSprint;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectIssueTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_belongs_to_a_project(): void
    {
        $issue = ProjectIssue::factory()->create();
        $this->assertTrue($issue->project()->exists());
    }

    /** @test */
    public function it_belongs_to_a_reporter(): void
    {
        $issue = ProjectIssue::factory()->create();
        $this->assertTrue($issue->reporter()->exists());
    }

    /** @test */
    public function it_belongs_to_a_issue_type(): void
    {
        $issue = ProjectIssue::factory()->create();
        $this->assertTrue($issue->type()->exists());
    }

    /** @test */
    public function it_belongs_to_a_board(): void
    {
        $issue = ProjectIssue::factory()->create();
        $this->assertTrue($issue->board()->exists());
    }

    /** @test */
    public function it_has_many_sprints(): void
    {
        $sprint = ProjectSprint::factory()->create();
        $issue = ProjectIssue::factory()->create();
        $issue->sprints()->sync([$sprint->id]);

        $this->assertTrue($issue->sprints()->exists());
    }

    /** @test */
    public function it_has_many_labels(): void
    {
        $label = ProjectLabel::factory()->create();
        $issue = ProjectIssue::factory()->create();
        $issue->labels()->sync([$label->id]);

        $this->assertTrue($issue->labels()->exists());
    }
}
