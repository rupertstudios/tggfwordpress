<?php

function initCors( $value ) {
  $origin_url = '*';

  // Check if production environment or not
  if (ENVIRONMENT === 'production') {
    $origin_url = 'https://thegreatgrayfunk.com';
  }

  header( 'Access-Control-Allow-Origin: ' . $origin_url );
  header( 'Access-Control-Allow-Methods: GET' );
  header( 'Access-Control-Allow-Credentials: true' );
  return $value;
}
