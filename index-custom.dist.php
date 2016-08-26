<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

// set some base vars
$doc = JFactory::getDocument();
$site_abs_url = JURI::root();
$site_rel_url = JURI::root(true);
$tmpl_url = $site_rel_url . '/templates/' . $this->template;
$tmpl_path = JPATH_BASE . '/templates/' . $this->template;

include($tmpl_path . '/php/head-pre.inc.php');
?><!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
<?php 
include($tmpl_path . '/php/head-top.inc.php'); 
?>
<jdoc:include type="head" />
<?php 
include($tmpl_path . '/php/css.inc.php');
include($tmpl_path . '/php/js.inc.php');
include($tmpl_path . '/php/favicon.inc.php');
include($tmpl_path . '/php/head-bottom.inc.php');
?>
</head>
<?php
include($tmpl_path . '/php/body-pre.inc.php');
?>
<body class="<?php echo implode(' ', $body_classes); ?>">
<?php
include($tmpl_path . '/php/body-top.inc.php');
// if blank-page parameter is set to true, only the component will be output
if(!$this->params->get('blank_page',0)) :  ?>
<header>
	
	<?php if($this->countModules('util-1') || $this->countModules('util-2') || $this->countModules('util-3') || $this->countModules('util-4') || $this->countModules('util-5') || $this->countModules('util-6')): ?>
	<div class="row util">
		<div class="container cf">
			<div class="util-1 blk4 blkgroup">
				<jdoc:include type="modules" name="util-1" />
			</div>
			<div class="util-2 blk4 blkgroup">
				<jdoc:include type="modules" name="util-2" />
			</div>
			<div class="util-3 blk4 blkgroup">
				<jdoc:include type="modules" name="util-3" />
			</div>
			<div class="util-4 blk4 blkgroup">
				<jdoc:include type="modules" name="util-4" />
			</div>
			<div class="util-5 blk4 blkgroup">
				<jdoc:include type="modules" name="util-5" />
			</div>
			<div class="util-6 blk4 blkgroup">
				<jdoc:include type="modules" name="util-6" />
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if($this->countModules('header-1') || $this->countModules('header-2') || $this->countModules('header-3') || $this->countModules('header-4') || $this->countModules('header-5') || $this->countModules('header-6')): ?>
	<div class="row header">
		<div class="container cf">
			<div class="header-1 blk4 blkgroup">
				<jdoc:include type="modules" name="header-1" />
			</div>
			<div class="header-2 blk4 blkgroup">
				<jdoc:include type="modules" name="header-2" />
			</div>
			<div class="header-3 blk4 blkgroup">
				<jdoc:include type="modules" name="header-3" />
			</div>
			<div class="header-4 blk4 blkgroup">
				<jdoc:include type="modules" name="header-4" />
			</div>
			<div class="header-5 blk4 blkgroup">
				<jdoc:include type="modules" name="header-5" />
			</div>
			<div class="header-6 blk4 blkgroup">
				<jdoc:include type="modules" name="header-6" />
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if($this->countModules('top-1') || $this->countModules('top-2') || $this->countModules('top-3')|| $this->countModules('top-4') || $this->countModules('top-5') || $this->countModules('top-6')): ?>
	<div class="row top">
		<div class="container cf">
			<div class="top-1 blk4 blkgroup">
				<jdoc:include type="modules" name="top-1" />
			</div>
			<div class="top-2 blk4 blkgroup">
				<jdoc:include type="modules" name="top-2" />
			</div>
			<div class="top-3 blk4 blkgroup">
				<jdoc:include type="modules" name="top-3" />
			</div>
			<div class="top-4 blk4 blkgroup">
				<jdoc:include type="modules" name="top-4" />
			</div>
			<div class="top-5 blk4 blkgroup">
				<jdoc:include type="modules" name="top-5" />
			</div>
			<div class="top-6 blk4 blkgroup">
				<jdoc:include type="modules" name="top-6" />
			</div>
		</div>
	</div>
	<?php endif; ?>
	
</header>

