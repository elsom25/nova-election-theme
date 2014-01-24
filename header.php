<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Election
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>

  <meta name='HandheldFriendly' content='True'>
  <meta name='MobileOptimized'  content='320'>
  <meta name='viewport'         content='width=device-width, initial-scale=1.0'>

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel='shortcut icon' type='image/x-icon' href='<?php echo get_bloginfo('template_url'); ?>/favicon.ico'>
  <link href='<?php echo get_bloginfo('template_url'); ?>/vendor.css' rel='stylesheet'>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic|Lato:100,300,300italic,400,400italic,700,700italic|Viga' rel='stylesheet'>
  <link href='//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css' rel='stylesheet'>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php include_once('analyticstracking.php') ?>
  <!-- Content -->
