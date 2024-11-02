=== CiteKite ===
Contributors: theandystratton, johnmate
Donate link: http://citekite.com/Get
Tags: blockquote, citation, validation, quotation, verification, citekite, quote, validator, cite
Requires at least: 3.0.0
Tested up to: 3.3.1
Stable tag: 1.0

CiteKite automatically validates quotations you make of other websites and lets the world know you care.

== Description ==

CiteKite validates online quotations to prove they are accurate. The CiteKite plugin for WordPress helps you easily integrate CiteKite with your WordPress site. See more about CiteKite at http://citekite.com

With CiteKite in place, you're enhancing and verifying the credibility of online quotations.

A CiteKite verified label means that a quotation has been independently verified by CiteKite, by comparing it to its source on a webpage. The reader can see more information about the quotation, including the web address of the source material and its context, by clicking on the CiteKite label.

There's no charge to start using CiteKite. Even higher-volume websites can use CiteKite for a small yearly fee. And if the original source material goes offline, there's no need to worry - we keep a record, so your quotation can still be verified and your site's visitors can find out when it was last available.

= When you quote someone else =

CiteKite enhances your credibility, because it shows that you've taken time to make sure an online quotation is accurate. When you add CiteKite to your website or blog, we'll check quotations for accuracy and give your site's visitors extra information and a link to the original source of the quotation.

= When someone else quotes you =

When someone wants to quote your website, CiteKite can help make sure that your work is credited properly. We think transparency is vital - so CiteKite makes it easy to ensure credibility all round, in an easy and user-friendly way. You could even add this to your copyright notice

== Installation ==

= From your WordPress dashboard =

1. First sign up for a CiteKite account at http://citekite.com/Get and note the Customer ID we give you
1. Log in to WordPress and go to your dashboard
1. From the left menu select Plugins &gt; Add New
1. In the search box type citekite, then click Search Plugins
1. The CiteKite plugin should be listed. Click Install Now.
1. Hopefully you will receive a success message
1. Click Activate Plugin
1. Select Settings &gt; CiteKite from the left menu and enter your Customer ID
1. Now just use the cite attribute with your blockquotes and CiteKite will appear, as if by magic

= Downloading from the WordPress website =

1. First sign up for a CiteKite account at http://citekite.com/Get and note the Customer ID we give you
1. Go to the WordPress Plugin Directory at http://wordpress.org/extend/plugins/
1. In the search box type citekite, then click Search Plugins
1. The CiteKite plugin should be listed. Click CiteKite.
1. Click the Download button, and save the Zip somewhere memorable.
1. Log in to WordPress and go to your dashboard
1. From the left menu select Plugins &gt; Add New
1. From the top menu, under the heading, select Upload
1. Click Choose File and select the CiteKite plugin ZIP file you downloaded earlier - you saved it somewhere memorable, remember?
1. Click Install Now
1. Hopefully you will receive a success message
1. Click Activate Plugin
1. Select Settings &gt; CiteKite from the left menu and enter your Customer ID
1. Now just use the cite attribute with your blockquotes and CiteKite will appear, as if by magic

= Manual installation =

1. Sign up for a CiteKite account and note your Customer ID
1. Download and unzip the plugin
1. Upload the plugin to the wp-content/plugins folder within your WordPress installation folder
1. Activate CiteKite from the plugins menu in WordPress
1. Select CiteKite from the settings menu in WordPress and enter your Customer ID
1. Now just use the cite attribute with your blockquotes and CiteKite will appear, as if by magic


== Frequently Asked Questions ==

= Why use CiteKite at all? =

It's all about credibility – both yours, and the websites you're visiting. By making an effort to get independent verification, you're enhancing your own standing as an author. You're helping visitors to your site, too, with extra information and context that saves them time and effort.

= Can I restyle the CiteKite verified label? =

Yes. You can use CSS to change the label's colours, but under our terms you must not hide the label, add text to it, or render it unusable. The basic structure of the HTML code used to display the label, and its contents, is as follows:

&lt;span class="ckt_box"&gt;
  &lt;span class="ckt_lgo"&gt;CiteKite verified&lt;/span&gt;
  &lt;span class="ckt_info"&gt;
  ...
  &lt;/span&gt;
&lt;/span&gt;

You may need to use the CSS !important declaration to make sure that your styles override those assigned by CiteKite. Find out more about using CSS at http://www.w3schools.com/css/.

= How do I hide the labels when CiteKite has been unable to verify the quotation? =

Add the following code between the &lt;head&gt;...&lt;/head&gt; tags on your page:

&lt;script&gt;cks.hideErrors = true;&lt;/script&gt;

= What's to stop a website faking the label? =

A genuine label, when clicked, will always show a link to the CiteKite.com website with more information about the quotation to which it relates. Other webites don't have control over the information on CiteKite.com, so if it's here, it's verified, by us. Unauthorised use of the CiteKite verified label constitutes a breach of copyright. See our Terms and Conditions of Use for more information.

= What do I do if my quotation doesn't validate? =

If your quotation won't validate, then it's probably not the same as the online source material. Check the online source, then change the contents of your blockquote to match the text on the source site precisely - cut and paste it straight from your browser. Failing that, we may not have access to the page you're quoting. We can't validate quotations taken from pages that are behind pay walls or that require that you log in before accessing them.

= Will CiteKite slow my website down? =

No. CiteKite doesn't make any calls to your web server - everything happens at the web browser and on our servers. It may slightly increase the time it takes for the page to fully load, depending on the number of quotations on the page, but our systems should react within milliseconds so that your site's visitors won't see any difference.


== Screenshots ==

1. This is the CiteKite validated label that proves the quotation was independently validated by CiteKite.


== Changelog ==

= 1.0 =

* First stable release.

== Upgrade Notice ==

* This is version 1 of 1 - there are no upgrades, yet.

