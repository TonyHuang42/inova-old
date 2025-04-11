@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')
@push('styles')
    <style>
        hr {
            border-top: 1px solid black;
            margin: 50px 0 !important;
        }

        p {
            margin-bottom: 0px;
        }

        .spec-type {
            font-size: 24px;
            font-weight: 600;
        }

        .spec-title {
            font-weight: 600;
        }

        .row {
            --bs-gutter-y: 24px;
        }

        #phone-nav-container {
            background-color: #232323;
            position: relative;
            width: 100%;
            z-index: 999;
            transition: top 0.3s ease-in-out;
        }

        #phone-nav-container.fixed {
            position: fixed;
            top: 0;
            left: 0;
        }
    </style>
@endpush

@section('content')
    @include('inc.phone-nav')

    <div class="spec">
        <div class="container">
            <div class="section-padding-sm">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <h3>Specifications</h3>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Storage and Memory</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Memory</div>
                                <p>3GB</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Storage</div>
                                <p>32GB</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">External Storage</div>
                                <p>microSD Card(Up to 512GB)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Technical Details</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-12">
                                <!-- <div class="spec-title">152mm x 74mm x 11.4mm</div> -->
                                <!-- <p></p> -->
                                <img src="img/spec/spec_size_drawing.png" alt="" class="img-fluid" style="max-height: 670px;">
                                <div class="disclaimer">*Measurements are approximate; results may vary.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Display</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Screen Size</div>
                                <p>5.45 inch</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Resolution</div>
                                <p>480 x 960</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Refresh Rate</div>
                                <p>60Hz</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Technology</div>
                                <p>TFT LCD</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Chip</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Processor</div>
                                <p>Mediatek Helio A22 MT6761</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">CPU</div>
                                <p>Quad-Core with Arm Cortex-A53</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">CPU Frequency</div>
                                <p>2GHz</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">GPU</div>
                                <p>IMG PowerVR GE8300</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Camera</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Rear Camera</div>
                                <p>5MP with LED</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Front Camera</div>
                                <p>2MP</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Connectivity</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">USB Interface</div>
                                <p>USB-C</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">USB Version</div>
                                <p>USB 2.0</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Wi-Fi</div>
                                <p>802.11a/b/g/n/ac</p>
                                <p>2.4GHz + 5GHz</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Bluetooth Version</div>
                                <p>5.2</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Audio Jack</div>
                                <p>3.5mm</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Location</div>
                                <p style="overflow-wrap: break-word;">GPS/<wbr>BDS/<wbr>Glonass/<wbr>Galileo</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Network</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">2G</div>
                                <p>B2/B3/B5/B8</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">3G</div>
                                <p>B1/B2/B4/B5/B8</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">4G</div>
                                <p style="overflow-wrap: break-word;">B1/<wbr>B2/<wbr>B3/<wbr>B4/<wbr>B5/<wbr>B7/<wbr>B8/<wbr>B12/
                                    <wbr>B17/<wbr>B20/<wbr>B25/<wbr>B26/<wbr>B34/<wbr>B38/<wbr>B39/<wbr>B40/<wbr>B41/<wbr>B66/<wbr>B71
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Battery</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Battery Capacity</div>
                                <p>2500mAh</p>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Replaceable</div>
                                <p>Yes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">Operating System</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Android 14</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">SIM Cards</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Dual SIM</div>
                                <p>Micro-SIM and Nano-SIM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">System Requirement</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Google Account (required for some features)</div>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Internet Access</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="spec-type">In the Box</div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-6">
                                <div class="spec-title">Northlight</div>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Power Adaptor (5W)</div>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">USB-C Charge Cable (1m)</div>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">3.5mm Earphones with Mic and Control</div>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">User Manual</div>
                            </div>
                            <div class="col-6">
                                <div class="spec-title">Warranty Card</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("scroll", () => {
            const navbar = document.getElementById("phone-nav-container");
            const spec = document.querySelector(".spec");
            const scrollPosition = window.scrollY || document.documentElement.scrollTop;

            if (scrollPosition > 50) {
                navbar.classList.add("fixed");
                spec.style.paddingTop = "50px";
            } else {
                navbar.classList.remove("fixed");
                spec.style.paddingTop = "0px";
            }
        });
    </script>
@endpush
