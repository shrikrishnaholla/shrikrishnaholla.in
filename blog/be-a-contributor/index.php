<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Be a Contributor!!</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="../css/main.css" type="text/css" />

	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
		<script src="js/IE8.js" type="text/javascript"></script><![endif]-->	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->

</head>

<body id="index" class="home">
	
	<header id="banner" class="body">
		<h1><a href="#">Be a Contributor</br><strong>and help make this world a better place</strong></a></h1>
		<nav><ul>
			<li class="active"><a href="../../">home</a></li>
			<li><a href="../">blogs</a></li>
			<li><a href="../about/">about</a></li>
		</ul></nav>
	</header>
	
	<section id="content" class="body">
	  
	  <article class="hentry">	
			<header>
				<h2 class="entry-title"><a href="#" rel="bookmark" title="blog.shrikrishnaholla.in/be-a-contributor">Why and hows of being a contributor to OpenSource</a></h2>
			</header>
			
			<footer class="post-info">
				<abbr class="published" title="2012-10-04T14:07:00-07:00">
					4th October 2012
				</abbr>

				<address class="vcard author">
					By <a class="url fn" href="myself@shrikrishnaholla.in">Shrikrishna Holla</a>
				</address>
			</footer>
			
			<div class="entry-content">
				<p>I will try to make the approach systematic by answering a few questions. <strong>Who</strong> is a contributor? What are the qualities that mark a contributor? What drives him to contribute? And if you are still interested at the end of my rant, we'll address the issue of where and how <strong>you</strong> can contribute.</p>
				<p>Let's start with <strong>who</strong> a contributor is.</br>
					Anyone who helps in the development of something, is a contributor to that "something". Taking the example of an Open Source Software (I'm an OSS developer, so obviously this and all my other blogs are going to land on the similar topics), a user who files a bug is a contributor; he is contributing by pointing the developers towards simple things they would otherwise have overlooked. The developer who fixes the bug is a contributor; he is contributing by making sure nobody else is troubled with the bug. A person who gives a feature request through the wishlist is also a contributor; he is contributing to making the project better by suggesting a new feature that nobody else would have thought of. Companies and individuals that fund the organizations/individuals who maintain the OSS projects are contributors too. Users, promoters, reviewers all are, in a way, contributors. The point I'm trying to get across is that <i>anybody</i> who helps people or communities, in any form, be it through cash or kind, be it big or small, is a contributor.</p>
				<p>Now let us describe and identify a contributor</p>
				<ol>
					<li>He/she is sitting in front of his computer/ holding a mobile phone in his hand</li>
					<li>He/she is reading this blog</li>
				</ol>
				<p>As said before, we all contribute either directly or indirectly to the OSS that we use. It is <i>impossible</i> to use Firefox web browser without admiring its great plugin system. It is <i>inevitable</i> that we use VLC Media Player without being awed at the number of formats it supports. When we like something, we spread the word to our friends. The popularity grows. More and more people use it. Some of them become interested in developing for it. The community grows. The project grows.</p>
				<p>There are a second group of contributors. They are the awesome bunch of people who directly contribute to the project. This group include the maintainers, the core developers, the bug-fixers, the testers. In most cases, the tasks overlap, giving one-to-many and many-to-one mappings. These are the people who are actively involved in building the software that is used by hundreds or millions of people all over the world. They are not paid (there are exceptional cases); they are not given any benefits. They do it out of pure passion. They have this wierd idea of 'giving back' to the community whose software they have extensively used to their end. They do it to increase their knowledge, to understand how and why something is working and something else isn't. Most of the times, you will find that these people are academicians, students, employees in a company that promotes or works on open source, and few really awesome guys who devote their spare time to contribute, just because they love it.</p>
				<p>So what really drives a person to contribute back to open source? (The context here is regarding that second group of people)</p>
				<p><strong>Passion.</strong> It is the single biggest element you will find among all the contributors. They are passionate about coding, about hacking, about their community. There is also the hunger to learn, to build a tower of knowledge. Some people work full time on some open source projects as they are funded. Regardless of whether anyone is paid or not, you will find that every contributor is out there, enjoying, having fun. It is a joy in itself to find your contribution being used by millions of people in the world, more so because your name will be found in the list of contributors! Every contribution to an open source project is given the credit it deserves. So, it is always a sincere, honest thing to do to mention the person/people whose work you use, somewhere in your derived work. For example, I should mention that my website, and my blogs are designed on tutorialzine and hakim el-hattab's works. This page would've looked ugly and unreadable otherwise.</p>
				<p>Since you have read my blog till here, and are continuing to do so, I'm assuming that you are still interested in contributing to open source. So, I'm going to enlist the ways of contributing to Open Source-</p>
				<ol>
					<li><p><b>Indirect Contribution</b></p>
						<p>Not a coder? Nothing to worry. There are still two ways you can contribute to open source</p>
						<ul>
							<li>Donations. Most of the open source projects are works of passion. Many people who maintain these projects don't do this for the money, and many organizations involved in managing and maintaining these projects are non-profit. But there's only so much you can do with passion. They need money. For everything from feeding a full-time developer to maintaining their server, they need funds. At times, a few companies, who utilize their tools come forward to fund them as their development is benificial to the company in question; but mostly they rely on donations from people who are impressed with the work they have done and wish them to continue. You don't need to donate in Bill Gates's scale; they don't expect it. But you can donate to them the money you otherwise would have spent on proprietary software. Even a small contribution on your part would go a long way in goading them to develop just a little bit more, to keep the project alive.</li>
							<li>Reporting bugs, sending feature requests. This is an important way in which you can contribute too. Sending meaningful, understandable bug reports and providing feasibleinputs as to what improvements can be done are very helpful for taking the project forward. To know how to do this better, contact the developers in the project's community via their mailing-list or through their IRC channel. Read further to find out what these (IRC,ML) mean.</li>
						</ul>
					</li>
					<li><b>Direct Contribution</b>
						<p>Are you a programming freak? Or want to learn how to be one? Become an Open Source Developer! Here's how -</p>
						<ul>
							<li>Take a community of your choice. You can choose based on the language of your interest, the software/prooduct of your interest, because your friend is there too, because you like the work they are doing, or you randomly picked one. ;-) You can find a list of FOSS projects <a href="http://goo.gl/go82L" target='_blank'>here</a></li>
							<li>Once you have come to a decision on where to contribute, contact its maintainers or developers. There are again two ways you can do this</li>
							<ol>
								<li><b>Mailing lists:</b> These are nothing but group emails. It is a place where you can subscribe to notifications from a community regarding their activities. There are usually separate mailing lists like announcement-only list, user-only list, developer-only list, or some smaller communities have one common list for all. There are certain guidelines and etiquette you must know before joining any mailing list. They may differ from community to community. But core codes of conduct are the same. <a href="http://goo.gl/UHFdP" target='_blank'>Here is a link</a> to ubuntu's guidelines to its mailing list</li>
								<li><b>IRC:</b> IRC stands for Internet Relay Chat. These are 'rooms' where people get together, and discuss issues in real time. They are hosted on some servers all over the world, most popular being the freenode IRC server, that hosts most of the popular projects. The community in question will have a 'channel' in the server, identified by a channel name that usually starts with a '#' or '##' followed by the community name (They will have listed this name in their website) You can either use any IRC client like pidgin, xchat, mIRC, quassel or, if you know for sure that your community's channel is hosted on a freenode server, you can go to <a href="http://webchat.freenode.net">webchat.freenode.net</a> on your browser. Every individual user on an IRC server is identified by a nickname that you can specify when you are joining the server. If there already exists another user with the same nick, you'll be given a fallback nick. So it's always recommended that you register your nick so that when you join, irrespective of whether anybody else is given the same nick, you will retain yours.</li>
							</ol>
							<li>Once you contact the community, they will take it up from there and help you move forward, to learn, to contribute, to help make this world a better place.</li>
						</ul>
					</li>
				</ol>
			</div>
		</article>
			
	</section>
	
	<section id="comments" class="body">
	  
	  <header>
			<h2>Comments</h2>
		</header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments">Be the first to add a comment.</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p><?php echo($comment['comment']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		<div id="respond">

      <h3>Leave a Comment</h3>

      <form action="post_comment.php" method="post" id="commentform">

        <label for="comment_author" class="required">Your name</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        
        <label for="email" class="required">Your email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required">

        <label for="comment" class="required">Your message</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input name="submit" type="submit" value="Submit comment" />
        
      </form>
      
    </div>
			
	</section>
	
	<section id="extras" class="body">
		<div class="blogroll">
			<h2>blogroll</h2>
			<ul>
				<li><a href="../software-freedom">Software Freedom</a></li>
				<li><a href="#">Be a Contributor!</a></li>
				<article class="hentry">	
			</ul>
		</div>
		
		<div class="social">
			<h2>social</h2>
			<ul>
				<li><a href="https://www.facebook.com/shrikrishna.holla">facebook</a></li>
				<li><a href="https://twitter.com/srikrishnaholla">Twitter</a></li>
				<li><a href="https://plus.google.com/u/0/103409706809920180325">Google+</a></li>
				<li><a href="https://github.com/shrikrishnaholla/">Github</a></li>
				<li><a href="http://in.linkedin.com/pub/shrikrishna-holla/23/787/647">LinkedIn</a></li>
			</ul>
		</div>
	</section>

	<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34261234-1']);
  _gaq.push(['_setDomainName', 'shrikrishnaholla.in']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- end of google analytics -->

</body>
</html>