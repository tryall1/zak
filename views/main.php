<div class="jumbotron">
	<h1><?= "Главная"; ?></h1>
<hr>
    <!--
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis posuere porta. Morbi volutpat augue eget ornare euismod. Donec vel ante purus. Morbi sapien nulla, feugiat eu nulla vitae, interdum laoreet magna. Nunc vitae arcu justo. Nullam ut nunc fermentum, fringilla felis nec, egestas ligula. Sed a nulla et orci luctus sodales. Proin in pharetra dolor.</p>

  <p>Nulla fermentum efficitur nunc a consequat. Quisque quis sapien diam. Aliquam egestas commodo felis, eget pulvinar massa. Suspendisse velit sapien, pretium quis pellentesque eget, sodales at quam. In vel orci turpis. Phasellus id risus tortor. Curabitur interdum facilisis lectus ut accumsan. Nam luctus pharetra tristique. Donec tristique massa eget risus mollis, in pulvinar lacus scelerisque. Vestibulum a nibh lacinia, euismod nulla sed, suscipit quam. Aenean malesuada ex vitae eros hendrerit porttitor. Nulla a est eget nisi rutrum ultrices. Quisque laoreet, orci non mattis consequat, risus ipsum porta nibh, sit amet mattis leo enim a nunc. Ut auctor sollicitudin augue.</p>

    <p>Suspendisse dignissim lacinia urna ut mollis. Quisque at odio lectus. Donec in arcu placerat, hendrerit ante nec, congue nisi. Mauris eget eleifend sapien. Suspendisse laoreet tristique ex, vel luctus orci. Aliquam ut posuere ipsum, id ullamcorper justo. Duis in nunc pharetra, egestas ante at, ultricies purus. Aenean aliquam massa a mauris condimentum facilisis. Donec luctus pellentesque dictum.</p>

    <p>Aliquam vel dictum velit. Aliquam erat volutpat. Praesent a est at turpis cursus luctus. Integer ultricies, leo et volutpat viverra, magna urna dapibus odio, ac dapibus odio odio non tortor. Pellentesque nec consequat diam. Fusce gravida lacinia erat. Mauris a vehicula erat. Ut vel sollicitudin elit, eu bibendum purus. Vivamus bibendum maximus erat facilisis pretium. Vivamus orci ipsum, volutpat sit amet dapibus nec, blandit in quam. Fusce tincidunt finibus mollis. Curabitur et odio ac dolor semper bibendum vestibulum et nunc. Fusce et metus porttitor, efficitur arcu id, accumsan elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus velit mi, maximus sed congue et, porttitor et ex. Integer eu enim efficitur, finibus nulla ac, fermentum purus.</p>

    <p>Quisque orci odio, auctor nec leo lobortis, dictum tincidunt est. Sed varius blandit arcu, ut aliquet ante eleifend eget. Nam auctor at lacus eget congue. Vestibulum placerat volutpat erat non porta. Aliquam tempor tortor sit amet eros suscipit hendrerit. Aliquam accumsan non orci eget eleifend. Donec nisl orci, blandit condimentum luctus quis, commodo nec tellus. Vestibulum pulvinar ullamcorper gravida. Integer aliquam sapien sed metus molestie, non vulputate ipsum suscipit. Quisque ut felis in purus maximus sodales ut in nunc. Praesent fringilla commodo pharetra. Duis tortor eros, consectetur ut neque dignissim, euismod ornare purus. Morbi ullamcorper mollis neque, ac bibendum tortor vulputate eget.</p>
-->
    <?php
    foreach ($posts as $post) {
        ?>
        <h2><a href="<?= $post->getUrl() ?>"><?= $post->title ?></a></h2>
        <p><span class="glyphicon glyphicon-time"></span> создан <?= $post->dat ?></p>
        <p><?= nl2br($post->lead) ?></p>
        <a class="btn btn-primary" href="<?= $post->getUrl() ?>">Читать далее <span class="glyphicon glyphicon-chevron-right"></span></a>
        <hr>
    <? } ?>
    <?= Helper::getPaginator($page, $npages, '/blog/page/') ?>
</div>