// webpack.mix.js

let 
    PUBLICDIR = 'assets',
    JSDIR = `${PUBLICDIR}/js`,
    CSSDIR = `${PUBLICDIR}/css`,
    IMGDIR = `${PUBLICDIR}/images`,
    FONTDIR = `${PUBLICDIR}/fonts`,
    VIDEODIR = `${PUBLICDIR}/videos`,
    productionSourceMaps = false;

const mix = require('laravel-mix');

mix
.webpackConfig({
    target: ['web', 'es7'],
})
.options({
    processCssUrls: false,
    postCss: [],
    terser: {},
    autoprefixer: {},
    legacyNodePolyfills: false
})
.js('src/js/app.js', `${JSDIR}`)
.setPublicPath(PUBLICDIR)
.version()
// .extract([
//     'jquery',
//     'bootstrap'
// ])
.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'popper.js/dist/umd/popper.js': ['Popper'],
    tether: ['Tether', 'window.Tether']
})
.minify([
    `${CSSDIR}/app.css`,
    `${JSDIR}/app.js`,
    `${JSDIR}/vendor.js`
])
.copy('src/images/*', `${IMGDIR}`)
.copy('src/fonts/*', `${FONTDIR}`)
.copy('src/videos/*', `${VIDEODIR}`)
.copy('style.css', `${CSSDIR}`);

// Separately process multiple dynamic Sass files at once
function mix_scss_files(dir = '') {
    let fs = require('fs');
    var src_path = `src/scss/${dir}`;
    let paths = fs.readdirSync(src_path);

    for( let i = 0; i < paths.length; i++ ) {
        if( paths[i].indexOf('.scss') > 0 && paths[i].charAt(0) != '_' ) {
            let file_path = `${src_path}/${paths[i]}`;
            
            mix
                .sass(file_path, `${CSSDIR}/${dir}/${paths[i].replace('scss', '')}css`)
                .minify(`${CSSDIR}/${dir}/${paths[i].replace('scss', '')}css`);
        }
    }
}

mix_scss_files();
mix_scss_files('blocks');

mix.browserSync('dev.wp-testing.localhost')
.sourceMaps(productionSourceMaps, 'source-map');