<x-layouts.frontend>
    <x-slot:title>
        Post o'zgartirish {{$post->id}}
    </x-slot:title>
    <x-page-heder>
        Post o'zgartirish {{$post->id}}
    </x-page-heder>

     <!-- Contact Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Contact Us</h6>
                    <h1 class="section-title mb-3">Contact Us For Cleaning Services</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="post" action="{{route('posts.update',['post'=>$post->id])}}" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="control-group mb-5">
                                <input type="text" class="form-control p-4" name="title" placeholder="Title" value="{{$post->title}}"   />
                                @error('title')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-5">
                                <input type="file" class="form-control p-4" name="photo" placeholder="Your Email"   />
                    
                            </div>
                            <div class="control-group mb-5">
                                <textarea class="form-control p-4" rows="3" name="short_content" placeholder="sahipa Short content kiritig"  >{{ $post->short_content }}</textarea>
                                @error('short_content')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-5">
                                <textarea class="form-control p-4" rows="6" name="content" placeholder="Content" >{{ $post->content }}</textarea>
                                @error('content')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" >Yuborish</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe style="width: 100%; height: 100%; object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


</x-layouts.frontend>