@extends('admin.layout.app')
@section('content')
<link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
<div class="main-content" id="miniaresult"> <!-- plugin css -->
<link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Minia</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block
                                    text-truncate">My Wallet</span>
                                <h4 class="mb-3">
                                    $<span class="counter-value" data-target="865.2">865.2</span>k
                                </h4>
                            </div>

                            <div class="col-6">
                                <div id="mini-chart1" data-colors="[&quot; #5156be&quot;]" class="apex-charts mb-2" style="min-height: 50px;"><div id="apexchartscxuu40rqj" class="apexcharts-canvas apexchartscxuu40rqj apexcharts-theme-light" style="width: 163px; height: 50px;"><svg id="SvgjsSvg6657" width="163" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6659" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6658"><clipPath id="gridRectMaskcxuu40rqj"><rect id="SvgjsRect6665" width="169" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskcxuu40rqj"><rect id="SvgjsRect6666" width="167" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine6664" x1="0" y1="0" x2="0" y2="50" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="50" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG6672" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6673" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG6690" class="apexcharts-grid"><g id="SvgjsG6691" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6693" x1="0" y1="0" x2="163" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6694" x1="0" y1="12.5" x2="163" y2="12.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6695" x1="0" y1="25" x2="163" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6696" x1="0" y1="37.5" x2="163" y2="37.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6697" x1="0" y1="50" x2="163" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG6692" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6699" x1="0" y1="50" x2="163" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine6698" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG6667" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG6668" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6671" d="M 0 48.75C 4.074999999999999 48.75 7.567857142857143 43.75 11.642857142857142 43.75C 15.717857142857142 43.75 19.210714285714285 38.75 23.285714285714285 38.75C 27.360714285714284 38.75 30.853571428571424 36.25 34.92857142857142 36.25C 39.003571428571426 36.25 42.49642857142857 27.5 46.57142857142857 27.5C 50.646428571428565 27.5 54.13928571428571 40.625 58.21428571428571 40.625C 62.289285714285704 40.625 65.78214285714284 20.625 69.85714285714285 20.625C 73.93214285714285 20.625 77.425 3.125 81.5 3.125C 85.575 3.125 89.06785714285714 9.375 93.14285714285714 9.375C 97.21785714285714 9.375 100.71071428571427 38.125 104.78571428571428 38.125C 108.86071428571428 38.125 112.35357142857141 41.25 116.42857142857142 41.25C 120.50357142857142 41.25 123.99642857142855 48.75 128.07142857142856 48.75C 132.14642857142854 48.75 135.6392857142857 20.625 139.7142857142857 20.625C 143.7892857142857 20.625 147.28214285714284 23.75 151.35714285714286 23.75C 155.43214285714285 23.75 158.925 40.625 163 40.625" fill="none" fill-opacity="1" stroke="rgba(81,86,190,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskcxuu40rqj)" pathTo="M 0 48.75C 4.074999999999999 48.75 7.567857142857143 43.75 11.642857142857142 43.75C 15.717857142857142 43.75 19.210714285714285 38.75 23.285714285714285 38.75C 27.360714285714284 38.75 30.853571428571424 36.25 34.92857142857142 36.25C 39.003571428571426 36.25 42.49642857142857 27.5 46.57142857142857 27.5C 50.646428571428565 27.5 54.13928571428571 40.625 58.21428571428571 40.625C 62.289285714285704 40.625 65.78214285714284 20.625 69.85714285714285 20.625C 73.93214285714285 20.625 77.425 3.125 81.5 3.125C 85.575 3.125 89.06785714285714 9.375 93.14285714285714 9.375C 97.21785714285714 9.375 100.71071428571427 38.125 104.78571428571428 38.125C 108.86071428571428 38.125 112.35357142857141 41.25 116.42857142857142 41.25C 120.50357142857142 41.25 123.99642857142855 48.75 128.07142857142856 48.75C 132.14642857142854 48.75 135.6392857142857 20.625 139.7142857142857 20.625C 143.7892857142857 20.625 147.28214285714284 23.75 151.35714285714286 23.75C 155.43214285714285 23.75 158.925 40.625 163 40.625" pathFrom="M -1 50L -1 50L 11.642857142857142 50L 23.285714285714285 50L 34.92857142857142 50L 46.57142857142857 50L 58.21428571428571 50L 69.85714285714285 50L 81.5 50L 93.14285714285714 50L 104.78571428571428 50L 116.42857142857142 50L 128.07142857142856 50L 139.7142857142857 50L 151.35714285714286 50L 163 50"></path><g id="SvgjsG6669" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle6705" r="0" cx="0" cy="0" class="apexcharts-marker w9yxruanr no-pointer-events" stroke="#ffffff" fill="#5156be" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6670" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6700" x1="0" y1="0" x2="163" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6701" x1="0" y1="0" x2="163" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6702" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6703" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6704" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect6663" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG6689" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6660" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 86, 190);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 184px; height: 59px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+$20.9k</span>
                            <span class="ms-1 text-muted font-size-13">Since
                                last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block
                                    text-truncate">Number of Trades</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="6258">6258</span>
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart2" data-colors="[&quot; #5156be&quot;]" class="apex-charts mb-2" style="min-height: 50px;"><div id="apexcharts2j1b005q" class="apexcharts-canvas apexcharts2j1b005q apexcharts-theme-light" style="width: 163px; height: 50px;"><svg id="SvgjsSvg6707" width="163" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6709" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6708"><clipPath id="gridRectMask2j1b005q"><rect id="SvgjsRect6715" width="169" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask2j1b005q"><rect id="SvgjsRect6716" width="167" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine6714" x1="0" y1="0" x2="0" y2="50" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="50" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG6722" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6723" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG6740" class="apexcharts-grid"><g id="SvgjsG6741" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6743" x1="0" y1="0" x2="163" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6744" x1="0" y1="12.5" x2="163" y2="12.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6745" x1="0" y1="25" x2="163" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6746" x1="0" y1="37.5" x2="163" y2="37.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6747" x1="0" y1="50" x2="163" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG6742" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6749" x1="0" y1="50" x2="163" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine6748" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG6717" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG6718" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6721" d="M 0 40.625C 4.074999999999999 40.625 7.567857142857143 23.75 11.642857142857142 23.75C 15.717857142857142 23.75 19.210714285714285 20.625 23.285714285714285 20.625C 27.360714285714284 20.625 30.853571428571424 48.75 34.92857142857142 48.75C 39.003571428571426 48.75 42.49642857142857 41.25 46.57142857142857 41.25C 50.646428571428565 41.25 54.13928571428571 38.125 58.21428571428571 38.125C 62.289285714285704 38.125 65.78214285714284 9.375 69.85714285714285 9.375C 73.93214285714285 9.375 77.425 3.125 81.5 3.125C 85.575 3.125 89.06785714285714 20.625 93.14285714285714 20.625C 97.21785714285714 20.625 100.71071428571427 40.625 104.78571428571428 40.625C 108.86071428571428 40.625 112.35357142857141 23.75 116.42857142857142 23.75C 120.50357142857142 23.75 123.99642857142855 20.625 128.07142857142856 20.625C 132.14642857142854 20.625 135.6392857142857 48.75 139.7142857142857 48.75C 143.7892857142857 48.75 147.28214285714284 41.25 151.35714285714286 41.25C 155.43214285714285 41.25 158.925 42.5 163 42.5" fill="none" fill-opacity="1" stroke="rgba(81,86,190,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask2j1b005q)" pathTo="M 0 40.625C 4.074999999999999 40.625 7.567857142857143 23.75 11.642857142857142 23.75C 15.717857142857142 23.75 19.210714285714285 20.625 23.285714285714285 20.625C 27.360714285714284 20.625 30.853571428571424 48.75 34.92857142857142 48.75C 39.003571428571426 48.75 42.49642857142857 41.25 46.57142857142857 41.25C 50.646428571428565 41.25 54.13928571428571 38.125 58.21428571428571 38.125C 62.289285714285704 38.125 65.78214285714284 9.375 69.85714285714285 9.375C 73.93214285714285 9.375 77.425 3.125 81.5 3.125C 85.575 3.125 89.06785714285714 20.625 93.14285714285714 20.625C 97.21785714285714 20.625 100.71071428571427 40.625 104.78571428571428 40.625C 108.86071428571428 40.625 112.35357142857141 23.75 116.42857142857142 23.75C 120.50357142857142 23.75 123.99642857142855 20.625 128.07142857142856 20.625C 132.14642857142854 20.625 135.6392857142857 48.75 139.7142857142857 48.75C 143.7892857142857 48.75 147.28214285714284 41.25 151.35714285714286 41.25C 155.43214285714285 41.25 158.925 42.5 163 42.5" pathFrom="M -1 50L -1 50L 11.642857142857142 50L 23.285714285714285 50L 34.92857142857142 50L 46.57142857142857 50L 58.21428571428571 50L 69.85714285714285 50L 81.5 50L 93.14285714285714 50L 104.78571428571428 50L 116.42857142857142 50L 128.07142857142856 50L 139.7142857142857 50L 151.35714285714286 50L 163 50"></path><g id="SvgjsG6719" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle6755" r="0" cx="0" cy="0" class="apexcharts-marker w2waycwk8 no-pointer-events" stroke="#ffffff" fill="#5156be" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6720" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6750" x1="0" y1="0" x2="163" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6751" x1="0" y1="0" x2="163" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6752" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6753" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6754" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect6713" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG6739" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6710" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 86, 190);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 184px; height: 59px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-danger text-danger">-29
                                Trades</span>
                            <span class="ms-1 text-muted font-size-13">Since
                                last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block
                                    text-truncate">Invested Amount</span>
                                <h4 class="mb-3">
                                    $<span class="counter-value" data-target="4.32">4.32</span>M
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart3" data-colors="[&quot; #5156be&quot;]" class="apex-charts mb-2" style="min-height: 50px;"><div id="apexchartssrh9cr5l" class="apexcharts-canvas apexchartssrh9cr5l apexcharts-theme-light" style="width: 163px; height: 50px;"><svg id="SvgjsSvg6757" width="163" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6759" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6758"><clipPath id="gridRectMasksrh9cr5l"><rect id="SvgjsRect6765" width="169" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasksrh9cr5l"><rect id="SvgjsRect6766" width="167" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine6764" x1="0" y1="0" x2="0" y2="50" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="50" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG6772" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6773" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG6790" class="apexcharts-grid"><g id="SvgjsG6791" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6793" x1="0" y1="0" x2="163" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6794" x1="0" y1="12.5" x2="163" y2="12.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6795" x1="0" y1="25" x2="163" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6796" x1="0" y1="37.5" x2="163" y2="37.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6797" x1="0" y1="50" x2="163" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG6792" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6799" x1="0" y1="50" x2="163" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine6798" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG6767" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG6768" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6771" d="M 0 20.625C 4.074999999999999 20.625 7.567857142857143 40.625 11.642857142857142 40.625C 15.717857142857142 40.625 19.210714285714285 48.75 23.285714285714285 48.75C 27.360714285714284 48.75 30.853571428571424 8.125 34.92857142857142 8.125C 39.003571428571426 8.125 42.49642857142857 36.25 46.57142857142857 36.25C 50.646428571428565 36.25 54.13928571428571 37.5 58.21428571428571 37.5C 62.289285714285704 37.5 65.78214285714284 27.5 69.85714285714285 27.5C 73.93214285714285 27.5 77.425 12.5 81.5 12.5C 85.575 12.5 89.06785714285714 12.5 93.14285714285714 12.5C 97.21785714285714 12.5 100.71071428571427 31.25 104.78571428571428 31.25C 108.86071428571428 31.25 112.35357142857141 18.75 116.42857142857142 18.75C 120.50357142857142 18.75 123.99642857142855 43.125 128.07142857142856 43.125C 132.14642857142854 43.125 135.6392857142857 42.5 139.7142857142857 42.5C 143.7892857142857 42.5 147.28214285714284 48.125 151.35714285714286 48.125C 155.43214285714285 48.125 158.925 45 163 45" fill="none" fill-opacity="1" stroke="rgba(81,86,190,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasksrh9cr5l)" pathTo="M 0 20.625C 4.074999999999999 20.625 7.567857142857143 40.625 11.642857142857142 40.625C 15.717857142857142 40.625 19.210714285714285 48.75 23.285714285714285 48.75C 27.360714285714284 48.75 30.853571428571424 8.125 34.92857142857142 8.125C 39.003571428571426 8.125 42.49642857142857 36.25 46.57142857142857 36.25C 50.646428571428565 36.25 54.13928571428571 37.5 58.21428571428571 37.5C 62.289285714285704 37.5 65.78214285714284 27.5 69.85714285714285 27.5C 73.93214285714285 27.5 77.425 12.5 81.5 12.5C 85.575 12.5 89.06785714285714 12.5 93.14285714285714 12.5C 97.21785714285714 12.5 100.71071428571427 31.25 104.78571428571428 31.25C 108.86071428571428 31.25 112.35357142857141 18.75 116.42857142857142 18.75C 120.50357142857142 18.75 123.99642857142855 43.125 128.07142857142856 43.125C 132.14642857142854 43.125 135.6392857142857 42.5 139.7142857142857 42.5C 143.7892857142857 42.5 147.28214285714284 48.125 151.35714285714286 48.125C 155.43214285714285 48.125 158.925 45 163 45" pathFrom="M -1 50L -1 50L 11.642857142857142 50L 23.285714285714285 50L 34.92857142857142 50L 46.57142857142857 50L 58.21428571428571 50L 69.85714285714285 50L 81.5 50L 93.14285714285714 50L 104.78571428571428 50L 116.42857142857142 50L 128.07142857142856 50L 139.7142857142857 50L 151.35714285714286 50L 163 50"></path><g id="SvgjsG6769" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle6805" r="0" cx="0" cy="0" class="apexcharts-marker wyup6cjqp no-pointer-events" stroke="#ffffff" fill="#5156be" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6770" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6800" x1="0" y1="0" x2="163" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6801" x1="0" y1="0" x2="163" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6802" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6803" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6804" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect6763" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG6789" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6760" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 86, 190);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 184px; height: 59px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+
                                $2.8k</span>
                            <span class="ms-1 text-muted font-size-13">Since
                                last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block
                                    text-truncate">Profit Ration</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="12.57">12.57</span>%
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart4" data-colors="[&quot; #5156be&quot;]" class="apex-charts mb-2" style="min-height: 50px;"><div id="apexchartsmyxok9wd" class="apexcharts-canvas apexchartsmyxok9wd apexcharts-theme-light" style="width: 163px; height: 50px;"><svg id="SvgjsSvg6807" width="163" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6809" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6808"><clipPath id="gridRectMaskmyxok9wd"><rect id="SvgjsRect6815" width="169" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskmyxok9wd"><rect id="SvgjsRect6816" width="167" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine6814" x1="0" y1="0" x2="0" y2="50" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="50" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG6822" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6823" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG6840" class="apexcharts-grid"><g id="SvgjsG6841" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6843" x1="0" y1="0" x2="163" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6844" x1="0" y1="12.5" x2="163" y2="12.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6845" x1="0" y1="25" x2="163" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6846" x1="0" y1="37.5" x2="163" y2="37.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine6847" x1="0" y1="50" x2="163" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG6842" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6849" x1="0" y1="50" x2="163" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine6848" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG6817" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG6818" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6821" d="M 0 42.5C 4.074999999999999 42.5 7.567857142857143 41.25 11.642857142857142 41.25C 15.717857142857142 41.25 19.210714285714285 48.75 23.285714285714285 48.75C 27.360714285714284 48.75 30.853571428571424 20.625 34.92857142857142 20.625C 39.003571428571426 20.625 42.49642857142857 23.75 46.57142857142857 23.75C 50.646428571428565 23.75 54.13928571428571 40.625 58.21428571428571 40.625C 62.289285714285704 40.625 65.78214285714284 20.625 69.85714285714285 20.625C 73.93214285714285 20.625 77.425 3.125 81.5 3.125C 85.575 3.125 89.06785714285714 9.375 93.14285714285714 9.375C 97.21785714285714 9.375 100.71071428571427 38.125 104.78571428571428 38.125C 108.86071428571428 38.125 112.35357142857141 41.25 116.42857142857142 41.25C 120.50357142857142 41.25 123.99642857142855 48.75 128.07142857142856 48.75C 132.14642857142854 48.75 135.6392857142857 20.625 139.7142857142857 20.625C 143.7892857142857 20.625 147.28214285714284 23.75 151.35714285714286 23.75C 155.43214285714285 23.75 158.925 40.625 163 40.625" fill="none" fill-opacity="1" stroke="rgba(81,86,190,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskmyxok9wd)" pathTo="M 0 42.5C 4.074999999999999 42.5 7.567857142857143 41.25 11.642857142857142 41.25C 15.717857142857142 41.25 19.210714285714285 48.75 23.285714285714285 48.75C 27.360714285714284 48.75 30.853571428571424 20.625 34.92857142857142 20.625C 39.003571428571426 20.625 42.49642857142857 23.75 46.57142857142857 23.75C 50.646428571428565 23.75 54.13928571428571 40.625 58.21428571428571 40.625C 62.289285714285704 40.625 65.78214285714284 20.625 69.85714285714285 20.625C 73.93214285714285 20.625 77.425 3.125 81.5 3.125C 85.575 3.125 89.06785714285714 9.375 93.14285714285714 9.375C 97.21785714285714 9.375 100.71071428571427 38.125 104.78571428571428 38.125C 108.86071428571428 38.125 112.35357142857141 41.25 116.42857142857142 41.25C 120.50357142857142 41.25 123.99642857142855 48.75 128.07142857142856 48.75C 132.14642857142854 48.75 135.6392857142857 20.625 139.7142857142857 20.625C 143.7892857142857 20.625 147.28214285714284 23.75 151.35714285714286 23.75C 155.43214285714285 23.75 158.925 40.625 163 40.625" pathFrom="M -1 50L -1 50L 11.642857142857142 50L 23.285714285714285 50L 34.92857142857142 50L 46.57142857142857 50L 58.21428571428571 50L 69.85714285714285 50L 81.5 50L 93.14285714285714 50L 104.78571428571428 50L 116.42857142857142 50L 128.07142857142856 50L 139.7142857142857 50L 151.35714285714286 50L 163 50"></path><g id="SvgjsG6819" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle6855" r="0" cx="0" cy="0" class="apexcharts-marker w2epsey6p no-pointer-events" stroke="#ffffff" fill="#5156be" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6820" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6850" x1="0" y1="0" x2="163" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6851" x1="0" y1="0" x2="163" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6852" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6853" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6854" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect6813" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG6839" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6810" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 86, 190);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 184px; height: 59px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+2.95%</span>
                            <span class="ms-1 text-muted font-size-13">Since
                                last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row-->

        <div class="row">
            <div class="col-xl-5">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Wallet Balance</h5>
                            <div class="ms-auto">
                                <div>
                                    <button type="button" class="btn
                                        btn-soft-secondary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn
                                        btn-soft-primary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn
                                        btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn
                                        btn-soft-secondary btn-sm active">
                                        1Y
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-sm">
                                <div id="wallet-balance" data-colors="[&quot;#777aca&quot; ,&quot; #5156be&quot; ,&quot; #a8aada&quot; ]" class="apex-charts" style="min-height: 209.8px;"><div id="apexchartsls6o99yb" class="apexcharts-canvas apexchartsls6o99yb apexcharts-theme-light" style="width: 227px; height: 209.8px;"><svg id="SvgjsSvg6856" width="227" height="209.79999999999998" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6858" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs6857"><clipPath id="gridRectMaskls6o99yb"><rect id="SvgjsRect6860" width="207" height="225" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskls6o99yb"><rect id="SvgjsRect6861" width="207" height="229" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter6869" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood6870" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood6870Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite6871" in="SvgjsFeFlood6870Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite6871Out"></feComposite><feOffset id="SvgjsFeOffset6872" dx="1" dy="1" result="SvgjsFeOffset6872Out" in="SvgjsFeComposite6871Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur6873" stdDeviation="1 " result="SvgjsFeGaussianBlur6873Out" in="SvgjsFeOffset6872Out"></feGaussianBlur><feMerge id="SvgjsFeMerge6874" result="SvgjsFeMerge6874Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode6875" in="SvgjsFeGaussianBlur6873Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode6876" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend6877" in="SourceGraphic" in2="SvgjsFeMerge6874Out" mode="normal" result="SvgjsFeBlend6877Out"></feBlend></filter><filter id="SvgjsFilter6882" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood6883" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood6883Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite6884" in="SvgjsFeFlood6883Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite6884Out"></feComposite><feOffset id="SvgjsFeOffset6885" dx="1" dy="1" result="SvgjsFeOffset6885Out" in="SvgjsFeComposite6884Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur6886" stdDeviation="1 " result="SvgjsFeGaussianBlur6886Out" in="SvgjsFeOffset6885Out"></feGaussianBlur><feMerge id="SvgjsFeMerge6887" result="SvgjsFeMerge6887Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode6888" in="SvgjsFeGaussianBlur6886Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode6889" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend6890" in="SourceGraphic" in2="SvgjsFeMerge6887Out" mode="normal" result="SvgjsFeBlend6890Out"></feBlend></filter><filter id="SvgjsFilter6895" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood6896" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood6896Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite6897" in="SvgjsFeFlood6896Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite6897Out"></feComposite><feOffset id="SvgjsFeOffset6898" dx="1" dy="1" result="SvgjsFeOffset6898Out" in="SvgjsFeComposite6897Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur6899" stdDeviation="1 " result="SvgjsFeGaussianBlur6899Out" in="SvgjsFeOffset6898Out"></feGaussianBlur><feMerge id="SvgjsFeMerge6900" result="SvgjsFeMerge6900Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode6901" in="SvgjsFeGaussianBlur6899Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode6902" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend6903" in="SourceGraphic" in2="SvgjsFeMerge6900Out" mode="normal" result="SvgjsFeBlend6903Out"></feBlend></filter></defs><g id="SvgjsG6862" class="apexcharts-pie"><g id="SvgjsG6863" transform="translate(0, 0) scale(1)"><g id="SvgjsG6864" class="apexcharts-slices"><g id="SvgjsG6865" class="apexcharts-series apexcharts-pie-series" seriesName="Ethereum" rel="1" data:realIndex="0"><path id="SvgjsPath6866" d="M 101.5 6.475609756097555 A 95.02439024390245 95.02439024390245 0 0 1 193.28651266395633 126.09412194437613 L 101.5 101.5 L 101.5 6.475609756097555" fill="rgba(119,122,202,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-0" index="0" j="0" data:angle="105" data:startAngle="0" data:strokeWidth="0" data:value="35" data:pathOrig="M 101.5 6.475609756097555 A 95.02439024390245 95.02439024390245 0 0 1 193.28651266395633 126.09412194437613 L 101.5 101.5 L 101.5 6.475609756097555"></path></g><g id="SvgjsG6878" class="apexcharts-series apexcharts-pie-series" seriesName="Bitcoin" rel="2" data:realIndex="1"><path id="SvgjsPath6879" d="M 193.28651266395633 126.09412194437613 A 95.02439024390245 95.02439024390245 0 1 1 34.307609280419754 34.30760928041978 L 101.5 101.5 L 193.28651266395633 126.09412194437613" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-1" index="0" j="1" data:angle="210" data:startAngle="105" data:strokeWidth="0" data:value="70" data:pathOrig="M 193.28651266395633 126.09412194437613 A 95.02439024390245 95.02439024390245 0 1 1 34.307609280419754 34.30760928041978 L 101.5 101.5 L 193.28651266395633 126.09412194437613"></path></g><g id="SvgjsG6891" class="apexcharts-series apexcharts-pie-series" seriesName="Litecoin" rel="3" data:realIndex="2"><path id="SvgjsPath6892" d="M 34.307609280419754 34.30760928041978 A 95.02439024390245 95.02439024390245 0 0 1 101.48341511528962 6.475611203401769 L 101.5 101.5 L 34.307609280419754 34.30760928041978" fill="rgba(168,170,218,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-2" index="0" j="2" data:angle="45" data:startAngle="315" data:strokeWidth="0" data:value="15" data:pathOrig="M 34.307609280419754 34.30760928041978 A 95.02439024390245 95.02439024390245 0 0 1 101.48341511528962 6.475611203401769 L 101.5 101.5 L 34.307609280419754 34.30760928041978"></path></g><g id="SvgjsG6867" class="apexcharts-datalabels"><text id="SvgjsText6868" font-family="Helvetica, Arial, sans-serif" x="161.8103339273103" y="55.22225312355169" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter6869)" style="font-family: Helvetica, Arial, sans-serif;">29.2%</text></g><g id="SvgjsG6880" class="apexcharts-datalabels"><text id="SvgjsText6881" font-family="Helvetica, Arial, sans-serif" x="63.49024390243903" y="167.33482874427656" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter6882)" style="font-family: Helvetica, Arial, sans-serif;">58.3%</text></g><g id="SvgjsG6893" class="apexcharts-datalabels"><text id="SvgjsText6894" font-family="Helvetica, Arial, sans-serif" x="72.40859214645096" y="31.267128611434657" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter6895)" style="font-family: Helvetica, Arial, sans-serif;">12.5%</text></g></g></g></g><line id="SvgjsLine6904" x1="0" y1="0" x2="203" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6905" x1="0" y1="0" x2="203" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG6859" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(119, 122, 202);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 86, 190);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(168, 170, 218);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 320px; height: 211px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="col-sm align-self-center">
                                <div class="mt-4 mt-sm-0">
                                    <div>
                                        <p class="mb-2"><i class="mdi mdi-circle
                                                align-middle font-size-10 me-2
                                                text-success"></i> Bitcoin</p>
                                        <h6>0.4412 BTC = <span class="text-muted
                                                font-size-14 fw-normal">$
                                                4025.32</span></h6>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <p class="mb-2"><i class="mdi mdi-circle
                                                align-middle font-size-10 me-2
                                                text-primary"></i> Ethereum</p>
                                        <h6>4.5701 ETH = <span class="text-muted
                                                font-size-14 fw-normal">$
                                                1123.64</span></h6>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <p class="mb-2"><i class="mdi mdi-circle
                                                align-middle font-size-10 me-2
                                                text-info"></i> Litecoin</p>
                                        <h6>35.3811 LTC = <span class="text-muted font-size-14
                                                fw-normal">$ 2263.09</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-xl-8">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center
                                    mb-4">
                                    <h5 class="card-title me-2">Invested
                                        Overview</h5>
                                    <div class="ms-auto">
                                        <select class="form-select
                                            form-select-sm">
                                            <option value="MAY" selected="">May</option>
                                            <option value="AP">April</option>
                                            <option value="MA">March</option>
                                            <option value="FE">February</option>
                                            <option value="JA">January</option>
                                            <option value="DE">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-sm">
                                        <div id="invested-overview" data-colors="[&quot; #5156be&quot; ,&quot; #34c38f&quot;]" class="apex-charts" style="min-height: 189.478px;"><div id="apexchartsztxyctdi" class="apexcharts-canvas apexchartsztxyctdi apexcharts-theme-light" style="width: 277px; height: 189.478px;"><svg id="SvgjsSvg6906" width="277" height="189.47777777777776" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, -10)" style="background: transparent;"><g id="SvgjsG6908" class="apexcharts-inner apexcharts-graphical" transform="translate(16.5, 0)"><defs id="SvgjsDefs6907"><clipPath id="gridRectMaskztxyctdi"><rect id="SvgjsRect6910" width="252" height="270" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskztxyctdi"><rect id="SvgjsRect6911" width="250" height="272" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient6916" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop6917" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0.2"></stop><stop id="SvgjsStop6918" stop-opacity="1" stop-color="rgba(52,195,143,1)" offset="0.6"></stop><stop id="SvgjsStop6919" stop-opacity="1" stop-color="rgba(52,195,143,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient6926" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop6927" stop-opacity="1" stop-color="rgba(81,86,190,1)" offset="0.2"></stop><stop id="SvgjsStop6928" stop-opacity="1" stop-color="rgba(52,195,143,1)" offset="0.6"></stop><stop id="SvgjsStop6929" stop-opacity="1" stop-color="rgba(52,195,143,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG6912" class="apexcharts-radialbar"><g id="SvgjsG6913"><g id="SvgjsG6914" class="apexcharts-tracks"><g id="SvgjsG6915" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 66.50422231997536 170.40558621438228 A 73.75000000000001 73.75000000000001 0 1 1 179.49577768002464 170.40558621438228" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="22.795000000000005" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 66.50422231997536 170.40558621438228 A 73.75000000000001 73.75000000000001 0 1 1 179.49577768002464 170.40558621438228"></path></g></g><g id="SvgjsG6921"><g id="SvgjsG6925" class="apexcharts-series apexcharts-radial-series" seriesName="SeriesxA" rel="1" data:realIndex="0"><path id="SvgjsPath6930" d="M 66.50422231997536 170.40558621438228 A 73.75000000000001 73.75000000000001 0 1 1 195.1383855541182 107.66651280219025" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient6926)" stroke-opacity="1" stroke-linecap="butt" stroke-width="23.500000000000004" stroke-dasharray="4" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="208" data:value="80" index="0" j="0" data:pathOrig="M 66.50422231997536 170.40558621438228 A 73.75000000000001 73.75000000000001 0 1 1 195.1383855541182 107.66651280219025"></path></g><circle id="SvgjsCircle6922" r="57.35250000000001" cx="123" cy="123" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG6923" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText6924" font-family="Helvetica, Arial, sans-serif" x="123" y="133" text-anchor="middle" dominant-baseline="auto" font-size="18px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">80%</text></g></g></g></g><line id="SvgjsLine6931" x1="0" y1="0" x2="246" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6932" x1="0" y1="0" x2="246" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG6909" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 298px; height: 190px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="col-sm align-self-center">
                                        <div class="mt-4 mt-sm-0">
                                            <p class="mb-1">Invested Amount</p>
                                            <h4>$ 6134.39</h4>

                                            <p class="text-muted mb-4"> +
                                                0.0012.23 ( 0.2 % ) <i class="mdi mdi-arrow-up ms-1
                                                    text-success"></i></p>

                                            <div class="row g-0">
                                                <div class="col-6">
                                                    <div>
                                                        <p class="mb-2
                                                            text-muted
                                                            text-uppercase
                                                            font-size-11">Income</p>
                                                        <h5 class="fw-medium">$
                                                            2632.46</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="mb-2
                                                            text-muted
                                                            text-uppercase
                                                            font-size-11">Expenses</p>
                                                        <h5 class="fw-medium">-$
                                                            924.38</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <a href="#" class="btn
                                                    btn-primary btn-sm">View
                                                    more <i class="mdi
                                                        mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <!-- card -->
                        <div class="card bg-primary text-white shadow-primary
                            card-h-100">
                            <!-- card body -->
                            <div class="card-body p-0">
                                <div id="carouselExampleCaptions" class="carousel slide text-center
                                    widget-carousel" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-bitcoin
                                                    widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title
                                                        rounded-circle
                                                        bg-soft-light text-white
                                                        font-size-24">
                                                        <i class="mdi
                                                            mdi-currency-btc"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base
                                                    fw-normal text-white"><b>Bitcoin</b>
                                                    News</h4>
                                                <p class="text-white-50
                                                    font-size-13"> Bitcoin
                                                    prices fell sharply amid the
                                                    global sell-off in
                                                    equities. Negative news over
                                                    the past week has dampened
                                                    sentiment for bitcoin. </p>
                                                <button type="button" class="btn
                                                    btn-light btn-sm">View
                                                    details <i class="mdi
                                                        mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                        <div class="carousel-item">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-ethereum
                                                    widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title
                                                        rounded-circle
                                                        bg-soft-light text-white
                                                        font-size-24">
                                                        <i class="mdi
                                                            mdi-ethereum"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base
                                                    fw-normal text-white"><b>ETH</b>
                                                    News</h4>
                                                <p class="text-white-50
                                                    font-size-13"> Bitcoin
                                                    prices fell sharply amid the
                                                    global sell-off in
                                                    equities. Negative news over
                                                    the past week has dampened
                                                    sentiment for bitcoin. </p>
                                                <button type="button" class="btn
                                                    btn-light btn-sm">View
                                                    details <i class="mdi
                                                        mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                        <div class="carousel-item">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-litecoin
                                                    widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title
                                                        rounded-circle
                                                        bg-soft-light text-white
                                                        font-size-24">
                                                        <i class="mdi
                                                            mdi-litecoin"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base
                                                    fw-normal text-white"><b>Litecoin</b>
                                                    News</h4>
                                                <p class="text-white-50
                                                    font-size-13"> Bitcoin
                                                    prices fell sharply amid the
                                                    global sell-off in
                                                    equities. Negative news over
                                                    the past week has dampened
                                                    sentiment for bitcoin. </p>
                                                <button type="button" class="btn
                                                    btn-light btn-sm">View
                                                    details <i class="mdi
                                                        mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                    </div>
                                    <!-- end carousel-inner -->

                                    <div class="carousel-indicators
                                        carousel-indicators-rounded">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <!-- end carousel-indicators -->
                                </div>
                                <!-- end carousel -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end col -->
        </div> <!-- end row-->

        <div class="row">
            <div class="col-xl-8">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Market Overview</h5>
                            <div class="ms-auto">
                                <div>
                                    <button type="button" class="btn
                                        btn-soft-primary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn
                                        btn-soft-secondary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn
                                        btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn
                                        btn-soft-secondary btn-sm active">
                                        1Y
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div style="position: relative;">
                                    <div id="market-overview" data-colors="[&quot;#5156be&quot; ,&quot; #34c38f&quot; ]" class="apex-charts" style="min-height: 415px;"><div id="apexchartseyutjajnh" class="apexcharts-canvas apexchartseyutjajnh apexcharts-theme-light" style="width: 678px; height: 400px;"><svg id="SvgjsSvg6933" width="678" height="400" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6935" class="apexcharts-inner apexcharts-graphical" transform="translate(54.796875, 30)"><defs id="SvgjsDefs6934"><linearGradient id="SvgjsLinearGradient6939" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop6940" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop6941" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop6942" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskeyutjajnh"><rect id="SvgjsRect6944" width="617.203125" height="330.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskeyutjajnh"><rect id="SvgjsRect6945" width="617.203125" height="334.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect6943" width="10.220052083333332" height="330.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient6939)" class="apexcharts-xcrosshairs" y2="330.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG6975" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6976" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText6978" font-family="Helvetica, Arial, sans-serif" x="25.550130208333332" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan6979">Jan</tspan><title>Jan</title></text><text id="SvgjsText6981" font-family="Helvetica, Arial, sans-serif" x="76.650390625" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan6982">Feb</tspan><title>Feb</title></text><text id="SvgjsText6984" font-family="Helvetica, Arial, sans-serif" x="127.75065104166667" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan6985">Mar</tspan><title>Mar</title></text><text id="SvgjsText6987" font-family="Helvetica, Arial, sans-serif" x="178.85091145833331" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan6988">Apr</tspan><title>Apr</title></text><text id="SvgjsText6990" font-family="Helvetica, Arial, sans-serif" x="229.95117187499997" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan6991">May</tspan><title>May</title></text><text id="SvgjsText6993" font-family="Helvetica, Arial, sans-serif" x="281.0514322916667" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan6994">Jun</tspan><title>Jun</title></text><text id="SvgjsText6996" font-family="Helvetica, Arial, sans-serif" x="332.15169270833337" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan6997">Jul</tspan><title>Jul</title></text><text id="SvgjsText6999" font-family="Helvetica, Arial, sans-serif" x="383.25195312500006" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7000">Aug</tspan><title>Aug</title></text><text id="SvgjsText7002" font-family="Helvetica, Arial, sans-serif" x="434.35221354166674" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7003">Sep</tspan><title>Sep</title></text><text id="SvgjsText7005" font-family="Helvetica, Arial, sans-serif" x="485.4524739583334" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7006">Oct</tspan><title>Oct</title></text><text id="SvgjsText7008" font-family="Helvetica, Arial, sans-serif" x="536.552734375" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7009">Nov</tspan><title>Nov</title></text><text id="SvgjsText7011" font-family="Helvetica, Arial, sans-serif" x="587.6529947916666" y="359.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7012">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine7013" x1="0" y1="331.73" x2="613.203125" y2="331.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG7030" class="apexcharts-grid"><g id="SvgjsG7031" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine7046" x1="0" y1="0" x2="613.203125" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine7047" x1="0" y1="55.12166666666667" x2="613.203125" y2="55.12166666666667" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine7048" x1="0" y1="110.24333333333334" x2="613.203125" y2="110.24333333333334" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine7049" x1="0" y1="165.365" x2="613.203125" y2="165.365" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine7050" x1="0" y1="220.48666666666668" x2="613.203125" y2="220.48666666666668" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine7051" x1="0" y1="275.60833333333335" x2="613.203125" y2="275.60833333333335" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine7052" x1="0" y1="330.73" x2="613.203125" y2="330.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG7032" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine7033" x1="0" y1="331.73" x2="0" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7034" x1="51.100260416666664" y1="331.73" x2="51.100260416666664" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7035" x1="102.20052083333333" y1="331.73" x2="102.20052083333333" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7036" x1="153.30078125" y1="331.73" x2="153.30078125" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7037" x1="204.40104166666666" y1="331.73" x2="204.40104166666666" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7038" x1="255.50130208333331" y1="331.73" x2="255.50130208333331" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7039" x1="306.6015625" y1="331.73" x2="306.6015625" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7040" x1="357.7018229166667" y1="331.73" x2="357.7018229166667" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7041" x1="408.80208333333337" y1="331.73" x2="408.80208333333337" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7042" x1="459.90234375000006" y1="331.73" x2="459.90234375000006" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7043" x1="511.00260416666674" y1="331.73" x2="511.00260416666674" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7044" x1="562.1028645833334" y1="331.73" x2="562.1028645833334" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7045" x1="613.203125" y1="331.73" x2="613.203125" y2="337.73" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7054" x1="0" y1="330.73" x2="613.203125" y2="330.73" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine7053" x1="0" y1="1" x2="0" y2="330.73" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG6946" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG6947" class="apexcharts-series" seriesName="Profit" rel="1" data:realIndex="0"><path id="SvgjsPath6949" d="M 20.440104166666664 165.365L 20.440104166666664 89.11336111111113Q 20.440104166666664 89.11336111111113 20.440104166666664 89.11336111111113L 30.660156249999996 89.11336111111113Q 30.660156249999996 89.11336111111113 30.660156249999996 89.11336111111113L 30.660156249999996 89.11336111111113L 30.660156249999996 165.365L 30.660156249999996 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 20.440104166666664 165.365L 20.440104166666664 89.11336111111113Q 20.440104166666664 89.11336111111113 20.440104166666664 89.11336111111113L 30.660156249999996 89.11336111111113Q 30.660156249999996 89.11336111111113 30.660156249999996 89.11336111111113L 30.660156249999996 89.11336111111113L 30.660156249999996 165.365L 30.660156249999996 165.365z" pathFrom="M 20.440104166666664 165.365L 20.440104166666664 165.365L 30.660156249999996 165.365L 30.660156249999996 165.365L 30.660156249999996 165.365L 30.660156249999996 165.365L 30.660156249999996 165.365L 20.440104166666664 165.365" cy="89.11336111111113" cx="71.54036458333333" j="0" val="12.45" barHeight="76.25163888888888" barWidth="10.220052083333332"></path><path id="SvgjsPath6950" d="M 71.54036458333333 165.365L 71.54036458333333 66.14600000000002Q 71.54036458333333 66.14600000000002 71.54036458333333 66.14600000000002L 81.76041666666666 66.14600000000002Q 81.76041666666666 66.14600000000002 81.76041666666666 66.14600000000002L 81.76041666666666 66.14600000000002L 81.76041666666666 165.365L 81.76041666666666 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 71.54036458333333 165.365L 71.54036458333333 66.14600000000002Q 71.54036458333333 66.14600000000002 71.54036458333333 66.14600000000002L 81.76041666666666 66.14600000000002Q 81.76041666666666 66.14600000000002 81.76041666666666 66.14600000000002L 81.76041666666666 66.14600000000002L 81.76041666666666 165.365L 81.76041666666666 165.365z" pathFrom="M 71.54036458333333 165.365L 71.54036458333333 165.365L 81.76041666666666 165.365L 81.76041666666666 165.365L 81.76041666666666 165.365L 81.76041666666666 165.365L 81.76041666666666 165.365L 71.54036458333333 165.365" cy="66.14600000000002" cx="122.640625" j="1" val="16.2" barHeight="99.219" barWidth="10.220052083333332"></path><path id="SvgjsPath6951" d="M 122.640625 165.365L 122.640625 110.8557962962963Q 122.640625 110.8557962962963 122.640625 110.8557962962963L 132.86067708333334 110.8557962962963Q 132.86067708333334 110.8557962962963 132.86067708333334 110.8557962962963L 132.86067708333334 110.8557962962963L 132.86067708333334 165.365L 132.86067708333334 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 122.640625 165.365L 122.640625 110.8557962962963Q 122.640625 110.8557962962963 122.640625 110.8557962962963L 132.86067708333334 110.8557962962963Q 132.86067708333334 110.8557962962963 132.86067708333334 110.8557962962963L 132.86067708333334 110.8557962962963L 132.86067708333334 165.365L 132.86067708333334 165.365z" pathFrom="M 122.640625 165.365L 122.640625 165.365L 132.86067708333334 165.365L 132.86067708333334 165.365L 132.86067708333334 165.365L 132.86067708333334 165.365L 132.86067708333334 165.365L 122.640625 165.365" cy="110.8557962962963" cx="173.74088541666666" j="2" val="8.9" barHeight="54.509203703703704" barWidth="10.220052083333332"></path><path id="SvgjsPath6952" d="M 173.74088541666666 165.365L 173.74088541666666 95.42172962962964Q 173.74088541666666 95.42172962962964 173.74088541666666 95.42172962962964L 183.9609375 95.42172962962964Q 183.9609375 95.42172962962964 183.9609375 95.42172962962964L 183.9609375 95.42172962962964L 183.9609375 165.365L 183.9609375 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 173.74088541666666 165.365L 173.74088541666666 95.42172962962964Q 173.74088541666666 95.42172962962964 173.74088541666666 95.42172962962964L 183.9609375 95.42172962962964Q 183.9609375 95.42172962962964 183.9609375 95.42172962962964L 183.9609375 95.42172962962964L 183.9609375 165.365L 183.9609375 165.365z" pathFrom="M 173.74088541666666 165.365L 173.74088541666666 165.365L 183.9609375 165.365L 183.9609375 165.365L 183.9609375 165.365L 183.9609375 165.365L 183.9609375 165.365L 173.74088541666666 165.365" cy="95.42172962962964" cx="224.84114583333331" j="3" val="11.42" barHeight="69.94327037037037" barWidth="10.220052083333332"></path><path id="SvgjsPath6953" d="M 224.84114583333331 165.365L 224.84114583333331 88.19466666666668Q 224.84114583333331 88.19466666666668 224.84114583333331 88.19466666666668L 235.06119791666666 88.19466666666668Q 235.06119791666666 88.19466666666668 235.06119791666666 88.19466666666668L 235.06119791666666 88.19466666666668L 235.06119791666666 165.365L 235.06119791666666 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 224.84114583333331 165.365L 224.84114583333331 88.19466666666668Q 224.84114583333331 88.19466666666668 224.84114583333331 88.19466666666668L 235.06119791666666 88.19466666666668Q 235.06119791666666 88.19466666666668 235.06119791666666 88.19466666666668L 235.06119791666666 88.19466666666668L 235.06119791666666 165.365L 235.06119791666666 165.365z" pathFrom="M 224.84114583333331 165.365L 224.84114583333331 165.365L 235.06119791666666 165.365L 235.06119791666666 165.365L 235.06119791666666 165.365L 235.06119791666666 165.365L 235.06119791666666 165.365L 224.84114583333331 165.365" cy="88.19466666666668" cx="275.94140625" j="4" val="12.6" barHeight="77.17033333333333" barWidth="10.220052083333332"></path><path id="SvgjsPath6954" d="M 275.94140625 165.365L 275.94140625 54.509203703703704Q 275.94140625 54.509203703703704 275.94140625 54.509203703703704L 286.1614583333333 54.509203703703704Q 286.1614583333333 54.509203703703704 286.1614583333333 54.509203703703704L 286.1614583333333 54.509203703703704L 286.1614583333333 165.365L 286.1614583333333 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 275.94140625 165.365L 275.94140625 54.509203703703704Q 275.94140625 54.509203703703704 275.94140625 54.509203703703704L 286.1614583333333 54.509203703703704Q 286.1614583333333 54.509203703703704 286.1614583333333 54.509203703703704L 286.1614583333333 54.509203703703704L 286.1614583333333 165.365L 286.1614583333333 165.365z" pathFrom="M 275.94140625 165.365L 275.94140625 165.365L 286.1614583333333 165.365L 286.1614583333333 165.365L 286.1614583333333 165.365L 286.1614583333333 165.365L 286.1614583333333 165.365L 275.94140625 165.365" cy="54.509203703703704" cx="327.0416666666667" j="5" val="18.1" barHeight="110.8557962962963" barWidth="10.220052083333332"></path><path id="SvgjsPath6955" d="M 327.0416666666667 165.365L 327.0416666666667 53.89674074074075Q 327.0416666666667 53.89674074074075 327.0416666666667 53.89674074074075L 337.26171875 53.89674074074075Q 337.26171875 53.89674074074075 337.26171875 53.89674074074075L 337.26171875 53.89674074074075L 337.26171875 165.365L 337.26171875 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 327.0416666666667 165.365L 327.0416666666667 53.89674074074075Q 327.0416666666667 53.89674074074075 327.0416666666667 53.89674074074075L 337.26171875 53.89674074074075Q 337.26171875 53.89674074074075 337.26171875 53.89674074074075L 337.26171875 53.89674074074075L 337.26171875 165.365L 337.26171875 165.365z" pathFrom="M 327.0416666666667 165.365L 327.0416666666667 165.365L 337.26171875 165.365L 337.26171875 165.365L 337.26171875 165.365L 337.26171875 165.365L 337.26171875 165.365L 327.0416666666667 165.365" cy="53.89674074074075" cx="378.14192708333337" j="6" val="18.2" barHeight="111.46825925925926" barWidth="10.220052083333332"></path><path id="SvgjsPath6956" d="M 378.14192708333337 165.365L 378.14192708333337 78.64024444444445Q 378.14192708333337 78.64024444444445 378.14192708333337 78.64024444444445L 388.3619791666667 78.64024444444445Q 388.3619791666667 78.64024444444445 388.3619791666667 78.64024444444445L 388.3619791666667 78.64024444444445L 388.3619791666667 165.365L 388.3619791666667 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 378.14192708333337 165.365L 378.14192708333337 78.64024444444445Q 378.14192708333337 78.64024444444445 378.14192708333337 78.64024444444445L 388.3619791666667 78.64024444444445Q 388.3619791666667 78.64024444444445 388.3619791666667 78.64024444444445L 388.3619791666667 78.64024444444445L 388.3619791666667 165.365L 388.3619791666667 165.365z" pathFrom="M 378.14192708333337 165.365L 378.14192708333337 165.365L 388.3619791666667 165.365L 388.3619791666667 165.365L 388.3619791666667 165.365L 388.3619791666667 165.365L 388.3619791666667 165.365L 378.14192708333337 165.365" cy="78.64024444444445" cx="429.24218750000006" j="7" val="14.16" barHeight="86.72475555555556" barWidth="10.220052083333332"></path><path id="SvgjsPath6957" d="M 429.24218750000006 165.365L 429.24218750000006 97.38161111111113Q 429.24218750000006 97.38161111111113 429.24218750000006 97.38161111111113L 439.46223958333337 97.38161111111113Q 439.46223958333337 97.38161111111113 439.46223958333337 97.38161111111113L 439.46223958333337 97.38161111111113L 439.46223958333337 165.365L 439.46223958333337 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 429.24218750000006 165.365L 429.24218750000006 97.38161111111113Q 429.24218750000006 97.38161111111113 429.24218750000006 97.38161111111113L 439.46223958333337 97.38161111111113Q 439.46223958333337 97.38161111111113 439.46223958333337 97.38161111111113L 439.46223958333337 97.38161111111113L 439.46223958333337 165.365L 439.46223958333337 165.365z" pathFrom="M 429.24218750000006 165.365L 429.24218750000006 165.365L 439.46223958333337 165.365L 439.46223958333337 165.365L 439.46223958333337 165.365L 439.46223958333337 165.365L 439.46223958333337 165.365L 429.24218750000006 165.365" cy="97.38161111111113" cx="480.34244791666674" j="8" val="11.1" barHeight="67.98338888888888" barWidth="10.220052083333332"></path><path id="SvgjsPath6958" d="M 480.34244791666674 165.365L 480.34244791666674 115.81674629629632Q 480.34244791666674 115.81674629629632 480.34244791666674 115.81674629629632L 490.56250000000006 115.81674629629632Q 490.56250000000006 115.81674629629632 490.56250000000006 115.81674629629632L 490.56250000000006 115.81674629629632L 490.56250000000006 165.365L 490.56250000000006 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 480.34244791666674 165.365L 480.34244791666674 115.81674629629632Q 480.34244791666674 115.81674629629632 480.34244791666674 115.81674629629632L 490.56250000000006 115.81674629629632Q 490.56250000000006 115.81674629629632 490.56250000000006 115.81674629629632L 490.56250000000006 115.81674629629632L 490.56250000000006 165.365L 490.56250000000006 165.365z" pathFrom="M 480.34244791666674 165.365L 480.34244791666674 165.365L 490.56250000000006 165.365L 490.56250000000006 165.365L 490.56250000000006 165.365L 490.56250000000006 165.365L 490.56250000000006 165.365L 480.34244791666674 165.365" cy="115.81674629629632" cx="531.4427083333334" j="9" val="8.09" barHeight="49.5482537037037" barWidth="10.220052083333332"></path><path id="SvgjsPath6959" d="M 531.4427083333334 165.365L 531.4427083333334 65.28855185185186Q 531.4427083333334 65.28855185185186 531.4427083333334 65.28855185185186L 541.6627604166667 65.28855185185186Q 541.6627604166667 65.28855185185186 541.6627604166667 65.28855185185186L 541.6627604166667 65.28855185185186L 541.6627604166667 165.365L 541.6627604166667 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 531.4427083333334 165.365L 531.4427083333334 65.28855185185186Q 531.4427083333334 65.28855185185186 531.4427083333334 65.28855185185186L 541.6627604166667 65.28855185185186Q 541.6627604166667 65.28855185185186 541.6627604166667 65.28855185185186L 541.6627604166667 65.28855185185186L 541.6627604166667 165.365L 541.6627604166667 165.365z" pathFrom="M 531.4427083333334 165.365L 531.4427083333334 165.365L 541.6627604166667 165.365L 541.6627604166667 165.365L 541.6627604166667 165.365L 541.6627604166667 165.365L 541.6627604166667 165.365L 531.4427083333334 165.365" cy="65.28855185185186" cx="582.54296875" j="10" val="16.34" barHeight="100.07644814814815" barWidth="10.220052083333332"></path><path id="SvgjsPath6960" d="M 582.54296875 165.365L 582.54296875 86.47977037037037Q 582.54296875 86.47977037037037 582.54296875 86.47977037037037L 592.7630208333334 86.47977037037037Q 592.7630208333334 86.47977037037037 592.7630208333334 86.47977037037037L 592.7630208333334 86.47977037037037L 592.7630208333334 165.365L 592.7630208333334 165.365z" fill="rgba(81,86,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 582.54296875 165.365L 582.54296875 86.47977037037037Q 582.54296875 86.47977037037037 582.54296875 86.47977037037037L 592.7630208333334 86.47977037037037Q 592.7630208333334 86.47977037037037 592.7630208333334 86.47977037037037L 592.7630208333334 86.47977037037037L 592.7630208333334 165.365L 592.7630208333334 165.365z" pathFrom="M 582.54296875 165.365L 582.54296875 165.365L 592.7630208333334 165.365L 592.7630208333334 165.365L 592.7630208333334 165.365L 592.7630208333334 165.365L 592.7630208333334 165.365L 582.54296875 165.365" cy="86.47977037037037" cx="633.6432291666666" j="11" val="12.88" barHeight="78.88522962962963" barWidth="10.220052083333332"></path></g><g id="SvgjsG6961" class="apexcharts-series" seriesName="Loss" rel="2" data:realIndex="1"><path id="SvgjsPath6963" d="M 20.440104166666664 165.365L 20.440104166666664 235.49200925925925Q 20.440104166666664 235.49200925925925 20.440104166666664 235.49200925925925L 30.660156249999996 235.49200925925925Q 30.660156249999996 235.49200925925925 30.660156249999996 235.49200925925925L 30.660156249999996 235.49200925925925L 30.660156249999996 165.365L 30.660156249999996 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 20.440104166666664 165.365L 20.440104166666664 235.49200925925925Q 20.440104166666664 235.49200925925925 20.440104166666664 235.49200925925925L 30.660156249999996 235.49200925925925Q 30.660156249999996 235.49200925925925 30.660156249999996 235.49200925925925L 30.660156249999996 235.49200925925925L 30.660156249999996 165.365L 30.660156249999996 165.365z" pathFrom="M 20.440104166666664 165.365L 20.440104166666664 165.365L 30.660156249999996 165.365L 30.660156249999996 165.365L 30.660156249999996 165.365L 30.660156249999996 165.365L 30.660156249999996 165.365L 20.440104166666664 165.365" cy="235.49200925925925" cx="71.54036458333333" j="0" val="-11.45" barHeight="-70.12700925925925" barWidth="10.220052083333332"></path><path id="SvgjsPath6964" d="M 71.54036458333333 165.365L 71.54036458333333 259.8067888888889Q 71.54036458333333 259.8067888888889 71.54036458333333 259.8067888888889L 81.76041666666666 259.8067888888889Q 81.76041666666666 259.8067888888889 81.76041666666666 259.8067888888889L 81.76041666666666 259.8067888888889L 81.76041666666666 165.365L 81.76041666666666 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 71.54036458333333 165.365L 71.54036458333333 259.8067888888889Q 71.54036458333333 259.8067888888889 71.54036458333333 259.8067888888889L 81.76041666666666 259.8067888888889Q 81.76041666666666 259.8067888888889 81.76041666666666 259.8067888888889L 81.76041666666666 259.8067888888889L 81.76041666666666 165.365L 81.76041666666666 165.365z" pathFrom="M 71.54036458333333 165.365L 71.54036458333333 165.365L 81.76041666666666 165.365L 81.76041666666666 165.365L 81.76041666666666 165.365L 81.76041666666666 165.365L 81.76041666666666 165.365L 71.54036458333333 165.365" cy="259.8067888888889" cx="122.640625" j="1" val="-15.42" barHeight="-94.44178888888888" barWidth="10.220052083333332"></path><path id="SvgjsPath6965" d="M 122.640625 165.365L 122.640625 213.74957407407408Q 122.640625 213.74957407407408 122.640625 213.74957407407408L 132.86067708333334 213.74957407407408Q 132.86067708333334 213.74957407407408 132.86067708333334 213.74957407407408L 132.86067708333334 213.74957407407408L 132.86067708333334 165.365L 132.86067708333334 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 122.640625 165.365L 122.640625 213.74957407407408Q 122.640625 213.74957407407408 122.640625 213.74957407407408L 132.86067708333334 213.74957407407408Q 132.86067708333334 213.74957407407408 132.86067708333334 213.74957407407408L 132.86067708333334 213.74957407407408L 132.86067708333334 165.365L 132.86067708333334 165.365z" pathFrom="M 122.640625 165.365L 122.640625 165.365L 132.86067708333334 165.365L 132.86067708333334 165.365L 132.86067708333334 165.365L 132.86067708333334 165.365L 132.86067708333334 165.365L 122.640625 165.365" cy="213.74957407407408" cx="173.74088541666666" j="2" val="-7.9" barHeight="-48.384574074074074" barWidth="10.220052083333332"></path><path id="SvgjsPath6966" d="M 173.74088541666666 165.365L 173.74088541666666 241.43290000000002Q 173.74088541666666 241.43290000000002 173.74088541666666 241.43290000000002L 183.9609375 241.43290000000002Q 183.9609375 241.43290000000002 183.9609375 241.43290000000002L 183.9609375 241.43290000000002L 183.9609375 165.365L 183.9609375 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 173.74088541666666 165.365L 173.74088541666666 241.43290000000002Q 173.74088541666666 241.43290000000002 173.74088541666666 241.43290000000002L 183.9609375 241.43290000000002Q 183.9609375 241.43290000000002 183.9609375 241.43290000000002L 183.9609375 241.43290000000002L 183.9609375 165.365L 183.9609375 165.365z" pathFrom="M 173.74088541666666 165.365L 173.74088541666666 165.365L 183.9609375 165.365L 183.9609375 165.365L 183.9609375 165.365L 183.9609375 165.365L 183.9609375 165.365L 173.74088541666666 165.365" cy="241.43290000000002" cx="224.84114583333331" j="3" val="-12.42" barHeight="-76.0679" barWidth="10.220052083333332"></path><path id="SvgjsPath6967" d="M 224.84114583333331 165.365L 224.84114583333331 242.53533333333334Q 224.84114583333331 242.53533333333334 224.84114583333331 242.53533333333334L 235.06119791666666 242.53533333333334Q 235.06119791666666 242.53533333333334 235.06119791666666 242.53533333333334L 235.06119791666666 242.53533333333334L 235.06119791666666 165.365L 235.06119791666666 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 224.84114583333331 165.365L 224.84114583333331 242.53533333333334Q 224.84114583333331 242.53533333333334 224.84114583333331 242.53533333333334L 235.06119791666666 242.53533333333334Q 235.06119791666666 242.53533333333334 235.06119791666666 242.53533333333334L 235.06119791666666 242.53533333333334L 235.06119791666666 165.365L 235.06119791666666 165.365z" pathFrom="M 224.84114583333331 165.365L 224.84114583333331 165.365L 235.06119791666666 165.365L 235.06119791666666 165.365L 235.06119791666666 165.365L 235.06119791666666 165.365L 235.06119791666666 165.365L 224.84114583333331 165.365" cy="242.53533333333334" cx="275.94140625" j="4" val="-12.6" barHeight="-77.17033333333333" barWidth="10.220052083333332"></path><path id="SvgjsPath6968" d="M 275.94140625 165.365L 275.94140625 276.2207962962963Q 275.94140625 276.2207962962963 275.94140625 276.2207962962963L 286.1614583333333 276.2207962962963Q 286.1614583333333 276.2207962962963 286.1614583333333 276.2207962962963L 286.1614583333333 276.2207962962963L 286.1614583333333 165.365L 286.1614583333333 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 275.94140625 165.365L 275.94140625 276.2207962962963Q 275.94140625 276.2207962962963 275.94140625 276.2207962962963L 286.1614583333333 276.2207962962963Q 286.1614583333333 276.2207962962963 286.1614583333333 276.2207962962963L 286.1614583333333 276.2207962962963L 286.1614583333333 165.365L 286.1614583333333 165.365z" pathFrom="M 275.94140625 165.365L 275.94140625 165.365L 286.1614583333333 165.365L 286.1614583333333 165.365L 286.1614583333333 165.365L 286.1614583333333 165.365L 286.1614583333333 165.365L 275.94140625 165.365" cy="276.2207962962963" cx="327.0416666666667" j="5" val="-18.1" barHeight="-110.8557962962963" barWidth="10.220052083333332"></path><path id="SvgjsPath6969" d="M 327.0416666666667 165.365L 327.0416666666667 276.83325925925925Q 327.0416666666667 276.83325925925925 327.0416666666667 276.83325925925925L 337.26171875 276.83325925925925Q 337.26171875 276.83325925925925 337.26171875 276.83325925925925L 337.26171875 276.83325925925925L 337.26171875 165.365L 337.26171875 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 327.0416666666667 165.365L 327.0416666666667 276.83325925925925Q 327.0416666666667 276.83325925925925 327.0416666666667 276.83325925925925L 337.26171875 276.83325925925925Q 337.26171875 276.83325925925925 337.26171875 276.83325925925925L 337.26171875 276.83325925925925L 337.26171875 165.365L 337.26171875 165.365z" pathFrom="M 327.0416666666667 165.365L 327.0416666666667 165.365L 337.26171875 165.365L 337.26171875 165.365L 337.26171875 165.365L 337.26171875 165.365L 337.26171875 165.365L 327.0416666666667 165.365" cy="276.83325925925925" cx="378.14192708333337" j="6" val="-18.2" barHeight="-111.46825925925926" barWidth="10.220052083333332"></path><path id="SvgjsPath6970" d="M 378.14192708333337 165.365L 378.14192708333337 252.08975555555557Q 378.14192708333337 252.08975555555557 378.14192708333337 252.08975555555557L 388.3619791666667 252.08975555555557Q 388.3619791666667 252.08975555555557 388.3619791666667 252.08975555555557L 388.3619791666667 252.08975555555557L 388.3619791666667 165.365L 388.3619791666667 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 378.14192708333337 165.365L 378.14192708333337 252.08975555555557Q 378.14192708333337 252.08975555555557 378.14192708333337 252.08975555555557L 388.3619791666667 252.08975555555557Q 388.3619791666667 252.08975555555557 388.3619791666667 252.08975555555557L 388.3619791666667 252.08975555555557L 388.3619791666667 165.365L 388.3619791666667 165.365z" pathFrom="M 378.14192708333337 165.365L 378.14192708333337 165.365L 388.3619791666667 165.365L 388.3619791666667 165.365L 388.3619791666667 165.365L 388.3619791666667 165.365L 388.3619791666667 165.365L 378.14192708333337 165.365" cy="252.08975555555557" cx="429.24218750000006" j="7" val="-14.16" barHeight="-86.72475555555556" barWidth="10.220052083333332"></path><path id="SvgjsPath6971" d="M 429.24218750000006 165.365L 429.24218750000006 233.3483888888889Q 429.24218750000006 233.3483888888889 429.24218750000006 233.3483888888889L 439.46223958333337 233.3483888888889Q 439.46223958333337 233.3483888888889 439.46223958333337 233.3483888888889L 439.46223958333337 233.3483888888889L 439.46223958333337 165.365L 439.46223958333337 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 429.24218750000006 165.365L 429.24218750000006 233.3483888888889Q 429.24218750000006 233.3483888888889 429.24218750000006 233.3483888888889L 439.46223958333337 233.3483888888889Q 439.46223958333337 233.3483888888889 439.46223958333337 233.3483888888889L 439.46223958333337 233.3483888888889L 439.46223958333337 165.365L 439.46223958333337 165.365z" pathFrom="M 429.24218750000006 165.365L 429.24218750000006 165.365L 439.46223958333337 165.365L 439.46223958333337 165.365L 439.46223958333337 165.365L 439.46223958333337 165.365L 439.46223958333337 165.365L 429.24218750000006 165.365" cy="233.3483888888889" cx="480.34244791666674" j="8" val="-11.1" barHeight="-67.98338888888888" barWidth="10.220052083333332"></path><path id="SvgjsPath6972" d="M 480.34244791666674 165.365L 480.34244791666674 208.78862407407408Q 480.34244791666674 208.78862407407408 480.34244791666674 208.78862407407408L 490.56250000000006 208.78862407407408Q 490.56250000000006 208.78862407407408 490.56250000000006 208.78862407407408L 490.56250000000006 208.78862407407408L 490.56250000000006 165.365L 490.56250000000006 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 480.34244791666674 165.365L 480.34244791666674 208.78862407407408Q 480.34244791666674 208.78862407407408 480.34244791666674 208.78862407407408L 490.56250000000006 208.78862407407408Q 490.56250000000006 208.78862407407408 490.56250000000006 208.78862407407408L 490.56250000000006 208.78862407407408L 490.56250000000006 165.365L 490.56250000000006 165.365z" pathFrom="M 480.34244791666674 165.365L 480.34244791666674 165.365L 490.56250000000006 165.365L 490.56250000000006 165.365L 490.56250000000006 165.365L 490.56250000000006 165.365L 490.56250000000006 165.365L 480.34244791666674 165.365" cy="208.78862407407408" cx="531.4427083333334" j="9" val="-7.09" barHeight="-43.42362407407407" barWidth="10.220052083333332"></path><path id="SvgjsPath6973" d="M 531.4427083333334 165.365L 531.4427083333334 259.3168185185185Q 531.4427083333334 259.3168185185185 531.4427083333334 259.3168185185185L 541.6627604166667 259.3168185185185Q 541.6627604166667 259.3168185185185 541.6627604166667 259.3168185185185L 541.6627604166667 259.3168185185185L 541.6627604166667 165.365L 541.6627604166667 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 531.4427083333334 165.365L 531.4427083333334 259.3168185185185Q 531.4427083333334 259.3168185185185 531.4427083333334 259.3168185185185L 541.6627604166667 259.3168185185185Q 541.6627604166667 259.3168185185185 541.6627604166667 259.3168185185185L 541.6627604166667 259.3168185185185L 541.6627604166667 165.365L 541.6627604166667 165.365z" pathFrom="M 531.4427083333334 165.365L 531.4427083333334 165.365L 541.6627604166667 165.365L 541.6627604166667 165.365L 541.6627604166667 165.365L 541.6627604166667 165.365L 541.6627604166667 165.365L 531.4427083333334 165.365" cy="259.3168185185185" cx="582.54296875" j="10" val="-15.34" barHeight="-93.95181851851852" barWidth="10.220052083333332"></path><path id="SvgjsPath6974" d="M 582.54296875 165.365L 582.54296875 238.12560000000002Q 582.54296875 238.12560000000002 582.54296875 238.12560000000002L 592.7630208333334 238.12560000000002Q 592.7630208333334 238.12560000000002 592.7630208333334 238.12560000000002L 592.7630208333334 238.12560000000002L 592.7630208333334 165.365L 592.7630208333334 165.365z" fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskeyutjajnh)" pathTo="M 582.54296875 165.365L 582.54296875 238.12560000000002Q 582.54296875 238.12560000000002 582.54296875 238.12560000000002L 592.7630208333334 238.12560000000002Q 592.7630208333334 238.12560000000002 592.7630208333334 238.12560000000002L 592.7630208333334 238.12560000000002L 592.7630208333334 165.365L 592.7630208333334 165.365z" pathFrom="M 582.54296875 165.365L 582.54296875 165.365L 592.7630208333334 165.365L 592.7630208333334 165.365L 592.7630208333334 165.365L 592.7630208333334 165.365L 592.7630208333334 165.365L 582.54296875 165.365" cy="238.12560000000002" cx="633.6432291666666" j="11" val="-11.88" barHeight="-72.7606" barWidth="10.220052083333332"></path></g><g id="SvgjsG6948" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG6962" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine7055" x1="0" y1="0" x2="613.203125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine7056" x1="0" y1="0" x2="613.203125" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG7057" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG7058" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG7059" class="apexcharts-point-annotations"></g></g><g id="SvgjsG7014" class="apexcharts-yaxis" rel="0" transform="translate(24.796875, 0)"><g id="SvgjsG7015" class="apexcharts-yaxis-texts-g"><text id="SvgjsText7016" font-family="Helvetica, Arial, sans-serif" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7017">27%</tspan></text><text id="SvgjsText7018" font-family="Helvetica, Arial, sans-serif" x="20" y="86.72166666666666" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7019">18%</tspan></text><text id="SvgjsText7020" font-family="Helvetica, Arial, sans-serif" x="20" y="141.84333333333333" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7021">9%</tspan></text><text id="SvgjsText7022" font-family="Helvetica, Arial, sans-serif" x="20" y="196.965" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7023">0%</tspan></text><text id="SvgjsText7024" font-family="Helvetica, Arial, sans-serif" x="20" y="252.08666666666667" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7025">-9%</tspan></text><text id="SvgjsText7026" font-family="Helvetica, Arial, sans-serif" x="20" y="307.20833333333337" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7027">-18%</tspan></text><text id="SvgjsText7028" font-family="Helvetica, Arial, sans-serif" x="20" y="362.33000000000004" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan7029">-27%</tspan></text></g></g><g id="SvgjsG6936" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 200px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 86, 190);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 195, 143);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 679px; height: 401px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                            <div class="col-xl-4">
                                <div class="p-4">
                                    <div class="mt-0">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title
                                                    rounded-circle bg-soft-light
                                                    text-dark font-size-16">
                                                    1
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Coinmarketcap</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill
                                                    badge-soft-success
                                                    font-size-12 fw-medium">+2.5%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title
                                                    rounded-circle bg-soft-light
                                                    text-dark font-size-16">
                                                    2
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Binance</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill
                                                    badge-soft-success
                                                    font-size-12 fw-medium">+8.3%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title
                                                    rounded-circle bg-soft-light
                                                    text-dark font-size-16">
                                                    3
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Coinbase</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill
                                                    badge-soft-danger
                                                    font-size-12 fw-medium">-3.6%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title
                                                    rounded-circle bg-soft-light
                                                    text-dark font-size-16">
                                                    4
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Yobit</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill
                                                    badge-soft-success
                                                    font-size-12 fw-medium">+7.1%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title
                                                    rounded-circle bg-soft-light
                                                    text-dark font-size-16">
                                                    5
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Bitfinex</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill
                                                    badge-soft-danger
                                                    font-size-12 fw-medium">-0.9%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="" class="btn btn-primary
                                            w-100">See All Balances <i class="mdi mdi-arrow-right
                                                ms-1"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row-->

            <div class="col-xl-4">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Sales by Locations</h5>
                            <div class="ms-auto">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted font-size-12">Sort
                                            By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down
                                                ms-1"></i></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="#">USA</a>
                                        <a class="dropdown-item" href="#">Russia</a>
                                        <a class="dropdown-item" href="#">Australia</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="sales-by-locations" data-colors="[&quot; #5156be&quot; ]" style="height: 250px"><div class="jvectormap-container" style="width: 100%; height: 100%; position: relative; overflow: hidden; background-color: transparent;"><svg width="482.328" height="250"><g transform="scale(0.53592) translate(0, 12.890612354459822)"><path d="M652.71,228.85l-0.04,1.38l-0.46,-0.21l-0.42,0.3l0.05,0.65l-0.17,-1.37l-0.48,-1.26l-1.08,-1.6l-0.23,-0.13l-2.31,-0.11l-0.31,0.36l0.21,0.98l-0.6,1.11l-0.8,-0.4l-0.37,0.09l-0.23,0.3l-0.54,-0.21l-0.78,-0.19l-0.38,-2.04l-0.83,-1.89l0.4,-1.5l-0.16,-0.35l-1.24,-0.57l0.36,-0.62l1.5,-0.95l0.02,-0.49l-1.62,-1.26l0.64,-1.31l1.7,1.0l0.12,0.04l0.96,0.11l0.19,1.62l0.25,0.26l2.38,0.37l2.32,-0.04l1.06,0.33l-0.92,1.79l-0.97,0.13l-0.23,0.16l-0.77,1.51l0.05,0.35l1.37,1.37l0.5,-0.14l0.35,-1.46l0.24,-0.0l1.24,3.92Z" data-code="BD" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M429.28,143.95l1.76,0.25l0.13,-0.01l2.16,-0.64l1.46,1.34l1.26,0.71l-0.23,1.8l-0.44,0.08l-0.24,0.25l-0.2,1.36l-1.8,-1.22l-0.23,-0.05l-1.14,0.23l-1.62,-1.43l-1.15,-1.31l-0.21,-0.1l-0.95,-0.04l-0.21,-0.68l1.66,-0.54Z" data-code="BE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M413.48,260.21l-1.22,-0.46l-0.13,-0.02l-1.17,0.1l-0.15,0.06l-0.73,0.53l-0.87,-0.41l-0.39,-0.75l-0.13,-0.13l-0.98,-0.48l-0.14,-1.2l0.63,-0.99l0.05,-0.18l-0.05,-0.73l1.9,-2.01l0.08,-0.14l0.35,-1.65l0.49,-0.44l1.05,0.3l0.21,-0.02l1.05,-0.52l0.13,-0.13l0.3,-0.58l1.87,-1.1l0.11,-0.1l0.43,-0.72l2.23,-1.01l1.21,-0.32l0.51,0.4l0.19,0.06l1.25,-0.01l-0.14,0.89l0.01,0.13l0.34,1.16l0.06,0.11l1.35,1.59l0.07,1.13l0.24,0.28l2.64,0.53l-0.05,1.39l-0.42,0.59l-1.11,0.21l-0.22,0.17l-0.46,0.99l-0.69,0.23l-2.12,-0.05l-1.14,-0.2l-0.19,0.03l-0.72,0.36l-1.07,-0.17l-4.35,0.12l-0.29,0.29l-0.06,1.44l0.25,1.45Z" data-code="BF" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M477.63,166.84l0.51,0.9l0.33,0.14l0.9,-0.21l1.91,0.47l3.68,0.16l0.17,-0.05l1.2,-0.75l2.78,-0.67l1.72,1.05l1.02,0.24l-0.97,0.97l-0.91,2.17l0.0,0.24l0.56,1.19l-1.58,-0.3l-0.16,0.01l-2.55,0.95l-0.2,0.28l-0.02,1.23l-1.92,0.24l-1.68,-0.99l-0.27,-0.02l-1.94,0.8l-1.52,-0.07l-0.15,-1.72l-0.12,-0.21l-0.99,-0.76l0.18,-0.18l0.02,-0.39l-0.17,-0.22l0.33,-0.75l0.91,-0.91l0.01,-0.42l-1.16,-1.25l-0.18,-0.89l0.24,-0.27Z" data-code="BG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M468.39,164.66l0.16,0.04l0.43,-0.0l-0.43,0.93l0.06,0.34l1.08,1.06l-0.28,1.09l-0.5,0.13l-0.47,0.28l-0.86,0.74l-0.1,0.16l-0.28,1.29l-1.81,-0.94l-0.9,-1.22l-1.0,-0.73l-1.1,-1.1l-0.55,-0.96l-1.11,-1.3l0.3,-0.75l0.59,0.46l0.42,-0.04l0.46,-0.54l1.0,-0.06l2.11,0.5l1.72,-0.03l1.06,0.64Z" data-code="BA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M707.34,273.57l0.76,-0.72l1.59,-1.03l-0.18,1.93l-0.9,-0.06l-0.28,0.14l-0.31,0.51l-0.68,-0.78Z" data-code="BN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M263.83,340.79l-0.23,-0.12l-2.86,-0.11l-0.28,0.17l-0.77,1.67l-1.17,-1.51l-0.18,-0.11l-3.28,-0.64l-0.28,0.1l-2.02,2.3l-1.43,0.29l-0.91,-3.35l-1.31,-2.88l0.75,-2.41l-0.09,-0.32l-1.23,-1.03l-0.31,-1.76l-0.05,-0.12l-1.12,-1.6l1.49,-2.62l0.01,-0.28l-1.0,-2.0l0.48,-0.72l0.02,-0.29l-0.37,-0.78l0.87,-1.13l0.06,-0.18l0.05,-2.17l0.12,-1.71l0.5,-0.8l0.01,-0.3l-1.9,-3.58l1.3,0.15l1.34,-0.05l0.23,-0.12l0.51,-0.7l2.12,-0.99l1.31,-0.93l2.81,-0.37l-0.21,1.51l0.01,0.13l0.29,0.91l-0.19,1.64l0.11,0.27l2.72,2.27l0.15,0.07l2.71,0.41l0.92,0.88l0.12,0.07l1.64,0.49l1.0,0.71l0.18,0.06l1.5,-0.02l1.24,0.64l0.1,1.31l0.05,0.14l0.44,0.68l0.02,0.73l-0.44,0.03l-0.27,0.39l0.96,2.99l0.28,0.21l4.43,0.1l-0.28,1.12l0.0,0.15l0.27,1.02l0.15,0.19l1.27,0.67l0.52,1.42l-0.42,1.91l-0.66,1.1l-0.04,0.2l0.21,1.3l-0.19,0.13l-0.01,-0.27l-0.15,-0.24l-2.33,-1.33l-0.14,-0.04l-2.38,-0.03l-4.36,0.76l-0.21,0.16l-1.2,2.29l-0.03,0.13l-0.06,1.37l-0.79,2.53l-0.05,-0.08Z" data-code="BO" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M781.17,166.78l1.8,0.67l0.28,-0.04l1.38,-1.01l0.43,2.67l-3.44,0.77l-0.18,0.12l-2.04,2.79l-3.71,-1.94l-0.42,0.15l-1.29,3.11l-2.32,0.04l-0.3,-2.63l1.12,-2.1l2.51,-0.16l0.28,-0.25l0.73,-4.22l0.58,-1.9l2.59,2.84l2.0,1.1ZM773.66,187.36l-0.92,2.24l-0.01,0.2l0.4,1.3l-1.18,1.81l-3.06,1.28l-4.35,0.17l-0.19,0.08l-3.4,3.06l-1.36,-0.87l-0.1,-1.95l-0.34,-0.28l-4.35,0.62l-2.99,1.33l-2.87,0.05l-0.28,0.2l0.09,0.33l2.37,1.93l-1.57,4.44l-1.35,0.97l-0.9,-0.79l0.57,-2.32l-0.15,-0.34l-1.5,-0.77l-0.81,-1.53l2.04,-0.75l0.14,-0.1l1.28,-1.72l2.47,-1.43l1.84,-1.92l4.83,-0.82l2.62,0.57l0.33,-0.16l2.45,-4.77l1.38,1.14l0.38,0.0l5.1,-4.02l0.09,-0.11l1.57,-3.57l0.02,-0.16l-0.42,-3.22l0.94,-1.67l2.27,-0.47l1.26,3.82l-0.07,2.23l-2.26,2.86l-0.06,0.19l0.04,2.93ZM757.85,196.18l0.22,0.66l-1.11,1.33l-0.8,-0.7l-0.33,-0.04l-1.28,0.65l-0.14,0.15l-0.54,1.34l-1.17,-0.57l0.02,-1.03l1.2,-1.45l1.24,0.28l0.29,-0.1l0.9,-1.03l1.51,0.5Z" data-code="JP" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M494.7,295.83l-0.14,-2.71l-0.04,-0.13l-0.34,-0.62l0.93,0.12l0.3,-0.16l0.67,-1.25l0.9,0.11l0.11,0.76l0.08,0.16l0.46,0.48l0.02,0.56l-0.55,0.48l-0.96,1.29l-0.82,0.82l-0.61,0.07Z" data-code="BI" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M427.4,268.94l-1.58,0.22l-0.52,-1.45l0.11,-5.73l-0.08,-0.21l-0.43,-0.44l-0.09,-1.13l-0.09,-0.19l-1.52,-1.52l0.24,-1.01l0.7,-0.23l0.18,-0.16l0.45,-0.97l1.07,-0.21l0.19,-0.12l0.53,-0.73l0.73,-0.65l0.68,-0.0l1.69,1.3l-0.08,0.67l0.02,0.14l0.52,1.38l-0.44,0.9l-0.01,0.24l0.2,0.52l-1.1,1.42l-0.76,0.76l-0.08,0.13l-0.47,1.59l0.05,1.69l-0.13,3.79Z" data-code="BJ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M650.38,213.78l0.88,0.75l-0.13,1.24l-1.77,0.07l-2.1,-0.18l-1.57,0.4l-2.02,-0.91l-0.02,-0.24l1.54,-1.87l1.18,-0.6l1.67,0.59l1.32,0.08l1.01,0.67Z" data-code="BT" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M226.67,238.37l1.64,0.23l1.2,0.56l0.11,0.19l-1.25,0.03l-0.14,0.04l-0.65,0.37l-1.24,-0.37l-1.17,-0.77l0.11,-0.22l0.86,-0.15l0.52,0.08Z" data-code="JM" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M484.91,331.96l0.53,0.52l0.82,1.53l2.83,2.86l0.14,0.08l0.85,0.22l0.03,0.81l0.74,1.66l0.21,0.17l1.87,0.39l1.17,0.87l-3.13,1.71l-2.3,2.01l-0.07,0.1l-0.82,1.74l-0.66,0.88l-1.24,0.19l-0.24,0.2l-0.65,1.98l-1.4,0.55l-1.9,-0.12l-1.2,-0.74l-1.06,-0.32l-0.22,0.02l-1.22,0.62l-0.14,0.14l-0.58,1.21l-1.16,0.79l-1.18,1.13l-1.5,0.23l-0.4,-0.68l0.22,-1.53l-0.04,-0.19l-1.48,-2.54l-0.11,-0.11l-0.53,-0.31l-0.0,-7.25l2.18,-0.08l0.29,-0.3l0.07,-9.0l1.63,-0.08l3.69,-0.86l0.84,0.93l0.38,0.05l1.53,-0.97l0.79,-0.03l1.3,-0.53l0.23,0.1l0.92,1.96Z" data-code="BW" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M259.49,274.87l1.42,0.25l1.97,0.62l0.28,-0.05l0.67,-0.55l1.76,-0.38l2.8,-0.94l0.12,-0.08l0.92,-0.96l0.05,-0.33l-0.15,-0.32l0.73,-0.06l0.36,0.35l-0.27,0.93l0.17,0.36l0.76,0.34l0.44,0.9l-0.58,0.73l-0.06,0.13l-0.4,2.13l0.03,0.19l0.62,1.22l0.17,1.11l0.11,0.19l1.54,1.18l0.15,0.06l1.23,0.12l0.29,-0.15l0.2,-0.36l0.71,-0.11l1.13,-0.44l0.79,-0.63l1.25,0.19l0.65,-0.08l1.32,0.2l0.32,-0.18l0.23,-0.51l-0.05,-0.31l-0.31,-0.37l0.11,-0.31l0.75,0.17l0.13,0.0l1.1,-0.24l1.34,0.5l1.08,0.51l0.33,-0.05l0.67,-0.58l0.27,0.05l0.28,0.57l0.31,0.17l1.2,-0.18l0.17,-0.08l1.03,-1.05l0.76,-1.82l1.39,-2.16l0.49,-0.07l0.52,1.17l1.4,4.37l0.2,0.2l1.14,0.35l0.05,1.39l-1.8,1.97l0.01,0.42l0.78,0.75l0.18,0.08l4.16,0.37l0.08,2.25l0.5,0.22l1.78,-1.54l2.98,0.85l4.07,1.5l1.07,1.28l-0.37,1.23l0.36,0.38l2.83,-0.75l4.8,1.3l3.75,-0.09l3.6,2.02l3.27,2.84l1.93,0.72l2.13,0.11l0.76,0.66l1.22,4.56l-0.96,4.03l-1.22,1.58l-3.52,3.51l-1.63,2.91l-1.75,2.09l-0.5,0.04l-0.26,0.19l-0.72,1.99l0.18,4.76l-0.95,5.56l-0.74,0.96l-0.06,0.15l-0.43,3.39l-2.49,3.34l-0.06,0.13l-0.4,2.56l-1.9,1.07l-0.13,0.16l-0.51,1.38l-2.59,0.0l-3.94,1.01l-1.82,1.19l-2.85,0.81l-3.01,2.17l-2.12,2.65l-0.06,0.13l-0.36,2.0l0.01,0.13l0.4,1.42l-0.45,2.63l-0.53,1.23l-1.76,1.53l-2.76,4.79l-2.16,2.15l-1.69,1.29l-0.09,0.12l-1.12,2.6l-1.3,1.26l-0.45,-1.02l0.99,-1.18l0.01,-0.37l-1.5,-1.95l-1.98,-1.54l-2.58,-1.77l-0.2,-0.05l-0.81,0.07l-2.42,-2.05l-0.25,-0.07l-0.77,0.14l2.75,-3.07l2.8,-2.61l1.67,-1.09l2.11,-1.49l0.13,-0.24l0.05,-2.15l-0.07,-0.2l-1.26,-1.54l-0.35,-0.09l-0.64,0.27l0.3,-0.95l0.34,-1.57l0.01,-1.52l-0.16,-0.26l-0.9,-0.48l-0.27,-0.01l-0.86,0.39l-0.65,-0.08l-0.23,-0.8l-0.23,-2.39l-0.04,-0.12l-0.47,-0.79l-0.14,-0.12l-1.69,-0.71l-0.25,0.01l-0.93,0.47l-2.29,-0.44l0.15,-3.3l-0.03,-0.15l-0.62,-1.22l0.57,-0.39l0.13,-0.3l-0.22,-1.37l0.67,-1.13l0.44,-2.04l-0.01,-0.17l-0.59,-1.61l-0.14,-0.16l-1.25,-0.66l-0.22,-0.82l0.35,-1.41l-0.28,-0.37l-4.59,-0.1l-0.78,-2.41l0.34,-0.02l0.28,-0.31l-0.03,-1.1l-0.05,-0.16l-0.45,-0.68l-0.1,-1.4l-0.16,-0.24l-1.45,-0.76l-0.14,-0.03l-1.48,0.02l-1.04,-0.73l-1.62,-0.48l-0.93,-0.9l-0.16,-0.08l-2.72,-0.41l-2.53,-2.12l0.18,-1.54l-0.01,-0.13l-0.29,-0.91l0.26,-1.83l-0.34,-0.34l-3.28,0.43l-0.14,0.05l-1.3,0.93l-2.16,1.01l-0.12,0.09l-0.47,0.65l-1.12,0.05l-1.84,-0.21l-0.12,0.01l-1.33,0.41l-0.82,-0.21l0.16,-3.6l-0.48,-0.26l-1.97,1.43l-1.96,-0.06l-0.86,-1.23l-0.22,-0.13l-1.23,-0.11l0.34,-0.69l-0.05,-0.33l-1.36,-1.5l-0.92,-2.0l0.45,-0.32l0.13,-0.25l-0.0,-0.87l1.34,-0.64l0.17,-0.32l-0.23,-1.23l0.56,-0.77l0.05,-0.13l0.16,-1.03l2.7,-1.61l2.01,-0.47l0.16,-0.09l0.24,-0.27l2.11,0.11l0.31,-0.25l1.13,-6.87l0.06,-1.12l-0.4,-1.53l-0.1,-0.15l-1.0,-0.82l0.01,-1.45l1.08,-0.32l0.39,0.2l0.44,-0.24l0.08,-0.96l-0.25,-0.32l-1.22,-0.22l-0.02,-1.01l4.57,0.05l0.22,-0.09l0.6,-0.63l0.44,0.5l0.47,1.42l0.45,0.16l0.27,-0.18l1.21,1.16l0.23,0.08l1.95,-0.16l0.23,-0.14l0.43,-0.67l1.76,-0.55l1.05,-0.42l0.18,-0.2l0.25,-0.92l1.65,-0.66l0.18,-0.35l-0.14,-0.53l-0.26,-0.22l-1.91,-0.19l-0.29,-1.33l0.1,-1.64l-0.15,-0.28l-0.44,-0.25Z" data-code="BR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M227.51,216.69l0.3,0.18l-0.24,1.07l0.03,-1.04l-0.09,-0.21ZM226.5,224.03l-0.13,0.03l-0.54,-1.3l-0.09,-0.12l-0.78,-0.64l0.4,-1.26l0.33,0.05l0.79,2.0l0.01,1.24ZM225.76,216.5l-2.16,0.34l-0.07,-0.41l0.85,-0.16l1.36,0.07l0.02,0.16Z" data-code="BS" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M480.08,135.28l2.09,0.02l0.13,-0.03l2.72,-1.3l0.16,-0.19l0.55,-1.83l1.94,-1.06l0.15,-0.31l-0.2,-1.33l1.33,-0.52l2.58,-1.3l2.39,0.8l0.3,0.75l0.37,0.17l1.22,-0.39l2.18,0.75l0.2,1.36l-0.48,0.85l0.01,0.32l1.57,2.26l0.92,0.6l-0.1,0.41l0.19,0.35l1.61,0.57l0.48,0.6l-0.64,0.49l-1.91,-0.11l-0.18,0.05l-0.48,0.32l-0.1,0.39l0.57,1.1l0.51,1.78l-1.79,0.17l-0.18,0.08l-0.77,0.73l-0.09,0.19l-0.13,1.31l-0.75,-0.22l-2.11,0.15l-0.56,-0.66l-0.39,-0.06l-0.8,0.49l-0.79,-0.4l-0.13,-0.03l-1.94,-0.07l-2.76,-0.79l-2.58,-0.27l-1.98,0.07l-0.15,0.05l-1.31,0.86l-0.8,0.09l-0.04,-1.16l-0.03,-0.12l-0.63,-1.28l1.22,-0.56l0.17,-0.27l0.01,-1.35l-0.04,-0.15l-0.66,-1.24l-0.08,-1.12Z" data-code="BY" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M198.03,239.7l0.28,0.19l0.43,-0.1l0.82,-1.42l0.0,0.07l0.29,0.29l0.16,0.0l-0.02,0.35l-0.39,1.08l0.02,0.25l0.16,0.29l-0.23,0.8l0.04,0.24l0.09,0.14l-0.25,1.12l-0.38,0.53l-0.33,0.06l-0.21,0.15l-0.41,0.74l-0.25,0.0l0.17,-2.58l0.01,-2.2Z" data-code="BZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M688.57,38.85l0.63,2.39l0.44,0.19l2.22,-1.23l7.18,0.07l5.54,2.49l1.85,1.77l-0.55,2.34l-2.64,1.42l-6.57,2.76l-1.95,1.5l0.12,0.53l3.09,0.68l3.69,1.23l0.21,-0.01l1.98,-0.81l1.16,2.84l0.5,0.08l1.03,-1.18l3.86,-0.74l7.79,0.78l0.56,2.05l0.27,0.22l10.47,0.71l0.32,-0.29l0.13,-3.34l4.98,0.8l3.96,-0.02l3.88,2.43l1.06,2.79l-1.38,1.83l0.01,0.38l3.15,3.64l0.1,0.08l3.94,1.86l0.4,-0.14l2.28,-4.56l3.75,1.94l0.22,0.02l4.18,-1.22l4.76,1.4l0.26,-0.04l1.74,-1.23l3.98,0.63l0.32,-0.41l-1.71,-4.1l3.0,-1.86l22.39,3.04l2.06,2.67l0.1,0.08l6.55,3.51l0.17,0.03l10.08,-0.86l4.86,0.73l1.91,1.72l-0.29,3.13l0.18,0.31l3.08,1.26l0.19,0.01l3.32,-0.9l4.37,-0.11l4.78,0.87l4.61,-0.48l4.26,3.82l0.32,0.05l3.1,-1.4l0.12,-0.45l-1.91,-2.67l0.92,-1.64l7.78,1.22l5.22,-0.26l7.12,2.1l9.6,5.22l6.4,4.15l-0.2,2.44l0.14,0.28l1.69,1.04l0.45,-0.31l-0.51,-2.66l6.31,0.58l4.52,3.61l-2.1,1.52l-4.02,0.42l-0.27,0.29l-0.06,3.83l-0.81,0.67l-2.14,-0.11l-1.91,-1.39l-3.19,-1.13l-0.51,-1.63l-0.21,-0.2l-2.54,-0.67l-0.13,-0.0l-2.69,0.5l-1.12,-1.19l0.48,-1.36l-0.38,-0.39l-3.0,0.98l-0.17,0.44l1.02,1.76l-1.27,1.55l-3.09,1.71l-3.15,-0.29l-0.3,0.18l0.07,0.34l2.22,2.1l1.47,3.22l1.15,1.09l0.25,1.41l-0.48,0.76l-4.47,-0.81l-0.17,0.02l-6.97,2.9l-2.2,0.44l-0.11,0.05l-3.83,2.68l-3.63,2.32l-0.1,0.11l-0.76,1.4l-3.3,-2.4l-0.3,-0.03l-6.31,2.85l-0.99,-1.21l-0.4,-0.06l-2.32,1.54l-3.23,-0.49l-0.33,0.2l-0.79,2.39l-2.97,3.51l-0.07,0.21l0.09,1.47l0.22,0.27l2.62,0.74l-0.3,4.7l-2.06,0.12l-0.26,0.2l-1.07,2.94l0.04,0.27l0.83,1.19l-4.03,1.63l-0.18,0.21l-0.83,3.72l-3.55,0.79l-0.23,0.23l-0.73,3.32l-3.22,2.76l-0.76,-1.88l-1.07,-4.88l-1.39,-7.59l1.17,-4.76l2.05,-2.08l0.09,-0.19l0.11,-1.46l3.67,-0.77l0.15,-0.08l4.47,-4.61l4.29,-3.82l4.48,-3.01l0.11,-0.14l2.01,-5.43l-0.31,-0.4l-3.04,0.33l-0.24,0.17l-1.47,3.11l-5.98,3.94l-1.91,-4.36l-0.33,-0.17l-6.46,1.3l-0.15,0.08l-6.27,6.33l-0.01,0.41l1.7,1.87l-5.04,0.87l-3.51,0.34l0.16,-2.32l-0.26,-0.32l-3.89,-0.56l-0.19,0.04l-3.02,1.77l-7.63,-0.63l-8.24,1.1l-0.16,0.07l-8.11,7.09l-9.6,8.31l0.16,0.52l3.79,0.42l1.16,2.03l0.17,0.14l2.43,0.76l0.31,-0.08l1.5,-1.61l2.49,0.2l3.46,3.6l0.08,2.67l-1.91,3.26l-0.04,0.14l-0.21,3.91l-1.11,5.09l-3.73,4.55l-0.87,2.21l-6.73,7.14l-1.59,1.77l-3.23,1.72l-1.38,0.03l-1.48,-1.39l-0.37,-0.03l-3.36,2.22l-0.11,0.14l-0.16,0.42l-0.01,-1.09l1.0,-0.06l0.28,-0.27l0.36,-3.6l-0.61,-2.51l1.85,-0.94l2.94,0.53l0.32,-0.15l1.71,-3.1l0.84,-3.38l0.97,-1.18l1.32,-2.88l-0.34,-0.42l-4.14,0.95l-2.18,1.25l-3.51,-0.0l-0.95,-2.81l-0.1,-0.14l-2.97,-2.3l-0.11,-0.05l-4.19,-1.0l-0.89,-3.08l-0.87,-2.03l-0.95,-1.46l-1.54,-3.37l-0.12,-0.14l-2.27,-1.28l-3.83,-1.02l-3.37,0.1l-3.11,0.61l-0.13,0.06l-2.07,1.69l0.04,0.49l1.23,0.72l0.03,1.53l-1.34,1.05l-2.26,3.51l-0.05,0.17l0.02,1.27l-3.25,1.9l-2.87,-1.17l-0.14,-0.02l-2.86,0.26l-1.22,-1.02l-0.12,-0.06l-1.5,-0.35l-0.23,0.04l-3.62,2.27l-3.24,0.53l-2.28,0.79l-3.08,-0.51l-2.24,0.03l-1.49,-1.61l-2.45,-1.57l-0.11,-0.04l-2.6,-0.43l-3.17,0.43l-2.31,0.59l-3.31,-1.28l-0.45,-2.31l-0.21,-0.23l-2.94,-0.85l-2.26,-0.39l-2.77,-1.36l-0.37,0.09l-2.59,3.45l-0.03,0.32l0.91,1.74l-2.15,2.01l-3.47,-0.79l-2.44,-0.12l-1.59,-1.46l-0.2,-0.08l-2.55,-0.05l-2.12,-0.98l-0.24,-0.01l-3.85,1.57l-4.74,2.79l-2.59,0.55l-0.79,0.21l-1.21,-1.81l-0.29,-0.13l-3.05,0.41l-0.96,-1.25l-0.14,-0.1l-1.65,-0.6l-1.15,-1.82l-0.13,-0.12l-1.38,-0.6l-0.19,-0.02l-3.49,0.82l-3.35,-1.85l-0.38,0.08l-1.08,1.4l-5.36,-8.17l-3.02,-2.52l0.72,-0.85l0.01,-0.38l-0.37,-0.08l-6.22,3.21l-1.98,0.16l0.17,-1.51l-0.2,-0.31l-3.22,-1.17l-0.19,-0.0l-2.3,0.74l-0.72,-3.27l-0.24,-0.23l-4.5,-0.75l-0.21,0.04l-2.2,1.42l-6.21,1.27l-0.11,0.05l-1.16,0.81l-9.3,1.19l-0.18,0.09l-1.15,1.17l-0.02,0.39l1.56,2.01l-2.02,0.74l-0.16,0.42l0.35,0.68l-2.18,1.49l0.02,0.51l3.83,2.16l-0.45,1.13l-3.31,-0.13l-0.25,0.12l-0.57,0.77l-2.97,-1.59l-0.15,-0.04l-3.97,0.07l-0.13,0.03l-2.53,1.32l-2.84,-1.28l-5.52,-2.3l-0.12,-0.02l-3.91,0.09l-0.16,0.05l-5.17,3.6l-0.13,0.21l-0.25,1.89l-2.17,-1.6l-0.44,0.1l-2.0,3.59l0.06,0.37l0.55,0.5l-1.32,2.23l0.04,0.36l2.13,2.17l0.23,0.09l1.7,-0.08l1.42,1.89l-0.23,1.5l0.19,0.32l0.94,0.38l-0.89,1.44l-2.3,0.49l-0.17,0.11l-2.49,3.2l0.0,0.37l2.2,2.81l-0.23,1.93l0.06,0.22l2.56,3.32l-1.27,1.02l-0.4,0.66l-0.8,-0.15l-1.65,-1.75l-0.18,-0.09l-0.66,-0.09l-1.45,-0.64l-0.72,-1.16l-0.18,-0.13l-2.34,-0.63l-0.17,0.0l-1.32,0.41l-0.31,-0.4l-0.12,-0.09l-3.49,-1.48l-3.67,-0.49l-2.1,-0.52l-0.3,0.1l-0.12,0.14l-2.96,-2.4l-2.89,-1.19l-1.69,-1.42l1.27,-0.35l0.16,-0.1l2.08,-2.61l-0.04,-0.41l-1.02,-0.9l3.21,-1.12l0.2,-0.31l-0.07,-0.69l-0.37,-0.26l-1.86,0.42l0.05,-0.86l1.11,-0.76l2.35,-0.23l0.25,-0.19l0.39,-1.07l0.0,-0.19l-0.51,-1.64l0.95,-1.58l0.04,-0.16l-0.03,-0.95l-0.22,-0.28l-3.69,-1.06l-1.43,0.02l-1.45,-1.44l-0.29,-0.08l-1.83,0.49l-2.88,-1.04l0.04,-0.42l-0.04,-0.18l-0.89,-1.43l-0.23,-0.14l-1.77,-0.14l-0.13,-0.66l0.52,-0.56l0.01,-0.4l-1.6,-1.9l-0.27,-0.1l-2.55,0.32l-0.71,-0.16l-0.3,0.1l-0.53,0.63l-0.58,-0.08l-0.56,-1.97l-0.48,-0.94l0.17,-0.11l1.92,0.11l0.2,-0.06l0.97,-0.74l0.05,-0.42l-0.72,-0.91l-0.13,-0.1l-1.43,-0.51l0.09,-0.36l-0.13,-0.33l-0.97,-0.59l-1.43,-2.06l0.44,-0.77l0.04,-0.19l-0.25,-1.64l-0.2,-0.24l-2.45,-0.84l-0.19,-0.0l-1.05,0.34l-0.25,-0.62l-0.18,-0.17l-2.5,-0.84l-0.74,-1.93l-0.21,-1.7l-0.13,-0.21l-0.92,-0.63l0.83,-0.89l0.07,-0.27l-0.71,-3.26l1.69,-2.01l0.03,-0.34l-0.24,-0.41l2.63,-1.9l-0.01,-0.49l-2.31,-1.57l5.08,-4.61l2.33,-2.24l1.01,-2.08l-0.09,-0.37l-3.52,-2.56l0.94,-2.38l-0.04,-0.29l-2.14,-2.86l1.61,-3.35l-0.01,-0.29l-2.81,-4.58l2.19,-3.04l-0.06,-0.42l-3.7,-2.76l0.32,-2.67l1.87,-0.38l4.26,-1.77l2.46,-1.47l3.96,2.58l0.12,0.05l6.81,1.04l9.37,4.87l1.81,1.92l0.15,2.55l-2.61,2.06l-3.95,1.07l-11.1,-3.15l-0.17,0.0l-1.84,0.53l-0.1,0.53l3.97,2.97l0.15,1.77l0.16,4.14l0.19,0.27l3.21,1.22l1.94,1.03l0.44,-0.22l0.32,-1.94l-0.07,-0.25l-1.32,-1.52l1.25,-1.2l5.87,2.45l0.24,-0.01l2.11,-0.98l0.13,-0.42l-1.55,-2.75l5.52,-3.84l2.13,0.22l2.28,1.42l0.43,-0.12l1.46,-2.87l-0.04,-0.33l-1.97,-2.37l1.14,-2.38l-0.02,-0.3l-1.42,-2.07l6.15,1.22l1.14,1.92l-2.74,0.46l-0.25,0.3l0.02,2.36l0.12,0.24l1.97,1.44l0.25,0.05l3.87,-0.91l0.22,-0.23l0.58,-2.55l5.09,-1.98l8.67,-3.69l1.22,0.14l-2.06,2.2l0.18,0.5l3.11,0.45l0.23,-0.07l1.71,-1.41l4.59,-0.12l0.12,-0.03l3.53,-1.72l2.7,2.48l0.42,-0.01l2.85,-2.88l-0.0,-0.43l-2.42,-2.35l1.0,-1.13l7.2,1.31l3.42,1.36l9.06,4.97l0.39,-0.08l1.67,-2.27l-0.04,-0.4l-2.46,-2.23l-0.06,-0.82l-0.26,-0.27l-2.64,-0.38l0.69,-1.76l0.0,-0.22l-1.32,-3.47l-0.07,-1.27l4.52,-4.09l0.08,-0.11l1.6,-4.18l1.67,-0.84l6.33,1.2l0.46,2.31l-2.31,3.67l0.05,0.38l1.49,1.41l0.77,3.04l-0.56,6.05l0.09,0.24l2.62,2.54l-0.99,2.65l-4.87,5.96l0.17,0.48l2.86,0.61l0.31,-0.13l0.94,-1.42l2.67,-1.04l0.18,-0.19l0.64,-2.01l2.11,-1.98l0.05,-0.37l-1.38,-2.32l1.11,-2.74l-0.24,-0.41l-2.53,-0.33l-0.53,-2.16l1.96,-4.42l-0.05,-0.32l-3.03,-3.48l4.21,-2.94l0.12,-0.3l-0.52,-3.04l0.72,-0.06l1.18,2.35l-0.97,4.39l0.2,0.35l2.68,0.84l0.37,-0.38l-1.05,-3.07l3.89,-1.71l5.05,-0.24l4.55,2.62l0.36,-0.05l0.05,-0.36l-2.19,-3.84l-0.23,-4.78l4.07,-0.92l5.98,0.21l5.47,-0.64l0.2,-0.48l-1.88,-2.37l2.65,-2.99l2.75,-0.13l0.12,-0.03l4.82,-2.48l6.56,-0.67l0.23,-0.14l0.76,-1.27l6.33,-0.46l1.97,1.11l0.28,0.01l5.55,-2.71l4.53,0.08l0.29,-0.21l0.67,-2.18l2.29,-2.15l5.75,-2.13l3.48,1.4l-2.7,1.03l-0.19,0.31l0.26,0.26l5.47,0.78ZM871.83,65.73l0.25,-0.15l1.99,0.01l3.3,1.2l-0.08,0.22l-2.41,1.03l-5.73,0.49l-0.31,-1.0l2.99,-1.8ZM797.64,48.44l-2.22,1.51l-3.85,-0.43l-4.35,-1.85l0.42,-1.13l4.42,0.72l5.59,1.17ZM783.82,46.06l-1.71,3.25l-9.05,-0.14l-4.11,1.15l-4.64,-3.04l1.21,-3.13l3.11,-0.91l6.53,0.22l8.66,2.59ZM780.37,145.71l2.28,5.23l-3.09,-0.89l-0.37,0.19l-1.54,4.65l0.04,0.27l2.38,3.17l-0.05,1.4l-1.41,-1.41l-0.46,0.04l-1.23,1.81l-0.33,-1.86l0.28,-3.1l-0.28,-3.41l0.58,-2.46l0.11,-4.39l-0.03,-0.13l-1.44,-3.2l0.21,-4.39l2.19,-1.49l0.09,-0.41l-0.81,-1.3l0.48,-0.21l0.56,1.94l0.86,3.23l-0.05,3.36l1.03,3.35ZM780.16,57.18l-3.4,0.03l-5.06,-0.53l1.97,-1.59l2.95,-0.42l3.35,1.75l0.18,0.77ZM683.84,31.18l-13.29,1.97l4.16,-6.56l1.88,-0.58l1.77,0.34l6.08,3.02l-0.6,1.8ZM670.94,28.02l-5.18,0.65l-6.89,-1.58l-4.03,-2.07l-1.88,-3.98l-0.18,-0.16l-2.8,-0.93l5.91,-3.62l5.25,-1.29l4.73,2.88l5.63,5.44l-0.57,4.66ZM564.37,68.98l-0.85,0.23l-7.93,-0.57l-0.6,-1.84l-0.21,-0.2l-4.34,-1.18l-0.3,-2.08l2.34,-0.92l0.19,-0.29l-0.08,-2.43l4.85,-4.0l-0.12,-0.52l-1.68,-0.43l5.47,-3.94l0.11,-0.33l-0.6,-2.02l5.36,-2.55l8.22,-3.27l8.29,-0.96l4.34,-1.94l4.67,-0.65l1.45,1.72l-1.43,1.37l-8.8,2.52l-7.65,2.42l-7.92,4.84l-3.73,4.75l-3.92,4.58l-0.07,0.23l0.51,3.88l0.11,0.2l4.32,3.39ZM548.86,18.57l-3.28,0.75l-2.25,0.44l-0.22,0.19l-0.3,0.81l-2.67,0.86l-2.27,-1.14l1.2,-1.51l-0.23,-0.49l-3.14,-0.1l2.48,-0.54l3.55,-0.07l0.44,1.36l0.49,0.12l1.4,-1.35l2.2,-0.9l3.13,1.08l-0.54,0.49ZM477.5,133.25l-4.21,0.05l-2.69,-0.34l0.39,-1.03l3.24,-1.06l2.51,0.58l0.85,0.43l-0.2,0.71l-0.0,0.15l0.12,0.52Z" data-code="RU" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M497.03,288.12l0.78,1.11l-0.12,1.19l-0.49,0.21l-1.25,-0.15l-0.3,0.16l-0.67,1.24l-1.01,-0.13l0.16,-0.92l0.22,-0.12l0.15,-0.24l0.09,-1.37l0.49,-0.48l0.42,0.18l0.25,-0.01l1.26,-0.65Z" data-code="RW" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M469.75,168.65l0.21,-0.21l0.36,-1.44l-0.08,-0.29l-1.06,-1.03l0.54,-1.16l-0.28,-0.43l-0.26,0.0l0.55,-0.67l-0.01,-0.39l-0.77,-0.86l-0.45,-0.89l1.56,-0.67l1.39,0.12l1.22,1.1l0.26,0.91l0.16,0.19l1.38,0.66l0.17,1.12l0.14,0.21l1.46,0.9l0.35,-0.03l0.62,-0.54l0.09,0.06l-0.28,0.25l-0.03,0.42l0.29,0.34l-0.44,0.5l-0.07,0.26l0.22,1.12l0.07,0.14l1.02,1.1l-0.81,0.84l-0.42,0.96l0.04,0.3l0.12,0.15l-0.15,0.16l-1.04,0.04l-0.39,0.08l0.33,-0.81l-0.29,-0.41l-0.21,0.01l-0.39,-0.45l-0.13,-0.09l-0.32,-0.11l-0.27,-0.4l-0.14,-0.11l-0.4,-0.16l-0.31,-0.37l-0.34,-0.09l-0.45,0.17l-0.18,0.18l-0.29,0.84l-0.96,-0.65l-0.81,-0.33l-0.32,-0.37l-0.22,-0.18Z" data-code="RS" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M478.13,133.31l-0.14,-0.63l0.25,-0.88l-0.15,-0.35l-1.17,-0.58l-2.43,-0.57l-0.45,-2.51l2.58,-0.97l4.14,0.22l2.3,-0.32l0.26,0.54l0.22,0.17l1.26,0.22l2.25,1.6l0.19,1.23l-1.87,1.01l-0.14,0.18l-0.54,1.83l-2.54,1.21l-2.18,-0.02l-0.52,-0.91l-0.18,-0.14l-1.11,-0.32Z" data-code="LT" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M435.95,147.99l0.33,0.49l-0.11,1.07l-0.39,0.04l-0.29,-0.15l0.21,-1.4l0.25,-0.05Z" data-code="LU" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M401.37,273.67l-0.32,0.01l-2.48,-1.15l-2.24,-1.89l-2.14,-1.38l-1.47,-1.42l0.44,-0.59l0.05,-0.13l0.12,-0.65l1.07,-1.3l1.08,-1.09l0.52,-0.07l0.43,-0.18l0.84,1.24l-0.15,0.89l0.07,0.25l0.49,0.54l0.22,0.1l0.71,0.01l0.27,-0.16l0.42,-0.83l0.19,0.02l-0.06,0.52l0.23,1.12l-0.5,1.03l0.06,0.35l0.73,0.69l0.14,0.08l0.71,0.15l0.92,0.91l0.06,0.76l-0.17,0.22l-0.06,0.15l-0.17,1.8Z" data-code="LR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M477.94,155.19l1.02,-0.64l1.49,0.33l1.52,0.01l1.09,0.73l0.32,0.01l0.81,-0.46l1.8,-0.3l0.18,-0.1l0.54,-0.64l0.86,0.0l0.64,0.26l0.71,0.87l0.8,1.35l1.39,1.81l0.07,1.25l-0.26,1.3l0.01,0.15l0.45,1.42l0.15,0.18l1.12,0.57l0.25,0.01l1.05,-0.45l0.86,0.4l0.03,0.43l-0.92,0.51l-0.63,-0.24l-0.4,0.22l-0.64,3.41l-1.12,-0.24l-1.78,-1.09l-0.23,-0.04l-2.95,0.71l-1.25,0.77l-3.55,-0.16l-1.89,-0.47l-0.14,-0.0l-0.75,0.17l-0.61,-1.07l-0.3,-0.36l0.36,-0.32l-0.04,-0.48l-0.62,-0.38l-0.36,0.03l-0.62,0.54l-1.15,-0.71l-0.18,-1.14l-0.17,-0.22l-1.4,-0.67l-0.24,-0.86l-0.09,-0.14l-0.96,-0.87l1.49,-0.44l0.16,-0.11l1.51,-2.14l1.15,-2.09l1.44,-0.63Z" data-code="RO" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M383.03,256.73l-1.12,-0.88l-0.14,-0.06l-0.94,-0.15l-0.43,-0.54l0.01,-0.27l-0.13,-0.26l-0.68,-0.48l-0.05,-0.16l0.99,-0.31l0.77,0.08l0.15,-0.02l0.61,-0.26l4.25,0.1l-0.02,0.44l-0.19,0.18l-0.08,0.29l0.17,0.66l-0.17,0.14l-0.44,0.0l-0.16,0.05l-0.57,0.37l-0.66,-0.04l-0.24,0.1l-0.92,1.03Z" data-code="GW" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M195.13,249.89l-1.05,-0.35l-1.5,-0.04l-1.06,-0.47l-1.19,-0.93l0.04,-0.53l0.27,-0.55l-0.03,-0.31l-0.24,-0.32l1.02,-1.77l3.04,-0.01l0.3,-0.28l0.06,-0.88l-0.19,-0.3l-0.3,-0.11l-0.23,-0.45l-0.11,-0.12l-0.9,-0.58l-0.35,-0.33l0.37,-0.0l0.3,-0.3l0.0,-1.15l4.05,0.02l-0.02,1.74l-0.2,2.89l0.3,0.32l0.67,-0.0l0.75,0.42l0.4,-0.11l-0.62,0.53l-1.17,0.7l-0.13,0.16l-0.18,0.49l0.0,0.21l0.14,0.34l-0.35,0.44l-0.49,0.13l-0.2,0.41l0.03,0.06l-0.27,0.16l-0.86,0.64l-0.12,0.22ZM199.35,245.38l0.07,-0.13l0.05,0.02l-0.13,0.11Z" data-code="GT" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M487.2,174.55l-0.64,1.54l-0.43,0.24l-1.41,-0.08l-1.28,-0.28l-0.14,0.0l-3.03,0.77l-0.13,0.51l1.39,1.34l-0.78,0.29l-1.2,0.0l-1.23,-1.42l-0.47,0.02l-0.47,0.65l-0.04,0.27l0.56,1.76l0.06,0.11l1.02,1.12l-0.66,0.45l-0.04,0.46l1.39,1.35l1.15,0.79l0.02,1.06l-1.91,-0.63l-0.36,0.42l0.56,1.12l-1.2,0.23l-0.22,0.4l0.8,2.14l-1.15,0.02l-1.89,-1.15l-0.89,-2.19l-0.43,-1.91l-0.05,-0.11l-0.98,-1.35l-1.24,-1.62l-0.13,-0.63l1.07,-1.32l0.06,-0.14l0.13,-0.81l0.68,-0.36l0.16,-0.25l0.03,-0.54l1.4,-0.23l0.12,-0.05l0.87,-0.6l1.26,0.05l0.25,-0.11l0.34,-0.43l0.33,-0.07l1.81,0.08l0.13,-0.02l1.87,-0.77l1.64,0.97l0.19,0.04l2.28,-0.28l0.26,-0.29l0.02,-0.95l0.56,0.36ZM480.44,192.0l1.05,0.74l0.01,0.0l-1.26,-0.23l0.2,-0.51ZM481.76,192.79l1.86,-0.15l1.53,0.17l-0.02,0.19l0.34,0.3l-2.28,0.15l0.01,-0.13l-0.25,-0.31l-1.19,-0.22ZM485.65,193.28l0.65,-0.16l-0.05,0.12l-0.6,0.04Z" data-code="GR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M444.81,282.04l-0.21,-0.17l0.74,-2.4l3.56,0.05l0.02,2.42l-3.34,-0.02l-0.76,0.13Z" data-code="GQ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M271.34,264.25l1.43,0.81l1.44,1.53l0.06,1.19l0.28,0.28l0.84,0.05l2.13,1.92l-0.34,1.93l-1.37,0.59l-0.17,0.34l0.12,0.51l-0.43,1.21l0.03,0.26l1.11,1.82l0.26,0.14l0.56,0.0l0.32,1.29l1.25,1.78l-0.08,0.01l-1.34,-0.21l-0.24,0.06l-0.78,0.64l-1.06,0.41l-0.76,0.1l-0.22,0.15l-0.18,0.32l-0.95,-0.1l-1.38,-1.05l-0.19,-1.13l-0.6,-1.18l0.37,-1.96l0.65,-0.83l0.03,-0.32l-0.57,-1.17l-0.15,-0.14l-0.62,-0.27l0.25,-0.85l-0.08,-0.3l-0.58,-0.58l-0.24,-0.09l-1.15,0.1l-1.41,-1.58l0.48,-0.49l0.09,-0.22l-0.04,-0.92l1.31,-0.34l0.73,-0.52l0.04,-0.44l-0.75,-0.82l0.16,-0.66l1.74,-1.3Z" data-code="GY" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M525.41,174.19l0.26,-0.88l-0.0,-0.17l-0.63,-2.06l-0.1,-0.15l-1.45,-1.12l-0.11,-0.05l-1.31,-0.33l-0.66,-0.69l1.97,0.48l3.65,0.49l3.3,1.41l0.39,0.5l0.33,0.1l1.43,-0.45l2.14,0.58l0.7,1.14l0.13,0.12l1.06,0.47l-0.18,0.11l-0.08,0.43l1.08,1.41l-0.06,0.06l-1.16,-0.15l-1.82,-0.84l-0.31,0.04l-0.55,0.44l-3.29,0.44l-2.32,-1.41l-0.17,-0.04l-2.25,0.12Z" data-code="GE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M412.82,118.6l-2.31,3.4l-0.0,0.33l0.31,0.13l2.52,-0.49l2.34,0.02l-0.56,2.51l-2.22,3.13l0.22,0.47l2.43,0.21l2.35,4.35l0.17,0.14l1.58,0.51l1.49,3.78l0.73,1.37l0.2,0.15l2.76,0.59l-0.25,1.75l-1.18,0.91l-0.08,0.39l0.87,1.49l-1.96,1.51l-3.31,-0.02l-4.15,0.88l-1.07,-0.59l-0.35,0.04l-1.55,1.44l-2.17,-0.35l-0.22,0.05l-1.61,1.15l-0.78,-0.38l3.31,-3.12l2.18,-0.7l0.21,-0.31l-0.26,-0.27l-3.78,-0.54l-0.48,-0.9l2.3,-0.92l0.13,-0.46l-1.29,-1.71l0.39,-1.83l3.46,0.29l0.32,-0.24l0.37,-1.99l-0.06,-0.24l-1.71,-2.17l-0.18,-0.11l-2.91,-0.58l-0.43,-0.68l0.82,-1.4l-0.03,-0.35l-0.82,-0.97l-0.46,0.01l-0.85,1.05l-0.11,-2.6l-0.05,-0.16l-1.19,-1.7l0.86,-3.53l1.81,-2.75l1.88,0.26l2.38,-0.24ZM406.39,132.84l-1.09,1.92l-1.65,-0.62l-1.26,0.02l0.41,-1.46l0.0,-0.16l-0.42,-1.51l1.62,-0.11l2.39,1.92Z" data-code="GB" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M448.76,294.47l-2.38,-2.34l-1.63,-2.04l-1.46,-2.48l0.06,-0.66l0.54,-0.81l0.61,-1.82l0.46,-1.69l0.63,-0.11l3.62,0.03l0.3,-0.3l-0.02,-2.75l0.88,-0.12l1.47,0.32l0.13,0.0l1.39,-0.3l-0.13,0.87l0.03,0.19l0.7,1.29l0.3,0.16l1.74,-0.19l0.36,0.29l-1.01,2.7l0.05,0.29l1.13,1.42l0.25,1.82l-0.3,1.56l-0.64,0.99l-1.93,-0.09l-1.26,-1.13l-0.5,0.17l-0.16,0.91l-1.48,0.27l-0.12,0.05l-0.86,0.63l-0.08,0.39l0.81,1.42l-1.48,1.08Z" data-code="GA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M399.83,265.31l-0.69,-0.06l-0.3,0.16l-0.43,0.85l-0.39,-0.01l-0.3,-0.33l0.14,-0.87l-0.05,-0.22l-1.05,-1.54l-0.37,-0.11l-0.61,0.27l-0.84,0.12l0.02,-0.54l-0.04,-0.17l-0.35,-0.57l0.07,-0.63l-0.03,-0.17l-0.57,-1.11l-0.7,-0.9l-0.24,-0.12l-2.0,-0.0l-0.19,0.07l-0.51,0.42l-0.6,0.05l-0.21,0.11l-0.43,0.55l-0.3,0.7l-1.04,0.86l-0.91,-1.24l-1.0,-1.02l-0.69,-0.37l-0.52,-0.42l-0.3,-1.11l-0.37,-0.56l-0.1,-0.1l-0.4,-0.23l0.77,-0.85l0.62,0.04l0.18,-0.05l0.58,-0.38l0.46,-0.0l0.19,-0.07l0.39,-0.34l0.1,-0.3l-0.17,-0.67l0.15,-0.14l0.09,-0.2l0.03,-0.57l0.87,0.02l1.76,0.6l0.13,0.01l0.55,-0.06l0.22,-0.13l0.08,-0.12l1.18,0.17l0.17,-0.02l0.09,0.56l0.3,0.25l0.4,-0.0l0.14,-0.03l0.56,-0.29l0.23,0.05l0.63,0.59l0.15,0.07l1.07,0.2l0.24,-0.06l0.65,-0.52l0.77,-0.32l0.55,-0.32l0.3,0.04l0.44,0.45l0.34,0.74l0.84,0.87l-0.35,0.45l-0.06,0.15l-0.1,0.82l0.42,0.31l0.35,-0.16l0.05,0.04l-0.1,0.59l0.09,0.27l0.42,0.4l-0.06,0.02l-0.18,0.21l-0.2,0.86l0.03,0.21l0.56,1.02l0.52,1.71l-0.65,0.21l-0.15,0.12l-0.24,0.35l-0.03,0.28l0.16,0.41l-0.1,0.76l-0.12,0.0Z" data-code="GN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M379.18,251.48l0.15,-0.55l2.51,-0.07l0.21,-0.09l0.48,-0.52l0.58,-0.03l0.91,0.58l0.16,0.05l0.78,0.01l0.14,-0.03l0.59,-0.31l0.16,0.24l-0.71,0.38l-0.94,-0.04l-1.02,-0.51l-0.3,0.01l-0.86,0.55l-0.37,0.02l-0.14,0.04l-0.53,0.31l-1.81,-0.04Z" data-code="GM" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M304.13,6.6l8.19,-3.63l8.72,0.28l0.19,-0.06l3.12,-2.28l8.75,-0.61l19.94,0.8l14.93,4.75l-3.92,2.01l-9.52,0.27l-13.48,0.6l-0.27,0.2l0.09,0.33l1.26,1.09l0.22,0.07l8.81,-0.67l7.49,2.07l0.19,-0.01l4.68,-1.78l1.76,1.84l-2.59,3.26l-0.01,0.36l0.34,0.11l6.35,-2.2l12.09,-2.32l7.31,1.14l1.17,2.13l-9.9,4.05l-1.43,1.32l-7.91,0.98l-0.26,0.31l0.29,0.29l5.25,0.25l-2.63,3.72l-2.02,3.61l-0.04,0.15l0.08,6.05l0.07,0.19l2.61,3.0l-3.4,0.2l-4.12,1.66l-0.04,0.54l4.5,2.67l0.53,3.9l-2.39,0.42l-0.19,0.48l2.91,3.83l-5.0,0.32l-0.27,0.22l0.12,0.33l2.69,1.84l-0.65,1.35l-3.36,0.71l-3.46,0.01l-0.21,0.51l3.05,3.15l0.02,1.53l-4.54,-1.79l-0.32,0.06l-1.29,1.26l0.11,0.5l3.33,1.15l3.17,2.74l0.85,3.29l-4.0,0.78l-1.83,-1.66l-3.1,-2.64l-0.36,-0.02l-0.13,0.33l0.8,2.92l-2.76,2.26l-0.09,0.33l0.28,0.2l6.59,0.19l2.47,0.18l-5.86,3.38l-6.76,3.43l-7.26,1.48l-2.73,0.02l-0.16,0.05l-2.67,1.72l-3.44,4.42l-5.28,2.86l-1.73,0.18l-3.33,1.01l-3.59,0.96l-0.15,0.1l-2.15,2.52l-0.07,0.19l-0.03,2.76l-1.21,2.49l-4.03,3.1l-0.1,0.33l0.98,2.94l-2.31,6.57l-3.21,0.21l-3.6,-3.0l-0.19,-0.07l-4.9,-0.02l-2.29,-1.97l-1.69,-3.78l-4.31,-4.86l-1.23,-2.52l-0.34,-3.58l-0.08,-0.17l-3.35,-3.67l0.85,-2.92l-0.09,-0.31l-1.5,-1.34l2.33,-4.7l3.67,-1.57l0.15,-0.13l1.02,-1.93l0.52,-3.47l-0.44,-0.31l-2.85,1.57l-1.33,0.64l-2.12,0.59l-2.81,-1.32l-0.15,-2.79l0.88,-2.17l2.09,-0.06l5.07,1.2l0.34,-0.17l-0.11,-0.37l-4.3,-2.9l-2.24,-1.58l-0.25,-0.05l-2.38,0.62l-1.7,-0.93l2.62,-4.1l-0.03,-0.36l-1.51,-1.75l-1.97,-3.3l-3.01,-5.21l-0.1,-0.11l-3.04,-1.85l0.03,-1.94l-0.18,-0.28l-6.82,-3.01l-5.35,-0.38l-6.69,0.21l-6.03,0.37l-2.81,-1.59l-3.84,-2.9l5.94,-1.5l5.01,-0.28l0.28,-0.29l-0.26,-0.31l-10.68,-1.38l-5.38,-2.1l0.27,-1.68l9.3,-2.6l9.18,-2.68l0.19,-0.16l0.97,-2.05l-0.18,-0.42l-6.29,-1.91l1.81,-1.9l8.58,-4.05l3.6,-0.63l0.23,-0.4l-0.92,-2.37l5.59,-1.5l7.66,-0.95l7.58,-0.05l2.65,1.84l0.31,0.02l6.52,-3.29l5.85,2.24l3.55,0.49l5.17,1.95l0.38,-0.16l-0.13,-0.39l-5.77,-3.16l0.29,-2.26Z" data-code="GL" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M540.87,207.81l0.41,0.94l-0.18,0.51l0.0,0.21l0.65,1.66l-1.15,0.05l-0.54,-1.12l-0.24,-0.17l-1.73,-0.2l1.44,-2.06l1.33,0.18Z" data-code="KW" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M423.16,269.88l-3.58,1.34l-1.41,0.87l-2.13,0.69l-1.91,-0.61l0.09,-0.75l-0.03,-0.17l-1.04,-2.07l0.62,-2.7l1.04,-2.08l0.03,-0.19l-1.0,-5.46l0.05,-1.12l4.04,-0.11l1.08,0.18l0.18,-0.03l0.72,-0.36l0.75,0.13l-0.11,0.48l0.06,0.26l0.98,1.22l-0.0,1.77l0.24,1.99l0.05,0.13l0.55,0.81l-0.52,2.14l0.19,1.37l0.69,1.66l0.38,0.62Z" data-code="GH" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M568.16,231.0l-0.08,0.1l-0.84,1.61l-0.93,-0.11l-0.27,0.11l-0.58,0.73l-0.4,1.32l-0.01,0.14l0.29,1.61l-0.07,0.09l-1.0,-0.01l-0.16,0.04l-1.56,0.97l-0.14,0.2l-0.23,1.17l-0.41,0.4l-1.44,-0.02l-0.17,0.05l-0.98,0.65l-0.13,0.25l0.01,0.87l-0.97,0.57l-1.27,-0.22l-0.19,0.03l-1.63,0.84l-0.88,0.11l-2.55,-5.57l7.2,-2.49l0.19,-0.19l1.67,-5.23l-0.03,-0.25l-1.1,-1.78l0.05,-0.89l0.68,-1.03l0.05,-0.16l0.01,-0.89l0.96,-0.44l0.07,-0.5l-0.32,-0.26l0.16,-1.31l0.85,-0.01l1.03,1.67l0.09,0.09l1.4,0.96l0.11,0.05l1.82,0.34l1.37,0.45l1.75,2.32l0.13,0.1l0.7,0.26l-0.0,0.3l-1.25,2.19l-1.01,0.8ZM561.88,218.47l-0.01,0.02l-0.15,-0.29l0.3,-0.38l-0.14,0.65Z" data-code="OM" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M543.2,261.06l-1.07,1.46l-1.65,1.99l-1.91,0.01l-8.08,-2.95l-0.89,-0.84l-0.9,-1.19l-0.81,-1.23l0.44,-0.73l0.76,-1.12l0.49,0.28l0.52,1.05l1.13,1.06l0.2,0.08l1.24,0.01l2.42,-0.65l2.77,-0.31l2.17,-0.78l1.31,-0.19l0.84,-0.43l1.03,-0.06l-0.01,4.54Z" data-code="_3" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M384.23,230.37l0.07,-0.06l0.28,-0.89l0.99,-1.13l0.07,-0.13l0.8,-3.54l3.4,-2.8l0.09,-0.13l0.76,-2.17l0.07,5.5l-2.07,0.21l-0.24,0.17l-0.61,1.36l-0.02,0.16l0.43,3.46l-4.01,-0.01ZM391.82,218.2l0.07,-0.06l0.75,-1.93l1.86,-0.25l0.94,0.34l1.14,0.0l0.18,-0.06l0.73,-0.56l1.41,-0.08l-0.0,2.72l-7.08,-0.12Z" data-code="_2" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M472.71,172.84l-0.07,-0.43l-0.16,-0.22l-0.53,-0.27l-0.38,-0.58l0.3,-0.43l0.51,-0.19l0.18,-0.18l0.3,-0.87l0.12,-0.04l0.22,0.26l0.12,0.09l0.38,0.15l0.28,0.41l0.15,0.12l0.34,0.12l0.43,0.5l0.15,0.07l-0.12,0.3l-0.27,0.32l-0.03,0.18l-0.31,0.06l-1.48,0.47l-0.15,0.17Z" data-code="_1" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M503.54,192.92l0.09,-0.17l0.41,0.01l-0.08,0.01l-0.42,0.15ZM504.23,192.76l1.02,0.02l0.4,-0.13l-0.09,0.29l0.03,0.08l-0.35,0.16l-0.24,-0.04l-0.06,-0.1l-0.18,-0.17l-0.19,-0.08l-0.33,-0.02Z" data-code="_0" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M510.26,200.93l0.28,-0.57l2.53,1.0l0.27,-0.02l4.57,-2.77l0.84,2.84l-0.28,0.25l-4.95,1.37l-0.14,0.49l2.24,2.48l-0.5,0.28l-0.13,0.14l-0.35,0.78l-1.76,0.35l-0.2,0.14l-0.57,0.94l-0.94,0.73l-2.45,-0.38l-0.03,-0.12l1.23,-4.32l-0.04,-1.1l0.34,-0.75l0.03,-0.12l0.0,-1.63Z" data-code="JO" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M455.49,162.73l1.53,0.09l0.24,-0.1l0.29,-0.34l0.64,0.38l0.14,0.04l0.98,0.06l0.32,-0.3l-0.01,-0.66l0.67,-0.25l0.19,-0.22l0.21,-1.11l1.72,-0.72l0.65,0.32l1.94,1.37l2.07,0.6l0.22,-0.02l0.67,-0.33l0.47,0.94l0.67,0.76l-0.63,0.77l-0.91,-0.55l-0.16,-0.04l-1.69,0.04l-2.2,-0.51l-1.17,0.07l-0.21,0.11l-0.36,0.42l-0.67,-0.53l-0.46,0.12l-0.52,1.29l0.05,0.31l1.21,1.42l0.58,0.99l1.15,1.14l0.95,0.68l0.92,1.23l0.1,0.09l1.75,0.91l-1.87,-0.89l-1.5,-1.11l-2.23,-0.88l-1.77,-1.9l0.12,-0.06l0.1,-0.47l-1.07,-1.22l-0.04,-0.94l-0.21,-0.27l-1.61,-0.49l-0.35,0.14l-0.53,0.93l-0.41,-0.57l0.04,-0.73Z" data-code="HR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M237.82,234.68l1.35,0.1l1.95,0.37l0.18,1.15l-0.16,0.83l-0.51,0.37l-0.06,0.44l0.57,0.68l-0.02,0.22l-1.31,-0.35l-1.26,0.17l-1.49,-0.18l-0.15,0.02l-1.03,0.43l-1.02,-0.61l0.09,-0.36l2.04,0.32l1.9,0.21l0.19,-0.05l0.9,-0.58l0.05,-0.47l-1.05,-1.03l0.02,-0.86l-0.23,-0.3l-1.13,-0.29l0.18,-0.23Z" data-code="HT" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M461.96,157.92l0.68,-1.66l-0.03,-0.29l-0.15,-0.22l0.84,-0.0l0.3,-0.26l0.12,-0.84l0.88,0.57l0.98,0.38l0.16,0.01l2.1,-0.39l0.23,-0.21l0.14,-0.45l0.88,-0.1l1.06,-0.43l0.13,0.1l0.28,0.04l1.18,-0.4l0.14,-0.1l0.52,-0.67l0.63,-0.15l2.6,0.95l0.26,-0.03l0.38,-0.23l1.12,0.7l0.1,0.49l-1.31,0.57l-0.14,0.13l-1.18,2.14l-1.44,2.04l-1.85,0.55l-1.51,-0.13l-0.14,0.02l-1.92,0.82l-0.85,0.42l-1.91,-0.55l-1.83,-1.31l-0.74,-0.37l-0.44,-0.97l-0.26,-0.18Z" data-code="HU" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M202.48,251.87l-0.33,-0.62l-0.18,-0.14l-0.5,-0.15l0.13,-0.76l-0.11,-0.28l-0.34,-0.28l-0.6,-0.23l-0.18,-0.01l-0.81,0.22l-0.16,-0.24l-0.72,-0.39l-0.51,-0.48l-0.12,-0.07l-0.31,-0.09l0.24,-0.3l0.04,-0.3l-0.16,-0.4l0.1,-0.28l1.14,-0.69l1.0,-0.86l0.09,0.04l0.3,-0.05l0.47,-0.39l0.49,-0.03l0.14,0.13l0.29,0.06l0.31,-0.1l1.16,0.22l1.24,-0.08l0.81,-0.28l0.29,-0.25l0.63,0.1l0.69,0.18l0.65,-0.06l0.49,-0.2l1.04,0.32l0.38,0.06l0.7,0.44l0.71,0.56l0.92,0.41l0.1,0.11l-0.11,-0.01l-0.23,0.09l-0.3,0.3l-0.76,0.29l-0.58,0.0l-0.15,0.04l-0.45,0.26l-0.31,-0.07l-0.37,-0.34l-0.28,-0.07l-0.26,0.07l-0.18,0.15l-0.23,0.43l-0.04,-0.0l-0.33,0.28l-0.03,0.4l-0.76,0.61l-0.45,0.3l-0.15,0.16l-0.51,-0.36l-0.41,0.06l-0.45,0.56l-0.41,-0.01l-0.59,0.06l-0.27,0.31l0.04,0.96l-0.07,0.0l-0.25,0.16l-0.24,0.45l-0.42,0.06Z" data-code="HN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M254.95,238.31l1.15,0.21l0.2,0.23l-0.36,0.36l-1.76,-0.01l-1.2,0.07l-0.09,-0.69l0.17,-0.18l1.89,0.01Z" data-code="PR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M509.66,201.06l-0.0,1.44l-0.29,0.63l-0.59,0.19l0.02,-0.11l0.52,-0.31l-0.02,-0.53l-0.41,-0.2l0.36,-1.28l0.41,0.17Z" data-code="PS" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M398.65,173.6l0.75,-0.63l0.7,-0.3l0.51,1.2l0.28,0.18l1.48,-0.0l0.2,-0.08l0.33,-0.3l1.16,0.08l0.52,1.11l-0.95,0.66l-0.13,0.24l-0.03,2.2l-0.33,0.35l-0.08,0.18l-0.08,1.17l-0.86,0.19l-0.2,0.44l0.93,1.64l-0.64,1.79l0.07,0.31l0.72,0.72l-0.24,0.56l-0.9,1.05l-0.07,0.26l0.17,0.77l-0.73,0.54l-1.18,-0.36l-0.16,-0.0l-0.85,0.21l0.31,-1.81l-0.23,-1.87l-0.23,-0.25l-0.99,-0.24l-0.49,-0.91l0.18,-1.72l0.93,-0.99l0.08,-0.16l0.17,-1.17l0.52,-1.76l-0.04,-1.36l-0.51,-1.14l-0.09,-0.8Z" data-code="PT" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M264.33,341.43l0.93,-2.96l0.07,-1.42l1.1,-2.1l4.19,-0.73l2.22,0.04l2.12,1.21l0.07,0.76l0.7,1.38l-0.16,3.48l0.24,0.31l2.64,0.5l0.19,-0.03l0.9,-0.45l1.47,0.62l0.38,0.64l0.23,2.35l0.3,1.07l0.25,0.21l0.93,0.12l0.16,-0.02l0.8,-0.37l0.61,0.33l-0.0,1.25l-0.33,1.53l-0.5,1.57l-0.39,2.26l-2.14,1.94l-1.85,0.4l-2.74,-0.4l-2.13,-0.62l2.26,-3.75l0.03,-0.24l-0.36,-1.18l-0.17,-0.19l-2.55,-1.03l-3.04,-1.95l-2.07,-0.43l-4.4,-4.12Z" data-code="PY" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M213.65,263.79l0.18,-0.43l0.02,-0.18l-0.06,-0.28l0.23,-0.18l-0.01,-0.48l-0.4,-0.29l-0.01,-0.62l0.57,-0.13l0.68,0.69l-0.04,0.39l0.26,0.33l1.0,0.11l0.27,-0.1l0.49,0.44l0.24,0.07l1.34,-0.22l1.04,-0.62l1.49,-0.5l0.86,-0.73l0.99,0.11l0.18,0.28l1.35,0.08l1.02,0.4l0.78,0.72l0.71,0.53l-0.1,0.12l-0.05,0.3l0.53,1.34l-0.28,0.44l-0.6,-0.13l-0.36,0.22l-0.2,0.76l-0.41,-0.36l-0.44,-1.12l0.49,-0.53l-0.14,-0.49l-0.51,-0.14l-0.41,-0.72l-0.11,-0.11l-1.25,-0.7l-0.19,-0.04l-1.1,0.16l-0.22,0.15l-0.47,0.81l-0.9,0.56l-0.49,0.08l-0.22,0.17l-0.25,0.52l0.05,0.32l0.93,1.07l-0.41,0.21l-0.29,0.3l-0.81,0.09l-0.36,-1.26l-0.53,-0.1l-0.21,0.28l-0.5,-0.09l-0.44,-0.88l-0.22,-0.16l-0.99,-0.16l-0.61,-0.28l-0.13,-0.03l-1.0,0.0Z" data-code="PA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M808.4,298.6l0.62,0.46l1.19,1.56l1.04,0.77l-0.18,0.37l-0.42,0.15l-0.92,-0.82l-1.05,-1.53l-0.27,-0.96ZM804.09,296.06l-0.3,0.26l-0.36,-1.11l-0.66,-1.06l-2.55,-1.89l-1.42,-0.59l0.17,-0.15l1.16,0.6l0.85,0.55l1.01,0.58l0.97,1.02l0.9,0.76l0.24,1.03ZM796.71,297.99l0.15,0.82l0.34,0.24l1.43,-0.19l0.19,-0.11l0.68,-0.82l1.36,-0.87l0.13,-0.31l-0.21,-1.13l1.04,-0.03l0.3,0.25l-0.04,1.17l-0.74,1.34l-1.17,0.18l-0.22,0.15l-0.35,0.62l-2.51,1.13l-1.21,-0.0l-1.99,-0.71l-1.19,-0.58l0.07,-0.28l1.98,0.32l1.46,-0.2l0.24,-0.21l0.25,-0.79ZM789.24,303.52l0.11,0.15l2.19,1.62l1.6,2.62l0.27,0.14l1.09,-0.06l-0.07,0.77l0.23,0.32l1.23,0.27l-0.14,0.09l0.05,0.53l2.39,0.95l-0.11,0.28l-1.33,0.14l-0.51,-0.55l-0.18,-0.09l-4.59,-0.65l-1.87,-1.55l-1.38,-1.35l-1.28,-2.17l-0.16,-0.13l-3.27,-1.1l-0.19,0.0l-2.12,0.72l-1.58,0.85l-0.15,0.31l0.28,1.63l-1.65,0.73l-1.37,-0.4l-2.3,-0.09l-0.08,-15.65l3.95,1.57l4.58,1.42l1.67,1.25l1.32,1.19l0.36,1.39l0.19,0.21l4.06,1.51l0.39,0.85l-1.9,0.22l-0.25,0.39l0.55,1.68Z" data-code="PG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M246.44,329.21l-0.63,1.25l-1.05,0.54l-2.25,-1.33l-0.19,-0.93l-0.16,-0.21l-4.95,-2.58l-4.46,-2.79l-1.87,-1.52l-0.94,-1.91l0.33,-0.6l-0.01,-0.31l-2.11,-3.33l-2.46,-4.66l-2.36,-5.02l-1.04,-1.18l-0.77,-1.81l-0.08,-0.11l-1.95,-1.64l-1.54,-0.88l0.61,-0.85l0.02,-0.31l-1.15,-2.27l0.69,-1.56l1.59,-1.26l0.12,0.42l-0.56,0.47l-0.11,0.25l0.07,0.92l0.36,0.27l0.97,-0.19l0.85,0.23l0.99,1.19l0.41,0.05l1.42,-1.03l0.11,-0.16l0.46,-1.64l1.45,-2.06l2.92,-0.96l0.11,-0.07l2.73,-2.62l0.84,-1.72l0.02,-0.18l-0.3,-1.65l0.28,-0.1l1.49,1.06l0.77,1.14l0.1,0.09l1.08,0.6l1.43,2.55l0.21,0.15l1.86,0.31l0.18,-0.03l1.25,-0.6l0.77,0.37l0.17,0.03l1.4,-0.2l1.57,0.96l-1.45,2.29l0.23,0.46l0.63,0.05l0.66,0.7l-1.51,-0.08l-0.24,0.1l-0.27,0.31l-1.96,0.46l-2.95,1.74l-0.14,0.21l-0.17,1.1l-0.6,0.82l-0.05,0.23l0.21,1.13l-1.31,0.63l-0.17,0.27l0.0,0.91l-0.53,0.37l-0.1,0.37l1.04,2.27l1.31,1.46l-0.44,0.9l0.24,0.43l1.52,0.13l0.87,1.23l0.24,0.13l2.21,0.07l0.18,-0.06l1.55,-1.13l-0.14,3.22l0.23,0.3l1.14,0.29l0.16,-0.0l1.18,-0.36l1.97,3.71l-0.45,0.71l-0.04,0.14l-0.12,1.8l-0.05,2.07l-0.92,1.2l-0.03,0.31l0.38,0.8l-0.48,0.72l-0.02,0.3l1.01,2.02l-1.5,2.64Z" data-code="PE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M609.08,187.76l1.66,1.21l0.71,2.11l0.2,0.19l3.62,1.01l-1.98,1.95l-2.65,0.4l-3.75,-0.68l-0.26,0.08l-1.23,1.22l-0.07,0.31l0.89,2.46l0.88,1.92l0.1,0.12l1.67,1.14l-1.8,1.35l-0.12,0.25l0.04,1.85l-2.35,2.67l-1.59,2.79l-2.5,2.72l-2.76,-0.2l-0.24,0.09l-2.76,2.83l0.04,0.45l1.54,1.13l0.27,1.94l0.09,0.17l1.34,1.29l0.4,1.83l-5.14,-0.01l-0.22,0.09l-1.53,1.63l-1.52,-0.56l-0.76,-1.88l-1.93,-2.03l-0.25,-0.09l-4.6,0.5l-4.05,0.05l-3.1,0.33l0.77,-2.53l3.48,-1.33l0.19,-0.33l-0.21,-1.24l-0.19,-0.23l-1.01,-0.37l-0.06,-2.18l-0.17,-0.26l-2.32,-1.16l-0.96,-1.57l-0.56,-0.65l3.16,1.05l0.14,0.01l2.45,-0.4l1.44,0.33l0.3,-0.1l0.4,-0.47l1.58,0.22l0.14,-0.01l3.25,-1.14l0.2,-0.27l0.08,-2.23l1.23,-1.38l1.73,0.0l0.28,-0.2l0.22,-0.61l1.68,-0.32l0.86,0.24l0.27,-0.05l0.98,-0.78l0.11,-0.26l-0.13,-1.57l0.96,-1.52l1.51,-0.67l0.14,-0.41l-0.74,-1.4l1.86,0.07l0.26,-0.13l0.69,-1.01l0.05,-0.2l-0.09,-0.94l1.14,-1.09l0.09,-0.28l-0.29,-1.41l-0.51,-1.07l1.23,-1.05l2.6,-0.58l2.86,-0.33l1.33,-0.54l1.3,-0.29Z" data-code="PK" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M737.11,263.82l0.25,1.66l0.14,1.34l-0.54,1.46l-0.64,-1.79l-0.5,-0.1l-1.17,1.28l-0.05,0.32l0.74,1.71l-0.49,0.81l-2.6,-1.28l-0.61,-1.57l0.68,-1.07l-0.07,-0.4l-1.59,-1.19l-0.42,0.06l-0.69,0.91l-1.01,-0.08l-0.21,0.06l-1.58,1.2l-0.17,-0.3l0.87,-1.88l1.48,-0.66l1.18,-0.81l0.71,0.92l0.34,0.1l1.9,-0.69l0.18,-0.18l0.34,-0.94l1.57,-0.06l0.29,-0.32l-0.1,-1.38l1.41,0.83l0.36,2.06ZM734.94,254.42l0.56,2.24l-1.41,-0.49l-0.4,0.3l0.07,0.94l0.51,1.3l-0.54,0.26l-0.08,-1.34l-0.25,-0.28l-0.56,-0.1l-0.23,-0.91l1.03,0.14l0.34,-0.31l-0.03,-0.96l-0.06,-0.18l-1.14,-1.44l1.62,0.04l0.57,0.78ZM724.68,238.33l1.48,0.71l0.33,-0.04l0.44,-0.38l0.05,0.13l-0.37,0.97l0.01,0.23l0.81,1.75l-0.59,1.92l-1.37,0.79l-0.14,0.2l-0.39,2.07l0.01,0.14l0.56,2.04l0.23,0.21l1.33,0.28l0.14,-0.0l1.0,-0.27l2.82,1.28l-0.2,1.16l0.12,0.29l0.66,0.5l-0.13,0.56l-1.54,-0.99l-0.89,-1.29l-0.49,0.0l-0.44,0.65l-1.34,-1.28l-0.26,-0.08l-2.18,0.36l-0.96,-0.44l0.09,-0.72l0.69,-0.57l-0.01,-0.47l-0.75,-0.59l-0.47,0.14l-0.15,0.43l-0.86,-1.02l-0.34,-1.02l-0.07,-1.74l0.49,0.41l0.49,-0.21l0.26,-3.99l0.73,-2.1l1.23,0.0ZM731.12,258.92l-0.82,0.75l-0.83,1.64l-0.52,0.5l-1.17,-1.33l0.36,-0.47l0.62,-0.7l0.07,-0.15l0.24,-1.35l0.73,-0.08l-0.31,1.29l0.16,0.34l0.37,-0.09l1.21,-1.6l-0.12,1.24ZM726.66,255.58l0.85,0.45l0.14,0.03l1.28,-0.0l-0.03,0.62l-1.04,0.96l-1.15,0.55l-0.05,-0.71l0.17,-1.26l-0.01,-0.13l-0.16,-0.51ZM724.92,252.06l-0.45,1.5l-0.7,-0.83l-0.95,-1.43l1.44,0.06l0.67,0.7ZM717.48,261.28l-1.87,1.35l0.21,-0.3l1.81,-1.57l1.5,-1.75l0.97,-1.84l0.23,1.08l-1.56,1.33l-1.29,1.7Z" data-code="PH" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M458.8,144.25l-0.96,-1.98l0.18,-1.06l-0.01,-0.15l-0.62,-1.8l-0.82,-1.11l0.56,-0.73l0.05,-0.28l-0.51,-1.51l1.48,-0.87l3.88,-1.58l3.06,-1.14l2.23,0.52l0.15,0.66l0.29,0.23l2.4,0.04l3.11,0.39l4.56,-0.05l1.12,0.32l0.51,0.89l0.1,1.45l0.03,0.12l0.66,1.23l-0.01,1.08l-1.33,0.61l-0.14,0.41l0.74,1.5l0.07,1.53l1.22,2.79l-0.19,0.66l-1.09,0.33l-0.14,0.09l-2.27,2.72l-0.04,0.31l0.35,0.8l-2.22,-1.16l-0.21,-0.02l-1.72,0.44l-1.1,-0.31l-0.21,0.02l-1.3,0.61l-1.11,-1.02l-0.32,-0.05l-0.81,0.35l-1.15,-1.61l-0.21,-0.12l-1.65,-0.17l-0.19,-0.82l-0.23,-0.23l-1.72,-0.37l-0.34,0.17l-0.25,0.56l-0.88,-0.44l0.12,-0.69l-0.25,-0.35l-1.78,-0.27l-1.08,-0.97Z" data-code="PL" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M502.81,308.32l1.09,1.04l0.58,1.94l-0.39,0.66l-0.5,2.05l-0.0,0.14l0.45,1.95l-0.69,0.77l-0.06,0.11l-0.76,2.37l0.15,0.36l0.62,0.31l-6.85,1.9l-0.22,0.33l0.2,1.54l-1.62,0.3l-0.12,0.05l-1.43,1.02l-0.11,0.15l-0.25,0.73l-0.73,0.17l-0.14,0.08l-2.18,2.12l-1.33,1.6l-0.65,0.05l-0.83,-0.29l-2.75,-0.28l-0.24,-0.1l-0.15,-0.27l-0.99,-0.58l-0.12,-0.04l-1.73,-0.14l-1.88,0.54l-1.5,-1.48l-1.61,-2.01l0.11,-7.73l4.92,0.03l0.29,-0.37l-0.19,-0.79l0.34,-0.86l0.0,-0.21l-0.41,-1.11l0.26,-1.14l-0.01,-0.16l-0.12,-0.36l0.18,0.01l0.1,0.56l0.31,0.25l1.14,-0.06l1.44,0.21l0.76,1.05l0.19,0.12l2.01,0.35l0.19,-0.03l1.24,-0.65l0.44,1.03l0.22,0.18l1.81,0.34l0.85,0.99l1.02,1.39l0.24,0.12l1.92,0.02l0.3,-0.32l-0.21,-2.74l-0.47,-0.23l-0.53,0.36l-1.58,-0.89l-0.51,-0.34l0.29,-2.36l0.44,-2.99l-0.03,-0.18l-0.5,-0.99l0.61,-1.38l0.53,-0.24l3.26,-0.41l0.89,0.23l1.01,0.62l1.04,0.44l1.6,0.43l1.35,0.72Z" data-code="ZM" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M482.19,120.88l0.23,-1.68l-0.43,-0.31l-0.75,0.37l-1.34,-1.1l-0.18,-1.75l2.92,-0.95l3.07,-0.53l2.66,0.6l2.48,-0.1l0.18,0.31l-1.65,1.96l-0.06,0.26l0.71,3.25l-0.88,0.94l-1.85,-0.01l-2.08,-1.3l-1.14,-0.47l-0.2,-0.01l-1.69,0.51Z" data-code="EE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M508.07,208.8l-0.66,1.06l-0.53,2.03l-0.64,1.32l-0.32,0.26l-1.74,-1.85l-1.77,-3.86l-0.48,-0.09l-0.26,0.25l-0.07,0.32l1.04,2.88l1.55,2.76l1.89,4.18l0.94,1.48l0.83,1.54l2.08,2.73l-0.3,0.28l-0.1,0.23l0.08,1.72l0.11,0.22l2.91,2.37l-28.78,0.0l0.0,-19.06l-0.73,-2.2l0.61,-1.59l0.0,-0.2l-0.34,-1.04l0.73,-1.08l3.13,-0.04l2.36,0.72l2.48,0.81l1.15,0.43l0.23,-0.01l1.93,-0.87l1.02,-0.78l2.08,-0.21l1.59,0.31l0.62,1.24l0.52,0.03l0.46,-0.71l1.86,0.59l1.95,0.16l0.17,-0.04l0.92,-0.52l1.48,4.24Z" data-code="EG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M467.06,373.27l-0.13,-0.29l0.01,-1.58l-0.02,-0.12l-0.71,-1.64l0.59,-0.37l0.14,-0.26l-0.07,-2.13l-0.05,-0.15l-1.63,-2.58l-1.25,-2.31l-1.71,-3.37l0.88,-0.98l0.7,0.52l0.39,1.08l0.23,0.19l1.1,0.19l1.55,0.51l0.14,0.01l1.35,-0.2l0.11,-0.04l2.24,-1.39l0.14,-0.25l0.0,-9.4l0.16,0.09l1.39,2.38l-0.22,1.53l0.04,0.19l0.56,0.94l0.3,0.14l1.79,-0.27l0.16,-0.08l1.23,-1.18l1.17,-0.79l0.1,-0.12l0.57,-1.19l1.02,-0.52l0.9,0.28l1.16,0.73l0.14,0.05l2.04,0.13l0.13,-0.02l1.6,-0.62l0.18,-0.19l0.63,-1.93l1.18,-0.19l0.19,-0.12l0.78,-1.05l0.81,-1.71l2.18,-1.91l3.44,-1.88l0.89,0.02l1.17,0.43l0.21,-0.0l0.76,-0.29l1.07,0.21l1.15,3.55l0.63,1.82l-0.44,2.9l0.1,0.52l-0.74,-0.29l-0.18,-0.01l-0.72,0.19l-0.21,0.2l-0.22,0.74l-0.66,0.97l-0.05,0.18l0.02,0.93l0.09,0.21l1.49,1.46l0.27,0.08l1.47,-0.29l0.22,-0.18l0.43,-1.01l1.29,0.02l-0.51,1.63l-0.29,2.2l-0.59,1.12l-2.2,1.78l-1.06,1.39l-0.72,1.44l-1.39,1.93l-2.81,2.84l-1.75,1.65l-1.85,1.24l-2.55,1.06l-1.23,0.14l-0.24,0.18l-0.22,0.54l-1.27,-0.35l-0.2,0.01l-1.15,0.5l-2.62,-0.52l-0.12,0.0l-1.46,0.33l-0.98,-0.14l-0.16,0.02l-2.55,1.1l-2.11,0.44l-1.59,1.07l-0.93,0.06l-0.97,-0.92l-0.19,-0.08l-0.72,-0.04l-1.0,-1.16l-0.25,0.05ZM493.72,359.24l-1.12,-0.86l-0.31,-0.03l-1.23,0.59l-1.36,1.07l-1.39,1.78l0.01,0.38l1.88,2.11l0.31,0.09l0.9,-0.27l0.18,-0.15l0.4,-0.77l1.28,-0.39l0.18,-0.16l0.42,-0.88l0.76,-1.32l-0.05,-0.37l-0.87,-0.82Z" data-code="ZA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M220.2,293.48l1.25,-1.76l0.02,-0.31l-0.54,-1.09l-0.5,-0.06l-0.78,0.94l-1.03,-0.75l0.33,-0.46l0.05,-0.23l-0.38,-2.04l0.66,-0.28l0.17,-0.19l0.45,-1.52l0.93,-1.58l0.04,-0.2l-0.13,-0.78l1.19,-0.47l1.57,-0.91l2.35,1.34l0.17,0.04l0.28,-0.02l0.52,0.91l0.21,0.15l2.12,0.35l0.2,-0.03l0.55,-0.31l1.08,0.73l0.97,0.54l0.31,1.67l-0.71,1.49l-2.64,2.54l-2.95,0.97l-0.15,0.11l-1.53,2.18l-0.49,1.68l-1.1,0.8l-0.87,-1.05l-0.15,-0.1l-1.01,-0.27l-0.13,-0.0l-0.7,0.14l-0.03,-0.43l0.6,-0.5l0.1,-0.31l-0.26,-0.91Z" data-code="EC" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M470.27,171.7l0.38,0.19l0.45,-0.18l0.4,0.61l0.11,0.1l0.46,0.24l0.13,0.87l-0.3,0.95l-0.0,0.17l0.36,1.28l0.12,0.17l0.9,0.63l-0.03,0.44l-0.67,0.35l-0.16,0.22l-0.14,0.88l-0.96,1.18l-0.06,-0.03l-0.04,-0.48l-0.12,-0.22l-1.28,-0.92l-0.19,-1.25l0.2,-1.96l0.33,-0.89l-0.06,-0.3l-0.36,-0.41l-0.13,-0.75l0.66,-0.9Z" data-code="AL" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M461.62,299.93l0.55,1.67l0.73,1.54l1.56,2.18l0.28,0.12l1.66,-0.2l0.81,-0.34l1.28,0.33l0.33,-0.14l0.39,-0.67l0.56,-1.3l1.37,-0.09l0.27,-0.21l0.07,-0.23l0.67,-0.01l-0.13,0.53l0.29,0.37l2.74,-0.02l0.04,1.29l0.03,0.13l0.46,0.87l-0.35,1.52l0.18,1.55l0.07,0.16l0.75,0.85l-0.13,2.89l0.41,0.29l0.56,-0.21l1.11,0.05l1.5,-0.37l0.9,0.12l0.18,0.53l-0.27,1.15l0.01,0.17l0.4,1.08l-0.33,0.85l-0.01,0.18l0.12,0.51l-4.83,-0.03l-0.3,0.3l-0.12,8.13l0.07,0.19l1.69,2.1l1.27,1.25l-4.03,0.92l-5.93,-0.36l-1.66,-1.19l-0.18,-0.06l-10.15,0.11l-0.34,0.13l-1.35,-1.05l-0.17,-0.06l-1.62,-0.08l-1.6,0.45l-0.88,0.36l-0.17,-1.2l0.34,-2.19l0.85,-2.32l0.14,-1.13l0.79,-2.24l0.57,-1.0l1.42,-1.64l0.82,-1.15l0.05,-0.13l0.26,-1.88l-0.13,-1.51l-0.07,-0.16l-0.72,-0.87l-1.23,-2.91l0.09,-0.37l0.73,-0.95l0.05,-0.27l-1.27,-4.12l-1.19,-1.54l0.1,-0.2l0.86,-0.28l0.78,0.03l0.83,-0.29l7.12,0.03ZM451.81,298.94l-0.17,0.07l-0.5,-1.42l0.85,-0.92l0.53,-0.29l0.48,0.44l-0.56,0.32l-0.1,0.1l-0.41,0.65l-0.05,0.14l-0.07,0.91Z" data-code="AO" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M598.42,172.08l-1.37,0.54l-3.3,2.09l-0.11,0.12l-1.01,1.97l-0.56,0.01l-0.6,-1.24l-0.26,-0.17l-2.95,-0.09l-0.46,-2.22l-0.29,-0.24l-0.91,-0.02l0.17,-2.72l-0.12,-0.26l-3.0,-2.22l-0.2,-0.06l-4.29,0.24l-2.8,0.42l-2.36,-2.7l-6.4,-3.65l-0.23,-0.03l-6.45,1.83l-0.22,0.29l0.1,10.94l-0.84,0.1l-1.65,-2.21l-0.11,-0.09l-1.69,-0.84l-0.2,-0.02l-2.84,0.63l-0.14,0.07l-0.71,0.64l-0.02,-0.11l0.57,-1.17l0.0,-0.26l-0.48,-1.05l-0.17,-0.16l-2.78,-0.99l-1.08,-2.62l-0.13,-0.15l-1.24,-0.7l-0.04,-0.48l2.07,0.25l0.34,-0.29l0.09,-2.03l1.84,-0.44l2.12,0.45l0.36,-0.25l0.45,-3.04l-0.45,-2.06l-0.31,-0.23l-2.44,0.15l-2.07,-0.75l-0.23,0.01l-2.88,1.38l-2.21,0.62l-0.96,-0.38l0.22,-1.39l-0.06,-0.23l-1.6,-2.12l-0.25,-0.12l-1.72,0.08l-1.87,-1.91l1.33,-2.24l-0.06,-0.38l-0.55,-0.5l1.72,-3.08l2.3,1.7l0.48,-0.2l0.29,-2.26l4.99,-3.48l3.76,-0.08l5.46,2.27l2.96,1.33l0.26,-0.01l2.59,-1.36l3.82,-0.06l3.13,1.67l0.38,-0.09l0.63,-0.85l3.36,0.14l0.29,-0.19l0.63,-1.57l-0.13,-0.37l-3.64,-2.05l2.0,-1.36l0.1,-0.38l-0.32,-0.62l2.09,-0.76l0.13,-0.47l-1.65,-2.13l0.89,-0.91l9.27,-1.18l0.13,-0.05l1.17,-0.82l6.2,-1.27l2.26,-1.43l4.19,0.7l0.74,3.39l0.38,0.22l2.52,-0.81l2.9,1.06l-0.18,1.63l0.32,0.33l2.52,-0.23l5.0,-2.58l0.03,0.39l3.16,2.62l5.57,8.48l0.49,0.02l1.18,-1.53l3.22,1.78l0.21,0.03l3.5,-0.83l1.21,0.52l1.16,1.82l0.15,0.12l1.67,0.61l1.01,1.32l0.28,0.11l3.04,-0.41l1.1,1.64l-1.68,1.89l-1.97,0.28l-0.26,0.29l-0.12,3.09l-1.2,1.23l-4.81,-1.01l-0.35,0.2l-1.77,5.51l-1.14,0.62l-4.92,1.23l-0.2,0.41l2.14,5.06l-1.45,0.67l-0.17,0.31l0.15,1.28l-1.05,-0.3l-1.21,-1.04l-0.17,-0.07l-3.73,-0.32l-4.15,-0.08l-0.92,0.31l-3.46,-1.24l-0.22,0.01l-1.42,0.63l-0.17,0.21l-0.32,1.49l-3.82,-0.97l-0.15,0.0l-1.65,0.43l-0.2,0.17l-0.51,1.21Z" data-code="KZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M516.0,247.63l1.21,0.92l0.3,0.04l1.3,-0.53l0.46,0.41l0.19,0.08l1.65,0.03l2.05,0.96l0.67,0.88l1.07,0.79l1.0,1.45l0.7,0.68l-0.72,0.92l-0.85,1.19l-0.04,0.25l0.19,0.67l0.04,0.74l0.29,0.28l1.4,0.04l0.55,-0.15l0.23,0.19l-0.41,0.67l0.01,0.32l0.92,1.39l0.93,1.23l0.99,0.94l0.1,0.06l8.19,2.99l1.51,0.01l-6.51,6.95l-3.14,0.11l-0.18,0.06l-2.15,1.71l-1.51,0.04l-0.22,0.1l-0.6,0.69l-1.46,-0.0l-0.93,-0.78l-0.32,-0.04l-2.29,1.05l-0.12,0.1l-0.64,0.9l-1.44,-0.17l-0.51,-0.26l-0.17,-0.03l-0.56,0.07l-0.68,-0.02l-3.1,-2.08l-0.17,-0.05l-1.62,0.0l-0.68,-0.65l0.0,-1.28l-0.21,-0.29l-1.19,-0.38l-1.42,-2.63l-0.13,-0.12l-1.05,-0.53l-0.46,-1.0l-1.27,-1.23l-0.17,-0.08l-1.08,-0.13l0.53,-0.9l1.17,-0.05l0.26,-0.17l0.37,-0.77l0.03,-0.14l-0.03,-2.23l0.7,-2.49l1.08,-0.65l0.14,-0.19l0.24,-1.0l1.03,-1.85l1.47,-1.22l0.09,-0.12l1.02,-2.51l0.36,-1.96l2.62,0.48l0.33,-0.18l0.63,-1.55Z" data-code="ET" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M498.95,341.2l-1.16,-0.23l-0.16,0.01l-0.74,0.28l-1.11,-0.41l-1.02,-0.04l-1.52,-1.13l-0.12,-0.05l-1.79,-0.37l-0.65,-1.46l-0.01,-0.86l-0.22,-0.29l-0.99,-0.26l-2.74,-2.77l-0.77,-1.46l-0.52,-0.5l-0.72,-1.54l2.24,0.23l0.78,0.28l0.12,0.02l0.85,-0.06l0.21,-0.11l1.38,-1.66l2.11,-2.05l0.81,-0.18l0.22,-0.2l0.27,-0.8l1.29,-0.93l1.53,-0.28l0.11,0.66l0.3,0.25l2.02,-0.05l1.04,0.48l0.5,0.59l0.18,0.1l1.13,0.18l1.11,0.7l0.01,3.06l-0.49,1.82l-0.11,1.94l0.03,0.16l0.35,0.68l-0.24,1.3l-0.27,0.17l-0.12,0.15l-0.64,1.83l-2.49,2.8Z" data-code="ZW" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M398.67,172.8l0.09,-1.45l-0.06,-0.2l-0.82,-1.05l3.16,-1.96l3.01,0.54l3.33,-0.02l2.64,0.52l2.14,-0.15l3.9,0.1l0.91,1.08l0.14,0.09l4.61,1.38l0.26,-0.04l0.77,-0.55l2.66,1.29l0.17,0.03l2.59,-0.35l0.1,1.28l-2.2,1.85l-3.13,0.62l-0.23,0.23l-0.21,0.92l-1.54,1.68l-0.97,2.4l0.02,0.26l0.85,1.46l-1.27,1.14l-0.09,0.14l-0.5,1.73l-1.73,0.53l-0.15,0.1l-1.68,2.1l-3.03,0.04l-2.38,-0.05l-0.17,0.05l-1.57,1.01l-0.9,1.01l-0.96,-0.19l-0.82,-0.86l-0.69,-1.6l-0.22,-0.18l-2.14,-0.41l-0.13,-0.62l0.83,-0.97l0.39,-0.86l-0.06,-0.33l-0.73,-0.73l0.63,-1.74l-0.02,-0.25l-0.8,-1.41l0.69,-0.15l0.23,-0.27l0.09,-1.29l0.33,-0.36l0.08,-0.2l0.03,-2.16l1.03,-0.72l0.1,-0.37l-0.7,-1.5l-0.25,-0.17l-1.46,-0.11l-0.22,0.07l-0.34,0.3l-1.17,0.0l-0.55,-1.29l-0.39,-0.16l-1.02,0.44l-0.45,0.36Z" data-code="ES" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M527.15,253.05l-0.77,-0.74l-1.01,-1.47l-1.14,-0.86l-0.62,-0.84l-0.11,-0.09l-2.18,-1.02l-0.12,-0.03l-1.61,-0.03l-0.52,-0.46l-0.31,-0.05l-1.31,0.54l-1.38,-1.06l-0.46,0.12l-0.69,1.68l-2.49,-0.46l-0.2,-0.76l1.06,-3.69l0.24,-1.65l0.66,-0.66l1.76,-0.4l0.16,-0.1l0.97,-1.13l1.24,2.55l0.68,2.34l0.09,0.14l1.4,1.27l3.39,2.4l1.37,1.43l2.14,2.34l0.94,0.6l-0.32,0.26l-0.85,-0.17Z" data-code="ER" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M469.05,172.9l-0.57,-0.8l-0.1,-0.09l-0.82,-0.46l0.16,-0.33l0.35,-1.57l0.72,-0.62l0.27,-0.16l0.48,0.38l0.35,0.4l0.12,0.08l0.79,0.32l0.66,0.43l-0.43,0.62l-0.28,0.11l-0.07,-0.25l-0.53,-0.1l-1.09,1.49l-0.05,0.23l0.06,0.32Z" data-code="ME" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M488.2,153.75l0.14,-0.11l1.49,-0.28l1.75,0.95l1.06,0.14l0.92,0.7l-0.15,0.9l0.15,0.31l0.8,0.46l0.33,1.2l0.09,0.14l0.72,0.66l-0.11,0.28l0.1,0.33l-0.06,0.02l-1.25,-0.08l-0.17,-0.29l-0.39,-0.12l-0.52,0.25l-0.16,0.36l0.13,0.42l-0.6,0.88l-0.43,1.03l-0.22,0.12l-0.32,-1.0l0.25,-1.34l-0.08,-1.38l-0.06,-0.17l-1.43,-1.87l-0.81,-1.36l-0.78,-0.95l-0.12,-0.09l-0.29,-0.12Z" data-code="MD" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M544.77,316.45l0.64,1.04l0.6,1.62l0.4,3.04l0.63,1.21l-0.22,1.07l-0.15,0.26l-0.59,-1.05l-0.52,-0.01l-0.47,0.76l-0.04,0.23l0.46,1.84l-0.19,0.92l-0.61,0.53l-0.1,0.21l-0.16,2.15l-0.97,2.98l-1.24,3.59l-1.55,4.97l-0.96,3.67l-1.08,2.93l-1.94,0.61l-2.05,1.06l-3.2,-1.53l-0.62,-1.26l-0.18,-2.39l-0.87,-2.07l-0.22,-1.8l0.4,-1.69l1.01,-0.4l0.19,-0.28l0.01,-0.79l1.15,-1.91l0.04,-0.11l0.23,-1.66l-0.03,-0.17l-0.57,-1.21l-0.46,-1.58l-0.19,-2.25l0.82,-1.36l0.33,-1.51l1.11,-0.1l1.4,-0.53l0.9,-0.45l1.03,-0.03l0.21,-0.09l1.41,-1.45l2.12,-1.65l0.75,-1.29l0.03,-0.24l-0.17,-0.56l0.53,0.15l0.32,-0.1l1.38,-1.77l0.06,-0.18l0.04,-1.44l0.54,-0.74l0.62,0.77Z" data-code="MG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M378.66,230.13l0.07,-0.75l0.93,-0.72l0.82,-1.37l0.04,-0.21l-0.14,-0.8l0.8,-1.74l1.33,-1.61l0.79,-0.4l0.14,-0.15l0.66,-1.55l0.08,-1.46l0.83,-1.52l1.6,-0.94l0.11,-0.11l1.56,-2.71l1.2,-0.99l2.24,-0.29l0.17,-0.08l1.95,-1.83l1.3,-0.77l2.09,-2.28l0.07,-0.26l-0.61,-3.34l0.92,-2.3l0.33,-1.44l1.52,-1.79l2.48,-1.27l1.86,-1.16l0.1,-0.11l1.67,-2.93l0.72,-1.59l1.54,0.01l1.43,1.14l0.21,0.06l2.33,-0.19l2.55,0.62l0.97,0.03l0.83,1.6l0.15,1.71l0.86,2.96l0.09,0.14l0.5,0.45l-0.31,0.73l-3.11,0.44l-0.16,0.07l-1.07,0.97l-1.36,0.23l-0.25,0.28l-0.1,1.85l-2.74,1.02l-0.14,0.11l-0.9,1.3l-1.93,0.69l-2.56,0.44l-4.04,2.01l-0.17,0.27l0.02,2.91l-0.08,0.0l-0.3,0.31l0.05,1.15l-1.25,0.07l-0.16,0.06l-0.73,0.55l-0.98,0.0l-0.85,-0.33l-0.15,-0.02l-2.11,0.29l-0.24,0.19l-0.76,1.95l-0.63,0.16l-0.21,0.19l-1.15,3.29l-3.42,2.81l-0.1,0.17l-0.81,3.57l-0.98,1.12l-0.3,0.85l-5.13,0.19Z" data-code="MA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M587.83,186.48l0.06,-1.46l-0.19,-0.29l-3.31,-1.24l-2.57,-1.4l-1.63,-1.38l-2.79,-1.98l-1.2,-2.98l-0.12,-0.14l-0.84,-0.54l-0.18,-0.05l-2.61,0.13l-0.76,-0.48l-0.25,-2.25l-0.17,-0.24l-3.37,-1.6l-0.32,0.04l-2.08,1.73l-2.11,1.02l-0.16,0.35l0.31,1.14l-2.14,0.03l-0.09,-10.68l6.1,-1.74l6.25,3.57l2.36,2.72l0.27,0.1l2.92,-0.44l4.17,-0.23l2.78,2.06l-0.18,2.87l0.29,0.32l0.98,0.02l0.46,2.22l0.28,0.24l3.0,0.09l0.61,1.25l0.28,0.17l0.93,-0.02l0.26,-0.16l1.06,-2.06l3.21,-2.03l1.3,-0.5l0.19,0.08l-1.75,1.62l0.05,0.48l1.85,1.12l0.27,0.02l1.65,-0.69l2.4,1.27l-2.69,1.79l-1.79,-0.27l-0.89,0.06l-0.22,-0.52l0.48,-1.26l-0.34,-0.4l-3.35,0.69l-0.22,0.18l-0.78,1.87l-1.07,1.47l-1.93,-0.13l-0.29,0.16l-0.65,1.29l0.16,0.42l1.69,0.64l0.48,1.91l-1.25,2.6l-1.64,-0.53l-1.18,-0.03Z" data-code="UZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M670.1,233.39l-1.46,1.11l-1.68,0.11l-0.26,0.19l-1.1,2.7l-0.95,0.42l-0.14,0.42l1.21,2.27l1.61,1.92l0.94,1.55l-0.82,1.99l-0.77,0.42l-0.13,0.39l0.64,1.35l1.62,1.97l0.26,1.32l-0.04,1.15l0.02,0.13l0.92,2.18l-1.3,2.23l-0.79,1.69l-0.1,-0.77l0.74,-1.87l-0.02,-0.26l-0.8,-1.42l0.2,-2.68l-0.06,-0.2l-0.98,-1.27l-0.8,-2.98l-0.45,-3.22l-1.11,-2.22l-0.45,-0.1l-1.64,1.28l-2.74,1.76l-1.26,-0.2l-1.27,-0.49l0.79,-2.93l0.0,-0.14l-0.52,-2.42l-1.93,-2.97l0.26,-0.8l-0.22,-0.39l-1.37,-0.31l-1.65,-1.98l-0.12,-1.5l0.41,0.19l0.42,-0.26l0.05,-1.7l1.08,-0.54l0.16,-0.34l-0.24,-1.0l0.5,-0.79l0.05,-0.15l0.08,-2.35l1.58,0.49l0.36,-0.15l1.12,-2.19l0.15,-1.34l1.35,-2.18l0.04,-0.17l-0.07,-1.35l2.97,-1.71l1.67,0.45l0.38,-0.33l-0.18,-1.46l0.7,-0.4l0.15,-0.32l-0.13,-0.72l0.94,-0.13l0.74,1.41l0.11,0.12l0.95,0.56l0.07,1.89l-0.09,2.08l-2.28,2.15l-0.09,0.19l-0.3,3.15l0.35,0.32l2.37,-0.39l0.53,2.17l0.2,0.21l1.3,0.42l-0.63,1.9l0.14,0.36l1.86,0.99l1.1,0.49l0.24,0.0l1.45,-0.6l0.04,0.51l-2.01,1.6l-0.56,0.96l-1.34,0.56Z" data-code="MM" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M390.79,248.2l0.67,-0.37l0.14,-0.18l0.36,-1.31l0.51,-0.04l1.68,0.69l0.21,0.0l1.34,-0.48l0.89,0.16l0.3,-0.13l0.29,-0.44l9.89,-0.04l0.29,-0.21l0.56,-1.8l-0.11,-0.33l-0.33,-0.24l-2.37,-22.1l3.41,-0.04l8.37,5.73l8.38,5.68l0.56,1.15l0.14,0.14l1.56,0.75l0.99,0.36l0.03,1.45l0.33,0.29l2.45,-0.22l0.01,5.52l-1.3,1.64l-0.06,0.15l-0.18,1.37l-1.99,0.36l-3.4,0.22l-0.19,0.09l-0.85,0.83l-1.48,0.09l-1.49,0.01l-0.54,-0.43l-0.26,-0.05l-1.38,0.36l-2.39,1.08l-0.13,0.12l-0.44,0.73l-1.88,1.11l-0.11,0.12l-0.3,0.57l-0.86,0.42l-1.1,-0.31l-0.28,0.07l-0.69,0.62l-0.09,0.16l-0.35,1.66l-1.93,2.04l-0.08,0.23l0.05,0.76l-0.63,0.99l-0.04,0.19l0.14,1.23l-0.81,0.29l-0.32,0.17l-0.27,-0.75l-0.39,-0.18l-0.65,0.26l-0.36,-0.04l-0.29,0.14l-0.37,0.6l-1.69,-0.02l-0.63,-0.34l-0.32,0.02l-0.12,0.09l-0.47,-0.45l0.1,-0.6l-0.09,-0.27l-0.31,-0.3l-0.33,-0.05l-0.05,0.02l0.02,-0.21l0.46,-0.59l-0.02,-0.39l-0.99,-1.02l-0.34,-0.74l-0.56,-0.56l-0.17,-0.09l-0.5,-0.07l-0.19,0.04l-0.58,0.35l-0.79,0.33l-0.65,0.51l-0.85,-0.16l-0.63,-0.59l-0.14,-0.07l-0.41,-0.08l-0.2,0.03l-0.59,0.31l-0.07,0.0l-0.1,-0.63l0.11,-0.85l-0.21,-0.98l-0.11,-0.17l-0.86,-0.66l-0.45,-1.34l-0.1,-1.36Z" data-code="ML" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M641.06,150.59l2.41,-0.53l4.76,-2.8l3.67,-1.49l2.06,0.96l0.12,0.03l2.5,0.05l1.59,1.45l0.19,0.08l2.47,0.12l3.59,0.81l0.27,-0.07l2.43,-2.28l0.06,-0.36l-0.93,-1.77l2.33,-3.1l2.66,1.3l2.26,0.39l2.75,0.8l0.44,2.3l0.19,0.22l3.56,1.38l0.18,0.01l2.35,-0.6l3.1,-0.42l2.4,0.41l2.37,1.52l1.49,1.63l0.23,0.1l2.29,-0.03l3.13,0.52l0.15,-0.01l2.28,-0.79l3.27,-0.53l0.11,-0.04l3.56,-2.23l1.31,0.31l1.26,1.05l0.22,0.07l2.45,-0.22l-0.98,1.96l-1.77,3.21l-0.01,0.28l0.64,1.31l0.35,0.16l1.35,-0.38l2.4,0.48l0.22,-0.04l1.78,-1.09l1.82,0.92l2.11,2.07l-0.17,0.68l-1.79,-0.31l-3.74,0.45l-1.85,0.96l-1.78,2.01l-3.74,1.18l-2.46,1.61l-2.45,-0.6l-1.42,-0.28l-0.31,0.13l-1.31,1.99l0.0,0.33l0.78,1.15l0.3,0.74l-1.58,0.93l-1.75,1.59l-2.83,1.03l-3.77,0.12l-4.05,1.05l-2.81,1.54l-0.95,-0.8l-0.19,-0.07l-2.96,0.0l-3.64,-1.8l-2.55,-0.48l-3.38,0.41l-5.13,-0.67l-2.66,0.06l-1.35,-1.65l-1.12,-2.78l-0.21,-0.18l-1.5,-0.33l-2.98,-1.89l-0.12,-0.04l-3.37,-0.43l-2.84,-0.51l-0.75,-1.13l0.93,-3.54l-0.04,-0.24l-1.73,-2.55l-0.15,-0.12l-3.52,-1.18l-1.99,-1.61l-0.54,-1.85Z" data-code="MN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M472.73,173.87l0.08,0.01l0.32,-0.25l0.08,-0.44l1.29,-0.41l1.37,-0.28l1.03,-0.04l1.06,0.82l0.14,1.59l-0.22,0.04l-0.17,0.11l-0.32,0.4l-1.2,-0.05l-0.18,0.05l-0.9,0.61l-1.45,0.23l-0.85,-0.59l-0.3,-1.09l0.22,-0.71Z" data-code="MK" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M507.18,313.84l-0.67,1.85l-0.01,0.16l0.7,3.31l0.31,0.24l0.75,-0.03l0.78,0.71l0.99,1.75l0.2,3.03l-0.91,0.45l-0.14,0.15l-0.59,1.38l-1.24,-1.21l-0.17,-1.62l0.49,-1.12l0.02,-0.16l-0.15,-1.03l-0.13,-0.21l-0.99,-0.65l-0.26,-0.03l-0.53,0.18l-1.31,-1.12l-1.15,-0.59l0.66,-2.06l0.75,-0.84l0.07,-0.27l-0.47,-2.04l0.48,-1.94l0.4,-0.65l0.03,-0.24l-0.64,-2.15l-0.08,-0.13l-0.44,-0.42l1.34,0.26l1.25,1.73l0.67,3.3Z" data-code="MW" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M390.54,247.66l-1.48,-1.58l-1.51,-1.88l-0.12,-0.09l-1.64,-0.67l-1.17,-0.74l-0.17,-0.05l-1.4,0.03l-0.12,0.03l-1.14,0.52l-1.15,-0.21l-0.26,0.08l-0.44,0.43l-0.11,-0.72l0.68,-1.29l0.31,-2.43l-0.28,-2.63l-0.29,-1.27l0.24,-1.24l-0.03,-0.2l-0.65,-1.24l-1.19,-1.05l0.32,-0.51l9.64,0.02l0.3,-0.34l-0.46,-3.71l0.51,-1.12l2.17,-0.22l0.27,-0.3l-0.08,-6.5l7.91,0.13l0.31,-0.3l0.01,-3.5l8.17,5.63l-2.89,0.04l-0.29,0.33l2.42,22.56l0.12,0.21l0.26,0.19l-0.43,1.38l-9.83,0.04l-0.25,0.13l-0.27,0.41l-0.77,-0.14l-0.15,0.01l-1.3,0.47l-1.64,-0.67l-0.14,-0.02l-0.79,0.06l-0.27,0.22l-0.39,1.39l-0.53,0.29Z" data-code="MR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M500.74,287.17l-2.84,-0.02l-0.92,0.32l-1.37,0.71l-0.29,-0.12l0.02,-1.6l0.54,-0.89l0.04,-0.13l0.14,-1.96l0.49,-1.09l0.91,-1.24l0.97,-0.68l0.8,-0.89l-0.13,-0.49l-0.79,-0.27l0.13,-2.55l0.78,-0.52l1.45,0.51l0.18,0.01l1.97,-0.57l1.72,0.01l0.18,-0.06l1.29,-0.97l0.98,1.44l0.29,1.24l1.05,2.75l-0.84,1.68l-1.94,2.66l-0.06,0.18l0.02,2.36l-4.8,0.18Z" data-code="UG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M717.6,273.52l-1.51,0.7l-2.13,-0.41l-2.88,-0.0l-0.29,0.21l-0.84,2.77l-0.9,0.82l-0.08,0.12l-1.23,3.34l-1.81,0.47l-2.29,-0.68l-0.14,-0.01l-1.2,0.22l-0.14,0.07l-1.36,1.18l-1.47,-0.17l-0.12,0.01l-1.46,0.46l-1.51,-1.25l-0.24,-0.97l1.26,0.59l0.2,0.02l1.93,-0.47l0.22,-0.22l0.47,-1.98l0.9,-0.4l2.97,-0.54l0.17,-0.09l1.8,-1.98l1.02,-1.32l0.9,1.03l0.48,-0.04l0.43,-0.7l1.02,0.07l0.32,-0.27l0.25,-2.72l1.84,-1.67l1.23,-1.89l0.73,-0.01l1.12,1.11l0.1,0.99l0.18,0.24l1.66,0.71l1.85,0.67l-0.09,0.51l-1.45,0.11l-0.26,0.4l0.35,0.97ZM673.78,269.53l0.17,1.14l0.35,0.25l1.65,-0.3l0.18,-0.11l0.68,-0.86l0.31,0.13l1.41,1.45l0.99,1.59l0.13,1.57l-0.26,1.09l0.0,0.15l0.24,0.84l0.18,1.46l0.11,0.2l0.82,0.64l0.92,2.08l-0.03,0.52l-1.4,0.13l-2.29,-1.79l-2.86,-1.92l-0.27,-1.16l-0.07,-0.13l-1.39,-1.61l-0.33,-1.99l-0.05,-0.12l-0.84,-1.27l0.26,-1.72l-0.03,-0.18l-0.45,-0.87l0.13,-0.13l1.71,0.92Z" data-code="MY" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M133.41,213.83l0.61,0.09l0.27,-0.09l0.93,-1.01l0.08,-0.18l0.09,-1.22l-0.09,-0.23l-1.93,-1.94l-1.46,-0.77l-2.96,-5.62l-0.86,-2.1l2.44,-0.18l2.68,-0.25l-0.03,0.08l0.17,0.4l3.79,1.35l5.81,1.97l6.96,-0.02l0.3,-0.3l0.0,-0.84l3.91,0.0l0.87,0.93l1.27,0.87l1.44,1.17l0.79,1.37l0.62,1.49l0.12,0.14l1.35,0.85l2.08,0.82l0.35,-0.1l1.49,-2.04l1.81,-0.05l1.63,1.01l1.21,1.8l0.86,1.58l1.47,1.55l0.53,1.82l0.73,1.32l0.14,0.13l1.98,0.84l1.78,0.59l0.61,-0.03l-0.78,1.89l-0.45,1.96l-0.19,3.58l-0.24,1.27l0.01,0.14l0.43,1.43l0.78,1.31l0.49,1.98l0.06,0.12l1.63,1.9l0.61,1.51l0.98,1.28l0.16,0.11l2.58,0.67l0.98,1.02l0.31,0.08l2.17,-0.71l1.91,-0.26l1.87,-0.47l1.67,-0.49l1.59,-1.06l0.11,-0.14l0.6,-1.52l0.22,-2.21l0.35,-0.62l1.58,-0.64l2.59,-0.59l2.18,0.09l1.43,-0.2l0.39,0.36l-0.07,1.02l-1.28,1.48l-0.65,1.68l0.07,0.32l0.33,0.32l-0.79,2.49l-0.28,-0.3l-0.24,-0.09l-1.0,0.08l-0.24,0.15l-0.74,1.28l-0.19,-0.13l-0.28,-0.03l-0.3,0.12l-0.19,0.29l0.0,0.06l-4.34,-0.02l-0.3,0.3l-0.0,1.16l-0.83,0.0l-0.28,0.19l0.08,0.33l0.93,0.86l0.9,0.58l0.24,0.48l0.16,0.15l0.2,0.08l-0.03,0.38l-2.94,0.01l-0.26,0.15l-1.21,2.09l0.02,0.33l0.25,0.33l-0.21,0.44l-0.04,0.22l-2.42,-2.35l-1.36,-0.87l-2.04,-0.67l-0.13,-0.01l-1.4,0.19l-2.07,0.98l-1.14,0.23l-1.72,-0.66l-1.85,-0.48l-2.31,-1.16l-1.92,-0.38l-2.79,-1.18l-2.04,-1.2l-0.6,-0.66l-0.19,-0.1l-1.37,-0.15l-2.45,-0.78l-1.07,-1.18l-2.63,-1.44l-1.2,-1.56l-0.44,-0.93l0.5,-0.15l0.2,-0.39l-0.2,-0.58l0.46,-0.55l0.07,-0.19l0.01,-0.91l-0.06,-0.18l-0.81,-1.13l-0.25,-1.08l-0.86,-1.36l-2.21,-2.63l-2.53,-2.09l-1.2,-1.63l-0.11,-0.09l-2.08,-1.06l-0.34,-0.48l0.35,-1.53l-0.16,-0.34l-1.24,-0.61l-1.39,-1.23l-0.6,-1.81l-0.24,-0.2l-1.25,-0.2l-1.38,-1.35l-1.11,-1.25l-0.1,-0.76l-0.05,-0.13l-1.33,-2.04l-0.85,-2.02l0.04,-0.99l-0.14,-0.27l-1.81,-1.1l-0.2,-0.04l-0.74,0.11l-1.34,-0.72l-0.42,0.16l-0.4,1.12l-0.0,0.19l0.41,1.3l0.24,2.04l0.06,0.15l0.88,1.16l1.84,1.86l0.4,0.61l0.12,0.1l0.27,0.14l0.29,0.82l0.31,0.2l0.2,-0.02l0.43,1.51l0.09,0.14l0.72,0.65l0.51,0.91l1.58,1.4l0.8,2.42l0.77,1.23l0.66,1.19l0.13,1.34l0.28,0.27l1.08,0.08l0.92,1.1l0.83,1.08l-0.03,0.24l-0.88,0.81l-0.13,-0.0l-0.59,-1.42l-0.07,-0.11l-1.67,-1.53l-1.81,-1.28l-1.15,-0.61l0.07,-1.85l-0.38,-1.45l-0.12,-0.17l-2.91,-2.03l-0.39,0.04l-0.11,0.11l-0.42,-0.46l-0.11,-0.08l-1.49,-0.63l-1.09,-1.16Z" data-code="MX" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M839.92,325.66l0.78,0.73l-0.18,0.07l-0.6,-0.8ZM839.13,322.74l0.27,1.36l-0.13,-0.06l-0.21,-0.02l-0.29,0.08l-0.22,-0.43l-0.03,-1.32l0.61,0.4Z" data-code="VU" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M444.58,172.63l-0.68,1.92l-0.72,-0.38l-0.51,-1.79l0.43,-0.95l1.15,-0.83l0.33,2.04ZM429.71,147.03l1.77,1.57l0.26,0.07l1.16,-0.23l2.12,1.44l0.56,0.28l0.16,0.03l0.61,-0.06l1.09,0.78l0.13,0.05l3.18,0.53l-1.09,1.94l-0.3,2.16l-0.48,0.38l-1.0,-0.26l-0.37,0.32l0.07,0.66l-1.73,1.68l-0.09,0.21l-0.04,1.42l0.41,0.29l0.96,-0.4l0.67,1.07l-0.09,0.78l0.04,0.19l0.61,0.97l-0.71,0.78l-0.07,0.28l0.65,2.39l0.21,0.21l1.09,0.31l-0.2,0.95l-2.08,1.58l-4.81,-0.8l-0.13,0.01l-3.65,0.99l-0.22,0.24l-0.25,1.6l-2.59,0.35l-2.74,-1.33l-0.31,0.03l-0.79,0.57l-4.38,-1.31l-0.79,-0.94l1.16,-1.64l0.05,-0.15l0.48,-6.17l-0.06,-0.21l-2.58,-3.3l-1.89,-1.65l-0.11,-0.06l-3.64,-1.17l-0.2,-1.88l2.92,-0.63l4.14,0.82l0.35,-0.36l-0.65,-3.0l1.77,1.05l0.27,0.02l5.83,-2.54l0.17,-0.19l0.71,-2.54l1.75,-0.53l0.27,0.88l0.27,0.21l1.04,0.05l1.08,1.23ZM289.1,278.45l-0.85,0.84l-0.88,0.13l-0.25,-0.51l-0.21,-0.16l-0.56,-0.1l-0.25,0.07l-0.63,0.55l-0.62,-0.29l0.5,-0.88l0.21,-1.11l0.42,-1.05l-0.03,-0.28l-0.93,-1.42l-0.18,-1.54l1.13,-1.87l2.42,0.78l2.55,2.04l0.33,0.81l-1.4,2.16l-0.77,1.84Z" data-code="FR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M492.26,76.42l-0.38,3.12l0.12,0.28l3.6,2.69l-2.14,2.96l-0.01,0.33l2.83,4.61l-1.61,3.36l0.03,0.31l2.15,2.87l-0.96,2.44l0.1,0.35l3.51,2.55l-0.81,1.72l-2.28,2.19l-5.28,4.79l-4.51,0.31l-4.39,1.37l-3.87,0.75l-1.34,-1.89l-0.11,-0.09l-2.23,-1.14l0.53,-3.54l-0.01,-0.14l-1.17,-3.37l1.12,-2.13l2.23,-2.44l5.69,-4.33l1.65,-0.84l0.16,-0.31l-0.26,-1.73l-0.15,-0.22l-3.4,-1.91l-0.77,-1.47l-0.07,-6.45l-0.12,-0.24l-3.91,-2.94l-3.0,-1.92l0.97,-0.76l2.6,2.17l0.21,0.07l3.2,-0.21l2.63,1.03l0.3,-0.05l2.39,-1.94l0.09,-0.13l1.18,-3.12l3.63,-1.42l2.87,1.59l-0.98,2.87Z" data-code="FI" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M869.98,327.07l-1.31,0.44l-0.14,-0.41l0.96,-0.41l0.85,-0.17l1.43,-0.78l-0.16,0.65l-1.64,0.67ZM867.58,329.12l0.54,0.47l-0.31,1.0l-1.32,0.3l-1.13,-0.26l-0.17,-0.78l0.72,-0.66l0.98,0.27l0.25,-0.04l0.43,-0.29Z" data-code="FJ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M268.15,427.89l2.6,-1.73l1.98,0.77l0.31,-0.05l1.32,-1.17l1.58,1.18l-0.54,0.84l-3.1,0.92l-1.0,-1.04l-0.39,-0.04l-1.9,1.35l-0.86,-1.04Z" data-code="FK" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M202.1,252.6l0.23,-0.0l0.12,-0.11l0.68,-0.09l0.22,-0.15l0.23,-0.43l0.2,-0.01l0.28,-0.31l-0.04,-0.97l0.29,-0.03l0.5,0.02l0.25,-0.11l0.37,-0.46l0.51,0.35l0.4,-0.06l0.23,-0.28l0.45,-0.29l0.87,-0.7l0.11,-0.21l0.02,-0.26l0.23,-0.12l0.25,-0.48l0.29,0.27l0.14,0.07l0.5,0.12l0.22,-0.03l0.48,-0.28l0.66,-0.02l0.87,-0.33l0.36,-0.32l0.21,0.01l-0.11,0.48l0.0,0.14l0.22,0.8l-0.54,0.85l-0.27,1.03l-0.09,1.18l0.14,0.72l0.05,0.95l-0.24,0.15l-0.13,0.19l-0.23,1.09l0.0,0.14l0.14,0.53l-0.42,0.53l-0.06,0.24l0.12,0.69l0.08,0.15l0.18,0.19l-0.26,0.23l-0.49,-0.11l-0.35,-0.44l-0.16,-0.1l-0.79,-0.21l-0.23,0.03l-0.45,0.26l-1.51,-0.62l-0.31,0.05l-0.17,0.15l-1.81,-1.62l-0.6,-0.9l-1.04,-0.79l-0.77,-0.71Z" data-code="NI" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M436.22,136.65l1.82,0.08l0.36,0.89l-0.6,2.96l-0.53,1.06l-1.32,0.0l-0.3,0.34l0.35,2.89l-0.83,-0.47l-1.56,-1.43l-0.29,-0.07l-2.26,0.67l-1.02,-0.15l0.68,-0.48l0.1,-0.12l2.14,-4.84l3.25,-1.35Z" data-code="NL" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M491.45,67.31l7.06,3.0l-2.52,0.94l-0.11,0.49l2.43,2.49l-3.82,1.59l-1.48,0.3l0.89,-2.61l-0.14,-0.36l-3.21,-1.78l-0.25,-0.02l-3.89,1.52l-0.17,0.17l-1.2,3.17l-2.19,1.78l-2.53,-0.99l-0.13,-0.02l-3.15,0.21l-2.69,-2.25l-0.38,-0.01l-1.43,1.11l-1.47,0.17l-0.26,0.26l-0.33,2.57l-4.42,-0.65l-0.33,0.22l-0.6,2.19l-2.17,-0.01l-0.27,0.16l-4.15,7.68l-3.88,5.76l-0.0,0.33l0.81,1.23l-0.7,1.27l-2.3,-0.06l-0.28,0.18l-1.63,3.72l-0.02,0.13l0.15,5.17l0.07,0.18l1.51,1.84l-0.79,4.24l-2.04,2.5l-0.92,1.75l-1.39,-1.88l-0.44,-0.05l-4.89,4.21l-3.16,0.81l-3.24,-1.74l-0.86,-3.82l-0.78,-8.6l2.18,-2.36l6.56,-3.28l5.0,-4.16l4.63,-5.74l5.99,-8.09l4.17,-3.23l6.84,-5.49l5.39,-1.92l4.06,0.24l0.23,-0.09l3.72,-3.67l4.51,0.19l4.4,-0.89ZM484.58,19.95l4.42,1.82l-3.25,2.68l-7.14,0.65l-7.16,-0.91l-0.39,-1.37l-0.28,-0.22l-3.48,-0.1l-2.25,-2.15l7.09,-1.48l3.55,1.36l0.28,-0.03l2.42,-1.66l6.18,1.41ZM481.99,33.92l-4.73,1.85l-3.76,-1.06l1.27,-1.02l0.04,-0.43l-1.18,-1.35l4.46,-0.94l0.89,1.83l0.17,0.15l2.83,0.96ZM466.5,23.95l7.64,3.87l-5.63,1.94l-0.19,0.19l-1.35,3.88l-2.08,0.96l-0.16,0.19l-1.14,4.18l-2.71,0.18l-4.94,-2.95l1.95,-1.63l-0.08,-0.51l-3.7,-1.54l-4.79,-4.54l-1.78,-4.01l6.29,-1.88l1.25,1.81l0.25,0.13l3.57,-0.08l0.26,-0.17l0.87,-1.79l3.41,-0.18l3.08,1.94Z" data-code="NO" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M461.88,357.98l-1.61,-1.77l-0.94,-1.9l-0.54,-2.58l-0.62,-1.95l-0.83,-4.05l-0.06,-3.13l-0.33,-1.5l-0.07,-0.14l-0.95,-1.06l-1.27,-2.12l-1.3,-3.1l-0.59,-1.71l-1.98,-2.46l-0.13,-1.67l0.99,-0.4l1.44,-0.42l1.48,0.07l1.42,1.11l0.31,0.03l0.32,-0.15l9.99,-0.11l1.66,1.18l0.16,0.06l6.06,0.37l4.69,-1.06l2.01,-0.57l1.5,0.14l0.63,0.37l-1.0,0.41l-0.7,0.01l-0.16,0.05l-1.38,0.88l-0.79,-0.88l-0.29,-0.09l-3.83,0.9l-1.84,0.08l-0.29,0.3l-0.07,8.99l-2.18,0.08l-0.29,0.3l-0.0,17.47l-2.04,1.27l-1.21,0.18l-1.51,-0.49l-0.99,-0.18l-0.36,-1.0l-0.1,-0.14l-0.99,-0.74l-0.4,0.04l-0.98,1.09Z" data-code="NA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M835.87,338.68l2.06,1.63l1.01,0.94l-0.49,0.32l-1.21,-0.62l-1.76,-1.16l-1.58,-1.36l-1.61,-1.79l-0.16,-0.41l0.54,0.02l1.32,0.83l1.08,0.87l0.79,0.73Z" data-code="NC" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M426.67,254.17l0.03,-1.04l-0.24,-0.3l-2.66,-0.53l-0.06,-1.0l-0.07,-0.17l-1.37,-1.62l-0.3,-1.04l0.15,-0.94l1.37,-0.09l0.19,-0.09l0.85,-0.83l3.34,-0.22l2.22,-0.41l0.24,-0.26l0.2,-1.5l1.32,-1.65l0.07,-0.19l-0.01,-5.74l3.4,-1.13l7.24,-5.12l8.46,-4.95l3.76,1.08l1.35,1.39l0.36,0.05l1.39,-0.77l0.55,3.66l0.12,0.2l0.82,0.6l0.03,0.69l0.1,0.21l0.87,0.74l-0.47,0.99l-0.96,5.26l-0.13,3.25l-3.08,2.34l-0.1,0.15l-1.08,3.37l0.08,0.31l0.94,0.86l-0.01,1.51l0.29,0.3l1.25,0.05l-0.14,0.66l-0.51,0.11l-0.24,0.26l-0.06,0.57l-0.04,0.0l-1.59,-2.62l-0.21,-0.14l-0.59,-0.1l-0.23,0.05l-1.83,1.33l-1.79,-0.68l-1.42,-0.17l-0.17,0.03l-0.65,0.32l-1.39,-0.07l-0.19,0.06l-1.4,1.03l-1.12,0.05l-2.97,-1.29l-0.26,0.01l-1.12,0.59l-1.08,-0.04l-0.85,-0.88l-0.11,-0.07l-2.51,-0.95l-0.14,-0.02l-2.69,0.3l-0.16,0.07l-0.65,0.55l-0.1,0.16l-0.34,1.41l-0.69,0.98l-0.05,0.15l-0.13,1.72l-1.47,-1.13l-0.18,-0.06l-0.9,0.01l-0.2,0.08l-0.32,0.28Z" data-code="NE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M442.0,272.7l-2.4,0.83l-0.88,-0.12l-0.19,0.04l-0.89,0.52l-1.78,-0.05l-1.23,-1.44l-0.88,-1.87l-1.77,-1.66l-0.21,-0.08l-3.78,0.03l0.13,-3.75l-0.06,-1.58l0.44,-1.47l0.74,-0.75l1.21,-1.56l0.04,-0.29l-0.22,-0.56l0.44,-0.9l0.01,-0.24l-0.54,-1.44l0.26,-2.97l0.72,-1.06l0.33,-1.37l0.51,-0.43l2.53,-0.28l2.38,0.9l0.89,0.91l0.2,0.09l1.28,0.04l0.15,-0.03l1.06,-0.56l2.9,1.26l0.13,0.02l1.28,-0.06l0.16,-0.06l1.39,-1.02l1.36,0.07l0.15,-0.03l0.64,-0.32l1.22,0.13l1.9,0.73l0.28,-0.04l1.86,-1.35l0.33,0.06l1.62,2.67l0.29,0.14l0.32,-0.04l0.73,0.74l-0.19,0.37l-0.12,0.74l-2.03,1.89l-0.07,0.11l-0.66,1.62l-0.35,1.28l-0.48,0.51l-0.07,0.12l-0.48,1.67l-1.26,0.98l-0.1,0.15l-0.38,1.24l-0.58,1.07l-0.2,0.91l-1.43,0.7l-1.26,-0.93l-0.19,-0.06l-0.95,0.04l-0.2,0.09l-1.41,1.39l-0.61,0.02l-0.26,0.17l-1.19,2.42l-0.61,1.67Z" data-code="NG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M857.9,379.62l1.85,3.1l0.33,0.14l0.22,-0.28l0.04,-1.41l0.57,0.4l0.35,2.06l0.17,0.22l2.02,0.94l1.78,0.26l0.22,-0.06l1.31,-1.01l0.84,0.22l-0.53,2.27l-0.67,1.5l-1.71,-0.05l-0.25,0.12l-0.67,0.89l-0.05,0.23l0.21,1.15l-0.31,0.46l-2.15,3.57l-1.6,0.99l-0.28,-0.51l-0.15,-0.13l-0.72,-0.3l1.27,-2.15l0.01,-0.29l-0.82,-1.63l-0.15,-0.14l-2.5,-1.09l0.05,-0.69l1.67,-0.94l0.15,-0.21l0.42,-2.24l-0.11,-1.95l-0.03,-0.12l-0.97,-1.85l0.05,-0.41l-0.09,-0.25l-1.18,-1.17l-1.94,-2.49l-0.86,-1.64l0.38,-0.09l1.24,1.43l0.12,0.08l1.81,0.68l0.67,2.39ZM853.93,393.55l0.57,1.24l0.44,0.12l1.51,-1.03l0.52,0.91l0.0,1.09l-0.88,1.31l-1.62,2.2l-1.26,1.2l-0.05,0.38l0.64,1.02l-1.4,0.03l-0.14,0.04l-2.14,1.16l-0.14,0.17l-0.67,2.0l-1.38,3.06l-3.07,2.19l-2.12,-0.06l-1.55,-0.99l-0.14,-0.05l-2.53,-0.2l-0.31,-0.84l1.25,-2.15l3.07,-2.97l1.62,-0.59l1.81,-1.17l2.18,-1.63l1.55,-1.65l1.08,-2.18l0.9,-0.72l0.11,-0.17l0.35,-1.56l1.37,-1.07l0.4,0.91Z" data-code="NZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M641.26,213.53l-0.14,0.95l0.32,1.64l-0.21,0.78l-1.83,0.04l-2.98,-0.62l-1.86,-0.25l-1.37,-1.3l-0.18,-0.08l-3.38,-0.34l-3.21,-1.49l-2.38,-1.34l-2.16,-0.92l0.84,-2.2l1.51,-1.18l0.89,-0.57l1.83,0.77l2.5,1.76l1.39,0.41l0.78,1.21l0.17,0.13l1.91,0.53l2.0,1.17l2.92,0.66l2.63,0.24Z" data-code="NP" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M413.53,272.08l-0.83,0.02l-1.79,-0.49l-1.64,0.03l-3.04,0.46l-1.73,0.72l-2.4,0.89l-0.12,-0.02l0.16,-1.7l0.19,-0.25l0.06,-0.2l-0.08,-0.99l-0.09,-0.19l-1.06,-1.05l-0.15,-0.08l-0.71,-0.15l-0.51,-0.48l0.45,-0.92l0.02,-0.19l-0.24,-1.16l0.07,-0.43l0.14,-0.0l0.3,-0.26l0.15,-1.1l-0.02,-0.15l-0.13,-0.34l0.09,-0.13l0.83,-0.27l0.19,-0.37l-0.62,-2.02l-0.55,-1.0l0.14,-0.59l0.35,-0.14l0.24,-0.16l0.53,0.29l0.14,0.04l1.93,0.02l0.26,-0.14l0.36,-0.58l0.39,0.01l0.43,-0.17l0.28,0.79l0.43,0.16l0.56,-0.31l0.89,-0.32l0.92,0.45l0.39,0.75l0.14,0.13l1.13,0.53l0.3,-0.03l0.81,-0.59l1.02,-0.08l1.49,0.57l0.62,3.33l-1.03,2.09l-0.65,2.84l0.02,0.2l1.05,2.08l-0.07,0.64Z" data-code="CI" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M444.71,156.27l0.05,0.3l-0.34,0.69l0.13,0.4l1.13,0.58l1.07,0.1l-0.12,0.81l-0.87,0.42l-1.75,-0.37l-0.34,0.18l-0.47,1.1l-0.86,0.07l-0.33,-0.38l-0.41,-0.04l-1.34,1.01l-1.02,0.13l-0.93,-0.58l-0.82,-1.32l-0.37,-0.12l-0.77,0.32l0.02,-0.84l1.74,-1.69l0.09,-0.25l-0.04,-0.38l0.73,0.19l0.26,-0.06l0.6,-0.48l2.02,0.02l0.24,-0.12l0.38,-0.51l2.31,0.84Z" data-code="CH" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M232.24,284.95l-0.94,-0.52l-1.22,-0.82l-0.31,-0.01l-0.62,0.35l-1.88,-0.31l-0.54,-0.95l-0.29,-0.15l-0.37,0.03l-2.34,-1.33l-0.15,-0.35l0.57,-0.11l0.24,-0.32l-0.1,-1.15l0.46,-0.71l1.11,-0.15l0.21,-0.13l1.05,-1.57l0.95,-1.31l-0.08,-0.43l-0.73,-0.47l0.4,-1.24l0.01,-0.16l-0.53,-2.15l0.44,-0.54l0.06,-0.24l-0.4,-2.13l-0.06,-0.13l-0.93,-1.22l0.21,-0.8l0.52,0.12l0.32,-0.13l0.47,-0.75l0.03,-0.27l-0.52,-1.32l0.09,-0.11l1.14,0.07l0.22,-0.08l1.82,-1.71l0.96,-0.25l0.22,-0.28l0.02,-0.81l0.43,-2.01l1.28,-1.04l1.48,-0.05l0.27,-0.19l0.12,-0.31l1.73,0.19l0.2,-0.05l1.96,-1.28l0.97,-0.56l1.16,-1.16l0.64,0.11l0.43,0.44l-0.31,0.55l-1.49,0.39l-0.19,0.16l-0.6,1.2l-0.97,0.74l-0.73,0.94l-0.06,0.13l-0.3,1.76l-0.68,1.44l0.23,0.43l1.1,0.14l0.27,0.97l0.08,0.13l0.49,0.49l0.17,0.85l-0.27,0.86l-0.01,0.14l0.09,0.53l0.2,0.23l0.52,0.18l0.54,0.79l0.27,0.13l3.18,-0.24l1.31,0.29l1.7,2.08l0.31,0.1l0.96,-0.26l1.75,0.13l1.41,-0.27l0.56,0.27l-0.36,1.07l-0.54,0.81l-0.05,0.13l-0.2,1.8l0.51,1.79l0.07,0.12l0.65,0.68l0.05,0.32l-1.16,1.14l0.05,0.47l0.86,0.52l0.6,0.79l0.31,1.01l-0.7,-0.81l-0.44,-0.01l-0.74,0.77l-4.75,-0.05l-0.3,0.31l0.03,1.57l0.25,0.29l1.2,0.21l-0.02,0.24l-0.1,-0.05l-0.22,-0.02l-1.41,0.41l-0.22,0.29l-0.01,1.82l0.11,0.23l1.04,0.85l0.35,1.3l-0.06,1.02l-1.02,6.26l-0.84,-0.89l-0.19,-0.09l-0.25,-0.02l1.35,-2.13l-0.1,-0.42l-1.92,-1.17l-0.2,-0.04l-1.41,0.2l-0.82,-0.39l-0.26,0.0l-1.29,0.62l-1.63,-0.27l-1.4,-2.5l-0.12,-0.12l-1.1,-0.61l-0.83,-1.2l-1.67,-1.19l-0.27,-0.04l-0.54,0.19Z" data-code="CO" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M740.32,148.94l0.22,0.21l4.3,1.03l2.84,2.2l0.99,2.92l0.28,0.2l3.8,0.0l0.15,-0.04l2.13,-1.24l3.5,-0.8l-1.05,2.29l-0.95,1.13l-0.06,0.12l-0.85,3.41l-1.56,2.81l-2.83,-0.51l-0.19,0.03l-2.15,1.09l-0.15,0.34l0.65,2.59l-0.33,3.3l-1.03,0.07l-0.28,0.3l0.01,0.75l-1.09,-1.2l-0.48,0.05l-0.94,1.6l-3.76,1.26l-0.2,0.36l0.29,1.19l-1.67,-0.08l-1.11,-0.88l-0.42,0.05l-1.69,2.08l-2.71,1.57l-2.04,1.88l-3.42,0.84l-0.11,0.05l-1.8,1.34l-1.54,0.46l0.52,-0.53l0.06,-0.33l-0.44,-0.96l1.84,-1.84l0.02,-0.41l-1.32,-1.56l-0.36,-0.08l-2.23,1.08l-2.83,2.06l-1.52,1.85l-2.32,0.13l-0.2,0.09l-1.28,1.37l-0.03,0.37l1.32,1.97l0.18,0.13l1.83,0.43l0.07,1.08l0.18,0.26l1.98,0.84l0.3,-0.03l2.66,-1.96l2.06,1.04l0.12,0.03l1.4,0.07l0.27,1.0l-3.24,0.73l-0.17,0.11l-1.13,1.5l-2.38,1.4l-0.1,0.1l-1.29,1.99l0.1,0.42l2.6,1.5l0.97,2.72l1.52,2.56l1.66,2.08l-0.03,1.76l-1.4,0.67l-0.15,0.38l0.6,1.47l0.13,0.15l1.29,0.75l-0.35,2.0l-0.58,1.96l-1.22,0.21l-0.2,0.14l-1.83,2.93l-2.02,3.51l-2.29,3.13l-3.4,2.42l-3.42,2.18l-2.75,0.3l-0.15,0.06l-1.32,1.01l-0.68,-0.67l-0.41,-0.01l-1.37,1.27l-3.42,1.28l-2.62,0.4l-0.24,0.21l-0.8,2.57l-0.95,0.11l-0.53,-1.54l0.52,-0.89l-0.19,-0.44l-3.36,-0.84l-0.17,0.01l-1.09,0.4l-2.36,-0.64l-1.0,-0.9l0.35,-1.34l-0.23,-0.37l-2.22,-0.47l-1.15,-0.94l-0.36,-0.02l-2.08,1.37l-2.35,0.29l-1.98,-0.01l-0.13,0.03l-1.32,0.63l-1.28,0.38l-0.21,0.33l0.33,2.65l-0.78,-0.04l-0.14,-0.39l-0.07,-1.04l-0.41,-0.26l-1.72,0.71l-0.96,-0.43l-1.63,-0.86l0.65,-1.95l-0.19,-0.38l-1.43,-0.46l-0.56,-2.27l-0.34,-0.22l-2.26,0.38l0.25,-2.65l2.29,-2.15l0.09,-0.2l0.1,-2.21l-0.07,-2.09l-0.15,-0.25l-1.02,-0.6l-0.8,-1.52l-0.31,-0.16l-1.42,0.2l-2.16,-0.32l0.55,-0.74l0.01,-0.35l-1.17,-1.7l-0.41,-0.08l-1.67,1.07l-1.97,-0.63l-0.25,0.03l-2.89,1.73l-2.26,1.99l-1.82,0.3l-1.0,-0.66l-0.15,-0.05l-1.28,-0.06l-1.75,-0.61l-0.24,0.02l-1.35,0.69l-0.1,0.08l-1.2,1.45l-0.14,-1.41l-0.4,-0.25l-1.46,0.55l-2.83,-0.26l-2.77,-0.61l-1.99,-1.17l-1.91,-0.54l-0.78,-1.21l-0.17,-0.13l-1.36,-0.38l-2.54,-1.79l-2.01,-0.84l-0.28,0.02l-0.89,0.56l-3.31,-1.83l-2.35,-1.67l-0.57,-2.49l1.34,0.28l0.36,-0.28l0.08,-1.42l-0.05,-0.19l-0.93,-1.34l0.24,-2.18l-0.07,-0.22l-2.69,-3.32l-0.15,-0.1l-3.97,-1.11l-0.69,-2.05l-0.11,-0.15l-1.79,-1.3l-0.39,-0.73l-0.36,-1.57l0.08,-1.09l-0.18,-0.3l-1.52,-0.66l-0.22,-0.01l-0.51,0.18l-0.52,-2.21l0.59,-0.55l0.06,-0.35l-0.22,-0.44l2.12,-1.24l1.63,-0.55l2.58,0.39l0.31,-0.16l0.87,-1.75l3.05,-0.34l0.21,-0.12l0.84,-1.12l3.87,-1.59l0.15,-0.14l0.35,-0.68l0.03,-0.17l-0.17,-1.51l1.52,-0.7l0.15,-0.39l-2.12,-5.0l4.62,-1.15l1.35,-0.72l0.14,-0.17l1.72,-5.37l4.7,0.99l0.28,-0.08l1.39,-1.43l0.08,-0.2l0.11,-2.95l1.83,-0.26l0.18,-0.1l1.85,-2.08l0.61,-0.17l0.57,1.97l0.1,0.15l2.2,1.75l3.48,1.17l1.59,2.36l-0.93,3.53l0.04,0.24l0.9,1.35l0.2,0.13l2.98,0.53l3.32,0.43l2.97,1.89l1.49,0.35l1.08,2.67l1.52,1.88l0.24,0.11l2.74,-0.07l5.15,0.67l3.36,-0.41l2.39,0.43l3.67,1.81l0.13,0.03l2.92,-0.0l1.02,0.86l0.34,0.03l2.88,-1.59l3.98,-1.03l3.81,-0.13l3.02,-1.12l1.77,-1.61l1.73,-1.01l0.13,-0.37l-0.41,-1.01l-0.72,-1.07l1.09,-1.66l1.21,0.24l2.57,0.63l0.24,-0.04l2.46,-1.62l3.78,-1.19l0.13,-0.09l1.8,-2.03l1.66,-0.84l3.54,-0.41l1.93,0.35l0.34,-0.22l0.27,-1.12l-0.08,-0.29l-2.27,-2.22l-2.08,-1.07l-0.29,0.01l-1.82,1.12l-2.36,-0.47l-0.14,0.01l-1.18,0.34l-0.46,-0.94l1.69,-3.08l1.1,-2.21l2.75,1.12l0.26,-0.02l3.53,-2.06l0.15,-0.26l-0.02,-1.35l2.18,-3.39l1.35,-1.04l0.12,-0.24l-0.03,-1.85l-0.15,-0.25l-1.0,-0.58l1.68,-1.37l3.01,-0.59l3.25,-0.09l3.67,0.99l2.08,1.18l1.51,3.3l0.95,1.45l0.85,1.99l0.92,3.19ZM697.0,237.37l-1.95,1.12l-1.74,-0.68l-0.06,-1.9l1.08,-1.03l2.62,-0.7l1.23,0.05l0.37,0.65l-1.01,1.08l-0.54,1.4Z" data-code="CN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M453.76,278.92l-0.26,-0.11l-0.18,-0.02l-1.42,0.31l-1.56,-0.33l-1.17,0.16l-3.7,-0.05l0.3,-1.63l-0.04,-0.21l-0.98,-1.66l-0.15,-0.13l-1.03,-0.38l-0.46,-1.01l-0.13,-0.14l-0.48,-0.27l0.02,-0.46l0.62,-1.72l1.1,-2.25l0.54,-0.02l0.2,-0.09l1.41,-1.39l0.73,-0.03l1.32,0.97l0.31,0.03l1.72,-0.85l0.16,-0.2l0.22,-1.0l0.57,-1.03l0.36,-1.18l1.26,-0.98l0.1,-0.15l0.49,-1.7l0.48,-0.51l0.07,-0.13l0.35,-1.3l0.63,-1.54l2.06,-1.92l0.09,-0.17l0.12,-0.79l0.24,-0.41l-0.04,-0.36l-0.89,-0.91l0.04,-0.45l0.28,-0.06l0.85,1.39l0.16,1.59l-0.09,1.66l0.04,0.17l1.09,1.84l-0.86,-0.02l-0.72,0.17l-1.07,-0.24l-0.34,0.17l-0.54,1.19l0.06,0.34l1.48,1.47l1.06,0.44l0.32,0.94l0.73,1.6l-0.32,0.57l-1.23,2.49l-0.54,0.41l-0.12,0.21l-0.19,1.95l0.24,1.08l-0.18,0.67l0.07,0.28l1.13,1.25l0.24,0.93l0.92,1.29l1.1,0.8l0.1,1.01l0.26,0.73l-0.12,0.93l-1.65,-0.49l-2.02,-0.66l-3.19,-0.11Z" data-code="CM" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M246.8,429.1l-1.14,0.78l-2.25,1.21l-0.16,0.23l-0.37,2.94l-0.75,0.06l-2.72,-1.07l-2.83,-2.34l-3.06,-1.9l-0.71,-1.92l0.67,-1.84l-0.02,-0.25l-1.22,-2.13l-0.31,-5.41l1.02,-2.95l2.59,-2.4l-0.13,-0.51l-3.32,-0.8l2.06,-2.4l0.07,-0.15l0.79,-4.77l2.44,0.95l0.4,-0.22l1.31,-6.31l-0.16,-0.33l-1.68,-0.8l-0.42,0.21l-0.72,3.47l-1.01,-0.27l0.74,-4.06l0.85,-5.46l1.12,-1.96l0.03,-0.22l-0.71,-2.82l-0.19,-2.94l0.76,-0.07l0.26,-0.2l1.53,-4.62l1.73,-4.52l1.07,-4.2l-0.56,-4.2l0.73,-2.2l0.01,-0.12l-0.29,-3.3l1.46,-3.34l0.45,-5.19l0.8,-5.52l0.78,-5.89l-0.18,-4.33l-0.49,-3.47l1.1,-0.56l0.13,-0.13l0.44,-0.88l0.9,1.29l0.32,1.8l0.1,0.18l1.16,0.97l-0.73,2.33l0.01,0.21l1.33,2.91l0.97,3.6l0.35,0.22l1.57,-0.31l0.16,0.34l-0.79,2.51l-2.61,1.25l-0.17,0.28l0.08,4.36l-0.48,0.79l0.01,0.33l0.6,0.84l-1.62,1.55l-1.67,2.6l-0.89,2.47l-0.02,0.13l0.23,2.56l-1.5,2.76l-0.03,0.21l1.15,4.8l0.11,0.17l0.54,0.42l-0.01,2.37l-1.4,2.7l-0.03,0.15l0.06,2.25l-1.8,1.78l-0.09,0.21l0.02,2.73l0.71,2.63l-1.33,0.94l-0.12,0.17l-0.67,2.64l-0.59,3.03l0.4,3.55l-0.84,0.51l-0.14,0.31l0.58,3.5l0.08,0.16l0.96,0.99l-0.7,1.08l0.11,0.43l1.04,0.55l0.19,0.8l-0.89,0.48l-0.16,0.31l0.26,1.77l-0.89,4.06l-1.31,2.67l-0.03,0.19l0.28,1.53l-0.73,1.88l-1.85,1.37l-0.12,0.26l0.22,3.46l0.06,0.16l0.88,1.19l0.28,0.12l1.32,-0.17l-0.04,2.13l0.04,0.15l1.04,1.95l0.24,0.16l5.94,0.44ZM248.79,430.71l0.0,7.41l0.3,0.3l2.67,0.0l1.01,0.06l-0.54,0.91l-1.99,1.01l-1.13,-0.1l-1.42,-0.27l-1.87,-1.06l-2.57,-0.49l-3.09,-1.9l-2.52,-1.83l-2.65,-2.93l0.93,0.32l3.54,2.29l3.32,1.23l0.34,-0.09l1.29,-1.57l0.83,-2.32l2.11,-1.28l1.43,0.32Z" data-code="CL" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M280.14,145.66l-1.66,2.88l0.06,0.37l0.37,0.03l1.5,-1.01l1.17,0.49l-0.64,0.83l0.13,0.46l2.22,0.89l0.28,-0.03l1.02,-0.7l2.09,0.83l-0.69,2.1l0.37,0.38l1.43,-0.45l0.27,1.43l0.74,1.88l-0.95,2.5l-0.88,0.09l-1.34,-0.48l0.49,-2.34l-0.14,-0.32l-0.7,-0.4l-0.36,0.04l-2.81,2.66l-0.63,-0.05l1.2,-1.01l-0.1,-0.52l-2.4,-0.77l-2.79,0.18l-4.65,-0.09l-0.22,-0.54l1.37,-0.99l0.01,-0.48l-0.82,-0.65l1.91,-1.79l2.57,-5.17l1.49,-1.81l2.04,-1.07l0.63,0.08l-0.27,0.51l-1.33,2.07ZM193.92,74.85l-0.01,4.24l0.19,0.28l0.33,-0.07l3.14,-3.22l2.65,2.5l-0.71,3.04l0.06,0.26l2.42,2.88l0.46,0.0l2.66,-3.14l1.83,-3.74l0.03,-0.12l0.13,-4.53l3.23,0.31l3.63,0.64l3.18,2.08l0.13,1.91l-1.79,2.22l-0.0,0.37l1.69,2.2l-0.28,1.8l-4.74,2.84l-3.33,0.62l-2.5,-1.21l-0.41,0.17l-0.73,2.05l-2.39,3.44l-0.74,1.78l-2.78,2.61l-3.48,0.26l-0.17,0.07l-1.98,1.68l-0.1,0.21l-0.15,2.33l-2.68,0.45l-0.17,0.09l-3.1,3.2l-2.75,4.38l-0.99,3.06l-0.14,4.31l0.25,0.31l3.5,0.58l1.07,3.24l1.18,2.76l0.34,0.18l3.43,-0.69l4.55,1.52l2.45,1.32l1.76,1.65l0.12,0.07l3.11,0.96l2.63,1.46l0.13,0.04l4.12,0.2l2.41,0.3l-0.36,2.81l0.8,3.51l1.81,3.78l0.08,0.1l3.73,3.17l0.34,0.03l1.93,-1.08l0.13,-0.15l1.35,-3.44l0.01,-0.18l-1.31,-5.38l-0.08,-0.14l-1.46,-1.5l3.68,-1.51l2.84,-2.46l1.45,-2.55l0.04,-0.17l-0.2,-2.39l-0.04,-0.12l-1.7,-3.07l-2.9,-2.64l2.79,-3.66l0.05,-0.27l-1.08,-3.38l-0.8,-5.75l1.45,-0.75l4.18,1.03l2.6,0.38l0.18,-0.03l1.93,-0.95l2.18,1.23l3.01,2.18l0.73,1.42l0.25,0.16l4.18,0.27l-0.06,2.95l0.83,4.7l0.22,0.24l2.19,0.55l1.75,2.08l0.38,0.07l3.63,-2.03l0.11,-0.11l2.38,-4.06l1.36,-1.43l1.76,3.01l3.26,4.68l2.68,4.19l-0.94,2.09l0.12,0.38l3.31,1.98l2.23,1.98l0.13,0.07l3.94,0.89l1.48,1.02l0.96,2.82l0.22,0.2l1.85,0.43l0.88,1.13l0.17,3.53l-1.68,1.16l-1.76,1.14l-4.08,1.17l-0.11,0.06l-3.08,2.65l-4.11,0.52l-5.35,-0.69l-3.76,-0.02l-2.62,0.23l-0.2,0.1l-2.05,2.29l-3.13,1.41l-0.11,0.08l-3.6,4.24l-2.87,2.92l-0.05,0.36l0.33,0.14l2.13,-0.52l0.15,-0.08l3.98,-4.15l5.16,-2.63l3.58,-0.31l1.82,1.3l-2.09,1.91l-0.09,0.29l0.8,3.46l0.82,2.37l0.15,0.17l3.25,1.56l0.16,0.03l4.14,-0.45l0.21,-0.12l2.03,-2.86l0.11,1.46l0.13,0.22l1.26,0.88l-2.7,1.78l-5.51,1.83l-2.52,1.26l-2.75,2.16l-1.52,-0.18l-0.08,-2.16l4.19,-2.47l0.14,-0.34l-0.3,-0.22l-4.01,0.1l-2.66,0.36l-1.45,-1.56l0.0,-4.16l-0.11,-0.23l-1.11,-0.91l-0.28,-0.05l-1.5,0.48l-0.7,-0.7l-0.45,0.02l-1.91,2.39l-0.8,2.5l-0.82,1.31l-0.95,0.43l-0.77,0.15l-0.23,0.2l-0.18,0.56l-8.2,0.02l-0.13,0.03l-1.19,0.61l-2.95,2.45l-0.78,1.13l-4.6,0.01l-0.12,0.02l-1.13,0.48l-0.13,0.44l0.37,0.55l0.2,0.82l-0.01,0.09l-3.1,1.42l-2.63,0.5l-2.84,1.57l-0.47,0.0l-0.72,-0.4l-0.18,-0.27l0.03,-0.15l0.52,-1.0l1.2,-1.71l0.73,-1.8l0.02,-0.17l-1.03,-5.47l-0.15,-0.21l-2.35,-1.32l0.16,-0.29l-0.05,-0.35l-0.37,-0.38l-0.22,-0.09l-0.56,0.0l-0.35,-0.34l-0.11,-0.65l-0.46,-0.2l-0.39,0.26l-0.2,-0.03l-0.11,-0.33l-0.48,-0.25l-0.21,-0.71l-0.15,-0.18l-3.97,-2.07l-4.8,-2.39l-0.25,-0.01l-2.19,0.89l-0.72,0.03l-3.04,-0.82l-0.14,-0.0l-1.94,0.4l-2.4,-0.98l-2.56,-0.51l-1.7,-0.19l-0.62,-0.44l-0.42,-1.67l-0.3,-0.23l-0.85,0.02l-0.29,0.3l-0.01,0.95l-69.26,-0.01l-4.77,-3.14l-1.78,-1.41l-4.51,-1.38l-1.3,-2.73l0.34,-1.96l-0.17,-0.33l-3.06,-1.37l-0.41,-2.58l-0.11,-0.18l-2.92,-2.4l-0.05,-1.53l1.32,-1.59l0.07,-0.2l-0.07,-2.21l-0.16,-0.26l-4.19,-2.22l-2.52,-4.02l-1.56,-2.6l-0.08,-0.09l-2.28,-1.64l-1.65,-1.48l-1.31,-1.89l-0.38,-0.1l-2.51,1.21l-2.28,1.92l-2.03,-2.22l-1.85,-1.71l-2.44,-1.04l-2.28,-0.12l0.03,-37.72l4.27,0.98l4.0,2.13l2.61,0.4l0.24,-0.07l2.17,-1.81l2.92,-1.33l3.63,0.53l0.18,-0.03l3.72,-1.94l3.89,-1.06l1.6,1.72l0.37,0.06l1.87,-1.04l0.14,-0.19l0.48,-1.83l1.37,0.38l4.18,3.96l0.41,0.0l2.89,-2.62l0.28,2.79l0.37,0.26l3.08,-0.73l0.17,-0.12l0.85,-1.16l2.81,0.24l3.83,1.86l5.86,1.61l3.46,0.75l2.44,-0.26l2.89,1.89l-3.12,1.89l-0.14,0.31l0.24,0.24l4.53,0.92l6.84,-0.5l2.04,-0.71l2.54,2.44l0.39,0.02l2.72,-2.16l-0.01,-0.48l-2.26,-1.61l1.27,-1.16l2.94,-0.19l1.94,-0.42l1.89,0.97l2.49,2.32l0.24,0.08l2.71,-0.33l4.35,1.9l0.17,0.02l3.86,-0.67l3.62,0.1l0.31,-0.33l-0.26,-2.44l1.9,-0.65l3.58,1.36l-0.01,3.84l0.23,0.29l0.34,-0.17l1.51,-3.23l1.81,0.1l0.31,-0.22l1.13,-4.37l-0.08,-0.29l-2.68,-2.73l-2.83,-1.76l0.19,-4.73l2.77,-3.15l3.06,0.69l2.44,1.97l3.24,4.88l-2.05,2.02l0.15,0.51l4.41,0.85ZM265.85,150.7l-0.84,0.04l-3.15,-0.99l-1.77,-1.17l0.19,-0.06l3.17,0.79l2.39,1.27l0.01,0.12ZM249.41,3.71l6.68,0.49l5.34,0.79l4.34,1.6l-0.08,1.24l-5.91,2.56l-6.03,1.21l-2.36,1.38l-0.14,0.34l0.29,0.22l4.37,-0.02l-4.96,3.01l-4.06,1.64l-0.11,0.08l-4.21,4.62l-5.07,0.92l-0.12,0.05l-1.53,1.1l-7.5,0.59l-0.28,0.28l0.24,0.31l2.67,0.54l-1.04,0.6l-0.09,0.44l1.89,2.49l-2.11,1.66l-3.83,1.52l-0.15,0.13l-1.14,2.01l-3.41,1.55l-0.16,0.36l0.35,1.19l0.3,0.22l3.98,-0.19l0.03,0.78l-6.42,2.99l-6.44,-1.41l-7.41,0.79l-3.72,-0.62l-4.48,-0.26l-0.25,-2.0l4.37,-1.13l0.21,-0.38l-1.14,-3.55l1.13,-0.28l6.61,2.29l0.35,-0.12l-0.04,-0.37l-3.41,-3.45l-0.14,-0.08l-3.57,-0.92l1.62,-1.7l4.36,-1.3l0.2,-0.18l0.71,-1.94l-0.12,-0.36l-3.45,-2.15l-0.88,-2.43l6.36,0.23l1.94,0.61l0.23,-0.02l3.91,-2.1l0.15,-0.32l-0.26,-0.24l-5.69,-0.67l-8.69,0.37l-4.3,-1.92l-2.12,-2.39l-2.82,-1.68l-0.44,-1.65l3.41,-1.06l2.93,-0.2l4.91,-0.99l3.69,-2.28l2.93,0.31l2.64,1.68l0.42,-0.1l1.84,-3.23l3.17,-0.96l4.45,-0.69l7.56,-0.26l1.26,0.64l0.18,0.03l7.2,-1.06l10.81,0.8ZM203.94,57.59l0.01,0.32l1.97,2.97l0.51,-0.01l2.26,-3.75l6.05,-1.89l4.08,4.72l-0.36,2.95l0.38,0.33l4.95,-1.36l0.11,-0.05l2.23,-1.77l5.37,2.31l3.32,2.14l0.3,1.89l0.36,0.25l4.48,-1.01l2.49,2.8l0.14,0.09l5.99,1.78l2.09,1.74l2.18,3.83l-4.29,1.91l-0.01,0.54l5.9,2.83l3.95,0.94l3.54,3.84l0.2,0.1l3.58,0.25l-0.67,2.51l-4.18,4.54l-2.84,-1.61l-3.91,-3.95l-0.26,-0.09l-3.24,0.52l-0.25,0.26l-0.32,2.37l0.1,0.26l2.63,2.38l3.42,1.89l0.96,1.0l1.57,3.8l-0.74,2.43l-2.85,-0.96l-6.26,-3.15l-0.38,0.09l0.04,0.39l3.54,3.4l2.55,2.31l0.23,0.78l-6.26,-1.43l-5.33,-2.25l-2.73,-1.73l0.67,-0.86l-0.09,-0.45l-7.38,-4.01l-0.44,0.27l0.03,0.89l-6.85,0.61l-1.8,-1.17l1.43,-2.6l4.56,-0.07l5.15,-0.52l0.23,-0.45l-0.76,-1.34l0.8,-1.89l3.21,-4.06l0.05,-0.29l-0.72,-1.95l-0.97,-1.47l-0.11,-0.1l-3.84,-2.1l-4.53,-1.33l1.09,-0.75l0.05,-0.45l-2.65,-2.75l-0.18,-0.09l-2.12,-0.24l-1.91,-1.47l-0.39,0.02l-1.27,1.25l-4.4,0.56l-9.06,-0.99l-5.28,-1.31l-4.01,-0.67l-1.72,-1.31l2.32,-1.85l0.1,-0.33l-0.28,-0.2l-3.3,-0.02l-0.74,-4.36l1.86,-4.09l2.46,-1.88l5.74,-1.15l-1.5,2.55ZM261.28,159.28l0.19,0.14l1.82,0.42l1.66,-0.05l-0.66,0.68l-0.75,0.16l-3.0,-1.25l-0.46,-0.77l0.51,-0.52l0.68,1.19ZM230.87,84.48l-2.48,0.19l-0.52,-1.74l0.96,-2.17l2.03,-0.53l1.71,1.04l0.02,1.6l-0.22,0.46l-1.5,1.16ZM229.52,58.19l0.14,0.82l-4.99,-0.22l-2.73,0.63l-0.59,-0.23l-2.61,-2.4l0.08,-1.38l0.94,-0.25l5.61,0.51l4.14,2.54ZM222.12,105.0l-0.79,1.63l-0.75,-0.22l-0.52,-0.91l0.04,-0.09l0.84,-1.01l0.74,0.06l0.44,0.55ZM183.77,38.22l2.72,1.65l0.16,0.04l4.83,-0.01l1.92,1.52l-0.51,1.75l0.18,0.36l2.84,1.14l1.56,1.19l0.16,0.06l3.37,0.22l3.65,0.42l4.07,-1.1l5.05,-0.43l3.96,0.35l2.53,1.8l0.48,1.79l-1.37,1.16l-3.6,1.03l-3.22,-0.59l-7.17,0.76l-5.1,0.09l-4.0,-0.6l-6.48,-1.56l-0.81,-2.57l-0.3,-2.49l-0.1,-0.19l-2.51,-2.25l-0.16,-0.07l-5.12,-0.63l-2.61,-1.45l0.75,-1.71l4.88,0.32ZM207.46,91.26l0.42,1.62l0.42,0.19l1.12,-0.55l1.35,0.99l2.74,1.39l2.73,1.2l0.2,1.74l0.35,0.26l1.72,-0.29l1.31,0.97l-1.72,0.96l-3.68,-0.9l-1.34,-1.71l-0.43,-0.04l-2.46,2.1l-3.23,1.85l-0.74,-1.98l-0.31,-0.19l-2.47,0.28l1.49,-1.34l0.1,-0.19l0.32,-3.15l0.79,-3.45l1.34,0.25ZM215.59,102.66l-2.73,2.0l-1.49,-0.08l-0.37,-0.7l1.61,-1.56l3.0,0.03l-0.02,0.3ZM202.79,24.07l0.11,0.12l2.54,1.53l-3.01,1.47l-4.55,4.07l-4.3,0.38l-5.07,-0.68l-2.51,-2.09l0.03,-1.72l1.86,-1.4l0.1,-0.34l-0.29,-0.2l-4.49,0.04l-2.63,-1.79l-1.45,-2.36l1.61,-2.38l1.65,-1.69l2.47,-0.4l0.19,-0.48l-0.72,-0.89l5.1,-0.26l3.1,3.05l0.13,0.07l4.21,1.25l3.99,1.06l1.92,3.65ZM187.5,59.3l-0.15,0.1l-2.59,3.4l-2.5,-0.15l-1.47,-3.92l0.04,-2.24l1.22,-1.92l2.34,-1.26l5.11,0.17l4.28,1.06l-3.36,3.86l-2.9,0.9ZM186.19,48.8l-1.15,1.63l-3.42,-0.35l-2.68,-1.15l1.11,-1.88l3.34,-1.27l2.01,1.63l0.79,1.38ZM185.78,35.41l-0.95,0.13l-4.48,-0.33l-0.4,-0.91l4.5,0.07l1.45,0.82l-0.1,0.21ZM180.76,32.56l-3.43,1.03l-1.85,-1.14l-1.01,-1.92l-0.16,-1.87l2.87,0.2l1.39,0.35l2.75,1.75l-0.55,1.6ZM181.03,76.32l-1.21,1.2l-3.19,-1.26l-0.18,-0.01l-1.92,0.45l-2.88,-1.67l1.84,-1.16l1.6,-1.77l2.45,1.17l1.45,0.77l2.05,2.28ZM169.72,54.76l2.83,0.97l0.14,0.01l4.25,-0.58l0.47,1.01l-2.19,2.16l0.07,0.48l3.61,1.95l-0.41,3.84l-3.87,1.68l-2.23,-0.36l-1.73,-1.75l-6.07,-3.53l0.03,-1.01l4.79,0.55l0.3,-0.16l-0.04,-0.34l-2.55,-2.89l2.59,-2.05ZM174.44,40.56l1.49,1.87l0.07,2.48l-1.07,3.52l-3.87,0.48l-2.41,-0.72l0.05,-2.72l-0.33,-0.3l-3.79,0.36l-0.13,-3.31l2.36,0.14l0.15,-0.03l3.7,-1.74l3.44,0.29l0.31,-0.22l0.03,-0.12ZM170.14,31.5l0.75,1.74l-3.52,-0.52l-4.19,-1.77l-4.65,-0.17l1.65,-1.11l-0.05,-0.52l-2.86,-1.26l-0.13,-1.58l4.52,0.7l6.66,1.99l1.84,2.5ZM134.64,58.08l-1.08,1.93l0.34,0.44l5.44,-1.41l3.37,2.32l0.37,-0.02l2.66,-2.28l2.03,1.38l2.01,4.53l0.53,0.04l1.26,-1.93l0.03,-0.27l-1.67,-4.55l1.82,-0.58l2.36,0.73l2.69,1.84l1.53,4.46l0.77,3.24l0.15,0.19l4.22,2.26l4.32,2.04l-0.21,1.51l-3.87,0.34l-0.19,0.5l1.45,1.54l-0.65,1.23l-4.3,-0.65l-4.4,-1.19l-2.97,0.28l-4.67,1.48l-6.31,0.65l-4.27,0.39l-1.26,-1.91l-0.15,-0.12l-3.42,-1.2l-0.16,-0.01l-2.05,0.45l-2.66,-3.02l1.2,-0.34l3.82,-0.76l3.58,0.19l3.27,-0.78l0.23,-0.29l-0.24,-0.29l-4.84,-1.06l-5.42,0.35l-3.4,-0.09l-0.97,-1.22l5.39,-1.7l0.21,-0.33l-0.3,-0.25l-3.82,0.06l-3.95,-1.1l1.88,-3.13l1.68,-1.81l6.54,-2.84l2.11,0.77ZM158.85,56.58l-1.82,2.62l-3.38,-2.9l0.49,-0.39l3.17,-0.18l1.54,0.86ZM149.71,42.7l1.0,1.87l0.37,0.14l2.17,-0.83l2.33,0.2l0.38,2.16l-1.38,2.17l-8.33,0.76l-6.34,2.15l-3.51,0.1l-0.22,-1.13l4.98,-2.12l0.17,-0.34l-0.31,-0.23l-11.27,0.6l-3.04,-0.78l3.14,-4.57l2.2,-1.35l6.87,1.7l4.4,3.0l0.14,0.05l4.37,0.39l0.27,-0.48l-3.41,-4.68l1.96,-1.62l2.28,0.53l0.79,2.32ZM145.44,29.83l-2.18,0.77l-3.79,-0.0l0.02,-0.31l2.34,-1.5l1.2,0.23l2.42,0.83ZM144.83,34.5l-4.44,1.46l-3.18,-1.48l1.6,-1.36l3.51,-0.53l3.1,0.75l-0.6,1.16ZM119.02,65.87l-6.17,2.07l-1.19,-1.82l-0.13,-0.11l-5.48,-2.32l0.92,-1.7l1.73,-3.44l2.16,-3.15l-0.02,-0.36l-2.09,-2.56l7.84,-0.71l3.59,1.02l6.32,0.27l2.35,1.37l2.25,1.71l-2.68,1.04l-6.21,3.41l-3.1,3.28l-0.08,0.21l0.0,1.81ZM129.66,35.4l-0.3,3.55l-1.77,1.67l-2.34,0.27l-4.62,2.2l-3.89,0.76l-2.83,-0.93l3.85,-3.52l5.04,-3.36l3.75,0.07l3.11,-0.7ZM111.24,152.74l-0.82,0.29l-3.92,-1.39l-0.7,-1.06l-0.12,-0.1l-2.15,-1.09l-0.41,-0.84l-0.2,-0.16l-2.44,-0.56l-0.84,-1.56l0.1,-0.36l2.34,0.64l1.53,0.5l2.28,0.34l0.78,1.04l1.24,1.55l0.09,0.08l2.42,1.3l0.81,1.39ZM88.54,134.82l0.14,0.02l2.0,-0.23l-0.67,3.48l0.06,0.24l1.78,2.22l-0.24,-0.0l-1.4,-1.42l-0.91,-1.53l-1.26,-1.08l-0.42,-1.35l0.09,-0.66l0.82,0.31Z" data-code="CA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M453.66,296.61l-0.9,-0.82l-0.35,-0.04l-0.83,0.48l-0.77,0.83l-1.65,-2.13l1.66,-1.2l0.08,-0.39l-0.81,-1.43l0.59,-0.43l1.62,-0.29l0.24,-0.24l0.1,-0.58l0.94,0.84l0.19,0.08l2.21,0.11l0.27,-0.14l0.81,-1.29l0.32,-1.76l-0.27,-1.96l-0.06,-0.15l-1.08,-1.35l1.02,-2.74l-0.09,-0.34l-0.62,-0.5l-0.22,-0.06l-1.66,0.18l-0.55,-1.03l0.12,-0.73l2.85,0.09l1.98,0.65l2.0,0.59l0.38,-0.25l0.17,-1.3l1.26,-2.24l1.34,-1.19l1.54,0.38l1.35,0.12l-0.11,1.15l-0.74,1.34l-0.5,1.61l-0.31,2.22l0.12,1.41l-0.4,0.9l-0.06,0.88l-0.24,0.67l-1.57,1.15l-1.24,1.41l-1.09,2.43l-0.03,0.13l0.08,1.95l-0.55,0.69l-1.46,1.23l-1.32,1.41l-0.61,-0.29l-0.13,-0.57l-0.29,-0.23l-1.36,-0.02l-0.23,0.1l-0.72,0.81l-0.41,-0.16Z" data-code="CG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M459.41,266.56l1.9,-0.17l0.22,-0.12l0.36,-0.5l0.14,0.02l0.55,0.51l0.29,0.07l3.15,-0.96l0.12,-0.07l1.05,-0.97l1.29,-0.87l0.12,-0.33l-0.17,-0.61l0.38,-0.12l2.36,0.15l0.15,-0.03l2.36,-1.17l0.12,-0.1l1.78,-2.72l1.18,-0.96l1.23,-0.34l0.21,0.79l0.07,0.13l1.37,1.5l0.01,0.86l-0.39,1.0l-0.01,0.17l0.16,0.78l0.1,0.17l0.91,0.76l1.89,1.09l1.24,0.92l0.02,0.67l0.12,0.23l1.67,1.3l0.99,1.03l0.61,1.46l0.14,0.15l1.79,0.95l0.2,0.4l-0.44,0.14l-1.54,-0.06l-1.98,-0.26l-0.93,0.22l-0.19,0.14l-0.3,0.48l-0.57,0.05l-0.91,-0.49l-0.26,-0.01l-2.7,1.21l-1.04,-0.23l-0.21,0.03l-0.34,0.19l-0.12,0.13l-0.64,1.3l-1.67,-0.43l-1.77,-0.24l-1.58,-0.91l-2.06,-0.85l-0.27,0.02l-1.42,0.88l-0.97,1.27l-0.06,0.14l-0.19,1.46l-1.3,-0.11l-1.67,-0.42l-0.27,0.07l-1.55,1.41l-0.99,1.76l-0.14,-1.18l-0.13,-0.22l-1.1,-0.78l-0.86,-1.2l-0.2,-0.84l-0.07,-0.13l-1.07,-1.19l0.16,-0.59l0.0,-0.15l-0.24,-1.01l0.18,-1.77l0.5,-0.38l0.09,-0.11l1.18,-2.4Z" data-code="CF" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M497.85,276.25l-0.14,2.77l0.2,0.3l0.57,0.19l-0.47,0.52l-1.0,0.71l-0.96,1.31l-0.56,1.22l-0.16,2.04l-0.54,0.89l-0.04,0.15l-0.02,1.76l-0.63,0.61l-0.09,0.2l-0.08,1.33l-0.2,0.11l-0.15,0.21l-0.23,1.37l0.03,0.2l0.6,1.08l0.16,2.96l0.44,2.29l-0.24,1.25l0.01,0.15l0.5,1.46l0.07,0.12l1.41,1.37l1.09,2.56l-0.51,-0.11l-3.45,0.45l-0.67,0.3l-0.15,0.15l-0.71,1.61l0.01,0.26l0.52,1.03l-0.43,2.9l-0.31,2.55l0.13,0.29l0.7,0.46l1.75,0.99l0.31,-0.01l0.26,-0.17l0.15,1.9l-1.44,-0.02l-0.94,-1.28l-0.94,-1.1l-0.17,-0.1l-1.76,-0.33l-0.5,-1.18l-0.42,-0.15l-1.44,0.75l-1.79,-0.32l-0.77,-1.05l-0.2,-0.12l-1.59,-0.23l-0.97,0.04l-0.1,-0.53l-0.27,-0.25l-0.86,-0.06l-1.13,-0.15l-1.62,0.37l-1.04,-0.06l-0.32,0.09l0.11,-2.56l-0.08,-0.21l-0.77,-0.87l-0.17,-1.41l0.36,-1.47l-0.03,-0.21l-0.48,-0.91l-0.04,-1.52l-0.3,-0.29l-2.65,0.02l0.13,-0.53l-0.29,-0.37l-1.28,0.01l-0.28,0.21l-0.07,0.24l-1.35,0.09l-0.26,0.18l-0.62,1.45l-0.25,0.42l-1.17,-0.3l-0.19,0.01l-0.79,0.34l-1.44,0.18l-1.41,-1.96l-0.7,-1.47l-0.61,-1.86l-0.28,-0.21l-7.39,-0.03l-0.92,0.3l-0.78,-0.03l-0.78,0.25l-0.11,-0.25l0.35,-0.15l0.18,-0.26l0.07,-1.02l0.33,-0.52l0.72,-0.42l0.52,0.2l0.33,-0.08l0.76,-0.86l0.99,0.02l0.11,0.48l0.16,0.2l0.94,0.44l0.35,-0.07l1.46,-1.56l1.44,-1.21l0.68,-0.85l0.06,-0.2l-0.08,-1.99l1.04,-2.33l1.1,-1.23l1.62,-1.19l0.11,-0.14l0.29,-0.8l0.08,-0.94l0.38,-0.82l0.03,-0.16l-0.13,-1.38l0.3,-2.16l0.47,-1.51l0.73,-1.31l0.04,-0.12l0.15,-1.51l0.21,-1.66l0.89,-1.16l1.16,-0.7l1.9,0.79l1.69,0.95l1.81,0.24l1.85,0.48l0.35,-0.16l0.71,-1.43l0.16,-0.09l1.03,0.23l0.19,-0.02l2.65,-1.19l0.86,0.46l0.17,0.03l0.81,-0.08l0.23,-0.14l0.31,-0.5l0.75,-0.17l1.83,0.26l1.64,0.06l0.72,-0.21l1.39,1.9l0.16,0.11l1.12,0.3l0.24,-0.04l0.58,-0.36l1.05,0.15l0.15,-0.02l1.15,-0.44l0.47,0.84l0.08,0.09l2.08,1.57Z" data-code="CD" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M463.29,152.22l-0.88,-0.47l-0.18,-0.03l-1.08,0.15l-1.86,-0.94l-0.21,-0.02l-0.88,0.24l-0.13,0.07l-1.25,1.17l-1.63,-0.91l-1.38,-1.36l-1.22,-0.75l-0.24,-1.24l-0.33,-0.75l1.53,-0.6l0.98,-0.84l1.74,-0.62l0.11,-0.07l0.47,-0.47l0.46,0.27l0.24,0.03l0.96,-0.3l1.06,0.95l0.15,0.07l1.57,0.24l-0.1,0.6l0.16,0.32l1.36,0.68l0.41,-0.15l0.28,-0.62l1.29,0.28l0.19,0.84l0.26,0.23l1.73,0.18l0.74,1.02l-0.17,0.0l-0.25,0.13l-0.32,0.49l-0.46,0.11l-0.22,0.23l-0.13,0.57l-0.32,0.1l-0.2,0.22l-0.03,0.14l-0.65,0.25l-1.05,-0.05l-0.28,0.17l-0.22,0.43Z" data-code="CZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M505.03,193.75l-1.51,0.68l-1.0,-0.3l-0.32,-0.63l0.69,-0.06l0.41,0.13l0.19,-0.0l0.62,-0.22l0.31,0.02l0.06,0.22l0.49,0.17l0.06,-0.01Z" data-code="CY" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M213.0,263.84l-0.98,-0.4l-0.3,-0.31l0.16,-0.24l0.05,-0.21l-0.09,-0.56l-0.1,-0.18l-0.76,-0.65l-0.99,-0.5l-0.74,-0.28l-0.13,-0.58l-0.12,-0.18l-0.66,-0.45l-0.34,-0.0l-0.13,0.31l0.13,0.59l-0.17,0.21l-0.34,-0.42l-0.14,-0.1l-0.7,-0.22l-0.23,-0.34l0.01,-0.62l0.31,-0.74l-0.14,-0.38l-0.3,-0.15l0.47,-0.4l1.48,0.6l0.26,-0.02l0.47,-0.27l0.58,0.15l0.35,0.44l0.17,0.11l0.74,0.17l0.27,-0.07l0.3,-0.27l0.52,1.09l0.97,1.02l0.77,0.71l-0.41,0.1l-0.23,0.3l0.01,1.02l0.12,0.24l0.2,0.14l-0.07,0.05l-0.11,0.3l0.08,0.37l-0.23,0.63Z" data-code="CR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M215.01,226.09l2.08,0.18l1.94,0.03l2.24,0.86l0.95,0.92l0.25,0.08l2.22,-0.28l0.79,0.55l3.68,2.81l0.19,0.06l0.77,-0.03l1.18,0.42l-0.12,0.47l0.27,0.37l1.78,0.1l1.59,0.9l-0.11,0.22l-1.5,0.3l-1.64,0.13l-1.75,-0.2l-2.69,0.19l1.0,-0.86l-0.03,-0.48l-1.02,-0.68l-0.13,-0.05l-1.52,-0.16l-0.74,-0.64l-0.57,-1.42l-0.3,-0.19l-1.36,0.1l-2.23,-0.67l-0.71,-0.52l-0.14,-0.06l-3.2,-0.4l-0.42,-0.25l0.56,-0.39l0.12,-0.33l-0.27,-0.22l-2.46,-0.13l-0.2,0.06l-1.72,1.31l-0.94,0.03l-0.25,0.15l-0.29,0.53l-1.04,0.24l-0.29,-0.07l0.7,-0.43l0.1,-0.11l0.5,-0.87l1.04,-0.54l1.23,-0.49l1.86,-0.25l0.62,-0.28Z" data-code="CU" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M500.95,353.41l-0.41,0.97l-1.16,0.23l-1.29,-1.26l-0.02,-0.71l0.63,-0.93l0.23,-0.7l0.47,-0.12l1.04,0.4l0.32,1.05l0.2,1.08Z" data-code="SZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M510.84,199.83l0.09,-0.11l0.07,-0.2l-0.04,-1.08l0.56,-1.4l1.3,-1.01l0.1,-0.34l-0.41,-1.11l-0.24,-0.19l-0.89,-0.11l-0.2,-1.84l0.55,-1.05l1.3,-1.22l0.09,-0.19l0.09,-1.09l0.39,0.27l0.25,0.04l2.66,-0.77l1.35,0.52l2.06,-0.01l2.93,-1.08l1.35,0.04l2.14,-0.34l-0.83,1.16l-1.31,0.68l-0.16,0.3l0.23,2.03l-0.9,3.25l-5.43,2.87l-4.79,2.91l-2.32,-0.92Z" data-code="SY" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M599.04,172.15l0.38,-0.9l1.43,-0.37l4.04,1.02l0.37,-0.23l0.36,-1.64l1.17,-0.52l3.45,1.24l0.2,-0.0l0.86,-0.31l4.09,0.08l3.61,0.31l1.18,1.02l0.11,0.06l1.19,0.34l-0.13,0.26l-3.84,1.58l-0.13,0.1l-0.81,1.08l-3.08,0.34l-0.24,0.16l-0.85,1.7l-2.43,-0.37l-0.14,0.01l-1.79,0.61l-2.39,1.4l-0.12,0.39l0.25,0.49l-0.48,0.45l-4.57,0.43l-3.04,-0.94l-2.45,0.18l0.14,-1.02l2.42,0.44l0.27,-0.08l0.81,-0.81l1.76,0.27l0.21,-0.05l3.21,-2.14l-0.03,-0.51l-2.97,-1.57l-0.26,-0.01l-1.64,0.69l-1.38,-0.84l1.81,-1.67l-0.09,-0.5l-0.46,-0.18Z" data-code="KG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M523.3,287.04l0.06,0.17l1.29,1.8l-1.46,0.84l-0.11,0.11l-0.55,0.93l-0.81,0.16l-0.24,0.24l-0.34,1.69l-0.81,1.06l-0.46,1.58l-0.76,0.63l-3.3,-2.3l-0.16,-1.32l-0.15,-0.23l-9.35,-5.28l-0.02,-2.4l1.92,-2.63l0.91,-1.83l0.01,-0.24l-1.09,-2.86l-0.29,-1.24l-1.09,-1.63l2.93,-2.85l0.92,0.3l0.0,1.19l0.09,0.22l0.86,0.83l0.21,0.08l1.65,0.0l3.09,2.08l0.16,0.05l0.79,0.03l0.54,-0.06l0.58,0.28l1.67,0.2l0.28,-0.12l0.69,-0.98l2.04,-0.94l0.86,0.73l0.19,0.07l1.1,0.0l-1.82,2.36l-0.06,0.18l0.03,9.12Z" data-code="KE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M505.7,261.39l0.02,1.64l-0.27,0.55l-1.15,0.05l-0.24,0.15l-0.85,1.44l0.22,0.45l1.44,0.17l1.15,1.12l0.42,0.95l0.14,0.15l1.06,0.54l1.33,2.45l-3.06,2.98l-1.44,1.08l-1.75,0.01l-1.92,0.56l-1.5,-0.53l-0.27,0.03l-0.85,0.57l-1.98,-1.5l-0.56,-1.02l-0.37,-0.13l-1.32,0.5l-1.08,-0.15l-0.2,0.04l-0.56,0.35l-0.9,-0.24l-1.44,-1.97l-0.39,-0.77l-0.13,-0.13l-1.78,-0.94l-0.65,-1.5l-1.08,-1.12l-1.57,-1.22l-0.02,-0.68l-0.12,-0.23l-1.37,-1.02l-1.17,-0.68l0.2,-0.08l0.86,-0.48l0.14,-0.18l0.63,-2.22l0.6,-1.02l1.47,-0.28l0.35,0.56l1.29,1.48l0.14,0.09l0.69,0.22l0.22,-0.02l0.83,-0.4l1.58,0.08l0.26,0.39l0.25,0.13l2.49,0.0l0.3,-0.25l0.06,-0.35l1.13,-0.42l0.18,-0.18l0.22,-0.63l0.68,-0.38l1.95,1.37l0.23,0.05l1.29,-0.26l0.19,-0.12l1.23,-1.8l1.36,-1.37l0.08,-0.25l-0.21,-1.52l-0.06,-0.15l-0.25,-0.3l0.94,-0.08l0.26,-0.21l0.1,-0.32l0.6,0.09l-0.25,1.67l0.3,1.83l0.11,0.19l1.22,0.94l0.25,0.73l-0.04,1.2l0.26,0.31l0.09,0.01Z" data-code="SS" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M278.1,270.26l2.71,0.45l0.31,-0.14l0.19,-0.32l1.82,-0.16l2.25,0.56l-1.09,1.81l-0.04,0.19l0.2,1.72l0.05,0.13l0.9,1.35l-0.39,0.99l-0.21,1.09l-0.48,0.8l-1.2,-0.44l-0.17,-0.01l-1.12,0.24l-0.95,-0.21l-0.35,0.2l-0.25,0.73l0.05,0.29l0.3,0.35l-0.06,0.13l-1.01,-0.15l-1.42,-2.03l-0.32,-1.36l-0.29,-0.23l-0.63,-0.0l-0.95,-1.56l0.41,-1.16l0.01,-0.17l-0.08,-0.35l1.29,-0.56l0.18,-0.22l0.35,-1.97Z" data-code="SR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M680.28,257.89l-0.93,-1.2l-1.24,-2.56l-0.56,-2.9l1.45,-1.92l3.07,-0.46l2.26,0.35l2.03,0.98l0.38,-0.11l1.0,-1.55l1.86,0.79l0.52,1.51l-0.28,2.82l-4.05,1.88l-0.12,0.45l0.79,1.1l-2.2,0.17l-2.08,0.98l-1.89,-0.33Z" data-code="KH" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M197.02,248.89l0.18,-0.05l0.59,0.17l0.55,0.51l0.64,0.35l0.06,0.22l0.37,0.21l1.01,-0.28l0.38,0.13l0.16,0.13l-0.14,0.81l-0.18,0.38l-1.22,-0.03l-0.84,-0.23l-1.11,-0.52l-1.31,-0.15l-0.49,-0.38l0.02,-0.08l0.76,-0.57l0.46,-0.27l0.11,-0.35Z" data-code="SV" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M468.01,150.02l0.05,0.07l0.36,0.1l0.85,-0.37l1.12,1.02l0.33,0.05l1.38,-0.65l1.07,0.3l0.16,0.0l1.69,-0.43l1.95,1.02l-0.51,0.64l-0.45,1.2l-0.32,0.2l-2.55,-0.93l-0.17,-0.01l-0.82,0.2l-0.17,0.11l-0.53,0.68l-0.94,0.32l-0.14,-0.11l-0.29,-0.04l-1.18,0.48l-0.95,0.09l-0.26,0.21l-0.15,0.47l-1.84,0.34l-0.82,-0.31l-1.14,-0.73l-0.2,-0.89l0.42,-0.84l0.91,0.05l0.12,-0.02l0.86,-0.33l0.18,-0.21l0.03,-0.13l0.32,-0.1l0.2,-0.22l0.12,-0.55l0.39,-0.1l0.18,-0.13l0.3,-0.45l0.43,-0.0Z" data-code="SK" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M737.31,185.72l0.84,0.08l0.27,-0.12l0.89,-1.2l1.63,-0.13l1.1,-0.2l0.21,-0.16l0.12,-0.24l1.86,2.95l0.59,1.79l0.02,3.17l-0.84,1.38l-2.23,0.55l-1.95,1.14l-1.91,0.21l-0.22,-1.21l0.45,-2.07l-0.01,-0.17l-0.99,-2.67l1.54,-0.4l0.17,-0.46l-1.55,-2.24Z" data-code="KR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M455.77,159.59l1.79,0.21l0.18,-0.04l1.2,-0.68l2.12,-0.08l0.21,-0.1l0.38,-0.42l0.1,0.01l0.28,0.62l-1.71,0.71l-0.18,0.22l-0.21,1.1l-0.71,0.26l-0.2,0.28l0.01,0.55l-0.59,-0.04l-0.79,-0.47l-0.38,0.06l-0.36,0.41l-0.84,-0.05l0.05,-0.15l-0.56,-1.24l0.21,-1.17Z" data-code="SI" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M747.76,172.02l-0.23,-0.04l-0.26,0.08l-1.09,1.02l-0.78,1.06l-0.06,0.19l0.09,1.95l-1.12,0.57l-0.53,0.58l-0.88,0.82l-1.69,0.51l-1.09,0.79l-0.12,0.22l-0.07,1.17l-0.22,0.25l0.09,0.47l0.96,0.46l1.22,1.1l-0.19,0.37l-0.91,0.16l-1.75,0.14l-0.22,0.12l-0.87,1.18l-0.95,-0.09l-0.3,0.18l-0.97,-0.44l-0.39,0.13l-0.25,0.44l-0.29,0.09l-0.03,-0.2l-0.18,-0.23l-0.62,-0.25l-0.43,-0.29l0.52,-0.97l0.52,-0.3l0.13,-0.38l-0.18,-0.42l0.59,-1.47l0.01,-0.21l-0.16,-0.48l-0.22,-0.2l-1.41,-0.31l-0.82,-0.55l1.74,-1.62l2.73,-1.58l1.62,-1.96l0.96,0.76l0.17,0.06l2.17,0.11l0.31,-0.37l-0.32,-1.31l3.61,-1.21l0.16,-0.13l0.79,-1.34l1.25,1.38Z" data-code="KP" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M543.8,256.48l0.61,-0.05l1.14,-0.37l1.31,-0.25l0.12,-0.05l1.11,-0.81l0.57,-0.0l0.03,0.39l-0.23,1.49l0.01,1.25l-0.52,0.92l-0.7,2.71l-1.19,2.79l-1.54,3.2l-2.13,3.66l-2.12,2.79l-2.92,3.39l-2.47,2.0l-3.76,2.5l-2.33,1.9l-2.77,3.06l-0.61,1.35l-0.28,0.29l-1.22,-1.69l-0.03,-8.92l2.12,-2.76l0.59,-0.68l1.47,-0.04l0.18,-0.06l2.15,-1.71l3.16,-0.11l0.21,-0.09l7.08,-7.55l1.76,-2.12l1.14,-1.57l0.06,-0.18l0.01,-4.67Z" data-code="SO" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M379.28,250.34l-0.95,-1.82l-0.09,-0.1l-0.83,-0.6l0.62,-0.28l0.13,-0.11l1.21,-1.8l0.6,-1.31l0.71,-0.68l1.09,0.2l0.18,-0.02l1.17,-0.53l1.25,-0.03l1.17,0.73l1.59,0.65l1.47,1.83l1.59,1.7l0.12,1.56l0.49,1.46l0.1,0.14l0.85,0.65l0.18,0.82l-0.08,0.57l-0.13,0.05l-1.29,-0.19l-0.29,0.13l-0.11,0.16l-0.35,0.04l-1.83,-0.61l-5.84,-0.13l-0.12,0.02l-0.6,0.26l-0.87,-0.06l-1.01,0.32l-0.26,-1.26l1.9,0.04l0.16,-0.04l0.54,-0.32l0.37,-0.02l0.15,-0.05l0.78,-0.5l0.92,0.46l0.12,0.03l1.09,0.04l0.15,-0.03l1.08,-0.57l0.11,-0.44l-0.51,-0.74l-0.39,-0.1l-0.76,0.39l-0.62,-0.01l-0.92,-0.58l-0.18,-0.05l-0.79,0.04l-0.2,0.09l-0.48,0.51l-2.41,0.06Z" data-code="SN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M392.19,267.53l-0.44,-0.12l-1.73,-0.97l-1.24,-1.28l-0.4,-0.84l-0.27,-1.65l1.21,-1.0l0.09,-0.12l0.27,-0.66l0.32,-0.41l0.56,-0.05l0.16,-0.07l0.5,-0.41l1.75,0.0l0.59,0.77l0.49,0.96l-0.07,0.64l0.04,0.19l0.36,0.58l-0.03,0.84l0.24,0.2l-0.64,0.65l-1.13,1.37l-0.06,0.14l-0.12,0.66l-0.43,0.58Z" data-code="SL" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M826.74,311.51l0.23,0.29l-0.95,-0.01l-0.39,-0.63l0.65,0.27l0.45,0.09ZM825.01,308.52l-1.18,-1.39l-0.37,-1.06l0.24,0.0l0.82,1.84l0.49,0.6ZM823.21,309.42l-0.44,0.03l-1.43,-0.24l-0.32,-0.24l0.08,-0.5l1.29,0.31l0.72,0.47l0.11,0.18ZM817.9,303.81l2.59,1.44l0.3,0.41l-1.21,-0.66l-1.34,-0.89l-0.34,-0.3ZM813.77,302.4l0.48,0.34l0.1,0.08l-0.33,-0.17l-0.25,-0.25Z" data-code="SB" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M528.24,243.1l-0.2,-0.69l-0.07,-0.12l-0.69,-0.71l-0.18,-0.94l-0.12,-0.19l-1.24,-0.89l-1.28,-2.09l-0.7,-2.08l-0.07,-0.11l-1.73,-1.79l-0.11,-0.07l-1.03,-0.39l-1.57,-2.36l-0.27,-1.72l0.1,-1.53l-0.03,-0.15l-1.44,-2.93l-1.25,-1.13l-1.34,-0.56l-0.72,-1.33l0.11,-0.49l-0.02,-0.2l-0.7,-1.38l-0.08,-0.1l-0.68,-0.56l-0.97,-1.98l-2.8,-4.03l-0.25,-0.13l-0.85,0.01l0.29,-1.11l0.12,-0.97l0.23,-0.81l2.52,0.39l0.23,-0.06l1.08,-0.84l0.6,-0.95l1.78,-0.35l0.22,-0.17l0.37,-0.83l0.74,-0.42l0.08,-0.46l-2.17,-2.4l4.55,-1.26l0.12,-0.06l0.36,-0.32l2.83,0.71l3.67,1.91l7.04,5.5l0.17,0.06l4.64,0.22l2.06,0.24l0.55,1.15l0.28,0.17l1.56,-0.06l0.9,2.15l0.14,0.15l1.14,0.57l0.39,0.85l0.11,0.13l1.59,1.06l0.12,0.91l-0.23,0.83l0.01,0.18l0.32,0.9l0.07,0.11l0.68,0.7l0.33,0.86l0.37,0.65l0.09,0.1l0.76,0.53l0.25,0.04l0.45,-0.12l0.35,0.75l0.1,0.63l0.96,2.68l0.23,0.19l7.53,1.33l0.27,-0.09l0.24,-0.26l0.87,1.41l-1.58,4.96l-7.34,2.54l-7.28,1.02l-2.34,1.17l-0.12,0.1l-1.74,2.63l-0.86,0.32l-0.49,-0.68l-0.28,-0.12l-0.92,0.12l-2.32,-0.25l-0.41,-0.23l-0.15,-0.04l-2.89,0.06l-0.63,0.2l-0.91,-0.59l-0.43,0.11l-0.66,1.27l-0.03,0.21l0.21,0.89l-0.6,0.45Z" data-code="SA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M476.42,90.44l-0.15,0.1l-2.43,2.86l-0.07,0.24l0.36,2.31l-3.84,3.1l-4.83,3.38l-0.11,0.15l-1.82,5.45l0.03,0.26l1.78,2.68l2.27,1.99l-2.13,3.88l-2.49,0.82l-0.2,0.24l-0.95,6.05l-1.32,3.09l-2.82,-0.32l-0.3,0.16l-1.34,2.64l-2.48,0.14l-0.76,-3.15l-2.09,-4.04l-1.85,-5.01l1.03,-1.98l2.06,-2.53l0.06,-0.13l0.83,-4.45l-0.06,-0.25l-1.54,-1.86l-0.15,-5.0l1.52,-3.48l2.28,0.06l0.27,-0.16l0.87,-1.59l-0.01,-0.31l-0.8,-1.21l3.79,-5.63l4.07,-7.54l2.23,0.01l0.29,-0.22l0.59,-2.15l4.46,0.66l0.34,-0.26l0.34,-2.64l1.21,-0.14l3.24,2.08l3.78,2.85l0.06,6.37l0.03,0.14l0.67,1.29l-3.95,1.07Z" data-code="SE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M505.98,259.75l-0.31,-0.9l-0.1,-0.14l-1.2,-0.93l-0.27,-1.66l0.29,-1.83l-0.25,-0.34l-1.16,-0.17l-0.33,0.21l-0.11,0.37l-1.3,0.11l-0.21,0.49l0.55,0.68l0.18,1.29l-1.31,1.33l-1.18,1.72l-1.04,0.21l-2.0,-1.4l-0.32,-0.02l-0.95,0.52l-0.14,0.16l-0.21,0.6l-1.16,0.43l-0.19,0.23l-0.04,0.27l-2.08,0.0l-0.25,-0.39l-0.24,-0.13l-1.81,-0.09l-0.14,0.03l-0.8,0.38l-0.49,-0.16l-1.22,-1.39l-0.42,-0.67l-0.31,-0.14l-1.81,0.35l-0.2,0.14l-0.72,1.24l-0.61,2.14l-0.73,0.4l-0.62,0.22l-0.83,-0.68l-0.12,-0.6l0.38,-0.97l0.01,-1.14l-0.08,-0.2l-1.39,-1.53l-0.25,-0.97l0.03,-0.57l-0.11,-0.25l-0.81,-0.66l-0.03,-1.34l-0.04,-0.14l-0.52,-0.98l-0.31,-0.15l-0.42,0.07l0.12,-0.44l0.63,-1.03l0.03,-0.23l-0.24,-0.88l0.69,-0.66l0.02,-0.41l-0.4,-0.46l0.58,-1.39l1.04,-1.71l1.97,0.16l0.32,-0.3l-0.12,-10.24l0.02,-0.8l2.59,-0.01l0.3,-0.3l0.0,-4.92l29.19,0.0l0.68,2.17l-0.4,0.35l-0.1,0.27l0.36,2.69l0.93,3.15l0.12,0.16l2.05,1.4l-0.99,1.15l-1.75,0.4l-0.15,0.08l-0.79,0.79l-0.08,0.17l-0.24,1.69l-1.07,3.75l-0.0,0.16l0.25,0.96l-0.38,2.1l-0.98,2.41l-1.52,1.3l-1.07,1.94l-0.25,0.99l-1.08,0.64l-0.13,0.18l-0.46,1.65Z" data-code="SD" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M241.7,234.97l0.15,-0.22l1.73,0.01l1.43,0.64l0.15,0.03l0.45,-0.04l0.36,0.74l0.28,0.17l1.02,-0.04l-0.04,0.43l0.27,0.33l1.03,0.09l0.91,0.7l-0.57,0.64l-0.99,-0.47l-0.16,-0.03l-1.11,0.11l-0.79,-0.12l-0.26,0.09l-0.38,0.4l-0.66,0.11l-0.28,-0.45l-0.38,-0.12l-0.83,0.37l-0.14,0.13l-0.85,1.49l-0.27,-0.17l-0.1,-0.58l0.05,-0.67l-0.07,-0.21l-0.44,-0.53l0.35,-0.25l0.12,-0.19l0.19,-1.0l-0.2,-1.4Z" data-code="DO" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M528.78,253.36l0.34,0.45l-0.06,0.76l-1.26,0.54l-0.05,0.53l0.82,0.53l-0.57,0.83l-0.3,-0.25l-0.27,-0.05l-0.56,0.17l-1.07,-0.03l-0.04,-0.56l-0.16,-0.56l0.76,-1.07l0.76,-0.97l0.89,0.18l0.25,-0.06l0.51,-0.42Z" data-code="DJ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M452.4,129.07l-1.27,2.39l-2.25,-1.69l-0.26,-1.08l3.15,-1.0l0.63,1.39ZM447.87,126.25l-0.35,0.76l-0.47,-0.24l-0.38,0.09l-1.8,2.53l-0.03,0.29l0.56,1.4l-1.22,0.4l-1.68,-0.41l-0.92,-1.76l-0.07,-3.47l0.38,-0.88l0.62,-0.93l2.07,-0.21l0.19,-0.1l0.84,-0.95l1.5,-0.76l-0.06,1.26l-0.7,1.1l-0.03,0.25l0.3,1.0l0.18,0.19l1.06,0.42Z" data-code="DK" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M445.51,131.69l0.03,0.94l0.21,0.28l2.32,0.74l-0.02,1.0l0.37,0.3l2.55,-0.65l1.36,-0.89l2.63,1.27l1.09,1.01l0.51,1.51l-0.6,0.78l-0.0,0.36l0.88,1.17l0.58,1.68l-0.18,1.08l0.03,0.18l0.87,1.81l-0.66,0.2l-0.55,-0.32l-0.36,0.05l-0.58,0.58l-1.73,0.62l-0.99,0.84l-1.77,0.7l-0.16,0.4l0.42,0.94l0.26,1.34l0.14,0.2l1.25,0.76l1.22,1.2l-0.71,1.2l-0.81,0.37l-0.17,0.32l0.34,1.99l-0.04,0.09l-0.47,-0.39l-0.17,-0.07l-1.2,-0.1l-1.85,0.57l-2.15,-0.13l-0.29,0.18l-0.21,0.5l-0.96,-0.67l-0.24,-0.05l-0.67,0.16l-2.6,-0.94l-0.34,0.1l-0.42,0.57l-1.64,-0.02l0.26,-1.88l1.24,-2.15l-0.21,-0.45l-3.54,-0.58l-0.98,-0.71l0.12,-1.26l-0.05,-0.2l-0.44,-0.64l0.27,-2.18l-0.38,-3.14l1.17,-0.0l0.27,-0.17l0.63,-1.26l0.65,-3.17l-0.02,-0.17l-0.41,-1.0l0.32,-0.47l1.77,-0.16l0.37,0.6l0.47,0.06l1.7,-1.69l0.06,-0.33l-0.55,-1.24l-0.09,-1.51l1.5,0.36l0.16,-0.01l1.22,-0.4Z" data-code="DE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M553.53,242.65l-1.51,0.58l-0.17,0.16l-0.48,1.14l-0.07,0.79l-2.31,1.0l-3.98,1.19l-2.28,1.8l-0.97,0.12l-0.7,-0.14l-0.23,0.05l-1.42,1.03l-1.51,0.47l-2.07,0.13l-0.68,0.15l-0.17,0.1l-0.49,0.6l-0.57,0.16l-0.18,0.13l-0.3,0.49l-1.06,-0.05l-0.13,0.02l-0.73,0.32l-1.48,-0.11l-0.55,-1.26l0.07,-1.32l-0.04,-0.16l-0.39,-0.72l-0.48,-1.85l-0.52,-0.79l0.08,-0.02l0.22,-0.36l-0.23,-1.05l0.24,-0.39l0.04,-0.19l-0.09,-0.95l0.96,-0.72l0.11,-0.31l-0.23,-0.98l0.46,-0.88l0.75,0.49l0.26,0.03l0.63,-0.22l2.76,-0.06l0.5,0.25l2.42,0.26l0.85,-0.11l0.52,0.71l0.35,0.1l1.17,-0.43l0.15,-0.12l1.75,-2.64l2.22,-1.11l6.95,-0.96l2.55,5.58Z" data-code="YE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M463.17,154.15l-0.14,0.99l-1.15,0.01l-0.24,0.47l0.39,0.56l-0.75,1.84l-0.36,0.4l-2.06,0.07l-0.14,0.04l-1.18,0.67l-1.96,-0.23l-3.43,-0.78l-0.5,-0.97l-0.33,-0.16l-2.47,0.55l-0.2,0.16l-0.18,0.37l-1.27,-0.38l-1.28,-0.09l-0.81,-0.41l0.25,-0.51l0.03,-0.18l-0.05,-0.28l0.35,-0.08l1.16,0.81l0.45,-0.13l0.27,-0.64l2.0,0.12l1.84,-0.57l1.05,0.09l0.71,0.59l0.47,-0.11l0.23,-0.54l0.02,-0.17l-0.32,-1.85l0.69,-0.31l0.13,-0.12l0.73,-1.23l1.61,0.89l0.35,-0.04l1.35,-1.27l0.7,-0.19l1.84,0.93l0.18,0.03l1.08,-0.15l0.81,0.43l-0.07,0.15l-0.02,0.2l0.24,1.06Z" data-code="AT" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M450.58,224.94l-8.31,4.86l-7.23,5.12l-3.46,1.13l-2.42,0.22l-0.02,-1.33l-0.2,-0.28l-1.15,-0.42l-1.45,-0.69l-0.55,-1.13l-0.1,-0.12l-8.45,-5.72l-17.72,-12.17l0.03,-0.38l-0.02,-3.21l3.84,-1.91l2.46,-0.41l2.1,-0.75l0.14,-0.11l0.9,-1.3l2.84,-1.06l0.19,-0.27l0.09,-1.81l1.21,-0.2l0.15,-0.07l1.06,-0.96l3.19,-0.46l0.23,-0.18l0.46,-1.08l-0.08,-0.34l-0.6,-0.54l-0.83,-2.85l-0.18,-1.8l-0.82,-1.57l2.13,-1.37l2.65,-0.49l0.13,-0.05l1.55,-1.15l2.34,-0.85l4.2,-0.51l4.07,-0.23l1.21,0.41l0.23,-0.01l2.3,-1.11l2.52,-0.02l0.94,0.62l0.2,0.05l1.25,-0.13l-0.36,1.03l-0.01,0.14l0.39,2.66l-0.56,2.2l-1.49,1.52l-0.08,0.24l0.22,2.12l0.11,0.2l1.94,1.58l0.02,0.54l0.12,0.23l1.45,1.06l1.04,4.85l0.81,2.42l0.13,1.19l-0.43,2.17l0.17,1.28l-0.31,1.53l0.2,1.56l-0.9,1.02l-0.01,0.38l1.43,1.88l0.09,1.06l0.04,0.13l0.89,1.48l0.37,0.12l1.03,-0.43l1.79,1.12l0.89,1.34Z" data-code="DZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M892.64,99.05l1.16,0.57l0.21,0.02l1.45,-0.38l1.92,0.99l2.17,0.47l-1.65,0.72l-1.75,-0.79l-0.93,-0.7l-0.21,-0.06l-2.11,0.22l-0.35,-0.2l0.09,-0.87ZM183.29,150.37l0.39,1.54l0.12,0.17l0.78,0.55l0.14,0.05l1.74,0.2l2.52,0.5l2.4,0.98l0.17,0.02l1.96,-0.4l3.01,0.81l0.91,-0.02l2.22,-0.88l4.67,2.33l3.86,2.01l0.21,0.71l0.15,0.18l0.33,0.17l-0.02,0.05l0.23,0.43l0.67,0.1l0.21,-0.05l0.1,-0.07l0.05,0.29l0.09,0.16l0.5,0.5l0.21,0.09l0.56,0.0l0.13,0.13l-0.2,0.36l0.12,0.41l2.49,1.39l0.99,5.24l-0.69,1.68l-1.16,1.64l-0.6,1.18l-0.06,0.31l0.04,0.22l0.28,0.43l0.11,0.1l0.85,0.47l0.15,0.04l0.63,0.0l0.14,-0.04l2.87,-1.58l2.6,-0.49l3.28,-1.5l0.17,-0.23l0.04,-0.43l-0.23,-0.93l-0.24,-0.39l0.74,-0.32l4.7,-0.01l0.25,-0.13l0.77,-1.15l2.9,-2.41l1.04,-0.52l8.35,-0.02l0.28,-0.21l0.2,-0.6l0.7,-0.14l1.06,-0.48l0.13,-0.11l0.92,-1.49l0.75,-2.39l1.67,-2.08l0.59,0.6l0.3,0.07l1.52,-0.49l0.88,0.72l-0.0,4.14l0.08,0.2l1.6,1.72l0.31,0.72l-2.42,1.35l-2.55,1.05l-2.64,0.9l-0.14,0.11l-1.33,1.81l-0.44,0.7l-0.05,0.15l-0.03,1.6l0.03,0.14l0.83,1.59l0.24,0.16l0.78,0.06l-1.15,0.33l-1.25,-0.04l-1.83,0.52l-2.51,0.29l-2.17,0.88l-0.17,0.36l0.33,0.22l3.55,-0.54l0.15,0.11l-2.87,0.73l-1.19,0.0l-0.16,-0.33l-0.36,0.06l-0.76,0.82l0.17,0.5l0.42,0.08l-0.45,1.75l-1.4,1.74l-0.04,-0.17l-0.21,-0.22l-0.48,-0.13l-0.77,-0.69l-0.36,-0.03l-0.12,0.34l0.52,1.58l0.09,0.14l0.52,0.43l0.03,0.87l-0.74,1.05l-0.39,0.63l0.05,-0.12l-0.08,-0.34l-1.19,-1.03l-0.28,-2.31l-0.26,-0.26l-0.32,0.19l-0.48,1.27l-0.01,0.19l0.39,1.33l-1.14,-0.31l-0.36,0.18l0.14,0.38l1.57,0.85l0.1,2.58l0.22,0.28l0.55,0.15l0.21,0.81l0.33,2.72l-1.46,1.94l-2.5,0.81l-0.12,0.07l-1.58,1.58l-1.15,0.17l-0.15,0.06l-1.27,1.03l-0.09,0.13l-0.32,0.85l-2.71,1.79l-1.45,1.37l-1.18,1.64l-0.05,0.12l-0.39,1.96l0.0,0.13l0.44,1.91l0.85,2.37l1.1,1.91l0.03,1.2l1.16,3.07l-0.08,1.74l-0.1,0.99l-0.57,1.48l-0.54,0.24l-0.97,-0.26l-0.34,-1.02l-0.12,-0.16l-0.89,-0.58l-2.44,-4.28l-0.34,-0.94l0.49,-1.71l-0.02,-0.21l-0.7,-1.5l-2.0,-2.35l-0.11,-0.08l-0.98,-0.42l-0.25,0.01l-2.42,1.19l-0.26,-0.08l-1.26,-1.29l-1.57,-0.68l-0.16,-0.02l-2.79,0.34l-2.18,-0.3l-1.98,0.19l-1.12,0.45l-0.14,0.44l0.4,0.65l-0.04,1.02l0.09,0.22l0.29,0.3l-0.06,0.05l-0.77,-0.33l-0.26,0.01l-0.87,0.48l-1.64,-0.08l-1.79,-1.39l-0.23,-0.06l-2.11,0.33l-1.75,-0.61l-0.14,-0.01l-1.61,0.2l-2.11,0.64l-0.11,0.06l-2.25,1.99l-2.53,1.21l-1.43,1.38l-0.58,1.22l-0.03,0.12l-0.03,1.86l0.13,1.32l0.3,0.62l-0.46,0.04l-1.71,-0.57l-1.85,-0.79l-0.63,-1.14l-0.54,-1.85l-0.07,-0.12l-1.45,-1.51l-0.86,-1.58l-1.26,-1.87l-0.09,-0.09l-1.76,-1.09l-0.17,-0.04l-2.05,0.05l-0.23,0.12l-1.44,1.97l-1.84,-0.72l-1.19,-0.76l-0.6,-1.45l-0.9,-1.52l-1.49,-1.21l-1.27,-0.87l-0.89,-0.96l-0.22,-0.1l-4.34,-0.0l-0.3,0.3l-0.0,0.84l-6.62,0.02l-5.66,-1.93l-3.48,-1.24l0.11,-0.25l-0.3,-0.42l-3.18,0.3l-2.6,0.2l-0.35,-1.19l-0.08,-0.13l-1.62,-1.61l-0.13,-0.08l-1.02,-0.29l-0.22,-0.66l-0.25,-0.2l-1.31,-0.13l-0.82,-0.7l-0.16,-0.07l-2.25,-0.27l-0.48,-0.34l-0.28,-1.44l-0.07,-0.14l-2.41,-2.84l-2.03,-3.89l0.08,-0.58l-0.1,-0.27l-1.08,-0.94l-1.87,-2.36l-0.33,-2.31l-0.07,-0.15l-1.24,-1.5l0.52,-2.4l-0.09,-2.57l-0.78,-2.3l0.96,-2.83l0.61,-5.66l-0.46,-4.26l-0.79,-2.71l-0.68,-1.4l0.13,-0.26l3.24,0.97l1.28,2.88l0.52,0.06l0.62,-0.84l0.06,-0.22l-0.4,-2.61l-0.74,-2.29l68.9,-0.0l0.3,-0.3l0.01,-0.95l0.32,-0.01ZM32.5,67.43l1.75,1.99l0.41,0.04l1.02,-0.81l3.79,0.25l-0.1,0.72l0.24,0.34l3.83,0.77l2.6,-0.44l5.21,1.41l4.84,0.43l1.9,0.57l0.15,0.01l3.25,-0.71l3.72,1.32l2.52,0.58l-0.03,38.14l0.29,0.3l2.41,0.11l2.34,1.0l1.7,1.59l2.22,2.42l0.42,0.03l2.41,-2.04l2.25,-1.08l1.23,1.76l1.71,1.53l2.24,1.62l1.54,2.56l2.56,4.09l0.11,0.11l4.1,2.17l0.06,1.93l-1.12,1.35l-1.22,-1.14l-2.08,-1.05l-0.68,-2.94l-0.09,-0.16l-3.18,-2.84l-1.32,-3.35l-0.25,-0.19l-2.43,-0.24l-3.93,-0.09l-2.85,-1.02l-5.24,-3.85l-6.77,-2.04l-3.52,0.3l-4.84,-1.7l-2.96,-1.6l-0.23,-0.02l-2.78,0.8l-0.21,0.35l0.46,2.31l-1.11,0.19l-2.9,0.78l-2.24,1.26l-2.42,0.68l-0.29,-1.79l1.07,-3.49l2.54,-1.11l0.12,-0.45l-0.69,-0.96l-0.41,-0.07l-3.19,2.12l-1.76,2.54l-3.57,2.62l-0.03,0.46l1.63,1.59l-2.14,2.38l-2.64,1.49l-2.49,1.09l-0.16,0.17l-0.58,1.48l-3.8,1.79l-0.14,0.14l-0.75,1.57l-2.75,1.41l-1.62,-0.25l-0.16,0.02l-2.35,0.98l-2.54,1.19l-2.06,1.15l-4.05,0.93l-0.1,-0.15l2.45,-1.45l2.49,-1.1l2.61,-1.88l3.03,-0.39l0.19,-0.1l1.2,-1.41l3.43,-2.11l0.61,-0.75l1.81,-1.24l0.13,-0.2l0.42,-2.7l1.24,-2.12l-0.03,-0.35l-0.34,-0.09l-2.73,1.05l-0.67,-0.53l-0.39,0.02l-1.13,1.11l-1.43,-1.62l-0.49,0.06l-0.41,0.8l-0.67,-1.31l-0.42,-0.12l-2.43,1.43l-1.18,-0.0l-0.18,-1.86l0.43,-1.3l-0.09,-0.33l-1.61,-1.33l-0.26,-0.06l-3.11,0.68l-2.0,-1.66l-1.61,-0.85l-0.01,-1.97l-0.11,-0.23l-1.76,-1.48l0.86,-1.96l2.01,-2.13l0.88,-1.94l1.79,-0.25l1.65,0.6l0.31,-0.06l1.91,-1.8l1.67,0.31l0.22,-0.04l1.91,-1.23l0.13,-0.33l-0.47,-1.82l-0.15,-0.19l-1.0,-0.52l1.51,-1.27l0.09,-0.34l-0.29,-0.19l-1.62,0.06l-2.66,0.88l-0.13,0.09l-0.62,0.72l-1.77,-0.8l-0.16,-0.02l-3.48,0.44l-3.5,-0.92l-1.06,-1.61l-2.78,-2.09l3.07,-1.51l5.52,-2.01l1.65,0.0l-0.28,1.73l0.31,0.35l5.29,-0.16l0.23,-0.49l-2.03,-2.59l-0.1,-0.08l-3.03,-1.58l-1.79,-2.12l-2.4,-1.83l-3.18,-1.27l1.13,-1.84l4.28,-0.14l0.15,-0.05l3.16,-2.0l0.13,-0.17l0.57,-2.07l2.43,-2.02l2.42,-0.52l4.67,-1.98l2.22,0.29l0.2,-0.04l3.74,-2.37l3.57,0.91ZM37.66,123.49l-2.31,1.26l-1.04,-0.75l-0.31,-1.35l2.06,-1.16l1.24,-0.51l1.48,0.22l0.76,0.81l-1.89,1.49ZM30.89,233.84l1.2,0.57l0.35,0.3l0.48,0.69l-1.6,0.86l-0.3,0.31l-0.24,-0.14l0.05,-0.54l-0.02,-0.15l-0.36,-0.83l0.05,-0.12l0.39,-0.38l0.07,-0.31l-0.09,-0.27ZM29.06,231.89l0.5,0.14l0.31,0.19l-0.46,0.1l-0.34,-0.43ZM25.02,230.13l0.2,-0.11l0.4,0.47l-0.43,-0.05l-0.17,-0.31ZM21.29,228.68l0.1,-0.07l0.22,0.02l0.02,0.21l-0.02,0.02l-0.32,-0.18ZM6.0,113.33l-1.19,0.45l-1.5,-0.64l-0.94,-0.63l1.76,-0.46l1.71,0.29l0.16,0.98Z" data-code="US" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M473.99,127.16l0.07,-2.15l1.15,-2.11l2.05,-1.07l1.84,2.48l0.25,0.12l2.01,-0.07l0.29,-0.25l0.45,-2.58l1.85,-0.56l0.98,0.4l2.13,1.33l0.16,0.05l1.97,0.01l1.02,0.7l0.21,1.67l0.71,1.84l-2.44,1.23l-1.36,0.53l-2.28,-1.62l-0.12,-0.05l-1.18,-0.2l-0.28,-0.6l-0.31,-0.17l-2.43,0.35l-4.17,-0.23l-0.12,0.02l-2.45,0.93Z" data-code="LV" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M276.9,363.17l1.3,-0.23l2.4,2.04l0.22,0.07l0.82,-0.07l2.48,1.7l1.93,1.5l1.28,1.67l-0.95,1.14l-0.04,0.31l0.63,1.45l-0.96,1.57l-2.65,1.47l-1.73,-0.53l-0.15,-0.01l-1.25,0.28l-2.22,-1.16l-0.16,-0.03l-1.56,0.08l-1.33,-1.36l0.17,-1.58l0.48,-0.55l0.07,-0.2l-0.02,-2.74l0.66,-2.8l0.57,-2.02Z" data-code="UY" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M510.44,198.11l-0.48,0.03l-0.26,0.17l-0.15,0.32l-0.21,-0.0l0.72,-1.85l1.19,-1.9l0.74,0.09l0.27,0.73l-1.19,0.93l-0.09,0.13l-0.54,1.36Z" data-code="LB" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M684.87,248.8l0.61,-0.86l0.05,-0.16l0.11,-2.17l-0.08,-0.22l-1.96,-2.16l-0.15,-2.44l-0.08,-0.18l-1.9,-2.1l-0.19,-0.1l-1.89,-0.18l-0.29,0.15l-0.42,0.76l-1.21,0.06l-0.67,-0.41l-0.31,-0.0l-2.2,1.29l-0.05,-1.77l0.61,-2.7l-0.27,-0.37l-1.44,-0.1l-0.12,-1.31l-0.12,-0.21l-0.87,-0.65l0.38,-0.68l1.76,-1.41l0.08,0.22l0.27,0.2l1.33,0.07l0.31,-0.34l-0.35,-2.75l0.85,-0.25l1.32,1.88l1.11,2.36l0.27,0.17l2.89,0.02l0.78,1.82l-1.32,0.56l-0.12,0.09l-0.72,0.93l0.1,0.45l2.93,1.52l3.62,5.27l1.88,1.78l0.58,1.67l-0.38,2.11l-1.87,-0.79l-0.37,0.11l-0.99,1.54l-1.51,-0.73Z" data-code="LA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M725.6,222.5l-1.5,4.22l-0.82,1.65l-1.01,-1.7l-0.26,-1.8l1.4,-2.48l1.8,-1.81l0.76,0.53l-0.38,1.39Z" data-code="TW" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M266.35,259.46l0.41,-0.39l0.09,-0.23l-0.04,-0.75l1.14,-0.26l0.2,0.03l-0.07,1.37l-1.73,0.23Z" data-code="TT" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M513.25,175.38l3.63,1.17l0.14,0.01l2.88,-0.45l2.11,0.26l0.18,-0.03l2.9,-1.53l2.51,-0.13l2.25,1.37l0.36,0.88l-0.23,1.36l0.19,0.33l1.81,0.72l0.61,0.53l-1.31,0.64l-0.16,0.34l0.76,3.24l-0.44,0.8l0.01,0.3l1.19,2.02l-0.71,0.29l-0.74,-0.62l-0.15,-0.07l-2.91,-0.37l-0.15,0.02l-1.04,0.43l-2.78,0.44l-1.44,-0.03l-2.83,1.06l-1.95,0.01l-1.28,-0.52l-0.2,-0.01l-2.62,0.76l-0.7,-0.48l-0.47,0.22l-0.13,1.49l-1.01,0.94l-0.58,-0.82l0.79,-0.9l0.04,-0.34l-0.31,-0.15l-1.46,0.23l-2.03,-0.64l-0.3,0.07l-1.65,1.58l-3.58,0.3l-1.94,-1.47l-0.17,-0.06l-2.7,-0.1l-0.28,0.17l-0.51,1.06l-1.47,0.29l-2.32,-1.46l-0.17,-0.05l-2.55,0.05l-1.4,-2.7l-1.72,-1.54l1.11,-2.06l-0.07,-0.37l-1.35,-1.19l2.47,-2.51l3.74,-0.11l0.26,-0.17l0.96,-2.07l4.56,0.38l0.19,-0.05l2.97,-1.92l2.84,-0.83l4.03,-0.06l4.31,2.08ZM488.85,176.8l-1.81,1.38l-0.57,-1.01l0.02,-0.36l0.45,-0.25l0.13,-0.15l0.78,-1.87l-0.11,-0.37l-0.72,-0.47l1.91,-0.71l1.89,0.35l0.25,0.97l0.17,0.2l1.87,0.83l-0.19,0.31l-2.82,0.16l-0.18,0.07l-1.06,0.91Z" data-code="TR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M625.44,266.07l-0.35,2.4l-0.9,0.61l-1.91,0.5l-1.04,-1.75l-0.43,-3.5l1.0,-3.6l1.34,1.09l1.13,1.72l1.16,2.52Z" data-code="LK" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M444.91,206.18l-0.99,-4.57l-0.12,-0.18l-1.43,-1.04l-0.02,-0.53l-0.11,-0.22l-1.95,-1.59l-0.19,-1.85l1.44,-1.47l0.08,-0.14l0.59,-2.34l-0.38,-2.77l0.44,-1.28l2.52,-1.08l1.41,0.28l-0.06,1.2l0.43,0.28l1.81,-0.9l0.02,0.06l-1.14,1.28l-0.08,0.2l-0.02,1.32l0.11,0.24l0.74,0.6l-0.29,2.18l-1.56,1.35l-0.09,0.32l0.48,1.54l0.28,0.21l1.11,0.04l0.55,1.17l0.15,0.14l0.76,0.35l-0.12,1.79l-1.1,0.72l-0.8,0.91l-1.68,1.04l-0.13,0.32l0.25,1.08l-0.18,0.96l-0.74,0.39Z" data-code="TN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M734.21,307.22l0.17,-0.34l1.99,-0.52l1.72,-0.08l0.78,-0.3l0.29,0.1l-0.43,0.32l-2.57,1.09l-1.71,0.59l-0.05,-0.49l-0.19,-0.36Z" data-code="TL" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M553.16,173.51l-0.12,1.0l-0.26,-0.65l0.38,-0.34ZM553.54,173.16l0.13,-0.12l0.43,-0.09l-0.56,0.21ZM555.68,172.6l0.65,-0.14l1.53,0.76l1.71,2.29l0.27,0.12l1.27,-0.14l2.81,-0.04l0.29,-0.38l-0.35,-1.27l1.98,-0.97l1.96,-1.63l3.05,1.44l0.25,2.23l0.14,0.22l0.96,0.61l0.18,0.05l2.61,-0.13l0.68,0.44l1.2,2.97l0.1,0.13l2.85,2.03l1.67,1.41l2.66,1.45l3.13,1.17l-0.05,1.23l-0.36,-0.04l-1.12,-0.73l-0.44,0.14l-0.34,0.89l-1.96,0.52l-0.22,0.23l-0.47,2.17l-1.26,0.78l-1.93,0.42l-0.21,0.18l-0.46,1.14l-1.64,0.33l-2.3,-0.97l-0.2,-2.23l-0.28,-0.27l-1.76,-0.1l-2.78,-2.48l-0.15,-0.07l-1.95,-0.31l-2.82,-1.48l-1.78,-0.27l-0.18,0.03l-1.03,0.51l-1.6,-0.08l-0.22,0.08l-1.72,1.6l-1.83,0.46l-0.39,-1.7l0.36,-3.0l-0.16,-0.3l-1.73,-0.88l0.57,-1.77l-0.25,-0.39l-1.33,-0.14l0.41,-1.85l2.05,0.63l0.21,-0.01l2.2,-0.95l0.09,-0.49l-1.78,-1.75l-0.69,-1.66l-0.07,-0.03Z" data-code="TM" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M597.99,178.71l-0.23,0.23l-2.57,-0.47l-0.35,0.25l-0.24,1.7l0.32,0.34l2.66,-0.22l3.15,0.95l4.47,-0.42l0.58,2.45l0.39,0.21l0.71,-0.25l1.22,0.53l-0.06,1.01l0.29,1.28l-2.19,-0.0l-1.71,-0.21l-0.23,0.07l-1.51,1.25l-1.05,0.27l-0.77,0.51l-0.71,-0.67l0.22,-2.28l-0.24,-0.32l-0.43,-0.08l0.17,-0.57l-0.16,-0.36l-1.36,-0.66l-0.34,0.05l-1.08,1.01l-0.09,0.15l-0.25,1.09l-0.24,0.26l-1.36,-0.05l-0.27,0.14l-0.65,1.06l-0.58,-0.39l-0.3,-0.02l-1.68,0.86l-0.36,-0.16l1.28,-2.65l0.02,-0.2l-0.54,-2.17l-0.18,-0.21l-1.53,-0.58l0.41,-0.82l1.89,0.13l0.26,-0.12l1.19,-1.63l0.77,-1.82l2.66,-0.55l-0.33,0.87l0.01,0.23l0.36,0.82l0.3,0.18l0.23,-0.02Z" data-code="TJ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M493.32,359.69l0.69,0.65l-0.65,1.12l-0.38,0.8l-1.27,0.39l-0.18,0.15l-0.4,0.77l-0.59,0.18l-1.59,-1.78l1.16,-1.5l1.3,-1.02l0.97,-0.46l0.94,0.72Z" data-code="LS" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M677.42,253.68l-1.7,-0.88l-0.14,-0.03l-1.77,0.04l0.3,-1.64l-0.3,-0.35l-2.21,0.01l-0.3,0.28l-0.2,2.76l-2.15,5.9l-0.02,0.13l0.17,1.83l0.28,0.27l1.45,0.07l0.93,2.1l0.44,2.15l0.08,0.15l1.4,1.44l0.16,0.09l1.43,0.27l1.04,1.05l-0.58,0.73l-1.24,0.22l-0.15,-0.99l-0.15,-0.22l-2.04,-1.1l-0.36,0.06l-0.23,0.23l-0.72,-0.71l-0.41,-1.18l-0.06,-0.11l-1.33,-1.42l-1.22,-1.2l-0.5,0.13l-0.15,0.54l-0.14,-0.41l0.26,-1.48l0.73,-2.38l1.2,-2.57l1.37,-2.35l0.02,-0.27l-0.95,-2.26l0.03,-1.19l-0.29,-1.42l-0.06,-0.13l-1.65,-2.0l-0.46,-0.99l0.62,-0.34l0.13,-0.15l0.92,-2.23l-0.02,-0.27l-1.05,-1.74l-1.57,-1.86l-1.04,-1.96l0.76,-0.34l0.16,-0.16l1.07,-2.63l1.58,-0.1l0.16,-0.06l1.43,-1.11l1.24,-0.52l0.84,0.62l0.13,1.43l0.28,0.27l1.34,0.09l-0.54,2.39l0.05,2.39l0.45,0.25l2.48,-1.45l0.6,0.36l0.17,0.04l1.47,-0.07l0.25,-0.15l0.41,-0.73l1.58,0.15l1.76,1.93l0.15,2.44l0.08,0.18l1.94,2.15l-0.1,1.96l-0.66,0.93l-2.25,-0.34l-3.24,0.49l-0.19,0.12l-1.6,2.12l-0.06,0.24l0.48,2.46Z" data-code="TH" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M593.76,417.73l1.38,0.84l2.15,0.37l0.04,0.31l-0.59,1.24l-3.36,0.19l-0.05,-1.38l0.43,-1.56Z" data-code="TF" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M425.23,269.29l-1.49,0.4l-0.43,-0.68l-0.64,-1.54l-0.18,-1.16l0.54,-2.21l-0.04,-0.24l-0.59,-0.86l-0.23,-1.9l0.0,-1.82l-0.07,-0.19l-0.95,-1.19l0.1,-0.41l1.58,0.04l-0.23,0.97l0.08,0.28l1.55,1.55l0.09,1.13l0.08,0.19l0.42,0.43l-0.11,5.66l0.52,1.53Z" data-code="TG" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M457.57,252.46l0.23,-1.08l-0.28,-0.36l-1.32,-0.05l0.0,-1.35l-0.1,-0.22l-0.9,-0.82l0.99,-3.1l3.12,-2.37l0.12,-0.23l0.13,-3.33l0.95,-5.2l0.53,-1.09l-0.07,-0.36l-0.94,-0.81l-0.03,-0.7l-0.12,-0.23l-0.84,-0.61l-0.57,-3.76l2.21,-1.26l19.67,9.88l0.12,9.74l-1.83,-0.15l-0.28,0.14l-1.14,1.89l-0.68,1.62l0.05,0.31l0.33,0.38l-0.61,0.58l-0.08,0.3l0.25,0.93l-0.58,0.95l-0.29,1.01l0.34,0.37l0.67,-0.11l0.39,0.73l0.03,1.4l0.11,0.23l0.8,0.65l-0.01,0.24l-1.38,0.37l-0.11,0.06l-1.27,1.03l-1.83,2.76l-2.21,1.1l-2.34,-0.15l-0.82,0.25l-0.2,0.37l0.19,0.68l-1.16,0.79l-1.01,0.94l-2.92,0.89l-0.5,-0.46l-0.17,-0.08l-0.41,-0.05l-0.28,0.12l-0.38,0.54l-1.36,0.12l0.1,-0.18l0.01,-0.27l-0.78,-1.72l-0.35,-1.03l-0.17,-0.18l-1.03,-0.41l-1.29,-1.28l0.36,-0.78l0.9,0.2l0.14,-0.0l0.67,-0.17l1.36,0.02l0.26,-0.45l-1.32,-2.22l0.09,-1.64l-0.17,-1.68l-0.04,-0.13l-0.93,-1.53Z" data-code="TD" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M457.99,226.38l-1.57,0.87l-1.25,-1.28l-0.13,-0.08l-3.85,-1.11l-1.04,-1.57l-0.09,-0.09l-1.98,-1.23l-0.27,-0.02l-0.93,0.39l-0.72,-1.2l-0.09,-1.07l-0.06,-0.16l-1.33,-1.75l0.83,-0.94l0.07,-0.24l-0.21,-1.64l0.31,-1.43l-0.17,-1.29l0.43,-2.26l-0.15,-1.33l-0.73,-2.18l0.99,-0.52l0.16,-0.21l0.22,-1.16l-0.22,-1.06l1.54,-0.95l0.81,-0.92l1.19,-0.78l0.14,-0.23l0.12,-1.76l2.57,0.84l0.16,0.01l0.99,-0.23l2.01,0.45l3.19,1.2l1.12,2.36l0.2,0.16l2.24,0.53l3.5,1.14l2.65,1.36l0.29,-0.01l1.22,-0.71l1.27,-1.32l0.07,-0.29l-0.55,-2.0l0.69,-1.19l1.7,-1.23l1.61,-0.35l3.2,0.54l0.78,1.14l0.24,0.13l0.85,0.01l0.84,0.47l2.35,0.31l0.42,0.63l-0.79,1.16l-0.04,0.26l0.35,1.08l-0.61,1.6l-0.0,0.2l0.73,2.16l0.0,24.24l-2.58,0.01l-0.3,0.29l-0.02,0.62l-19.55,-9.83l-0.28,0.01l-2.53,1.44Z" data-code="LY" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M550.59,223.8l0.12,0.08l1.92,-0.41l3.54,0.15l0.23,-0.09l1.71,-1.79l1.86,-1.7l1.31,-1.36l0.26,0.5l0.28,1.72l-0.93,0.01l-0.3,0.26l-0.21,1.73l0.11,0.27l0.08,0.06l-0.7,0.32l-0.17,0.27l-0.01,0.99l-0.68,1.02l-0.05,0.15l-0.06,0.96l-0.32,0.36l-7.19,-1.27l-0.79,-2.22Z" data-code="AE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M240.66,256.5l0.65,0.91l-0.03,1.13l-1.05,1.39l-0.03,0.31l0.95,2.0l0.32,0.17l1.08,-0.16l0.24,-0.21l0.56,-1.83l-0.06,-0.29l-0.71,-0.81l-0.1,-1.58l2.9,-0.96l0.19,-0.37l-0.29,-1.02l0.45,-0.41l0.72,1.43l0.26,0.16l1.65,0.04l1.46,1.27l0.08,0.72l0.3,0.27l2.28,0.02l2.55,-0.25l1.34,1.06l0.14,0.06l1.92,0.31l0.2,-0.03l1.4,-0.79l0.15,-0.25l0.02,-0.36l2.82,-0.14l1.17,-0.01l-0.41,0.14l-0.14,0.46l0.86,1.19l0.22,0.12l1.93,0.18l1.73,1.13l0.37,1.9l0.31,0.24l1.21,-0.05l0.52,0.32l-1.63,1.21l-0.11,0.17l-0.22,0.92l0.07,0.27l0.63,0.69l-0.31,0.24l-1.48,0.39l-0.22,0.3l0.04,1.03l-0.59,0.6l-0.01,0.41l1.67,1.87l0.23,0.48l-0.72,0.76l-2.71,0.91l-1.78,0.39l-0.13,0.06l-0.6,0.49l-1.84,-0.58l-1.89,-0.33l-0.18,0.03l-0.47,0.23l-0.02,0.53l0.96,0.56l-0.08,1.58l0.35,1.58l0.26,0.23l1.91,0.19l0.02,0.07l-1.54,0.62l-0.18,0.2l-0.25,0.92l-0.88,0.35l-1.85,0.58l-0.16,0.13l-0.4,0.64l-1.66,0.14l-1.22,-1.18l-0.79,-2.52l-0.67,-0.88l-0.66,-0.43l0.99,-0.98l0.09,-0.26l-0.09,-0.56l-0.08,-0.16l-0.66,-0.69l-0.47,-1.54l0.18,-1.67l0.55,-0.85l0.45,-1.35l-0.15,-0.36l-0.89,-0.43l-0.19,-0.02l-1.39,0.28l-1.76,-0.13l-0.92,0.23l-1.64,-2.01l-0.17,-0.1l-1.54,-0.33l-3.05,0.23l-0.5,-0.73l-0.15,-0.12l-0.45,-0.15l-0.05,-0.28l0.28,-0.86l0.01,-0.15l-0.2,-1.01l-0.08,-0.15l-0.5,-0.5l-0.3,-1.08l-0.25,-0.22l-0.89,-0.12l0.54,-1.18l0.29,-1.73l0.66,-0.85l0.94,-0.7l0.09,-0.11l0.3,-0.6Z" data-code="VE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M574.42,192.1l2.24,0.95l0.18,0.02l1.89,-0.38l0.22,-0.18l0.46,-1.14l1.82,-0.4l1.5,-0.91l0.14,-0.19l0.46,-2.12l1.93,-0.51l0.2,-0.18l0.26,-0.68l0.87,0.57l0.13,0.05l0.79,0.09l1.35,0.02l1.83,0.59l0.75,0.34l0.26,-0.01l1.66,-0.85l0.7,0.46l0.42,-0.09l0.72,-1.17l1.32,0.05l0.23,-0.1l0.39,-0.43l0.07,-0.14l0.24,-1.08l0.86,-0.81l0.94,0.46l-0.2,0.64l0.23,0.38l0.49,0.09l-0.21,2.15l0.09,0.25l0.99,0.94l0.38,0.03l0.83,-0.57l1.06,-0.27l0.12,-0.06l1.46,-1.21l1.63,0.2l2.4,0.0l0.17,0.32l-1.12,0.25l-1.23,0.52l-2.86,0.33l-2.69,0.6l-0.13,0.06l-1.46,1.25l-0.07,0.36l0.58,1.18l0.25,1.21l-1.13,1.08l-0.09,0.25l0.09,0.98l-0.53,0.79l-2.22,-0.08l-0.28,0.44l0.83,1.57l-1.3,0.58l-0.13,0.11l-1.06,1.69l-0.05,0.18l0.13,1.51l-0.73,0.58l-0.78,-0.22l-0.14,-0.01l-1.91,0.36l-0.23,0.19l-0.2,0.57l-1.65,-0.0l-0.22,0.1l-1.4,1.56l-0.08,0.19l-0.08,2.13l-2.99,1.05l-1.67,-0.23l-0.27,0.1l-0.39,0.46l-1.43,-0.31l-2.43,0.4l-3.69,-1.23l1.96,-2.15l0.08,-0.24l-0.21,-1.78l-0.23,-0.26l-1.69,-0.42l-0.19,-1.62l-0.77,-2.08l0.98,-1.41l-0.14,-0.45l-0.82,-0.31l0.6,-1.79l0.93,-3.21Z" data-code="AF" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M534.42,190.89l0.13,0.14l1.5,0.78l0.15,1.34l-1.13,0.87l-0.11,0.16l-0.58,2.2l0.04,0.24l1.73,2.67l0.12,0.1l2.99,1.49l1.18,1.94l-0.39,1.89l0.29,0.36l0.5,-0.0l0.02,1.17l0.08,0.2l0.83,0.86l-2.36,-0.29l-0.29,0.13l-1.74,2.49l-4.4,-0.21l-7.03,-5.49l-3.73,-1.94l-2.92,-0.74l-0.89,-3.0l5.33,-2.81l0.15,-0.19l0.95,-3.43l-0.2,-2.0l1.19,-0.61l0.11,-0.09l1.23,-1.73l0.92,-0.38l2.75,0.35l0.81,0.68l0.31,0.05l0.94,-0.38l1.5,3.17Z" data-code="IQ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M384.26,87.96l-0.51,2.35l0.08,0.28l2.61,2.58l-2.99,2.83l-7.16,2.72l-2.08,0.7l-9.51,-1.71l1.89,-1.36l-0.07,-0.53l-4.4,-1.59l3.33,-0.59l0.25,-0.32l-0.11,-1.2l-0.25,-0.27l-4.82,-0.88l1.38,-2.2l3.54,-0.57l3.8,2.74l0.33,0.01l3.68,-2.18l3.02,1.12l0.25,-0.02l4.01,-2.18l3.72,0.27Z" data-code="IS" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M556.2,187.5l2.05,-0.52l0.13,-0.07l1.69,-1.57l1.55,0.08l0.15,-0.03l1.02,-0.5l1.64,0.25l2.82,1.48l1.91,0.3l2.8,2.49l0.18,0.08l1.61,0.09l0.19,2.09l-1.0,3.47l-0.69,2.04l0.18,0.38l0.73,0.28l-0.85,1.22l-0.04,0.28l0.81,2.19l0.19,1.72l0.23,0.26l1.69,0.42l0.17,1.43l-2.18,2.39l-0.01,0.4l1.22,1.42l1.0,1.62l0.12,0.11l2.23,1.11l0.06,2.2l0.2,0.27l1.03,0.38l0.14,0.83l-3.38,1.3l-0.18,0.19l-0.87,2.85l-4.44,-0.76l-2.75,-0.62l-2.64,-0.32l-1.01,-3.11l-0.17,-0.19l-1.2,-0.48l-0.18,-0.01l-1.99,0.51l-2.42,1.25l-2.89,-0.84l-2.48,-2.03l-2.41,-0.79l-1.61,-2.47l-1.84,-3.63l-0.36,-0.15l-1.22,0.4l-1.48,-0.84l-0.37,0.06l-0.72,0.82l-1.08,-1.12l-0.02,-1.35l-0.3,-0.29l-0.43,0.0l0.34,-1.64l-0.04,-0.22l-1.29,-2.11l-0.12,-0.11l-3.0,-1.49l-1.62,-2.49l0.52,-1.98l1.18,-0.92l0.11,-0.27l-0.19,-1.66l-0.16,-0.23l-1.55,-0.81l-1.58,-3.33l-1.3,-2.2l0.41,-0.75l0.03,-0.21l-0.73,-3.12l1.2,-0.59l0.35,0.9l1.26,1.35l0.15,0.09l1.81,0.39l0.91,-0.09l0.15,-0.06l2.9,-2.13l0.7,-0.16l0.48,0.56l-0.75,1.26l0.05,0.37l1.56,1.53l0.28,0.08l0.37,-0.09l0.7,1.89l0.21,0.19l2.31,0.59l1.69,1.4l0.15,0.07l3.66,0.49l3.91,-0.76l0.23,-0.19l0.19,-0.52Z" data-code="IR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M530.51,176.08l2.91,-0.39l0.41,0.63l0.11,0.1l0.66,0.36l-0.32,0.47l0.07,0.41l1.1,0.84l-0.53,0.7l0.06,0.42l1.06,0.8l1.01,0.44l0.04,1.56l-0.44,0.04l-0.88,-1.46l0.01,-0.37l-0.3,-0.31l-0.98,0.01l-0.65,-0.69l-0.26,-0.09l-0.38,0.06l-0.97,-0.82l-1.64,-0.65l0.2,-1.2l-0.02,-0.16l-0.28,-0.69Z" data-code="AM" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M451.68,158.58l0.2,0.16l3.3,0.75l-0.22,1.26l0.02,0.18l0.35,0.78l-1.4,-0.32l-0.21,0.03l-2.04,1.1l-0.16,0.29l0.13,1.47l-0.29,0.82l0.02,0.24l0.82,1.57l0.1,0.11l2.28,1.5l1.29,2.53l2.79,2.43l0.2,0.07l1.83,-0.02l0.31,0.34l-0.46,0.39l0.06,0.5l4.06,1.97l2.06,1.49l0.17,0.36l-0.24,0.53l-1.08,-1.07l-0.15,-0.08l-2.18,-0.49l-0.33,0.15l-1.05,1.91l0.11,0.4l1.63,0.98l-0.22,1.12l-0.84,0.14l-0.22,0.15l-1.27,2.38l-0.54,0.12l0.01,-0.47l0.48,-1.46l0.5,-0.58l0.03,-0.35l-0.97,-1.69l-0.76,-1.48l-0.17,-0.15l-0.94,-0.33l-0.68,-1.18l-0.16,-0.13l-1.53,-0.52l-1.03,-1.14l-0.19,-0.1l-1.78,-0.19l-1.88,-1.3l-2.27,-1.94l-1.64,-1.68l-0.76,-2.94l-0.21,-0.21l-1.22,-0.35l-2.01,-1.0l-0.24,-0.01l-1.15,0.42l-0.11,0.07l-1.38,1.36l-0.5,0.11l0.19,-0.87l-0.21,-0.35l-1.19,-0.34l-0.56,-2.06l0.76,-0.82l0.03,-0.36l-0.68,-1.08l0.04,-0.31l0.68,0.42l0.19,0.04l1.21,-0.15l0.14,-0.06l1.18,-0.89l0.25,0.29l0.25,0.1l1.19,-0.1l0.25,-0.18l0.45,-1.04l1.61,0.34l0.19,-0.02l1.1,-0.53l0.17,-0.22l0.15,-0.95l1.19,0.35l0.35,-0.16l0.23,-0.47l2.11,-0.47l0.45,0.89ZM459.35,184.63l-0.71,1.81l0.0,0.23l0.33,0.79l-0.37,1.03l-1.6,-0.91l-1.33,-0.34l-3.24,-1.36l0.23,-0.99l2.73,0.24l3.95,-0.5ZM443.95,175.91l1.26,1.77l-0.31,3.47l-0.82,-0.13l-0.26,0.08l-0.83,0.79l-0.64,-0.52l-0.1,-3.42l-0.44,-1.34l0.91,0.1l0.21,-0.06l1.01,-0.74Z" data-code="IT" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M690.8,230.21l-2.86,1.93l-2.09,2.46l-0.06,0.11l-0.55,1.8l0.04,0.26l4.26,6.1l2.31,1.63l1.46,1.97l1.12,4.62l-0.32,4.3l-1.97,1.57l-2.85,1.62l-2.09,2.14l-2.83,2.13l-0.67,-1.19l0.65,-1.58l-0.09,-0.35l-1.47,-1.14l1.67,-0.79l2.57,-0.18l0.22,-0.47l-0.89,-1.24l3.88,-1.8l0.17,-0.24l0.31,-3.05l-0.01,-0.13l-0.56,-1.63l0.44,-2.48l-0.01,-0.15l-0.63,-1.81l-0.08,-0.12l-1.87,-1.77l-3.64,-5.3l-0.11,-0.1l-2.68,-1.39l0.45,-0.59l1.53,-0.65l0.16,-0.39l-0.97,-2.27l-0.27,-0.18l-2.89,-0.02l-1.04,-2.21l-1.28,-1.83l0.96,-0.46l1.97,0.01l2.43,-0.3l0.13,-0.05l1.95,-1.29l1.04,0.85l0.13,0.06l1.98,0.42l-0.32,1.21l0.09,0.3l1.19,1.07l0.12,0.07l1.88,0.51Z" data-code="VN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M258.11,341.34l1.4,1.81l0.51,-0.06l0.89,-1.94l2.51,0.1l0.36,0.49l4.6,4.31l0.15,0.08l1.99,0.39l3.01,1.93l2.5,1.01l0.28,0.91l-2.4,3.97l0.17,0.44l2.57,0.74l2.81,0.41l2.09,-0.44l0.14,-0.07l2.27,-2.06l0.09,-0.17l0.38,-2.2l0.88,-0.36l1.05,1.29l-0.04,1.88l-1.98,1.4l-1.72,1.13l-2.84,2.65l-3.34,3.73l-0.07,0.12l-0.63,2.22l-0.67,2.85l0.02,2.73l-0.47,0.54l-0.07,0.17l-0.36,3.28l0.12,0.27l3.03,2.32l-0.31,1.78l0.11,0.29l1.44,1.15l-0.11,1.17l-2.32,3.57l-3.59,1.51l-4.95,0.6l-2.72,-0.29l-0.32,0.38l0.5,1.67l-0.49,2.13l0.01,0.16l0.4,1.29l-1.27,0.88l-2.41,0.39l-2.33,-1.05l-0.31,0.04l-0.97,0.78l-0.11,0.27l0.35,2.98l0.16,0.23l1.69,0.91l0.31,-0.02l1.08,-0.75l0.46,0.96l-2.1,0.88l-2.01,1.89l-0.09,0.18l-0.36,3.05l-0.51,1.42l-2.16,0.01l-0.19,0.07l-1.96,1.59l-0.1,0.15l-0.72,2.34l0.08,0.31l2.46,2.31l0.13,0.07l2.09,0.56l-0.74,2.45l-2.86,1.75l-0.12,0.14l-1.59,3.71l-2.2,1.24l-0.1,0.09l-1.03,1.54l-0.04,0.23l0.81,3.45l0.06,0.13l1.13,1.32l-2.59,-0.57l-5.89,-0.44l-0.92,-1.73l0.05,-2.4l-0.34,-0.3l-1.49,0.19l-0.72,-0.98l-0.2,-3.21l1.79,-1.33l0.1,-0.13l0.79,-2.04l0.02,-0.16l-0.27,-1.52l1.31,-2.69l0.91,-4.15l-0.23,-1.72l0.91,-0.49l0.15,-0.33l-0.27,-1.16l-0.15,-0.2l-0.87,-0.46l0.65,-1.01l-0.04,-0.37l-1.06,-1.09l-0.54,-3.2l0.83,-0.51l0.14,-0.29l-0.42,-3.6l0.58,-2.98l0.64,-2.5l1.41,-1.0l0.12,-0.32l-0.75,-2.8l-0.01,-2.48l1.81,-1.78l0.09,-0.22l-0.06,-2.3l1.39,-2.69l0.03,-0.14l0.01,-2.58l-0.11,-0.24l-0.57,-0.45l-1.1,-4.59l1.49,-2.73l0.04,-0.17l-0.23,-2.59l0.86,-2.38l1.6,-2.48l1.74,-1.65l0.04,-0.39l-0.64,-0.89l0.42,-0.7l0.04,-0.16l-0.08,-4.26l2.55,-1.23l0.16,-0.18l0.86,-2.75l-0.01,-0.22l-0.22,-0.48l1.84,-2.1l3.0,0.59ZM256.77,438.98l-2.1,0.15l-1.18,-1.14l-0.19,-0.08l-1.53,-0.09l-2.38,-0.0l-0.0,-6.28l0.4,0.65l1.25,2.55l0.11,0.12l3.26,2.07l3.19,0.8l-0.82,1.26Z" data-code="AR" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M705.55,353.06l0.09,0.09l0.37,0.05l0.13,-0.35l-0.57,-1.69l0.48,0.3l0.71,0.99l0.34,0.11l0.2,-0.29l-0.04,-1.37l-0.04,-0.14l-1.22,-2.07l-0.28,-0.9l-0.51,-0.69l0.24,-1.33l0.52,-0.7l0.34,-1.32l0.01,-0.13l-0.25,-1.44l0.51,-0.94l0.1,1.03l0.23,0.26l0.32,-0.14l1.01,-1.72l1.94,-0.84l1.27,-1.14l1.84,-0.92l1.0,-0.18l0.6,0.28l0.26,-0.0l1.94,-0.96l1.48,-0.28l0.19,-0.13l0.32,-0.49l0.51,-0.18l1.42,0.05l2.63,-0.76l0.11,-0.06l1.36,-1.15l0.08,-0.1l0.61,-1.33l1.42,-1.27l0.1,-0.19l0.11,-1.03l0.06,-1.32l1.39,-1.74l0.85,1.79l0.4,0.14l1.07,-0.51l0.11,-0.45l-0.77,-1.05l0.53,-0.84l0.86,0.43l0.43,-0.22l0.29,-1.85l1.29,-1.19l0.6,-0.98l1.16,-0.4l0.2,-0.27l0.02,-0.34l0.74,0.2l0.38,-0.27l0.03,-0.44l1.98,-0.61l1.7,1.08l1.36,1.48l0.22,0.1l1.55,0.02l1.57,0.24l0.33,-0.4l-0.48,-1.27l1.09,-1.86l1.06,-0.63l0.1,-0.42l-0.28,-0.46l0.93,-1.24l1.36,-0.8l1.16,0.27l0.14,0.0l2.1,-0.48l0.23,-0.3l-0.05,-1.3l-0.18,-0.26l-1.08,-0.49l0.44,-0.12l1.52,0.58l1.39,1.06l2.11,0.65l0.19,-0.0l0.59,-0.21l1.44,0.72l0.27,0.0l1.37,-0.68l0.84,0.2l0.26,-0.06l0.37,-0.3l0.82,0.89l-0.56,1.14l-0.84,0.91l-0.75,0.07l-0.26,0.38l0.26,0.9l-0.67,1.15l-0.88,1.24l-0.05,0.25l0.18,0.72l0.12,0.17l1.99,1.42l1.96,0.84l1.25,0.86l1.8,1.51l0.19,0.07l0.63,-0.0l1.15,0.58l0.34,0.7l0.17,0.15l2.39,0.88l0.24,-0.02l1.65,-0.88l0.14,-0.16l0.49,-1.37l0.52,-1.19l0.31,-1.39l0.75,-2.02l0.01,-0.19l-0.33,-1.16l0.16,-0.67l0.0,-0.13l-0.28,-1.41l0.3,-1.78l0.42,-0.45l0.05,-0.33l-0.33,-0.73l0.56,-1.25l0.48,-1.39l0.07,-0.69l0.58,-0.59l0.48,0.84l0.17,1.53l0.17,0.24l0.47,0.23l0.09,0.9l0.05,0.14l0.87,1.23l0.17,1.33l-0.09,0.89l0.03,0.15l0.9,2.0l0.43,0.13l1.38,-0.83l0.71,0.92l1.06,0.88l-0.22,0.96l0.0,0.14l0.53,2.2l0.38,1.3l0.15,0.18l0.52,0.26l0.62,2.01l-0.23,1.27l0.02,0.18l0.81,1.76l0.14,0.14l2.69,1.35l3.21,2.21l-0.2,0.4l0.04,0.34l1.39,1.6l0.95,2.78l0.43,0.16l0.79,-0.46l0.85,0.96l0.39,0.05l0.22,-0.15l0.36,2.33l0.09,0.18l1.78,1.63l1.16,1.01l1.9,2.1l0.67,2.05l0.06,1.47l-0.17,1.64l0.03,0.17l1.16,2.22l-0.14,2.28l-0.43,1.24l-0.68,2.44l0.04,1.63l-0.48,1.92l-1.06,2.43l-1.79,1.32l-0.1,0.12l-0.91,2.15l-0.82,1.37l-0.76,2.47l-0.98,1.46l-0.63,2.14l-0.33,2.02l0.1,0.82l-1.21,0.85l-2.71,0.1l-0.13,0.03l-2.31,1.19l-1.21,1.17l-1.34,1.11l-1.89,-1.18l-1.33,-0.46l0.32,-1.24l-0.4,-0.35l-1.46,0.61l-2.06,1.98l-1.99,-0.73l-1.43,-0.46l-1.45,-0.22l-2.32,-0.81l-1.51,-1.67l-0.45,-2.11l-0.6,-1.5l-0.07,-0.11l-1.23,-1.16l-0.16,-0.08l-1.96,-0.28l0.59,-0.99l0.03,-0.24l-0.61,-2.1l-0.54,-0.08l-1.16,1.85l-1.23,0.29l0.73,-0.88l0.06,-0.12l0.37,-1.57l0.93,-1.33l0.05,-0.2l-0.2,-2.07l-0.53,-0.17l-2.01,2.35l-1.52,0.94l-0.12,0.14l-0.82,1.93l-1.5,-0.9l0.07,-1.32l-0.06,-0.2l-1.57,-2.04l-1.15,-0.92l0.3,-0.41l-0.1,-0.44l-3.21,-1.69l-0.13,-0.03l-1.69,-0.08l-2.35,-1.31l-0.16,-0.04l-4.55,0.27l-3.24,0.99l-2.8,0.91l-2.33,-0.18l-0.17,0.03l-2.63,1.41l-2.14,0.64l-0.2,0.19l-0.47,1.42l-0.8,0.99l-1.99,0.06l-1.55,0.24l-2.27,-0.5l-1.79,0.3l-1.71,0.13l-0.19,0.09l-1.38,1.39l-0.58,-0.1l-0.21,0.04l-1.26,0.8l-1.13,0.85l-1.72,-0.1l-1.6,-0.0l-2.58,-1.76l-1.21,-0.49l0.04,-1.19l1.04,-0.32l0.16,-0.12l0.42,-0.64l0.05,-0.19l-0.09,-0.97l0.3,-2.0l-0.28,-1.64l-1.34,-2.84l-0.39,-1.49l0.1,-1.51l-0.04,-0.17l-0.96,-1.72l-0.06,-0.73l-0.09,-0.19l-1.04,-1.01l-0.3,-2.02l-0.05,-0.12l-1.23,-1.83ZM784.95,393.35l2.39,1.01l0.2,0.01l3.26,-0.96l1.19,0.16l0.16,3.19l-0.78,0.95l-0.07,0.16l-0.19,1.83l-0.43,-0.41l-0.44,0.03l-1.61,1.96l-0.4,-0.12l-1.38,-0.09l-1.43,-2.42l-0.37,-2.03l-1.4,-2.53l0.04,-0.94l1.27,0.2Z" data-code="AU" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M509.04,199.22l0.71,0.0l0.27,-0.17l0.15,-0.33l0.19,-0.01l0.02,0.73l-0.27,0.34l0.02,0.08l-0.32,0.62l-0.65,-0.27l-0.41,0.19l-0.52,1.85l0.16,0.35l0.14,0.07l-0.17,0.1l-0.14,0.21l-0.11,0.73l0.39,0.33l0.81,-0.26l0.03,0.64l-0.97,3.43l-1.28,-3.67l0.62,-0.78l-0.03,-0.41l0.58,-1.16l0.5,-2.07l0.27,-0.54Z" data-code="IL" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M615.84,192.58l2.4,2.97l-0.24,2.17l0.05,0.2l0.94,1.35l-0.06,0.97l-1.46,-0.3l-0.35,0.36l0.7,3.06l0.12,0.18l2.46,1.75l3.11,1.72l-1.23,0.96l-0.1,0.13l-0.97,2.55l0.16,0.38l2.41,1.02l2.37,1.33l3.27,1.52l3.43,0.37l1.37,1.3l0.17,0.08l1.92,0.25l3.0,0.62l2.15,-0.04l0.28,-0.22l0.29,-1.06l0.0,-0.13l-0.32,-1.66l0.16,-0.94l1.0,-0.37l0.23,2.28l0.18,0.24l2.28,1.02l0.2,0.02l1.52,-0.41l2.06,0.18l2.08,-0.08l0.29,-0.27l0.18,-1.66l-0.1,-0.26l-0.53,-0.44l1.38,-0.23l0.15,-0.07l2.26,-2.0l2.75,-1.65l1.97,0.63l0.25,-0.03l1.54,-0.99l0.89,1.28l-0.72,0.97l0.2,0.48l2.49,0.37l0.11,0.61l-0.69,0.39l-0.15,0.3l0.15,1.22l-1.36,-0.37l-0.23,0.03l-3.24,1.86l-0.15,0.28l0.07,1.44l-1.33,2.16l-0.04,0.13l-0.12,1.24l-0.98,1.91l-1.72,-0.53l-0.39,0.28l-0.09,2.66l-0.52,0.83l-0.04,0.23l0.21,0.89l-0.71,0.36l-1.21,-3.85l-0.29,-0.21l-0.69,0.01l-0.29,0.23l-0.28,1.17l-0.84,-0.84l0.6,-1.17l0.97,-0.13l0.23,-0.16l1.15,-2.25l-0.18,-0.42l-1.54,-0.47l-2.3,0.04l-2.13,-0.33l-0.19,-1.63l-0.26,-0.26l-1.13,-0.13l-1.93,-1.13l-0.42,0.13l-0.88,1.82l0.08,0.37l1.47,1.15l-1.21,0.77l-0.1,0.1l-0.56,0.97l0.13,0.42l1.31,0.61l-0.36,1.35l0.01,0.2l0.85,1.95l0.37,2.05l-0.26,0.68l-1.55,-0.02l-3.09,0.54l-0.25,0.32l0.13,1.84l-1.21,1.4l-3.64,1.79l-2.79,3.04l-1.86,1.61l-2.48,1.68l-0.13,0.25l-0.0,1.0l-1.07,0.55l-2.21,0.9l-1.13,0.13l-0.25,0.19l-0.75,1.96l-0.02,0.15l0.52,3.31l0.13,2.03l-1.03,2.35l-0.03,0.12l-0.01,4.03l-1.02,0.1l-0.23,0.15l-1.14,1.93l0.04,0.36l0.44,0.48l-1.83,0.57l-0.18,0.15l-0.81,1.65l-0.74,0.53l-2.14,-2.12l-1.14,-3.47l-0.96,-2.57l-0.9,-1.26l-1.3,-2.38l-0.61,-3.14l-0.44,-1.62l-2.29,-3.56l-1.03,-4.94l-0.74,-3.29l0.01,-3.12l-0.49,-2.51l-0.41,-0.22l-3.56,1.53l-1.59,-0.28l-2.96,-2.87l0.94,-0.74l0.06,-0.41l-0.74,-1.03l-2.73,-2.1l1.35,-1.43l5.38,0.01l0.29,-0.36l-0.5,-2.29l-0.09,-0.15l-1.33,-1.28l-0.27,-1.96l-0.12,-0.2l-1.36,-1.0l2.42,-2.48l2.77,0.2l0.24,-0.1l2.62,-2.85l1.59,-2.8l2.41,-2.74l0.07,-0.2l-0.04,-1.82l2.01,-1.51l-0.01,-0.49l-1.95,-1.33l-0.83,-1.81l-0.82,-2.27l0.98,-0.97l3.64,0.66l2.89,-0.42l0.17,-0.08l2.18,-2.15Z" data-code="IN" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M505.77,287.58l0.36,0.23l8.95,5.03l0.15,1.3l0.13,0.21l3.4,2.37l-1.07,2.88l-0.02,0.14l0.15,1.42l0.15,0.23l1.47,0.84l0.05,0.42l-0.66,1.44l-0.02,0.18l0.13,0.72l-0.16,1.16l0.03,0.19l0.87,1.57l1.03,2.48l0.12,0.14l0.53,0.32l-1.59,1.18l-2.64,0.95l-1.45,-0.04l-0.2,0.07l-0.81,0.69l-1.64,0.06l-0.68,0.3l-2.9,-0.69l-1.71,0.17l-0.65,-3.18l-0.05,-0.12l-1.35,-1.88l-0.19,-0.12l-2.41,-0.46l-1.38,-0.74l-1.63,-0.44l-0.96,-0.41l-0.95,-0.58l-1.31,-3.09l-1.47,-1.46l-0.45,-1.31l0.24,-1.34l-0.39,-1.99l0.71,-0.08l0.18,-0.09l0.91,-0.91l0.98,-1.31l0.59,-0.5l0.11,-0.24l-0.02,-0.81l-0.08,-0.2l-0.47,-0.5l-0.1,-0.67l0.51,-0.23l0.18,-0.25l0.14,-1.47l-0.05,-0.2l-0.76,-1.09l0.45,-0.15l2.71,0.03l5.01,-0.19Z" data-code="TZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M539.36,175.66l0.16,0.09l1.11,0.2l0.32,-0.15l0.4,-0.71l1.22,-0.99l1.11,1.33l1.26,2.09l0.22,0.14l1.06,0.13l0.28,0.29l-1.46,0.17l-0.26,0.24l-0.43,2.26l-0.39,0.92l-0.85,0.63l-0.12,0.25l0.06,1.2l-0.22,0.05l-1.28,-1.25l0.74,-1.25l-0.03,-0.35l-0.74,-0.86l-0.3,-0.1l-1.05,0.27l-2.49,1.82l-0.04,-1.46l-0.18,-0.27l-1.09,-0.47l-0.8,-0.6l0.53,-0.7l-0.06,-0.42l-1.11,-0.84l0.34,-0.51l-0.11,-0.43l-0.89,-0.48l-0.33,-0.49l0.25,-0.2l1.78,0.81l1.35,0.18l0.25,-0.09l0.34,-0.35l0.02,-0.39l-1.04,-1.36l0.28,-0.18l0.49,0.07l1.65,1.74ZM533.53,180.16l0.63,0.67l0.22,0.09l0.8,-0.0l0.04,0.31l0.66,1.09l-0.94,-0.21l-1.16,-1.24l-0.25,-0.71Z" data-code="AZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M405.17,135.35l0.36,2.16l-1.78,2.84l-4.28,1.91l-3.02,-0.43l1.81,-3.13l0.02,-0.26l-1.23,-3.26l3.24,-2.56l1.54,-1.32l0.37,1.33l-0.49,1.77l0.3,0.38l1.49,-0.05l1.68,0.63Z" data-code="IE" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M756.56,287.86l0.69,4.02l0.15,0.21l2.59,1.5l0.39,-0.07l2.05,-2.61l2.75,-1.45l2.09,-0.0l2.08,0.85l1.85,0.89l2.52,0.46l0.08,15.44l-1.72,-1.6l-0.15,-0.07l-2.54,-0.51l-0.29,0.1l-0.53,0.62l-2.53,0.06l0.78,-1.51l1.48,-0.66l0.17,-0.34l-0.65,-2.74l-1.23,-2.19l-0.14,-0.13l-4.85,-2.13l-2.09,-0.23l-3.7,-2.28l-0.41,0.1l-0.67,1.11l-0.63,0.14l-0.41,-0.67l-0.01,-1.01l-0.14,-0.25l-1.39,-0.89l2.05,-0.69l1.73,0.05l0.29,-0.39l-0.21,-0.66l-0.29,-0.21l-3.5,-0.0l-0.9,-1.36l-0.19,-0.13l-2.14,-0.44l-0.65,-0.76l2.86,-0.51l1.28,-0.79l3.75,0.96l0.32,0.76ZM758.01,300.37l-0.79,1.04l-0.14,-1.07l0.4,-0.81l0.29,-0.47l0.24,0.31l-0.0,1.0ZM747.45,292.9l0.48,1.02l-1.45,-0.69l-2.09,-0.21l-1.45,0.16l-1.28,-0.07l0.35,-0.81l2.86,-0.1l2.58,0.68ZM741.15,285.69l-0.16,-0.25l-0.72,-3.08l0.47,-1.86l0.35,-0.38l0.1,0.73l0.25,0.26l1.28,0.19l0.18,0.78l-0.11,1.8l-0.96,-0.18l-0.35,0.22l-0.38,1.52l0.05,0.24ZM741.19,285.75l0.76,0.97l-0.11,0.05l-0.65,-1.02ZM739.18,293.52l-0.61,0.54l-1.44,-0.38l-0.25,-0.55l1.93,-0.09l0.36,0.48ZM728.4,295.87l-0.27,-0.07l-2.26,0.89l-0.37,-0.41l0.27,-0.8l-0.09,-0.33l-1.68,-1.37l0.17,-2.29l-0.42,-0.3l-1.67,0.76l-0.17,0.29l0.21,2.92l0.09,3.34l-1.22,0.28l-0.78,-0.54l0.65,-2.1l0.01,-0.14l-0.39,-2.42l-0.29,-0.25l-0.86,-0.02l-0.63,-1.4l0.99,-1.61l0.35,-1.97l1.24,-3.73l0.49,-0.96l1.95,-1.7l1.86,0.69l3.16,0.35l2.92,-0.1l0.17,-0.06l2.24,-1.65l0.11,0.14l-1.8,2.22l-1.72,0.44l-2.41,-0.48l-4.21,0.13l-2.19,0.36l-0.25,0.24l-0.36,1.9l0.08,0.27l2.24,2.23l0.4,0.02l1.29,-1.08l3.19,-0.58l-0.19,0.06l-1.04,1.4l-2.13,0.94l-0.12,0.45l2.26,3.06l-0.37,0.69l0.03,0.32l1.51,1.95ZM728.48,295.97l0.59,0.76l-0.02,1.37l-1.0,0.55l-0.64,-0.58l1.09,-1.84l-0.02,-0.26ZM728.64,286.95l0.79,-0.14l-0.07,0.39l-0.72,-0.24ZM732.38,310.1l-1.89,0.49l-0.06,-0.06l0.17,-0.64l1.0,-1.42l2.14,-0.87l0.1,0.2l0.04,0.58l-1.49,1.72ZM728.26,305.71l-0.17,0.63l-3.53,0.67l-3.02,-0.28l-0.0,-0.42l1.66,-0.44l1.47,0.71l0.16,0.03l1.75,-0.21l1.69,-0.69ZM722.98,310.33l-0.74,0.03l-2.52,-1.35l1.42,-0.3l1.19,0.7l0.72,0.63l-0.06,0.28ZM716.24,305.63l0.66,0.49l0.22,0.06l1.35,-0.18l0.31,0.53l-4.18,0.77l-0.8,-0.01l0.51,-0.86l1.2,-0.02l0.24,-0.12l0.49,-0.65ZM715.84,280.21l0.09,0.34l2.25,1.86l-2.25,0.22l-0.24,0.17l-0.84,1.71l-0.03,0.15l0.1,2.11l-2.27,1.62l-0.13,0.24l-0.06,2.46l-0.74,2.92l-0.02,-0.05l-0.39,-0.16l-2.62,1.04l-0.86,-1.33l-0.23,-0.14l-1.71,-0.14l-1.19,-0.76l-0.25,-0.03l-2.78,0.84l-0.79,-1.05l-0.26,-0.12l-1.61,0.13l-1.8,-0.25l-0.36,-3.13l-0.15,-0.23l-1.18,-0.65l-1.13,-2.02l-0.33,-2.1l0.27,-2.19l1.05,-1.17l0.28,1.12l0.1,0.16l1.71,1.41l0.28,0.05l1.55,-0.49l1.54,0.17l0.23,-0.07l1.4,-1.21l1.05,-0.19l2.3,0.68l0.16,0.0l2.04,-0.53l0.21,-0.19l1.26,-3.41l0.91,-0.82l0.09,-0.14l0.8,-2.64l2.63,0.0l1.71,0.33l-1.19,1.89l0.02,0.34l1.74,2.24l-0.37,1.0ZM692.67,302.0l0.26,0.19l4.8,0.25l0.28,-0.16l0.44,-0.83l4.29,1.12l0.85,1.52l0.23,0.15l3.71,0.45l2.37,1.15l-2.06,0.69l-2.77,-1.0l-2.25,0.07l-2.57,-0.18l-2.31,-0.45l-2.94,-0.97l-1.84,-0.25l-0.13,0.01l-0.97,0.29l-4.34,-0.98l-0.38,-0.94l-0.25,-0.19l-1.76,-0.14l1.31,-1.84l2.81,0.14l1.97,0.96l0.95,0.19l0.28,0.74ZM685.63,299.27l-2.36,0.04l-2.07,-2.05l-3.17,-2.02l-1.06,-1.5l-1.88,-2.02l-1.22,-1.85l-1.9,-3.49l-2.2,-2.11l-0.71,-2.08l-0.94,-1.99l-0.1,-0.12l-2.21,-1.54l-1.35,-2.17l-1.86,-1.39l-2.53,-2.68l-0.14,-0.81l1.22,0.08l3.76,0.47l2.16,2.4l1.94,1.7l1.37,1.04l2.35,2.67l0.22,0.1l2.44,0.04l1.99,1.62l1.42,2.06l0.09,0.09l1.67,1.0l-0.88,1.8l0.11,0.39l1.44,0.87l0.13,0.04l0.68,0.05l0.41,1.62l0.87,1.4l0.22,0.14l1.71,0.21l1.06,1.38l-0.61,3.04l-0.09,3.6Z" data-code="ID" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M500.54,141.42l0.9,0.13l0.27,-0.11l0.52,-0.62l0.68,0.13l2.43,-0.3l1.32,1.57l-0.45,0.48l-0.07,0.26l0.21,1.03l0.27,0.24l1.85,0.15l0.76,1.22l-0.05,0.55l0.2,0.31l3.18,1.15l0.18,0.01l1.75,-0.47l1.42,1.41l0.22,0.09l1.42,-0.03l3.44,0.99l0.02,0.65l-0.97,1.62l-0.03,0.24l0.52,1.67l-0.29,0.79l-2.24,0.22l-0.14,0.05l-1.29,0.89l-0.13,0.23l-0.07,1.16l-1.75,0.22l-0.12,0.04l-1.6,0.98l-2.27,0.16l-0.12,0.04l-2.16,1.17l-0.16,0.29l0.15,1.94l0.14,0.23l1.23,0.75l0.18,0.04l2.06,-0.15l-0.22,0.51l-2.67,0.54l-3.27,1.72l-1.0,-0.45l0.45,-1.19l-0.19,-0.39l-2.34,-0.78l0.15,-0.2l2.32,-1.0l0.09,-0.49l-0.73,-0.72l-0.15,-0.08l-3.69,-0.75l-0.14,-0.96l-0.35,-0.25l-2.32,0.39l-0.21,0.15l-0.91,1.7l-1.77,2.1l-0.93,-0.44l-0.24,-0.0l-1.05,0.45l-0.48,-0.25l0.13,-0.07l0.14,-0.15l0.43,-1.04l0.67,-0.97l0.04,-0.26l-0.1,-0.31l0.04,-0.02l0.11,0.19l0.24,0.15l1.48,0.09l0.78,-0.25l0.07,-0.53l-0.27,-0.19l0.09,-0.25l-0.08,-0.33l-0.81,-0.74l-0.34,-1.24l-0.14,-0.18l-0.73,-0.42l0.15,-0.87l-0.11,-0.29l-1.13,-0.86l-0.15,-0.06l-0.97,-0.11l-1.79,-0.97l-0.2,-0.03l-1.66,0.32l-0.13,0.06l-0.52,0.41l-0.95,-0.0l-0.23,0.11l-0.56,0.66l-1.74,0.29l-0.79,0.43l-1.01,-0.68l-0.16,-0.05l-1.57,-0.01l-1.52,-0.35l-0.23,0.04l-0.71,0.45l-0.09,-0.43l-0.13,-0.19l-1.18,-0.74l0.38,-1.02l0.53,-0.64l0.35,0.12l0.37,-0.41l-0.57,-1.29l2.1,-2.5l1.16,-0.36l0.2,-0.2l0.27,-0.92l-0.01,-0.2l-1.1,-2.52l0.79,-0.09l0.13,-0.05l1.3,-0.86l1.83,-0.07l2.48,0.26l2.84,0.8l1.91,0.06l0.88,0.45l0.29,-0.01l0.72,-0.44l0.49,0.58l0.25,0.11l2.2,-0.16l0.94,0.3l0.39,-0.26l0.15,-1.57l0.61,-0.59l2.01,-0.19Z" data-code="UA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M548.47,221.47l-0.15,-1.72l0.59,-1.23l0.38,-0.16l0.54,0.6l0.04,1.4l-0.47,1.37l-0.41,0.11l-0.53,-0.37Z" data-code="QA" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path><path d="M507.71,314.14l1.65,-0.18l2.96,0.7l0.2,-0.02l0.6,-0.29l1.68,-0.06l0.18,-0.07l0.8,-0.69l1.5,0.02l2.74,-0.98l1.74,-1.27l0.25,0.7l-0.1,2.47l0.31,2.27l0.1,3.97l0.42,1.24l-0.7,1.71l-0.94,1.73l-1.52,1.52l-5.06,2.21l-2.88,2.8l-1.01,0.51l-1.72,1.81l-0.99,0.58l-0.15,0.23l-0.21,1.86l0.04,0.19l1.17,1.95l0.47,1.47l0.03,0.74l0.39,0.28l0.05,-0.01l-0.06,2.13l-0.39,1.19l0.1,0.33l0.42,0.32l-0.28,0.83l-0.95,0.86l-2.03,0.88l-3.08,1.49l-1.1,0.99l-0.09,0.28l0.21,1.13l0.21,0.23l0.38,0.11l-0.14,0.89l-1.39,-0.02l-0.17,-0.94l-0.38,-1.23l-0.2,-0.89l0.44,-2.91l-0.01,-0.14l-0.65,-1.88l-1.15,-3.55l2.52,-2.85l0.68,-1.89l0.29,-0.18l0.14,-0.2l0.28,-1.53l-0.03,-0.19l-0.36,-0.7l0.1,-1.83l0.49,-1.84l-0.01,-3.26l-0.14,-0.25l-1.3,-0.83l-0.11,-0.04l-1.08,-0.17l-0.47,-0.55l-0.1,-0.08l-1.16,-0.54l-0.13,-0.03l-1.83,0.04l-0.32,-2.25l7.19,-1.99l1.32,1.12l0.29,0.06l0.55,-0.19l0.75,0.49l0.11,0.81l-0.49,1.11l-0.02,0.15l0.19,1.81l0.09,0.18l1.63,1.59l0.48,-0.1l0.72,-1.68l0.99,-0.49l0.17,-0.29l-0.21,-3.29l-0.04,-0.13l-1.11,-1.92l-0.9,-0.82l-0.21,-0.08l-0.62,0.03l-0.63,-2.98l0.61,-1.67Z" data-code="MZ" fill="#e9e9ef" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path></g><g><circle data-index="0" cx="242.3046638680944" cy="99.84747252824651" fill="#5156be" stroke="#fff" fill-opacity="0.9" stroke-width="7" stroke-opacity="0.4" r="9" class="jvectormap-marker jvectormap-element"></circle><circle data-index="1" cx="142.73139021152204" cy="143.34062339804314" fill="#5156be" stroke="#fff" fill-opacity="0.9" stroke-width="7" stroke-opacity="0.4" r="9" class="jvectormap-marker jvectormap-element"></circle><circle data-index="2" cx="364.89251492642165" cy="157.84341184267026" fill="#5156be" stroke="#fff" fill-opacity="0.9" stroke-width="7" stroke-opacity="0.4" r="9" class="jvectormap-marker jvectormap-element"></circle></g></svg><div class="jvectormap-zoomin">+</div><div class="jvectormap-zoomout">−</div></div></div>

                        <div class="px-2 py-2">
                            <p class="mb-1">USA <span class="float-end">75%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped
                                    bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                </div>
                            </div>

                            <p class="mt-3 mb-1">Russia <span class="float-end">55%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped
                                    bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                </div>
                            </div>

                            <p class="mt-3 mb-1">Australia <span class="float-end">85%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped
                                    bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Trading</h4>
                        <div class="flex-shrink-0">
                            <ul class="nav nav-tabs-custom card-header-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#buy-tab" role="tab">Buy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#sell-tab" role="tab">Sell</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="buy-tab" role="tabpanel">
                                <div class="float-end ms-2">
                                    <h5 class="font-size-14"><i class="bx
                                            bx-wallet text-primary font-size-16
                                            align-middle me-1"></i> <a href="#!" class="text-reset
                                            text-decoration-underline">$4335.23</a></h5>
                                </div>
                                <h5 class="font-size-14 mb-4">Buy Coins</h5>
                                <div>
                                    <div class="form-group mb-3">
                                        <label>Payment method :</label>
                                        <select class="form-select">
                                            <option>Direct Bank Payment</option>
                                            <option>Credit / Debit Card</option>
                                            <option>Paypal</option>
                                            <option>Payoneer</option>
                                            <option>Stripe</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label>Add Amount :</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Amount</label>
                                            <select class="form-select" style="max-width: 90px;">
                                                <option value="BT" selected="">BTC</option>
                                                <option value="ET">ETH</option>
                                                <option value="LT">LTC</option>
                                            </select>
                                            <input type="text" class="form-control" placeholder="0.00121255">
                                        </div>

                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Price</label>
                                            <input type="text" class="form-control" placeholder="$58,245">
                                            <label class="input-group-text">$</label>
                                        </div>

                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Total</label>
                                            <input type="text" class="form-control" placeholder="$36,854.25">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn
                                            btn-success w-md">Buy Coin</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="sell-tab" role="tabpanel">
                                <div class="float-end ms-2">
                                    <h5 class="font-size-14"><i class="bx
                                            bx-wallet text-primary font-size-16
                                            align-middle me-1"></i> <a href="#!" class="text-reset
                                            text-decoration-underline">$4235.23</a></h5>
                                </div>
                                <h5 class="font-size-14 mb-4">Sell Coins</h5>
                                <div>

                                    <div class="form-group mb-3">
                                        <label>Wallet ID :</label>
                                        <input type="email" class="form-control" placeholder="1cvb254ugxvfcd280ki">
                                    </div>

                                    <div>
                                        <label>Add Amount :</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Amount</label>
                                            <select class="form-select" style="max-width: 90px;">
                                                <option value="BT" selected="">BTC</option>
                                                <option value="ET">ETH</option>
                                                <option value="LT">LTC</option>
                                            </select>
                                            <input type="text" class="form-control" placeholder="0.00121255">
                                        </div>

                                        <div class="input-group mb-3">

                                            <label class="input-group-text">Price</label>
                                            <input type="text" class="form-control" placeholder="$23,754.25">

                                            <label class="input-group-text">$</label>
                                        </div>

                                        <div class="input-group mb-3">
                                            <label class="input-group-text">Total</label>
                                            <input type="text" class="form-control" placeholder="$6,852.41">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn
                                            btn-danger w-md">Sell Coin</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Transactions</h4>
                        <div class="flex-shrink-0">
                            <ul class="nav justify-content-end nav-tabs-custom
                                rounded card-header-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                        All
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                        Buy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab">
                                        Sell
                                    </a>
                                </li>
                            </ul>
                            <!-- end nav tabs -->
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body px-0">
                        <div class="tab-content">
                            <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar="init" style="max-height: 352px;"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 16px;">
                                    <table class="table align-middle
                                        table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">14
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.016 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">15
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.56 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy LTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">16
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">1.88 LTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$94.22</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">17
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.42 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$84.32</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">18
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.018 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$145.80</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">14
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.016 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">15
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.56 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 450px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 275px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar="init" style="max-height: 352px;"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 16px;">
                                    <table class="table align-middle
                                        table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">14
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.016 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">18
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.018 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$145.80</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy LTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">16
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">1.88 LTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$94.22</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">15
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.56 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">17
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.42 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$84.32</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">15
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.56 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22
                                                        text-success">
                                                        <i class="bx
                                                            bx-down-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Buy BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">14
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.016 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar="init" style="max-height: 352px;"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 16px;">
                                    <table class="table align-middle
                                        table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">15
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.56 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">14
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.016 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">18
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.018 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$145.80</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">15
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.56 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell LTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">16
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">1.88 LTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$94.22</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">17
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.42 ETH</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$84.32</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22
                                                        text-danger">
                                                        <i class="bx
                                                            bx-up-arrow-circle
                                                            d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14
                                                            mb-1">Sell BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">14
                                                            Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            mb-0">0.016 BTC</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Coin
                                                            Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14
                                                            text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted
                                                            mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Recent Activity</h4>
                        <div class="flex-shrink-0">
                            <select class="form-select form-select-sm mb-0
                                my-n1">
                                <option value="Today" selected="">Today</option>
                                <option value="Yesterday">Yesterday</option>
                                <option value="Week">Last Week</option>
                                <option value="Month">Last Month</option>
                            </select>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body px-0">
                        <div class="px-3" data-simplebar="init" style="max-height:
                            352px;"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 16px;">
                            <ul class="list-unstyled activity-wid mb-0">

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title
                                            bg-soft-warning text-warning
                                            rounded-circle">
                                            <i class="bx bx-bitcoin
                                                font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021,
                                                    18:24:56</h5>
                                                <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end
                                                me-3">
                                                <h6 class="mb-1">+0.5 BTC</h6>
                                                <div class="font-size-13">$178.53</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something
                                                            else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title
                                            bg-soft-primary text-primary
                                            rounded-circle">
                                            <i class="mdi mdi-ethereum
                                                font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021,
                                                    18:24:56</h5>
                                                <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end
                                                me-3">
                                                <h6 class="mb-1">-20.5 ETH</h6>
                                                <div class="font-size-13">$3541.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something
                                                            else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title
                                            bg-soft-warning text-warning
                                            rounded-circle">
                                            <i class="bx bx-bitcoin
                                                font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021,
                                                    18:24:56</h5>
                                                <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end
                                                me-3">
                                                <h6 class="mb-1">+0.5 BTC</h6>
                                                <div class="font-size-13">$5791.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something
                                                            else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title
                                            bg-soft-primary text-primary
                                            rounded-circle">
                                            <i class="mdi mdi-litecoin
                                                font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021,
                                                    18:24:56</h5>
                                                <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end
                                                me-3">
                                                <h6 class="mb-1">-1.5 LTC</h6>
                                                <div class="font-size-13">$5791.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something
                                                            else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title
                                            bg-soft-warning text-warning
                                            rounded-circle">
                                            <i class="bx bx-bitcoin
                                                font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021,
                                                    18:24:56</h5>
                                                <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end
                                                me-3">
                                                <h6 class="mb-1">+0.5 BTC</h6>
                                                <div class="font-size-13">$5791.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something
                                                            else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="activity-list">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title
                                            bg-soft-primary text-primary
                                            rounded-circle">
                                            <i class="mdi mdi-litecoin
                                                font-size-24"></i>
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">24/05/2021,
                                                    18:24:56</h5>
                                                <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end
                                                me-3">
                                                <h6 class="mb-1">+.55 LTC</h6>
                                                <div class="font-size-13">$91.45</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something
                                                            else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated
                                                            link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 430px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 288px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div><!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>

<script type="text/javascript">
    function initCounterNumber() {
            var counter = document.querySelectorAll('.counter-value');
            var speed = 250; // The lower the slower
            counter.forEach(function (counter_value) {
                function updateCount() {
                    var target = +counter_value.getAttribute('data-target');
                    var count = +counter_value.innerText;
                    var inc = target / speed;
                    if (inc < 1) {
                        inc = 1;
                    }
                    // Check if target is reached
                    if (count < target) {
                        // Add inc to count and output in counter_value
                        counter_value.innerText = (count + inc).toFixed(0);
                        // Call function every ms
                        setTimeout(updateCount, 1);
                    } else {
                        counter_value.innerText = target;
                    }
                };
                updateCount();
            });
        }

        $(document).ready( function() {
            initCounterNumber();
        });
        
    </script></div>
@endsection