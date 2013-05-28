<?php
class Users_Controller extends Controller {
    public $restful=true;
    private $per_page = 25;
    public $messages = array(
        'email'
        => '格式不正确！',
        'required'
        => '不能为空！',
        'confirmed'
        =>'密码不匹配'
    );

    public $rules = array(
        'username'=>'required',
        'password'=>'required|confirmed'
    );
    public $menu_rules = array(
        'titlename_t'=>'required'
    );
    /**
     * @author weiyongq@gmail.com
     */
    public function getTotalnum()
    {
        $totalnum = DB::table('accredit_t')
            ->where('fotherid_t','=',0)
            ->count();
        $totalnum = strval($totalnum).'00';
        return $totalnum+100;
    }

    public function post_login(){
        $userdata = array(
            'username'=>Input::get('username'),
            'password'=>Input::get('password')
        );
        if ( Auth::attempt($userdata) )
            {
                // we are now logged in, go to home
                return Redirect::to('admin.html');
            }
        else
            {
                // auth failure! lets go back to the login
                return Redirect::to('login.html')
                    ->with('login_errors', true);
                // pass any error notification you want
                // i like to do it this way :)
            }

    }
    /**
     * manageleft
     *
     * description
     * 
     * @author weiyongq@gmail.com
     */
    public function get_manageleft()
    {
        $id = Auth::user()->id;
        $username = Auth::user()->username;
        $menus = DB::query('select * ,\'\' as subMenus,(select count(*) from accredit
                 where FotherID = T.AccID) as children from accredit T
                 where FotherID=0 and AdminID='.$id.' order by compositor');
        foreach($menus as $item){
            $item->subMenus = DB::query('select * from accredit where FotherID = '.$item->accid);
        }
        $view = View::make('admin.manageleft')
            ->with('menus',$menus)
            ->with('username',$username);
        return $view;
    }

