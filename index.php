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
  	<link rel="stylesheet" href="assets/css/responsive.css">

	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">

    <style type="text/css">
        .show-grid {
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .show-grid [class*="span"],
        .show-grid [class*="one"] {
            background-color: #eee;
            text-align: center;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            min-height: 40px;
            line-height: 40px;
        }
        .show-grid [class*="span"]:hover,
        .show-grid [class*="one"]:hover {
            background-color: #ddd;
        }
        .show-grid .show-grid {
            margin-top: 0;
            margin-bottom: 0;
        }
        .show-grid .show-grid [class*="span"],
        .show-grid .show-grid [class*="one"]{
            margin-top: 5px;
        }
        .show-grid [class*="span"] [class*="span"],
        .show-grid [class*="one"] [class*="one"] {
            background-color: #ccc;
        }
        .show-grid [class*="span"] [class*="span"] [class*="span"],
        .show-grid [class*="span"] [class*="span"] [class*="one"] {
            background-color: #999;
        }
    </style>

</head>
<body>

	<div class="sidebar" style='top: 120px; position: absolute; left: 20px;'>
		<strong>Notes:</strong>
		<ul>
			<li>Form style ( 100% )</li>
			<li>Mobile span override</li>
			<li>Button classes</li>
		</ul>
	</div>

	<div class="container">

		<section id="grid">
			<header>
				<h1>A non restrictive framework</h1>
				<p class="lead">Dock is a simple Bootstrap based framework made to be as non restrictive as possible, focusing more on layout than style.</p>
				<p class="lead">You won't find any of the Icing that bootstrap has but rather an improved grid system, a more functional file structure with over ride variables and much more.</p>
				<p class="lead">Made to be expressible, it's possible to add your own button code or include what other UI frameworks have already made.</p>
			</header>

			<hr class="large" />

			<div class="doc-section clearfix" id="grid">
				<h2>The Grid</h2>
				
				<div class="example-grid">
					<div class="bs-docs-grid">
					    <div class="row show-grid">
			              <div class="span1 phone-quarter">1</div>
			              <div class="span1 phone-quarter">1</div>
			              <div class="span1 phone-quarter">1</div>
			              <div class="span1 phone-quarter">1</div>
			              <div class="span1 hidden-phone">1</div>
			              <div class="span1 hidden-phone">1</div>
			              <div class="span1 hidden-phone">1</div>
			              <div class="span1 hidden-phone">1</div>
			              <div class="span1 hidden-phone">1</div>
			              <div class="span1 hidden-phone">1</div>
			              <div class="span1 hidden-phone">1</div>
			              <div class="span1 hidden-phone">1</div>
			            </div>
			
                        <div class="row">
                            <div class="center5 show-grid">
                                <div class="span2 phone-quarter">2</div>
                                <div class="span3 phone-three-quarter">3</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="center3 show-grid">
                                <div class="span3">3</div>
                            </div>
                        </div>

			            <div class="row show-grid">
			              <div class="span6 phone-half">6</div>
			              <div class="span6 phone-half">6</div>
			            </div>

			            <div class="row show-grid">
			              <div class="span2">2</div>
			              <div class="span3">3</div>
			              <div class="span4">4</div>
			              <div class="span3">3</div>
			            </div>
			
			            <div class="row show-grid">
			              <div class="span4">4</div>
			              <div class="span3">3</div>
			              <div class="span5">5</div>
			            </div>
			
			            <div class="row show-grid">
			              <div class="span12">12</div>
			            </div>

                        <div class="row-fluid show-grid">
                            <div class="one-half">1/2</div>
                            <div class="one-half">1/2</div>
                        </div>

                        <div class="row-fluid show-grid">
                            <div class="one-third">1/3</div>
                            <div class="one-third">1/3</div>
                            <div class="one-third">1/3</div>
                        </div>

                        <div class="row-fluid show-grid">
                            <div class="one-quarter">1/4</div>
                            <div class="one-quarter">1/4</div>
                            <div class="one-half">1/2</div>
                        </div>

			          </div>

				</div>

			</div>
		</section>

		<div class="page-header">
            <h1>Media</h1>
        </div>
		
		<div class="row">
			<div class="span6">	
				<img src="http://placehold.it/130" class="img-rounded">
				<img src="http://placehold.it/130" class="img-circle">
				<img src="http://placehold.it/130" class="img-polaroid">

  			</div>
  		</div>

		<div class="page-header">
            <h1>Typography</h1>
        </div>

		<div class="row">
			<div class="span6">
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
			<div class="span6">
				
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

    </div>

    </div><!-- container -->

	<!-- JS
	================================================== -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/retina.js"></script>
    <script src="assets/js/application.js"></script>

	<script>
		$(document).ready(function(){

			var originalText;
			$('.show-grid').children().hover(
				function() {
					originalText = $(this).text();
					$(this).html($(this).width()+'px');
				},
				function() {
					$(this).html(originalText);
				})
		});
	</script>

	</body>
</html>