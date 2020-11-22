@extends('layouts.app')

@section('title', '首页')

@section('contents')
<script type="text/javascript" src="{{ mix('/js/imgAuto.js') }}"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $(".f_out").imgAuto();
        $(".plaza_vplay").imgAuto();
    });
</script> 
<div class="appframe"> 
    <div class="plaze_header_nav">
        <style type="text/css">
            .main{ padding-top:0;}
            .sideBar { padding-top:20px;}
            .topicNew { 
                width: auto;
                background:none;
                position: relative;
                margin: 0;
                padding: 0;
                float: right;
                border: none;
            }
            .topicNew .new_nav a{ box-shadow: 2px 2px 0px #eee;background:#666; padding: 5px 9px;margin-right: 5px;color: #fff;}
            .topicNew .new_nav .current,.topicNew .new_nav a:hover{ background: #c50;}
            .right_tj_box span { width:171px;}
            .right_tj_box { width:190px;}
            .new_nav{ float:left; padding-top:0;}
            .list_title{ float:right; margin:0; position:absolute; right: 10px; border:none;}
            .listyle{ width:150px;}
            .sideul li{ width:190px;}
            .s-newpic{ background:none; float: left; width: 1005px;}
            .topic_pic{ padding:20px 0 ;}
            .appframe{padding-top:0;}
            .exp-wrap .plaze_header_nav {
                width: 940px;
                margin: 0 auto;
                padding-bottom: 15px;
                padding: 0 0 20px 0;
                background:none;
            }
            .exp-wrap .sideBar{ padding-top:0;}
            .exp-wrap .appframeTitle{ padding:0;}
        </style> 
        <div class="appframeTitle"> 
            <span class="mleft">广场</span> 
            <div class="topicNew"> 
                <div class="new_nav"> 
                    <a href="index.php?mod=plaza" class="current">首页</a> 
                    <a href="index.php?mod=plaza&code=new_topic" class="">最新发布</a> 
                    <a href="index.php?mod=plaza&code=new_dig" class="">最新赞</a> 
                    <a href="index.php?mod=plaza&code=new_reply" class="">最新评论</a> 
                    <a href="index.php?mod=plaza&code=new_forward" class="">最新转发</a> 
                    <a href="index.php?mod=plaza&code=hot_dig" class="">热门赞</a> 
                    <a href="index.php?mod=plaza&code=hot_reply" class="">热门评论</a> 
                    <a href="index.php?mod=plaza&code=hot_forward" class="">热门转发</a> 
                    <a href="index.php?mod=plaza&code=recommend" class="">推荐</a>  
                    <a href="index.php?mod=plaza&code=new_tc" class="">同城微博</a>  
                </div> 
            </div> 
        </div> 
    </div> 
    <div class="appframeWrap"> 
        <div class="plaza_w"> 
            <div class="plaza_vword"> 
                <h2>有图微博</h2>
                暂无任何推荐
            </div>
            <div class="plaza_im"></div>
        </div>
        <div class="plaza_w2">
            <h5>
                <span class="mleft">热门赞</span>
                <span class="mright">
                    <a href="index.php?mod=plaza&code=hot_dig">更多</a>
                </span>
            </h5> 
            <div class="plaza_vword"><h2>有图微博</h2>暂无任何热门赞</div>  
            <div class="plaza_ul">  </div> 
        </div> 
        <div class="plaza_w2"> 
            <h5>
                <span class="mleft">热门评</span>
                <span class="mright"><a href="index.php?mod=plaza&code=hot_reply">更多</a></span>
            </h5> 
            <div class="plaza_vword"><h2>有图微博</h2>暂无任何热门评论</div>  
            <div class="plaza_ul">  </div> 
        </div> 
        <div class="plaza_w2"> 
            <h5>
                <span class="mleft">最新赞</span>
                <span class="mright"><a href="index.php?mod=plaza&code=new_dig">更多</a></span>
            </h5> 
            <div class="plaza_vword"><h2>有图微博</h2>暂无任何最新赞</div>  
            <div class="plaza_ul">  </div> 
        </div> 
        <div class="plaza_w2"> 
            <h5>
                <span class="mleft">最新评</span>
                <span class="mright"><a href="index.php?mod=plaza&code=new_reply">更多</a></span>
            </h5> 
            <div class="plaza_vword"><h2>有图微博</h2>暂无任何最新评论</div>  
            <div class="plaza_ul">  </div> 
        </div> 
        <div class="plaza_w2"> 
            <h5>
                <span class="mleft">人气用户</span>
                <span class="mright"><a href="index.php?mod=top&code=member" target="_blank">更多</a></span>
            </h5> 
            <ul class="plaza_user">   
                <li> 
                    <img src="http://192.168.1.102:8080/images/noavatar.gif" onerror="javascript:faceError(this);" class="plaza_user_face"/> 
                    <div class="plaza_user_info">
                        <span class="name"><a href="index.php?mod=1" target="_blank">admin</a></span>
                        <span class="inr">粉丝0人</span>
                    </div> 
                    <div class="plaza_relation"></div> 
                </li>   
            </ul> 
        </div> 
        <style type="text/css">
            .appframeTitle .new_nav{ padding:0;}
            .appframeTitle .list_title{ right:0;}
            .exp-wrap .appframeTitle{padding: 20px 20px 0;}
        </style>
    </div>
</div>
@endsection