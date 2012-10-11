var disqus_domain = 'disqus.com';
var disqus_shortname = 'pv3d';
var disqus_thread_slug = 'there8217s_more_than_one_way_to_skin_a_scrollbar' || undefined;

(function () {
  var script = document.createElement('script');
  script.src = 'http://disqus.com/forums/pv3d/embed.js';

  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);

  // The WordPress plugin has placeholders for comments, so we need to
  // clear them out.
  document.getElementById('disqus_thread').innerHTML = '';
}());
