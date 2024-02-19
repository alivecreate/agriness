
<section class="p-0">
    <div class="slide-1 home-slider">
        @foreach($slider as $slide)
            <div>
                <div class="home text-start">
                    <img src="{{asset('web/media/lg')}}/{{$slide->image}}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        @if($slide->description)
                                            <p class="slider-text">{{$slide->description}}</p>
                                        @endif
                                        
                                        @if($slide->description)    
                                            <h1>{{$slide->title}}</h1>
                                        @endif
                                            
                                        @if($slide->url)    
                                            <a href="{{$slide->url}}" class="btn btn-solid">Inquire Now</a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>