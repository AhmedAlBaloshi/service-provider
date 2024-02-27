// (() => {
//   let t = new URLSearchParams(window.location.search);
//   t.get("utm_campaign") === "affiliate" &&
//     t.get("utm_source").length &&
//     localStorage.setItem(
//       "affiliate-cta",
//       "Friends of " + t.get("utm_source") + " get a free month"
//     ),
//     t.get("via") === "superpath" &&
//       localStorage.setItem(
//         "affiliate-cta",
//         "Friends at SuperPath get a free month"
//       ),
//     localStorage.getItem("affiliate-cta") &&
//       document.querySelectorAll("[data-affiliate-customize]").forEach((e) => {
//         e.textContent = localStorage.getItem("affiliate-cta");
//       });
//   let a = new URLSearchParams({
//     referrer: document.referrer,
//     url: window.location.href,
//   });
//   console.log("\u{1F648} t.js", a),
//     fetch("/t", { method: "post", body: a })
//       .then((e) => {
//         console.log("\u{1F648} t.js", e);
//       })
//       .catch((e) => {
//         console.error("\u{1F648} t.js", e);
//       });
// })();
