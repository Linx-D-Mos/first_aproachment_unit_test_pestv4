<?php

/*
    $user = User::factory()->create();
    User::factory()->count(5)->create;
    $this->seed();

*/

use App\Models\User;

// it('has full_name accesor', function(){
//     $u = User::factory()->make(['first' => 'Zura', 'last' => 'Sekh']);
//     expect($u->full_name)
//     ->toBe('Zura Sekh');
// });

// it('user has posts', function(){
//     $user = User::factory()->hasPosts(3)->create();
//     expect($user->posts)->toHaveCount(3);
// });

// it('post belongs to user', function(){
//     $post = Post::factory()->for(User::factory())->create();
//     expect($post->user)
//     ->not
//     ->toBeNull();
// });

// In your App/Models/Post.php model

// Post::factory()->create(['published' => true]);
// Post::factory()->create(['published' => true]);
// expect(Post::published()->count()->toBe(1));

// $product = Product::factory()->make();
// Product::create($product->toArray());
// expect(Product::count())->toBe(1);

// $product->update(['price => 200']);
// expect($product->fresh()->price)->toBe(200);

// $product->delete();
// expect(Product::count())->toBe(0);



// $post = Post::factory()->create();
// $post->delete();

// $this->assertSoftDeleted('posts', ['id' => $post->id]);
// $post->restore();
// expect($post->fresh()->deleted_at)->toBeNull();

// $this->assertDatabaseHas('users', ['email'=> 'test@example.com']);
// $this->assertDatabaseMissing('orders', ['status' => 'canceled']);