<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" contentA="">
    <link rel="icon" href="../../favicon.ico">

    <title><?=$title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url().'assets/'?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="<?=base_url().'assets/'?>s.css" rel="stylesheet">

  </head>

  <body>
    <header>
      <div class="container">
        <a href="">Logo Aink94</a>
        <ul id="menu-rss" class="nav nav-pills pull-right">
          <li><a>a</a></li>
          <li><a>b</a></li>
          <li><a>c</a></li>
        </ul>
      </div>
      <nav class="navbar navbar-blog" role="navigation">
        <div class="container navbar-color">
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <?php
            $this->load->helper('menu');
            echo menu();
            ?>
          </div>
        </div>
      </nav>
    </header>
    <section class="container shadow">

      <div class="row">
        <?php
        $this->load->helper('katabijak');
        echo kata_bijak();
        ?>
        <aside class="col-sm-9">


      <div class="well hidden-xs"> 
        <div class="row">          
          <div class="col-xs-4">
            <h4>Kategori Artikel</h4>
          </div>
          <div class="col-xs-8">
            <div class="btn-group pull-right">
              <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th"></span></button>
              <button type="button" class="btn btn-default active"><span class="glyphicon glyphicon-th-list"></span></button>
              <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-list"></span></button>
            </div>
          </div>
        </div>
      </div>

          <article class="col-sm-4">
            <h3>Judul Arikel</h3>
            <p>Represents a section of a page that consists of a composition that forms an independent part of a document, page, or site. This could be a forum post, a magazine or newspaper article, a Web log entry, a user-submitted comment, or any other independent item of content.</p>
            <a class="btn btn-info btn-sm">more</a>
          </article>
          <article class="col-sm-4">
            <h3>Judul Arikel</h3>
            <p>Represents a section of a page that consists of a composition that forms an independent part of a document, page, or site. This could be a forum post, a magazine or newspaper article, a Web log entry, a user-submitted comment, or any other independent item of content.</p>
            <a class="btn btn-info btn-sm">more</a>
          </article>
          <article class="col-sm-4">
            <h3>Judul Arikel</h3>
            <p>Represents a section of a page that consists of a composition that forms an independent part of a document, page, or site. This could be a forum post, a magazine or newspaper article, a Web log entry, a user-submitted comment, or any other independent item of content.</p>
            <a class="btn btn-info btn-sm">more</a>
          </article>
          <article class="col-sm-4">
            <h3>Judul Arikel</h3>
            <p>Represents a section of a page that consists of a composition that forms an independent part of a document, page, or site. This could be a forum post, a magazine or newspaper article, a Web log entry, a user-submitted comment, or any other independent item of content.</p>
            <a class="btn btn-info btn-sm">more</a>
          </article>
          <article class="col-sm-4">
            <h3>Judul Arikel</h3>
            <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> July 23, 2014 @ 1:30 PM</p>
            <p>Represents a section of a page that consists of a composition that forms an independent part of a document, page, or site. This could be a forum post, a magazine or newspaper article, a Web log entry, a user-submitted comment, or any other independent item of content.</p>
            <a class="btn btn-info btn-sm">more</a>
          </article>

          <div class="col-sm-12">
            <ul class="pagination pagination-sm">
              <li class="disabled"><a href="#">&laquo;</a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href="">5</a></li>
            </ul>
          </div>
          
        </aside>
        <aside class="col-sm-3">

          <div class="input-group">
            <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>         
          <div id="demo" class="collapse in">
        <hr>
          <div class="list-group list-group">
            <h4 class="">Category</h4>
            <a href="#" class="list-group-item"><span class="badge">14</span> Active item <span class="label label-primary">New</span></a>
            <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>  
            <a href="#" class="list-group-item"><span class="badge">25</span> Third item</a>
            <a href="#" class="list-group-item"><span class="badge">14</span> Active item</a> 
            <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
            <a href="#" class="list-group-item"><span class="badge">25</span> Third item</a> 
            <a href="#" class="list-group-item"><span class="badge">14</span> Active item</a>
            <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
            
            <div id="categories" class="collapse">
              
              <a href="#" class="list-group-item"><span class="badge">14</span> Active item</a>
              <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
              <a href="#" class="list-group-item"><span class="badge">25</span> Third item</a> 
              <a href="#" class="list-group-item"><span class="badge">14</span> Active item</a>
              <a href="#" class="list-group-item"><span class="badge">3</span> Second item</a>
            </div>
            
            
            <button class="btn btn-default btn-sm btn-block" data-toggle="collapse" data-target="#categories">More <span class="caret"></span></button>
            
            <hr class="">
            <h4 class="">Viewing Options</h4>
            <a href="#" class="list-group-item"><span class="badge">14</span> Upcoming Sessions</a>
            
            <a href="#" class="list-group-item"><span class="badge">3</span> OnDemand</a>
            <hr class=""> 
            <a href="#" class="list-group-item">Archived Courses</a>
            <a href="#" class="list-group-item">Courses In Development</a>
          </div>
        </div>
        </aside>
      </div>
    </section>
    <footer>
      <div class="container shadow" id="footer">
        <div class="col-sm-4">
          <address></address>
        </div>
        <div class="col-sm-4">
          
        </div>
        <div class="col-sm-4"></div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?=base_url().'assets/'?>js/bootstrap.min.js"></script>
  </body>
</html>
