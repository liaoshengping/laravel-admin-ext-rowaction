<div class="modal" tabindex="-1" role="dialog" id="{{ $modal_id }}">
    <div class="modal-dialog " style="width: 90%" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $title }}</h4>
            </div>
            <form>
                <div class="modal-body">
                    @foreach($fields as $field)
                        {!! $field->render() !!}
                    @endforeach
                </div>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('admin.close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('admin.submit') }}</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<style>
    #{{$modal_id}} .col-sm-2{
        display: none;
    }
    #{{$modal_id}} .col-sm-8{
        width: 100%;
    }
</style>
