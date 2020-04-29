<div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
        <thead>
        <tr>
            @foreach($keys as $key)
                <th> {!! $key !!}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($values as $value)
            <tr>
                @foreach($value as $k=>$v)
                    <td>{!!$v!!}</td>
                @endforeach
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
