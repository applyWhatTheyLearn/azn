<?php
class Law_Controller extends Controller {
    public $restful=true;
    
    
    public function get_modi(){
        $law = DB::table('w_law')->first();
        if(is_null($law)){
             DB::table('w_law')
            ->insert(array(
            'w_title' => '',
            'w_detail' => '',
            'w_sort'=> 0,
            'w_views'=> '显示'));
        $law = DB::table('w_law')->first();
        }
        $view = View::make('admin.law.law_modi')
          ->with('law',$law);
        return $view;
    }
    public function post_modi(){
        $id = Input::get('w_id');
        $w_detail = Input::get('w_detail');
        $sort = Input::get('w_sort');
        $views= Input::get('w_views');
        DB::table('w_law')->where('w_id','=',$id)
            ->update(array(
            'w_detail' => $w_detail));
        return Redirect::to('law/law_modi.html');
    }
   
}