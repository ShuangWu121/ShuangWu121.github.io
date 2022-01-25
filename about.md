---
layout: article
titles:
  # @start locale config
  en      : &EN       About
  en-GB   : *EN
  en-US   : *EN
  en-CA   : *EN
  en-AU   : *EN
  zh-Hans : &ZH_HANS  关于
  zh      : *ZH_HANS
  zh-CN   : *ZH_HANS
  zh-SG   : *ZH_HANS
  zh-Hant : &ZH_HANT  關於
  zh-TW   : *ZH_HANT
  zh-HK   : *ZH_HANT
  ko      : &KO       소개
  ko-KR   : *KO
  fr      : &FR       À propos
  fr-BE   : *FR
  fr-CA   : *FR
  fr-CH   : *FR
  fr-FR   : *FR
  fr-LU   : *FR
  # @end locale config
key: page-about
#article_header:
#  type: cover
#  image:
#    src: /pictures/pitesti.jpg
article_header:
  type: cover
  image:
    src: /pictures/shuang.JPG
---

<style>
  .swiper-demo {
    height: 600px;
  }
  .swiper-demo .swiper__slide {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: #fff;
  }
</style>

<!-- See notes here about HTML blocks: https://kramdown.gettalong.org/syntax.html#html-blocks -->

<img src="/pictures/shuang.JPG" alt="Kitten"
  title="A cute kitten" width="450" height="300" />
### The official statement

<!-- ![](/pictures/shuang.JPG){: .align-right} -->

I was born and raised in [Pitești](https://en.wikipedia.org/wiki/Pitesti), a small city in Romania, and moved to the US in 2008.
I was always fascinated with computers: playing on them, fixing them & programming them.
I like to read, write and talk about _ideas_.
You can see some of my writing on [this website](/archive.html) and on [Decentralized Thoughts](https://decentralizedthoughts.github.io/about-alin).

I am currently a _Postdoctoral Researcher_ at [VMware Research](https://research.vmware.com).
My broad [research interests](/papers.html) are in cryptography and its practical applications. 
I am very interested in authenticated data structures, especially if based on more exotic primitives, such as [constant-sized polynomial commitments](/2020/05/06/kzg-polynomial-commitments.html). 
In the past, I’ve worked on transparency logs, threshold cryptography, anonymous cryptocurrencies, scalable Byzantine Fault Tolerance (BFT) protocols, append-only logs on top of Bitcoin, and oblivious file systems.


<script>
  {%- include scripts/lib/swiper.js -%}
  var SOURCES = window.TEXT_VARIABLES.sources;
  window.Lazyload.js(SOURCES.jquery, function() {
  $('.swiper-demo').swiper();
  });
</script>