const mix = require('laravel-mix');
let webpack = require('webpack');
const path = require('path');


directory_asset = 'public/blog_static';
mix.setPublicPath(path.normalize(directory_asset));

let build_js = [
    {
        from: 'resources/assets/blog/js/app_blog.js',
        to : 'js/app_blog.js'
    }
];

let build_scss = [
    {
        from : 'resources/assets/blog/sass/page/category/main_category.scss',
        to : 'css/main_category.css'
    },
    {
        from : 'resources/assets/blog/sass/page/home/main_home.scss',
        to : 'css/main_home.css'
    },
    {
        from : 'resources/assets/blog/sass/page/post_detail/main_post_detail.scss',
        to : 'css/main_post_detail.css'
    },
    {
        from : 'resources/assets/blog/sass/page/post_tag/main_post_tag.scss',
        to : 'css/main_post_tag.css'
    },
    {
        from : 'resources/assets/blog/sass/page/search/main_search.scss',
        to : 'css/main_search.css'
    },
    {
        from : 'resources/assets/blog/sass/page/tag/main_tag.scss',
        to : 'css/main_tag.css'
    },
    {
        from : 'resources/assets/blog/sass/page/site_map/site_map.scss',
        to : 'css/site_map.css'
    }
];

build_js.map((file) => {
    mix.js(file.from, file.to);
});

build_scss.map((file) => {
    mix.sass(file.from, file.to).minify(directory_asset + '/' + file.to).version();
});


mix.options({
    processCssUrls: false
})
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });

// mix.disableNotifications();
mix.webpackConfig({
    plugins: [
        new webpack.ContextReplacementPlugin(/\.\/locale$/, 'empty-module', false, /js$/),
        new webpack.IgnorePlugin(/^codemirror$/),
    ],
    node: {
        fs: "empty"
    },
    module: {
        rules: [
            {
                test: /\.modernizrrc.js$/,
                use: ['modernizr-loader']
            },
            {
                test: /\.modernizrrc(\.json)?$/,
                use: ['modernizr-loader', 'json-loader']
            }
        ]
    },
    resolve: {
        alias: {
            "handlebars": "handlebars/dist/handlebars.js",
            modernizr$: path.resolve(__dirname, "resources/assets/js/.modernizrrc")
        }
    }
});
if (mix.inProduction()) {
    mix.version();
}
// mix.browserSync('123job.abc');
new webpack.LoaderOptionsPlugin({
    test: /\.s[ac]ss$/,
    options: {
        includePaths: [
            path.resolve(__dirname, './public/')
        ]
    }
});
