<a id="MainNavigation" href="javascript:;" class="e-Toglle u-contentHide--button NavigationButton NavigationButton--main is-animating u-positionAbsolute u-zIndex4 u-isCollapsed u-cursorPointer">
	<i class="u-displayFlex u-positionRelative u-sizeFull NavigationButton-icon">

		<svg class="iconMenu NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgA is-animating--rotate">
			<use xlink:href="#iconMenu"></use>
		</svg>
		<svg class="iconClose NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgB is-animating--rotate">
			<use xlink:href="#iconClose"></use>
		</svg>
		<span class="u-isOut">MENU</span>
	</i>
</a>

<?php if(is_home()){ ?>
<nav id="MainNavigation-container" class="Navigation Navigation--menu u-size16of24 Navigation--menu--main Navigation--menu--style2 is-animating u-isCollapsed u-contentHide u-contentHide--height u-zIndex20" role="navigation" aria-label="">
	<ul class="Navigation-items Navigation-items--level1 u-alignCenter u-marginTop--inter is-animating u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-justifyContentSpaceBetween">
		
	</ul>

</nav><!-- #site-navigation -->
<?php }else{ ?>
	<nav id="MainNavigation-container" class="Navigation Navigation--menu u-size18of24  Navigation--menu--main Navigation--menu--style2 is-animating u-isCollapsed u-contentHide u-contentHide--height u-zIndex20" role="navigation" aria-label="">
	<ul class="Navigation-items Navigation-items--level1 u-alignCenter u-marginTop--inter is-animating u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-justifyContentSpaceBetween">
		<!-- HEADER LIMPO  -->
	</ul>

</nav><!-- #site-navigation -->
<?php } ?>