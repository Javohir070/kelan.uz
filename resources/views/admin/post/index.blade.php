<x-layouts.frontend>
    <x-slot:title>
        Postlar Ro'yxati
    </x-slot:title>
<x-page-heder>
    Blog
</x-page-heder>

   <!-- Blog Start -->
   <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Postlar Ro'yaxti</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd ikkisi va zo'r, Diam turdi dardda dengiz qoplagan edi dunyo. Uning o'zi katta yordamchidir</h4>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" src="{{$post->photo?(asset('storage/'.$post->photo)):('img/blog-3.jpg')}}" alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                        </div>
                        <h5 class="font-weight-medium mb-2">{{ $post->title }}</h5>
                        <p class="mb-4">{{ $post->short_content }}</p>
                        <a class="btn btn-sm btn-primary py-2" href="{{ route('posts.show', ['post'=> $post->id]) }}">O'qish</a>
                    </div>
                @endforeach

                <div class="col-12">
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-lg justify-content-center mb-0">
                        {{ $posts->links() }}
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
</x-layouts.frontend>