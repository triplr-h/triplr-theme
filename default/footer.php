<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
        <!-- 这个是在header.php的最后定义的两个div -->
    </div><!-- end .container -->
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<br />
    <a href="http://www.beian.miit.gov.cn/">沪ICP备20003406号</a>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
