---
title: 'Log in with Paypal: A fractal of bad design'
date: '2015-02-13 16:29'
---

It turns out that logging in with Paypal is not as straightforward as the documentation would like to make it seem.

The first issue I ran into was that it would not recognise my redirect URL. It kept returning with:

    Relying Party Validation error: redirect_uri provided in the request does not match with the registered redirect_uri. Please check the request.

Not a very nice error to have, especially if you’ve checked ten times over that the redirect_uri you provided is indeed exactly the same thing.

Apparently the only solution to this problem (at least any that I’ve been able to find online), is to create a new Paypal application.

Awesome, talk about incompetence. Changing fields is too difficult, but finally done, so let’s continue with the next error that appears on my screen (after a slow redirect).

    Client validation error: invalid scope

Yay, ok, this apparently means that I haven’t enabled some of the scopes I requested, so I turn on all scopes in the Paypal interface and all will be good right?

    Client validation error: invalid scope
    
WTF?

After another fight with this error for a few more hours, it turns out that Paypal apparently locks whatever you have set on the first request (hopefully by accident) you make for every application. So the only solution is to create ANOTHER new Paypal application and importantly, set everything you think you might need on it before actually using it.

UPDATE: Based on information in one of the comments, apparently it takes at least 3 hours for an change to any of the settings to go through, even though generating a new Paypal application is instant. So take your pick.

Please take into account that it works both ways, you can neither lower permissions, nor extend them.

Applause for this absolutely elegant piece of engineering. It’s a wonder there aren’t more people using this.

I’ve written this mostly so someone else encountering these errors hopefully won’t have to deal with being frustrated for hours. Hopefully Paypal will eventually fix this.