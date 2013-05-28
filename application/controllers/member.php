<?php
class Member_Controller extends Controller {
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
            'email'=>'required|email',
            'username'=>'required',
            'userpass'=>'required|confirmed',
            'idcard1'=>'required',
            'mobile'=>'required',
            
        );
    private function getAreas()
    {
        return DB::table('w_area')->get();
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
    private function get_class_by_classid($w_classid){
        return  DB::table('w_member')
            ->where('meid','=',$w_classid)
            ->first();
    }
    public function get_door(){
        return View::make('admin.member.member_door');
    }
    public function get_class_list(){
        $classes = DB::table('w_member')->get();
        return View::make('admin.member.memberclass_list')
            ->with('classes',$classes);
    }
    public function get_temp(){
        return View::make('admin.member.member_temp');
    }
    public function get_class_managelist(){
        $classes = DB::table('w_member')
            ->where('fid','=','0')
            ->get();
        return View::make('admin.member.memberclass_managelist')
            ->with('classes',$classes);
    }
    /**
     * top_memberlist
     *
     * memberlist
     * 
     * @author weiyq@gmai.com
     */
    public function get_top_member_list()
    {
        $page = Input::get('page');
        $classes = DB::table('w_member')
            ->where('fid','=','0')
            ->paginate($this->per_page);
        return View::make('admin.member.top_member_list')
            ->with('classes',$classes)
            ->with('page',$page);
    }

    public function get_top_member_add(){
        $page = Input::get('page');
        $areas =$this::getAreas();
        $cunm_header =strval(DB::table('w_member')->count()); 
        $count =strlen($cunm_header);
        $cnum = $cunm_header.$this->gen_key(8-$count);
        $view = View::make('admin.member.top_member_add')
            ->with('areas',$areas)
            ->with('cnum',$cnum)
            ->with('page',$page);
        return $view;
    }
    public function post_top_member_add(){
        $page = Input::get('page');
        $input = Input::all();

        $v = Validator::make($input,$this->rules,$this->messages);
        if($v->fails()){
            return Redirect::to('member/top_member_add.html')
                ->with_errors($v)
                ->with_input();
        }
        $areaid=Input::get('areaid');
        $areaname = DB::table('w_area')->where('w_id','=',$areaid)
            ->first()->w_name;

        DB::table('w_member')->insert(array(
            'fid'=> 0,
            'areaid'=> Input::get('areaid'),
            'areaname'=> $areaname,
            'userid'=> Input::get('userid'),
            'cnum'=> Input::get('cnum'),
            'recommender_id'=> Input::get('recommender_id'),
            'username'=> Input::get('username'),
            'userlevel'=> Input::get('userlevel'),
            'userpass'=> Input::get('userpass'),
            'sex'=> Input::get('sex'),
            'birth'=> Input::get('birth'),
            'idcard1'=> Input::get('idcard1'),
            'email'=> Input::get('email'),
            'educational'=> Input::get('educational'),
            'profession1'=> Input::get('profession1'),
            'company_name'=> Input::get('company_name'),
            'work_address'=> Input::get('work_address'),
            'address'=> Input::get('address'),
            'postcode1'=> Input::get('postcode1'),
            'tel'=> Input::get('tel'),
            'mobile'=> Input::get('mobile'),
            'commonly_address'=> Input::get('commonly_address'),
            'provinces'=> Input::get('provinces'),
            'postcode2'=> Input::get('postcode2'),
            'immediate_family_name'=> Input::get('immediate_family_name'),
            'profession2'=> Input::get('profession2'),
            'idcard2'=> Input::get('idcard2'),
            'clearing_bank'=> Input::get('clearing_bank'),
            'branch'=> Input::get('branch'),
            'account_name'=> Input::get('account_name'),
            'account_number'=> Input::get('account_number'),
            'question1'=> Input::get('question1'),
            'question1_other'=> Input::get('question1_other'),
            'question2'=> Input::get('question2'),
            'question3'=> Input::get('question3'),
            'question3_cnum'=> Input::get('question3_cnum'),
            'question3_date'=> Input::get('question3_date'),
            'question3_reason'=> Input::get('question3_reason'),
            'regtime'=>  date("Y-m-d H:i:s", time()),
            'lastlogintime'=> date("Y-m-d H:i:s", time()),
            'loginnum'=> Input::get('loginnum'),
            'photo'=> Input::get('photo'),
            'detail'=> Input::get('detail'),
            'msn'=> Input::get('msn'),
            'qq'=> Input::get('qq'),
            'weixin'=> Input::get('weixin'),
            'statu'=> Input::get('statu'),
            'sort'=> Input::get('sort'),
            'views'=> Input::get('views')));
        return  Redirect::to('member/top_member_list.html?page='.$page);
    }
    /**
     * top_member_detail
     *
     * top_member_detail
     * 
     * @author weiyq@gmai.com
     */
    public function get_top_member_detail()
    {
        $page = Input::get('page');
        $id = Input::get('id');
        $member = DB::table('w_member')->where('meid','=',$id)->first();
        $view = View::make('admin/member/top_member_detail')
            ->with('member',$member)
            ->with('page',$page);
        return $view;
    }

    public function get_top_member_modi(){
        $page = Input::get('page');
        $id = Input::get('id');
        $areas =$this::getAreas();
        $member = DB::table('w_member')->where('meid','=',$id)->first();
        $view = View::make('admin/member/top_member_modi')
            ->with('member',$member)
            ->with('areas',$areas)
            ->with('page',$page);
        return $view;
    }
    
    public function post_top_member_modi(){
        $page = Input::get('page');
        $id = Input::get('id');
        $areaid=Input::get('areaid');
        $areaname = DB::table('w_area')->where('w_id','=',$areaid)
            ->first()->w_name;
        DB::table('w_member')->where('meid','=',$id)
            ->update(array(
                'areaid'=> Input::get('areaid'),
                'areaname'=> $areaname,
                'userid'=> Input::get('userid'),
                'cnum'=> Input::get('cnum'),
                'recommender_id'=> Input::get('recommender_id'),
                'username'=> Input::get('username'),
                'userlevel'=> Input::get('userlevel'),
                'userpass'=> Input::get('userpass'),
                'sex'=> Input::get('sex'),
                'birth'=> Input::get('birth'),
                'idcard1'=> Input::get('idcard1'),
                'email'=> Input::get('email'),
                'educational'=> Input::get('educational'),
                'profession1'=> Input::get('profession1'),
                'company_name'=> Input::get('company_name'),
                'work_address'=> Input::get('work_address'),
                'address'=> Input::get('address'),
                'postcode1'=> Input::get('postcode1'),
                'tel'=> Input::get('tel'),
                'mobile'=> Input::get('mobile'),
                'commonly_address'=> Input::get('commonly_address'),
                'provinces'=> Input::get('provinces'),
                'postcode2'=> Input::get('postcode2'),
                'immediate_family_name'=> Input::get('immediate_family_name'),
                'profession2'=> Input::get('profession2'),
                'idcard2'=> Input::get('idcard2'),
                'clearing_bank'=> Input::get('clearing_bank'),
                'branch'=> Input::get('branch'),
                'account_name'=> Input::get('account_name'),
                'account_number'=> Input::get('account_number'),
                'question1'=> Input::get('question1'),
                'question1_other'=> Input::get('question1_other'),
                'question2'=> Input::get('question2'),
                'question3'=> Input::get('question3'),
                'question3_cnum'=> Input::get('question3_cnum'),
                'question3_date'=> Input::get('question3_date'),
                'question3_reason'=> Input::get('question3_reason'),
                'regtime'=>  date("Y-m-d H:i:s", time()),
                'lastlogintime'=> date("Y-m-d H:i:s", time()),
                'loginnum'=> Input::get('loginnum'),
                'photo'=> Input::get('photo'),
                'detail'=> Input::get('detail'),
                'msn'=> Input::get('msn'),
                'qq'=> Input::get('qq'),
                'weixin'=> Input::get('weixin'),
                'statu'=> Input::get('statu'),
                'sort'=> Input::get('sort'),
                'views'=> Input::get('views')));
        return Redirect::to('member/top_member_list.html?page='.$page);
    }
    /**
     * top_member_pass_modi
     *
     * top_member_pass_modi
     * 
     * @author weiyq@gmai.com
     */
    public function get_top_member_pass_modi()
    {
        $page = Input::get('page');
        $id = Input::get('id');
        $member = DB::table('w_member')->where('meid','=',$id)->first();
        $view = View::make('admin/member/top_member_pass_modi')
            ->with('member',$member)
            ->with('page',$page);
        return $view;
    }
    /**
     * post_top_member_pass_modi
     *
     * description
     * 
     * @author weiyongq@gmail.com
     */
    public function post_top_member_pass_modi()
    {
        $page = Input::get('page');
        $id = Input::get('id');
        DB::table('w_member')->where('meid','=',$id)
            ->update(array(
                'userpass'=> Input::get('userpass')
            ));
        return Redirect::to('member/top_member_list.html?page='.$page);
    }

    public function get_top_member_del(){
        $page = Input::get('page');
        $id = Input::get('id');
        DB::table('w_member')->where('meid','=',$id)->delete();
        return Redirect::to('member/top_member_list.html?page='.$page);
    }
    
    public function get_list(){
        $w_classid = Input::get('w_classid');
        $page = Input::get('page');
        $per_page = 25;
        $class = $this->get_class_by_classid($w_classid);
        $details = DB::table('w_member_detail')
            ->where('w_classid','=',$w_classid)
            ->paginate($per_page);
        $view=View::make('admin.member.member_list')
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
        $detail = DB::table('w_member_detail')->where('w_id','=',$id)
            ->first();
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
        $view = View::make('admin.member.member_add')
            ->with('page',$page)
            ->with('class',$class);
        return $view; 
    }
    public function post_add(){
        $page = Input::get('page');
        $w_classid = Input::get('w_classid');
        DB::table('w_member_detail')->insert(array(
            'w_classid' => $w_classid,
            'w_title'=> Input::get('w_title'),
            'w_detail'=> Input::get('w_detail'),
            'w_sort'=> Input::get('w_sort'),
            'w_views'=> Input::get('w_views')));
        return  Redirect::to('member/member_list.html?page='.$page
                             .'&w_classid='.$w_classid);
    }
    public function get_detail(){
        return $this->info('admin.member.member_detail');
    }

    public function get_modi(){
        return Member_Controller::info('admin.member.member_modi');
       
    }
    
    public function post_modi(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $w_classid = Input::get('w_classid');
        DB::table('w_member_detail')->where('w_id','=',$id)
            ->update(array(
                'w_title'=> Input::get('w_title'),
                'w_detail'=> Input::get('w_detail'),
                'w_sort'=> Input::get('w_sort'),
                'w_views'=> Input::get('w_views')));
        return Redirect::to('member/member_list.html?page='.$page
                            .'&w_classid='.$w_classid);
    }
    
    public function get_del(){
        $page = Input::get('page');
        $id = Input::get('w_id');
        $w_classid = Input::get('w_classid');
        DB::table('w_member_detail')->where('w_id','=',$id)->delete();
        return Redirect::to('member/member_list.html?page='.$page
                            .'&w_classid='.$w_classid);
    } 

}