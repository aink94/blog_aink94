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