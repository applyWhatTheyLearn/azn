<?php
class Aboutus_Controller extends Controller {
    public $restful=true;
    private function get_class_by_classid($w_classid){
      return  DB::table('w_aboutus')
            ->where('w_id','=',$w_classid)
          ->first();
    }
    public function get_door(){
        return View::make('admin.aboutus.au_door');
    }
    public function get_class_list(){
        $classes = DB::table('w_aboutus')->get();
        return View::make('admin.aboutus.auclass_list')
            ->with('classes',$classes);
    }
    public function get_temp(){
        return View::make('admin.aboutus.au_temp');
    }
    public function get_class_managelist(){
        $classes = DB::table('w_aboutus')->get();
        return View::make('admin.aboutus.auclass_managelist')
            ->with('classes',$classes);
    }
    public function get_class_add(){
        $page = Input::get('page');
        $view = View::make('admin.aboutus.auclass_add')
            ->with('page',$page);
        return $view;
    }
    public function post_class_add(){
        $page = Input::get('page');
        DB::table('w_aboutus')->insert(array(
            'w_classname'=> Input::get('w_classname'),
            'w_sort'=> Input::get('w_sort'),
            'w_views'=> Input::get('w_views')));
        return  Redirect::to('aboutus/auClass_managelist.html');
    }
    public function get_class_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $class = DB::table('w_aboutus')->where('w_id','=',$id)->first();
        $view = View::make('admin/aboutus/auclass_modi')
          ->with('class',$class)
            ->with('page',$page);
        return $view;
    }
    
    public function post_class_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        DB::table('w_aboutus')->where('w_id','=',$id)
            ->update(array(
            'w_classname'=> Input::get('w_classname'),
            'w_sort'=> Input::get('w_sort'),
            'w_views'=> Input::get('w_views')));
        return Redirect::to('aboutus/auClass_managelist.html');
    }
    public function get_class_del(){
        $page = Input::get('page');
        $id = Input::get('w_id');
         DB::table('w_aboutus')->where('w_id','=',$id)->delete();
        return Redirect::to('aboutus/auClass_managelist.html');
    }
    
    public function get_list(){
        $w_classid = Input::get('w_classid');
        $page = Input::get('page');
        $per_page = 25;
        $class = $this->get_class_by_classid($w_classid);
        $details = DB::table('w_aboutus_detail')
            ->where('w_classid','=',$w_classid)
            ->paginate($per_page);
        $view=View::make('admin.aboutus.au_list')
            ->with('details',$details)
            ->with('class',$class)
            ->with('page',$page);
        return $view;
    }
    function info($view){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $w_classid = Input::get('w_classid');
        $class = $this->get_class_by_classid($w_classid);
        $detail = DB::table('w_aboutus_detail')->where('w_id','=',$id)->first();
        $view = View::make($view)
          ->with('detail',$detail)
          ->with('class',$class)
            ->with('page',$page);
        return $view;
    }
    public function get_add(){
        $page = Input::get('page');
        $w_classid = Input::get('w_classid');
        $class = $this->get_class_by_classid($w_classid);
        $view = View::make('admin.aboutus.au_add')
            ->with('page',$page)
            ->with('class',$class);
        return $view; 
    }
     public function post_add(){
        $page = Input::get('page');
        $w_classid = Input::get('w_classid');
        DB::table('w_aboutus_detail')->insert(array(
            'w_classid' => $w_classid,
            'w_title'=> Input::get('w_title'),
            'w_detail'=> Input::get('w_detail'),
            'w_sort'=> Input::get('w_sort'),
            'w_views'=> Input::get('w_views')));
        return  Redirect::to('aboutus/au_list.html?page='.$page.'&w_classid='.$w_classid);
    }
    public function get_detail(){
        return $this->info('admin.aboutus.au_detail');
    }

    public function get_modi(){
        return Aboutus_Controller::info('admin.aboutus.au_modi');
       
    }
    
    public function post_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $w_classid = Input::get('w_classid');
        DB::table('w_aboutus_detail')->where('w_id','=',$id)
            ->update(array(
            'w_title'=> Input::get('w_title'),
            'w_detail'=> Input::get('w_detail'),
            'w_sort'=> Input::get('w_sort'),
            'w_views'=> Input::get('w_views')));
        return Redirect::to('aboutus/au_list.html?page='.$page.'&w_classid='.$w_classid);
    }
    
    public function get_del(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $w_classid = Input::get('w_classid');
         DB::table('w_aboutus_detail')->where('w_id','=',$id)->delete();
        return Redirect::to('aboutus/au_list.html?page='.$page.'&w_classid='.$w_classid);
    } 

}