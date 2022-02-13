
# Introduction 

This  package has HTML, CSS and some lines of JS and can be used to display notifications / alerts in frontend. This will work without any css frameworks like: Bootstrap, Materialize, etc.

# Quick Start
Use given command to import the package in your project

    composer require takshak/alertt

You can use it with a helper function or via facade:

    alertt()->info('Your notification message goes here');

In via Alertt facade

    \Alertt::info('Your notification message goes here');

You can set the parameters during rediretion as well:

    return redirect('any/url')->withInfo('Your notification message goes here');

To display the alertt box you need to add `<x-alertt-alert />` component in you layout or any other blade file where required.

## Available methods
|Method| Default | Description |
|--|--|--|
| info() |  | Display your message in light blue color |
| danger() | | Displays message in red color |
| success() | | Displays message in light green color |
| primary() | | Displays message in blue color |
| dark() | | Displays message in black color |
| warning() | | Displays message in yellow color |
| title() | depends on alert type | Setup the message in header / title section of alert box |
| footer() | curent timestamp | Setup the message in footer section of alert box |
| timeout() | 6000 | Duration in miliseconds, how long will it be displayed to screen |

An example of alertt snippent via facade and helper. 
*All the functions need not to be called. You can setup your own default values and pass only the message.*

    \Alertt::title('You have a new notification')
		    ->info('Content of message goes here')
		    ->footer('link of the target page')
		    ->timeout(6000);
    // or
    alert()->title('You have a new notification')
		    ->info('Content of message goes here')
		    ->footer('link of the target page')
		    ->timeout(6000);

You can setup the parameters during redirection without using alertt() or \Alertt. You need to chain all the functions prepending 'with', like:- withSuccess(), withTitle(), withFooter() and so on. Example:

    return redirect()->route('name.of.route')
    			->withTitle('You have a new notification')
    		    ->withSuccess('Content of message goes here')
    		    ->withFooter('link of the target page')
    		    ->withTimeout(6000);

## Setting default values
To settup your default header. footer messages, default timeout, positions, will can set it via config file. Or in cany case if you want to change the html / css code you will find the blade file in resources/views/components/alertt.blade.php. 
First off all publish the configuration file or view file or may be both and try to settup you values.

***You will able to change position, font size. colors and other stuffs from configuration file.***