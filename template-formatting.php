<?php
/*
Template Name: Formatting
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/prism.css" />

<section class="light-grey-bx content">
	<div class="row">
		<div class="small-12 columns">
			<header id="page-id">
				<h1><?php the_title(); ?></h1>
				<?php get_template_part('library/includes/breadcrumbs'); ?>	
			</header>		
		</div>
	</div>	
</section>
<section class="row content pattern-markup language-markup">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>Buttons</h4>
	</div>
	<div class="inner-content row">
		<div class="pad-lv4 left">		
			<a href="" class="button">Primary/Chat Button</a>
		</div>
		<div class="pad-lv4 left">		
			<a href="" class="button orange">Secondary Button</a>
		</div>	
		<div class="pad-lv4 left">
			<a href="" class="outline blue button">Outline Button</a>
		</div>	
		<div class="bl-bx pad-lv4 left">
			<a href="" class="outline button">Outline Button for Dark Bg</a>
		</div>
	</div>
	<div class="pad-lv3">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#buttons">Reveal HTML Code</a>
		    <div id="buttons" class="content">
<pre><code>
&lt;a href=&quot;&quot; class=&quot;button&quot;&gt;Primary/Chat Button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;button orange&quot;&gt;Secondary Button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;outline blue button&quot;&gt;Outline Button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;outline button&quot;&gt;Outline Button for Dark Bg&lt;/a&gt;
</code></pre>
		    </div>
		  </li>
		</ul>		
	</div>
</div>

<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>Chat Button</h4>
	</div>
	<div class="inner-content row">
		<div class="pad-lv4 text-center">		
			<a href="" class="button large" onclick="return SnapEngage.startLink();">Live Chat</a>		
		</div>			
	</div>
	<div class="pad-lv3">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#chat-button">Reveal HTML Code</a>
		    <div id="chat-button" class="content">
<pre><code>
&lt;a href=&quot;&quot; class=&quot;button large&quot; onclick=&quot;return SnapEngage.startLink();&quot;&gt;Live Chat&lt;/a&gt;
</code></pre>
		    </div>
		  </li>
		</ul>		
	</div>
</div>

<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>Standalone Link</h4>
	</div>
	<div class="inner-content row">
		<div class="pad-lv4 text-center">		
			<a href="" class="stand-alone">Stand alone link</a>		
		</div>			
	</div>
	<div class="pad-lv3">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#stand-alone">Reveal HTML Code</a>
		    <div id="stand-alone" class="content">
<pre><code>
&lt;a href=&quot;&quot; class=&quot;stand&#45;alone&quot;&gt;Stand alone link&lt;/a&gt;
</code></pre>
		    </div>
		  </li>
		</ul>		
	</div>
</div>

<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>Button Sizes</h4>
	</div>
	<div class="inner-content row">
		<div class="pad-lv2 left">		
			<a href="" class="tiny button">Tiny Button</a>
		</div>	
		<div class="pad-lv2 left">
			<a href="" class="small button">Small Button</a>
		</div>	
		<div class="pad-lv2 left">
			<a href="" class="button">Regular</a>
		</div>	
		<div class="pad-lv2 left">
			<a href="" class="large button">Large Button</a>
		</div>
	</div>
	<div class="inner-content row">
		<div class="pad-lv2 left">		
			<a href="" class="tiny outline blue button">Tiny Button</a>
		</div>	
		<div class="pad-lv2 left">
			<a href="" class="small outline blue button">Small Button</a>
		</div>	
		<div class="pad-lv2 left">
			<a href="" class="outline blue button">Regular</a>
		</div>	
		<div class="pad-lv2 left">
			<a href="" class="outline blue large button">Large Button</a>
		</div>
	</div>
	<div class="pad-lv3">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#button-sizes">Reveal HTML Code</a>
		    <div id="button-sizes" class="content">
<pre><code>
&lt;a href=&quot;&quot; class=&quot;tiny button&quot;&gt;Tiny Button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;small button&quot;&gt;Small Button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;button&quot;&gt;Regular&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;large button&quot;&gt;Large Button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;outline blue tiny button&quot;&gt;Tiny Button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;outline blue small button&quot;&gt;Small Button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;outline blue button&quot;&gt;Regular&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;outline blue large button&quot;&gt;Large Button&lt;/a&gt;
</code></pre>
		    </div>
		  </li>
		</ul>		
	</div>
</div>


<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>Boxes + Background Colors</h4>
	</div>
	<div class="light-bl-bx pad-lv4">
		<p>Light Blue</p>
	</div>
	<div class="bl-bx pad-lv4">
		<p>Blue</p>
	</div>
	<div class="dark-bl-bx pad-lv4">
		<p>Dark Blue</p>
	</div>
	<div class="orange-bx pad-lv4">
		<p>Orange</p>
	</div>
	<div class="light-grey-bx pad-lv4">
		<p>Light Grey</p>
	</div>	
	<div class="row">
		<div class="pad-lv3">
			<ul class="accordion" data-accordion>
			  <li class="accordion-navigation">
			    <a href="#boxes">Reveal HTML Code</a>
			    <div id="boxes" class="content">
<pre><code>
&lt;div class=&quot;light&#45;bl&#45;bx&quot;&gt;
	&lt;!&#45;&#45; Light Blue Box &#45;&#45;&gt;
&lt;/div&gt;
&lt;div class=&quot;bl&#45;bx&quot;&gt;
	&lt;!&#45;&#45; Blue Box &#45;&#45;&gt;
&lt;/div&gt;
&lt;div class=&quot;dark&#45;bl&#45;bx&quot;&gt;
	&lt;!&#45;&#45; Dark Blue Box &#45;&#45;&gt;
&lt;/div&gt;
&lt;div class=&quot;orange&#45;bx&quot;&gt;
	&lt;!&#45;&#45; Orange Box &#45;&#45;&gt;
&lt;/div&gt;
&lt;div class=&quot;light&#45;grey&#45;bx&quot;&gt;
	&lt;!&#45;&#45; Light Grey Box &#45;&#45;&gt;
&lt;/div&gt;
</code></pre>
			    </div>
			  </li>
			</ul>		
		</div>
	</div>
</div>


<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>Blue Shade Equal Height Boxes</h4>
	</div>
	<div class="row collapse blue-boxes" data-equalizer>
		<div class="medium-4 columns light-bl-bx" data-equalizer-watch>
			<h3>How We Can Help</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.</p>
			<a href="" class="button outline">Quality Care</a>
		</div>
		<div class="medium-4 columns bl-bx" data-equalizer-watch>
			<h3>How We Can Help</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.</p>
			<a href="" class="button outline">Quality Care</a>
		</div>
		<div class="medium-4 columns dark-bl-bx" data-equalizer-watch>
			<h3>How We Can Help</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.</p>
			<a href="" class="button outline">Quality Care</a>					
		</div>
	</div>	
	<div class="row">
		<div class="pad-lv3">
			<ul class="accordion" data-accordion>
			  <li class="accordion-navigation">
			    <a href="#blue-shades">Reveal HTML Code</a>
			    <div id="blue-shades" class="content">
<pre><code>
&lt;div class=&quot;row collapse blue&#45;boxes&quot; data&#45;equalizer&gt;
	&lt;div class=&quot;medium&#45;4 columns light&#45;bl&#45;bx&quot; data&#45;equalizer&#45;watch&gt;
		&lt;h3&gt;How We Can Help&lt;/h3&gt;
		&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.&lt;/p&gt;
		&lt;a href=&quot;&quot; class=&quot;button outline&quot;&gt;Quality Care&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class=&quot;medium&#45;4 columns bl&#45;bx&quot; data&#45;equalizer&#45;watch&gt;
		&lt;h3&gt;How We Can Help&lt;/h3&gt;
		&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.&lt;/p&gt;
		&lt;a href=&quot;&quot; class=&quot;button outline&quot;&gt;Quality Care&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class=&quot;medium&#45;4 columns dark&#45;bl&#45;bx&quot; data&#45;equalizer&#45;watch&gt;
		&lt;h3&gt;How We Can Help&lt;/h3&gt;
		&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.&lt;/p&gt;
		&lt;a href=&quot;&quot; class=&quot;button outline&quot;&gt;Quality Care&lt;/a&gt;					
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>
			    </div>
			  </li>
			</ul>		
		</div>
	</div>
</div>


<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>CTA Boxes</h4>
	</div>
	<div class="row pad-t3 below-4">
		<div class="medium-4 medium-push-2 columns">
			<div class="orange-bx cta-bx">
				<h3>Take a Tour</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. </p>
				<a href="" class="button outline">Tour our Facility</a>
			</div>
		</div>
		<div class="medium-4 medium-pull-2 columns">
			<div class="bl-bx cta-bx">
				<h3>Take a Tour</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. </p>
				<a href="" class="button outline">Tour our Facility</a>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="medium-4 medium-push-2 columns">
			<div class="dark-bl-bx cta-bx">
				<h3>Take a Tour</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. </p>
				<a href="" class="button outline">Tour our Facility</a>
			</div>
		</div>	
		<div class="medium-4 medium-pull-2 columns">
			<div class="light-bl-bx cta-bx">
				<h3>Take a Tour</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. </p>
				<a href="" class="button outline">Tour our Facility</a>
			</div>
		</div>	
	</div>	
	<div class="row">
		<div class="pad-lv3">
			<ul class="accordion" data-accordion>
			  <li class="accordion-navigation">
			    <a href="#cta-boxes">Reveal HTML Code</a>
			    <div id="cta-boxes" class="content">
<pre><code>
&lt;div class=&quot;orange&#45;bx  cta&#45;bx&quot;&gt;
	&lt;h3&gt;Take a Tour&lt;/h3&gt;
	&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. &lt;/p&gt;
	&lt;a href=&quot;&quot; class=&quot;button outline&quot;&gt;Tour our Facility&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;bl&#45;bx cta&#45;bx&quot;&gt;
	&lt;h3&gt;Take a Tour&lt;/h3&gt;
	&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. &lt;/p&gt;
	&lt;a href=&quot;&quot; class=&quot;button outline&quot;&gt;Tour our Facility&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;dark&#45;bl&#45;bx cta&#45;bx&quot;&gt;
	&lt;h3&gt;Take a Tour&lt;/h3&gt;
	&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. &lt;/p&gt;
	&lt;a href=&quot;&quot; class=&quot;button outline&quot;&gt;Tour our Facility&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;light&#45;bl&#45;bx cta&#45;bx&quot;&gt;
	&lt;h3&gt;Take a Tour&lt;/h3&gt;
	&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. &lt;/p&gt;
	&lt;a href=&quot;&quot; class=&quot;button outline&quot;&gt;Tour our Facility&lt;/a&gt;
&lt;/div&gt;
</code></pre>
			    </div>
			  </li>
			</ul>		
		</div>
	</div>
</div>

<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>Box with Header</h4>
	</div>
	<div class="row">
		<div class="outline-bx mar-lv4">
			<div class="title-tier">
				<h4>Title</h4>
			</div>
			<div class="inner-content">
				<p>Inner Content goes here</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="pad-lv3">
			<ul class="accordion" data-accordion>
			  <li class="accordion-navigation">
			    <a href="#box-header">Reveal HTML Code</a>
			    <div id="box-header" class="content">
<pre><code>
&lt;div class=&quot;outline&#45;bx&quot;&gt;
	&lt;div class=&quot;title&#45;tier&quot;&gt;
		&lt;h4&gt;Title&lt;/h4&gt;
	&lt;/div&gt;
	&lt;div class=&quot;inner&#45;content&quot;&gt;
		&lt;p&gt;Inner Content goes here&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>
			    </div>
			  </li>
			</ul>		
		</div>
	</div>
</div>

<div class="outline-bx below-4">
	<div class="title-tier">
		<h4>Special Lists</h4>
	</div>
	<div class="row">
		<ul class="resources large-6 columns pad-lv4">
			<li><a href="">Resource Title Link</a></li>
			<li><a href="">Resource Title Link</a></li>
			<li><a href="">Resource Title Link</a></li>
			<li><a href="">Resource Title Link</a></li>
			<li><a href="">Resource Title Link</a></li>
		</ul>
		<div class="large-6 columns pad-lv4">
			<ul class="checkmark">
				<li>Sed ut perspiciatis unde omnis iste natus error</li>
				<li>Sit voluptatem accusantium</li>
				<li>Totam rem aperiam</li>
				<li>Eaque ipsa quae ab illo</li> 
				<li>Inventore veritatis et quasi</li>
				<li>Lorem Ipsum Dolor</li>
				<li>Inventore veritatis et quasi</li>
				<li>Lorem Ipsum Dolor</li>		
			</ul>
		</div>
	</div>
	<div class="row pad-lv4">
		<div class="medium-10 medium-centered columns">
			<ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1 checkmark">
				<li>Sed ut perspiciatis unde omnis iste natus error</li>
				<li>Sit voluptatem accusantium</li>
				<li>Totam rem aperiam</li>
				<li>Eaque ipsa quae ab illo</li> 
				<li>Inventore veritatis et quasi</li>
				<li>Lorem Ipsum Dolor</li>
				<li>Sit amen laborum</li>
				<li>Sed ut perspiciatis unde omnis iste natus error</li>
				<li>Sit voluptatem accusantium</li>
				<li>Totam rem aperiam</li>
				<li>Eaque ipsa quae ab illo</li> 
				<li>Inventore veritatis et quasi</li>
				<li>Lorem Ipsum Dolor</li>
				<li>Sit amen laborum</li>
			</ul>
		</div>
	</div>
	<div class="row pad-lv4">
		<div class="medium-10 medium-centered columns">
			<div class="outline-bx">
				<div class="title-tier">
					<h4>For Parents</h4>
				</div>
				<ul class="resources">
					<li><a href="">Resource Title Link</a></li>
					<li><a href="">Resource Title Link</a></li>
					<li><a href="">Resource Title Link</a></li>
					<li><a href="">Resource Title Link</a></li>
					<li><a href="">Resource Title Link</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="pad-lv3">
			<ul class="accordion" data-accordion>
			  <li class="accordion-navigation">
			    <a href="#special-lists">Reveal HTML Code</a>
			    <div id="special-lists" class="content">
<pre><code>
&lt;!&#45;&#45; Resources List &#45;&#45;&gt;
&lt;ul class=&quot;resources &quot;&gt;
	&lt;li&gt;&lt;a href=&quot;&quot;&gt;Resource Title Link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!&#45;&#45; Checkmark List &#45;&#45;&gt;
&lt;ul class=&quot;checkmark&quot;&gt;
	&lt;li&gt;Sed ut perspiciatis unde omnis iste natus error&lt;/li&gt;	
&lt;/ul&gt;
&lt;!&#45;&#45; 2 Column Checkmark List &#45;&#45;&gt;
&lt;ul class=&quot;large&#45;block&#45;grid&#45;2 medium&#45;block&#45;grid&#45;2 small&#45;block&#45;grid&#45;1 checkmark&quot;&gt;
	&lt;li&gt;2 Column Checkmark List&lt;/li&gt;
&lt;/ul&gt;
&lt;!&#45;&#45; Boxed Resources List &#45;&#45;&gt;
&lt;div class=&quot;outline&#45;bx&quot;&gt;
	&lt;div class=&quot;title&#45;tier&quot;&gt;
		&lt;h4&gt;Box Title&lt;/h4&gt;
	&lt;/div&gt;
	&lt;ul class=&quot;resources&quot;&gt;
		&lt;li&gt;&lt;a href=&quot;&quot;&gt;Resource List in Box&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</code></pre>
			    </div>
			  </li>
			</ul>		
		</div>
	</div>
</div>

<section class="statement-tier below-2">
	<div class="row content">
		<div class="small-12 medium-11 medium-centered large-10 columns">
			<p><strong>Seeking help?</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.</p>
		</div>
	</div>				
</section>

<div class="row below-4">
	<div class="pad-lv3">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#statement-tier">Reveal HTML Code</a>
		    <div id="statement-tier" class="content">
<pre><code>
&lt;section class=&quot;statement&#45;tier&quot;&gt;
	&lt;div class=&quot;row content&quot;&gt;
		&lt;div class=&quot;small&#45;12 medium&#45;11 medium&#45;centered large&#45;10 columns&quot;&gt;
			&lt;p&gt;&lt;strong&gt;Seeking help?&lt;/strong&gt; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;				
&lt;/section&gt;
</code></pre>
		    </div>
		  </li>
		</ul>		
	</div>
</div>

<section class="light-grey-bx below-2">
	<div id="quality-tier" class="row content">
		<div class="large-8 large-push-4 medium-10 medium-push-2 small-12 columns">
			<h2>
				You Deserve Quality Care
			</h2>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.</p>			
		</div>
	</div>
</section>
<div class="row below-4">
	<div class="pad-lv3">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#quality">Reveal HTML Code</a>
		    <div id="quality" class="content">
<pre><code>
&lt;section class=&quot;light&#45;grey&#45;bx&quot;&gt;
	&lt;div id=&quot;quality-tier&quot; class=&quot;row content&quot;&gt;
		&lt;div class=&quot;large&#45;8 large&#45;push&#45;4 medium&#45;10 medium&#45;push&#45;2 small&#45;12 columns&quot;&gt;
			&lt;h2&gt;
				You Deserve Quality Care
			&lt;/h2&gt;
			&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.&lt;/p&gt;			
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/section&gt;
</code></pre>
		    </div>
		  </li>
		</ul>		
	</div>
</div>

<section class="light-grey-bx">
	<div id="questions" class="row content">
		<div class="large-9 large-push-3 medium-9 small-12 columns">
			<h2>You've got Questions, We've got Answers</h2>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo. </p>							
	</div>
</section>
<div class="row below-4">
	<div class="pad-lv3">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#questions-tier">Reveal HTML Code</a>
		    <div id="questions-tier" class="content">
<pre><code>
&lt;section class=&quot;light&#45;grey&#45;bx&quot;&gt;
	&lt;div id=&quot;questions&quot; class=&quot;row content&quot;&gt;
		&lt;div class=&quot;large&#45;9 large&#45;push&#45;3 medium&#45;9 small&#45;12 columns&quot;&gt;
			&lt;h2&gt;You&#39;ve got Questions, We&#39;ve got Answers&lt;/h2&gt;
			&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo. &lt;/p&gt;							
	&lt;/div&gt;
&lt;/section&gt;
</code></pre>
		    </div>
		  </li>
		</ul>		
	</div>
</div>

<section id="teen-male-bg" class="row content">
	<div class="large-8 columns">
		<h2>Our Success with Teens</h2>
		<p class="leading">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
		<a href="" class="button outline blue">What makes us different</a>
	</div>
</section>
<div class="row below-4">
	<div class="pad-lv3">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#teen-male">Reveal HTML Code</a>
		    <div id="teen-male" class="content">
<pre><code>
&lt;section id=&quot;teen&#45;male&#45;bg&quot; class=&quot;row content&quot;&gt;
	&lt;div class=&quot;large&#45;8 columns&quot;&gt;
		&lt;h2&gt;Our Success with Teens&lt;/h2&gt;
		&lt;p class=&quot;leading&quot;&gt;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.&lt;/p&gt;
		&lt;a href=&quot;&quot; class=&quot;button outline blue&quot;&gt;What makes us different&lt;/a&gt;
	&lt;/div&gt;
&lt;/section&gt;
</code></pre>
		    </div>
		  </li>
		</ul>		
	</div>
</div>


<div class="row">
<h1>h1. This is a very large header.</h1>
<h2>h2. This is a large header.</h2>
<h3>h3. This is a medium header.</h3>
<h4>h4. This is a moderate header.</h4>
<h5>h5. This is a small header.</h5>
<h6>h6. This is a tiny header.</h6>
</div>

<ul class="accordion" data-accordion>
  <li class="accordion-navigation">
    <a href="#panel1a">Code</a>
    <div id="panel1a" class="content">
      	<pre><code>
&lt;h1&gt;h1. This is a very large header.&lt;/h1&gt;
&lt;h2&gt;h2. This is a large header.&lt;/h2&gt;
&lt;h3&gt;h3. This is a medium header.&lt;/h3&gt;
&lt;h4&gt;h4. This is a moderate header.&lt;/h4&gt;
&lt;h5&gt;h5. This is a small header.&lt;/h5&gt;
&lt;h6&gt;h6. This is a tiny header.&lt;/h6&gt;
		</code></pre>
    </div>
  </li>
</ul>


<h2>Text Align Classes</h2>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Basic</small></h3>
		<p class="text-left"><strong>Left Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
		<p class="text-right"><strong>Right Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
		<p class="text-center"><strong>Center Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
		<p class="text-justify"><strong>Justified.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<p class="text-left"><!-- text goes here --></p>
<p class="text-right"><!-- text goes here --></p>
<p class="text-center"><!-- text goes here --></p>
<p class="text-justify"><!-- text goes here --></p>
	</textarea></code>
	</div>
</div>
<hr>
<h2>Lists</h2>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Basic</small></h3>
	<ul class="disc">
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ul>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ul>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	</ul>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<pre><code><textarea>
<ul class="disc">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
	</textarea></code></pre>
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Circle</small></h3>
	<ul class="circle">
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ul>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ul>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	</ul>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ul class="circle">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
	</textarea></code>
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Square</small></h3>
	<ul class="square">
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ul>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ul>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	</ul>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ul class="square">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
	</textarea></code>
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
	<h3><small>No Bullet</small></h3>
	<ul class="no-bullet">
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ul>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ul>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	</ul>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ul class="no-bullet">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
	</textarea></code>
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Ordered/Numbered List</small></h3>
	<ol>
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ol>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ol>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	 </ol>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ol>
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ol>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ol>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ol>
	</textarea></code>
	</div>
</div>
<hr>
<h2>Blockquotes</h2>
<div class="row">
		<div class="large-6 columns">
			<blockquote>Those people who think they know everything are a great annoyance to those of us who do.<cite>Isaac Asimov</cite></blockquote>			
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<blockquote>Those people who think they know everything are a great annoyance to those of us who do.<cite>Isaac Asimov</cite></blockquote>
			</textarea></code>
		</div>
</div>
<hr>
<a name="btns"></a>
<h2 data-magellan-destination="btns">Buttons</h2>
	<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<a href="#" class="button">Button</a>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button">Button</a>
			</textarea></code>
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<h3><small>Sizes</small></h3>
			<a href="#" class="button tiny">Tiny Button</a><br />
			<a href="#" class="button small">Small Button</a><br />
			<a href="#" class="button large">Large Button</a><br />
			<a href="#" class="button expand">Expand Button</a>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button tiny">Tiny Button</a>
<a href="#" class="button small">Small Button</a>
<a href="#" class="button large">Large Button</a>
<a href="#" class="button expand">Expand Button</a>
			</textarea></code>
		</div>
	</div>

	</div>	

<div class="row">
		<div class="large-6 columns">
			<h3><small>Floats</small></h3>
			<a href="#" class="button left">Left Float</a>
			<a href="#" class="button right">Right Float</a>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button left">Left Float</a>
<a href="#" class="button right">Right Float</a>
			</textarea></code>
		</div>
</div>

<div class="row">
		<div class="large-6 columns">
			<h3><small>Centered</small></h3>
			<div class="text-center">
				<a href="#" class="button">Centered</a>
			</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="text-center">
	<a href="#" class="button">Centered</a>
</div>
			</textarea></code>
		</div>
</div>


<h2>Button Groups</h2>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<ul class="button-group">
				<li><a href="#" class="button">Button 1</a></li>
				<li><a href="#" class="button">Button 2</a></li>
				<li><a href="#" class="button">Button 3</a></li>
			</ul>		
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="button-group">
  <li><a href="#" class="button">Button 1</a></li>
  <li><a href="#" class="button">Button 2</a></li>
  <li><a href="#" class="button">Button 3</a></li>
</ul>
			</textarea></code>
		</div>
</div>
<hr>
<h2>Labels</h2>
<p>
	Labels are useful inline styles that can be dropped into body copy to call out certain sections or to attach metadata. For example, you can attach a label that notes when something was updated.
</p>
<h3>Basic</h3>
<p>
	You can create a label using minimal markup.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<span class="label">Regular Label</span>				
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<span class="label">Regular Label</span>				
			</textarea></code>
		</div>
</div>
<h3>Advanced</h3>
<p>
	Additional classes can be added to your labels to change their appearance.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<p>
				<span class="success round label">Success Round</span><br>		
				<span class="alert radius label">Alert Radius</span><br>
				<span class="secondary label">Secondary Label</span></p>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<span class="success round label">Success Round</span>				
<span class="alert radius label">Alert Radius</span>
<span class="secondary label">Secondary Label</span>				
			</textarea></code>
		</div>
</div>
<br>
<hr>
<h2>Visibility</h2>
<p>
	Visibility classes let you show or hide elements based on screen size. You can use visibility classes to control which elements users see depending on their browsing environment.
</p>
<h3>Show by Screen Size</h3>
<p>
	In this example, we use the show visibility classes to show certain strings of text based on the device on which users view a page. If their browser meets the class's conditions, the element will be shown. If not, it will be hidden.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<p class="panel">
			  <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
			  <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
			  <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
			  <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
			  <strong class="show-for-large-only">This text is shown only on a large screen.</strong>			  
			</p>				
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<p>
  <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
  <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
  <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
  <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
  <strong class="show-for-large-only">This text is shown only on a large screen.</strong>
</p>
			</textarea></code>
		</div>
</div>
<br>
<h3>Hide by Screen Size</h3>
<p>
	This example shows the opposite: It uses the hide visibility classes to state which elements should disappear based on your device's screen size or orientation. Users will see elements on every browser except those that meet these conditions.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<p class="panel">
			  <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
			  <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge screen.</strong>
			  <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
			  <strong class="hide-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge screen.</strong>
			  <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
			</p>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<p>
  <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
  <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge screen.</strong>
  <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
  <strong class="hide-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge screen.</strong>
  <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
</p>		</textarea></code>
		</div>
</div>
<hr>
<a name="structure"></a>
<h2 data-magellan-destination="structure">Grid System</h2>	
<p>
	Start by adding an element with a class of row. This will create a horizontal block to contain vertical columns, 12 total. Then add divs with a column class within that row. You can use column or columns - the only difference is grammar. Specify the widths of each column with the small-#, medium-#, and large-# classes.
</p>
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		  <div class="large-3 columns text-center" style="background-color:#c6c6c6">3 Columns</div>
		  <div class="large-6 columns text-center" style="background-color:#eeeeee">6 Columns</div>
		  <div class="large-3 columns text-center" style="background-color:#c6c6c6">3 Columns</div>				
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="row">  
  <div class="large-3 columns">3 Columns</div>
  <div class="large-6 columns">6 Columns</div>
  <div class="large-3 columns">3 Columns</div>
</div>			
			</textarea></code>
		</div>		
</div>

<h3>Targetting display sizes</h3>
<p>
	You can specify different column widths that target three different sizes: small (mobile), medium (tablet) and large (desktop). The classes can be combined such that for each display size, a different column width takes effect.   
</p>		
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<div class="small-2 large-4 columns text-center" style="background-color:#c6c6c6">Large 4, Small 2</div>
			<div class="small-4 large-4 columns text-center" style="background-color:#eeeeee">Large 4, Small 4</div>
			<div class="small-6 large-4 columns text-center" style="background-color:#c6c6c6">Large 4, Small 6</div>
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="row">
  <div class="small-2 large-4 columns">Large 4, Small 2</div>
  <div class="small-4 large-4 columns">Large 4, Small 4</div>
  <div class="small-6 large-4 columns">Large 4, Small 6</div>
</div>		
			</textarea></code>
		</div>		
</div>		

<h3>Centered Columns</h3>
<p>
	Center your columns by adding a class of small-centered to your column. Large will inherit small centering by default, but you can also center solely on large by applying a large-centered class. 
</p>		
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
  			<div class="small-3 small-centered columns text-center" style="background-color:#c6c6c6">3 centered</div>
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="row">
  <div class="small-3 small-centered columns">3 centered</div>
</div>
			</textarea></code>
		</div>		
</div>	

<h3>Offsets</h3>
<p>
	Move blocks up to 11 columns to the right by using classes like .large-offset-1 and .small-offset-3.
</p>		
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
  			<div class="large-1 columns text-center" style="background-color:#c6c6c6">1</div>
  			<div class="large-9 large-offset-2 columns text-center" style="background-color:#eeeeee">9, offset 2</div>
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="row">
  <div class="large-1 columns">1</div>
  <div class="large-9 large-offset-2 columns">9, offset 2</div>
</div>
			</textarea></code>
		</div>		
</div>	
<hr>
<h2>Block Grid</h2>
<p>
	Block grids give you a way to evenly split contents of a list within the grid. If you wanted to create a row of five images or paragraphs that need to stay evenly spaced no matter the screen size, the block grid is for you.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<ul class="small-block-grid-3">
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="small-block-grid-3">
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
</ul>
 			</textarea></code>
		</div>		
</div>
<p>
	Use additional classes to specify a different number of items in a row for each screen size.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-6">
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-6">
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
</ul>
 			</textarea></code>
		</div>		
</div>
<hr>
<a name="content"></a>
<h2 data-magellan-destination="content">Dropdown</h2>
<p>
	a universal dropdown plugin that will attach dropdowns or popovers to whatever element you need.
</p>
<h3>Basic</h3>
<p>
	You can create a dropdown using minimal markup.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<a href="#" data-dropdown="drop1">Has Dropdown</a>
			<ul id="drop1" class="f-dropdown" data-dropdown-content>
			  <li><a href="#">This is a link</a></li>
			  <li><a href="#">This is another</a></li>
			  <li><a href="#">Yet another</a></li>
			</ul>
			<a href="#" data-dropdown="drop2">Has Content Dropdown</a>
			<div id="drop2" data-dropdown-content class="f-dropdown content">
			  <p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
			</div>			
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-dropdown="drop1">Has Dropdown</a>
<ul id="drop1" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
<a href="#" data-dropdown="drop2">Has Content Dropdown</a>
<div id="drop2" data-dropdown-content class="f-dropdown content">
  <p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
</div>
			</textarea></code>
		</div>
</div>
<h3>Advanced</h3>
<p>
	Additional classes can be added to your dropdown to change its appearance.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<a href="#" class="button" data-dropdown="drop">Link Dropdown &raquo;</a>
			<ul id="drop" class="small content f-dropdown" data-dropdown-content>
			  <li><a href="#">This is a link</a></li>
			  <li><a href="#">This is another</a></li>
			  <li><a href="#">Yet another</a></li>
			</ul>		
			<a href="#" data-dropdown="dropb" class="button dropdown">Dropdown Button</a><br>
			<ul id="dropb" data-dropdown-content class="f-dropdown">
			  <li><a href="#">This is a link</a></li>
			  <li><a href="#">This is another</a></li>
			  <li><a href="#">Yet another</a></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button" data-dropdown="drop">Link Dropdown &raquo;</a>
<ul id="drop" class="small content f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>	

<a href="#" data-dropdown="dropb" class="button dropdown">Dropdown Button</a><br>
<ul id="dropb" data-dropdown-content class="f-dropdown">
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
			</textarea></code>
		</div>
</div>
<h3>Hoverable Dropdown Option</h3>
<p>
	If you'd rather have your dropdown be accessible by hover, you can add a data-option to the target element:
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<a href="#" data-dropdown="hover1" data-options="is_hover:true">Has Hover Dropdown</a>
			<ul id="hover1" class="f-dropdown" data-dropdown-content>
			  <li><a href="#">This is a link</a></li>
			  <li><a href="#">This is another</a></li>
			  <li><a href="#">Yet another</a></li>
			</ul>			
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-dropdown="hover1" data-options="is_hover:true">Has Hover Dropdown</a>

<ul id="hover1" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
			</textarea></code>
		</div>
</div>
<hr>

<h2>Accordion</h2>
<p>
	You can create an accordion using minimal markup like so:
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
<dl class="accordion" data-accordion>
  <dd>
	<a href="#panel1">Accordion 1</a>
    <div id="panel1" class="content active">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel2">Accordion 2</a>
    <div id="panel2" class="content">
      Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel3">Accordion 3</a>
    <div id="panel3" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
</dl>	 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<pre><code>
<dl class="accordion" data-accordion>
  <dd>
	<a href="#panel1">Accordion 1</a>
    <div id="panel1" class="content active">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel2">Accordion 2</a>
    <div id="panel2" class="content">
      Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel3">Accordion 3</a>
    <div id="panel3" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
</dl>					
			</code></pre>
		</div>		
</div>		


<h2>Tabs</h2>
<p>
	You can create a group of horizontal tabs using minimal markup.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<dl class="tabs" data-tab>
			  <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
			  <dd><a href="#panel2-2">Tab 2</a></dd>
			  <dd><a href="#panel2-3">Tab 3</a></dd>
			  <dd><a href="#panel2-4">Tab 4</a></dd>
			</dl>
			<div class="tabs-content">
			  <div class="content active" id="panel2-1">
			    <p>First panel content goes here...</p>
			  </div>
			  <div class="content" id="panel2-2">
			    <p>Second panel content goes here...</p>
			  </div>
			  <div class="content" id="panel2-3">
			    <p>Third panel content goes here...</p>
			  </div>
			  <div class="content" id="panel2-4">
			    <p>Fourth panel content goes here...</p>
			  </div>
			</div>				 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<dl class="tabs" data-tab>
  <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
  <dd><a href="#panel2-2">Tab 2</a></dd>
  <dd><a href="#panel2-3">Tab 3</a></dd>
  <dd><a href="#panel2-4">Tab 4</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="panel2-1">
    <p>First panel content goes here...</p>
  </div>
  <div class="content" id="panel2-2">
    <p>Second panel content goes here...</p>
  </div>
  <div class="content" id="panel2-3">
    <p>Third panel content goes here...</p>
  </div>
  <div class="content" id="panel2-4">
    <p>Fourth panel content goes here...</p>
  </div>
</div>						
			</textarea></code>
		</div>		
</div>		

<h3>Vertical Tabs</h3>
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<dl class="tabs vertical" data-tab>
			  <dd class="active"><a href="#panel1a">Tab 1</a></dd>
			  <dd><a href="#panel2a">Tab 2</a></dd>
			  <dd><a href="#panel3a">Tab 3</a></dd>
			  <dd><a href="#panel4a">Tab 4</a></dd>
			</dl>
			<div class="tabs-content vertical">
			  <div class="content active" id="panel1a">
			    <p>Panel 1 content goes here.</p>
			  </div>
			  <div class="content" id="panel2a">
			    <p>Panel 2 content goes here.</p>
			  </div>
			  <div class="content" id="panel3a">
			    <p>Panel 3 content goes here.</p>
			  </div>
			  <div class="content" id="panel4a">
			    <p>Panel 4 content goes here.</p>
			  </div>
			</div>
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<dl class="tabs vertical" data-tab>
  <dd class="active"><a href="#panel1a">Tab 1</a></dd>
  <dd><a href="#panel2a">Tab 2</a></dd>
  <dd><a href="#panel3a">Tab 3</a></dd>
  <dd><a href="#panel4a">Tab 4</a></dd>
</dl>
<div class="tabs-content vertical">
  <div class="content active" id="panel1a">
    <p>Panel 1 content goes here.</p>
  </div>
  <div class="content" id="panel2a">
    <p>Panel 2 content goes here.</p>
  </div>
  <div class="content" id="panel3a">
    <p>Panel 3 content goes here.</p>
  </div>
  <div class="content" id="panel4a">
    <p>Panel 4 content goes here.</p>
  </div>
</div>					
			</textarea></code>
		</div>		
</div>	
		

<h2>Thumbnails</h2>
<p>
	Add class "th" to an img or a element.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<img class="th" src="http://placehold.it/1200x800">
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<img class="th" src="http://placehold.it/1200x800">			
			</textarea></code>
		</div>		
</div>
<br>
<p>
	Additional classes can be added to your thumbnails to change its appearance.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<img class="th radius" src="http://placehold.it/1200x800">
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<img class="th radius" src="http://placehold.it/1200x800">			
			</textarea></code>
		</div>		
</div>
<hr>
<h2>Flex Video</h2>
<p>
	Flex Video lets browsers automatically scale video objects in your webpages. If you're embedding a video from YouTube, Vimeo, or another site that uses iframe, embed or object elements, you can wrap your video in div.flex-video to create an intrinsic ratio that will properly scale your video on any device.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<div class="flex-video">
			        <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
			</div>		
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="flex-video">
	<iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
</div>		
			</textarea></code>
		</div>		
</div>
<hr>
<h2>Clearing Lightbox</h2>
<p>
	Gather some images, decide on their order, and put them into an ul with a .clearing-thumbs class.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<ul class="small-block-grid-3 clearing-thumbs" data-clearing>
			  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
			  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
			  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="small-block-grid-3 clearing-thumbs" data-clearing>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
</ul>		
			</textarea></code>
		</div>		
</div>

<hr>
<a name="calls"></a>
<h2 data-magellan-destination="calls">Reveal Modal</h2>
<p>
	You can create a reveal modal using minimal markup. To launch a modal, just add a data-reveal-id to the object which you want to fire the modal when clicked. The data-reveal-id needs to match the id of your reveal.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<a href="#" data-reveal-id="myModal" data-reveal>Click Me For A Modal</a>
			<div id="myModal" class="reveal-modal" data-reveal>
			  <h2>Awesome. I have it.</h2>
			  <p class="lead">Your couch.  It is mine.</p>
			  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
			  <a class="close-reveal-modal">&#215;</a>
			</div>		 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-reveal-id="myModal" data-reveal>Click Me For A Modal</a>
<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  <a class="close-reveal-modal">&#215;</a>
</div>			
			</textarea></code>
		</div>		
</div>
<p>
	A button that reveals a modal and links to a second modal example.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<a href="#" data-reveal-id="firstModal" class="radius button">Example Modal…</a>
			<div id="firstModal" class="reveal-modal" data-reveal>
			  <h2>This is a modal.</h2>
			  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
			  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
			  <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
			  <a class="close-reveal-modal">×</a>
			</div>
			<div id="secondModal" class="reveal-modal" data-reveal>
			  <h2>This is a second modal.</h2>
			  <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
			  <div class="flex-video" style="display: block;">
			    <iframe width="420" height="315" src="http://www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen="" data-src="http://www.youtube.com/embed/aiBt44rrslw"></iframe>
			  </div>
			  <a class="close-reveal-modal">×</a>
			</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-reveal-id="firstModal" class="radius button">Example Modal…</a>
<div id="firstModal" class="reveal-modal" data-reveal>
  <h2>This is a modal.</h2>
  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
  <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
  <a class="close-reveal-modal">×</a>
</div>
<div id="secondModal" class="reveal-modal" data-reveal>
  <h2>This is a second modal.</h2>
  <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
  <div class="flex-video" style="display: block;">
    <iframe width="420" height="315" src="http://www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen="" data-src="http://www.youtube.com/embed/aiBt44rrslw"></iframe>
  </div>
  <a class="close-reveal-modal">×</a>
</div>
			</textarea></code>
		</div>		
</div>
<p>
	Add class tiny, small, medium, large or xlarge to size the modal box.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<a class="radius button" href="#" data-reveal-id="myModal2" data-reveal>Click Me For A Tiny Modal</a>
			<div id="myModal2" class="reveal-modal tiny" data-reveal>
			  <h2>Awesome. I have it.</h2>
			  <p class="lead">Your couch.  It is mine.</p>
			  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
			  <a class="close-reveal-modal">&#215;</a>
			</div>		 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-reveal-id="myModal2" data-reveal>Click Me For A Modal</a>
<div id="myModal2" class="reveal-modal tiny" data-reveal>
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  <a class="close-reveal-modal">&#215;</a>
</div>			
			</textarea></code>
		</div>		
</div>
<hr>
<h2>Panels</h2>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Regular</small></h3>
			<div class="panel">
				<h5>This is a regular panel.</h5>
				<p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="panel">
  <h5>This is a regular panel.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
</div>	
			</textarea></code>
		</div>
</div>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Callout</small></h3>
			<div class="panel callout radius">
				<h5>This is a callout panel.</h5>
				<p>It's a little ostentatious, but useful for important content.</p>
			</div>				
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="panel callout radius">
  <h5>This is a callout panel.</h5>
  <p>It's a little ostentatious, but useful for important content.</p>
</div>		
			</textarea></code>
		</div>
</div>
<div class="row">
		<div class="large-6 columns">
			<h3><small>V-card</small></h3>
			<ul class="vcard">
				<li class="fn">Gaius Baltar</li>
				<li class="street-address">123 Colonial Ave.</li>
				<li class="locality">Caprica City</li>
				<li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
				<li class="email"><a href="#">g.baltar@cmail.com</a></li>
			</ul>		
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="vcard">
  <li class="fn">Gaius Baltar</li>
  <li class="street-address">123 Colonial Ave.</li>
  <li class="locality">Caprica City</li>
  <li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
  <li class="email"><a href="#">g.baltar@cmail.com</a></li>
</ul>
			</textarea></code>
		</div>
</div>

	
</div><!-- end left-content_block -->
<?php endwhile; endif; ?>
</div><!-- end content -->
</div><!-- end wrapper div -->
</div><!-- end inside div -->
</section>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/prism.js"></script>
<?php get_footer(); ?>