@extends('templates/header')

<!-- <div class="row" id=links> -->

@section('main')
<div id="links">

    @foreach ($pics as $pic)
        <div class="col-xs-2">
            {!! html_entity_decode(HTML::link(Config::get('constants.DOSSIER_COUTURE_FULL').$pic,
                HTML::image(Config::get('constants.DOSSIER_COUTURE_MINI').$pic, $pic),
                array('class' => 'thumbnail', 'title' => "$pic", 'data-gallery' => ''))) !!}

</div>
@endforeach

</div>


<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
<!-- The container for the modal slides -->
<div class="slides"></div>
<!-- Controls for the borderless lightbox -->
<h3 class="title"></h3>
<a class="prev">‹</a>
<a class="next">›</a>
<a class="close">×</a>
<a class="play-pause"></a>
<ol class="indicator"></ol>
<!-- The modal dialog, which will be used to wrap the lightbox content -->
<div class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" aria-hidden="true">&times;</button>
        <h4 class="modal-title"></h4>
    </div>
    <div class="modal-body next"></div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left prev">
            <i class="glyphicon glyphicon-chevron-left"></i>
            Previous
        </button>
        <button type="button" class="btn btn-primary next">
            Next
            <i class="glyphicon glyphicon-chevron-right"></i>
        </button>
    </div>
</div>
</div>
</div>
</div>

@stop