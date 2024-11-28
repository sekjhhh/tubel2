<?php

$brand = '';
$ampUrl = '';
$url = '';


if (isset($_GET['id'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
    $target_string = strtolower($_GET['id']); 
    
 
    $found = false;
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $brand = strtoupper($item); 
            $found = true;
            break;
        }
    }

 
    if ($found) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        
        if ($fullUrl === "https://lwp.pcnumalangkota.or.id") {
            $title = "Wakaf Online";
            $description = "The Best Wakaf In The World";
            $url = "https://lwp.pcnumalangkota.or.id";
        } else {
            
            $title = htmlspecialchars($brand);
            $description = "Description for " . htmlspecialchars($brand) . ".";
            $url = "https://lwp.pcnumalangkota.or.id/?id=" . urlencode($brand);
        }

       
        $ampUrl = "https://sepuh.art/id/?id=" . strtolower($brand);
    } else {
        $brand = "Default";
        $description = "The requested brand was not found.";
        $url = "https://sepuh.art/id"; 
    }
} else {
   
    $title = "Wakaf Online";
    $brand = "Wakaf Online";
    $description = "The Best Wakaf In The World";
    $url = "https://lwp.pcnumalangkota.or.id";
    $ampUrl = "https://sepuh.art/id";
}
?>

<!DOCTYPE html>
<html lang="id" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="https://lwp.pcnumalangkota.or.id/xmlrpc.php" />
<title><?php echo $title; ?> &#8211; The <?php echo $title; ?> In The World</title>
<meta property="og:title" content="<?php echo $title; ?> &#8211; The <?php echo $title; ?> In The World"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="The <?php echo $title; ?> In The World"/>
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:site_name" content="<?php echo $title; ?> &#8211; The <?php echo $title; ?> In The World"/>
<meta name='robots' content='max-image-preview:large' />
<link rel="amphtml" href="<?php echo htmlspecialchars($ampUrl); ?>" />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml" title="<?php echo $title; ?> &raquo; Feed" href="<?php echo $url; ?>feed/" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $title; ?> &raquo; Umpan Komentar" href="<?php echo $url; ?>comments/feed/" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/lwp.pcnumalangkota.or.id\/wp-includes\/js\/wp-emoji-release.min.js"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='nta-css-popup-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/whatsapp-for-wordpress/assets/dist/css/style.css' type='text/css' media='all' />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='wpos-magnific-style-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/album-and-image-gallery-plus-lightbox-pro/assets/css/magnific-popup.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpos-ilightbox-style-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/album-and-image-gallery-plus-lightbox-pro/assets/css/lightbox.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpos-slick-style-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/album-and-image-gallery-plus-lightbox-pro/assets/css/slick.css' type='text/css' media='all' />
<link rel='stylesheet' id='aigpl-pro-public-css-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/album-and-image-gallery-plus-lightbox-pro/assets/css/aigpl-pro-public.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='tie-style-css' href='https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='tie-ilightbox-skin-css' href='https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/css/ilightbox/dark-skin/skin.css' type='text/css' media='all' />
<link rel='stylesheet' id='Droid+Sans-css' href='https://fonts.googleapis.com/css?family=Droid+Sans%3Aregular%2C700' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-ekiticons-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementor/assets/css/frontend.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-6-css' href='https://lwp.pcnumalangkota.or.id/wp-content/uploads/elementor/css/post-6.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementor-pro/assets/css/frontend.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='ekit-responsive-css' href='https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-includes/js/jquery/jquery-migrate.min.js" id="jquery-migrate-js"></script>
<link rel="https://api.w.org/" href="https://lwp.pcnumalangkota.or.id/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://lwp.pcnumalangkota.or.id/wp-json/wp/v2/pages/688" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://lwp.pcnumalangkota.or.id/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.7.1" />
<link rel="canonical" href="<?php echo $url; ?>" />
<link rel='shortlink' href='<?php echo $url; ?>' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://lwp.pcnumalangkota.or.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flwp.pcnumalangkota.or.id%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://lwp.pcnumalangkota.or.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flwp.pcnumalangkota.or.id%2F&#038;format=xml" />

    <!-- Yandex.Metrika counter -->
    <script type='text/javascript'>
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();
       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');

       ym(XXXXXXXX, 'init', {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src='https://mc.yandex.ru/watch/XXXXXXXX' style='position:absolute; left:-9999px;' alt='' /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <link rel="shortcut icon" href="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/favicon.ico" title="Favicon" />
<!--[if IE]>
<script type="text/javascript">jQuery(document).ready(function (){ jQuery(".menu-item").has("ul").children("a").attr("aria-haspopup", "true");});</script>
<![endif]-->
<!--[if lt IE 9]>
<script src="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/js/html5.js"></script>
<script src="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/js/selectivizr-min.js"></script>
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" media="all" href="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/css/ie9.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" media="all" href="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/css/ie8.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/css/ie7.css" />
<![endif]-->


<meta name="viewport" content="width=device-width, initial-scale=1.0" />



<style type="text/css" media="screen">

body{
	font-family: 'Droid Sans';
}

#main-nav,
.cat-box-content,
#sidebar .widget-container,
.post-listing,
#commentform {
	border-bottom-color: #02722f;
}

.search-block .search-button,
#topcontrol,
#main-nav ul li.current-menu-item a,
#main-nav ul li.current-menu-item a:hover,
#main-nav ul li.current_page_parent a,
#main-nav ul li.current_page_parent a:hover,
#main-nav ul li.current-menu-parent a,
#main-nav ul li.current-menu-parent a:hover,
#main-nav ul li.current-page-ancestor a,
#main-nav ul li.current-page-ancestor a:hover,
.pagination span.current,
.share-post span.share-text,
.flex-control-paging li a.flex-active,
.ei-slider-thumbs li.ei-slider-element,
.review-percentage .review-item span span,
.review-final-score,
.button,
a.button,
a.more-link,
#main-content input[type="submit"],
.form-submit #submit,
#login-form .login-button,
.widget-feedburner .feedburner-subscribe,
input[type="submit"],
#buddypress button,
#buddypress a.button,
#buddypress input[type=submit],
#buddypress input[type=reset],
#buddypress ul.button-nav li a,
#buddypress div.generic-button a,
#buddypress .comment-reply-link,
#buddypress div.item-list-tabs ul li a span,
#buddypress div.item-list-tabs ul li.selected a,
#buddypress div.item-list-tabs ul li.current a,
#buddypress #members-directory-form div.item-list-tabs ul li.selected span,
#members-list-options a.selected,
#groups-list-options a.selected,
body.dark-skin #buddypress div.item-list-tabs ul li a span,
body.dark-skin #buddypress div.item-list-tabs ul li.selected a,
body.dark-skin #buddypress div.item-list-tabs ul li.current a,
body.dark-skin #members-list-options a.selected,
body.dark-skin #groups-list-options a.selected,
.search-block-large .search-button,
#featured-posts .flex-next:hover,
#featured-posts .flex-prev:hover,
a.tie-cart span.shooping-count,
.woocommerce span.onsale,
.woocommerce-page span.onsale ,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,
#check-also-close,
a.post-slideshow-next,
a.post-slideshow-prev,
.widget_price_filter .ui-slider .ui-slider-handle,
.quantity .minus:hover,
.quantity .plus:hover,
.mejs-container .mejs-controls .mejs-time-rail .mejs-time-current,
#reading-position-indicator  {
	background-color:#02722f;
}

