@extends('master')
@section('content')

<div class="container" id="#home" style="padding:2em 0">
	<nav class="navbar navbar-full navbar-light bg-faded" style="border-top-left-radius: 3px;     border-top-right-radius: 3px;">
 	<img class="navbar-brand col-sm-2" src="logomovie.png" height="50">
  <ul class="nav navbar-nav col-sm-7" style="padding-top:10px;">
    <li class="nav-item active">
      <a class="nav-link" href="{{ url('/webblog') }}">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/webbloglist') }}">Category</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/webblog') }}">Popular</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/webblog') }}">Newest</a>
    </li>
  </ul>
  <div class="search">
<input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
 <button type="submit" class="btn btn-primary btn-sm">Search</button>
</div>
      <!-- <div class="col-md-3 col-md-offset-3" style="padding-top:11px">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<input type="text" class="form-control" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"><img src="search.png" width="10px" height="10px"></span>
            	</div>
            </form>
        </div> -->
</nav>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" style="padding-bottom:20px">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="banner.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="banner1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="banner2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="banner_desc" style="padding-top:15px">
			    	<div class="col-md-9">
			    		<ul class="list_1">
			    			<li>Published <span class="m_1">Feb 20, 2015</span></li>
			    			<li>Updated <span class="m_1">Feb 20 2015</span></li>
			    			<li>Rating <span class="m_1"><img src="rating.png" alt=""/></span></li>
			    		</ul>
			    	</div>
			    	<div class="col-md-3" style="padding-right:0!important;">
			    		<ul class="list_1 list_2">
			    			<li><i class="icon1" style="background: url('img_sprite.png') -7px -42px;"> </i><p>2,548</p></li>          
			    			<li><i class="icon2" style="background: url('img_sprite.png') -33px -42px;"> </i><p>215</p></li>
			    			<li><i class="icon3" style="background: url('img_sprite.png') -60px -42px;"> </i><p>546</p></li>
			    	</div>
			    </div>
</div>
<div class="content">
<br>
<h5 style="padding-bottom:0px; padding-left:15px">Featured Movie »</h5>
	<div class="film">
	<div class="thumbnail">
                	<div class="caption">
                    	<h4>The Himalayas (2015)</h4>
                        <p>Drama, Film 2015</p>
                        <p>
                        	<a href="{{ url('/webblogdetail') }}" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
					<center><img src="Algorithm.jpg" width="220" height="300"></center>
     </div>
	</div>
	<div class="film">
		<div class="thumbnail">
                	<div class="caption">
                    	<h4>The Last King aka Birkebeinerne (2016)</h4>
                        <p>Action, Animation, Drama, Film 2016</p>
                        <p>
                        	<a href="" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
					<center><img src="film2.jpg" style="width: 20%>"</center>
     </div>
	</div>
	<div class="film">
		<div class="thumbnail">
                	<div class="caption">
                    	<h4>Dead rising endgame (2016)</h4>
                        <p>Action, Film 2016, Horrorescription</p>
                        <p>
                        	<a href="" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
					<center><img src="film3.jpg"></center>
     </div>
	</div>
	<div class="film">
		<div class="thumbnail">
                	<div class="caption">
                    	<h4>Uncontrollably Fond Episode 1</h4>
                        <p>Drama, Drama Korea, Romance</p>
                        <p>
                        	<a href="" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
					<center><img src="film4.jpg"></center>
     </div>
	</div>
	<div class="film">
		<div class="thumbnail">
                	<div class="caption">
                    	<h4>Man of Tai Chi (2013)</h4>
                        <p>Action, China Movie, Drama, Film 2013</p>
                        <p>
                        	<a href="" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
					<center><img src="film5.jpg"></center>
     </div>
	</div>
	<div class="film">
		<div class="thumbnail">
                	<div class="caption">
                    	<h4>The Angry Bird Movie (2016)</h4>
                        <p>Action, Animation, Comedy, Film 2016</p>
                        <p>
                        	<a href="" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
					<center><img src="film6.jpg"></center>
     </div>
	</div>
	<div class="film">
		<div class="thumbnail">
                	<div class="caption">
                    	<h4>Kung Fu Panda 3 (2016)</h4>
                        <p>Action, Adventure, Animation, Comedy, Film 2016</p>
                        <p>
                        	<a href="" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
					<center><img src="film7.jpg"></center>
     </div>
	</div>
	<div class="film">
		<div class="thumbnail">
                	<div class="caption">
                    	<h4>Finding Dory (2016)</h4>
                        <p>Adventure, Animation, Film 2016</p>
                        <p>
                        	<a href="" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
					<center><img src="film8.jpg"></center>
     </div>
	</div>
</div>
</div>