
<div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark  py-0" >
        <a class="navbar-brand text-white" href="/"><span class="text-orange">Every</span>Blog</a>
        <button class="navbar-toggler text-light bg-orange" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center position-relative" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ (request()->is("/")) ? "active" : "" }} mr-3">
                    <a class="nav-link text-black-50 d-flex align-items-center px-3 py-0" href="/">Home <span
                            class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item mr-3 {{ (request()->is("blog")) ? "active" : "" }}">
                    <a class="nav-link text-black-50 text-white d-flex align-items-center px-3 py-0"
                        href="/blog">Blogs</a>
                    </li>
                
                <li class="nav-item mr-3 {{ (request()->is("contact-us")) ? "active" : "" }}">
                    <a class="nav-link text-black-50 text-white d-flex align-items-center px-3 py-0"
                        href="/contact-us">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>