::-webkit-scrollbar-thumb{
	background-color:#02722f !important;
}

#theme-footer,
#theme-header,
.top-nav ul li.current-menu-item:before,
#main-nav .menu-sub-content ,
#main-nav ul ul,
#check-also-box {
	border-top-color: #02722f;
}

.search-block:after {
	border-right-color:#02722f;
}

body.rtl .search-block:after {
	border-left-color:#02722f;
}

#main-nav ul > li.menu-item-has-children:hover > a:after,
#main-nav ul > li.mega-menu:hover > a:after {
	border-color:transparent transparent #02722f;
}

.widget.timeline-posts li a:hover,
.widget.timeline-posts li a:hover span.tie-date {
	color: #02722f;
}

.widget.timeline-posts li a:hover span.tie-date:before {
	background: #02722f;
	border-color: #02722f;
}

#order_review,
#order_review_heading {
	border-color: #02722f;
}


body {
	background-image : url(https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/images/patterns/body-bg9.png);
	background-position: top center;
}

.breaking-news span.breaking-news-title {background: #02722f;}

.tie-cat-11 a.more-link {background-color:Array;}
.tie-cat-11 .cat-box-content {border-bottom-color:Array; }
			
</style>

		<script type="text/javascript">
			/* <![CDATA[ */
				var sf_position = '0';
				var sf_templates = "<a href=\"{search_url_escaped}\">View All Results<\/a>";
				var sf_input = '.search-live';
				jQuery(document).ready(function(){
					jQuery(sf_input).ajaxyLiveSearch({"expand":false,"searchUrl":"https:\/\/lwp.pcnumalangkota.or.id\/?s=%s","text":"Search","delay":500,"iwidth":180,"width":315,"ajaxUrl":"https:\/\/lwp.pcnumalangkota.or.id\/wp-admin\/admin-ajax.php","rtl":0});
					jQuery(".live-search_ajaxy-selective-input").keyup(function() {
						var width = jQuery(this).val().length * 8;
						if(width < 50) {
							width = 50;
						}
						jQuery(this).width(width);
					});
					jQuery(".live-search_ajaxy-selective-search").click(function() {
						jQuery(this).find(".live-search_ajaxy-selective-input").focus();
					});
					jQuery(".live-search_ajaxy-selective-close").click(function() {
						jQuery(this).parent().remove();
					});
				});
			/* ]]> */
		</script>
		<meta name="generator" content="Elementor 3.25.6; features: additional_custom_breakpoints, e_optimized_control_loading; settings: css_print_method-external, google_font-enabled, font_display-auto">
			<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
			<link rel="icon" href="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2024/09/cropped-11.-Stempel-LWPNU-32x32.png" sizes="32x32" />
<link rel="icon" href="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2024/09/cropped-11.-Stempel-LWPNU-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2024/09/cropped-11.-Stempel-LWPNU-180x180.png" />
<meta name="msapplication-TileImage" content="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2024/09/cropped-11.-Stempel-LWPNU-270x270.png" />
</head>
<body data-rsssl=1 id="top" class="home page-template-default page page-id-688 lazy-enabled elementor-default elementor-kit-6 elementor-page elementor-page-688">

<div class="wrapper-outer">

	<div class="background-cover"></div>

	<aside id="slide-out">

			<div class="search-mobile">
			<form method="get" id="searchform-mobile" action="https://lwp.pcnumalangkota.or.id/">
				<button class="search-button" type="submit" value="Search"><i class="fa fa-search"></i></button>
				<input type="text" id="s-mobile" name="s" title="Search" value="Search" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}"  />
			</form>
		</div><!-- .search-mobile /-->
	
			<div class="social-icons">
		<a class="ttip-none" title="Facebook" href="https://facebook.com/Belajar.Forex.Malang" target="_blank"><i class="fa fa-facebook"></i></a><a class="ttip-none" title="Twitter" href="https://twitter.com/belajarforexmlg" target="_blank"><i class="fa fa-twitter"></i></a><a class="ttip-none" title="Youtube" href="https://www.youtube.com/c/corbuzier" target="_blank"><i class="fa fa-youtube"></i></a><a class="ttip-none" title="instagram" href="https://instagram.com/belajarforexmalang" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>

	
		<div id="mobile-menu" ></div>
	</aside><!-- #slide-out /-->

		<div id="wrapper" class="boxed">
		<div class="inner-wrapper">

		<header id="theme-header" class="theme-header">
						<div id="top-nav" class="top-nav">
				<div class="container">

							<span class="today-date">Rabu , 27 November 2024</span>
				<div class="top-menu"><ul id="menu-utama" class="menu"><li id="menu-item-742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-688 current_page_item menu-item-742"><a href="<?php echo $url; ?>" aria-current="page">Home</a></li>
<li id="menu-item-1267" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1267"><a href="https://lwp.pcnumalangkota.or.id/berita">BERITA</a></li>
<li id="menu-item-756" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-756"><a href="#">DATA WAKAF</a>
<ul class="sub-menu">
	<li id="menu-item-745" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-745"><a href="https://lwp.pcnumalangkota.or.id/data-blimbing">BLIMBING</a></li>
	<li id="menu-item-746" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-746"><a href="https://lwp.pcnumalangkota.or.id/data-sukun">SUKUN</a></li>
	<li id="menu-item-747" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-747"><a href="https://lwp.pcnumalangkota.or.id/data-kedungkandang">KEDUNGKANDANG</a></li>
	<li id="menu-item-748" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-748"><a href="https://lwp.pcnumalangkota.or.id/data-klojen">KLOJEN</a></li>
	<li id="menu-item-749" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-749"><a href="https://lwp.pcnumalangkota.or.id/data-lowokwaru">LOWOKWARU</a></li>
	<li id="menu-item-750" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-750"><a href="https://lwp.pcnumalangkota.or.id/rekap-data">REKAP DATA</a></li>
