<?php
$social_sharing = g5plus_get_option('social_sharing',array(
	'facebook' => '1',
	'twitter' => '1',
	'linkedin' => '1',
	'tumblr' => '1',
	'pinterest' => '1'
));
$sharing_facebook = isset($social_sharing['facebook']) ? $social_sharing['facebook'] : 0;
$sharing_twitter = isset($social_sharing['twitter']) ? $social_sharing['twitter'] : 0;
$sharing_linkedin = isset($social_sharing['linkedin']) ? $social_sharing['linkedin'] : 0;
$sharing_tumblr = isset($social_sharing['tumblr']) ? $social_sharing['tumblr'] : 0;
$sharing_pinterest = isset($social_sharing['pinterest']) ? $social_sharing['pinterest'] : 0;
if (($sharing_facebook == 1) ||
($sharing_twitter == 1) ||
($sharing_linkedin == 1) ||
($sharing_tumblr == 1) ||
($sharing_pinterest == 1)
) :
?>
    <div class="social-share-wrap">
        <label><?php _e("Share:",'wolverine'); ?></label>
        <ul class="social-share">
            <?php if ($sharing_facebook == 1) : ?>
                <li>
                    <a href="https://www.facebook.com/sharer.php?u=<?php echo esc_attr(urlencode(get_permalink()));?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if ($sharing_twitter == 1) :  ?>
                <li>
                    <a href="https://twitter.com/share?text=<?php echo esc_attr(urlencode(get_the_title())); ?>&url=<?php echo esc_attr(urlencode(get_permalink())); ?>" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if ($sharing_linkedin == 1):?>
                <li>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_attr(urlencode(get_permalink())); ?>&title=<?php echo esc_attr(urlencode(get_the_title())); ?>"  target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if ($sharing_tumblr == 1) :  ?>
                <li>
                    <a href="http://www.tumblr.com/share/link?url=<?php echo esc_attr(urlencode(get_permalink())); ?>&name=<?php echo esc_attr(urlencode(get_the_title())); ?>"target="_blank">
                        <i class="fa fa-tumblr"></i>
                    </a>
                </li>

            <?php endif; ?>

            <?php if ($sharing_pinterest == 1) :  ?>
                <li>
                    <?php $_img_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                    <a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_attr(urlencode(get_permalink())); ?>&description=<?php echo esc_attr(urlencode(get_the_title())); ?>&media=<?php echo esc_attr(($_img_src === false) ? '' :  $_img_src[0])?>" target="_blank">
                     <i class="fa fa-pinterest"></i>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif;