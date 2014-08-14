<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<title>Dock</title>
	<meta name="author" content="Adam Patterson">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="stylesheet" href="doc/document.css"/>
  	<link rel="stylesheet" href="doc/pretty-code.css"/>

	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">

</head>
<body>

<div id="sidebar">
    <i class="fa fa-mobile visible-phone"></i>
    <i class="fa fa-tablet visible-tablet"></i>
    <i class="fa fa-laptop visible-desktop"></i>
</div>

<div class="wrapper">
	<div class="container">

		<div class="row">
			<div class="md-12">
				<section id="grid">
					
					<header>
						<h1>Dock</h1>
						<h2>A non restrictive framework</h2>
						<p class="lead">Dock is a simple Bootstrap based framework made to be as non restrictive as possible. Taking a focusing layout rather than style, afterall that is your job!</p>
						<p class="lead">You won't find any of the Icing that bootstrap has but rather a more consice grid system with centering, a more functional file structure allowing you to extrand rather than over ride styles.</p>
						<p class="lead">Made to be extensible, it's possible to add your own button code or include what other UI frameworks have already made.</p>
					</header>

					<div class="text-center">
						<a href="https://github.com/adampatterson/Dock/archive/master.zip" class="btn">Download</a>
						<a href="https://github.com/adampatterson/Dock/" class="btn">View on Github</a>
					</div>

					<div class="doc-section clearfix" id="grid">
						<p><strong>Simple extendable Less framework with Bootstrap roots</strong></p>

						<h3>Why</h3>

						<p><strong>Bootstrap is for Apps and not Websites.</strong></p>

						<p>A common flaw with Frameworks is that they include the core source and people will ether make edits to it, or wont want to make modifications since they would complicate the upgrade process.</p>

						<p>Updating the variables file is a great idea, until you update to the latest version and have to manually diff the two.</p>

						<h3>Structure</h3>

						<p>The basic Dock folder structure looks like this.</p>

						<ul class="task-list">
						<li>/extend</li>
						<li>/extend/style.less</li>
						<li>/extend/{ project files }</li>
						<li>/src</li>
						<li><strong>style.less</strong></li>
						</ul><p>You should always generate css from the files in the root folder.  In this eample we would compile <strong>style.less</strong>.</p>

						<p>The <code>/src</code> folder contains the Dock source files and should not need to be modified. </p>

						<p>The <code>/extend</code> folder will contain all of the custom code for your project, as well as the <code>/extend/extend.less</code> file. Think of this as Object Oriented Less.</p>

						<p><code>/src/variable.less</code> contains the default values used in the framework, as long as you copy the exact same variable name to the <code>extend/extend.less</code> file you can effect the compiled code without creating inheritance.</p>

						<h3>Why extending is better?</h3>

						<p>It prevents code duplication or inheritance overhead.</p>

						<p>If Dock defaults a link to Blue, without using the Extending values, you might do something like this.</p>

<pre><code class="language-css">// dock.less
a:link {
	color: blue;
}

// style.less
a:link {
	color: green;
}

// Net result is a green link.
</code></pre>

						<p>But if we use the <code>/extend/extend.less</code> and overwirte the default link color you would see generated css like this.</p>

<pre><code class="language-css">// dock.less
a:link {
color: green;
}

// Net result is a green link.
</code></pre>

						<h3>Setup</h3>

						<p>The idea here is that you are in control, so at a mimimum you need to import a few files.</p>

						<p>The root <code>style.less</code> file would look something like this:</p>

<pre><code class="language-css">// Core Framework
@import "src/dock.less";

// Extended
@import "extend/mixins.less";
@import "extend/responsive.less";
@import "extend/ie.less";
@import "extend/style.less";
</code></pre>

						<p>Thats it!</p>

						<h2>
						<a name="user-content-extras" class="anchor" href="#extras" aria-hidden="true"><span class="octicon octicon-link"></span></a>Extras</h2>

						<p>Along with being a flexible micro framework, It also makes for a perfect Front end starting point when developing small sites or even CMS themes.</p>

						<h3>
						<a name="user-content-grunt" class="anchor" href="#grunt" aria-hidden="true"><span class="octicon octicon-link"></span></a>Grunt:</h3>

						<p><a href="http://gruntjs.com">http://gruntjs.com</a></p>

						<ul class="task-list">
						<li><code>sudo npm install -g grunt-cli</code></li>
						<li><code>npm install</code></li>
						<li><code>grunt watch</code></li>
						</ul><h3>
						<a name="user-content-bower" class="anchor" href="#bower" aria-hidden="true"><span class="octicon octicon-link"></span></a>Bower:</h3>

						<p><a href="http://bower.io/">http://bower.io/</a></p>

						<ul class="task-list">
						<li><code>bower install</code></li>
						</ul><h3>
						<a name="user-content-acknowledgments" class="anchor" href="#acknowledgments" aria-hidden="true"><span class="octicon octicon-link"></span></a>Acknowledgments</h3>

						<p>This included a watered down version of Bootstrap 3.1 <a href="http://getbootstrap.com">http://getbootstrap.com</a>, Some Mixins from <a href="http://getpreboot.com">http://getpreboot.com</a></p>
					</div>

					<div class="doc-section clearfix" id="grid">

						<h2 class="large">The Grid</h2>
		
                        <div class="row show-grid">
							<div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                            <div class="md-1"><span>.md-1</span></div>
                        </div>
                        <div class="row show-grid">
                            <div class="md-8"><span>.md-8</span></div>
                            <div class="md-4"><span>.md-4</span></div>
                        </div>
                        <div class="row show-grid">
                            <div class="md-4"><span>.md-4</span></div>
                            <div class="md-4"><span>.md-4</span></div>
                            <div class="md-4"><span>.md-4</span></div>
                        </div>
                        <div class="row show-grid">
                            <div class="md-6"><span>.md-6</span></div>
                            <div class="md-6"><span>.md-6</span></div>
                        </div>

                        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                        <div class="row show-grid">
                            <div class="md-8"><span>.xs-12</span></div>
                            <div class="md-4"><span>.xs-6</span></div>
                        </div>

                        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                        <div class="row show-grid">
                            <div class="md-4"><span>.xs-6</span></div>
                            <div class="md-4"><span>.xs-6</span></div>
                            <div class="md-4"><span>.xs-6</span></div>
                        </div>

                        <!-- Columns are always 50% wide, on mobile and desktop -->
                        <div class="row show-grid">
                            <div class="xs-6"><span>.xs-6</span></div>
                            <div class="xs-6"><span>.xs-6</span></div>
                        </div>

                        <!-- Offsetting columns -->
                        <div class="row show-grid">
                            <div class="md-4"><span>.md-4</span></div>
                            <div class="md-4 md-offset-4"><span>.md-4 .md-offset-4</span></div>
                        </div>
                        <div class="row show-grid">
                            <div class="md-3 md-offset-3"><span>.md-3 .md-offset-3</span></div>
                            <div class="md-3 md-offset-3"><span>.md-3 .md-offset-3</span></div>
                        </div>
                        <div class="row show-grid">
                            <div class="md-6 md-center"><span>.md-6 .md-center</span></div>
                        </div>

                        <div class="row show-grid">
                            <div class="md-6 md-center xs-center">
                                <span>.md-6 .md-center</span>
                                <div class="row">
                                    <div class="md-4"><span>.md-4</span></div>
                                    <div class="md-4"><span>.md-4</span></div>
                                    <div class="md-4"><span>.md-4</span></div>
                                </div>

                            </div>
                        </div>

                        <h2 class="large">Manual Grids</h2>
						<div class="row show-grid">
                            <div class="one"><span>.one</span></div>
                        </div>

                        <div class="row show-grid">
                            <div class="one-half"><span>.one-half</span></div>
                            <div class="one-half"><span>.one-half</span></div>
                        </div>

						<div class="row show-grid">
                            <div class="one-third"><span>.one-third</span></div>
                            <div class="one-third"><span>.one-third</span></div>
                            <div class="one-third"><span>.one-third</span></div>
                        </div>

                        <div class="row show-grid">
                            <div class="one-third"><span>.one-third</span></div>
                            <div class="two-thirds"><span>.two-thirds</span></div>
                        </div>

                        <div class="row show-grid">
                            <div class="one-quarter"><span>.one-quarter</span></div>
                            <div class="one-quarter"><span>.one-quarter</span></div>
                            <div class="one-quarter"><span>.one-quarter</span></div>
                            <div class="one-quarter"><span>.one-quarter</span></div>
                        </div>

                        <div class="row show-grid">
                            <div class="one-fifth"><span>.one-fifth</span></div>
                            <div class="one-fifth"><span>.one-fifth</span></div>
                            <div class="one-fifth"><span>.one-fifth</span></div>
                            <div class="one-fifth"><span>.one-fifth</span></div>
                            <div class="one-fifth"><span>.one-fifth</span></div>
                        </div>

                        <div class="row show-grid">
                            <div class="one-sixth"><span>.one-sixth</span></div>
                            <div class="one-sixth"><span>.one-sixth</span></div>
                            <div class="one-sixth"><span>.one-sixth</span></div>
                            <div class="one-sixth"><span>.one-sixth</span></div>
                            <div class="one-sixth"><span>.one-sixth</span></div>
                            <div class="one-sixth"><span>.one-sixth</span></div>
                        </div>

                        <div class="row show-grid">
                            <div class="three-quarters"><span>.three-quarters</span></div>
                            <div class="one-quarter"><span>.one-quarter</span></div>
                        </div>
						
					</div>
				</section>
	        </div>
		</div>
		
		<div class="row">

			<div class="md-12 page-header">
	            <h1>Typography</h1>
	        </div>

			<div class="md-6">
				<section id="typography">
		        
		        <h2 id="headings">Headings</h2>
		        <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.</p>
		        <div class="bs-docs-example">
		            <h1>h1. Heading 1</h1>
		            <h2>h2. Heading 2</h2>
		            <h3>h3. Heading 3</h3>
		            <h4>h4. Heading 4</h4>
		            <h5>h5. Heading 5</h5>
		            <h6>h6. Heading 6</h6>
		        </div>

		        <h2 id="body-copy">Body copy</h2>
		        <p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>20px</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their line-height (10px by default).</p>
		        <div class="bs-docs-example">
		            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
		            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
		        </div>

		        <h3>Lead body copy</h3>
		        <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
		        <div class="bs-docs-example">
		            <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
		        </div>

		        <h3>Built with Less</h3>
		        <p>The typographic scale is based on two LESS variables in <strong>variables.less</strong>: <code>@baseFontSize</code> and <code>@baseLineHeight</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>


		        <hr class="bs-docs-separator">


		        <h2 id="emphasis">Emphasis</h2>
		        <p>Make use of HTML's default emphasis tags with lightweight styles.</p>

		        <h3><code>&lt;small&gt;</code></h3>
		        <p>For de-emphasizing inline or blocks of text, <small>use the small tag.</small></p>
		        <div class="bs-docs-example">
		            <p><small>This line of text is meant to be treated as fine print.</small></p>
		        </div>

		        <h3>Bold</h3>
		        <p>For emphasizing a snippet of text with a heavier font-weight.</p>
		        <div class="bs-docs-example">
		            <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
		        </div>

		        <h3>Italics</h3>
		        <p>For emphasizing a snippet of text with italics.</p>
		        <div class="bs-docs-example">
		            <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
		        </div>
		        <p><span class="label label-info">Heads up!</span> Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>

		        <h3>Alignment classes</h3>
		        <p>Easily realign text to components with text alignment classes.</p>
		        <div class="bs-docs-example">
		            <p class="text-left">Left aligned text.</p>
		            <p class="text-center">Center aligned text.</p>
		            <p class="text-right">Right aligned text.</p>
		        </div>

		        <hr class="bs-docs-separator">

		        <h2 id="abbreviations">Abbreviations</h2>
		        <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>

		        <h3><code>&lt;abbr&gt;</code></h3>
		        <p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute.</p>
		        <div class="bs-docs-example">
		            <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
		        </div>

		        <h3><code>&lt;abbr class="initialism"&gt;</code></h3>
		        <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
		        <div class="bs-docs-example">
		            <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
		        </div>
				
				 <hr class="bs-docs-separator">
				
				<h2 id="addresses">Addresses</h2>
		        <p>Present contact information for the nearest ancestor or the entire body of work.</p>

		        <h3><code>&lt;address&gt;</code></h3>
		        <p>Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
		        <div class="bs-docs-example">
		            <address>
		                <strong>Twitter, Inc.</strong><br>
		                795 Folsom Ave, Suite 600<br>
		                San Francisco, CA 94107<br>
		                <abbr title="Phone">P:</abbr> (123) 456-7890
		            </address>
		            <address>
		                <strong>Full Name</strong><br>
		                <a href="mailto:#">first.last@example.com</a>
		            </address>
		        </div>
				
			</div>

			<div class="md-6">
				
		        <h2 id="blockquotes">Blockquotes</h2>
		        <p>For quoting blocks of content from another source within your document.</p>

		        <h3>Default blockquote</h3>
		        <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>
		        <div class="bs-docs-example">
		            <blockquote>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		            </blockquote>
		        </div>

		        <h3>Blockquote options</h3>
		        <p>Style and content changes for simple variations on a standard blockquote.</p>

		        <h4>Naming a source</h4>
		        <p>Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
		        <div class="bs-docs-example">
		            <blockquote>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
		            </blockquote>
		        </div>

		        <h4>Alternate displays</h4>
		        <p>Use <code>.pull-right</code> for a floated, right-aligned blockquote.</p>
		        <div class="bs-docs-example" style="overflow: hidden;">
		            <blockquote class="pull-right">
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
		            </blockquote>
		        </div>

		        <hr class="bs-docs-separator">


		        <!-- Lists -->
		        <h2 id="lists">Lists</h2>

		        <h3>Unordered</h3>
		        <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
		        <div class="bs-docs-example">
		            <ul>
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit
		                    <ul>
		                        <li>Phasellus iaculis neque</li>
		                        <li>Purus sodales ultricies</li>
		                        <li>Vestibulum laoreet porttitor sem</li>
		                        <li>Ac tristique libero volutpat at</li>
		                    </ul>
		                </li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ul>
		        </div>

		        <h3>Ordered</h3>
		        <p>A list of items in which the order <em>does</em> explicitly matter.</p>
		        <div class="bs-docs-example">
		            <ol>
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit</li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ol>
		        </div>

		        <h3>Unstyled</h3>
		        <p>Remove the default <code>list-style</code> and left padding on list items (immediate children only).</p>
		        <div class="bs-docs-example">
		            <ul class="unstyled">
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit
		                    <ul>
		                        <li>Phasellus iaculis neque</li>
		                        <li>Purus sodales ultricies</li>
		                        <li>Vestibulum laoreet porttitor sem</li>
		                        <li>Ac tristique libero volutpat at</li>
		                    </ul>
		                </li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ul>
		        </div>

		        <h3>Inline</h3>
		        <p>Place all list items on a single line with <code>inline-block</code> and some light padding.</p>
		        <div class="bs-docs-example">
		            <ul class="inline">
		                <li>Lorem ipsum</li>
		                <li>Phasellus iaculis</li>
		                <li>Nulla volutpat</li>
		            </ul>
		        </div>

		        <h3>Description</h3>
		        <p>A list of terms with their associated descriptions.</p>
		        <div class="bs-docs-example">
		            <dl>
		                <dt>Description lists</dt>
		                <dd>A description list is perfect for defining terms.</dd>
		                <dt>Euismod</dt>
		                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
		                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
		                <dt>Malesuada porta</dt>
		                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
		            </dl>
		        </div>

		        <h4>Horizontal description</h4>
		        <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side.</p>
		        <div class="bs-docs-example">
		            <dl class="dl-horizontal">
		                <dt>Description lists</dt>
		                <dd>A description list is perfect for defining terms.</dd>
		                <dt>Euismod</dt>
		                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
		                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
		                <dt>Malesuada porta</dt>
		                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
		                <dt>Felis euismod semper eget lacinia</dt>
		                <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
		            </dl>
		        </div>

		        <p>
		            <span class="label label-info">Heads up!</span>
		            Horizontal description lists will truncate terms that are too long to fit in the left column fix <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.
		        </p>
		        </section>
			</div>
		</div>
        <? /* */ ?>
    </div><!-- container -->
</div><!-- wrapper -->
	<!-- JS
	================================================== -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/retina.js"></script>
   	<script type="text/javascript" src="doc/prism.js"></script>   
    <script src="assets/js/application.min.js"></script>
 
	</body>
</html>