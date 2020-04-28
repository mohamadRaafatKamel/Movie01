<div>
  <div class="movie-item-style-2 movie-item-style-1">
    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="">
    <div class="hvr-inner">
      <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
    </div>
    <div class="mv-item-infor">
      <h6><a href="#">{{ $movie['title'] }}</a></h6>
      <h6>
          @foreach ($movie['genre_ids'] as $x)
              {{ $genre[$x] }}@if (! $loop->last),@endif
          @endforeach

      </h6>
      <p class="rate"><i class="ion-android-star"></i><span>{{ $movie['vote_average'] }}</span> /10</p>
    </div>
  </div>
</div>
