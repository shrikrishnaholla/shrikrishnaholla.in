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
	<title>Software Freedom</title>
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
		<h1><a href="#">Software Freedom</br><strong>and power of OpenSource</strong></a></h1>
		<nav><ul>
			<li class="active"><a href="../../">home</a></li>
			<li><a href="../">blogs</a></li>
			<li><a href="../about/">about</a></li>
		</ul></nav>
	</header>
	
	<section id="content" class="body">
	  
	  <article class="hentry">	
			<header>
				<h2 class="entry-title"><a href="#" rel="bookmark" title="blog.shrikrishnaholla.in/software-freedom">Discussion on how Software can give you Superpowers</a></h2>
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
				<p>Freedom</br>What do we exactly mean by freedom?</p>
				<p>Many countries have colourful, valiant stories of how their ancestors fought bravely in a fight against oppression, against dominance, to attain freedom. The very fact that there are 193 out of 249 countries (sources: http://goo.gl/88NkC and http://goo.gl/VDvWX) that celebrate an independence day makes only one thing clear. Every now and then, freedom is challenged; it may not be as direct an invasion as was East India Company's. But everyday, in some corner of the world, <i>some</i> person is out there, fighting for his rights. Someone is fighting to save his family, someone else is fighting for his country, another is fighting for his self respect. Everytime we fight the monster, it comes back in a renewed avatar, with a greater sharpness in its fangs, a nastier poison in its breath. It is our duty to keep fighting, to keep ourselves alive, to retain the sanctity of our souls, to remain <i>free</i></p>
				<p>All this is right, but where does software come into all this? How can your freedom be hampered by anything as harmless or gormless as <i>software</i>?</p>
				<p>Consider this situation - You find two little kids fighting over a piece of chocolate bar. What do you do? You break their fight up, and preach that they learn to share. Then you come back to your cozy little room, turn on your computer, and boot into your Windows or OSX (I'm excluding Linux users for obvious reasons) and lie back, feeling that all is well in the world. Even when you see the Microsoft/Apple logo, the copyright symbol, you don't feel sad, you don't feel guilty about the fact that you are not allowed to share the software that you are using, nor most of the software you have installed in it. What do you care if a friend's computer crashes (Which so often happens in Windows machines), and he urgently needs an OS to, say recover irreplaceable, sensitive data? You give a sigh of relief that you are not in the same trouble, and that you are also saved the trouble of trying to help him because, frankly, you are not even allowed to! (again, this is disregarding people who install pirated copies) You are, by contract, not allowed to share a proprietary (in layman's words, a software that needs you to say "I agree" to licenses when installing them) software to anybody. You are supposed to keep it to yourself, use it as instructed, and remain stupid and selfish forever. Heck, you don't even *own* the software you have already installed!! All the rights remain with the company from whom you "lease" the software. Adding to that, if you have an internet connection, there's no limit to the kind of your data that they can track. Isn't that against the law, you say? No it isn't! You will have agreed to all that in your <b>EULA!</b> (End User License Agreement)</p>
				<p>But they are justified in doing that, aren't they? After all, they're not a charity; they have their employees to feed. Their wish to be on the top of their game, to collect user data can be justified. But should <i>we</i> choose to let them? Shouldn't we be aware of what we are signing up for, when we pay so much, to atleast guarantee that we own it?</p>
				<p>You don't need to take my words for it. There's a great example to prove this. Suppose you find a bug in the proprietary software that you use. It may be something as insignificant as a button misbehaving, to something as serious as a security loophole. You can, at best report it, and hope for Gods that they will get a patch ready soon. If they do, you're a lucky man/woman. Else, RIP.</p>
				<p>Now consider a second scenario. You are using a Linux based Operating System (or freeBSD, or whatever other open source distros), and you get into the same situation. There are two possible things you can do</p>
				<ol>
					<li>Are you a programming ninja? You are in luck! Another bug for you to fix! Just download the source, fix the bug and submit a patch so that others can be saved from the bug too, and enjoy that pleasant feeling of satisfaction</li>
					<li>Are you a non-programmer? That's okay. Just file a bug report. The latency of the bug being fixed will be much lesser, because, since developers from all over the world are involved, one of them will notice your report and voluntarily will come forward to fix it.</li>
				</ol>
				<p>You will, of course have heard all around that Linux based operating systems are more secure. The only reason for this is the source code of Linux being freely available. So, more people will be involved in contributing by adding new features, bug fixing, or even just using it. The more the number of users and developers, the more the number of watchful eyes, the lesser the number of security loopholes. This is the reason for 90% of the world's servers being based on Linux.</p>
				<p><b>FOSS</b> (acronym for Free and Open Source Software) puts the power into your hands. FOSS enthusiasts believe that software is something which gives you knowledge, something that empowers you. And knowledge is meant to be shared; power is meant to be distributed. I want to make one thing clear here. Many mistake 'free' to mean that it doesn't cost. They couldn't be more wrong. 'Free' in this context means freedom. Freedom to redistribute, modify, and share the software that you use. More like 'Free Speech'. 'Open Source' means that the source code of the software that you use will be available to you to use in any way you want. For most practical purposes, the terms 'Open Source' and 'Free Software' can be used interchangeably. There are purists who argue that there are Open Source software that snatch certain freedom from users, but let us not get into that arguement.</p>
				<p>Some may stop me at this point and ask - If you are allowed to read the sources, modify them, and redistribute, then where is the world going to? Where is the respect for the person who has struggled to write the code? Isn't it like giving license to plagiarism? Doesn't it lessen the value of the developer? Of his efforts?</p>
				<p>The answer is <strong>NO</strong>. Think about it; if it were, why would there be so many developers developing on it? FOSS preserves the integrity of the developer by adding him as the author or the contributor of the name, something that carries forward through versions. There are companies like Google that contribute back to the communities whose tools they extensively use. There are other companies like Canonical that have products completely based on Open source (Ubuntu), and they earn money through support. And then there are organizations like Mozilla, KDE etc, which are completely non-profit, ie, they run on donations. All these organizations have one thing in common -  they involve their users in their products, recognize that a user can be helpful in fixing their problems, that many drops of water make an ocean. This has resulted in open source projects being few of the largest collaborative development projects in the world. They've brought people from all over the world together, building bonds, sharing knowledge, growing, helping others grow, and ultimately making everyone a Superhuman.</p>
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
				<li><a href="#">Software Freedom</a></li>
				<li><a href="../be-a-contributor">Be a contributor!!</a></li>
				<article class="hentry">	
			</ul>
		</div>
		
		<div class="social">
			<h2>social</h2>
			<ul>
				<li><a href="https://www.facebook.com/shrikrishna.holla/" target="_blank">facebook</a></li>
				<li><a href="https://twitter.com/srikrishnaholla" target="_blank">Twitter</a></li>
				<li><a href="https://plus.google.com/u/0/103409706809920180325" target="_blank">Google+</a></li>
				<li><a href="https://github.com/shrikrishnaholla/" target="_blank">Github</a></li>
				<li><a href="http://in.linkedin.com/pub/shrikrishna-holla/23/787/647" target="_blank">LinkedIn</a></li>
			</ul>
		</div>
	</section>
	<!-- Extra scripts-->
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
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