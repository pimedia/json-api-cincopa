# JSON API Cincopa 

**Tags:** json api, RESTful Cincopa Easy Albums  
**Contributors:** parorrey  
**Stable tag:** 1.9.3  
**Requires at least:** 4.6  
**Requires PHP:** 5.3  
**Tested up to:** 5.2.1  
Text Domain: json-api-cincopa
Domain Path: /languages
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  

Extends the JSON API Plugin to allow RESTful Cincopa Easy Albums Listing for any user


##Description

JSON API Cincopa plugin extends the JSON API Plugin with a new Controller to provide Cincopa Easy Albums Listing for any user. This plugin is for WordPress/Mobile app developers who want to use Cincopa Easy Albums Plugin in conjunction with JSON API plugin as media gallery for their mobile app. 


Features include:

* Easy Albums Listing
* Easy Albums Items Listing

The plugin was created to make available Cincopa Easy Albums Plugin Media listing for mobile apps via JSON API Plugin.

Hope this will help some. 

For details, please check this: http://www.parorrey.com/solutions/json-api-cincopa/


##Installation

First you have to install the JSON API Plugin (http://wordpress.org/extend/plugins/json-api/installation/).

Then install Cincopa Plugin: Easy Albums - Buddypress users create and share images, video and audio albums - the easy way.   (https://wordpress.org/plugins/buddypress-easy-albums-photos-video-and-music-next-gen/)

In order to use Cinopa Easy Albums plugin, you need Cincopa API key that you can get from Cincopa website by registering an account https://www.bluesnap.com/jsp/redirect.jsp?contractId=2948944&referrer=1086877Cincopa 


To install JSON API Cincopa just follow these steps:

* Upload the folder "json-api-cincopa" to your WordPress plugin folder (/wp-content/plugins)
* Activate the plugin through the 'Plugins' menu in WordPress or by using the link provided by the plugin installer
* Activate the controller through the JSON API menu found in the WordPress admin center (Settings -> JSON API)




##Changelog


### 1.9.3 
* fixed text-domain


### 1.9.2 
* fixed readme.txt, added text-domain


### 1.9.1 
* fixed readme for localization


### 1.9 
* added translation


### 1.8 
* updated for wordpress version update


### 1.7 
* updated for wordpress version update


### 1.6 
* updated header and banner


### 1.5 
* updated for wordpress 4.9.8 version


### 1.4 

* updated for wordpress 4.1.2 version


### 1.3.1 

* updated for wordpress 4.1 version

### 1.2 

* updated for wordpress 4.0 version



### 1.1 

* Updated `album_items` making `original` uploaded format as default, `flv` and `mp4` are the possible values for format var.



### 1.0 

* Updated `album_items` for original, flv and mp4 video formats availability



### 0.1 

* Initial release.


##Upgrade Notice


## Frequently Asked Questions 

* There are following methods available: albums, album_items


### Method: albums 

It needs valid 'user_id' var.

http://localhost/api/cincopa/albums/?user_id=1


### Method: album_items 

It needs 'fid' var. 
http://localhost/api/cincopa/album_items/?fid=AgCAn_Zvs6Zl

To get video in flv format, http://localhost/api/cincopa/album_items/?fid=AgCAn_Zvs6Zl&format=flv

To get video in transcoded mp4 720p version uploaded format, http://localhost/api/cincopa/album_items/?fid=AgCAn_Zvs6Zl&format=mp4


For details, please check here: http://www.parorrey.com/solutions/json-api-cincopa/