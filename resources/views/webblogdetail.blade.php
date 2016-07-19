@extends('master')
@section('content')

<div class="container" id="#detail" style="padding:2em 0">
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
        <div class="col-md-9 movie_box" style="padding-top:30px; padding-left:50px">
            <div class="images_3_of_2">
                <div class="movie_image">
                    <img src="Algorithm.jpg" class="img-responsive" alt="">
                </div>
            </div>
            Country: <u style="font-family:Baskerville Old Face; font-size:16px">Established, USA</u><br><br>
            Year: <u style="font-family:Baskerville Old Face; font-size:16px">2014</u><br><br>
            Category: <u style="font-family:Baskerville Old Face; font-size:16px">Adventure, Fantazy</u><br><br>
            Release date: <u style="font-family:Baskerville Old Face; font-size:16px">December 12, 2014</u><br><br>
            Director: <u style="font-family:Baskerville Old Face; font-size:16px">Suffered</u><br><br>
            Actors: <u style="font-family:Baskerville Old Face; font-size:16px">Anything, Lorem Ipsum, , Virginia, Virginia, variations, variations, variations, Virginia ...</u><br><br>
            Age restriction: <p style="font-family:Baskerville Old Face; font-size:16px">13</p><br><br>
            <div class="down_btn"><a class="btn1" href="#"><span> </span>Download</a></div>

        <div class="clearfix"></div>
        <br><p style="font-family:Baskerville Old Face; font-size:18px"> Di San Francisco, selama bulan September, 2012, 9 bulan sebelum Edward Snowden membocorkan dokumen yang membuktikan mata-mata NSA pada setiap orang dan Will, seorang hacker komputer freelance mengkhususkan diri dalam membobol sistem yang aman. Menggunakan lubang keamanan yang ia temukan saat dipekerjaan, Will menerobos masuk ke kontraktor pemerintah rahasia dan mendownload semua program mereka baru dikembangkan. </p>
        </div>
        <div class="col-md-3" style="padding-top:40px; text-align:right">
          <img src="Algorithm2.jpg" width="200" height="200" style="border-radius:5px; margin-bottom:40px">
          <img src="Algorithm3.jpg" width="200" height="200" style="border-radius:5px; margin-bottom:40px">
          <img src="Algorithm4.jpg" width="200" height="200" style="border-radius:5px; margin-bottom:40px">
        </div>
        <div class="col-md-8" style="padding-left: 50px">
          <form action="/submit" method="post">
          <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
              <div class="to">
                          <input type="text" class="text" value="Name" name="nama" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                <input type="text" class="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:3%">
              </div>
              <div class="text">
                         <textarea value="Message:" name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
                      </div>
                      <div class="form-submit1">
                     <input type="submit" id="submit" value="Submit Your Message"><br><br><br>
                  </div>
            </form>
              <div class="clearfix"></div>
                    <h3 style="font-family:Aldhabi; font-size:2em">10 Comments</h3>
                      <a href="#"><img src="toni.jpg" class="img-responsive" alt=""></a>
                          <br>Movie  /  2 hours ago 
                          <p style="font-family:Baskerville Old Face; font-size:18px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                      <div class="clearfix"></div>
                      <a href="#"><img src="taeyeon.png" width="50" height="100" class="img-responsive" alt=""></a>
                          <br>Wernay  /  2 hours ago
                          <p style="font-family:Baskerville Old Face; font-size:18px">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent </p>

                  <?php $id=1;?>
                  @foreach ($moviestar as $data)
                      <a href="#"><img src="unknown.png" width="50" height="100" class="img-responsive" alt=""></a>
                      <br>{{ $data->nama}}
                      <p style="font-family:Baskerville Old Face; font-size:18px">{{ $data->comment }}</p>
                  @endforeach
                      <div class="clearfix"></div>
                  </div>


</div>
</div>

@stop