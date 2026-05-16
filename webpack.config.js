const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development',

  entry: {
    main: './assets/src/js/main.js'
  },

  output: {
    path: path.resolve(__dirname, 'assets/dist'),
    filename: 'main.js',
    clean: true
  },

  module: {
    rules: [
      // JS (ESTO TE FALTABA)
      {
        test: /\.js$/,
        exclude: /node_modules/,
        type: 'javascript/auto'
      },

      // SCSS
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader'
        ]
      }
    ]
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: 'style.css'
    })
  ],

  resolve: {
    extensions: ['.js']
  }
};