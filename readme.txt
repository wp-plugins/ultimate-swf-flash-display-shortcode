=== Ultimate SWF Flash Display Shortcode ===
Plugin URI: http://connexdesigns.com/blog
Author Name : Kristijan Lopac
Author URL : http://connexdesigns.com/
Tags: wordpress shortcode for flash banners, flash display, flash shortcode, flash banner display shortcode, flash banner opaque, transparent flash banner, ultimate flash display options
Requires at least: 3.0.1
Tested up to: 3.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

If you are looking for a solution to display flash object seamlessly than this shortcode plugin is for you. Ultimate Flash Display Options.

== Description ==

If you are looking for a solution to display flash object seamlessly than this shortcode plugin is for you. Ultimate Flash Display Options. You can show now flash object anywhere on your website using this shortcode plugin.

This widget have many possible params to display flash banners on your website like:

*   Allow Script Options - Always, Same Domain, Never
*   Quality - Low, Auto Low, Auto High, Medium, High, Best
*   Background Color - Hexadecimal Value
*   wmode - Transparent, Opaque, Window
*   Stable Version Release

If you have any questions you can reach me directly via email - kris.lopac@outlook.com

== Installation ==

Now Let's get the plugin working on your wordpress website.

1. Upload 'ultimate-swf-flash-display-shortcode' to the '/wp-content/plugins/' directory - make sure you've unzipped it after upload done.
2. Or simply install the 'ultimate-swf-flash-display-shortcode.zip' file using your wordpress backend. Go to Plugins and Add New and upload & install.
3. Activate the plugin through the 'Plugins' menu in WordPress
4. here is the shortcode you need to display flash object - [cd_flash]
5. There have some available params - written below :

Basic Configuration:

*   SWF Source : In this section their are two option - only one option can be choose.
		example: swf_option = "url" (this will display flash object from external source - this is default option as well) - swf_option="internal" (this will display flash object from internal source)
*   Flash External Source URL : URL or Link of your Flash object source. it will work if you have put - swf_option = "url"
		example: url_source = "YOUR_EXTERNAL_URL_LINK_HERE"
*   Internal Directory : Absolute path of your flash object. Upload it to a folder and give directory of your flash source - Example - images/flashSource.swf.
		example: internal_directory="FILE_DIRECTORY" (swf/swfobject.swf)
*	Width : Width of your module in pixel
		example: width="300"
*	Height : Height of your module in pixel.
		example: height="300"

Advanced Configuration:

*   Allow Script Access : AllowScriptAccess is an HTML property of the <object>/<embed> tags that embed a SWF file. It protects an HTML file from a potentially untrusted SWF file, by controlling the ability of that SWF file to call JavaScript code in the surrounding HTML file. AllowScriptAccess has three possible values: "always", "sameDomain", and "never". The "always" and "never" values unconditionally turn JavaScript access on or off, respectively, for the SWF file contained in the tags where AllowScriptAccess appears. The "sameDomain" value turns JavaScript access on only if the SWF file is served from the same domain and hostname as its surrounding HTML file.
		example: allow_script_access="YOUR_OPTION" (always, sameDomain, never)
* 	Quality : Possible values: low, autolow, autohigh, medium, high, best. Specifies the display list Stage rendering quality. Setting the Stage.quality property via ActionScript overrides this value.
		1)	low favors playback speed over appearance and never uses anti-aliasing.
		2)	autolow emphasizes speed at first but improves appearance whenever possible. Playback begins with anti-aliasing turned off. If Flash Player detects that the processor can handle it, anti-aliasing is turned on.
		3)	autohigh emphasizes playback speed and appearance equally at first but sacrifices appearance for playback speed if necessary. Playback begins with anti-aliasing turned on. If the actual frame rate drops below the specified frame rate, anti-aliasing is turned off to improve playback speed. Use this setting to emulate the View > Antialias setting in Flash Professional.
		4)	medium applies some anti-aliasing and does not smooth bitmaps. It produces a better quality than the Low setting, but lower quality than the High setting.
		5)	high favors appearance over playback speed and always applies anti-aliasing. If the movie does not contain animation, bitmaps are smoothed; if the movie has animation, bitmaps are not smoothed.
		6)	best provides the best display quality and does not consider playback speed. All output is anti-aliased and all bitmaps are smoothed.
		example: quality="YOUR_OPTION" (high, low, autolow, autohigh, medium, high, best)
* 	Background Color : Choose a background color from picker - Applicable for transparent flash object only.
* 	Wmode :
		example: wmode="YOUR_OPTION" (window, opaque, transparent)
	wmode=window

	When wmode=window, the Flash movie is not rendered in the page. It is instead displayed in a separate window than the browser content. This mode will have the best performance as the browser does not have to redraw a portion of the page on each frame. However, this mode prevents you from having content appear above or below the Flash movie.

		1)	Best Performance
		2)	Rendered in separate window
		3)	Opaque background
		4)	Doesn't allow content below
		5)	Doesn't allow content above

	wmode=opaque
	When wmode=opaque, the Flash movie is rendered as part of the page. No window is created for the movie. The movie will be rendered with the background color set during the publishing process and no content will be allowed behind. On each frame, content which appear above the movie will have to be redrawn by the browser, thus affecting performance.

		1)	Good Performance
		2)	Rendered as part of the page
		3)	Opaque background
		4)	Doesn't allow content below
		5)	Allows content above
		
	wmode=transparent
	When wmode=transparent, the Flash movie is rendered as part of the page. No window is created for the movie. The background color of the movie will be transparent. Thus, any non-opaque section of the movie will allow underlying content to display. On each frame, content which appear above and below the movie will have to be redrawn by the browser, thus greatly affecting performance.

		1)	Fair Performance
		2)	Rendered as part of the page
		3)	Transparent background
		4)	Allows content below
		5)	Allows content above

== Frequently Asked Questions ==

= Is this free? =

Yap absolutely free and always will be.

= What about it doesn't work for me? =

As we tried to keep all possible options so the flash work easily on all devices. But if you still keep facing issues then you can post it on forum or contact me directly.

== Screenshots ==

1. Flash Banner Display

== Changelog ==

= 0.1 =
* Latest Stable Version Release
= 0.2 =
* version update