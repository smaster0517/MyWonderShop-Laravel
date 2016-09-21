<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEmptyCartRedirectToHomePage()
    {
        $this->visit('/shop/cart')
            ->seePageIs('/')
            ->see('Empty Cart!');
    }

    
}
