    @if(!($workers->count()>0))
        <br/><br/>
        <h4>NO HAY COINCIDENCIAS</h4>
    @else
        <div class="row">
            <br/>
            <div class="hbox-column col-sm-12 style-default-light">
                <h3>BACKUPS</h3>
                <ul class="list ">
                    @foreach ($workers as $worker)
                        <li class="tile">
                            <a class="tile-content ink-reaction backup-details"  data-backdrop="false">
                                <div class="tile-icon">
                                    <?php $i=0 ?>
                                    @if(count($worker->attachments)>0)
                                        @foreach ($worker->attachments as $attachment)
                                            @if($attachment->type==2)
                                                <?php $i++ ?>
                                                <img class="img-circle img-responsive pull-left width-4" src="{{$attachment->url}}" alt="" />
                                            @endif
                                        @endforeach
                                    @endif
                                    @if($i==0)
                                        <img class="img-circle img-responsive pull-left" src="{{asset('img/avatar9.jpg?')}}" alt="" />
                                    @endif
                                    {{--<img src="../img/avatar4.jpg?1404026791" alt="" />--}}
                                </div>
                                <div class="tile-text">
                                    <span class="text-medium" >{{$worker->full_name}}</span><br/>
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
        <div class="row">
            <!-- BEGIN SEARCH RESULTS PAGING -->
            <div class="backups-list text-center">
                {!! $workers->render() !!}
            </div><!--end .text-center -->
            <!-- BEGIN SEARCH RESULTS PAGING -->
        </div>
        {{--<script src="{{ asset('js/core/source/AppOffcanvas.js') }}" ></script>--}}
        <script>
            var backups=[];
            @if($workers->count()>0)
                @foreach ($workers as $worker)
                    var url='';
                    @foreach ($worker->attachments as $attachment)
                        @if($attachment->type==1)
                        url="{{$attachment->url}}";
                        @endif
                    @endforeach
                    backups.push({name:"{{$worker->full_name}}",profile:(url==''?'{{asset('img/avatar640.jpg?')}}':url),
                                job:"{{$worker->job_title}}",phone:"{{$worker->mobile}}",
                                address:"{{$worker->full_address}}",id:"{{$worker->id}}" });
                @endforeach
            @endif

             $(".backup-details").click(function(){
                var index = $(".backup-details").index(this);
                var backup=backups[index];
                $("#image-backup-details").css("background-image", "url("+backup.profile+")");
                $("#name-backup-details").text(backup.name);
                $("#job-backup-details").text(backup.job);
                $("#phone-backup-details").text(backup.phone);
                $("#address-backup-details").text(backup.address);
                $("#replacer_worker_id").val(backup.id);
                $('#detailBackup').trigger('click');
            });
        </script>
    @endif


