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

<!--<img src="/pictures/shuang.JPG" alt="Kitten"
  title="A cute kitten" width="450" height="300" />
### The official statement -->

<!-- ![](/pictures/shuang.JPG){: .align-right} -->

I am a PhD student at Department of Mathematical Sciences of Norwegian University of Science and Technologyin, Trondheim. My research is about applied cryptography, under the supervison of [Kristian Gjøsteen](https://www.ntnu.no/ansatte/kristian.gjosteen).  I am a memeber of [NTNU Applied Cryptology Lab (NaCl)](https://www.ntnu.edu/iik/nacl-lab) 

I am very interested in cryptographic protocols that are applied on blockchains, especially if based on zero-knowledge proofs.  In the past, I’ve worked on formal verifications (Tamarin).


<script>
  {%- include scripts/lib/swiper.js -%}
  var SOURCES = window.TEXT_VARIABLES.sources;
  window.Lazyload.js(SOURCES.jquery, function() {
  $('.swiper-demo').swiper();
  });
</script>