</ul>
</li>
<li id="menu-item-1297" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1297"><a href="https://lwp.pcnumalangkota.or.id/galeri">GALERI</a></li>
<li id="menu-item-1382" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1382"><a href="https://lwp.pcnumalangkota.or.id/video">VIDEO</a></li>
<li id="menu-item-1511" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1511"><a href="https://lwp.pcnumalangkota.or.id/download/">DOWNLOAD</a></li>
<li id="menu-item-744" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-744"><a href="https://lwp.pcnumalangkota.or.id/hubungi-kami">HUBUNGI KAMI</a></li>
</ul></div>
						<div class="search-block">
						<form method="get" id="searchform-header" action="<?php echo $url; ?>">
							<button class="search-button" type="submit" value="Search"><i class="fa fa-search"></i></button>
							<input class="search-live" type="text" id="s-header" name="s" title="Search" value="Search" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}"  />
						</form>
					</div><!-- .search-block /-->
			<div class="social-icons">
		<a class="ttip-none" title="Facebook" href="https://facebook.com/Belajar.Forex.Malang" target="_blank"><i class="fa fa-facebook"></i></a><a class="ttip-none" title="Twitter" href="https://twitter.com/belajarforexmlg" target="_blank"><i class="fa fa-twitter"></i></a><a class="ttip-none" title="Youtube" href="https://www.youtube.com/c/corbuzier" target="_blank"><i class="fa fa-youtube"></i></a><a class="ttip-none" title="instagram" href="https://instagram.com/belajarforexmalang" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>

	
	
				</div><!-- .container /-->
			</div><!-- .top-menu /-->
			
		<div class="header-content">

					<a id="slide-out-open" class="slide-out-open" href="#"><span></span></a>
		
			<div class="logo" style=" margin-top:15px; margin-bottom:15px;">
			<h1>								<a title="<?php echo htmlspecialchars($brand); ?>" href="<?php echo $url; ?>">
					<img src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2022/10/logo-wakaf.png" alt="<?php echo htmlspecialchars($brand); ?>"  /><strong><?php echo htmlspecialchars($brand); ?> The <?php echo $title; ?> In The World</strong>
				</a>
			</h1>			</div><!-- .logo /-->
			<div class="e3lan e3lan-top">
			<a href="" title="" >
				<img src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2022/10/WhatsApp-Image-2022-09-16-at-16.26.29-e1664941611254.jpeg" alt="" />
			</a>
				</div>			<div class="clear"></div>

		</div>
													<nav id="main-nav" class="fixed-enabled">
				<div class="container">

				
					<div class="main-menu"><ul id="menu-utama-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-688 current_page_item menu-item-742"><a href="<?php echo $url; ?>">Home</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1267"><a href="<?php echo $url; ?>"><i class="fa fa-newspaper-o"></i>BERITA</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-756"><a href="#"><i class="fa fa-database"></i>DATA WAKAF</a>
<ul class="sub-menu menu-sub-content">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-745"><a href="https://lwp.pcnumalangkota.or.id/data-blimbing">BLIMBING</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-746"><a href="https://lwp.pcnumalangkota.or.id/data-sukun">SUKUN</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-747"><a href="https://lwp.pcnumalangkota.or.id/data-kedungkandang">KEDUNGKANDANG</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-748"><a href="https://lwp.pcnumalangkota.or.id/data-klojen">KLOJEN</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-749"><a href="https://lwp.pcnumalangkota.or.id/data-lowokwaru">LOWOKWARU</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-750"><a href="https://lwp.pcnumalangkota.or.id/rekap-data">REKAP DATA</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1297"><a href="https://lwp.pcnumalangkota.or.id/galeri"><i class="fa fa-file-image-o"></i>GALERI</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1382"><a href="https://lwp.pcnumalangkota.or.id/video"><i class="fa fa-video-camera"></i>VIDEO</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1511"><a href="https://lwp.pcnumalangkota.or.id/download/">DOWNLOAD</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-744"><a href="https://lwp.pcnumalangkota.or.id/hubungi-kami">HUBUNGI KAMI</a></li>
</ul></div>					
					
				</div>
			</nav><!-- .main-nav /-->
					</header><!-- #header /-->

		
	<div class="clear"></div>
	<div id="breaking-news" class="breaking-news">
		<span class="breaking-news-title"><i class="fa fa-bolt"></i> <span>INFO PENTING</span></span>
		
								<ul>
								<li><a href="https://lwp.pcnumalangkota.or.id/rekap-data" title="UPDATE!!! DATA <?php echo $title; ?> OKTOBER 2022">UPDATE!!! DATA <?php echo $title; ?> OKTOBER 2022</a></li>				
						</ul>
					
		<script type="text/javascript">
			jQuery(document).ready(function(){
								createTicker(); 
							});
			                                                 
			function rotateTicker(){                                   
				if( i == tickerItems.length ){ i = 0; }                                                         
				tickerText = tickerItems[i];                              
				c = 0;                                                    
				typetext();                                               
				setTimeout( "rotateTicker()", 3500 );                     
				i++;                                                      
			}                                                           
					</script>
	</div> <!-- .breaking-news -->

	
	<div id="main-content" class="container">


	<div class="content">
			<div class="cat-box-content clear cat-box">
		<div class="cat-tabs-header">
			<ul>
						<li><a href="#catab10">Teknologi</a></li>
							<li><a href="#catab11">Wakaf</a></li>
							<li><a href="#catab4">Dakwah</a></li>
							<li><a href="#catab41">Informasi</a></li>
							<li><a href="#catab3">Tokoh</a></li>
						</ul>
		</div>
					<div id="catab10" class="cat-tabs-wrap cat-tabs-wrap1">

							<ul>
													<li class="first-news">
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/resmikan-gedung-kb-ra-muslimat-nahdlatul-ulama-235-al-anis-ini-pesan-wakil-ketua-dprd-provinsi-jawa-timur/" rel="bookmark">
									<img fetchpriority="high" width="310" height="165" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/12/anik-maslachah-peresmian-kb-sidoarjo-905x613-1-310x165.png" class="attachment-tie-medium size-tie-medium wp-post-image" alt="" decoding="async" />									<span class="fa overlay-icon"></span>
								</a>
							</div><!-- post-thumbnail /-->
											
						<h2 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/resmikan-gedung-kb-ra-muslimat-nahdlatul-ulama-235-al-anis-ini-pesan-wakil-ketua-dprd-provinsi-jawa-timur/" rel="bookmark">Resmikan Gedung KB RA Muslimat NU 235 Al Anis Ini Pesan Wakil Ketua DPRD JATIM</a></h2>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Desember 24, 2021</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/resmikan-gedung-kb-ra-muslimat-nahdlatul-ulama-235-al-anis-ini-pesan-wakil-ketua-dprd-provinsi-jawa-timur/#respond">0</a></span>
