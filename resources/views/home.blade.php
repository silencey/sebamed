@extends('seba')

@section('content')

      
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="4" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="5" ></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    @foreach($banners as $key => $banner)
          <div class="item <?php if ($key==0) {echo 'active';} ?>">
         	<a href=" {{ $banner->url }}"><img src="{{ asset('images/banners/'.$banner->image) }}" width="100%"></a>
          
         </div>
       @endforeach  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br/>
<br/>

<div class="row">
    <div class="col-md-4 col-xs-12">
      <img src="http://www.sebamed.com.tw//images/index_35.jpg" width="85" height="18" align="left">
       <a href="http://www.sebamed.com.tw/index.php/home/news/">
        <img src="http://www.sebamed.com.tw//images/more.jpg" width="47" height="18" border="0" ></a>
      <div id="newslist">
  
       <ul>
       	@foreach($news as $item)
    	 <li>
    	 	<a href "{{ action('NewsController@show', $item->id) }}">
    	 	
          {{ $item->date }}
          {{ $item->title }}</a>
         </li>
        @endforeach
        
       </ul>
     </div>
     </div>
       <div class="col-md-4 col-xs-6">
          <a href="http://www.onedroponly.com.tw/">
          <img src="http://www.sebamed.com.tw//images/pic1.jpg" width="280" height="196" border="0" /></a>
       </div>
       <div class="col-md-4 col-xs-6">
          <a href="http://www.sebamed.com.tw/index.php/home/news_in/83">
          <img src="http://www.sebamed.com.tw//images/2015wallpaperBanner.jpg" width="280" height="196" border="0" /></a>
       </div>
</div>

@stop