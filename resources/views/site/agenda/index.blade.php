@extends('site.layouts.main')

@section('titulo', 'Agenda')
<link rel="stylesheet" href="{{ asset('css/calendario.css') }}">
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.4/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.4/locales-all.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.4/main.min.css" integrity="sha512-1P/SRFqI1do4eNtBsGIAqIZIlnmOQkaY7ESI2vkl+q+hl9HSXmdPqotN0McmeZVyR4AWV+NvkP6pKOiVdY/V5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script> 
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            eventClick: function(event) {
                var resumo = event.event.extendedProps.resumo;

                diaInicial  = event.event.start.getDate().toString().padStart(2, '0'),
                mesInicial  = (event.event.start.getMonth()+1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
                anoInicial  = event.event.start.getFullYear();
                   // diaInicial+"/"+mesInicial+"/"+anoInicial
                horaInicial = event.event.start.getHours().toString().padStart(2, "0");
                minsIniciais = event.event.start.getMinutes().toString().padStart(2, "0");

                if(event.event.end){
                    diaFinal  = event.event.end.getDate().toString().padStart(2, '0'),
                    mesFinal  = (event.event.end.getMonth()+1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
                    anoFinal  = event.event.end.getFullYear();
                       // diaFinal+"/"+mesFinal+"/"+anoFinal
                    horaFinal = event.event.end.getHours().toString().padStart(2, "0");
                    minsFinais = event.event.end.getMinutes().toString().padStart(2, "0");
                }
                var modal = $("#modal-agenda");
                modal.modal('show');
                $("#modal-agenda .modal-title").text(event.event.title);
                $("#modal-agenda .modal-body .resumo p").text(resumo);
                if(event.event.start && !event.event.end){
                    $("#modal-agenda .modal-body .data-inicial p").text("Data: "+diaInicial+"/"+mesInicial+"/"+anoInicial);
                }else{
                    $("#modal-agenda .modal-body .data-inicial p").text("Data de Início: "+diaInicial+"/"+mesInicial+"/"+anoInicial+ " às " +horaInicial+":"+minsIniciais+"hrs");
                    $("#modal-agenda .modal-body .data-final p").text("Data de Término: "+diaFinal+"/"+mesFinal+"/"+anoFinal+ " às " +horaFinal+":"+minsFinais+"hrs");
                }
            },
            locale: 'pt-br',
            editable: true,
            events: @json($events),
        });
        calendar.render();
    });
</script>
@endpush
@section('conteudo')
    {{ Breadcrumbs::render('agenda') }}
    <div class="container-xxl py-5">
        <section class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 style="margin-bottom: 4rem">Calendário</h1>
            </div>
            @include('site.layouts._partials._redesSociais')
            <br><br>
            <div class="row">
                    <!-- Calendario -->
                <div class="col-12 order-1">
                    <div class="">
                        <div class="container-calendario">
                            <div id='calendar'></div>
                        </div>
                    </div>
                    <br /><br />
                </div>
                <br>
            </div>
            <div class="row">
                @if (count($eventosLista) != 0)              
                    @foreach ($eventosLista as $evento)
                    @endforeach
                @endif
            </div>
        </section>
    </div>
    @include('site.agenda._modal_agenda' , ['evento' => $evento])
@endsection

<script type="text/javascript">
    window.onload = function () { 
        document.getElementById('icon-zap').style.cssText = 'margin-top:12px;';
    } 
</script>