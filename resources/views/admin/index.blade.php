@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

          <div class="col-lg-12">

            To Do

          </div>

      </div>

    </section>

</div>
@endsection
