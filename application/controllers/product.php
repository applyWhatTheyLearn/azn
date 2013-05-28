<?php
class Product_Controller extends Controller {
    public $restful=true;
    public $per_page = 25;
    private function get_class_by_classid($w_classid){
        return  DB::table('z_class')
            ->where('l_id','=',$w_classid)
            ->first();
    }
    private function get_area_by_id(){
        $areaid = Input::get('areaid');
        return DB::table('w_area')->where('w_id','=',$areaid)->first();
    }
    
    private function gen_key($digits)
    {
        $authnum = '';
        srand((double)microtime() * 1000000); //create a random number feed.
        $ychar = "0,1,2,3,4,5,6,7,8,9";
        $list = explode(",", $ychar);
        for ($i = 0; $i < $digits; $i++) {
            $randnum = rand(0, 9); // 10+26;
            $authnum .= $list[$randnum];
        }
        return $authnum;
    }

    private function create_file_name()
    {
        return date("YmdHis", time()) . $this->gen_key(6);
        
    }

        
        
    public function get_door(){
        return View::make('admin.product.proclass_door');
    }
    public function get_proclass_list(){
        $area = $this->get_area_by_id();
        $class_sql ='select concat(l_classpath,"-",l_id) as abs,l_id,l_name,l_classpath,l_sort,l_views from z_class where l_areaid = '.$area->w_id;
        $classes = DB::query($class_sql.' order by abs');//->paginate($per_page);
        return View::make('admin.product.proclass_list')
            ->with('classes',$classes)
            ->with('area',$area);
    }
    public function get_temp(){
        return View::make('admin.product.pro_temp');
    }
    public function get_area(){
        $areas = DB::query('select a.w_id,a.w_name,b.username from w_area a left join w_member b on a.w_id = b.areaid');
        return View::make('admin.product.area_list')
            ->with('areas',$areas);
    }
    
    public function get_class_managelist(){
        $per_page = 25;
        $area = $this->get_area_by_id();
        
        $class_sql ='select concat(l_classpath,"-",l_id) as abs,l_id,l_name,l_classpath,l_sort,l_views from z_class where l_areaid = '.$area->w_id;
        $class_additional_sql = 'select concat(b.l_classpath,"-",b.l_id,"-",a.l_classpath,"-",a.l_id) as abs,a.l_id,a.l_name,a.l_classpath,a.l_sort,a.l_views from  z_class_additional a ,z_class b where a.classid=b.l_id ';
        $classes = DB::query($class_sql.' union '.$class_additional_sql.' order by abs');//->paginate($per_page);
        
        return View::make('admin.product.proclass_managelist')
            ->with('classes',$classes)
            ->with('area',$area)
            ->with('page',0);
    }
    
    public function get_class_add(){
        $page = Input::get('page');
        $type = Input::get('type');
        $l_fid = Input::get('l_fid');
        $area = $this->get_area_by_id();
        $additional_fid =  Input::get('additional_fid');
        
        $view = View::make('admin.product.proclass_add')
            ->with('page',$page)
            ->with('l_fid',$l_fid)
            ->with('area',$area)
            ->with('type',$type)
            ->with('additional_fid',$additional_fid);
        return $view;
    }
    public function post_class_add(){
        $page = Input::get('page');
        $type = Input::get('type');
        $area = $this->get_area_by_id();
        
        $l_fid = Input::get('l_fid','0');
        if (is_null($type)){
            $class = DB::table('z_class')->where('l_id','=',$l_fid)->first();
            $class_path = is_null($class)?'0':$class->l_classpath.'-'.$l_fid;
            DB::table('z_class')->insert(array(
                'l_fid'=> $l_fid,
                'l_classpath'=>$class_path,
                'l_areaid'=> $area->w_id,
                'l_areaname'=> $area->w_name,
                'l_name'=> Input::get('w_classname'),
                'l_sort'=> Input::get('w_sort'),
                'l_views'=> Input::get('w_views')));
        }else{
            $additional_fid = Input::get('additional_fid');
            $class = DB::table('z_class_additional')->where('l_id','=',$additional_fid)->first();
            $class_path = is_null($class)?'0':$class->l_classpath.'-'.$additional_fid;
            $l_fid = is_null($class)?$l_fid:$class->classid;
            DB::table('z_class_additional')->insert(array(
                'l_fid'=> $additional_fid,
                'classid'=>$l_fid,
                'l_classpath'=>$class_path,
                'l_name'=> Input::get('w_classname'),
                'l_sort'=> Input::get('w_sort'),
                'l_views'=> Input::get('w_views')));
        }
        
        return  Redirect::to('product/proClass_managelist.html?areaid='.$area->w_id);
    }
    public function get_class_modi(){
        $page = Input::get('page');
        $type = Input::get('type');
        $area = $this->get_area_by_id();
        $id = Input::get('w_id');
        $table_name = is_null($type)?'z_class':'z_class_additional';
        $class = DB::table($table_name)->where('l_id','=',$id)->first();
        $view = View::make('admin/product/proclass_modi')
            ->with('class',$class)
            ->with('area',$area)
            ->with('page',$page)
            ->with('type',$type);
        return $view;
    }
    
