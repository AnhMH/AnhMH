<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard</a></li>
                <li><a href="#">Age</a></li>
                <li><a href="#">Gender</a></li>
                <li><a href="#">Geo</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php if (!empty($data)): ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php foreach ($data as $k => $v): ?>
                <div class="item <?php echo ($k == 0) ? 'active' : ''; ?>">
                    <img src="<?php echo $v['image_path']; ?>" alt="<?php echo $v['title']; ?>" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3><?php echo $v['title']; ?></h3>
                        <p><?php echo $v['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif; ?>
<div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
        <h2>Logo</h2>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Dashboard</a></li>
            <li><a href="#section2">Age</a></li>
            <li><a href="#section3">Gender</a></li>
            <li><a href="#section3">Geo</a></li>
        </ul><br>
    </div>
    <div class="col-sm-10">
        <div class="contained">
            <?php for ($i = 0; $i < 10; $i++): ?>
                <div class="col-xs-12 col-md-6">
                    <?php echo $this->element("product"); ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
