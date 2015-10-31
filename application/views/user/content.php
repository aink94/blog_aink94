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