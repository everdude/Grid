<?php require_once("../config.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once(SITE_ROOT.'/includes/metadata.php'); ?>
        <title>Pure CSS Drop Down Menu - <?php echo $siteTitle; ?></title>
        <meta name="keywords" content="Brad Everett, Pure CSS Drop Down Menu, li drop down menu, html drop down menu, html li drop down menu, css menu, css drop down menu, tutorial, IE7 z-index bug solution, IE7 z-index bug, z-index bug, ul li menu, html list menu">
        <meta name ="descrption" content="Pure CSS Drop Down Menu">
    </head>
    <?php require_once(SITE_ROOT.'/includes/header.php'); ?>
        <article id="content">
            <h1>Pure CSS Drop Down Menu</h1>
            <p class="publishDate">Date Published: May 21, 2009</p>
            <p>Here is a tutorial for a pure CSS horizontal drop down menu. No Javascript is needed for this solution. It is tested in Firefox, Opera, Chrome, Safari, Internet Explorer 7 and 8. You don't have to be worried about the supposed "IE7 z-index bug" either. No hacks are needed to achieve this, just pay close attention to where the z-index is placed below. The xhtml and the CSS both validate for this solution. On IE 6 it will show only the top menus, and not the drop downs. So if your solution requires IE 6 compliance, this solution is not for you. However, it is a good learning exercise. Personally, I cannot understand why people still hold on to a browser that is over ten years old. It is simply beyond me. But I digress...</p>
            <h2>Step 1 &ndash; setting up the html</h2>
            <p>Set up the html as shown below. You will need to have a separate div for the menu and the rest of the content to allow the drop downs to set on top of the content via the z-index property. The id on the Body tag will be used to show the active or current page on the button.</p>
            <code>
            	<p>&lt;body id=&quot;BodyOptionA&quot;&gt;<br />
            		&lt;div id="header"&gt;<br/>
            	&lt;ul id="TestNav" &gt;<br/>
            		<span class="indent">&lt;li id="optionA"&gt;&lt;a href="#"&gt;Option A&lt;/a&gt;</span><br/>
            			<span class="indent2ndlevel">&lt;ul&gt;</span><br/>
            	<span class="indent3rdlevel">&lt;li&gt;&lt;a href="#"&gt;sub A&lt;/a&gt;&lt;/li&gt;</span><br/>
            			<span class="indent3rdlevel">&lt;li&gt;&lt;a href="#"&gt;sub A&lt;/a&gt;&lt;/li&gt;</span><br/>
            			<span class="indent3rdlevel">&lt;li&gt;&lt;a href="#"&gt;sub A&lt;/a&gt;&lt;/li&gt;</span><br/>
            			<span class="indent3rdlevel">&lt;li&gt;&lt;a href="#"&gt;sub A&lt;/a&gt;&lt;/li&gt;</span><br/>
            		<span class="indent3rdlevel">&lt;li&gt;&lt;a href="#"&gt;sub A&lt;/a&gt;&lt;/li&gt;</span><br/>
            		<span class="indent2ndlevel">&lt;/ul&gt;</span><br/>
            		<span class="indent">&lt;/li&gt;</span><br/>
            			<span class="indent">&lt;li id="optionB"&gt;&lt;a href="#"&gt;Option B&lt;/a&gt;</span><br/>
            					<span class="indent2ndlevel">&lt;ul&gt;</span><br/>

            			<span class="indent3rdlevel">&lt;li&gt;&lt;a href="#"&gt;sub B&lt;/a&gt;&lt;/li&gt;</span><br/>
            			<span class="indent3rdlevel">&lt;li&gt;&lt;a href="#"&gt;sub B&lt;/a&gt;&lt;/li&gt;</span><br/>
            	<span class="indent3rdlevel">&lt;li&gt;&lt;a href="#"&gt;sub B&lt;/a&gt;&lt;/li&gt;</span><br/>
            	<span class="indent2ndlevel">&lt;/ul&gt;</span><br/>
            	<span class="indent2ndlevel">&lt;/li&gt;</span><br/>
            	<span class="indent">&lt;li id=&quot;optionC&quot;&gt;&lt;a href=&quot;#&quot;&gt;Option C&lt;/a&gt;</span><br/>
            	<span class="indent2ndlevel">&lt;ul&gt;</span><br/>
            	<span class="indent3rdlevel">&lt;li&gt;&lt;a href=&quot;#&quot;&gt;sub C&lt;/a&gt;&lt;/li&gt;</span><br/>
            	<span class="indent3rdlevel">&lt;li&gt;&lt;a href=&quot;#&quot;&gt;sub C&lt;/a&gt;&lt;/li&gt;</span><br/>
            	<span class="indent3rdlevel">&lt;li&gt;&lt;a href=&quot;#&quot;&gt;sub C&lt;/a&gt;&lt;/li&gt;</span><br/>
            	<span class="indent2ndlevel">&lt;/ul&gt;</span><br/>
            	<span class="indent2ndlevel">&lt;/li&gt;</span><br />
            	<span class="indent">&lt;li id=&quot;optionD&quot;&gt;&lt;a href=&quot;#&quot;&gt;Option D&lt;/a&gt;</span><br/>
            	<span class="indent2ndlevel">&lt;ul&gt;</span><br/>
            	<span class="indent3rdlevel">&lt;li&gt;&lt;a href=&quot;#&quot;&gt;sub D&lt;/a&gt;&lt;/li&gt;</span><br/>
            	<span class="indent3rdlevel">&lt;li&gt;&lt;a href=&quot;#&quot;&gt;sub D&lt;/a&gt;&lt;/li&gt;</span><br/>
            	<span class="indent3rdlevel">&lt;li&gt;&lt;a href=&quot;#&quot;&gt;sub D&lt;/a&gt;&lt;/li&gt;</span><br/>
            	<span class="indent2ndlevel">&lt;/ul&gt;</span><br/>
            	<span class="indent">&lt;/li&gt;</span><br />
            	&lt;/ul&gt;<br/>

            	&lt;/div&gt;<br />
            	<br/>
            	&lt;div id="content"&gt;<br/>
            	&lt;p&gt;Content goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer purus. Mauris quis metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt;<br/>
            	&lt;/div&gt;<br />
            	&lt;/body&gt;</p>
            </code>
            <h2>Step 2 &ndash; round one of the CSS code</h2>
            <p>The first step is to set the background color for the button depending on which page you are on (in this case, Option A). So we use the body id and the main list item id to achieve this. Next set the styles of the divs for your menu and your content, of course use whatever sizes are right for your page. <strong>Important:</strong> <em>set the z-index of the header to a value of 2, the z-index of the content to a value of 1.</em> Then set remaining values for the main unordered list and the main list items.</p>
            <code>
            <p>#BodyOptionA optionA{<br />
            			background:#333333;<br />
            			}<br />
            	#TestHeader {<br />
            	z-index:2;<br />
            	position:relative;<br />
            	height:30px;<br />
            	width:100%;<br />
            	margin:10px;<br />
            	}<br />
            	#TestContent {<br />
            z-index:1;<br />
            width:100%;<br />
            position:relative;<br />
            height:100px;<br />
            margin:5px;<br />
            padding:5px;<br />
            }<br />
            #TestNav{<br />
            position:relative;<br />
            	margin:0;<br />
            	padding:0;<br />
            	}<br />
            	#TestNav li{<br />
            	list-style:none;<br />
            	background:#003366;<br />
            	float:left;<br />
            	font-size:11pt;<br />
            	font-weight:bold;<br />
            	margin:0;<br />
            	}<br />
            	#TestNav li a{<br />
            	text-decoration:none;<br />
            	color:white;<br />
            	width:100px;<br />
            	padding:5px;<br />
            	text-align:center;<br />
            	display: block;<br />
            	}<br />
            	#TestNav li:hover a {<br />
            	color:#333333;<br />
            	background-color:#d06f1a;<br />
            	}<br/>
            </p>
        </code>
            <h2>Step 3 &ndash; using CSS to show and hide the drop downs</h2>
            <p>Here we are going to combine all of the elements to show and hide the drop downs into two steps. This is also where naming the first layer of list items comes into play. The first block will hide the sub-navigation by default. The second block of CSS will show it upon the mouse hovering over the named list item. <em>Note the position of the hover pseudo class.</em></p>
            <code>
            <p>#optionA ul, #optionB ul, #optionC ul, #optionD ul {<br />
            display:none;<br />
            }<br />
            #optionA:hover ul, #optionB:hover ul, #optionC:hover ul, #optionD:hover ul{<br />
            display:block;<br />
            }</p>
        </code>
            <h2>Step 4 - styling the drop downs</h2>
            <p>Style the drop downs as shown below. <strong>Important:</strong> <em>make sure you use absolute positioning on the ul tag of the drop down.</em></p>
            <code>
            <p>#TestNav li ul {<br />
            margin:0px;<br />
            padding:0px;<br />
            position:absolute;<br />
            }<br />
            #TestNav li ul li {<br />
            float:none;}<br />
            	#TestNav li ul li a{<br />
            	display:block;<br />
            	padding:5px 8px;<br />
            	font-weight:normal;<br />
            	margin:0px;<br />
            	line-height:normal;<br />
            	font-size:9pt;<br />
            	width:100px;<br />
            	position:relative;<br />
            	}<br />
            	#TestNav li ul li a:hover{<br />
            	color:white; <br />
            	background-color:#003366;<br />
            	}<br />
            </p>
        </code>
            <h2>The finished result</h2>
            <p>And that is all there is to it. You can see the result below.</p>
            <div id="TestHeader">
            	<ul id="TestNav" >
            		<li id="optionA"><a href="#">Option A</a>
            			<ul>
            				<li><a href="#">sub A</a></li>
            				<li><a href="#">sub A</a></li>
            				<li><a href="#">sub A</a></li>
            				<li><a href="#">sub A</a></li>
            				<li><a href="#">sub A</a></li>
            			</ul>
            		</li>
            		<li id="optionB"><a href="#">Option B</a>
            			<ul>
            				<li><a href="#">sub B</a></li>
            				<li><a href="#">sub B</a></li>
            				<li><a href="#">sub B</a></li>
            			</ul>
            		</li>
            		<li id="optionC"><a href="#">Option C</a>
            			<ul>
            				<li><a href="#">sub C</a></li>
            				<li><a href="#">sub C</a></li>
            				<li><a href="#">sub C</a></li>
            			</ul>
            		</li>
            		<li id="optionD"><a href="#">Option D</a>
            			<ul>
            				<li><a href="#">sub D</a></li>
            				<li><a href="#">sub D</a></li>
            				<li><a href="#">sub D</a></li>
            			</ul>
            		</li>
            	</ul>
            </div>
            <div id="TestContent">
            <p>Content goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer purus. Mauris quis metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Article",
                "mainEntityOfPage": [{
                    "@type": "URL",
                    "targetUrl": "<?php echo $site;?>"
                }],
                "headline": "Pure CSS Drop Down Menu",
                "url": "<?php echo $site.$uri_path; ?>",
                "datePublished": "2018-1-11EST12:00AM",
                "author": [{
                    "@type": "Person",
                    "name": "Brad Everett",
                    "givenName": "Brad",
                    "familyName": "Everett",
                    "url": ""
                }],
                "publisher": [{
                    "@type": "",
                    "name": "",
                    "logo": "",
                    "url": ""
                }],
                "articleBody": "A tutorial for a pure CSS horizontal drop down menu with no JavaScript.",
            }
            </script>
        </article>
        <aside id="sideBar">

        </aside>
        <?php require_once(SITE_ROOT.'/includes/footer.php'); ?>
    </body>
</html>
