<?php
class Contact_Controller extends Controller {
    public $restful=true;
    
    public function get_list(){
        $page = Input::get('page');
        $per_page = 5;
        $contacts = DB::table('w_contact')->paginate($per_page);
        $view=View::make('admin.contact.contact_list')
            ->with('contacts',$contacts)
            ->with('page',$page);
        return $view;
    }
    
    public function get_add(){
        $page = Input::get('page');
        $areas = DB::table('w_area')->get();
        $view = View::make('admin.contact.contact_add')
            ->with('page',$page)
            ->with('areas',$areas);
        return $view;
    }
    public function post_add(){
        $page = Input::get('page');
        DB::table('w_contact')->insert(array(
            'w_areaname' => Input::get('w_areaname'),
            'w_address' => Input::get('w_address'),
            'w_postcode' => Input::get('w_postcode'),
            'w_name' => Input::get('w_name'),
            'w_phone' => Input::get('w_phone'),
            'w_tel' => Input::get('w_tax'),
            'w_fax' => Input::get('w_fax'),
            'w_email' => Input::get('w_email'),
            'w_msn' => Input::get('w_msn'),
            'w_qq' => Input::get('w_qq'),
            'w_weixin' => Input::get('w_weixin'),
            'w_detail' => Input::get('w_detail'),
            'w_sort'=> Input::get('w_sort'),
            'w_views'=> Input::get('w_views')));
        return  Redirect::to('contact/contact_list.html?page='.$page);
    }
    
    public function get_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $contact = DB::table('w_contact')->where('w_id','=',$id)->first();
        $view = View::make('admin.contact.contact_modi')
          ->with('contact',$contact)
            ->with('page',$page);
        return $view;
    }
    public function post_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $name = Input::get('w_name');
        $sort = Input::get('w_sort');
        $views= Input::get('w_views');
        DB::table('w_contact')->where('w_id','=',$id)
            ->update(array(
             'w_areaname' => Input::get('w_areaname'),
            'w_address' => Input::get('w_address'),
            'w_postcode' => Input::get('w_postcode'),
            'w_name' => Input::get('w_name'),
            'w_phone' => Input::get('w_phone'),
            'w_tel' => Input::get('w_tax'),
            'w_fax' => Input::get('w_fax'),
            'w_email' => Input::get('w_email'),
            'w_msn' => Input::get('w_msn'),
            'w_qq' => Input::get('w_qq'),
            'w_weixin' => Input::get('w_weixin'),
            'w_detail' => Input::get('w_detail'),
            'w_sort'=> $sort,
            'w_views'=> $views));
        return Redirect::to('contact/contact_list.html?page='.$page);
    }
    public function get_detail(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $contact = DB::table('w_contact')->where('w_id','=',$id)->first();
        
         $view = View::make('admin.contact.contact_detail')
             ->with('page',$page)
             ->with('contact',$contact);
        return $view; 
    }
    public function get_del(){
        $page = Input::get('page');
        $id = Input::get('w_id');
         DB::table('w_contact')->where('w_id','=',$id)->delete();
        return Redirect::to('contact/contact_list.html?page='.$page);
    }
}