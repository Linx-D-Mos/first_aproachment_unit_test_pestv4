<?php

use App\Models\User;



beforeEach( function(){
    $this->user = User::factory()->create([
        'password' => bcrypt('password123')
    ]);
});

// beforeAll( function(){

// });

// beforeEach(function () {
//     // Prepare something before each test run...
// });

// afterAll(function () {
//     // Clean testing data after all tests run...
// });

it('has emails', function (string $email) {
    expect($email)->not->toBeEmpty();
})->with(['enunomaduro@gmail.com', 'other@example.com']);
afterEach(function () {
    // Clear testing data after each test run...
});
it('shows the login page', function () {
    visit('/login')
        ->assertSee('Email')
        ->assertDontSee('Dashboard');
});

it('tests that login works', function () {

    visit('/login')
        ->type('email', $this->user->email)
        ->type('password', 'password123')
        ->press('Log in')
        ->assertPathIs('/dashboard')
        ->screenshot();
});
it('tests that mobile menu works', function() {

        visit('/login')
        ->on()
        ->mobile()
        ->type('email', $this->user->email)
        ->type('password', 'password123')
        ->press('Log in')
        ->assertPathIs('/dashboard')
        ->press('[data-slot=mobile-hamburguer-button]')
        ->assertVisible('Profile')
        ->assertVisible('Log Out');
});

it('test that there are not console logs and errors', function(){
    $pages = visit(['/','/register']);
    [$home, $register] = $pages;
    $register->assertNoConsoleLogs()
    ->assertNoJavaScriptErrors()
    ->assertVisible('Register');
});