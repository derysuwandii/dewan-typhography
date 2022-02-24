<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Bootstrap - Typhography</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-danger fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Typhography Bootstrap 4</h2><hr>
		<div class="row mb-3">
			<div class="col-sm-6">
				<h5 class="bg-dark text-white" align="center">Heading dengan elemen HTML</h5>
				<h1>h1. Bootstrap heading</h1>
				<h2>h2. Bootstrap heading</h2>
				<h3>h3. Bootstrap heading</h3>
				<h4>h4. Bootstrap heading</h4>
				<h5>h5. Bootstrap heading</h5>
				<h6>h6. Bootstrap heading</h6>
			</div>

			<div class="col-sm-6">
				<h5 class="bg-dark text-white" align="center">Heading dengan class</h5>
				<p class="h1">h1. Bootstrap heading</p>
				<p class="h2">h2. Bootstrap heading</p>
				<p class="h3">h3. Bootstrap heading</p>
				<p class="h4">h4. Bootstrap heading</p>
				<p class="h5">h5. Bootstrap heading</p>
				<p class="h6">h6. Bootstrap heading</p>
			</div>
		</div><hr>

		<div class="row mb-3">
			<div class="col-sm-6">
				<h5 class="bg-dark text-white" align="center">Heading dengan class .display</h5>
				<h1 class="display-1">Display 1</h1>
				<h1 class="display-2">Display 2</h1>
				<h1 class="display-3">Display 3</h1>
				<h1 class="display-4">Display 4</h1>

				<h5 class="bg-dark text-white" align="center">Fancy display heading</h5>
				<h3>
				  Judul Utama
				  <small class="text-muted">Judul kecil dengan tulisan abu-abu</small>
				</h3>

				<h5 class="bg-dark text-white" align="center">Paragraph dengan class .lead</h5>
				<p class="lead">
				  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
				</p>

				<h5 class="bg-dark text-white" align="center">Abbreviations</h5>
				<p><abbr title="attribute">attr</abbr></p>
				<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>

				<h5 class="bg-dark text-white" align="center">Text Color</h5>
				<p class="text-primary">.text-primary</p>
				<p class="text-secondary">.text-secondary</p>
				<p class="text-success">.text-success</p>
				<p class="text-danger">.text-danger</p>
				<p class="text-warning">.text-warning</p>
				<p class="text-info">.text-info</p>
				<p class="text-light bg-dark">.text-light</p>
				<p class="text-dark">.text-dark</p>
				<p class="text-muted">.text-muted</p>
				<p class="text-white bg-dark">.text-white</p>

				<h5 class="bg-dark text-white" align="center">Background color</h5>
				<div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
				<div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
				<div class="p-3 mb-2 bg-success text-white">.bg-success</div>
				<div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
				<div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
				<div class="p-3 mb-2 bg-info text-white">.bg-info</div>
				<div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
				<div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
				<div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
			</div>

			<div class="col-sm-6">
				<h5 class="bg-dark text-white" align="center">Elemen teks</h5>
				<p>You can use the mark tag to <mark>highlight</mark> text.</p>
				<p><del>This line of text is meant to be treated as deleted text.</del></p>
				<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
				<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
				<p><u>This line of text will render as underlined</u></p>
				<p><small>This line of text is meant to be treated as fine print.</small></p>
				<p><strong>This line rendered as bold text.</strong></p>
				<p><em>This line rendered as italicized text.</em></p>

				<h5 class="bg-dark text-white" align="center">Text alignment</h5>
				<p class="text-left"><b>Left aligned text</b> on all viewport sizes.</p>
				<p class="text-center"><b>Center aligned text</b> on all viewport sizes.</p>
				<p class="text-right"><b>Right aligned text</b> on all viewport sizes.</p>
				<p class="text-justify"><b>Justified text.</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>      
				<p class="text-nowrap"><b>No wrap text.</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

				<p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
				<p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
				<p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
				<p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>

				<h5 class="bg-dark text-white" align="center">Text wrapping and overflow</h5>
				<div class="text-nowrap" style="width: 8rem;">
				  This text should overflow the parent.
				</div>
				<!-- Block level -->
				<div class="row">
				  <div class="col-2 text-truncate">
				    This text should overflow the parent.
				  </div>
				</div>

				<!-- Inline level -->
				<span class="d-inline-block text-truncate" style="max-width: 150px;">
				  This text should overflow the parent.
				</span>
				

				<div class="row">
					<div class="col-6">
						<div class="badge badge-primary text-wrap" style="width: 6rem;">
						  Ini adalah teks panjang yang akan terpotong
						</div>
					</div>
				</div>

				<p class="text-break">teeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeessssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>

				<h5 class="bg-dark text-white" align="center">Text Case</h5>
				<p class="text-lowercase">Lowercased text.</p>
				<p class="text-uppercase">Uppercased text.</p>
				<p class="text-capitalize">CapiTaliZed text.</p>

				<h5 class="bg-dark text-white" align="center">Font weight and italics</h5>
				<p class="font-weight-bold">Bold text.</p>
				<p class="font-weight-normal">Normal weight text.</p>
				<p class="font-weight-light">Light weight text.</p>
				<p class="font-italic">Italic text.</p>

				<h5 class="bg-dark text-white" align="center">Blockquote tanpa footer</h5>
				<blockquote class="blockquote">
				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				</blockquote>

				<h5 class="bg-dark text-white" align="center">Blockquote dengan footer</h5>
				<blockquote class="blockquote">
				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>

				<h5 class="bg-dark text-white" align="center">Blockquote align center</h5>
				<blockquote class="blockquote text-center">
				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>

				<h5 class="bg-dark text-white" align="center">Blockquote align right</h5>
				<blockquote class="blockquote text-right">
				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
			</div>
		</div><hr>

		<div class="row mb-3">
			<div class="col-sm-6">
				<h5 class="bg-dark text-white" align="center">Unstyled Lists</h5>
				<ul class="list-unstyled">
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

				<h5 class="bg-dark text-white" align="center">Inline Lists</h5>
				<ul class="list-inline">
				  <li class="list-inline-item">Lorem ipsum</li>
				  <li class="list-inline-item">Phasellus iaculis</li>
				  <li class="list-inline-item">Nulla volutpat</li>
				</ul>
			</div>

			<div class="col-sm-6">
				<h5 class="bg-dark text-white" align="center">Description list alignment</h5>
				<dl class="row">
				  <dt class="col-sm-3">Description lists</dt>
				  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

				  <dt class="col-sm-3">Euismod</dt>
				  <dd class="col-sm-9">
				    <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
				    <p>Donec id elit non mi porta gravida at eget metus.</p>
				  </dd>

				  <dt class="col-sm-3">Malesuada porta</dt>
				  <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

				  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
				  <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

				  <dt class="col-sm-3">Nesting</dt>
				  <dd class="col-sm-9">
				    <dl class="row">
				      <dt class="col-sm-4">Nested definition list</dt>
				      <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
				    </dl>
				  </dd>
				</dl>
			</div>
		</div><hr>

	</div>

	<div class="navbar bg-dark fixed-bottom">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>
</body>
</html>