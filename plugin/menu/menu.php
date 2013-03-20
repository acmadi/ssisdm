<style type="text/css">

/*Credits: Dynamic Drive CSS Library */
/*URL: http://www.dynamicdrive.com/style/ */

#pointermenu2{
margin: 0;
padding: 0;
}

#pointermenu2 ul{
margin: 0;
margin-left: 150px; /*menu offset from left edge of window*/
float: left;
padding-left: 8px;
font: bold 12px Verdana;
background: #c00000 url(plugin/menu/media/leftround2.gif) bottom left no-repeat; /*optional left round corner*/
}

* html #pointermenu2 ul{ /*IE6 only rule. Decrease ul left margin and add 1em bottom margin*/
margin-bottom: 1em;
margin-left: 7px; /*menu offset from left edge of window in IE*/
}

#pointermenu2 ul li{
display: inline;
}


#pointermenu2 ul li a{
float: left;
color: white;
font-weight: bold;
padding: 7px 9px 7px 5px;
text-decoration: none;
}

#pointermenu2 ul li a:visited{
color: white;
}


#pointermenu2 ul li a:hover, #pointermenu2 ul li a#selected{ /*hover and selected link*/
color: lightyellow;
background: transparent url(plugin/menu/media/pointer.gif) bottom center no-repeat;
}

#pointermenu2 ul li a#rightcorner{
padding-right: 0;
padding-left: 2px;
background: url(plugin/menu/media/rightround2.gif) bottom right no-repeat; /*optional right round corner*/
}

</style>


<div id="pointermenu2">
<ul>
    <li><a href="index2.php" class="parent"><span>Referensi</span></a></li>
    
	<li><a href="ugg_finance.php"><span>Finance</span></a></li>
	<li class="last"><a href="logout.php"><span>Log Out</span></a></li>
	
    <li><a href="#" id="rightcorner">&nbsp;</a></li>
</ul>
<br style="clear: left" />