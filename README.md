# takenby you

A clean and easy way to show off your Flickr portfolio — http://takenby.benjaminreid.me/

## Features
- Looks great on both desktop and mobile devices.
- Easy setup, one easy config file.
- Easy to customise the colour scheme.
- It's free and open for all to chop, change and customise.

## What's coming up?
- Greater responsive support
- Option to have images lazy load

## Installation
To get this up and running, there's a few steps you'll need to take. Do not worry though, there's nothing too taxing!
- First [download](https://github.com/nouveller/takenby/archive/master.zip) or clone this repo.
- You'll also need to get ahold of a __Flickr API key__, a photo __Set ID__ that you want to show off and your __Flickr user ID__. I'll explain how to get these in the next few steps. Note these all down somewhere once you have 'em.
- __Flickr API key__
	- Go to http://www.flickr.com/services/apps/by/your-user-name and click "Get Another Key".
	- Select non-commercial key on the next screen, and then fill in your details. After that, you should be presented with your API key. Keep this safe.
- __Set ID__
	- This will be the ID of the set you want to show off. Just visit one of your sets on Flickr and get this (http://www.flickr.com/photos/nouveller/sets/__72157629867441961__/) part of the URL.
- __Flickr user ID__
	- Head over to [idGettr](http://idgettr.com/) and input your profile address. This should give you your Flickr ID.
- Once you have these, open up `config.php` and fill in the __API key__, __set ID__ and the __user ID__. Do not forget to fill out your normal Flickr __username__ as well.
- Also in `config.php` don't forget to fill out your name, Twitter username (if you have one) and a paragraph about yourself.
- If all's gone to plan, that should be it. Upload all the files to your server and you should be good to go.

## Further Customisation
### Changing the colour scheme
The colour scheme is built up using a base colour, and all the light/dark variations are processed using Sass' clever colour functions.

To change the "theme", simply open up the `styles.scss` file and change the `$baseColour` variable to your favourite hex colour and re-process the files.

Some shades of colour are more effective than others. I recommend copying the intial hex code and then just moving the colour slider in Photoshop.

__Don't like or know Sass?__ Then simply edit the hex values in styles.css.

### Want to add to the template?
As everything is currently templated with JavaScript, you'll find the templates at the bottom of the `index.php` file in `<script>` tags with their type set to `takenby-template`.

## Thanks
- [David Darnes](https://twitter.com/DavidDarnes) for responsive improvements
- [Kristian Hjelle](http://everydayphotos.co/) for inspiring the idea and design
- [jQuery](http://jquery.com/) for DOM wizardy.
- [Underscore](http://underscorejs.org/) for template taming.
- [CoffeeScript](http://coffeescript.org/) for processing those beans.
- [CodeKit](http://incident57.com/codekit/) for EVERYTHING.
- [SublimeText](http://www.sublimetext.com/) for EVERYTHING also.
- [Sass](http://sass-lang.com/) for being sassy.
- [Alt-J](https://www.facebook.com/altJ.band) for helping with todays reworking.