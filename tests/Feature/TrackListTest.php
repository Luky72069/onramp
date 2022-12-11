<?php

namespace Tests\Feature;

use App\Models\Module;
use App\Models\Track;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TrackListTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function anyone_can_access_the_tracks_page()
    {
        $track = Track::factory()->create();
        $module = Module::factory()->create();
        $track->modules()->save($module);

        $response = $this->get(route('tracks', ['locale' => 'en']));

        $response->assertOk()
            ->assertSee($track->name)
            ->assertSee($module->name)
            ->assertSee('svg');
    }

    /** @test */
    function it_doesnt_show_tracks_with_no_modules()
    {
        $track = Track::factory()->create();
        $response = $this->get(route('tracks', ['locale' => 'en']));

        $response->assertOk()
            ->assertDontSee($track->name);
    }


    /** @test */
    public function track_has_many_users()
    {
        $track = Track::factory()->create();
        $user  = User::factory()->create(['track_id' => $track->id]);

        $this->assertTrue($track->users->contains($user));

        $this->assertEquals(1, $track->users->count());

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $track->users);
    }
}
