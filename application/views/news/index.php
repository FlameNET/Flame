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
                                                            <div class="CommentTotal-number"><?php echo $value->comments; ?></div>
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
                                                        data-analytics-panel="slot:<?php echo $key; ?> - type:blog - id:<?php echo $value->id; ?> || <?php echo $value->title; ?>"
                                                    >
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number"><?php echo $value->comments; ?></div>
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
                            <?php if($key == 2){ ?>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
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
                                                        data-analytics-panel="slot:<?php echo $key; ?> - type:blog - id:<?php echo $value->id; ?> || <?php echo $value->title; ?>"
                                                    >
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number"><?php echo $value->comments; ?></div>
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
                            <?php if($key == 3){ ?>
                            <div class="Grid-full hide" media-wide="!hide"></div>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
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
                                                        data-analytics-panel="slot:<?php echo $key; ?> - type:blog - id:<?php echo $value->id; ?> || <?php echo $value->title; ?>"
                                                    >
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number"><?php echo $value->comments; ?></div>
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
                            <?php if($key == 4){ ?>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
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
                                                        data-analytics-panel="slot:<?php echo $key; ?> - type:blog - id:<?php echo $value->id; ?> || <?php echo $value->title; ?>"
                                                    >
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number"><?php echo $value->comments; ?></div>
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
                            <?php if($key == 5){ ?>
                            <div class="ArticleTile ArticleTile--gutter" media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3">
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
                                                    <a class="Link Link--external ArticleTile-comments"
                                                        href="<?php echo site_url('news/'.$value->id.'/'.clean_url($value->title)); ?>"
                                                        data-analytics="panel-news"
                                                        data-analytics-panel="slot:<?php echo $key; ?> - type:blog - id:<?php echo $value->id; ?> || <?php echo $value->title; ?>">
                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                            <span class="Icon Icon--comment Icon--small CommentTotal-icon">
                                                                <i class="fas fa-comment-alt" class="Icon-svg"></i>
                                                            </span>
                                                            <div class="CommentTotal-number"><?php echo $value->comments; ?></div>
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
                                                <?php foreach ($news->result() as $key => $value) { ?>
                                                <div class="List-item">
                                                    <article class="NewsBlog">
                                                        <div class="NewsBlog-content">
                                                            <div class="Grid Grid--gutter">
                                                                <div class="Grid-col hide" media-large="!hide Grid-1of4" media-wide="Grid-1of5">
                                                                    <a class="Link" href="<?php echo site_url('news/'.$value->id.'/'.clean_url($value->title)); ?>">
                                                                        <div class="Tile Tile--border NewsBlog-tile">
                                                                            <div class="Tile-area">
                                                                                <div class="Tile-bg" style="background-image: url('<?php echo base_url('uploads/news/'.$value->id.'/'.$value->image); ?>');"></div>
                                                                                <div class="Tile-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Grid-full gutter-small" media-large="Grid-3of4" media-wide="Grid-4of5">
                                                                    <div class="contain-large contain-left" media-large="gutter-normal">
                                                                        <div class="NewsBlog-title"><?php echo $value->title; ?></div>
                                                                        <p class="NewsBlog-desc color-beige-medium font-size-xSmall">
                                                                            <?php echo html_excerpt($value->content, 250); ?>
                                                                        </p>
                                                                    </div>
                                                                    <div media-large="gutter-normal">
                                                                        <div class="Pair">
                                                                            <div class="Pair-left">
                                                                                <div class="color-beige-dark font-size-xxSmall">
                                                                                    <div class="NewsBlog-date LocalizedDateMount" data-props='{"iso8601":"<?php echo $value->posted_date; ?>","relative":true}'><?php echo ago_news($value->posted_date); ?></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="Link NewsBlog-link" href="<?php echo site_url('news/'.$value->id.'/'.clean_url($value->title)); ?>"></a>
                                                    </article>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="Paginator-page hide" data-page="2">
                                            <div class="List List--vertical List--separatorAll List--full">
                                                <!-- In DEV -->
                                                <!-- <div class="List-item">
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
                                                </div> -->
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