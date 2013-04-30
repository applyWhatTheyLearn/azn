<?php
class Gonggaos_Controller extends Controller {
    public $restful=true;
    
    function info($view){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $gonggao = DB::table('w_notice')->where('w_id','=',$id)->first();
        $view = View::make($view)
          ->with('gonggao',$gonggao)
            ->with('page',$page);
        return $view;
    }
    public function get_list(){
        $page = Input::get('page');
        $per_page = 25;
        $gonggaos = DB::table('w_notice')
            ->where('w_type','=','company')
            ->paginate($per_page);
        $view=View::make('admin.gonggao.gonggao_list')
            ->with('gonggaos',$gonggaos)
            ->with('page',$page);
        return $view;
    }
    
    public function get_add(){
        $page = Input::get('page');
        $view = View::make('admin.gonggao.gonggao_add')
            ->with('page',$page);
        return $view;
    }
    public function post_add(){
        $page = Input::get('page');
        DB::table('w_notice')->insert(array(
            'w_type' => 'company',
            'w_title'=> Input::get('w_title'),
            'w_detail'=> Input::get('w_detail'),
            'w_inputime'=> date("Y-m-d H:i:s", time()),
            'w_sort'=> Input::get('w_sort'),
            'w_views'=> Input::get('w_views')));
        return  Redirect::to('gonggao/gonggao_list.html?page='.$page);
    }
    public function get_detail(){
        return $this->info('admin.gonggao.gonggao_detail');
    }

    public function get_modi(){
        return $this->info('admin.gonggao.gonggao_modi');
       
    }
    
    public function post_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        DB::table('w_notice')->where('w_id','=',$id)
            ->update(array(
            'w_title'=> Input::get('w_title'),
            'w_detail'=> Input::get('w_detail'),
            'w_sort'=> Input::get('w_sort'),
            'w_views'=> Input::get('w_views')));
        return Redirect::to('gonggao/gonggao_list.html?page='.$page);
    }
    
    public function get_del(){
        $page = Input::get('page');
        $id = Input::get('w_id');
         DB::table('w_notice')->where('w_id','=',$id)->delete();
        return Redirect::to('gonggao/gonggao_list.html?page='.$page);
    }
}