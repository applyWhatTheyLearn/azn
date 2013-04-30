<?php

class Add_Authors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::table('authors')->insert(array(
            'name'=>'Andrew Perkins',
            'bio'=>'Andrew Perkins is a realy greate author',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('authors')->insert(array(
            'name'=>'Author Number 2',
            'bio'=>'Author Number 2 is a realy greate author',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('authors')->insert(array(
            'name'=>'Andrew Perkins 2',
            'bio'=>'Andrew Perkins 2 is a realy greate author',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('authors')->insert(array(
            'name'=>'Author Number 3',
            'bio'=>'Author Number 3 is a realy greate author',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('authors')->insert(array(
            'name'=>'Andrew Perkins3',
            'bio'=>'Andrew Perkins3 is a realy greate author',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('authors')->insert(array(
            'name'=>'Author Number 4',
            'bio'=>'Author Number 4 is a realy greate author',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
        DB::table('authors')->delete(1);
        DB::table('authors')->delete(2);
        DB::table('authors')->delete(3);
        DB::table('authors')->delete(4);
        DB::table('authors')->delete(5);
        DB::table('authors')->delete(6);
	}

}