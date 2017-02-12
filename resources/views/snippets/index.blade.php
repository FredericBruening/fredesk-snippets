@component('layout')
    @forelse ($snippets as $snippet)
        <article class="snippet">
            <div class="is-flex">
                <h4 class="title is-4 flex">
                    <a href="/snippets/{{ $snippet->id }}">
                        {{ $snippet->title }}
                    </a>
                </h4>    
                <a class="nav-item" href="/snippets/{{ $snippet->id }}/fork">Fork Me</a>
                <a class="nav-item is-copy-me" 
                    data-clipboard-target="#snippet-{{ $snippet->id }}">Copy Me</a>
            </div>
            
            <pre>
                <code id="snippet-{{ $snippet->id }}">{{ $snippet->body }}</code>
            </pre>
        </article>
    @empty
        <a href="/snippets/create">Create Snippet</a>
    @endforelse
@endcomponent