</p>
					
						<div class="entry">
							<p>Sidoarjo — Gedung Kelompok Belajar dan Roudhotul Athfal Muslimat Nahdlatul Ulama (KB RAM NU) 235 &hellip;</p>
							<a class="more-link" href="https://lwp.pcnumalangkota.or.id/resmikan-gedung-kb-ra-muslimat-nahdlatul-ulama-235-al-anis-ini-pesan-wakil-ketua-dprd-provinsi-jawa-timur/">Read More &raquo;</a>
						</div>
					</li><!-- .first-news -->
																		<li class="tie_video">
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/pesantren-jadi-pusat-pemberdayaan-ekonomi-pesan-wapres/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/12/KH-MARUF-AMIN-EKONOMI-SYARIAH-768x623-1-110x75.jpeg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" srcset="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/12/KH-MARUF-AMIN-EKONOMI-SYARIAH-768x623-1-110x75.jpeg 110w, https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/12/KH-MARUF-AMIN-EKONOMI-SYARIAH-768x623-1-768x525.jpeg 768w" sizes="(max-width: 110px) 100vw, 110px" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/pesantren-jadi-pusat-pemberdayaan-ekonomi-pesan-wapres/" rel="bookmark">Pesantren Jadi Pusat Pemberdayaan Ekonomi, Pesan Wapres</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Desember 24, 2014</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/pesantren-jadi-pusat-pemberdayaan-ekonomi-pesan-wapres/#respond">0</a></span>
</p>
					
					</li>
																		<li class="tie_thumb">
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/nu-kota-malang-gelar-sinergitas-dan-penguatan-peran-tokoh-agama/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/11/PCNU-Kota-Malang-1024x512-1-110x75.jpeg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/nu-kota-malang-gelar-sinergitas-dan-penguatan-peran-tokoh-agama/" rel="bookmark">NU Kota Malang Gelar Sinergitas dan Penguatan Peran Tokoh Agama</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>November 24, 2014</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/nu-kota-malang-gelar-sinergitas-dan-penguatan-peran-tokoh-agama/#respond">0</a></span>
</p>
					
					</li>
																		<li class="tie_lightbox">
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/nu-ranting-bakung-pengembangan-dakwah-dan-pendidikan-di-kabupaten-blitar/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/11/WhatsApp-Image-2020-09-05-at-06.50.29-110x75.jpeg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/nu-ranting-bakung-pengembangan-dakwah-dan-pendidikan-di-kabupaten-blitar/" rel="bookmark">NU Ranting Bakung, Pengembangan Dakwah dan Pendidikan di Kabupaten Blitar</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>November 24, 2014</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/nu-ranting-bakung-pengembangan-dakwah-dan-pendidikan-di-kabupaten-blitar/#respond">0</a></span>
</p>
					
					</li>
																		<li >
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/gedung-modt-monumen-perjuangan-ulama-berikut-faktanya/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/11/20191212_133403-1024x557-1-110x75.jpg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/gedung-modt-monumen-perjuangan-ulama-berikut-faktanya/" rel="bookmark">Gedung MODT, Monumen Perjuangan Ulama, Berikut Faktanya</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>November 24, 2014</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/gedung-modt-monumen-perjuangan-ulama-berikut-faktanya/#respond">0</a></span>
</p>
					
					</li>
													</ul>
				<div class="clear"></div>
						</div>
						<div id="catab11" class="cat-tabs-wrap cat-tabs-wrap2">

							<ul>
													<li class="first-news">
											
						<h2 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/" rel="bookmark"><?php echo $title; ?> masjid An-Nur Kelurahan Cemorokandang Kecamatan Kedungkandang Kota Malang</a></h2>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/#respond">0</a></span>
</p>
					
						<div class="entry">
							<p></p>
							<a class="more-link" href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/">Read More &raquo;</a>
						</div>
					</li><!-- .first-news -->
																		<li >
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/lwpnu-kota-malang/" rel="bookmark">LWPNU Kota Malang</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><span>Komentar Dinonaktifkan<span class="screen-reader-text"> pada LWPNU Kota Malang</span></span></span>
</p>
					
					</li>
																		<li class="tie_audio">
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/selamatkan-aset-nu-tulungagung-gelar-pelatihan-penggerak-wakaf/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2015/01/wakaf-nu-tulungagung-1024x768-1-110x75.jpeg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/selamatkan-aset-nu-tulungagung-gelar-pelatihan-penggerak-wakaf/" rel="bookmark">Selamatkan Aset, NU Tulungagung Gelar Pelatihan Penggerak Wakaf</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Januari 28, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/selamatkan-aset-nu-tulungagung-gelar-pelatihan-penggerak-wakaf/#respond">0</a></span>
</p>
					
					</li>
																		<li class="tie_video">
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/lembaga-wakaf-dan-pertanahan-nu-jatim-siap-urus-sertifikat-aset-bermasalah/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2022/01/lwp-1024x616-1-110x75.jpg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/lembaga-wakaf-dan-pertanahan-nu-jatim-siap-urus-sertifikat-aset-bermasalah/" rel="bookmark">Lembaga <?php echo $title; ?> dan Pertanahan NU Jatim Siap Urus Sertifikat Bermasalah</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Januari 26, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/lembaga-wakaf-dan-pertanahan-nu-jatim-siap-urus-sertifikat-aset-bermasalah/#respond">0</a></span>
</p>
					
					</li>
																		<li class="tie_video">
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/soekarwo-sambut-baik-gerakan-sertifikat-tanah-wakaf-nu/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2015/01/soekarwo-di-empire-110x75.jpg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/soekarwo-sambut-baik-gerakan-sertifikat-tanah-wakaf-nu/" rel="bookmark">Soekarwo Sambut Baik Gerakan Sertifikat Tanah <?php echo $title; ?> NU</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Januari 25, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/soekarwo-sambut-baik-gerakan-sertifikat-tanah-wakaf-nu/#respond">0</a></span>
</p>
					
					</li>
													</ul>
				<div class="clear"></div>
						</div>
						<div id="catab4" class="cat-tabs-wrap cat-tabs-wrap3">

							<ul>
													<li class="first-news">
											
						<h2 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/" rel="bookmark"><?php echo $title; ?> masjid An-Nur Kelurahan Cemorokandang Kecamatan Kedungkandang Kota Malang</a></h2>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/#respond">0</a></span>
</p>
					
						<div class="entry">
							<p></p>
							<a class="more-link" href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/">Read More &raquo;</a>
						</div>
					</li><!-- .first-news -->
													</ul>
				<div class="clear"></div>
						</div>
						<div id="catab41" class="cat-tabs-wrap cat-tabs-wrap4">

							<ul>
													<li class="first-news">
											
						<h2 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/" rel="bookmark"><?php echo $title; ?> masjid An-Nur Kelurahan Cemorokandang Kecamatan Kedungkandang Kota Malang</a></h2>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/#respond">0</a></span>
