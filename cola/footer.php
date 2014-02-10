<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div><!-- container -->

<?php if(!is_mobile()): ?>
	<footer class="footer" role="contentinfo">
		<div class="wrap clearfix">
			<div class="links">
				<h2>friends</h2>
				<p>
					<a href="http://www.wuxiaodi.com/" target="_blank">吴晓棣</a>
					<span>/</span>
					<a href="http://hi.baidu.com/new/muxinmuzi" target="_blank">木辛木子</a>
					<span>/</span>
					<a href="http://blog.sina.com.cn/weixiaodelabixiaowanzi" target="_blank">蜡笔小丸子</a>
					<span>/</span>
					<a href="http://fofore.com/" target="_blank">fofore</a>
					<span>/</span>
					<a href="http://www.ericlife.com/" target="_blank">Eric</a>
					<span>/</span>
					<a href="http://axetime.com/" target="_blank">斧头科技</a>
					<span>/</span>
					<a href="http://8090cake.taobao.com/" target="_blank">8090cake</a>
				</p>
			</div>
			<div class="searchform clearfix"><?php get_search_form(); ?></div>
			<p class="copyright">theme by Cola Chan - powered by wordpress</p>
		</div>
	</footer>
	<div id="explorer"></div>
<?php endif; ?>
<a class="go_top" href="#" title="嗖~">↑</a>
<div class="mask"></div>

<?php wp_footer(); ?>
<!-- 多说js加载开始，一个页面只需要加载一次 -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"greenzorro"};
(function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = 'http://static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
})();
</script>
<!-- 多说js加载结束，一个页面只需要加载一次 -->
<div style="display:none;"><script src="http://s15.cnzz.com/stat.php?id=2994887&web_id=2994887" language="JavaScript"></script></div>
</body>
</html>