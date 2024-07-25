   const CACHE_NAME = 'luxury-cars-cache-v1';
   const urlsToCache = [
		'index.html',
		'styles.css',
		'style.css',
		'Logo.png',
		'manifest.json',
		'deals.html',  
		'about.html',  
		'partners.html', 
		'contact.html',
		'register.html',
		'Каркас.html',
		'Bentley Continental.jpg',
		'Bentley_Logo.jpeg',
		'BMW_Logo.jpeg',
		'BMW 750d.jpg',
		'Cadillac_Logo.jpeg',
		'Ferrari Roma.jpg',
		'Ferrari_Logo.jpeg',
		'icon-192x192.png',
		'icon-256x256.png',
		'icon-384x384.png',
		'icon-512x512.png',
		'Maserati Levante.jpg',
		'Maserati_Logo.jpeg',
		'Mercedes E300.jpg',
		'Mercedes_Logo.jpeg',
		'Porsche 911.jpg',
		'Porsche_Logo.jpeg',
		'come_in.html'
   ];

   self.addEventListener('install', event => {
       event.waitUntil(
           caches.open(CACHE_NAME)
           .then(cache => {
               return cache.addAll(urlsToCache);
           })
       );
   });

   self.addEventListener('fetch', event => {
       event.respondWith(
           caches.match(event.request)
           .then(response => {
               return response || fetch(event.request);
           })
       );
   });
   