<main class="row main">
	
	<div class="container cf">
		
		<jdoc:include type="message" />
		
		<?php if($this->countModules('main-header')): ?>
		<div class="main-header">
			<jdoc:include type="modules" name="main-header" />
		</div>
		<?php endif; ?>
		
		<div class="main-middle blk20 blkgroup">
			
			<?php if($this->countModules('main-left')): ?>
			<div class="main-left blk4 blkgroup">
				<jdoc:include type="modules" name="main-left" />
			</div>
			<?php endif; ?>

			<div class="main-center blk<?php echo 20 - ($this->countModules('main-left') ? 4 : 0) - ($this->countModules('main-right') ? 4 : 0)  ?> blkgroup">
				
				<?php if($this->countModules('main-top')): ?>
				<div class="main-top">
					<jdoc:include type="modules" name="main-top" />
				</div>
				<?php endif; ?>
				
				<?php if($home): ?>
				<jdoc:include type="modules" name="main-center" />
				<?php else: ?>
				<article>
					<jdoc:include type="component" />
				</article>
				<?php endif; ?>
				
				<?php if($this->countModules('main-bottom')): ?>
				<div class="main-bottom">
					<jdoc:include type="modules" name="main-bottom" />
				</div>
				<?php endif; ?>
				
			</div>

			<?php if($this->countModules('main-right')): ?>
			<div class="main-right blk4 blkgroup">
				<jdoc:include type="modules" name="main-right" />
			</div>
			<?php endif; ?>
			
		</div>
		
		<?php if($this->countModules('main-footer')): ?>
		<div class="main-footer">
			<jdoc:include type="modules" name="main-footer" />
		</div>
		<?php endif; ?>
		
	</div>
	
</main>

<footer>

	<?php if($this->countModules('bottom-1') || $this->countModules('bottom-2') || $this->countModules('bottom-3') || $this->countModules('bottom-4') || $this->countModules('bottom-5') || $this->countModules('bottom-6')): ?>
	<div class="row bottom">
		<div class="container cf">
			<div class="bottom-1 blk4 blkgroup">
				<jdoc:include type="modules" name="bottom-1" />
			</div>
			<div class="bottom-2 blk4 blkgroup">
				<jdoc:include type="modules" name="bottom-2" />
			</div>
			<div class="bottom-3 blk4 blkgroup">
				<jdoc:include type="modules" name="bottom-3" />
			</div>
			<div class="bottom-4 blk4 blkgroup">
				<jdoc:include type="modules" name="bottom-4" />
			</div>
			<div class="bottom-5 blk4 blkgroup">
				<jdoc:include type="modules" name="bottom-5" />
			</div>
			<div class="bottom-6 blk4 blkgroup">
				<jdoc:include type="modules" name="bottom-6" />
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if($this->countModules('footer-1') || $this->countModules('footer-2') || $this->countModules('footer-3') || $this->countModules('footer-4') || $this->countModules('footer-5') || $this->countModules('footer-6')): ?>
	<div class="row footer">
		<div class="container cf">
			<div class="footer-1 blk4 blkgroup">
				<jdoc:include type="modules" name="footer-1" />
			</div>
			<div class="footer-2 blk4 blkgroup">
				<jdoc:include type="modules" name="footer-2" />
			</div>
			<div class="footer-3 blk4 blkgroup">
				<jdoc:include type="modules" name="footer-3" />
			</div>
			<div class="footer-4 blk4 blkgroup">
				<jdoc:include type="modules" name="footer-4" />
			</div>
			<div class="footer-5 blk4 blkgroup">
				<jdoc:include type="modules" name="footer-5" />
			</div>
			<div class="footer-6 blk4 blkgroup">
				<jdoc:include type="modules" name="footer-6" />
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if($this->countModules('copyright-1') || $this->countModules('copyright-2') || $this->countModules('copyright-3') || $this->countModules('copyright-4') || $this->countModules('copyright-5') || $this->countModules('copyright-6')): ?>
	<div class="row copyright">
		<div class="container cf">
			<div class="copyright-1 blk4 blkgroup">
				<jdoc:include type="modules" name="copyright-1" />
			</div>
			<div class="copyright-2 blk4 blkgroup">
				<jdoc:include type="modules" name="copyright-2" />
			</div>
			<div class="copyright-3 blk4 blkgroup">
				<jdoc:include type="modules" name="copyright-3" />
			</div>
			<div class="copyright-4 blk4 blkgroup">
				<jdoc:include type="modules" name="copyright-4" />
			</div>
			<div class="copyright-5 blk4 blkgroup">
				<jdoc:include type="modules" name="copyright-5" />
			</div>
			<div class="copyright-6 blk4 blkgroup">
				<jdoc:include type="modules" name="copyright-6" />
			</div>
		</div>
	</div>
	<?php endif; ?>
	
</footer>
<?php else:  // output a "blank" page (component only) ?>
<jdoc:include type="component" />
<?php endif; // endif for blank page ?>
<?php include($tmpl_path . '/php/body-bottom.inc.php'); ?>
</body>
</html>
