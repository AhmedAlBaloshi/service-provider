// import {
//   c as E,
//   o as A,
//   f as w,
//   s as x,
//   a as T,
// } from "./floating-ui.dom.esm.f336276b.js";
let u, i;
const C = 2e3;
let f = (e, r) => {
    let t = e.textContent;
    if (!t) return r();
    (e.textContent = t.substring(0, t.length - 1)),
      setTimeout(() => {
        f(e, r);
      }, 20);
  },
  h = (e) => {
    let r = u.dataset["word-" + e];
    if (!r)
      return setTimeout(() => {
        i.classList.remove("active");
      }, 600);
    setTimeout(() => {
      f(i, () => {
        for (let t = 0; t < r.length; t++)
          setTimeout(() => {
            i.textContent += r.charAt(t);
          }, t * 50 + t * 5);
      }),
        e++,
        h(e);
    }, C);
  };
(() => {
  let e = document.querySelector("#animate-slide");
  !e ||
    ((u = e.querySelector(".headline-words-wrapper")),
    (i = u.querySelector("b:first-child")),
    h(2));
})();
let k = (e) => {
  const r = e.querySelectorAll('a[data-toggle="collapse"]');
  r.forEach((t) => {
    let o = [...r].indexOf(t),
      n = e.querySelectorAll("picture")[o],
      l = e.querySelector(t.getAttribute("data-target"));
    t.addEventListener("mouseenter", () => {
      n.querySelector("img").removeAttribute("loading");
    }),
      t.addEventListener("click", (a) => {
        a.preventDefault(),
          l.classList.contains("collapsed")
            ? (e.querySelectorAll("div[data-collapsible]").forEach((s) => {
                s.classList.add("collapsed");
              }),
              l.classList.remove("collapsed"))
            : l.classList.add("collapsed"),
          n.classList.contains("hidden") &&
            (e.querySelectorAll("picture").forEach((s) => {
              s.classList.add("hidden");
            }),
            n.classList.remove("hidden"));
      });
  });
};
document.querySelectorAll("section[data-switchable]").forEach((e) => {
  k(e);
});
var b;
function d() {
  document.querySelectorAll("a[data-submenu]").forEach((e) => {
    e.classList.remove("active");
    let r = e.getAttribute("data-submenu");
    document.querySelector(r).style.display = "none";
  }),
    document.querySelector("#hover-menu").classList.remove("active"),
    (document.querySelector("#hover-menu").style.opacity = 0);
}
const v = () => {
    b = setTimeout(() => d(), 50);
  },
  p = () => {
    clearTimeout(b);
  };
