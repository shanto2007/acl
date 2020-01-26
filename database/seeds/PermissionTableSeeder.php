<?php

use Illuminate\Database\Seeder;
use shanto\acl\Models\Permission;

class PermissionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {        
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\RoleController@index', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\RoleController@create', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\RoleController@edit', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\RoleController@destroy', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\RoleController@store', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\RoleController@update', false)]);
        
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\ResourceController@index', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\ResourceController@create', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\ResourceController@edit', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\ResourceController@destroy', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\ResourceController@store', false)]);
        Permission::create(['role_id'=>1,'resource_id' => sha1('shanto\acl\Http\ResourceController@update', false)]);
    }
}

