@extends('master')
@section('content')

<div class="container" id="#list" style="padding:2em 0">
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
  </div>>
  <div class="film">
    <div class="thumbnail">
                  <div class="caption">
                      <h4>The Last King aka Birkebeinerne (2016)</h4>
                        <p>Action, Animation, Drama, Film 2016</p>
                        <p>
                          <a href="" class="btn btn-danger btn-sm">Read More</a>
                        </p>
                    </div>
          <center><img src="film2.jpg"></center>
          <div class="listing-infos">
          </div>
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
          <div class="listing-infos">
          </div>
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
          <div class="listing-infos">
          </div>
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
  <ul id="flexiselDemo3" >
            <li style="float: left;"><img src="film1.jpeg" class="img-responsive"/><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>22.10.2014 | 14:40</p></div></li>
            <li style="float: left;"><img src="film2.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Surf Yoke</a><p>22.01.2015 | 14:40</p></div></li>
            <li style="float: left;"><img src="film3.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Salty Daiz</a><p>22.10.2013 | 14:40</p></div></li>
            <li style="float: left;"><img src="film4.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Cheeky Zane</a><p>22.10.2014 | 14:40</p></div></li>
            <li style="float: left;"><img src="film5.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Synergy</a><p>22.10.2013 | 14:40</p></div></li>
            </ul>
            <script type="text/javascript">
           $(window).load(function() {
            $("#flexiselDemo3").flexisel({
              visibleItems: 4,
              animationSpeed: 10,
              autoPlay: true,
              autoPlaySpeed: 3000,        
              pauseOnHover: true,
              enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                  portrait: { 
                    changePoint:480,
                    visibleItems: 1
                  }, 
                  landscape: { 
                    changePoint:640,
                    visibleItems: 2
                  },
                  tablet: { 
                    changePoint:768,
                    visibleItems: 3
                  }
                }
              });
              
          });
           </script>
</div>
</div>