function D() {
  const e = document.querySelector("#hover-menu");
  if (!e) return;
  const r = ["mouseenter", "focus"];
  function t(o) {
    document
      .querySelectorAll("a[data-submenu]")
      .forEach((c) => c.classList.remove("active")),
      o.classList.add("active"),
      (document.querySelector("#resources").style.display = "none"),
      (document.querySelector("#features").style.display = "none"),
      (document.querySelector("#industries").style.display = "none");
    var n = o.getAttribute("data-submenu"),
      l = document.querySelector(n);
    l.style.display = "block";
    const a = document.querySelector("#hover-menu"),
      s = a.querySelector(".arrow");
    Ft(o, a, {
      placement: "bottom",
      middleware: [Mt(5), Bt(), Vt({ padding: 0 }), Nt({ element: s })],
    }).then(({ x: c, y: g, placement: q, middlewareData: _ }) => {
      Object.assign(a.style, { left: `${c}px`, top: `${g}px` });
      const { x: m, y } = _.arrow,
        L = { top: "bottom", right: "left", bottom: "top", left: "right" }[
          q.split("-")[0]
        ];
      Object.assign(s.style, {
        left: m != null ? `${m}px` : "",
        top: y != null ? `${y}px` : "",
        right: "",
        bottom: "",
        [L]: "-4px",
      }),
        (a.style.opacity = 1);
    });
  }
  e.addEventListener("mouseenter", () => p(), !1),
    e.addEventListener("mouseleave", () => vT(), !1),
    document.querySelectorAll("a[data-submenu]").forEach((o) => {
      o.addEventListener("mouseleave", () => vT(), !1),
        o.addEventListener("click", (n) => {
          n.preventDefault();
          let l = document.querySelector("#hover-menu");
          return window.getComputedStyle(l).opacity == 0 ? t(o) : d();
        }),
        r.forEach((n) =>
          o.addEventListener(n, (l) => {
            let a = l.target;
            p(), t(a);
          })
        );
    });
}
let F = () => {
  const e = document.querySelector("#toggler");
  if (!e) return;
  const r = e.getAttribute("data-target"),
    t = document.querySelector(r);
  e.onclick = () =>
    t.classList.contains("hidden")
      ? t.classList.remove("hidden")
      : (d(), t.classList.add("hidden"));
};
F(),
  D(),
  console.log(`      ___         ___      ___      ___         ___     \r
     /  /\\       /  /\\    /  /\\    /  /\\       /  /\\    \r
    /  /:/_     /  /::\\  /  /::\\  /  /:/      /  /::\\   \r
   /  /:/ /\\   /  /:/\\:\\/  /:/\\:\\/  /:/      /  /:/\\:\\  \r
  /  /:/ /::\\ /  /:/~/:/  /:/~/:/  /:/  ___ /  /:/  \\:\\ \r
 /__/:/ /:/\\:/__/:/ /:/__/:/ /:/__/:/  /  //__/:/ \\__\\:\\\r
 \\  \\:\\/:/~/:\\  \\:\\/:/\\  \\:\\/:/\\  \\:\\ /  /:\\  \\:\\ /  /:/\r
  \\  \\::/ /:/ \\  \\::/  \\  \\::/  \\  \\:\\  /:/ \\  \\:\\  /:/ \r
   \\__\\/ /:/   \\  \\:\\   \\  \\:\\   \\  \\:\\/:/   \\  \\:\\/:/  \r
     /__/:/     \\  \\:\\   \\  \\:\\   \\  \\::/     \\  \\::/   \r
     \\__\\/       \\__\\/    \\__\\/    \\__\\/       \\__\\/    \r
\r
`),
  console.log(`\r
\r
\u{1F4DF} Checkout our dev docs at https://spp.co/help/knowledgebase/api/`);
let I = (e) => {
  const r = e.querySelector("select");
  r.addEventListener("mouseenter", () => {
    e.querySelectorAll("img").forEach((t) => {
      t.removeAttribute("loading");
    });
  }),
    r.addEventListener("change", () => {
      e.querySelector("picture:not(.hidden)").classList.add("hidden"),
        e.querySelector(r.value).classList.remove("hidden");
    });
};
document.querySelectorAll("div[data-pov-switcher]").forEach((e) => {
  I(e);
});
(() => {
  const e = document.querySelector("#form-pre-trial");
  e == null ||
    e.addEventListener("submit", (r) => {
      const t = e.querySelector('button[type="submit"]'),
        o = e.querySelector('input[name="email"]'),
        n = e.querySelector('input[name="redirect"]');
      t.setAttribute("disabled", "disabled"),
        typeof ga == "function" &&
          ga("send", {
            hitType: "event",
            eventCategory: "form",
            eventAction: "submit",
            eventLabel: "Pre-Trial Form",
          }),
        (n.value = n.dataset.base + encodeURIComponent(o.value));
    });
})();
let $ = function (e, r) {
    let t = e ? e.nextElementSibling : "";
    return !r || (t && t.matches(r)) ? t : null;
  },
  S = function (e) {
    let r = e.querySelector("picture.active"),
      t = $(r, "picture");
    t || (t = e.querySelector("picture"));
    const o = document.createElement("a");
    o.setAttribute("href", "#"),
      o.classList.add("next"),
      (o.style.top = r ? r.querySelector("img").getAttribute("data-top") : ''),
      (o.style.left = r ?  r.querySelector("img").getAttribute("data-left") : ''),
      o.addEventListener("mouseenter", () => {
        t.querySelector("img").removeAttribute("loading");
      }),
      o.addEventListener("click", (n) => {
        n.preventDefault(),
          n.target.remove(),
          r.classList.remove("active"),
          t.classList.add("active"),
          S(e);
      }),
       r ? r.insertAdjacentElement("afterEnd", o) : '';
  };
