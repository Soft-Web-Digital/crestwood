@extends('layouts.user.index')

@section('content')
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

    @include('partials.users.alert')

        <!-- Start::page-header -->
        <div
            class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">Wallet</h1>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">
                            Wallet
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-white btn-wave border-0 me-0 fw-normal waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#nairaDepositModal">
                    <i class="ri-filter-3-fill me-2"></i>Deposit
                </button>
                <button class="btn btn-primary btn-wave waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#nairaWithdrawalModal">
                    <i class="ri-upload-2-line me-2"></i> Withdraw
                </button>
            </div>
        </div>
        <!-- End::page-header -->

        <div class="row">
            <div class="col-xl-9">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card custom-card icon-overlay">
                            <span class="icon svg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,56V90.06h0a44,44,0,1,0-56,67.88h0V192H40a8,8,0,0,1-8-8V56a8,8,0,0,1,8-8H216A8,8,0,0,1,224,56Z" opacity="0.2"></path><path d="M128,136a8,8,0,0,1-8,8H72a8,8,0,0,1,0-16h48A8,8,0,0,1,128,136Zm-8-40H72a8,8,0,0,0,0,16h48a8,8,0,0,0,0-16Zm112,65.47V224A8,8,0,0,1,220,231l-24-13.74L172,231A8,8,0,0,1,160,224V200H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216a16,16,0,0,1,16,16V86.53a51.88,51.88,0,0,1,0,74.94ZM160,184V161.47A52,52,0,0,1,216,76V56H40V184Zm56-12a51.88,51.88,0,0,1-40,0v38.22l16-9.16a8,8,0,0,1,7.94,0l16,9.16Zm16-48a36,36,0,1,0-36,36A36,36,0,0,0,232,124Z"></path></svg>
                            </span>
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3 flex-wrap">
                                        <div
                                            class="avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10">
                                            <div class="avatar avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <circle cx="128" cy="96" r="48" opacity="0.2" />
                                                    <circle cx="128" cy="96" r="80" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <circle cx="128" cy="96" r="48" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <polyline
                                                        points="176 160 176 240 127.99 216 80 240 80 160.01"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                </svg>
                                            </div>
                                        </div>
                                    <div class="lh-1">
                                        <span class="d-block mb-2 fs-11 text-muted">Savings Balance</span>
                                        <h4 class="mb-1 fw-semibold fs-20">${{ number_format($savings, 2) }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card custom-card icon-overlay">
                            <span class="icon svg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M192,80v96H104a32,32,0,1,0-32-32H64V80Z" opacity="0.2"></path><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H53.39a8,8,0,0,0,7.23-4.57,48,48,0,0,1,86.76,0,8,8,0,0,0,7.23,4.57H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM80,144a24,24,0,1,1,24,24A24,24,0,0,1,80,144Zm136,56H159.43a64.39,64.39,0,0,0-28.83-26.16,40,40,0,1,0-53.2,0A64.39,64.39,0,0,0,48.57,200H40V56H216ZM56,96V80a8,8,0,0,1,8-8H192a8,8,0,0,1,8,8v96a8,8,0,0,1-8,8H176a8,8,0,0,1,0-16h8V88H72v8a8,8,0,0,1-16,0Z"></path></svg>
                            </span>
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3 flex-wrap">
                                        <div
                                            class="avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10">
                                            <div class="avatar avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path d="M128,128h24a40,40,0,0,1,0,80H128Z" opacity="0.2" />
                                                    <path d="M128,48H112a40,40,0,0,0,0,80h16Z" opacity="0.2" />
                                                    <line x1="128" y1="24" x2="128" y2="48" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <line x1="128" y1="208" x2="128" y2="232" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <path
                                                        d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                </svg>
                                            </div>
                                        </div>
                                    <div class="lh-1">
                                        <span class="d-block mb-2 fs-11 text-muted">Investment Balance</span>
                                        <h4 class="mb-1 fw-semibold fs-20">${{ number_format($investment, 2) }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card custom-card icon-overlay">
                            <span class="icon svg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M192,80v96H104a32,32,0,1,0-32-32H64V80Z" opacity="0.2"></path><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H53.39a8,8,0,0,0,7.23-4.57,48,48,0,0,1,86.76,0,8,8,0,0,0,7.23,4.57H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM80,144a24,24,0,1,1,24,24A24,24,0,0,1,80,144Zm136,56H159.43a64.39,64.39,0,0,0-28.83-26.16,40,40,0,1,0-53.2,0A64.39,64.39,0,0,0,48.57,200H40V56H216ZM56,96V80a8,8,0,0,1,8-8H192a8,8,0,0,1,8,8v96a8,8,0,0,1-8,8H176a8,8,0,0,1,0-16h8V88H72v8a8,8,0,0,1-16,0Z"></path></svg>
                            </span>
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3 flex-wrap">
                                        <div
                                            class="avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10">
                                            <div class="avatar avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path d="M128,128h24a40,40,0,0,1,0,80H128Z" opacity="0.2" />
                                                    <path d="M128,48H112a40,40,0,0,0,0,80h16Z" opacity="0.2" />
                                                    <line x1="128" y1="24" x2="128" y2="48" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <line x1="128" y1="208" x2="128" y2="232" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <path
                                                        d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                </svg>
                                            </div>
                                        </div>
                                    <div class="lh-1">
                                        <span class="d-block mb-2 fs-11 text-muted">Trading balance</span>
                                        <h4 class="mb-1 fw-semibold fs-20">${{ number_format($trading, 2) }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Balance Analysis</div>
                            </div>
                            <div class="card-body">
                                <div id="area-spline"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card card-bg-success crypto-card py-2">
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-start">
                            <span class="avatar avatar-lg p-2 svg-white bg-white-transparent shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path d="M224,80V192a8,8,0,0,1-8,8H56a16,16,0,0,1-16-16V56A16,16,0,0,0,56,72H216A8,8,0,0,1,224,80Z" opacity="0.2"></path>
                                    <path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm0,128H56a8,8,0,0,1-8-8V78.63A23.84,23.84,0,0,0,56,80H216Zm-48-60a12,12,0,1,1,12,12A12,12,0,0,1,168,132Z">
                                    </path>
                                </svg> </span>
                            <div>
                                <span class="text-fixed-white op-8">Wallet Overview</span>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-16 text-fixed-white show" data-bs-toggle="dropdown" aria-expanded="true"> USD</a>
                                </div>
                            </div>
                        </div>
                        <hr class="text-fixed-white op-1">
                        <div>
                            <span class="text-fixed-white op-8">My Balance</span>
                            <h4 class="fw-semibold d-block text-fixed-white mt-2">{{ number_format($total, 2) }}<sub class="fs-12 ms-2 op-8 d-inline-flex">USD</sub></h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <div class="text-center p-2 my-2 bg-white-transparent rounded">
                                    <div class="d-flex">
                                        <!-- <span class="avatar avatar-sm bg-dark avatar-rounded me-2 svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                <path d="M192,168a40,40,0,0,1-40,40H128V128h24A40,40,0,0,1,192,168ZM112,48a40,40,0,0,0,0,80h16V48Z" opacity="0.2"></path>
                                                <path d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z">
                                                </path>
                                            </svg>
                                        </span> -->
                                        <span class="fs-10">Today's Profit</span>
                                    </div>
                                    <div class="d-flex">
                                        <span class="fs-18 fw-semibold text-start">0.00 USD</span>
                                    </div>
                                    <div class="mt-1">  </div>
                                </div>
                            </div>
                        </div>
                        <div id="engaged-users" class="mb-3" style="min-height: 40px;"><div id="apexchartsck4vlp4l" class="apexcharts-canvas apexchartsck4vlp4l apexcharts-theme-light" style="width: 280px; height: 40px;"><svg id="SvgjsSvg2201" width="280" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="280" height="40"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 20px;"></div></foreignObject><rect id="SvgjsRect2205" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2246" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2203" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2202"><clipPath id="gridRectMaskck4vlp4l"><rect id="SvgjsRect2207" width="286" height="42" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskck4vlp4l"></clipPath><clipPath id="nonForecastMaskck4vlp4l"></clipPath><clipPath id="gridRectMarkerMaskck4vlp4l"><rect id="SvgjsRect2208" width="284" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2213" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2214" stop-opacity="0.2" stop-color="rgba(255,255,255)" offset="0"></stop><stop id="SvgjsStop2215" stop-opacity="1" stop-color="rgba(255,255,255)" offset="0.9"></stop><stop id="SvgjsStop2216" stop-opacity="0.2" stop-color="rgba(255,255,255)" offset="1"></stop></linearGradient><filter id="SvgjsFilter2218" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2219" flood-color="rgba(255,255,255)" flood-opacity="0.3" result="SvgjsFeFlood2219Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2220" in="SvgjsFeFlood2219Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2220Out"></feComposite><feOffset id="SvgjsFeOffset2221" dx="0" dy="3" result="SvgjsFeOffset2221Out" in="SvgjsFeComposite2220Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2222" stdDeviation="3 " result="SvgjsFeGaussianBlur2222Out" in="SvgjsFeOffset2221Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2223" result="SvgjsFeMerge2223Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2224" in="SvgjsFeGaussianBlur2222Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2225" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2226" in="SourceGraphic" in2="SvgjsFeMerge2223Out" mode="normal" result="SvgjsFeBlend2226Out"></feBlend></filter></defs><line id="SvgjsLine2206" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2227" class="apexcharts-grid"><g id="SvgjsG2228" class="apexcharts-gridlines-horizontal" style="display: none;"></g><g id="SvgjsG2229" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2232" x1="0" y1="40" x2="280" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2231" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2230" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG2209" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2210" class="apexcharts-series" seriesName="Value" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2217" d="M 0 37.33333333333333C 12.25 37.33333333333333 22.75 29.333333333333332 35 29.333333333333332C 47.25 29.333333333333332 57.75 36 70 36C 82.25 36 92.75 22.666666666666664 105 22.666666666666664C 117.25 22.666666666666664 127.75 26.666666666666668 140 26.666666666666668C 152.25 26.666666666666668 162.75 9.333333333333336 175 9.333333333333336C 187.25 9.333333333333336 197.75 36 210 36C 222.25 36 232.75 16 245 16C 257.25 16 267.75 22.666666666666664 280 22.666666666666664" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient2213)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskck4vlp4l)" filter="url(#SvgjsFilter2218)" pathTo="M 0 37.33333333333333C 12.25 37.33333333333333 22.75 29.333333333333332 35 29.333333333333332C 47.25 29.333333333333332 57.75 36 70 36C 82.25 36 92.75 22.666666666666664 105 22.666666666666664C 117.25 22.666666666666664 127.75 26.666666666666668 140 26.666666666666668C 152.25 26.666666666666668 162.75 9.333333333333336 175 9.333333333333336C 187.25 9.333333333333336 197.75 36 210 36C 222.25 36 232.75 16 245 16C 257.25 16 267.75 22.666666666666664 280 22.666666666666664" pathFrom="M -1 56 L -1 56 L 35 56 L 70 56 L 105 56 L 140 56 L 175 56 L 210 56 L 245 56 L 280 56" fill-rule="evenodd"></path><g id="SvgjsG2211" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2250" r="0" cx="0" cy="0" class="apexcharts-marker wgpj0tnic no-pointer-events" stroke="#ffffff" fill="rgba(255,255,255)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2212" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2233" x1="0" y1="0" x2="280" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2234" x1="0" y1="0" x2="280" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2235" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2236" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2247" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2248" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2249" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    </div>
                </div>
                <div class="card custom-card bg-dark py-2">
                    <div class="card-body p-4">
                        <div class="">
                            <div class="text-fixed-white mb-2">Ledger Balance<span class="ms-2 d-inline-block text-fixed-white op-5"><i class="fe fe-arrow-up-right"></i>0.25%</span>
                            </div>
                            <h4 class="fw-semibold mb-0 text-fixed-white">40.32 <sub class="fs-12 op-8 d-inline-flex">USD</sub></h4>
                        </div>
                        <div id="engaged-users" class="mb-3" style="min-height: 40px;"><div id="apexchartsck4vlp4l" class="apexcharts-canvas apexchartsck4vlp4l apexcharts-theme-light" style="width: 280px; height: 40px;"><svg id="SvgjsSvg2201" width="280" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="280" height="40"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 20px;"></div></foreignObject><rect id="SvgjsRect2205" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2246" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2203" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2202"><clipPath id="gridRectMaskck4vlp4l"><rect id="SvgjsRect2207" width="286" height="42" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskck4vlp4l"></clipPath><clipPath id="nonForecastMaskck4vlp4l"></clipPath><clipPath id="gridRectMarkerMaskck4vlp4l"><rect id="SvgjsRect2208" width="284" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2213" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2214" stop-opacity="0.2" stop-color="rgba(255,255,255)" offset="0"></stop><stop id="SvgjsStop2215" stop-opacity="1" stop-color="rgba(255,255,255)" offset="0.9"></stop><stop id="SvgjsStop2216" stop-opacity="0.2" stop-color="rgba(255,255,255)" offset="1"></stop></linearGradient><filter id="SvgjsFilter2218" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2219" flood-color="rgba(255,255,255)" flood-opacity="0.3" result="SvgjsFeFlood2219Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2220" in="SvgjsFeFlood2219Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2220Out"></feComposite><feOffset id="SvgjsFeOffset2221" dx="0" dy="3" result="SvgjsFeOffset2221Out" in="SvgjsFeComposite2220Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2222" stdDeviation="3 " result="SvgjsFeGaussianBlur2222Out" in="SvgjsFeOffset2221Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2223" result="SvgjsFeMerge2223Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2224" in="SvgjsFeGaussianBlur2222Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2225" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2226" in="SourceGraphic" in2="SvgjsFeMerge2223Out" mode="normal" result="SvgjsFeBlend2226Out"></feBlend></filter></defs><line id="SvgjsLine2206" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2227" class="apexcharts-grid"><g id="SvgjsG2228" class="apexcharts-gridlines-horizontal" style="display: none;"></g><g id="SvgjsG2229" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2232" x1="0" y1="40" x2="280" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2231" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2230" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG2209" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2210" class="apexcharts-series" seriesName="Value" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2217" d="M 0 37.33333333333333C 12.25 37.33333333333333 22.75 29.333333333333332 35 29.333333333333332C 47.25 29.333333333333332 57.75 36 70 36C 82.25 36 92.75 22.666666666666664 105 22.666666666666664C 117.25 22.666666666666664 127.75 26.666666666666668 140 26.666666666666668C 152.25 26.666666666666668 162.75 9.333333333333336 175 9.333333333333336C 187.25 9.333333333333336 197.75 36 210 36C 222.25 36 232.75 16 245 16C 257.25 16 267.75 22.666666666666664 280 22.666666666666664" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient2213)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskck4vlp4l)" filter="url(#SvgjsFilter2218)" pathTo="M 0 37.33333333333333C 12.25 37.33333333333333 22.75 29.333333333333332 35 29.333333333333332C 47.25 29.333333333333332 57.75 36 70 36C 82.25 36 92.75 22.666666666666664 105 22.666666666666664C 117.25 22.666666666666664 127.75 26.666666666666668 140 26.666666666666668C 152.25 26.666666666666668 162.75 9.333333333333336 175 9.333333333333336C 187.25 9.333333333333336 197.75 36 210 36C 222.25 36 232.75 16 245 16C 257.25 16 267.75 22.666666666666664 280 22.666666666666664" pathFrom="M -1 56 L -1 56 L 35 56 L 70 56 L 105 56 L 140 56 L 175 56 L 210 56 L 245 56 L 280 56" fill-rule="evenodd"></path><g id="SvgjsG2211" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2250" r="0" cx="0" cy="0" class="apexcharts-marker wgpj0tnic no-pointer-events" stroke="#ffffff" fill="rgba(255,255,255)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2212" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2233" x1="0" y1="0" x2="280" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2234" x1="0" y1="0" x2="280" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2235" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2236" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2247" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2248" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2249" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Start:: row-2 -->
            <div class="row">
                <div class="col-xxl-12 col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Transactions 
                            </div>
                            <div class="d-flex flex-wrap gap-2"> 
                                <div class="dropdown"> 
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> 
                                    </a> 
                                    <ul class="dropdown-menu" role="menu"> 
                                        <li><a class="dropdown-item" href="{{ request()->offsetExists('pending') }}">New</a></li> 
                                        <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li> 
                                        <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li> 
                                        @if(request()->offsetExists('active'))
                                            <li class="breadcrumb-item"><a href="{{ route('savings') }}">Savings</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Active</li>
                                        @elseif(request()->offsetExists('pending'))
                                            <li class="breadcrumb-item"><a href="{{ route('savings') }}">Savings</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Pending</li>
                                        @elseif(request()->offsetExists('cancelled'))
                                            <li class="breadcrumb-item"><a href="{{ route('savings') }}">Savings</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Cancelled</li>
                                        @elseif(request()->offsetExists('settled'))
                                            <li class="breadcrumb-item"><a href="{{ route('savings') }}">Savings</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Settled</li>
                                        @else
                                            <li class="breadcrumb-item active" aria-current="page">Savings</li>
                                        @endif
                                    </ul> 
                                </div> 
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Amount</th>
                                            <th>Account</th>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($transactions as $key=>$transaction)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>${{ number_format($transaction['amount'], 2) }}</td>
                                                <td>
                                                    @if($transaction['account_type'] == 'trading')
                                                        <span class="badge bg-dark-transparent">Trading</span>
                                                    @elseif($transaction['account_type'] == 'savings')
                                                        <span class="badge bg-info-transparent">Savings</span>
                                                    @elseif($transaction['account_type'] == 'investment')
                                                        <span class="badge bg-primary-transparent">Investment</span>
                                                    @endif
                                                </td>
                                                <td>{{ $transaction['description'] }}</td>
                                                <td>
                                                    @if($transaction['type'] == 'deposit')
                                                        <span class="badge bg-success-transparent"><i class="ri-check-fill align-middle me-1"></i>Credit</span>
                                                    @elseif($transaction['type'] == 'withdrawal')
                                                        <span class="badge bg-danger-transparent"><i class="ri-info-fill align-middle me-1"></i>Debit</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($transaction['status'] == 'approved')
                                                        <span class="badge bg-success-transparent"><i class="ri-check-fill align-middle me-1"></i>Approved</span>
                                                    @elseif($transaction['status'] == 'pending')
                                                        <span class="badge bg-warning-transparent"><i class="ri-info-fill align-middle me-1"></i>Pending</span>
                                                    @elseif($transaction['status'] == 'decline')
                                                        <span class="badge bg-danger-transparent"><i class="ri-close-fill align-middle me-1"></i>Decline</span>
                                                    @endif
                                                </td>
                                                <td>{{ $transaction['created_at']->format('M d, Y \a\t h:i A') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                        @if($transactions->count() == 0)
                                            <tr>
                                                <p class="py-4 text-center">
                                                    No Transactions...
                                                </p>
                                            </tr>
                                        @endif

                                        <div class="card-footer border-top-0">
                                            <div class="d-flex align-items-center">
                                                <div> Showing {{ $transactions->count() }} of {{ $transactions->total() }} Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                                <div class="ms-auto">
                                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                                        {{ $transactions->links() }}
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-2 -->
    </div>
</div>
<!-- End::app-content -->

<div class="modal fade" id="nairaDepositModal" tabindex="-1" role="dialog" aria-labelledby="nairaDepositModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ route('deposit') }}" id="depositForm">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="nairaDepositModalLabel">Deposit</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="amountDeposit" class="form-label">Amount</label>
                        <input type="number" value="{{ old('amount') }}" required style="height: 45px; font-size: 14px" step="any" class="form-control" name="amount" id="amountDeposit" placeholder="Amount">
                        @error('amount')
                            <strong class="small text-danger">
                                {{ $message }}
                            </strong>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="paymentDeposit">Payment Method</label>
                        <select onchange="checkbutton()" name="payment" style="height: 45px; font-size: 14px" class="form-control" required id="paymentDeposit">
                            <!-- <option value="card">Card</option> -->
                            <option value="deposit">Bank Transfer / Deposit</option>
                        </select>
                        @error('payment')
                            <strong class="small text-danger">
                                {{ $message }}
                            </strong>
                        @enderror
                    </div> --}}
                    <div class="form-group my-4">
                        <input type="hidden" name="type" value="deposit">
                        <label for="paymentDeposit" class="form-label">Account Type</label>
                        <select name="account_type" style="height: 45px; font-size: 14px" class="form-control text-dark" required id="paymentDeposit">
                            <option value="">Select Account</option>
                            <option value="savings">Savings</option>
                            <option value="investment">Investments</option>
                            <option value="trading">Trade</option>
                        </select>
                        @error('payment')
                            <strong class="small text-danger">
                                {{ $message }}
                            </strong>
                        @enderror
                    </div>
                </div>
                <div id="securedByPaystackLogo" style="display: none" class="mx-auto text-center">
                    <img src="{{ asset('assets/images/paystack.png') }}" class="img-fluid mb-3" alt="Secured-by-paystack">
                </div>
                <div id="bankDetailsForDepositForm" class="alert mx-3 alert-primary">
                    <table>
                        <tr>
                            <td>Bank Name:</td>
                            <td><span class="ml-3"><strong>{{ \App\Models\Setting::all()->first()['bank_name'] }}</strong></span></td>
                        </tr>
                        <tr>
                            <td>Account Name:</td>
                            <td><span class="ml-3"><strong>{{ \App\Models\Setting::all()->first()['account_name'] }}</strong></span></td>
                        </tr>
                        <tr>
                            <td>Account Number:</td>
                            <td><span class="ml-3"><strong>{{ \App\Models\Setting::all()->first()['account_number'] }}</strong></span></td>
                        </tr>
                    </table>

                    <div class="mt-4">
                        <p class="text-muted"><strong>Note:</strong> Make sure to send the correct amount</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" id="transfer" onclick="confirmFormSubmit('depositForm')" class="btn btn-primary" style="display: none;">Deposit</button> -->
                    <button type="submit" id="card"  class="btn btn-success">Deposit</button>
                    <!-- <button type="button" id="card" onclick="payWithMonnify()" class="btn btn-success">Deposit</button> -->
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="nairaWithdrawalModal" tabindex="-1" role="dialog" aria-labelledby="nairaWithdrawalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nairaWithdrawalModalLabel">Withdrawal</h5>
            </div>
            <form method="POST" action="{{ route('withdraw') }}" id="withdrawalForm">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="amountWithdraw">Amount</label>
                            <input type="number" required value="{{ old('amount') }}" style="height: 45px; font-size: 14px" step="any" class="form-control" name="amount" id="amountWithdraw" placeholder="Amount">
                            @error('amount')
                            <strong class="small text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="hidden" name="type" value="deposit">
                            <label for="paymentDeposit" class="form-label">Account Type</label>
                            <select name="account_type" style="height: 45px; font-size: 14px" class="form-control text-dark" required id="paymentDeposit">
                                <option value="">Select Account</option>
                                <option value="savings">Savings</option>
                                <option value="investment">Investments</option>
                                <option value="trading">Trade</option>
                            </select>
                            @error('payment')
                                <strong class="small text-danger">
                                    {{ $message }}
                                </strong>
                            @enderror
                        </div>
                    <div class="small text-info mt-2">Your withdrawal will be paid to the account details</div>
                    <div class="alert alert-primary my-2">
                        <table>
                            <tr>
                                <td>Bank Name:</td>
                                <td><span class="ml-3">{{ auth()->user()['bank_name'] }}</span></td>
                            </tr>
                            <tr>
                                <td>Account Name:</td>
                                <td><span class="ml-3">{{ auth()->user()['account_name'] }}</span></td>
                            </tr>
                            <tr>
                                <td>Account Number:</td>
                                <td><span class="ml-3">{{ auth()->user()['account_number'] }}</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="small text-primary">
                        <a class="text-warning" href="{{ route('profile') }}">
                            Change Acconunt Details
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    @if(\App\Models\Setting::all()->first()['withdrawal'] == 1)
                        <button type="submit" class="btn btn-primary">Process Withdrawal</button>
                    @else
                        <button type="button" disabled class="btn btn-secondary">Unavailable</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('asset/libs/apexcharts/apexcharts.min.js') }}"></script>
<script>
    var options = {
        series: [{
            name: 'Savings',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'Investments',
            data: [11, 32, 45, 32, 34, 52, 41]
        },
        {
            name: 'Trading',
            data: [0, 0, 5, 22, 64, 14, 86]
        }
        ],
        chart: {
            height: 320,
            type: 'area'
        },
        colors: ["#8274ff", "#ff6937", "#58c437"],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        grid: {
            borderColor: '#f2f5f7',
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"],
            labels: {
                show: true,
                style: {
                    colors: "#8c9097",
                    fontSize: '11px',
                    fontWeight: 600,
                    cssClass: 'apexcharts-xaxis-label',
                },
            }
        },
        yaxis: {
            labels: {
                show: true,
                style: {
                    colors: "#8c9097",
                    fontSize: '11px',
                    fontWeight: 600,
                    cssClass: 'apexcharts-xaxis-label',
                },
            }
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };
    var chart = new ApexCharts(document.querySelector("#area-spline"), options);
    chart.render();
</script>
@endsection