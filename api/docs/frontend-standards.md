# JS/React.js and SCSS standards
 * SCSS
    * Common rules:
        * Please use only variables for colors, font-weight, font-size
        * Please use rem for sizing (1rem = 10px)
        * Please check existing files before writing new scss there is chance that somebody did it for you.
        * Try to make scss as reusable as possible
        * For margin, padding, width, height as additional class please use sizes and spacing helpers
        * If new page`s css is similar like on existing ones please create new class and copy css in new file.  
        * If css is redundant in two or more scss files please consider using [mixin](https://css-tricks.com/custom-user-mixins/) 
        whenever it is possible
    * Location:
        * css/base. The folder contains global css rules.
        * css/components. Elements which don't contain another elements and can be used more than one time are located in css/components folder
        * css/helpers. SCSS mixins and functions are here.
        * css/layouts. Blocks consisting of multiple components are located in css/layouts folder
        * css/libs. The folder serves for some css plugins or libraries you may need
        * css/pages. Folder is only for specific pages css and include minimum additional style rules on components or layouts otherwise it's necessary to place element to appropriate folder
        * css/variables. Any variables for colors, breakpoints, typography are located in css/variables folder
    * Files naming:
        * Any folder has main file with the same name and one underscore at the beginning (folder: buttons, main file: _buttons.scss). Only this main file contains import directives and general style for a specific elements type. All another files contains only style rules and their names are separated with the dash (my-style-file.scss)
    * Classes naming tips (http://getbem.com/naming/):
        * Base class name is separated with the dash (.base-element)
        * Child element may contain a base class and child class name separated with two underscores (class="base-element__child")
        * Element's status is separated with two dashes (class="base-element base-element__child--active")
