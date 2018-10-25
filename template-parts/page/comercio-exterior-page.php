<section class="Section Section--style1 Section--comercioExteriorPage u-displayFlex u-flexDirectionColumn">
	<header class="Section-header u-size24of24 u-alignCenter u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingTop">
		<h1 class="Section-header-title u-paddingVertical"><?php echo translate_content('foreign-title') ?></h1>
		<h2 class="Section-header-subtitle u-paddingHorizontal--inter--half u-paddingVertical u-size12of24"><?php echo translate_content('foreign-subtitle-page') ?></h2>
	</header>

	<?php get_template_part('template-parts/comercio-exterior/section','comercio-exterior');?>

	<div class="Section-content u-paddingVertical">
		<div class="Section-content-items ">
			<div class="Section-content-items-item u-paddingHorizontal u-displayFlex u-flexJustifyContentCenter u-flexDirectionColumn">
				<header class="u-paddingBottom--inter">
					<h3 class="Section-content-items-item-title Section-content-items-item-title--beforeTitleLine u-positionRelative u-alignCenter"><?php echo translate_content('foreign-common-import-title') ?></h3>
				</header>
				<figure class="u-displayFlex u-sizeFull u-flexJustifyContentCenter">
					<img class="Section-content-items-item-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/elohs-importacao<?php echo $_SESSION['language'] == 'pt_br' ? '' : '--en' ?>.png">
				</figure>
			</div>
		</div>
		<div class="Section-content-items">
			<div class="Section-content-items-item u-paddingBottom u-displayFlex u-flexJustifyContentCenter">
				<h3 class="Section-content-items-item-title Section-content-items-item-title--beforeTitleLine u-positionRelative u-alignCenter">
					<?php echo translate_content('foreign-elohs-import-title') ?>
				</h3>
			</div>
			<figure class="Section-content-items-figure u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexJustifyContentCenter
							u-flexAlignItemsCenter">
				<div class="Section-content-items-item-figure-point u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingBottom--inter">
					<i class="u-marginBottom--inter FigureIcon FigureIcon--documento"></i>
					<p class="Section-content-items-item-figure-point-resume">
						<?php echo translate_content('foreign-import-step-one') ?>
					</p>
				</div>
				<div class="u-displayFlex u-flexDirectionColumn u-size1of24 u-flexAlignItemsCenter u-onlyDesktop" style="padding-top: 35px;">
					<i class="FigureIcon FigureIcon--seta u-marginVertical--inter"></i>
				</div>
				
				<div class="Section-content-items-item-figure-point u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingBottom--inter">
					<i class="u-marginBottom--inter FigureIcon FigureIcon--busca"></i>
					<p class="Section-content-items-item-figure-point-resume">
						<?php echo translate_content('foreign-import-step-two') ?>
					</p>
				</div>
				<div class="u-displayFlex u-flexDirectionColumn u-size1of24 u-flexAlignItemsCenter u-onlyDesktop" style="padding-top: 35px;">
					<i class="FigureIcon FigureIcon--seta u-marginVertical--inter"></i>
				</div>
				<div class="Section-content-items-item-figure-point u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingBottom--inter">
					<i class="u-marginBottom--inter FigureIcon FigureIcon--alvo"></i>
					<p class="Section-content-items-item-figure-point-resume">
						<?php echo translate_content('foreign-import-step-three') ?>
					</p>
				</div>
				<div class="u-displayFlex u-flexDirectionColumn u-size1of24 u-flexAlignItemsCenter u-onlyDesktop" style="padding-top: 35px;">
					<i class="FigureIcon FigureIcon--seta u-marginVertical--inter"></i>
				</div>
				<div class="Section-content-items-item-figure-point u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingBottom--inter">
					<i class="u-marginBottom--inter FigureIcon FigureIcon--caixa"></i>
					<p class="Section-content-items-item-figure-point-resume">
						<?php echo translate_content('foreign-import-step-four') ?>
					</p>
				</div>
			</figure>
		</div>
		<div class="Section-content-items ">
			<div class="Section-content-items-item u-paddingHorizontal u-displayFlex u-flexJustifyContentCenter u-flexDirectionColumn">
				<header class="u-paddingBottom--inter">
					<h3 class="Section-content-items-item-title Section-content-items-item-title--beforeTitleLine2 u-positionRelative u-alignCenter"><?php echo translate_content('foreign-common-export-title') ?></h3>
				</header>
				<figure class="u-displayFlex u-sizeFull u-flexJustifyContentCenter">
					<img class="Section-content-items-item-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/elohs-exportacao-2<?php echo $_SESSION['language'] == 'pt_br' ? '' : '--en' ?>.png">
				</figure>
			</div>
		</div>
		<div class="Section-content-items">
			<div class="Section-content-items-item u-paddingBottom u-displayFlex u-flexJustifyContentCenter">
				<h3 class="Section-content-items-item-title Section-content-items-item-title--beforeTitleLine2 u-positionRelative u-alignCenter">
					<?php echo translate_content('foreign-elohs-export-title') ?>
				</h3>
			</div>
			<figure class="Section-content-items-figure u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexJustifyContentCenter
							u-flexAlignItemsCenter">
				<div class="Section-content-items-item-figure-point u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingBottom--inter">
					<i class="u-marginBottom--inter FigureIcon FigureIcon--documento--color2"></i>
					<p class="Section-content-items-item-figure-point-resume">
						<?php echo translate_content('foreign-export-step-one') ?>
					</p>
				</div>
				<div class="u-displayFlex u-flexDirectionColumn u-size1of24 u-flexAlignItemsCenter u-onlyDesktop" style="padding-top: 35px;">
					<i class="FigureIcon FigureIcon--seta--color2 u-marginVertical--inter"></i>
				</div>
				
				<div class="Section-content-items-item-figure-point u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingBottom--inter">
					<i class="u-marginBottom--inter FigureIcon FigureIcon--busca--color2"></i>
					<p class="Section-content-items-item-figure-point-resume">
						<?php echo translate_content('foreign-export-step-two') ?>
					</p>
				</div>
				<div class="u-displayFlex u-flexDirectionColumn u-size1of24 u-flexAlignItemsCenter u-onlyDesktop" style="padding-top: 35px;">
					<i class="FigureIcon FigureIcon--seta--color2 u-marginVertical--inter"></i>
				</div>
				<div class="Section-content-items-item-figure-point u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingBottom--inter">
					<i class="u-marginBottom--inter FigureIcon FigureIcon--alvo--color2"></i>
					<p class="Section-content-items-item-figure-point-resume">
						<?php echo translate_content('foreign-export-step-three') ?>
					</p>
				</div>
				<div class="u-displayFlex u-flexDirectionColumn u-size1of24 u-flexAlignItemsCenter u-onlyDesktop" style="padding-top: 35px;">
					<i class="FigureIcon FigureIcon--seta--color2 u-marginVertical--inter"></i>
				</div>
				<div class="Section-content-items-item-figure-point u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingBottom--inter--half">
					<i class="u-marginBottom--inter FigureIcon FigureIcon--caixa--color2"></i>
					<p class="Section-content-items-item-figure-point-resume">
						<?php echo translate_content('foreign-export-step-four') ?>
					</p>
				</div>
			</figure>
		</div>
	<div class="Section-links u-paddingTop u-sizeFull">
		<div class="Section-links-title u-size8of24 u-paddingHorizontal--inter--half u-paddingLeft--inter u-displayFlex u-sizeFull u-flexAlignItemsCenter">
			<i class="FigureIcon FigureIcon--linked" style="padding-right: 48px;"></i>
			<?php echo translate_content('foreign-links-uteis') ?>
		</div>
	</div>
	<ul class="Section-links-items u-paddingTop--inter u-paddingBottom--inter--half u-paddingVertical">
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.mdic.gov.br/index.php/comercio-exterior"><?php echo translate_content('foreign-links-uteis-mices') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.apexbrasil.com.br/home/index"><?php echo translate_content('foreign-links-uteis-apex') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.bcb.gov.br/pt-br#!/home"><?php echo translate_content('foreign-links-uteis-banco-central') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.portalsiscomex.gov.br/ "><?php echo translate_content('foreign-links-uteis-siscomex') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.siscoserv.mdic.gov.br/g33159SCS/jsp/logon.jsp"><?php echo translate_content('foreign-links-uteis-siscoserv') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.eb.mil.br/"><?php echo translate_content('foreign-links-uteis-exercito') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://portal.anvisa.gov.br/"><?php echo translate_content('foreign-links-uteis-anvisa') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.portosdobrasil.gov.br/"><?php echo translate_content('foreign-links-uteis-portos-do-brasil') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="https://www.mercante.transportes.gov.br/g36127/servlet/serpro.siscomex.mercante.servlet.MercanteController"><?php echo translate_content('foreign-links-uteis-marinha') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.agricultura.gov.br/ "><?php echo translate_content('foreign-links-uteis-pecuaria') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://www.ibama.gov.br/"><?php echo translate_content('foreign-links-uteis-ibama') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="https://www.sefaz.ba.gov.br/"><?php echo translate_content('foreign-links-uteis-sefaz') ?></a>
		</li>
		<li class="Section-links-items-item u-marginBottom--inter--half">
			<a class="Section-links-items-item-link" target="_blank" href="http://idg.receita.fazenda.gov.br/
"><?php echo translate_content('foreign-links-uteis-receita') ?></a>
		</li>
	</ul>
</div>
</section>