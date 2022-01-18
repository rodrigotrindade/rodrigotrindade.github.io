<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   07-04-2019 15:00:06
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 27-05-2019 23:33:47
 */
/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

/** LIMITA TEXTO */
function excerpt($limit, $excerpt) {
  $pos = strpos($excerpt, "[caption");

  if ($pos !== false):
    $pos2 = strpos($excerpt, "caption]");
    $excerpt = substr($excerpt,$pos2+8,strlen($excerpt));
  else:
    $pos = strpos($excerpt, "<img ");
    if ($pos !== false):
      $pos2 = strpos($excerpt, " />");
      $excerpt = substr($excerpt,$pos2+3,strlen($excerpt));
    endif;
  endif;

  $excerpt = explode(' ', $excerpt, $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

  return $excerpt;
}

/** -------------------------------------------------------------------- */

/** RETORNA O ID DA IMAGEM ATRAVÉS DE SUA URL */
function pn_get_attachment_id_from_url( $attachment_url = '' ) {
    global $wpdb;

    $attachment_id = false;

    // If there is no url, return.
    if ('' == $attachment_url)
        return;

    // Get the upload directory paths
    $upload_dir_paths = wp_upload_dir();

    // Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
    if (false !== strpos($attachment_url, $upload_dir_paths['baseurl'])) {

        // If this is the URL of an auto-generated thumbnail, get the URL of the original image
        $attachment_url = preg_replace('/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url);

        // Remove the upload path base directory from the attachment URL
        $attachment_url = str_replace($upload_dir_paths['baseurl'] . '/', '', $attachment_url);

        // Finally, run a custom database query to get the attachment ID from the modified attachment URL
        $attachment_id = $wpdb->get_var($wpdb->prepare("SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url));
    }

    return $attachment_id;
}

/** -------------------------------------------------------------------- */

// RETORNA O NÚMERO DE VIEWS DE UM POST

function getPostViews($postID,$key){
    $count_key = $key.'_views';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, 0);
        return 0;
    }
    return $count;
}

// SETA UMA VISUALIZAÇÃO DE POST
function setPostViews($postID,$key) {
    $count_key = $key.'_views';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 1;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, 1);
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/** -------------------------------------------------------------------- */

?>
