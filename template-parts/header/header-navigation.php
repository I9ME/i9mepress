<a id="MainNavigation" href="javascript:;" class="e-Toglle u-contentHide--button NavigationButton NavigationButton--main is-animating u-positionAbsolute u-zIndex4 u-isCollapsed u-cursorPointer u-MobileAndIpadFlex">
	<i class="u-displayFlex u-positionRelative u-sizeFull NavigationButton-icon">

		<svg id="icon_open_menu" class="icon-menu NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgA is-animating--rotate">
			<use xlink:href="#icon-menu"></use>
		</svg>

		<svg id="icon_close_menu" class="icon-close NavigationButton-icon u-icon is-animating is-animating--switch is-animating--switch--imgB is-animating--rotate">
			<use xlink:href="#icon-close"></use>
		</svg>

	</i>
</a>

<nav id="MainNavigation-container" class="Navigation Navigation--menu u-sizeFull Navigation--menu--main Navigation--menu--style2 u-isCollapsed u-contentHide u-contentHide--height u-zIndex20 u-setMainMenu u-paddingVertical" role="navigation" aria-label="">
	
	<ul class="Navigation-items Navigation-items--level1 u-alignCenter u-marginTop--inter is-animating u-displayFlex u-sizeFull u-flexDirectionColumn u-justifyContentSpaceBetween">
		<?php $counter = 0; while ($counter < 5) : ?>

			<li class="Navigation-items-item u-paddingBottom--inter">
				<a class="NavigationLink" href="#">Item de menu</a>
			</li>

		<?php $counter++; endwhile; ?>
	</ul>

</nav><!-- #site-navigation -->
