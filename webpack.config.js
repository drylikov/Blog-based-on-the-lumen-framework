const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
    performance: {hints: false},
    mode: 'development',
    entry: './app.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'public')
    },
    module: {
        rules: [
            {
                test: /\.(scss)$/,
                use: [
                    {
                        loader: 'style-loader'
                    },
                    {
                        loader: 'css-loader', options: {url: false}
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            plugins: function () {
                                return [
                                    require('autoprefixer')
                                ];
                            }
                        }
                    },
                    {
                        loader: 'sass-loader'
                    }
                ]
            }
        ],
    },
    plugins: [
        new BrowserSyncPlugin(
            {
                host: '127.0.0.1',
                port: 3000,
                proxy: 'http://127.0.0.1:9001/',
                open: "external",
                files: [
                    './resources/themes/**/views/**/*.blade.php',
                    './resources/themes/**/views/scss/*.scss'
                ]
            },
            {
                reload: false
            }
        )
    ]
};
