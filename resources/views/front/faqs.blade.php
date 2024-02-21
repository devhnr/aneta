@include('front.includes.header')

<section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>FAQs</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>FAQs</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Start FAQ Area -->
        @if(isset($faq) && count($faq)>0)
        <section class="faq-area ptb-70">
            <div class="container">
                 <div class="tab faq-accordion-tab">
                    @php
                        $i=1;
                    @endphp
                    @foreach($faq as $data)
                    <div class="tab-content">
                        <div class="tabs-item">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title @if($i == '1') {{'active'}}@endif " href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            Q{{$i}}.{{$data->que}}
                                        </a>
        
                                        <div class="accordion-content @if($i == '1') {{'show'}}@endif">
                                            <p>{!! html_entity_decode ($data->ans) !!}.</p>
                                        </div>
                                    </li>

                                    {{-- <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            Q2. What is Selection Tracer.com?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            Q3. What is tracer-variance trade-off?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            Q4. What is a confusion matrix?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            Q5. What is the difference between “long” and “wide” format data?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                    </div>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        <!-- End FAQ Area -->

@include('front.includes.footer')

