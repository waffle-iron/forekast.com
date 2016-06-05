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

<p class="how-it-works">How It Works: The <a href="https://www.forekast.com">Forekast</a> community post and votes on interesting upcoming events and we handpick the best ones and deliver them straight to your inbox!</p>

<section class="syndication">
  <img src="images/product-hunt.png">
  <img src="images/reddit.png">
  <img src="images/laughing-squid.png">
  <img src="images/lifehacker.png">
  <img src="images/awesomer.png">
</section>

<p class="sample">Still not convinced? Check out an <a href="http://us3.campaign-archive1.com/?u=9305570dd7f6062d4290cde95&id=d35d3d82d6&e=4caa488b08">example email</a>.</p>
@endsection
