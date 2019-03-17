var loadButton = document.getElementById('load-more');
    var feed = new Instafeed({
        get: 'user',
        userId: '7983810479',
        accessToken: '7983810479.1677ed0.aaadb05b044548f48aed1794e16533ca',
        limit: 14,
        // every time we load more, run this function
        after: function() {
            // disable button if no more results to load
            if (!this.hasNext()) {
            loadButton.setAttribute('disabled', 'disabled');
            }
        },
        });

        // bind the load more button
        loadButton.addEventListener('click', function() {
        feed.next();
        });

        // run our feed!
        feed.run();