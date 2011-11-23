<?
defined('C5_EXECUTE') or die(_("Access Denied.")); 
global $c;
?>
<script type="text/javascript">var addthis_pub = "<?=$addThisUsername?>";</script>
<? switch($addThisDisplay){ 
 	case 'bookmarkLong': ?> 
		<a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/lg-bookmark-en.gif" width="125" height="16" border="0" alt="" /></a>
<? 		break;
 	case 'bookmarkShort': ?> 
		<a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/sm-bookmark-en.gif" width="83" height="16" border="0" alt="" /></a>
<? 		break;
 	case 'addThisLong': ?>
		<a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/lg-addthis-en.gif" width="125" height="16" border="0" alt="" /></a>
<? 		break;
 	case 'addThisShort': ?> 
		<a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/sm-plus.gif" width="16" height="16" border="0" alt="" /></a>
<? 		break;
 	case 'shareShort': ?> 
		<a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" border="0" alt="" /></a>
<?		break;
	case 'shareLong':
	default: ?> 
		<a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/lg-share-en.gif" width="125" height="16" border="0" alt="" /></a>
<? } ?>
<script type="text/javascript" src="http://s7.addthis.com/js/152/addthis_widget.js"></script>