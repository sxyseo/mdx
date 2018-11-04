<?php
$arr = array(
	'mdx_night_style' => get_option('mdx_night_style'),
	'mdx_auto_night_style' => get_option('mdx_auto_night_style'),
	'mdx_notice' => get_option('mdx_notice'),
	'mdx_open_side' => get_option('mdx_open_side'),
	'mdx_img_box' => get_option('mdx_img_box'),
	"mdx_readmore" => get_option('mdx_readmore'),
	"mdx_post_money" => get_option('mdx_post_money'),
	"mdx_lazy_load_mode" => get_option('mdx_lazy_load_mode'),
	'mdx_read_pro' => get_option('mdx_read_pro'),
	'mdx_auto_scroll' => get_option('mdx_auto_scroll'),
	'mdx_load_pro' => get_option('mdx_load_pro'),
	'mdx_post_list_1' => get_option('mdx_post_list_1'),
	'mdx_post_list_2' => get_option('mdx_post_list_2'),
	'mdx_post_edit_time' => get_option('mdx_post_edit_time'),
	'mdx_author_card' => get_option('mdx_author_card'),
	'mdx_speed_pre' => get_option('mdx_speed_pre'),
	'mdx_smooth_scroll' => get_option('mdx_smooth_scroll'),
	'mdx_share_area' => get_option('mdx_share_area'),
	'mdx_tap_to_top' => get_option('mdx_tap_to_top'),
	'mdx_hot_posts' => get_option('mdx_hot_posts'),
	'mdx_hot_posts_num' => get_option('mdx_hot_posts_num'),
	'mdx_hot_posts_cat' => get_option('mdx_hot_posts_cat'),
	'mdx_hot_posts_text' => get_option('mdx_hot_posts_text'),
	'mdx_all_posts_text' => get_option('mdx_all_posts_text'),
	'mdx_you_may_like' => get_option('mdx_you_may_like'),
	'mdx_you_may_like_way' => get_option('mdx_you_may_like_way'),
	'mdx_you_may_like_text' => get_option('mdx_you_may_like_text'),
	'mdx_real_search' => get_option('mdx_real_search'),
	'mdx_comment_ajax' => get_option('mdx_comment_ajax'),
	'mdx_seo_key' => get_option('mdx_seo_key'),
	'mdx_auto_des' => get_option('mdx_auto_des'),
	'mdx_seo_des' => get_option('mdx_seo_des'),
	'mdx_head_js' => get_option('mdx_head_js'),
    'mdx_footer_js' => get_option('mdx_footer_js'),
    
    'mdx_styles' => get_option('mdx_styles'),
	'mdx_styles_hex' => get_option('mdx_styles_hex'),
	'mdx_styles_act' => get_option('mdx_styles_act'),
	'mdx_act_hex' => get_option('mdx_act_hex'),
	'mdx_chrome_color' => get_option('mdx_chrome_color'),
	'mdx_title_bar' => get_option('mdx_title_bar'),
	'mdx_smooth_scroll' => get_option('mdx_smooth_scroll'),
	'mdx_default_style' => get_option('mdx_default_style'),
	'mdx_index_show' => get_option('mdx_index_show'),
	'mdx_post_style' => get_option('mdx_post_style'),
	'mdx_echo_post_sum' => get_option('mdx_echo_post_sum'),
	'mdx_post_list_img_height' => get_option('mdx_post_list_img_height'),
	'mdx_post_def_img' => get_option('mdx_post_def_img'),
	'mdx_title_med' => get_option('mdx_title_med'),
	'mdx_index_img' => get_option('mdx_index_img'),
	'mdx_side_img' => get_option('mdx_side_img'),
	'mdx_side_info' => get_option('mdx_side_info'),
	'mdx_side_head' => get_option('mdx_side_head'),
	'mdx_side_name' => get_option('mdx_side_name'),
	'mdx_side_more' => get_option('mdx_side_more'),
	'mdx_index_say' => get_option('mdx_index_say'),
	'mdx_index_say_size' => get_option('mdx_index_say_size'),
	'mdx_comment_emj' => get_option('mdx_comment_emj'),
	'mdx_say_after' => get_option('mdx_say_after'),
	'mdx_logo_way' => get_option('mdx_logo_way'),
	'mdx_logo' => get_option('mdx_logo'),
	'mdx_logo_text' => get_option('mdx_logo_text'),
	'mdx_safari' => get_option('mdx_safari'),
	'mdx_svg' => get_option('mdx_svg'),
	'mdx_svg_color' => get_option('mdx_svg_color'),
	'mdx_tags_color' => get_option('mdx_tags_color'),
	'mdx_footer_say' => get_option('mdx_footer_say'),
	'mdx_footer' => get_option('mdx_footer'),
);
update_option("mdx_all_options", $arr);
foreach($arr as $k=>$v){
    delete_option($k);
}
?>