</p>
					
						<div class="entry">
							<p></p>
							<a class="more-link" href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/">Read More &raquo;</a>
						</div>
					</li><!-- .first-news -->
																		<li >
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/lwpnu-kota-malang/" rel="bookmark">LWPNU Kota Malang</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><span>Komentar Dinonaktifkan<span class="screen-reader-text"> pada LWPNU Kota Malang</span></span></span>
</p>
					
					</li>
													</ul>
				<div class="clear"></div>
						</div>
						<div id="catab3" class="cat-tabs-wrap cat-tabs-wrap5">

							<ul>
													<li class="first-news">
											
						<h2 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/" rel="bookmark"><?php echo $title; ?> masjid An-Nur Kelurahan Cemorokandang Kecamatan Kedungkandang Kota Malang</a></h2>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/#respond">0</a></span>
</p>
					
						<div class="entry">
							<p></p>
							<a class="more-link" href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/">Read More &raquo;</a>
						</div>
					</li><!-- .first-news -->
																		<li >
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/lwpnu-kota-malang/" rel="bookmark">LWPNU Kota Malang</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><span>Komentar Dinonaktifkan<span class="screen-reader-text"> pada LWPNU Kota Malang</span></span></span>
</p>
					
					</li>
																		<li >
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/keputusan-rakernas-pagar-nusa-perkuat-kaderisasi-dan-jejaring-luar-negeri/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2015/01/rakernas-pagar-nusa-2022-905x613-1-110x75.jpeg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" srcset="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2015/01/rakernas-pagar-nusa-2022-905x613-1-110x75.jpeg 110w, https://lwp.pcnumalangkota.or.id/wp-content/uploads/2015/01/rakernas-pagar-nusa-2022-905x613-1-300x203.jpeg 300w, https://lwp.pcnumalangkota.or.id/wp-content/uploads/2015/01/rakernas-pagar-nusa-2022-905x613-1-768x520.jpeg 768w, https://lwp.pcnumalangkota.or.id/wp-content/uploads/2015/01/rakernas-pagar-nusa-2022-905x613-1.jpeg 905w" sizes="(max-width: 110px) 100vw, 110px" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/keputusan-rakernas-pagar-nusa-perkuat-kaderisasi-dan-jejaring-luar-negeri/" rel="bookmark">Keputusan Rakernas Pagar Nusa: Perkuat Kaderisasi dan Jejaring Luar Negeri</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Januari 24, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/keputusan-rakernas-pagar-nusa-perkuat-kaderisasi-dan-jejaring-luar-negeri/#respond">0</a></span>
</p>
					
					</li>
																		<li class="tie_map">
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/gelar-forum-r20-di-bali-pbnu-akan-hadirkan-pemimpin-agama-dunia/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/09/WhatsApp-Image-2022-09-07-at-16.15.44-905x613-1-110x75.jpeg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" srcset="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/09/WhatsApp-Image-2022-09-07-at-16.15.44-905x613-1-110x75.jpeg 110w, https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/09/WhatsApp-Image-2022-09-07-at-16.15.44-905x613-1-300x203.jpeg 300w, https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/09/WhatsApp-Image-2022-09-07-at-16.15.44-905x613-1-768x520.jpeg 768w, https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/09/WhatsApp-Image-2022-09-07-at-16.15.44-905x613-1.jpeg 905w" sizes="(max-width: 110px) 100vw, 110px" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/gelar-forum-r20-di-bali-pbnu-akan-hadirkan-pemimpin-agama-dunia/" rel="bookmark">Gelar Forum R20 di Bali, PBNU Akan Hadirkan Pemimpin Agama Dunia</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>September 24, 2014</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/gelar-forum-r20-di-bali-pbnu-akan-hadirkan-pemimpin-agama-dunia/#respond">0</a></span>
</p>
					
					</li>
																		<li >
									
							<div class="post-thumbnail">
								<a href="https://lwp.pcnumalangkota.or.id/profil-kh-marzuqi-mustamar/" rel="bookmark"><img width="110" height="75" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2014/08/kh-marzuqi-mustamar-santri-2020-1024x768-1-110x75.jpg" class="attachment-tie-small size-tie-small wp-post-image" alt="" decoding="async" /><span class="fa overlay-icon"></span></a>
							</div><!-- post-thumbnail /-->
									
						<h3 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/profil-kh-marzuqi-mustamar/" rel="bookmark">Profil KH. Marzuqi Mustamar</a></h3>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Agustus 24, 2014</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/profil-kh-marzuqi-mustamar/#respond">0</a></span>
</p>
					
					</li>
													</ul>
				<div class="clear"></div>
						</div>
				</div><!-- #cats-tabs-box /-->
		<section class="cat-box recent-box recent-blog">

					<div class="cat-box-title">
				<h2>Berita Terkini</h2>
				<div class="stripe-line"></div>
			</div>
		
			<div class="cat-box-content">

				

			

									<article class="item-list">
						<h2 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/" rel="bookmark"><?php echo $title; ?> masjid An-Nur Kelurahan Cemorokandang Kecamatan Kedungkandang Kota Malang</a></h2>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/#respond">0</a></span>
</p>

							
						<div class="entry">
							<p></p>
							<a class="more-link" href="https://lwp.pcnumalangkota.or.id/wakaf-masjid-an-nur-kelurahan-cemorokandang-kecamatan-kedungkandang-kota-malang/">Read More &raquo;</a>
						</div>
												<div class="clear"></div>
					</article><!-- .item-list -->
									<article class="item-list">
						<h2 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/lwpnu-kota-malang/" rel="bookmark">LWPNU Kota Malang</a></h2>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Oktober 17, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><span>Komentar Dinonaktifkan<span class="screen-reader-text"> pada LWPNU Kota Malang</span></span></span>
</p>

							
						<div class="entry">
							<p></p>
							<a class="more-link" href="https://lwp.pcnumalangkota.or.id/lwpnu-kota-malang/">Read More &raquo;</a>
						</div>
												<div class="clear"></div>
					</article><!-- .item-list -->
									<article class="item-list tie_audio">
						<h2 class="post-box-title"><a href="https://lwp.pcnumalangkota.or.id/selamatkan-aset-nu-tulungagung-gelar-pelatihan-penggerak-wakaf/" rel="bookmark">Selamatkan Aset, NU Tulungagung Gelar Pelatihan Penggerak Wakaf</a></h2>
						<p class="post-meta">
	
<span class="tie-date"><i class="fa fa-clock-o"></i>Januari 28, 2022</span>	
	<span class="post-comments"><i class="fa fa-comments"></i><a href="https://lwp.pcnumalangkota.or.id/selamatkan-aset-nu-tulungagung-gelar-pelatihan-penggerak-wakaf/#respond">0</a></span>
