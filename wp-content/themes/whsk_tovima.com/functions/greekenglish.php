<?php 
/*======GREEKENGLISH CHARS===== */
function greeklish_permalinks_sanitize_title($text) {
	if ( !is_admin() ) return $text;

	$expressions = array(
  '/[αΑ][ιίΙΊ]/u' => 'ai',
  '/[οΟ][ιίΙΊ]/u' => 'oi',
  '/[Εε][ιίΙΊ]/u' => 'ei',
  '/[αΑ][υύΥΎ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'ay$1',
  '/[αΑ][υύΥΎ]/u' => 'ay',
  '/[εΕ][υύΥΎ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'ey$1',
  '/[εΕ][υύΥΎ]/u' => 'ey',
  '/[οΟ][υύΥΎ]/u' => 'ou',
  '/[νΝ][τΤ]/u' => 'nt',
  '/[τΤ][σΣ]/u' => 'ts',
  '/[τΤ][ζΖ]/u' => 'tz',
  '/[γΓ][γΓ]/u' => 'gg',
  '/[γΓ][κΚ]/u' => 'gk',
  '/[ηΗ][υΥ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'if$1',
  '/[ηΗ][υΥ]/u' => 'iu',
  '/[θΘ]/u' => 'th',
  '/[ψΨ]/u' => 'ps',
  '/[ξΞ]/u' => 'ks',
  '/[αάΑΆ]/u' => 'a',
  '/[βΒ]/u' => 'v',
  '/[γΓ]/u' => 'g',
  '/[δΔ]/u' => 'd',
  '/[εέΕΈ]/u' => 'e',
  '/[€]/u' => ' ',
  '/[ζΖ]/u' => 'z',
  '/[ηήΗΉ]/u' => 'i',
  '/[ιίϊΐΙΊΪ]/u' => 'i',
  '/[κΚ]/u' => 'k',
  '/[λΛ]/u' => 'l',
  '/[μΜ]/u' => 'm',
  '/[νΝ]/u' => 'n',
  '/[οόΟΌ]/u' => 'o',
  '/[πΠ]/u' => 'p',
  '/[ρΡ]/u' => 'r',
  '/[σςΣ]/u' => 's',
  '/[τΤ]/u' => 't',
  '/[υύϋΥΎΫ]/u' => 'y',
  '/[φΦ]/iu' => 'f',
  '/[χΧ]/u' => 'x',
  '/[ωώ]/iu' => 'o',
);

	$text = preg_replace( array_keys($expressions), array_values($expressions), $text );
	return $text;
}
add_filter('sanitize_title', 'greeklish_permalinks_sanitize_title', 1);
/*======GREEKENGLISH CHARS===== */

?>