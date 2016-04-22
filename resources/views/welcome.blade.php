@extends('common.layout')
@include('common.header')
@include('common.navi')
@section('content')
<div class="container">

   <div class="uk-grid" data-uk-grid-margin="">
        <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-3" data-uk-modal="{target:'#infobox'}">
            <div class="uk-panel uk-panel-box color-pink" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}">
                <div class="uk-panel-teaser">
                    <img src="./img/sample/teaser01.jpg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">読んでみる？
                    <div class="uk-float-right"><i class="uk-icon-external-link"></i></div>
                </h4>
                <div class="context">ラノベ？それとも純文学？ いえいえ、これぞまさに「野ノベル」です！ もはやジャンル無用のインディーズ作家たちのユニークな作品がいっぱいです！ 新しい「面白さ」を発見して下さい。 検索は<a href="" data-uk-modal="{target:'#searchbox'}">コチラ</a>から</div>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-3" data-uk-modal="{target:'#infobox'}">
            <div class="uk-panel uk-panel-box color-gray" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}">
                <div class="uk-panel-teaser">
                    <img src="./img/sample/teaser02.gif" alt="girl" />
                </div>
                <h4 class="uk-panel-title">書いてみる？
                    <div class="uk-float-right"><i class="uk-icon-external-link"></i></div>
                </h4>
                <div class="context">目指せ、印税生活！ 出版社から本を出さなくたって、書いて生活できれば、それはもう立派な作家じゃないか。 要は、たくさんの人に面白いと思ってもらえることなんだよね！</div>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-3" data-uk-modal="{target:'#infobox'}">
            <div class="uk-panel uk-panel-box color-blue" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}">
                <div class="uk-panel-teaser">
                    <img src="./img/sample/teaser03.jpg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">賞、始めちゃいます！
                    <div class="uk-float-right"><i class="uk-icon-external-link"></i></div>
                </h4>
                <div class="context">第一回ののべる大賞はどの作品に！？ それを決めるのは、ただ読者評価のみ。 賞金もたんまりですよ。 詳しくは<a href="">コチラ</a>を</div>
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin="">
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <figure class="uk-overlay uk-overlay-active">
                <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
                    <div class="badges">
                        <span class="uk-badge uk-badge-primary">小説</span>
                        <span class="uk-badge uk-badge-success">長編</span>
                        <span class="uk-badge uk-badge-warning">おすすめ作</span>
                    </div>
                    <div class="box-cover uk-thumbnail uk-thumbnail-expand uk-badge uk-badge-success">
                        <img class="box-photo" src="../data/cover/na/na1000001.jpg" alt="君の膵臓をたべたい/住野よる/￥1,512" />
                    </div>
                    <h4 class="uk-panel-title">君の膵臓をたべたい</h4>
                    <h3 class="uk-panel-author">住野よる</h3>
                     <div class="prof">
                        288【ページ】<br>
                        2015/6/17【発売日】<br>
                        ￥1,512【希望額】
                     </div>
                     <div class="tags">
                         <span class="tag">生と死</span>
                         <span class="tag">日記</span>
                         <span class="tag">青春</span>
                     </div>
                     <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
                        <div>
                            <h3>あらすじ</h3>
                            <p class="box-text">偶然、僕が病院で拾った１冊の文庫本。タイトルは「共病文庫」。 それはクラスメイトである山内桜良が綴っていた、秘密の日記帳だった。 そこには、彼女の余命が膵臓の病気により、もういくばくもないと書かれていて――。 病を患う彼女にさえ、平等につきつけられる残酷な現実。 【名前のない僕】と【日常のない彼女】が紡ぐ、終わりから始まる物語。 全ての予想を裏切る...</p>
                            <button class="uk-button readtry">試し読み</button>
                        </div>
                    </figcaption>
                </div>
            </figure>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <figure class="uk-overlay uk-overlay-active">
                <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
                    <div class="badges">
                        <span class="uk-badge uk-badge-primary">小説</span>
                        <span class="uk-badge uk-badge-success">長編</span>
                        <span class="uk-badge uk-badge-danger">話題作</span>
                    </div>
                    <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                        <img class="box-photo" src="../data/cover/na/na1000003.jpg" alt="また、同じ夢を見ていた/住野よる/￥1,512" />
                    </div>
                    <h4 class="uk-panel-title">また、同じ夢を見ていた</h4>
                    <h3 class="uk-panel-author">住野よる</h3>
                     <div class="prof">
                        288【ページ】<br>
                        2015/6/17【発売日】<br>
                        ￥1,512【希望額】
                     </div>
                     <div class="tags">
                         <span class="tag">女子高生</span>
                         <span class="tag">孤独</span>
                         <span class="tag">幸せ</span>
                     </div>
                     <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
                        <div>
                            <h3>あらすじ</h3>
                            <p class="box-text">デビュー作にして25万部を超えるベストセラーとなった「君の膵臓(すいぞう)をたべたい」の著者が贈る、待望の最新作。友達のいない少女、リストカットを繰り返す女子高生、アバズレと罵られる女、一人静かに余生を送る老婆。彼女たちの“幸せ"は、どこにあるのか。「やり直したい」ことがある、“今"がうまくいかない全ての人たちに送る物語。</p>
                            <button class="uk-button readtry">試し読み</button>
                        </div>
                    </figcaption>
                </div>
            </figure>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <figure class="uk-overlay uk-overlay-active">
                <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
                    <div class="badges">
                        <span class="uk-badge uk-badge-primary">小説</span>
                        <span class="uk-badge uk-badge-success">長編</span>
                        <span class="uk-badge uk-badge-warning">恋愛</span>
                    </div>
                    <div class="box-cover uk-thumbnail uk-thumbnail-expand uk-badge uk-badge-success">
                        <img class="box-photo" src="../data/cover/na/na1000005.jpg" alt="ぼくは明日、昨日のきみとデートする/七月隆文/￥724" />
                    </div>
                    <h4 class="uk-panel-title">ぼくは明日、昨日のきみとデートする</h4>
                    <h3 class="uk-panel-author">七月隆文</h3>
                     <div class="prof">
                        288【ページ】<br>
                        2014/8/6【発売日】<br>
                        ￥724【希望額】
                     </div>
                     <div class="tags">
                         <span class="tag">純愛</span>
                         <span class="tag">タイムリープ</span>
                         <span class="tag">美少女</span>
                     </div>
                     <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
                        <div>
                            <h3>あらすじ</h3>
                            <p class="box-text">京都の美大に通うぼくが一目惚れした女の子。高嶺の花に見えた彼女に意を決して声をかけ、交際にこぎつけた。気配り上手でさびしがりやな彼女には、ぼくが想像もできなかった大きな秘密が隠されていて―。「あなたの未来がわかるって言ったら、どうする?」奇跡の運命で結ばれた二人を描く、甘くせつない恋愛小説。彼女の秘密を知ったとき、きっと最初から読み返したくなる。</p>
                            <button class="uk-button readtry">試し読み</button>
                        </div>
                    </figcaption>
                </div>
            </figure>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <figure class="uk-overlay uk-overlay-active">
                <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
                    <div class="badges">
                        <span class="uk-badge uk-badge-primary">コミック</span>
                        <span class="uk-badge uk-badge-success small">アクション</span>
                        <span class="uk-badge uk-badge-danger">人気作</span>
                    </div>
                    <div class="box-cover uk-thumbnail uk-thumbnail-expand uk-badge uk-badge-success">
                        <img class="box-photo" src="../data/cover/ca/ca1000002.jpg" alt="ゴールデンカムイ 第1巻/野田サトル/￥555" />
                    </div>
                    <h4 class="uk-panel-title">ゴールデンカムイ 第1巻</h4>
                    <h3 class="uk-panel-author">野田サトル</h3>
                     <div class="prof">
                        288【ページ】<br>
                        2015/1/19【発売日】<br>
                        ￥555【希望額】
                     </div>
                     <div class="tags">
                         <span class="tag">冒険ロマン</span>
                         <span class="tag">北海道</span>
                         <span class="tag">アイヌ</span>
                     </div>
                     <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
                     <a class="uk-close"></a>
                        <div>
                            <h3>あらすじ</h3>
                            <p class="box-text">『不死身の杉元』日露戦争での鬼神の如き武功から、そう謳われた兵士は、ある目的の為に大金を欲し、かつてゴールドラッシュに沸いた北海道へ足を踏み入れる。そこにはアイヌが隠した莫大な埋蔵金への手掛かりが!? 立ち塞がる圧倒的な大自然と凶悪な死刑囚。そして、アイヌの少女、エゾ狼との出逢い。『黄金を巡る生存競争』開幕ッ!!!!</p>
                            <button class="uk-button readtry">試し読み</button>
                        </div>
                    </figcaption>
                </div>
            </figure>
        </div>


        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title">TITLE 001</h4>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

</div>
<!-- END CONTAINER -->
@endsection
@include('common.footer')