</p>

													<div class="post-thumbnail">
							<a href="https://lwp.pcnumalangkota.or.id/selamatkan-aset-nu-tulungagung-gelar-pelatihan-penggerak-wakaf/" rel="bookmark">
								<img width="310" height="165" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2015/01/wakaf-nu-tulungagung-1024x768-1-310x165.jpeg" class="attachment-tie-medium size-tie-medium wp-post-image" alt="" decoding="async" />								<span class="fa overlay-icon"></span>
							</a>
						</div><!-- post-thumbnail /-->
							
						<div class="entry">
							<p>TULUNGAGUNG — Lembaga <?php echo $title; ?> dan pertanahan Nahdlatul Ulama (LWPNU ) Cabang Tulungagung menggelar Pelatihan Kader Penggerak <?php echo $title; ?> (LKPW). Bertempat di Kantor Desa Kedungwaru Kedungwaru Kab.Tulungagung Jawa Timur, Minggu 6 September &hellip;</p>
							<a class="more-link" href="https://lwp.pcnumalangkota.or.id/selamatkan-aset-nu-tulungagung-gelar-pelatihan-penggerak-wakaf/">Read More &raquo;</a>
						</div>
												<div class="clear"></div>
					</article><!-- .item-list -->
				


			


				<div class="clear"></div>
			
			</div><!-- .cat-box-content /-->
		</section>
		 <div class="recent-box-pagination">	<div class="pagination">
		<span class="pages">Page 1 of 7</span><span class="current">1</span><a href="https://lwp.pcnumalangkota.or.id/page/2/" class="page" title="2">2</a><a href="https://lwp.pcnumalangkota.or.id/page/3/" class="page" title="3">3</a><a href="https://lwp.pcnumalangkota.or.id/page/4/" class="page" title="4">4</a><a href="https://lwp.pcnumalangkota.or.id/page/5/" class="page" title="5">5</a><a href="https://lwp.pcnumalangkota.or.id/page/2/" >&raquo;</a><span class="extend">...</span><a href="https://lwp.pcnumalangkota.or.id/page/7/" class="last" title="Last &raquo;">Last &raquo;</a>	</div>
	 </div> 		<div class="clear"></div>
			</div><!-- .content /-->



<aside id="sidebar">
	<div class="theiaStickySidebar">
<div id="social-2" class="widget social-icons-widget"><div class="widget-top"><h4>Social</h4><div class="stripe-line"></div></div>
						<div class="widget-container">		<div class="social-icons social-colored">
		<a class="ttip-none" title="Facebook" href="https://facebook.com/Belajar.Forex.Malang" target="_blank"><i class="fa fa-facebook"></i></a><a class="ttip-none" title="Twitter" href="https://twitter.com/belajarforexmlg" target="_blank"><i class="fa fa-twitter"></i></a><a class="ttip-none" title="Youtube" href="https://www.youtube.com/c/corbuzier" target="_blank"><i class="fa fa-youtube"></i></a><a class="ttip-none" title="instagram" href="https://instagram.com/belajarforexmalang" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>

</div></div><!-- .widget /--><div id="media_video-2" class="widget widget_media_video"><div class="widget-top"><h4>VLOG</h4><div class="stripe-line"></div></div>
						<div class="widget-container"><div style="width:100%;" class="wp-video"><!--[if lt IE 9]><script>document.createElement('video');</script><![endif]-->
<video class="wp-video-shortcode" id="video-688-1" preload="metadata" controls="controls"><source type="video/mp4" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2022/10/WhatsApp-Video-2022-10-08-at-18.51.39-1.mp4?_=1" /><source type="video/mp4" src="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2022/10/WhatsApp-Video-2022-10-08-at-18.51.39-1.mp4?_=1" /><a href="https://lwp.pcnumalangkota.or.id/wp-content/uploads/2022/10/WhatsApp-Video-2022-10-08-at-18.51.39-1.mp4">https://lwp.pcnumalangkota.or.id/wp-content/uploads/2022/10/WhatsApp-Video-2022-10-08-at-18.51.39-1.mp4</a></video></div></div></div><!-- .widget /--><div id="text-html-widget-2" class="widget text-html"><div class="widget-top"><h4>Customer Support</h4><div class="stripe-line"></div></div>
						<div class="widget-container"><div ><div class="nta_wa_button" data-id="1416" data-info="{&quot;name&quot;:&quot;Admin Wakaf&quot;,&quot;info&quot;:{&quot;number&quot;:&quot;+6283848475733&quot;,&quot;title&quot;:&quot;Support Center&quot;,&quot;predefinedText&quot;:&quot;&quot;,&quot;willBeBackText&quot;:&quot;I will be back in [njwa_time_work]&quot;,&quot;dayOffsText&quot;:&quot;I will be back soon&quot;,&quot;isAlwaysAvailable&quot;:&quot;ON&quot;,&quot;daysOfWeekWorking&quot;:{&quot;sunday&quot;:{&quot;isWorkingOnDay&quot;:&quot;OFF&quot;,&quot;workHours&quot;:[{&quot;startTime&quot;:&quot;08:00&quot;,&quot;endTime&quot;:&quot;17:30&quot;}]},&quot;monday&quot;:{&quot;isWorkingOnDay&quot;:&quot;OFF&quot;,&quot;workHours&quot;:[{&quot;startTime&quot;:&quot;08:00&quot;,&quot;endTime&quot;:&quot;17:30&quot;}]},&quot;tuesday&quot;:{&quot;isWorkingOnDay&quot;:&quot;OFF&quot;,&quot;workHours&quot;:[{&quot;startTime&quot;:&quot;08:00&quot;,&quot;endTime&quot;:&quot;17:30&quot;}]},&quot;wednesday&quot;:{&quot;isWorkingOnDay&quot;:&quot;OFF&quot;,&quot;workHours&quot;:[{&quot;startTime&quot;:&quot;08:00&quot;,&quot;endTime&quot;:&quot;17:30&quot;}]},&quot;thursday&quot;:{&quot;isWorkingOnDay&quot;:&quot;OFF&quot;,&quot;workHours&quot;:[{&quot;startTime&quot;:&quot;08:00&quot;,&quot;endTime&quot;:&quot;17:30&quot;}]},&quot;friday&quot;:{&quot;isWorkingOnDay&quot;:&quot;OFF&quot;,&quot;workHours&quot;:[{&quot;startTime&quot;:&quot;08:00&quot;,&quot;endTime&quot;:&quot;17:30&quot;}]},&quot;saturday&quot;:{&quot;isWorkingOnDay&quot;:&quot;OFF&quot;,&quot;workHours&quot;:[{&quot;startTime&quot;:&quot;08:00&quot;,&quot;endTime&quot;:&quot;17:30&quot;}]}}},&quot;styles&quot;:{&quot;type&quot;:&quot;round&quot;,&quot;backgroundColor&quot;:&quot;#2DB742&quot;,&quot;textColor&quot;:&quot;#fff&quot;,&quot;label&quot;:&quot;Butuh Bantuan ? Chat Kami&quot;,&quot;width&quot;:300,&quot;height&quot;:64},&quot;avatar&quot;:&quot;https:\/\/lwp.pcnumalangkota.or.id\/wp-content\/uploads\/2022\/10\/avatar_4.png&quot;,&quot;options&quot;:{&quot;display&quot;:{&quot;displayCondition&quot;:&quot;excludePages&quot;,&quot;includePages&quot;:[],&quot;excludePages&quot;:[],&quot;includePosts&quot;:[],&quot;showOnDesktop&quot;:&quot;ON&quot;,&quot;showOnMobile&quot;:&quot;ON&quot;,&quot;time_symbols&quot;:&quot;h:m&quot;},&quot;styles&quot;:{&quot;title&quot;:&quot;Mulai Percakapan&quot;,&quot;responseText&quot;:&quot;Admin akan membalas dalam beberapa menit&quot;,&quot;description&quot;:&quot;Silakan Mengajukan Pertanyaan Atau Pesan Yang Ingin Disampaikan&quot;,&quot;backgroundColor&quot;:&quot;#2db742&quot;,&quot;textColor&quot;:&quot;#fff&quot;,&quot;scrollHeight&quot;:&quot;500&quot;,&quot;isShowScroll&quot;:&quot;OFF&quot;,&quot;isShowResponseText&quot;:&quot;OFF&quot;,&quot;isShowPoweredBy&quot;:&quot;ON&quot;,&quot;btnLabel&quot;:&quot;Butuh Bantuan? &lt;strong&gt;Chat Kami&lt;\/strong&gt;&quot;,&quot;btnLabelWidth&quot;:&quot;156&quot;,&quot;btnPosition&quot;:&quot;right&quot;,&quot;btnLeftDistance&quot;:&quot;30&quot;,&quot;btnRightDistance&quot;:&quot;30&quot;,&quot;btnBottomDistance&quot;:&quot;30&quot;,&quot;isShowBtnLabel&quot;:&quot;ON&quot;,&quot;isShowGDPR&quot;:&quot;OFF&quot;,&quot;gdprContent&quot;:&quot;Please accept our &lt;a href=\&quot;https:\/\/ninjateam.org\/privacy-policy\/\&quot;&gt;privacy policy&lt;\/a&gt; first to start a conversation.&quot;,&quot;widgetType&quot;:&quot;expandable&quot;},&quot;analytics&quot;:{&quot;enabledGoogle&quot;:&quot;OFF&quot;,&quot;enabledFacebook&quot;:&quot;OFF&quot;,&quot;enabledGoogleGA4&quot;:&quot;OFF&quot;}},&quot;gdprStatus&quot;:false,&quot;defaultAvatar&quot;:&quot;https:\/\/lwp.pcnumalangkota.or.id\/wp-content\/plugins\/whatsapp-for-wordpress\/assets\/img\/whatsapp_logo.svg&quot;}"></div>
				</div><div class="clear"></div></div></div><!-- .widget /-->	</div><!-- .theiaStickySidebar /-->
