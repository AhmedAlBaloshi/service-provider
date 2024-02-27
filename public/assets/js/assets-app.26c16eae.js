// import {
//   c as E,
//   o as A,
//   f as w,
//   s as x,
//   a as T,
// } from "./floating-ui.dom.esm.f336276b.js";
// let u, i;
// const C = 2e3;
// let f = (e, r) => {
//     let t = e.textContent;
//     if (!t) return r();
//     (e.textContent = t.substring(0, t.length - 1)),
//       setTimeout(() => {
//         f(e, r);
//       }, 20);
//   },
//   h = (e) => {
//     let r = u.dataset["word-" + e];
//     if (!r)
//       return setTimeout(() => {
//         i.classList.remove("active");
//       }, 600);
//     setTimeout(() => {
//       f(i, () => {
//         for (let t = 0; t < r.length; t++)
//           setTimeout(() => {
//             i.textContent += r.charAt(t);
//           }, t * 50 + t * 5);
//       }),
//         e++,
//         h(e);
//     }, C);
//   };
// (() => {
//   let e = document.querySelector("#animate-slide");
//   !e ||
//     ((u = e.querySelector(".headline-words-wrapper")),
//     (i = u.querySelector("b:first-child")),
//     h(2));
// })();
// let k = (e) => {
//   const r = e.querySelectorAll('a[data-toggle="collapse"]');
//   r.forEach((t) => {
//     let o = [...r].indexOf(t),
//       n = e.querySelectorAll("picture")[o],
//       l = e.querySelector(t.getAttribute("data-target"));
//     t.addEventListener("mouseenter", () => {
//       n.querySelector("img").removeAttribute("loading");
//     }),
//       t.addEventListener("click", (a) => {
//         a.preventDefault(),
//           l.classList.contains("collapsed")
//             ? (e.querySelectorAll("div[data-collapsible]").forEach((s) => {
//                 s.classList.add("collapsed");
//               }),
//               l.classList.remove("collapsed"))
//             : l.classList.add("collapsed"),
//           n.classList.contains("hidden") &&
//             (e.querySelectorAll("picture").forEach((s) => {
//               s.classList.add("hidden");
//             }),
//             n.classList.remove("hidden"));
//       });
//   });
// };
// document.querySelectorAll("section[data-switchable]").forEach((e) => {
//   k(e);
// });
// var b;
// function d() {
//   document.querySelectorAll("a[data-submenu]").forEach((e) => {
//     e.classList.remove("active");
//     let r = e.getAttribute("data-submenu");
//     document.querySelector(r).style.display = "none";
//   }),
//     document.querySelector("#hover-menu").classList.remove("active"),
//     (document.querySelector("#hover-menu").style.opacity = 0);
// }
// const v = () => {
//     b = setTimeout(() => d(), 50);
//   },
//   p = () => {
//     clearTimeout(b);
//   };
// function D() {
//   const e = document.querySelector("#hover-menu");
//   if (!e) return;
//   const r = ["mouseenter", "focus"];
//   function t(o) {
//     document
//       .querySelectorAll("a[data-submenu]")
//       .forEach((c) => c.classList.remove("active")),
//       o.classList.add("active"),
//       (document.querySelector("#resources").style.display = "none"),
//       (document.querySelector("#features").style.display = "none"),
//       (document.querySelector("#industries").style.display = "none");
//     var n = o.getAttribute("data-submenu"),
//       l = document.querySelector(n);
//     l.style.display = "block";
//     const a = document.querySelector("#hover-menu"),
//       s = a.querySelector(".arrow");
//     E(o, a, {
//       placement: "bottom",
//       middleware: [A(5), w(), x({ padding: 0 }), T({ element: s })],
//     }).then(({ x: c, y: g, placement: q, middlewareData: _ }) => {
//       Object.assign(a.style, { left: `${c}px`, top: `${g}px` });
//       const { x: m, y } = _.arrow,
//         L = { top: "bottom", right: "left", bottom: "top", left: "right" }[
//           q.split("-")[0]
//         ];
//       Object.assign(s.style, {
//         left: m != null ? `${m}px` : "",
//         top: y != null ? `${y}px` : "",
//         right: "",
//         bottom: "",
//         [L]: "-4px",
//       }),
//         (a.style.opacity = 1);
//     });
//   }
//   e.addEventListener("mouseenter", () => p(), !1),
//     e.addEventListener("mouseleave", () => v(), !1),
//     document.querySelectorAll("a[data-submenu]").forEach((o) => {
//       o.addEventListener("mouseleave", () => v(), !1),
//         o.addEventListener("click", (n) => {
//           n.preventDefault();
//           let l = document.querySelector("#hover-menu");
//           return window.getComputedStyle(l).opacity == 0 ? t(o) : d();
//         }),
//         r.forEach((n) =>
//           o.addEventListener(n, (l) => {
//             let a = l.target;
//             p(), t(a);
//           })
//         );
//     });
// }
// let F = () => {
//   const e = document.querySelector("#toggler");
//   if (!e) return;
//   const r = e.getAttribute("data-target"),
//     t = document.querySelector(r);
//   e.onclick = () =>
//     t.classList.contains("hidden")
//       ? t.classList.remove("hidden")
//       : (d(), t.classList.add("hidden"));
// };
// F(),
//   D(),
//   console.log(`      ___         ___      ___      ___         ___     \r
//      /  /\\       /  /\\    /  /\\    /  /\\       /  /\\    \r
//     /  /:/_     /  /::\\  /  /::\\  /  /:/      /  /::\\   \r
//    /  /:/ /\\   /  /:/\\:\\/  /:/\\:\\/  /:/      /  /:/\\:\\  \r
//   /  /:/ /::\\ /  /:/~/:/  /:/~/:/  /:/  ___ /  /:/  \\:\\ \r
//  /__/:/ /:/\\:/__/:/ /:/__/:/ /:/__/:/  /  //__/:/ \\__\\:\\\r
//  \\  \\:\\/:/~/:\\  \\:\\/:/\\  \\:\\/:/\\  \\:\\ /  /:\\  \\:\\ /  /:/\r
//   \\  \\::/ /:/ \\  \\::/  \\  \\::/  \\  \\:\\  /:/ \\  \\:\\  /:/ \r
//    \\__\\/ /:/   \\  \\:\\   \\  \\:\\   \\  \\:\\/:/   \\  \\:\\/:/  \r
//      /__/:/     \\  \\:\\   \\  \\:\\   \\  \\::/     \\  \\::/   \r
//      \\__\\/       \\__\\/    \\__\\/    \\__\\/       \\__\\/    \r
// \r
// `),
//   console.log(`\r
// \r
// \u{1F4DF} Checkout our dev docs at https://spp.co/help/knowledgebase/api/`);
// let I = (e) => {
//   const r = e.querySelector("select");
//   r.addEventListener("mouseenter", () => {
//     e.querySelectorAll("img").forEach((t) => {
//       t.removeAttribute("loading");
//     });
//   }),
//     r.addEventListener("change", () => {
//       e.querySelector("picture:not(.hidden)").classList.add("hidden"),
//         e.querySelector(r.value).classList.remove("hidden");
//     });
// };
// document.querySelectorAll("div[data-pov-switcher]").forEach((e) => {
//   I(e);
// });
// (() => {
//   const e = document.querySelector("#form-pre-trial");
//   e == null ||
//     e.addEventListener("submit", (r) => {
//       const t = e.querySelector('button[type="submit"]'),
//         o = e.querySelector('input[name="email"]'),
//         n = e.querySelector('input[name="redirect"]');
//       t.setAttribute("disabled", "disabled"),
//         typeof ga == "function" &&
//           ga("send", {
//             hitType: "event",
//             eventCategory: "form",
//             eventAction: "submit",
//             eventLabel: "Pre-Trial Form",
//           }),
//         (n.value = n.dataset.base + encodeURIComponent(o.value));
//     });
// })();
// let $ = function (e, r) {
//     let t = e.nextElementSibling;
//     return !r || (t && t.matches(r)) ? t : null;
//   },
//   S = function (e) {
//     let r = e.querySelector("picture.active"),
//       t = $(r, "picture");
//     t || (t = e.querySelector("picture"));
//     const o = document.createElement("a");
//     o.setAttribute("href", "#"),
//       o.classList.add("next"),
//       (o.style.top = r.querySelector("img").getAttribute("data-top")),
//       (o.style.left = r.querySelector("img").getAttribute("data-left")),
//       o.addEventListener("mouseenter", () => {
//         t.querySelector("img").removeAttribute("loading");
//       }),
//       o.addEventListener("click", (n) => {
//         n.preventDefault(),
//           n.target.remove(),
//           r.classList.remove("active"),
//           t.classList.add("active"),
//           S(e);
//       }),
//       r.insertAdjacentElement("afterEnd", o);
//   };
// document.querySelectorAll("div[data-slideshow]").forEach((e) => {
//   S(e);
// });
// document.querySelectorAll("div[data-hero-video]").forEach((e) => {
//   let r = e.querySelector("div[data-play]");
//   r.addEventListener("click", () => {
//     let t = e.querySelector("iframe");
//     t.classList.remove("hidden");
//     let o = t.getAttribute("data-src");
//     t.setAttribute("src", o),
//       t.setAttribute("data-src", null),
//       e.querySelector("*[data-hero-image]").remove(),
//       r.remove();
//   });
// });
// (() => {
//   const e = document.querySelector("#form-onboarding-call");
//   e == null ||
//     e.addEventListener("submit", (r) => {
//       const t = e.querySelector('button[type="submit"]'),
//         o = e.querySelector('input[name="email"]'),
//         n = e.querySelector('input[name="redirect"]');
//       t.setAttribute("disabled", "disabled"),
//         typeof ga == "function" &&
//           ga("send", {
//             hitType: "event",
//             eventCategory: "form",
//             eventAction: "submit",
//             eventLabel: "Onboarding Sign-up",
//           }),
//         (n.value = n.dataset.base + encodeURIComponent(o.value));
//     });
// })();
