<!-- Button trigger modal -->

<div class="container">
    
    <hr>
    <div class="button">
      <button type="button" class="btn btn-primary btn-xs"  role="button" data-toggle="modal" data-target="#myModal">
      <img src={{asset('img/Add.png')}}  alt="Logo"><p>New Entry</p></button> 
      <br />
      <hr>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> 
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">New entry</h4>
            </div>
    
            <div class="modal-body">
                {{ Form::open(['action' => 'TasksController@store', 'method' => 'POST']) }}
                <div class="row">
                        <div class="col-md-12">
                                {!! Form::label('task_startTime', 'Start time and date') !!}
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker1">
                                        <input type="text" name="task_startTime" class="form-control" />
                                        <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                                    </div>
                                </div>
                            {!! Form::label('task_startTime', 'End time and date') !!}
                            <div class="form-group">
                                    <div class="input-group date" id="datetimepicker2">
                                        <input type="text" name="task_endTime" class="form-control" />
                                        <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                                    </div>
                            </div>
                        </div>
                </div><hr>
                            {{-- {!! Form::label('project_startDate', 'Date:') !!}
                            <input name="date" id="datepicker" class="form-control" type="text" value={{Carbon\Carbon::now()->format('Y-m-d') }}> --}}

                            <div class="container">
                                <div class="row"  class="form-control">
                                    {!! Form::label('project', 'Project:') !!}
                                    
                                        <span class="caret"></span>
                                        <select style="width: 200px" name="project" class="productcategory" id="prod_cat_id">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                            @foreach($projects as $pro)
                                        <option value="{{$pro->id}}">{!!$pro->project_name!!}</option>
                                            @endforeach
                                        </select>
                                    
                                    {!! Form::label('activitie', 'Activity:') !!}
                                        <span class="caret"></span>
                                        <select style="width: 200px" name="activitie" class="activitie_name">
                                        <option value="0" disabled="true" selected="true">Activity Name</option>
                                        </select>
                                        <hr>
                                        <!-- {!! Form::label('price', 'Kosten') !!} -->
                                        <!-- <input type="text" name="price" class="prod_price" align="right"  class="form-control"> -->
                                </div>
                            </div>  
                    

                            <div class="form-group">
                                {!! Form::label('description', 'Beschrijving') !!}
                                {!! Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'text']) !!}
                            </div>
                                {!! Form::submit('Submit', ['class' => 'btn btn-primary' ]) !!}
                                {{  Form::close() }}  
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End modal popup -->

<!-- timepicker -->
<script type="text/javascript">

    $('#datetimepicker1').datetimepicker({
        format:'YYYY-MM-DD HH:mm',
        defaultDate:new Date(),
        sideBySide:true

    });

    $('#datetimepicker2').datetimepicker({
        format:'YYYY-MM-DD HH:mm',
        sideBySide:true
    });

</script>
<!-- timepickerEND -->

<script type="text/javascript">
	// $(document).ready(function(){
	//     $("[rel=tooltip]").tooltip({ placement: 'top'});
	// });
</script>

