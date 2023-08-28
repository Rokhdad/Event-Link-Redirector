<?php
$url = $_GET['url'];

// جدا کردن اجزای URL
$urlParts = parse_url($url);
// در صورتی که پیشوند "http://" یا "https://" داشته باشد، حذف می‌شود.
if (isset($urlParts['scheme']) && ($urlParts['scheme'] == 'http' || $urlParts['scheme'] == 'https')) {
    $urlParts['scheme'] = '';
}
// اضافه کردن پیشوند "https://" در صورت عدم وجود آن
if (!isset($urlParts['scheme']) || empty($urlParts['scheme'])) {
    $urlParts['scheme'] = 'https';
}

// اضافه کردن UTM پارامترها
$utmParams = array(
    'utm_source' => 'rokhdad',
    'utm_medium' => 'redirect',
    'utm_campaign' => 'event_redirect'
);

// ترکیب پارامترهای UTM با کوئری استرینگ فعلی
if (isset($urlParts['query'])) {
    $query = $urlParts['query'] . '&' . http_build_query($utmParams);
} else {
    $query = http_build_query($utmParams);
}

// ساخت URL جدید با اجزا تغییر یافته و پارامترهای UTM
$url = $urlParts['scheme'] . '://' . $urlParts['host'] . $urlParts['path'] . '?' . $query;

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>انتقال دهنده لینک رخداد</title>
<meta name="keywords" content="انتقال دهنده لینک">
<meta name="description" content="انتقال دهنده لینک رخداد">
<meta name="robots" content="noindex,nofollow">
<link rel="stylesheet" href="font.css" type="text/css">
<link rel="stylesheet" href="./inc/gostyle.css" type="text/css">
<link rel="stylesheet" href="./inc/alerts-css.min.css" type="text/css">
<link rel="stylesheet" href="./inc/alerts-css.css" type="text/css">
<script src="./inc/iconify.min.js"></script>

<link rel="stylesheet" href="./inc/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

<?php echo '<meta http-equiv="refresh" content="10;URL='.$url.'">'; ?>
</head>
<body><div class="body">
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <div class="base">
    <span></span>
    <div class="face"></div>
  </div></div>
  <div class="longfazers">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>

<br>
<br>
    <br>
<div id="redirectpage">
<h1>انتقال دهنده لینک</h1>
<h6><div class="alert alert_info">
  <div class="alert--icon">
    <i class="fas fa-check-circle"></i>
  </div>
  <div class="alert--content">
تا 5 ثانیه به صفحه جدید منتقل نشدید روی دکمه پایین کلیک کنید
  </div>
</div></h6>
<p><br><a class="redirectme" href="<?= $url; ?>" rel="nofollow">کلیک کنید <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--clarity" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36" data-icon="clarity:cursor-hand-click-line"><path fill="currentColor" d="M30.4 17.6c-1.8-1.9-4.2-3.2-6.7-3.7c-1.1-.3-2.2-.5-3.3-.6c2.8-3.3 2.3-8.3-1-11.1s-8.3-2.3-11.1 1s-2.3 8.3 1 11.1c.6.5 1.2.9 1.8 1.1v2.2l-1.6-1.5c-1.4-1.4-3.7-1.4-5.2 0c-1.4 1.4-1.5 3.6-.1 5l4.6 5.4c.2 1.4.7 2.7 1.4 3.9c.5.9 1.2 1.8 1.9 2.5v1.9c0 .6.4 1 1 1h13.6c.5 0 1-.5 1-1v-2.6c1.9-2.3 2.9-5.2 2.9-8.1v-5.8c.1-.4 0-.6-.2-.7zm-22-9.4c0-3.3 2.7-5.9 6-5.8c3.3 0 5.9 2.7 5.8 6c0 1.8-.8 3.4-2.2 4.5v-5a3.4 3.4 0 0 0-3.4-3.2c-1.8-.1-3.4 1.4-3.4 3.2v5.2c-1.7-1-2.7-2.9-2.8-4.9zM28.7 24c.1 2.6-.8 5.1-2.5 7.1c-.2.2-.4.4-.4.7v2.1H14.2v-1.4c0-.3-.2-.6-.4-.8c-.7-.6-1.3-1.3-1.8-2.2c-.6-1-1-2.2-1.2-3.4c0-.2-.1-.4-.2-.6l-4.8-5.7c-.3-.3-.5-.7-.5-1.2c0-.4.2-.9.5-1.2c.7-.6 1.7-.6 2.4 0l2.9 2.9v3l1.9-1V7.9c.1-.7.7-1.3 1.5-1.2c.7 0 1.4.5 1.4 1.2v11.5l2 .4v-4.6c.1-.1.2-.1.3-.2c.7 0 1.4.1 2.1.2v5.1l1.6.3v-5.2l1.2.3c.5.1 1 .3 1.5.5v5l1.6.3v-4.6c.9.4 1.7 1 2.4 1.7l.1 5.4z" class="clr-i-outline clr-i-outline-path-1"></path><path fill="none" d="M0 0h36v36H0z"></path></svg></a>  </p><div class="longfazers">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div><p></p>
</div>


</body></html>