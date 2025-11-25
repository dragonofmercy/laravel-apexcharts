<script type="text/javascript">
@if(!\Illuminate\Support\Facades\Request::isXmlHttpRequest())
window.addEventListener("DOMContentLoaded",function(){
@endif
    new ApexCharts(document.querySelector("#{{ $chart->getId() }}"), {!! $chart->toJson() !!}).render();
@if(!\Illuminate\Support\Facades\Request::isXmlHttpRequest())
});
@endif
</script>