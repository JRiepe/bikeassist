@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Edit your Ride</div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead>
                                        <tr>
                                            <th data-field="rideDate">Date</th>
                                            <th data-field="rideTime">Time(minutes)</th>
                                            <th data-field="rideDistance">Distance(miles)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            {!! Form::open(array('url' => '/ride/update/'.$toEdit->id)) !!}
                                            <td>{!! Form::date('rideDate', $toEdit->ride_date) !!}</td>
                                            <td>{!! Form::number('rideTime', $toEdit->ride_time) !!}</td>
                                            <td>{!! Form::text('rideDistance', $toEdit->ride_distance) !!}</td>
                                            {{ Form::hidden('_method', 'PUT') }}
                                            {{ Form::hidden('id', $toEdit->id) }}
                                            <td>{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}</td>
                                            <td><a href = "/ride" class = 'btn btn-warning'>Cancel</a></td>

                                            {!! Form::close() !!}
                                        </tr>
                                    </tbody>
                                </table>
                            
                                <!-- Errors go here! -->
                                <div class='text-center'><h4>{{ $errors->first('rideDate') }}</h4><h4>{{ $errors->first('rideTime') }}</h4><h4>{{ $errors->first('rideDistance') }}</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
</div>
@endsection