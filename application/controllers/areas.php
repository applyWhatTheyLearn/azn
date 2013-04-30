<?php
class Areas_Controller extends Controller {
    public $restful=true;
    
    public function get_list(){
        $page = Input::get('page');
        $per_page = 25;
        $areas = DB::table('w_area')->paginate($per_page);
        $view=View::make('admin.area.area_list')
            ->with('areas',$areas)
            ->with('page',$page);
        return $view;
    }
    
    public function get_add(){
        $page = Input::get('page');
        $view = View::make('admin.area.area_add')
            ->with('page',$page);
        return $view;
    }
    public function post_add(){
        $page = Input::get('page');
        $name = Input::get('w_name');
        $sort = Input::get('w_sort');
        $views= Input::get('w_views');
        DB::table('w_area')->insert(array(
            'w_name' => $name,
            'w_sort'=> $sort,
            'w_views'=> $views));
        return  Redirect::to('area/area_list.html?page='.$page);
    }
    
    public function get_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $area = DB::table('w_area')->where('w_id','=',$id)->first();
        $view = View::make('admin.area.area_modi')
          ->with('area',$area)
            ->with('page',$page);
        return $view;
    }
    public function post_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $name = Input::get('w_name');
        $sort = Input::get('w_sort');
        $views= Input::get('w_views');
        DB::table('w_area')->where('w_id','=',$id)
            ->update(array(
            'w_name' => $name,
            'w_sort'=> $sort,
            'w_views'=> $views));
        return Redirect::to('area/area_list.html?page='.$page);
    }
    
    public function get_del(){
        $page = Input::get('page');
        $id = Input::get('w_id');
         DB::table('w_area')->where('w_id','=',$id)->delete();
        return Redirect::to('area/area_list.html?page='.$page);
    }
}