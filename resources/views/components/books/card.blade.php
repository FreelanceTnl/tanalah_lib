<div class="col mb-5">
    <div class="card h-100">
        <!-- Product image-->
        <img class="card-img-top" src="{{ asset('storage/'.$book->thumbnail) }}" alt="{{$book->title}}" />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><a class="text-dark text-decoration-none" href="{{ route('books.show',['book'=>$book->id,'slug'=>$book->getSlug()]) }}">{{$book->title}}</a></h5>
                <!-- Product price-->
                <a class="text-secondary" href="{{$book->publisher->link}}">{{$book->publisher->name}}</a>
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