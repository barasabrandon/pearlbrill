

<div class="col-lg-4 col-md-12 pr-50 md-pr-15">
    <div class="widget-area">
        <div class="search-widget mb-50">
            <div class="search-wrap">
                <input type="text" placeholder="Search" class="search-input"  wire:model="searchTerm"/>
                <button value="Search"><i class=" flaticon-search"></i></button>
            </div>
        </div>
        <div class="recent-posts-widget mb-50">
            <h3 class="widget-title">Recent Blogs</h3>
            @foreach ($blogs as $item)
            <div class="show-featured ">
                <div class="post-img">
                    <a href="{{route('blog', $item->id)}}"><img src="uploads/blogs/{{$item->image_url}}" alt=""></a>
                </div>
                <div class="post-desc">
                    <a href="{{route('blog', $item->id)}}">{{$item->title}}</a>
                    <span class="date">
                        <i class="fa fa-calendar"></i>
                        {{$item->updated_at->format('F d, Y')}}
                    </span>
                </div>
            </div>                                 
            @endforeach
          
        </div> 
    </div>
</div>