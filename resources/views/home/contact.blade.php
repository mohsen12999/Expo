@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', __('words.about'))

@section('myheader')
@endsection

@section('content')


<section id="contact-section" style="background-image: url('{{asset('/img/contact.jpg')}}');">
  <div class="entry-contact-content">
    <div class="entry-content">
      <h3>Contact</h3>
      <h1>Get in touch</h1>
      <p>Don’t be shy!</p>
      <p>If you have any questions or would like to get to know us more, feel free to leave&nbsp;us a message. We’ll get back to you as soon as we can.</p>
    </div>
  </div>
</section>

<section id="contact-map">
  <div class="entry-box-image">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.7933387003045!2d50.642676929075584!3d36.91991441018561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8b098380f9422f%3A0x24a853b767ff9961!2z2YXZiNiz2LPZhyDYjCDYotmF2YjYsti02q_Yp9mHINmIINmB2LHZiNi02q_Yp9mHINmG2LPZitmFINix2KfZhdiz2LE!5e1!3m2!1sen!2s!4v1598806786666!5m2!1sen!2s"
      width="800"
      height="450"
      frameborder="0"
      style="border: 0"
      allowfullscreen=""
      aria-hidden="false"
      tabindex="0"
    ></iframe>
  </div>

  <div class="entry-box-content">
    <div class="entry-content">
      <h3>Contact</h3>
    <h2>Address</h2>
    <p>17 NarenjBon Ramsar</p>
    </div>
    <p class="entry-link">
      <a onclick="window.open(this.href); return false;" href="https://maps.google.com/maps?ll=36.919777,50.642929&z=17&t=h&hl=en&gl=US&mapclient=embed&cid=2641453228641720673" title="Find us">Find us</a>
    </p>
  </div>

</section>

@endsection


@section('myfooter')
@endsection
