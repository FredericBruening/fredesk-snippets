<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Snippets</title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="/fonts/firacode/fira_code.css"> 
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <section class="hero is-primary is-bold">
        <!-- Hero header: will stick at the top -->
          <div class="hero-head">
            <header class="nav">
              <div class="container">
                <div class="nav-left">
                  <a href="/" class="nav-item title is-4 is-active">
                    Snippets
                  </a>
                </div>
                <span class="nav-toggle">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
                <div class="nav-right nav-menu">
                  <a class="nav-item">
                    --> Fredesk.com
                  </a>
                </div>
              </div>
            </header>
          </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    &lt;!-- Explore Snippets and &lt;/&gt; --&gt;
                </h1>

                <h2 class="subtitle">
                    Categories are coming soon!
                </h2>

                <!-- <p>
                    <a href="/snippets/create" class="button is-light is-outlined">Create Snippet</a>
                </p> -->
            </div>
        </div>
         <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
          <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
              <ul>
                <li class="is-active"><a>All</a></li>
                <li><a>HTML</a></li>
                <li><a>CSS</a></li>
                <li><a>JS</a></li>
                <li><a>PHP</a></li>
                <li><a>Python</a></li>
                <li><a>...</a></li>
              </ul>
            </div>
          </nav>
        </div>
    </section>

    <section class="section">
        <div class="container">
            {{ $slot }}
        </div>
    </section>

    <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
    <script>new Clipboard('.is-copy-me');</script>
    <script>hljs.initHighlightingOnLoad();</script>

    @if (isset($footer))
        {{ $footer }}
    @endif
</body>
</html>