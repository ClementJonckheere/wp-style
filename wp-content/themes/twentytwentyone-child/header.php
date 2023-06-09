<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<header class="en-tete">
    <nav class="navigation">
        <a class="logo" href="/index.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="130" height="47" viewBox="0 0 167 47">
  <g id="Groupe_12" data-name="Groupe 12" transform="translate(-53 -22)">
    <g id="Groupe_11" data-name="Groupe 11">
      <text id="Ludo_Pl_y" data-name="Ludo Pl   y" transform="translate(53 59)" fill="#f7f7f2" font-size="36" font-family="PTSerif-Regular, PT Serif"><tspan x="0" y="0" xml:space="preserve">Ludo Pl   y</tspan></text>
      <g id="Groupe_1" data-name="Groupe 1" transform="translate(168.461 36.213)">
        <g id="Ellipse_7" data-name="Ellipse 7" transform="translate(-0.461 -0.213)" fill="#fff7bc" stroke="#707070" stroke-width="1">
          <circle cx="13.5" cy="13.5" r="13.5" stroke="none"/>
          <circle cx="13.5" cy="13.5" r="13" fill="none"/>
        </g>
        <g id="Polygone_2" data-name="Polygone 2" transform="translate(21.539 4.787) rotate(90)" fill="#fe3a4a">
          <path d="M 15.10521602630615 12.5 L 0.8947833776473999 12.5 L 7.999999523162842 0.9540237784385681 L 15.10521602630615 12.5 Z" stroke="none"/>
          <path d="M 7.999999523162842 1.908047676086426 L 1.789566993713379 12 L 14.2104320526123 12 L 7.999999523162842 1.908047676086426 M 7.999999523162842 0 L 16 13 L -9.5367431640625e-07 13 L 7.999999523162842 0 Z" stroke="none" fill="#707070"/>
        </g>
      </g>
    </g>
  </g>
</svg>
</a>
<div class="search-header">
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
<div class="search-container">
    <label class="search-input">
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <div class="search-composant">
        <svg id="Composant_1_1" data-name="Composant 1 – 1" xmlns="http://www.w3.org/2000/svg" width="15" height="28.4" viewBox="0 0 24.7 28.4">
  <g id="Ellipse_4" data-name="Ellipse 4" fill="none" stroke="#f7f7f2" stroke-width="3">
    <circle cx="10" cy="10" r="10" stroke="none"/>
    <circle cx="10" cy="10" r="8.5" fill="none"/>
  </g>
  <line id="Ligne_1" data-name="Ligne 1" x2="7.8" y2="10.404" transform="translate(15.7 17.096)" fill="none" stroke="#f7f7f2" stroke-width="3"/>
</svg>
<input type="search" class="search-field" placeholder="Rechercher" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </div>
    </label>
    <input type="submit" class="test" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</div>
</form>
</div>

    </nav>
</header>