    public function post_class_modi(){
        $page = Input::get('page');
        $type = Input::get('type');
        $id = Input::get('w_id');
        $areaid = Input::get('areaid');
        $table_name = is_null($type)?'z_class':'z_class_additional';
        DB::table($table_name)->where('l_id','=',$id)
            ->update(array(
                'l_name'=> Input::get('w_classname'),
                'l_sort'=> Input::get('w_sort'),
                'l_views'=> Input::get('w_views')));
        return Redirect::to('product/proClass_managelist.html?areaid='.$areaid);
    }
    public function get_class_del(){
        $page = Input::get('page');
        $type = Input::get('type');
        $areaid = Input::get('areaid');
        $id = Input::get('w_id');
        $table_name = is_null($type)?'z_class':'z_class_additional';
        $classpath =Input::get('l_classpath').'-'.$id;
        DB::table($table_name)
            ->where('l_id','=',$id)
            ->or_where('l_classpath','LIKE',$classpath.'%')->delete();
        return Redirect::to('product/proClass_managelist.html?areaid='.$areaid);
    }
    
    public function get_list(){
        Session::forget('classid');
        $area = $this->get_area_by_id();
        $level = Input::get('level');
        $w_classid = Input::get('w_classid');
        $page = Input::get('page');
        $per_page = 25;
        $class = $this->get_class_by_classid($w_classid);
        $details = DB::table('z_product')
            ->where(
                'l_c_path',
                'LIKE',
                $class->l_classpath.'-'.$class->l_id.'%')
            ->paginate($per_page);
        $view=View::make('admin.product.pro_list')
            ->with('details',$details)
            ->with('class',$class)
            ->with('page',$page)
            ->with('level',$level)
            ->with('area',$area);
        return $view;
    }
    function info($view){
        $page = Input::get('page');
        $id = Input::get('l_id');
        $w_classid = Input::get('w_classid');
        $class = $this->get_class_by_classid($w_classid);
        $area = $this->get_area_by_id();
        $detail = DB::table('z_product')->where('l_id','=',$id)->first();
        $classes=get_object_vars($detail);
        $CA_level1=DB::query('select l_id,l_name,\'\' as value from z_class_additional where l_fid = 0 and classid ='.$w_classid);
        foreach($CA_level1 as $ca){
            $ca->value = DB::query('select l_name from z_class_additional where l_fid = '.$ca->l_id);
        }
        $view = View::make($view)
            ->with('detail',$detail)
            ->with('page',$page)
            ->with('area',$area)
            ->with('class',$class)
            ->with('classes',$classes)
            ->with('class_additionals',$CA_level1)
            ->with('w_classid',$w_classid);
        
        return $view;
    }
    public function get_add(){
        $page = Input::get('page');
        $area = $this->get_area_by_id();
        
        $w_classid = Input::get('w_classid');
        $class = $this->get_class_by_classid($w_classid);
        $CA_level1=DB::query('select l_id,l_name,\'\' as value from z_class_additional where l_fid = 0 and classid ='.$w_classid);
        foreach($CA_level1 as $ca){
            $ca->value = DB::query('select l_name from z_class_additional where l_fid = '.$ca->l_id);
        }
        $l_classpath = $class->l_classpath.'-'.$class->l_id;
        $maxID=DB::table('z_product')->max('l_id');
        $l_number = $l_classpath.'-'.($maxID++);
        $view = View::make('admin.product.pro_add')
            ->with('page',$page)
            ->with('class',$class)
            ->with('class_additionals',$CA_level1)
            ->with('area',$area)
            ->with('l_number',$l_number);
        return $view; 
    }
    public function post_add(){
        $page = Input::get('page');
        $w_classid = Input::get('w_classid');
        $areaid =Input::get('l_areaid');
        DB::table('z_product')->insert(array(
            'l_areaid'=> Input::get('l_areaid'),
            'l_areaname'=> Input::get('l_areaname'),
            'l_number'=> Input::get('l_number'),
            'l_c_path'=> Input::get('l_c_path'),
            //'l_a_path'=> Input::get('l_a_path'),
            'l_name'=> Input::get('l_name'),
            'l_basic'=> Input::get('l_basic'),
            'l_extend'=> Input::get('l_extend'),
            'l_specifications'=> Input::get('l_specifications'),
            'l_price1'=> Input::get('l_price1'),
            'l_price2'=> Input::get('l_price2'),
            'l_units'=> Input::get('l_units'),
            'l_num'=> Input::get('l_num'),
            'l_shuliang'=> Input::get('l_shuliang'),
            'l_clicknum'=> Input::get('l_clicknum'),
            'l_score'=> Input::get('l_score'),
            'l_tuijian'=> Input::get('l_tuijian'),
            'l_class1'=> Input::get('l_class1'),
            'l_class2'=> Input::get('l_class2'),
            'l_class3'=> Input::get('l_class3'),
            'l_class3'=> Input::get('l_class3'),
            'l_class4'=> Input::get('l_class4'),
            'l_class5'=> Input::get('l_class5'),
            'l_class6'=> Input::get('l_class6'),
            'l_class7'=> Input::get('l_class7'),
            'l_class8'=> Input::get('l_class8'),
            'l_class9'=> Input::get('l_class9'),
            'l_class10'=> Input::get('l_class10'),
            'l_sort'=> Input::get('l_sort'),
            'l_views'=> Input::get('l_views')));
        return  Redirect::to('product/pro_list.html?level=3&w_classid='.$w_classid.'&areaid='.$areaid.'&page='.$page);
    }
    public function get_detail(){
        return $this->info('admin.product.pro_detail');
    }

