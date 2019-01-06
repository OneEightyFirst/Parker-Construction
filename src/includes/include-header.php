<?php
	$logo = ot_get_option( 'logo' );
?>

<!-- <header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="logo"><img src="assets/images/icons/parker-logo.png" alt="Parker Construction"/> <span>Structures<br/>
                    of Distinction</span> </div>
                
                
            </div>
        </div>
    </div>
    <div id="customNav" class="owl-nav"></div>
</header>
 -->



<header class="header">
<!-- LOGO start -->
		<?php if ( $logo ) : ?>
			<div class="header__logo">
				<a href="/">
					<img src="<?php echo $logo; ?>" alt="" />
				</a>
			</div>
		<?php endif; ?>
		<div class="page-name">Structures<br> of Distinction</div>
		<div class="banner-nav"></div>

<!-- LOGO end -->
<!-- NAV start -->
		<nav>
			<a href="#" class="menu-button" id="menuButton">
				<span class="burger-icon"></span>
			</a>
			<div class="inner-nav">
				<?php wp_nav_menu( array( 'menu' => 'header' ) ); ?>
			</div>
		</nav>
<!-- NAV end -->
</header>