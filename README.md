# GrFShh

A PHP wrapper of the old version of the Gracie Films site, which also utilizes JavaScript and HTML. There are 2 versions that it can do; an interactive Flash version, and a not-so-interactive HTML5 version.

## Live demo

A live demo of GrFShh can be found over at [this link](http://kanimaki07.000webhostapp.com/projects/GrFShh.php?isFlash=true).

## Getting started

If you want to host an offline server of GrFShh, just follow these instructions to get you started.

### Pre-requisites

You will only need WampServer in order for it to work properly. You can download and install WampServer over at [this link](http://www.wampserver.com/en/).

### Installing

After you've installed WampServer, here's how to set this up.

* Download the master .zip of this repository, and extract it somewhere.
* Navigate to `localhost` in your browser.
* Click on "Add a Virtual Host"
* Name the virtual space "grfshh".
* Go to where you extracted the .zip, copy the path to it and paste it into the complete absolute path of the Virtual Host folder.
* Click the "Start the creation of the Virtual Host" button
* When it's done, navigate to the WampServer tray icon, right click it, go into "Tools", and click on "Restart DNS".
* Wait 5-10 seconds.
* After that long, navigate to `grfshh` in your browser.
* It works!

### How to switch versions

If you want to check out the Flash version:

* Add `?isFlash=true` to the URL.

By default, GrFShh will load the Flash version, so that wouldn't be necessary but it'd be good to know somehow.

But if you want to check out the custom HTML5 version:

* Add `?isFlash=false` to the URL.

In some cases, the audio won't load. You may need to refresh the page a couple times to get the audio to work.

### Licenses

This project is licensed under GNU General Public License v3.0 - see the [LICENSE.md](LICENSE.md) file for details

### Acknowledgements

* Credit to Geoffrey Neil and mollifiers for making the original .swf file
* Credit to James L. Brooks, Richard Sakai, Sony Pictures and 20th Century Studios for Gracie Films
* Credit to Jeffrey Townsend for the Gracie Films logo music
* Credit to whoever owns all the sounds used
* Special thanks to Newgrounds for their Swivel software, which was used to help make the HTML5 version.
* Special thanks to SoThink for their SWF Decompiler, which was also used to help make the HTML5 version.
* Special thanks to Handbrake, which was used to compress the video file of the HTML5 version to make the filesize smaller, therefore decreasing loading time.

### Disclaimer

Copyright Disclaimer Under Section 107 of the Copyright Act 1976, allowance is made for "fair use" for purposes such as criticism, comment, news reporting, teaching, scholarship, and research. Fair use is a use permitted by copyright statute that might otherwise be infringing. Non-profit, educational or personal use tips the balance in favor of fair use.

I do not own the rights to any copyrighted material used in this project. This project is STRICTLY for experimental and historical purposes only, to show how the Gracie Films website used to be like back then, and therefore protects it under fair use. If anyone over at Gracie Films wants me to take it down, I will be happy to do so.
