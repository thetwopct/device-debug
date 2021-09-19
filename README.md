# Never again ask "What device are you using?"

When delivering websites to clients and identifying bugs or issues, I often needed to know more about their system to reproduce a fix. After hearing "I'm using Google / Facebook" and "What's a browser" a few too many times, I made a page to automatically get all the information I needed.

Now, I just send clients to https://debug.thetwopercent.co.uk so I can get their system information immediately. The page displays their screen width and height, the viewport (browser inner) size width and height, what browser they are using, what operating system they are on, plus additional user agent info.

To make it even easier, all the user has to do is click on the screen and all the info is copied to their clipboard - so they can paste it straight in to an email, Jira, Asana or whatever project tool you are using.

I've open sourced this so you can use it too. All you need to do is pop the files in to a folder to get it working, not much else to do.

## Demo

https://debug.thetwopercent.co.uk

## Requirements

PHP 7+

## Install

1. Clone repo to a directory on your server.
2. Customise footer if you want to remove me, or customise colors to suit your brand.
3. Send to clients, stop pulling hair out etc.

## Ideas/Feedback

Improvements, feedback, pull requests are welcome.

## Changelog

20210919
Updated jQuery, added preconnects

20210918
Made open source