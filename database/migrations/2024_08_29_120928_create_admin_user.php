<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert default user document into the 'users' collection
        DB::collection('users')->insert([
            'name' => 'Default User',
            'role' => 'admin',
            'email' => 'admin@blog.com',
            'password' => bcrypt('admin123'), // Or use Hash::make('password')
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove the default user document
        DB::collection('users')->where('email', 'admin@blog.com')->delete();
    }
};
