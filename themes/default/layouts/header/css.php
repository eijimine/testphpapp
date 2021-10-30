<link rel="stylesheet" type="text/css" href="<?php echo filter_var($base_url, FILTER_VALIDATE_URL); ?>themes/<?php echo filter_var($currentTheme, FILTER_SANITIZE_STRING); ?>/css/<?php if ($lightDark == 'light') {echo 'style';} else {echo 'night_style';}?>.css?v=9878<?php echo filter_var($version, FILTER_SANITIZE_STRING); ?>">
<?php if ($logedIn == 1) {?>
<link rel="stylesheet" type="text/css" href="<?php echo filter_var($base_url, FILTER_VALIDATE_URL); ?>themes/<?php echo filter_var($currentTheme, FILTER_SANITIZE_STRING); ?>/css/lightGallery/lightgallery.css">
<link rel="stylesheet" type="text/css" href="<?php echo filter_var($base_url, FILTER_VALIDATE_URL); ?>themes/<?php echo filter_var($currentTheme, FILTER_SANITIZE_STRING); ?>/css/videojscss/video-js.css">
<link rel="stylesheet" type="text/css" href="<?php echo filter_var($base_url, FILTER_VALIDATE_URL); ?>themes/<?php echo filter_var($currentTheme, FILTER_SANITIZE_STRING); ?>/css/checkbox/checkbox.css">
<link rel="stylesheet" type="text/css" href="<?php echo filter_var($base_url, FILTER_VALIDATE_URL); ?>themes/<?php echo filter_var($currentTheme, FILTER_SANITIZE_STRING); ?>/css/crop/cropmain.css">

<link rel="stylesheet" type="text/css" href="<?php echo filter_var($base_url, FILTER_VALIDATE_URL); ?>themes/<?php echo filter_var($currentTheme, FILTER_SANITIZE_STRING); ?>/css/swiper/swiper-bundle.css">
<?php }?>
<style rel="stylesheet"  type="text/css">
<?php echo filter_var($customHeaderCSSCode, FILTER_SANITIZE_STRING); ?>
</style>