<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

{{--    @yield('title')--}}
    <title>Laundry Service NYC, Dry Cleaning Pickup &amp; Delivery, Home Cleaning &amp; Maid</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{--route('home')--}}/liox/images/favicon/2022/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{--route('home')--}}/liox/images/favicon/2022/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{--route('home')--}}/liox/images/favicon/2022/favicon-16x16.png">
    <link rel="manifest" href="{{--route('home')--}}/liox/images/favicon/2022/site.webmanifest">

{{--    <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">--}}

    @yield('stylesheet')
{{--

    <link rel="canonical" href="{{ Request::fullUrl() }}">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "{{route('home')}}",
            "name": "Liox",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "description": "#1 Laundry and Dry Cleaning Pickup and Delivery Service in New York"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Liox",
            "url": "{{route('home')}}",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+1 {{ \App\Models\Setting::getSetting('phone_conversion_number') }}",
                "contactType": "customer service"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "{{route('home')}}",
            "logo": "{{route('home')}}/liox/images/logo.png",
            "sameAs": [
                "https://www.facebook.com/lioxcleaners",
                "https://plus.google.com/114431969885610407476/about"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "VideoObject",
            "name": "Liox How it Works",
            "description": "Liox online laundry and dry cleaning order for pickup and delivery",
            "uploadDate": "2018-02-05T08:00:00+08:00",
            "duration": "PT1M4S",
            "contentUrl": "http://www.lioxclean.com/how-it-works",
            "embedUrl": "https://www.youtube.com/watch?v=wZhDbfWRg_4",
            "thumbnailUrl": "http://www.lioxclean.com/liox/images/3",
            "interactionCount": "2347"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "@id": "{{route('home')}}.com",
            "name": "Liox",
            "description": "An online pickup and delivery and drop off service for premium Laundry and Dry Cleaning",
            "image": "{{route('home')}}/liox/images/logo.png",
            "telephone": "+1 {{ \App\Models\Setting::getSetting('phone_conversion_number') }}",
            "email": "info@lioxclean.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "123 Allen st",
                "addressCountry": "New York",
                "postalCode": "10002"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "40.7228344",
                "longitude": "-73.9940772"
            },
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "07:30",
                    "closes": "19:30"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Saturday"
                    ],
                    "opens": "09:00",
                    "closes": "17:00"
                }
            ],
            "url": "{{route('home')}}",
            "priceRange": "$$"

        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Liox",
            "description": "An online pickup and delivery and drop off service for premium Laundry and Dry Cleaning",
            "image": "{{route('home')}}/liox/images/logo.png",
            "telephone": "+1 212-203-7684",
            "email": "info@lioxclean.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "217 east 29th st",
                "addressCountry": "New York",
                "postalCode": "10016"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "40.7423859",
                "longitude": "-73.9816216"
            },
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "07:30",
                    "closes": "19:30"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Saturday"
                    ],
                    "opens": "10:00",
                    "closes": "18:00"
                }
            ],
            "url": "{{route('home')}}",
            "priceRange": "$$"

        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "SoftwareApplication",
            "name": "Liox - Laundry, Dry Cleaning",
            "operatingSystem": "ANDROID",
            "applicationCategory": "http://schema.org/Lifestyle",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "ratingCount": "50"
            },
            "offers": {
                "@type": "Offer",
                "price": "0.00",
                "priceCurrency": "USD"
            }
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "SoftwareApplication",
            "name": "Liox",
            "operatingSystem": "iOS",
            "applicationCategory": "http://schema.org/Lifestyle",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "ratingCount": "70"
            },
            "offers": {
                "@type": "Offer",
                "price": "0.00",
                "priceCurrency": "USD"
            }
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/laundry-bin-experiment"
            },
            "headline": "Laundry Bin Experiment",
            "image": "{{route('home')}}/assets/images/article10.jpg",
            "datePublished": "2017-07-05T08:00:00+08:00",
            "dateModified": "2015-07-05T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/logo.jpg"
                }
            },
            "description": "Liox Laundry Pickup and Delivery experiment"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/truth-about-laundry"
            },
            "headline": "Truth About Laundry",
            "image": "{{route('home')}}/assets/images/article11.jpg",
            "datePublished": "2017-06-27T08:00:00+08:00",
            "dateModified": "2017-06-27T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "Liox and talks about truth in todays laundry"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab"
            },
            "headline": "The king is dead, long live Kings!",
            "image": "{{route('home')}}/assets/images/article9.jpg",
            "datePublished": "2016-09-13T08:00:00+08:00",
            "dateModified": "2016-09-13T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "The largest on demand laundry service in US went bankrupt"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/save-a-buck-and-the-world"
            },
            "headline": "Save a buck , save the world",
            "image": "{{route('home')}}/assets/images/article8.jpg",
            "datePublished": "2016-01-21T08:00:00+08:00",
            "dateModified": "2016-01-21T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "How to save money while using Liox premium laundry on demand services"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/uber-for-laundry"
            },
            "headline": "Uber for Laundry",
            "image": "{{route('home')}}/assets/images/article7.jpg",
            "datePublished": "2015-06-26T08:00:00+08:00",
            "dateModified": "2015-06-26T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "Uber for laundry, Reality or Myth?"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/can-laundry-industry-change"
            },
            "headline": "Can laundry industry change?",
            "image": "{{route('home')}}/assets/images/article6.jpg",
            "datePublished": "2015-04-08T08:00:00+08:00",
            "dateModified": "2015-04-08T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "Todays laundry market hardships and possible laundry future"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/liox-competition-comparison"
            },
            "headline": "Laundry Wars",
            "image": "{{route('home')}}/assets/images/article5.jpg",
            "datePublished": "2017-07-05T08:00:00+08:00",
            "dateModified": "2015-07-05T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "Head to Head Comparison of laundry on demand services in New York"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab"
            },
            "headline": "Laundry Bin Experiment",
            "image": "{{route('home')}}/assets/images/article10.jpg",
            "datePublished": "2017-07-05T08:00:00+08:00",
            "dateModified": "2015-07-05T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "Liox Laundry Pickup and Delivery experiment"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/5-regular-days"
            },
            "headline": "Regular Week of Liox's Founder",
            "image": "{{route('home')}}/assets/images/article4.jpg",
            "datePublished": "2014-11-29T08:00:00+08:00",
            "dateModified": "2014-11-29T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "What it takes to be Laundry entrepreneur"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/softeners-competition"
            },
            "headline": "Softeners Comparison",
            "image": "{{route('home')}}/assets/images/article3.png",
            "datePublished": "2012-10-09T08:00:00+08:00",
            "dateModified": "2012-10-09T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "Head to head comparison of softeners"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/detergents-competition"
            },
            "headline": "Detergents Competition",
            "image": "{{route('home')}}/assets/images/article2.png",
            "datePublished": "2012-10-09T08:00:00+08:00",
            "dateModified": "2012-10-09T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "Head to head comparison of Detergents"
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{route('home')}}/cleaning-lab/cleaning-products"
            },
            "headline": "Liox Cleaning Products",
            "image": "{{route('home')}}/assets/images/article1.png",
            "datePublished": "2012-10-09T08:00:00+08:00",
            "dateModified": "2012-10-09T09:20:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Sergey Patrikeev"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Liox",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{route('home')}}/liox/images/newlogo.jpg"
                }
            },
            "description": "Liox and choice of detergent and softeners"
        }

    </script>
