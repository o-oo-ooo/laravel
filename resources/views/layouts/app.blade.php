<!doctype html>
<html>
    <head>
        <base href="{{ config('app.url') }}/" />
        <title>@yield('title') - {{ config('app.name') }}({{ config('app.url') }})</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="Chrome=1,IE=edge" />
        <meta name="Keywords" content="" />
        <link rel="shortcut icon" href="favicon.ico" >
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
        <style type="text/css">
            body{ color:#333; }
            body{ background-color:#edece9; }
            body{ background-position:center 0; }
            body{ color:#333; }
            a:link{ color:#4d97ef; }
            ul.imgList li .showcursor,a.artZoom{ cursor:url(http://192.168.1.102:8080/static/image/magnifier_b.cur), pointer; }
            .artZoomBox a.maxImgLink { cursor:url(http://192.168.1.102:8080/static/image/magnifier_s.cur), pointer; }
            a.artZoom2{ cursor:url(http://192.168.1.102:8080/static/image/magnifier_b.cur), pointer; }
            a.artZoom3{ cursor:url(http://192.168.1.102:8080/static/image/magnifier_b.cur), pointer; }
            .artZoomBox a.maxImgLink3 { cursor:url(http://192.168.1.102:8080/static/image/magnifier_s.cur), pointer; }
            a.artZoomAll{ cursor:url(http://192.168.1.102:8080/static/image/magnifier_b.cur), pointer; }
            .artZoomBox a.maxImgLinkAll { cursor:url(http://192.168.1.102:8080/static/image/magnifier_s.cur), pointer; }
        </style>
        <script type="text/javascript">
            var thisSiteURL = 'http://192.168.1.102:8080/';
            var thisTopicLength = '1000';
            var thisMod = 'plaza';
            var thisCode = '';
            var thisFace = '';
            var YXM_POP_Title = '';
            var YXM_CODE_COM = '1';
            var YXM_CODE_FOR = '1';
            var __N_WEIBO__ = '微博';
            var __P_WEIBO__ = '微博';
            var __WEIQUN__ = '微群';
            var publish_in_str = [""];
            var __ALERT__ = '1';
            var isQunClosed = false;
            function faceError(imgObj) {
                var errorSrc = 'http://192.168.1.102:8080/images/noavatar.gif';
                imgObj.src = errorSrc;
            }
        </script>
        <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    </head>
    <body>
        <div class="j-wrap">
            <div class="g-hd2">
                <div class="g-doc">
                    <div class="m-hd2">
                        <ul class="hleft">
                            <li class="logo">
                                <a href="index.php?mod=topic" title="记事狗"><img src="images/logo.png" style="_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,sizingMethod=crop)"/></a>
                            </li>
                            <li class="t_hdnav t_hdnav_index">
                                <a title="交流分享" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic&code=topicnew&orderby=post&top_nav=index">交流分享</a>
                                <script type="text/javascript">
                                $(document).ready(function () {
                                    $(".t_hdnav_index").mouseover(function () {
                                        $(".t_hdnav_box_index").show();
                                        $(".t_hdnav_index").addClass("on");
                                    });
                                    $(".t_hdnav_index").mouseout(function () {
                                        $(".t_hdnav_box_index").hide();
                                        $(".t_hdnav_index").removeClass("on");
                                    });
                                });
                                </script>
                                <ul class="t_hdnav_box t_hdnav_box_index" style="display: none;">
                                    <div class="main_menu_box">
                                        <dl>
                                            <dt>
                                                <a title="我的" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic&code=myhome&top_nav=index">我的</a>
                                            </dt>
                                            <dd>
                                                <a title="我的首页" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic&code=myhome&top_nav=index&side_nav=my_home">我的首页</a>
                                                <a title="评论我的" target="_parent" href="http://192.168.1.102:8080/index.php?mod=comment&code=inbox&top_nav=index&side_nav=comment_my">评论我的</a>
                                                <a title="我的私信" target="_parent" href="http://192.168.1.102:8080/index.php?mod=pm&code=list&top_nav=index&side_nav=my_pm">我的私信</a>
                                                <a title="@提到我" target="_parent" href="http://192.168.1.102:8080/index.php?mod=at&top_nav=index&side_nav=at_my">@提到我</a>
                                                <a title="我的微群" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic&code=qun&top_nav=index&side_nav=my_qun">我的微群</a>
                                                <a title="我的收藏" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic_favorite&top_nav=index&side_nav=my_favorite">我的收藏</a>
                                                <a title="我的话题" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic_tag&top_nav=index&side_nav=my_tag_topic">我的话题</a>
                                                <a title="个人主页" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic&code=myblog&top_nav=index&side_nav=my_index">个人主页</a>
                                                <a title="收藏我的" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic_favorite&code=me&top_nav=index&side_nav=favorite_my">收藏我的</a>
                                                <a title="赞我的" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic&code=myblog&type=mydig&top_nav=index&side_nav=dig_my">赞我的</a>
                                                <a title="我的相册" target="_parent" href="http://192.168.1.102:8080/index.php?mod=album&top_nav=index&side_nav=my_album">我的相册</a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <a title="频道" target="_parent" href="http://192.168.1.102:8080/index.php?mod=channel&top_nav=index">频道</a>
                                            </dt>
                                            <dd>
                                                <a title="我的频道" target="" href="http://192.168.1.102:8080/index.php?mod=topic&code=channel&top_nav=index&side_nav=my_channel">我的频道</a>
                                                <a title="提问中心" target="" href="http://192.168.1.102:8080/index.php?mod=channel&id=7&top_nav=index&side_nav=channel_7">提问中心</a>
                                                <a title="建议中心" target="" href="http://192.168.1.102:8080/index.php?mod=channel&id=8&top_nav=index&side_nav=channel_8">建议中心</a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <a title="随便看看" target="_parent" href="http://192.168.1.102:8080/index.php?mod=plaza&top_nav=index">随便看看</a>
                                            </dt>
                                            <dd>
                                                <a title="广场" target="_parent" href="http://192.168.1.102:8080/index.php?mod=plaza&top_nav=index&side_nav=plaza">广场</a>
                                                <a title="图片墙" target="_parent" href="http://192.168.1.102:8080/index.php?mod=plaza&code=new_pic&top_nav=index&side_nav=plaza_new_pic">图片墙</a>
                                                <a title="资讯" target="_parent" href="http://192.168.1.102:8080/index.php?mod=cms&top_nav=index&side_nav=cms">资讯</a>
                                            </dd>
                                        </dl>
                                    </div>
                                </ul>
                            </li>
                            <li class="t_hdnav t_hdnav_mall">
                                <a title="积分商城" target="_parent" href="http://192.168.1.102:8080/index.php?mod=mall&top_nav=mall">积分商城</a>
                            </li>
                            <li class="t_hdnav t_hdnav_app">
                                <a title="应用" target="_parent" href="http://192.168.1.102:8080/index.php?mod=qun&top_nav=app">应用</a>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $(".t_hdnav_app").mouseover(function () {
                                            $(".t_hdnav_box_app").show();
                                            $(".t_hdnav_app").addClass("on");
                                        });
                                        $(".t_hdnav_app").mouseout(function () {
                                            $(".t_hdnav_box_app").hide();
                                            $(".t_hdnav_app").removeClass("on");
                                        });
                                    });
                                </script>
                                <ul class="t_hdnav_box t_hdnav_box_app" style="display: none;">
                                    <div class="main_menu_box">
                                        <dl>
                                            <dt>
                                                <a>互动</a>
                                            </dt>
                                            <dd>
                                                <a title="微群" target="_parent" href="http://192.168.1.102:8080/index.php?mod=qun&top_nav=app&side_nav=qun">微群</a>
                                                <a title="投票" target="_parent" href="http://192.168.1.102:8080/index.php?mod=vote&top_nav=app&side_nav=vote">投票</a>    
                                                <a title="活动" target="_parent" href="http://192.168.1.102:8080/index.php?mod=event&top_nav=app&side_nav=event">活动</a>
                                                <a title="微直播" target="_parent" href="http://192.168.1.102:8080/index.php?mod=live&top_nav=app&side_nav=live">微直播</a>
                                                <a title="微访谈" target="_parent" href="http://192.168.1.102:8080/index.php?mod=talk&top_nav=app&side_nav=talk">微访谈</a>
                                                <a title="有奖转发" target="_parent" href="http://192.168.1.102:8080/index.php?mod=reward&top_nav=app&side_nav=reward">有奖转发</a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <a>工具</a>
                                            </dt>
                                            <dd>
                                                <a title="附件文档" target="_parent" href="http://192.168.1.102:8080/index.php?mod=attach&code=new&top_nav=app&side_nav=attach">附件文档</a>
                                                <a title="勋章" target="_parent" href="http://192.168.1.102:8080/index.php?mod=other&code=medal&top_nav=app&side_nav=medal">勋章</a>
                                                <a title="上墙" target="_parent" href="http://192.168.1.102:8080/index.php?mod=wall&code=control&top_nav=app&side_nav=wall">上墙</a>
                                                <a title="图片签名档" target="_parent" href="http://192.168.1.102:8080/index.php?mod=tools&code=qmd&top_nav=app&side_nav=qmd">图片签名档</a>
                                                <a title="微博秀" target="_parent" href="http://192.168.1.102:8080/index.php?mod=show&code=show&top_nav=app&side_nav=weibo_show">微博秀</a>
                                            </dd>
                                        </dl>
                                    </div>
                                </ul>
                            </li>
                            <li class="t_hdnav t_hdnav_profile">
                                <a title="找人" target="_parent" href="http://192.168.1.102:8080/index.php?mod=profile&code=search&top_nav=profile">找人</a>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $(".t_hdnav_profile").mouseover(function () {
                                            $(".t_hdnav_box_profile").show();
                                            $(".t_hdnav_profile").addClass("on");
                                        });
                                        $(".t_hdnav_profile").mouseout(function () {
                                            $(".t_hdnav_box_profile").hide();
                                            $(".t_hdnav_profile").removeClass("on");
                                        });
                                    });
                                </script>
                                <ul class="t_hdnav_box t_hdnav_box_profile" style="display: none;">
                                    <div class="main_menu_box">
                                        <dl> 
                                            <dt>
                                                <a>关系</a>  
                                            </dt>
                                            <dd>
                                                <a title="关注的人" target="_parent" href="
                                                   http://192.168.1.102:8080/index.php?mod=follow&top_nav=profile&side_nav=my_follow">关注的人</a>
                                                <a title="我的粉丝" target="_parent" href="
                                                   http://192.168.1.102:8080/index.php?mod=fans&top_nav=profile&side_nav=my_fans">我的粉丝</a>
                                                <a title="黑名单" target="_parent" href="
                                                   http://192.168.1.102:8080/index.php?mod=blacklist&top_nav=profile&side_nav=my_blacklist">黑名单</a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <a>发现</a>  
                                            </dt>
                                            <dd>
                                                <a title="同城用户" target="_parent" href="http://192.168.1.102:8080/index.php?mod=profile&code=search&top_nav=profile&side_nav=samecity">同城用户</a>
                                                <a title="同兴趣" target="_parent" href="http://192.168.1.102:8080/index.php?mod=profile&code=maybe_friend&top_nav=profile&side_nav=maybe_friend">同兴趣</a>
                                                <a title="同类人" target="_parent" href="http://192.168.1.102:8080/index.php?mod=profile&code=usertag&top_nav=profile&side_nav=usertag">同类人</a>
                                                <a title="同分组" target="_parent" href="http://192.168.1.102:8080/index.php?mod=profile&code=role&top_nav=profile&side_nav=profile_role">同分组</a>
                                                <a title="邀请好友" target="_parent" href="http://192.168.1.102:8080/index.php?mod=profile&code=invite&top_nav=profile&side_nav=invite">邀请好友</a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <a>推荐</a>  
                                            </dt>
                                            <dd>
                                                <a title="达人榜" target="_parent" href="http://192.168.1.102:8080/index.php?mod=top&code=member&top_nav=profile&side_nav=top_member">达人榜</a>
                                                <a title="推荐用户" target="_parent" href="http://192.168.1.102:8080/index.php?mod=other&code=media&top_nav=profile&side_nav=recommend_member">推荐用户</a>
                                                <a title="名人堂" target="_parent" href="http://192.168.1.102:8080/index.php?mod=people&top_nav=profile&side_nav=recommend_people">名人堂</a>
                                            </dd>
                                        </dl>
                                    </div>
                                </ul>
                            </li>
                            <li class="sweibo">
                                <div class="searchTool">
                                    <form method="get" action="#" name="headSearchForm" id="headSearchForm" onsubmit="return headDoSearch();">
                                        <input id="headSearchType" name="searchType" type="hidden" value="topicSearch">
                                        <div class="selSearch">
                                            <div class="nowSearch" id="headSlected" onclick="
                                                if (document.getElementById('headSel').style.display == 'none') {
                                                    document.getElementById('headSel').style.display = 'block';
                                                } else {
                                                    document.getElementById('headSel').style.display = 'none';
                                                };
                                                return false;
                                        " onmouseout="drop_mouseout('head');">微博</div>
                                            <div class="btnSel">
                                                <a href="#" onclick="
                                                if (document.getElementById('headSel').style.display == 'none') {
                                                    document.getElementById('headSel').style.display = 'block';
                                                } else {
                                                    document.getElementById('headSel').style.display = 'none';
                                                }
                                                ;
                                                return false;" onmouseout="drop_mouseout('head');"></a>
                                            </div>
                                            <div class="clear"></div>
                                            <ul class="selOption" id="headSel" style="display:none;">
                                                <li><a href="#" onclick="return search_show('head', 'userSearch', this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">用户</a></li>
                                                <li><a href="#" onclick="return search_show('head', 'tagSearch', this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">话题</a></li>
                                                <li><a href="#" onclick="return search_show('head', 'topicSearch', this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">微博</a></li>  
                                                <li><a href="#" onclick="return search_show('head', 'voteSearch', this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">投票</a></li>   
                                                <li><a href="#" onclick="return search_show('head', 'qunSearch', this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">微群</a></li>  
                                            </ul> 
                                        </div> 
                                        <input class="txtSearch" id="headq" name="headSearchValue" type="text" value="请输入关键字" onfocus="
                                        if (this.value == '请输入关键字') {
                                            this.value = '';
                                        }" onblur="if (this.value == '') {
                                                        this.value = '请输入关键字';
                                                    }"/>
                                        <div class="btnSearch">
                                            <a href="#" onclick="javascript:return headDoSearch();">
                                                <span class="lbl"></span>
                                            </a>
                                        </div> 
                                    </form> 
                                </div> 
                            </li>  
                        </ul>  
                        <ul class="hright"> 
                            <li style="margin:0; width:55px;">
                                <a href="javascript:viod(0)" rel="nofollow" title="登录即可分享新鲜事" onclick="ShowLoginDialog();
                                                                            return false;">
                                    <em style="color:#FFF">快捷登录</em>
                                </a>
                            </li>  
                        </ul> 
                    </div>  
                    <div class="changeTheme">
                        <a href="index.php?mod=skin" title="更换皮肤" javascript:void(0)></a>
                    </div> 
                </div> 
            </div>   
            <div class="g-content"> 
                <div class="g-doc"> 
                    <div class="Menu"> 
                        <div class="leftNav" id="leftNav">    
                            <div class="blackBox"></div> 
                            <ul class="leftNav_main">  
                                <h3><a title="我的" target="_parent" href="http://192.168.1.102:8080/index.php?mod=topic&code=myhome&top_nav=index">我的</a></h3>    
                                <li class="left_nav_menu" currname="my_home">  
                                    <i class="ico_menu"><img src="./images/icon/index_my_my_home.jpg" /></i>  
                                    <a href="http://192.168.1.102:8080/index.php?mod=topic&code=myhome&top_nav=index&side_nav=my_home" hidefocus="true" title="我的首页" target="_parent"><var>我的首页</var></a> 
                                </li> 
                                <li class="left_nav_menu" currname="comment_my">  
                                    <i class="ico_menu"><img src="./images/icon/index_my_comment_my.jpg" /></i>  
                                    <a href="http://192.168.1.102:8080/index.php?mod=comment&code=inbox&top_nav=index&side_nav=comment_my" hidefocus="true" title="评论我的" target="_parent"> <var>评论我的</var>  </a> 
                                </li>    
                                <li class="left_nav_menu" currname="my_pm">  
                                    <i class="ico_menu"><img src="./images/icon/index_my_my_pm.jpg" /></i>  
                                    <a href="http://192.168.1.102:8080/index.php?mod=pm&code=list&top_nav=index&side_nav=my_pm" hidefocus="true" title="我的私信" target="_parent"> <var>我的私信</var>  </a> 
                                </li>
                                <li class="left_nav_menu" currname="comment_my">  
                                    <i class="ico_menu"><img src="./images/icon/index_my_at_my.jpg" /></i>  
                                    <a href="http://192.168.1.102:8080/index.php?mod=at&top_nav=index&side_nav=at_my" hidefocus="true" title="@提到我" target="_parent"><var>@提到我</var></a> 
                                </li>    
                                <li class="left_nav_menu" currname="my_qun">  
                                    <i class="ico_menu"><img src="./images/icon/index_my_my_qun.jpg" /></i>  
                                    <a href="http://192.168.1.102:8080/index.php?mod=topic&code=qun&top_nav=index&side_nav=my_qun" hidefocus="true" title="我的微群" target="_parent"> <var>我的微群</var>  </a> 
                                </li>
                                <li id="side_nav_more_my"> 
                                    <a href="javascript:void(0);" id="zk1">更多<i></i></a>
                                    <ul class="side_nav_more_box" id="side_nav_more_box_my">
                                        <li class="left_nav_menu" currname="my_favorite">
                                            <a href="http://192.168.1.102:8080/index.php?mod=topic_favorite&top_nav=index&side_nav=my_favorite" hidefocus="true" title="我的收藏" target="_parent">我的收藏  </a> 
                                        </li>
                                        <li class="left_nav_menu" currname="my_tag_topic"> 
                                            <a href="http://192.168.1.102:8080/index.php?mod=topic_tag&top_nav=index&side_nav=my_tag_topic" hidefocus="true" title="我的话题" target="_parent">我的话题  </a>
                                        </li>    
                                        <li class="left_nav_menu" currname="my_index"> 
                                            <a href="http://192.168.1.102:8080/index.php?mod=topic&code=myblog&top_nav=index&side_nav=my_index" hidefocus="true" title="个人主页" target="_parent">个人主页  </a> 
                                        </li>    
                                        <li class="left_nav_menu" currname="favorite_my"> 
                                            <a href="http://192.168.1.102:8080/index.php?mod=topic_favorite&code=me&top_nav=index&side_nav=favorite_my" hidefocus="true" title="收藏我的" target="_parent">收藏我的  </a> 
                                        </li>    
                                        <li class="left_nav_menu" currname="dig_my"> 
                                            <a href="http://192.168.1.102:8080/index.php?mod=topic&code=myblog&type=mydig&top_nav=index&side_nav=dig_my" hidefocus="true" title="赞我的" target="_parent">赞我的  </a> 
                                        </li>    
                                        <li class="left_nav_menu" currname="my_album"> 
                                            <a href="http://192.168.1.102:8080/index.php?mod=album&top_nav=index&side_nav=my_album" hidefocus="true" title="我的相册" target="_parent">我的相册  </a> 
                                        </li>
                                    </ul> 
                                       <script type="text/javascript">
                                        $(function () {
                                            $("#side_nav_more_my").mouseover(function () {
                                                $("#side_nav_more_my #zk1 i").css("top", "1px");
                                                $("#side_nav_more_box_my").show();
                                            });
                                            $("#side_nav_more_my").mouseout(function () {
                                                $("#side_nav_more_my #zk1 i").css("top", "2px");
                                                $("#side_nav_more_box_my").hide();
                                            });
                                        });
                                    </script> 
                                </li>  
                            </ul>  
                            <div class="blackBox"></div> 
                            <ul class="leftNav_main">  
                                <h3><a title="频道" target="_parent" href="http://192.168.1.102:8080/index.php?mod=channel&top_nav=index">频道</a></h3>
                                <li class="left_nav_menu" currname="my_channel">
                                    <a href="http://192.168.1.102:8080/index.php?mod=topic&code=channel&top_nav=index&side_nav=my_channel" hidefocus="true" title="我的频道" target=""> <var>我的频道</var>  </a> 
                                </li>    
                                <li class="left_nav_menu" currname="channel_7">  
                                    <a href="http://192.168.1.102:8080/index.php?mod=channel&id=7&top_nav=index&side_nav=channel_7" hidefocus="true" title="提问中心" target=""> <var>提问中心</var>  
                                        <span id="nav_num_channel_7">  </span>  
                                    </a> 
                                </li>    
                                <li class="left_nav_menu" currname="channel_8">  
                                    <a href="http://192.168.1.102:8080/index.php?mod=channel&id=8&top_nav=index&side_nav=channel_8" hidefocus="true" title="建议中心" target=""> <var>建议中心</var>  <span id="nav_num_channel_8">  </span>  </a> 
                                </li>    
                                <li id="side_nav_more_channel"> 
                                    <a href="javascript:void(0);" id="zk1">更多<i></i></a> 
                                    <ul class="side_nav_more_box" id="side_nav_more_box_channel">    
                                        <div class="leftChannel"> 
                                            <a name="官方站务" href="index.php?mod=channel&id=1" class="lcb">官方站务</a> 
                                            <div class="lca_box">  
                                                <a name="站务处理" href="index.php?mod=channel&id=3" class="lca">站务处理</a>  
                                                <a name="官方公告" href="index.php?mod=channel&id=4" class="lca">官方公告</a>  
                                            </div> 
                                        </div>  
                                        <div class="leftChannel"> 
                                            <a name="网友交流" href="index.php?mod=channel&id=2" class="lcb">网友交流</a> 
                                            <div class="lca_box">  
                                                <a name="新人报到" href="index.php?mod=channel&id=5" class="lca">新人报到</a>  
                                                <a name="好图分享" href="index.php?mod=channel&id=6" class="lca">好图分享</a>  
                                            </div> 
                                        </div>  
                                        <div class="leftChannel"> 
                                            <a name="提问中心" href="index.php?mod=channel&id=7" class="lcb">提问中心</a> 
                                            <div class="lca_box">  </div> 
                                        </div>  
                                        <div class="leftChannel"> 
                                            <a name="建议中心" href="index.php?mod=channel&id=8" class="lcb">建议中心</a> 
                                            <div class="lca_box">  </div> 
                                        </div>   
                                    </ul> 
                                    <script type="text/javascript">
                                        $(function () {
                                            $("#side_nav_more_channel").mouseover(function () {
                                                $("#side_nav_more_channel #zk1 i").css("top", "1px");
                                                $("#side_nav_more_box_channel").show();
                                            });
                                            $("#side_nav_more_channel").mouseout(function () {
                                                $("#side_nav_more_channel #zk1 i").css("top", "2px");
                                                $("#side_nav_more_box_channel").hide();
                                            });
                                        });
                                    </script> 
                                </li>  
                            </ul>  
                            <div class="blackBox"></div> 
                            <ul class="leftNav_main">  
                                <h3><a title="随便看看" target="_parent" href="http://192.168.1.102:8080/index.php?mod=plaza&top_nav=index">随便看看</a></h3>    
                                <li class="left_nav_menu
                                                                                                                  " currname="plaza">  
                                    <a href="
                                                        http://192.168.1.102:8080/index.php?mod=plaza&top_nav=index&side_nav=plaza" 
                                                        hidefocus="true" title="广场" target="_parent"> <var>广场</var>  </a> 
                                </li>    
                                <li class="left_nav_menu
                                                                                                               " currname="plaza_new_pic">  
                                    <a href="
                                                                http://192.168.1.102:8080/index.php?mod=plaza&code=new_pic&top_nav=index&side_nav=plaza_new_pic" 
                                                                hidefocus="true" title="图片墙" target="_parent"> <var>图片墙</var>  </a> 
                                </li>    
                                <li class="left_nav_menu
                                                                                                                 " currname="cms">  
                                    <a href="
                                                      http://192.168.1.102:8080/index.php?mod=cms&top_nav=index&side_nav=cms" 
                                    hidefocus="true" title="资讯" target="_parent"> <var>资讯</var>  </a> 
                                </li>    
                            </ul>  
                        </div> 
                        <script type="text/javascript" src="{{ mix('/js/nav.js') }}"></script> 
                        <script type="text/javascript">
                            $(document).ready(function () {
                                get_new_topic_nums();
                            });
                            function circle_nav_num() {
                                get_new_topic_nums();
                                setTimeout('circle_nav_num();', 60000);
                            }
                            setTimeout('circle_nav_num();', 60000);
                            $(".left_nav_menu").bind('click', function () {
                                var name = $(this).attr("currname");
                                if (name) {
                                    modify_new_topic_nums(name);
                                }
                            });
                            /*兼容小分辨率暂时解决办法*/
                            var screenH = window.screen.height;
                            if (screenH < 750)
                            {
                                $(".Menu").css("position", "static");
                                $("#leftNav").append('<p class="btn_group">折叠菜单</p>');
                                $(".btn_group").click(function () {
                                    $(".leftNav_main > li").slideToggle();
                                });
                            }
                        </script> 
                    </div> 
                    @yield('contents')
                </div>
            </div>
            <div class="g-ft">
                <div class="m-ft">
                    <div class="foot-line">
                        <p>友情链接：</p>
                        <a href="http://www.jishigou.net" target="_blank">记事狗微博</a>
                        <a href="http://www.jishigou.net" target="_blank">免费开源微博系统</a>
                        <a href="http://wangqibao.com" target="_blank">企业社交平台</a>
                    </div>
                    <div class="foot-line">
                        <p>找感兴趣的人</p>
                        <a href="index.php?mod=people" target="_parent">名人堂</a>
                        <a href="index.php?mod=other&code=media" target="_parent">推荐用户</a>
                        <a href="index.php?mod=top&code=member" target="_parent">排行榜</a>
                        <a href="index.php?mod=profile&code=maybe_friend" target="_parent">最新评论</a>
                    </div>
                    <div class="foot-line">
                        <p>精彩内容</p>
                        <a href="index.php?mod=live" target="_parent">微直播</a>
                        <a href="index.php?mod=talk" target="_parent">微访谈</a>
                        <a href="index.php?mod=plaza" target="_parent">官方推荐</a>
                        <a href="index.php?mod=topic&code=recd" target="_parent">最新微博</a>
                    </div>
                    <div class="foot-line">
                        <p>热门应用</p>
                        <a href="index.php?mod=show&code=show" target="_parent">微博秀</a>
                        <a href="index.php?mod=topic&code=photo" target="_parent">图片墙</a>
                        <a href="index.php?mod=wall&code=control" target="_parent">上墙</a>
                        <a href="index.php?mod=tools&code=qmd" target="_parent">图片签名档</a>
                    </div>
                    <div class="foot-line">
                        <p>关于我们</p>
                        <a href="index.php?mod=other&code=contact" target="_parent">联系我们</a>
                        <a href="index.php?mod=other&code=vip_intro" target="_parent">申请V认证</a>
                        <a href="http://www.miibeian.gov.cn/" target="_parent">备案申请中</a>
                    </div>
                    <div class="foot-line">
                        <p>手机玩微博</p>
                        <a href="index.php?mod=other&code=iphone" target="_parent">iPhone客户端</a>
                        <a href="index.php?mod=other&code=android" target="_parent">Android客户端</a>
                        <a href="index.php?mod=other&code=mobile" target="_parent">3G网页</a>
                        <a href="index.php?mod=other&code=wap" target="_parent">WAP访问</a>
                    </div>
                    <span></span>
                    <span>
                        <div style="display:none"></div>
                    </span>
                    <span class="foot-line" style="display:none;">
                        <span title="0.41294 Second ,&nbsp;Gzip Enable.">网页执行信息</span>
                    </span>
                </div>
            </div>
            <div id="f-top" class="f-top">
                <a href="/#" class="f-top-a" title="返回顶部"></a>
            </div> 
            <div id="show_message_area"></div>      
            <div id="ajax_output_area"></div>   
            <script type="text/javascript">
                $(document).ready(function () {
                    //图片延迟加载
                    $("ul.imgList img, div.avatar img.lazyload").lazyload({
                        skip_invisible: false,
                        threshold: 200,
                        effect: "fadeIn"
                    });
                    //微博悬浮显示已赞用户
                    showdiguser();
                    //显示推荐人
                    showrcduser();
                    //返回顶部
                    $('.f-top-a').click(function (e) {
                        e.stopPropagation();
                        $('html, body').animate({scrollTop: 0}, 300);
                        backTop();
                        return false;
                    });
                });
                window.onscroll = backTop;
                function backTop() {
                    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                    if (scrollTop == 0) {
                        document.getElementById('f-top').style.display = "none";
                    } else {
                        document.getElementById('f-top').style.display = "block";
                    }
                }
                backTop();
            </script>
        </div>
        <div style="clear:both;text-align:center;margin:5px auto;">
            Powered by <a href="http://www.JishiGou.net/" target="_blank"><strong>JishiGou 4.7.4 </strong></a>
            <span> &copy; 2005 - 2020 <a href="http://www.cenwor.com/" target="_blank">Cenwor Inc.</a></span>
        </div>
    </body>
</html> 