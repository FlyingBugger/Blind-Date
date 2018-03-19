<!--for ajax-->
<!--{if !empty($comment)}-->
	<!--{foreach $comment as $val}-->
    <dl>
        <dt>
                    <span>
                      <img src="<!--{$val.avatarurl}-->" />
                    </span>
        <h3><!--{$val.username}--> <label><!--{$val.cmtime|date_format:"Y-m-d H:i"}--></label></h3>
        <div class="clear"></div>
        </dt>
        <dd>
            <!--{$val.cmcontent|nl2br}-->
        </dd>
    </dl>
	<!--{/foreach}-->
<!--{/if}-->