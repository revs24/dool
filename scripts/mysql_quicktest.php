<?php 
require "connect_to_mysql.php";  



CREATE TABLE `diary` (
  `entry_no` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL DEFAULT 'revs',
  `date` date DEFAULT NULL,
  `office_or_home` varchar(50) NOT NULL,
  `data` text NOT NULL
);


INSERT INTO `diary` (`entry_no`, `userid`, `date`, `office_or_home`, `data`) VALUES
(1, 'revs', '2015-11-08', 'CF', 'Holiday ');



CREATE TABLE `journey_details` (
  `starting_point` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `journey_time` int(11) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `sub_category` varchar(50) DEFAULT NULL,
  `tags` text,
  `data` text,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `image_path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=latin1;


INSERT INTO `tutorials` (`id`, `category`, `sub_category`, `tags`, `data`, `date`, `image_path`) VALUES
(88, 'Redis', '', NULL, 'Redis is a data structure server.\n', NULL, NULL),
(89, 'Redis', '', NULL, 'It is open-source, networked, in-memory, and stores keys with optional durability.\n', NULL, NULL),
(90, 'Redis', '', NULL, 'Redis is the most popular key-value database.\n', NULL, NULL),
(91, 'Redis', '', NULL, 'An in-memory database (IMDB; also main memory database system or MMDB or memory resident database) is a database management system that primarily relies on main memory for computer data storage.\n', NULL, NULL),
(92, 'Redis', '', NULL, 'It is contrasted with database management systems that employ a disk storage mechanism. Main memory databases are faster than disk-optimized databases since the internal optimization algorithms are simpler and execute fewer CPU instructions. Accessing data in memory eliminates seek time when querying the data, which provides faster and more predictable performance than disk.\n', NULL, NULL),
(93, 'Redis', '', NULL, 'Not like MongoDB (which is a disk-based document store), though MongoDB could be used for similar key/value use cases.The closest analog is probably to think of Redis as Memcached, but with built-in persistence (snapshotting or journaling to disk) and more datatypes.\n', NULL, NULL),
(94, 'Redis', '', NULL, 'redis-server for starting redis server.\n', NULL, NULL),
(95, 'Redis', '', NULL, 'redis-cli for redis command promt', NULL, NULL),
(96, 'test', '', NULL, 'test connection.', NULL, NULL),
(100, 'NodeJS', '', NULL, 'It is used to develop I/O intensive web applications like video streaming sites, single-page applications, and other web applications. Node.js is open source, completely free, and used by thousands of developers around the world.\n', NULL, NULL),
(101, 'NodeJS', '', NULL, 'This tutorial is designed for software programmers who want to learn the basics of Node.js and its architectural concepts. This tutorial will give you enough understanding on all the necessary components of Node.js with suitable examples.', NULL, NULL),
(112, 'NodeJS', '', NULL, 'Node.js is a very powerful JavaScript-based frameworkplatform built on Google Chromes JavaScript V8 Engine.', NULL, NULL),
(128, 'test2', '', NULL, 'I am Revs\n', NULL, NULL),
(129, 'test2', '', NULL, 'Hello.', NULL, NULL),
(131, 'Tomorrow Plans', '', NULL, 'Make entertainment page. Add slider for images. Provide option for image upload. Display text.\n', '2015-09-26 20:34:11', NULL),
(132, 'Tomorrow Plans', '', NULL, 'Make extract input page.', '2015-09-26 20:34:11', NULL),
(133, 'Sass command', '', NULL, 'For 1 file => sass --watch styles/main.scss:styles/css/main.css\n', '2015-09-27 20:02:41', NULL),
(134, 'Sass command', '', NULL, 'For folder => sass --watch styles/:styles/css/', '2015-09-27 20:02:41', NULL),
(135, 'Tomorrow Plans', '', NULL, 'Add per day status page as well', '2015-09-27 20:25:44', NULL),
(136, 'Tomorrow Plans', '', NULL, 'Make components for different parts. Like for categories.', '2015-09-28 20:06:47', NULL),
(137, 'Promises', '', NULL, 'A Promise represents the result of a task, which may or may not have completed.\n', '2015-09-29 18:30:35', NULL),
(138, 'Promises', '', NULL, 'The only interface requirement of a Promise is having a function called then, which can be given callbacks to be called when the promise is fulfilled or has failed.\n', '2015-09-29 18:30:35', NULL),
(139, 'Promises', '', NULL, 'Well, the real power of promises comes from chaining multiple of them together. Calling promise.then(func) returns a new promise, which is not fulfilled until func has completed. But thereâ€™s one really special thing about the way func is used.\n', '2015-09-29 18:30:35', NULL),
(140, 'Promises', '', NULL, 'If a callback supplied to then returns a new promise, then the promise returned by then will not be fulfilled until the promise returned by the callback is fulfilled.\n', '2015-09-29 18:30:35', NULL),
(141, 'Tomorrow Plans', '', NULL, 'Make the rest of the input diary page.\n', '2015-10-02 22:50:30', NULL),
(142, 'Tomorrow Plans', '', NULL, 'Make pages folder and separate components. Do same for suss as well.', '2015-10-02 22:50:30', NULL),
(156, 'Test2', '', NULL, 'New test', '2015-10-07 19:59:59', NULL),
(157, 'Test2', '', NULL, 'Hello s', '2015-10-07 20:00:37', NULL),
(158, 'Test', '', NULL, 'Hello', '2015-10-07 20:01:37', NULL),
(159, 'Test', '', NULL, 'Dfdf', '2015-10-07 20:01:37', NULL),
(160, 'Test', '', NULL, 'Hello testing', '2015-10-07 20:12:15', NULL),
(161, 'Test', '', NULL, 'New test', '2015-10-07 20:12:40', NULL),
(162, 'Test', '', NULL, 'Testing', '2015-10-07 20:13:08', NULL),
(163, 'Test', '', NULL, 'Fffff', '2015-10-07 20:13:08', NULL),
(164, 'Test', '', NULL, 'Ffdfdffd', '2015-10-07 20:13:08', NULL),
(165, 'Test', '', NULL, 'Tesgrg', '2015-10-07 20:13:37', NULL),
(166, 'CF Summary', '', NULL, 'Complete instrumentation of Homepage POVP LDP and Contact flow and /mobile page', '2015-10-07 20:53:05', NULL),
(167, 'CF Summary', '', NULL, 'T1 Homepage new component, added dynamic slider in collections widget along with instrumentation', '2015-10-07 20:53:05', NULL),
(168, 'CF Summary', '', NULL, 'Few components of t2 homepage, animated per day stat and investors widget', '2015-10-07 20:53:05', NULL),
(169, 'CF Summary', '', NULL, 'CDN links in t2, code cleaning, adding new files and spliting the node files for better flow, readability and maintability', '2015-10-07 20:53:05', NULL),
(170, 'CF Summary', '', NULL, 'New error page for incorrect urls in t2', '2015-10-07 20:53:05', NULL),
(171, 'CF Summary', '', NULL, 'Page level redis caching for povp and homepage and distinct urls for purging the cache.', '2015-10-07 20:53:05', NULL),
(172, 'CF Summary', '', NULL, 'Optimised redis server ram usage by compressing the values.', '2015-10-07 20:53:05', NULL),
(173, 'CF Summary', '', NULL, 'Added environment details, branch update and env for dev and testing.', '2015-10-07 20:53:05', NULL),
(174, 'Client side vs server side rendering', '', NULL, 'With client-side rendering, your initial request loads the page layout, CSS and JavaScript. It''s all common except that some or all of the content isn''t included. Instead, the JavaScript makes another request, gets a response (likely in JSON), and generates the appropriate HTML (likely using a templating library).', '2015-10-09 08:12:17', NULL),
(175, 'Client side vs server side rendering', '', NULL, 'Initial Load : Comparing the initial flow of the two approaches, it should be obvious that client-side rendering is going to be slower. It requires more JavaScript to be downloaded, which is more JavaScript to parse. It requires a 2nd HTTP request to load the content, and then requires more JavaScript to generate the template. Even if the initial JavaScript gets cached, it still needs to get parsed, and the 2nd request isn''t going to happen until the document is loaded.', '2015-10-09 08:12:17', NULL),
(176, 'Client side vs server side rendering', '', NULL, 'Control : Parsing JavaScript is slow..especially on some still popular browsers. Even on modern browsers, parsing some JavaScript is going to be slower than parsing less JavaScript.. This is especially true when you consider mobile devices. If you do rendering on the server, you have a lot more control over how fast and how consistent that rendering is. Overloaded? Buy more hardware. The client still has to render the HTML (it has to do this either way), but it doesn''t have the extra JavaScript and templating overhead.', '2015-10-09 08:12:17', NULL),
(177, 'Client side vs server side rendering', '', NULL, 'Caching : If your end points only return JSON, then all you''ll be able to cache on the backend is JSON. The client will always have to spend time building the HTML elements from that data. If your end points return HTML, you can cache that instead. By rendering on the server, you can cache the final shape of your data. So not only does your client not have to generate templates, your server doesn''t have to either.And while we are at it, I want to point out that generating JSON on the server isn''t a no-op operation. I''ll admit that rendering JSON is probably quicker than rendering an ERB template, but people talk about it as though it just magically happens for free. (Although, if you are caching the HTML template, you can certainly cache the JSON as well).', '2015-10-09 08:12:17', NULL),
(178, 'Client side vs server side rendering', '', NULL, 'Bandwidth : With client-side rendering your initial load will be and feel heavier: again, more JavaScript and a 2nd request. However, subsequent updates will require less bandwidth. JSON is pretty verbose, but it''s probably less verbose than HTML with classes and ids. This is an area where client-side rendering will be faster (if we ignore the fact that we client-side rendering still needs to spend time transforming the JSON to HTML).However, both HTML and JSON should compress quite well.', '2015-10-09 08:12:17', NULL),
(179, 'Adding method/plugin in jquery', '', NULL, 'Let''s say we want to create a plugin that makes text within a set of retrieved elements green. All we have to do is add a function called greenify to $.fn and it will be available just like any other jQuery object method.', '2015-10-09 20:22:17', NULL),
(180, 'Adding method/plugin in jquery', '', NULL, 'See the example of toggleSwitch.', '2015-10-09 20:22:17', NULL),
(181, 'Test', '', NULL, 'Hello', '2015-10-10 19:52:50', NULL),
(182, 'CF Detailed Summary', '', NULL, 'Collection widget : 5%', '2015-10-11 11:02:45', NULL),
(183, 'CF Detailed Summary', '', NULL, 'GA Homepage : 10%', '2015-10-11 11:02:45', NULL),
(184, 'CF Detailed Summary', '', NULL, 'GA LDP : 10%', '2015-10-11 11:02:45', NULL),
(185, 'CF Detailed Summary', '', NULL, 'GA POVP : 10%', '2015-10-11 11:02:45', NULL),
(186, 'CF Detailed Summary', '', NULL, 'GA Contact Flow : 15%', '2015-10-11 11:02:45', NULL),
(187, 'CF Detailed Summary', '', NULL, 'T2 Homepage Components: 8%', '2015-10-11 11:02:45', NULL),
(188, 'CF Detailed Summary', '', NULL, 'CDN Links, code cleaning see detailed version... : 7%', '2015-10-11 11:02:45', NULL),
(189, 'CF Detailed Summary', '', NULL, 'New Error page : 5%', '2015-10-11 11:02:45', NULL),
(190, 'CF Detailed Summary', '', NULL, 'Redis Caching : 30%', '2015-10-11 11:02:45', NULL),
(191, 'CF Stage Info', '', NULL, 'Pm2 is task runner for stage.', '2015-10-13 06:50:36', NULL),
(192, 'CF Stage Info', '', NULL, 'All the task are in this format, pm2 <task> stage<x> ex: pm2 stop stage20', '2015-10-13 06:50:36', NULL),
(193, 'WebPack vs Browserify', '', NULL, 'Browserify: Browserify was born to make your Node code in the browser. Till date it only supports the node flavour of commons (including JSON support) and provides in-built shims for many node core modules. Everything else is a different package. Need to watch files for incremental compilation? Use Watchify. Need Bundle splitting? Use Factor-Bundle. Need AMD support? Use deAMDify.', '2015-10-16 12:05:36', NULL),
(194, 'WebPack vs Browserify', '', NULL, 'WebPack: Webpack is a very different beast. It learnt from tools such as Browserify, and Require.js and it never tries to actually be compatible with node.js. It is built, from the ground up, to help you manage static assets for the front-end. So, while in Browserify, to read strings from static files, you would use BRFS, which uses the native readFile function in Node, in Webpack, the common thing is to just overload the require function and use a loader that loads files that have names that match a certain pattern.', '2015-10-16 12:05:36', NULL),
(195, 'Js Lint', '', NULL, 'JSLint is a static code analysis tool used in software development for checking if JavaScript source code complies with coding rules. It is provided primarily as an online tool, but there are also command-line adaptations. It was developed by Douglas Crockford.', '2015-10-16 12:06:24', NULL),
(196, 'Gulp', '', NULL, 'Gulp is a task/build runner for development. It allows you to do a lot of stuff within your development workflow. You can compile sass files, uglify and compress js files and much more. The kicker for gulp is that its a streaming build system which doesn''t write temp files. It''s like Pipes in bash', '2015-10-16 12:14:37', NULL),
(197, 'Test', '', NULL, 'New test', '2015-10-16 19:45:35', NULL),
(198, 'Tomorrow Plans', '', NULL, 'Add a gulpfile for dool', '2015-10-16 21:52:29', NULL),
(199, 'Grunt vs Gulp', '', NULL, 'Grunt is a Node.js-based task runner. Grunt and Gulp do exactly the same thing. Grunt has been around longer and youâ€™ll find far more help, plug-ins and resources. Itâ€™s a great project â€” if youâ€™re successfully using it now, thereâ€™s little reason to switch.', '2015-10-17 23:06:45', NULL),
(200, 'Grunt vs Gulp', '', NULL, 'Grunt plug-ins often perform multiple tasks; Gulp plug-ins are designed to do one thing only.', '2015-10-17 23:06:45', NULL),
(201, 'Grunt vs Gulp', '', NULL, 'Grunt requires plug-ins for basic functionality such as file watching; Gulp has them built-in.', '2015-10-17 23:06:45', NULL),
(202, 'Grunt vs Gulp', '', NULL, 'Grunt uses JSON-like data configuration files; Gulp uses leaner, simpler JavaScript code.', '2015-10-17 23:06:45', NULL),
(203, 'Grunt vs Gulp', '', NULL, 'The most important Gulp concept is streams. Think of your files passing through a pipe; at one or more points along that pipe, an action is taken. For example, we could insert all our JavaScript files into a scripts pipe which:', '2015-10-17 23:06:45', NULL),
(204, 'Grunt vs Gulp', '', NULL, 'Concatenates files into one', '2015-10-17 23:06:45', NULL),
(205, 'Grunt vs Gulp', '', NULL, 'Removes console and debugger statements', '2015-10-17 23:06:45', NULL),
(206, 'Grunt vs Gulp', '', NULL, 'Minifies the code', '2015-10-17 23:06:45', NULL),
(207, 'Grunt vs Gulp', '', NULL, 'Puts the resulting file in a specific location', '2015-10-17 23:06:45', NULL),
(208, 'Test', '', NULL, 'New tsss', '2015-10-25 20:50:39', NULL),
(209, 'LocalStorage vs Cookies', '', NULL, 'Cookies and local storage serve different purposes. Cookies are primarily for reading server-side, local storage can only be read client-side. So the question is, in your app, who needs this data â€” the client or the server?', '2015-10-29 11:55:53', NULL),
(210, 'LocalStorage vs Cookies', '', NULL, 'If it''s your client (your JavaScript), then by all means switch. You''re wasting bandwidth by sending all the data in each HTTP header.', '2015-10-29 11:55:53', NULL),
(211, 'LocalStorage vs Cookies', '', NULL, 'If it''s your server, local storage isn''t so useful because you''d have to forward the data along somehow (with Ajax or hidden form fields or something). This might be okay if the server only needs a small subset of the total data for each request.', '2015-10-29 11:55:53', NULL),
(212, 'LocalStorage vs Cookies', '', NULL, 'Local storage speed greatly depends on the browser the client is using, as well as the operating system. Chrome or Safari on a mac could be much faster than Firefox on a PC, especially with newer APIs.', '2015-10-29 11:55:53', NULL),
(213, 'Test', '', NULL, 'Fdggfgd', '2015-11-07 11:24:30', NULL),
(214, 'Test', '', NULL, 'Fgfdg', '2015-11-07 11:24:30', NULL),
(215, 'Test', '', NULL, 'Gdfgdf', '2015-11-07 11:24:30', NULL),
(216, 'Test', '', NULL, 'Gfgfg', '2015-11-07 11:24:30', NULL),
(217, 'Test', '', NULL, 'Sgfg', '2015-11-07 11:24:30', NULL);


ALTER TABLE `diary`
  ADD PRIMARY KEY (`entry_no`);


ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `diary`
  MODIFY `entry_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=218;
?>