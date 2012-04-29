<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');
$url = clone(JURI::getInstance());
$path = $this->baseurl.'/templates/'.$this->template;

$showleftColumn = $this->countModules('left');
$showUser5Column = $this->countModules('top');


if(JRequest::getCmd('task') != 'edit') $Edit = false; else $Edit = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>
<?php
$app = JFactory::getApplication();
$this->setTitle( $this->getTitle() . ' - ' . $app->getCfg( 'sitename' ) );
?>
<jdoc:include type="head" />

<script type="text/javascript" src="<?php echo $path ?>/scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo $path ?>/scripts/tabs.js"></script>
<script type="text/javascript" src="<?php echo $path ?>/scripts/maxheight.js"></script>
<script type="text/javascript" src="<?php echo $path ?>/scripts/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo $path ?>/scripts/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo $path ?>/scripts/DIN_400.font.js"></script>
<!--equal-->


<link rel="stylesheet" href="<?php echo $path ?>/css/constant.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $path ?>/css/template.css" type="text/css" />
<!--[if IE 6]>
	<script type="text/javascript" src="<?php echo $path ?>/scripts/ie_png.js"></script>
    <script type="text/javascript">
       ie_png.fix('.png');
   </script>
<![endif]-->
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
</head>
<body id="body">
	<div class="main">
        <!--header-->
        <div class="header">
            	<h1 id="logo"><a href="<?php echo $_SERVER['PHP_SELF']?>" title=""><img  title="" src="<?php echo $path ?>/images/noteit_logo.gif"   alt=""  /></a></h1>
                	<jdoc:include type="modules" name="user3" style="topmenu" />
        </div>
        
         <!--content-->
         <div class="indent">
         	<div class="clear">
            	<div id="content">
					<div class="clear">
                  		<jdoc:include type="modules" name="top" />
                    </div>
                    <div class="clear indent2" >
                    <?php if ($showUser5Column) : ?>
                    <div class="clear">
                    	<div class="line"></div>
                        	<div class="clear pad">
                        	<jdoc:include type="modules" name="user5" style="box2" />
                            </div>
                        <div class="line"></div>
                    </div>
                     <?php endif;?>
                         <!--left-->
                        <?php if ($showleftColumn && !$Edit) : ?>
                        <div id="left">
                            <div class="left-indent">
                                <jdoc:include type="modules" name="left" style="wrapper_box" />
                            </div>
                        </div>
                        <?php endif;?>
                        <!--center-->
                        <div id="container">
                        	<div class="clear">
                                <?php if ($this->getBuffer('message')) : ?>
                                <div class="error err-space">
                                    <jdoc:include type="message" />
                                </div>
                                <?php endif; ?>
                                <jdoc:include type="component" />
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
         </div>
          </div>
	<div class="main">
    	 <!--footer-->
   		 <div class="footer">
		 <jdoc:include type="modules" name="footer" />
		 <?php echo JText::_('Powered by') ?> <a href="#">Joomla!</a> &nbsp;&nbsp;&nbsp;<!--{%FOOTER_LINK} --></div>
    </div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