--}}

</head>

<body data-state="generic">
{{--@if (!empty(\App\Models\Setting::getSetting('holiday_note') ?? ""))
    <div
        style="text-align:center; background-color:{{ \App\Models\Setting::getSetting('holiday_note_color') ?? "red" }}; padding:10px 10px 5px 10px; color:white; position: static; z-index:9001;">{{ \App\Models\Setting::getSetting('holiday_note') ?? "" }}</div>
@endif--}}

<header class="header clear">

    <div class="content-wrap">
        <div class="content">
            <style>
                @media screen and (max-width: 640px) {
                    #phone-link {
                        font-weight: normal !important;
                    }

                    #phone-link img {
                        top: 2px !important;
                        left: 0px !important;
                        margin-right: 5px !important;
                    }
                }

                /*.white_back {*/
                /*    background: rgb(255 255 255 / 90%);*/
                /*    padding-bottom: 5px;*/
                /*}*/

                header.header .content-wrap {
                    position: fixed;
                    width: 100%;
                    max-height: 73px;
                }

                @media screen and (min-width: 640px) and (max-width: 1440px) {
                    header.header .white_back .content {
                        margin: 0 2%;
                        padding-top: 20px;
                    }
                }

                @media screen and (min-width: 940px) {
                    header.header .white_back .content {
                        padding-top: 10px;
                        max-width: 1440px;
                        margin-top: 0;
                    }

                    header.header .content-wrap {

                    }

                    header.header .logo-wrapper img {
                        height: 70px;
                        top: -15px;
                    }
                }

                @media screen and (max-width: 940px) {
                    .white_back {
                        /*background: none; */
                        padding-bottom: 0px;
                    }

                    .white_back .content {
                        /*background: none;*/
                        padding: 0;
                    }

                    .white_back {
                        top: -10px;
                    }

                    header.header.mm-open .white_back, header.header.mm-open .content-wrap {
                        max-height: initial;
                        background: white;
                    }
                }

                @media screen and (min-width: 940px) and (max-width: 1100px) {
                    .phone-item {
                        display: none;
                    }
                }
            </style>


            <div class="logo-wrapper">
                <a href="{{--route('home')--}}" title="Liox Laundry and Maid service">
                    <img src="/images/new_images/logo_70.png" alt="Liox" loading="lazy">
                    <h2 class="mobile-title" style="position: absolute; top: 29px; left: 22%;">Laundry and Cleaning
                    </h2>
                </a>
                <nav class="main-nav" role="navigation" itemscope=""
                     itemtype="http://schema.org/SiteNavigationElement">
                    <ul>
                        <li class="nav-item"><a href="{{--{{route('dynamic_page', ['laundry', 'nyc'])}}--}}"
                                                title="Wash and fold service pickup and delivery" style="">Wash &amp;
                                Fold</a></li>
                        <li class="nav-item"><a href="{{--{{route('dynamic_page', ['dry-cleaning', 'nyc'])}}--}}"
                                                title="Dry Cleaning Pickup and Delivery Near Me" style="">Dry
                                Cleaning</a></li>
                        <li class="nav-item"><a href="{{--{{route('commercial-laundry')}}--}}"
                                                title="Commercial Laundry" style="">Commercial Laundry</a></li>
                        <li class="nav-item"><a href="{{--{{route('dynamic_page', ['maid-service', 'nyc'])}}--}}"
                                                title="Home Cleaning"
                                                style="">Home Cleaning</a></li>
                    <!--<li class="nav-item"><a href="{{--{{route('home')}}--}}/airbnb-laundry" title="Airbnb Laundry" style="">Airbnb<span class="hide-on-small-screen"> Laundry</span></a></li>-->
                    <!--<li class="nav-item"><a href="{{--{{route('home')}}--}}/chefs-pick" title="Chef's Pick" style="">Chef's Pick</a></li>-->
                        <li class="nav-item"><a href="{{--{{route('pricing')}}--}}" title="Laundry Prices"
                                                style="">Pricing</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /logo-wrapper -->


            <div class="mobile-menu-button js-mm-btn clear"
                 {{--onclick="var element1 = document.getElementsByClassName(&#39;mobile-menu-button&#39;)[0]; var element2 = document.getElementsByClassName(&#39;header&#39;)[0];
		if(element1.classList.contains(&#39;mm-open&#39;)){element1.classList.add(&#39;mm-close&#39;);element2.classList.add(&#39;mm-close&#39;);element1.classList.remove(&#39;mm-open&#39;);element2.classList.remove(&#39;mm-open&#39;);} else {element1.classList.add(&#39;mm-open&#39;);element2.classList.add(&#39;mm-open&#39;);element1.classList.remove(&#39;mm-close&#39;);element2.classList.remove(&#39;mm-close&#39;);}"--}}>
                <span></span><span></span>
            </div>

            <nav class="main-nav" role="navigation" itemscope="" itemtype="http://schema.org/SiteNavigationElement"
                 style="float:right;">
                <ul>
                    <li class="nav-item only-on-phone"><a href="{{--{{route('dynamic_page', ['laundry', 'nyc'])}}--}}"
                                                          title="Wash and fold service pickup and delivery" style="">Wash
                            &amp; Fold</a></li>
                    <li class="nav-item only-on-phone"><a href="{{--{{route('dynamic_page', ['dry-cleaning', 'nyc'])}}--}}"
                                                          title="Dry Cleaning Pickup and Delivery Near Me" style="">Dry
                            Cleaning</a></li>
                    <li class="nav-item only-on-phone"><a href="{{--{{route('commercial-laundry')}}--}}"
                                                          title="Commercial Laundry" style="">Commercial Laundry</a>
                    </li>
                    <li class="nav-item only-on-phone"><a href="{{--{{route('dynamic_page', ['maid-service', 'nyc'])}}--}}"
                                                          title="Home Cleaning" style="">Home Cleaning</a></li>
                    <li class="nav-item only-on-phone"><a href="{{--{{route('pricing')}}--}}"
                                                          title="Laundry Prices" style="">Pricing</a></li>
                    <li class="nav-item"><a id="phone-link"
                                            href="{{--tel:{{ \App\Models\Setting::getSetting('phone_conversion_number') }}--}}"
                                            title="Call us"
                                            style="border: 0; color: #3d77ea; font-weight: bold;"><img
                                src="/images/new_images/icon_phone.gif" class="gif" alt="Call Liox"
                                style="width: 20px; position: relative; top: 5px; left: -8px;">{{--{{ \App\Models\Setting::getSetting('phone_conversion_number') }}--}}
                        </a></li>
                    {{--@if ( auth()->check() )
                        @if( auth()->user()->hasRole(['admin', 'owner']) )
                            <li class="nav-item"><a class="btn-static" href="{{route('admin_dashboard')}}"
                                                    style="font-weight:bold;">Admin</a></li>
                        @else
                            <li class="nav-item"><a class="btn-static" href="{{route('account-dashboard')}}"
                                                    style="font-weight:bold;">Account</a></li>
                        @endif
                    @else--}}
                        {{--<li class="nav-item hide-on-phone"><a class="js-open-modal"
                                                              href="javascript:void(0)"
                                                              title="dry cleaning pickup and delivery"
                                                              data-open-modal="user-login"
                                                              onclick="document.getElementById(&#39;customer-login-ui&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;open&#39;)"
                                                              style="border: 0; color: #3d77ea; font-weight: bold;">Login</a>
                        </li>
                        <li class="nav-item"><a class="btn-static" href="{{route('home')}}/#login"
                                                data-open-modal="user-login"
                                                onclick="document.getElementById(&#39;get-started-modal&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;open&#39;)"
                                                style="font-weight:bold;">Get Started</a></li>
                    @endif--}}
                </ul>
                {{--<ul class="mobile-bottom-nav">
                    <li class="nav-item"><a class="btn-static js-open-modal" href="{{route('home')}}/#login"
                                            data-open-modal="user-login"
                                            onclick="document.getElementById(&#39;customer-login-ui&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;open&#39;)"
                                            title="Login to do Laundry" rel="nofollow">Login</a></li>
                    <li class="nav-item"><a class="btn-static" href="{{route('home')}}/#login"
                                            data-open-modal="user-login"
                                            onclick="document.getElementById(&#39;get-started-modal&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;open&#39;)"
                                            title="Order Laundry, Dry Cleaning and Maid Service">Get Started</a></li>
                </ul>--}}
            </nav> <!-- /main-nav -->
        </div> <!-- /content -->
    </div>
</header><!-- /header -->

@yield('body')

<footer class="footer">
    <div class="footer-content">
        <div class="bottom clear" style="border-top: 1px solid #CCC; padding-top: 20px;">
            <div class="column large">
                <img class="png hide-on-phone" src="/images/new_images/logo_2021.png" alt="Liox" loading="lazy"
                     style="max-width: 50px;">
                <h5
                    style="line-height: 50px; vertical-align: middle; display: inline-block; margin-top: -25px; margin-left: 10px;">
                    Make time to do what you love, with Liox!
                </h5>
                <ul class="footer-left-side">
                    <li><a href="{{--tel:{{ \App\Models\Setting::getSetting('phone_conversion_number') }}--}}"
                           title="Call us"><img
                                src="/images/new_images/icon_phone.gif">{{--{{ \App\Models\Setting::getSetting('phone_conversion_number') }}--}}
                        </a></li>
                    <li><a href="mailto:info@lioxclean.com" title="Call us"><img
                                src="/images/new_images/icon_letter.gif">info@lioxclean.com</a></li>
                    <li><a style="color:white !important"
                           href="https://www.google.com/maps/place/Liox+Cleaners+%26+Laundry/@40.7198547,-73.9926181,17z"
                           title="Order Home Cleaning" target="_blank">123 Allen street, New York NY 10002</a></li>
                </ul>
            </div> <!-- END OF COL -->

            <div class="column">
                <span class="footer-col-title">Our Services</span>
                <ul>
                    <li><a href="{{--route('dynamic_page', ['laundry', 'nyc'])--}}" title="order wash and fold">Wash &amp;
                            Fold</a></li>
                    <li><a href="{{--route('dynamic_page', ['dry-cleaning', 'nyc'])--}}" title="order dry cleaning">Dry
                            Cleaning</a>
                    </li>
                    <li><a href="{{--route('dynamic_page', ['maid-service', 'nyc'])--}}" title="Order Home Cleaning">Home
                            Cleaning</a></li>
                    <li><a href="{{--route('commercial-laundry')--}}"
                           title="order commercial laundry">Commercial Laundry</a></li>
                    <li><a href="{{--route('laundromat')--}}"
                           title="We are not a laundromat">Laundromat</a></li>
                </ul>
            </div> <!-- END OF COL -->

            <div class="column">
                <span class="footer-col-title">Our Goodies</span>
                <ul>
                    <li><a href="{{--route('faq')--}}" title="frequently asked questions">FAQ</a></li>
                    <li><a href="{{--route('pricing')--}}" title="laundry prices">Pricing</a></li>
                    <li><a href="{{--route('contact-us')--}}" title="contact us">Contact Us</a></li>
                    <li><a href="{{--route('story-of-liox')--}}" title="story of liox">Our Story</a></li>
                    <li><a href="{{--route('cleaning-lab')--}}" title="blog cleaning tab">Blog - Cleaning
                            Lab</a></li>
                    <li><a href="{{--route('jobs')--}}" title="Liox Careers">Jobs</a></li>
                </ul>
            </div> <!-- END OF COL -->

            <div class="column">
                <span class="footer-col-title">Connect</span>
                <ul>
                    <li><a href="https://twitter.com/lioxcleaners" title="liox twitter">Twitter</a></li>
                    <li><a href="https://facebook.com/lioxclean" title="liox facebook">Facebook</a></li>
                    <li><a href="http://instagram.com/lioxcleaners" title="liox instagram">Instagram</a></li>
                    <li><a href="https://www.yelp.com/biz/liox-new-york" title="liox yelp">Yelp</a></li>
                    <li><a href="{{--route('press')--}}" title="press and media">Press</a></li>
                </ul>
            </div> <!-- END OF COL -->
        </div> <!-- END OF BOTTOM -->


        <div class="bottom clear" style="padding-top: 20px;">
            <div class="column right">
                <span class="footer-col-title">Locations</span>
                <ul>
                    <li><a href="{{--route('laundry-dry-cleaning-maid-service-nyc')--}}"
                           title="laundry dry cleaning and maid service nyc">NYC</a></li>
                    style="pointer-events: none; cursor: default; color:#CCC;">Boston</a></li>
                    <li><a href="{{--route('home')--}}" title="laundry dry cleaning and maid service chicago"
                           style="pointer-events: none; cursor: default; color:#CCC;">Chicago</a></li>
                </ul>
            </div><!-- END OF COL -->

            <div class="column right">
                <span class="footer-col-title">Laundry</span>
                <ul>
                    <li><a href="{{--route('dynamic_page', ['laundry', 'nyc'])--}}" title="laundry pickup service nyc">Laundry
                            NYC</a></li>
                    <li><a href="{{--route('home')--}}/#" title="laundry pickup service boston"
                           style="pointer-events: none; cursor: default; color:#CCC;">Laundry Boston</a></li>
                    <li><a href="{{--route('home')--}}/#" title="laundry pickup service chicago"
                           style="pointer-events: none; cursor: default; color:#CCC;">Laundry Chicago</a></li>
                </ul>
            </div><!-- END OF COL -->
            <div class="column right">
                <span class="footer-col-title">Dry Cleaning</span>
                <ul>
                    <li><a href="{{--route('dynamic_page', ['dry-cleaning', 'nyc'])--}}" title="dry cleaning pickup">Dry
                            Cleaning NYC</a></li>
                    <li><a href="{{--route('home')--}}/#" title="dry cleaning service boston"
                           style="pointer-events: none; cursor: default; color:#CCC;">Dry Cleaning Boston</a></li>
                    <li><a href="{{--route('home')--}}/#" title="dry cleaning service chicago"
                           style="pointer-events: none; cursor: default; color:#CCC;">Dry Cleaning Chicago</a></li>
                </ul>
            </div><!-- END OF COL -->

            <div class="column right">
                <span class="footer-col-title">Maid Service</span>
                <ul>
                    <li><a href="{{--route('dynamic_page', ['maid-service', 'nyc'])--}}" title="book maid service in nyc">Maid
                            Service NYC</a></li>
                    <li><a href="{{--route('home')--}}/#" title="maid service boston"
                           style="pointer-events: none; cursor: default; color:#CCC;">Maid Service Boston</a></li>
                    <li><a href="{{--route('home')--}}/#" title="maid service chicago"
                           style="pointer-events: none; cursor: default; color:#CCC;">Maid Service Chicago</a></li>
                </ul>
            </div><!-- END OF COL -->
        </div><!-- END OF BOTTOM -->

        <div class="bottom-bar">
            <p>Copyright © 2021 Liox. All rights reserved | <a
                    href="{{--route('term-and-conditions')--}}" title="terms and conditions">Terms of
                    Service</a> and <a href="{{--route('privacy-policy')--}}"
                                       title="policy page">Privacy Policy</a></p>
        </div>
    </div>
</footer>

<div id="customer-login-ui" class="modal-bk" data-modal="user-login">
    <div class="modal-close js-close-modal hide-on-phone"
         {{--onclick="document.getElementById(&#39;customer-login-ui&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;closed&#39;)"--}}>
        <img class="svg" src="/images/new_images/modal-close.svg" loading="lazy" alt="order laundry window">
    </div>
    <div class="modal">
        <div class="modal-close js-close-modal only-on-phone"
             {{--onclick="document.getElementById(&#39;customer-login-ui&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;closed&#39;)"--}}>
            <img class="svg" src="/images/new_images/modal-close.svg" alt="order laundry window" loading="lazy"
                 style="filter: invert(.5);width: 30px;padding: 0 5px 0 5px;position: relative;top: -10px;left: 10px;">
        </div>
        <div class="modal-header">
            <img class="svg" src="/images/new_images/waves.svg" alt="clean clothes" loading="lazy">
            <h2 id="success_message">Welcome back</h2>
            <h3 class="modal-sub-header">Ready to have more free time?</h3>
            <h3 id="error-message-login" class="error" style="color: red;"></h3>
        </div>
        <div class="modal-body">
            <form action="{{--route('home')--}}/login" method="post" novalidate=""
                  onsubmit="event.preventDefault(); frontendLoginSilent();">
                <div class="input-group">
                </div> <!-- End of input Group -->
                <div class="input-group">
                    <label for="username">Email</label>
                    <input id="email" type="email" name="email" required="true" tabindex="1">
                </div>
                <div class="input-group">
                    <label for="password" tabindex="-1">Password
                        <a href="{{--route('home')--}}/password/reset"
                           target="_blank"
                           class="forgot-password-link float-right" rel="nofollow">Forgot Password?</a></label>
                    <input id="password" type="password" name="password" required="true" tabindex="1">
                </div>
                <div class="input-group center">
                    <button id="button-silent-login" type="submit" class="modal-btn" tabindex="1" name="service"
                            value="login">Sign
                        In
                    </button>
                </div>
                <a href="{{--route('home')--}}/#sign-up" class="js-open-modal grey"
                   data-open-modal="user-signup" style="display:none;">New Member? Sign Up</a>
            </form>
        </div> <!-- End of Modal-body -->
    </div>
</div>


<div id="get-started-modal" class="modal-bk" data-modal="get-started">
    <div class="modal-close js-close-modal hide-on-phone"
         {{--onclick="document.getElementById(&#39;get-started-modal&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;closed&#39;)"--}}>
        <img class="svg" src="/images/new_images/modal-close.svg" alt="order laundry window" loading="lazy">
    </div>
    <div class="modal">
        <div class="modal-close js-close-modal only-on-phone"
             {{--onclick="document.getElementById(&#39;get-started-modal&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;closed&#39;)"--}}>
            <img class="svg" src="/images/new_images/modal-close.svg" alt="order laundry window" loading="lazy"
                 style="filter: invert(.5);width: 30px;padding: 0 5px 0 5px;position: relative;top: -10px;left: 10px;">
        </div>
        <div class="modal-header">
            <img class="svg" src="/images/new_images/waves.svg" alt="clean clothes" loading="lazy">
            <h2 id="success_message">Get Started with Liox</h2>
            <h3 class="modal-sub-header">Ready to have some more free time?</h3>
        </div>
        <div class="modal-body">
            <form action="{{--route('home')--}}/sign-in" method="post" novalidate="">
                <div class="input-group" style="text-align:center;">
                    <a href="{{--route('order', ['service' => 'wash'])--}}" class="order-link"
                       style="border-radius:5px;">Wash&amp;Fold</a>
                </div>
                <div class="input-group" style="text-align:center;">
                    <a href="{{--route('order', ['service' => 'dryclean'])--}}" class="order-link"
                       style="border-radius:5px;">Dry Cleaning</a>
                </div>
                <div class="input-group" style="text-align:center;">
                    <a href="{{--route('order', ['service' => 'homeclean'])--}}" class="order-link"
                       style="border-radius:5px;">Home Cleaning</a>
                </div>
            </form>
        </div> <!-- End of Modal-body -->
    </div>
</div>


<div id="exit-modal" class="modal-bk" data-modal="user-login">
    <div class="modal-close js-close-modal"
         {{--onclick="document.getElementById(&#39;exit-modal&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;closed&#39;)"--}}>
        <img class="svg" src="/images/new_images/modal-close.svg" alt="order laundry window" loading="lazy">
    </div>
    <div class="modal" style="">
        <div class="modal-close js-close-modal only-on-phone"
             -->
            <img class="svg" src="/images/new_images/modal-close.svg" alt="order laundry window" loading="lazy"
                 style="filter: invert(.5);width: 30px;padding: 0 5px 0 5px;position: relative;top: -10px;left: 10px;">
        </div>
        <div class="modal-header">
            <img class="svg" style="width: 75px; padding-bottom: 10px;" src="/images/new_images/beach.svg"
                 loading="lazy"
                 alt="laundry discount">
            <h2 style="line-height:1.2;">Want to cross laundry off your list for good?</h2>
            <h3 class="modal-sub-header" style="font-size: 16px;padding: 0 30px;color: #9ca1ab;">Order Today and get
                $10 discount first 2 orders.</h3>
        </div>
        <div class="modal-body">
            <form action="{{--route('order', ['service' => 'wash'])--}}" method="post" novalidate="">
                <div class="input-group center">
                    <button type="submit" class="modal-btn" tabindex="1" name="service" value="login">Get $20
                        Discount
                    </button>
                </div>
                <h3 class="modal-sub-header"
                    style="font-size: 16px;padding: 0 30px;color: #16374b;margin: 5px;font-family: BrownStd;margin: auto;text-align: center;">
                    or <br> Call: {{-- \App\Models\Setting::getSetting('phone_conversion_number') --}}</h3>
            </form>
        </div> <!-- End of Modal-body -->
    </div>
</div>


<div id="exit-modal2" class="modal-bk" data-modal="user-login">
    <div class="modal-close js-close-modal"
         {{--onclick="document.getElementById(&#39;exit-modal&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;closed&#39;)"--}}>
        <img class="svg" src="/images/new_images/modal-close.svg" alt="order laundry window" loading="lazy">
    </div>
    <div class="modal" style="">
        <div class="modal-close js-close-modal only-on-phone"
             {{--onclick="document.getElementById(&#39;exit-modal&#39;).setAttribute(&#39;data-modal-state&#39;,&#39;closed&#39;)"--}}>
            <img class="svg" src="/images/new_images/modal-close.svg" alt="order laundry window" loading="lazy"
                 style="filter: invert(.5);width: 30px;padding: 0 5px 0 5px;position: relative;top: -10px;left: 10px;">
        </div>
        <div class="modal-header">
            <img class="svg" style="width: 75px; padding-bottom: 10px;" src="/images/new_images/beach.svg"
                 loading="lazy"
                 alt="laundry discount">
            <h2 style="line-height:1.2;">Want to cross cleaning home off your list for good?</h2>
            <h3 class="modal-sub-header" style="font-size: 16px;padding: 0 30px;color: #9ca1ab;">Order Today and get
                $40 first order discount.</h3>
        </div>
        <div class="modal-body">
            <form action="{{--route('order', ['service' => 'homeclean'])--}}" method="post" novalidate="">
                <div class="input-group center">
                    <button type="submit" class="modal-btn" tabindex="1" name="service" value="login">Get $40
                        Discount
                    </button>
                </div>
                <h3 class="modal-sub-header"
                    style="font-size: 16px;padding: 0 30px;color: #16374b;margin: 5px;font-family: BrownStd;margin: auto;text-align: center;">
                    or <br> Call: {{-- \App\Models\Setting::getSetting('phone_conversion_number') --}}</h3>
            </form>
        </div> <!-- End of Modal-body -->
    </div>
</div>


{{--<script defer src="{{ mix('js/frontend.merged.js') }}"></script>--}}

{{--@if( !auth()->check() )
    <script>
        let mouseX = 0;
        let mouseY = 0;
        let popupCounter = 0;

        document.addEventListener("mousemove", function (e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        document.addEventListener("mouseleave", function (e) {
            setTimeout(
                function () {
                    if (mouseY < 100) {
                        var user_exit_popup = getCookie('user_exit_popup');
                        if (user_exit_popup !== "1") {
                            console.log("Please don't close the tab!");
                            document.getElementById('exit-modal').setAttribute('data-modal-state', 'open')
                        }
                        popupCounter++;
                        var date = new Date();
                        date.setTime(date.getTime() + (1 * 60 * 60 * 1000));
                        expires = "expires=" + date.toUTCString();
                        document.cookie = "user_exit_popup=" + 1 + "; " + expires;
                    }
                }, 5000);
        });
    </script>
@endif--}}

{{--@yield('javascript')--}}

{{--<script>
    window.addEventListener("load", function () {
        window.onscroll = function () {
            var element = document.getElementsByClassName("header")[0];
            var topPos = element.offsetTop;
            var height = element.offsetHeight;
            if (parseInt(element.getBoundingClientRect().top) * (-1) > 30) {
                document.getElementsByClassName("content-wrap")[0].classList.add("white_back");
            } else {
                document.getElementsByClassName("content-wrap")[0].classList.remove("white_back");
            }
            //console.log(parseInt(document.getElementsByClassName("footer-content")[0].getBoundingClientRect().top));
        }
    });
</script>--}}

{{--<script>

    window.onload = function () {

        var script = document.createElement('script');
        script.src = "https://www.googletagmanager.com/gtag/js?id=AW-787985336";

        document.head.append(script);

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'AW-787985336');

        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.defer = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P49M39J');
    };

</script>--}}

{{--<script>

    function getCookieLayout(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    @php
        $referer = '';
        if (isset($_SERVER['HTTP_REFERER']) or isset($_GET['gclid']))
        {
            if (isset($_GET['gclid']) or stripos($_SERVER['HTTP_REFERER'], 'gclid='))
            {
                $referer = 'https://www.google.com/ads';
            } else {
                $referer = $_SERVER['HTTP_REFERER'];
            }
        }
    @endphp

    var lead_source = getCookieLayout('lead_source');

    if (!lead_source) {
        var source = '{{ $referer }}';
        console.log("Setting up lead_source to " + source);
        var date = new Date();
        date.setTime(date.getTime() + (24 * 60 * 60 * 1000));
        expires = "expires=" + date.toUTCString();
        document.cookie = "lead_source=" + source + "; " + expires;
    }

</script>--}}


</body>
</html>
