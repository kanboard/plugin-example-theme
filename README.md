Example of theme plugin
=======================

This plugin override core templates and use template hooks to create a custom theme.

- New CSS styles are added with the hook **layout:head**
- A top bar is added to the layout by using the hook **layout:top**
- The header template is replaced by a new one with a template override

Installation
------------

- Create a directory **Theme** under the folder **plugins**
- Copy all source files in this new directory
- Go on your local installation of Kanboard
- After the login, you should see the alterations to the default layout