</aside><!-- #sidebar /-->	<div class="clear"></div>
</div><!-- .container /-->

				
<div class="clear"></div>
<div class="footer-bottom">
	<div class="container">
		<div class="alignright">
			Powered by <a href="https://lwp.pcnumalangkota.or.id"> <?php echo htmlspecialchars($brand); ?> </a> 		</div>
				<div class="social-icons">
		<a class="ttip-none" title="Facebook" href="https://facebook.com/Belajar.Forex.Malang" target="_blank"><i class="fa fa-facebook"></i></a><a class="ttip-none" title="Twitter" href="https://twitter.com/belajarforexmlg" target="_blank"><i class="fa fa-twitter"></i></a><a class="ttip-none" title="Youtube" href="https://www.youtube.com/c/corbuzier" target="_blank"><i class="fa fa-youtube"></i></a><a class="ttip-none" title="instagram" href="https://instagram.com/belajarforexmalang" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>

		
		<div class="alignleft">
			© Copyright <?php echo htmlspecialchars($brand); ?>  2024, All Rights Reserved		</div>
		<div class="clear"></div>
	</div><!-- .Container -->
</div><!-- .Footer bottom -->

</div><!-- .inner-Wrapper -->
</div><!-- #Wrapper -->
</div><!-- .Wrapper-outer -->
	<div id="topcontrol" class="fa fa-angle-up" title="Scroll To Top"></div>
