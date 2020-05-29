<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \App\User;

class UserTest extends TestCase
{
  use RefreshDatabase;
    /**
     *
     * @test
     */
    public function add_one_user()
    {
        $this->assertEquals(0,User::count());
        factory(User::class)->create();
        $this->assertEquals(1,User::count());
    }
}
