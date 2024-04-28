<div class="col mb-4">
    <div class="card border-success h-100">
        <!-- Product image-->
        <div class="card-header bg-secondary">
        <img class="card-img" src="{{ $book->thumbnail_link }}" alt="{{$book->title}}" />
        </div>
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <h6 class="fw-semibold"><a class="text-dark text-decoration-none" href="{{ route('books.show',['book'=>$book->id,'slug'=>$book->getSlug()]) }}">{{$book->title}}</a></h6>
                <a class="text-muted text-decoration-none" href="{{$book->publisher->link}}">                    
                    <img class="rounded" src="{{$book->publisher->logo}}" width="30" height="30" alt="">
                    {{$book->publisher->name}}</a>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
                @include('components.books.download-button')
            </div>
        </div>
    </div>
</div>
