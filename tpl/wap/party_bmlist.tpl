<!--{assign var="menu_id" value="party"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->


<div class="oe_shade" style="display:none1;" id="party_bmuser_box">
    <div class="party_userlist" style="right:0px;display:none1;" id="party_bmuser_data">

        <div class="hd">
            <span onclick="goBack()" class="cursor"><i class="iconfont">&#xe643;</i></span>
            <p>报名会员</p>
        </div>
        <div class="bd" id="party_bmlist_json_data">
            <!--{if !empty($jsondata)}-->
            <!--{foreach $jsondata as $volist}-->
            <dl>
                <dt> <span><img onclick="userDetail('<!--{$volist.userid}-->');" src="<!--{$volist.avatar}-->" /></span> </dt>
                <dd>
                    <h3><!--{$volist.username}--></h3>
                    <p><!--{$volist.age}-->岁 <!--{area type="text" value=$volist.dist2}--></p>
                </dd>
            </dl>
            <!--{/foreach}-->
            <!--{else}-->
            <!--{if $page == "1"}-->
            <div class="hd_nodata">
                <p class="p_1"><i class="iconfont">&#xe609;</i></p>
                <p class="p_2">还没有报名会员哦！~</p>
            </div>
            <!--{/if}-->
            <!--{/if}-->
        </div>
        <div class="clear"></div>

        <!--{if $pagecount > 1}-->
        <div class="oe_page">
            页次：<!--{$page}-->/<!--{$pagecount}-->
            <!--{if $prepage>0}-->
            <span onclick="goUrl('<!--{$wapfile}-->?c=party&a=bmlist&id=<!--{$partyid}--><!--{$urlitem}-->&page=<!--{$prepage}-->');">上一页</span>
            <!--{/if}-->
            <!--{if $nextpage>0}-->
            <span onclick="goUrl('<!--{$wapfile}-->?c=party&a=bmlist&id=<!--{$partyid}--><!--{$urlitem}-->&page=<!--{$nextpage}-->');">下一页</span>
            <!--{/if}-->
        </div>
        <!--//ShowPage End-->
        <!--{/if}-->
    </div>
</div>
<!--//报名会员-->

<script src="<!--{$wapskin}-->js/party.js?<!--{time()}-->"></script>
</body>
</html>