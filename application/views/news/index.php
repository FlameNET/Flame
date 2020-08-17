<main id="main" role="main">
    <div class="Pane Pane--full Pane--dirtDark">
        <div class="Pane-bg"><div class="Pane-overlay"></div></div>
        <div class="Pane-content">
            <div class="Pane Pane--underSiteNav Pane--cropMax Pane--transparent" data-url="//bnetcmsus-a.akamaihd.net/cms/template_resource/ri/RI8Q9HOWY4U01465961118458.jpg">
                <div class="Pane-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/template_resource/ri/RI8Q9HOWY4U01465961118458.jpg');"><div class="Pane-overlay"></div></div>
                <div class="Pane-content">
                    <div class="space-medium"></div>
                    <div class="Grid SyncHeight SyncHeight--disabled gutter-small gutter-all gutter-negative" media-medium="!SyncHeight--disabled">
                        <?php foreach ($top_news->result() as $key => $value) { ?>
                            <?php if($key == 0){ ?>
                            <div class="ArticleTile ArticleTile--gutter Grid-full" media-large="Grid-1of2" media-wide="!Grid-1of2 Grid-2of3">
                                <div class="ArticleTile-content">
                                    <div class="Tile ArticleTile-tile">
                                        <div class="Tile-area">
                                            <div class="Tile-bg" style="background-image: url('<?php echo base_url('uploads/news/'.$value->id.'/'.$value->image); ?>');"></div>
                                            <div class="Tile-content"></div>
                                        </div>
                                    </div>
                                    <div class="ArticleTile-fade"></div>
                                    <div class="ArticleTile-play"><div class="ArticleTile-playArrow"></div></div>
                                    <div class="ArticleTile-bottom">
                                        <div class="ArticleTile-bottomInner">
                                            <div class="ArticleTile-left">
                                                <div class="ArticleTile-subtitle"><?php echo $value->subtitle; ?></div>
                                                <div class="ArticleTile-title"><?php echo $value->title; ?></div>
                                            </div>
                                            <div class="ArticleTile-right">
                                                <div class="ArticleTile-commentTotal List-right">
                                                    <a
                                                        class="Link Link--external ArticleTile-comments"
                                                        href="<?php echo site_url('news/'.$value->id.'/'.clean_url($value->title)); ?>"
                                                        data-analytics="panel-news"
                                                        data-analytics-panel="slot:0 - type:blog - id:<?php echo $value->id; ?> || <?php echo $value->title; ?>"
                                                    >
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number">0</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a
                                        class="Link ArticleTile-link"
                                        href="<?php echo site_url('news/'.$value->id.'/'.clean_url($value->title)); ?>"
                                        data-thumb="<?php echo base_url('uploads/news/'.$value->id.'/'.$value->image); ?>"
                                        data-analytics="panel-news"
                                        data-analytics-panel="slot:<?php echo $key; ?> - type:blog - id:<?php echo $value->id; ?> || <?php echo $value->title; ?>"
                                    ></a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($key == 1){ ?>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="" media-large="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
                                <div class="ArticleTile-content">
                                    <div class="Tile ArticleTile-tile">
                                        <div class="Tile-area">
                                            <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/PL6TSKMYVSC21586225510098.jpg');"></div>
                                            <div class="Tile-content"></div>
                                        </div>
                                    </div>
                                    <div class="ArticleTile-fade"></div>
                                    <div class="ArticleTile-play"><div class="ArticleTile-playArrow"></div></div>
                                    <div class="ArticleTile-bottom">
                                        <div class="ArticleTile-bottomInner">
                                            <div class="ArticleTile-left">
                                                <div class="ArticleTile-subtitle">Shadowlands</div>
                                                <div class="ArticleTile-title">Cambios en las clases</div>
                                            </div>
                                            <div class="ArticleTile-right"></div>
                                        </div>
                                    </div>
                                    <a
                                        class="Link ArticleTile-link"
                                        href="/es-es/news/23310980/filosofía-de-clases-y-cambios-de-estas-en-shadowlands"
                                        data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/PL6TSKMYVSC21586225510098.jpg"
                                        data-analytics="panel-news"
                                        data-analytics-panel="slot:1 - type:blog - id:23388522 || Cambios en las clases"
                                    ></a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($key == 2){ ?>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
                                <div class="ArticleTile-content">
                                    <div class="Tile ArticleTile-tile">
                                        <div class="Tile-area">
                                            <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5f/5FIPB5X0KSGW1586222804013.jpg');"></div>
                                            <div class="Tile-content"></div>
                                        </div>
                                    </div>
                                    <div class="ArticleTile-fade"></div>
                                    <div class="ArticleTile-play"><div class="ArticleTile-playArrow"></div></div>
                                    <div class="ArticleTile-bottom">
                                        <div class="ArticleTile-bottomInner">
                                            <div class="ArticleTile-left">
                                                <div class="ArticleTile-subtitle">Shadowlands</div>
                                                <div class="ArticleTile-title">Nueva experiencia inicial</div>
                                            </div>
                                            <div class="ArticleTile-right">
                                                <div class="ArticleTile-commentTotal List-right">
                                                    <a
                                                        class="Link Link--external ArticleTile-comments"
                                                        href="https://eu.forums.blizzard.com/es/wow/t/24972"
                                                        data-analytics="panel-news"
                                                        data-analytics-panel="slot:2 - type:blog - id:23388523 || Nueva experiencia inicial"
                                                    >
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number">72</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a
                                        class="Link ArticleTile-link"
                                        href="/es-es/news/23380363/shadowlands-nueva-experiencia-inicial-repleta-de-aventuras-actualizado"
                                        data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5f/5FIPB5X0KSGW1586222804013.jpg"
                                        data-analytics="panel-news"
                                        data-analytics-panel="slot:2 - type:blog - id:23388523 || Nueva experiencia inicial"
                                    ></a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($key == 3){ ?>
                            <div class="Grid-full hide" media-wide="!hide"></div>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
                                <div class="ArticleTile-content">
                                    <div class="Tile ArticleTile-tile">
                                        <div class="Tile-area">
                                            <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/1c/1C139J2HKLOH1585875000444.jpg');"></div>
                                            <div class="Tile-content"></div>
                                        </div>
                                    </div>
                                    <div class="ArticleTile-fade"></div>
                                    <div class="ArticleTile-play"><div class="ArticleTile-playArrow"></div></div>
                                    <div class="ArticleTile-bottom">
                                        <div class="ArticleTile-bottomInner">
                                            <div class="ArticleTile-left">
                                                <div class="ArticleTile-subtitle">Shadowlands</div>
                                                <div class="ArticleTile-title">Facultades distintivas y de clase de las curias</div>
                                            </div>
                                            <div class="ArticleTile-right">
                                                <div class="ArticleTile-commentTotal List-right">
                                                    <a
                                                        class="Link Link--external ArticleTile-comments"
                                                        href="https://eu.forums.blizzard.com/es/wow/t/25040"
                                                        data-analytics="panel-news"
                                                        data-analytics-panel="slot:3 - type:blog - id:23388521 || Facultades distintivas y de clase de las curias"
                                                    >
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number">0</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a
                                        class="Link ArticleTile-link"
                                        href="/es-es/news/23374470/shadowlands-facultades-distintivas-y-de-clase-de-las-curias-actualizado"
                                        data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/1c/1C139J2HKLOH1585875000444.jpg"
                                        data-analytics="panel-news"
                                        data-analytics-panel="slot:3 - type:blog - id:23388521 || Facultades distintivas y de clase de las curias"
                                    ></a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($key == 4){ ?>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
                                <div class="ArticleTile-content">
                                    <div class="Tile ArticleTile-tile">
                                        <div class="Tile-area">
                                            <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/le/LE9UKGR4V0G81586289659139.jpg');"></div>
                                            <div class="Tile-content"></div>
                                        </div>
                                    </div>
                                    <div class="ArticleTile-fade"></div>
                                    <div class="ArticleTile-play"><div class="ArticleTile-playArrow"></div></div>
                                    <div class="ArticleTile-bottom">
                                        <div class="ArticleTile-bottomInner">
                                            <div class="ArticleTile-left">
                                                <div class="ArticleTile-subtitle">Shadowlands</div>
                                                <div class="ArticleTile-title">Bastión y la curia kyriana</div>
                                            </div>
                                            <div class="ArticleTile-right"></div>
                                        </div>
                                    </div>
                                    <a
                                        class="Link ArticleTile-link"
                                        href="/es-es/news/23379368/shadowlands-bastión-y-la-curia-kyriana"
                                        data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/le/LE9UKGR4V0G81586289659139.jpg"
                                        data-analytics="panel-news"
                                        data-analytics-panel="slot:4 - type:blog - id:23388520 || Bastión y la curia kyriana"
                                    ></a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($key == 5){ ?>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
                                <div class="ArticleTile-content">
                                    <div class="Tile ArticleTile-tile">
                                        <div class="Tile-area">
                                            <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/mv/MVKK5EJOGPU61470421579108.jpg');"></div>
                                            <div class="Tile-content"></div>
                                        </div>
                                    </div>
                                    <div class="ArticleTile-fade"></div>
                                    <div class="ArticleTile-play"><div class="ArticleTile-playArrow"></div></div>
                                    <div class="ArticleTile-bottom">
                                        <div class="ArticleTile-bottomInner">
                                            <div class="ArticleTile-left">
                                                <div class="ArticleTile-subtitle">Actualizaciones del juego</div>
                                                <div class="ArticleTile-title">Correcciones en vivo</div>
                                            </div>
                                            <div class="ArticleTile-right">
                                                <div class="ArticleTile-commentTotal List-right">
                                                    <a class="Link Link--external ArticleTile-comments"
                                                        href="https://eu.forums.blizzard.com/es/wow/t/25260"
                                                        data-analytics="panel-news"
                                                        data-analytics-panel="slot:5 - type:blog - id:22479712 || Correcciones en vivo">
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number">0</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a
                                        class="Link ArticleTile-link"
                                        href="/es-es/news/23277654/correcciones-en-vivo-del-11-de-agosto-de-2020"
                                        data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/mv/MVKK5EJOGPU61470421579108.jpg"
                                        data-analytics="panel-news"
                                        data-analytics-panel="slot:5 - type:blog - id:22479712 || Correcciones en vivo"
                                    ></a>
                                </div>
                            </div>
                            <?php } ?>
                        <?php }?>
                    </div>
                    <div class="space-normal"></div>
                    <div class="space-medium"></div>
                    <div class="Pane Pane--transparent">
                        <div class="Pane-bg"><div class="Pane-overlay"></div></div>
                        <div class="Pane-content">
                            <div class="gutter-normal gutter-negative">
                                <div class="Paginator" data-url="/es-es/news.frag" data-page="1" data-total="22">
                                    <div class="Paginator-pages">
                                        <div class="Paginator-page" data-page="1">
                                            <div class="List List--vertical List--separatorAll List--full">
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/20407403/calendario-de-minifestividades">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/l2/L20MHJIO04F61565739425572.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Calendario de minifestividades</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Las minifestividades son eventos que ofrecen distintas experiencias en el juego sin más pretensión que el divertirse participando en ellos. Seguid
                                                                            leyendo para saber más.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-08-16T07:01:00.000Z","relative":true}'>13 hours ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/20407403/calendario-de-minifestividades"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23492548/avance-de-shadowlands-aventuras">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/72/72I81UPDUV471597331087298.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: aventuras</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Preparaos para poner a prueba vuestras habilidades tácticas. En esta nueva característica de la expansión, enviaréis a vuestros aliados a las
                                                                            Tierras Sombrías para hacer frente a desafíos únicos en nombre de la curia que hayáis elegido. Tendréis que elaborar estrategias para afrontar estos
                                                                            rompecabezas de combate, y decidir a quién enviaréis y cómo emplearéis sus habilidades para llevaros la victoria.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-08-13T21:00:00.000Z","relative":true}'>3 days ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23492548/avance-de-shadowlands-aventuras"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23277654/correcciones-en-vivo-del-11-de-agosto-de-2020">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/mv/MVKK5EJOGPU61470421579108.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Correcciones en vivo del 11 de agosto de 2020</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            A continuación encontraréis una lista de correcciones en vivo para algunos problemas detectados en World of Warcraft: Battle for Azeroth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-08-11T08:00:00.000Z","relative":true}'>5 days ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23277654/correcciones-en-vivo-del-11-de-agosto-de-2020"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/20564524/calendario-de-camorras-jcj-de-2020">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/rt/RTRUPZFL6TY41498579993585.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Calendario de Camorras JcJ de 2020</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            ¡Durante las camorras JcJ podréis jugar en algunos de vuestros campos de batalla JcJ favoritos con un toque especial! Seguid leyendo para saber más.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-08-05T07:00:00.000Z","relative":true}'>12 days ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/20564524/calendario-de-camorras-jcj-de-2020"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23493335/explorad-el-templo-de-ahnqiraj-y-las-ruinas-de-ahnqiraj">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/l0/L0030BIPIATS1596487642096.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Explorad el Templo de Ahn'Qiraj y las Ruinas de Ahn'Qiraj</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Una vez completado el esfuerzo de guerra y el toque del gong, las Ruinas de Ahn'Qiraj para 20 jugadores y el Templo de Ahn'Qiraj para 40 jugadores
                                                                            están disponibles para atraer a los aventureros a las profundidades y enfrentarse a los qiraji, y, en última instancia, al dios antiguo C'Thun.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-08-04T19:00:00.000Z","relative":true}'>12 days ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23493335/explorad-el-templo-de-ahnqiraj-y-las-ruinas-de-ahnqiraj"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23482836/ahnqiraj-en-wow-classic-¡se-alzan-los-señores-escarabajo">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5w/5WQZN0EPVRSB1595866399195.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Ahn'Qiraj en WoW Classic: ¡se alzan los Señores Escarabajo!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La Alianza y la Horda siguen respondiendo a la llamada a las armas, y, dentro de poco, los Señores Escarabajo se alzarán tras el repicar del gong en
                                                                            aquellos reinos que hayan completado el esfuerzo de guerra para franquear el paso al Templo y las Ruinas de Ahn'Qiraj.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-08-04T15:00:00.000Z","relative":true}'>12 days ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23482836/ahnqiraj-en-wow-classic-¡se-alzan-los-señores-escarabajo"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23485198/actualizado-2407-se-acaba-el-tiempo-battle-for-azeroth">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/sh/SH9KMXTY7HUN1595511546760.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">[ACTUALIZADO 24.07] Se acaba el tiempo: Battle for Azeroth</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Antes de que os aventuréis a las Tierras Sombrías, tal vez queráis pasar vuestros últimos momentos en los reinos mortales tratando de obtener
                                                                            recompensas que dejarán de estar disponibles (o serán más difíciles de conseguir) en la próxima expansión.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-23T17:01:00.000Z","relative":true}'>24 days ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23485198/actualizado-2407-se-acaba-el-tiempo-battle-for-azeroth"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463733/avance-de-la-beta-de-world-of-warcraft-shadowlands">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/b2/B2X39AQZS20L1594357920190.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de la beta de World of Warcraft®: Shadowlands</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La beta de Shadowlands está a la vuelta de la esquina. Para que estéis informados, hemos reunido nuestras últimas publicaciones sobre avances.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-10T17:30:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463733/avance-de-la-beta-de-world-of-warcraft-shadowlands"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463303/avance-de-shadowlands-las-fauces">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/hb/HBDQYMCJ372D1594365553854.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: Las Fauces</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Las Fauces son un lugar tormentoso y sin esperanza donde se encarcela para siempre a las almas más malvadas del cosmos. Si el antiguo mal que mora
                                                                            en esta prisión llegara a liberarse, consumiría toda la realidad.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-10T17:00:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463303/avance-de-shadowlands-las-fauces"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463734/curia-venthyr-vuestra-invitación-aguarda">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/p0/P0RKHVO4EFL01594346260175.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Curia venthyr: vuestra invitación aguarda</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Si buscáis gracia envuelta en pecado, vuestra mejor opción es la aristocrática y elegante curia venthyr. Formar parte de sus filas conlleva castigos
                                                                            y recompensas, aunque determinar la diferencia entre ambas puede resultar complicado.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-10T16:30:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463734/curia-venthyr-vuestra-invitación-aguarda"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463302/curia-de-las-sílfides-nocturnas-que-comience-la-cacería-salvaje">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/gh/GHRCM6GNU2AO1594362730525.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Curia de las sílfides nocturnas: que comience la Cacería Salvaje</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Uníos a la mística curia de las sílfides nocturnas para forjar el futuro de las Tierras Sombrías y ganar recompensas fantásticas.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-10T16:00:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463302/curia-de-las-sílfides-nocturnas-que-comience-la-cacería-salvaje"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463735/curia-de-los-necroseñores-una-mirada-más-de-cerca-al-poder-de-maldraxxus">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/en/ENLZGD4N84751594353540956.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Curia de los necroseñores: una mirada más de cerca al poder de Maldraxxus</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            En el lugar de origen de la magia nigromántica, quienes dominan los poderes de la muerte son capaces de convertir legiones de almas ambiciosas en
                                                                            incansables ejércitos. De uniros a los necroseñores, os ocuparéis de ser los protectores de Tierras Sombrías y cargar con el peso de una casa
                                                                            dividida sobre vuestras espaldas. ¿Seréis los que anunció la profecía?
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-10T15:30:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463735/curia-de-los-necroseñores-una-mirada-más-de-cerca-al-poder-de-maldraxxus"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463301/curia-kyriana-preparaos-para-ascender">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/sa/SA47WZN0Y3YF1594357320681.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Curia kyriana: preparaos para ascender</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Formad parte de la valerosa curia kyriana para forjar el futuro de las Tierras Sombrías y ganar flamantes recompensas.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-10T15:00:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463301/curia-kyriana-preparaos-para-ascender"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463732/avance-de-shadowlands-los-sistemas-de-las-curias">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/o9/O9FSFPZMTDYZ1594226802755.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: los sistemas de las curias</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            En Shadowlands, los jugadores tendrán la ocasión de completar misiones a lo largo y ancho de cuatro nuevas zonas gobernadas por antiguas y poderosas
                                                                            curias. Al alcanzar el nivel máximo, 60, podrán unirse a una de ellas antes de seguir explorando el más allá del universo de Warcraft, con sus
                                                                            numerosos misterios y aventuras.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-10T14:30:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463732/avance-de-shadowlands-los-sistemas-de-las-curias"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463299/avance-de-shadowlands-nexos-de-almas">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/26/266TOMUJ6LRZ1594366586147.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: nexos de almas</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Cread nexos de almas con miembros clave de vuestra curia y obtened rasgos para vencer a todo aquel que se interponga en vuestro camino.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-10T14:01:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463299/avance-de-shadowlands-nexos-de-almas"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463731/¡una-montura-nueva-al-comprar-una-suscripción-de-6-meses">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/9r/9R4XR9IN48CD1594147550765.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Una montura nueva al comprar una suscripción de 6 meses!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Añadid una verdadera maravilla de metal mecánico a vuestra colección de monturas con el imponente incinerador escamavapor, que ya se puede comprar
                                                                            en el juego y la Tienda de Blizzard. Por tiempo limitado, podréis haceros con este chispeante robot cibernético al adquirir una suscripción de 6
                                                                            meses.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-09T17:56:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463731/¡una-montura-nueva-al-comprar-una-suscripción-de-6-meses"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463730/haceos-con-la-collectors-edition-de-shadowlands">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/zh/ZHAGXXEOI9231594141868566.png');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Haceos con la Collector's Edition de Shadowlands</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Con un solo acto de destrucción, Sylvanas Brisaveloz ha abierto el camino al más allá. Preparaos para adentraros en Shadowlands con esta Epic
                                                                            Edition Collector's Set de edición limitada, que contiene una serie de objetos asombrosos que os ayudarán en vuestra aventura por el más allá.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-08T16:06:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463730/haceos-con-la-collectors-edition-de-shadowlands"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463298/¡que-no-se-os-pasen-los-vídeos-a-la-carta-con-las-novedades-de-shadowlands">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ed/ED4I6LB4VQBM1594187090398.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Que no se os pasen los vídeos a la carta con las novedades de Shadowlands!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">¿Os habéis perdido la retransmisión en directo? No os preocupéis.</p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-08T16:00:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463298/¡que-no-se-os-pasen-los-vídeos-a-la-carta-con-las-novedades-de-shadowlands"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23464811/guía-para-ver-la-final-global-del-mythic-dungeon-international">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/rx/RXEBPNOLQ80A1593206781150.png');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Guía para ver la final global del Mythic Dungeon International</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La última temporada del Mythic Dungeon International en Battle for Azeroth concluye con la final global, que arranca el viernes, 10 de julio.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-06T21:00:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23464811/guía-para-ver-la-final-global-del-mythic-dungeon-international"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23317721/ya-está-a-la-venta-shadows-rising">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/dt/DTC9X6XN8PKA1583264405097.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Ya está a la venta «Shadows Rising»</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            «¡La Horda no es nada!». Con estas terribles palabras, Sylvanas Brisaveloz traicionó y abandonó a la Horda que juró servir. Ahora, la Dama Oscura y
                                                                            sus fuerzas actúan en las sombras mientras la Horda, la Alianza e incluso su hermana Alleria tratan de averiguar sus intenciones. Seguid leyendo
                                                                            para conocer más detalles de la precuela de la próxima expansión, «Shadows Rising»
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-01T19:00:00.000Z","relative":true}'>a month ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23317721/ya-está-a-la-venta-shadows-rising"></a>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Paginator-page hide" data-page="2">
                                            <div class="List List--vertical List--separatorAll List--full">
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/21510319/¡vuelve-paseo-en-el-tiempo-por-wrath-of-the-lich-king-del-1-al-8-de-julio">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/wd/WDBBUPT807PR1518537090221.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Vuelve Paseo en el tiempo por Wrath of the Lich King del 1 al 8 de julio!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            El evento de bonificación de esta semana ya se ha iniciado y nos dirigimos hacia Rasganorte para un Paseo en el tiempo. ¿Listos para adentraros en
                                                                            Ulduar? Seguid leyendo si queréis saber más.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-07-01T07:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/21510319/¡vuelve-paseo-en-el-tiempo-por-wrath-of-the-lich-king-del-1-al-8-de-julio"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463726/¡un-50-de-descuento-en-determinadas-mascotas-monturas-y-demás-durante-las-rebajas-de-verano">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5o/5O9XI6S5VTAZ1593473113931.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Un 50 % de descuento en determinadas mascotas, monturas y demás durante las rebajas de verano!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Tenemos unas ofertas de verano bien calentitas para que ahorréis a lo grande en determinadas mascotas, monturas y demás.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-30T17:21:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463726/¡un-50-de-descuento-en-determinadas-mascotas-monturas-y-demás-durante-las-rebajas-de-verano"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23460556/ya-está-disponible-la-precompra-de-small-world-of-warcraft">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/KZB2W8IPKN751593171622694.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Ya está disponible la precompra de Small World of Warcraft</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Blizzard Entertainment se complace en anunciar su primera colaboración con Days of Wonder y presenta Small World® of Warcraft®, un nuevo juego de
                                                                            mesa que combina las mecánicas de Small World® con el célebre universo de Warcraft®, de Blizzard Entertainment.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-25T15:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23460556/ya-está-disponible-la-precompra-de-small-world-of-warcraft"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23463297/el-8-de-julio-no-os-perdáis-las-novedades-de-shadowlands">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/dd/DDJ0EUF1G3S71592950586863.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">El 8 de julio, no os perdáis las novedades de Shadowlands</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            El 8 de julio, no os perdáis las novedades de Shadowlands El productor ejecutivo de World of Warcraft, John Hight, y el director del juego, Ion
                                                                            Hazzikostas, en directo desde sus hogares, nos ofrecerán un avance del nuevo contenido de Shadowlands en el que ha estado trabajando el equipo de
                                                                            desarrollo.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-24T15:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23463297/el-8-de-julio-no-os-perdáis-las-novedades-de-shadowlands"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/20324470/evento-de-bonificación-semanal-paseo-en-el-tiempo-de-the-burning-crusade">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ji/JIG9JAOQM5PB1476205736365.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Evento de bonificación semanal: Paseo en el tiempo de The Burning Crusade</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            ¡La icónica banda del Templo Oscuro ahora forma parte del Paseo en el tiempo de The Burning Crusade! Reunid un grupo de campeones y dirigíos a
                                                                            Terrallende para enfrentaros a Illidan y sus secuaces una vez más.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-24T08:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/20324470/evento-de-bonificación-semanal-paseo-en-el-tiempo-de-the-burning-crusade"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23021203/las-llamas-del-festival-de-fuego-del-solsticio-de-verano-brillarán-del-21-de-junio-al-5-de-julio">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ke/KEBLX1ATXDZL1498065728287.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Las llamas del Festival de Fuego del Solsticio de Verano brillarán del 21 de junio al 5 de julio</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            ¡Enfundaos el equipo de resistencia al fuego para celebrar el Festival de Fuego del Solsticio de Verano!
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-21T17:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23021203/las-llamas-del-festival-de-fuego-del-solsticio-de-verano-brillarán-del-21-de-junio-al-5-de-julio"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23442724/¡llegan-las-vacaciones-semanales-de-paseo-en-el-tiempo">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ut/UTY3UXCGB7QO1559068487985.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Llegan las vacaciones semanales de paseo en el tiempo!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            A partir del 24 de junio, los jugadores podrán disfrutar de cinco semanas consecutivas de Paseo en el tiempo y obtener un 50 % más de reputación en
                                                                            estos eventos.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-17T17:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23442724/¡llegan-las-vacaciones-semanales-de-paseo-en-el-tiempo"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23453342/guía-para-ver-el-wow-classic-summer-bowl">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ge/GE2AHH0J8L8B1592433957793.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Guía para ver el WoW Classic Summer Bowl</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            No os perdáis el primer evento de esports de WoW Classic del verano a partir del sábado, 20 de junio, a las 19:00 CEST.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-16T21:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23453342/guía-para-ver-el-wow-classic-summer-bowl"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23453347/actualizado-2406-contaminantes-conservados-y-la-capa-legendaria">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/CL5Y7KRN18YG1578543847692.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">[ACTUALIZADO 24.06] Contaminantes conservados y la capa legendaria</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">Obtened más efectos de corrupción y mejorad Ashjra'kamas.</p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-16T18:08:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23453347/actualizado-2406-contaminantes-conservados-y-la-capa-legendaria"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23451089/avance-de-shadowlands-maldraxxus-y-la-curia-de-los-necroseñores">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/vu/VUPAMWQCFF2F1592517170945.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: Maldraxxus y la curia de los necroseñores</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Maldraxxus es un territorio devastado por la guerra donde la fuerza —de todo tipo— es la que otorga la razón. Aquí, en el lugar de origen de la
                                                                            magia nigromántica, quienes dominan los poderes de la muerte son capaces de convertir legiones de almas ambiciosas en incansables ejércitos de
                                                                            inmortales.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-11T17:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23451089/avance-de-shadowlands-maldraxxus-y-la-curia-de-los-necroseñores"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23451087/explorad-azeroth-con-vuestros-amigos-gracias-a-la-sincronización-de-grupo">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/yz/YZZB41L5OU7V1591732059916.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Explorad Azeroth con vuestros amigos gracias a la sincronización de grupo</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Jamás ha habido un mejor momento para formar un grupo con amigos y explorar Azeroth y el más allá. Usad la sincronización de grupo con vuestros
                                                                            viejos y nuevos amigos para hacer misiones juntos con cualquiera de vuestros personajes, con independencia del nivel que tengan.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-09T19:48:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23451087/explorad-azeroth-con-vuestros-amigos-gracias-a-la-sincronización-de-grupo"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23440112/¡presentamos-el-world-of-warcraft-classic-summer-bowl">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/rk/RK7J5VZVULNM1591315035003.png');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Presentamos el World of Warcraft Classic Summer Bowl!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            ¡Ponemos la vista en la versión Classic de Garganta Grito de Guerra para encontrar a nuestro campeón veraniego!
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-08T21:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23440112/¡presentamos-el-world-of-warcraft-classic-summer-bowl"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23434527/avance-de-shadowlands-ardenweald-y-la-curia-de-las-sílfides-nocturnas">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/18/18ZDMRTPB0FG1590490032969.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: Ardenweald y la curia de las sílfides nocturnas</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Ardenweald, un más allá sumido en perpetuo ocaso para quienes están conectados con la naturaleza, es un reino de restauración custodiado por las
                                                                            místicas sílfides nocturnas. En este bosque eterno, los gigantescos árboles oníricos absorben la valiosa ánima para alimentar a los espíritus de la
                                                                            naturaleza que aguardan el renacimiento.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-06-03T17:00:00.000Z","relative":true}'>2 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23434527/avance-de-shadowlands-ardenweald-y-la-curia-de-las-sílfides-nocturnas"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23442772/relato-corto-de-world-of-warcraft-un-instante-en-verso">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/70/7001J1Y8BILM1590781817856.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Relato corto de World of Warcraft: «Un instante en Verso»</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Madeleine Roux, autora de la novela de próxima aparición Shadows Rising, tiene una sorpresa para vosotros: un nuevo relato corto sobre una noche
                                                                            inolvidable en la que el señor regente Lor'themar Theron y la primera arcanista Thalyssra comparten historias, poemas y vino de arco.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-29T20:00:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23442772/relato-corto-de-world-of-warcraft-un-instante-en-verso"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23440110/¡el-9-de-junio-hablamos-en-directo-sobre-shadowlands-actualizado">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5q/5QVN0JL8VOGW1590598520704.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡El 9 de junio hablamos en directo sobre Shadowlands! [ACTUALIZADO]</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            El productor ejecutivo de World of Warcraft, John Hight, y el director del juego, Ion Hazzikostas, en directo desde sus hogares, nos ofrecerán un
                                                                            avance del nuevo contenido de Shadowlands en el que ha estado trabajando el equipo de desarrollo.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-27T16:46:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23440110/¡el-9-de-junio-hablamos-en-directo-sobre-shadowlands-actualizado"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23429409/legion-monturas-mascotas-y-más">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5o/5OHQJHR4CM431496686880067.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Legion: Monturas, mascotas y más</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Hay multitud de tesoros en las Islas Abruptas que aguardan a aquellos que saben dónde mirar. Si estáis buscando un reto o simplemente queréis
                                                                            ampliar vuestra colección, tenemos lo que necesitáis: muchas mascotas, monturas y más cosas.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-22T20:00:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23429409/legion-monturas-mascotas-y-más"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23429407/nuevos-fondos-de-pantalla-disponibles-en-4k">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cu/CUEOLTWOXMSR1589910830436.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Nuevos fondos de pantalla disponibles en 4K</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Tanto si estáis haciendo pequeñas retransmisiones como si estáis trabajando desde casa, tenemos justo lo que estabais buscando: nuevos fondos de
                                                                            pantalla en 4K.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-21T21:00:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23429407/nuevos-fondos-de-pantalla-disponibles-en-4k"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23429193/avance-de-shadowlands-oribos">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ac/AC1L6647OVK61590077993504.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: Oribos</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Oribos es la encrucijada de las Tierras Sombrías, donde la impasible Enjuiciadora juzga las almas y donde los sombríos habitantes intercambian
                                                                            chismorreos y ánima.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-21T17:00:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23429193/avance-de-shadowlands-oribos"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23426182/guía-para-ver-el-arena-world-championship-2020">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/k0/K0Z0O3PAZLFH1589500120112.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Guía para ver el Arena World Championship 2020</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            El Arena World Championship (AWC) es uno de los eventos JcJ más prestigiosos del mundo (de Warcraft) y las Cups regresan para la temporada final del
                                                                            AWC en Battle for Azeroth a partir del viernes, 22 de mayo.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-18T21:00:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23426182/guía-para-ver-el-arena-world-championship-2020"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23374470/shadowlands-facultades-distintivas-y-de-clase-de-las-curias-actualizado">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/1c/1C139J2HKLOH1585875000444.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Shadowlands: facultades distintivas y de clase de las curias [ACTUALIZADO]</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            En Shadowlands, los jugadores se aliarán con una de cuatro curias posibles. Cada una otorga poderes, facultades y beneficios exclusivos para
                                                                            ayudarlos en el peligroso periplo por los reinos de los muertos.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-13T17:00:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23374470/shadowlands-facultades-distintivas-y-de-clase-de-las-curias-actualizado"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23391284/100-más-reputación-con-influencia-impresionante-del-20-de-abril-al-18-de-mayo">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/9b/9B5LTURW5VZB1552938986536.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">100 % más reputación con Influencia impresionante: del 20 de abril al 18 de mayo</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            ¿Tenéis previsto desbloquear una raza aliada, aprender a volar en Battle for Azeroth o añadir una mascota o una montura a vuestra colección? Para
                                                                            echaros una mano, ahora es más fácil obtener reputación con el beneficio Influencia impresionante.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-08T17:00:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23391284/100-más-reputación-con-influencia-impresionante-del-20-de-abril-al-18-de-mayo"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/20564529/evento-de-bonificación-semanal-paseo-en-el-tiempo-de-mists-of-pandaria">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/8n/8NOE66E9LHSV1481332058269.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Evento de bonificación semanal: Paseo en el tiempo de Mists of Pandaria</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Retroceded en el tiempo hasta las mazmorras de Mists of Pandaria en el evento de bonificación de esta semana.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-06T07:00:00.000Z","relative":true}'>3 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/20564529/evento-de-bonificación-semanal-paseo-en-el-tiempo-de-mists-of-pandaria"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/22965339/¡ya-está-aquí-la-semana-de-los-niños-del-1-al-7-de-mayo">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/qa/QA5M59QATUGE1556818445432.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Ya está aquí la Semana de los Niños! Del 1 al 7 de mayo</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            ¡Es hora de hacer felices a los niños de Azeroth durante la Semana de los Niños! Hazte cargo de un huérfano y muéstrale las maravillas del mundo.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-05-01T07:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/22965339/¡ya-está-aquí-la-semana-de-los-niños-del-1-al-7-de-mayo"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23405210/visiones-de-nzoth-monturas-mascotas-y-más">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/rl/RLPIS5XOLHYY1587626485889.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Visiones de N'Zoth: Monturas, mascotas y más</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            En Visiones de N'Zoth se han introducido una serie de mascotas, monturas y objetos que podéis coleccionar mientras os enfrentáis a las retorcidas
                                                                            visiones de los dioses antiguos. Hemos destacado algunos de ellos para orientaros.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-24T17:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23405210/visiones-de-nzoth-monturas-mascotas-y-más"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23391567/avance-de-shadowlands-revendreth-y-la-curia-venthyr">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/KI9S0T8N76UZ1587520622607.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: Revendreth y la curia venthyr</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            A medida que vayáis explorando las cuatro zonas sobrenaturales de las Tierras Sombrías —Bastión, Maldraxxus, Selvardien y Revendreth—, descubriréis
                                                                            las curias que gobiernan sus reinos de ultratumba. Vuestro destino final en esta historia es la sombría tierra de Revendreth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-22T17:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23391567/avance-de-shadowlands-revendreth-y-la-curia-venthyr"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23355424/¡ampliamos-el-beneficio-del-100-de-experiencia-de-vientos-de-sabiduría">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ou/OUND5H3PHTLE1584717701069.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Ampliamos el beneficio del 100 % de experiencia de Vientos de sabiduría!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Vista la popularidad del beneficio del 100 % de experiencia de Vientos de sabiduría en Battle for Azeroth, vamos a prolongarlo hasta el lanzamiento
                                                                            del parche preliminar de Shadowlands.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-17T19:15:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23355424/¡ampliamos-el-beneficio-del-100-de-experiencia-de-vientos-de-sabiduría"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23391283/wow-classic-¡zulgurub-y-muchas-más-novedades">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/v6/V6AWESMPJ23B1587000537092.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">WoW Classic: ¡Zul'Gurub y muchas más novedades!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Hay muchas actividades y aventuras nuevas en WoW Classic: se han abierto las puertas de la antigua ciudad trol de Zul'Gurub, llegan los dragones
                                                                            esmeralda de la Pesadilla, los maléficos silítidos se están despertando y el Gran espectáculo de pesca de Vega de Tuercespina invita a todos los
                                                                            pescadores de Azeroth a participar en la competición definitiva.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-15T22:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23391283/wow-classic-¡zulgurub-y-muchas-más-novedades"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23391281/cambios-en-el-arena-world-championship-de-2020">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/0b/0B2CB05E5K1X1586884196825.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Cambios en el Arena World Championship de 2020</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            A fin de salvaguardar la salud y la seguridad de jugadores, trabajadores y socios, la temporada 2020 del Arena World Championship (AWC) de Battle
                                                                            for Azeroth se celebrará íntegramente online.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-14T21:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23391281/cambios-en-el-arena-world-championship-de-2020"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23389553/avance-de-shadowlands-torghast-la-torre-de-los-condenados">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/dg/DGW48CYS3WSY1586474388342.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de Shadowlands: Torghast, la Torre de los Condenados</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            World of Warcraft: Shadowlands introduce diversas aventuras nuevas para los jugadores, como Torghast, la Torre de los Condenados. Podrán explorar
                                                                            sus salas y cámaras en constante cambio mientras luchan contra los esbirros del Carcelero, su vil gobernante, para obtener tesoros legendarios y
                                                                            liberar a los espíritus heroicos atrapados allí.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-14T17:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23389553/avance-de-shadowlands-torghast-la-torre-de-los-condenados"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/21636890/¡el-jardín-noble-florecerá-esta-semana-del-13-al-19-de-abril">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ek/EKGNP0SSCOXJ1492180562338.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡El Jardín Noble florecerá esta semana, del 13 al 19 de abril!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            El Jardín Noble lucirá su más florida cara esta semana, del 13 al 19 de abril. Poneos vuestras orejas de conejo y buscad huevos, comed delicioso
                                                                            chocolate, reunid juguetes y mascotas, y más cosas.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-13T08:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/21636890/¡el-jardín-noble-florecerá-esta-semana-del-13-al-19-de-abril"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23380361/guía-para-ver-el-mythic-dungeon-international-2020">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/by/BYYP1KZ0EXXO1586201275900.png');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Guía para ver el Mythic Dungeon International 2020</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            El Mythic Dungeon International (MDI) se retransmitirá por YouTube a partir del 11 de abril. Este año ha habido cambios importantes, pero el MDI
                                                                            sigue aceptando el reto de las piedras angulares míticas más difíciles y plantando cara a los afijos más temibles.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-09T21:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23380361/guía-para-ver-el-mythic-dungeon-international-2020"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23380362/resumen-de-noticias-sobre-world-of-warcraft-shadowlands">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/35/35RCEDB0NMY01586281854521.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Resumen de noticias sobre World of Warcraft®: Shadowlands</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Tenemos un montón de información sobre la próxima expansión de World of Warcraft y hemos reunido las últimas noticias para que estéis al día.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-08T19:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23380362/resumen-de-noticias-sobre-world-of-warcraft-shadowlands"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23380363/shadowlands-nueva-experiencia-inicial-repleta-de-aventuras-actualizado">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5f/5FIPB5X0KSGW1586222804013.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Shadowlands: nueva experiencia inicial repleta de aventuras [ACTUALIZADO]</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            World of Warcraft: Shadowlands presenta Azeroth a los jugadores con una experiencia inicial digna de un héroe.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-08T17:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23380363/shadowlands-nueva-experiencia-inicial-repleta-de-aventuras-actualizado"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23379368/shadowlands-bastión-y-la-curia-kyriana">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/le/LE9UKGR4V0G81586289659139.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Shadowlands: Bastión y la curia kyriana</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Ya se ha anunciado la próxima expansión, World of Warcraft: Shadowlands, junto con una nueva zona, Bastión, y la curia kyriana.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-07T21:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23379368/shadowlands-bastión-y-la-curia-kyriana"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23310980/filosofía-de-clases-y-cambios-de-estas-en-shadowlands">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/PL6TSKMYVSC21586225510098.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Filosofía de clases y cambios de estas en Shadowlands</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Los campeones de Azeroth ya se preparan para adentrarse en Shadowlands, donde obtendrán poderes antiguos y nuevos para enfrentarse a los reinos de
                                                                            los muertos. No os perdáis los cambios de clase que se avecinan.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-07T17:01:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23310980/filosofía-de-clases-y-cambios-de-estas-en-shadowlands"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23377994/en-desarrollo-shadowlands">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/0a/0A3AC9I9KF4W1586191130354.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">En desarrollo: Shadowlands</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Todo el equipo ha estado trabajando a destajo para transformar en realidad la visión que planteamos para Shadowlands, y estamos deseando compartir
                                                                            nuestros progresos en la próxima alfa.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-04-06T17:00:00.000Z","relative":true}'>4 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23377994/en-desarrollo-shadowlands"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23355423/regreso-a-azeroth-ponerse-al-día-al-120-actualizado">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ks/KSN8DZREXBA41534275168402.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Regreso a Azeroth: Ponerse al día al 120 [ACTUALIZADO]</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La vida siempre encuentra la manera de alcanzarnos, pero si vais a volver a jugar con vuestro personaje de nivel 120 y queréis poneros al día con el
                                                                            contenido más reciente, esta breve guía es para vosotros.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-03-20T21:00:00.000Z","relative":true}'>5 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23355423/regreso-a-azeroth-ponerse-al-día-al-120-actualizado"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23320961/wow-classic-¡cuenca-de-arathi-ya-disponible">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/6f/6FS5NXAUE1DC1583543663580.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">WoW Classic: ¡Cuenca de Arathi ya disponible!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Las puertas de la Cuenca de Arathi ya están abiertas en esta batalla por los recursos 15 contra 15. ¿Tenéis lo que hace falta para tomar el control
                                                                            y vencer?
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-03-11T22:00:00.000Z","relative":true}'>5 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23320961/wow-classic-¡cuenca-de-arathi-ya-disponible"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23236722/nyalotha-ciudad-del-despertar-ala-4-del-buscador-de-bandas-ya-disponible">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/7d/7DZFS7POZD8K1578333267360.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Ny'alotha, Ciudad del Despertar: ala 4 del buscador de bandas ya disponible</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Adentraos en la morada de las pesadillas en Ny'alotha, Ciudad del Despertar, una banda en el corazón preñado de Vacío del Imperio Negro. Enfrentaos
                                                                            a heraldos desquiciados y terrores inescrutables para, al final, luchar cara a cara con el mismísimo N'Zoth en la batalla definitiva por la
                                                                            supervivencia de Azeroth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-03-11T08:00:00.000Z","relative":true}'>5 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23236722/nyalotha-ciudad-del-despertar-ala-4-del-buscador-de-bandas-ya-disponible"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23320960/ya-están-abiertas-las-inscripciones-para-el-awc-y-el-mdi-de-2020">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/y5/Y5Z535VKI6GF1583173468639.png');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Ya están abiertas las inscripciones para el AWC y el MDI de 2020</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            ¿Tenéis lo que hace falta para lograr el primer puesto en el Arena World Championship o el Mythic Dungeon International? ¡Pues ya están abiertas las
                                                                            inscripciones para ambas competiciones!
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-03-02T19:00:00.000Z","relative":true}'>5 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23320960/ya-están-abiertas-las-inscripciones-para-el-awc-y-el-mdi-de-2020"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23320959/¡haceos-con-vuestra-capa-legendaria">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/CL5Y7KRN18YG1578543847692.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Haceos con vuestra capa legendaria!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La corrupción de N'Zoth se extiende por todo Azeroth, pero con la capa legendaria Ashjra'kamas, Velo de Resolución, podéis conservar la cordura y
                                                                            luchar contra la oscuridad. Si todavía no la tenéis, hemos creado una sencilla guía para ayudaros paso a paso.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-27T22:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23320959/¡haceos-con-vuestra-capa-legendaria"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23317716/primeros-pasos-en-world-of-warcraft-classic">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/qq/QQUDT1GKTLSZ1568851101500.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Primeros pasos en World of Warcraft Classic</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">¿Preparado para jugar a WoW Classic? Aquí tienes algunos consejos para empezar.</p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-27T18:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23317716/primeros-pasos-en-world-of-warcraft-classic"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23299641/planes-para-el-arena-world-championship-y-el-mythic-dungeon-international-de-2020">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/uo/UO0V3GDDQH7P1580768843746.png');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Planes para el Arena World Championship y el Mythic Dungeon International de 2020</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            En la antesala de la temporada final de Battle for Azeroth, estamos preparando algo realmente espectacular en 2020 con algunos de los mayores
                                                                            eventos LAN que hayamos organizado nunca. El Mythic Dungeon International y el Arena World Championship nos deleitarán con la mejor acción de
                                                                            nuestros esports.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-13T18:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23299641/planes-para-el-arena-world-championship-y-el-mythic-dungeon-international-de-2020"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23302787/wow-classic-¡ya-está-disponible-guarida-alanegra-y-mucho-más">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/6z/6ZQQ9J0WBGD51581531385502.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">WoW Classic: ¡Ya está disponible Guarida Alanegra y mucho más!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La última actualización de &lt;i&gt;WoW Classic&lt;/i&gt; cuenta con la banda Guarida Alanegra, nuevas recompensas de reputación, nuevas misiones de
                                                                            clase y muchas cosas más.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-12T23:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23302787/wow-classic-¡ya-está-disponible-guarida-alanegra-y-mucho-más"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23302788/wow-classic-adentraos-en-las-profundidades-de-la-guarida-alanegra">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/0n/0N438PTAGED51581114040258.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">WoW Classic: adentraos en las profundidades de la Guarida Alanegra</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Adentraos en los oscuros recovecos de la Montaña Roca Negra y desvelad los tenebrosos secretos que os aguardan en esta mazmorra para bandas de 40
                                                                            jugadores... ¡Por la fama y la gloria!
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-12T21:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23302788/wow-classic-adentraos-en-las-profundidades-de-la-guarida-alanegra"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23302789/wow-classic-misiones-de-clase-y-nuevas-recompensas-de-reputación">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ay/AYDQUZEMM5Q51581463829581.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">WoW Classic: misiones de clase y nuevas recompensas de reputación</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Con la última actualización de WoW Classic, los jugadores pueden conseguir nuevas recompensas de reputación y afrontar una cadena de misiones de
                                                                            clase en los oscuros pasajes del Templo de Atal'Hakkar.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-12T20:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23302789/wow-classic-misiones-de-clase-y-nuevas-recompensas-de-reputación"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23090143/recursos-para-la-comunidad-de-world-of-warcraft-classic">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/7i/7IBOVM43VBAH1566424127956.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Recursos para la comunidad de World of Warcraft Classic</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            World of Warcraft Classic brinda a los jugadores la oportunidad de disfrutar de una fiel recreación del WoW original, pero no tiene por qué ser una
                                                                            aventura en solitario. Hemos reunido algunos de los mejores recursos que servirán de ayuda a la comunidad.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-12T18:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23090143/recursos-para-la-comunidad-de-world-of-warcraft-classic"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/22882886/se-respira-pasión-¡amor-en-el-aire-comienza-el-8-de-febrero">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/vb/VB0HWCAS2BGJ1486488637727.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Se respira pasión: ¡Amor en el aire comienza el 8 de febrero!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Incluso con la amenaza de la corrupción de N'Zoth, el amor consigue calmar las hostilidades y que los habitantes de Azeroth se centren en cosas más
                                                                            agradables; aunque bien podría ser por el aroma seductor que flota en el aire de la ciudad...
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-07T13:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/22882886/se-respira-pasión-¡amor-en-el-aire-comienza-el-8-de-febrero"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23302786/llega-la-feria-de-la-luna-negra-a-wow-classic">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ui/UIFH5UZHH4141580919553431.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Llega la Feria de la Luna Negra a WoW Classic</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Silas Luna Negra presenta la Feria de la Luna Negra, una celebración de todo cuanto de extraño, exótico y extraordinario hay en el mundo. ¡Todo un
                                                                            homenaje a las maravillas y misterios de Azeroth!
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-02-05T18:00:00.000Z","relative":true}'>6 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23302786/llega-la-feria-de-la-luna-negra-a-wow-classic"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23299639/¡nos-vemos-en-la-feria-de-la-luna-negra">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/tr/TRIZHKNS9P0C1554180046164.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Nos vemos en la Feria de la Luna Negra!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">Vuelve la Feria de la Luna Negra con una atracción nueva: la Galería.</p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-31T22:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23299639/¡nos-vemos-en-la-feria-de-la-luna-negra"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23294769/¡comienza-la-carrera-para-completar-nyalotha-ciudad-del-despertar">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/8i/8IXTKA5ZDK4R1570150001195.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Comienza la carrera para completar Ny'alotha, Ciudad del Despertar!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La carrera por ser los primeros en derrotar a N'Zoth en el corazón del antiguo Imperio Negro, Ny'alotha, Ciudad del Despertar, comienza esta semana.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-28T20:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23294769/¡comienza-la-carrera-para-completar-nyalotha-ciudad-del-despertar"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23290205/jugad-a-warcraft-iii-reforged-y-volved-a-vivir-los-comienzos-de-world-of-warcraft">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ch/CHRWX1WS48S71580153138509.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Jugad a Warcraft III: Reforged y volved a vivir los comienzos de World of Warcraft</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Regresad a una época crucial de la historia de Azeroth, antes de la formación de las facciones, del ascenso y caída de héroes y del inicio del
                                                                            legado de World of Warcraft.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-27T18:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23290205/jugad-a-warcraft-iii-reforged-y-volved-a-vivir-los-comienzos-de-world-of-warcraft"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/22864564/¡uníos-a-la-celebración-y-honrad-a-los-ancestros-durante-el-festival-lunar">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/k1/K1EZ8MCBITBG1548266225944.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Uníos a la celebración y honrad a los ancestros durante el Festival Lunar!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            ¡Os aguarda una invitación para el Festival Lunar! Uníos a la celebración del 24 de enero al 7 de febrero.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-24T09:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/22864564/¡uníos-a-la-celebración-y-honrad-a-los-ancestros-durante-el-festival-lunar"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23275631/la-temporada-4-de-battle-for-azeroth-comienza-el-22-de-enero">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/8i/8IXTKA5ZDK4R1570150001195.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">La temporada 4 de Battle for Azeroth comienza el 22 de enero</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La temporada 4 de Battle for Azeroth comienza el 22 de enero e incluye un afijo completamente nuevo (Despierta) para mazmorras de piedra angular
                                                                            mítica, además del nivel de dificultad heroica en el frente de guerra de Costa Oscura, entre otras cosas.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-20T18:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23275631/la-temporada-4-de-battle-for-azeroth-comienza-el-22-de-enero"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23277657/notas-de-la-actualización-de-contenido-de-la-temporada-4">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/8e/8EYSHY6GTVPK1561048128501.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Notas de la actualización de contenido de la Temporada 4</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Aquí tenéis las notas oficiales de la actualización de contenido del 22 de enero de 2020, con la Temporada 4 de Battle for Azeroth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-17T00:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23277657/notas-de-la-actualización-de-contenido-de-la-temporada-4"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23236728/¡una-montura-nueva-al-comprar-una-suscripción-de-6-meses">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/mo/MOS7V3VNZCUC1579123943208.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Una montura nueva al comprar una suscripción de 6 meses!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Añadid un toque de magia a vuestra colección de monturas con Ruiditos la Bromista, que ya se puede comprar en el juego y la Tienda de Blizzard. Por
                                                                            tiempo limitado, podréis haceros con esta astuta rata al adquirir una suscripción de 6 meses a World of Warcraft.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-16T18:30:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23236728/¡una-montura-nueva-al-comprar-una-suscripción-de-6-meses"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23236729/la-dificultad-heroica-de-operación-mecandria-os-espera">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/cf/CF3Y0D7J1B1I1579031954660.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">La dificultad heroica de Operación: Mecandria os espera</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            La temporada 4 de Battle for Azeroth abre las puertas de la dificultad heroica de Operación: Mecandria para que los jugadores puedan disfrutar de
                                                                            esta maravillosa mazmorra mecánica dividida en dos partes: el Desguace y el Taller.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-16T17:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23236729/la-dificultad-heroica-de-operación-mecandria-os-espera"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23236726/¡visiones-de-nzoth-ya-está-disponible">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/fl/FL61JKEBPWYV1578599925370.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Visiones de N'Zoth ya está disponible!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            En medio de una tierra consumida por la desesperación y la locura, los héroes de la Horda y la Alianza deberán luchar por mantener la cordura y por
                                                                            el destino de su mundo herido en esta actualización de contenido.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-14T20:50:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23236726/¡visiones-de-nzoth-ya-está-disponible"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23236727/ahorra-hasta-un-30-en-cambios-de-raza-y-facción">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/6w/6WM064SC14BI1578677962639.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Ahorra hasta un 30 % en cambios de raza y facción</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Comienza tu aventura en la piel de las razas aliadas con un descuentazo en los servicios de cambio de raza y facción.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-13T18:42:03.954Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23236727/ahorra-hasta-un-30-en-cambios-de-raza-y-facción"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23236724/visiones-de-nzoth-avance-de-las-visiones-horripilantes-y-los-asaltos">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/iz/IZJZXQSAHF7Q1578539608678.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Visiones de N'Zoth: avance de las visiones horripilantes y los asaltos</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            En medio de una tierra consumida por la desesperación y la locura, los héroes de la Horda y la Alianza deberán luchar por mantener la cordura y por
                                                                            el destino de su mundo herido. Indagad en el futuro de Azeroth que ha concebido el dios antiguo N'Zoth y preparad vuestras mentes para la locura de
                                                                            sus visiones horripilantes y asaltos.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-09T21:01:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23236724/visiones-de-nzoth-avance-de-las-visiones-horripilantes-y-los-asaltos"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23275627/avance-de-la-nueva-capa-legendaria-y-armas-forjadas-con-corrupción">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/CL5Y7KRN18YG1578543847692.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de la nueva capa legendaria y armas forjadas con corrupción</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Enfrentaos a N'Zoth equipados con una nueva y poderosa capa legendaria y armas forjadas con corrupción.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-09T21:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23275627/avance-de-la-nueva-capa-legendaria-y-armas-forjadas-con-corrupción"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23236723/visiones-de-nzoth-avance-de-la-actualización-de-la-casa-de-subastas">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/51/51RG7EXSM99D1578528651885.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Visiones de N'Zoth: avance de la actualización de la casa de subastas</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">¡Comprad y vended a otro nivel con la actualización de la casa de subastas de Azeroth!</p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-09T20:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23236723/visiones-de-nzoth-avance-de-la-actualización-de-la-casa-de-subastas"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23227147/notas-de-la-actualización-de-contenido-visiones-de-nzoth">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/8e/8EYSHY6GTVPK1561048128501.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Notas de la actualización de contenido Visiones de N'Zoth</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Aquí están las notas oficiales de la actualización de contenido Visiones de N'Zoth del 15 de enero de 2019.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-09T19:28:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23227147/notas-de-la-actualización-de-contenido-visiones-de-nzoth"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23227148/avance-de-los-caballeros-de-la-muerte-para-todas-las-razas">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/bo/BOWAVJGBBSWH1578452828763.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Avance de los caballeros de la Muerte para todas las razas</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Los espíritus de los pandaren y las razas aliadas podrán regresar al plano mortal como caballeros de la Muerte en la actualización de contenido
                                                                            Visiones de N'Zoth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-09T00:38:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23227148/avance-de-los-caballeros-de-la-muerte-para-todas-las-razas"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/20324475/evento-de-bonificación-semanal-campos-de-batalla">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/l0/L0ZKMKSL2HMU1485293974185.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Evento de bonificación semanal: Campos de batalla</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            El evento de bonificación de esta semana está en marcha, y nos dirigimos a los campos de batalla
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-08T08:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/20324475/evento-de-bonificación-semanal-campos-de-batalla"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23164374/correcciones-en-vivo-7-de-enero-de-2020">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/mv/MVKK5EJOGPU61470421579108.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Correcciones en vivo: 7 de enero de 2020</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            A continuación encontraréis una lista de correcciones en vivo para algunos problemas detectados en World of Warcraft: Battle for Azeroth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2020-01-07T08:00:00.000Z","relative":true}'>7 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23164374/correcciones-en-vivo-7-de-enero-de-2020"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/22839053/¡iluminad-el-nuevo-año-con-fuegos-artificiales-espectaculares">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/n9/N91OADNTWP0P1513179804676.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Iluminad el nuevo año con fuegos artificiales espectaculares!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">El cielo de las capitales resplandecerá durante una noche para celebrar el Año Nuevo.</p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-31T18:00:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/22839053/¡iluminad-el-nuevo-año-con-fuegos-artificiales-espectaculares"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/22839052/¡han-llegado-los-regalos-del-festival-de-invierno">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/3r/3RBQ1GSLXA4C1481751192304.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Han llegado los regalos del Festival de Invierno!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Tanto si os habéis portado mal o bien este año, ¡una sorpresa del Gran Padre Invierno os aguarda!
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-25T09:00:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/22839052/¡han-llegado-los-regalos-del-festival-de-invierno"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23237904/battle-for-azeroth-visiones-de-nzoth-llega-el-15-de-enero">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/2o/2OWJ20J7WOIC1576781220121.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Battle for Azeroth: Visiones de N'Zoth llega el 15 de enero</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Libre de su prisión, el dios antiguo N'Zoth ha desatado sobre los habitantes de Azeroth sus visiones del futuro en la próxima actualización de
                                                                            contenido de Battle for Azeroth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-19T20:00:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23237904/battle-for-azeroth-visiones-de-nzoth-llega-el-15-de-enero"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23237903/ahorra-a-lo-grande-en-mascotas-monturas-y-más-cosas-durante-nuestras-ofertas-de-invierno">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/u7/U7IGBNAEJC0Q1576599742883.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Ahorra a lo grande en mascotas, monturas y más cosas durante nuestras ofertas de invierno</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Tanto si quieres darte un capricho con un regalo festivo como si buscas tener un detalle con un amigo, es el mejor momento para compartir la alegría
                                                                            de estas fiestas.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-19T18:54:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23237903/ahorra-a-lo-grande-en-mascotas-monturas-y-más-cosas-durante-nuestras-ofertas-de-invierno"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23237902/transferencias-de-personajes-de-pago-ya-disponibles-en-wow-classic">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/gg/GGYFHAE64AVJ1576537057790.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Transferencias de personajes de pago ya disponibles en WoW® Classic</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Ya están disponibles las transferencias de personajes de pago en WoW® Classic. Seguid leyendo para saber más.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-17T19:00:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23237902/transferencias-de-personajes-de-pago-ya-disponibles-en-wow-classic"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23237901/poneos-vuestras-mejores-galas-¡ha-llegado-el-festín-del-festival-de-invierno">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/pq/PQX8W9KBF1XY1576190363778.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Poneos vuestras mejores galas: ¡ha llegado el festín del Festival de Invierno!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Una vez más, ha llegado el momento de poneros vuestras mejores galas, beber ponche de huevo y adoptar el espíritu de la generosidad (al estilo de
                                                                            los Pastos de Bosquehumeante). ¡Ha comenzado el festín del Festival de Invierno!
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-16T09:00:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23237901/poneos-vuestras-mejores-galas-¡ha-llegado-el-festín-del-festival-de-invierno"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23237900/wow-classic-¡ya-están-disponibles-garganta-grito-de-guerra-y-valle-de-alterac">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/vf/VFSJHEPJW1SN1575917878251.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">WoW Classic: ¡ya están disponibles Garganta Grito de Guerra y Valle de Alterac!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Ha llegado el momento de que pongáis a prueba vuestra destreza en JcJ, porque los campos de batalla Garganta Grito de Guerra y Valle de Alterac ya
                                                                            están disponibles en WoW Classic.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-11T09:00:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23237900/wow-classic-¡ya-están-disponibles-garganta-grito-de-guerra-y-valle-de-alterac"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23237898/explora-las-tierras-de-fuego-durante-el-paseo-en-el-tiempo-de-cataclysm">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5r/5RHR197N4C691575591884410.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Explora las Tierras de Fuego durante el Paseo en el tiempo de Cataclysm</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Forjadas por los titanes para acoger a Ragnaros y a sus indisciplinados esbirros, Tierras de Fuego formará parte del evento Paseo en el tiempo de
                                                                            Cataclysm, que tendrá lugar entre el 10 y el 17 de diciembre.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-11T09:00:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23237898/explora-las-tierras-de-fuego-durante-el-paseo-en-el-tiempo-de-cataclysm"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23232343/celebrad-vuestro-legado-con-dos-nuevos-conjuntos-de-armadura-dinástica">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/ca/CAPWVHZCLC3X1575896349959.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Celebrad vuestro legado con dos nuevos conjuntos de armadura dinástica</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Celebrad vuestro legado con dos nuevos conjuntos de armadura dinástica (uno para los goblins y otro para los huargen), que estarán disponibles con
                                                                            el lanzamiento de la actualización de contenido Visiones de N'Zoth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-09T18:00:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23232343/celebrad-vuestro-legado-con-dos-nuevos-conjuntos-de-armadura-dinástica"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23127426/¡recluta-a-un-amigo-ha-vuelto">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/or/OR8W3FCV0NPP1567814736188.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Recluta a un amigo ha vuelto!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">Traed a vuestros amigos a Azeroth y conseguid recompensas especiales.</p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-06T19:21:54.765Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23127426/¡recluta-a-un-amigo-ha-vuelto"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23232342/nueva-mazmorra-de-duelo-de-mascotas-profundidades-de-roca-negra">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/2c/2C9S323APQDE1575337735895.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Nueva mazmorra de duelo de mascotas: Profundidades de Roca Negra</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Ha llegado la hora de organizar a vuestras fieras y poner a prueba las mejores mascotas de duelo en el volcánico laberinto de Profundidades de Roca
                                                                            Negra, una nueva mazmorra de duelo de mascotas con dificultades normal y desafío que estará disponible con el lanzamiento de Visiones de N'Zoth.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-04T18:00:45.433Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23232342/nueva-mazmorra-de-duelo-de-mascotas-profundidades-de-roca-negra"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23226199/¡adoptad-a-locuela-y-apoyad-a-make-a-wish-y-weorg">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/67/6797N79QQBBH1575308479223.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Adoptad a Locuela y apoyad a Make-A-Wish® y WE.org!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Tenéis que conocer a Locuela, la adorable alpaquita. Al adoptarla en el juego, estaréis apoyando a las organizaciones benéficas Make-A-Wish® y
                                                                            WE.org en su misión de ayudar a los niños más necesitados.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-12-03T18:18:00.000Z","relative":true}'>8 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23226199/¡adoptad-a-locuela-y-apoyad-a-make-a-wish-y-weorg"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/22770321/¡uníos-al-festín-en-la-celebración-de-la-generosidad-del-peregrino-del-25-de-noviembre-al-2-de-diciembre">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/f9/F93X5AYWN09P1479504025266.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">¡Uníos al festín en la celebración de la Generosidad del Peregrino del 25 de noviembre al 2 de diciembre!</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            Dejad de lado las tribulaciones de la guerra y compartid la Generosidad del Peregrino durante esta festividad.
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-11-25T08:00:00.000Z","relative":true}'>9 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/22770321/¡uníos-al-festín-en-la-celebración-de-la-generosidad-del-peregrino-del-25-de-noviembre-al-2-de-diciembre"></a>
                                                    </article>
                                                </div>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="/es-es/news/23232341/buscador-de-hermandades-y-comunidades-ya-disponible">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/zv/ZVFRVSKQE3531574131790368.jpg');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title">Buscador de hermandades y comunidades ya disponible</div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">¡Expande tu mundo con el nuevo buscador de hermandades y comunidades!</p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"2019-11-20T22:02:00.000Z","relative":true}'>9 months ago</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="/es-es/news/23232341/buscador-de-hermandades-y-comunidades-ya-disponible"></a>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Paginator-nav gutter-normal gutter-all align-center">
                                        <a class="Link Button Button--ghost Paginator-loadmore">
                                            <div class="Button-outer">
                                                <div class="Button-inner"><div class="Button-label" data-text="Más noticias">Más noticias</div></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="space-large"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>