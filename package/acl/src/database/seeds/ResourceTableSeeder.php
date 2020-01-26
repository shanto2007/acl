<?php

use Illuminate\Database\Seeder;
use shanto\acl\Models\Resource;

class ResourceTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\RoleController@index', false),'name'=>'Role GET::Index', 'controller'=>'Role', 'action'=>'shanto\acl\Http\RoleController@index']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\RoleController@create', false),'name'=>'Role GET::Create', 'controller'=>'Role', 'action'=>'shanto\acl\Http\RoleController@create']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\RoleController@edit', false),'name'=>'Role GET::Edit', 'controller'=>'Role', 'action'=>'shanto\acl\Http\RoleController@edit']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\RoleController@destroy', false),'name'=>'Role GET::Destroy', 'controller'=>'Role', 'action'=>'shanto\acl\Http\RoleController@destroy']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\RoleController@store', false),'name'=>'Role POST::Store', 'controller'=>'Role', 'action'=>'shanto\acl\Http\RoleController@store']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\RoleController@update', false),'name'=>'Role POST::Update', 'controller'=>'Role', 'action'=>'shanto\acl\Http\RoleController@update']);

        Resource::create(['resource_id'=>sha1('shanto\acl\Http\ResourceController@index', false),'name'=>'Resource GET::Index', 'controller'=>'Resource', 'action'=>'shanto\acl\Http\ResourceController@index']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\ResourceController@create', false),'name'=>'Resource GET::Create', 'controller'=>'Resource', 'action'=>'shanto\acl\Http\ResourceController@create']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\ResourceController@edit', false),'name'=>'Resource GET::Edit', 'controller'=>'Resource', 'action'=>'shanto\acl\Http\ResourceController@edit']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\ResourceController@destroy', false),'name'=>'Resource GET::Destroy', 'controller'=>'Resource', 'action'=>'shanto\acl\Http\ResourceController@destroy']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\ResourceController@store', false),'name'=>'Resource POST::Store', 'controller'=>'Resource', 'action'=>'shanto\acl\Http\ResourceController@store']);
        Resource::create(['resource_id'=>sha1('shanto\acl\Http\ResourceController@update', false),'name'=>'Resource POST::Update', 'controller'=>'Resource', 'action'=>'shanto\acl\Http\ResourceController@update']);
    }

}
