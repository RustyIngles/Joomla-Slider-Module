<?php
/**
 * @copyright	Copyright (c) 2014 slider. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$image1 = $params->get('image-1');
$image2 = $params->get('image-2');
$image3 = $params->get('image-3');
$image4 = $params->get('image-4');

?>
<div id="bgCarousel" class="carousel slide" data-ride="carousel">
<?php if ($params->get('show_indicators')==1) { ?>
  <!-- Indicators -->
  <ol class="carousel-indicators">
	<?php if (!empty($image1)) { ?>
		<li data-target="#bgCarousel" data-slide-to="0" class="active"></li>
	<?php } ?>
	<?php if (!empty($image2)) { ?>
		<li data-target="#bgCarousel" data-slide-to="1"></li>
	<?php } ?>
	<?php if (!empty($image3)) { ?>
		<li data-target="#bgCarousel" data-slide-to="2"></li>
	<?php } ?>
	<?php if (!empty($image4)) { ?>
		<li data-target="#bgCarousel" data-slide-to="3"></li>
	<?php } ?>
  </ol>
  
  <?php } ?>
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
		<div class="item active">
		
		<?php $itemid = $params->get('menuitem1', 0);
			$app = JFactory::getApplication();
			$menu = $app->getMenu();
			$link1 = $menu->getItem($itemid)->link;
		?>
		<?php if ($params->get('link_menu1')==1) { ?>
			<a href="<?php echo JRoute::_($link1);?>" >
				<img alt="<?php echo $params->get('title1') ; ?>" class="img-responsive" src="<?php echo JUri::root() . $params->get('image1'); ?>" />
			</a>
		<?php } else {
			?>
				<img alt="<?php echo $params->get('title1') ; ?>" class="img-responsive" src="<?php echo JUri::root() . $params->get('image1'); ?>" />
				<?php }?>
		</div>
	<?php if ($params->get('use_slide2')==1) { ?>
		<div class="item">
		<?php $itemid = $params->get('menuitem2', 0);
			$app = JFactory::getApplication();
			$menu = $app->getMenu();
			$link2 = $menu->getItem($itemid)->link;
		?>
		<?php if ($params->get('link_menu2')==1) { ?>
			<a href="<?php echo JRoute::_($link2);?>" >
				<img alt="<?php echo $params->get('title2') ; ?>" class="img-responsive" src="<?php echo JUri::root() . $params->get('image2'); ?>" />
			</a>
		<?php } else {
			?>
				<img alt="<?php echo $params->get('title2') ; ?>" class="img-responsive" src="<?php echo JUri::root() . $params->get('image2'); ?>" />
				<?php }?>
		</div>
	<?php } ?>
	<?php if ($params->get('use_slide3')==1) { ?>
		<div class="item">
		<?php $itemid = $params->get('menuitem3', 0);
			$app = JFactory::getApplication();
			$menu = $app->getMenu();
			$link3 = $menu->getItem($itemid)->link;
		?>
		<?php if ($params->get('link_menu3')==1) { ?>
			<a href="<?php echo JRoute::_($link3);?>" >
				<img alt="<?php echo $params->get('title3') ; ?>" class="img-responsive" src="<?php echo JUri::root() . $params->get('image3'); ?>" />
			</a>
		<?php } else {
			?>
				<img alt="<?php echo $params->get('title3') ; ?>" class="img-responsive" src="<?php echo JUri::root() . $params->get('image3'); ?>" />
				<?php }?>
		</div>
	<?php } ?>
	<?php if ($params->get('use_slide4')==1) { ?>
		<div class="item">
		<?php $itemid = $params->get('menuitem4', 0);
			$app = JFactory::getApplication();
			$menu = $app->getMenu();
			$link4 = $menu->getItem($itemid)->link;
		?>
		<?php if ($params->get('link_menu4')==1) { ?>
			<a href="<?php echo JRoute::_($link4);?>" >
				<img alt="<?php echo $params->get('title4') ; ?>" class="img-responsive" src="<?php echo JUri::root() . $params->get('image4'); ?>" />
			</a>
		<?php } else {
			?>
				<img alt="<?php echo $params->get('title4') ; ?>" class="img-responsive" src="<?php echo JUri::root() . $params->get('image4'); ?>" />
				<?php }?>
		</div>
	<?php } ?>
  </div>

  <?php if ($params->get('show_chevrons')==1) { ?>
  <!-- Controls -->
  <a class="left carousel-control" href="#bgCarousel" role="button" data-slide="prev">
	<i class="fa fa-arrow-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#bgCarousel" role="button" data-slide="next">
	<i class="fa fa-arrow-right"></i>
    <span class="sr-only">Next</span>
  </a>
  <?php } ?>
</div>