<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = $_ENV['ADMIN_USER'];
        $user->password = Hash::make($_ENV['ADMIN_PASS']);
        $user->save();
    }

}

class PostsTableSeeder extends Seeder {

    public function run()
    {
        // DB::table('posts')->delete();

        for ($i = 1; $i <= 5; $i++) {
        	$post = new Post();
            $post->user_id = 1;
			$post->title = 'Post Title ' . $i;
			$post->body = 'Post Body ' . $i;
            $post->slug = '';
			$post->save();
        }
    }

}