<div id="fb-root"></div>
<div id="wa"></div>			<script type='text/javascript'>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
			<link rel='stylesheet' id='mediaelement-css' href='https://lwp.pcnumalangkota.or.id/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css' href='https://lwp.pcnumalangkota.or.id/wp-includes/js/mediaelement/wp-mediaelement.min.css' type='text/css' media='all' />
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/plugins/WP%20PROTECTION/custom-script.js" id="custom-script-js"></script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/plugins/whatsapp-for-wordpress/assets/dist/js/njt-whatsapp.js" id="nta-wa-libs-js"></script>
<script type="text/javascript" id="nta-js-global-js-extra">
/* <![CDATA[ */
var njt_wa_global = {"ajax_url":"https:\/\/lwp.pcnumalangkota.or.id\/wp-admin\/admin-ajax.php","nonce":"7b7433c355","defaultAvatarSVG":"<svg width=\"48px\" height=\"48px\" class=\"nta-whatsapp-default-avatar\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\"\n            viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">\n            <path style=\"fill:#EDEDED;\" d=\"M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0\n            S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z\"\/>\n            <path style=\"fill:#55CD6C;\" d=\"M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662\n            c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234\n            c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z\"\/>\n            <path style=\"fill:#FEFEFE;\" d=\"M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297\n            c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048\n            c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359\n            c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248\n            c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062\n            l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945\"\/>\n        <\/svg>","defaultAvatarUrl":"https:\/\/lwp.pcnumalangkota.or.id\/wp-content\/plugins\/whatsapp-for-wordpress\/assets\/img\/whatsapp_logo.svg","timezone":"+00:00","i18n":{"online":"Online","offline":"Offline"},"urlSettings":{"onDesktop":"api","onMobile":"api","openInNewTab":"ON"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/plugins/whatsapp-for-wordpress/assets/js/whatsapp-button.js" id="nta-js-global-js"></script>
<script type="text/javascript" id="tie-scripts-js-extra">
/* <![CDATA[ */
var tie = {"mobile_menu_active":"true","mobile_menu_top":"","lightbox_all":"true","lightbox_gallery":"true","woocommerce_lightbox":"","lightbox_skin":"dark","lightbox_thumb":"vertical","lightbox_arrows":"","sticky_sidebar":"1","is_singular":"1","reading_indicator":"","lang_no_results":"No Results","lang_results_found":"Results Found"};
/* ]]> */
</script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/js/tie-scripts.js" id="tie-scripts-js"></script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/js/ilightbox.packed.js" id="tie-ilightbox-js"></script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js" id="elementskit-framework-js-frontend-js"></script>
<script type="text/javascript" id="elementskit-framework-js-frontend-js-after">
/* <![CDATA[ */
		var elementskit = {
			resturl: 'https://lwp.pcnumalangkota.or.id/wp-json/elementskit/v1/',
		}

		
/* ]]> */
</script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js" id="ekit-widget-scripts-js"></script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/themes/sahifa/js/search.js" id="tie-search-js"></script>
<script type="text/javascript" id="mediaelement-core-js-before">
/* <![CDATA[ */
var mejsL10n = {"language":"id","strings":{"mejs.download-file":"Unduh Berkas","mejs.install-flash":"Anda menggunakan peramban yang tidak terinstal pemutar Flash. Silakan hidupkan plugin pemutar Flash Anda atau unduh versi terakhirnya dari https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Selayar penuh","mejs.play":"Putar","mejs.pause":"Jeda","mejs.time-slider":"Penggeser Waktu","mejs.time-help-text":"Gunakan tuts Panah Kanan\/Kiri untuk melompat satu detik, panah Atas\/Bawah untuk melompat sepuluh detik.","mejs.live-broadcast":"Siaran Langsung","mejs.volume-help-text":"Gunakan Anak Panah Atas\/Bawah untuk menaikkan atau menurunkan volume.","mejs.unmute":"Matikan Sunyi","mejs.mute":"Bisu","mejs.volume-slider":"Penggeser Volume","mejs.video-player":"Pemutar Video","mejs.audio-player":"Pemutar Audio","mejs.captions-subtitles":"Subteks\/Subjudul","mejs.captions-chapters":"Bab","mejs.none":"Tak ada","mejs.afrikaans":"Bahasa Afrikanas","mejs.albanian":"Bahasa Albania","mejs.arabic":"Bahasa Arab","mejs.belarusian":"Bahasa Belarusia","mejs.bulgarian":"Bahasa Bulgaria","mejs.catalan":"Bahasa Katalan","mejs.chinese":"Bahasa Mandarin","mejs.chinese-simplified":"Bahasa Mandarin (Disederhanakan)","mejs.chinese-traditional":"Bahasa Mandarin (Tradisional)","mejs.croatian":"Bahasa Kroasia","mejs.czech":"Bahasa Ceko","mejs.danish":"Bahasa Denmark","mejs.dutch":"Bahasa Belanda","mejs.english":"Bahasa Inggris","mejs.estonian":"Bahasa Estonia","mejs.filipino":"Bahasa Filipino","mejs.finnish":"Bahasa Finlandia","mejs.french":"Bahasa Perancis","mejs.galician":"Bahasa Galikan","mejs.german":"Bahasa Jerman","mejs.greek":"Bahasa Yunani","mejs.haitian-creole":"Bahasa Kreol Haiti","mejs.hebrew":"Bahasa Ibrani","mejs.hindi":"Bahasa Hindi","mejs.hungarian":"Bahasa Hungaria","mejs.icelandic":"Bahasa Islandia","mejs.indonesian":"Bahasa Indonesia","mejs.irish":"Bahasa Irlandia","mejs.italian":"Bahasa Italia","mejs.japanese":"Bahasa Jepang","mejs.korean":"Bahasa Korea","mejs.latvian":"Bahasa Latvia","mejs.lithuanian":"Bahasa Lithuania","mejs.macedonian":"Bahasa Macedonia","mejs.malay":"Bahasa Melayu","mejs.maltese":"Bahasa Malta","mejs.norwegian":"Bahasa Norwegia","mejs.persian":"Bahasa Persia","mejs.polish":"Bahasa Polandia","mejs.portuguese":"Bahasa Portugis","mejs.romanian":"Bahasa Romania","mejs.russian":"Bahasa Russia","mejs.serbian":"Bahasa Serbia","mejs.slovak":"Bahasa Slovakia","mejs.slovenian":"Bahasa Slovenia","mejs.spanish":"Bahasa Spanyol","mejs.swahili":"Bahasa Swahili","mejs.swedish":"Bahasa Swedia","mejs.tagalog":"Bahasa Tagalog","mejs.thai":"Bahasa Thai","mejs.turkish":"Bahasa Turki","mejs.ukrainian":"Bahasa Ukraina","mejs.vietnamese":"Bahasa Vietnam","mejs.welsh":"Bahasa Welsh","mejs.yiddish":"Bahasa Yiddi"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-includes/js/mediaelement/mediaelement-and-player.min.js" id="mediaelement-core-js"></script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-includes/js/mediaelement/mediaelement-migrate.min.js" id="mediaelement-migrate-js"></script>
<script type="text/javascript" id="mediaelement-js-extra">
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive","audioShortcodeLibrary":"mediaelement","videoShortcodeLibrary":"mediaelement"};
/* ]]> */
</script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-includes/js/mediaelement/wp-mediaelement.min.js" id="wp-mediaelement-js"></script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-includes/js/mediaelement/renderers/vimeo.min.js" id="mediaelement-vimeo-js"></script>
<script type="text/javascript" id="nta-js-popup-js-extra">
/* <![CDATA[ */
var njt_wa = {"gdprStatus":"","accounts":[{"accountId":1416,"accountName":"Admin Wakaf","avatar":"https:\/\/lwp.pcnumalangkota.or.id\/wp-content\/uploads\/2022\/10\/avatar_4.png","number":"+6283848475733","title":"Support Center","predefinedText":"","willBeBackText":"I will be back in [njwa_time_work]","dayOffsText":"I will be back soon","isAlwaysAvailable":"ON","daysOfWeekWorking":{"sunday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"monday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"tuesday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"wednesday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"thursday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"friday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"saturday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]}}}],"options":{"display":{"displayCondition":"excludePages","includePages":[],"excludePages":[],"includePosts":[],"showOnDesktop":"ON","showOnMobile":"ON","time_symbols":"h:m"},"styles":{"title":"Mulai Percakapan","responseText":"Admin akan membalas dalam beberapa menit","description":"Silakan Mengajukan Pertanyaan Atau Pesan Yang Ingin Disampaikan","backgroundColor":"#2db742","textColor":"#fff","scrollHeight":"500","isShowScroll":"OFF","isShowResponseText":"OFF","isShowPoweredBy":"ON","btnLabel":"Butuh Bantuan? <strong>Chat Kami<\/strong>","btnLabelWidth":"156","btnPosition":"right","btnLeftDistance":"30","btnRightDistance":"30","btnBottomDistance":"30","isShowBtnLabel":"ON","isShowGDPR":"OFF","gdprContent":"Please accept our <a href=\"https:\/\/ninjateam.org\/privacy-policy\/\">privacy policy<\/a> first to start a conversation.","widgetType":"expandable"},"analytics":{"enabledGoogle":"OFF","enabledFacebook":"OFF","enabledGoogleGA4":"OFF"}}};
/* ]]> */
</script>
<script type="text/javascript" src="https://lwp.pcnumalangkota.or.id/wp-content/plugins/whatsapp-for-wordpress/assets/js/whatsapp-popup.js" id="nta-js-popup-js"></script>
</body>
</html>