document.querySelectorAll("div[data-slideshow]").forEach((e) => {
  S(e);
});
document.querySelectorAll("div[data-hero-video]").forEach((e) => {
  let r = e.querySelector("div[data-play]");
  r.addEventListener("click", () => {
    let t = e.querySelector("iframe");
    t.classList.remove("hidden");
    let o = t.getAttribute("data-src");
    t.setAttribute("src", o),
      t.setAttribute("data-src", null),
      e.querySelector("*[data-hero-image]").remove(),
      r.remove();
  });
});
(() => {
  const e = document.querySelector("#form-onboarding-call");
  e == null ||
    e.addEventListener("submit", (r) => {
      const t = e.querySelector('button[type="submit"]'),
        o = e.querySelector('input[name="email"]'),
        n = e.querySelector('input[name="redirect"]');
      t.setAttribute("disabled", "disabled"),
        typeof ga == "function" &&
          ga("send", {
            hitType: "event",
            eventCategory: "form",
            eventAction: "submit",
            eventLabel: "Onboarding Sign-up",
          }),
        (n.value = n.dataset.base + encodeURIComponent(o.value));
    });
})();

function T(t) {
    return t.split("-")[0];
  }
  function nt(t) {
    return t.split("-")[1];
  }
  function D(t) {
    return ["top", "bottom"].includes(T(t)) ? "x" : "y";
  }
  function q(t) {
    return t === "y" ? "height" : "width";
  }
  function KT(t) {
    let { reference: e, floating: n, placement: o } = t;
    const i = e.x + e.width / 2 - n.width / 2,
      s = e.y + e.height / 2 - n.height / 2;
    let c;
    switch (T(o)) {
      case "top":
        c = { x: i, y: e.y - n.height };
        break;
      case "bottom":
        c = { x: i, y: e.y + e.height };
        break;
      case "right":
        c = { x: e.x + e.width, y: s };
        break;
      case "left":
        c = { x: e.x - n.width, y: s };
        break;
      default:
        c = { x: e.x, y: e.y };
    }
    const r = D(o),
      l = q(r);
    switch (nt(o)) {
      case "start":
        c[r] = c[r] - (e[l] / 2 - n[l] / 2);
        break;
      case "end":
        c[r] = c[r] + (e[l] / 2 - n[l] / 2);
        break;
    }
    return c;
  }
  const mt = async (t, e, n) => {
    const {
      placement: o = "bottom",
      strategy: i = "absolute",
      middleware: s = [],
      platform: c,
    } = n;
    let r = await c.getElementRects({ reference: t, floating: e, strategy: i }),
      { x: l, y: g } = KT({ ...r, placement: o }),
      f = o,
      p = {};
    for (let a = 0; a < s.length; a++) {
      const { name: u, fn: x } = s[a],
        { x: w, y: d, data: h, reset: m } = await x({
          x: l,
          y: g,
          initialPlacement: o,
          placement: f,
          strategy: i,
          middlewareData: p,
          rects: r,
          platform: c,
          elements: { reference: t, floating: e },
        });
      if (
        ((l = w != null ? w : l),
        (g = d != null ? d : g),
        (p = { ...p, [u]: h != null ? h : {} }),
        m)
      ) {
        typeof m == "object" &&
          (m.placement && (f = m.placement),
          m.rects &&
            (r =
              m.rects === !0
                ? await c.getElementRects({
                    reference: t,
                    floating: e,
                    strategy: i,
                  })
                : m.rects),
          ({ x: l, y: g } = KT({ ...r, placement: f }))),
          (a = -1);
        continue;
      }
    }
    return { x: l, y: g, placement: f, strategy: i, middlewareData: p };
  };
  function gt(t) {
    return { top: 0, right: 0, bottom: 0, left: 0, ...t };
  }
  function ot(t) {
    return typeof t != "number"
      ? gt(t)
      : { top: t, right: t, bottom: t, left: t };
  }
  function IT(t) {
    return {
      ...t,
      top: t.y,
      left: t.x,
      right: t.x + t.width,
      bottom: t.y + t.height,
    };
  }
  async function it(t, e) {
    e === void 0 && (e = {});
    const { x: n, y: o, platform: i, rects: s, elements: c, strategy: r } = t,
      {
        boundary: l = "clippingParents",
        rootBoundary: g = "viewport",
        elementContext: f = "floating",
        altBoundary: p = !1,
        padding: a = 0,
      } = e,
      u = ot(a),
      w = c[p ? (f === "floating" ? "reference" : "floating") : f],
      d = await i.getClippingClientRect({
        element: (await i.isElement(w))
          ? w
          : w.contextElement ||
            (await i.getDocumentElement({ element: c.floating })),
        boundary: l,
        rootBoundary: g,
      }),
      h = IT(
        await i.convertOffsetParentRelativeRectToViewportRelativeRect({
          rect: f === "floating" ? { ...s.floating, x: n, y: o } : s.reference,
          offsetParent: await i.getOffsetParent({ element: c.floating }),
          strategy: r,
        })
      );
    return {
      top: d.top - h.top + u.top,
      bottom: h.bottom - d.bottom + u.bottom,
      left: d.left - h.left + u.left,
      right: h.right - d.right + u.right,
    };
  }
  const dt = Math.min,
    ht = Math.max;
  function z(t, e, n) {
    return ht(t, dt(e, n));
  }
  const Nt = (t) => ({
      name: "arrow",
      options: t,
      async fn(e) {
        const { element: n, padding: o = 0 } = t != null ? t : {},
          { x: i, y: s, placement: c, rects: r, platform: l } = e;
        if (n == null) return {};
        const g = ot(o),
          f = { x: i, y: s },
          p = T(c),
          a = D(p),
          u = q(a),
          x = await l.getDimensions({ element: n }),
          w = a === "y" ? "top" : "left",
          d = a === "y" ? "bottom" : "right",
          h = r.reference[u] + r.reference[a] - f[a] - r.floating[u],
          m = f[a] - r.reference[a],
          y = await l.getOffsetParent({ element: n }),
          A = y ? (a === "y" ? y.clientHeight || 0 : y.clientWidth || 0) : 0,
          L = h / 2 - m / 2,
          W = g[w],
          H = A - x[u] - g[d],
          b = A / 2 - x[u] / 2 + L,
          O = z(W, b, H);
        return { data: { [a]: O, centerOffset: b - O } };
      },
    }),
    pt = { left: "right", right: "left", bottom: "top", top: "bottom" };
  function N(t) {
    return t.replace(/left|right|bottom|top/g, (e) => pt[e]);
  }
  function xt(t, e) {
    const n = nt(t) === "start",
      o = D(t),
      i = q(o);
    let s = o === "x" ? (n ? "right" : "left") : n ? "bottom" : "top";
    return e.reference[i] > e.floating[i] && (s = N(s)), { main: s, cross: N(s) };
  }
  const wt = { start: "end", end: "start" };
  function Q(t) {
    return t.replace(/start|end/g, (e) => wt[e]);
  }
  function yt(t) {
    const e = N(t);
    return [Q(t), e, Q(e)];
  }
  const Bt = function (t) {
    return (
      t === void 0 && (t = {}),
      {
        name: "flip",
        options: t,
        async fn(e) {
          var n, o;
          const {
            placement: i,
            middlewareData: s,
            rects: c,
            initialPlacement: r,
          } = e;
          if ((n = s.flip) != null && n.skip) return {};
          const {
              mainAxis: l = !0,
              crossAxis: g = !0,
              fallbackPlacements: f,
              fallbackStrategy: p = "bestFit",
              flipAlignment: a = !0,
              ...u
            } = t,
            x = T(i),
            d = f || (x === r || !a ? [N(r)] : yt(r)),
            h = [r, ...d],
            m = await it(e, u),
            y = [];
          let A = ((o = s.flip) == null ? void 0 : o.overflows) || [];
          if ((l && y.push(m[x]), g)) {
            const { main: b, cross: O } = xt(i, c);
            y.push(m[b], m[O]);
          }
          if (
            ((A = [...A, { placement: i, overflows: y }]),
            !y.every((b) => b <= 0))
          ) {
            var L, W;
            const b =
                ((L = (W = s.flip) == null ? void 0 : W.index) != null ? L : 0) +
                1,
              O = h[b];
            if (O)
              return {
                data: { index: b, overflows: A },
                reset: { placement: O },
              };
            let Y = "bottom";
            switch (p) {
              case "bestFit": {
                var H;
                const J =
                  (H = A.slice().sort(
                    (at, ut) =>
                      at.overflows
                        .filter((E) => E > 0)
                        .reduce((E, $) => E + $, 0) -
                      ut.overflows.filter((E) => E > 0).reduce((E, $) => E + $, 0)
                  )[0]) == null
                    ? void 0
                    : H.placement;
                J && (Y = J);
                break;
              }
              case "initialPlacement":
                Y = r;
                break;
            }
            return { data: { skip: !0 }, reset: { placement: Y } };
          }
          return {};
        },
      }
    );
  };
  function bt(t) {
    let { placement: e, rects: n, value: o } = t;
    const i = T(e),
      s = ["left", "top"].includes(i) ? -1 : 1,
      c = typeof o == "function" ? o({ ...n, placement: e }) : o,
      { mainAxis: r, crossAxis: l } =
        typeof c == "number"
          ? { mainAxis: c, crossAxis: 0 }
          : { mainAxis: 0, crossAxis: 0, ...c };
    return D(i) === "x" ? { x: l, y: r * s } : { x: r * s, y: l };
  }
  const Mt = function (t) {
    return (
      t === void 0 && (t = 0),
      {
        name: "offset",
        options: t,
        fn(e) {
          const { x: n, y: o, placement: i, rects: s } = e,
            c = bt({ placement: i, rects: s, value: t });
          return { x: n + c.x, y: o + c.y, data: c };
        },
      }
    );
  };
  function vt(t) {
    return t === "x" ? "y" : "x";
  }
  const Vt = function (t) {
    return (
      t === void 0 && (t = {}),
      {
        name: "shift",
        options: t,
        async fn(e) {
          const { x: n, y: o, placement: i } = e,
            {
              mainAxis: s = !0,
              crossAxis: c = !1,
              limiter: r = {
                fn: (d) => {
                  let { x: h, y: m } = d;
                  return { x: h, y: m };
                },
              },
              ...l
            } = t,
            g = { x: n, y: o },
            f = await it(e, l),
            p = D(T(i)),
            a = vt(p);
          let u = g[p],
            x = g[a];
          if (s) {
            const d = p === "y" ? "top" : "left",
              h = p === "y" ? "bottom" : "right",
              m = u + f[d],
              y = u - f[h];
            u = z(m, u, y);
          }
          if (c) {
            const d = a === "y" ? "top" : "left",
              h = a === "y" ? "bottom" : "right",
              m = x + f[d],
              y = x - f[h];
            x = z(m, x, y);
          }
          const w = r.fn({ ...e, [p]: u, [a]: x });
          return { ...w, data: { x: w.x - n, y: w.y - o } };
        },
      }
    );
  };
  function G(t) {
    return (t == null ? void 0 : t.toString()) === "[object Window]";
  }
  function P(t) {
    if (t == null) return window;
    if (!G(t)) {
      const e = t.ownerDocument;
      return (e && e.defaultView) || window;
    }
    return t;
  }
  function VL(t) {
    return P(t).getComputedStyle(t);
  }
  function vT(t) {
    return G(t) ? "" : t ? (t.nodeName || "").toLowerCase() : "";
  }
  function CT(t) {
    return t instanceof P(t).HTMLElement;
  }
  function B(t) {
    return t instanceof P(t).Element;
  }
  function Ct(t) {
    return t instanceof P(t).Node;
  }
  function rt(t) {
    const e = P(t).ShadowRoot;
    return t instanceof e || t instanceof ShadowRoot;
  }
  function FT(t) {
    const { overflow: e, overflowX: n, overflowY: o } = VL(t);
    return /auto|scroll|overlay|hidden/.test(e + o + n);
  }
  function Pt(t) {
    return ["table", "td", "th"].includes(vT(t));
  }
  function ct(t) {
    const e = navigator.userAgent.toLowerCase().includes("firefox"),
      n = VL(t);
    return (
      n.transform !== "none" ||
      n.perspective !== "none" ||
      n.contain === "paint" ||
      ["transform", "perspective"].includes(n.willChange) ||
      (e && n.willChange === "filter") ||
      (e && (n.filter ? n.filter !== "none" : !1))
    );
  }
  const U = Math.min,
    lT = Math.max,
    M = Math.round;
  function STM(t, e) {
    e === void 0 && (e = !1);
    const n = t.getBoundingClientRect();
    let o = 1,
      i = 1;
    return (
      e &&
        CT(t) &&
        ((o = (t.offsetWidth > 0 && M(n.width) / t.offsetWidth) || 1),
        (i = (t.offsetHeight > 0 && M(n.height) / t.offsetHeight) || 1)),
      {
        width: n.width / o,
        height: n.height / i,
        top: n.top / i,
        right: n.right / o,
        bottom: n.bottom / i,
        left: n.left / o,
        x: n.left / o,
        y: n.top / i,
      }
    );
  }
  function R(t) {
    return ((Ct(t) ? t.ownerDocument : t.document) || window.document)
      .documentElement;
  }
  function j(t) {
    return G(t)
      ? { scrollLeft: t.pageXOffset, scrollTop: t.pageYOffset }
      : { scrollLeft: t.scrollLeft, scrollTop: t.scrollTop };
  }
  function st(t) {
    return STM(R(t)).left + j(t).scrollLeft;
  }
  function Rt(t) {
    const e = STM(t);
    return M(e.width) !== t.offsetWidth || M(e.height) !== t.offsetHeight;
  }
  function At(t, e, n) {
    const o = CT(e),
      i = R(e),
      s = STM(t, o && Rt(e));
    let c = { scrollLeft: 0, scrollTop: 0 };
    const r = { x: 0, y: 0 };
    if (o || (!o && n !== "fixed"))
      if (((vT(e) !== "body" || FT(i)) && (c = j(e)), CT(e))) {
        const l = STM(e, !0);
        (r.x = l.x + e.clientLeft), (r.y = l.y + e.clientTop);
      } else i && (r.x = st(i));
    return {
      x: s.left + c.scrollLeft - r.x,
      y: s.top + c.scrollTop - r.y,
      width: s.width,
      height: s.height,
    };
  }
  function X(t) {
    return vT(t) === "html"
      ? t
      : t.assignedSlot || t.parentNode || (rt(t) ? t.host : null) || R(t);
  }
  function Z(t) {
    return !CT(t) || getComputedStyle(t).position === "fixed"
      ? null
      : t.offsetParent;
  }
  function Ot(t) {
    let e = X(t);
    for (; CT(e) && !["html", "body"].includes(vT(e)); ) {
      if (ct(e)) return e;
      e = e.parentNode;
    }
    return null;
  }
  function _(t) {
    const e = P(t);
    let n = Z(t);
    for (; n && Pt(n) && getComputedStyle(n).position === "static"; ) n = Z(n);
    return n &&
      (vT(n) === "html" ||
        (vT(n) === "body" && getComputedStyle(n).position === "static" && !ct(n)))
      ? e
      : n || Ot(t) || e;
  }
  function tt(t) {
    return { width: t.offsetWidth, height: t.offsetHeight };
  }
  function Et(t) {
    let { rect: e, offsetParent: n, strategy: o } = t;
    const i = CT(n),
      s = R(n);
    if (n === s) return e;
    let c = { scrollLeft: 0, scrollTop: 0 };
    const r = { x: 0, y: 0 };
    if (
      (i || (!i && o !== "fixed")) &&
      ((vT(n) !== "body" || FT(s)) && (c = j(n)), CT(n))
    ) {
      const l = STM(n, !0);
      (r.x = l.x + n.clientLeft), (r.y = l.y + n.clientTop);
    }
    return { ...e, x: e.x - c.scrollLeft + r.x, y: e.y - c.scrollTop + r.y };
  }
  function St(t) {
    const e = P(t),
      n = R(t),
      o = e.visualViewport;
    let i = n.clientWidth,
      s = n.clientHeight,
      c = 0,
      r = 0;
    return (
      o &&
        ((i = o.width),
        (s = o.height),
        Math.abs(e.innerWidth / o.scale - o.width) < 0.01 &&
          ((c = o.offsetLeft), (r = o.offsetTop))),
      { width: i, height: s, x: c, y: r }
    );
  }
  function Tt(t) {
    var e;
    const n = R(t),
      o = j(t),
      i = (e = t.ownerDocument) == null ? void 0 : e.body,
      s = k(
        n.scrollWidth,
        n.clientWidth,
        i ? i.scrollWidth : 0,
        i ? i.clientWidth : 0
      ),
      c = k(
        n.scrollHeight,
        n.clientHeight,
        i ? i.scrollHeight : 0,
        i ? i.clientHeight : 0
      );
    let r = -o.scrollLeft + st(t);
    const l = -o.scrollTop;
    return (
      VL(i || n).direction === "rtl" &&
        (r += k(n.clientWidth, i ? i.clientWidth : 0) - s),
      { width: s, height: c, x: r, y: l }
    );
  }
  function lt(t) {
    return ["html", "body", "#document"].includes(vT(t))
      ? t.ownerDocument.body
      : CT(t) && FT(t)
      ? t
      : lt(X(t));
  }
  function ft(t, e) {
    var n;
    e === void 0 && (e = []);
    const o = lt(t),
      i = o === ((n = t.ownerDocument) == null ? void 0 : n.body),
      s = P(o),
      c = i ? [s].concat(s.visualViewport || [], FT(o) ? o : []) : o,
      r = e.concat(c);
    return i ? r : r.concat(ft(X(c)));
  }
  function kt(t, e) {
    const n = e.getRootNode == null ? void 0 : e.getRootNode();
    if (t.contains(e)) return !0;
    if (n && rt(n)) {
      let o = e;
      do {
        if (o && t === o) return !0;
        o = o.parentNode || o.host;
      } while (o);
    }
    return !1;
  }
  function Dt(t) {
    const e = STM(t),
      n = e.top + t.clientTop,
      o = e.left + t.clientLeft;
    return {
      top: n,
      left: o,
      x: o,
      y: n,
      right: o + t.clientWidth,
      bottom: n + t.clientHeight,
      width: t.clientWidth,
      height: t.clientHeight,
    };
  }
  function et(t, e) {
    return e === "viewport" ? IT(St(t)) : B(e) ? Dt(e) : IT(Tt(R(t)));
  }
  function Lt(t) {
    const e = ft(X(t)),
      o = ["absolute", "fixed"].includes(VL(t).position) && CT(t) ? _(t) : t;
    return B(o) ? e.filter((i) => B(i) && kt(i, o) && vT(i) !== "body") : [];
  }
  function Wt(t) {
    let { element: e, boundary: n, rootBoundary: o } = t;
    const s = [...(n === "clippingParents" ? Lt(e) : [].concat(n)), o],
      c = s[0],
      r = s.reduce((l, g) => {
        const f = et(e, g);
        return (
          (l.top = k(f.top, l.top)),
          (l.right = U(f.right, l.right)),
          (l.bottom = U(f.bottom, l.bottom)),
          (l.left = k(f.left, l.left)),
          l
        );
      }, et(e, c));
    return (
      (r.width = r.right - r.left),
      (r.height = r.bottom - r.top),
      (r.x = r.left),
      (r.y = r.top),
      r
    );
  }
  const Ht = {
      getElementRects: (t) => {
        let { reference: e, floating: n, strategy: o } = t;
        return { reference: At(e, _(n), o), floating: { ...tt(n), x: 0, y: 0 } };
      },
      convertOffsetParentRelativeRectToViewportRelativeRect: (t) => Et(t),
      getOffsetParent: (t) => {
        let { element: e } = t;
        return _(e);
      },
      isElement: (t) => B(t),
      getDocumentElement: (t) => {
        let { element: e } = t;
        return R(e);
      },
      getClippingClientRect: (t) => Wt(t),
      getDimensions: (t) => {
        let { element: e } = t;
        return tt(e);
      },
      getClientRects: (t) => {
        let { element: e } = t;
        return e.getClientRects();
      },
    },
    Ft = (t, e, n) => mt(t, e, { platform: Ht, ...n });
  // export { Nt as a, Ft as c, Bt as f, Mt as o, Vt as s };
  