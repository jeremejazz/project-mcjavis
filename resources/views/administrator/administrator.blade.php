@extends('../template.header')

@section('app')

<div class="container-tabs">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Pending</a></li>
        <li><a data-toggle="tab" href="#menu1">Done</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>Pending List</h3>
            <p>Some content.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Done List</h3>
            <p>Some content.</p>
        </div>
    </div>


</div>


@endsection