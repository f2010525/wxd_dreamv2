<?php echo '薇晓朵网络工作室商业模板保护！请购买正版模板，http://www.weixiaoduo.com/';exit;?>
<div class="fl bm">
  <div class="bm{if $_G['forum']['forumcolumns']} flg{/if}">
		<div class="bm_h cl">
			<h2 class="xs2">{lang forum_subforums}</h2>
		</div>

		<div id="subforum_{$_G[forum][fid]}" class="bm_c" style="$collapse[subforum]">
			<table cellspacing="0" cellpadding="0" class="fl_tb">
				<tr>
				<!--{eval $i = 1;}-->
				<!--{loop $sublist $sub}-->
				<!--{eval $forumurl = !empty($sub['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$sub['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$sub['fid'];}-->
				<!--{if $_G['forum']['forumcolumns']}-->
					<!--{if $sub['orderid'] && ($sub['orderid'] % $_G['forum']['forumcolumns'] == 0)}-->
						</tr>
						<!--{if $_G['forum']['orderid'] < $_G['forum']['forumcolumns']}-->
							<tr class="fl_row">
						<!--{/if}-->
					<!--{/if}-->
					<td class="fl_g" width="$_G[forum][forumcolwidth]">
						<div class="fl_icn_g"{if !empty($sub[extra][iconwidth]) && !empty($sub[icon])} style="width: {$sub[extra][iconwidth]}px;"{/if}>
						<!--{if $sub[icon]}-->
							$sub[icon]
						<!--{else}-->
							<a href="$forumurl"{if $sub[redirect]} target="_blank"{/if}><img src="$_G['style']['styleimgdir']/0{$i}.png" alt="$sub[name]" /></a>
							<!--{eval $i >= 9 ? $i = 1 : $i++;}-->
						<!--{/if}-->
						</div>
						<dl{if !empty($sub[extra][iconwidth]) && !empty($sub[icon])} style="margin-left: {$sub[extra][iconwidth]}px;"{/if}>
							<dt><a href="$forumurl" class="xs2"{if !empty($sub[redirect])} target="_blank"{/if} style="{if !empty($sub[extra][namecolor])}color: {$sub[extra][namecolor]};{/if}">$sub[name]</a></dt>
							<!--{if empty($sub[redirect])}--><dd class="xg1"><em><span class="t">{lang forum_threads}:</span><!--{echo dnumber($sub[threads])}--></em><em><span class="t">{lang forum_posts}:</span><!--{echo dnumber($sub[posts])}--></em></dd><!--{/if}-->
							<dd class="xg1">
							<!--{if !$sub['redirect']}--><em{if $sub[todayposts]} class="xi1"{/if}><span class="t">{lang forum_todayposts}:</span><!--{if $sub[todayposts]}-->$sub[todayposts]<!--{else}-->0<!--{/if}--></em><!--{/if}-->
							<!--{if $sub['permission'] == 1}-->
								{lang private_forum}
							<!--{else}-->
								<em class="l">
									<!--{if !$sub['redirect']}--><span class="t">{echo '最新'}:</span><!--{/if}--><!--{if $sub['redirect']}--><a href="$forumurl" class="xi2">{lang url_link}</a><!--{elseif is_array($sub['lastpost'])}--><a href="forum.php?mod=redirect&tid=$sub[lastpost][tid]&goto=lastpost#lastpost">$sub[lastpost][dateline]</a><!--{else}-->{lang never}<!--{/if}-->
								</em>
							<!--{/if}-->
							<!--{hook/forumdisplay_subforum_extra $sub[fid]}-->
							</dd>
						</dl>
					</td>
				<!--{else}-->
					<td class="fl_icn" {if !empty($sub[extra][iconwidth]) && !empty($sub[icon])} style="width: {$sub[extra][iconwidth]}px;"{/if}>
						<!--{if $sub[icon]}-->
							$sub[icon]
						<!--{else}-->
							<a href="$forumurl"{if $sub[redirect]} target="_blank"{/if}><img src="$_G['style']['styleimgdir']/0{$i}.png" alt="$sub[name]" /></a>
							<!--{eval $i >= 9 ? $i = 1 : $i++;}-->
						<!--{/if}-->
					</td>
					<td>
						<h2><a href="$forumurl" {if !empty($sub[redirect])}target="_blank"{/if} style="{if !empty($sub[extra][namecolor])}color: {$sub[extra][namecolor]};{/if}">$sub[name]</a><!--{if $sub[todayposts] && !$sub['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($sub[todayposts])</em><!--{/if}--></h2>
						<!--{if $sub[description]}--><p class="xg2">$sub[description]</p><!--{/if}-->
						<!--{if $sub['subforums']}--><p>{lang forum_subforums}: $sub['subforums']</p><!--{/if}-->
						<!--{if $sub['moderators']}--><p>{lang forum_moderators}: $sub[moderators]</p><!--{/if}-->
						<!--{hook/forumdisplay_subforum_extra $sub[fid]}-->
					</td>
					<td class="fl_i">
						<!--{if empty($sub[redirect])}--><span class="xi2"><!--{echo dnumber($sub[threads])}--></span><span class="xg1"> / <!--{echo dnumber($sub[posts])}--></span><!--{/if}-->
					</td>
					<td class="fl_by">
						<div>
						<!--{if $sub['permission'] == 1}-->
							{lang private_forum}
						<!--{else}-->
							<!--{if $sub['redirect']}-->
								<a href="$forumurl" class="xi2">{lang url_link}</a>
							<!--{elseif is_array($sub['lastpost'])}-->
								<a href="forum.php?mod=redirect&tid=$sub[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($sub[lastpost][subject], 30)}--></a> <cite>$sub[lastpost][dateline] <!--{if $sub['lastpost']['author']}-->$sub['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
							<!--{else}-->
								{lang never}
							<!--{/if}-->
						<!--{/if}-->
						</div>
					</td>
				</tr>
				<tr class="fl_row">
				<!--{/if}-->
				<!--{/loop}-->
				$_G['forum']['endrows']
				</tr>
			</table>
		</div>
	</div>
</div>
