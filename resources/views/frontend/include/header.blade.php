<div class="text-fit-wrapper">
    <h1 class="text-fit wow">
        @foreach ($fronts as $front)
        {{$front->agency_name}}
        @endforeach
    </h1>
    <div class="d-menu-1 wow" data-wow-delay=".3s">
        <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About Me</a></li>
            <li><a href="services.html">What I Do</a></li>
            <li><a href="works.html">Works</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Hire Me</a></li>
        </ul>
    </div>
</div>