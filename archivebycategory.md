---
 layout: page
 permalink: /categoryview/
 sitemap: false
---

{% for post in site.posts %}
  {% if post.categories contains 'receipes' %}
    <div class="post">
        <h3 class="title"><a href="{{ post.url }}">{{ post.title }}</a></h3>
        <p class="meta">Date: {{ post.date }}</p>
    </div>
  {% endif %}
{% endfor %}

{% for post in site.posts limit:5 %}

  <div class="post">
    <ul>
      <li><a href="{{ post.url }}">{{ post.title | truncate:200 }} </a><small>{{ post.date }}</small>
         {% if post.summary %}
            <p class="entry">{{ post.summary }}</p>
         {% endif %}
      </li>
    </ul>
  </div>
{% endfor %}