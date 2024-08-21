@section('title','Dashboard')
<div class="br-mainpanel mt-0 w-100 mx-auto">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
      <div class="row row-sm mg-t-20">
          <div class="col-8">
          <div class="card pd-0 bd-0 shadow-base">
              <div class="pd-x-30 pd-t-30 pd-b-15">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Network Performance</h6>
                    <p class="mg-b-0">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                  </div>
                  <div class="tx-13">
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-purple mg-r-10"></span> TCP Reset Packets</p>
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-pink mg-r-10"></span> TCP FIN Packets</p>
                  </div>
                </div><!-- d-flex -->
              </div>
              <div class="pd-x-15 pd-b-15">
                <div id="ch1" class="br-chartist br-chartist-2 ht-200 ht-sm-300"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="96.80803571428572" x2="96.80803571428572" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="153.61607142857144" x2="153.61607142857144" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="210.42410714285714" x2="210.42410714285714" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="267.2321428571429" x2="267.2321428571429" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="324.04017857142856" x2="324.04017857142856" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="380.8482142857143" x2="380.8482142857143" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line x1="437.65625" x2="437.65625" y1="15" y2="270" class="ct-grid ct-horizontal"></line><line y1="270" y2="270" x1="40" x2="437.65625" class="ct-grid ct-vertical"></line><line y1="227.5" y2="227.5" x1="40" x2="437.65625" class="ct-grid ct-vertical"></line><line y1="185" y2="185" x1="40" x2="437.65625" class="ct-grid ct-vertical"></line><line y1="142.5" y2="142.5" x1="40" x2="437.65625" class="ct-grid ct-vertical"></line><line y1="100" y2="100" x1="40" x2="437.65625" class="ct-grid ct-vertical"></line><line y1="57.5" y2="57.5" x1="40" x2="437.65625" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="40" x2="437.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,270L40,227.5C58.936,216.167,77.872,193.5,96.808,193.5C115.744,193.5,134.68,210.5,153.616,210.5C172.552,210.5,191.488,202,210.424,202C229.36,202,248.296,220.7,267.232,227.5C286.168,234.3,305.104,244.5,324.04,244.5C342.976,244.5,361.912,227.5,380.848,227.5C399.784,227.5,418.72,233.167,437.656,236L437.656,270Z" class="ct-area"></path><path d="M40,227.5C58.936,216.167,77.872,193.5,96.808,193.5C115.744,193.5,134.68,210.5,153.616,210.5C172.552,210.5,191.488,202,210.424,202C229.36,202,248.296,220.7,267.232,227.5C286.168,234.3,305.104,244.5,324.04,244.5C342.976,244.5,361.912,227.5,380.848,227.5C399.784,227.5,418.72,233.167,437.656,236" class="ct-line"></path><line x1="40" y1="227.5" x2="40.01" y2="227.5" class="ct-point" ct:value="5"></line><line x1="96.80803571428572" y1="193.5" x2="96.81803571428573" y2="193.5" class="ct-point" ct:value="9"></line><line x1="153.61607142857144" y1="210.5" x2="153.62607142857144" y2="210.5" class="ct-point" ct:value="7"></line><line x1="210.42410714285714" y1="202" x2="210.43410714285713" y2="202" class="ct-point" ct:value="8"></line><line x1="267.2321428571429" y1="227.5" x2="267.2421428571429" y2="227.5" class="ct-point" ct:value="5"></line><line x1="324.04017857142856" y1="244.5" x2="324.05017857142855" y2="244.5" class="ct-point" ct:value="3"></line><line x1="380.8482142857143" y1="227.5" x2="380.85821428571427" y2="227.5" class="ct-point" ct:value="5"></line><line x1="437.65625" y1="236" x2="437.66625" y2="236" class="ct-point" ct:value="4"></line></g><g class="ct-series ct-series-b"><path d="M40,270L40,185C58.936,170.833,77.872,142.5,96.808,142.5C115.744,142.5,134.68,185,153.616,185C172.552,185,191.488,125.5,210.424,125.5C229.36,125.5,248.296,202,267.232,202C286.168,202,305.104,187.125,324.04,176.5C342.976,165.875,361.912,134,380.848,134C399.784,134,418.72,168,437.656,185L437.656,270Z" class="ct-area"></path><path d="M40,185C58.936,170.833,77.872,142.5,96.808,142.5C115.744,142.5,134.68,185,153.616,185C172.552,185,191.488,125.5,210.424,125.5C229.36,125.5,248.296,202,267.232,202C286.168,202,305.104,187.125,324.04,176.5C342.976,165.875,361.912,134,380.848,134C399.784,134,418.72,168,437.656,185" class="ct-line"></path><line x1="40" y1="185" x2="40.01" y2="185" class="ct-point" ct:value="10"></line><line x1="96.80803571428572" y1="142.5" x2="96.81803571428573" y2="142.5" class="ct-point" ct:value="15"></line><line x1="153.61607142857144" y1="185" x2="153.62607142857144" y2="185" class="ct-point" ct:value="10"></line><line x1="210.42410714285714" y1="125.5" x2="210.43410714285713" y2="125.5" class="ct-point" ct:value="17"></line><line x1="267.2321428571429" y1="202" x2="267.2421428571429" y2="202" class="ct-point" ct:value="8"></line><line x1="324.04017857142856" y1="176.5" x2="324.05017857142855" y2="176.5" class="ct-point" ct:value="11"></line><line x1="380.8482142857143" y1="134" x2="380.85821428571427" y2="134" class="ct-point" ct:value="16"></line><line x1="437.65625" y1="185" x2="437.66625" y2="185" class="ct-point" ct:value="10"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="275" width="56.808035714285715" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 57px; height: 20px;">1</span></foreignObject><foreignObject style="overflow: visible;" x="96.80803571428572" y="275" width="56.808035714285715" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 57px; height: 20px;">2</span></foreignObject><foreignObject style="overflow: visible;" x="153.61607142857144" y="275" width="56.80803571428571" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 57px; height: 20px;">3</span></foreignObject><foreignObject style="overflow: visible;" x="210.42410714285714" y="275" width="56.80803571428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 57px; height: 20px;">4</span></foreignObject><foreignObject style="overflow: visible;" x="267.2321428571429" y="275" width="56.808035714285694" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 57px; height: 20px;">5</span></foreignObject><foreignObject style="overflow: visible;" x="324.04017857142856" y="275" width="56.80803571428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 57px; height: 20px;">6</span></foreignObject><foreignObject style="overflow: visible;" x="380.8482142857143" y="275" width="56.80803571428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 57px; height: 20px;">7</span></foreignObject><foreignObject style="overflow: visible;" x="437.65625" y="275" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">8</span></foreignObject><foreignObject style="overflow: visible;" y="227.5" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="185" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">5</span></foreignObject><foreignObject style="overflow: visible;" y="142.5" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="100" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">15</span></foreignObject><foreignObject style="overflow: visible;" y="57.5" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="0" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">25</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">30</span></foreignObject></g></svg></div>
              </div>
            </div>
          </div><!-- col-9 -->
          <div class="col-4">
            <div class="card bd-0 shadow-base pd-30" style="height:400px;">
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Server Status</h6>
              <p class="mg-b-25">Summary of the status of your server.</p>

              <label class="tx-12 tx-gray-600 mg-b-10">CPU Usage (40.05 - 32 cpus)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Memory Usage (32.2%)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-teal wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Disk Usage (82.2%)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-danger wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Databases (63/100)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Domains (30/50)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-info wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Email Account (13/50)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-purple wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="mg-t-20 tx-13">
                <a href="" class="tx-gray-600 hover-info">Generate Report</a>
                <a href="" class="tx-gray-600 hover-info bd-l mg-l-10 pd-l-10">Print Report</a>
              </div>
            </div><!-- card -->
</div>
<div class="card p-5 mx-auto mt-5" style="width:98.5%;">
  <h4 class="tx-black pt-5">Overall Details</h4>
        <div class="row row-sm mt-5">
          <div class="col-sm-6 col-xl-3 mb-4">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-user tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">No. of Students</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  <!-- <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span> -->
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class=" fa fa-graduation-cap tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">No. of Teachers</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32,929</p>
                  <!-- <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span> -->
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">No. of staff</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                  <!-- <span class="tx-11 tx-roboto tx-white-6">23% average duration</span> -->
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">No. of Users</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p>
                  <!-- <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span> -->
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3">
            <div class=" bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-book tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">No. of Subjects</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  <!-- <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span> -->
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-university tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">No. of Classes</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  <!-- <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span> -->
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-universal-access tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">No. of Sections</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  <!-- <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span> -->
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-map-marker tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">No. of Branches</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  <!-- <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span> -->
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          
        </div><!-- row -->
                </div>
                </div>
                <div style="width:100%;backgroundColor:none;">
</div>
