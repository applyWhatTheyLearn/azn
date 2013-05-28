<?php

Route::get('/', function()
           {
               return View::make('home.index');
           });

Route::get('admin.html',array('before' => 'auth','do'=> function(){ return View::make('admin.managelist');}));
//Route::get('manageleft.html', function(){ return View::make('admin.manageleft');});
Route::get('manageleft.html', 'users@manageleft');
Route::get('managedetail.html', function(){ return View::make('admin.managedetail');});

Route::get('login.html', function(){return View::make('admin.login');});
Route::post('login.html', array('uses'=>'users@login'));
Route::get('logout.html', function() {
    Auth::logout();
    return Redirect::to('admin.html');
});

Route::group(array('before'=>'auth'),function(){
    Route::get('fileDel', 'utils@fileDel');
    
    /* user_login */
    Route::get('login_user.html', 'users@list');
    Route::get('login_user_modi.html', 'users@modi');
    Route::post('login_user_modi.html', 'users@modi');
    Route::get('user_list.html', 'users@user_list');
    Route::get('user_add.html', 'users@user_add');
    Route::post('user_add.html', 'users@user_add');
    Route::any('user_del.html', 'users@user_del');
    Route::get('user_modi.html', 'users@user_modi');
    Route::post('user_modi.html', 'users@user_modi');

    /* 权限管理 */
    Route::get('qx_list.html', 'users@qx_list');
    Route::post('qx_addclass.html', 'users@qx_addclass');
    Route::post('qx_delclass.html', 'users@qx_delclass');
    Route::get('qx_detail.html', 'users@qx_detail');
    Route::post('qx_addsmallclass.html', 'users@qx_addsmallclass');
    Route::post('qx_delsmallclass.html', 'users@qx_delsmallclass');

    /* 栏目管理 */
    Route::get('qxlm_list.html', 'users@qxlm_list');
    Route::get('qxlm_addbig.html', 'users@qxlm_addbig');
    Route::post('qxlm_addbig.html', 'users@qxlm_addbig');
    Route::get('qxlm_addsmall.html', 'users@qxlm_addsmall');
    Route::post('qxlm_addsmall.html', 'users@qxlm_addsmall');
    Route::get('qxlm_modi.html', 'users@qxlm_modi');
    Route::post('qxlm_modi.html', 'users@qxlm_modi');
    Route::any('qxlm_del.html', 'users@qxlm_del');
    
    /* area */
    Route::get('area/area_list.html', 'areas@list');
    Route::get('area/area_add.html', 'areas@add');
    Route::post('area/area_add.html', 'areas@add');
    Route::get('area/area_modi.html', 'areas@modi');
    Route::post('area/area_modi.html', 'areas@modi');
    Route::any('area/area_del.html', 'areas@del');

    /* gong-gao */
    Route::get('gonggao/gonggao_list.html', 'gonggaos@list');
    Route::get('gonggao/gonggao_add.html', 'gonggaos@add');
    Route::post('gonggao/gonggao_add.html', 'gonggaos@add');
    Route::get('gonggao/gonggao_modi.html', 'gonggaos@modi');
    Route::post('gonggao/gonggao_modi.html', 'gonggaos@modi');
    Route::any('gonggao/gonggao_del.html', 'gonggaos@del');
    Route::get('gonggao/gonggao_detail.html', 'gonggaos@detail');
      /* area_gonggao */
    Route::get('gonggao/area_gonggao_list.html', 'area_gonggaos@list');
    Route::get('gonggao/area_gonggao_add.html', 'area_gonggaos@add');
    Route::post('gonggao/area_gonggao_add.html', 'area_gonggaos@add');
    Route::get('gonggao/area_gonggao_modi.html', 'area_gonggaos@modi');
    Route::post('gonggao/area_gonggao_modi.html', 'area_gonggaos@modi');
    Route::any('gonggao/area_gonggao_del.html', 'area_gonggaos@del');
    Route::get('gonggao/area_gonggao_detail.html', 'area_gonggaos@detail');
    
    /* 关于我们 */
    Route::get('aboutus/au_door.html', 'aboutus@door');
    Route::get('aboutus/auClass_List.html', 'aboutus@class_list');
    Route::get('aboutus/au_temp.html', 'aboutus@temp');
    Route::get('aboutus/auClass_managelist.html', 'aboutus@class_managelist');
    Route::get('aboutus/auClass_add.html', 'aboutus@class_add');
    Route::post('aboutus/auClass_add.html', 'aboutus@class_add');
    Route::get('aboutus/auClass_modi.html', 'aboutus@class_modi');
    Route::post('aboutus/auClass_modi.html', 'aboutus@class_modi');
    Route::any('aboutus/auClass_del.html', 'aboutus@class_del');
    Route::get('aboutus/au_list.html', 'aboutus@list');
    Route::get('aboutus/au_add.html', 'aboutus@add');
    Route::post('aboutus/au_add.html', 'aboutus@add');
    Route::get('aboutus/au_modi.html', 'aboutus@modi');
    Route::post('aboutus/au_modi.html', 'aboutus@modi');
    Route::get('aboutus/au_detail.html', 'aboutus@detail');
    Route::any('aboutus/au_del.html', 'aboutus@del');
    
    /* 公司新闻 */
    Route::get('gonggao/gonggao_list.html', 'gonggaos@list');
    Route::get('gonggao/gonggao_add.html', 'gonggaos@add');
    Route::post('gonggao/gonggao_add.html', 'gonggaos@add');
    Route::get('gonggao/gonggao_modi.html', 'gonggaos@modi');
    Route::post('gonggao/gonggao_modi.html', 'gonggaos@modi');
    Route::any('gonggao/gonggao_del.html', 'gonggaos@del');
    Route::get('gonggao/gonggao_detail.html', 'gonggaos@detail');
      /* 区域新闻 */
    Route::get('gonggao/area_gonggao_list.html', 'area_gonggaos@list');
    Route::get('gonggao/area_gonggao_add.html', 'area_gonggaos@add');
    Route::post('gonggao/area_gonggao_add.html', 'area_gonggaos@add');
    Route::get('gonggao/area_gonggao_modi.html', 'area_gonggaos@modi');
    Route::post('gonggao/area_gonggao_modi.html', 'area_gonggaos@modi');
    Route::any('gonggao/area_gonggao_del.html', 'area_gonggaos@del');
    Route::get('gonggao/area_gonggao_detail.html', 'area_gonggaos@detail');

    /* 媒体链接 */
    Route::get('medialink/media_list.html', 'medialink@list');
    Route::get('medialink/media_add.html', 'medialink@add');
    Route::post('medialink/media_add.html', 'medialink@add');
    Route::get('medialink/media_modi.html', 'medialink@modi');
    Route::post('medialink/media_modi.html', 'medialink@modi');
    Route::any('medialink/media_del.html', 'medialink@del');

    /* 视频链接 */
    Route::get('videolink/video_list.html', 'videolink@list');
    Route::get('videolink/video_add.html', 'videolink@add');
    Route::post('videolink/video_add.html', 'videolink@add');
    Route::get('videolink/video_modi.html', 'videolink@modi');
    Route::post('videolink/video_modi.html', 'videolink@modi');
    Route::any('videolink/video_del.html', 'videolink@del');
    
    /* 加盟信息 */
    Route::get('join/join_modi.html', 'join@modi');
    Route::post('join/join_modi.html', 'join@modi');

    /* 产品管理 */
    Route::get('product/proclass_door.html', 'product@door');
    Route::get('product/area_list.html', 'product@area');
    Route::get('product/proclass_list.html', 'product@proclass_list');
    Route::get('product/pro_temp.html', 'product@temp');
    Route::get('product/proClass_managelist.html', 'product@class_managelist');
    Route::get('product/proClass_add.html', 'product@class_add');
    Route::post('product/proClass_add.html', 'product@class_add');
    Route::get('product/proClass_modi.html', 'product@class_modi');
    Route::post('product/proClass_modi.html', 'product@class_modi');
    Route::any('product/proClass_del.html', 'product@class_del');

    Route::get('product/pro_list.html', 'product@list');
    Route::get('product/pro_add.html', 'product@add');
    Route::post('product/pro_add.html', 'product@add');
    Route::get('product/pro_modi.html', 'product@modi');
    Route::post('product/pro_modi.html', 'product@modi');
    Route::get('product/pro_detail.html', 'product@detail');
    Route::any('product/pro_del.html', 'product@del');
    
    Route::get('product/pro_pic_list.html', 'product@pic_list');
    Route::get('product/pro_pic_add.html', 'product@pic_add');
    Route::post('product/pro_pic_add.html', 'product@pic_add');
    Route::get('product/pro_pic_modi.html', 'product@pic_modi');
    Route::post('product/pro_pic_modi.html', 'product@pic_modi');
    Route::get('product/pro_pic_detail.html', 'product@pic_detail');
    Route::any('product/pro_pic_del.html', 'product@pic_del');

    Route::any('product/package.html', 'product@package');
    Route::any('product/package_list.html', 'product@package_list');
    Route::any('product/package_modi.html', 'product@package_modi');
    Route::any('product/package_del.html', 'product@package_del');
    
    
    /* 会员管理 */
    Route::get('member/member_door.html', 'member@door');
    Route::get('member/memberClass_List.html', 'member@class_list');
    Route::get('member/member_temp.html', 'member@temp');
    Route::get('member/memberClass_managelist.html', 'member@class_managelist');
    Route::get('member/top_member_list.html', 'member@top_member_list');
    Route::get('member/top_member_add.html', 'member@top_member_add');
    Route::post('member/top_member_add.html', 'member@top_member_add');
    Route::get('member/top_member_detail.html', 'member@top_member_detail');
    Route::get('member/top_member_modi.html', 'member@top_member_modi');
    Route::post('member/top_member_modi.html', 'member@top_member_modi');
    Route::get('member/top_member_pass_modi.html', 'member@top_member_pass_modi');
    Route::any('member/top_member_del.html', 'member@top_member_del');

    Route::get('member/member_list.html', 'member@list');
    Route::get('member/member_add.html', 'member@add');
    Route::post('member/member_add.html', 'member@add');
    Route::get('member/member_modi.html', 'member@modi');
    Route::post('member/member_modi.html', 'member@modi');
    Route::any('member/member_del.html', 'member@del');

     /* 帮助 */
    Route::get('help/help_door.html', 'help@door');
    Route::get('help/helpClass_List.html', 'help@class_list');
    Route::get('help/help_temp.html', 'help@temp');
    Route::get('help/helpClass_managelist.html', 'help@class_managelist');
    Route::get('help/helpClass_add.html', 'help@class_add');
    Route::post('help/helpClass_add.html', 'help@class_add');
    Route::get('help/helpClass_modi.html', 'help@class_modi');
    Route::post('help/helpClass_modi.html', 'help@class_modi');
    Route::any('help/helpClass_del.html', 'help@class_del');

    Route::get('help/help_list.html', 'help@list');
    Route::get('help/help_add.html', 'help@add');
    Route::post('help/help_add.html', 'help@add');
    Route::get('help/help_modi.html', 'help@modi');
    Route::post('help/help_modi.html', 'help@modi');
    Route::get('help/help_detail.html', 'help@detail');
    Route::any('help/help_del.html', 'help@del');

     /* contact */
    Route::get('contact/contact_list.html', 'contact@list');
    Route::get('contact/contact_add.html', 'contact@add');
    Route::post('contact/contact_add.html', 'contact@add');
    Route::get('contact/contact_modi.html', 'contact@modi');
    Route::post('contact/contact_modi.html', 'contact@modi');
    Route::get('contact/contact_detail.html', 'contact@detail');
    Route::any('contact/contact_del.html', 'contact@del');
 
    /* 友情链接 */
    Route::get('link/link_list.html', 'link@list');
    Route::get('link/link_add.html', 'link@add');
    Route::post('link/link_add.html', 'link@add');
    Route::get('link/link_modi.html', 'link@modi');
    Route::post('link/link_modi.html', 'link@modi');
    Route::any('link/link_del.html', 'link@del');

   /* 法律声明 */
    Route::get('law/law_modi.html', 'law@modi');
    Route::post('law/law_modi.html', 'law@modi');

    

    
   
 });

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login.html');
});