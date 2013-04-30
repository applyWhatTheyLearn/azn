<?php
class Link_Controller extends Controller {
    public $restful=true;
    
    public function get_list(){
        $page = Input::get('page');
        $per_page = 5;
        $links = DB::table('w_link')->paginate($per_page);
        $view=View::make('admin.link.link_list')
            ->with('links',$links)
            ->with('page',$page);
        return $view;
    }
    
    public function get_add(){
        $page = Input::get('page');
        $view = View::make('admin.link.link_add')
            ->with('page',$page);
        return $view;
    }
    public function post_add(){
        $page = Input::get('page');
        $name = Input::get('w_name');
        $url = Input::get('w_url');
        $sort = Input::get('w_sort');
        $views= Input::get('w_views');
        DB::table('w_link')->insert(array(
            'w_name' => $name,
            'w_url' => $url,
            'w_sort'=> $sort,
            'w_views'=> $views));
        return  Redirect::to('link/link_list.html?page='.$page);
    }
    
    public function get_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $link = DB::table('w_link')->where('w_id','=',$id)->first();
        $view = View::make('admin.link.link_modi')
          ->with('link',$link)
            ->with('page',$page);
        return $view;
    }
    public function post_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $name = Input::get('w_name');
        $url = Input::get('w_url');
        $sort = Input::get('w_sort');
        $views= Input::get('w_views');
        DB::table('w_link')->where('w_id','=',$id)
            ->update(array(
            'w_name' => $name,
            'w_url' => $url,
            'w_sort'=> $sort,
            'w_views'=> $views));
        return Redirect::to('link/link_list.html?page='.$page);
    }
    
    public function get_del(){
        $page = Input::get('page');
        $id = Input::get('w_id');
         DB::table('w_link')->where('w_id','=',$id)->delete();
        return Redirect::to('link/link_list.html?page='.$page);
    }
}