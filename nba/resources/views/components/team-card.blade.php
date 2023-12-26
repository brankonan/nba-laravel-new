<div class="col">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{ $team->name }}</h3>
            <div class="mb-1 text-body-secondary">{{ $team->city }}</div>
            <p class="card-text mb-auto">{{ substr($team->adress, 0, 70) }}...</p>
            <a href="/teams/{{ $team->name }}" class="icon-link gap-1 icon-link-hover stretched-link">
                Continue reading
                <svg class="bi">
                    <use xlink:href="#chevron-right" />
                </svg>
            </a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                focusable="false">
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em"></text>
            </svg>
        </div>
    </div>