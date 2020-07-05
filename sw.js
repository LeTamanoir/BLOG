console.log("service worker running :) ")
var cacheName = 'blog-pwa';
var filesToCache = [
  '/',
  '/site/desktop/view/Administration/viewDefaultAdministration.html',
  '/site/desktop/config/stylesheet_desktop/stylesheet.css',
  '/site/desktop/functions/mainFunctions.js'
];

/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(filesToCache);
    })
  );
});

/* Serve cached content when offline */
self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});
nique