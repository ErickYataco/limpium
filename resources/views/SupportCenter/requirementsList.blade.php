
    <div class="row">
        <br/>
        <table id="requirements" class="table table-bordered table-hover ">
            <thead class="style-accent-dark">
            <tr >
                <th>#</th>
                <th>Dias</th>
                <th>Horario</th>
                <th>Refrigerio</th>
                <th class="text-center" width="20px" ></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contracts as $contract)
                <tr >
                    <td>{{$contract->workers}}</td>
                    <td>{{$contract->monday==1?'L':''}}
                        {{$contract->tuesday==1?'MA':''}}
                        {{$contract->wednesday==1?'MI':''}}
                        {{$contract->thursday==1?'J':''}}
                        {{$contract->friday==1?'V':''}}
                        {{$contract->saturday==1?'S':''}}
                        {{$contract->sunday==1?'D':''}}
                    </td>
                    <td>{{$contract->start_work}} - {{$contract->end_work}}</td>
                    <td>{{$contract->start_lunch}} - {{$contract->end_lunch}}</td>
                    <td><a  href="{{url('soporte/backups/requerimiento/'.$id)}}" class="btn btn-icon-toggle"><i class="md md-open-in-browser"></i></a></td><tr>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



<div class="row">
    <!-- BEGIN SEARCH RESULTS PAGING -->
    <div class="requirements-list text-center">
        {!! $contracts->render() !!}
    </div><!--end .text-center -->
    <!-- BEGIN SEARCH RESULTS PAGING -->
</div>