    /**
     * userlist
     *
     * userlist
     * 
     * @author weiyongq@gmail.com
     */
    public function get_list()
    {
        $page = Input::get('page');
        $id = Auth::user()->id;
        $users = DB::table('admin')
            ->where('id','=',$id)
            ->paginate($this->per_page);
        $view = View::make('admin.login_user')
            ->with('users',$users)
            ->with('page',$page);
        return $view;
    }
    /**
     * get_modi
     *
     * description
     * 
     * @author weiyongq@gmail.com
     */
    public function get_modi()
    {
        $page = Input::old('page')?Input::old('page'):Input::get('page');
        $id = Input::old('id')?Input::old('id'):Input::get('id');
        $user = DB::table('admin')
            ->find($id);
        $view = View::make('admin.login_user_modi')
            ->with('id',$id)
            ->with('page',$page)
            ->with('user',$user);
        return $view;
    }
    /**
     * post mode
     *
     * post modi
     * 
     * @author weiyongq@gmail.com
     */
    public function post_modi()
    {
        $page = Input::get('page');
        $id = Input::get('id');
        $input = Input::all();
        $v = Validator::make($input,$this->rules,$this->messages);
        if($v->fails()){
            //            return Redirect::to('login_user_modi.html&id='.$id.'&page='.$page)
            return Redirect::to('login_user_modi.html')
                ->with_errors($v)
                ->with_input();
        }

        DB::table('admin')
            ->where('id','=',$id)
            ->update(array(
                'username'=> Input::get('username'),
                'password'=> Hash::make(Input::get('password'))
            ));
        
        return Redirect::to('login_user.html?page='.$page);
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function get_user_list()
    {
        $page = Input::get('page');
        $users = DB::table('admin')
            ->paginate($this->per_page);
        $view = View::make('admin.user_list')
            ->with('page',$page)
            ->with('users',$users);
        return $view;
    }

    /**
     * @author weiyongq@gmail.com
     */
    public function get_user_add()
    {
        $page = Input::get('page');
        $view = View::make('admin.user_add')
            ->with('page',$page);
        return $view;
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function post_user_add()
    {
        $page = Input::get('page');
        $input = Input::all();
        $v = Validator::make($input,$this->rules,$this->messages);
        if($v->fails()){
            return Redirect::to('user_add.html')
                ->with_errors($v)
                ->with_input();
        }
        DB::table('admin')
            ->insert(array(
                'username'=> Input::get('username'),
                'password'=> Hash::make(Input::get('password')),
                'opens'=> Input::get('opens'),
                'inputime'=> date("Y-m-d H:i:s", time())
            ));
        return Redirect::to('user_list.html?page='.$page);
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function get_user_del()
    {
        $id = Input::get('id');
        DB::table('admin')
            ->where('id','=',$id)
            ->delete();
        return Redirect::to('user_list.html');
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function get_user_modi()
    {
        $page = Input::get('page');
        $id = Input::get('id');
        $user = DB::table('admin')
            ->find($id);
        $view = View::make('admin.user_modi')
            ->with('user',$user)
            ->with('page',$page)
            ->with('id',$id);
        return $view;
    }

    /**
     * @author weiyongq@gmail.com
     */
    public function post_user_modi()
    {
        $page = Input::old('page')?Input::old('page'):Input::get('page');
        $id = Input::old('id')?Input::old('id'):Input::get('id');
        $input = Input::all();
        $v = Validator::make($input,$this->rules,$this->messages);
        if($v->fails()){
            return Redirect::to('user_modi.html')
                ->with_errors($v)
                ->with_input();
        }

        DB::table('admin')
            ->where('id','=',$id)
            ->update(array(
                'username'=> Input::get('username'),
                'password'=> Hash::make(Input::get('password')),
                'opens'=> Input::get('opens'),
            ));
        return Redirect::to('user_list.html?page='.$page);
    }

    /**
     * @author weiyongq@gmail.com
     */
    public function get_qx_list()
    {
        $username = Input::get('username');
        $id = Input::get('id');
        $menus=DB::table('accredit')
            ->where('fotherid','=',0)
            ->where('adminid','=',$id)
            ->order_by('compositor')
            ->get();
        $menuClasses = DB::table('accredit_t')
            ->where('fotherid_t','=',0)
            ->order_by('compositor_t')
            ->get();
        $view = View::make('admin.qx_list')
            ->with('menus',$menus)
            ->with('id',$id)
            ->with('username',$username)
            ->with('menuClasses',$menuClasses);
        return $view;
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function post_qx_addclass()
    {
        $titlename = Input::get('titlename');
        $id = Input::get('id');
        $username = Input::get('username');
        $qx = DB::table('accredit')
            ->where('titlename','=',$titlename)
            ->where('adminid','=',$id)
            ->first();
        if($qx){
            Session::put('error_qx','相同模块已经添加');
        }else{
            Session::forget('error_qx');
            $qx = DB::table('accredit_t')
                ->where('titlename_t','=',$titlename)
                ->first();
            DB::table('accredit')
                ->insert(array(
                    'adminid'=> $id,
                    'accid_t'=>$qx->accid_t,
                    'titlename'=>$qx->titlename_t,
                    'linkname'=>$qx->linkname_t,
                    'fotherid'=>$qx->fotherid_t,
                    'compositor'=>$qx->compositor_t
                ));
        }   
        return Redirect::to('qx_list.html?username='.$username
                            .'&id='.$id);
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function post_qx_delclass()
    {
        $username = Input::get('username');
        $titlename = Input::get('titlename');
        $id = Input::get('id');
        DB::table('accredit')
            ->where('titlename','=',$titlename)
            ->where('adminid','=',$id)
            ->delete();
        return Redirect::to('qx_list.html?username='.$username
                            .'&id='.$id);
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function get_qx_detail()
    {
        $id = Input::get('id');
        $accid = Input::get('accid');
        $accid_t = Input::get('accid_t');
        $menu = DB::table('accredit')
            ->where('accid','=',$accid)
            ->where('adminid','=',$id)
            ->first();
        $titlename = $menu->titlename;
        $menus =DB::table('accredit')
            ->where('fotherid','=',$accid)
            ->where('adminid','=',$id)
            ->get();
        $menus_t = DB::table('accredit_t')
            ->where('fotherid_t','=',$accid_t)
            ->get();
        $view = View::make('admin.qx_detail')
            ->with('id',$id)
            ->with('accid',$accid)
            ->with('accid_t',$accid_t)
            ->with('menus',$menus)
            ->with('menus_t',$menus_t)
            ->with('titlename',$titlename);
        return $view;
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function post_qx_addsmallclass()
    {
        $id = Input::get('id');
        $accid = Input::get('accid');
        $accid_t = Input::get('accid_t');
        $titlename = Input::get('titlename');
        $qx = DB::table('accredit')
            ->where('titlename','=',$titlename)
            ->where('adminid','=',$id)
            ->first();
        if($qx){
            Session::put('error_qx','相同模块已经添加');
        }else{
            Session::forget('error_qx');
            $qx_t = DB::table('accredit_t')
                ->where('titlename_t','=',$titlename)
                ->first();
            DB::table('accredit')
                ->insert(array(
                    'adminid'=> $id,
                    'accid_t'=>$qx_t->accid_t,
                    'titlename'=>$qx_t->titlename_t,
                    'linkname'=>$qx_t->linkname_t,
                    'fotherid'=>$accid,
                    'compositor'=>$qx_t->compositor_t
                ));
        }   
        return Redirect::to('qx_detail.html?id='.$id
                            .'&accid='.$accid
                            .'&accid_t='.$accid_t);

    }
    /**
     * @author weiyongq@gmail.com
     */
    public function post_qx_delsmallclass()
    {
        $delSmallClassID = Input::get('delSmallClassID');
        $id = Input::get('id');
        $accid = Input::get('accid');
        $accid_t = Input::get('accid_t');
        DB::table('accredit')
            ->where('accid','=',$delSmallClassID)
            ->where('adminid','=',$id)
            ->delete();
        return Redirect::to('qx_detail.html?id='.$id
                            .'&accid='.$accid
                            .'accid_t='.$accid_t);
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function get_qxlm_list()
    {
        $menus = DB::query('select * ,\'\' as subMenus from accredit_t
                 where fotherid_t=0 order by compositor_t');
        foreach($menus as $item){
            $item->subMenus = DB::query('select * from accredit_t
             where fotherid_t = '.$item->accid_t.' order by compositor_t');
        }
        $view = View::make('admin.qxlm_list')
            ->with('menus',$menus);
        return $view;
    }

    /**
     * @author weiyongq@gmail.com
     */
    public function get_qxlm_addbig()
    {
        $view = View::make('admin.qxlm_addbig');
        return $view;
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function post_qxlm_addbig()
    {
        $input = Input::all();
        $v = Validator::make($input,$this->menu_rules,$this->messages);
        if($v->fails()){
            return Redirect::to('qxlm_addbig.html')
                ->with_errors($v)
                ->with_input();
        }


        DB::table('accredit_t')
            ->insert(array(
                'titlename_t'=> Input::get('titlename_t'),
                'linkname_t'=> Input::get('linkname_t'),
                'fotherid_t'=> 0,
                'compositor_t'=> $this->getTotalnum()
            ));
        return Redirect::to('qxlm_list.html');
    }



    /**
     * @author weiyongq@gmail.com
     */
    public function get_qxlm_addsmall()
    {
       $accid_t = Input::get('accid_t');
       $view = View::make('admin.qxlm_addsmall')
           ->with('accid_t',$accid_t);
       return $view;
    }
/**
 * @author weiyongq@gmail.com
 */
    public function post_qxlm_addsmall()
    {
        $accid_t = Input::get('accid_t');
        $input = Input::all();
        $v = Validator::make($input,$this->menu_rules,$this->messages);
        if($v->fails()){
            return Redirect::to('qxlm_addsmall.html')
                ->with_errors($v)
                ->with_input()
                ->with('accid_t',$accid_t);
        }
        DB::table('accredit_t')
            ->insert(array(
                'titlename_t'=> Input::get('titlename_t'),
                'linkname_t'=> Input::get('linkname_t'),
                'fotherid_t'=> $accid_t,
                'compositor_t'=> $this->getTotalnum()
            ));
         return Redirect::to('qxlm_list.html');
    }
/**
 * @author weiyongq@gmail.com
 */
    public function get_qxlm_modi()
    {
        $accid_t = Input::get('accid_t');
        $menu = DB::table('accredit_t')
            ->where('accid_t','=',$accid_t)
            ->first();
        $view = View::make('admin.qxlm_modi')
            ->with('menu',$menu);
        return $view;
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function post_qxlm_modi()
    {
        $accid_t = Input::get('accid_t');
        $input = Input::all();
        $v = Validator::make($input,$this->menu_rules,$this->messages);
        if($v->fails()){
            return Redirect::to('qxlm_mode.html')
                ->with_errors($v)
                ->with_input();
        }

        DB::table('accredit_t')
            ->where('accid_t','=',$accid_t)
            ->update(array(
                'titlename_t'=> Input::get('titlename_t'),
                'linkname_t'=> Input::get('linkname_t'),
                'compositor_t'=> Input::get('compositor_t')
            ));
        DB::table('accredit')
            ->where('accid_t','=',$accid_t)
            ->update(array(
                'titlename'=> Input::get('titlename_t'),
                'linkname'=> Input::get('linkname_t'),
                'compositor'=> Input::get('compositor_t')
            ));
        return Redirect::to('qxlm_list.html');
    }


    /**
     * @author weiyongq@gmail.com
     */
    public function get_qxlm_del()
    {
        $accid_t = Input::get('accid_t');
        $fotherid_t = Input::get('fotherid_t');
        DB::table('accredit_t')
            ->where('accid_t','=',$accid_t)
            ->delete();
        if($fotherid_t == 0) {

            DB::table('accredit_t')
                ->where('fotherid_t','=',$fotherid_t)
                ->delete();
        }
        return Redirect::to('qxlm_list.html');
    }

}