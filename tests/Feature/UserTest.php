<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function get_first_name_attribute()
    {
        $user = User::factory()->create(['name' => 'First Name Test']);
        $this->assertEquals('First', $user->getFirstNameAttribute());
    }

    /** @test  */
    public function get_initial_name_attribute()
    {
        $user = User::factory()->create(['name' => 'First Name Test']);
        $this->assertEquals('FNT', $user->getInitialsAttribute());
    }
}
