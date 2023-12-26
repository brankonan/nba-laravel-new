
<h1>Teams</h1>
<ul>

    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        @foreach ($teams as $team)
        <li>
            @include('components.team-card')
        </li>
        @endforeach
    
    </div>
</ul>

