<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$this->call(UsersTableSeeder::class);
    	$this->call(UsersUpdateSeeder::class);
    	//$this->call(PostsTableSeeder::class);
    	//$this->call(CommentsTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
	public function run()
  {
  	$loop = 5;
  	for($i=0; $i<$loop; $i++){
			DB::table('t_users')->insert([
          'name' => str_random(10),
          'email' => str_random(10).'@gmail.com',
          'password' => bcrypt('secret'),
      ]);
    }
  }
}

class UsersUpdateSeeder extends Seeder
{
  public function run()
  {
		DB::table('t_users')
			->where('id', 1)
			->update(['name' => 'takagi']);
  }

}