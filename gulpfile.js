var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.copy(
        'bower_components/components-font-awesome/fonts',
        'public/fonts'
    );

    mix.sass('app.scss');

    mix.scripts([
        'app.js'
    ]);
});
