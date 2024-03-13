<!doctype html>
<html lang="en-US">

<!-- Mirrored from themexriver.com/appilo-theme/saas-classic/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 07:15:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta mediarset="SaaS Classic">
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/images/prakerin1.png') }}">

    <!--    Test comment-->
    <!-- Meta Tags -->
    <meta mediarset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prakerin &#8211; Sistem Pendukung Keputusan Pemilihan Tempat Praktik Kerja</title>

    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="SaaS Classic &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="SaaS Classic &raquo; Comments Feed" href="comments/feed/index.html" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/"
            , "ext": ".png"
            , "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/"
            , "svgExt": ".svg"
            , "source": {
                "concatemoji": "https:\/\/themexriver.com\/appilo-theme\/saas-classic\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e
                        , timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)
                    , r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas")
                    , a = r.getContext("2d", {
                        willReadFrequently: !0
                    })
                    , o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0
                , everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));"
                            , r = new Blob([e], {
                                type: "text/javascript"
                            })
                            , a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */

    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }

    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--light-gray: #f5f5f5;
            --wp--preset--color--medium-gray: #999;
            --wp--preset--color--dark-gray: #222a36;
            --wp--preset--color--purple: #5a00f0;
            --wp--preset--color--dark-blue: #28375a;
            --wp--preset--color--red: #c44d58;
            --wp--preset--color--yellow: #ecca2e;
            --wp--preset--color--green: #64a500;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 14px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 26px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 36px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }

    </style>
    <link rel='stylesheet' id='topapp-font-css' href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700%2C900%7CRoboto%3A100%2C300%2C400%2C500%2C700%2C900&amp;display=swap&amp;ver=6.4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='galaxy-font-css' href='https://fonts.googleapis.com/css?family=Arimo%7CMontserrat%3A200%2C400%2C700%2C800&amp;ver=6.4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='app-showcase-font-css' href='https://fonts.googleapis.com/css2?family=Playfair+Display%3Awght%40400%3B600%3B700&amp;ver=6.4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='medical-font-css' href='https://fonts.googleapis.com/css2?family=Playfair+Display%3Aital%401&amp;display=swap&amp;ver=6.4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='cloud-hosting-css' href='https://fonts.googleapis.com/css2?family=Dosis%3Awght%40400%3B600%3B700%3B800&amp;display=swap&amp;ver=6.4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='{{ asset('landing/wp-content/plugins/contact-form-7/includes/css/styles6281.css?ver=5.8.6') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-style-css' href='{{ asset('landing/wp-content/themes/appilo/style84fc.css?ver=6.4.3') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-bootstrap-css' href='{{ asset('landing/wp-content/themes/appilo/css/bootstrap3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='app-showcase-icons-css' href='{{ asset('landing/wp-content/themes/appilo/css/plugins/appilo-icons-2/style3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-flaticon-css' href='{{ asset('landing/wp-content/themes/appilo/css/plugins/flaticon1/flaticon3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-icon-v3-1-css' href='{{ asset('landing/wp-content/themes/appilo/css/plugins/appilo-icons-3/css/flaticon3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-icon-v4-1-css' href='{{ asset('landing/wp-content/themes/appilo/css/plugins/appilo-icons-4/css/flaticon3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-icon-v3-2-css' href='{{ asset('landing/wp-content/themes/appilo/css/plugins/appilo-icons-3/css/elegenticon3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-fontawesome-min-css' href='{{ asset('landing/wp-content/themes/appilo/css/plugins/fontawesome-5/css/fontawesome-all.min3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-fontawesome-5-css' href='{{ asset('landing/wp-content/themes/appilo/css/plugins/fontawesome-5/css/fontawesome-pro-all.v5.15.min3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-fontawesome-5-2-css' href='{{ asset('landing/wp-content/themes/appilo/css/plugins/fontawesome-5/css/fontawesome-pro-v53781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-library-css' href='{{ asset('landing/wp-content/themes/appilo/css/appilo-library3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-woocommerce-css' href='{{ asset('landing/wp-content/themes/appilo/woocommerce/woocommerce3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-main-css' href='{{ asset('landing/wp-content/themes/appilo/css/appilo3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-theme-style-css' href='{{ asset('landing/wp-content/themes/appilo/css/appilo-theme-style3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='saas-classic-css' href='{{ asset('landing/wp-content/themes/appilo/css/saas-classic3781.css?ver=6.2.') }}2' type='text/css' media='all' />
    <link rel='stylesheet' id='app-showcase-css' href='{{ asset('landing/wp-content/themes/appilo/css/app-showcase3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='digital-agency-css' href='{{ asset('landing/wp-content/themes/appilo/css/digital-agency3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='gym-style-css' href='{{ asset('landing/wp-content/themes/appilo/css/gym-style3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='apl2-style-css' href='{{ asset('landing/wp-content/themes/appilo/css/apl2-style3781.css?ver=6.2.') }}2' type='text/css' media='all' />
    <link rel='stylesheet' id='prysm-style-css' href='{{ asset('landing/wp-content/themes/appilo/css/prysm3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='itsource-style-css' href='{{ asset('landing/wp-content/themes/appilo/css/itsource-style3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='digital-marketing-css' href='{{ asset('landing/wp-content/themes/appilo/css/digital-marketing3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='business-expert-css' href='{{ asset('landing/wp-content/themes/appilo/css/business-expert3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-applanding-css' href='{{ asset('landing/wp-content/themes/appilo/css/appilo-applanding3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='SEO-agency-css' href='{{ asset('landing/wp-content/themes/appilo/css/seo-agency3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-resume-css' href='{{ asset('landing/wp-content/themes/appilo/css/appilo-resume3781.css?ver=6.2.') }}2' type='text/css' media='all' />
    <link rel='stylesheet' id='demo-pages-css' href='{{ asset('landing/wp-content/themes/appilo/css/demo-page3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='crypto-css-css' href='{{ asset('landing/wp-content/themes/appilo/css/crypto3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='nft-landing-css-css' href='{{ asset('landing/wp-content/themes/appilo/css/nft-landing3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='app3-landing-css' href='{{ asset('landing/wp-content/themes/appilo/css/app3-landing3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='metisMenu-css' href='{{ asset('landing/wp-content/themes/appilo/css/metisMenu3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='uikit-css' href='{{ asset('landing/wp-content/themes/appilo/css/uikit.min3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='sass-landing-css' href='{{ asset('landing/wp-content/themes/appilo/css/sass-landing3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-animate-css-css' href='{{ asset('landing/wp-content/themes/appilo/css/animate.min3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='saas-app-css' href='{{ asset('landing/wp-content/themes/appilo/css/saas-app3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='bigo-style-css' href='{{ asset('landing/wp-content/themes/appilo/css/bigo-style3781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='itsouce-2-css' href='{{ asset('landing/wp-content/themes/appilo/css/itsource-23781.css?ver=6.2.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo_recent_posts-public-style-css' href='{{ asset('landing/wp-content/plugins/appilo-core/inc/footer-widgets/recent-posts-thumb/public42a0.css?ver=7.0.') }}2' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('landing/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min50c3.css?ver=5.27.0') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('landing/wp-content/plugins/elementor/assets/css/frontend.min225e.css?ver=3.19.0') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='{{ asset('landing/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-1148-css' href='{{ asset('landing/wp-content/uploads/sites/10/elementor/css/post-1148a0d4.css?ver=1655017788') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='appilo-elementor-frontend-css' href='{{ asset('landing/wp-content/plugins/appilo-core/assets/css/elementor-editor84fc.css?ver=6.4.3') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='{{ asset('landing/wp-content/uploads/sites/10/elementor/css/globalc25e.css?ver=1655017789') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-27-css' href='{{ asset('landing/wp-content/uploads/sites/10/elementor/css/post-27b860.css?ver=1655022134') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='msnav-main-css' href='{{ asset('landing/wp-content/plugins/mulitsite-nav/assets/style84fc.css?ver=6.4.3') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{ asset('landing/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{ asset('landing/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3') }}' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="{{ asset('landing/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.') }}1" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('landing./wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1') }}" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="{{ asset('landing/wp-json/index.html') }}" />
    <link rel="alternate" type="application/json" href="{{ asset('landing/wp-json/wp/v2/pages/27.json') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ asset('landing/xmlrpc0db0.php?rsd') }}" />
    <link rel="alternate" type="application/json+oembed" href="{{ asset('landing/wp-json/oembed/1.0/embedf3af.json?url=https%3A%2F%2Fthemexriver.com%2Fappilo-theme%2Fsaas-classic%2F') }}" />
    <link rel="alternate" type="text/xml+oembed" href="{{ asset('landing/wp-json/oembed/1.0/embed25ed?url=https%3A%2F%2Fthemexriver.com%2Fappilo-theme%2Fsaas-classic%2F&amp;format=xml') }}" />
    <style>
        .svg-main-logo {
            width: 60px;
            height: auto;
        }

        @media screen and (max-width: 991px) {
            .svg-main-logo {
                width: 60px;
                height: auto;
            }
        }





        .saas_two_main_header .dropdown .dropdown-menu {
            border-color: ;
        }

        .saas_two_main_header .s2-main-navigation .navbar-nav li a:before,
        .saas_two_main_header .dropdown .dropdown-menu li a:after {
            background-color: ;
        }

        .saas-classic-scrollup {
            background-image: linear-gradient(-45deg, 32%, 100%);
        }

    </style>
    <meta name="generator" content="Elementor 3.19.0; features: e_optimized_assets_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }

    </style>
    <meta name="generator" content="Powered by Slider Revolution 6.6.7 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth
                    , newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length)
                        , ix = 0
                        , sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };

    </script>
    <style type="text/css" id="wp-custom-css">
        .side-demo .new-demo-badge {
            top: -25px;
            right: 0;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 2px 8px;
            position: absolute;
            background-color: #f40000;
        }

    </style>
    <style id="kirki-inline-styles"></style>
</head>
<body class="home page-template page-template-layouts page-template-home-page-layout page-template-layoutshome-page-layout-php page page-id-27 wp-embed-responsive appilo-saas-classic elementor-default elementor-kit-1148 elementor-page elementor-page-27" id="" data-spy="scroll" data-target="nav" data-offset="50">
    {{-- <div id="dia-preloader"></div> --}}
    <!doctype html>
    <html lang="en-US">

    <!-- Start of header section
    ============================================= -->
    <header id="header_main" class="saas_two_main_header">
        <div class="container">
            <div class="s_main_menu">
                <div class="row">
                    <div class="col-md-2">
                        <div class="brand_logo">
                            <a href="index.html">
                                <img width="135px" height="135px" src="{{ asset('admin/images/full-logo.png') }}" alt="Default Logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //desktop menu -->
            <div class="s2-mobile_menu relative-position">
                <div class="s2_mobile_menu_button s2_open_mobile_menu">
                </div>
            </div>
    </header>
    <!-- End of header section
    ============================================= -->
    <div data-elementor-type="wp-page" data-elementor-id="27" class="elementor elementor-27">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-71ce8ff elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default false" data-id="71ce8ff" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-50ed9ff" data-id="50ed9ff" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2d050e1 elementor-widget elementor-widget-saas-classic-slider" data-id="2d050e1" data-element_type="widget" data-widget_type="saas-classic-slider.default">
                            <div class="elementor-widget-container">
                                <!-- Start of Banner section
            ============================================= -->
                                <section class="saas_two_banner_section relative-position">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="s2-banner_area relative-position">
                                                    <div class="s2-banner_content saas2-headline pera-content">
                                                        <span class="s2-tilte_tag">Sistem Pakar</span>
                                                        {{-- <h1>Best website for <span>SAAS</span> business</h1> --}}
                                                        <h1>Pra<span>kerin</span></h1>
                                                        <p>Sistem Pendukung Keputusan Pemilihan Tempat Praktik Kerja Lapang</p>
                                                        <div class="banner_btn">

                                                            <a class="sc-btn1" href="/login"><i aria-hidden="true" class="fas fa-user"></i>Login</a>

                                                            {{-- <a class="sc-btn2" href="#"><i aria-hidden="true" class="fas fa-clipboard-list"></i>Get a demo</a> --}}
                                                        </div>
                                                    </div>
                                                    <div class="banner_mockup"><img decoding="async" src="{{ asset('landing/img/prakerin2.png') }}" alt></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s2-banner_shape1 position-absolute" data-parallax='{"y" : 100}'><img decoding="async" src="{{ asset('landing/wp-content/uploads/sites/10/2021/07/b-shape4-1.png') }}"></div>


                                    <div class="s2-banner_shape2 position-absolute"><img decoding="async" src="{{ asset('landing/wp-content/uploads/sites/10/2021/07/b-shape3-1.png') }}"></div>
                                    <div class="s2-banner_shape3 position-absolute"><img decoding="async" src="{{ asset('landing/wp-content/uploads/sites/10/2021/07/b-shape2.png') }}"></div>
                                </section>
                                <!-- End of Banner section
    ============================================= -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-c82288c elementor-section-boxed elementor-section-height-default elementor-section-height-default false" data-id="c82288c" data-element_type="section" id="Service">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ce3154" data-id="8ce3154" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2c44f6a elementor-widget__width-auto false elementor-widget elementor-widget-heading" data-id="2c44f6a" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <span class="elementor-heading-title elementor-size-default">Our awesome services</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-94617bd elementor-section-boxed elementor-section-height-default elementor-section-height-default false" data-id="94617bd" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f820bac" data-id="f820bac" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-e939e90 saas-classic-section-header false elementor-widget elementor-widget-heading" data-id="e939e90" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Mitra<span> Perusahaan</span> for you!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-0f1950b elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default false" data-id="0f1950b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-97a7e91" data-id="97a7e91" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-234a378 elementor-widget elementor-widget-saas-classic-services" data-id="234a378" data-element_type="widget" data-widget_type="saas-classic-services.default">
                            <div class="elementor-widget-container">
                                <section class="saas_two_service_section">
                                    <div class="container">
                                        <div class="service_content">
                                            <div class="row justify-content-md-center">
                                                @foreach ($mitra as $data )
                                                <div class="col-lg-4 col-md-6  wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                    <div class="service_content_box relative-position">
                                                        <div class="service_icon_box relative-position">
                                                            <div class="upper_icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 469.333 469.333" style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <path d="M469.333,234.654c0-11.157-5.917-21.324-15.854-27.22l-26.134-15.375c10.068-5.978,19.039-11.31,26.155-15.544    c9.917-5.917,15.833-16.084,15.833-27.199c0-11.115-5.917-21.282-15.833-27.21C420.833,102.678,310.062,36.851,255.458,5.548    c-12.646-7.261-28.021-7.552-41.688,0.063c0,0-148.5,87.224-197.917,116.486C5.917,127.992,0,138.159,0,149.316    c0,11.115,5.917,21.282,15.833,27.21c7.115,4.231,16.085,9.562,26.15,15.537l-26.129,15.371C5.917,213.33,0,223.497,0,234.654    c0,11.115,5.917,21.282,15.833,27.21c7.115,4.231,16.085,9.562,26.15,15.537l-26.129,15.371C5.917,298.668,0,308.835,0,319.992    c0,11.115,5.917,21.282,15.833,27.21C58.104,372.338,162,434.019,213.875,463.76c6.354,3.646,13.563,5.573,20.792,5.573    s14.438-1.927,20.813-5.584c51.854-29.731,155.75-91.411,198.021-116.558c9.917-5.917,15.833-16.084,15.833-27.199    c0-11.157-5.917-21.324-15.854-27.22l-26.134-15.375c10.068-5.978,19.039-11.31,26.155-15.544    C463.417,255.936,469.333,245.769,469.333,234.654z M26.75,158.219c-1.625-0.979-5.417-3.792-5.417-8.885    c0-5.115,3.771-7.906,5.396-8.865C76.083,111.24,224.375,24.146,224.354,24.156c6.792-3.823,14.208-3.677,20.5-0.073    c54.458,31.219,165.125,96.969,197.729,116.365c1.625,0.979,5.417,3.792,5.417,8.885s-3.792,7.906-5.417,8.875    c-42.208,25.104-145.979,86.719-197.708,116.365c-6.417,3.667-14.021,3.656-20.396,0.01    C172.729,244.927,68.958,183.313,26.75,158.219z M442.604,311.135c1.625,0.958,5.396,3.75,5.396,8.865    c0,5.094-3.792,7.906-5.417,8.875c-42.208,25.104-145.979,86.719-197.708,116.365c-6.417,3.667-14.021,3.656-20.396,0.01    c-51.75-29.656-155.521-91.271-197.729-116.365c-1.625-0.979-5.417-3.792-5.417-8.885c0-5.115,3.771-7.906,5.396-8.865    l36.199-21.301c48.928,29.001,113.47,67.107,150.947,88.592c6.354,3.646,13.563,5.573,20.792,5.573s14.438-1.927,20.813-5.583    c37.461-21.478,101.997-59.578,150.923-88.583L442.604,311.135z M442.583,243.542c-42.208,25.104-145.979,86.719-197.708,116.365    c-6.417,3.667-14.021,3.656-20.396,0.01C172.729,330.26,68.958,268.646,26.75,243.552c-1.625-0.979-5.417-3.792-5.417-8.885    c0-5.115,3.771-7.906,5.396-8.865l36.199-21.301c48.928,29.001,113.47,67.107,150.947,88.592    c6.354,3.646,13.563,5.573,20.792,5.573s14.438-1.927,20.813-5.583c37.461-21.478,101.997-59.578,150.923-88.583l36.202,21.302    c1.625,0.958,5.396,3.75,5.396,8.865C448,239.76,444.208,242.573,442.583,243.542z"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                </svg></div>
                                                            <div class="lower_icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="M469.333,170.667H106.667c-19.781,0-36.667,13.292-41.375,32.427c-0.021,0.073-0.052,0.156-0.073,0.229L2.771,414.177     c-0.677,2.302-0.563,4.771,0.333,7C9.646,437.469,25.167,448,42.667,448h362.667c19.104,0,35.719-12.646,40.938-30.948     c0.094-0.229,0.177-0.458,0.25-0.698l63.375-189.833c0.208-0.604,0.344-1.229,0.438-1.854C511.448,220.719,512,217,512,213.333     C512,189.802,492.865,170.667,469.333,170.667z"></path>
                                                                                <path d="M9.135,285.396c0.521,0.083,1.031,0.115,1.542,0.115c4.656,0,8.865-3.052,10.219-7.635l23.771-80.271     c0.031-0.125,0.063-0.24,0.094-0.365c7.292-28.208,32.74-47.906,61.906-47.906h328.708c3.469,0,6.719-1.688,8.719-4.521     c1.99-2.823,2.49-6.448,1.333-9.719c-6.042-17-22.156-28.427-40.094-28.427h-198.25l-39.542-39.542c-2-2-4.708-3.125-7.542-3.125     H42.667C19.135,64,0,83.135,0,106.667v168.177C0,280.146,3.896,284.635,9.135,285.396z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                </svg></div>
                                                        </div>
                                                        <div class="service_text_box saas2-headline pera-content">
                                                            <h3>{{ $data->name }}</h3>
                                                            <p>{{ $data->deskripsi }}</p><br>
                                                            <p>{{ $data->alamat }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Start of footer section
       ============================================= -->
    <div class="s2-copyright text-center">
        2024 © All rights reserved by <a href="#">Mrx Team</a>
    </div>
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';

    </script>
    <link rel='stylesheet' id='elementor-post-601-css' href='{{ asset('landing/wp-content/uploads/elementor/css/post-601a0bd.css?ver=1706710117') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-591-css' href='{{ asset('landing/wp-content/uploads/elementor/css/post-591a0bd.css?ver=1706710117') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='e-animations-css' href='{{ asset('landing/wp-content/plugins/elementor/assets/lib/animations/animations.min225e.css?ver=3.19.0') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='{{ asset('landing/wp-content/plugins/revslider/public/assets/css/rs6db9d.css?ver=6.6.7') }}' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}

    </style>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/contact-form-7/includes/swv/js/index6281.js?ver=5.8.6') }}" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/themexriver.com\/appilo-theme\/saas-classic\/wp-json\/"
                , "namespace": "contact-form-7\/v1"
            }
            , "cached": "1"
        };
        /* ]]> */

    </script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/contact-form-7/includes/js/index6281.js?ver=5.8.6') }}" id="contact-form-7-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/revslider/public/assets/js/rbtools.mindb9d.js?ver=6.6.7') }}" defer async id="tp-tools-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/revslider/public/assets/js/rs6.mindb9d.js?ver=6.6.7') }}" defer async id="revmin-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/appilo-js-plugin3781.js?ver=6.2.2') }}" id="appilo-js-plugin-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/bootstrap.min3781.js?ver=6.2.2') }}" id="appilo-bootstrap-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/swiper.min3781.js?ver=6.2.2') }}" id="appilo-swiper-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/woocommerce/woocommerce3781.js?ver=6.2.2') }}" id="appilo-woocommerce-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/appilo-theme-custom.min3781.js?ver=6.2.2') }}" id="appilo-theme-custom-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/knob3781.js?ver=6.2.2') }}" id="knob-js-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/typeit3781.js?ver=6.2.2') }}" id="appilo-typeit-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/main3781.js?ver=6.2.2') }}" id="appilo-core-main-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/gym3781.js?ver=6.2.2') }}" id="appilo-gym-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/app-landing-23781.js?ver=6.2.2') }}" id="app_landing_2-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/app-land-scripts3781.js?ver=6.2.2') }}" id="app-land-scripts-new-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/prysm3781.js?ver=6.2.2') }}" id="prysm-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/itsource3781.js?ver=6.2.2') }}" id="itsource-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/digital-marketing3781.js?ver=6.2.2') }}" id="digital-marketing-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/business-expert3781.js?ver=6.2.2') }}" id="business-expert-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/seo-agency3781.js?ver=6.2.2') }}" id="seo-agency-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/appilo-resume3781.js?ver=6.2.2') }}" id="appilo-resume-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/demo-page3781.js?ver=6.2.2') }}" id="appilo-demo-page-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/countdown3781.js?ver=6.2.2') }}" id="countdown-js-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/crypto3781.js?ver=6.2.2') }}" id="crypto-js-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/nft-landing3781.js?ver=6.2.2') }}" id="nft-landing-js-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/app2-landing-scripts3781.js?ver=6.2.2') }}" id="app2-landing-js-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/itsource-23781.js?ver=6.2.2') }}" id="itsource-2-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/metisMenu.min3781.js?ver=6.2.2') }}" id="metisMenu-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/uikit.min3781.js?ver=6.2.2') }}" id="uikit-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/sass-landing3781.js?ver=6.2.2') }}" id="sass-landing-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/saas-app3781.js?ver=6.2.2') }}" id="saas-app-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/themes/appilo/js/bigo3781.js?ver=6.2.2') }}" id="bigo-js-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/elementor/assets/js/webpack.runtime.min225e.js?ver=3.19.0') }}" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/elementor/assets/js/frontend-modules.min225e.js?ver=3.19.') }}0" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2') }}" id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2') }}" id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false
                , "wpPreview": false
                , "isScriptDebug": false
            }
            , "i18n": {
                "shareOnFacebook": "Share on Facebook"
                , "shareOnTwitter": "Share on Twitter"
                , "pinIt": "Pin it"
                , "download": "Download"
                , "downloadImage": "Download image"
                , "fullscreen": "Fullscreen"
                , "zoom": "Zoom"
                , "share": "Share"
                , "playVideo": "Play Video"
                , "previous": "Previous"
                , "next": "Next"
                , "close": "Close"
                , "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right"
                , "a11yCarouselPrevSlideMessage": "Previous slide"
                , "a11yCarouselNextSlideMessage": "Next slide"
                , "a11yCarouselFirstSlideMessage": "This is the first slide"
                , "a11yCarouselLastSlideMessage": "This is the last slide"
                , "a11yCarouselPaginationBulletMessage": "Go to slide"
            }
            , "is_rtl": false
            , "breakpoints": {
                "xs": 0
                , "sm": 480
                , "md": 768
                , "lg": 1025
                , "xl": 1440
                , "xxl": 1600
            }
            , "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait"
                        , "value": 767
                        , "default_value": 767
                        , "direction": "max"
                        , "is_enabled": true
                    }
                    , "mobile_extra": {
                        "label": "Mobile Landscape"
                        , "value": 880
                        , "default_value": 880
                        , "direction": "max"
                        , "is_enabled": false
                    }
                    , "tablet": {
                        "label": "Tablet Portrait"
                        , "value": 1024
                        , "default_value": 1024
                        , "direction": "max"
                        , "is_enabled": true
                    }
                    , "tablet_extra": {
                        "label": "Tablet Landscape"
                        , "value": 1200
                        , "default_value": 1200
                        , "direction": "max"
                        , "is_enabled": false
                    }
                    , "laptop": {
                        "label": "Laptop"
                        , "value": 1366
                        , "default_value": 1366
                        , "direction": "max"
                        , "is_enabled": false
                    }
                    , "widescreen": {
                        "label": "Widescreen"
                        , "value": 2400
                        , "default_value": 2400
                        , "direction": "min"
                        , "is_enabled": false
                    }
                }
            }
            , "version": "3.19.0"
            , "is_static": false
            , "experimentalFeatures": {
                "e_optimized_assets_loading": true
                , "additional_custom_breakpoints": true
                , "block_editor_assets_optimize": true
                , "ai-layout": true
                , "landing-pages": true
                , "e_image_loading_optimization": true
                , "e_global_styleguide": true
            }
            , "urls": {
                "assets": "https:\/\/themexriver.com\/appilo-theme\/saas-classic\/wp-content\/plugins\/elementor\/assets\/"
            }
            , "swiperClass": "swiper-container"
            , "settings": {
                "page": []
                , "editorPreferences": []
            }
            , "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"]
                , "global_image_lightbox": "yes"
                , "lightbox_enable_counter": "yes"
                , "lightbox_enable_fullscreen": "yes"
                , "lightbox_enable_zoom": "yes"
                , "lightbox_enable_share": "yes"
                , "lightbox_title_src": "title"
                , "lightbox_description_src": "description"
            }
            , "post": {
                "id": 27
                , "title": "SaaS%20Classic%20%E2%80%93%20Just%20another%20Appilo%20Multipurpose%20WordPress%20Theme%20site"
                , "excerpt": ""
                , "featuredImage": false
            }
        };
        /* ]]> */

    </script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/elementor/assets/js/frontend.min225e.js?ver=3.19.0') }}" id="elementor-frontend-js"></script>
    <script type="text/javascript" src="{{ asset('landing/wp-content/plugins/appilo-core/assets/js/elementor-editor271b.js?ver=5.9') }}" id="appilo-elementor-editor-js"></script>
</body>

<!-- Mirrored from themexriver.com/appilo-theme/saas-classic/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 07:17:07 GMT -->
</html>
