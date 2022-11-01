@extends('layouts.main')
@section('content')
    <!-- <div class="chakra-container css-153i0fw">
        <div class="css-tkjpxd">
            <div class="css-pw1me0">
                <h2 class="chakra-heading css-1b1ehjh">ABOUT US</h2>
            </div>
        </div>
    </div> -->
    <div class="chakra-container css-n759ug">
        <div class="css-1bqt0w9">
            <div class="css-ldihrc" style="justify-content:center; align-items:center; display:flex;">
                <button type="button" class="chakra-button css-nu2dlx">About Us</button>
            </div>
            <div class="chakra-stack css-1cfdqq0">
                <div class="css-gmuwbf">
                    </div>
                    <img alt="Screening Indonesia" src="{{ $About->image }}" class="chakra-image css-1p9qqnd">
            </div>
        </div>
        <h2 class="chakra-heading css-12d46le">{{ $About->title }}</h2>
        <p class="chakra-text css-tpvos8" text-justify="inter-word">{!! $About->description !!}</p>
    </div>
    <!-- ============================================================================================================================ -->

    <div class="chakra-container css-n759ug mb-4">
        <div class="" style="justify-content:center; align-items:center; display:flex;">
            @foreach($Ourteam as $item)
                <div class="chakra-stack css-6ryjmt">
                    <!-- <div class="css-17ht4ld" align="center"> -->
                    <div class="" align="center">
                        <img alt="" src="{{ url($item->image) }}" class="chakra-image css-1fzn27e">
                    </div>
                    <div class="chakra-stack css-1vr2anf">
                        <div class="css-wt5l11">
                            <p class="chakra-text css-1k1vewa">{{ $item->name }}</p>
                            <p class="chakra-text css-1x3cxaj">{{ $item->position}}</p>
                        </div>
                        <div class="chakra-stack__divider css-15sliu"></div>
                        <p class="chakra-text css-0">{{ $item->position}} Screening Indonesia</p>
                        <div class="chakra-stack__divider css-15sliu"></div>
                        <button type="button" class="chakra-button css-e5a8s0" data-toggle="modal" data-target="#getDataOutTeamModal{{ $item->id }}">Read More</button>
                    </div>
                </div>
                <!-- Data out team Modal-->
                <div class="modal fade" id="getDataOutTeamModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Our Team</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-8" style="padding-left: 45px;">
                                    <p><h3> {{$item->name}}</h3></p>
                                    <p><h6> {{$item->position}}</h6></p>
                                    <hr>
                                    <p maxresults="10">{!! $item->description !!}</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ url('assets/images/screening-indonesia/our-team/logolci.png') }}" style="position: absolute; opacity:0.25;width:90%;">
                                    <div align="right">
                                        <img src="{{ $item->image }}" alt="User Pic" width="120" style="position: relative; top;">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal" style="background-color: rgb(33, 156, 189);">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data out team Modal-->
            @endforeach
        </div>
        <!-- <div class="css-9wu79o">
            @foreach($Ourteam as $item)
                <div class="chakra-stack css-6ryjmt">
                    <div class="" align="center">
                        <img alt="" src="{{ url($item->image) }}" class="chakra-image css-1fzn27e">
                    </div>
                    <div class="chakra-stack css-1vr2anf">
                        <div class="css-wt5l11">
                            <p class="chakra-text css-1k1vewa">{{ $item->name }}</p>
                            <p class="chakra-text css-1x3cxaj">{{ $item->position}}</p>
                        </div>
                        <div class="chakra-stack__divider css-15sliu"></div>
                        <p class="chakra-text css-0">{{ $item->position}} Screening Indonesia</p>
                        <div class="chakra-stack__divider css-15sliu"></div>
                        <button type="button" class="chakra-button css-e5a8s0" data-toggle="modal" data-target="#getDataOutTeamModal{{ $item->id }}">Read More</button>
                    </div>
                </div>
                <div class="modal fade" id="getDataOutTeamModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Our Team</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-8" style="padding-left: 45px;">
                                    <p><h3> {{$item->name}}</h3></p>
                                    <p><h6> {{$item->position}}</h6></p>
                                    <hr>
                                    <p maxresults="10">{!! $item->description !!}</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ url('assets/images/screening-indonesia/our-team/logolci.png') }}" style="position: absolute; opacity:0.25;width:90%;">
                                    <div align="right">
                                        <img src="{{ $item->image }}" alt="User Pic" width="120" style="position: relative; top;">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal" style="background-color: rgb(33, 156, 189);">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> -->
    </div>
@endsection