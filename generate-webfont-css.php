<?php

$css = "
@font-face {
  font-family: 'material-icons';
  font-style: normal;
  font-weight: 400;
  src: url(MaterialIcons-Regular.eot);
  src: url(MaterialIcons-Regular.eot?#iefix) format('embedded-opentype'),
       url(MaterialIcons-Regular.woff2) format('woff2'),
       url(MaterialIcons-Regular.woff) format('woff'),
       url(MaterialIcons-Regular.ttf) format('truetype');
}

[class^='icon-material-'], [class*=' icon-material-'] {
	font-family: 'material-icons';
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
";


$codepoints = file( __DIR__ . '/iconfont/codepoints' );
foreach ( $codepoints as $codepoint ) {
    $codepoint = explode(" ", trim($codepoint));
    $css .= "
.icon-material-{$codepoint[0]}:before {
    content: '\\{$codepoint[1]}';
}";
}

file_put_contents('iconfont/style.css', $css);