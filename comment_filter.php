<?php

function comment_filter( $text ){
  return preg_replace( "/<!--[\s\S]*-->/", '', $text );
}
