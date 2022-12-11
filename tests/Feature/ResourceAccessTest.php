<?php

namespace Tests\Feature;

use App\Models\Resource;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ResourceAccessTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function users_with_user_role_cannot_update_resources()
    {
        $user = User::factory()->create(['role' => 'user']);

        $this->assertFalse($user->can('update', new Resource));
    }

    /** @test */
    function users_with_editor_role_can_update_resources()
    {
        $user = User::factory()->create(['role' => 'editor']);

        $this->assertTrue($user->can('update', new Resource));
    }

    /** @test */
    function users_with_admin_role_can_update_resources()
    {
        $user = User::factory()->create(['role' => 'admin']);

        $this->assertTrue($user->can('update', new Resource));
    }
    /** @test */
    function resource_check_database_table_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('resources', [
                'id','name', 'url', 'is_free', 'is_bonus', 'can_expire', 'type', 'language',
                'notes', 'expiration_date', 'created_at', 'updated_at', 'deleted_at', 'os'
            ]), 1);
    }
}