    public function get_modi(){
        return $this->info('admin.product.pro_modi');
       
    }
    
    public function post_modi(){
        $page = Input::get('page');
        $areaid =Input::get('l_areaid');
        $id = Input::get('l_id');
        $w_classid = Input::get('w_classid');
        DB::table('z_product')->where('l_id','=',$id)
            ->update(array(
                'l_areaid'=> Input::get('l_areaid'),
                'l_areaname'=> Input::get('l_areaname'),
                'l_number'=> Input::get('l_number'),
                'l_c_path'=> Input::get('l_c_path'),
                //'l_a_path'=> Input::get('l_a_path'),
                'l_name'=> Input::get('l_name'),
                'l_basic'=> Input::get('l_basic'),
                'l_extend'=> Input::get('l_extend'),
                'l_specifications'=> Input::get('l_specifications'),
                'l_price1'=> Input::get('l_price1'),
                'l_price2'=> Input::get('l_price2'),
                'l_units'=> Input::get('l_units'),
                'l_num'=> Input::get('l_num'),
                'l_shuliang'=> Input::get('l_shuliang'),
                'l_clicknum'=> Input::get('l_clicknum'),
                'l_score'=> Input::get('l_score'),
                'l_tuijian'=> Input::get('l_tuijian'),
                'l_class1'=> Input::get('l_class1'),
                'l_class2'=> Input::get('l_class2'),
                'l_class3'=> Input::get('l_class3'),
                'l_class3'=> Input::get('l_class3'),
                'l_class4'=> Input::get('l_class4'),
                'l_class5'=> Input::get('l_class5'),
                'l_class6'=> Input::get('l_class6'),
                'l_class7'=> Input::get('l_class7'),
                'l_class8'=> Input::get('l_class8'),
                'l_class9'=> Input::get('l_class9'),
                'l_class10'=> Input::get('l_class10'),
                'l_sort'=> Input::get('l_sort'),
                'l_views'=> Input::get('l_views')));
        return  Redirect::to('product/pro_list.html?level=3&w_classid='.$w_classid.'&areaid='.$areaid.'&page='.$page);
    }
    
