<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('nova/login')
                ->type('email', 'jrobles@naturcode.eu')
                ->type('password', 'secret')
                ->press('Login')
                ->assertPathIs('/nova/dashboards/main');
        });
    }
}
