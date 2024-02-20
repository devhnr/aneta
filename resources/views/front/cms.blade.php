@include('front.includes.header')

<section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>{{$cms_data->name}}</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>{{$cms_data->name}}</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="contact-info-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        {!! $cms_data->description!!}
                    </div>
                </div>
            </div>
        </section>

@include('front.includes.footer')

