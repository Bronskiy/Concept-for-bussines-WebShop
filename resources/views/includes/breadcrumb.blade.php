<div class="breadcrumb-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <ul>
                      <li class="home"><a href="/">Home</a><span>/ </span></li>
                        <li><a href="#">Company or Project</a><span>/ </span></li>
                        @isset($ArtikelData->artikel_name)
                        <li><strong>{{ $ArtikelData->artikel_name }}</strong></li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
