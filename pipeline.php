<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PIPELINE</h1>
        </div>
        <!-- สถิติ -->
        <div id="stat" class="col-12 mt-3">
            <div class="box bg-p0">
                <div class="row text-center">
                    <div class="col-12 ">
                        <!-- <span class="badge badge-light" id="p1_val"></span> -->
                        <span class="text-p-number text-white" id="p0_val"></span>
                    </div>
                    <div class="col-12 text-p text-white">
                        P0: OOS
                    </div>
                </div>
            </div>
            <div class="box bg-p1">
                <div class="row text-center">
                    <div class="col-12 ">
                        <!-- <span class="badge badge-light" id="p1_val"></span> -->
                        <span class="text-p-number" id="p1_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P1: SEVERE
                    </div>
                </div>
            </div>
            <div class="box bg-p2">
                <div class="row text-center">
                    <div class="col-12">
                        <!-- <span class="badge badge-light" id="p2_val"></span> -->
                        <span class="text-p-number" id="p2_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P2: MAJOR
                    </div>
                </div>
            </div>
            <div class="box bg-p3">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="p3_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P3: MODERATE
                    </div>
                    
                </div>
            </div>
            <div class="box bg-p4">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="p4_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P4: MINOR
                    </div> 
                </div>
            </div>
            <div class="box bg-p5">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="p5_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P5: INSIGNIFICANT
                    </div>
                </div>
            </div>
            <div class="box bg-p6">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="p6_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P6: GOOD CONDITION
                    </div>
                </div>
            </div>
            <div class="box bg-noins">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="noinspect_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        NEVER INSPECTED
                    </div>
                </div>
            </div>
            <div class="box bg-total">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number text-white" id="total_val"></span>
                    </div>
                    <div class="col-12 text-p text-white">
                        TOTAL
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-form shadow">
    <table style="position: absolute; top: 20px; left: 20px;">
        <tr>
            <td>
                <div style="width: 18px; height: 18px; background-color: #000;"></div>
            </td>
            <td>
                Phase 1
            </td>
        </tr>
        <tr>
            <td>
                <div style="width: 18px; height: 18px; background-color: rgb(247,212,89);"></div>
            </td>
            <td>
                Phase 2
            </td>
        </tr>
        <tr>
            <td>
                <div style="width: 18px; height: 18px; background-color: rgb(47,100,177);"></div>
            </td>
            <td>
                Phase 3
            </td>
        </tr>
        <tr>
            <td>
                <div style="width: 18px; height: 18px; background-color: rgb(80,165,90);"></div>
            </td>
            <td>
                Phase 4
            </td>
        </tr>
        <tr>
            <td>
                <div style="width: 18px; height: 18px; background-color: rgb(214,55,43);"></div>
            </td>
            <td>
                Phase 5
            </td>
        </tr>
        <tr>
            <td>
                <div style="width: 18px; height: 18px; background-color: rgb(137,129,86);"></div>
            </td>
            <td>
                Phase 6
            </td>
        </tr>
        <tr>
            <td>
                <div style="width: 18px; height: 18px; background-color: rgb(182,46,123);"></div>
            </td>
            <td>
                Phase 7
            </td>
        </tr>
    </table>
    <svg id="main" height="750" width="1480" style="margin-top: 25px;">

    <!-- MRP -->
    <image href="img/_platform.svg" x="450" y="150" class="platform-df" id="mrp-platform"></image>
    <text class="platform-txt" x="463" y="150">MRP</text>
    <!-- MDPP -->
    <image href="img/_platform_1.svg" x="570" y="200" class="platform-lg" id="mdpp-platform"></image>
    <text class="platform-txt" x="588" y="200">MDPP</text>
    <!-- MDLQ -->
    <image href="img/_platform_1.svg" x="660" y="220" class="platform-df" id="mdlq-platform"></image>
    <text class="platform-txt" x="671" y="220">MDLQ</text>
    <!-- MDD -->
    <image href="img/_platform_1.svg" x="740" y="100" class="platform-df" id="mdd-platform"></image>
    <text class="platform-txt" x="753" y="100">MDD</text>
    <!-- MDE -->
    <image href="img/_platform_2.svg" x="800" y="220" class="platform-df" id="mde-platform"></image>
    <text class="platform-txt" x="813" y="220">MDE</text>
    <!-- MDG -->
    <image href="img/_platform_5.svg" x="700" y="330" class="platform-df" id="mdg-platform"></image>
    <text class="platform-txt" x="713" y="330">MDG</text>
    <!-- TJA -->
    <image href="img/_platform_4.svg" x="920" y="160" class="platform-df" id="tja-platform"></image>
    <text class="platform-txt" x="933" y="160">TJA</text>
    <!-- MDH -->
    <image href="img/_platform_7.svg" x="820" y="30" class="platform-df phase_7" id="mdh-platform"></image>
    <text class="platform-txt phase_7" x="833" y="30">MDH</text>
    <!-- MDA -->
    <image href="img/_platform_1.svg" x="510" y="170" class="platform-df" id="mda-platform"></image>
    <text class="platform-txt" x="523" y="170">MDA</text>
    <!-- MDC -->
    <image href="img/_platform_1.svg" x="300" y="150" class="platform-df" id="mdc-platform"></image>
    <text class="platform-txt" x="313" y="150">MDC</text>
    <!-- MDB -->
    <image href="img/_platform_1.svg" x="350" y="260" class="platform-df" id="mdb-platform"></image>
    <text class="platform-txt" x="363" y="260">MDB</text>
    <!-- MDF -->
    <image href="img/_platform_3.svg" x="450" y="330" class="platform-df" id="mdf-platform"></image>
    <text class="platform-txt" x="463" y="330">MDF</text>
    <!-- MLA -->
    <image href="img/_platform_7.svg" x="310" y="400" class="platform-df phase_7" id="mla-platform"></image>
    <text class="platform-txt phase_7" x="323" y="400">MLA</text>
    <!-- TPA -->
    <image href="img/_platform_3.svg" x="190" y="350" class="platform-df" id="tpa-platform"></image>
    <text class="platform-txt" x="203" y="350">TPA</text>
    <!-- TPB -->
    <image href="img/_platform_5.svg" x="100" y="470" class="platform-df" id="tpb-platform"></image>
    <text class="platform-txt" x="113" y="470">TPB</text>
    <!-- AMA -->
    <image href="img/_platform_3.svg" x="520" y="450" class="platform-df" id="ama-platform"></image>
    <text class="platform-txt" x="533" y="450">AMA</text>
    <!-- JSC -->
    <image href="img/_platform_7.svg" x="630" y="550" class="platform-df phase_7" id="jsc-platform"></image>
    <text class="platform-txt phase_7" x="643" y="550">JSC</text>
    <!-- JKC -->
    <image href="img/_platform_6.svg" x="1150" y="200" class="platform-df phase_6" id="jkc-platform"></image>
    <text class="platform-txt phase_6" x="1165" y="200">JKC</text>
    <!-- JKD -->
    <image href="img/_platform_6.svg" x="1030" y="280" class="platform-df phase_6" id="jkd-platform"></image>
    <text class="platform-txt phase_6" x="1045" y="280">JKD</text>
    <!-- JKA -->
    <image href="img/_platform_1.svg" x="930" y="380" class="platform-df" id="jka-platform"></image>
    <text class="platform-txt" x="943" y="380">JKA</text>
    <!-- JKB -->
    <image href="img/_platform_2.svg" x="800" y="480" class="platform-df" id="jkb-platform"></image>
    <text class="platform-txt" x="813" y="480">JKB</text>
    <!-- MTA -->
    <image href="img/_platform_3.svg" x="950" y="550" class="platform-df" id="mta-platform"></image>
    <text class="platform-txt" x="963" y="550">MTA</text>
    <!-- ADA -->
    <image href="img/_platform_4.svg" x="1150" y="380" class="platform-df" id="ada-platform"></image>
    <text class="platform-txt" x="1163" y="380">ADA</text>
    <!-- ADE -->
    <image href="img/_platform_6.svg" x="1140" y="450" class="platform-df phase_6" id="ade-platform"></image>
    <text class="platform-txt phase_6" x="1153" y="450" >ADE</text>
    <!-- ADC -->
    <image href="img/_platform_6.svg" x="1060" y="550" class="platform-df phase_6" id="adc-platform"></image>
    <text class="platform-txt phase_6" x="1073" y="550">ADC</text>
    <!-- ADD -->
    <image href="img/_platform_6.svg" x="1180" y="640" class="platform-df phase_6" id="add-platform"></image>
    <text class="platform-txt phase_6" x="1193" y="640">ADD</text>
    <!-- ADG -->
    <image href="img/_platform_7.svg" x="1320" y="640" class="platform-df phase_7" id="adg-platform"></image>
    <text class="platform-txt phase_7" x="1333" y="640">ADG</text>
    <!-- ADB -->
    <image href="img/_platform_4.svg" x="1300" y="510" class="platform-df" id="adb-platform"></image>
    <text class="platform-txt" x="1313" y="510">ADB</text>
    <!-- FSO -->
    <image href="img/fso.png" x="530" y="10" id="fso-platform" style="width: 130px;"></image>
    <text class="platform-txt" x="580" y="45">FSO</text>

    <!-- 42-PTT -->
    <path id="ptt-gas-pl" class="pipeline-line" d="M 230,50 C 230,50 485,80 465,680" stroke="#ccc" stroke-width="2" fill="none" class="pipeline-line" name="42-PTT" />
    <text x="500" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#ptt-gas-pl">
            42-PTT EXPORT GAS PIPELINE
        </textPath>
    </text>

    <!-- 24-TTM -->
    <path id="ttm-eva-pl" d="M 480,210 C 480,210 800,520 710,680" stroke="#ccc" stroke-width="2" fill="none" class="pipeline-line" name="24-TTM" />
    <text x="300" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#ttm-eva-pl">
            24-TTM EVA EXPORT PIPELINE
        </textPath>
    </text>

    <!-- 18-TPB-TPA -->
    <path id="tpb-tpa-o-rs" d="M 150,500 C 150,500 166,492 166,492 M 163.1,488.5 L 167,496" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="" />
    <path id="tpb-tpa-i-rs" d="M 215,421 C 215,421 215,405 215,405 M 211,421 L 219,421" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="" />
    <path id="tpb-tpa-pl" class="pipeline-line" d="M 170,490 C 170,490 210,470 215,425" stroke="gray" stroke-width="2" fill="none" name="18-TPB-TPA"  />
    <text x="7" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#tpb-tpa-pl" class="pipeline-line" name="18-TPB-TPA">
            18-TPB-TPA
        </textPath>
    </text>
    <text x="23" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#tpb-tpa-pl" class="pipeline-line" name="18-TPB-TPA">
            9.8 KM
        </textPath>
    </text>

    <!-- 18-TPA-MDB -->
    <path id="tpa-mdb-o-rs" d="M 240,390 C 240,390 250,380 257,374 M 253.2,371 L 260.2,378" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-08937" />
    <path id="tpa-mdb-i-rs" d="M 335,317.5 C 335,317.5 350,310 350,310 M 333.3,312.3 338,321" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-B31.8-03215" />
    <path id="tpa-mdb-pl" d="M 260.5,370 C 260.5,370 290,340 330,320" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-TPA-MDB" />
    <text x="7" class="text-pl" dy="-4" >
        <textPath alignment-baseline="after-edge" xlink:href="#tpa-mdb-pl" class="pipeline-line" name="18-TPA-MDB">
            18-TPA-MDB
        </textPath>
    </text>
    <text x="23" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#tpa-mdb-pl" class="pipeline-line" name="18-TPA-MDB">
            18.2 KM
        </textPath>
    </text>

    <!-- 16-MLA-MDF -->
    <path id="mla-mdf-pl" d="M 375,430 C 375,430 405,420 435,400" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_7" name="16-MLA-MDF" />
    <path id="mla-mdf-o-rs" d="M 355,435 C 355,435 367,434 370,432 M 367.5,427.5 L 371,437" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_7" name="" />
    <path id="mla-mdf-i-rs" d="M 440,397.5 C 440,397.5 450,392 457,387 M 438,393 443,402" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_7" name="" />
    <text x="-1" class="text-pl phase_7" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#mla-mdf-pl" class="pipeline-line" name="16-MLA-MDF">
            16-MLA-MDF
        </textPath>
    </text>
    <text x="12" class="text-pl phase_7" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#mla-mdf-pl" class="pipeline-line" name="16-MLA-MDF">
            17.3 KM
        </textPath>
    </text>

    <!-- 18-MDB-MDPP -->
    <path id="mdb-mdpp-pl" d="M 420,280 C 420,280 480,260 550,260" stroke="gray" stroke-width="2"
        fill="none" class="pipeline-line" name="18-MDB-MDPP" />
    <path id="mdb-mdpp-o-rs" d="M 395,290.5 C 395,290.5 405,284 414,281.5 M 412,278 L 415,286" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-03204" />
    <path id="mdb-mdpp-i-rs" d="M 556,260 C 556,260 575,260 575,260 M 556,256 L 556,264" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-PL1-1000" />
    <text x="25" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#mdb-mdpp-pl" class="pipeline-line" name="18-MDB-MDPP">
            18-MDB-MDPP
        </textPath>
    </text>
    <text x="50" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#mdb-mdpp-pl" class="pipeline-line" name="18-MDB-MDPP">
            8.2 KM
        </textPath>
    </text>

    <!-- 18-MDF-MDPP -->
    <path id="mdf-mdpp-pl" d="M 515,350 C 515,350 540,330 565,295" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-MDF-MDPP" />
    <path id="mdf-mdpp-o-rs" d="M 495,365 C 495,365 503,361 510,354 M 506,351 L 513,358" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-09214" />
    <path id="mdf-mdpp-i-rs" d="M 568,289 C 568,289 576,275 576,275 M 564.5,285.5 L 573,291" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-PL1-1458" />
    <text x="-1" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#mdf-mdpp-pl" class="pipeline-line" name="18-MDF-MDPP">
            18-MDF-MDPP
        </textPath>
    </text>
    <text x="20" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#mdf-mdpp-pl" class="pipeline-line" name="18-MDF-MDPP">
            7.2 KM
        </textPath>
    </text>

    <!-- 16-JSC-AMA -->
    <path id="jsc-ama-pl" d="M 550,520 C 550,520 580,562 610,580.5" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_7" name="16-JSC-AMA" />
    <path id="jsc-ama-o-rs" d="M 630,590 C 630,590 616,583 616,583 M 615,587 L 619,579" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_7" name="" />
    <path id="jsc-ama-i-rs" d="M 547.5,516 C 547.5,516 540,505 540,505 M 543,519 L 551,512" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_7" name="" />
    <text x="10" class="text-pl phase_7" dy="-4">
        <textPath alignment-baseline="text-after-edge" xlink:href="#jsc-ama-pl" class="pipeline-line" name="16-JSC-AMA">
            16-JSC-AMA
        </textPath>
    </text>
    <text x="23" class="text-pl phase_7" dy="3">
        <textPath alignment-baseline="text-before-edge" xlink:href="#jsc-ama-pl" class="pipeline-line" name="16-JSC-AMA">
            20.7 KM
        </textPath>
    </text>

    <!-- 18-AMA-MDF -->
    <path id="ama-mdf-pl" d="M 480,400 C 480,400 495,438 517,464" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-AMA-MDF" />
    <path id="ama-mdf-o-rs" d="M 527,480 C 527,480 520,470 520,470 M 517,473.5 L 524,468" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-10214" />
    <path id="ama-mdf-i-rs" d="M 479,395 C 479,395 478,385 478,385 M 475,395 L 483,393" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-B31.8-09242" />
    <text x="1" class="text-pl" dy="-4">
        <textPath alignment-baseline="text-after-edge" xlink:href="#ama-mdf-pl" class="pipeline-line" name="18-AMA-MDF">
            18-AMA-MDF
        </textPath>
    </text>
    <text x="18" class="text-pl" dy="3">
        <textPath alignment-baseline="text-before-edge" xlink:href="#ama-mdf-pl" class="pipeline-line" name="18-AMA-MDF">
            11.8 KM
        </textPath>
    </text>

    <!-- 18-MDC-MDPP -->
    <path id="mdc-mdpp-pl" d="M 370,200 C 370,200 450,235 550,245" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-MDC-MDPP" />
    <path id="mdc-mdpp-o-rs" d="M 345,185 C 345,185 350,190 365,197.5 M 367,193 L 361.5,201" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-04204" />
    <path id="mdc-mdpp-i-rs" d="M 555,245 C 555,245 575,245 575,245 M 555,241 L 555,249" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-PL1-1009" />
    <text x="35" class="text-pl" dy="-4">
        <textPath alignment-baseline="text-after-edge" xlink:href="#mdc-mdpp-pl" class="pipeline-line" name="18-MDC-MDPP">
            18-MDC-MDPP
        </textPath>
    </text>
    <text x="53" class="text-pl" dy="3">
        <textPath alignment-baseline="text-before-edge" xlink:href="#mdc-mdpp-pl" class="pipeline-line" name="18-MDC-MDPP">
            3.0 KM
        </textPath>
    </text>

    <!-- 12-MDH-MDD -->
    <path id="mdh-mdd-pl" d="M 800,130 C 800,130 820,125 845,100" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_7" name="12-MDH-MDD" />
    <path id="mdh-mdd-o-rs" d="M 850,85 C 850,85 847,95 847,95 M 843,92 L 851,96" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_7" name="" />
    <path id="mdh-mdd-i-rs" d="M 783,134 C 783,134 795,131 795,131 M 793,126 L 796,135" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_7" name="" />
    <text x="-2" class="text-pl phase_7" dy="-4" style="font-size: 9px; letter-spacing: 0px;" name="12-MDH-MDD">
        <textPath alignment-baseline="text-after-edge" xlink:href="#mdh-mdd-pl">
            12-MDH-MDD
        </textPath>
    </text>
    <text x="10" class="text-pl phase_7" dy="3">
        <textPath alignment-baseline="text-before-edge" xlink:href="#mdh-mdd-pl" class="pipeline-line" name="12-MDH-MDD">
            5.8 KM
        </textPath>
    </text>

    <!-- 18-MDD-MDPP -->
    <path id="mdd-mdpp-pl" d="M 640,180 C 640,180 670,155 720,143" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-MDD-MDPP" />
    <path id="mdd-mdpp-o-rs" d="M 745,138 C 745,138 735,139 728,141 M 726,137 L 730,145" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-05204" />
    <path id="mdd-mdpp-i-rs" d="M 635,184.5 C 635,184.5 628,190 625,200 M 631,181 L 638,189" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-PL1-1470" />
    <text x="4" class="text-pl" dy="-4">
        <textPath alignment-baseline="text-after-edge" xlink:href="#mdd-mdpp-pl" class="pipeline-line" name="18-MDD-MDPP">
            18-MDD-MDPP
        </textPath>
    </text>
    <text x="27" class="text-pl" dy="3">
        <textPath alignment-baseline="text-before-edge" xlink:href="#mdd-mdpp-pl" class="pipeline-line" name="18-MDD-MDPP">
            4.1 KM
        </textPath>
    </text>

    <!-- 18-MDG-MDE -->
    <path id="mdg-mde-pl" d="M 760,360 C 760,360 820,350 825,290" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-MDG-MDE" />
    <path id="mdg-mde-o-rs" d="M 825,285 C 825,285 825,273 825,273 M 821,285 L 829,285" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="" />
    <path id="mdg-mde-i-rs" d="M 754,360 C 754,360 744,360 744,360 M 754,356 L 754,364" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="" />
    <text x="15" class="text-pl" dy="-4">
        <textPath alignment-baseline="text-after-edge" xlink:href="#mdg-mde-pl" class="pipeline-line" name="18-MDG-MDE">
            18-MDG-MDE
        </textPath>
    </text>
    <text x="35" class="text-pl" dy="3">
        <textPath alignment-baseline="text-before-edge" xlink:href="#mdg-mde-pl" class="pipeline-line" name="18-MDG-MDE">
            5.0 KM
        </textPath>
    </text>

    <!-- 18-TJA-MDE -->
    <path id="tja-mde-pl" d="M 870,260 C 870,260 935,260 945,230" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-TJA-MDE" />
    <path id="tja-mde-o-rs" d="M 945,215 C 945,215 945,225 945,225 M 941,225 L 949,225" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-14011" />
    <path id="tja-mde-i-rs" d="M 863,260 C 863,260 850,260 850,260 M 863,256 L 863,264" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-B31.8-07241" />
    <text x="9" class="text-pl" dy="-4">
        <textPath alignment-baseline="text-after-edge" xlink:href="#tja-mde-pl" class="pipeline-line" name="18-TJA-MDE">
            18-TJA-MDE
        </textPath>
    </text>
    <text x="25" class="text-pl" dy="3">
        <textPath alignment-baseline="text-before-edge" xlink:href="#tja-mde-pl" class="pipeline-line" name="18-TJA-MDE">
            8.5 KM
        </textPath>
    </text>

    <!-- ################################ -->

    <!-- 18-MDE-MDPP -->
    <path id="mde-mdpp-o-rs" d="M 800,260 C 800,260 790,259 787,260 M 787,256 L 787,264" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-07209" />
    <path id="mde-mdpp-i-rs" d="M 653,280 C 653,280 640,280 630,276 M 653,276 L 653,284" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-B31.8-1119" />
    <path id="mde-mdpp-pl" d="M 660,280 C 660,280 720,280 780,261" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-MDE-MDPP" />
    <text x="47" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#mde-mdpp-pl" class="pipeline-line" name="18-MDE-MDPP">
            18-MDE-MDPP
        </textPath>
    </text>
    <text x="68" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#mde-mdpp-pl" class="pipeline-line" name="18-MDE-MDPP">
            5.1 KM
        </textPath>
    </text>

    <!-- 16-ADG-ADD -->
    <path id="adg-add-o-rs" d="M 1325,670 L 1309,670 M 1309,666 L 1309,674" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_6" name="" />
    <path id="adg-add-i-rs" d="M 1223,670 L 1240,670 M 1240,666 L 1240,674" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_6" name="" />
    <path id="adg-add-pl" d="M 1245,670 L 1305,670" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_6" name="16-ADG-ADD" />
    <text x="-2" class="text-pl phase_6" dy="-4" style="font-size: 9px;">
        <textPath alignment-baseline="after-edge" xlink:href="#adg-add-pl" class="pipeline-line" name="16-ADG-ADD">
            16-ADG-ADD
        </textPath>
    </text>
    <text x="17" class="text-pl phase_6" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#adg-add-pl" class="pipeline-line" name="16-ADG-ADD">
            3 KM
        </textPath>
    </text> <!-- D ตกไป1ตัว -->

    <!-- 16-ADD-ADC -->
    <path id="add-adc-o-rs" d="M 1188,668 C 1188,668 1182,668 1173,666 M 1172,669.5 L 1174,661.5" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_6" name="" />
    <path id="add-adc-i-rs" d="M 1085,605 C 1085,605 1088,610 1096,618 M 1098.5,614 L 1092.5,620.5" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_6" name="" />
    <path id="add-adc-pl" d="M 1098,620 C 1098,620 1130,655 1170,665" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_6" name="16-ADD-ADC" />
    <text x="10" class="text-pl phase_6" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#add-adc-pl" class="pipeline-line" name="16-ADD-ADC">
            16-ADD-ADC
        </textPath>
    </text>
    <text x="28" class="text-pl phase_6" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#add-adc-pl" class="pipeline-line" name="16-ADD-ADC">
            4.1 KM
        </textPath>
    </text>


    <!-- 16-ADC-ADB -->
    <path id="adc-adb-o-rs" d="M 1325,565 C 1325,565 1310.5,581.5 1309,582 M 1306,578.5 L 1311.5,586" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_6" name="" />
    <path id="adc-adb-i-rs" d="M 1103,585 C 1103,585 1115,595 1125,598.5 M 1126,594 L 1122.5,603" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_6" name="" />
    <path id="adc-adb-pl" d="M 1130,600 C 1130,600 1215,635 1305,585" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_6" name="16-ADC-ADB" />
    <text x="40" class="text-pl phase_6" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#adc-adb-pl " class="pipeline-line" name="16-ADC-ADB">
            16-ADC-ADB
        </textPath>
    </text>
    <text x="55" class="text-pl phase_6" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#adc-adb-pl" class="pipeline-line" name="16-ADC-ADB">
            2.9 KM
        </textPath>
    </text>

    <!-- 12-ADB-ADA -->
    <path id="adb-ada-o-rs" d="M 1325,498 C 1325,498 1322,486 1318,480 M 1322,479 L 1315,482.5" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="12-GC-B31.8-13011" />
    <path id="adb-ada-i-rs" d="M 1193,410 C 1193,410 1205,409.6 1216,412 M 1218,408 L 1216,416" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="12-GC-B31.8-12021" />
    <path id="adb-ada-pl" d="M 1220,413 C 1220,413 1290,430 1316.5,475.5" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="12-ADB-ADA" />
    <text x="25" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#adb-ada-pl" class="pipeline-line" name="12-ADB-ADA">
            12-ADB-ADA
        </textPath>
    </text>
    <text x="42" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#adb-ada-pl" class="pipeline-line" name="12-ADB-ADA">
            5.2 KM
        </textPath>
    </text>

    <!-- 20-ADB-JKA -->
    <path id="adb-jka-o-rs" d="M 1308,540 C 1308,540 1295,550 1284,554 M 1282,550 L 1285,558" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="20-GC-B31.8-13012" />
    <path id="adb-jka-i-rs" d="M 975,415 C 975,415 980,420 992,432 M 995,428 L 988,435" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="20-GC-B31.8-02220" />
    <path id="adb-jka-pl" d="M 995,435 C 995,435 1130,590 1280,555" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="20-ADB-JKA" />
    <text x="70" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#adb-jka-pl" class="pipeline-line" name="20-ADB-JKA">
            20-ADB-JKA
        </textPath>
    </text>
    <text x="85" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#adb-jka-pl" class="pipeline-line" name="20-ADB-JKA">
            26 KM
        </textPath>
    </text>

    <!-- 18-ADA-MTA -->
    <path id="ada-mta-o-rs" d="M 1158,410 L 1139,410 M 1140,406 L 1140,414" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-12011" />
    <path id="ada-mta-i-rs" d="M 975,539 C 975,539 975.5,530 978,524 M 974,522 L 982.5,526" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-B31.8-11246" />
    <path id="ada-mta-pl" d="M 980,520 C 980,520 1030,410 1135,410" stroke="gray" stroke-width="2" fill="none"  class="pipeline-line" name="18-ADA-MTA" />
    <text x="100" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#ada-mta-pl" class="pipeline-line" name="18-ADA-MTA">
            18-ADA-MTA
        </textPath>
    </text>
    <text x="112" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#ada-mta-pl" class="pipeline-line" name="18-ADA-MTA">
            12.4 KM
        </textPath>
    </text>

    <!-- 16-JKC-JKD -->
    <path id="jkc-jkd-o-rs" d="M 1175,255 C 1175,255 1175,260 1173.5,270 M 1169,270 L 1178,271" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_6" name="" />
    <path id="jkc-jkd-i-rs" d="M 1073,310 L 1091,310 M 1091,305.5 L 1091,314.5" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_6" name="" />
    <path id="jkc-jkd-pl" d="M 1095,310 C 1095,310 1170,310 1173,273" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_6" name="16-JKC-JKD" />
    <text x="15" class="text-pl phase_6" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#jkc-jkd-pl" class="pipeline-line" name="16-JKC-JKD">
            16-JKC-JKD
        </textPath>
    </text>
    <text x="27" class="text-pl phase_6" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#jkc-jkd-pl" class="pipeline-line" name="16-JKC-JKD">
            3.5 KM
        </textPath>
    </text>

    <!-- 16-JKD-JKA -->
    <path id="jkd-jka-o-rs" d="M 1055,334.5 L 1055,348 M 1051,349 L 1059,349" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_6" name="" />
    <path id="jkd-jka-i-rs" d="M 973.5,405 L 990,405 M 990,401 L 990,409" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_6" name="" />
    <path id="jkd-jka-pl" d="M 994,405 C 994,405 1055,405 1055,353" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_6" name="16-JKD-JKA" />
    <text x="15" class="text-pl phase_6" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#jkd-jka-pl" class="pipeline-line" name="16-JKD-JKA">
            16-JKD-JKA
        </textPath>
    </text>
    <text x="27" class="text-pl phase_6" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#jkd-jka-pl" class="pipeline-line" name="16-JKD-JKA">
            4.6 KM
        </textPath>
    </text>

    <!-- 18-MTA-JKB -->
    <path id="mta-jkb-o-rs" d="M 958,580 L 940,580 M 940,576 L 940,584" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-11214" />
    <path id="mta-jkb-i-rs" d="M 825,534 L 825,546 M 821,546 L 829,546" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-B31.8-06021" />
    <path id="mta-jkb-pl" d="M 825,550 C 825,550 825,580 935,580" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-MTA-JKB" />
    <text x="25" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#mta-jkb-pl" class="pipeline-line" name="18-MTA-JKB">
            18-MTA-JKB
        </textPath>
    </text>
    <text x="37" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#mta-jkb-pl" class="pipeline-line" name="18-MTA-JKB">
            6.6 KM
        </textPath>
    </text>

    <!-- 18-JKB-JKA -->
    <path id="jkb-jka-o-rs" d="M 843,510 L 861,510 M 861,506 L 861,514" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="18-GC-B31.8-06011" />
    <path id="jkb-jka-i-rs" d="M 955,435 C 955,435 955.5,444 953.5,451 M 949,450 L 958,453" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="18-GC-B31.8-02201" />
    <path id="jkb-jka-pl" d="M 865,510 C 865,510 930,510 952,455" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="18-JKB-JKA" />
    <text x="25" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#jkb-jka-pl" class="pipeline-line" name="18-JKB-JKA">
            18-JKB-JKA
        </textPath>
    </text>
    <text x="37" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#jkb-jka-pl" class="pipeline-line" name="18-JKB-JKA">
            5.5 KM
        </textPath>
    </text>

    <!-- 24-JKA-MDPP -->
    <path id="jka-mdpp-o-rs" d="M 940,405 L 920,405 M 920,400 L 920,410" stroke="gray" stroke-width="2" fill="none"  class="out-riser-line" name="24-GC-B31.8-02204"/>
    <path id="jka-mdpp-i-rs" d="M 595,275 C 595,275 593,280 591,295 M 586,295 L 596,297" stroke="gray" stroke-width="2" fill="none" class="in-riser-line" name="24-GC-PL1-1020" />
    <path id="jka-mdpp-pl" d="M 590,300 C 590,300 580,410 700,405 M 700,405 L 915,405 " stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="24-JKA-MDPP" />
    <text x="250" class="text-pl" dy="-4">
        <textPath alignment-baseline="after-edge" xlink:href="#jka-mdpp-pl" class="pipeline-line" name="24-JKA-MDPP">
            24-JKA-MDPP
        </textPath>
    </text>
    <text x="263" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#jka-mdpp-pl" class="pipeline-line" name="24-JKA-MDPP">
            33.5 KM
        </textPath>
    </text>

    <!-- 16-ADE-ADC -->
    <path id="ade-adc-o-rs" d="M 1157.5,505 L 1148,518 M 1145,515 L 1152,520.5" stroke="gray" stroke-width="2" fill="none" class="out-riser-line phase_6" name="" />
    <path id="ade-adc-i-rs" d="M 1103,575.5 L 1113,563.5 M 1110 560 L 1117 566" stroke="gray" stroke-width="2" fill="none" class="in-riser-line phase_6" name="" />
    <path id="ade-adc-pl" d="M 1116,560 L 1145.6,521.4" stroke="gray" stroke-width="2" fill="none" class="pipeline-line phase_6" name="16-ADE-ADC" />
    <text x="-1.5" class="text-pl phase_6" dy="-4" style="font-size: 9px; letter-spacing: 0;">
        <textPath alignment-baseline="after-edge" xlink:href="#ade-adc-pl" class="pipeline-line" name="16-ADE-ADC">
            16-ADE-ADC
        </textPath>
    </text>
    <text x="5" class="text-pl phase_6" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#ade-adc-pl" class="pipeline-line" name="16-ADE-ADC">
            3.1 KM
        </textPath>
    </text>

    <!-- 8-MDPP-FSO -->
    <path id="mdpp-fso-o-rs" d="M 590,180 L 590,160 M 586, 160 L 594,160" stroke="gray" stroke-width="2" fill="none" class="out-riser-line" name="8-PL-PL2-1666" />
    <path id="mdpp-fso-pl" d="M 590,155 L 590,100" stroke="gray" stroke-width="2" fill="none" class="pipeline-line" name="8-MDPP-FSO" />
    <text x="2" class="text-pl" dy="-4" style="font-size: 9px; letter-spacing: 0;">
        <textPath alignment-baseline="after-edge" xlink:href="#mdpp-fso-pl" class="pipeline-line" name="8-MDPP-FSO">
            8-MDPP-FSO
        </textPath>
    </text>
    <text x="5" class="text-pl" dy="3">
        <textPath alignment-baseline="before-edge" xlink:href="#mdpp-fso-pl" class="pipeline-line" name="8-MDPP-FSO">
            3.0 KM
        </textPath>
    </text>


    <!-- #region Setup Grid -->
    <!-- <defs>
        <pattern id="smallGrid" width="10" height="10" patternUnits="userSpaceOnUse">
            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="gray" stroke-width="0.5" />
        </pattern>
        <pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse">
            <rect width="100" height="100" fill="url(#smallGrid)" />
            <path d="M 100 0 L 0 0 0 100" fill="none" stroke="gray" stroke-width="1" />
        </pattern>
    </defs> -->
    <!-- <rect width="100%" height="100%" fill="url(#grid)" /> -->
    <!-- #endregion -->
    <!-- #region Scale X,Y -->
    <!-- <p
        style="font-size: 12px; margin-top: 0; margin-bottom: 0; display: flex; flex-direction: column; position: absolute; top: 12px; left: 0px;">
        <span style="left: 0px; position: absolute;">0</span>
        <span style="left: 100px; position: absolute;">100</span>
        <span style="left: 200px; position: absolute;">200</span>
        <span style="left: 300px; position: absolute;">300</span>
        <span style="left: 400px; position: absolute;">400</span>
        <span style="left: 500px; position: absolute;">500</span>
        <span style="left: 600px; position: absolute;">600</span>
        <span style="left: 700px; position: absolute;">700</span>
        <span style="left: 800px; position: absolute;">800</span>
        <span style="left: 900px; position: absolute;">900</span>
        <span style="left: 1000px; position: absolute;">1000</span>
        <span style="left: 1100px; position: absolute;">1100</span>
        <span style="left: 1200px; position: absolute;">1200</span>
        <span style="left: 1300px; position: absolute;">1300</span>
        <span style="left: 1400px; position: absolute;">1400</span>
    </p>
    <p
        style="font-size: 12px; margin-top: -4px; margin-bottom: 0; display: flex; flex-direction: column; position: absolute; top: 24px; left: 0px;">
        <span style="top: 100px; position: absolute;">100</span>
        <span style="top: 200px; position: absolute;">200</span>
        <span style="top: 300px; position: absolute;">300</span>
        <span style="top: 400px; position: absolute;">400</span>
        <span style="top: 500px; position: absolute;">500</span>
        <span style="top: 600px; position: absolute;">600</span>
        <span style="top: 700px; position: absolute;">700</span>
        <span style="top: 800px; position: absolute;">800</span>
        <span style="top: 900px; position: absolute;">900</span>
    </p> -->
    <!-- #endregion -->
    </svg>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-outgoing-riser-tab" data-toggle="tab" href="#nav-outgoing-riser" role="tab" aria-controls="nav-outgoing-riser" aria-selected="true">OUTGOING RISER</a>
            <a class="nav-link" id="nav-pipeline-tab" data-toggle="tab" href="#nav-pipeline" role="tab" aria-controls="nav-pipeline" aria-selected="false">PIPELINE</a>
            <a class="nav-link" id="nav-incoming-riser-tab" data-toggle="tab" href="#nav-incoming-riser" role="tab" aria-controls="nav-incoming-riser" aria-selected="false">INCOMING RISER</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-outgoing-riser" role="tabpanel" aria-labelledby="nav-outgoing-riser">
            <div id="dataGid-outgoing" class="mt-2"></div>
        </div>
        <div class="tab-pane fade" id="nav-pipeline" role="tabpanel" aria-labelledby="nav-pipeline">
            <div id="dataGid-pipeline" class="mt-2"></div>
        </div>
        <div class="tab-pane fade" id="nav-incoming-riser" role="tabpanel" aria-labelledby="nav-incoming-riser">
            <div id="dataGid-incoming" class="mt-2"></div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="info_pipeline_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pipeline Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h5>Information</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="header-detail">Integrity Note</label>
                            <textarea class="form-control" id="pipeline_remark" readonly></textarea>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Pipieline Number</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_number" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Pipieline Name</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_name" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Pig Lanucher</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pid_lanucher" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Pig Receiver</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pid_receiver" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Service</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="service" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Pipeline Length (km)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_length" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Nominal Dia (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="nominal_dia" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Material Spec</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="material_spec" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Material Type</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="material_type" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Code</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="design_code" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Pressure (psi)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="design_pressure" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Test Pressure (psi)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="test_pressure" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Insulation</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="insulation" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Coating</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="coating" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Installation Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="installation_date" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">In-service Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="inservice_date" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Pipe Joint Lenght (m)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipe_joint_lenght" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Product Density Min</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="design_product_density_min" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Product Density Max</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="design_product_density_max" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Product Density Operational</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="product_density_operational" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Sea Floor Temp Min (°C)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="sea_floor_temp_min" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Sea Floor Temp Max (°C)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="sea_floor_temp_max" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">SMTS (mpa)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="smts" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">SMYS (mpa)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="smys_mpa" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">SMYS (psi)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="smys_psi" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Soil Longitudinal Friction</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="soil_longitudinal_friction" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Soil Lateral Friction</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="soil_lateral_friction" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Mean Sea Level Height Min</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="mean_sea_level_height_min" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Mean Sea Level Height Max</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="mean_sea_level_height_max" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Aluminium Anode Density</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="aluminium_anode_density" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Anode Material</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="anode_material" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">CP Type</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="cp_type" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Risk Level</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="risk_level" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Risk Ranking</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="risk_ranking" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Integrity Status</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_status" readonly style="text-align: center;">
                        </div>
                    </div>
                    <h5 class="mt-3">The remaining life at the highest corrosion rate</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="header-detail">Weld Log Distance (m)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="weld_log_distance_m" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Joint Number</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="joint_number" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Nominal Thickness (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="t_nom" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Minimum Required Thickness (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="t_req" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Actual Thickness (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="t_actual" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Corrosion Rate (mm/yr)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="scr_pp" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Remaining Life (yrs)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="rl_pp" readonly>
                        </div>
                    </div>
                    <h5 class="mt-3">In-Line Inspection Anomaly</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_thk_permanent" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_thk_permanent_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_thk_permanent_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="pipeline_anomaly_thk_permanent_file_related" style="font-size: 14px;  line-height: 14px;"></div>
                            <!-- <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_thk_permanent_file_related" readonly> -->
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_thk_temporary" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_thk_temporary_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_thk_temporary_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="pipeline_anomaly_thk_temporary_file_related" style="font-size: 14px;  line-height: 14px;"></div>
                            <!-- <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_thk_temporary_file_related" readonly> -->
                        </div>
                    </div>
                    <h5 class="mt-3">Remote Operating Vehicle Anomaly</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_vt_permanent" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_vt_permanent_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_vt_permanent_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="pipeline_anomaly_vt_permanent_file_related" style="font-size: 14px;  line-height: 14px;"></div>
                            <!-- <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_vt_permanent_file_related" readonly> -->
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_vt_temporary" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_vt_temporary_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_vt_temporary_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="pipeline_anomaly_vt_temporary_file_related" style="font-size: 14px;  line-height: 14px;"></div>
                            <!-- <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pipeline_anomaly_vt_temporary_file_related" readonly> -->
                        </div>
                    </div>
                    <h5 class="mt-3">Section</h5>
                    <div class="row">
                        <div id="dataGid-section"></div>
                    </div>
                </div>
                <!--// container-fluid-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="info_riser_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="riser_header"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h5>Information</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="header-detail">Riser No.</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="tag_no" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design life (yrs)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="design_life" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">CA (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="ca" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">PWHT</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pwht" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Temp (°C)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="design_temp" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Operating Pressure (psi)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="operating_pressure" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">MAOP</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="maop" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Corrosion (mm/yr)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="design_corrosion" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Max Operating Temp (°C)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="max_operating_temp" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Nominal Outer Dia (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="nominal_outer_dia" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Nominal Internal Dia (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="nominal_internal_dia" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Nominal Wall Thickness (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="nominal_wall_thickness" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Min Required Thickness (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="min_required_thickness" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Risk Level</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_risk_level" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Risk Ranking</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_risk_ranking" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Integrity Status</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_status" readonly style="text-align: center;">
                        </div>
                    </div>
                    <h5 class="mt-3">The remaining life at the highest corrosion rate</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="header-detail">CML</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="rs_cml" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Test Point</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="rs_tp" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Part</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="rs_part" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Oclock</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="rs_oclock" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Actual Thickness (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="rs_t_actual" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Corrosion Rate (mm/yr)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="max_scr" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Remaining Life (yrs)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="rl" readonly>
                        </div>
                    </div>
                    <h5 class="mt-3">Topside Riser</h5>
                    <div class="row">
                        <div class="col-12">
                            Thickness
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_thk_permanent" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_thk_permanent_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_thk_permanent_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="riser_asz_anomaly_thk_permanent_file_related" style="font-size: 14px;  line-height: 14px;"></div>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_thk_temporary" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_thk_temporary_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_thk_temporary_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="riser_asz_anomaly_thk_temporary_file_related" style="font-size: 14px;  line-height: 14px;"></div>
                        </div> 
                        <div class="col-12">
                            Visual
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_vt_permanent" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_vt_permanent_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_vt_permanent_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="riser_asz_anomaly_vt_permanent_file_related" style="font-size: 14px; line-height: 14px;"></div>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_vt_temporary" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_vt_temporary_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_vt_temporary_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="riser_asz_anomaly_vt_temporary_file_related" style="font-size: 14px;  line-height: 14px;"></div>
                        </div>
                    </div>
                    <h5 class="mt-3">Subsea Riser</h5>
                    <div class="row">
                        <div class="col-12">
                            Remote Operating Vahicle
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_bsz_anomaly_vt_permanent" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_bsz_anomaly_vt_permanent_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Permanent Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_asz_anomaly_vt_permanent_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="riser_bsz_anomaly_vt_permanent_file_related" style="font-size: 14px; line-height: 14px;"></div>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_bsz_anomaly_vt_temporary" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair Due</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_bsz_anomaly_vt_temporary_due" readonly style="text-align: center;">
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Temporary Repair</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="riser_bsz_anomaly_vt_temporary_repair" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">File</label>
                            <div id="riser_bsz_anomaly_vt_temporary_file_related" style="font-size: 14px; line-height: 14px;"></div>
                        </div>
                    </div>
                </div>
                <!--// container-fluid-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="library_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pipeline Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h2>Construction Report</h2>
                        <div id="grid_const_report"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>General Document</h2>
                        <div id="grid_doc_report"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h2>Inspection Report</h2>
                        <div id="grid_insp_report"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="rbi_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="min-width: 1600px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">RBI ASSESSMENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
                <div class="rbi-grid" id="rbi-container-POF"></div>
                <div class="rbi-grid" id="rbi-container-COF"></div>
                <div class="rbi-grid">
                <div class="rbi-item-info-header rbi-span-10 rbi-purple">RISK MATRIX</div>
                    <div class="rbi-item rbi-span-5 rbi-row-span-2 rbi-lightgray">CoF</div>
                    <div class="rbi-item rbi-span-5 rbi-lightgray">PoF</div>
                    <div class="rbi-item rbi-extra-lightgray">A<br>Rare</div>
                    <div class="rbi-item rbi-extra-lightgray">B<br>Unlikely</div>
                    <div class="rbi-item rbi-extra-lightgray">C<br>Possible</div>
                    <div class="rbi-item rbi-extra-lightgray">D<br>Likely</div>
                    <div class="rbi-item rbi-extra-lightgray">E<br>Almost Certain</div>

                    <div class="rbi-item rbi-black"></div>
                    <div class="rbi-item rbi-extra-lightgray">People</div>
                    <div class="rbi-item rbi-extra-lightgray">Environment</div>
                    <div class="rbi-item rbi-extra-lightgray">Asset / Production</div>
                    <div class="rbi-item rbi-extra-lightgray">Reputation</div>

                    <div class="rbi-item">Never heard in E&P industry but could occur</div>
                    <div class="rbi-item">Event has occurred in the E&P industry or is unlikely to occur in CPOC</div>
                    <div class="rbi-item">Event occurred more than once in the E&P industry or has occurred in CPOC</div>
                    <div class="rbi-item">Event occurred several time per year in the E&P industry or once per year in CPOC</div>
                    <div class="rbi-item">Event occurred frequently in the E&P industry or occurred several times per year in CPOC</div>

                    <!-- 5 -->
                    <div class="rbi-item rbi-lightgray">5<br>Critical</div>
                    <div class="rbi-item">Multiple Fatalities</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Spill > 5,000 bbl</li>
                            <li>Tier 3</li>
                            <li>Regional Assistance</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss > USD50M</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>International Media Coverage</li>
                            <li>Formal Complaint from International NGOs</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-yellow" id="A5"></div>
                    <div class="rbi-item rbi-orange" id="B5"></div>
                    <div class="rbi-item rbi-red" id="C5"></div>
                    <div class="rbi-item rbi-red" id="D5"></div>
                    <div class="rbi-item rbi-red" id="E5"></div>

                    <!-- 4 -->
                    <div class="rbi-item rbi-lightgray">4<br>Serious</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>1 Fatality</li>
                            <li>1 Permanent Disable Injury</li>
                            <li>Multiple Lost Workdays Case</li>
                        </ul>
                    </div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>100 < Spill < 5,000 bbl</li>
                            <li>Tier 2</li>
                            <li>Industry association involvement</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss between USD5M - USD50M</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>National Media Coverage</li>
                            <li>Local Community Protest</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-yellow" id="A4"></div>
                    <div class="rbi-item rbi-yellow" id="B4"></div>
                    <div class="rbi-item rbi-orange" id="C4"></div>
                    <div class="rbi-item rbi-red" id="D4"></div>
                    <div class="rbi-item rbi-red" id="E4"></div>

                    <!-- 3 -->
                    <div class="rbi-item rbi-lightgray">3<br>Significant</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>1 Lost Workdays Case</li>
                            <li>Multiple Restricted Workdays Case</li>
                        </ul>
                    </div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>10 < Spill < 100 bbl</li>
                            <li>Tier 1</li>
                            <li>Localized Effect</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss between USD100K - USD5M</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Regional Media Coverage</li>
                            <li>Online Media Spread</li>
                            <li>Local Community Protest</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-green" id="A3"></div>
                    <div class="rbi-item rbi-yellow" id="B3"></div>
                    <div class="rbi-item rbi-yellow" id="C3"></div>
                    <div class="rbi-item rbi-orange" id="D3"></div>
                    <div class="rbi-item rbi-red" id="E3"></div>

                    <!-- 2 -->
                    <div class="rbi-item rbi-lightgray">2<br>Moderate</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Medical Treatment Case</li>
                            <li>1 Restricted Workdays Case</li>
                        </ul>
                    </div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>1 < Spill < 10 bbl</li>
                            <li>Moderate Effect</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss between USD10K - USD100K</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Local Media Interest</li>
                            <li>Influenced Online Media Post</li>
                            <li>Local Community Aggregation</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-green" id="A2"></div>
                    <div class="rbi-item rbi-green" id="B2"></div>
                    <div class="rbi-item rbi-yellow" id="C2"></div>
                    <div class="rbi-item rbi-yellow" id="D2"></div>
                    <div class="rbi-item rbi-orange" id="E2"></div>

                    <!-- 1 -->
                    <div class="rbi-item rbi-lightgray">1<br>Minor</div>
                    <div class="rbi-item">
                        Minor Health Effect/Injury With First Aid
                    </div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Spill < 1 bbl</li>
                            <li>Slight Effect</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss < USD10K</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>No News Coverage</li>
                            <li>Non-Influenced Online Media Post</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-green" id="A1"></div>
                    <div class="rbi-item rbi-green" id="B1"></div>
                    <div class="rbi-item rbi-green" id="C1"></div>
                    <div class="rbi-item rbi-yellow" id="D1"></div>
                    <div class="rbi-item rbi-yellow" id="E1"></div>
                    <div class="rbi-item rbi-span-10 rbi-lightgray" style="align-items: start; justify-content: start;">Recommendation</div>
                    <div class="rbi-item rbi-span-10" style="height: auto; align-items: start; justify-content: start;"><textarea id="rec" style="width: 100%;" rows="10" readonly></textarea></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pipeline_history_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 1400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Inspection History : <span id="history_tag_no"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div id="grid_inspection_history"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h4>Inspection Report</h4>
                        <div id="grid_insp_report_history"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="out_riser_history_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 1400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Inspection History : <span id="history_tag_no_for_out_riser"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h4>Outgoing Riser Above Splash Zone Routine Inspection</h4>
                        <div id="grid_out_asz_riser_inspection_history_routine"></div>
                    </div>
                    <div class="col-12 mb-3">
                        <h4>Outgoing Riser Above Splash Zone Adhoc and Monitoring Inspection</h4>
                        <div id="grid_out_asz_riser_inspection_history_other"></div>
                    </div>
                    <div class="col-12 mb-3">
                        <h4>Outgoing Riser Subsea Routine Inspection</h4>
                        <div id="grid_out_bsz_riser_inspection_history"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h4>Inspection Report</h4>
                        <div id="grid_out_insp_report_history"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="in_riser_history_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 1400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Inspection History : <span id="history_tag_no_for_in_riser"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h4>Incoming Riser Above Splash Zone Routine Inspection</h4>
                        <div id="grid_in_asz_riser_inspection_history_routine"></div>
                    </div>
                    <div class="col-12 mb-3">
                        <h4>Incoming Riser Above Splash Zone Adhoc and Monitoring Inspection</h4>
                        <div id="grid_in_asz_riser_inspection_history_other"></div>
                    </div>
                    <div class="col-12 mb-3">
                        <h4>Incoming Riser Subsea</h4>
                        <div id="grid_in_bsz_riser_inspection_history"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h4>Inspection Report</h4>
                        <div id="grid_in_insp_report_history"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var _token_pipeline = $.cookie("_token_pipeline");
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_pipeline: " + _token_pipeline);
    console.log("_token_dashboard: " + _token_dashboard);
    var dataArr = "";
    var riskLvId = "";

    get_data();
    get_pipeline_summary();
    change_color();
    $('.loader').hide();

    function get_data() {

        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/info_api/records?_limit=30",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr = data;
                var outgoing_array = dataArr.response.data.filter(function (el) {
                    return el.fieldData.outgoing_riser_no != ""
                });
                var incoming_array = dataArr.response.data.filter(function (el) {
                    return el.fieldData.incoming_riser_no != ""
                });
                console.log(outgoing_array);
                create_table_outgoing(outgoing_array);
                create_table_pipeline(dataArr.response.data);
                create_table_incoming(incoming_array);
                // createRows(data);
                
            },
            error: function (error) {
                console.log(error);
                get_token_pipeline();
                _token_pipeline = $.cookie("_token_pipeline");
                get_data();
                //logout();
            }
        });
    }

    function get_pipeline_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/pipeline_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                // console.log(data);
                fetch_summary(data.response.data)
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_pipeline_summary();
                //logout();
            }
        });
    }

    function get_library_outgoing(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/outgoing_riser_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_tag\": \"==" + id_tag + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    get_library_outgoing(id_tag);
                }
            }
        });
    }

    function get_library_incoming(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/incoming_riser_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_tag\": \"==" + id_tag + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    get_library_incoming(id_tag);
                }
            }
        });
    }

    function get_library_pipeline(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/pipeline_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_tag\": \"==" + id_tag + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    get_library_pipeline(id_tag);
                }
            }
        });
    }

    function call_modal_library(id_tag,type) {
        get_const(id_tag,type);
        get_insp_report(id_tag,type);
        get_gen_doc(id_tag,type);
        $('#library_modal').modal('show');
    }
   
    function create_nav(parsedData) {
        const sectionNameDict = {};
        parsedData.forEach(item => {
            const secName = item.section_name;
            const secNo = item.section_no;
            const nameNav = secName +" No."+ secNo
            if (!sectionNameDict[nameNav]) {
                sectionNameDict[nameNav] = [];
            }
            sectionNameDict[nameNav].push(item);
        });

        const navUl = document.querySelector("#myTab");
        navUl.innerHTML = ""; 

        let isFirst = true;
        for (const sectionName in sectionNameDict) {
            const li = document.createElement("li");
            li.className = "nav-item";
            li.setAttribute("role", "presentation");

            const btn = document.createElement("button");
            btn.className = "nav-link" + (isFirst ? " active" : "");
            btn.id = `${sectionName.toLowerCase()}-tab`;
            btn.setAttribute("data-toggle", "tab");
            btn.setAttribute("data-target", `#${sectionName.toLowerCase()}`);
            btn.setAttribute("type", "button");
            btn.setAttribute("role", "tab");
            btn.setAttribute("aria-controls", sectionName.toLowerCase());
            btn.setAttribute("aria-selected", isFirst ? "true" : "false");
            btn.textContent = sectionName;
            btn.addEventListener("click", function () {
                select_section_name(parsedData, sectionName);
            });
            li.appendChild(btn);
            navUl.appendChild(li);

            isFirst = false;
        }
    }

    function select_section_name(parsedData, sectionName,){
        listData = sectionName.split(" No.");
        const selectData = parsedData.filter(item => item.section_name === listData[0] && item.section_no === listData[1]);
        create_modal_rbi_table_POF(selectData);
        create_modal_rbi_table_COF(selectData);
    }

    function filter_data(parsedData, sectionType) {
        return selectData = parsedData.filter(item => item["section_type"].includes(sectionType));
    }

    function create_modal_rbi_table_POF(parsedData) {
        console.log(parsedData);
        const containerPOF = document.getElementById("rbi-container-POF");
        const prob_level_describe = {
            "A": "Never heard in E&P industry but could occur",
            "B": "Event has occurred in the E&P industry or is unlikely to occur in CPOC",
            "C": "Event occurred more than once in the E&P industry or has occurred in CPOC",
            "D": "Event occurred several time per year in the E&P industry or once per year in CPOC",
            "E": "Event occurred frequently in the E&P industry or occurred several times per year in CPOC"
        };

        const rbiData = parsedData[0] || {};
        containerPOF.innerHTML = "";  

        const header1 = document.createElement("div");
        header1.className = "rbi-item-info-header rbi-span-10 rbi-purple border-inline-white";
        header1.textContent = "POF | PROBABILITY OF FAILURE";
        containerPOF.appendChild(header1);

        const groups = {
            "External DAMAGE MECHANISM": { prefix: "ext", rowCount: 3 },
            "Internal DAMAGE MECHANISM": { prefix: "int", rowCount: 4 },
            "OTHER THREATS": { prefix: "other_threat", rowCount: 8 }
        };

        for (const [groupName, groupData] of Object.entries(groups)) {
            const groupHeader = document.createElement("div");
            groupHeader.className = "rbi-item-info-header rbi-span-10 rbi-purple border-inline-white";
            groupHeader.textContent = groupName;
            containerPOF.appendChild(groupHeader);
            var textHead = "Damage Mechanism"
            if (groupName === "OTHER THREATS"){
                textHead = "Threat Type"
            }
            [ textHead, "Probability of Failure Level", "Comment"].forEach((text, index) => {
                const h = document.createElement("div");
                h.className = `rbi-item-info-header rbi-span-${index === 0 ? 2 : 4} rbi-purple border-inline-white`;
                h.textContent = text;
                containerPOF.appendChild(h);
            });

            for (let i = 1; i <= groupData.rowCount; i++) {
                const damage = rbiData[`PoF_damage_value_${i}_${groupData.prefix}`] || "";
                const value = rbiData[`PoF_value_${i}_${groupData.prefix}`] || "";
                const comment = rbiData[`PoF_note_${i}_${groupData.prefix}`] || "";

                    const damageDiv = document.createElement("div");
                    damageDiv.className = "rbi-item-info-context rbi-span-2";
                    damageDiv.textContent = damage ;

                    const valueDiv = document.createElement("div");
                    valueDiv.className = "rbi-item-info-context rbi-span-4";
                    valueDiv.textContent = value ? `Rare (${value}) | ${prob_level_describe[value]}` : "";

                    const commentDiv = document.createElement("div");
                    commentDiv.className = "rbi-item-info-context rbi-span-4";
                    commentDiv.textContent = comment ;

                    containerPOF.appendChild(damageDiv);
                    containerPOF.appendChild(valueDiv);
                    containerPOF.appendChild(commentDiv);
            }
        }
    }

    function create_modal_rbi_table_COF(parsedData) {
        const containerCOF = document.getElementById("rbi-container-COF");
        const cof_list = ["people", "assets_production_loss", "environment"];
        const cof_title_list = ["People", "Assets / Production Loss", "Environment"];
        const cof_level = {
            "people": ["Minor (1)", "Moderate (2)", "Significant (3)", "Serious (4)", "Critical (5)"],
            "assets_production_loss": ["Insignificant (1)", "Minor (2)", "Moderate (3)", "Major (4)", "Critical (5)"],
            "environment": ["Insignificant (1)", "Minor (2)", "Moderate (3)", "Major (4)", "Critical (5)"],
            "reputation": ["Insignificant (1)", "Minor (2)", "Moderate (3)", "Major (4)", "Critical (5)"],
        };

        const rbiData = parsedData[0] || {};
        containerCOF.innerHTML = "";

        const header1 = document.createElement("div");
        header1.className = "rbi-item-info-header rbi-span-10 rbi-purple border-inline-white";
        header1.textContent = "COF | CONSEQUENCE OF FAILURE";
        containerCOF.appendChild(header1);

        const header2 = document.createElement("div");
        header2.className = "rbi-item-info-header rbi-span-2 rbi-purple border-inline-white";
        header2.textContent = "Consequence";
        containerCOF.appendChild(header2);

        const header3 = document.createElement("div");
        header3.className = "rbi-item-info-header rbi-span-4 rbi-purple border-inline-white";
        header3.textContent = "Consequence of Failure Level";
        containerCOF.appendChild(header3);

        const header4 = document.createElement("div");
        header4.className = "rbi-item-info-header rbi-span-4 rbi-purple border-inline-white";
        header4.textContent = "Comment";
        containerCOF.appendChild(header4);

        for (let i =0; i <= 2; i++) {
            const name = cof_list[i] ?? "";
            const title = cof_title_list[i] ?? " ";
            const value = rbiData[`CoF_${cof_list[i]}_value`] ?? " ";
            const note = rbiData[`CoF_${cof_list[i]}_note`] ?? " ";
            console.log(title)
            console.log(value)
            console.log(note)

            const titleDiv = document.createElement("div");
            titleDiv.className = "rbi-item-info-context rbi-span-2 rbi-extra-lightgray";
            titleDiv.textContent = title;

            const valueDiv = document.createElement("div");
            valueDiv.className = "rbi-item-info-context rbi-span-4";
            valueDiv.textContent = (value != "") ? cof_level[name][value-1] : "";

            const noteDiv = document.createElement("div");
            noteDiv.className = "rbi-item-info-context rbi-span-4";
            noteDiv.textContent = note;

            containerCOF.appendChild(titleDiv);
            containerCOF.appendChild(valueDiv);
            containerCOF.appendChild(noteDiv);

        }
    }


    function call_modal_rbi(o,sectionType) {
        console.log(o.data.fieldData);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/rbi_data/script/rbi_latest_by_id_tag?script.param=" + o.data.fieldData.id_tag,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                // console.log(JSON.parse(data.response.scriptResult));
                const filterData = filter_data(JSON.parse(data.response.scriptResult), sectionType);
                console.log(filterData);
                create_nav(filterData);
                create_modal_rbi_table_POF(filterData);
                create_modal_rbi_table_COF(filterData);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    call_modal_rbi(o, sectionType);
                }
            }
        });
        $('#rbi_modal').modal('show');
        if(riskLvId) {
            $('#' + riskLvId).html("");
        }
        $('.rbi-item').removeAttr('selected');
        $('#' + o.data.fieldData.risk_level).attr('selected', true).html(o.data.fieldData.risk_level);
        riskLvId = o.data.fieldData.risk_level;
        $('#rec').val(o.data.fieldData.rbi_recommendation);
    }

    function get_file(url,file_name) {
        // console.log(url);

        fetch("donwload_lib.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: `url=${url}&token=${_token_pipeline}&file_name=${file_name}`,
        })
        .then((response) => response.text())
        .then((res) => (alert(res)));
    }

    function fetch_summary(data) {
        console.log(data);
        $('#p0_val').html(data[0].fieldData.P0.toLocaleString());
        $('#p1_val').html(data[0].fieldData.P1.toLocaleString());
        $('#p2_val').html(data[0].fieldData.P2.toLocaleString());
        $('#p3_val').html(data[0].fieldData.P3.toLocaleString());
        $('#p4_val').html(data[0].fieldData.P4.toLocaleString());
        $('#p5_val').html(data[0].fieldData.P5.toLocaleString());
        $('#p6_val').html(data[0].fieldData.P6.toLocaleString());
        $('#noinspect_val').html(data[0].fieldData.no_inspect.toLocaleString());
        $('#total_val').html(data[0].fieldData.total_status.toLocaleString());
    }

    function create_table_outgoing(data) {
        const dataGrid = $("#dataGid-outgoing").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_tag",

            paging: {
                pageSize: 10
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [10, 25, 50],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,

            columns: [
                {
                    dataField: "fieldData.id_tag",
                    caption: "Info",
                    width: "150",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                get_info_outgoing_riser(options.value);
                            }).appendTo(container);
                        $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_library(options.value,"outgoing_riser");
                            }).appendTo(container);
                        $('<button type="button" title="RBI"></button>').addClass('btn btn-sm fas fa-border-all')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_rbi(options, "outgoing");
                            }).appendTo(container);
                        $('<button type="button" title="Inspection History"></button>').addClass('btn btn-sm fas fa-history')
                            .on('dxclick', function (e) {
                                get_out_riser_inspection_history(options.value, options.data.fieldData.outgoing_riser_no);
                            }).appendTo(container);
                    },
                    fixed: true,
                    fixedPosition: "left",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                },
                {
                    caption: "Outgoing Riser Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Outgoing Riser Number</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_no",
                    fixed: true,
                    fixedPosition: "left",
                    width: "200",
                },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_platform",
                    width: "100",
                    alignment: "center"
                },
                {
                    caption: "From",
                    headerCellTemplate: function (container) {
                        container.append($("<div>From</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_platform",
                    width: "90",
                    alignment: "center"
                },
                {
                    caption: "To",
                    headerCellTemplate: function (container) {
                        container.append($("<div>To</div>"));
                    },
                    dataField: "fieldData.incoming_riser_platform",
                    width: "90",
                    alignment: "center"
                },
                {
                    caption: "Risk Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk<br>Ranking</div>"));
                    },
                    dataField: "fieldData.risk_ranking",
                    width: "100",
                    alignment: "center",
                },
                {
                    caption: "Outgoing Riser Above Splash Zone",
                    columns: [
                    {
                        caption: "Type Of Inspection",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Type Of<br>Inspection</div>"));
                        },
                        calculateCellValue: function (e) {
                            return "UT";
                        },
                        width: "90",
                        alignment: "center"
                    },
                    {
                        caption: "Due Inspection",
                        columns: [{
                            caption: "Last",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Last</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_ut_last_insp_date",
                            calculateCellValue: function (value) {
                                return get_year(value.fieldData.outgoing_riser_asz_ut_last_insp_date)
                            },
                            width: "90",
                            alignment: "center"
                        },
                        {
                            caption: "Interval (yrs)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Interval<br>(yrs)</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_ut_interval",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            },
                            width: "100"
                        },
                        {
                            caption: "Next",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Next</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_ut_next_insp_date",
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_ut_due_status",
                            alignment: "center",
                            width: "90"
                        }
                        ]
                    },
                    {
                        caption: "Type Of Inspection",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Type Of<br>Inspection</div>"));
                        },
                        calculateCellValue: function (e) {
                            return "VT";
                        },
                        width: "90",
                        alignment: "center"
                    },
                    {
                        caption: "Due Inspection",
                        columns: [{
                            caption: "Last",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Last</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_vt_last_insp_date",
                            calculateCellValue: function (value) {
                                return get_year(value.fieldData.outgoing_riser_asz_vt_last_insp_date)
                            },
                            width: "90",
                            alignment: "center"
                        },
                        {
                            caption: "Interval (yrs)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Interval<br>(yrs)</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_vt_interval",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            },
                            width: "100"
                        },
                        {
                            caption: "Next",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Next</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_vt_next_insp_date",
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_vt_due_status",
                            alignment: "center",
                            width: "90"
                        }
                        ]
                    },
                    {
                        caption: "Section Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Section<br>Status</div>"));
                        },
                        dataField: "fieldData.outgoing_riser_status",
                        alignment: "center",
                        width: "100"
                    }
                    ]
                },
                {
                    caption: "Due Anomaly",
                    columns: [{
                        caption: "Year",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Year</div>"));
                        },
                        dataField: "fieldData.outgoing_asz_anomaly_upcoming_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.outgoing_asz_anomaly_upcoming_date)
                        },
                        width: "100",
                        alignment: "center"
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.outgoing_asz_anomaly_upcoming_date_due",
                        width: "100",
                        alignment: "center"
                    },
                    ]
                },
                {
                    caption: "Outgoing Riser Subsea",
                    columns: [
                    {
                        caption: "Type Of Inspection",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Type Of<br>Inspection</div>"));
                        },
                        calculateCellValue: function (e) {
                            return "ROV";
                        },
                        alignment: "center",
                        width: "90"
                    },
                    {
                        caption: "Due Inspection",
                        columns: [{
                            caption: "Last",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Last</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_bsz_rov_last_insp_date",
                            calculateCellValue: function (value) {
                                return get_year(value.fieldData.outgoing_riser_bsz_rov_last_insp_date)
                            },
                            width: "90",
                            alignment: "center"
                        },
                        {
                            caption: "Interval (yrs)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Interval<br>(yrs)</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_bsz_rov_interval",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            },
                            width: "100"
                        },
                        {
                            caption: "Next",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Next</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_bsz_rov_next_insp_date",
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_bsz_rov_due_status",
                            alignment: "center",
                            width: "90"
                        }
                        ]
                    },
                    {
                        caption: "Section Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Section<br>Status</div>"));
                        },
                        dataField: "fieldData.outgoing_riser_status_visual_bsz",
                        alignment: "center",
                        width: "100"
                    }
                    ]
                },
                {
                    caption: "Due Anomaly",
                    columns: [{
                        caption: "Year",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Year</div>"));
                        },
                        dataField: "fieldData.outgoing_bsz_anomaly_upcoming_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.outgoing_bsz_anomaly_upcoming_date)
                        },
                        alignment: "center"
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.outgoing_bsz_anomaly_upcoming_date_due",
                        alignment: "center"
                    },
                    ]
                },
                {
                    caption: "Anomaly Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Anomaly<br>Ranking</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_anomaly_priority",
                    width: "150",
                    alignment: "center",
                    visible: false
                }
                
                // {
                //     caption: "Integrity Status",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Integrity Status</div>"));
                //     },
                //     dataField: "fieldData.integrity_status",
                //     fixed: true,
                //     fixedPosition: "right",
                //     width: "100",
                //     alignment: "center"
                // }
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.risk_ranking") {
                    e.cellElement.css("background-color", e.data.fieldData.risk_ranking == "LOW" ? "#66FF33" : e.data.fieldData.risk_ranking == "MEDIUM" ? "#FFFF00" : e.data.fieldData.risk_ranking == "HIGH" ? "#FD9A00" : e.data.fieldData.risk_ranking == "VERY HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_asz_ut_due_status") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_asz_ut_due_status == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_asz_ut_due_status == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_asz_ut_due_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_asz_vt_due_status") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_asz_vt_due_status == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_asz_vt_due_status == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_asz_vt_due_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_bsz_rov_due_status") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_bsz_rov_due_status == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_bsz_rov_due_status == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_bsz_rov_due_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_status") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_status == "P1" ? "#FF0000" : e.data.fieldData.outgoing_riser_status == "P2" ? "#F69546" : e.data.fieldData.outgoing_riser_status == "P3" ? "#FFCC00" : e.data.fieldData.outgoing_riser_status == "P4" ? "#FFFF00" : e.data.fieldData.outgoing_riser_status == "P5" ? "#66FF33" : e.data.fieldData.outgoing_riser_status == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_bsz_anomaly_upcoming_date_due") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_bsz_anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_bsz_anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_bsz_anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_asz_anomaly_upcoming_date_due") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_asz_anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_asz_anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_asz_anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
                }


                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                // if (e.rowType === "data" && (e.column.dataField === "fieldData.risk_ranking" || e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.OSI_VT_last_insp_date" || e.column.dataField === "fieldData.OSI_VT_next_insp_date" || e.column.dataField === "fieldData.OSI_VT_status" || e.column.dataField === "fieldData.OSI_NDE_last_insp_date" || e.column.dataField === "fieldData.OSI_NDE_next_insp_date" || e.column.dataField === "fieldData.OSI_NDE_status" || e.column.dataField === "fieldData.anomaly_vt_temporary_due" || e.column.dataField === "fieldData.anomaly_vt_permanent_due" || e.column.dataField === "fieldData.anomaly_Thk_temporary_due" || e.column.dataField === "fieldData.anomaly_Thk_permanent_due" || e.column.dataField === "fieldData.anomaly_vt_temporary" || e.column.dataField === "fieldData.anomaly_vt_permanent" || e.column.dataField === "fieldData.anomaly_Thk_temporary" || e.column.dataField === "fieldData.anomaly_Thk_permanent")) {
                //     e.cellElement.css("text-align", "center");
                // }
            },

            onToolbarPreparing: function (e) {
                var toolbarItems = e.toolbarOptions.items;
                toolbarItems.unshift({
                    location: 'after',
                    widget: 'dxButton',
                    hint: 'Refresh',
                    options: {
                        icon: 'refresh',
                        onClick() {
                            dataGrid.clearFilter();
                        },
                    },
                })
            },

            showBorders: true
        }).dxDataGrid('instance');
    };

    function create_table_pipeline(data) {
        const dataGrid = $("#dataGid-pipeline").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_tag",

            paging: {
                pageSize: 10
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [10, 25, 50],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            showRowLines: true,
            focusedRowEnabled: true,

            columns: [
                {
                    dataField: "fieldData.id_tag",
                    caption: "Info",
                    width: "150",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                get_info_pipeline(options.value);
                            }).appendTo(container);
                        $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_library(options.value,"pipeline");
                            }).appendTo(container);
                        $('<button type="button" title="RBI"></button>').addClass('btn btn-sm fas fa-border-all')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_rbi(options,"pipeline");
                            }).appendTo(container);
                        $('<button type="button" title="Inspection History"></button>').addClass('btn btn-sm fas fa-history')
                            .on('dxclick', function (e) {
                                get_pipeline_inspection_history(options.value, options.data.fieldData.pipeline_no);
                            }).appendTo(container);

                    },
                    // fixed: true,
                    // fixedPosition: "left",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                },
                {
                    caption: "Pipeline Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Pipeline Number</div>"));
                    },
                    dataField: "fieldData.pipeline_no",
                    // fixed: true,
                    // fixedPosition: "left",
                    width: "150",
                },
                {
                    caption: "Phase",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Phase</div>"));
                    },
                    dataField: "fieldData.phase",
                    alignment: "center",
                    width: "100"
                },
                {
                    caption: "Risk Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk Ranking</div>"));
                    },
                    dataField: "fieldData.risk_ranking",
                    alignment: "center",
                    width: "100"
                },
                {
                    caption: "Pipeline",
                    columns: [
                    {
                        caption: "Type Of Inspection",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Type Of<br>Inspection</div>"));
                        },
                        calculateCellValue: function (e) {
                            return "ILI";
                        },
                        alignment: "center",
                        width: "90"
                    },
                    {
                        caption: "Due Inspection",
                        columns: [
                            {
                                caption: "Last",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Last</div>"));
                                },
                                dataField: "fieldData.pipeline_ili_last_insp_date",
                                calculateCellValue: function (value) {
                                    return get_year(value.fieldData.pipeline_ili_last_insp_date)
                                },
                                alignment: "center",
                                width: "90"
                            },
                            {
                                caption: "Interval (yrs)",
                                alignment: "center",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Interval<br>(yrs)</div>"));
                                },
                                dataField: "fieldData.pipeline_ili_interval",
                                format: {
                                    type: "fixedPoint",
                                    precision: 2
                                },
                                width: "100"
                            },
                            {
                                caption: "Next",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Next</div>"));
                                },
                                dataField: "fieldData.pipeline_ili_next_insp_date",
                                alignment: "center",
                                width: "90"
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.pipeline_ili_due_status",
                                alignment: "center",
                                width: "90"
                            }
                        ]
                    },
                    {
                        caption: "Type Of Inspection",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Type Of<br>Inspection</div>"));
                        },
                        calculateCellValue: function (e) {
                            return "ROV";
                        },
                        alignment: "center",
                        width: "90"
                    },
                    {
                        caption: "Due Inspection",
                        columns: [{
                            caption: "Last",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Last</div>"));
                            },
                            dataField: "fieldData.pipeline_rov_last_insp_date",
                            calculateCellValue: function (value) {
                                return get_year(value.fieldData.pipeline_rov_last_insp_date)
                            },
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Interval (yrs)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Interval<br>(yrs)</div>"));
                            },
                            dataField: "fieldData.pipeline_rov_interval",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            },
                            width: "100"
                        },
                        {
                            caption: "Next",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Next</div>"));
                            },
                            dataField: "fieldData.pipeline_rov_next_insp_date",
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.pipeline_rov_due_status",
                            alignment: "center",
                            width: "90"
                        }
                        ]
                    },
                    {
                        caption: "Integrity Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Integrity<br>Status</div>"));
                        },
                        dataField: "fieldData.pipeline_status",
                        alignment: "center",
                        width: "100"
                    }
                    ]
                },
                {
                    caption: "Due Anomaly",
                    visible: false,
                    columns: [{
                        caption: "Year",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Year</div>"));
                        },
                        dataField: "fieldData.pipeline_anomaly_upcoming_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.pipeline_anomaly_upcoming_date)
                        },
                        width: "100",
                        alignment: "center",
                        visible: false,
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.pipeline_anomaly_upcoming_date_due",
                        width: "100",
                        alignment: "center",
                        visible: false,
                    },
                    ]
                },
                {
                    caption: "Anomaly Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Anomaly<br>Ranking</div>"));
                    },
                    dataField: "fieldData.pipeline_anomaly_priority",
                    width: "150",
                    alignment: "center",
                    visible: false
                },
                {
                    caption: "Permanent Repair",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Permanent<br>Repair</div>"));
                    },
                    dataField: "fieldData.pipeline_anomaly_permanent_repair",
                    width: "130",
                    alignment: "center",
                    visible: false
                },   
                {
                    caption: "Temporary Repair",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Temporary<br>Repair</div>"));
                    },
                    dataField: "fieldData.pipeline_anomaly_temporary_repair",
                    width: "130",
                    alignment: "center",
                    visible: false
                },
                {
                    caption: "RL (yrs)",
                    headerCellTemplate: function (container) {
                        container.append($("<div>RL (yrs)</div>"));
                    },
                    alignment: "center",
                    width: "100",
                    calculateCellValue: function (e) {
                        return set_rl(e);
                        //return  e.fieldData.pipeline_max_scr.split("|")[6] ? number_with_comma(parseFloat(e.fieldData.pipeline_max_scr.split("|")[6]).toFixed(2)) : "N/A";
                    },
                },
                {
                    caption: "Remark",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Remark</div>"));
                    },
                    dataField: "fieldData.pipeline_remark",
                    width: "150",
                },
                // {
                //     caption: "Integrity Status",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Integrity Status</div>"));
                //     },
                //     dataField: "fieldData.integrity_status",
                //     fixed: true,
                //     fixedPosition: "right",
                //     width: "100",
                //     alignment: "center"
                // }
            ],
            onExporting: function(e) { 
                e.component.beginUpdate();
                e.component.columnOption('fieldData.pipeline_anomaly_permanent_repair', 'visible', true);
                e.component.columnOption('fieldData.pipeline_anomaly_temporary_repair', 'visible', true);
                e.component.columnOption('fieldData.pipeline_anomaly_priority', 'visible', true);
                e.component.columnOption('fieldData.outgoing_riser_anomaly_priority', 'visible', true);
                e.component.columnOption('fieldData.incoming_riser_anomaly_priority', 'visible', true);
                var workbook = new ExcelJS.Workbook(); 
                var worksheet = workbook.addWorksheet('Main sheet');

                DevExpress.excelExporter.exportDataGrid({
                    component: e.component,
                    worksheet: worksheet
                }).then(function() {
                    workbook.xlsx.writeBuffer().then(function(buffer) {
                        saveAs(new Blob([buffer], { type: 'application/octet-stream' }), 'Pipeline_Infomation.xlsx');
                    });
                }).then(function() {
                    e.component.columnOption('fieldData.pipeline_anomaly_permanent_repair', 'visible', false);
                    e.component.columnOption('fieldData.pipeline_anomaly_temporary_repair', 'visible', false);
                    e.component.columnOption('fieldData.pipeline_anomaly_priority', 'visible', false);
                    e.component.columnOption('fieldData.outgoing_riser_anomaly_priority', 'visible', false);
                    e.component.columnOption('fieldData.incoming_riser_anomaly_priority', 'visible', false);
                    e.component.endUpdate();
                });

                e.cancel = true;
            },
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_ili_last_insp_date") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                    e.cellElement.css("color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_ili_next_insp_date") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                    e.cellElement.css("color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_rov_last_insp_date") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                    e.cellElement.css("color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_rov_next_insp_date") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                    e.cellElement.css("color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.risk_ranking") {
                    e.cellElement.css("background-color", e.data.fieldData.risk_ranking == "LOW" ? "#66FF33" : e.data.fieldData.risk_ranking == "MEDIUM" ? "#FFFF00" : e.data.fieldData.risk_ranking == "HIGH" ? "#FD9A00" : e.data.fieldData.risk_ranking == "VERY HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_anomaly_priority") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_anomaly_priority == "LOW" ? "#66FF33" : e.data.fieldData.pipeline_anomaly_priority == "ALARP-1" ? "#FFCC00" : e.data.fieldData.pipeline_anomaly_priority == "ALARP-2" ? "#FFCC00" : e.data.fieldData.pipeline_anomaly_priority == "ALARP-3" ? "#FFCC00" : e.data.fieldData.pipeline_anomaly_priority == "HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_ili_due_status") {
                    if(e.data.fieldData.integrity_status == "P0") {
                        e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                        e.cellElement.css("color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                    } else {
                        e.cellElement.css("background-color", e.data.fieldData.pipeline_ili_due_status == "Not due" ? "#66FF33" : e.data.fieldData.pipeline_ili_due_status == "On due" ? "#FFCC00" : e.data.fieldData.pipeline_ili_due_status == "Overdue" ? "#FF0000" : "");
                    }
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_rov_due_status") {
                    if(e.data.fieldData.integrity_status == "P0") {
                        e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                        e.cellElement.css("color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                    } else {
                        e.cellElement.css("background-color", e.data.fieldData.pipeline_rov_due_status == "Not due" ? "#66FF33" : e.data.fieldData.pipeline_rov_due_status == "On due" ? "#FFCC00" : e.data.fieldData.pipeline_rov_due_status == "Overdue" ? "#FF0000" : "");
                    }
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_status") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_status == "P1" ? "#FF0000" : e.data.fieldData.pipeline_status == "P2" ? "#F69546" : e.data.fieldData.pipeline_status == "P3" ? "#FFCC00" : e.data.fieldData.pipeline_status == "P4" ? "#FFFF00" : e.data.fieldData.pipeline_status == "P5" ? "#66FF33" : e.data.fieldData.pipeline_status == "P6" ? "#43a047" : e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_anomaly_upcoming_date_due") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.fieldData.pipeline_anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.fieldData.pipeline_anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_ili_next_insp_date") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                    e.cellElement.css("color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                }
                if (e.rowType === "data" && e.column.caption === "RL (yrs)") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                    e.cellElement.css("color", e.data.fieldData.integrity_status == "P0" ? "#000" : "");
                }

                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                // if (e.rowType === "data" && (e.column.dataField === "fieldData.risk_ranking" || e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.OSI_VT_last_insp_date" || e.column.dataField === "fieldData.OSI_VT_next_insp_date" || e.column.dataField === "fieldData.OSI_VT_status" || e.column.dataField === "fieldData.OSI_NDE_last_insp_date" || e.column.dataField === "fieldData.OSI_NDE_next_insp_date" || e.column.dataField === "fieldData.OSI_NDE_status" || e.column.dataField === "fieldData.anomaly_vt_temporary_due" || e.column.dataField === "fieldData.anomaly_vt_permanent_due" || e.column.dataField === "fieldData.anomaly_Thk_temporary_due" || e.column.dataField === "fieldData.anomaly_Thk_permanent_due" || e.column.dataField === "fieldData.anomaly_vt_temporary" || e.column.dataField === "fieldData.anomaly_vt_permanent" || e.column.dataField === "fieldData.anomaly_Thk_temporary" || e.column.dataField === "fieldData.anomaly_Thk_permanent")) {
                //     e.cellElement.css("text-align", "center");
                // }
            },

            onToolbarPreparing: function (e) {
                var toolbarItems = e.toolbarOptions.items;
                toolbarItems.unshift({
                    location: 'after',
                    widget: 'dxButton',
                    hint: 'Refresh',
                    options: {
                        icon: 'refresh',
                        onClick() {
                            dataGrid.clearFilter();
                        },
                    },
                })
            },

            showBorders: true
        }).dxDataGrid('instance');
    };

    function create_table_incoming(data) {
        const dataGrid = $("#dataGid-incoming").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_tag",

            paging: {
                pageSize: 10
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [10, 25, 50],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            showRowLines: true,
            focusedRowEnabled: true,

            columns: [
                {
                    dataField: "fieldData.id_tag",
                    caption: "Info",
                    width: "150",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                get_info_incoming_riser(options.value);
                            }).appendTo(container);
                        $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_library(options.value,"incoming_riser");
                            }).appendTo(container);
                        $('<button type="button" title="RBI"></button>').addClass('btn btn-sm fas fa-border-all')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_rbi(options,"incoming");
                            }).appendTo(container);
                        $('<button type="button" title="Inspection History"></button>').addClass('btn btn-sm fas fa-history')
                            .on('dxclick', function (e) {
                                get_in_riser_inspection_history(options.value, options.data.fieldData.incoming_riser_no);
                            }).appendTo(container);

                    },
                    fixed: true,
                    fixedPosition: "left",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                },
                {
                    caption: "Incoming Riser Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Incoming Riser Number</div>"));
                    },
                    dataField: "fieldData.incoming_riser_no",
                    fixed: true,
                    fixedPosition: "left",
                    width: "200",
                },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.incoming_riser_platform",
                    width: "100",
                    alignment: "center"
                },
                {
                    caption: "From",
                    headerCellTemplate: function (container) {
                        container.append($("<div>From</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_platform",
                    width: "90",
                    alignment: "center"
                },
                {
                    caption: "To",
                    headerCellTemplate: function (container) {
                        container.append($("<div>To</div>"));
                    },
                    dataField: "fieldData.incoming_riser_platform",
                    width: "90",
                    alignment: "center"
                },
                {
                    caption: "Risk Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk<br>Ranking</div>"));
                    },
                    dataField: "fieldData.risk_ranking",
                    width: "100",
                    alignment: "center",
                },
                {
                    caption: "Incoming Riser Above Splash Zone",
                    columns: [
                    {
                        caption: "Type Of Inspection",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Type Of<br>Inspection</div>"));
                        },
                        calculateCellValue: function (e) {
                            return "UT";
                        },
                        width: "90",
                        alignment: "center"
                    },
                    {
                        caption: "Due Inspection",
                        columns: [{
                            caption: "Last",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Last</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_ut_last_insp_date",
                            calculateCellValue: function (value) {
                                return get_year(value.fieldData.incoming_riser_asz_ut_last_insp_date)
                            },
                            width: "90",
                            alignment: "center"
                        },
                        {
                            caption: "Interval (yrs)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Interval<br>(yrs)</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_ut_interval",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            },
                            width: "100"
                        },
                        {
                            caption: "Next",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Next</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_ut_next_insp_date",
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_ut_due_status",
                            alignment: "center",
                            width: "90"
                        }
                        ]
                    },
                    {
                        caption: "Type Of Inspection",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Type Of<br>Inspection</div>"));
                        },
                        calculateCellValue: function (e) {
                            return "VT";
                        },
                        width: "90",
                        alignment: "center"
                    },
                    {
                        caption: "Due Inspection",
                        columns: [{
                            caption: "Last",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Last</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_vt_last_insp_date",
                            calculateCellValue: function (value) {
                                return get_year(value.fieldData.incoming_riser_asz_vt_last_insp_date)
                            },
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Interval (yrs)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Interval<br>(yrs)</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_vt_interval",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            },
                            width: "100"
                        },
                        {
                            caption: "Next",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Next</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_vt_next_insp_date",
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_vt_due_status",
                            alignment: "center",
                            width: "90"
                        }
                        ]
                    },
                    {
                        caption: "Section Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Section<br>Status</div>"));
                        },
                        dataField: "fieldData.incoming_riser_status",
                        alignment: "center",
                        width: "100"
                    }
                    ]
                },
                {
                    caption: "Due Anomaly",
                    columns: [{
                        caption: "Year",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Year</div>"));
                        },
                        dataField: "fieldData.incoming_asz_anomaly_upcoming_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.incoming_asz_anomaly_upcoming_date)
                        },
                        width: "100",
                        alignment: "center"
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        width: "100",
                        dataField: "fieldData.incoming_asz_anomaly_upcoming_date_due",
                        alignment: "center"
                    },
                    ]
                },
                {
                    caption: "Incoming Riser Subsea",
                    columns: [
                    {
                        caption: "Type Of Inspection",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Type Of<br>Inspection</div>"));
                        },
                        calculateCellValue: function (e) {
                            return "ROV";
                        },
                        alignment: "center",
                        width: "90"
                    },
                    {
                        caption: "Due Inspection",
                        columns: [{
                            caption: "Last",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Last</div>"));
                            },
                            dataField: "fieldData.incoming_riser_bsz_rov_last_insp_date",
                            calculateCellValue: function (value) {
                                return get_year(value.fieldData.incoming_riser_bsz_rov_last_insp_date)
                            },
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Interval (yrs)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Interval<br>(yrs)</div>"));
                            },
                            dataField: "fieldData.incoming_riser_bsz_rov_interval",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            },
                            width: "100"
                        },
                        {
                            caption: "Next",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Next</div>"));
                            },
                            dataField: "fieldData.incoming_riser_bsz_rov_next_insp_date",
                            alignment: "center",
                            width: "90"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_bsz_rov_due_status",
                            alignment: "center",
                            width: "90"
                        }
                        ]
                    },
                    {
                        caption: "Section Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Section<br>Status</div>"));
                        },
                        dataField: "fieldData.incoming_riser_status_visual_bsz",
                        alignment: "center",
                        width: "100"
                    }

                    ]
                },
                {
                    caption: "Anomaly Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Anomaly<br>Ranking</div>"));
                    },
                    dataField: "fieldData.incoming_riser_anomaly_priority",
                    width: "150",
                    alignment: "center",
                    visible: false
                },
                {
                    caption: "Due Anomaly",
                    columns: [{
                        caption: "Year",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Year</div>"));
                        },
                        dataField: "fieldData.incoming_bsz_anomaly_upcoming_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.incoming_bsz_anomaly_upcoming_date)
                        },
                        width: "100",
                        alignment: "center"
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.incoming_bsz_anomaly_upcoming_date_due",
                        width: "100",
                        alignment: "center"
                    },
                    ]
                },
                // {
                //     caption: "Integrity Status",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Integrity Status</div>"));
                //     },
                //     dataField: "fieldData.integrity_status",
                //     fixed: true,
                //     fixedPosition: "right",
                //     width: "100",
                //     alignment: "center"
                // }
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.risk_ranking") {
                    e.cellElement.css("background-color", e.data.fieldData.risk_ranking == "LOW" ? "#66FF33" : e.data.fieldData.risk_ranking == "MEDIUM" ? "#FFFF00" : e.data.fieldData.risk_ranking == "HIGH" ? "#FD9A00" : e.data.fieldData.risk_ranking == "VERY HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_asz_ut_due_status") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_asz_ut_due_status == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_asz_ut_due_status == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_asz_ut_due_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_asz_vt_due_status") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_asz_vt_due_status == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_asz_vt_due_status == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_asz_vt_due_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_bsz_rov_due_status") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_bsz_rov_due_status == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_bsz_rov_due_status == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_bsz_rov_due_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_status") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_status == "P1" ? "#FF0000" : e.data.fieldData.incoming_riser_status == "P2" ? "#F69546" : e.data.fieldData.incoming_riser_status == "P3" ? "#FFCC00" : e.data.fieldData.incoming_riser_status == "P4" ? "#FFFF00" : e.data.fieldData.incoming_riser_status == "P5" ? "#66FF33" : e.data.fieldData.incoming_riser_status == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_bsz_anomaly_upcoming_date_due") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_bsz_anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.fieldData.incoming_bsz_anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.fieldData.incoming_bsz_anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_asz_anomaly_upcoming_date_due") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_asz_anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.fieldData.incoming_asz_anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.fieldData.incoming_asz_anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
                }

                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                // if (e.rowType === "data" && (e.column.dataField === "fieldData.risk_ranking" || e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.OSI_VT_last_insp_date" || e.column.dataField === "fieldData.OSI_VT_next_insp_date" || e.column.dataField === "fieldData.OSI_VT_status" || e.column.dataField === "fieldData.OSI_NDE_last_insp_date" || e.column.dataField === "fieldData.OSI_NDE_next_insp_date" || e.column.dataField === "fieldData.OSI_NDE_status" || e.column.dataField === "fieldData.anomaly_vt_temporary_due" || e.column.dataField === "fieldData.anomaly_vt_permanent_due" || e.column.dataField === "fieldData.anomaly_Thk_temporary_due" || e.column.dataField === "fieldData.anomaly_Thk_permanent_due" || e.column.dataField === "fieldData.anomaly_vt_temporary" || e.column.dataField === "fieldData.anomaly_vt_permanent" || e.column.dataField === "fieldData.anomaly_Thk_temporary" || e.column.dataField === "fieldData.anomaly_Thk_permanent")) {
                //     e.cellElement.css("text-align", "center");
                // }
            },

            onToolbarPreparing: function (e) {
                var toolbarItems = e.toolbarOptions.items;
                toolbarItems.unshift({
                    location: 'after',
                    widget: 'dxButton',
                    hint: 'Refresh',
                    options: {
                        icon: 'refresh',
                        onClick() {
                            dataGrid.clearFilter();
                        },
                    },
                })
            },

            showBorders: true
        }).dxDataGrid('instance');
    };

    function create_table_ano(data) {
        const dataGrid = $("#dataGid-ano").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_tag",

            paging: {
                pageSize: 10
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [10, 25, 50],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,

            columns: [
                // {
                //     dataField: "fieldData.id_tag",
                //     caption: "Detail",
                //     width: "100",
                //     allowEditing: false,
                //     alignment: "center",
                //     cellTemplate: function (container, options) {
                //         $('<button type="button" title="info"></button>').addClass('btn btn-sm fas fa-list-ul')
                //             .on('dxclick', function (e) {
                //                 console.log(options.value)
                //                 get_info(options.value);
                //             }).appendTo(container);
                //         $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                //             .on('dxclick', function (e) {
                //                 console.log(options.value)
                //                 get_library(options.value);
                //             }).appendTo(container);

                //     },
                //     fixed: true,
                //     fixedPosition: "left",
                //     allowFiltering: false,
                //     allowSorting: false,
                //     allowResizing: false,
                // },
                {
                    caption: "Tag Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tag Number</div>"));
                    },
                    dataField: "fieldData.tag_no",
                    fixed: true,
                    fixedPosition: "left",
                    width: "280",
                },
                {
                    caption: "Outgoing Riser Above Splash Zone",
                    columns: [{
                        caption: "Riser Number",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Riser Number</div>"));
                        },
                        dataField: "fieldData.outgoing_riser_no"
                    },
                    {
                        caption: "Due Visual Anomaly",
                        columns: [{
                            caption: "Temporary",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_anomaly_vt_temporary",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_anomaly_vt_temporary_due",
                            alignment: "center"
                        },
                        {
                            caption: "Permanent",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_anomaly_vt_permanent",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_anomaly_vt_permanent_due",
                            alignment: "center"
                        }
                        ]
                    },
                    {
                        caption: "Due Thickness Anomaly",
                        columns: [{
                            caption: "Temporary",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_anomaly_thk_temporary",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_anomaly_thk_temporary_due",
                            alignment: "center"
                        },
                        {
                            caption: "Permanent",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_anomaly_thk_permanent",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_asz_anomaly_thk_permanent_due",
                            alignment: "center"
                        }
                        ]
                    }
                    ]
                },
                {
                    caption: "Outgoing Riser Subsea",
                    columns: [{
                        caption: "Riser Number",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Riser Number</div>"));
                        },
                        dataField: "fieldData.outgoing_riser_no"
                    },
                    {
                        caption: "Due Visual Anomaly",
                        columns: [{
                            caption: "Temporary",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_bsz_anomaly_vt_temporary",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_bsz_anomaly_vt_temporary_due",
                            alignment: "center"
                        },
                        {
                            caption: "Permanent",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_bsz_anomaly_vt_permanent",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.outgoing_riser_bsz_anomaly_vt_permanent_due",
                            alignment: "center"
                        }
                        ]
                    },
                    ]
                },
                {
                    caption: "Pipeline",
                    columns: [{
                        caption: "Pipeline Number",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Pipeline Number</div>"));
                        },
                        dataField: "fieldData.pipeline_no"
                    },
                    {
                        caption: "Due Visual Anomaly",
                        columns: [{
                            caption: "Temporary",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.pipeline_anomaly_vt_temporary",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.pipeline_anomaly_vt_temporary_due",
                            alignment: "center"
                        },
                        {
                            caption: "Permanent",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.pipeline_anomaly_vt_permanent",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.pipeline_anomaly_vt_permanent_due",
                            alignment: "center"
                        }
                        ]
                    },
                    {
                        caption: "Due Thickness Anomaly",
                        columns: [{
                            caption: "Temporary",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.pipeline_anomaly_thk_temporary",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.pipeline_anomaly_thk_temporary_due",
                            alignment: "center"
                        },
                        {
                            caption: "Permanent",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.pipeline_anomaly_thk_permanent",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.pipeline_anomaly_thk_permanent_due",
                            alignment: "center"
                        }
                        ]
                    },

                    ]
                },
                {
                    caption: "Incoming Riser Above Splash Zone",
                    columns: [{
                        caption: "Riser Number",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Riser Number</div>"));
                        },
                        dataField: "fieldData.incoming_riser_no"
                    },
                    {
                        caption: "Due Visual Anomaly",
                        columns: [{
                            caption: "Temporary",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_anomaly_vt_temporary",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_anomaly_vt_temporary_due",
                            alignment: "center"
                        },
                        {
                            caption: "Permanent",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_anomaly_vt_permanent",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_anomaly_vt_permanent_due",
                            alignment: "center"
                        }
                        ]
                    },
                    {
                        caption: "Due Thickness Anomaly",
                        columns: [{
                            caption: "Temporary",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_anomaly_thk_temporary",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_anomaly_thk_temporary_due",
                            alignment: "center"
                        },
                        {
                            caption: "Permanent",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_anomaly_thk_permanent",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_asz_anomaly_thk_permanent_due",
                            alignment: "center"
                        }
                        ]
                    }
                    ]
                },
                {
                    caption: "Incoming Riser Subsea",
                    columns: [{
                        caption: "Riser Number",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Riser Number</div>"));
                        },
                        dataField: "fieldData.incoming_riser_no"
                    },
                    {
                        caption: "Due Visual Anomaly",
                        columns: [{
                            caption: "Temporary",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.incoming_riser_bsz_anomaly_vt_temporary",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_bsz_anomaly_vt_temporary_due",
                            alignment: "center"
                        },
                        {
                            caption: "Permanent",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary</div>"));
                            },
                            dataField: "fieldData.incoming_riser_bsz_anomaly_vt_permanent",
                            alignment: "center"
                        },
                        {
                            caption: "Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Status</div>"));
                            },
                            dataField: "fieldData.incoming_riser_bsz_anomaly_vt_permanent_due",
                            alignment: "center"
                        }
                        ]
                    },
                    ]
                },
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color

                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_asz_anomaly_vt_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_asz_anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_asz_anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_asz_anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_asz_anomaly_vt_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_asz_anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_asz_anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_asz_anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_asz_anomaly_thk_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_asz_anomaly_thk_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_asz_anomaly_thk_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_asz_anomaly_thk_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_asz_anomaly_thk_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_asz_anomaly_thk_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_asz_anomaly_thk_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_asz_anomaly_thk_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_bsz_anomaly_vt_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_bsz_anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_bsz_anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_bsz_anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_bsz_anomaly_vt_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_bsz_anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.outgoing_riser_bsz_anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.outgoing_riser_bsz_anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_anomaly_vt_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.pipeline_anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.pipeline_anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_anomaly_vt_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.pipeline_anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.pipeline_anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_anomaly_thk_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_anomaly_thk_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.pipeline_anomaly_thk_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.pipeline_anomaly_thk_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_anomaly_thk_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_anomaly_thk_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.pipeline_anomaly_thk_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.pipeline_anomaly_thk_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_asz_anomaly_vt_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_asz_anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_asz_anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_asz_anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_asz_anomaly_vt_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_asz_anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_asz_anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_asz_anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_asz_anomaly_thk_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_asz_anomaly_thk_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_asz_anomaly_thk_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_asz_anomaly_thk_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_asz_anomaly_thk_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_asz_anomaly_thk_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_asz_anomaly_thk_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_asz_anomaly_thk_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_bsz_anomaly_vt_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_bsz_anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_bsz_anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_bsz_anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_bsz_anomaly_vt_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_bsz_anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.incoming_riser_bsz_anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.incoming_riser_bsz_anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                }

                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                // if (e.rowType === "data" && (e.column.dataField === "fieldData.risk_ranking" || e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.OSI_VT_last_insp_date" || e.column.dataField === "fieldData.OSI_VT_next_insp_date" || e.column.dataField === "fieldData.OSI_VT_status" || e.column.dataField === "fieldData.OSI_NDE_last_insp_date" || e.column.dataField === "fieldData.OSI_NDE_next_insp_date" || e.column.dataField === "fieldData.OSI_NDE_status" || e.column.dataField === "fieldData.anomaly_vt_temporary_due" || e.column.dataField === "fieldData.anomaly_vt_permanent_due" || e.column.dataField === "fieldData.anomaly_Thk_temporary_due" || e.column.dataField === "fieldData.anomaly_Thk_permanent_due" || e.column.dataField === "fieldData.anomaly_vt_temporary" || e.column.dataField === "fieldData.anomaly_vt_permanent" || e.column.dataField === "fieldData.anomaly_Thk_temporary" || e.column.dataField === "fieldData.anomaly_Thk_permanent")) {
                //     e.cellElement.css("text-align", "center");
                // }
            },
            onToolbarPreparing: function (e) {
                var toolbarItems = e.toolbarOptions.items;
                toolbarItems.unshift({
                    location: 'after',
                    widget: 'dxButton',
                    hint: 'Refresh',
                    options: {
                        icon: 'refresh',
                        onClick() {
                            dataGrid.clearFilter();
                        },
                    },
                })
            },

            showBorders: true

        }).dxDataGrid('instance');
    }

    function get_info_pipeline(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/info_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_tag\": \"==" + id_tag + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                console.log(data.response.data);
                call_modal_info_pipeline(data.response.data, id_tag);
            },
            error: function (error) {
                console.log(error);
                get_token_pipeline();
                _token_pipeline = $.cookie("_token_pipeline");
                get_info_pipeline(id_tag);
                //logout();
            }
        });
    }

    function call_modal_info_pipeline(data, id_tag) {
        $('#info_pipeline_modal').modal('show');

        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/pipeline_section/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                "query": [{"id_tag": "==" + id_tag}]
            }),
            async: false,
            success: function (data) {
                console.log('pipeline section:', data.response.data);
                const sections = data.response.data;
                const dataGrid = $("#dataGid-section").dxDataGrid({
                    dataSource: sections,
                    keyExpr: "fieldData.id_section",
                    paging: {
                        pageSize: 5
                    },
                    pager: {
                        showPageSizeSelector: true,
                        allowedPageSizes: [5, 10, 20],
                        showInfo: true
                    },
                    allowColumnReordering: true,
                    allowColumnResizing: true,
                    columnAutoWidth: true,
                    focusedRowEnabled: true,
                    showRowLines: true,
                    wordWrapEnabled: true,
                    columns: [
                        {
                            caption: "Section",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Section</div>"));
                            },
                            dataField: "fieldData.section",
                        },
                        {
                            caption: "KP From (KM)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>KP From<br>(KM)</div>"));
                            },
                            dataField: "fieldData.kilometre_post_from",
                            format: {
                                type: "fixedPoint",
                                precision: 3
                            }
                        },
                        {
                            caption: "KP To (KM)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>KP To<br>(KM)</div>"));
                            },
                            dataField: "fieldData.kilometre_post_to",
                            format: {
                                type: "fixedPoint",
                                precision: 3
                            }
                        },
                        {
                            caption: "Material",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Material</div>"));
                            },
                            dataField: "fieldData.material_spec",
                        }, 
                        {
                            caption: "Nominal Outer Dia (mm)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Nominal Outer Dia<br>(mm)</div>"));
                            },
                            dataField: "fieldData.nominal_outer_dia_mm",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            }
                        },
                        {
                            caption: "Nominal Internal Dia (mm)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Nominal Internal Dia<br>(mm)</div>"));
                            },
                            dataField: "fieldData.nominal_internal_dia_mm",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            }
                        },
                        {
                            caption: "Nominal Wall Thk (mm)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Nominal Wall Thk<br>(mm)</div>"));
                            },
                            dataField: "fieldData.nominal_wall_thk_mm",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            }
                        },
                        {
                            caption: "CA (mm)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>CA<br>(mm)</div>"));
                            },
                            dataField: "fieldData.CA",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            }
                        },
                        {
                            caption: "Max Allowable free span lenght (m)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Max Allowable free span lenght<br>(m)</div>"));
                            },
                            dataField: "fieldData.max_allowable_free_span_length_m",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            }
                        },
                        {
                            caption: "Design Corrosion (mm/yr)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Design Corrosion<br>(mm/yr)</div>"));
                            },
                            dataField: "fieldData.design_corrosion_rate_mm",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            }
                        },
                        {
                            caption: "Thickness Required (mm)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Thickness Required<br>(mm)</div>"));
                            },
                            dataField: "fieldData.t_req",
                            format: {
                                type: "fixedPoint",
                                precision: 2
                            }
                        },         
                    ],
                    repaintChangesOnly: true,
                    showBorders: true
                }).dxDataGrid('instance');
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
            }
        });

        $('#pipeline_number').val(data[0].fieldData.pipeline_no);
        $('#pipeline_number').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_no }).tooltip({ 'trigger': 'hover' });

        $('#pipeline_name').val(data[0].fieldData.pipeline_name);
        $('#pipeline_name').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_name }).tooltip({ 'trigger': 'hover' });

        $('#pid_lanucher').val(data[0].fieldData.pig_lanucher);
        $('#pid_lanucher').tooltip('dispose').tooltip({ title: data[0].fieldData.pig_lanucher }).tooltip({ 'trigger': 'hover' });

        $('#pid_receiver').val(data[0].fieldData.pig_receiver);
        $('#pid_receiver').tooltip('dispose').tooltip({ title: data[0].fieldData.pig_receiver }).tooltip({ 'trigger': 'hover' });

        $('#service').val(data[0].fieldData.service);
        $('#service').tooltip('dispose').tooltip({ title: data[0].fieldData.service }).tooltip({ 'trigger': 'hover' });

        $('#pipeline_length').val(data[0].fieldData.pipeline_length);
        $('#pipeline_length').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_length }).tooltip({ 'trigger': 'hover' });

        $('#nominal_dia').val(data[0].fieldData.nominal_dia_mm ? number_with_comma(parseFloat(data[0].fieldData.nominal_dia_mm).toFixed(2)) : "");
        $('#nominal_dia').tooltip('dispose').tooltip({ title: data[0].fieldData.nominal_dia_mm ? number_with_comma(parseFloat(data[0].fieldData.nominal_dia_mm).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#material_spec').val(data[0].fieldData.material_spec);
        $('#material_spec').tooltip('dispose').tooltip({ title: data[0].fieldData.material_spec }).tooltip({ 'trigger': 'hover' });

        $('#material_type').val(data[0].fieldData.material_type);
        $('#material_type').tooltip('dispose').tooltip({ title: data[0].fieldData.material_type }).tooltip({ 'trigger': 'hover' });

        $('#design_code').val(data[0].fieldData.design_code);
        $('#design_code').tooltip('dispose').tooltip({ title: data[0].fieldData.design_code }).tooltip({ 'trigger': 'hover' });

        $('#design_pressure').val(data[0].fieldData.design_pressure_psi ? number_with_comma(parseFloat(data[0].fieldData.design_pressure_psi).toFixed(2)) : "");
        $('#design_pressure').tooltip('dispose').tooltip({ title: data[0].fieldData.design_pressure_psi ? number_with_comma(parseFloat(data[0].fieldData.design_pressure_psi).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#test_pressure').val(data[0].fieldData.test_pressure_psi ? number_with_comma(parseFloat(data[0].fieldData.test_pressure_psi).toFixed(2)) : "");
        $('#test_pressure').tooltip('dispose').tooltip({ title: data[0].fieldData.test_pressure_psi ? number_with_comma(parseFloat(data[0].fieldData.test_pressure_psi).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#insulation').val(data[0].fieldData.insulation);
        $('#insulation').tooltip('dispose').tooltip({ title: data[0].fieldData.insulation }).tooltip({ 'trigger': 'hover' });

        $('#coating').val(data[0].fieldData.coating);
        $('#coating').tooltip('dispose').tooltip({ title: data[0].fieldData.coating }).tooltip({ 'trigger': 'hover' });

        $('#installation_date').val(data[0].fieldData.installation_date);
        $('#installation_date').tooltip('dispose').tooltip({ title: data[0].fieldData.installation_date }).tooltip({ 'trigger': 'hover' });

        $('#inservice_date').val(data[0].fieldData.inservice_date);
        $('#inservice_date').tooltip('dispose').tooltip({ title: data[0].fieldData.inservice_date }).tooltip({ 'trigger': 'hover' });

        $('#pipe_joint_lenght').val(data[0].fieldData.pipe_joint_length_m ? number_with_comma(parseFloat(data[0].fieldData.pipe_joint_length_m).toFixed(2)) : "");
        $('#pipe_joint_lenght').tooltip('dispose').tooltip({ title: data[0].fieldData.pipe_joint_length_m ? number_with_comma(parseFloat(data[0].fieldData.pipe_joint_length_m).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#design_product_density_min').val(data[0].fieldData.design_product_density_min ? number_with_comma(parseFloat(data[0].fieldData.design_product_density_min).toFixed(2)) : "");
        $('#design_product_density_min').tooltip('dispose').tooltip({ title: data[0].fieldData.design_product_density_min ? number_with_comma(parseFloat(data[0].fieldData.design_product_density_min).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#design_product_density_max').val(data[0].fieldData.design_product_density_max ? number_with_comma(parseFloat(data[0].fieldData.design_product_density_max).toFixed(2)) : "");
        $('#design_product_density_max').tooltip('dispose').tooltip({ title: data[0].fieldData.design_product_density_max ? number_with_comma(parseFloat(data[0].fieldData.design_product_density_max).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#product_density_operational').val(data[0].fieldData.product_density_operational ? number_with_comma(parseFloat(data[0].fieldData.product_density_operational).toFixed(2)) : "");
        $('#product_density_operational').tooltip('dispose').tooltip({ title: data[0].fieldData.product_density_operational ? number_with_comma(parseFloat(data[0].fieldData.product_density_operational).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#smts').val(data[0].fieldData.SMTS_mpa ? number_with_comma(parseFloat(data[0].fieldData.SMTS_mpa).toFixed(2)) : "");
        $('#smts').tooltip('dispose').tooltip({ title: data[0].fieldData.SMTS_mpa ? number_with_comma(parseFloat(data[0].fieldData.SMTS_mpa).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#smys_mpa').val(data[0].fieldData.SMYS_mpa ? number_with_comma(parseFloat(data[0].fieldData.SMYS_mpa).toFixed(2)) : "");
        $('#smys_mpa').tooltip('dispose').tooltip({ title: data[0].fieldData.SMYS_mpa ? number_with_comma(parseFloat(data[0].fieldData.SMYS_mpa).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#smys_psi').val(data[0].fieldData.SMYS_psi ? number_with_comma(parseFloat(data[0].fieldData.SMYS_psi).toFixed(2)) : "");
        $('#smys_psi').tooltip('dispose').tooltip({ title: data[0].fieldData.SMYS_psi ? number_with_comma(parseFloat(data[0].fieldData.SMYS_psi).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#sea_floor_temp_max').val(data[0].fieldData.sea_floor_temp_c_max ? number_with_comma(parseFloat(data[0].fieldData.sea_floor_temp_c_max).toFixed(2)) : "");
        $('#sea_floor_temp_max').tooltip('dispose').tooltip({ title: data[0].fieldData.sea_floor_temp_c_max ? number_with_comma(parseFloat(data[0].fieldData.sea_floor_temp_c_max).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#sea_floor_temp_min').val(data[0].fieldData.sea_floor_temp_c_min ? number_with_comma(parseFloat(data[0].fieldData.sea_floor_temp_c_min).toFixed(2)) : "");
        $('#sea_floor_temp_min').tooltip('dispose').tooltip({ title: data[0].fieldData.sea_floor_temp_c_min ? number_with_comma(parseFloat(data[0].fieldData.sea_floor_temp_c_min).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#soil_longitudinal_friction').val(data[0].fieldData.soil_longitudinal_friction ? number_with_comma(parseFloat(data[0].fieldData.soil_longitudinal_friction).toFixed(2)) : "");
        $('#soil_longitudinal_friction').tooltip('dispose').tooltip({ title: data[0].fieldData.soil_longitudinal_friction ? number_with_comma(parseFloat(data[0].fieldData.soil_longitudinal_friction).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#soil_lateral_friction').val(data[0].fieldData.soil_lateral_friction ? number_with_comma(parseFloat(data[0].fieldData.soil_lateral_friction).toFixed(2)) : "");
        $('#soil_lateral_friction').tooltip('dispose').tooltip({ title: data[0].fieldData.soil_lateral_friction ? number_with_comma(parseFloat(data[0].fieldData.soil_lateral_friction).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#mean_sea_level_height_min').val(data[0].fieldData.mean_sea_level_height_min ? number_with_comma(parseFloat(data[0].fieldData.mean_sea_level_height_min).toFixed(2)) : "");
        $('#mean_sea_level_height_min').tooltip('dispose').tooltip({ title: data[0].fieldData.mean_sea_level_height_min ? number_with_comma(parseFloat(data[0].fieldData.mean_sea_level_height_min).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#mean_sea_level_height_max').val(data[0].fieldData.mean_sea_level_height_max ? number_with_comma(parseFloat(data[0].fieldData.mean_sea_level_height_max).toFixed(2)) : "");
        $('#mean_sea_level_height_max').tooltip('dispose').tooltip({ title: data[0].fieldData.mean_sea_level_height_max ? number_with_comma(parseFloat(data[0].fieldData.mean_sea_level_height_max).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#aluminium_anode_density').val(data[0].fieldData.aluminium_anode_density ? number_with_comma(parseFloat(data[0].fieldData.aluminium_anode_density).toFixed(2)) : "");
        $('#aluminium_anode_density').tooltip('dispose').tooltip({ title: data[0].fieldData.aluminium_anode_density ? number_with_comma(parseFloat(data[0].fieldData.aluminium_anode_density).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#anode_material').val(data[0].fieldData.anode_material);
        $('#anode_material').tooltip('dispose').tooltip({ title: data[0].fieldData.anode_material }).tooltip({ 'trigger': 'hover' });

        $('#cp_type').val(data[0].fieldData.cp_type);
        $('#cp_type').tooltip('dispose').tooltip({ title: data[0].fieldData.cp_type }).tooltip({ 'trigger': 'hover' });

        $('#pipeline_anomaly_thk_permanent').val(data[0].fieldData.pipeline_anomaly_thk_permanent);
        $('#pipeline_anomaly_thk_permanent').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_thk_permanent }).tooltip({ 'trigger': 'hover' });

        $('#pipeline_anomaly_thk_permanent_due').val(data[0].fieldData.pipeline_anomaly_thk_permanent_due);
        $('#pipeline_anomaly_thk_permanent_due').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_thk_permanent_due }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_anomaly_thk_permanent_due').css('background-color', get_color_status('due', data[0].fieldData.pipeline_anomaly_thk_permanent_due));

        $('#pipeline_anomaly_thk_permanent_repair').val(data[0].fieldData.pipeline_anomaly_thk_permanent_repair);
        $('#pipeline_anomaly_thk_permanent_repair').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_thk_permanent_repair }).tooltip({ 'trigger': 'hover' });

        // $('#pipeline_anomaly_thk_permanent_file_related').val(data[0].fieldData.pipeline_anomaly_thk_permanent_file_related);
        // $('#pipeline_anomaly_thk_permanent_file_related').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_thk_permanent_file_related }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_anomaly_thk_permanent_file_related').html('<a href="' + data[0].fieldData["pipeline_inspection_doc_p_thk::file"] + '"  target="_blank" download="' + data[0].fieldData.pipeline_anomaly_thk_permanent_file_relate + '">' + data[0].fieldData.pipeline_anomaly_thk_permanent_file_related + '</a>');

        $('#pipeline_anomaly_thk_temporary').val(data[0].fieldData.pipeline_anomaly_thk_temporary);
        $('#pipeline_anomaly_thk_temporary').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_thk_temporary }).tooltip({ 'trigger': 'hover' });

        $('#pipeline_anomaly_thk_temporary_due').val(data[0].fieldData.pipeline_anomaly_thk_temporary_due);
        $('#pipeline_anomaly_thk_temporary_due').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_thk_temporary_due }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_anomaly_thk_temporary_due').css('background-color', get_color_status('due', data[0].fieldData.pipeline_anomaly_thk_temporary_due));

        $('#pipeline_anomaly_thk_temporary_repair').val(data[0].fieldData.pipeline_anomaly_thk_temporary_repair);
        $('#pipeline_anomaly_thk_temporary_repair').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_thk_temporary_repair }).tooltip({ 'trigger': 'hover' });

        // $('#pipeline_anomaly_thk_temporary_file_related').val(data[0].fieldData.pipeline_anomaly_thk_temporary_file_related);
        // $('#pipeline_anomaly_thk_temporary_file_related').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_thk_temporary_file_related }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_anomaly_thk_temporary_file_related').html('<a href="' + data[0].fieldData["pipeline_inspection_doc_t_thk::file"] + '"  target="_blank" download="' + data[0].fieldData.pipeline_anomaly_thk_temporary_file_related + '">' + data[0].fieldData.pipeline_anomaly_thk_temporary_file_related + '</a>');

        $('#pipeline_anomaly_vt_permanent').val(data[0].fieldData.pipeline_anomaly_vt_permanent);
        $('#pipeline_anomaly_vt_permanent').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_vt_permanent }).tooltip({ 'trigger': 'hover' });

        $('#pipeline_anomaly_vt_permanent_due').val(data[0].fieldData.pipeline_anomaly_vt_permanent_due);
        $('#pipeline_anomaly_vt_permanent_due').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_vt_permanent_due }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_anomaly_vt_permanent_due').css('background-color', get_color_status('due', data[0].fieldData.pipeline_anomaly_vt_permanent_due));

        $('#pipeline_anomaly_vt_permanent_repair').val(data[0].fieldData.pipeline_anomaly_vt_permanent_repair);
        $('#pipeline_anomaly_vt_permanent_repair').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_vt_permanent_repair }).tooltip({ 'trigger': 'hover' });

        // $('#pipeline_anomaly_vt_permanent_file_related').val(data[0].fieldData.pipeline_anomaly_vt_permanent_file_related);
        // $('#pipeline_anomaly_vt_permanent_file_related').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_vt_permanent_file_related }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_anomaly_vt_permanent_file_related').html('<a href="' + data[0].fieldData["pipeline_inspection_doc_p_vt::file"] + '"  target="_blank" download="' + data[0].fieldData.pipeline_anomaly_vt_permanent_file_related + '">' + data[0].fieldData.pipeline_anomaly_vt_permanent_file_related + '</a>');

        $('#pipeline_anomaly_vt_temporary').val(data[0].fieldData.pipeline_anomaly_vt_temporary);
        $('#pipeline_anomaly_vt_ptemporary').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_vt_temporary }).tooltip({ 'trigger': 'hover' });

        $('#pipeline_anomaly_vt_temporary_due').val(data[0].fieldData.pipeline_anomaly_vt_temporary_due);
        $('#pipeline_anomaly_vt_temporary_due').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_vt_temporary_due }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_anomaly_vt_temporary_due').css('background-color', get_color_status('due', data[0].fieldData.pipeline_anomaly_vt_temporary_due));

        $('#pipeline_anomaly_vt_temporary_repair').val(data[0].fieldData.pipeline_anomaly_vt_temporary_repair);
        $('#pipeline_anomaly_vt_temporary_repair').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_vt_temporary_repair }).tooltip({ 'trigger': 'hover' });

        // $('#pipeline_anomaly_vt_temporary_file_related').val(data[0].fieldData.pipeline_anomaly_vt_temporary_file_related);
        // $('#pipeline_anomaly_vt_temporary_file_related').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_anomaly_vt_temporary_file_related }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_anomaly_vt_temporary_file_related').html('<a href="' + data[0].fieldData["pipeline_inspection_doc_t_vt::file"] + '"  target="_blank" download="' + data[0].fieldData.pipeline_anomaly_vt_temporary_file_related + '">' + data[0].fieldData.pipeline_anomaly_vt_temporary_file_related + '</a>');

        $('#risk_level').val(data[0].fieldData.risk_level);
        $('#risk_level').tooltip('dispose').tooltip({ title: data[0].fieldData.risk_level }).tooltip({ 'trigger': 'hover' });
        $('#risk_level').css('background-color', get_color_status('risk_level', data[0].fieldData.risk_level));

        $('#risk_ranking').val(data[0].fieldData.risk_ranking);
        $('#risk_ranking').tooltip('dispose').tooltip({ title: data[0].fieldData.risk_ranking }).tooltip({ 'trigger': 'hover' });
        $('#risk_ranking').css('background-color', get_color_status('risk_ranking', data[0].fieldData.risk_ranking));

        $('#pipeline_status').val(data[0].fieldData.pipeline_status);
        $('#pipeline_status').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_status }).tooltip({ 'trigger': 'hover' });
        $('#pipeline_status').css('background-color', get_color_status('integrity', data[0].fieldData.pipeline_status));

        $('#pipeline_remark').val(data[0].fieldData.pipeline_remark);

        $('#weld_log_distance_m').val(data[0].fieldData.pipeline_max_scr.split("|")[0] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[0]).toFixed(2)) : "");
        $('#weld_log_distance_m').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_max_scr.split("|")[0] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[0]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#joint_number').val(data[0].fieldData.pipeline_max_scr.split("|")[1]);
        $('#joimt_number').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_max_scr.split("|")[1] }).tooltip({ 'trigger': 'hover' });

        $('#t_nom').val(data[0].fieldData.pipeline_max_scr.split("|")[2] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[2]).toFixed(2)) : "");
        $('#t_nom').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_max_scr.split("|")[2] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[2]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#t_req').val(data[0].fieldData.pipeline_max_scr.split("|")[3] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[3]).toFixed(2)) : "");
        $('#t_req').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_max_scr.split("|")[3] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[3]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#t_actual').val(data[0].fieldData.pipeline_max_scr.split("|")[4] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[4]).toFixed(2)) : "");
        $('#t_actual').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_max_scr.split("|")[4] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[4]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#scr_pp').val(data[0].fieldData.pipeline_max_scr.split("|")[5] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[5]).toFixed(2)) : "");
        $('#scr_pp').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_max_scr.split("|")[5] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[5]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#rl_pp').val(data[0].fieldData.pipeline_max_scr.split("|")[6] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[6]).toFixed(2)) : "");
        $('#rl_pp').tooltip('dispose').tooltip({ title: data[0].fieldData.pipeline_max_scr.split("|")[6] ? number_with_comma(parseFloat(data[0].fieldData.pipeline_max_scr.split("|")[6]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

    }

    function get_color_status(type, status) {
        let color = "";
        if(type == 'integrity') {
            if(status == 'P1') {
                color = '#FF0000';
            } else if (status == 'P2') {
                color = '#F69546';
            } else if (status == 'P3') {
                color = '#FFCC00';
            } else if (status == 'P4') {
                color = '#FFFF00';
            } else if (status == 'P5') {
                color = '#66FF33';
            } else if (status == 'P6') {
                color = '#43a047';
            } else if (status == 'P0') {
                color = '#000';
            }
        } else if (type == 'due') {
            if(status == 'Not due') {
                color = '#66FF33'
            } else if (status == 'On due') {
                color = '#FFCC00'
            } else if (status == 'Overdue') {
                color = '#FF0000'
            } else if (status == 'Completed') {
                color = '#66FF33'
            }
        } else if (type == 'risk_level') {
            if(status == 'A1' || status == 'A2' || status == 'A3' || status == 'B1' || status == 'B2' || status == 'C1') {
                color = '#00AE50';
            } else if (status == 'A4' || status == 'A5' || status == 'B3' || status == 'B4' || status == 'C2' || status == 'C3' || status == 'D1' || status == 'D2' || status == 'E1') {
                color = '#FFFF00';
            } else if (status == 'B5' || status == 'C4' || status == 'D3' || status == 'E2') {
                color = '#FD9A00';
            } else if (status == 'C5' || status == 'D4' || status == 'D5' || status == 'E3' || status == 'E4' || status == 'E5') {
                color = '#FF0000';
            }
        } else if (type == 'risk_ranking') {
            if(status == 'LOW') {
                color = '#66FF33'
            } else if (status == 'MEDIUM') {
                color = '#FFCC00'
            } else if (status == 'HIGH') {
                color = '#FD9A00'
            } else if (status == 'VERY HIGH') {
                color = '#FF0000'
            }
        }
        return color;
    }

    function get_info_outgoing_riser(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/outgoing_riser_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_tag\": \"==" + id_tag + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                console.log(data.response.data);
                call_modal_info_riser(data.response.data,'Outgoing Riser Information','outgoing');
            },
            error: function (error) {
                console.log(error);
                get_token_pipeline();
                _token_pipeline = $.cookie("_token_pipeline");
                get_info_outgoing_riser(id_tag);
                //logout();
            }
        });
    }

    function get_info_incoming_riser(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/incoming_riser_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_tag\": \"==" + id_tag + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                console.log(data.response.data);
                call_modal_info_riser(data.response.data,'Incoming Riser Information','incoming');
            },
            error: function (error) {
                console.log(error);
                get_token_pipeline();
                _token_pipeline = $.cookie("_token_pipeline");
                get_info_incoming_riser(id_tag);
                //logout();
            }
        });
    }
    
    function call_modal_info_riser(data,type,riser) {
        
        $('#info_riser_modal').modal('show');

        $('#riser_header').html(type);

        if(riser == 'outgoing') {
            $('#tag_no').val(data[0].fieldData.outgoing_riser_no);
            $('#tag_no').tooltip('dispose').tooltip({ title: data[0].fieldData.outgoing_riser_no }).tooltip({ 'trigger': 'hover' });

            $('#rs_cml').val(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[0]);
            $('#rs_cml').tooltip('dispose').tooltip({ title: data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[0] }).tooltip({ 'trigger': 'hover' });

            $('#rs_part').val(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[1]);
            $('#rs_part').tooltip('dispose').tooltip({ title: data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[1] }).tooltip({ 'trigger': 'hover' });

            $('#rs_tp').val(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[2]);
            $('#rs_tp').tooltip('dispose').tooltip({ title: data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[2] }).tooltip({ 'trigger': 'hover' });

            $('#rs_oclock').val(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[3]);
            $('#rs_oclock').tooltip('dispose').tooltip({ title: data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[3] }).tooltip({ 'trigger': 'hover' });

            $('#rs_t_actual').val(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[6] ? number_with_comma(parseFloat(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[6]).toFixed(2)) : "");
            $('#rs_t_actual').tooltip('dispose').tooltip({ title: data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[6] ? number_with_comma(parseFloat(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[6]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

            $('#max_scr').val(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[4] ? number_with_comma(parseFloat(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[4]).toFixed(2)) : "");
            $('#max_scr').tooltip('dispose').tooltip({ title: data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[4] ? number_with_comma(parseFloat(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[4]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

            $('#rl').val(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[5] ? number_with_comma(parseFloat(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[5]).toFixed(2)) : "");
            $('#rl').tooltip('dispose').tooltip({ title: data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[5] ? number_with_comma(parseFloat(data[0].fieldData["info::outgoing_riser_max_scr"].split("|")[5]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });
        } else {
            $('#tag_no').val(data[0].fieldData.incoming_riser_no);
            $('#tag_no').tooltip('dispose').tooltip({ title: data[0].fieldData.incoming_riser_no }).tooltip({ 'trigger': 'hover' });

            $('#rs_cml').val(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[0]);
            $('#rs_cml').tooltip('dispose').tooltip({ title: data[0].fieldData["info::incoming_riser_max_scr"].split("|")[0] }).tooltip({ 'trigger': 'hover' });

            $('#rs_part').val(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[1]);
            $('#rs_part').tooltip('dispose').tooltip({ title: data[0].fieldData["info::incoming_riser_max_scr"].split("|")[1] }).tooltip({ 'trigger': 'hover' });

            $('#rs_tp').val(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[2]);
            $('#rs_tp').tooltip('dispose').tooltip({ title: data[0].fieldData["info::incoming_riser_max_scr"].split("|")[2] }).tooltip({ 'trigger': 'hover' });

            $('#rs_oclock').val(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[3]);
            $('#rs_oclock').tooltip('dispose').tooltip({ title: data[0].fieldData["info::incoming_riser_max_scr"].split("|")[3] }).tooltip({ 'trigger': 'hover' });

            $('#rs_t_actual').val(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[6] ? number_with_comma(parseFloat(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[6]).toFixed(2)) : "");
            $('#rs_t_actual').tooltip('dispose').tooltip({ title: data[0].fieldData["info::incoming_riser_max_scr"].split("|")[6] ? number_with_comma(parseFloat(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[6]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

            $('#max_scr').val(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[4] ? number_with_comma(parseFloat(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[4]).toFixed(2)) : "");
            $('#max_scr').tooltip('dispose').tooltip({ title: data[0].fieldData["info::incoming_riser_max_scr"].split("|")[4] ? number_with_comma(parseFloat(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[4]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

            $('#rl').val(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[5] ? number_with_comma(parseFloat(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[5]).toFixed(2)) : "");
            $('#rl').tooltip('dispose').tooltip({ title: data[0].fieldData["info::incoming_riser_max_scr"].split("|")[5] ? number_with_comma(parseFloat(data[0].fieldData["info::incoming_riser_max_scr"].split("|")[5]).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });
        }

        $('#design_life').val(data[0].fieldData.design_life);
        $('#design_life').tooltip('dispose').tooltip({ title: data[0].fieldData.design_life }).tooltip({ 'trigger': 'hover' });

        $('#ca').val(data[0].fieldData.CA);
        $('#ca').tooltip('dispose').tooltip({ title: data[0].fieldData.CA }).tooltip({ 'trigger': 'hover' });

        $('#pwht').val(data[0].fieldData.PWHT);
        $('#pwht').tooltip('dispose').tooltip({ title: data[0].fieldData.PWHT }).tooltip({ 'trigger': 'hover' });

        $('#design_temp').val(data[0].fieldData.design_temp_c ? number_with_comma(parseFloat(data[0].fieldData.design_temp_c).toFixed(2)) : "");
        $('#design_temp').tooltip('dispose').tooltip({ title: data[0].fieldData.design_temp_c ? number_with_comma(parseFloat(data[0].fieldData.design_temp_c).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#operating_pressure').val(data[0].fieldData.operating_pressure_psi ? number_with_comma(parseFloat(data[0].fieldData.operating_pressure_psi).toFixed(2)) : "");
        $('#operating_pressure').tooltip('dispose').tooltip({ title: data[0].fieldData.operating_pressure_psi ? number_with_comma(parseFloat(data[0].fieldData.operating_pressure_psi).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#maop').val(data[0].fieldData.MAOP_barg ? number_with_comma(parseFloat(data[0].fieldData.MAOP_barg).toFixed(2)) : "");
        $('#maop').tooltip('dispose').tooltip({ title: data[0].fieldData.MAOP_barg ? number_with_comma(parseFloat(data[0].fieldData.MAOP_barg).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#design_corrosion').val(data[0].fieldData.design_corrosion_rate_mm ? number_with_comma(parseFloat(data[0].fieldData.design_corrosion_rate_mm).toFixed(2)) : "");
        $('#design_corrosion').tooltip('dispose').tooltip({ title: data[0].fieldData.design_corrosion_rate_mm ? number_with_comma(parseFloat(data[0].fieldData.design_corrosion_rate_mm).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#max_operating_temp').val(data[0].fieldData.max_operating_temp_c ? number_with_comma(parseFloat(data[0].fieldData.max_operating_temp_c).toFixed(2)) : "");
        $('#max_operating_temp').tooltip('dispose').tooltip({ title: data[0].fieldData.max_operating_temp_c ? number_with_comma(parseFloat(data[0].fieldData.max_operating_temp_c).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#nominal_outer_dia').val(data[0].fieldData.nominal_outer_dia_mm ? number_with_comma(parseFloat(data[0].fieldData.nominal_outer_dia_mm).toFixed(2)) : "");
        $('#nominal_outer_dia').tooltip('dispose').tooltip({ title: data[0].fieldData.nominal_outer_dia_mm ? number_with_comma(parseFloat(data[0].fieldData.nominal_outer_dia_mm).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#nominal_internal_dia').val(data[0].fieldData.nominal_internal_dia_mm ? number_with_comma(parseFloat(data[0].fieldData.nominal_internal_dia_mm).toFixed(2)) : "");
        $('#nominal_internal_dia').tooltip('dispose').tooltip({ title: data[0].fieldData.nominal_internal_dia_mm ? number_with_comma(parseFloat(data[0].fieldData.nominal_internal_dia_mm).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#nominal_wall_thickness').val(data[0].fieldData.nominal_wall_thk_mm ? number_with_comma(parseFloat(data[0].fieldData.nominal_wall_thk_mm).toFixed(2)) : "");
        $('#nominal_wall_thickness').tooltip('dispose').tooltip({ title: data[0].fieldData.nominal_wall_thk_mm ? number_with_comma(parseFloat(data[0].fieldData.nominal_wall_thk_mm).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#min_required_thickness').val(data[0].fieldData.t_req ? number_with_comma(parseFloat(data[0].fieldData.t_req).toFixed(2)) : "");
        $('#min_required_thickness').tooltip('dispose').tooltip({ title:data[0].fieldData.t_req ? number_with_comma(parseFloat(data[0].fieldData.t_req).toFixed(2)) : "" }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_thk_permanent').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent"]);
        $('#riser_asz_anomaly_thk_permanent').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_thk_permanent_due').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent_due"]);
        $('#riser_asz_anomaly_thk_permanent_due').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent_due"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_asz_anomaly_thk_permanent_due').css('background-color', get_color_status('due', data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent_due"]));

        $('#riser_asz_anomaly_thk_permanent_repair').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent_repair"]);
        $('#riser_asz_anomaly_thk_permanent_repair').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent_repair"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_thk_temporary').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary"]);
        $('#riser_asz_anomaly_thk_temporary').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_thk_temporary_due').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary_due"]);
        $('#riser_asz_anomaly_thk_temporary_due').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary_due"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_asz_anomaly_thk_temporary_due').css('background-color', get_color_status('due', data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary_due"]));

        $('#riser_asz_anomaly_thk_temporary_repair').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary_repair"]);
        $('#riser_asz_anomaly_thk_temporary_repair').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary_repair"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_vt_permanent').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent"]);
        $('#riser_asz_anomaly_vt_permanent').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_vt_permanent_due').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_due"]);
        $('#riser_asz_anomaly_vt_permanent_due').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_due"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_asz_anomaly_vt_permanent_due').css('background-color', get_color_status('due', data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_due"]));

        $('#riser_asz_anomaly_vt_permanent_repair').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_repair"]);
        $('#riser_asz_anomaly_vt_permanent_repair').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_repair"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_vt_temporary').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary"]);
        $('#riser_asz_anomaly_vt_temporary').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_vt_temporary_due').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary_due"]);
        $('#riser_asz_anomaly_vt_temporary_due').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary_due"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_asz_anomaly_vt_temporary_due').css('background-color', get_color_status('due', data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary_due"]));

        $('#riser_asz_anomaly_vt_temporary_repair').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary_repair"]);
        $('#riser_asz_anomaly_vt_temporary_repair').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary_repair"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_bsz_anomaly_vt_permanent').val(data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_permanent"]);
        $('#riser_bsz_anomaly_vt_permanent').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_permanent"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_bsz_anomaly_vt_permanent_due').val(data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_permanent_due"]);
        $('#riser_bsz_anomaly_vt_permanent_due').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_permanent_due"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_bsz_anomaly_vt_permanent_due').css('background-color', get_color_status('due', data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_permanent_due"]));

        $('#riser_asz_anomaly_vt_permanent_repair').val(data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_repair"]);
        $('#riser_asz_anomaly_vt_permanent_repair').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_repair"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_bsz_anomaly_vt_temporary').val(data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary"]);
        $('#riser_bsz_anomaly_vt_temporary').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_bsz_anomaly_vt_temporary_due').val(data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary_due"]);
        $('#riser_bsz_anomaly_vt_temporary_due').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary_due"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_bsz_anomaly_vt_temporary_due').css('background-color', get_color_status('due', data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary_due"]));

        $('#riser_bsz_anomaly_vt_temporary_repair').val(data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary_repair"]);
        $('#riser_bsz_anomaly_vt_temporary_repair').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary_repair"] }).tooltip({ 'trigger': 'hover' });

        $('#riser_asz_anomaly_thk_permanent_file_related').html(`<a href="${ data[0].fieldData[riser + "_riser_asz_inspection_doc_p_thk::file"] }" target="_blank" download="${ data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent_file_related"] }">${ data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_permanent_file_related"] }</a>`);

        $('#riser_asz_anomaly_thk_temporary_file_related').html(`<a href="${ data[0].fieldData[riser + "_riser_asz_inspection_doc_t_thk::file"] }" target="_blank" download="${ data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary_file_related"] }">${ data[0].fieldData["info::" + riser + "_riser_asz_anomaly_thk_temporary_file_related"] }</a>`);

        $('#riser_asz_anomaly_vt_permanent_file_related').html(`<a href="${ data[0].fieldData[riser + "_riser_asz_inspection_doc_p_vt::file"] }" target="_blank" download="${ data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_file_related"] }">${ data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_permanent_file_related"] }</a>`);

        $('#riser_asz_anomaly_vt_temporary_file_related').html(`<a href="${ data[0].fieldData[riser + "_riser_asz_inspection_doc_t_vt::file"] }" target="_blank" download="${ data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary_file_related"] }">${ data[0].fieldData["info::" + riser + "_riser_asz_anomaly_vt_temporary_file_related"] }</a>`);

        $('#riser_bsz_anomaly_vt_permanent_file_related').html(`<a href="${ data[0].fieldData[riser + "_riser_bsz_inspection_doc_p_vt::file"] }" target="_blank" download="${ data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_permanent_file_related"] }">${ data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_permanent_file_related"] }</a>`);

        $('#riser_bsz_anomaly_vt_temporary_file_related').html(`<a href="${ data[0].fieldData[riser + "_riser_bsz_inspection_doc_t_vt::file"] }" target="_blank" download="${ data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary_file_related"] }">${ data[0].fieldData["info::" + riser + "_riser_bsz_anomaly_vt_temporary_file_related"] }</a>`);

        $('#riser_risk_level').val(data[0].fieldData["info::risk_level"]);
        $('#riser_risk_level').tooltip('dispose').tooltip({ title: data[0].fieldData["info::risk_level"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_risk_level').css('background-color', get_color_status('risk_level', data[0].fieldData["info::risk_level"]));

        $('#riser_risk_ranking').val(data[0].fieldData["info::risk_ranking"]);
        $('#riser_risk_ranking').tooltip('dispose').tooltip({ title: data[0].fieldData["info::risk_ranking"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_risk_ranking').css('background-color', get_color_status('risk_ranking', data[0].fieldData["info::risk_ranking"]));

        $('#riser_status').val(data[0].fieldData["info::" + riser + "_riser_status"]);
        $('#riser_status').tooltip('dispose').tooltip({ title: data[0].fieldData["info::" + riser + "_riser_status"] }).tooltip({ 'trigger': 'hover' });
        $('#riser_status').css('background-color', get_color_status('integrity', data[0].fieldData["info::" + riser + "_riser_status"]));

        
       
    }

    function get_year(value) {
        if (value === null || value === undefined || value === "") {
            return ""
        } else {
            var parts = value.split('/');
            return parts[2]
        }
    }

    function get_const(id_tag,type) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/" + type + "_design_spec_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    call_modal_library(id_tag,type);
                }
            }
        });

        const dataGrid = $("#grid_const_report").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function get_insp_report(id_tag,type) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/" + type + "_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    call_modal_library(id_tag,type);
                }
            }
        });

        const dataGrid = $("#grid_insp_report").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function get_gen_doc(id_tag,type) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/" + type + "_general_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    call_modal_library(id_tag,type);
                }
            }
        });

        const dataGrid = $("#grid_doc_report").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function change_color() {
        for(var i = 0; i < dataArr.response.data.length; i++) {
            $('#' + dataArr.response.data[i].fieldData.pipeline_web_id).attr('style', "stroke: " + get_color_code(dataArr.response.data[i].fieldData.pipeline_status));
            $('#' + dataArr.response.data[i].fieldData.outgoing_riser_web_id).attr('style', "stroke: " + get_color_code(dataArr.response.data[i].fieldData.outgoing_riser_status));
            $('#' + dataArr.response.data[i].fieldData.incoming_riser_web_id).attr('style', "stroke: " + get_color_code(dataArr.response.data[i].fieldData.incoming_riser_status));
        }
    }

    function get_color_code(p) {
        if(p == "P1") {
            return "#ff0000";
        }else if(p == "P2") {
            return "#F69546";
        }else if(p == "P3") {
            return "#FFCC00";
        }else if(p == "P4") {
            return "#FFFF00";
        }else if(p == "P5") {
            return "#66FF33";
        }else if(p == "P6") {
            return "#43a047";
        }else if(p == "P0") {
            return "#000";
        }else {
            return "gray";
        }
    } 

    $(function() {
        $('.pipeline-line').click(function() {
            const line_no = $(this).attr('name');
            console.log(line_no);
            get_info_pipeline_from_schematic(line_no);
        })
    })

    $(function() {
        $('.out-riser-line').click(function() {
            const line_no = $(this).attr('name');
            console.log(line_no);
            if(line_no) {
                get_info_outgoing_riser_from_schematic(line_no);
            } else {
                alert("No records match the request");
            }
        })
    })

    $(function() {
        $('.in-riser-line').click(function() {
            const line_no = $(this).attr('name');
            console.log(line_no);
            if(line_no) {
                get_info_incoming_riser_from_schematic(line_no);
            } else {
                alert("No records match the request");
            }
        })
    })

    function get_info_pipeline_from_schematic(line_no) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/info_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"pipeline_no\": \"==" + line_no + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                console.log(data.response.data);
                call_modal_info_pipeline(data.response.data);
            },
            error: function (error) {
                console.log(error);
                const code = error.responseJSON.messages[0].code;
                if(code == 401) {
                    alert(error.responseJSON.messages[0].message);
                } else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    get_info_pipeline_from_schematic(line_no);
                } 
                
            }
        });
    }

    function get_info_outgoing_riser_from_schematic(line_no) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/outgoing_riser_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"outgoing_riser_no\": \"==" + line_no + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                console.log(data.response.data);
                call_modal_info_riser(data.response.data,'Outgoing Riser Information','outgoing');
            },
            error: function (error) {
                console.log(error);
                const code = error.responseJSON.messages[0].code;
                if(code == 401) {
                    alert(error.responseJSON.messages[0].message);
                } else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    get_info_outgoing_riser_from_schematic(line_no);
                }
            }
        });
    }

    function get_info_incoming_riser_from_schematic(line_no) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/incoming_riser_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"incoming_riser_no\": \"==" + line_no + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                console.log(data.response.data);
                call_modal_info_riser(data.response.data,'Incoming Riser Information','incoming');
            },
            error: function (error) {
                console.log(error);
                const code = error.responseJSON.messages[0].code;
                if(code == 401) {
                    alert(error.responseJSON.messages[0].message);
                } else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    get_info_incoming_riser_from_schematic(id_tag);
                }
            }
        });
    }

    function number_with_comma(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function set_rl(data) {
        if(data.fieldData.rl_manual) {
            return number_with_comma(parseFloat(data.fieldData.rl_manual).toFixed(2));
        } else {
            return data.fieldData.pipeline_max_scr.split("|")[6] ? number_with_comma(parseFloat(data.fieldData.pipeline_max_scr.split("|")[6]).toFixed(2)) : "N/A";
        }
    }

    function get_pipeline_inspection_history(id_tag,tag_no) {
        console.log(id_tag);
        let history_list = '';
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/pipeline_report/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log('report_data:', data.response.data);
                history_list = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    get_pipeline_inspection_history(id_tag,tag_no);
                }
            }
        });

        $('#pipeline_history_modal').modal('show');
        $('#history_tag_no').html(tag_no);

        const dataGrid = $("#grid_inspection_history").dxDataGrid({
            dataSource: history_list,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.inspection_date",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Thickness Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Thickness<br>Status</div>"));
                    },
                    dataField: "fieldData.pipeline_status_thickness",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.pipeline_status_visual",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_status_thickness") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_status_thickness == "P1" ? "#FF0000" : e.data.fieldData.pipeline_status_thickness == "P2" ? "#F69546" : e.data.fieldData.pipeline_status_thickness == "P3" ? "#FFCC00" : e.data.fieldData.pipeline_status_thickness == "P4" ? "#FFFF00" : e.data.fieldData.pipeline_status_thickness == "P5" ? "#66FF33" : e.data.fieldData.pipeline_status_thickness == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.pipeline_status_visual") {
                    e.cellElement.css("background-color", e.data.fieldData.pipeline_status_visual == "P1" ? "#FF0000" : e.data.fieldData.pipeline_status_visual == "P2" ? "#F69546" : e.data.fieldData.pipeline_status_visual == "P3" ? "#FFCC00" : e.data.fieldData.pipeline_status_visual == "P4" ? "#FFFF00" : e.data.fieldData.pipeline_status_visual == "P5" ? "#66FF33" : e.data.fieldData.pipeline_status_visual == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');

        let dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/pipeline_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                    //call_modal_library(id_tag);
                }
            }
        });

        const dataGridReport = $("#grid_insp_report_history").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: false
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,

            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }
    
    function get_out_riser_inspection_history(id_tag,tag_no) {
        console.log(id_tag);
        let asz_history_list_routine = '';
        let asz_history_list_other = '';
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/outgoing_riser_asz_report/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log('report_data:', data.response.data);
                asz_history_list_routine = data.response.data.filter(r => r.fieldData.inspection_type == 'Routine');
                asz_history_list_other = data.response.data.filter(r => r.fieldData.inspection_type == 'Monitoring' || r.fieldData.inspection_type == 'Anomaly Monitoring' || r.fieldData.inspection_type == 'Adhoc');
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    // get_token_pipeline();
                    // _token_pipeline = $.cookie("_token_pipeline");
                    // get_out_riser_inspection_history(id_tag,tag_no);
                }
            }
        });

        let bsz_history_list = '';
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/outgoing_riser_bsz_report/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log('report_data:', data.response.data);
                bsz_history_list = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    // get_token_pipeline();
                    // _token_pipeline = $.cookie("_token_pipeline");
                    // get_out_riser_inspection_history(id_tag,tag_no);
                }
            }
        });

        $('#out_riser_history_modal').modal('show');
        $('#history_tag_no_for_out_riser').html(tag_no);

        const dataGridAszRoutine = $("#grid_out_asz_riser_inspection_history_routine").dxDataGrid({
            dataSource: asz_history_list_routine,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.actual_inspection_date_display",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Thickness Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Thickness<br>Status</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_status_thickness_asz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_status_visual_asz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Report",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Report</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const inspData = options.data;
                    let repair_list = '';
                    $.ajax({
                        type: "POST",
                        url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_pipeline,
                            "Content-Type": "application/json"
                        },
                        data: JSON.stringify({
                                "query": [
                                    {
                                        "id_report": "==" + inspData.fieldData.id_report,
                                        "equip_type": "==outgoing_riser",
                                        "equip_sub_type": "==asz"
                                    }
                                ]
                            }),
                        async: false,
                        success: function (data) {
                            console.log('repair_list:', data.response.data);
                            repair_list = data.response.data;
                        },
                        error: function (error) {
                            console.log(error);
                            console.log(error.responseJSON.messages[0].code);
                            if(error.responseJSON.messages[0].code == 401) {
                                // no record match
                            } else {
                                get_token_pipeline();
                                _token_pipeline = $.cookie("_token_pipeline");
                            }
                        }
                    });
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(``)
                        .appendTo(container);

                    $('<div>').dxDataGrid({
                        dataSource: repair_list,
                        keyExpr: "fieldData.id_data",
                        paging: {
                            pageSize: 5
                        },
                        pager: {
                            showPageSizeSelector: true,
                            allowedPageSizes: [5, 10, 20],
                            showInfo: true
                        },
                        export: {
                            enabled: false
                        },
                        searchPanel: {
                            visible: false
                        },
                        filterRow: {
                            visible: false,
                        },
                        headerFilter: {
                            visible: false
                        },
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnAutoWidth: true,
                        columnChooser: {
                            enabled: false,
                            mode: "dragAndDrop"
                        },
                        focusedRowEnabled: true,
                        showRowLines: true,
                        wordWrapEnabled: true,
                        columns: [
                            {
                                caption: "Notification",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Notification</div>"));
                                },
                                dataField: "fieldData.notification",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "WO Number",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>WO Number</div>"));
                                },
                                dataField: "fieldData.SAP_order_no",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Integrity Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Integrity<br>Status</div>"));
                                },
                                dataField: "fieldData.integrity_status",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Main WorkCtr",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Main<br>WorkCtr</div>"));
                                },
                                dataField: "fieldData.SAP_main_workctr",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Type",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Type</div>"));
                                },
                                dataField: "fieldData.repair_type",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Method",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Method</div>"));
                                },
                                dataField: "fieldData.repair_method",
                                alignment: "left",
                                width: '140'
                            },
                            {
                                caption: "Required End Date",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Required End Date</div>"));
                                },
                                dataField: "fieldData.required_end_date",
                                dataType: 'date',  
                                format: 'dd MMM yyyy',
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.status",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Inspection Report",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Inspection Report</div>"));
                                },
                                dataField: "fieldData.file",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file_name']) {
                                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file'] + '" download="' + options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                            {
                                caption: "Repair Report",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Report</div>"));
                                },
                                dataField: "fieldData.id_repair_report",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData.id_repair_report) {
                                        $('<a target="_blank" href="https://aims-muda.cpoc.com.my:444/repair-report/edit/' + options.data.fieldData.id_repair_report + '">Link</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                        ],
                        onCellPrepared: function (e) {
                            if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                                e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                            }
                        },
                        repaintChangesOnly: true,
                        showBorders: true,
                    }).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_status_thickness_asz") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_status_thickness_asz == "P1" ? "#FF0000" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P2" ? "#F69546" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P3" ? "#FFCC00" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P4" ? "#FFFF00" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P5" ? "#66FF33" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_status_visual_asz") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_status_visual_asz == "P1" ? "#FF0000" : e.data.fieldData.outgoing_riser_status_visual_asz == "P2" ? "#F69546" : e.data.fieldData.outgoing_riser_status_visual_asz == "P3" ? "#FFCC00" : e.data.fieldData.outgoing_riser_status_visual_asz == "P4" ? "#FFFF00" : e.data.fieldData.outgoing_riser_status_visual_asz == "P5" ? "#66FF33" : e.data.fieldData.outgoing_riser_status_visual_asz == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');

        const dataGridAszOther = $("#grid_out_asz_riser_inspection_history_other").dxDataGrid({
            dataSource: asz_history_list_other,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.actual_inspection_date_display",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Thickness Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Thickness<br>Status</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_status_thickness_asz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_status_visual_asz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Report",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Report</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const inspData = options.data;
                    let repair_list = '';
                    $.ajax({
                        type: "POST",
                        url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_pipeline,
                            "Content-Type": "application/json"
                        },
                        data: JSON.stringify({
                                "query": [
                                    {
                                        "id_report": "==" + inspData.fieldData.id_report,
                                        "equip_type": "==outgoing_riser",
                                        "equip_sub_type": "==asz"
                                    }
                                ]
                            }),
                        async: false,
                        success: function (data) {
                            console.log('repair_list:', data.response.data);
                            repair_list = data.response.data;
                        },
                        error: function (error) {
                            console.log(error);
                            console.log(error.responseJSON.messages[0].code);
                            if(error.responseJSON.messages[0].code == 401) {
                                // no record match
                            } else {
                                get_token_pipeline();
                                _token_pipeline = $.cookie("_token_pipeline");
                            }
                        }
                    });
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(``)
                        .appendTo(container);

                    $('<div>').dxDataGrid({
                        dataSource: repair_list,
                        keyExpr: "fieldData.id_data",
                        paging: {
                            pageSize: 5
                        },
                        pager: {
                            showPageSizeSelector: true,
                            allowedPageSizes: [5, 10, 20],
                            showInfo: true
                        },
                        export: {
                            enabled: false
                        },
                        searchPanel: {
                            visible: false
                        },
                        filterRow: {
                            visible: false,
                        },
                        headerFilter: {
                            visible: false
                        },
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnAutoWidth: true,
                        columnChooser: {
                            enabled: false,
                            mode: "dragAndDrop"
                        },
                        focusedRowEnabled: true,
                        showRowLines: true,
                        wordWrapEnabled: true,
                        columns: [
                            {
                                caption: "Notification",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Notification</div>"));
                                },
                                dataField: "fieldData.notification",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "WO Number",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>WO Number</div>"));
                                },
                                dataField: "fieldData.SAP_order_no",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Integrity Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Integrity<br>Status</div>"));
                                },
                                dataField: "fieldData.integrity_status",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Main WorkCtr",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Main<br>WorkCtr</div>"));
                                },
                                dataField: "fieldData.SAP_main_workctr",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Type",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Type</div>"));
                                },
                                dataField: "fieldData.repair_type",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Method",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Method</div>"));
                                },
                                dataField: "fieldData.repair_method",
                                alignment: "left",
                                width: '140'
                            },
                            {
                                caption: "Required End Date",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Required End Date</div>"));
                                },
                                dataField: "fieldData.required_end_date",
                                dataType: 'date',  
                                format: 'dd MMM yyyy',
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.status",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Inspection Report",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Inspection Report</div>"));
                                },
                                dataField: "fieldData.file",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file_name']) {
                                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file'] + '" download="' + options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                            {
                                caption: "Repair Report",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Report</div>"));
                                },
                                dataField: "fieldData.id_repair_report",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData.id_repair_report) {
                                        $('<a target="_blank" href="https://aims-muda.cpoc.com.my:444/repair-report/edit/' + options.data.fieldData.id_repair_report + '">Link</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                        ],
                        onCellPrepared: function (e) {
                            if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                                e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                            }
                        },
                        repaintChangesOnly: true,
                        showBorders: true,
                    }).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_status_thickness_asz") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_status_thickness_asz == "P1" ? "#FF0000" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P2" ? "#F69546" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P3" ? "#FFCC00" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P4" ? "#FFFF00" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P5" ? "#66FF33" : e.data.fieldData.outgoing_riser_status_thickness_asz == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_status_visual_asz") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_status_visual_asz == "P1" ? "#FF0000" : e.data.fieldData.outgoing_riser_status_visual_asz == "P2" ? "#F69546" : e.data.fieldData.outgoing_riser_status_visual_asz == "P3" ? "#FFCC00" : e.data.fieldData.outgoing_riser_status_visual_asz == "P4" ? "#FFFF00" : e.data.fieldData.outgoing_riser_status_visual_asz == "P5" ? "#66FF33" : e.data.fieldData.outgoing_riser_status_visual_asz == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');

        const dataGridBsz = $("#grid_out_bsz_riser_inspection_history").dxDataGrid({
            dataSource: bsz_history_list,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.actual_inspection_date_display",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.outgoing_riser_status_visual_bsz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Report",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Report</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const inspData = options.data;
                    let repair_list = '';
                    $.ajax({
                        type: "POST",
                        url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_pipeline,
                            "Content-Type": "application/json"
                        },
                        data: JSON.stringify({
                                "query": [
                                    {
                                        "id_report": "==" + inspData.fieldData.id_report,
                                        "equip_type": "==outgoing_riser",
                                        "equip_sub_type": "==bsz"
                                    }
                                ]
                            }),
                        async: false,
                        success: function (data) {
                            console.log('repair_list:', data.response.data);
                            repair_list = data.response.data;
                        },
                        error: function (error) {
                            console.log(error);
                            console.log(error.responseJSON.messages[0].code);
                            if(error.responseJSON.messages[0].code == 401) {
                                // no record match
                            } else {
                                get_token_pipeline();
                                _token_pipeline = $.cookie("_token_pipeline");
                            }
                        }
                    });
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(``)
                        .appendTo(container);

                    $('<div>').dxDataGrid({
                        dataSource: repair_list,
                        keyExpr: "fieldData.id_data",
                        paging: {
                            pageSize: 5
                        },
                        pager: {
                            showPageSizeSelector: true,
                            allowedPageSizes: [5, 10, 20],
                            showInfo: true
                        },
                        export: {
                            enabled: false
                        },
                        searchPanel: {
                            visible: false
                        },
                        filterRow: {
                            visible: false,
                        },
                        headerFilter: {
                            visible: false
                        },
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnAutoWidth: true,
                        columnChooser: {
                            enabled: false,
                            mode: "dragAndDrop"
                        },
                        focusedRowEnabled: true,
                        showRowLines: true,
                        wordWrapEnabled: true,
                        columns: [
                            {
                                caption: "Notification",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Notification</div>"));
                                },
                                dataField: "fieldData.notification",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "WO Number",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>WO Number</div>"));
                                },
                                dataField: "fieldData.SAP_order_no",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Integrity Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Integrity<br>Status</div>"));
                                },
                                dataField: "fieldData.integrity_status",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Main WorkCtr",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Main<br>WorkCtr</div>"));
                                },
                                dataField: "fieldData.SAP_main_workctr",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Type",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Type</div>"));
                                },
                                dataField: "fieldData.repair_type",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Method",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Method</div>"));
                                },
                                dataField: "fieldData.repair_method",
                                alignment: "left",
                                width: '140'
                            },
                            {
                                caption: "Required End Date",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Required End Date</div>"));
                                },
                                dataField: "fieldData.required_end_date",
                                dataType: 'date',  
                                format: 'dd MMM yyyy',
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.status",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Inspection Report",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Inspection Report</div>"));
                                },
                                dataField: "fieldData.file",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file_name']) {
                                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file'] + '" download="' + options.data.fieldData['outgoing_riser_inspection_document_for_SAP::file_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                            {
                                caption: "Repair Report",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Report</div>"));
                                },
                                dataField: "fieldData.id_repair_report",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData.id_repair_report) {
                                        $('<a target="_blank" href="https://aims-muda.cpoc.com.my:444/repair-report/edit/' + options.data.fieldData.id_repair_report + '">Link</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                        ],
                        onCellPrepared: function (e) {
                            if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                                e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                            }
                        },
                        repaintChangesOnly: true,
                        showBorders: true,
                    }).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.outgoing_riser_status_visual_bsz") {
                    e.cellElement.css("background-color", e.data.fieldData.outgoing_riser_status_visual_bsz == "P1" ? "#FF0000" : e.data.fieldData.outgoing_riser_status_visual_bsz == "P2" ? "#F69546" : e.data.fieldData.outgoing_riser_status_visual_bsz == "P3" ? "#FFCC00" : e.data.fieldData.outgoing_riser_status_visual_bsz == "P4" ? "#FFFF00" : e.data.fieldData.outgoing_riser_status_visual_bsz == "P5" ? "#66FF33" : e.data.fieldData.outgoing_riser_status_visual_bsz == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');
        let dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/outgoing_riser_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                }
            }
        });

        const dataGridReport = $("#grid_out_insp_report_history").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: false
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,

            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function get_in_riser_inspection_history(id_tag,tag_no) {
        console.log(id_tag);
        let asz_history_list_routine = '';
        let asz_history_list_other = '';
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/incoming_riser_asz_report/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log('report_data:', data.response.data);
                asz_history_list_routine = data.response.data.filter(r => r.fieldData.inspection_type == 'Routine');
                asz_history_list_other = data.response.data.filter(r => r.fieldData.inspection_type == 'Monitoring' || r.fieldData.inspection_type == 'Anomaly Monitoring' || r.fieldData.inspection_type == 'Adhoc');
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    // get_token_pipeline();
                    // _token_pipeline = $.cookie("_token_pipeline");
                    // get_in_riser_inspection_history(id_tag,tag_no);
                }
            }
        });

        let bsz_history_list = '';
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/incoming_riser_bsz_report/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log('report_data:', data.response.data);
                bsz_history_list = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    // get_token_pipeline();
                    // _token_pipeline = $.cookie("_token_pipeline");
                    // get_in_riser_inspection_history(id_tag,tag_no);
                }
            }
        });

        $('#in_riser_history_modal').modal('show');
        $('#history_tag_no_for_in_riser').html(tag_no);

        const dataGridAszRoutine = $("#grid_in_asz_riser_inspection_history_routine").dxDataGrid({
            dataSource: asz_history_list_routine,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.actual_inspection_date_display",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Thickness Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Thickness<br>Status</div>"));
                    },
                    dataField: "fieldData.incoming_riser_status_thickness_asz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.incoming_riser_status_visual_asz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Report",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Report</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const inspData = options.data;
                    let repair_list = '';
                    $.ajax({
                        type: "POST",
                        url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_pipeline,
                            "Content-Type": "application/json"
                        },
                        data: JSON.stringify({
                                "query": [
                                    {
                                        "id_report": "==" + inspData.fieldData.id_report,
                                        "equip_type": "==incoming_riser",
                                        "equip_sub_type": "==asz"
                                    }
                                ]
                            }),
                        async: false,
                        success: function (data) {
                            console.log('repair_list:', data.response.data);
                            repair_list = data.response.data;
                        },
                        error: function (error) {
                            console.log(error);
                            console.log(error.responseJSON.messages[0].code);
                            if(error.responseJSON.messages[0].code == 401) {
                                // no record match
                            } else {
                                get_token_pipeline();
                                _token_pipeline = $.cookie("_token_pipeline");
                            }
                        }
                    });
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(``)
                        .appendTo(container);

                    $('<div>').dxDataGrid({
                        dataSource: repair_list,
                        keyExpr: "fieldData.id_data",
                        paging: {
                            pageSize: 5
                        },
                        pager: {
                            showPageSizeSelector: true,
                            allowedPageSizes: [5, 10, 20],
                            showInfo: true
                        },
                        export: {
                            enabled: false
                        },
                        searchPanel: {
                            visible: false
                        },
                        filterRow: {
                            visible: false,
                        },
                        headerFilter: {
                            visible: false
                        },
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnAutoWidth: true,
                        columnChooser: {
                            enabled: false,
                            mode: "dragAndDrop"
                        },
                        focusedRowEnabled: true,
                        showRowLines: true,
                        wordWrapEnabled: true,
                        columns: [
                            {
                                caption: "Notification",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Notification</div>"));
                                },
                                dataField: "fieldData.notification",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "WO Number",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>WO Number</div>"));
                                },
                                dataField: "fieldData.SAP_order_no",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Integrity Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Integrity<br>Status</div>"));
                                },
                                dataField: "fieldData.integrity_status",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Main WorkCtr",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Main<br>WorkCtr</div>"));
                                },
                                dataField: "fieldData.SAP_main_workctr",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Type",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Type</div>"));
                                },
                                dataField: "fieldData.repair_type",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Method",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Method</div>"));
                                },
                                dataField: "fieldData.repair_method",
                                alignment: "left",
                                width: '140'
                            },
                            {
                                caption: "Required End Date",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Required End Date</div>"));
                                },
                                dataField: "fieldData.required_end_date",
                                dataType: 'date',  
                                format: 'dd MMM yyyy',
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.status",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Inspection Report",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Inspection Report</div>"));
                                },
                                dataField: "fieldData.file",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData['incoming_riser_inspection_document_for_SAP::file_name']) {
                                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['incoming_riser_inspection_document_for_SAP::file'] + '" download="' + options.data.fieldData['incoming_riser_inspection_document_for_SAP::file_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                            {
                                caption: "Repair Report",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Report</div>"));
                                },
                                dataField: "fieldData.id_repair_report",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData.id_repair_report) {
                                        $('<a target="_blank" href="https://aims-muda.cpoc.com.my:444/repair-report/edit/' + options.data.fieldData.id_repair_report + '">Link</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                        ],
                        onCellPrepared: function (e) {
                            if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                                e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                            }
                        },
                        repaintChangesOnly: true,
                        showBorders: true,
                    }).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_status_thickness_asz") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_status_thickness_asz == "P1" ? "#FF0000" : e.data.fieldData.incoming_riser_status_thickness_asz == "P2" ? "#F69546" : e.data.fieldData.incoming_riser_status_thickness_asz == "P3" ? "#FFCC00" : e.data.fieldData.incoming_riser_status_thickness_asz == "P4" ? "#FFFF00" : e.data.fieldData.incoming_riser_status_thickness_asz == "P5" ? "#66FF33" : e.data.fieldData.incoming_riser_status_thickness_asz == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_status_visual_asz") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_status_visual_asz == "P1" ? "#FF0000" : e.data.fieldData.incoming_riser_status_visual_asz == "P2" ? "#F69546" : e.data.fieldData.incoming_riser_status_visual_asz == "P3" ? "#FFCC00" : e.data.fieldData.incoming_riser_status_visual_asz == "P4" ? "#FFFF00" : e.data.fieldData.incoming_riser_status_visual_asz == "P5" ? "#66FF33" : e.data.fieldData.incoming_riser_status_visual_asz == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');

        const dataGridAszOther = $("#grid_in_asz_riser_inspection_history_other").dxDataGrid({
            dataSource: asz_history_list_other,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.actual_inspection_date_display",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Thickness Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Thickness<br>Status</div>"));
                    },
                    dataField: "fieldData.incoming_riser_status_thickness_asz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.incoming_riser_status_visual_asz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Report",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Report</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const inspData = options.data;
                    let repair_list = '';
                    $.ajax({
                        type: "POST",
                        url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_pipeline,
                            "Content-Type": "application/json"
                        },
                        data: JSON.stringify({
                                "query": [
                                    {
                                        "id_report": "==" + inspData.fieldData.id_report,
                                        "equip_type": "==incoming_riser",
                                        "equip_sub_type": "==asz"
                                    }
                                ]
                            }),
                        async: false,
                        success: function (data) {
                            console.log('repair_list:', data.response.data);
                            repair_list = data.response.data;
                        },
                        error: function (error) {
                            console.log(error);
                            console.log(error.responseJSON.messages[0].code);
                            if(error.responseJSON.messages[0].code == 401) {
                                // no record match
                            } else {
                                get_token_pipeline();
                                _token_pipeline = $.cookie("_token_pipeline");
                            }
                        }
                    });
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(``)
                        .appendTo(container);

                    $('<div>').dxDataGrid({
                        dataSource: repair_list,
                        keyExpr: "fieldData.id_data",
                        paging: {
                            pageSize: 5
                        },
                        pager: {
                            showPageSizeSelector: true,
                            allowedPageSizes: [5, 10, 20],
                            showInfo: true
                        },
                        export: {
                            enabled: false
                        },
                        searchPanel: {
                            visible: false
                        },
                        filterRow: {
                            visible: false,
                        },
                        headerFilter: {
                            visible: false
                        },
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnAutoWidth: true,
                        columnChooser: {
                            enabled: false,
                            mode: "dragAndDrop"
                        },
                        focusedRowEnabled: true,
                        showRowLines: true,
                        wordWrapEnabled: true,
                        columns: [
                            {
                                caption: "Notification",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Notification</div>"));
                                },
                                dataField: "fieldData.notification",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "WO Number",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>WO Number</div>"));
                                },
                                dataField: "fieldData.SAP_order_no",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Integrity Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Integrity<br>Status</div>"));
                                },
                                dataField: "fieldData.integrity_status",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Main WorkCtr",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Main<br>WorkCtr</div>"));
                                },
                                dataField: "fieldData.SAP_main_workctr",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Type",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Type</div>"));
                                },
                                dataField: "fieldData.repair_type",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Method",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Method</div>"));
                                },
                                dataField: "fieldData.repair_method",
                                alignment: "left",
                                width: '140'
                            },
                            {
                                caption: "Required End Date",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Required End Date</div>"));
                                },
                                dataField: "fieldData.required_end_date",
                                dataType: 'date',  
                                format: 'dd MMM yyyy',
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.status",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Inspection Report",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Inspection Report</div>"));
                                },
                                dataField: "fieldData.file",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData['incoming_riser_inspection_document_for_SAP::file_name']) {
                                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['incoming_riser_inspection_document_for_SAP::file'] + '" download="' + options.data.fieldData['incoming_riser_inspection_document_for_SAP::file_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                            {
                                caption: "Repair Report",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Report</div>"));
                                },
                                dataField: "fieldData.id_repair_report",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData.id_repair_report) {
                                        $('<a target="_blank" href="https://aims-muda.cpoc.com.my:444/repair-report/edit/' + options.data.fieldData.id_repair_report + '">Link</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                        ],
                        onCellPrepared: function (e) {
                            if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                                e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                            }
                        },
                        repaintChangesOnly: true,
                        showBorders: true,
                    }).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_status_thickness_asz") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_status_thickness_asz == "P1" ? "#FF0000" : e.data.fieldData.incoming_riser_status_thickness_asz == "P2" ? "#F69546" : e.data.fieldData.incoming_riser_status_thickness_asz == "P3" ? "#FFCC00" : e.data.fieldData.incoming_riser_status_thickness_asz == "P4" ? "#FFFF00" : e.data.fieldData.incoming_riser_status_thickness_asz == "P5" ? "#66FF33" : e.data.fieldData.incoming_riser_status_thickness_asz == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_status_visual_asz") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_status_visual_asz == "P1" ? "#FF0000" : e.data.fieldData.incoming_riser_status_visual_asz == "P2" ? "#F69546" : e.data.fieldData.incoming_riser_status_visual_asz == "P3" ? "#FFCC00" : e.data.fieldData.incoming_riser_status_visual_asz == "P4" ? "#FFFF00" : e.data.fieldData.incoming_riser_status_visual_asz == "P5" ? "#66FF33" : e.data.fieldData.incoming_riser_status_visual_asz == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');

        const dataGridBsz = $("#grid_in_bsz_riser_inspection_history").dxDataGrid({
            dataSource: bsz_history_list,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.actual_inspection_date_display",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.incoming_riser_status_visual_bsz",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const inspData = options.data;
                    let repair_list = '';
                    $.ajax({
                        type: "POST",
                        url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_pipeline,
                            "Content-Type": "application/json"
                        },
                        data: JSON.stringify({
                                "query": [
                                    {
                                        "id_report": "==" + inspData.fieldData.id_report,
                                        "equip_type": "==incoming_riser",
                                        "equip_sub_type": "==bsz"
                                    }
                                ]
                            }),
                        async: false,
                        success: function (data) {
                            console.log('repair_list:', data.response.data);
                            repair_list = data.response.data;
                        },
                        error: function (error) {
                            console.log(error);
                            console.log(error.responseJSON.messages[0].code);
                            if(error.responseJSON.messages[0].code == 401) {
                                // no record match
                            } else {
                                get_token_pipeline();
                                _token_pipeline = $.cookie("_token_pipeline");
                            }
                        }
                    });
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(``)
                        .appendTo(container);

                    $('<div>').dxDataGrid({
                        dataSource: repair_list,
                        keyExpr: "fieldData.id_data",
                        paging: {
                            pageSize: 5
                        },
                        pager: {
                            showPageSizeSelector: true,
                            allowedPageSizes: [5, 10, 20],
                            showInfo: true
                        },
                        export: {
                            enabled: false
                        },
                        searchPanel: {
                            visible: false
                        },
                        filterRow: {
                            visible: false,
                        },
                        headerFilter: {
                            visible: false
                        },
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnAutoWidth: true,
                        columnChooser: {
                            enabled: false,
                            mode: "dragAndDrop"
                        },
                        focusedRowEnabled: true,
                        showRowLines: true,
                        wordWrapEnabled: true,
                        columns: [
                            {
                                caption: "Notification",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Notification</div>"));
                                },
                                dataField: "fieldData.notification",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "WO Number",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>WO Number</div>"));
                                },
                                dataField: "fieldData.SAP_order_no",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Integrity Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Integrity<br>Status</div>"));
                                },
                                dataField: "fieldData.integrity_status",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Main WorkCtr",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Main<br>WorkCtr</div>"));
                                },
                                dataField: "fieldData.SAP_main_workctr",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Type",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Type</div>"));
                                },
                                dataField: "fieldData.repair_type",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Method",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Method</div>"));
                                },
                                dataField: "fieldData.repair_method",
                                alignment: "left",
                                width: '140'
                            },
                            {
                                caption: "Required End Date",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Required End Date</div>"));
                                },
                                dataField: "fieldData.required_end_date",
                                dataType: 'date',  
                                format: 'dd MMM yyyy',
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.status",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "File",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>File</div>"));
                                },
                                dataField: "fieldData.file",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData['incoming_riser_inspection_document_for_SAP::file_name']) {
                                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['incoming_riser_inspection_document_for_SAP::file'] + '" download="' + options.data.fieldData['incoming_riser_inspection_document_for_SAP::file_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                            {
                                caption: "Repair Report",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Report</div>"));
                                },
                                dataField: "fieldData.id_repair_report",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData.id_repair_report) {
                                        $('<a target="_blank" href="https://aims-muda.cpoc.com.my:444/repair-report/edit/' + options.data.fieldData.id_repair_report + '">Link</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                        ],
                        onCellPrepared: function (e) {
                            if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                                e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                            }
                        },
                        repaintChangesOnly: true,
                        showBorders: true,
                    }).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.incoming_riser_status_visual_bsz") {
                    e.cellElement.css("background-color", e.data.fieldData.incoming_riser_status_visual_bsz == "P1" ? "#FF0000" : e.data.fieldData.incoming_riser_status_visual_bsz == "P2" ? "#F69546" : e.data.fieldData.incoming_riser_status_visual_bsz == "P3" ? "#FFCC00" : e.data.fieldData.incoming_riser_status_visual_bsz == "P4" ? "#FFFF00" : e.data.fieldData.incoming_riser_status_visual_bsz == "P5" ? "#66FF33" : e.data.fieldData.incoming_riser_status_visual_bsz == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');
        let dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/layouts/incoming_riser_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_pipeline,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_pipeline();
                    _token_pipeline = $.cookie("_token_pipeline");
                }
            }
        });

        const dataGridReport = $("#grid_in_insp_report_history").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: false
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,

            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    
 
</script>
<style>
    #main {
        position: relative;
    }
    .pipeline-line,
    .in-riser-line,
    .out-riser-line {
        cursor: pointer;
        -webkit-user-select: none; /* Safari */
        -ms-user-select: none; /* IE 10 and IE 11 */
        user-select: none; /* Standard syntax */
    }
    path:hover {
        stroke-width: 6px;
        stroke-linejoin: round; 
    }
    .phase_6, .phase_7 {
        display: none;
    }
</style>