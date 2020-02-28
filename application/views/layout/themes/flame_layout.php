<!DOCTYPE html>
<?php if($enable_rtl) : ?>
<html dir="rtl">
<?php else : ?>
<html lang="es-ES">
<?php endif; ?>
<head>
    <title><?php if(isset($page_title)) : ?><?php echo $page_title ?> - <?php endif; ?><?php echo $this->settings->info->site_name ?></title>         
    <meta charset="UTF-8" />
    <script>
        var BlzCookieConsent = {
            host: "worldofwarcraft.com",
            onetrustScriptUrl: "https://cdn.cookielaw.org/langswitch/c25f2f14-8a44-40bb-a8b4-f09fd8647793.js"
        };
    </script>
    <script src="https://assets.worldofwarcraft.com/static/scripts/cookie-consent.min.js?v8.0.1"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Únete a miles de héroes poderosos en Azeroth, un mundo de magia y aventuras sin fin." />
    <meta property="fb:app_id" content="175314325675" />
    <meta property="og:site_name" content="World of Warcraft" />
    <meta property="og:title" content="World of Warcraft" />
    <meta property="og:image" content="http://bnetcmsus-a.akamaihd.net/cms/template_resource/fh/FHSCSCG9CXOC1462229977849.png" />
    <meta property="og:description" content="Únete a miles de héroes poderosos en Azeroth, un mundo de magia y aventuras sin fin." />
    <meta property="og:url" content="https://worldofwarcraft.com/es-es/" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@warcraft" />
    <script>
        var dataLayer = dataLayer || [];
        dataLayer.push({
            "locale": "es-ES",
            "serverRegion": "us",
            "region": "us",
            "localeRegion": "eu",
            "project": "wow",
            "authenticated": "0"
        });
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5BZVX9');
    </script>
    <script type="text/javascript">
        window.NREUM || (NREUM = {}), __nr_require = function(t, e, n) {
            function r(n) {
                if (!e[n]) {
                    var o = e[n] = {
                        exports: {}
                    };
                    t[n][0].call(o.exports, function(e) {
                        var o = t[n][1][e];
                        return r(o || e)
                    }, o, o.exports)
                }
                return e[n].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < n.length; o++) r(n[o]);
            return r
        }({
            1: [function(t, e, n) {
                function r(t) {
                    try {
                        c.console && console.log(t)
                    } catch (e) {}
                }
                var o, i = t("ee"),
                    a = t(20),
                    c = {};
                try {
                    o = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (c.console = !0, o.indexOf("dev") !== -1 && (c.dev = !0), o.indexOf("nr_dev") !== -1 && (c.nrDev = !0))
                } catch (s) {}
                c.nrDev && i.on("internal-error", function(t) {
                    r(t.stack)
                }), c.dev && i.on("fn-err", function(t, e, n) {
                    r(n.stack)
                }), c.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(c, function(t, e) {
                    return t
                }).join(", ")))
            }, {}],
            2: [function(t, e, n) {
                function r(t, e, n, r, c) {
                    try {
                        h ? h -= 1 : o(c || new UncaughtException(t, e, n), !0)
                    } catch (f) {
                        try {
                            i("ierr", [f, s.now(), !0])
                        } catch (d) {}
                    }
                    return "function" == typeof u && u.apply(this, a(arguments))
                }

                function UncaughtException(t, e, n) {
                    this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
                }

                function o(t, e) {
                    var n = e ? null : s.now();
                    i("err", [t, n])
                }
                var i = t("handle"),
                    a = t(21),
                    c = t("ee"),
                    s = t("loader"),
                    f = t("gos"),
                    u = window.onerror,
                    d = !1,
                    p = "nr@seenError",
                    h = 0;
                s.features.err = !0, t(1), window.onerror = r;
                try {
                    throw new Error
                } catch (l) {
                    "stack" in l && (t(13), t(12), "addEventListener" in window && t(6), s.xhrWrappable && t(14), d = !0)
                }
                c.on("fn-start", function(t, e, n) {
                    d && (h += 1)
                }), c.on("fn-err", function(t, e, n) {
                    d && !n[p] && (f(n, p, function() {
                        return !0
                    }), this.thrown = !0, o(n))
                }), c.on("fn-end", function() {
                    d && !this.thrown && h > 0 && (h -= 1)
                }), c.on("internal-error", function(t) {
                    i("ierr", [t, s.now(), !0])
                })
            }, {}],
            3: [function(t, e, n) {
                t("loader").features.ins = !0
            }, {}],
            4: [function(t, e, n) {
                function r() {
                    M++, S = y.hash, this[u] = b.now()
                }

                function o() {
                    M--, y.hash !== S && i(0, !0);
                    var t = b.now();
                    this[l] = ~~this[l] + t - this[u], this[d] = t
                }

                function i(t, e) {
                    E.emit("newURL", ["" + y, e])
                }

                function a(t, e) {
                    t.on(e, function() {
                        this[e] = b.now()
                    })
                }
                var c = "-start",
                    s = "-end",
                    f = "-body",
                    u = "fn" + c,
                    d = "fn" + s,
                    p = "cb" + c,
                    h = "cb" + s,
                    l = "jsTime",
                    m = "fetch",
                    v = "addEventListener",
                    w = window,
                    y = w.location,
                    b = t("loader");
                if (w[v] && b.xhrWrappable) {
                    var g = t(10),
                        x = t(11),
                        E = t(8),
                        P = t(6),
                        O = t(13),
                        R = t(7),
                        T = t(14),
                        L = t(9),
                        j = t("ee"),
                        N = j.get("tracer");
                    t(15), b.features.spa = !0;
                    var S, M = 0;
                    j.on(u, r), j.on(p, r), j.on(d, o), j.on(h, o), j.buffer([u, d, "xhr-done", "xhr-resolved"]), P.buffer([u]), O.buffer(["setTimeout" + s, "clearTimeout" + c, u]), T.buffer([u, "new-xhr", "send-xhr" + c]), R.buffer([m + c, m + "-done", m + f + c, m + f + s]), E.buffer(["newURL"]), g.buffer([u]), x.buffer(["propagate", p, h, "executor-err", "resolve" + c]), N.buffer([u, "no-" + u]), L.buffer(["new-jsonp", "cb-start", "jsonp-error", "jsonp-end"]), a(T, "send-xhr" + c), a(j, "xhr-resolved"), a(j, "xhr-done"), a(R, m + c), a(R, m + "-done"), a(L, "new-jsonp"), a(L, "jsonp-end"), a(L, "cb-start"), E.on("pushState-end", i), E.on("replaceState-end", i), w[v]("hashchange", i, !0), w[v]("load", i, !0), w[v]("popstate", function() {
                        i(0, M > 1)
                    }, !0)
                }
            }, {}],
            5: [function(t, e, n) {
                function r(t) {}
                if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                    var o = t("ee"),
                        i = t("handle"),
                        a = t(13),
                        c = t(12),
                        s = "learResourceTimings",
                        f = "addEventListener",
                        u = "resourcetimingbufferfull",
                        d = "bstResource",
                        p = "resource",
                        h = "-start",
                        l = "-end",
                        m = "fn" + h,
                        v = "fn" + l,
                        w = "bstTimer",
                        y = "pushState",
                        b = t("loader");
                    b.features.stn = !0, t(8);
                    var g = NREUM.o.EV;
                    o.on(m, function(t, e) {
                        var n = t[0];
                        n instanceof g && (this.bstStart = b.now())
                    }), o.on(v, function(t, e) {
                        var n = t[0];
                        n instanceof g && i("bst", [n, e, this.bstStart, b.now()])
                    }), a.on(m, function(t, e, n) {
                        this.bstStart = b.now(), this.bstType = n
                    }), a.on(v, function(t, e) {
                        i(w, [e, this.bstStart, b.now(), this.bstType])
                    }), c.on(m, function() {
                        this.bstStart = b.now()
                    }), c.on(v, function(t, e) {
                        i(w, [e, this.bstStart, b.now(), "requestAnimationFrame"])
                    }), o.on(y + h, function(t) {
                        this.time = b.now(), this.startPath = location.pathname + location.hash
                    }), o.on(y + l, function(t) {
                        i("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                    }), f in window.performance && (window.performance["c" + s] ? window.performance[f](u, function(t) {
                        i(d, [window.performance.getEntriesByType(p)]), window.performance["c" + s]()
                    }, !1) : window.performance[f]("webkit" + u, function(t) {
                        i(d, [window.performance.getEntriesByType(p)]), window.performance["webkitC" + s]()
                    }, !1)), document[f]("scroll", r, {
                        passive: !0
                    }), document[f]("keypress", r, !1), document[f]("click", r, !1)
                }
            }, {}],
            6: [function(t, e, n) {
                function r(t) {
                    for (var e = t; e && !e.hasOwnProperty(u);) e = Object.getPrototypeOf(e);
                    e && o(e)
                }

                function o(t) {
                    c.inPlace(t, [u, d], "-", i)
                }

                function i(t, e) {
                    return t[1]
                }
                var a = t("ee").get("events"),
                    c = t(23)(a, !0),
                    s = t("gos"),
                    f = XMLHttpRequest,
                    u = "addEventListener",
                    d = "removeEventListener";
                e.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f.prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start", function(t, e) {
                    var n = t[1],
                        r = s(n, "nr@wrapped", function() {
                            function t() {
                                if ("function" == typeof n.handleEvent) return n.handleEvent.apply(n, arguments)
                            }
                            var e = {
                                object: t,
                                "function": n
                            }[typeof n];
                            return e ? c(e, "fn-", null, e.name || "anonymous") : n
                        });
                    this.wrapped = t[1] = r
                }), a.on(d + "-start", function(t) {
                    t[1] = this.wrapped || t[1]
                })
            }, {}],
            7: [function(t, e, n) {
                function r(t, e, n) {
                    var r = t[e];
                    "function" == typeof r && (t[e] = function() {
                        var t = r.apply(this, arguments);
                        return o.emit(n + "start", arguments, t), t.then(function(e) {
                            return o.emit(n + "end", [null, e], t), e
                        }, function(e) {
                            throw o.emit(n + "end", [e], t), e
                        })
                    })
                }
                var o = t("ee").get("fetch"),
                    i = t(20);
                e.exports = o;
                var a = window,
                    c = "fetch-",
                    s = c + "body-",
                    f = ["arrayBuffer", "blob", "json", "text", "formData"],
                    u = a.Request,
                    d = a.Response,
                    p = a.fetch,
                    h = "prototype";
                u && d && p && (i(f, function(t, e) {
                    r(u[h], e, s), r(d[h], e, s)
                }), r(a, "fetch", c), o.on(c + "end", function(t, e) {
                    var n = this;
                    e ? e.clone().arrayBuffer().then(function(t) {
                        n.rxSize = t.byteLength, o.emit(c + "done", [null, e], n)
                    }) : o.emit(c + "done", [t], n)
                }))
            }, {}],
            8: [function(t, e, n) {
                var r = t("ee").get("history"),
                    o = t(23)(r);
                e.exports = r, o.inPlace(window.history, ["pushState", "replaceState"], "-")
            }, {}],
            9: [function(t, e, n) {
                function r(t) {
                    function e() {
                        s.emit("jsonp-end", [], p), t.removeEventListener("load", e, !1), t.removeEventListener("error", n, !1)
                    }

                    function n() {
                        s.emit("jsonp-error", [], p), s.emit("jsonp-end", [], p), t.removeEventListener("load", e, !1), t.removeEventListener("error", n, !1)
                    }
                    var r = t && "string" == typeof t.nodeName && "script" === t.nodeName.toLowerCase();
                    if (r) {
                        var o = "function" == typeof t.addEventListener;
                        if (o) {
                            var a = i(t.src);
                            if (a) {
                                var u = c(a),
                                    d = "function" == typeof u.parent[u.key];
                                if (d) {
                                    var p = {};
                                    f.inPlace(u.parent, [u.key], "cb-", p), t.addEventListener("load", e, !1), t.addEventListener("error", n, !1), s.emit("new-jsonp", [t.src], p)
                                }
                            }
                        }
                    }
                }

                function o() {
                    return "addEventListener" in window
                }

                function i(t) {
                    var e = t.match(u);
                    return e ? e[1] : null
                }

                function a(t, e) {
                    var n = t.match(p),
                        r = n[1],
                        o = n[3];
                    return o ? a(o, e[r]) : e[r]
                }

                function c(t) {
                    var e = t.match(d);
                    return e && e.length >= 3 ? {
                        key: e[2],
                        parent: a(e[1], window)
                    } : {
                        key: t,
                        parent: window
                    }
                }
                var s = t("ee").get("jsonp"),
                    f = t(23)(s);
                if (e.exports = s, o()) {
                    var u = /[?&](?:callback|cb)=([^&#]+)/,
                        d = /(.*)\.([^.]+)/,
                        p = /^(\w+)(\.|$)(.*)$/,
                        h = ["appendChild", "insertBefore", "replaceChild"];
                    f.inPlace(HTMLElement.prototype, h, "dom-"), f.inPlace(HTMLHeadElement.prototype, h, "dom-"), f.inPlace(HTMLBodyElement.prototype, h, "dom-"), s.on("dom-start", function(t) {
                        r(t[0])
                    })
                }
            }, {}],
            10: [function(t, e, n) {
                var r = t("ee").get("mutation"),
                    o = t(23)(r),
                    i = NREUM.o.MO;
                e.exports = r, i && (window.MutationObserver = function(t) {
                    return this instanceof i ? new i(o(t, "fn-")) : i.apply(this, arguments)
                }, MutationObserver.prototype = i.prototype)
            }, {}],
            11: [function(t, e, n) {
                function r(t) {
                    var e = a.context(),
                        n = c(t, "executor-", e),
                        r = new f(n);
                    return a.context(r).getCtx = function() {
                        return e
                    }, a.emit("new-promise", [r, e], e), r
                }

                function o(t, e) {
                    return e
                }
                var i = t(23),
                    a = t("ee").get("promise"),
                    c = i(a),
                    s = t(20),
                    f = NREUM.o.PR;
                e.exports = a, f && (window.Promise = r, ["all", "race"].forEach(function(t) {
                    var e = f[t];
                    f[t] = function(n) {
                        function r(t) {
                            return function() {
                                a.emit("propagate", [null, !o], i), o = o || !t
                            }
                        }
                        var o = !1;
                        s(n, function(e, n) {
                            Promise.resolve(n).then(r("all" === t), r(!1))
                        });
                        var i = e.apply(f, arguments),
                            c = f.resolve(i);
                        return c
                    }
                }), ["resolve", "reject"].forEach(function(t) {
                    var e = f[t];
                    f[t] = function(t) {
                        var n = e.apply(f, arguments);
                        return t !== n && a.emit("propagate", [t, !0], n), n
                    }
                }), f.prototype["catch"] = function(t) {
                    return this.then(null, t)
                }, f.prototype = Object.create(f.prototype, {
                    constructor: {
                        value: r
                    }
                }), s(Object.getOwnPropertyNames(f), function(t, e) {
                    try {
                        r[e] = f[e]
                    } catch (n) {}
                }), a.on("executor-start", function(t) {
                    t[0] = c(t[0], "resolve-", this), t[1] = c(t[1], "resolve-", this)
                }), a.on("executor-err", function(t, e, n) {
                    t[1](n)
                }), c.inPlace(f.prototype, ["then"], "then-", o), a.on("then-start", function(t, e) {
                    this.promise = e, t[0] = c(t[0], "cb-", this), t[1] = c(t[1], "cb-", this)
                }), a.on("then-end", function(t, e, n) {
                    this.nextPromise = n;
                    var r = this.promise;
                    a.emit("propagate", [r, !0], n)
                }), a.on("cb-end", function(t, e, n) {
                    a.emit("propagate", [n, !0], this.nextPromise)
                }), a.on("propagate", function(t, e, n) {
                    this.getCtx && !e || (this.getCtx = function() {
                        if (t instanceof Promise) var e = a.context(t);
                        return e && e.getCtx ? e.getCtx() : this
                    })
                }), r.toString = function() {
                    return "" + f
                })
            }, {}],
            12: [function(t, e, n) {
                var r = t("ee").get("raf"),
                    o = t(23)(r),
                    i = "equestAnimationFrame";
                e.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i], "raf-"), r.on("raf-start", function(t) {
                    t[0] = o(t[0], "fn-")
                })
            }, {}],
            13: [function(t, e, n) {
                function r(t, e, n) {
                    t[0] = a(t[0], "fn-", null, n)
                }

                function o(t, e, n) {
                    this.method = n, this.timerDuration = isNaN(t[1]) ? 0 : +t[1], t[0] = a(t[0], "fn-", this, n)
                }
                var i = t("ee").get("timer"),
                    a = t(23)(i),
                    c = "setTimeout",
                    s = "setInterval",
                    f = "clearTimeout",
                    u = "-start",
                    d = "-";
                e.exports = i, a.inPlace(window, [c, "setImmediate"], c + d), a.inPlace(window, [s], s + d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(s + u, r), i.on(c + u, o)
            }, {}],
            14: [function(t, e, n) {
                function r(t, e) {
                    d.inPlace(e, ["onreadystatechange"], "fn-", c)
                }

                function o() {
                    var t = this,
                        e = u.context(t);
                    t.readyState > 3 && !e.resolved && (e.resolved = !0, u.emit("xhr-resolved", [], t)), d.inPlace(t, y, "fn-", c)
                }

                function i(t) {
                    b.push(t), l && (x ? x.then(a) : v ? v(a) : (E = -E, P.data = E))
                }

                function a() {
                    for (var t = 0; t < b.length; t++) r([], b[t]);
                    b.length && (b = [])
                }

                function c(t, e) {
                    return e
                }

                function s(t, e) {
                    for (var n in t) e[n] = t[n];
                    return e
                }
                t(6);
                var f = t("ee"),
                    u = f.get("xhr"),
                    d = t(23)(u),
                    p = NREUM.o,
                    h = p.XHR,
                    l = p.MO,
                    m = p.PR,
                    v = p.SI,
                    w = "readystatechange",
                    y = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"],
                    b = [];
                e.exports = u;
                var g = window.XMLHttpRequest = function(t) {
                    var e = new h(t);
                    try {
                        u.emit("new-xhr", [e], e), e.addEventListener(w, o, !1)
                    } catch (n) {
                        try {
                            u.emit("internal-error", [n])
                        } catch (r) {}
                    }
                    return e
                };
                if (s(h, g), g.prototype = h.prototype, d.inPlace(g.prototype, ["open", "send"], "-xhr-", c), u.on("send-xhr-start", function(t, e) {
                        r(t, e), i(e)
                    }), u.on("open-xhr-start", r), l) {
                    var x = m && m.resolve();
                    if (!v && !m) {
                        var E = 1,
                            P = document.createTextNode(E);
                        new l(a).observe(P, {
                            characterData: !0
                        })
                    }
                } else f.on("fn-end", function(t) {
                    t[0] && t[0].type === w || a()
                })
            }, {}],
            15: [function(t, e, n) {
                function r(t) {
                    var e = this.params,
                        n = this.metrics;
                    if (!this.ended) {
                        this.ended = !0;
                        for (var r = 0; r < d; r++) t.removeEventListener(u[r], this.listener, !1);
                        if (!e.aborted) {
                            if (n.duration = a.now() - this.startTime, 4 === t.readyState) {
                                e.status = t.status;
                                var i = o(t, this.lastSize);
                                if (i && (n.rxSize = i), this.sameOrigin) {
                                    var s = t.getResponseHeader("X-NewRelic-App-Data");
                                    s && (e.cat = s.split(", ").pop())
                                }
                            } else e.status = 0;
                            n.cbTime = this.cbTime, f.emit("xhr-done", [t], t), c("xhr", [e, n, this.startTime])
                        }
                    }
                }

                function o(t, e) {
                    var n = t.responseType;
                    if ("json" === n && null !== e) return e;
                    var r = "arraybuffer" === n || "blob" === n || "json" === n ? t.response : t.responseText;
                    return l(r)
                }

                function i(t, e) {
                    var n = s(e),
                        r = t.params;
                    r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.sameOrigin = n.sameOrigin
                }
                var a = t("loader");
                if (a.xhrWrappable) {
                    var c = t("handle"),
                        s = t(16),
                        f = t("ee"),
                        u = ["load", "error", "abort", "timeout"],
                        d = u.length,
                        p = t("id"),
                        h = t(19),
                        l = t(18),
                        m = window.XMLHttpRequest;
                    a.features.xhr = !0, t(14), f.on("new-xhr", function(t) {
                        var e = this;
                        e.totalCbs = 0, e.called = 0, e.cbTime = 0, e.end = r, e.ended = !1, e.xhrGuids = {}, e.lastSize = null, h && (h > 34 || h < 10) || window.opera || t.addEventListener("progress", function(t) {
                            e.lastSize = t.loaded
                        }, !1)
                    }), f.on("open-xhr-start", function(t) {
                        this.params = {
                            method: t[0]
                        }, i(this, t[1]), this.metrics = {}
                    }), f.on("open-xhr-end", function(t, e) {
                        "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
                    }), f.on("send-xhr-start", function(t, e) {
                        var n = this.metrics,
                            r = t[0],
                            o = this;
                        if (n && r) {
                            var i = l(r);
                            i && (n.txSize = i)
                        }
                        this.startTime = a.now(), this.listener = function(t) {
                            try {
                                "abort" === t.type && (o.params.aborted = !0), ("load" !== t.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof e.onload)) && o.end(e)
                            } catch (n) {
                                try {
                                    f.emit("internal-error", [n])
                                } catch (r) {}
                            }
                        };
                        for (var c = 0; c < d; c++) e.addEventListener(u[c], this.listener, !1)
                    }), f.on("xhr-cb-time", function(t, e, n) {
                        this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
                    }), f.on("xhr-load-added", function(t, e) {
                        var n = "" + p(t) + !!e;
                        this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
                    }), f.on("xhr-load-removed", function(t, e) {
                        var n = "" + p(t) + !!e;
                        this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this.totalCbs -= 1)
                    }), f.on("addEventListener-end", function(t, e) {
                        e instanceof m && "load" === t[0] && f.emit("xhr-load-added", [t[1], t[2]], e)
                    }), f.on("removeEventListener-end", function(t, e) {
                        e instanceof m && "load" === t[0] && f.emit("xhr-load-removed", [t[1], t[2]], e)
                    }), f.on("fn-start", function(t, e, n) {
                        e instanceof m && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = a.now()))
                    }), f.on("fn-end", function(t, e) {
                        this.xhrCbStart && f.emit("xhr-cb-time", [a.now() - this.xhrCbStart, this.onload, e], e)
                    })
                }
            }, {}],
            16: [function(t, e, n) {
                e.exports = function(t) {
                    var e = document.createElement("a"),
                        n = window.location,
                        r = {};
                    e.href = t, r.port = e.port;
                    var o = e.href.split("://");
                    !r.port && o[1] && (r.port = o[1].split("/")[0].split("@").pop().split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = e.hostname || n.hostname, r.pathname = e.pathname, r.protocol = o[0], "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname);
                    var i = !e.protocol || ":" === e.protocol || e.protocol === n.protocol,
                        a = e.hostname === document.domain && e.port === n.port;
                    return r.sameOrigin = i && (!e.hostname || a), r
                }
            }, {}],
            17: [function(t, e, n) {
                function r() {}

                function o(t, e, n) {
                    return function() {
                        return i(t, [f.now()].concat(c(arguments)), e ? null : this, n), e ? void 0 : this
                    }
                }
                var i = t("handle"),
                    a = t(20),
                    c = t(21),
                    s = t("ee").get("tracer"),
                    f = t("loader"),
                    u = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = u);
                var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    p = "api-",
                    h = p + "ixn-";
                a(d, function(t, e) {
                    u[e] = o(p + e, !0, "api")
                }), u.addPageAction = o(p + "addPageAction", !0), u.setCurrentRouteName = o(p + "routeName", !0), e.exports = newrelic, u.interaction = function() {
                    return (new r).get()
                };
                var l = r.prototype = {
                    createTracer: function(t, e) {
                        var n = {},
                            r = this,
                            o = "function" == typeof e;
                        return i(h + "tracer", [f.now(), t, n], r),
                            function() {
                                if (s.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try {
                                    return e.apply(this, arguments)
                                } catch (t) {
                                    throw s.emit("fn-err", [arguments, this, t], n), t
                                } finally {
                                    s.emit("fn-end", [f.now()], n)
                                }
                            }
                    }
                };
                a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(t, e) {
                    l[e] = o(h + e)
                }), newrelic.noticeError = function(t) {
                    "string" == typeof t && (t = new Error(t)), i("err", [t, f.now()])
                }
            }, {}],
            18: [function(t, e, n) {
                e.exports = function(t) {
                    if ("string" == typeof t && t.length) return t.length;
                    if ("object" == typeof t) {
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
                        if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                            return JSON.stringify(t).length
                        } catch (e) {
                            return
                        }
                    }
                }
            }, {}],
            19: [function(t, e, n) {
                var r = 0,
                    o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                o && (r = +o[1]), e.exports = r
            }, {}],
            20: [function(t, e, n) {
                function r(t, e) {
                    var n = [],
                        r = "",
                        i = 0;
                    for (r in t) o.call(t, r) && (n[i] = e(r, t[r]), i += 1);
                    return n
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            21: [function(t, e, n) {
                function r(t, e, n) {
                    e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                    for (var r = -1, o = n - e || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[e + r];
                    return i
                }
                e.exports = r
            }, {}],
            22: [function(t, e, n) {
                e.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            23: [function(t, e, n) {
                function r(t) {
                    return !(t && t instanceof Function && t.apply && !t[a])
                }
                var o = t("ee"),
                    i = t(21),
                    a = "nr@original",
                    c = Object.prototype.hasOwnProperty,
                    s = !1;
                e.exports = function(t, e) {
                    function n(t, e, n, o) {
                        function nrWrapper() {
                            var r, a, c, s;
                            try {
                                a = this, r = i(arguments), c = "function" == typeof n ? n(r, a) : n || {}
                            } catch (f) {
                                p([f, "", [r, a, o], c])
                            }
                            u(e + "start", [r, a, o], c);
                            try {
                                return s = t.apply(a, r)
                            } catch (d) {
                                throw u(e + "err", [r, a, d], c), d
                            } finally {
                                u(e + "end", [r, a, s], c)
                            }
                        }
                        return r(t) ? t : (e || (e = ""), nrWrapper[a] = t, d(t, nrWrapper), nrWrapper)
                    }

                    function f(t, e, o, i) {
                        o || (o = "");
                        var a, c, s, f = "-" === o.charAt(0);
                        for (s = 0; s < e.length; s++) c = e[s], a = t[c], r(a) || (t[c] = n(a, f ? c + o : o, i, c))
                    }

                    function u(n, r, o) {
                        if (!s || e) {
                            var i = s;
                            s = !0;
                            try {
                                t.emit(n, r, o, e)
                            } catch (a) {
                                p([a, n, r, o])
                            }
                            s = i
                        }
                    }

                    function d(t, e) {
                        if (Object.defineProperty && Object.keys) try {
                            var n = Object.keys(t);
                            return n.forEach(function(n) {
                                Object.defineProperty(e, n, {
                                    get: function() {
                                        return t[n]
                                    },
                                    set: function(e) {
                                        return t[n] = e, e
                                    }
                                })
                            }), e
                        } catch (r) {
                            p([r])
                        }
                        for (var o in t) c.call(t, o) && (e[o] = t[o]);
                        return e
                    }

                    function p(e) {
                        try {
                            t.emit("internal-error", e)
                        } catch (n) {}
                    }
                    return t || (t = o), n.inPlace = f, n.flag = a, n
                }
            }, {}],
            ee: [function(t, e, n) {
                function r() {}

                function o(t) {
                    function e(t) {
                        return t && t instanceof r ? t : t ? s(t, c, i) : i()
                    }

                    function n(n, r, o, i) {
                        if (!p.aborted || i) {
                            t && t(n, r, o);
                            for (var a = e(o), c = l(n), s = c.length, f = 0; f < s; f++) c[f].apply(a, r);
                            var d = u[y[n]];
                            return d && d.push([b, n, r, a]), a
                        }
                    }

                    function h(t, e) {
                        w[t] = l(t).concat(e)
                    }

                    function l(t) {
                        return w[t] || []
                    }

                    function m(t) {
                        return d[t] = d[t] || o(n)
                    }

                    function v(t, e) {
                        f(t, function(t, n) {
                            e = e || "feature", y[n] = e, e in u || (u[e] = [])
                        })
                    }
                    var w = {},
                        y = {},
                        b = {
                            on: h,
                            emit: n,
                            get: m,
                            listeners: l,
                            context: e,
                            buffer: v,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (u.api || u.feature) && (p.aborted = !0, u = p.backlog = {})
                }
                var c = "nr@context",
                    s = t("gos"),
                    f = t(20),
                    u = {},
                    d = {},
                    p = e.exports = o();
                p.backlog = u
            }, {}],
            gos: [function(t, e, n) {
                function r(t, e, n) {
                    if (o.call(t, e)) return t[e];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, e, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return t[e] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            handle: [function(t, e, n) {
                function r(t, e, n, r) {
                    o.buffer([t], r), o.emit(t, e, n)
                }
                var o = t("ee").get("handle");
                e.exports = r, r.ee = o
            }, {}],
            id: [function(t, e, n) {
                function r(t) {
                    var e = typeof t;
                    return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = t("gos");
                e.exports = r
            }, {}],
            loader: [function(t, e, n) {
                function r() {
                    if (!x++) {
                        var t = g.info = NREUM.info,
                            e = p.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && e)) return u.abort();
                        f(y, function(e, n) {
                            t[e] || (t[e] = n)
                        }), s("mark", ["onload", a() + g.offset], null, "api");
                        var n = p.createElement("script");
                        n.src = "https://" + t.agent, e.parentNode.insertBefore(n, e)
                    }
                }

                function o() {
                    "complete" === p.readyState && i()
                }

                function i() {
                    s("mark", ["domContent", a() + g.offset], null, "api")
                }

                function a() {
                    return E.exists && performance.now ? Math.round(performance.now()) : (c = Math.max((new Date).getTime(), c)) - g.offset
                }
                var c = (new Date).getTime(),
                    s = t("handle"),
                    f = t(20),
                    u = t("ee"),
                    d = window,
                    p = d.document,
                    h = "addEventListener",
                    l = "attachEvent",
                    m = d.XMLHttpRequest,
                    v = m && m.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: d.setImmediate,
                    CT: clearTimeout,
                    XHR: m,
                    REQ: d.Request,
                    EV: d.Event,
                    PR: d.Promise,
                    MO: d.MutationObserver
                };
                var w = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-spa-1071.min.js"
                    },
                    b = m && v && v[h] && !/CriOS/.test(navigator.userAgent),
                    g = e.exports = {
                        offset: c,
                        now: a,
                        origin: w,
                        features: {},
                        xhrWrappable: b
                    };
                t(17), p[h] ? (p[h]("DOMContentLoaded", i, !1), d[h]("load", r, !1)) : (p[l]("onreadystatechange", o), d[l]("onload", r)), s("mark", ["firstbyte", c], null, "api");
                var x = 0,
                    E = t(22)
            }, {}]
        }, {}, ["loader", 2, 15, 5, 3, 4]);;
        NREUM.info = {
            beacon: "bam.nr-data.net",
            errorBeacon: "bam.nr-data.net",
            licenseKey: "fbd2e57ca0",
            applicationID: "58421669",
            sa: 1
        }
    </script>
    <script>
        var cookieConsentEnabled = JSON.parse("true");
        var performanceStorageAllowed = typeof BlzCookieConsent !== "undefined" && typeof BlzCookieConsent.isPerformanceStorageAllowed !== "undefined" && BlzCookieConsent.isPerformanceStorageAllowed();
        var loadOptimizely = cookieConsentEnabled === false || performanceStorageAllowed;
        if (loadOptimizely) {
            var script = document.createElement("script");
            script.src = "https://cdn.optimizely.com/js/8520856750.js";
            document.head.appendChild(script);
        }
    </script>
    <link rel="search" href="/opensearch/opensearch.xml" title="Search World of Warcraft" type="application/opensearchdescription+xml">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://assets.worldofwarcraft.com/static/core.c2d168174ff6c27dbb32.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://assets.worldofwarcraft.com/static/styles/navbar.css?v8.0.1">
    <link rel="stylesheet" href="https://assets.worldofwarcraft.com/static/styles/photoswipe.css?v8.0.1">
    <link rel="stylesheet" href="https://assets.worldofwarcraft.com/static/styles/izimodal.css?v8.0.1">
    <link rel="stylesheet" href="https://assets.worldofwarcraft.com/static/styles/simplebar.css?v8.0.1">
    <link href="https://assets.worldofwarcraft.com/static/3.942f70423ea621fe3baa.css" rel="stylesheet" type="text/css" />
    <script src="https://assets.worldofwarcraft.com/static/core.69b4058c60ed2bf03fa6.js"></script>
    <!-- CODE INCLUDES -->
    <?php echo $cssincludes; ?>

    <script id="init">
        window.trigger("init");
    </script>
    <!-- SCRIPTS -->
    <script type="text/javascript">
    var global_base_url = "<?php echo site_url('/') ?>";
    var global_hash = "<?php echo $this->security->get_csrf_hash() ?>";
    </script>
</head>

<body class="es-es">
    <div class="body">
        <div class="page">
            <div class="BnetNav BnetNav--wow">
                <div class="Sticky BnetNav-sticky" media-nav="is-disabled">
                    <div class="Sticky-content">
                        <div class="BnetNav-navbar">
                            <div class="Navbar is-compact is-auto is-custom-logo" data-region="us" data-locale="es-es" data-hash="d0c6275ff3e7ff52f20344207160e1c4b2437836" data-service-type="l" data-service-host="https://navbar.blizzard.com" data-service-version="4.3.2" data-middleware-version="4.3.3" data-notification-url="/es-es/navbar/notifications.json" data-support-url="https://us.battle.net/support/update/json?callback=" data-current-site="games">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Navbar-embedded">
                                    <g id="Navbar-icon-new_window">
                                        <path d="M21.737,39.117c3.938-6.052,8.981-10.014,19.089-10.014v7.024L53.708,24.95   L40.826,13.77v6.72C26.135,20.489,21.737,32.97,21.737,39.117L21.737,39.117z" />
                                        <path d="M48.792,35.739V47.23c0,0.276-0.224,0.5-0.5,0.5h-35c-0.276,0-0.5-0.224-0.5-0.5v-26   c0-0.276,0.224-0.5,0.5-0.5h12.624l5-5H13.292c-3.033,0-5.5,2.467-5.5,5.5v26c0,3.033,2.467,5.5,5.5,5.5h35   c3.033,0,5.5-2.467,5.5-5.5V30.739L48.792,35.739z" />
                                    </g>
                                    <g id="Navbar-icon-chat">
                                        <path d="M20.5,53.25c-0.333,0-0.67-0.067-0.988-0.204c-0.917-0.395-1.511-1.298-1.511-2.296   v-9H14.5c-3.033,0-5.5-2.467-5.5-5.5v-20c0-3.033,2.467-5.5,5.5-5.5h35c3.033,0,5.5,2.467,5.5,5.5v20c0,3.033-2.467,5.5-5.5,5.5   H33.653L22.219,52.566C21.746,53.014,21.127,53.25,20.5,53.25z M14.5,15.75c-0.276,0-0.5,0.224-0.5,0.5v20   c0,0.276,0.224,0.5,0.5,0.5h6.001c1.381,0,2.5,1.119,2.5,2.5v5.694l7.938-7.51c0.464-0.439,1.079-0.684,1.718-0.684H49.5   c0.276,0,0.5-0.224,0.5-0.5v-20c0-0.276-0.224-0.5-0.5-0.5H14.5z" />
                                    </g>
                                    <g id="Navbar-icon-download">
                                        <polygon points="37,31.065 37,22 27,22 27,31.065 20.385,31.065 31.979,43.547    43.615,31.065  " />
                                        <path d="M49.5,55h-35C11.467,55,9,52.533,9,49.5v-35C9,11.467,11.467,9,14.5,9h35   c3.033,0,5.5,2.467,5.5,5.5v35C55,52.533,52.533,55,49.5,55z M14.5,14c-0.276,0-0.5,0.224-0.5,0.5v35c0,0.276,0.224,0.5,0.5,0.5h35   c0.276,0,0.5-0.224,0.5-0.5v-35c0-0.276-0.224-0.5-0.5-0.5H14.5z" />
                                    </g>
                                    <g id="Navbar-icon-dropdown">
                                        <path d="M31.973,47.916L31.973,47.916c-0.873,0-1.702-0.38-2.272-1.041l-18.78-21.78    c-1.082-1.255-0.942-3.149,0.313-4.231c1.254-1.083,3.149-0.941,4.231,0.313l16.509,19.146l16.562-19.198    c1.081-1.255,2.976-1.396,4.231-0.312c1.255,1.082,1.395,2.977,0.312,4.231L34.245,46.875    C33.675,47.536,32.846,47.916,31.973,47.916z" />
                                    </g>
                                    <g id="Navbar-icon-grid9">
                                        <rect x="26" y="26" width="12" height="12" />
                                        <rect x="42" y="10" width="12" height="12" />
                                        <rect x="26" y="42" width="12" height="12" />
                                        <rect x="10" y="26" width="12" height="12" />
                                        <rect x="26" y="10" width="12" height="12" />
                                        <rect x="10" y="42" width="12" height="12" />
                                        <rect x="42" y="42" width="12" height="12" />
                                        <rect x="42" y="26" width="12" height="12" />
                                        <rect x="10" y="10" width="12" height="12" />
                                    </g>
                                    <g id="Navbar-icon-bnet">
                                        <path d="M39.086,22.373c-0.746-0.317-0.623-0.247-0.623-0.247s-0.08-0.088,1.069,0.816    c1.75,1.377,2.907,3.603,3.532,5.768c0.768,2.668,0.204,6.369-2.228,10.053c-5.185,7.856-13.558,12.445-15.226,9.722    c-0.846-1.381,1.926-4.122,1.926-4.122l-1.675,0.91c0,0-2.931,3.497-2.395,5.628c0.915,3.636,10.992,1.171,18.285-10.746    C48.3,29.458,41.053,23.212,39.086,22.373z"></path>
                                        <path d="M39.047,22.276c-0.746-0.318-0.899-0.293-0.899-0.293s0.066-0.025,1.215,0.879    c1.75,1.377,3.038,3.586,3.662,5.752c0.769,2.667,0.205,6.369-2.228,10.054c-5.185,7.856-13.557,12.444-15.226,9.722    c-0.846-1.382,1.925-4.122,1.925-4.122l-1.675,0.909c0,0-2.931,3.497-2.394,5.628c0.914,3.635,10.991,1.17,18.285-10.746    C48.26,29.36,41.014,23.115,39.047,22.276z"></path>
                                        <path d="M36.708,41.727c0,0,0.115-0.025-1.242,0.517c-2.067,0.827-4.573,0.717-6.762,0.174    c-2.694-0.667-5.617-3.007-7.592-6.955c-4.211-8.418-3.999-17.964-0.808-18.048c1.621-0.042,2.608,3.729,2.608,3.729l0.05-1.905    c0,0-1.563-4.288-3.676-4.889c-3.606-1.026-6.51,8.934,0.164,21.208c5.991,11.02,15.023,7.868,16.733,6.583    C36.831,41.655,36.708,41.727,36.708,41.727z"></path>
                                        <path d="M35.626,42.138c-2.068,0.826-4.625,0.838-6.812,0.295c-2.694-0.667-5.617-3.007-7.593-6.955    c-4.211-8.419-3.999-17.965-0.807-18.048c1.62-0.042,2.608,3.729,2.608,3.729l0.05-1.905c0,0-1.564-4.287-3.677-4.888    c-3.606-1.026-6.51,8.934,0.163,21.208c5.992,11.02,15.024,7.867,16.733,6.583c0.639-0.479,0.701-0.627,0.703-0.632    C36.991,41.532,36.928,41.618,35.626,42.138z"></path>
                                        <path d="M34.536,18.464c-12.539-0.321-14.326,9.077-14.068,11.2c0.098,0.805,0.097,0.663,0.097,0.663    s-0.036,0.113,0.174-1.333c0.317-2.203,1.667-4.319,3.23-5.943c1.925-1.999,5.413-3.361,9.82-3.097    c9.396,0.562,17.556,5.52,16.033,8.325c-0.774,1.423-4.534,0.393-4.534,0.393l1.625,0.996c0,0,4.494,0.79,6.072-0.74    C55.676,26.317,48.503,18.823,34.536,18.464z"></path>
                                        <path d="M34.473,18.552c-12.54-0.321-14.325,9.077-14.068,11.2c0.096,0.793,0.193,0.921,0.196,0.925    c-0.003-0.005-0.047-0.102,0.154-1.492c0.318-2.204,1.586-4.424,3.15-6.047c1.925-1.999,5.413-3.361,9.82-3.098    c9.396,0.563,17.556,5.52,16.032,8.325c-0.773,1.424-4.532,0.394-4.532,0.394l1.625,0.996c0,0,4.495,0.79,6.072-0.74    C55.612,26.405,48.44,18.909,34.473,18.552z"></path>
                                        <path d="M37.273,18.685c-0.865-1.643-3.493-6.421-6.087-8.961c-3.813-3.734-5.904-2.135-6.733-1.241    c-4.759,5.13-1.827,19.291,1.188,27.814c0.447,1.266,0.935,2.507,1.449,3.718c0.223-0.09,0.552-0.229,0.903-0.398    c0.387-0.188,0.682-0.345,0.859-0.442c-0.113-0.321-0.227-0.644-0.338-0.972c-2.773-8.138-5.046-21.607-0.404-24.862    c1.289-0.905,2.777,0.146,3.931,1.247c1.059,1.013,2.408,2.979,3.044,3.943L37.273,18.685z M33.329,49.452l-0.967,0.669    c2.03,3.24,4.031,5.833,5.602,7.46c0.914,0.947,1.553,0.959,1.553,0.959C38.693,57.867,36.151,54.789,33.329,49.452z     M29.644,43.562c-0.208,0.165-0.52,0.401-0.676,0.519c0.679,1.355,1.382,2.653,2.092,3.88l0.117-0.069l1.005-0.708    c-0.619-1.282-1.243-2.666-1.856-4.155C30.166,43.153,29.872,43.382,29.644,43.562z"></path>
                                        <path d="M36.207,18.54c0.739,0.048,1.142,0.101,1.145,0.101c-0.894-1.694-3.493-6.395-6.058-8.907    C27.48,6,25.389,7.6,24.56,8.494c-4.76,5.129-1.827,19.292,1.187,27.813c0.448,1.266,0.936,2.51,1.45,3.724    c0.223-0.09,0.552-0.229,0.903-0.4c0.387-0.188,0.682-0.345,0.86-0.442c-0.114-0.323-0.228-0.648-0.34-0.977    c-2.774-8.138-5.046-21.606-0.404-24.862c1.29-0.904,2.778,0.146,3.93,1.248c1.04,0.993,2.356,2.903,3.008,3.887    C35.19,18.487,35.617,18.503,36.207,18.54z M33.434,49.443c-0.065,0.048-0.276,0.202-0.554,0.393    c-0.1,0.069-0.335,0.223-0.435,0.288c2.042,3.274,4.055,5.896,5.632,7.532c0.914,0.946,1.621,0.978,1.621,0.978    C38.872,57.959,36.288,54.833,33.434,49.443z M29.731,43.567c-0.271,0.215-0.636,0.497-0.663,0.518    c0.668,1.338,1.36,2.621,2.059,3.836c0.063-0.033,0.231-0.123,0.591-0.335c0.342-0.201,0.524-0.32,0.591-0.363    c-0.63-1.299-1.263-2.702-1.885-4.21C30.394,43.036,30.033,43.325,29.731,43.567z"></path>
                                        <path d="M55.438,36.413c-2.063-6.686-15.794-11.227-24.682-12.877c-1.32-0.245-2.638-0.445-3.944-0.605    c-0.034,0.238-0.078,0.593-0.107,0.981c-0.031,0.429-0.041,0.763-0.046,0.965c0.334,0.061,0.671,0.126,1.011,0.193    c8.435,1.666,21.234,6.433,21.733,12.081c0.138,1.57-1.515,2.333-3.046,2.781c-1.406,0.411-3.783,0.595-4.937,0.665l-1.225,1.819    c1.859,0.073,7.308,0.186,10.802-0.791C56.136,40.19,55.797,37.58,55.438,36.413z M6.16,23.567    c-1.276,0.316-1.607,0.864-1.607,0.864c1.001-0.378,4.964-1.045,11.04-0.812l-0.077-1.178C11.655,22.577,8.373,23.016,6.16,23.567    z M22.346,22.527c-1.476-0.087-2.916-0.128-4.3-0.129l-0.003,0.113l0.056,1.25c1.409,0.104,2.909,0.256,4.492,0.469    c-0.016-0.114-0.075-0.521-0.126-0.874C22.422,23.069,22.366,22.675,22.346,22.527z"></path>
                                        <path d="M45.427,23.206c-0.829,1.221-1.752,2.502-2.778,3.829c0.019,0.008,0.448,0.176,0.827,0.326    c0.318,0.126,0.731,0.293,0.782,0.314c0.859-1.299,1.654-2.59,2.379-3.85l-0.099-0.06L45.427,23.206z M40.135,30.128    c-0.221,0.259-0.444,0.519-0.673,0.779c-5.66,6.471-16.188,15.173-21.329,12.781c-1.428-0.664-1.263-2.477-0.885-4.028    c0.357-1.462,1.431-3.689,1.933-4.689l-0.95-1.973c-0.941,1.486-3.85,6.255-4.768,9.834c-1.327,5.168,1.104,6.18,2.293,6.451    c6.821,1.557,17.619-8.064,23.493-14.936c0.872-1.021,1.704-2.063,2.496-3.114c-0.189-0.147-0.475-0.363-0.797-0.582    C40.592,30.409,40.308,30.233,40.135,30.128z M51.575,11.207c-0.171,1.05-1.567,4.787-4.774,9.897l1.063,0.504    c1.788-3.376,3.032-6.404,3.657-8.577C51.884,11.767,51.575,11.207,51.575,11.207z"></path>
                                        <path d="M45.373,23.115c-0.81,1.194-1.709,2.445-2.705,3.737c0.069,0.026,0.482,0.184,0.825,0.318    c0.296,0.116,0.693,0.287,0.781,0.325c0.827-1.252,1.595-2.495,2.3-3.711c-0.092-0.054-0.35-0.206-0.582-0.341    C45.737,23.295,45.462,23.158,45.373,23.115z M51.566,11.004c-0.172,1.053-1.587,4.852-4.827,10.018    c0.079,0.036,0.31,0.14,0.605,0.281c0.11,0.052,0.367,0.186,0.475,0.241c1.815-3.407,3.081-6.463,3.708-8.648    C51.891,11.632,51.566,11.004,51.566,11.004z M40.092,30.028c-0.222,0.259-0.446,0.519-0.674,0.78    c-5.66,6.471-16.188,15.172-21.329,12.781c-1.429-0.665-1.263-2.479-0.885-4.028c0.351-1.439,1.397-3.62,1.909-4.642    c-0.023-0.045-0.217-0.421-0.472-0.94c-0.267-0.545-0.444-0.933-0.487-1.03c-0.974,1.542-3.829,6.244-4.737,9.783    c-1.326,5.17,1.104,6.181,2.293,6.452c6.823,1.558,17.621-8.064,23.494-14.936c0.872-1.02,1.704-2.063,2.499-3.114    c-0.19-0.148-0.474-0.363-0.794-0.581C40.55,30.31,40.265,30.132,40.092,30.028z"></path>
                                        <path d="M55.374,36.502c-2.062-6.687-15.793-11.229-24.682-12.878c-1.318-0.245-2.636-0.444-3.944-0.605    c-0.034,0.237-0.078,0.593-0.106,0.981c-0.031,0.429-0.042,0.764-0.046,0.966c0.334,0.062,0.671,0.125,1.011,0.193    c8.434,1.667,21.234,6.433,21.733,12.081c0.139,1.569-1.515,2.332-3.046,2.78c-1.376,0.402-3.683,0.588-4.862,0.661l0.002,0.003    c0,0-0.259,0.387-0.603,0.898c-0.391,0.583-0.634,0.919-0.634,0.919l-0.008,0.006c1.912,0.072,7.285,0.172,10.745-0.794    C56.073,40.278,55.734,37.667,55.374,36.502z M22.305,22.61c-1.462-0.088-2.889-0.132-4.262-0.136    c-0.004,0.098-0.011,0.345-0.005,0.682c0.007,0.397,0.018,0.617,0.022,0.7c1.411,0.104,2.911,0.255,4.491,0.466    c-0.004-0.025-0.082-0.513-0.141-0.915C22.333,22.881,22.309,22.648,22.305,22.61z M15.471,22.512    c-3.896,0.128-7.209,0.562-9.432,1.115c-1.276,0.318-1.658,0.914-1.658,0.914c1.003-0.379,5.036-1.058,11.18-0.826    c-0.008-0.084-0.032-0.33-0.058-0.659C15.494,22.934,15.478,22.636,15.471,22.512z"></path>
                                    </g>
                                    <g id="Navbar-icon-question">
                                        <path d="M32,14c9.925,0,18,8.075,18,18s-8.075,18-18,18s-18-8.075-18-18S22.075,14,32,14 M32,9    C19.297,9,9,19.297,9,32s10.297,23,23,23s23-10.297,23-23S44.703,9,32,9L32,9z" />
                                        <path d="M29.258,36.167v-0.284c0-3.618,0.983-4.444,6.03-5.047c2.6-0.317,3.523-1.047,3.523-2.824    c0-1.08-0.349-1.84-1.017-2.221c-0.73-0.414-2.315-0.603-5.077-0.603c-5.68,0-6.314,0.349-6.314,3.427v0.635H22.18v-0.54    c0-3.078,0.317-4.221,1.491-5.268c1.206-1.112,3.397-1.46,8.951-1.46c5.776,0,7.901,0.444,9.233,1.871    c0.795,0.858,1.111,2.095,1.111,4.285c0,2.474-0.507,3.872-1.681,4.727c-0.858,0.572-2.762,1.079-5.301,1.398    c-2.125,0.286-2.537,0.603-2.537,1.903H29.258z M33.667,43.864h-4.595V39.27h4.595V43.864z" />
                                    </g>
                                    <g id="Navbar-icon-settings">
                                        <path d="M53.391,27.618L47.21,26.98c-0.703-2.088-1.833-3.977-3.285-5.579l2.562-5.727    c-2.183-1.939-4.757-3.444-7.59-4.387l-3.72,5.14c-1.027-0.205-2.089-0.314-3.177-0.314c-1.088,0-2.15,0.11-3.177,0.314    l-3.72-5.139c-2.832,0.943-5.406,2.448-7.589,4.387l2.562,5.726c-1.453,1.602-2.583,3.491-3.286,5.579l-6.18,0.638    c-0.289,1.416-0.44,2.881-0.44,4.382c0,1.501,0.152,2.966,0.44,4.382l6.179,0.638c0.703,2.089,1.833,3.978,3.286,5.58    l-2.562,5.725c2.183,1.939,4.757,3.444,7.589,4.387l3.719-5.139c1.028,0.205,2.09,0.315,3.178,0.315    c1.088,0,2.151-0.11,3.178-0.315l3.719,5.139c2.833-0.943,5.407-2.448,7.59-4.387l-2.562-5.726    c1.452-1.602,2.582-3.49,3.285-5.579l6.18-0.638c0.289-1.416,0.44-2.881,0.44-4.382C53.831,30.499,53.679,29.034,53.391,27.618z     M32,41.931c-5.485,0-9.931-4.446-9.931-9.931c0-5.485,4.446-9.931,9.931-9.931c5.485,0,9.931,4.446,9.931,9.931    C41.931,37.485,37.485,41.931,32,41.931z" />
                                    </g>
                                    <g id="Navbar-icon-gifts">
                                        <path d="M49.5,24.25h-2.934C48.061,22.681,49,20.54,49,18.219c0-4.591-3.893-8.469-8.5-8.469   c-4.687,0-8.5,3.658-8.5,8.154c0-4.496-3.799-8.154-8.469-8.154c-4.59,0-8.469,3.878-8.469,8.469c0,2.321,0.939,4.462,2.434,6.031   H14.5c-2.757,0-5,2.243-5,5v7c0,1.104,0.896,2,2,2h2v11c0,2.757,2.243,5,5,5h27c2.757,0,5-2.243,5-5v-11h2c1.104,0,2-0.896,2-2v-7   C54.5,26.493,52.257,24.25,49.5,24.25z M36,17.904c0-2.291,2.019-4.154,4.5-4.154c2.397,0,4.5,2.088,4.5,4.469   c0,2.465-2.015,4.627-4.311,4.627H36V17.904z M23.531,13.75c2.464,0,4.469,1.863,4.469,4.154v4.942h-4.627   c-2.296,0-4.311-2.162-4.311-4.627C19.062,15.838,21.15,13.75,23.531,13.75z M13.5,29.25c0-0.551,0.449-1,1-1H30v6H15.5h-2V29.25z    M17.5,49.25v-11H30v12H18.5C17.949,50.25,17.5,49.801,17.5,49.25z M46.5,49.25c0,0.551-0.449,1-1,1H34v-12h12.5V49.25z    M50.5,34.25h-2H34v-6h15.5c0.551,0,1,0.449,1,1V34.25z" />
                                    </g>
                                    <g id="Navbar-icon-logout">
                                        <path d="M36.214,47.33c-0.64,0-1.28-0.244-1.768-0.732c-0.977-0.976-0.977-2.559,0-3.535L45.507,32    L34.446,20.94c-0.977-0.977-0.977-2.56,0-3.536c0.977-0.977,2.559-0.976,3.536,0l12.829,12.828    c0.469,0.469,0.732,1.105,0.732,1.768s-0.263,1.299-0.732,1.768L37.981,46.597C37.494,47.085,36.854,47.33,36.214,47.33z" />
                                        <path d="M49.043,34.5H24.964c-1.381,0-2.5-1.119-2.5-2.5s1.119-2.5,2.5-2.5h24.079    c1.381,0,2.5,1.119,2.5,2.5S50.424,34.5,49.043,34.5z" />
                                        <path d="M25.35,52.781h-7.506c-2.97,0-5.387-2.416-5.387-5.385v-30.79c0-2.97,2.417-5.387,5.387-5.387    h7.506c1.381,0,2.5,1.119,2.5,2.5s-1.119,2.5-2.5,2.5h-7.506c-0.213,0-0.387,0.173-0.387,0.387v30.79    c0,0.212,0.173,0.385,0.387,0.385h7.506c1.381,0,2.5,1.119,2.5,2.5S26.731,52.781,25.35,52.781z" />
                                    </g>
                                    <g id="Navbar-icon-char">
                                        <path d="M39.878,55.81H24.56c-1.399,0-2.533-1.134-2.533-2.533v-4.62c0-3.979-1.235-5.792-4.722-6.928    c-1.043-0.339-1.749-1.312-1.749-2.409v-4.759c0-3.38,2.783-6.131,6.204-6.131h20.918c3.421,0,6.204,2.75,6.204,6.131v4.759    c0,1.097-0.706,2.069-1.749,2.409c-3.486,1.136-4.722,2.948-4.722,6.928v4.62C42.412,54.676,41.278,55.81,39.878,55.81z     M27.093,50.744h10.252v-2.086c0-5.504,2.067-9.065,6.47-11.07v-3.026c0-0.587-0.51-1.064-1.137-1.064H21.76    c-0.627,0-1.137,0.477-1.137,1.064v3.026c4.404,2.005,6.471,5.567,6.471,11.07V50.744z M46.348,39.32h0.01H46.348z" />
                                        <path d="M32.169,25.192c-4.762,0-8.636-3.813-8.636-8.5c0-4.688,3.874-8.502,8.636-8.502    c4.762,0,8.635,3.814,8.635,8.502C40.804,21.379,36.93,25.192,32.169,25.192z M32.169,12.243c-2.527,0-4.583,1.996-4.583,4.449    c0,2.452,2.056,4.447,4.583,4.447c2.527,0,4.582-1.995,4.582-4.447C36.751,14.239,34.696,12.243,32.169,12.243z" />
                                    </g>
                                    <g id="Navbar-icon-blizz">
                                        <path d="M59,15.206" />
                                        <path d="M33.083,41.167c0.312,0.195,1.304,0.883,1.519,1.036   c0.056,0.328,0.077,0.686,0.149,1.025c-0.348-0.133-5.094-0.064-5.482,0.036c-0.287,0.113-0.487,0.512-0.702,0.512   c-0.312,0-0.512-0.369-0.63-0.482c0.41-0.512,0.722-1.081,1.332-1.373c0.135-0.919,0.197-1.848,0.184-2.776l-0.01-20.988   c0.004-0.236-0.022-0.472-0.077-0.702c-0.184-0.512-1.826-1.148-1.998-1.296c0.1-0.194,0.223-0.375,0.369-0.538   c1.735,0.209,4.49,0.209,6.225,0c0.371,0.221,0.564,0.652,0.482,1.076c-0.558,0.179-1.537,0.692-1.48,1.445L33.083,41.167z" />
                                        <path d="M37.925,23.879l-0.737-0.192l-0.415-4.772l0.236-3.33l8.415,0.117l0.145,7.736   L38.833,40.5l7.447-5.003l-0.613,7.669l-9.75-0.25l2.25-11.5l5.167-13.75c0,0-0.542-0.083-2.833,0   C38.208,17.75,37.925,23.879,37.925,23.879z" />
                                        <polygon points="48.375,22.5 46.688,23.625 46.799,19.398 46.75,15.585 56.431,15.585    54,23.744 49,43.583 57.53,40.417 57.5,46.917 46.833,46.88 47.667,33.713 52.833,17.969 50.066,17.969  " />
                                        <path d="M20.438,15.313l0.125,1.063c0,0,2.938,1.563,1.563,2.688   c-0.063,2.125,0,26.688,0,26.688L19.5,48.563l4.625-1.125l18.5,1.5l-0.827-4.793l-15.986,0.963c0,0,0-24.42,0-26.482   S20.438,15.313,20.438,15.313z" />
                                        <path d="M19.188,31.188c0-4-2.596-4.783-2.596-4.783s2.659-3.029,2.659-6.779   s-3.875-3.75-3.875-3.75H6.75l-0.125,0.688L8,18.313v29.25l-1.183,0.706L7.37,48.78l2.692,0.095   C21.5,48.875,19.188,35.188,19.188,31.188z M15.188,40.813c-0.438,4-3.545,4.459-3.545,4.459l1.014-1.834V28.556   C15.377,29.55,15.625,36.813,15.188,40.813z M12.438,25.108V19c0,0,2.938-0.375,2.938,2.875S12.438,25.108,12.438,25.108z" />
                                    </g>
                                    <g id="Navbar-icon-account-add">
                                        <path d="M30.428,40.224c-5.981,0-10.848-4.866-10.848-10.848s4.866-10.848,10.848-10.848    s10.848,4.866,10.848,10.848S36.41,40.224,30.428,40.224z M30.428,22.409c-3.842,0-6.967,3.125-6.967,6.967    s3.125,6.967,6.967,6.967s6.967-3.125,6.967-6.967S34.27,22.409,30.428,22.409z" />
                                        <path d="M12.922,55.966v-3.951c0-2.237,1.82-4.057,4.057-4.057h27.163c2.237,0,4.057,1.82,4.057,4.057    v3.951h3.88v-3.951c0-4.377-3.561-7.937-7.937-7.937H16.979c-4.377,0-7.937,3.561-7.937,7.937v3.951H12.922z" />
                                        <path d="M48.519,26.008c-0.918,0-1.662-0.744-1.662-1.662v-12.63c0-0.918,0.744-1.662,1.662-1.662   s1.662,0.744,1.662,1.662v12.63C50.18,25.265,49.437,26.008,48.519,26.008z" />
                                        <path d="M54.833,19.693h-12.63c-0.918,0-1.662-0.744-1.662-1.662s0.744-1.662,1.662-1.662h12.63   c0.918,0,1.662,0.744,1.662,1.662S55.751,19.693,54.833,19.693z" />
                                    </g>
                                    <g id="Navbar-icon-close">
                                        <path d="M47.949,50.625c-0.64,0-1.28-0.244-1.768-0.732L14.635,18.346c-0.977-0.976-0.977-2.559,0-3.535    c0.976-0.977,2.56-0.977,3.535,0l31.546,31.547c0.977,0.976,0.977,2.559,0,3.535C49.229,50.381,48.589,50.625,47.949,50.625z" />
                                        <path d="M16.051,50.273c-0.64,0-1.28-0.244-1.768-0.732c-0.977-0.976-0.977-2.559,0-3.535l31.898-31.898    c0.976-0.977,2.56-0.977,3.535,0c0.977,0.976,0.977,2.559,0,3.535L17.818,49.541C17.331,50.029,16.69,50.273,16.051,50.273z" />
                                    </g>
                                    <g id="Navbar-icon-globe">
                                        <path d="M32,7.448C18.461,7.448,7.449,18.462,7.449,32c0,13.538,11.013,24.552,24.551,24.552   c13.538,0,24.551-11.014,24.551-24.552C56.551,18.462,45.538,7.448,32,7.448z M39.68,45.697v-5.55h1.261v5.55H39.68z M53.235,32   c0,0.351-0.036,0.694-0.053,1.041l-0.41-0.41l-3.152,3.152l-3.082-3.082h-2.601l-0.963,0.961l-4.557-4.556v-2.153h-4.438   l-2.544-2.544l-3.129,3.13h3.349l1.306,1.306H36.6l5.904,5.904v1.87l-3.528,3.528v5.746l-4.292,4.292h-1.794l-2.765-2.764v-7.469   l-1.939-1.941h-3.104l-3.201-3.199v-3.491l4.509-3.782v-4.123l7.275-7.273l2.182,2.182h5.044l3.525-3.525   C49.751,18.657,53.235,24.914,53.235,32z M18.312,15.778c0.73-0.616,1.506-1.176,2.316-1.69h9.044l-4.511,4.51h-2.989l-2.12,2.12   h-1.74V15.778z M15.335,18.865v4.212l-3.965,3.965C12.097,24.011,13.465,21.235,15.335,18.865z M10.865,33.997l9.417,7.119v3.492   l-2.803,2.859C13.811,44.021,11.36,39.299,10.865,33.997z" />
                                    </g>
                                    <g id="Navbar-icon-external">
                                        <path d="M32.75,36c-0.768,0-1.536-0.293-2.121-0.879c-1.172-1.171-1.172-3.071,0-4.242   l18.875-18.875c1.171-1.172,3.071-1.172,4.242,0c1.172,1.171,1.172,3.071,0,4.242L34.871,35.121C34.286,35.707,33.518,36,32.75,36z   " />
                                        <path d="M52.5,29.5c-1.381,0-2.5-1.119-2.5-2.5V16H39c-1.381,0-2.5-1.119-2.5-2.5   S37.619,11,39,11h13.5c1.381,0,2.5,1.119,2.5,2.5V27C55,28.381,53.881,29.5,52.5,29.5z" />
                                        <path d="M50,34.943V47.5c0,0.276-0.224,0.5-0.5,0.5h-35c-0.276,0-0.5-0.224-0.5-0.5v-26   c0-0.276,0.224-0.5,0.5-0.5h12.624l5-5H14.5C11.467,16,9,18.467,9,21.5v26c0,3.033,2.467,5.5,5.5,5.5h35c3.033,0,5.5-2.467,5.5-5.5   V34.943H50z" />
                                    </g>
                                    <g id="Navbar-icon-check">
                                        <path d="M12.853,31.912c0,0-1.184,0.839,0,2.764s7.551,13.029,8.291,15.003    c0.74,1.974,1.579,3.208,4.096,2.616s5.133-1.431,6.218-3.553c1.086-2.122,6.515-15.003,11.154-22.307s7.403-11.549,8.242-12.437    s2.122-2.665-2.566-2.418S34.963,22.387,28.35,36.157c0,0-0.556,1.765-1.629-0.049c-1.463-2.475-2.627-4.392-3.491-5.725    c-0.546-0.842-1.567-2.221-3.319-1.925C18.578,28.705,14.531,30.086,12.853,31.912z" />
                                    </g>
                                    <g id="Navbar-icon-selector">
                                        <path d="M32.027,9.583L32.027,9.583c0.873,0,1.702,0.38,2.272,1.041l12.264,11.78 c1.082,1.255,0.942,3.149-0.313,4.231c-1.254,1.083-3.149,0.941-4.231-0.313l-9.993-9.146L22,26.375 c-1.081,1.255-2.976,1.396-4.231,0.312c-1.255-1.082-1.395-2.977-0.312-4.231l12.298-11.832 C30.325,9.963,31.154,9.583,32.027,9.583z" />
                                        <path d="M31.992,54.166L31.992,54.166c-0.873,0-1.702-0.38-2.272-1.041l-12.264-11.78 c-1.082-1.255-0.942-3.149,0.313-4.231c1.254-1.083,3.149-0.941,4.231,0.313l9.993,9.146l10.026-9.198 c1.081-1.255,2.976-1.396,4.231-0.312c1.255,1.082,1.395,2.977,0.312,4.231L34.264,53.125 C33.694,53.786,32.865,54.166,31.992,54.166z" />
                                    </g>
                                    <g id="Navbar-icon-esports">
                                        <path d="M19.635,32.049c-2.812,0-5.292-0.875-7.389-2.61C6.744,24.885,6.033,15.96,6.005,15.583   l-0.157-2.146h9.901v4h-5.434c0.496,2.515,1.703,6.628,4.49,8.928c1.653,1.363,3.629,1.893,6.044,1.611l0.46,3.974   C20.74,32.016,20.181,32.049,19.635,32.049z" />
                                        <path d="M44.279,32.049c-0.546,0-1.104-0.033-1.675-0.099l0.46-3.974c2.417,0.28,4.399-0.25,6.054-1.619   c2.636-2.182,3.943-6.188,4.49-8.92h-5.443v-4h9.901l-0.157,2.146c-0.027,0.378-0.738,9.302-6.241,13.856   C49.57,31.174,47.091,32.049,44.279,32.049z" />
                                        <path d="M23.437,54.334c-1.889,0-3.758-0.016-5.095-0.062c-0.852-0.03-1.592-0.597-1.843-1.412   c-0.25-0.815,0.044-1.7,0.733-2.203c8.173-5.964,8.631-8.358,8.64-8.778c0.001-0.039,0.001-0.069-0.018-0.104   c-11.374-4.94-10.558-28.909-10.517-29.938c0.042-1.073,0.925-1.921,1.999-1.921h29.33c1.074,0,1.956,0.848,1.999,1.921   c0.041,1.029,0.857,25.025-10.537,29.947c-0.049,0.063-0.049,0.1-0.049,0.126c-0.004,1.736,4.844,5.637,7.174,7.512   c0.579,0.465,1.126,0.906,1.616,1.313c0.639,0.53,0.883,1.4,0.615,2.185c-0.269,0.786-0.994,1.324-1.823,1.353   c-3.527,0.121-13.201,0.029-14.959,0.005C29.83,54.291,26.604,54.334,23.437,54.334z M30.698,50.278   c1.151,0.015,5.496,0.047,9.368,0.056c-3.539-3.015-5.995-5.694-5.989-8.434c0.002-0.928,0.302-2.27,1.715-3.396   c0.158-0.126,0.335-0.228,0.524-0.301c6.91-2.675,8.367-16.999,8.384-24.287H19.302c0.021,7.291,1.484,21.616,8.382,24.287   c0.189,0.073,0.366,0.175,0.524,0.301c1.117,0.89,1.691,2.086,1.662,3.46c-0.049,2.339-1.859,5.001-5.758,8.369   C27.024,50.328,29.863,50.29,30.698,50.278z" />
                                    </g>
                                    <g id="Navbar-icon-map-marker">
                                        <path d="M43.857,37.295c-0.488,0-0.98-0.142-1.413-0.439c-1.138-0.782-1.427-2.338-0.645-3.476     c1.354-1.972,2.071-4.288,2.071-6.695c0-6.545-5.325-11.87-11.87-11.87s-11.87,5.325-11.87,11.87     c0,2.407,0.716,4.723,2.071,6.695c0.782,1.138,0.493,2.694-0.645,3.476c-1.138,0.783-2.695,0.493-3.476-0.645     c-1.93-2.809-2.95-6.103-2.95-9.526c0-9.302,7.568-16.87,16.87-16.87s16.87,7.568,16.87,16.87c0,3.423-1.02,6.717-2.95,9.526     C45.436,36.917,44.653,37.295,43.857,37.295z" />
                                        <path d="M32,54.185c-0.814,0-1.578-0.397-2.046-1.064L18.105,36.248c-0.802-1.124-0.542-2.685,0.582-3.487     c1.124-0.802,2.685-0.542,3.487,0.582l0.35,0.49L32,47.333l9.826-13.992c0.803-1.124,2.366-1.382,3.488-0.58     c1.123,0.803,1.383,2.364,0.58,3.488l-0.35,0.49L34.046,53.121C33.578,53.788,32.815,54.185,32,54.185z" />
                                        <circle cx="32" cy="26.685" r="5.406" />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" class="Navbar-embedded">
                                    <g id="Navbar-icon-menu">
                                        <rect x="15" y="16" width="18" height="2" />
                                        <rect x="15" y="23" width="18" height="2" />
                                        <rect x="15" y="30" width="18" height="2" />
                                    </g>
                                    <g id="Navbar-icon-profile">
                                        <path d="M24.12,25.48a5.16,5.16,0,1,1,5.16-5.16A5.16,5.16,0,0,1,24.12,25.48Zm0-8.47a3.31,3.31,0,1,0,3.31,3.31A3.32,3.32,0,0,0,24.12,17Z" />
                                        <path class="23d04aab-9b5b-44ec-b503-3476c6e102e5" d="M15.8,33V31.09a1.93,1.93,0,0,1,1.93-1.93H30.64a1.93,1.93,0,0,1,1.93,1.93V33h1.84V31.09a3.78,3.78,0,0,0-3.77-3.77H17.73A3.78,3.78,0,0,0,14,31.09V33H15.8Z" />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 151.15 68.46" class="Navbar-embedded">
                                    <g id="Navbar-logo-blizzard">
                                        <path class="Navbar-svgLogoAlternate" d="M129.67,4.74c1.13.18,1.95-.25,2.82,0,.31.09.38.46.72.58.56.18.95-.13,1.59,0a4.39,4.39,0,0,0,.51.58c.49.33,1.52.48,2.24.87.46.25.85.77,1.23.87s1-.15,1.52,0,.5.69.87.87c.52.09,1.11-.12,1.52,0s.35.41.65.58h2.1c.33,0,.27.46.5.58.76.18,1.55-.24,2.31,0,.36.11,1,1.14,1.38,1.45a11.69,11.69,0,0,1,1.52,1.3,11.39,11.39,0,0,1,.87,2,11,11,0,0,0,1.3,2.82c0,.89,0,1.76-.07,2.68a19.55,19.55,0,0,0-.07,2.6,15.34,15.34,0,0,0,.72,2.1,28.72,28.72,0,0,1,.14,4.12A12.92,12.92,0,0,1,154,32.3c-.16.57-.83,1.21-.94,1.88a14.56,14.56,0,0,0,.14,2.31,5.33,5.33,0,0,1-1.66,3.76c-.15.83-.1,1.75-.29,2.6a9.35,9.35,0,0,0-.43,1.88c0,.76.1,1.6.14,2.39a60.48,60.48,0,0,1,.14,7.09c-.06,1-.5,1.86-.58,2.75a36.63,36.63,0,0,1-.15,4.12c-.13.64-.39,1.25-.51,1.88s-.2,1.33-.36,2A12.52,12.52,0,0,1,148,68.1c-.43,0-.58.65-1,.94a13,13,0,0,1-3,.94c-.49.13-1,.27-1.52.43a7.2,7.2,0,0,1-1.45.51c-.55,0-1-.54-1.45-.65a6.55,6.55,0,0,1-4.49.79c0-.32.31-.62.51-.87a6,6,0,0,0,.58-6.44c.78-.52,2-.64,2.46-1.45,0-.38-.54-.18-.58-.51-.34-1-.78-2-1.23-3a4.8,4.8,0,0,1-.43-.94,14,14,0,0,1,.22-2.46c.24-2.3.53-4.9.8-7.23a15.4,15.4,0,0,1-1.45-2.68,12,12,0,0,1-1-3.11c-.05-.49.17-1.07.07-1.59-.06-.34-.49-.66-.58-1a12,12,0,0,1-.07-2,18.12,18.12,0,0,1,0-3c.05-.29-.36-.38-.43-.65-.22-.8.3-2.28.22-3.47-.05-.78-.42-1.5-.51-2.17a48.38,48.38,0,0,1,0-5.35V20.51a13.77,13.77,0,0,1,0-2.6c.1-.34.36-.31.51-.65.23-1.51-.32-2.72,0-3.9.08-.32.49-.49.58-.8a9.7,9.7,0,0,0,0-2.68c-.09-.35-.75-.93-1.16-1.3-1.31-1.21-2.62-2.36-3.76-3.61A.36.36,0,0,1,129.67,4.74ZM140,20.44a9.27,9.27,0,0,0,0,3.25c0,1.15,0,2.5.07,3.76a37.11,37.11,0,0,0,.07,3.76c.06.37.34.72.43,1.08a19.38,19.38,0,0,0,.65,2.82c.13.28.34.44.43.72,0,8.46-.13,16.7-.07,25.17a8.91,8.91,0,0,0,1.74-2.53,9.57,9.57,0,0,0,.58-1.66c.16-.66.09-1.28.22-2,.22-1.22,1.25-2.31,1.45-3.54a24.65,24.65,0,0,0,0-3.47c0-2.39.08-4.49.22-6.73a13.77,13.77,0,0,1,.29-3.25c.17-.5.73-.85.94-1.37s.25-1.63.51-2.39c.2-.59.64-1,.72-1.45a16.87,16.87,0,0,0,0-2.46,15.58,15.58,0,0,0,0-2.46c-.06-.27-.31-.44-.43-.72-.37-.85-.43-2.21-.72-2.82-.55-1.14-2.11-1.29-2-2.75-.89.16-1.16-.88-1.88-1.08-.92-.26-1.85.05-3.11-.07C140,20.23,140,20.33,140,20.44Z" transform="translate(-5.71 -4.48)" />
                                        <path class="Navbar-svgLogoAlternate" d="M124.39,30.06c.06.59.18,1.35-.22,1.66a2.81,2.81,0,0,1,3,.8c.17.16.34.48.58.72s.56.37.65.58c.16.36,0,.88.14,1.16s.77.34,1.08.58c.18.79.27,1.66.51,2.53.06.24.24.48.29.72.31,1.48,0,3.15.21,4.63.11.72.47,1.33.51,2,.19.38.6-.21.72.14.48,2.57,1.36,5.63.65,8.32.05.33.61.17.72.43a8.47,8.47,0,0,1,.72,1.88c0,.25-.27.53-.29.79a11.7,11.7,0,0,0,.22,1.23,9.45,9.45,0,0,1-.07,1.66,11.44,11.44,0,0,0-.22,1.52c0,.33.26.64.29.94a9.12,9.12,0,0,1-.43,2.17c-.4,2.13-.73,4.37-1.23,6.36-.82-.37-1.57-.43-2.24-.8a12,12,0,0,1-1.81-1.59,5.3,5.3,0,0,0-4.41-1.74,7.32,7.32,0,0,1,.72-3c.33-.92.67-1.86.94-2.89a26,26,0,0,0,.36-7.23A31.36,31.36,0,0,0,125,49a14.38,14.38,0,0,0-1.38-4.12,1.51,1.51,0,0,0-.79-.72c0-1.47.73-2.66.5-4a5.8,5.8,0,0,0-.65-1.37,12.77,12.77,0,0,0-2.53-3.47,4,4,0,0,1-.58,2.46,6.18,6.18,0,0,0-.58,1.3,16.24,16.24,0,0,0,.29,3.54c.22,2.33.45,4.55.72,6.94a16.31,16.31,0,0,1,.36,3.4c0,.33-.31.55-.36.87.13.48.44.68.51,1.3a16.32,16.32,0,0,1-.07,4.12,11.22,11.22,0,0,0-.36,1.16,16.35,16.35,0,0,0,.36,2.82c.05.46.1,1,.14,1.45.09,1,.24,1.87-.51,2.24a15.26,15.26,0,0,1-.51,5.13c-.41-.42-.43-1-.65-1.52a15.46,15.46,0,0,0-4.77-5.93,8.41,8.41,0,0,1-2.39-1.88A57.17,57.17,0,0,1,114,56c.19-.4.57-.75.65-1.16A2.73,2.73,0,0,0,114,52.4V45.1c0-2.51.2-5,0-7.3,0-.53-.26-1-.36-1.59s0-1.26-.14-1.81-.49-.9-.58-1.37.05-1.06,0-1.59-.34-1.31-.43-2c-.06-.4,0-.8-.07-1.16s-.3-.71-.36-1.09,0-.67-.07-1-.12-.63-.15-.94a18.72,18.72,0,0,0,0-2.39c-.1-.45-.66-.68-.58-1.3-.08-.25-.41-.26-.51-.5a39.1,39.1,0,0,1,0-5.06c1.71-1.4,3.7-2.52,5-4.34a5.63,5.63,0,0,0-1.52-.5c-.28,0-.42.34-.72.43a1.79,1.79,0,0,1-1,0c-.63-2.29-2.55-3.28-4.2-4.56a8.46,8.46,0,0,1-1.08-.21c-.26-.07-.85,0-.79-.43s.66-.21,1-.22c.6,0,1.18,0,1.74-.07,1.57-.11,3.41.12,4.77-.07.53-.08.95-.43,1.45-.43a1.55,1.55,0,0,1,1.16.58c.76.1,1.68-.13,2.53,0a15.71,15.71,0,0,1,2.24.72,14.26,14.26,0,0,0,2.17.72c.55.08,1.1,0,1.59.07,1.6.39,2.27,1.82,3.54,2.39.54,1.4,1.35,2.85,2,4.27a5.77,5.77,0,0,1,.72,3.33,12,12,0,0,1-.07,1.45c-.1.53-.49.92-.58,1.45-.12.78.09,1.51,0,2.31A12.72,12.72,0,0,1,129.09,27,5.5,5.5,0,0,1,124.39,30.06Zm-5.21-16.71c.07,4.82-.1,10,0,14.68,0,.25-.13.67.14.87a3.08,3.08,0,0,0,1.74-.14c1.65-.62,1.85-2,2.46-3.76a8.64,8.64,0,0,0,.44-1c.08-.52-.06-1,.07-1.52.09-.34.44-.73.51-1.09a6.76,6.76,0,0,0-.22-3,12.66,12.66,0,0,0-2.1-3c-.85-1-1.87-2.17-2.89-2.24A.2.2,0,0,0,119.18,13.35Z" transform="translate(-5.71 -4.48)" />
                                        <path class="Navbar-svgLogoAlternate" d="M36.81,6.33c.43.39.68,1,1.23,1.23A4.5,4.5,0,0,1,39,7.49c.85,1,1.67,1.95,2.61,2.82v2.6a12.48,12.48,0,0,1,0,2.53c-.1.35-.56.56-.58.87,0,.72.86.9,1.09,1.3-.13.73.17,1.68,0,2.32-.11.39-.43.38-.5.72V29a11.57,11.57,0,0,0,0,2.75c.13.42.85.69,1,1a6.65,6.65,0,0,1,.29,1.81,81.86,81.86,0,0,1-.14,8.24,7.92,7.92,0,0,1-.14,1.66c-.1.29-.44.49-.51.72-.32,1.12.24,2.59,0,3.62,0,.33.46.26.51.58a14.34,14.34,0,0,1,0,3.11c-.21.32-.52.28-.72.58a1.94,1.94,0,0,0-.29.79c0,.52.72.75.5,1.74-.07.3-.19.38-.5.72-.16.69.2,1.48,0,2.24-.07.28-.49.51-.58.8-.26.87.25,2.33,0,3.33-.08.33-.48.51-.5.94s.73,1,.5,1.74c.65,0,1.31.12,2,.14a5.54,5.54,0,0,0,2-.07c.34-.13.4-.5.65-.72a3.17,3.17,0,0,1,1.16-.65,5.64,5.64,0,0,1,2,.36c1.32.36,3.4.77,4.77,0,.33-.19.37-.48.79-.65a12.48,12.48,0,0,1,3.33-.36c4.73-.21,10.26,0,15.12.07v3.4a21.23,21.23,0,0,0,0,3.33c.18,1,1,1.64,1.23,2.39h-5.5a8.93,8.93,0,0,1-1.81,0c-.33-.1-.38-.42-.65-.58-1,.05-1.85.07-2.17-.58-.85.15-1-.35-1.52-.58H59.74c-1.61,0-3.07.25-3.54-.72-4.42-.11-8.93-.14-13.45-.15a4.11,4.11,0,0,0-3.47-.87,5.16,5.16,0,0,0-1.45.94c-.5.36-1,.7-1.37,1s-.6.79-.87,1c-1.44-.25-3.65-.64-4.92,0-.39-.14-.43-.62-.87-.72.18-.47.62-.68.65-1.3a12.06,12.06,0,0,0,3.4-2.39c.12-.72-.16-1.65,0-2.24.12-.44.48-.44.58-.8s-.51-.41-.58-.79c.23-1.53-.32-2.85,0-4.05.09-.31.49-.5.58-.79.16-.55-.15-1.08,0-1.59.09-.32.39-.36.51-.65.16-1.17-.61-1.41-1.09-2V47.7c.11-.28.5-.27.58-.58-.08-1-.37-2.76,0-3.76.13-.35.37-.44.51-.72V39.89a14.2,14.2,0,0,1,0-2.75c.14-.6.73-.92.72-1.52s-.49-.95-.72-1.3V28.47a10.52,10.52,0,0,0,0-2c-.09-.36-.35-.43-.51-.73v-2.1a9.31,9.31,0,0,1,0-2.1c.18-.59.91-.65,1.08-1.16-.07-1.36.59-3.91-.65-4.27a6.88,6.88,0,0,0,1-2.53,7.12,7.12,0,0,0-1-3.4,5.51,5.51,0,0,0-1.44-.15,5.37,5.37,0,0,0-1.74-2.17,7.55,7.55,0,0,1-1.08-.87c0-.18.58-.61.65-1.08,0-.1,0-.21.07-.22h.8c.34,0,.26.51.58.58Z" transform="translate(-5.71 -4.48)" />
                                        <path class="Navbar-svgLogoAlternate" d="M104.43,72.94c-.09-1.3.13-2.31,0-3.33a16.28,16.28,0,0,0-.8-2.6c-.13-.42-.29-.85-.43-1.3a9.47,9.47,0,0,1-.36-1.3,18.23,18.23,0,0,0,0-1.88c-.23-1-1.91-1.88-2.39-3a2.82,2.82,0,0,1-.29-1.3c.06-.42,1-1.41,1.23-1.81a13.28,13.28,0,0,0,1.88-4,6.52,6.52,0,0,0,.36-2.6c-.12-.54-1-1-1.52-1.37-1.28-.84-2.42-1.36-3.69-2.1a3.06,3.06,0,0,0-2.1-.8,10,10,0,0,1,.43,4.12c.26.24.62.45.94.72a8.91,8.91,0,0,0,.94.72c-.17.75-.75,1.08-.94,1.81a42.53,42.53,0,0,0-4.34-.07,15.86,15.86,0,0,0-2.89,1c-1,.36-2,.67-2.89,1-.65-.34-.46-1.52-1-2a15.59,15.59,0,0,1,.94-1.37c.36-.41.93-.69,1.09-1.16s0-.91.14-1.3c.3-1,1-1.36,2-2,0-.39-.69-.39-.51-.72-.1-1,.43-2,.43-3.11,0-.73-.33-1.33-.22-2a2.08,2.08,0,0,1,.79-1.08c.12-.72-.16-1.51,0-2.1.11-.41.56-.48.58-.87-.21-.36-.48-.35-.58-.72s.14-1.06.14-1.45c0-1-.28-1.74.07-2.53.21-.47.63-.83.87-1.3a8.47,8.47,0,0,0,.65-3.11c.18-.28.54-.54.65-.79a22.1,22.1,0,0,0,.51-3.54,9.85,9.85,0,0,1,1.08-3c.24-.42.67-.77.72-1.09.09-.53-.23-.94-.15-1.37s.42-.63.72-.87a19.29,19.29,0,0,1,1.45-3.69c.2-.34.63-.61.72-.94.18-.66-.16-1.34,0-2a4.2,4.2,0,0,1,.87-1.23c.28-.24.68-.25.87-.51.2-1.19-.09-4,1.88-3.11,1,.44.87,1.84,1.16,3a7.9,7.9,0,0,0,.87,1.81c.33.6,1,1.15,1.08,1.59a11.62,11.62,0,0,1,0,1.88c.16,2.07,1.31,4.24,2,6.22.35,1.1.54,2.23.79,3.25.13.52.3,1,.43,1.59a11.62,11.62,0,0,0,.36,1.66c.14.33.54.53.65.8.1.75-.13,1.42,0,2,.07.33.5.59.58.94s-.14.57-.07.8.5.45.58.72c-.08.79.11,1.84,0,2.75,0,.22-.13.45-.14.65a22.13,22.13,0,0,0,.51,4.48,23.62,23.62,0,0,1,.36,3c.13,2.94.12,6.56,0,9.18a11.31,11.31,0,0,1-.15,2c-.12.45-.51,1-.72,1.59-.57,1.58-1,3.54-2,4.77-.14,1,.19,1.94,0,2.82-.07.34-.39.64-.51.94-.4,1-.43,2.23-1.08,3-.11.55.15,1.11,0,1.66-.07.25-.43.46-.5.72-.21.71.18,1.5,0,2.17-.1.35-.52.61-.8.79C105.14,72.87,104.9,72.69,104.43,72.94Zm-4.34-42.81c-.56.61-.67,1.65-1.23,2.1-.09.07-.38.1-.36.36-.15.63,0,1.22-.14,1.88s-.36,1.07-.43,1.59c-.23,1.63.32,3.15,0,4.85a6.2,6.2,0,0,1,4.12.87,5.09,5.09,0,0,0,2.24,1c.08-2.1.17-4.61.07-6.8a10.78,10.78,0,0,0,0-1.23c0-.2-.22-.51-.29-.79-.32-1.29-.15-3-.94-3.54s-1.39-.26-1.88-.65-.58-1-1.08-1.81C100.21,28.75,100,29.33,100.09,30.13Z" transform="translate(-5.71 -4.48)" />
                                        <path class="Navbar-svgLogoAlternate" d="M96.48,7.2c.14.55-.26,1-.43,1.37A10.38,10.38,0,0,1,94.23,12a4.15,4.15,0,0,1-.36,2.68c-.33.54-1.12.9-1.23,1.37s.12.9.07,1.3c-.1.84-.63,1-1.16,1.59a26.17,26.17,0,0,1-.87,4.77A6.24,6.24,0,0,0,90,25.35a7.64,7.64,0,0,0,.07.87c0,.92-.1,1.89-.14,2.82a9.55,9.55,0,0,1-.07,2.24c-.08.25-.32.41-.43.65a20.79,20.79,0,0,0-.65,2.46,5.31,5.31,0,0,1-1,2.1v1.88c-.36.9-1.4,1.29-1.59,2.24a16.51,16.51,0,0,0,0,3,23.18,23.18,0,0,1,0,3,14.39,14.39,0,0,1-.8,2.31,18.37,18.37,0,0,0-.8,2.31c-.14,1,.08,1.87,0,2.68-.17,1.86-1.1,3.09-2,4.56,0,1.38-.78,2.3-.87,3.33.47.42.44-.46.87-.51.8.62,1.94,0,3,.07.39-.59.21-1.28.58-1.81.57-.83,1.78-.92,2.75-1.3.47-.19,1-.64,1.66-.94,1.44-.67,2.79-1.08,3.33-2.61.46.18.43.6.87.72.7.21,1.78-.22,2.46,0a2.4,2.4,0,0,1,1,1.52c0,.35-.42.74-.51,1.16a3.17,3.17,0,0,0,0,1c.07.41.41.67.51,1.16a15.89,15.89,0,0,1,0,2.53,12.08,12.08,0,0,1,0,2.46c-.1.36-.76.68-.58,1.16h-8c-.33-.06-.25-.52-.58-.58-.9,0-1.68-.42-2.39-.29s-1.3,1.15-2,1.3c-1.68.21-3.14-.1-4.63.14-1.08.18-2,1.1-3.18,1-.57-.52-.56-1.12-.51-2.31a15,15,0,0,1,0-2c.12-.45.65-.67.72-1A2.73,2.73,0,0,0,77,61.37c.23-.48.94-.55,1.16-1.16a3.21,3.21,0,0,0-.07-1.74c.2-.37.63-.45.72-.87s-.18-.92-.14-1.37.38-.82.51-1.23a6.21,6.21,0,0,0,.22-1.67,9.53,9.53,0,0,0-.22-2.46c-.1-.36-.45-.68-.58-1a11.25,11.25,0,0,1-.43-4.48,23.12,23.12,0,0,1,.43-4.56,22.16,22.16,0,0,1,.79-2.17c.77-2,1.69-4.25,2.39-6.29,0-.41-.46-.45-.51-1s.5-1,.72-1.59a8.33,8.33,0,0,0,.14-1.59,6.71,6.71,0,0,1,.8-1.59,5.81,5.81,0,0,0,.79-2c.07-.54-.09-1.13,0-1.74a8.09,8.09,0,0,1,.79-2,22.36,22.36,0,0,1,2.39-4.41c.24-.31.52-.48.58-.72.15-.56-.09-1.1,0-1.52s.39-.43.51-.87c-.74-.76-2,0-3-.29-.46-.16-.54-.74-.87-.87a2.5,2.5,0,0,0-1.3,0,4.75,4.75,0,0,0-1.16.29c-.85.47-1.35,2.75-1.59,4-.29,1.49-.42,3.63-1.37,4.12-.71.37-1.33-.15-1.52.79a5.56,5.56,0,0,1-1-.87,5.38,5.38,0,0,0,.29-1.16c0-.58-.33-1.17-.29-1.67s.67-.85.8-1.3a12.66,12.66,0,0,0,0-2.46V6.62a.54.54,0,0,1,.22-.15H95.32c.28.11.35.42.51.65C96,7.05,96.38,7,96.48,7.2Z" transform="translate(-5.71 -4.48)" />
                                        <path class="Navbar-svgLogoAlternate" d="M25.24,28.25a2.3,2.3,0,0,0,1.3.87c.45.16,1.41.18,1.66.51.76,1-.87,2-.36,2.75.25.35.26-.06.58.07.64.52.93,1.39,1.59,1.88-.34,1.78-.92,4.58-.07,6.22.32.61.88.73,1.16,1.3-.79,3.1.87,7.52-.22,10.13-.15.36-.59.72-.65,1.09a6.65,6.65,0,0,0,.22,1.66,6.84,6.84,0,0,1-.14,3.47,11.56,11.56,0,0,1-.58,1.59,27.71,27.71,0,0,0-1.66,2.82,18.44,18.44,0,0,0-.72,3.76,20.89,20.89,0,0,0-4.27,2.46,4.89,4.89,0,0,0-1.81,1.88c-1.48.26-3.16.32-4.12,1.08-.55,0-.66-.76-1.23-.8s-.81.76-1.3.94a5.07,5.07,0,0,1-1.52.14A18.26,18.26,0,0,1,10,71.71c-.56.36-1.31,0-2.1,0a2,2,0,0,0-.44,0c-.1,0-.22.21-.22.22-.29-.05-1-.91-1.08-1a7.84,7.84,0,0,0,2-1c.33-1.61,1-3.08,1.16-4.7.07-.66,0-1.35,0-2,.06-1.43.21-2.91.22-4.34,0-2.56-.5-5.12-.65-7.74-.19-3.42.27-6.83.14-10.34.11-.32.65-.21.8-.51-.1-.91.09-1.77-.07-2.68-.06-.34-.37-.6-.44-.94a14.56,14.56,0,0,1,.07-2.89c0-.42-.06-.87,0-1.23s.48-.76.58-1.23a3.28,3.28,0,0,0-.65-2.75V18.41a15.62,15.62,0,0,1,0-3.33c.11-.39.37-.38.58-.72-.16-.6.1-1.08-.14-1.37s-.59,0-1.23-.14c-.22-.13-.1-.39-.22-.58-.4-.66-1.34-1.11-1.88-1.74a8.85,8.85,0,0,0-.65-.87c.16-.45,0-.93.07-1.3s.51-.6.65-.87c.77-.08,1.73.11,2.6,0,.52-.07,1-.28,1.52-.36C13.61,6.62,17.4,7,20.83,6.7a12.74,12.74,0,0,1,3.62.15c.3.14.26.48.43.72A7,7,0,0,0,26,8.5c1.89-.13,2.71,1.21,3.4,2.46a8.51,8.51,0,0,1,1.08,3.18c.07.74,0,1.6.14,2.46a7.53,7.53,0,0,1,.07,3,6.88,6.88,0,0,1-.65,1.16C28.68,23.27,27.13,26.56,25.24,28.25ZM18.66,15.09c-.08.28-.45.27-.5.58V25.72a1.89,1.89,0,0,1,1.23.07c.62-.43.69-1.27,1.08-1.88a3.16,3.16,0,0,1,2.46-1.37c.05-1.61-.21-3.54.51-4.48a4.57,4.57,0,0,1-.51-2c.19-.29.58-.39.8-.65-.64-.23-.87,0-1.45-.22s-.64-.9-1-1c-.77-.23-1.58.46-2.46.22,0-.1.32-.38,0-.36A3.3,3.3,0,0,0,18.66,15.09Zm-.5,22.56c-.05.23-.24.37-.29.58-.31,1.2.32,2.3.29,3.4,0,.87-.53,1.72-.51,2.6-.37.14-.6.35-.58.72s.42.44.58.72v9.91A2.12,2.12,0,0,0,16.92,57a33.9,33.9,0,0,0,0,4.27,8.59,8.59,0,0,0,.21,2c-.33.58-.65,1.18-.94,1.81,1.63.09,1.82-1.27,3.11-1.52a21.66,21.66,0,0,0,1.88-2,5.45,5.45,0,0,0,.65-.65c.66-1.09.16-2.77.51-4.34a14,14,0,0,0,1.16-5c0-.32-.38-.25-.43-.51.71-.39.3-1.16.07-1.81a3.49,3.49,0,0,1-.36-2c0-.22.48-.51.58-.94.25-1.11-.5-1.4-.72-2-.48-1.31.31-2.23.43-3.47,0-.26-.31-.27-.36-.51.67-.79-.31-1.87-.5-2.24.15,0,.47.09.5-.07a1.75,1.75,0,0,1-.43-.87c0-.3.29-.29.22-.65a4.69,4.69,0,0,0-1.66-1.66,24.16,24.16,0,0,1-2.67-2.39C18.08,34.33,18.49,36.07,18.15,37.65Z" transform="translate(-5.71 -4.48)" />
                                        <path class="Navbar-svgLogoAlternate" d="M57.49,7.13c5.34-.22,10.78.07,16.2,0,.15.9-.19,2,0,3,.07.35.44.71.51,1a14.46,14.46,0,0,1,0,2.53v7.38c-.14.3-.43.46-.58.87a4.29,4.29,0,0,0,.07,2.53c-1.77,1.63-2.14,4.66-3.4,6.8v2.46c-1.57.72-3.5,1.69-2.68,4.48-.12.31-.54.4-.8.65a14.82,14.82,0,0,0-2.24,4c-.31.69-.59,1.48-.87,2.24a12.36,12.36,0,0,0-.79,2.31c-.06.43.08.93,0,1.37a18,18,0,0,1-.79,2c-.62,1.75-1.19,3.48-2,5.14-.13.28-.38.62-.29.94.63.54,1.33,0,1.88-.29a8.66,8.66,0,0,1,1.67-.87c.48-.1.88,0,1.3-.14a2.89,2.89,0,0,0,1.08-.36,5.57,5.57,0,0,0,1.08-1.59c.82-1.28,1.8-2.73,3.62-3a4.63,4.63,0,0,1,1.16-2.46c.25.14.25.52.51.65C73.38,48.48,73.3,46.88,74,46h1.59a8,8,0,0,0,.29,3.4c-.16.29-.51.24-.72.51-.08.11-.16.47-.29.72a2.84,2.84,0,0,0-.43.94c-.28,2.13.17,5.58.14,7.81a3.44,3.44,0,0,0-2.32,1.16H66.32c-.36-.05-.29-.54-.58-.65-.46.17-.67,0-1,.07-.71.2-.88,1.07-1.45,1.16-.77.11-1.41-.54-2.1-.87h-4c-.29-.31-.72-.59-.72-1s.52-.74.8-1.09c.19-1.17-.26-2.29,0-3.25.08-.31.46-.51.51-.79.13-.78-.71-1.85-1.16-2.24a2.09,2.09,0,0,0,.51-1.16c0-.43-.36-.79-.44-1.16A10.06,10.06,0,0,1,57,46c.12-.69.16-1.47.29-2,.08-.3.34-.58.43-.87.26-.81.18-1.69.43-2.39.46-1.27,1.49-2.1,2.1-3a8.41,8.41,0,0,1,2.31-4.56A35.57,35.57,0,0,1,63.86,28a3.76,3.76,0,0,1,2-2.46c.4-1.28,1.38-2,2.17-2.89a5,5,0,0,1,0-3.33c.2-.37.59-.54.87-.87,1-1.2,1.79-2.87,2.89-3.76V11.18c-1.08,0-2.12,0-3.18-.07a11,11,0,0,0-2.53,0,8.88,8.88,0,0,0-1.45.72A3.43,3.43,0,0,0,62.7,15.3a2.62,2.62,0,0,0-2.17,1.23c-.18,1.58.25,3.23,0,4.63A3.75,3.75,0,0,1,60,22.32a3.59,3.59,0,0,1-.72,1,1.39,1.39,0,0,1-.58-1.59c-.09-.35-.45-.42-.58-.72a15.88,15.88,0,0,0-.51-2.75c.25-1,.77-2.47.36-3.54-.21-.55-.6-.69-.94-1.09.21-1.59-.28-3.41,0-4.84.11-.59.7-.95.58-1.52C57.58,7.19,57.55,7.15,57.49,7.13Z" transform="translate(-5.71 -4.48)" />
                                        <path class="Navbar-svgLogoAlternate" d="M43.46,7.2a42.65,42.65,0,0,0,10.2,0,2,2,0,0,1,.94,2.1c-1.09.35-3,1.35-2.89,2.82,0,.53.61.86.58,1.52s-.65.83-.8,1.38a14.22,14.22,0,0,0,.07,3c.14,3.29.27,7,.07,10.42,0,.61-.18,1.21-.14,1.66a5.9,5.9,0,0,0,.22.65c.21.92.39,1.81.58,2.75-.43.48-.91.69-1,1.45a25.25,25.25,0,0,0,.22,3.91c0,.39,0,.77.07,1.08s.19.48.22.72a5.6,5.6,0,0,1-.07,1.88c-.16.44-.91.84-1,1.3A5.44,5.44,0,0,0,51,45.6c.13.61.13,1.25.22,1.81a5.81,5.81,0,0,0,.36,1.08,7.44,7.44,0,0,1,.43,1,10.8,10.8,0,0,1-.15,2,7.69,7.69,0,0,1-.14,1.88c-.13.34-.74.69-.79,1.09a5.75,5.75,0,0,0,.58,2.31c.34.55,1.13.78,1.74,1.16s1.24.86,1.66,1.16c.11.64.15,1.34.29,2-.68-.26-2-.5-2.6,0a9.27,9.27,0,0,0-3.83-.22,9.21,9.21,0,0,0-2.32.29c-.56.22-.95,1-1.37,1-.61,0-1-.72-1.23-.94.8-1,1.41-2.11,2.6-2.68a34.09,34.09,0,0,0,.36-5.42,10,10,0,0,1,.07-1.81c.1-.37.46-.51.51-.87.07-.55-.39-.9-.51-1.52A4.6,4.6,0,0,1,47,47c.1-.34.43-.63.51-1a24.73,24.73,0,0,0,0-3.47c0-5.45-.14-11.21-.14-16.42a13.17,13.17,0,0,1,0-2.68c.1-.34.16-.31.51-.58,0-.3-.45-.18-.51-.43-.2-3-.42-6.91-.58-10.27a5.49,5.49,0,0,0-.15-1.37c-.36-1-1.87-.51-2.24-1.52a1.85,1.85,0,0,1-.72-.07,9,9,0,0,0-.94-.94A5,5,0,0,1,43.46,7.2Z" transform="translate(-5.71 -4.48)" />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 124 66" class="Navbar-embedded">
                                    <g id="NavbarFooter-blizzard-upper">
                                        <path d="M75.81,45.29a5.38,5.38,0,0,0,.44,1.41v4.07l-0.07,0a4,4,0,0,0-.36.27,0.89,0.89,0,0,1,0,.13,1.62,1.62,0,0,1,0,.19l0,0.14H69.26l0-.08a3.85,3.85,0,0,0-.27-0.39l-2.15-.23a4.34,4.34,0,0,1-1.65,1.09H65.09c-1.64,0-2.56.08-3.5,0.08a10.93,10.93,0,0,1-2.52.81H59l0-.05a1.57,1.57,0,0,1-.44-1.12c0-.32.07-0.59,0.07-0.73V49.19l0.07-.05a1.46,1.46,0,0,0,.4-0.32,0.83,0.83,0,0,0,.13-0.5A3.17,3.17,0,0,0,59,47.46l0-.12,0.1-.07a2,2,0,0,0,.81-0.76A1.35,1.35,0,0,0,60,46a3.87,3.87,0,0,0-.11-0.85l0-.12,0.1-.06a1.47,1.47,0,0,0,.39-0.31,0.8,0.8,0,0,0,.11-0.46,2.93,2.93,0,0,0-.14-0.79V43.3c0-.24.32-0.68,0.44-1.1a4.83,4.83,0,0,0,.15-1.3,12.72,12.72,0,0,0-.16-1.82,2.6,2.6,0,0,0-.42-1A9.72,9.72,0,0,1,59.89,35a23.57,23.57,0,0,1,.43-4.25l2.59-6.89a2.92,2.92,0,0,1-.42-0.49,0.72,0.72,0,0,1,0-.24c0-.16,0-0.24,0-0.4V22.62l0.05-.05a2.2,2.2,0,0,0,.6-1.28c0-.23,0-0.37,0-0.5s0-.13,0-0.22c0.1-.51,1.17-1.81,1.3-3a4.91,4.91,0,0,0,0-.54c0-.37,0-0.72,0-0.73a19.93,19.93,0,0,1,3-5.69V9l0.07,0a0.78,0.78,0,0,0,.36-0.43h0c0-.13,0,0-0.23-0.31h-2.3l0-.08A1.87,1.87,0,0,0,65,7.71a0.92,0.92,0,0,0-.68-0.23,11.18,11.18,0,0,0-1.47.28,1.41,1.41,0,0,0-.69.89,11.79,11.79,0,0,0-.78,2.83c-0.41,2.59-.84,2.95-1.39,3H59.77a0.58,0.58,0,0,0-.56.39L59.11,15,59,14.86c-0.19-.17-0.44-0.41-0.52-0.45l-0.11-.07,0-.12a2.66,2.66,0,0,0,.21-1c0-.46-0.21-0.7-0.23-1.2A1.72,1.72,0,0,1,59,11V3H73.89l0,0.08c0.26,0.43.28,0.41,0.29,0.4h0.34l0.15,0V4l0,0c-0.39.44-.53,2-1.79,3.23a6.24,6.24,0,0,1,.06.81,2.9,2.9,0,0,1-.07.69,3.1,3.1,0,0,1-1.29,1.77,5.28,5.28,0,0,1,.07.81,2.57,2.57,0,0,1-.08.7c-0.3.75-.83,0.41-0.86,1.27,0,0-.24,1.65-0.46,2.7s-0.76,1.64-.75,2.43a2.51,2.51,0,0,0,0,.41l-0.13,4.24-0.07,0c-0.63.38-.52,2.81-1.66,4v1.51c-0.35.92-1,.87-1.29,2.05V35.6l-1.3,3.74c0,0.14.05,0.67,0.05,1.25a7.3,7.3,0,0,1-.06,1,10.71,10.71,0,0,1-1.35,3.3l-0.19.31a1,1,0,0,1,0,.11,5.21,5.21,0,0,1-.41,1.44,3.24,3.24,0,0,1-.39,1,0.45,0.45,0,0,0,.34.22,0.85,0.85,0,0,0,.29-0.38l0.08-.14,0.14,0.07a1.68,1.68,0,0,0,.75.17c0.48,0,1-.18,1.63-0.18,0.17,0,.2-0.15.25-0.49a1.84,1.84,0,0,1,.42-1.1c0.65-.69,2.09-0.83,2.41-1.08,1.76-1.22,2.48-.65,3.64-2.52l0.11-.17,0.15,0.14a3.67,3.67,0,0,1,.4.43h2.18l0,0.08A2.37,2.37,0,0,1,76.24,44,2.41,2.41,0,0,0,75.81,45.29Zm11-8.76a42.37,42.37,0,0,1-.19,5.28v0.06l-0.05,0a6.58,6.58,0,0,0-.87,2.16,7.56,7.56,0,0,1-1.23,2.69v2.47l-0.07.05c-0.5.31-.58,2.21-1.23,3v1.54l-0.07.05a2.76,2.76,0,0,0-.36.28v2l-0.07.05a1.27,1.27,0,0,1-.75.5,0.25,0.25,0,0,1-.22-0.13,1.18,1.18,0,0,0-.24.11l-0.24.14v-2.7l-1.31-4.26V48.57c0.08-1-2.13-1.71-2.16-3.75V44.76l0,0A11.45,11.45,0,0,0,80.56,38h0c0.07-.26-1.11-1.11-2.37-1.77a21.09,21.09,0,0,1-2.83-1.68H74.57l0.37,1.09V38c0.58,0.15.95,0.86,1.31,0.91a0.26,0.26,0,0,1,.23.24,13.53,13.53,0,0,0-.68,1.24l0,0.15H75.63s-1.33-.09-2.41-0.09a5.89,5.89,0,0,0-1.21.08c-2.06.69-4.4,1.57-4.41,1.57l-0.13,0L67.4,42c-0.56-.94-0.09-0.68-0.61-1.43l-0.07-.1,0.07-.09a9,9,0,0,1,1.54-1.76,4.34,4.34,0,0,1,.4-1.76c0.45-.67,1.43-0.86,1.33-1.09a0.68,0.68,0,0,0-.36-0.33l-0.09-.06v-0.1s0.16-1.38.3-2.13A2.49,2.49,0,0,1,70,32.75a4.2,4.2,0,0,1-.21-1.19,1.36,1.36,0,0,1,.27-0.89,2,2,0,0,1,.39-0.32V28.46l0.07,0a0.57,0.57,0,0,0,.36-0.57c0-.15,0-0.07-0.13-0.16a0.57,0.57,0,0,1-.33-0.6,1.81,1.81,0,0,1,0-.34,3,3,0,0,0,.07-0.64c0-.42-0.11-0.69-0.11-1.08a1.8,1.8,0,0,1,.09-0.57A7.64,7.64,0,0,1,71.37,23a6.34,6.34,0,0,0,.49-2.43v-0.1l0.08,0c1-.51.4-2.7,1.16-4.45a7,7,0,0,1,1.19-2.12,1,1,0,0,0,0-.15c0-.31-0.15-0.57-0.16-0.91a0.73,0.73,0,0,1,.17-0.48,1.67,1.67,0,0,1,.42-0.34,14.16,14.16,0,0,1,.94-2.44,3.5,3.5,0,0,1,.85-1.28V6.33l0.07-.05a0.73,0.73,0,0,0,.33-0.37,1.36,1.36,0,0,1,.58-0.57l0,0h0c0.4,0,.45-0.4.46-1,0-.16,0-0.32,0-0.49,0-.6.1-1.34,0.94-1.34,1.45,0.07,1.28,2.43,1.45,2.67,1.16,2.53,1.48,2.13,1.53,2.76V9.23c0,1.09,1.57,5.18,1.58,5.2l1.36,5.36c0.14,0.12.25,0.22,0.38,0.31l0.07,0V22a1.19,1.19,0,0,1,.47.84c0,0.19-.06.31-0.05,0.39a0.64,0.64,0,0,0,.38.47l0.07,0v2.55l-0.12,0s0,0.08,0,.13a35.42,35.42,0,0,0,.58,4.65l0,0v0.08C86.77,31.92,86.82,34.23,86.82,36.54ZM76,30.06a3.2,3.2,0,0,1-.06.76l0,0.06a7.63,7.63,0,0,1,.79,0,5.84,5.84,0,0,1,1.27.13c1.26,0.27,2,1.15,2.79,1.4h0.37c0-.6.06-2.79,0.06-4.53,0-1,0-1.8-.06-2.12a3.33,3.33,0,0,1-.34-1.57,2.87,2.87,0,0,0-.48-1.66c-0.51-.49-1.18-0.23-1.79-0.85a4.78,4.78,0,0,1-.79-1.46l-0.07,2v0.08l-0.07,0a1.53,1.53,0,0,0-.48.9,1,1,0,0,1-.75.75,8.09,8.09,0,0,1-.43,2.82,4,4,0,0,0,0,.63C75.87,28.17,76,29.27,76,30.06ZM58.05,37.83l-0.18.05c-0.67.15-.36,0.69-0.92,1.28a7.75,7.75,0,0,0-.13,1.91c0,1.93.15,4.55,0.15,4.55V45.8H56.8a3.12,3.12,0,0,0-1.59.86l-0.05.08H50.21l-0.05-.08c-0.28-.45-0.28-0.44-0.31-0.42s-0.23,0-.52,0a0.87,0.87,0,0,0-.83.4,0.92,0.92,0,0,1-.81.54h0a3.14,3.14,0,0,1-1.45-.7H42.85l0-.08a1.42,1.42,0,0,1-.46-0.79,0.92,0.92,0,0,1,.3-0.42L43,44.86V42l0.07,0c0.41-.3.37-0.27,0.38-0.35s0-.17,0-0.33a0.24,0.24,0,0,1,0-.05l-0.07-.17c-0.06-.14-0.14-0.32-0.23-0.5a3,3,0,0,0-.49-0.78l-0.14-.1,0.1-.13a1.27,1.27,0,0,0,.27-0.77A1.33,1.33,0,0,0,42.6,38l0,0v0a4.73,4.73,0,0,1,0-.7c0-1.37.49-3,.48-3.8V33.27l0.07-.05c0.43-.25.29-1.66,0.81-2.75a12.93,12.93,0,0,1,1.52-2.1,6.19,6.19,0,0,1,1.84-3.64c0.1-.48.88-4.34,1.64-5.51a5.35,5.35,0,0,1,.59-0.47l0.48-.35c0-.25.3-1,1.73-2.28a6.23,6.23,0,0,1-.21-1.52,3.12,3.12,0,0,1,.25-1.31l0,0,0,0c0.94-.67,1.49-2.19,3-3.57V6.72L50,6.68c-0.71.67-2.59,0.74-2.61,3.23v0.17H47.18a2.31,2.31,0,0,0-.94.35,1.12,1.12,0,0,0-.63.77V14.7a5.1,5.1,0,0,1-.89,1.73l-0.11.17-0.15-.14a1,1,0,0,1-.41-0.77c0-.17,0-0.29,0-0.37a0.61,0.61,0,0,0-.37-0.49l-0.06,0V14.73s-0.13-.9-0.23-1.47a1.69,1.69,0,0,0-.13-0.65l-0.11-.07,0-.12a6.86,6.86,0,0,0,.4-2,1.68,1.68,0,0,0-.36-1.18,2.35,2.35,0,0,0-.41-0.33l-0.07,0V4.69l0,0a2.15,2.15,0,0,0,.4-1s0-.06,0-0.09l0-.19h0.19c6.12,0,6.68,0,12.69,0h0.17V5.85c0,0.37.4,0.43,0.43,1.05v7.92l-0.06.05a1.9,1.9,0,0,0-.53,1.48,4.68,4.68,0,0,0,.15,1.16l0,0.11-0.1.07c-1.26.88-1.91,4.39-2.67,5.29v2l-0.1,0s-1.75.76-2.08,1.66a2.25,2.25,0,0,0-.11.78,6,6,0,0,0,.12,1.11l0,0.14-0.13.05c-1.43.54-3.73,7-3.69,7.34v1.17l-0.18,0,0.09,0.09v0a1.18,1.18,0,0,0-.08.16c-0.07.15-.15,0.37-0.26,0.64-0.2.54-.46,1.26-0.73,2A24.21,24.21,0,0,1,45,43.66C45.22,44,45.24,44,45.26,44s0.18,0,.39,0c0.38,0,.54-0.22,2.2-1a5.24,5.24,0,0,0,2.06-.47,12.19,12.19,0,0,0,1.34-1.92,3.67,3.67,0,0,1,2.48-1.83,3.77,3.77,0,0,1,.79-1.83l0.15-.15,0.1,0.18a2.89,2.89,0,0,0,.23.35c1.38-.64.76-1.31,1.48-2.18l0-.06h1.22v0.17s0,0.17,0,.43A6.9,6.9,0,0,0,58,37.65Zm-37,2.91c0,0.53.3,1.58,0.3,2.57a3.68,3.68,0,0,1-.06.69,12.09,12.09,0,0,1-.75,2.18,14.07,14.07,0,0,0-1.25,2.18,13.75,13.75,0,0,0-.6,3v0.1l-0.09,0A20.29,20.29,0,0,0,15.85,53a5.79,5.79,0,0,0-2,1.82l0,0.1h-0.1a21.65,21.65,0,0,0-2.75.55,0.25,0.25,0,0,0-.12.05,0.57,0.57,0,0,1-.42.26c-0.5-.09-0.61-0.67-0.95-0.63a1,1,0,0,0-.64.37C8.63,56,8,56,7.26,56a18.18,18.18,0,0,1-2.63-.25,1.21,1.21,0,0,1-.52.08c-0.47,0-1.08-.1-1.41-0.1H2.53L2.44,56l-0.15-.14c-0.19-.17-0.44-0.4-0.52-0.45l-0.28-.18,0.31-.11a6,6,0,0,0,1.31-.69h0l0-.07c0-.07.07-0.18,0.11-0.3s0.18-.61.28-1c0.21-.8.42-1.77,0.56-2.51,0-2.54.15-3.84,0.15-5.17a16.09,16.09,0,0,0-.15-2.19c0-.31-0.18-2.65-0.38-4.34,0-2.74.16-5.55,0.16-7.21,0-.32,0-0.59,0-0.81V30.59H4a0.62,0.62,0,0,0,.52-0.38L4.44,28l-0.33-.7,0-3.17a2.4,2.4,0,0,1,.41-0.93,2,2,0,0,0,.07-0.66c0-.42,0-0.87-0.05-1L4.1,20.78v-11l0.07,0c0.41-.3.41-0.3,0.4-0.36s0-.25,0-0.56,0-.47,0-0.51h0A2.32,2.32,0,0,1,4.31,8L3.94,8a0.17,0.17,0,0,1-.15.1A0.33,0.33,0,0,1,3.6,8.06H3.45a0.17,0.17,0,0,1-.13-0.17,0.24,0.24,0,0,1,.06-0.13L3.16,7.5,1.72,6.13a1.16,1.16,0,0,0-.32-0.4,0.32,0.32,0,0,1-.15-0.29c0-.09,0-0.21,0-0.45a1.11,1.11,0,0,1,.09-0.68,2,2,0,0,0,.37-0.46l0-.08H4.08a5.07,5.07,0,0,1,1.73-.39c0.81-.1,1.65-0.16,1.93-0.16L10,3.29c2.31,0,3.16-.23,4.37-0.23a12,12,0,0,1,2,.18l0.11,0,0,0.11A2.55,2.55,0,0,0,17.68,4.6l0.25,0a2,2,0,0,1,1.13.32A6.43,6.43,0,0,1,21.3,9.49c0,1.24.28,2.41,0.28,3.33a1.81,1.81,0,0,1-.42,1.34l-1.61,3A25.65,25.65,0,0,1,17,20.61a1.28,1.28,0,0,0,.49.44A3.75,3.75,0,0,0,19,21.5a0.64,0.64,0,0,1,.56.67,2.64,2.64,0,0,1-.5,1.27,0.17,0.17,0,0,0,0,.13,0.87,0.87,0,0,0,.11.4,0.32,0.32,0,0,0,.16.17s0,0,.07-0.07l0.11-.17L19.62,24a1.91,1.91,0,0,1,.77,1c0,0.06-.12-0.06.4,0.35l0.09,0.07,0,0.11a14.22,14.22,0,0,0-.36,3,5.33,5.33,0,0,0,.35,2.08c0.12,0.36.85,0.55,0.92,1.09a0.5,0.5,0,0,1-.14.33c0,0.16,0,.57,0,1,0,0.28,0,.58,0,0.83,0,0.06,0,.11,0,0.17,0,1.36.25,2.67,0.25,3.86a4,4,0,0,1-.74,2.56A0.45,0.45,0,0,0,21.09,40.74ZM15.15,10.85a0.2,0.2,0,0,1,.09-0.21l0.63-.44c-0.71-.24-1.34.19-1.94-1h-0.2l-1.92.28,0.12-.27A0.43,0.43,0,0,0,12,9l-0.16.08a1.67,1.67,0,0,0-.1.61,0.65,0.65,0,0,1-.43.56v8.28a1.43,1.43,0,0,1,.44-0.08h0a0.86,0.86,0,0,1,.47.14c0.86-.26.5-2.37,3-2.67,0-.22,0-0.57,0-1,0-1,0-2.17.42-2.64A7.7,7.7,0,0,1,15.15,10.85Zm0.35,29.51c0-.29.16-0.55,0.15-0.73a0.33,0.33,0,0,0-.19-0.3l-0.21-.13,0.2-.14a0.37,0.37,0,0,0,.16-0.35c0-.51-0.57-1.41-0.58-2.26a1.29,1.29,0,0,1,.52-1.07,1.57,1.57,0,0,0-.31-1.31,1.53,1.53,0,0,1-.4-1.35c0-.48.43-1.34,0.42-1.84a0.3,0.3,0,0,0-.12-0.3L15,30.5l0.07-.15a1,1,0,0,0,.11-0.46,1.69,1.69,0,0,0-.41-1l-0.24-.26,0.35,0,0.11,0a2.78,2.78,0,0,1-.34-0.74,0.28,0.28,0,0,1,.12-0.24,0.21,0.21,0,0,0,.06-0.16,2.31,2.31,0,0,0-.68-1,10.4,10.4,0,0,1-1.79-1.38L11.29,24c0,0.56,0,1.58,0,2.52,0,0.68,0,1.31,0,1.7v0.05l0,0A1.79,1.79,0,0,0,11,29.32a9.26,9.26,0,0,0,.27,2v0l-0.46,2.23-0.08,0a0.48,0.48,0,0,0-.33.45s0,0,0,.05a0.5,0.5,0,0,0,.33.48l0.1,0v8.17l0,0.05a1,1,0,0,0-.39.5c0,0.15,0,.26-0.06.33a0.32,0.32,0,0,1-.07.15c0,0.42,0,1.38,0,3.45,0,0,0,1.07.06,1.51l0,0a0.16,0.16,0,0,1,0,.11,5.8,5.8,0,0,1-.49,1l-0.31.57a6.05,6.05,0,0,0,1.16-.25l1-.92h0.06c0.73,0,1.65-1.55,2.26-2s0.34-2.27.61-3.71V43.53l0,0h0l0-.08c0-.07.07-0.18,0.11-0.3s0.18-.58.28-0.91a10,10,0,0,0,.34-1.62h0A0.56,0.56,0,0,1,15.51,40.35Zm89.4,7.42a1.25,1.25,0,0,1,.17.63,2.16,2.16,0,0,1-.18.8c-0.24.55-.08,0.7-1.12,5.74l0,0.18-0.17-.05a8.31,8.31,0,0,1-2-.84c-2.3-2.24-2.91-2.37-3.88-2.37H96.92l0-.12a0.43,0.43,0,0,1,0-.16c0-.78,1.3-3.71,1.53-5a40.06,40.06,0,0,0,.18-4.22,12.89,12.89,0,0,0,0-1.41v0a31.62,31.62,0,0,0-.69-3.86c-0.39-1.79-1.08-3.56-1.54-3.6l-0.15,0,0-.15c0.13-1,.41-2.44.41-3a0.4,0.4,0,0,0,0-.16c-0.64-1.21-1.92-3.62-2.66-4a5,5,0,0,1,.05.59,3.8,3.8,0,0,1-.51,1.65,2.77,2.77,0,0,0-.42,1,0.15,0.15,0,0,0,0,0v0l0,0h0v0.06c0,1.14,1.11,10.23,1.11,11.08v0.12L94,40.87l0,0a0.74,0.74,0,0,0-.09.12,0.66,0.66,0,0,0-.12.35,0.12,0.12,0,0,0,0,0,3.18,3.18,0,0,1,.38.77c0,0.53.09,1.16,0.09,1.8a7.12,7.12,0,0,1-.39,2.61c0.06,1,.45,3.34.45,4.47a2.36,2.36,0,0,1,0,.4v0l0,0a0.93,0.93,0,0,1-.39.34,5.76,5.76,0,0,1,.07.86,12.72,12.72,0,0,1-.41,2.84l-0.13.55-0.19-.53a11.55,11.55,0,0,0-3.69-5.17c-1.26-1.05-2.27-1.36-2.36-2,0,0,1.52-5.37,2.18-6a1.51,1.51,0,0,0,.09-0.63,9,9,0,0,0-.1-1.2A2.93,2.93,0,0,0,89,40.28l-0.08-.05v-0.1c0-.09,0-1.48,0-3.26,0-3.39,0-8.24,0-8.75a5.8,5.8,0,0,1-.16-0.87h0l-0.06,0-0.21-1.85c-0.18-.26-0.29-0.76-0.36-0.77l-0.07,0V24.46s0-.46,0-0.92c0-.2,0-0.41,0-0.57a1.76,1.76,0,0,1-.14-0.58,3.59,3.59,0,0,0-.12-0.64h0l-0.08-.05V21.59s0-.05,0-0.15a3.41,3.41,0,0,0-.21-1.27,2,2,0,0,1-.17-1,4.8,4.8,0,0,0-.09-0.87l-0.05,0,0-2.23a1.13,1.13,0,0,1-.45-0.75c0-.07,0-0.12,0-0.14a0.72,0.72,0,0,0-.36-0.34l-0.06,0V14.75a16.81,16.81,0,0,1-.1-2,16.87,16.87,0,0,1,.1-2V10.67l0,0c0.71-.7,2.7-1.7,4-3.54C90,7,89.15,6.74,89,6.7l-0.07.09a0.64,0.64,0,0,1-.32.26,1.59,1.59,0,0,1-.46.12A0.85,0.85,0,0,1,87.69,7L87.61,7V6.9A4,4,0,0,0,86,4.67C85.25,4,84.57,3.61,84.34,3.41l-1.58-.34,0-.33,6.27-.17a2,2,0,0,1,1.09-.29,0.73,0.73,0,0,1,.73.47h2.28l0,0,0.11,0L93.7,3l1.2,0.39L96.6,3.89H97a3.59,3.59,0,0,1,.53,0,4.18,4.18,0,0,1,2,1,6.76,6.76,0,0,0,1,.83h0.1l2.22,4.68a3.69,3.69,0,0,1,.08,1c0,0.8-.06,1.79-0.06,1.79v0.08l-0.06,0a1.94,1.94,0,0,0-.16.43,2.45,2.45,0,0,1-.2.54c0,0.24,0,.52,0,0.77,0,0.56,0,1,0,1.09-0.81,3.19-2.31,5.75-5.08,5.86,0,0.39,0,.63,0,0.79a0.61,0.61,0,0,1-.27.58h0.11c0.33,0,.6-0.12,1-0.13,0.51,0,1.08.29,2,1.42a1.5,1.5,0,0,1,.56,1.34c0,0.11,0,.12.08,0.13a5.25,5.25,0,0,1,.64.26,0.36,0.36,0,0,1,.21.32,1,1,0,0,0,0,.15,1.1,1.1,0,0,0,.14.5,9.2,9.2,0,0,0,.34,1.45,9.35,9.35,0,0,1,.22,2.38,11.39,11.39,0,0,0,.18,2.13h0a0.54,0.54,0,0,1,.13.31c0,0.14.05,0.31,0.09,0.47a0.62,0.62,0,0,0,.27.54,0.42,0.42,0,0,0,.18-0.07l0.15-.1,0.08,0.16c0.22,0.42.76,4.73,0.82,5.08v0.07l0,0.06a7.09,7.09,0,0,0-.27,1.59,1,1,0,0,0,.44.17h0.07l0,0.06a5,5,0,0,1,.58,1.59l0,0.06,0,0.07a0.74,0.74,0,0,0-.17.44,10.11,10.11,0,0,1,.16,1.45,11.5,11.5,0,0,1-.27,2.26l0,0ZM97,16.72a5.46,5.46,0,0,1,.1-0.95l0-.2,0.1,0,0.06-.14a1.21,1.21,0,0,1,.16-0.34V14.22a2.25,2.25,0,0,0,.05-0.5,3.53,3.53,0,0,0-.46-1.7s-0.66-.93-1.44-1.86S93.87,8.31,93.5,8.34H93.13v12.8l0.51,0a2.45,2.45,0,0,0,.48,0,3.25,3.25,0,0,0,1.63-.88A21.54,21.54,0,0,0,97,17,2.16,2.16,0,0,1,97,16.72Zm24.39,5.17a8.78,8.78,0,0,1-.17,2.15l0,0,0,0c-0.12,0-.33.79-0.59,1.12,0,0.1,0,.21,0,0.32,0,0.52.07,1.13,0.07,1.73a3.09,3.09,0,0,1-.28,1.45,4.52,4.52,0,0,1-1,1.49L119,32.36a7.55,7.55,0,0,0-.32,1.57c0,0.41.25,3.66,0.25,6.1a11.66,11.66,0,0,1-.17,2.49,5.56,5.56,0,0,0-.33,2.23c0,0.21,0,.43,0,0.65a6.59,6.59,0,0,1-.36,2.49l-0.45,2.44a4.84,4.84,0,0,1-.9,1.9,1.73,1.73,0,0,1-.46.71,1.06,1.06,0,0,0-.36.3c-0.19.5-1.08,0.64-2.1,1a17.71,17.71,0,0,0-2.92.93l-0.12,0c-0.46,0-1.05-.55-1.27-0.53h0a1.83,1.83,0,0,1-1.23.54,10,10,0,0,1-1.74.19,1,1,0,0,1-.45-0.06l-0.2-.11L106,55a5,5,0,0,0,1.39-3c0-.07,0-0.14,0-0.22a8.38,8.38,0,0,0-.51-2.37l-0.06-.15,0.15-.06c0.62-.22,1.93-0.84,1.83-1.07a0.38,0.38,0,0,0,0-.19h-0.06a0.33,0.33,0,0,1-.34-0.19l-0.5-1.25-0.88-2,0.8-7.93a13.63,13.63,0,0,1-1.95-4.51V30.77c0-.37-0.39-0.43-0.43-1,0,0-.1-1.56-0.1-2.75a6,6,0,0,1,.08-1.2,2.71,2.71,0,0,0-.33-0.26L105,25.47l0.18-3a2.54,2.54,0,0,1-.16-0.68,5.86,5.86,0,0,0-.15-0.79v0l-0.08-.05V12.07l0.08-.05a3.61,3.61,0,0,0,.36-0.29V8.32l0.08,0A3.6,3.6,0,0,0,105.67,8V5.55C105.23,5.13,102,2,101.81,1.84l-0.22-.27h2.5l0,0.08a2.85,2.85,0,0,0,.26.39h1.46l0,0.13c0,0.43,2.06.68,3,1.74h1.43l0,0.08a4.59,4.59,0,0,0,.48.62h1.42l0.05,0.08a3.12,3.12,0,0,0,.26.39h1.86l0,0.08a2.88,2.88,0,0,0,.26.39h2l0.05,0.08c0.64,1.06,1.91,1.74,2.17,2.24,1.47,3.09,1.17,3.36,1.68,3.68l0.07,0-0.12,4.47a3.47,3.47,0,0,1,.25.71,4.73,4.73,0,0,0,.25.74l0.05,0v0.08S121.38,20,121.38,21.89Zm-6.56,7.36a2.09,2.09,0,0,1,.85-1.86c0.08-.45.39-2.55,1-3.12V20a3,3,0,0,1-.61-1.45,13.79,13.79,0,0,0-.33-1.34c-0.5-.74-1.55-1-1.65-2.16-1-.11-1.17-1-1.58-0.92-0.82,0-1.25-.06-1.87-0.06l-0.67,0-0.17,1.62,0.12,0.56s0.18,4.71.18,6.48c0,0.15,0,.28,0,0.38h0c0,0.08.1,0.19,0.14,0.29l0.19,0.42v0.06a6.38,6.38,0,0,0,.78,2.66l0.09,0-0.06,20.69a8.51,8.51,0,0,0,2.07-4.8c0-.07,0-0.15,0-0.27,0.49-1.66,1-2.21,1.18-3.16a0.32,0.32,0,0,1,0,0c0-.52,0-8.5.3-9.55C114.82,29.39,114.82,29.32,114.82,29.25ZM41.26,47.13L41,47a1.62,1.62,0,0,0-.64-0.14H40l0,0H39.89a1.64,1.64,0,0,0-.66.22l-0.09,0-0.08-.06a4.87,4.87,0,0,0-1.7-.18A13.75,13.75,0,0,0,34,47.2,2.15,2.15,0,0,1,33,48h0a0.27,0.27,0,0,1-.18-0.08h0a3,3,0,0,1-.6-0.49l-0.15-.1,0.11-.14c1.25-1.56.55-1.09,2-2.05a30.72,30.72,0,0,0,.37-5.61V39.1l0.07,0c0.39-.3.37-0.3,0.38-0.4s0-.21,0-0.4a6.37,6.37,0,0,1-.43-1.41A3.21,3.21,0,0,1,35.11,35L35,16.51l0.06,0a3.33,3.33,0,0,1,.31-0.23l0.06,0a0.41,0.41,0,0,0,0-.05A0.62,0.62,0,0,0,35,15.91L35,15.86,34.42,6.44a1.09,1.09,0,0,0-.91-0.67,1.13,1.13,0,0,1-.92-0.61A0.86,0.86,0,0,1,31.87,5a1.92,1.92,0,0,0-.55-0.55l-0.14-.1,0.11-.14c0.16-.21.37-0.47,0.42-0.56l0.06-.12,0.13,0a29.63,29.63,0,0,0,4.33.21A21.43,21.43,0,0,0,40,3.55l0.13-.05,0.07,0.12a5.43,5.43,0,0,0,.53.68l0,0V5.24l-0.12,0c-1.06.28-2.2,1.26-2.18,2.06,0,0.64.08,0.6,0.13,0.64a0.68,0.68,0,0,1,.3.77,0.89,0.89,0,0,1-.39.77,0.45,0.45,0,0,0-.26.4c0,1.39.2,5.14,0.2,8.32a31.11,31.11,0,0,1-.18,3.91,1.17,1.17,0,0,1,.19.59,3.69,3.69,0,0,0,.14.68v0l0.07,0,0.24,1.37-0.09.06a2,2,0,0,0-.4.33,1.54,1.54,0,0,0-.32,1.06c0,0.41.08,0.8,0.08,1a3.75,3.75,0,0,0,0,.5A5.28,5.28,0,0,0,38.29,29c0.05,0.28,0,.86.06,1.17a0.16,0.16,0,0,0,0,.12l0.07,0v0.08a5.55,5.55,0,0,1,.06.84,7.79,7.79,0,0,1-.06,1v0.07l-0.06,0a2.26,2.26,0,0,0-.41.33,1,1,0,0,0-.37.77A18.19,18.19,0,0,1,38,35.89v0.17a8.24,8.24,0,0,0,.59,1.63h0l0.07,0.05L38.47,41l-0.07,0a1.39,1.39,0,0,0-.39.32,0.77,0.77,0,0,0-.18.51,5.16,5.16,0,0,0,.21,1c0.36,1.48.24,0.66,2.94,2.61l0.06,0ZM56.6,56.57H50.54l0-.09a4.07,4.07,0,0,0-.26-0.38H48.81l0-.08a0.59,0.59,0,0,0-.44-0.41l-0.26,0a1,1,0,0,1-.75-0.47H43.15a1.05,1.05,0,0,1-1-.62c-0.86-.07-6.27-0.08-9.12-0.08H31.16l-0.05-.08a2.64,2.64,0,0,0-1.26-.62H28.27C28,54,25.75,55.4,25.56,56l-0.05.13-0.13,0a18.6,18.6,0,0,0-2.56-.23,3,3,0,0,0-1.33.21l-0.15.09L21.26,56a1.09,1.09,0,0,0-.38-0.41l-0.15-.11,0.11-.14a1,1,0,0,0,.4-0.74V54.53l1.27-.68c0.5-.49.43-0.28,1.53-1.28v-2l0.07,0a0.6,0.6,0,0,0,.36-0.45,0.6,0.6,0,0,0-.36-0.45L24,49.57V46L24.12,46a3.44,3.44,0,0,0,.36-0.29V44.13l0.07,0c0.41-.3.37-0.27,0.37-0.35s0-.17,0-0.33a1.45,1.45,0,0,0-.8-1.16L24,42.2v-6l0.1,0a0.46,0.46,0,0,0,.34-0.33,11.55,11.55,0,0,1-.1-1.55,10.46,10.46,0,0,1,.11-1.6V32.65l0.06,0a3.62,3.62,0,0,0,.36-0.29v-4.7l0.07,0a1.65,1.65,0,0,0,.48-1s0,0,0-.07A1.44,1.44,0,0,0,25,25.62l-0.07,0V19a2.69,2.69,0,0,0-.36-0.29l-0.07,0V15.1l0.07,0a7.29,7.29,0,0,0,.8-0.76c0-.25.09-1.17,0.09-2a5.83,5.83,0,0,0-.08-1.12,3,3,0,0,0-.38-0.3l-0.15-.1L25,10.63a6.33,6.33,0,0,0,.72-2.07v0a7.1,7.1,0,0,0-.75-2.41,1,1,0,0,0-.86-0.25H23.89l0,0.07L23.7,5.84c-0.51-.38.17-0.64-2.18-2.35l-0.14-.11,0.11-.14a1,1,0,0,0,.4-0.75l0-.13h0.77l0.05,0.08a3,3,0,0,0,.26.38h3.48l0,0.08a1.35,1.35,0,0,0,1,.9c0.14,0,.27-0.07.46-0.07a0.42,0.42,0,0,1,.26.1,18.46,18.46,0,0,0,1.92,2.08l0.07,0v4.39l-0.07.05a0.56,0.56,0,0,0-.36.57v0h0a1.56,1.56,0,0,0,.8.88l0.07,0v2L30.59,14a2.79,2.79,0,0,0-.36.28v9.22a2.43,2.43,0,0,1,.85.82,10,10,0,0,1,.25,3c0,2.78-.23,6.49-0.23,6.49v0.08l-0.07,0a3,3,0,0,0-.36.29v3.13c0.13,0.11.24,0.21,0.36,0.29l0.06,0v0.07a6.51,6.51,0,0,1,0,.86c0,0.73,0,1.63,0,1.64v0.13L31,40.4c-0.53.08-.49,0.43-0.71,1.1a1,1,0,0,1,.41.82v0.14a0.84,0.84,0,0,1-.43.9v2l-0.07.05a3.19,3.19,0,0,0-.36.28v2.94l-0.07.05a0.84,0.84,0,0,0-.37.61,0.58,0.58,0,0,0,0,.14,1.35,1.35,0,0,1,.47,1.28c0.8,0,1.39.11,2.12,0.11a8.76,8.76,0,0,0,1.29-.1,3,3,0,0,1,1.25-1.06l0.2,0c0.74,0,2.07.67,3.53,0.67a3.86,3.86,0,0,0,2.11-.58A0.83,0.83,0,0,1,41,49.37a13.22,13.22,0,0,1,1.62-.18c1.33-.09,3.12-0.12,4.93-0.12,3.86,0,7.85.14,7.85,0.14h0.16v5.54h0l0.05,0.12,0.2,0.4a10.46,10.46,0,0,0,.59,1ZM123.25,4.42c0,0.54-.26,1.27-2.06,1.27s-2.08-.73-2.08-1.27V2.69c0-.53.28-1.27,2.08-1.27s2.06,0.74,2.06,1.27V4.42Zm-0.36-1.76c0-.41-0.28-0.9-1.7-0.9s-1.71.49-1.71,0.9V4.45c0,0.41.29,0.91,1.71,0.91s1.7-.49,1.7-0.9V2.66Zm-2.24,1.26V4.8a0.07,0.07,0,0,1-.07.09h-0.22a0.08,0.08,0,0,1-.08-0.09V2.39a0.07,0.07,0,0,1,.08-0.09h0.93c0.75,0,.93.36,0.93,0.69V3.23a0.64,0.64,0,0,1-.5.64l0.4,0.93a0.07,0.07,0,0,1-.08.09h-0.23a0.1,0.1,0,0,1-.09-0.09l-0.37-.88h-0.71Zm0-1.33v1h0.6a0.49,0.49,0,0,0,.6-0.42V3a0.49,0.49,0,0,0-.6-0.42h-0.6Z" />
                                    </g>
                                    <g id="NavbarFooter-blizzard-lower">
                                        <polygon points="9.53 64.97 5.89 64.97 5.89 60.03 9.48 60.03 9.48 60.94 7.12 60.93 7.12 61.97 9.37 61.97 9.37 62.88 7.12 62.87 7.12 64.06 9.53 64.06 9.53 64.97" />
                                        <polygon points="18.54 64.87 17.56 64.87 15 61.89 15 64.86 13.84 64.86 13.84 60.22 14.9 60.22 17.38 63.06 17.38 60.23 18.54 60.23 18.54 64.87" />
                                        <polygon points="28.71 60.93 26.92 60.92 26.92 64.97 25.69 64.97 25.69 60.92 23.89 60.92 23.89 60.01 28.71 60.02 28.71 60.93" />
                                        <polygon points="36.5 64.97 32.88 64.96 32.88 60.06 36.45 60.06 36.45 60.96 34.1 60.96 34.1 61.99 36.34 61.99 36.34 62.89 34.1 62.89 34.1 64.06 36.5 64.07 36.5 64.97" />
                                        <path d="M44,60a1.46,1.46,0,0,1,1.59,1.4,1.25,1.25,0,0,1-.83,1.19c0.5,0.25.65,0.85,1.33,2.28H44.72c-0.52-1-.71-2-1.37-2H43v2H41.8V60H44Zm-1,2h0.64a0.57,0.57,0,0,0,.66-0.55,0.56,0.56,0,0,0-.69-0.55H43V62Z" />
                                        <polygon points="54.71 60.96 52.92 60.96 52.92 64.99 51.68 64.99 51.68 60.95 49.88 60.95 49.88 60.05 54.71 60.06 54.71 60.96" />
                                        <path d="M63.21,65H61.93L61.54,64H59.41L59,65H57.79l1.92-4.76h1.38Zm-2.79-3.63-0.7,1.85h1.47Z" />
                                        <polygon points="68.73 64.9 67.82 64.9 67.82 60.01 68.73 60.01 68.73 64.9" />
                                        <polygon points="78.63 65 77.62 65 74.96 61.91 74.96 64.99 73.76 64.99 73.76 60.18 74.86 60.18 77.43 63.13 77.43 60.19 78.63 60.19 78.63 65" />
                                        <polygon points="87.89 60.04 88.97 60.04 88.97 65.02 87.73 65.01 87.73 61.91 86.39 63.46 86.2 63.46 84.86 61.9 84.86 65.01 83.62 65.01 83.62 60.03 84.7 60.03 86.29 61.88 87.89 60.04" />
                                        <polygon points="98.07 64.93 94.58 64.92 94.58 60.19 98.02 60.19 98.02 61.06 95.76 61.06 95.76 62.05 97.92 62.05 97.92 62.92 95.76 62.92 95.76 64.05 98.07 64.06 98.07 64.93" />
                                        <polygon points="107.63 65 106.61 65 103.9 61.86 103.9 64.99 102.68 64.99 102.68 60.1 103.8 60.1 106.41 63.1 106.41 60.11 107.63 60.11 107.63 65" />
                                        <polygon points="116.66 60.93 114.88 60.93 114.88 64.94 113.65 64.94 113.65 60.93 111.88 60.93 111.88 60.03 116.66 60.03 116.66 60.93" />
                                    </g>
                                </svg>
                                <div class="Navbar-overlay"></div>
                                <div class="Navbar-container">
                                    <nav class="Navbar-mobile">
                                        <div class="Navbar-mobileOverlay Navbar-overlay"></div>
                                        <a data-target="Navbar-siteMenu" data-site-mode="true" class="Navbar-menu Navbar-modalToggle is-noSelect">
                                            <div class="Navbar-icon Navbar-mobileIcon Navbar-siteMenuIcon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" focusable="false">
                                                    <use xlink:href="#Navbar-icon-menu"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.blizzard.com/" class="Navbar-logo" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 151.15 68.46" focusable="false">
                                                <use xlink:href="#Navbar-logo-blizzard"></use>
                                            </svg>
                                        </a>
                                        <a href="/" class="Navbar-customLogo"><img src="https://images.blz-contentstack.com/v3/assets/blt3452e3b114fab0cd/blt7d4081e51802d075/5e14fc9a980c937e6d6451f0/ui_nav_wow_yellow_icon.png" /></a>
                                        <div class="Navbar-profileItems">
                                            <a data-target="Navbar-accountModal" class="Navbar-account Navbar-modalToggle is-noSelect">
                                                <div class="Navbar-icon Navbar-mobileIcon Navbar-profileIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" focusable="false">
                                                        <use xlink:href="#Navbar-icon-profile"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </nav>
                                    <nav class="Navbar-desktop">
                                        <div class="Navbar-desktopOverlay Navbar-overlay"></div>
                                        <a href="https://www.blizzard.com/" class="Navbar-logo" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 151.15 68.46" focusable="false">
                                                <use xlink:href="#Navbar-logo-blizzard"></use>
                                            </svg>
                                        </a>
                                        <div class="Navbar-collapsedItems is-hidden">
                                            <a data-target="Navbar-siteMenu" class="Navbar-menu Navbar-item Navbar-link Navbar-modalToggle is-noSelect">
                                                <div class="Navbar-icon Navbar-collapsedIcon Navbar-siteMenuIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" focusable="false">
                                                        <use xlink:href="#Navbar-icon-menu"></use>
                                                    </svg>
                                                </div>
                                                <div class="Navbar-label">Menú</div>
                                            </a>
                                        </div>
                                        <div class="Navbar-items">
                                            <a class="Navbar-item Navbar-modalToggle is-noSelect Navbar-games" data-index='0' data-name="games" data-target="Navbar-gamesDropdown">
                                                <div class="Navbar-label">Juegos</div>
                                                <div class="Navbar-icon Navbar-dropdownIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                        <use xlink:href="#Navbar-icon-dropdown"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="https://shop.blizzard.com/" class="Navbar-item Navbar-link is-noSelect Navbar-shop" data-index='1' data-name="shop" data-analytics="global-nav" data-analytics-placement="Nav - Shop">
                                                <div class="Navbar-label">Tienda</div>
                                            </a>
                                            <a href="https://news.blizzard.com" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="news" data-analytics="global-nav" data-analytics-placement="Nav - News">
                                                <div class="Navbar-label">Noticias</div>
                                            </a>
                                            <a class="Navbar-item Navbar-modalToggle is-noSelect Navbar-esports" data-index='3' data-name="esports" data-target="Navbar-esportsDropdown">
                                                <div class="Navbar-label">Esports</div>
                                                <div class="Navbar-icon Navbar-dropdownIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                        <use xlink:href="#Navbar-icon-dropdown"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="https://blizzcon.com?blzcmp=globalnav_blizzcon" class="Navbar-item Navbar-link is-noSelect Navbar-blizzcon" data-index='4' data-name="blizzcon" data-analytics="global-nav" data-analytics-placement="Nav - Blizzcon">
                                                <div class="Navbar-label">BlizzCon</div>
                                            </a>
                                            <a href="%SIMPLE_URL%" data-index='0' data-name="simple" data-analytics="global-nav" data-analytics-placement="Nav - %SIMPLE_LABEL%" class="Navbar-item Navbar-link Navbar-simple is-noSelect">
                                                <div class="Navbar-label">%SIMPLE_LABEL%</div>
                                            </a>
                                        </div>
                                        <div class="Navbar-profileItems">
                                            <a href="https://support.blizzard.com/" class="Navbar-support Navbar-item Navbar-link is-noSelect" data-index="0" data-name="support" data-analytics="global-nav" data-analytics-placement="Nav - Support">
                                                <div class="Navbar-label">Asistencia</div>
                                                <div class="Navbar-supportCounter">0</div>
                                            </a>
                                            <a data-target="Navbar-accountDropdown" data-name="account" class="Navbar-account Navbar-item Navbar-modalToggle is-noSelect">
                                                <div class="Navbar-icon Navbar-employeeIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                        <use xlink:href="#Navbar-icon-blizz"></use>
                                                    </svg>
                                                </div>
                                                <div class="Navbar-label Navbar-accountUnauthenticated">Mi cuenta</div>
                                                <div class="Navbar-label Navbar-accountAuthenticated">%USER_BATTLETAG_FULL%</div>
                                                <div class="Navbar-icon Navbar-dropdownIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                        <use xlink:href="#Navbar-icon-dropdown"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="Navbar-modals">
                                    <style>
                                        .Navbar .Navbar-dropdown .Navbar-gamePublishers.Navbar-columns9 .Navbar-gamePublisher.Navbar-columns2 .Navbar-poster {
                                            width: calc(49.99% - 10px);
                                        }
                                    </style>
                                    <div data-toggle="games" class="Navbar-modal Navbar-dropdown Navbar-gamesDropdown is-full">
                                        <div class="Navbar-tick">
                                            <div class="Navbar-tickInner"></div>
                                        </div>
                                        <div class="Navbar-modalContent">
                                            <div class="Navbar-gamePublishers Navbar-columns12 Navbar-modalSection is-full is-center">
                                                <div data-publisher="blizzard" data-name="Blizzard" class="Navbar-gamePublisher Navbar-columns9">
                                                    <div class="Navbar-gamePublisherLabel animation-delay-9">Blizzard</div>
                                                    <nav class="Navbar-gameLogos">
                                                        <div class="Navbar-gameLogoBlock Navbar-columns3 Navbar-imagePanel">
                                                            <a href="https://blizzcon.playoverwatch.com/" class="Navbar-gameLogo animation-delay-1" data-analytics="global-nav" data-analytics-placement="Nav - Games - Overwatch2"><img src="https://blznav.akamaized.net/img/games/logo-ow2-703ebd8d46d3d783.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Overwatch<span class="Navbar-registered">®</span> 2</div>
                                                            </a>
                                                            <a href="https://playoverwatch.com/" class="Navbar-gameLogo animation-delay-2" data-analytics="global-nav" data-analytics-placement="Nav - Games - Overwatch"><img src="https://blznav.akamaized.net/img/games/logo-ow-4be5755bc0a4cbaf.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Overwatch<span class="Navbar-registered">®</span></div>
                                                            </a>
                                                            <a href="https://worldofwarcraft.com/" class="Navbar-gameLogo animation-delay-3" data-analytics="global-nav" data-analytics-placement="Nav - Games - World of Warcraft"><img src="https://blznav.akamaized.net/img/games/logo-wow-3dd2cfe06df74407.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">World of Warcraft<span class="Navbar-registered">®</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="Navbar-gameLogoBlock Navbar-columns2 Navbar-imagePanel">
                                                            <a href="https://playhearthstone.com/" class="Navbar-gameLogo animation-delay-4" data-analytics="global-nav" data-analytics-placement="Nav - Games - Hearthstone"><img src="https://blznav.akamaized.net/img/games/logo-hs-93512467e87f82c6.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Hearthstone<span class="Navbar-registered">®</span></div>
                                                            </a>
                                                            <a href="https://heroesofthestorm.com/" class="Navbar-gameLogo animation-delay-5" data-analytics="global-nav" data-analytics-placement="Nav - Games - Heroes of the Storm"><img src="https://blznav.akamaized.net/img/games/logo-heroes-78cae505b7a524fb.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Heroes of the Storm™</div>
                                                            </a>
                                                        </div>
                                                        <div class="Navbar-gameLogoBlock Navbar-columns2 Navbar-imagePanel">
                                                            <a href="https://playwarcraft3.com/" class="Navbar-gameLogo animation-delay-6" data-analytics="global-nav" data-analytics-placement="Nav - Games - Warcraft III Reforged"><img src="https://blznav.akamaized.net/img/games/logo-w3r-c8a76eea272dbd55.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Warcraft<span class="Navbar-registered">®</span> III: Reforged™</div>
                                                            </a>
                                                            <a href="https://diablo.blizzard.com/" class="Navbar-gameLogo animation-delay-7" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo IV"><img src="https://blznav.akamaized.net/img/games/logo-d4-648f2299fd6cdd15.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Diablo<span class="Navbar-registered">®</span> IV</div>
                                                            </a>
                                                        </div>
                                                        <div class="Navbar-gameLogoBlock Navbar-columns2 Navbar-imagePanel">
                                                            <a href="https://diabloimmortal.com" class="Navbar-gameLogo animation-delay-8" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo Immortal"><img src="https://blznav.akamaized.net/img/games/logo-di-01f9ac836ec31eed.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Diablo<span class="Navbar-registered">®</span> Immortal™</div>
                                                            </a>
                                                            <a href="https://us.diablo3.com/" class="Navbar-gameLogo animation-delay-9" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo III"><img src="https://blznav.akamaized.net/img/games/logo-d3-ab08e4045fed09ee.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Diablo<span class="Navbar-registered">®</span> III</div>
                                                            </a>
                                                        </div>
                                                        <div class="Navbar-gameLogoBlock Navbar-columns2 Navbar-imagePanel">
                                                            <a href="https://starcraft2.com/" class="Navbar-gameLogo animation-delay-10" data-analytics="global-nav" data-analytics-placement="Nav - Games - StarCraft II"><img src="https://blznav.akamaized.net/img/games/logo-sc2-6e33583ba0547b6a.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">StarCraft<span class="Navbar-registered">®</span> II</div>
                                                            </a>
                                                            <a href="https://starcraft.com/" class="Navbar-gameLogo animation-delay-11" data-analytics="global-nav" data-analytics-placement="Nav - Games - StarCraft Remastered"><img src="https://blznav.akamaized.net/img/games/logo-scr-fef4f892c20f584c.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">StarCraft<span class="Navbar-registered">®</span> Remastered</div>
                                                            </a>
                                                        </div>
                                                    </nav>
                                                    <nav class="Navbar-posters Navbar-imagePanel">
                                                        <a href="https://blizzcon.playoverwatch.com/" class="Navbar-poster animation-delay-1" data-analytics="global-nav" data-analytics-placement="Nav - Games - Overwatch2"><img src="https://blznav.akamaized.net/img/games/cards/card-overwatch2-2f18e8a019a30a6d.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://playoverwatch.com/" class="Navbar-poster animation-delay-2" data-analytics="global-nav" data-analytics-placement="Nav - Games - Overwatch"><img src="https://blznav.akamaized.net/img/games/cards/card-overwatch-7eff92e1257149aa.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://worldofwarcraft.com/" class="Navbar-poster animation-delay-3" data-analytics="global-nav" data-analytics-placement="Nav - Games - World of Warcraft"><img src="https://blznav.akamaized.net/img/games/cards/card-world-of-warcraft-54576e6364584e35.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://playhearthstone.com/" class="Navbar-poster animation-delay-4" data-analytics="global-nav" data-analytics-placement="Nav - Games - Hearthstone"><img src="https://blznav.akamaized.net/img/games/cards/card-hearthstone-e9fe5d89ddb0ae23.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://heroesofthestorm.com/" class="Navbar-poster animation-delay-5" data-analytics="global-nav" data-analytics-placement="Nav - Games - Heroes of the Storm"><img src="https://blznav.akamaized.net/img/games/cards/card-heroes-of-the-storm-fa2904645cfdd22d.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://playwarcraft3.com/" class="Navbar-poster animation-delay-6" data-analytics="global-nav" data-analytics-placement="Nav - Games - Warcraft III Reforged"><img src="https://blznav.akamaized.net/img/games/cards/card-warcraft-3-reforged-e4051122f0f4fa12.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://diablo.blizzard.com/" class="Navbar-poster animation-delay-7" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo IV"><img src="https://blznav.akamaized.net/img/games/cards/card-diablo-4-b668c022659c23e3.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://diabloimmortal.com" class="Navbar-poster animation-delay-8" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo Immortal"><img src="https://blznav.akamaized.net/img/games/cards/card-diablo-immortal-27ce8fcd012c5f03.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://us.diablo3.com/" class="Navbar-poster animation-delay-9" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo III"><img src="https://blznav.akamaized.net/img/games/cards/card-diablo-3-6218a0746762f065.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://starcraft2.com/" class="Navbar-poster animation-delay-10" data-analytics="global-nav" data-analytics-placement="Nav - Games - StarCraft II"><img src="https://blznav.akamaized.net/img/games/cards/card-starcraft-2-c4f45e7ba6425848.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://starcraft.com/" class="Navbar-poster animation-delay-11" data-analytics="global-nav" data-analytics-placement="Nav - Games - StarCraft Remastered"><img src="https://blznav.akamaized.net/img/games/cards/card-starcraft-remastered-6b54d5feb865eab7.jpg" class="Navbar-posterImage" /></a>
                                                    </nav>
                                                </div>
                                                <div data-publisher="activision" data-name="Activision" class="Navbar-gamePublisher Navbar-columns3">
                                                    <div class="Navbar-gamePublisherLabel animation-delay-9">Activision</div>
                                                    <nav class="Navbar-gameLogos">
                                                        <div class="Navbar-gameLogoBlock Navbar-columns2 Navbar-imagePanel">
                                                            <a href="https://shop.battle.net/family/call-of-duty-mw" class="Navbar-gameLogo animation-delay-12" data-analytics="global-nav" data-analytics-placement="Nav - Games - Call of Duty Modern Warfare"><img src="https://blznav.akamaized.net/img/games/logo-codmw-d57b296321d6b444.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Call of Duty<span class="Navbar-registered">®</span>: Modern Warfare<span class="Navbar-registered">®</span></div>
                                                            </a>
                                                            <a href="https://shop.battle.net/product/call-of-duty-black-ops-4" class="Navbar-gameLogo animation-delay-13" data-analytics="global-nav" data-analytics-placement="Nav - Games - Call of Duty Black Ops 4"><img src="https://blznav.akamaized.net/img/games/logo-codbo4-7794ee86f3e8be3e.png" alt="" class="Navbar-gameLogoImage" />
                                                                <div class="Navbar-gameLogoLabel">Call of Duty<span class="Navbar-registered">®</span>: Black Ops 4</div>
                                                            </a>
                                                        </div>
                                                    </nav>
                                                    <nav class="Navbar-posters Navbar-imagePanel">
                                                        <a href="https://shop.battle.net/family/call-of-duty-mw" class="Navbar-poster animation-delay-12" data-analytics="global-nav" data-analytics-placement="Nav - Games - Call of Duty Modern Warfare"><img src="https://blznav.akamaized.net/img/games/cards/card-cod-mw-ec170447f06f880b.jpg" class="Navbar-posterImage" /></a>
                                                        <a href="https://shop.battle.net/product/call-of-duty-black-ops-4" class="Navbar-poster animation-delay-13" data-analytics="global-nav" data-analytics-placement="Nav - Games - Call of Duty Black Ops 4"><img src="https://blznav.akamaized.net/img/games/cards/card-cod-bo-4-964bdaf14e2a62de.jpg" class="Navbar-posterImage" /></a>
                                                    </nav>
                                                </div>
                                            </div>
                                            <nav class="Navbar-modalSection Navbar-dropdownFooter Navbar-gameMenu is-center">
                                                <a href="https://www.blizzard.com/games/" class="Navbar-gameMenuItem animation-delay-14" data-analytics="global-nav" data-analytics-placement="Nav - Games - More Games">
                                                    <div class="Navbar-icon Navbar-gameMenuItemIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-grid9"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-gameMenuItemLabel">Más juegos</div>
                                                </a>
                                                <a href="https://www.blizzard.com/apps/battle.net/desktop" class="Navbar-gameMenuItem animation-delay-14" data-analytics="global-nav" data-analytics-placement="Nav - Games - Battle.net App">
                                                    <div class="Navbar-icon Navbar-gameMenuItemIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-bnet"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-gameMenuItemLabel">Aplicación Battle.net</div>
                                                </a>
                                                <a href="https://www.blizzard.com/download/" class="Navbar-gameMenuItem animation-delay-14" data-analytics="global-nav" data-analytics-placement="Nav - Games - Downloads">
                                                    <div class="Navbar-icon Navbar-gameMenuItemIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-download"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-gameMenuItemLabel">Descargas</div>
                                                </a>
                                                <a href="https://us.forums.blizzard.com/en/blizzard/" class="Navbar-gameMenuItem animation-delay-14" data-analytics="global-nav" data-analytics-placement="Nav - Games - Game Forums">
                                                    <div class="Navbar-icon Navbar-gameMenuItemIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-chat"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-gameMenuItemLabel">Foros del juego</div>
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                    <style>
                                        .Navbar .Navbar-dropdown .Navbar-esportsLogos .Navbar-esport .Navbar-esportImage {
                                            width: 14vw;
                                            height: 14vw
                                        }
                                    </style>
                                    <div data-toggle="esports" class="Navbar-modal Navbar-dropdown Navbar-esportsDropdown is-full">
                                        <div class="Navbar-tick">
                                            <div class="Navbar-tickInner"></div>
                                        </div>
                                        <div class="Navbar-modalContent">
                                            <div class="Navbar-modalSection is-full is-center">
                                                <div class="Navbar-esportsLogos Navbar-imagePanel">
                                                    <a href="https://overwatchleague.com/es-es" class="Navbar-esport animation-delay-1" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Overwatch"><img src="https://blznav.akamaized.net/img/esports/esports-overwatch-36d8f7f486d363c1.png" class="Navbar-esportImage" />
                                                        <div class="Navbar-esportLabel">Overwatch League</div>
                                                    </a>
                                                    <a href="https://playoverwatch.com/es-es/worldcup/" class="Navbar-esport animation-delay-2" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Overwatch World Cup"><img src="https://blznav.akamaized.net/img/esports/esports-overwatch-world-cup-43d00c39399a70b8.png" class="Navbar-esportImage" />
                                                        <div class="Navbar-esportLabel">Overwatch World&#160;Cup</div>
                                                    </a>
                                                    <a href="https://playhearthstone.com/es-es/esports/" class="Navbar-esport animation-delay-3" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Hearthstone Masters"><img src="https://blznav.akamaized.net/img/esports/esports-hsm-5b1ed3fe5cf5d4f8.png" class="Navbar-esportImage" />
                                                        <div class="Navbar-esportLabel">Hearthstone Masters</div>
                                                    </a>
                                                    <a href="https://wcs.starcraft2.com/en-us/" class="Navbar-esport animation-delay-4" data-analytics="global-nav" data-analytics-placement="Nav - Esports - StarCraft II"><img src="https://blznav.akamaized.net/img/esports/esports-sc2-32be849895ec4e7d.png" class="Navbar-esportImage" />
                                                        <div class="Navbar-esportLabel">StarCraft II WCS</div>
                                                    </a>
                                                    <a href="https://worldofwarcraft.com/es-es/esports" class="Navbar-esport animation-delay-5" data-analytics="global-nav" data-analytics-placement="Nav - Esports - World of Warcraft"><img src="https://blznav.akamaized.net/img/esports/esports-wowwc-79e9589cf9355f17.png" class="Navbar-esportImage" />
                                                        <div class="Navbar-esportLabel">World of Warcraft Arena World Championship</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <nav class="Navbar-modalSection Navbar-dropdownFooter Navbar-gameMenu is-center">
                                                <a href="https://esports.blizzard.com" class="Navbar-gameMenuItem animation-delay-6" data-analytics="global-nav" data-analytics-placement="Nav - Esports - More Competitions">
                                                    <div class="Navbar-icon Navbar-gameMenuItemIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-grid9"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-gameMenuItemLabel">Más competiciones</div>
                                                </a>
                                                <a href="https://esports.blizzard.com/#resources" class="Navbar-gameMenuItem animation-delay-6" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Resources">
                                                    <div class="Navbar-icon Navbar-gameMenuItemIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-esports"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-gameMenuItemLabel">Recursos</div>
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="Navbar-constrained">
                                        <div data-toggle="Navbar-account" class="Navbar-modal Navbar-dropdown Navbar-accountDropdown is-constrained">
                                            <div class="Navbar-tick">
                                                <div class="Navbar-tickInner"></div>
                                            </div>
                                            <div class="Navbar-modalContent">
                                                <div class="Navbar-accountDropdownLoggedOut">
                                                    <div class="Navbar-modalSection">
                                                        <a href="/login" class="Navbar-accountDropdownButtonLink" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log In">
                                                            <button class="Navbar-button is-full">Iniciar sesión</button>
                                                        </a>
                                                    </div>
                                                    <a href="https://account.blizzard.com/" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                        <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                <use xlink:href="#Navbar-icon-settings"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="Navbar-accountDropdownLinkLabel">Opciones de la cuenta</div>
                                                    </a>
                                                    <a href="https://us.battle.net/account/creation/" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - Account - Create a Free Account">
                                                        <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                <use xlink:href="#Navbar-icon-account-add"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="Navbar-accountDropdownLinkLabel">Crear una cuenta gratuita</div>
                                                    </a>
                                                </div>
                                                <div class="Navbar-accountDropdownLoggedIn">
                                                    <div class="Navbar-modalSection">
                                                        <div class="Navbar-accountDropdownProfileInfo">
                                                            <div class="Navbar-accountDropdownBattleTag">%USER_BATTLETAG%</div>
                                                            <div class="Navbar-accountDropdownBattleTagNumber">%USER_BATTLETAG_CODE%</div>
                                                        </div>
                                                        <div class="Navbar-accountDropdownEmail">%USER_EMAIL%</div>
                                                    </div>
                                                    <a href="https://account.blizzard.com/" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                        <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                <use xlink:href="#Navbar-icon-settings"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="Navbar-accountDropdownLinkLabel">Opciones de la cuenta</div>
                                                    </a>
                                                    <a href="https://account.blizzard.com/gifts/" class="Navbar-accountDropdownLink Navbar-accountDropdownGifts" data-analytics="global-nav" data-analytics-placement="Nav - Gifts">
                                                        <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                <use xlink:href="#Navbar-icon-gifts"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="Navbar-accountDropdownLinkLabel">Mis regalos</div>
                                                    </a>
                                                    <a href="/logout" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log Out">
                                                        <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                <use xlink:href="#Navbar-icon-logout"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="Navbar-accountDropdownLinkLabel">Cerrar sesión</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Navbar-modal Navbar-accountModal is-animated is-scroll-blocking">
                                        <div class="Navbar-modalContent">
                                            <div class="Navbar-mobileModalHeader"></div>
                                            <a href="https://www.blizzard.com/" class="Navbar-logo Navbar-mobileModalLogo" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 151.15 68.46" focusable="false">
                                                    <use xlink:href="#Navbar-logo-blizzard"></use>
                                                </svg>
                                            </a>
                                            <div class="Navbar-accountDropdownLoggedOut">
                                                <div class="Navbar-modalSection">
                                                    <a href="/login" class="Navbar-accountDropdownButtonLink" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log In">
                                                        <button class="Navbar-button is-full">Iniciar sesión</button>
                                                    </a>
                                                </div>
                                                <a href="https://support.blizzard.com/" class="Navbar-accountDropdownLink Navbar-accountDropdownSupport" data-analytics="global-nav" data-analytics-placement="Nav - Support">
                                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-question"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-accountDropdownLinkLabel">Asistencia</div>
                                                    <div class="Navbar-accountDropdownCounter">0</div>
                                                </a>
                                                <a href="https://account.blizzard.com/" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-settings"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-accountDropdownLinkLabel">Opciones de la cuenta</div>
                                                </a>
                                                <a href="https://us.battle.net/account/creation/" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - Account - Create a Free Account">
                                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-account-add"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-accountDropdownLinkLabel">Crear una cuenta gratuita</div>
                                                </a>
                                            </div>
                                            <div class="Navbar-accountDropdownLoggedIn">
                                                <div class="Navbar-modalSection">
                                                    <div class="Navbar-accountDropdownProfileInfo">
                                                        <div class="Navbar-accountDropdownBattleTag">%USER_BATTLETAG%</div>
                                                        <div class="Navbar-accountDropdownBattleTagNumber">%USER_BATTLETAG_CODE%</div>
                                                    </div>
                                                    <div class="Navbar-accountDropdownEmail">%USER_EMAIL%</div>
                                                </div>
                                                <a href="https://account.blizzard.com/" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-settings"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-accountDropdownLinkLabel">Opciones de la cuenta</div>
                                                </a>
                                                <a href="https://account.blizzard.com/gifts/" class="Navbar-accountDropdownLink Navbar-accountDropdownGifts" data-analytics="global-nav" data-analytics-placement="Nav - Gifts">
                                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-gifts"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-accountDropdownLinkLabel">Mis regalos</div>
                                                </a>
                                                <a href="/logout" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log Out">
                                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-logout"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="Navbar-accountDropdownLinkLabel">Cerrar sesión</div>
                                                </a>
                                            </div>
                                            <a href="https://www.blizzard.com/" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                                                <div class="Navbar-modalLinkLabel">Inicio</div>
                                            </a>
                                            <div data-name="games" class="Navbar-expandable Navbar-gamesExpandable">
                                                <div class="Navbar-expandableToggle">
                                                    <div class="Navbar-expandableLabel">Juegos</div>
                                                    <div class="Navbar-icon Navbar-expandableIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-dropdown"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="Navbar-expandableContainer">
                                                    <div class="Navbar-expandableContent">
                                                        <nav class="Navbar-expandableList Navbar-gameList">
                                                            <div data-publisher="blizzard" class="Navbar-gamePublisher">
                                                                <div class="Navbar-gamePublisherLabel">Blizzard</div>
                                                                <a href="https://blizzcon.playoverwatch.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Overwatch2"><img src="https://blznav.akamaized.net/img/games/logo-mobile-ow2-fa7802bf64435d01.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Overwatch<span class="Navbar-registered">®</span> 2</div>
                                                                </a>
                                                                <a href="https://playoverwatch.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Overwatch"><img src="https://blznav.akamaized.net/img/games/logo-mobile-ow-f55e678d31c82327.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Overwatch<span class="Navbar-registered">®</span></div>
                                                                </a>
                                                                <a href="https://worldofwarcraft.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - World of Warcraft"><img src="https://blznav.akamaized.net/img/games/logo-mobile-wow-e09169bb480f819c.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">World of Warcraft<span class="Navbar-registered">®</span></div>
                                                                </a>
                                                                <a href="https://playhearthstone.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Hearthstone"><img src="https://blznav.akamaized.net/img/games/logo-mobile-hs-8f578d9162ef6bef.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Hearthstone<span class="Navbar-registered">®</span></div>
                                                                </a>
                                                                <a href="https://heroesofthestorm.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Heroes of the Storm"><img src="https://blznav.akamaized.net/img/games/logo-mobile-heroes-9b18acd85698e3f5.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Heroes of the Storm™</div>
                                                                </a>
                                                                <a href="https://playwarcraft3.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Warcraft III Reforged"><img src="https://blznav.akamaized.net/img/games/logo-mobile-w3r-cd7d6195e1b6ea02.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Warcraft<span class="Navbar-registered">®</span> III: Reforged™</div>
                                                                </a>
                                                                <a href="https://diablo.blizzard.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo IV"><img src="https://blznav.akamaized.net/img/games/logo-mobile-d4-b513d2afc3179582.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Diablo<span class="Navbar-registered">®</span> IV</div>
                                                                </a>
                                                                <a href="https://diabloimmortal.com" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo Immortal"><img src="https://blznav.akamaized.net/img/games/logo-mobile-di-9298e222a1ff42e3.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Diablo<span class="Navbar-registered">®</span> Immortal™</div>
                                                                </a>
                                                                <a href="https://us.diablo3.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo III"><img src="https://blznav.akamaized.net/img/games/logo-mobile-d3-d4ef1e9415a37fa4.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Diablo<span class="Navbar-registered">®</span> III</div>
                                                                </a>
                                                                <a href="https://starcraft2.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - StarCraft II"><img src="https://blznav.akamaized.net/img/games/logo-mobile-sc2-9bcca3ce838c0ada.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">StarCraft<span class="Navbar-registered">®</span> II</div>
                                                                </a>
                                                                <a href="https://starcraft.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - StarCraft Remastered"><img src="https://blznav.akamaized.net/img/games/logo-mobile-scr-6ab1a55de1242f54.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">StarCraft<span class="Navbar-registered">®</span> Remastered</div>
                                                                </a>
                                                            </div>
                                                            <div data-publisher="activision" class="Navbar-gamePublisher">
                                                                <div class="Navbar-gamePublisherLabel">Activision</div>
                                                                <a href="https://shop.battle.net/family/call-of-duty-mw" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Call of Duty Modern Warfare"><img src="https://blznav.akamaized.net/img/games/logo-mobile-codmw-400b112f86f38624.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Call of Duty<span class="Navbar-registered">®</span>: Modern Warfare<span class="Navbar-registered">®</span></div>
                                                                </a>
                                                                <a href="https://shop.battle.net/product/call-of-duty-black-ops-4" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Call of Duty Black Ops 4"><img src="https://blznav.akamaized.net/img/games/logo-mobile-codbo4-7304157c0c68de4b.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Call of Duty<span class="Navbar-registered">®</span>: Black Ops 4</div>
                                                                </a>
                                                            </div>
                                                            <a href="https://www.blizzard.com/games/" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - More Games">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-grid9"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Más juegos</div>
                                                            </a>
                                                            <a href="https://www.blizzard.com/apps/battle.net/desktop" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Battle.net App">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-bnet"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Aplicación Battle.net</div>
                                                            </a>
                                                            <a href="https://www.blizzard.com/download/" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Downloads">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-download"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Descargas</div>
                                                            </a>
                                                            <a href="https://us.forums.blizzard.com/en/blizzard/" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Game Forums">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-chat"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Foros del juego</div>
                                                            </a>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="https://shop.blizzard.com/" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Shop">
                                                <div class="Navbar-modalLinkLabel">Tienda</div>
                                            </a>
                                            <a href="https://news.blizzard.com" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - News">
                                                <div class="Navbar-modalLinkLabel">Noticias</div>
                                            </a>
                                            <div data-name="esports" class="Navbar-expandable Navbar-esportsExpandable">
                                                <div class="Navbar-expandableToggle">
                                                    <div class="Navbar-expandableLabel">Esports</div>
                                                    <div class="Navbar-icon Navbar-expandableIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-dropdown"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="Navbar-expandableContainer">
                                                    <div class="Navbar-expandableContent">
                                                        <nav class="Navbar-expandableList Navbar-esportList">
                                                            <a href="https://overwatchleague.com/es-es" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Overwatch"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-overwatch-ce8dd5ae960a11f8.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">Overwatch League</div>
                                                            </a>
                                                            <a href="https://playoverwatch.com/es-es/worldcup/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Overwatch World Cup"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-overwatch-world-cup-579dde27bfbaf5e9.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">Overwatch World&#160;Cup</div>
                                                            </a>
                                                            <a href="https://playhearthstone.com/es-es/esports/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Hearthstone Masters"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-hsm-38e43d49f6a44117.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">Hearthstone Masters</div>
                                                            </a>
                                                            <a href="https://wcs.starcraft2.com/en-us/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - StarCraft II"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-sc2-61ec4378c6def7c4.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">StarCraft II WCS</div>
                                                            </a>
                                                            <a href="https://worldofwarcraft.com/es-es/esports" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - World of Warcraft"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-wowwc-5bbc0092cf8df062.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">World of Warcraft Arena World Championship</div>
                                                            </a>
                                                            <a href="https://esports.blizzard.com" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - More Competitions">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-grid9"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Más competiciones</div>
                                                            </a>
                                                            <a href="https://esports.blizzard.com/#resources" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Resources">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-esports"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Recursos</div>
                                                            </a>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="https://blizzcon.com?blzcmp=globalnav_blizzcon" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Blizzcon">
                                                <div class="Navbar-modalLinkLabel">BlizzCon</div>
                                            </a>
                                            <div class="Navbar-icon Navbar-modalClose">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                    <use xlink:href="#Navbar-icon-close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="Navbar-modalCloseGutter"></div>
                                    </div>
                                    <div class="Navbar-modal Navbar-siteMenu is-animated is-scroll-blocking" data-compact-mode="true">
                                        <div class="Navbar-modalContent">
                                            <div class="BnetNav-mobileSiteMenu">
                                                <div class="BnetNav-mobileSiteMenuBody">
                                                    <div class="BnetNav-mobileSiteMenuLogo">
                                                        <div class="Logo Logo--wow"></div>
                                                    </div>
                                                    <div class="BnetNav-searchInline">
                                                        <form action="/search" method="GET"><span class="Icon Icon--searchGold BnetNav-searchIcon"></span>
                                                            <input class="BnetNav-searchInlineInput" id="searchInlineInput" name="q" type="search" placeholder="¿Buscas algo?" autocomplete="off" />
                                                        </form>
                                                    </div>
                                                    <div class="space-normal"></div>
                                                    <div class="BnetNav-mobileSiteMenuList List List--vertical List--full">
                                                        <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                            <a class="Link Link--block BnetNav-mobileSiteMenuLink" href="<?php echo site_url(); ?>" data-analytics="main-nav" data-analytics-placement="Home">
                                                                <span class="BnetNav-mobileSiteMenuLinkText text-upper" data-text="Inicio">Inicio</span>
                                                            </a>
                                                        </div>
                                                        <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                            <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-menuItemDropdown-0">
                                                                <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink text-upper">
                                                                    <span class="BnetNav-mobileSiteMenuLinkText" data-text="Juego">Juego</span><span class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></span>
                                                                </div>
                                                            </a>
                                                            <div class="Dropdown" name="BnetNav-mobileSiteMenu-menuItemDropdown-0" data-dropdown-group="BnetNav-mobileSiteMenuSections">
                                                                <div class="BnetNav-mobileSiteMenuList List List--full List--vertical">
                                                                    <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                                        <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-category-0">
                                                                            <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink">
                                                                                <div class="Pair">
                                                                                    <div class="Pair-left">Jugabilidad</div>
                                                                                    <div class="Pair-right">
                                                                                        <div class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="Dropdown" name="BnetNav-mobileSiteMenu-category-0" data-dropdown-group="BnetNav-mobileSiteMenuSubsections">
                                                                            <div class="BnetNav-mobileSiteMenuList List List--full List--vertical"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/races" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Races">Razas</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/classes" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Classes">Clases</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/talent-calculator" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Talent Calculator">Calculadora de talentos</a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                                        <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-category-1">
                                                                            <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink">
                                                                                <div class="Pair">
                                                                                    <div class="Pair-left">Universo Warcraft</div>
                                                                                    <div class="Pair-right">
                                                                                        <div class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="Dropdown" name="BnetNav-mobileSiteMenu-category-1" data-dropdown-group="BnetNav-mobileSiteMenuSubsections">
                                                                            <div class="BnetNav-mobileSiteMenuList List List--full List--vertical"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/story" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - All">Todo</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/story#tab=video" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Animation">Vídeo</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/story#tab=audio" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Audio">Audio</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/story#tab=comics" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Comics">Cómics</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/story#tab=books" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Books">Novelas</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/story#tab=short-stories" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Short Stories">Relatos cortos</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/story#tab=characters" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Characters">Personajes</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/story/timeline" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Timeline">La historia de Warcraft</a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                                        <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-category-2">
                                                                            <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink">
                                                                                <div class="Pair">
                                                                                    <div class="Pair-left">Informaciones y Guías</div>
                                                                                    <div class="Pair-right">
                                                                                        <div class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="Dropdown" name="BnetNav-mobileSiteMenu-category-2" data-dropdown-group="BnetNav-mobileSiteMenuSubsections">
                                                                            <div class="BnetNav-mobileSiteMenuList List List--full List--vertical"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/new-players-guide" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - New Players">Guía para nuevos jugadores</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/returning-players-guide" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - Returning Players">Guía para jugadores veteranos</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/status" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - Realm Status">Estado de los reinos</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/recruit-a-friend" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - Recruit A Friend">Recluta a un amigo</a><a class="Link Link--external Link--block BnetNav-mobileSiteMenuLink" href="https://worldofwarcraft.com/search/blog?k=wow" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - Content Update Notes">Notas de la actualización de contenido<sup class="font-sup color-gold-medium">Nuevo</sup></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                                        <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-category-3">
                                                                            <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink">
                                                                                <div class="Pair">
                                                                                    <div class="Pair-left">Competitivo</div>
                                                                                    <div class="Pair-right">
                                                                                        <div class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="Dropdown" name="BnetNav-mobileSiteMenu-category-3" data-dropdown-group="BnetNav-mobileSiteMenuSubsections">
                                                                            <div class="BnetNav-mobileSiteMenuList List List--full List--vertical"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/hall-of-fame/mythic-raid" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Juego - Jugabilidad - Salón de la fama de bandas míticas">Salón de la fama de bandas míticas</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/pve/leaderboards" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Mythic Leaderboards">Clasificación de mazmorras de piedra angular mítica</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/game/pvp/leaderboards/3v3" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Leaderboards">Clasificaciones JcJ</a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                                        <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-category-4">
                                                                            <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink">
                                                                                <div class="Pair">
                                                                                    <div class="Pair-left">Expansiones</div>
                                                                                    <div class="Pair-right">
                                                                                        <div class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="Dropdown" name="BnetNav-mobileSiteMenu-category-4" data-dropdown-group="BnetNav-mobileSiteMenuSubsections">
                                                                            <div class="BnetNav-mobileSiteMenuList List List--full List--vertical"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/shadowlands" type="CATEGORY_ITEM" data-analytics="Game - Expansions - Shadowlands" data-analytics-placement="main-nav">Shadowlands<sup class="font-sup color-gold-medium">Nuevo</sup></a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/battle-for-azeroth" type="CATEGORY_ITEM" data-analytics="Game - Expansions - Battle for Azeroth" data-analytics-placement="main-nav">Battle for Azeroth</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="BnetNav-mobileSiteMenuListItem List-item"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/news" data-analytics="main-nav" data-analytics-placement="News"><span class="BnetNav-mobileSiteMenuLinkText text-upper" data-text="Noticias">Noticias</span></a></div>
                                                        <div class="BnetNav-mobileSiteMenuListItem List-item"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="https://eu.forums.blizzard.com/es/wow/" data-analytics="main-nav" data-analytics-placement="Forums"><span class="BnetNav-mobileSiteMenuLinkText text-upper" data-text="Foros">Foros</span></a></div>
                                                        <div class="BnetNav-mobileSiteMenuListItem List-item"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="https://eu.shop.battle.net/es-es/family/world-of-warcraft" data-analytics="shop-link" data-analytics-placement="Shop || Nav"><span class="BnetNav-mobileSiteMenuLinkText text-upper" data-text="Tienda">Tienda</span></a></div>
                                                        <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                            <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-menuItemDropdown-1">
                                                                <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink text-upper"><span class="BnetNav-mobileSiteMenuLinkText" data-text="Esports">Esports</span><span class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></span></div>
                                                            </a>
                                                            <div class="Dropdown" name="BnetNav-mobileSiteMenu-menuItemDropdown-1" data-dropdown-group="BnetNav-mobileSiteMenuSections">
                                                                <div class="BnetNav-mobileSiteMenuList List List--full List--vertical">
                                                                    <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                                        <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-category-5">
                                                                            <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink">
                                                                                <div class="Pair">
                                                                                    <div class="Pair-left">Arena World Championship</div>
                                                                                    <div class="Pair-right">
                                                                                        <div class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="Dropdown" name="BnetNav-mobileSiteMenu-category-5" data-dropdown-group="BnetNav-mobileSiteMenuSubsections">
                                                                            <div class="BnetNav-mobileSiteMenuList List List--full List--vertical"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/arena" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Introduction">Introducción</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/arena#schedule" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Standings and Schedule">Clasificación y calendario</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/arena#news" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - News">Noticias</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/arena#archive" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Season Archive">Archivo de la temporada</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/arena#hof" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Hall of Fame">Salón de la fama</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/arena#rules" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Inside the World Championship">World Championship: entre bambalinas</a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="BnetNav-mobileSiteMenuListItem List-item">
                                                                        <a class="Link" data-dropdown="BnetNav-mobileSiteMenu-category-6">
                                                                            <div class="DropdownLink DropdownLink--gold BnetNav-mobileSiteMenuLink">
                                                                                <div class="Pair">
                                                                                    <div class="Pair-left">Mythic Dungeon International</div>
                                                                                    <div class="Pair-right">
                                                                                        <div class="BnetNav-mobileDropdownIndicator DropdownLink-indicator"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="Dropdown" name="BnetNav-mobileSiteMenu-category-6" data-dropdown-group="BnetNav-mobileSiteMenuSubsections">
                                                                            <div class="BnetNav-mobileSiteMenuList List List--full List--vertical"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/mythic" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Mythic - Introduction">Introducción</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/mythic#schedule" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Mythic - Schedule">Calendario</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/mythic#news" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Mythic - News">Noticias</a><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/esports/mythic#rules" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Mythic - Inside the Mythic Dungeon Invitational">Mythic Dungeon International: entre bastidores</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="BnetNav-mobileSiteMenuListItem List-item"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/wowclassic" data-analytics="main-nav" data-analytics-placement="WoW Classic"><span class="BnetNav-mobileSiteMenuLinkText text-upper" data-text="WoW Classic">WoW Classic</span></a></div>
                                                        <div class="BnetNav-mobileSiteMenuListItem List-item"><a class="Link Link--block BnetNav-mobileSiteMenuLink" href="/es-es/login" data-analytics="main-nav" data-analytics-placement="Community - Log In"><span class="BnetNav-mobileSiteMenuLinkText text-upper" data-text="Iniciar sesión">Iniciar sesión</span></a></div>
                                                        <div class="space-normal"></div>
                                                        <div class="BnetNav-mobileSiteMenuListItem BnetNav-mobileSiteMenuListItem--user List-item align-center">
                                                            <div class="BnetNav-mobileSiteMenuListItemWrap"><a class="Link Link--block BnetNav-mobileSiteMenuLink BnetNav-mobileSiteMenuLink--signup" href="https://eu.battle.net/account/creation/es/tos.html?theme=wow&amp;style=wow-trial" data-analytics="account-creation-link" data-analytics-placement="Nav"><span class="BnetNav-mobileSiteMenuLinkText text-upper" data-text="Probar gratis">Probar gratis</span></a></div>
                                                        </div>
                                                        <div class="space-normal"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Navbar-siteMenuLogo">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 151.15 68.46" focusable="false">
                                                    <use xlink:href="#Navbar-logo-blizzard"></use>
                                                </svg>
                                            </div>
                                            <div class="Navbar-modalClose Navbar-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                    <use xlink:href="#Navbar-icon-close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="Navbar-modalCloseGutter"></div>
                                    </div>
                                    <div class="Navbar-modal Navbar-siteMenu is-animated is-scroll-blocking" data-default-mode="true" data-simple-mode="true">
                                        <div class="Navbar-modalContent">
                                            <a href="https://www.blizzard.com/" class="Navbar-logo Navbar-mobileModalLogo" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 151.15 68.46" focusable="false">
                                                    <use xlink:href="#Navbar-logo-blizzard"></use>
                                                </svg>
                                            </a>
                                            <a href="https://www.blizzard.com/" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                                                <div class="Navbar-modalLinkLabel">Inicio</div>
                                            </a>
                                            <div data-name="games" class="Navbar-expandable Navbar-gamesExpandable">
                                                <div class="Navbar-expandableToggle">
                                                    <div class="Navbar-expandableLabel">Juegos</div>
                                                    <div class="Navbar-icon Navbar-expandableIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-dropdown"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="Navbar-expandableContainer">
                                                    <div class="Navbar-expandableContent">
                                                        <nav class="Navbar-expandableList Navbar-gameList">
                                                            <div data-publisher="blizzard" class="Navbar-gamePublisher">
                                                                <div class="Navbar-gamePublisherLabel">Blizzard</div>
                                                                <a href="https://blizzcon.playoverwatch.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Overwatch2"><img src="https://blznav.akamaized.net/img/games/logo-mobile-ow2-fa7802bf64435d01.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Overwatch<span class="Navbar-registered">®</span> 2</div>
                                                                </a>
                                                                <a href="https://playoverwatch.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Overwatch"><img src="https://blznav.akamaized.net/img/games/logo-mobile-ow-f55e678d31c82327.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Overwatch<span class="Navbar-registered">®</span></div>
                                                                </a>
                                                                <a href="https://worldofwarcraft.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - World of Warcraft"><img src="https://blznav.akamaized.net/img/games/logo-mobile-wow-e09169bb480f819c.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">World of Warcraft<span class="Navbar-registered">®</span></div>
                                                                </a>
                                                                <a href="https://playhearthstone.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Hearthstone"><img src="https://blznav.akamaized.net/img/games/logo-mobile-hs-8f578d9162ef6bef.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Hearthstone<span class="Navbar-registered">®</span></div>
                                                                </a>
                                                                <a href="https://heroesofthestorm.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Heroes of the Storm"><img src="https://blznav.akamaized.net/img/games/logo-mobile-heroes-9b18acd85698e3f5.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Heroes of the Storm™</div>
                                                                </a>
                                                                <a href="https://playwarcraft3.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Warcraft III Reforged"><img src="https://blznav.akamaized.net/img/games/logo-mobile-w3r-cd7d6195e1b6ea02.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Warcraft<span class="Navbar-registered">®</span> III: Reforged™</div>
                                                                </a>
                                                                <a href="https://diablo.blizzard.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo IV"><img src="https://blznav.akamaized.net/img/games/logo-mobile-d4-b513d2afc3179582.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Diablo<span class="Navbar-registered">®</span> IV</div>
                                                                </a>
                                                                <a href="https://diabloimmortal.com" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo Immortal"><img src="https://blznav.akamaized.net/img/games/logo-mobile-di-9298e222a1ff42e3.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Diablo<span class="Navbar-registered">®</span> Immortal™</div>
                                                                </a>
                                                                <a href="https://us.diablo3.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Diablo III"><img src="https://blznav.akamaized.net/img/games/logo-mobile-d3-d4ef1e9415a37fa4.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Diablo<span class="Navbar-registered">®</span> III</div>
                                                                </a>
                                                                <a href="https://starcraft2.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - StarCraft II"><img src="https://blznav.akamaized.net/img/games/logo-mobile-sc2-9bcca3ce838c0ada.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">StarCraft<span class="Navbar-registered">®</span> II</div>
                                                                </a>
                                                                <a href="https://starcraft.com/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - StarCraft Remastered"><img src="https://blznav.akamaized.net/img/games/logo-mobile-scr-6ab1a55de1242f54.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">StarCraft<span class="Navbar-registered">®</span> Remastered</div>
                                                                </a>
                                                            </div>
                                                            <div data-publisher="activision" class="Navbar-gamePublisher">
                                                                <div class="Navbar-gamePublisherLabel">Activision</div>
                                                                <a href="https://shop.battle.net/family/call-of-duty-mw" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Call of Duty Modern Warfare"><img src="https://blznav.akamaized.net/img/games/logo-mobile-codmw-400b112f86f38624.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Call of Duty<span class="Navbar-registered">®</span>: Modern Warfare<span class="Navbar-registered">®</span></div>
                                                                </a>
                                                                <a href="https://shop.battle.net/product/call-of-duty-black-ops-4" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Call of Duty Black Ops 4"><img src="https://blznav.akamaized.net/img/games/logo-mobile-codbo4-7304157c0c68de4b.png" alt="" class="Navbar-expandableItemImage" />
                                                                    <div class="Navbar-expandableItemLabel">Call of Duty<span class="Navbar-registered">®</span>: Black Ops 4</div>
                                                                </a>
                                                            </div>
                                                            <a href="https://www.blizzard.com/games/" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - More Games">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-grid9"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Más juegos</div>
                                                            </a>
                                                            <a href="https://www.blizzard.com/apps/battle.net/desktop" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Battle.net App">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-bnet"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Aplicación Battle.net</div>
                                                            </a>
                                                            <a href="https://www.blizzard.com/download/" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Downloads">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-download"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Descargas</div>
                                                            </a>
                                                            <a href="https://us.forums.blizzard.com/en/blizzard/" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Games - Game Forums">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-chat"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Foros del juego</div>
                                                            </a>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="https://shop.blizzard.com/" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Shop">
                                                <div class="Navbar-modalLinkLabel">Tienda</div>
                                            </a>
                                            <a href="https://news.blizzard.com" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - News">
                                                <div class="Navbar-modalLinkLabel">Noticias</div>
                                            </a>
                                            <div data-name="esports" class="Navbar-expandable Navbar-esportsExpandable">
                                                <div class="Navbar-expandableToggle">
                                                    <div class="Navbar-expandableLabel">Esports</div>
                                                    <div class="Navbar-icon Navbar-expandableIcon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-dropdown"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="Navbar-expandableContainer">
                                                    <div class="Navbar-expandableContent">
                                                        <nav class="Navbar-expandableList Navbar-esportList">
                                                            <a href="https://overwatchleague.com/es-es" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Overwatch"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-overwatch-ce8dd5ae960a11f8.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">Overwatch League</div>
                                                            </a>
                                                            <a href="https://playoverwatch.com/es-es/worldcup/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Overwatch World Cup"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-overwatch-world-cup-579dde27bfbaf5e9.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">Overwatch World&#160;Cup</div>
                                                            </a>
                                                            <a href="https://playhearthstone.com/es-es/esports/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Hearthstone Masters"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-hsm-38e43d49f6a44117.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">Hearthstone Masters</div>
                                                            </a>
                                                            <a href="https://wcs.starcraft2.com/en-us/" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - StarCraft II"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-sc2-61ec4378c6def7c4.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">StarCraft II WCS</div>
                                                            </a>
                                                            <a href="https://worldofwarcraft.com/es-es/esports" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - World of Warcraft"><img src="https://blznav.akamaized.net/img/esports/esports-mobile-wowwc-5bbc0092cf8df062.png" alt="" class="Navbar-expandableItemImage" />
                                                                <div class="Navbar-expandableItemLabel">World of Warcraft Arena World Championship</div>
                                                            </a>
                                                            <a href="https://esports.blizzard.com" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - More Competitions">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-grid9"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Más competiciones</div>
                                                            </a>
                                                            <a href="https://esports.blizzard.com/#resources" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - Esports - Resources">
                                                                <div class="Navbar-icon Navbar-expandableItemIcon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                        <use xlink:href="#Navbar-icon-esports"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="Navbar-expandableItemLabel">Recursos</div>
                                                            </a>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="https://blizzcon.com?blzcmp=globalnav_blizzcon" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Blizzcon">
                                                <div class="Navbar-modalLinkLabel">BlizzCon</div>
                                            </a>
                                            <div class="Navbar-corpLinks"><a href="https://support.blizzard.com/" class="Navbar-corpLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Support">Asistencia</a><a href="https://account.blizzard.com/" class="Navbar-corpLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Account">Cuenta</a><a href="https://account.blizzard.com/gifts/" class="Navbar-corpLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Gifts">Mis regalos</a><a href="https://careers.blizzard.com/" class="Navbar-corpLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Careers">Empleo</a><a href="http://blizzard.com/company/" class="Navbar-corpLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Company">Empresa</a></div>
                                            <div class="Navbar-modalClose Navbar-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                    <use xlink:href="#Navbar-icon-close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="Navbar-modalCloseGutter"></div>
                                    </div>
                                </div>
                                <div class="Navbar-toast Navbar-promotion">
                                    <div class="Navbar-toastContainer Navbar-promotionContainer"><img src="" alt="" class="Navbar-toastImage Navbar-promotionImage" />
                                        <div class="Navbar-toastContent Navbar-promotionContent">
                                            <div class="Navbar-toastLabel Navbar-promotionLabel">%PROMO_LABEL%</div>
                                            <div class="Navbar-toastText Navbar-promotionText">%PROMO_TEXT%</div><a href="%PROMO_LINK_URL" class="Navbar-toastLink Navbar-promotionLink">%PROMO_LINK_TEXT%</a></div>
                                        <div class="Navbar-icon Navbar-toastClose">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                <use xlink:href="#Navbar-icon-close"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="SiteNav">
                <div class="Sticky SiteNav-sticky">
                    <div class="Sticky-content">
                        <div class="SiteNav-area">
                            <div class="SiteNav-bar">
                                <div class="SiteNav-menu">
                                    <a class="Link Link--block SiteNav-logo" href="<?php echo site_url() ?>" data-analytics="main-nav" data-analytics-placement="Logo">
                                        <div class="Logo Logo--wow Logo--wowSitenav SiteNav-logo-full position-absolute"></div>
                                        <div class="Logo Logo--wowIcon SiteNav-logo-icon"></div>
                                    </a>
                                    <div class="SiteNav-sectionLeft">
                                        <div class="SiteNav-menuList List">
                                            <div class="SiteNav-menuListItem List-item">
                                                <a class="Link Link--block SiteNav-menuListLink" data-dropdown="SiteNav-dropdown-0" tabindex="0">
                                                    <div class="DropdownLink DropdownLink--gold DropdownLink--goldWithHover text-upper"><span class="SiteNav-menuListLinkText" data-text="Juego">Juego</span><span class="SiteNav-dropdownIndicator DropdownLink-indicator"></span></div>
                                                </a>
                                            </div>
                                            <div class="SiteNav-menuListItem List-item"><a class="Link Link--block SiteNav-menuListLink text-upper" href="/es-es/news" data-analytics="main-nav" data-analytics-placement="News"><span class="SiteNav-menuListLinkText" data-text="Noticias">Noticias</span></a></div>
                                            <div class="SiteNav-menuListItem List-item"><a class="Link Link--block SiteNav-menuListLink text-upper" href="https://eu.forums.blizzard.com/es/wow/" data-analytics="main-nav" data-analytics-placement="Forums"><span class="SiteNav-menuListLinkText" data-text="Foros">Foros</span></a></div>
                                            <div class="SiteNav-menuListItem List-item"><a class="Link Link--block SiteNav-menuListLink text-upper" href="https://eu.shop.battle.net/es-es/family/world-of-warcraft" data-analytics="shop-link" data-analytics-placement="Shop || Nav"><span class="SiteNav-menuListLinkText" data-text="Tienda">Tienda</span></a></div>
                                            <div class="SiteNav-menuListItem List-item">
                                                <a class="Link Link--block SiteNav-menuListLink" data-dropdown="SiteNav-dropdown-1" tabindex="0">
                                                    <div class="DropdownLink DropdownLink--gold DropdownLink--goldWithHover text-upper"><span class="SiteNav-menuListLinkText" data-text="Esports">Esports</span><span class="SiteNav-dropdownIndicator DropdownLink-indicator"></span></div>
                                                </a>
                                            </div>
                                            <div class="SiteNav-menuListItem List-item"><a class="Link Link--block SiteNav-menuListLink text-upper" href="/es-es/wowclassic" data-analytics="main-nav" data-analytics-placement="WoW Classic"><span class="SiteNav-menuListLinkText" data-text="WoW Classic">WoW Classic</span></a></div>
                                        </div>
                                    </div>
                                    <div class="SiteNav-sectionRight">
                                        <div class="SiteNav-menuList List">
                                            <div class="SiteNav-menuListItem SiteNav-menuListItem--search List-item"><a class="Link Link--block SiteNav-menuListLink SiteNav-searchLink hover-white color-gold-light" data-dropdown="SiteNav-dropdown-2" tabindex="0"><span class="Icon Icon--wow-search SiteNav-searchOpen"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="/static/components/Icon/svg/wow-search.7c08692a91547c4e3849e39f7dee99f4.svg#wow-search"></use></svg></span><span class="Icon Icon--close SiteNav-searchClose"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="/static/components/Icon/svg/close.a9ffd5f54f2a6c649636aab0e0392caa.svg#close"></use></svg></span></a></div>
                                            <div class="SiteNav-menuListItem List-item"><a class="Link Link--block SiteNav-menuListLink text-upper" href="/es-es/login" data-analytics="main-nav" data-analytics-placement="Community - Log In"><span class="SiteNav-menuListLinkText" data-text="Iniciar sesión">Iniciar sesión</span></a></div>
                                            <div class="SiteNav-menuListItem SiteNav-menuListItem--user List-item">
                                                <div class="SiteNav-menuListItemWrap"><a class="Link Link--block SiteNav-menuListLink text-upper" href="https://eu.battle.net/account/creation/es/tos.html?theme=wow&amp;style=wow-trial" data-analytics="account-creation-link" data-analytics-placement="Nav"><span class="SiteNav-menuListLinkText" data-text="Probar gratis">Probar gratis</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Dropdown SiteNav-doormat" name="SiteNav-dropdown-0">
                                <div class="SiteNav-doormatContent">
                                    <div class="Grid Grid--gutters">
                                        <div class="Grid-1of5">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Jugabilidad</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/races" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Races">Razas</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/classes" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Classes">Clases</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/talent-calculator" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Talent Calculator">Calculadora de talentos</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Grid-1of5">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Universo Warcraft</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/story" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - All">Todo</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/story#tab=video" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Animation">Vídeo</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/story#tab=audio" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Audio">Audio</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/story#tab=comics" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Comics">Cómics</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/story#tab=books" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Books">Novelas</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/story#tab=short-stories" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Lore - Short Stories">Relatos cortos</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/story#tab=characters" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Characters">Personajes</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/story/timeline" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Story - Timeline">La historia de Warcraft</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Grid-1of5">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Informaciones y Guías</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/new-players-guide" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - New Players">Guía para nuevos jugadores</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/returning-players-guide" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - Returning Players">Guía para jugadores veteranos</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/status" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - Realm Status">Estado de los reinos</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/recruit-a-friend" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - Recruit A Friend">Recluta a un amigo</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--external Link--block SiteNav-pageLink" href="https://worldofwarcraft.com/search/blog?k=wow" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Guides - Content Update Notes">Notas de la actualización de contenido<sup class="font-sup color-gold-medium">Nuevo</sup></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Grid-1of5">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Competitivo</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/hall-of-fame/mythic-raid" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Juego - Jugabilidad - Salón de la fama de bandas míticas">Salón de la fama de bandas míticas</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/pve/leaderboards" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Mythic Leaderboards">Clasificación de mazmorras de piedra angular mítica</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/pvp/leaderboards/3v3" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Game - Gameplay - Leaderboards">Clasificaciones JcJ</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Grid-1of5">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Expansiones</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/shadowlands" type="CATEGORY_ITEM" data-analytics="Game - Expansions - Shadowlands" data-analytics-placement="main-nav">Shadowlands<sup class="font-sup color-gold-medium">Nuevo</sup></a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/battle-for-azeroth" type="CATEGORY_ITEM" data-analytics="Game - Expansions - Battle for Azeroth" data-analytics-placement="main-nav">Battle for Azeroth</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Dropdown SiteNav-doormat" name="SiteNav-dropdown-1">
                                <div class="SiteNav-doormatContent">
                                    <div class="Grid Grid--gutters">
                                        <div class="Grid-1of4">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Arena World Championship</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/arena" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Introduction">Introducción</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/arena#schedule" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Standings and Schedule">Clasificación y calendario</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/arena#news" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - News">Noticias</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/arena#archive" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Season Archive">Archivo de la temporada</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/arena#hof" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Hall of Fame">Salón de la fama</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/arena#rules" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Arena - Inside the World Championship">World Championship: entre bambalinas</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Grid-1of4">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Mythic Dungeon International</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/mythic" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Mythic - Introduction">Introducción</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/mythic#schedule" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Mythic - Schedule">Calendario</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/mythic#news" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Mythic - News">Noticias</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/esports/mythic#rules" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Esports - Mythic - Inside the Mythic Dungeon Invitational">Mythic Dungeon International: entre bastidores</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Dropdown SiteNav-doormat SiteNav-searchDropdown" name="SiteNav-dropdown-2">
                                <div class="SiteNav-doormatContent">
                                    <form class="SiteNav-searchBox" action="/search" method="GET"><span class="Icon Icon--searchGold SiteNav-searchIcon"></span>
                                        <input class="SiteNav-searchInput" id="searchInput" name="q" type="search" placeholder="¿Buscas algo?" autocomplete="off" />
                                    </form>
                                    <div class="space-medium"></div>
                                    <div class="Grid Grid--gutters">
                                        <div class="Grid-1of4">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Recursos</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/new-players-guide" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Resources - New Players">Guía para nuevos jugadores</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/returning-players-guide" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Resources - Returning Players">Guía para jugadores veteranos</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/talent-calculator" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Resources - Talent Calculator">Calculadora de talentos</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/status" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Resources - Realm Status">Estado de los reinos</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Grid-1of4">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Noticias</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/news" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - News - Most Recent">Más recientes</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Grid-1of4">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Jugabilidad</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/races" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Gameplay - Races">Razas</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--block SiteNav-pageLink" href="/es-es/game/classes" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Gameplay - Classes">Clase</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Grid-1of4">
                                            <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="SiteNav-sectionTitle font-title-tiny-onDark">Foros</div>
                                                </div>
                                                <div class="List-item gutter-tiny gutter-vertical">
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--external Link--block SiteNav-pageLink" href="http://eu.battle.net/forums/es/wow/975480/" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Forums - Support">Asistencia</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--external Link--block SiteNav-pageLink" href="http://eu.battle.net/forums/es/wow/" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Forums - Community">Comunidad</a></div>
                                                    <div class="gutter-vertical gutter-tiny"><a class="Link Link--external Link--block SiteNav-pageLink" href="http://eu.battle.net/forums/es/wow/880014/" type="CATEGORY_ITEM" data-analytics="main-nav" data-analytics-placement="Search - Forums - Website &amp; Mobile Feedback">Comentarios sobre la web</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><span class="SkipLink-target" id="skip-link-target" aria-landmark="main"></span>
            <?php echo $content; ?>
            <div class="Divider"></div>
            <div class="Pane Pane--dirtLight Pane--bgBottom bordered">
                <div class="Pane-bg">
                    <div class="Pane-overlay"></div>
                </div>
                <div class="Pane-content">
                    <div class="gutter-normal gutter-vertical">
                        <div class="SocialLinks SocialLinks--wow">
                            <div class="SocialLinks-title">Seguir a Warcraft</div>
                            <div class="SocialLinks-links"><a class="Link SocialLinks-link" href="https://www.facebook.com/WorldofWarcraft.es" data-analytics="sns-refer" data-analytics-placement="Footer - facebook"><span class="Icon Icon--social-facebook Icon--medium SocialLinks-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="/static/components/Icon/svg/social-facebook.20d2ed4f5a690fe838af4c2beb4ba8be.svg#social-facebook"></use></svg></span></a><a class="Link SocialLinks-link" href="https://twitter.com/warcraft_Es" data-analytics="sns-refer" data-analytics-placement="Footer - twitter"><span class="Icon Icon--social-twitter Icon--medium SocialLinks-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="/static/components/Icon/svg/social-twitter.fe8ef9d809c5b5099e326f60b39ff940.svg#social-twitter"></use></svg></span></a><a class="Link SocialLinks-link" href="https://www.youtube.com/user/WorldofWarcraftES" data-analytics="sns-refer" data-analytics-placement="Footer - youtube"><span class="Icon Icon--social-youtube Icon--medium SocialLinks-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="/static/components/Icon/svg/social-youtube.f56a46d1a6cc2ffd841bc4a8d1de3d3d.svg#social-youtube"></use></svg></span></a><a class="Link SocialLinks-link" href="https://www.reddit.com/r/wow" data-analytics="sns-refer" data-analytics-placement="Footer - reddit"><span class="Icon Icon--social-reddit Icon--medium SocialLinks-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="/static/components/Icon/svg/social-reddit.c70b106f4cf581aae6b314f337d07921.svg#social-reddit"></use></svg></span></a><a class="Link SocialLinks-link" href="https://www.instagram.com/warcraft" data-analytics="sns-refer" data-analytics-placement="Footer - instagram"><span class="Icon Icon--social-instagram Icon--medium SocialLinks-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="/static/components/Icon/svg/social-instagram.d8f4f26719bf05eaaa420654df619d00.svg#social-instagram"></use></svg></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Pane Pane--dirtDark Pane--above">
                <div class="Pane-bg">
                    <div class="Pane-overlay"></div>
                </div>
                <div class="Pane-content">
                    <div class="SiteFooter">
                        <div class="NavbarFooter is-regionless" data-hash="d0c6275ff3e7ff52f20344207160e1c4b2437836" data-region-selection="none" data-region="us" data-country="CR" data-geoip-service-url="https://geo.battle.net" data-locale="es-es">
                            <div class="NavbarFooter-overlay"></div>
                            <div class="NavbarFooter-selector">
                                <div class="NavbarFooter-selectorToggle">
                                    <div class="NavbarFooter-icon NavbarFooter-selectorToggleIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                            <use xlink:href="#Navbar-icon-globe"></use>
                                        </svg>
                                    </div>
                                    <div class="NavbarFooter-selectorToggleLabel">Español (EU)</div>
                                    <div class="NavbarFooter-icon NavbarFooter-selectorToggleArrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                            <use xlink:href="#Navbar-icon-selector"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="NavbarFooter-selectorDropdown">
                                    <div class="NavbarFooter-selectorDropdownContainer">
                                        <div class="NavbarFooter-selectorCloser">
                                            <div class="NavbarFooter-selectorCloserAnchor">
                                                <div class="NavbarFooter-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                        <use xlink:href="#Navbar-icon-close"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="NavbarFooter-selectorLocales NavbarFooter-selectorSection">
                                            <div class="NavbarFooter-selectorSectionBlock">
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/de-de/" data-id="de-de">
                                                    <div class="NavbarFooter-selectorOptionLabel">Deutsch</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/en-us/" data-id="en-us">
                                                    <div class="NavbarFooter-selectorOptionLabel">English (US)</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/en-gb/" data-id="en-gb">
                                                    <div class="NavbarFooter-selectorOptionLabel">English (EU)</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale is-active is-selected NavbarFooter-selectorOption" href="/es-es/" data-id="es-es">
                                                    <div class="NavbarFooter-selectorOptionLabel">Español (EU)</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/es-mx/" data-id="es-mx">
                                                    <div class="NavbarFooter-selectorOptionLabel">Español (AL)</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/fr-fr/" data-id="fr-fr">
                                                    <div class="NavbarFooter-selectorOptionLabel">Français</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/it-it/" data-id="it-it">
                                                    <div class="NavbarFooter-selectorOptionLabel">Italiano</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="NavbarFooter-selectorSectionBlock">
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/pt-br/" data-id="pt-br">
                                                    <div class="NavbarFooter-selectorOptionLabel">Português (AL)</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/pt-pt/" data-id="pt-pt">
                                                    <div class="NavbarFooter-selectorOptionLabel">Português (EU)</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/ru-ru/" data-id="ru-ru">
                                                    <div class="NavbarFooter-selectorOptionLabel">Русский</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/ko-kr/" data-id="ko-kr">
                                                    <div class="NavbarFooter-selectorOptionLabel">한국어</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale NavbarFooter-selectorOption" href="/zh-tw/" data-id="zh-tw">
                                                    <div class="NavbarFooter-selectorOptionLabel">繁體中文</div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a class="NavbarFooter-selectorLocale is-external NavbarFooter-selectorOption" href="https://www.wowchina.com/zh-cn/" data-id="zh-cn">
                                                    <div class="NavbarFooter-selectorOptionLabel">简体中文</div>
                                                    <div class="NavbarFooter-selectorOptionIcon NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-external"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                            <use xlink:href="#Navbar-icon-check"></use>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="NavbarFooter-selectorTick"></div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .NavbarFooter-doNotSell {
                                    display: none;
                                }
                                
                                .NavbarFooter[data-country="US"][data-administrative-division="CA"] > .NavbarFooter-doNotSell {
                                    display: block;
                                }
                            </style>
                            <div class="NavbarFooter-logoContainer">
                                <a href="https://www.blizzard.com/" class="NavbarFooter-logo">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 124 66" class="NavbarFooter-logoUpper">
                                        <use xlink:href="#NavbarFooter-blizzard-upper"></use>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 124 66" class="NavbarFooter-logoLower">
                                        <use xlink:href="#NavbarFooter-blizzard-lower"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="NavbarFooter-links NavbarFooter-mainLinks">
                                <div class="NavbarFooter-linksLeft">
                                    <div class="NavbarFooter-link NavbarFooter-mainLink"><a href="https://careers.blizzard.com/" class="NavbarFooter-anchor" data-id="careers" data-analytics="global-nav" data-analytics-placement="Footer - Careers">Empleos</a></div>
                                    <div class="NavbarFooter-link NavbarFooter-mainLink"><a href="https://www.blizzard.com/company/about/" class="NavbarFooter-anchor" data-id="about" data-analytics="global-nav" data-analytics-placement="Footer - About">Información</a></div>
                                    <div class="NavbarFooter-link NavbarFooter-mainLink"><a href="https://support.blizzard.com/" class="NavbarFooter-anchor" data-id="support" data-analytics="global-nav" data-analytics-placement="Footer - Support">Asistencia</a></div>
                                </div>
                                <div class="NavbarFooter-linksRight">
                                    <div class="NavbarFooter-link NavbarFooter-mainLink"><a href="http://us.blizzard.com/company/about/contact.html" class="NavbarFooter-anchor" data-id="contact" data-analytics="global-nav">Contacto</a></div>
                                    <div class="NavbarFooter-link NavbarFooter-mainLink"><a href="https://blizzard.gamespress.com/" class="NavbarFooter-anchor" data-id="press" data-analytics="global-nav" data-analytics-placement="Footer - Press">Prensa</a></div>
                                    <div class="NavbarFooter-link NavbarFooter-mainLink"><a href="https://develop.battle.net/" class="NavbarFooter-anchor" data-id="api" data-analytics="global-nav" data-analytics-placement="Footer - Battle.net API">API</a></div>
                                </div>
                            </div>
                            <div class="NavbarFooter-copyright">©2020 Blizzard Entertainment, Inc. Todos los derechos reservados.</div>
                            <div class="NavbarFooter-trademark">Todas las <a href="https://www.blizzard.com/legal/b04001c4-dc81-480d-a475-5e276e241e4f/">marcas comerciales</a> a las que se hace referencia son propiedad de sus respectivos dueños.</div>
                            <div class="NavbarFooter-doNotSell NavbarFooter-trademark"><span>CA Residents only:</span> <a href="https://www.blizzard.com/legal/a97631bf-2b21-4755-a740-5934bd5cb632/" data-id="ccpa" data-analytics="global-nav" data-analytics-placement="Footer - ccpa">Do not sell my personal information</a></div>
                            <div class="NavbarFooter-links NavbarFooter-subLinks">
                                <div class="NavbarFooter-link NavbarFooter-subLink"><a href="https://www.blizzard.com/es-es/legal/8c41e7e6-0b61-42c4-a674-c91d8e8d68d3/" class="NavbarFooter-anchor" data-id="privacy" data-analytics="global-nav" data-analytics-placement="Footer - Privacy">Privacidad</a></div>
                                <div class="NavbarFooter-link NavbarFooter-subLink"><a href="https://www.blizzard.com/legal/" class="NavbarFooter-anchor" data-id="legal" data-analytics="global-nav">Legal</a></div>
                                <div class="NavbarFooter-link NavbarFooter-subLink"><a href="https://www.blizzard.com/legal/511dbf9e-2b2d-4047-8243-4c5c65e0ebf1/" class="NavbarFooter-anchor" data-id="terms" data-analytics="global-nav" data-analytics-placement="Footer - Terms">Términos</a></div>
                            </div>
                            <div class="NavbarFooter-legal" data-disable-additional="" data-disable-legal="" data-legal-id="5730135" data-legal-url="https://navbar.blizzard.com/api/v4/nav/rating" data-country="CR"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="PersistentCta-space"></div>
            <div class="PersistentCtaMount PersistentCta--small" data-props='{"title":"Shadowlands","subtitle":"Próxima expansión","prepurchaseButton":{"text":"Precomprar","url":"http://shop.battle.net/product/world-of-warcraft-shadowlands?utm_source=worldofwarcraft.com","analytics":{"event":"ctaBuy","eventCategory":"cta-buy","eventAction":"pre-purchase","eventLabel":"persistent banner"}},"learnMoreLink":{"text":"Más información","url":"/shadowlands","analytics":{"event":"ctaOther","eventCategory":"cta-other","eventAction":"learn more","eventLabel":"persistent banner"}}}' media-medium="!PersistentCta--small PersistentCta--medium" media-large="!PersistentCta--medium PersistentCta--large" media-huge="!PersistentCta--large"></div>
        </div>
    </div>
    <div class="Photoswipe pswp Photoswipe--modal Photoswipe--wow" name="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar Photoswipe-top">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Cerrar (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Compartir"></button>
                    <button class="pswp__button pswp__button--fs" title="Pantalla completa"></button>
                    <button class="pswp__button pswp__button--zoom" title="Acercar/Alejar"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Anterior (izquierda)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Siguiente (derecha)"></button>
                <div class="Photoswipe-prev" title="Anterior (izquierda)"><span class="Icon Icon--prev"></span></div>
                <div class="Photoswipe-next" title="Siguiente (derecha)"><span class="Icon Icon--next"></span></div>
            </div>
        </div>
    </div>
    <div class="Photoswipe pswp Photoswipe--lightbox Photoswipe--wow" name="lightbox" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar Photoswipe-top">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Cerrar (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Compartir"></button>
                    <button class="pswp__button pswp__button--fs" title="Pantalla completa"></button>
                    <button class="pswp__button pswp__button--zoom" title="Acercar/Alejar"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Anterior (izquierda)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Siguiente (derecha)"></button>
                <div class="Photoswipe-prev" title="Anterior (izquierda)"><span class="Icon Icon--prev"></span></div>
                <div class="Photoswipe-next" title="Siguiente (derecha)"><span class="Icon Icon--next"></span></div>
            </div>
        </div>
    </div>
    <script src="https://assets.worldofwarcraft.com/static/scripts/navbar.js?v8.0.1"></script>
    <script src="https://assets.worldofwarcraft.com/static/runtime.bdf97ad1141c1db9ee42.js"></script>
    <script src="https://assets.worldofwarcraft.com/static/vendor.d4c884b0d0825ec270cc.js"></script>
    <script src="https://assets.worldofwarcraft.com/static/strings.9acb760bf0b857790a5c.js"></script>
    <script src="https://assets.worldofwarcraft.com/static/3.5890d9005602ecab6d0f.js"></script>
    <script src="https://assets.worldofwarcraft.com/static/legacy-components.ba77a97bf2fd51b8aaa4.js"></script>
    <script>
        window.dispatchEvent(new CustomEvent("navbarAddFooterLinks", {
            detail: {
                secondary: [{
                    text: "Cookies",
                    href: "/cookies"
                }]
            }
        }));
    </script>
    <!-- CODE INCLUDES -->
    <?php echo $jsincludes ?> 
</body>
</html>