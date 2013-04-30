<?php
class Join_Controller extends Controller {
    public $restful=true;
    
    
    public function get_modi(){
        $join = DB::table('w_join')->first();
        if(is_null($join)){
             DB::table('w_join')
            ->insert(array(
            'w_title' => '',
            'w_detail' => '',
            'w_sort'=> 0,
            'w_views'=> '显示'));
        $join = DB::table('w_join')->first();
        }
        $view = View::make('admin.join.join_modi')
          ->with('join',$join);
        return $view;
    }
    public function post_modi(){
        $id = Input::get('w_id');
        $w_detail = Input::get('w_detail');
        $sort = Input::get('w_sort');
        $views= Input::get('w_views');
        DB::table('w_join')->where('w_id','=',$id)
            ->update(array(
            'w_detail' => $w_detail));
        return Redirect::to('join/join_modi.html');
    }
   
}