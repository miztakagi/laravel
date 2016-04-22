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
            </div>
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin="">
        <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5">
            <div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" data-uk-modal="{target:'#infobox'}">
                <div class="box-cover uk-thumbnail uk-thumbnail-expand">
                    <img class="box-photo" src="./img/sample/girl.svg" alt="girl" />
                </div>
                <h4 class="uk-panel-title box-text">TITLE 001</h4>
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