    public function get_del(){
        $page = Input::get('page');
        $id = Input::get('l_id');
        $areaid =Input::get('areaid');
        $w_classid = Input::get('w_classid');
        DB::table('z_product')->where('l_id','=',$id)->delete();
        return Redirect::to('product/pro_list.html?level=3&w_classid='.$w_classid.'&areaid='.$areaid.'&page='.$page);
    }

    public function get_pic_list(){
        $page = Input::get('page');
        
        if(Session::has('classid')){
            $classid= Session::get('classid');
        } else{
            $classid= Input::get('l_classid');
            Session::put('classid',$classid);
        }
        $className=DB::table('z_product')->where('l_id','=',$classid)->first()->l_name;
        $per_page = 25;
        $pics = DB::table('z_productpic')->where('l_productid','=',$classid)->paginate($per_page);
        $view = View::make('admin.product.pro_pic_list')
            ->with('pics',$pics)
            ->with('page',$page)
            ->with('classid',$classid)
            ->with('className',$className);
        
        return $view;
    }
    public function get_pic_add(){
        $page = Input::get('page');
        $classid = Input::get('classid');
        $className = Input::get('classname');
        $view = View::make('admin.product.pro_pic_add')
            ->with('page',$page)
            ->with('classid',$classid)
            ->with('classname',$className);
        return $view; 
    }
    public function post_pic_add(){
        $page = Input::get('page');
        $classid = Input::get('classid');
        $className = Input::get('className');
        $image = Input::file('image');
        $fileExtension = File::extension(Input::file('image.name'));
        $filename = $this->create_file_name();
        Input::upload('image','public/uploads',$filename.'.'.$fileExtension);
        DB::table('z_productpic')->insert(array(
            'l_productid'=> $classid,
            'l_pic'=> $filename,
            'l_ext'=> $fileExtension,
            'l_title'=> Input::get('l_title'),
            'l_sort'=> Input::get('l_sort'),
            'l_views'=> Input::get('l_views')));
        return  Redirect::to('product/pro_pic_list.html?l_classid='.$classid.'&page='.$page);
    }
    /**
     * modi
     *
     * pic modi
     * 
     * @author weiyq@gmail.com
     */
    public function get_pic_modi()
    {
        $page = Input::get('page');
        $classid = Input::get('classid');
        $className = Input::get('className');
        $id = Input::get('l_id');
        $pic = DB::table('z_productpic')
            ->where('l_id','=',$id)
            ->first();
        $view = View::make('admin.product.pro_pic_modi')
            ->with('page',$page)
            ->with('pic',$pic)
            ->with('classid',$classid)
            ->with('classname',$className);
        return $view; 
    }
    /**
     * post modi
     *
     * description
     * @author author <email>
     */
    public function post_pic_modi()
    {
        $page = Input::get('page');
        $classid = Input::get('classid');
        $id = Input::get('l_id');
        $image = Input::file('image');
        if(Input::file('image.name') == ''){
            DB::table('z_productpic')->where('l_id','=',$id)
                ->update(array(
                    'l_sort'=> Input::get('l_sort'),
                    'l_views'=> Input::get('l_views')));
        }else{
             
            $fileExtension = File::extension(Input::file('image.name'));
            $filename = $this->create_file_name();
            Input::upload('image','public/uploads',$filename.'.'.$fileExtension);
            DB::table('z_productpic')->where('l_id','=',$id)
                ->update(array(
                    'l_pic'=> $filename,
                    'l_ext'=> $fileExtension,
                    'l_sort'=> Input::get('l_sort'),
                    'l_views'=> Input::get('l_views')));
        }
        return  Redirect::to('product/pro_pic_list.html?l_classid='.$classid.'&page='.$page);
    }
    /**
     * del
     *
     * del
     * 
     * @author weiyq@gmai.com
     */
    public function get_pic_del()
    {
        $id = Input::get('l_id');
        $classid = Input::get('classid');
        $page = Input::get('page');
        DB::table('z_productpic')->where('l_id','=',$id)
            ->delete();
        return  Redirect::to('product/pro_pic_list.html?l_classid='.$classid.'&page='.$page);
    }
    /**
     * 
     */
    public function get_package()
    {
        $w_classid = Input::get('w_classid');
        $l_id = Input::get('l_id');
        $page = Input::get('page');
        $areaid = Input::get('areaid');
        $top_classid = Input::get('top_classid','');
        $class = $this->get_class_by_classid($top_classid);
        $self_id = Input::get('self_id');
        $self_price = Input::get('self_price');
        $products = null;
        //Input::flash();
        $top_classes=DB::table('z_class')
            ->where('l_fid','=',0)
            ->get();
        if ($class)
            {
                $products = DB::table('z_product')
                    ->where(
                        'l_c_path',
                        'LIKE',
                        $class->l_classpath.'-'.$class->l_id.'%')
                    ->paginate($this->per_page);
            }
        //如果self_id不为空，则添加
        if($self_id){
            $package = DB::table('z_package')
                ->where('l_productid','=',$l_id)
                ->first();
            if(! $package){
                DB::table('z_package')
                    ->insert(array(
                        'l_productid' => $l_id
                    ));
            }

            $l_packageid = DB::table('z_package')
                ->where('l_productid','=',$l_id)
                ->first()
                ->l_id;
            $package_detail = DB::table('z_package_detail')
                ->where('l_packageid','=',$l_packageid)
                ->where('l_productid','=',$self_id)
                ->first();
            if(! $package_detail){
                DB::table('z_package_detail')
                    ->insert(array(
                        'l_packageid' => $l_packageid,
                        'l_productid' => $self_id,
                        'l_price' => $self_price
                    ));
    
            }
            

        }
        $view = View::make('admin.product.package')
            ->with('areaid',$areaid)
            ->with('w_classid',$w_classid)
            ->with('l_id',$l_id)
            ->with('page',$page)
            ->with('top_classes',$top_classes)
            ->with('top_classid',$top_classid)
            ->with('products',$products);
        return $view;
    }
    /**
     * 
     */
    public function get_package_list()
    {
        $w_classid = Input::get('w_classid');
        $l_id = Input::get('l_id');
        $page = Input::get('page');
        $areaid = Input::get('areaid');
        $top_classid = Input::get('top_classid','');
        $package_details = array();
        $l_package = DB::table('z_package')
            ->where('l_productid','=',$l_id)
            ->first();
        if($l_package){
            $package_details = DB::table('z_package_detail')
                ->where('l_packageid','=',$l_package->l_id)
                ->get();    
        }
        
        foreach($package_details as $package_detail){
            $package_detail->product_name =
                DB::table('z_product')
                ->where('l_id','=',$package_detail->l_productid)
                ->first()->l_name;
        }

        $view = View::make('admin.product.package_list')
            ->with('package_details',$package_details)
            ->with('w_classid',$w_classid)
            ->with('l_id',$l_id)
            ->with('areaid',$areaid)
            ->with('page',$page)
            ->with('top_classid',$top_classid);
        return $view;
    }
   /**
    * 
    */
    public function get_package_modi()
    {
        $l_num = Input::get('l_num');
        $detail_id = Input::get('detail_id');
        $w_classid = Input::get('w_classid');
        $l_id = Input::get('l_id');
        $page = Input::get('page');
        $areaid = Input::get('areaid');
        $top_classid = Input::get('top_classid','');
        DB::table('z_package_detail')
            ->where('l_id','=',$detail_id)
            ->update(array(
                'l_num'=>$l_num
            ));

        return Redirect::to('product/package.html?w_classid='
        .$w_classid.'&l_id='.$l_id.'&areaid='.$areaid
                            .'&page='.$page);
    }
    public function get_package_del()
    {
        $detail_id = Input::get('detail_id');
        $w_classid = Input::get('w_classid');
        $l_id = Input::get('l_id');
        $page = Input::get('page');
        $areaid = Input::get('areaid');
        $top_classid = Input::get('top_classid','');
        DB::table('z_package_detail')
            ->where('l_id','=',$detail_id)
            ->delete();

        return Redirect::to('product/package.html?w_classid='
        .$w_classid.'&l_id='.$l_id.'&areaid='.$areaid
                            .'&page='.$page);
    }

}