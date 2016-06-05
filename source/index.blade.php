@extends('_layouts.master')

@section('body')
<img src="images/forekast.svg" id="brand">

<h1 class="title">The Weekly Forekast</h1>

<p class="description">The easiest way to discover what's happening! Every Monday we send you a short summary of the best upcoming events.</p>

<section class="subscribe">
  <div class="form-group form-inline">
    <input type="text" class="form-control" id="email" placeholder="your@email.com">
    <button class="btn btn-primary" id="submit">Start discovering!</button>
  </div>
</section>

<p class="how-it-works">How It Works: The <a href="https://www.forekast.com">Forekast</a> community posts and votes on interesting upcoming events and we handpick the best ones and deliver them straight to your inbox!</p>

<section class="syndication">
  <a href="http://www.producthunt.com/posts/forekast" target="_blank"><img src="images/product-hunt.png"></a>
  <a href="http://www.reddit.com/r/YouShouldKnow/comments/2pdbz1/ysk_theres_a_crowdsourced_calendar_of_the/" target="_blank"><img src="images/reddit.png"></a>
  <a href="http://laughingsquid.com/forekast-a-crowdsourced-calendar-that-aggregates-television-online-and-real-world-events/" target="_blank"><img src="images/laughing-squid.png"></a>
  <a href="http://lifehacker.com/forekast-is-a-calendar-full-of-live-events-tv-debuts-1679784726" target="_blank"><img src="images/lifehacker.png"></a>
  <a href="http://theawesomer.com/forekast/307763/" target="_blank"><img src="images/awesomer.png"></a>
</section>

<p class="sample">Still not convinced? Check out an <a href="http://us3.campaign-archive1.com/?u=9305570dd7f6062d4290cde95&id=d35d3d82d6&e=4caa488b08">example email</a>.</p>
@endsection
