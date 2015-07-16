@if(!($workers->count()>0))
    <br/><br/>
    <h4>NO HAY COINCIDENCIAS</h4>
@else
    <div class="row">
        <br/>

        <div class="hbox-column col-sm-12 style-default-light">
            <h3>COLABORADORES</h3>
            <ul class="list ">
                @foreach ($workers as $worker)
                    <li class="tile">
                        <a class="tile-content ink-reaction worker-assignment" data-backdrop="false">
                            <div class="tile-icon">
                                <?php $i = 0 ?>
                                @if(count($worker->attachments)>0)
                                    @foreach ($worker->attachments as $attachment)
                                        @if($attachment->type==2)
                                            <?php $i++ ?>
                                            <img class="img-circle img-responsive pull-left width-4"
                                                 src="{{$attachment->url}}" alt=""/>
                                        @endif
                                    @endforeach
                                @endif
                                @if($i==0)
                                    <img class="img-circle img-responsive pull-left" src="{{asset('img/avatar9.jpg?')}}"
                                         alt=""/>
                                @endif
                                {{--<img src="../img/avatar4.jpg?1404026791" alt="" />--}}
                            </div>
                            <div class="tile-text">
                                <span class="text-medium">{{$worker->full_name}}</span><br/>
                                <span class="opacity-50 col-sm-6 ">
                                    <span class="text-small glyphicon glyphicon-phone text-sm"></span>&nbsp;{{$worker->mobile}}

                                </span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


    <td>
        <div class="fc-event-container"><a class="fc-time-grid-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                           style="top: 854px; bottom: -1014px; z-index: 1; left: 0%; right: 0%;">
                <div class="fc-content">
                    <div class="fc-time" data-start="7:00" data-full="7:00 PM - 10:30 PM"><span>7:00 - 10:30</span>
                    </div>
                    <div class="fc-title">Birthday Party</div>
                </div>
                <div class="fc-bg"></div>
                <div class="fc-resizer"></div>
            </a></div>
    </td>

    <div class="row">
        <!-- BEGIN SEARCH RESULTS PAGING -->
        <div class="workers-list text-center">
            {!! $workers->render() !!}
        </div>
        <!--end .text-center -->
        <!-- BEGIN SEARCH RESULTS PAGING -->
    </div>
    {{--<script src="{{ asset('js/core/source/AppOffcanvas.js') }}" ></script>--}}
    <script>

        var numerWorkers;
        var wokersAssignmentss=0;

        var workers = [];
        @if($workers->count()>0)
        @foreach ($workers as $worker)
        var url = '';
        @foreach ($worker->attachments as $attachment)
        @if($attachment->type==2)
        url = "{{$attachment->url}}";
        @endif
    @endforeach
    workers.push({
                    name: "{{$worker->first_name.' '.$worker->first_last_name}}", profile: (url == '' ? '{{asset('img/avatar2.jpg?')}}' : url),
                    job: "{{$worker->job_title}}", phone: "{{$worker->mobile}}",
                    address: "{{$worker->full_address}}", id: "{{$worker->id}}"
                });
        @endforeach
    @endif

        $(".worker-assignment").click(function () {
                    var index = $(".worker-assignment").index(this);
                    var worker = workers[index];

                   /* if (!isAssignment(worker.id))
                        alert('El trabajador ya fue asignado');
                    if (!isSameShift(worker.id))
                        alert('El trabajador no tiene el mismo horario');
*/
                    insertWorker(worker);
                });

        function isAssignment(idWorker){
            return assignments().indexOf(idWorker)==-1?true:false;
        }

        function isSameShift(idWorker){
            return assignments().indexOf(idWorker)==-1?true:false;
        }

        function assignments(){
            return $('#add-workers').attr('assignments').split(',');
        }

        function insertWorker(worker) {
            var img='<img class="img-circle width-1" src="'+worker.profile+'" alt="" /><input type="hidden" name="workerIds[]" value="'+worker.id+'" />';
            var text='<p class="text-info">'+worker.name+'</p>';

            $('.worker-photo-unused').first().removeClass('worker-photo-unused').addClass('worker-photo-used').html('').append(img);
            $('.worker-name-unused').first().removeClass('worker-name-unused').addClass('worker-name-used').html('').append(text);



            /*var wokersAssignments=assignments().length;
            var days=selectedDays().split(',');
            var startHeight=44.8*(wokersAssignments-1);
            var endHeight=44.8*wokersAssignments;

            for(var i=0;i<days.length;i++){
                var html='<a style="top: '+startHeight+'px; bottom: -'+endHeight+'px; z-index: 1; left: 0%; right: 0%;" class="fc-time-grid-event fc-event event-success">'+
                        '<div class="fc-content">'+
                        '<div class="fc-title" style="text-align: center">'+
                        '<ad class="btn btn-icon-toggle  pull-right worker-day"><i class="md md-close"></i></ad>'+
                        '<img alt="" style="text-align: left; width: 40px; height: 40px; border-radius: 40px" src="'+worker.profile+'"> '+worker.name+'</img>'+
                        '</div>'+
                        '</div>'+
                        '<div class="fc-bg"></div>'+
                        '</a>'
                $('.'+dayName(days[i])).append(html);
            }

            $(".worker-day").click(function(){
                $(this).closest('a[class^="fc-time-grid-event"]').remove();
            });

            var assignmentss =$('#deleted-workers').attr('assignments');
            assignmentss=assignmentss+worker.id+','
            $('#deleted-workers').attr('assignments',assignmentss);*/
        }

        function selectedDays(){
            var days;
            days=$('#Lunes').is(':checked')?"1,":"";
            days=days+($('#Martes').is(':checked')?"2,":"");
            days=days+($('#Miercoles').is(':checked')?"3,":"");
            days=days+($('#Jueves').is(':checked')?"4,":"");
            days=days+($('#Viernes').is(':checked')?"5,":"");
            days=days+($('#Sabado').is(':checked')?"6,":"");
            days=days+($('#Domingo').is(':checked')?"7,":"");

            return days;
        }

        function dayName(id){
            if (id==1)
                return "monday";
            if (id==2)
                return "tuesday";
            if (id==3)
                return "wednesday";
            if (id==4)
                return "thursday";
            if (id==5)
                return "friday";
            if (id==6)
                return "saturday";
            if (id==7)
                return "sunday";
        }


    </script>
@endif


