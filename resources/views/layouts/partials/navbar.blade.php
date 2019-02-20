<div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">{{ $infos[0] }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('admission') }}" class="nav-link">Admission</a></li>
                <li class="nav-item"><a href="{{ route('result') }}" class="nav-link">Result Corner</a></li>
                <li class="nav-item"><a href="{{ route('teacher-list') }}" class="nav-link">Teachers</a></li>
                <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>