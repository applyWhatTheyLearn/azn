<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        <!--
        body {
            background-color:#CCCC99;
        }
        -->
    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
    <div id="ClassList">

        <div id="ClassList_title">
            <h3 class="areainfo">&nbsp;[{{$area->w_name}} ]</h3>
            <h3>&nbsp;产品分类 | <a href="area_list.html"><font color="#99FFFF">返回区域列表</font></a></h3>
            <p>&nbsp;[ 分类名称 ] | <a href="proClass_managelist.html?areaid={{$area->w_id}}"  target="window_main"><font color="#FFCC00">分类管理</font></a></p>
        </div>

        <div id="classlist_detail">
            <ul>
                @foreach($classes as $class)
                @if(count(explode('-',$class->abs)) == 2)
                <li><a href="pro_list.html?w_classid={{$class->l_id}}&areaid={{$area->w_id}}&level=1" title="顶层分类名称" target="window_main">{{$class->l_name}}</a></li>
                @else
                <div id="nav2">
                    <ul>
                        @if(count(explode('-',$class->abs)) == 3)
                        <li><a href="pro_list.html?w_classid={{$class->l_id}}&areaid={{$area->w_id}}&level=2" title="2层分类名称" target="window_main">{{$class->l_name}}</a></li>
                        @else
                        <div id="nav3">
                            <ul>
                                @if(count(explode('-',$class->abs)) == 4)
                                <li><a href="pro_list.html?w_classid={{$class->l_id}}&areaid={{$area->w_id}}&level=3" title="3层分类名称" target="window_main">{{$class->l_name}}</a></li>
                                @endif
                            </ul>
                        </div>
                        @endif
                    </ul>
                </div>
                @endif
                @endforeach
            </ul>
        </div>

    </div>
</div>
</body>
</html>
