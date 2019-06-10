Notice: Unfortunately, all previous 20 commits got lost when I updated my project via git to github.

# [Semantic UI - OctoberCMS](http://octobercms.com/theme/christophheich-semantic-ui-octobercms)

[Semantic](http://semantic-ui.com/) allows developers to build beautiful websites fast, with concise HTML, intuitive javascript, and simplified debugging helping make front-end development a delightful experience. Semantic is responsively designed allowing your website to scale on multiple devices. 

* License: [MIT](https://github.com/christophheich/semantic-ui-octobercms/blob/master/LICENSE)
* Semantic-License: [MIT](https://github.com/Semantic-Org/Semantic-UI/blob/master/LICENSE.md)
* JQuery-Version: 3.2.1 (NPM)
* Semantic-Version: 2.2.10 (NPM)





---





## Usage
Use the `assets/css/theme.css` file to override CSS elements; use the `assets/js/app.js` file to add JavaScript content.

## Updating manually

(You need for those commands Node.js installed visit https://nodejs.org/en/ for more information)

- move into the folder \assets\vendor\
- run in the command shell 'npm install jquery' 
- run in command shell 'npm install semantic-ui --save'

Do not change the settings except the place for 'semantic\' choose 'node_modules\semantic'

- run in the command shell 'gulp build'


 
---




 
## Adding CSS and JavaScript

If you would like to change the structure of the theme - or adding JavaScript or CSS files, edit the content of layouts/default.htm.

To add or remove JavaScript files of the theme, you will need to add the JavaScript file to the `/js/` folder of the theme, you will also need to add the name of the JavaScript file between the `<script src="{{ [ ]|theme }}"></script>` ([OctoberCMS Docs](http://octobercms.com/docs/cms/themes))

e.g.
```
If you add more than one JavaScript file do not forget to remove the seperator (,) of the last file. Only the last file can't have a seperator - the other files need one!


		<!-- SCRIPTS -->
        <script src="{{ [
            'assets/vendor/node_modules/jquery/dist/jquery.js',
            'assets/vendor/node_modules/semantic/dist/semantic.js',
            'assets/js/system.js',
            'assets/js/app.js',
			'assets/js/AddYourJavaScriptFile.js'
        ]|theme }}"></script>
```




---




    
To add or remove CSS files of the theme, you will need to add the CSS file to the `/css/` folder of the theme, you will also need to add the name of the CSS file between the `<link href="{{ [ ]|theme }}" rel="stylesheet">` ([OctoberCMS Docs](http://octobercms.com/docs/cms/themes))

e.g.
    
```
If you add more than one CSS file do not forget to remove the seperator (,) of the last file.  The last file can't have a seperator - the other files need one!


        <!-- CSS -->
        <link href="{{ [
            'assets/vendor/node_modules/semantic/dist/semantic.css',
            'assets/css/system.css',
            'assets/css/theme.css',
			'assets/css/AddYourCSSFile.css
        ]|theme }}" rel="stylesheet">
        {% styles %}
```



---
