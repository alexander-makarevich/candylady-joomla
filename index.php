<?php
defined('_JEXEC') or die;
JHTML::_('behavior.framework', true);
$app = JFactory::getApplication();

$tplparams	= $app->getTemplate(true)->params;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
	<jdoc:include type="head" />
	<link href="//fonts.googleapis.com/css?family=Chewy:regular" rel="stylesheet" type="text/css" >
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" >
	<link href="//fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" >
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" />

	<!-- The following line loads the template CSS file located in the template folder. -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/clear.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/base.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/menu.css" type="text/css" />
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/menu.js" type="text/javascript"></script>

</head>

    <body>
        <div id="wrapper">
            <div id="page">
                <div id="header">
                    <jdoc:include type="modules" name="position-0" />
                </div>
                <div id="l_sidebar">
                    <jdoc:include type="modules" name="menu-position" />
                    <jdoc:include type="modules" name="position-7" />
                </div>
                <div id="r_sidebar">
                    <div>
                        <jdoc:include type="modules" name="photogallery-position" />
                        <jdoc:include type="modules" name="position-2" />
                    </div>
                    <div id="content">
                        <div id="content-top"></div>
                        <div id="content-middle">
                            <jdoc:include type="message" />
                            <jdoc:include type="component" />
                        </div>
                        <div id="content-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
