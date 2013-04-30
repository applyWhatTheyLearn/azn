<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>一款纯CSS制作的二级下拉菜单</title>
<style>
#nav, #nav ul { 
 padding: 0;
 margin: 0;
 list-style: none;
}
#nav li { 
 float: left;
 position: relative;
 width: 10em;
 border: 1px solid #B0C4DE;
 background-color: #E7EDF5;
 color: #2D486C;
 font: 80% Verdana, Geneva, Arial, Helvetica, sans-serif;
 margin-right: 1em;
}
#nav a:link, #nav a:visited {
 display: block;
 text-decoration: none;
 padding-left: 1em;
 color: #2D486C;
}
#nav ul { 
 display: none;
 position: absolute;
 padding-top: 0.5em;
}
#nav ul li {
 float: none;
 border: 0 none transparent;
 border-bottom: 1px solid #E7EDF5;
 background-color: #F1F5F9;
 font-size: 100%;
 margin: 0;
 margin-bottom: 0.5em;
 padding: 0;
}
#nav li:hover ul {
 display: block;
}
</style>
</head>
<body>
<ul id="nav">
 <li><a href="http://www.CsrCode.cn">CsrCode.Cn</a>
  <ul>
<li><a href="http://www.CsrCode.cn/html/txdm/">网页特效</a></li>
<li><a href="http://www.33567.cn/">团购导航</a></li>
<li><a href="http://www.7caidy.com/">Qvod电影</a></li>
<li><a href="http://ww.33567.cn/">搜搜问问</a></li>
<li><a href="http://Changshi.CsrCode.Cn/">生活常识</a></li>
<li><a href="http://Links.CsrCode.Cn/">链接平台</a></li>
<li><a href="http://Download.CsrCode.Cn/">源码下载</a></li>
  </ul>
 </li>
 <li><a href="http://www.CsrCode.cn">网页特效①</a>
  <ul>
<li><a href="http://www.CsrCode.cn/html/txdm/cddh/" title="">菜单导航特效</a></li>
<li><a href="http://www.CsrCode.cn/html/txdm/tcys/" title="">图层样式特效</a></li>
<li><a href="http://www.CsrCode.cn/html/txdm/ljwb/" title="">链接文本特效</a></li>
<li><a href="http://www.CsrCode.cn/html/txdm/txtx/" title="">图形图像特效</a></li>
<li><a href="http://www.CsrCode.cn/html/txdm/sbtx/" title="">鼠标特效代码</a></li>
<li><a href="http://www.CsrCode.cn/html/txdm/ymck/" title="">页面窗口特效</a></li>
  </ul>