<?php
 /*
 Plugin Name: W3 Social Links
 Plugin URI: https://github.com/w3programmers/w3-social-links
 Description: Show your social links anywhere in your template
 Version: 1.0
 Author: Masud Alam
 Author URI: http://w3programmers.com/bangla
 License: GPLv2
 */

//display social links
function w3_social_links(...$links){
    foreach($links as $link){
        echo $link;
    }
}

// We need some CSS to position the paragraph.
function w3_social_links_css() {
	echo "
	<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  display:inline;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>

	";
}
add_action( 'w3_social_links', 'w3_social_links',10,99);
add_action( 'wp_head', 'w3_social_links_css' );

